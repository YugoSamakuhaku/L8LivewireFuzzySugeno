<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\MasterInggridient;
use App\Models\MasterProduct;
use Livewire\Component;

class Create extends Component
{

    public $unit_product = '';
    public MasterProduct $master_product;

    public $keyInggridient = '';
    public $usage_amount = '';
    public array $productInggridient = [];

    public array $listsForInggridient = [];

    protected $listeners = ['add_inggridient', 'delete_inggridient'];

    public function mount(MasterProduct $master_product): void
    {
        $this->master_product = $master_product;
        $this->listsForInggridient();
    }

    public function render()
    {
        return view('livewire.pages.product.create')->extends('layouts.app')->section('wrapper');
    }

    protected function listsForInggridient(): void
    {
        $this->listsForInggridient['inggridients'] = MasterInggridient::get();
    }

    public function add_inggridient()
    {
        $this->validate([
            'keyInggridient' => 'required',
            'usage_amount' => 'required',
        ]);

        $find_master_inggridient = MasterInggridient::find($this->keyInggridient);

        $data_inggridient = [
            'id_inggridient' => $find_master_inggridient->id_inggridient,
            'name_inggridient' => $find_master_inggridient->name_inggridient,
            'usage_amount' => $this->usage_amount,
            'unit_inggridient' => $find_master_inggridient->unit_inggridient,
        ];

        $this->productInggridient[$data_inggridient['id_inggridient']] = $data_inggridient;
    }

    public function delete_inggridient($value)
    {
        unset($this->productInggridient[$value]);
    }

    public function submit(): void
    {
        $this->validate();

        $this->master_product->unit_product = $this->unit_product;

        $master_product = $this->master_product->save();
        
        foreach ($this->productInggridient as $key => $value) {
            $this->master_product->master_inggridients()->sync([$key, ['usage_amount' => $value['usage_amount']]]);
        }
    }

    protected function rules(): array
    {
        return [
            'master_product.name_product' => [
                'required',
            ],
            'master_product.price_product' => [
                'required',
                'numeric',
            ]
        ];
    }
}
