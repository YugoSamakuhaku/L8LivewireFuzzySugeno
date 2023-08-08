<?php

declare(strict_types=1);

namespace App\Http\Livewire\DataTable;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class StockReportTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Collection
    {

        dd(DB::table('purchases')
            ->join('detail_purchases', 'purchases.id_purchase', '=', 'detail_purchases.id_purchase')
            ->join('master_inggridients', 'master_inggridients.id_inggridient', '=', 'detail_purchases.id_inggridient')
            ->select(DB::raw('MONTH(purchases.date_purchase) AS MONTH, YEAR(purchases.date_purchase) AS YEAR, master_inggridients.id_inggridient, master_inggridients.name_inggridient, master_inggridients.unit_inggridient, detail_purchases.qty'))
            ->groupByRaw('master_inggridients.name_inggridient, MONTH(purchases.date_purchase), YEAR(purchases.date_purchase)')
            ->get());

        return collect([
            ['id' => 1, 'name' => 'Name 1', 'price' => 1.58, 'created_at' => now(),],
            ['id' => 2, 'name' => 'Name 2', 'price' => 1.68, 'created_at' => now(),],
            ['id' => 3, 'name' => 'Name 3', 'price' => 1.78, 'created_at' => now(),],
            ['id' => 4, 'name' => 'Name 4', 'price' => 1.88, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('price')
            ->addColumn('created_at_formatted', fn ($entry) => Carbon::parse($entry->created_at)->format('d/m/Y'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |

    */
    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Name', 'name')
                ->searchable()
                ->makeInputText('name')
                ->sortable(),

            Column::make('Price', 'price')
                ->sortable()
                ->makeInputRange('price', '.', ''),

            Column::make('Created', 'created_at_formatted')
                ->makeInputDatePicker('created_at'),
        ];
    }
}
