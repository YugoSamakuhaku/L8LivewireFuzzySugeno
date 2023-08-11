<?php

namespace App\Http\Livewire\Pages\Inggridient;

use Livewire\Component;
use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;
use App\Models\MasterInggridient;
use Illuminate\Support\Facades\DB;

class Stockreport extends Component
{
    public $date_start;
    public $date_end;

    public $stock_report = [];

    public function mount()
    {
        $this->date_start = Carbon::create('2021', '07', '01');
        $this->date_end = Carbon::create('2022', '06', '31');

        $period = CarbonPeriod::create($this->date_start, $this->date_end);

        $master_inggridient = MasterInggridient::get();

        foreach ($master_inggridient as $key => $value) {
            foreach ($period as $date) {
                $this->stock_report[$value['id_inggridient']][$date->format('Y')][$date->format('n')] = [
                    'month' => $date->format('n'),
                    'year' => $date->format('Y'),
                    'id_inggridient' => $value['id_inggridient'],
                    'name_inggridient' => $value['name_inggridient'],
                    'unit_inggridient' => $value['unit_inggridient'],
                    'begin_stock' => 0,
                    'purchase' => 0,
                    'stock_in' => 0,
                    'stock_out' => 0,
                    'last_stock' => 0,
                ];
            }
        }

        // Data Query Pembelian Bahan Baku Setiap Bulan
        $stock_in = DB::table('purchases')
            ->join('detail_purchases', 'purchases.id_purchase', '=', 'detail_purchases.id_purchase')
            ->join('master_inggridients', 'master_inggridients.id_inggridient', '=', 'detail_purchases.id_inggridient')
            ->select(DB::raw('purchases.date_purchase, MONTH(purchases.date_purchase) AS MONTH, YEAR(purchases.date_purchase) AS YEAR, master_inggridients.id_inggridient, detail_purchases.qty'))
            ->whereDate('purchases.date_purchase', '>=', $this->date_start->format('Y-m-d'))
            ->whereDate('purchases.date_purchase', '<=', $this->date_end->format('Y-m-d'))
            ->groupByRaw('master_inggridients.id_inggridient, MONTH(purchases.date_purchase), YEAR(purchases.date_purchase)')
            ->get();

        foreach ($stock_in as $key => $value) {
            $this->stock_report[$value->id_inggridient][$value->YEAR][$value->MONTH]['purchase'] += $value->qty;
        }


        // Data Query Penjualan Bahan Baku Setiap Bulan
        $stock_out = DB::table('request_sales')
            ->join('detail_request_sales', 'request_sales.id_sale', '=', 'detail_request_sales.id_sale')
            ->join('product_inggridients', 'product_inggridients.id_product', '=', 'detail_request_sales.id_product')
            ->select(DB::raw(' request_sales.date_sale ,MONTH(request_sales.date_sale) AS MONTH, YEAR(request_sales.date_sale) AS YEAR, product_inggridients.id_product , product_inggridients.id_inggridient, product_inggridients.usage_amount, SUM(detail_request_sales.qty) * product_inggridients.usage_amount AS total_usage_amount'))
            ->whereDate('request_sales.date_sale', '>=', $this->date_start->format('Y-m-d'))
            ->whereDate('request_sales.date_sale', '<=', $this->date_end->format('Y-m-d'))
            ->groupByRaw('product_inggridients.id_product, product_inggridients.id_inggridient, MONTH(request_sales.date_sale), YEAR(request_sales.date_sale)')
            ->get();

        foreach ($stock_out as $key => $value) {
            $this->stock_report[$value->id_inggridient][$value->YEAR][$value->MONTH]['stock_out'] += $value->total_usage_amount;
        }

        foreach ($period as $date) {
            foreach ($this->stock_report as $key => $value) {
                if (!isset($this->stock_report[$key][$date->format('Y')][$date->format('n') - 1]) ? true : false) {
                    $this->stock_report[$key][$date->format('Y')][$date->format('n')]['last_stock'] = $value[$date->format('Y')][$date->format('n')]['purchase'] - $value[$date->format('Y')][$date->format('n')]['stock_out'];
                }

                if (isset($this->stock_report[$key][$date->format('Y') - 1]) ? true : false and !isset($this->stock_report[$key][$date->format('Y')][$date->format('n') - 1]) ? true : false) {
                    $this->stock_report[$key][$date->format('Y')][$date->format('n')]['begin_stock'] = $value[$date->format('Y') - 1][array_key_last($value[$date->format('Y') - 1])]['last_stock'];

                    $this->stock_report[$key][$date->format('Y')][$date->format('n')]['stock_in'] = $value[$date->format('Y')][$date->format('n')]['purchase'] + $this->stock_report[$key][$date->format('Y')][$date->format('n')]['begin_stock'];
                    $this->stock_report[$key][$date->format('Y')][$date->format('n')]['last_stock'] = $value[$date->format('Y')][$date->format('n')]['stock_in'] - $value[$date->format('Y')][$date->format('n')]['stock_out'];
                }

                if (isset($this->stock_report[$key][$date->format('Y')][$date->format('n') - 1]) ? true : false) {
                    $this->stock_report[$key][$date->format('Y')][$date->format('n')]['begin_stock'] = $value[$date->format('Y')][$date->format('n') - 1]['last_stock'];

                    $this->stock_report[$key][$date->format('Y')][$date->format('n')]['stock_in'] = $value[$date->format('Y')][$date->format('n')]['purchase'] + $this->stock_report[$key][$date->format('Y')][$date->format('n')]['begin_stock'];
                    $this->stock_report[$key][$date->format('Y')][$date->format('n')]['last_stock'] = $value[$date->format('Y')][$date->format('n')]['stock_in'] - $value[$date->format('Y')][$date->format('n')]['stock_out'];
                }
            }
        }
        
    }

    public function render()
    {
        return view('livewire.pages.inggridient.stockreport')->extends('layouts.app')->section('wrapper');
    }
}
