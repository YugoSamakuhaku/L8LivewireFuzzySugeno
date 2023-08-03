<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\MasterProduct;
use Livewire\Component;

class Show extends Component
{
    public $master_product;

    public function mount(MasterProduct $master_product): void
    {
        $this->master_product = MasterProduct::with('master_inggridients')->find($master_product)->first();
    }

    public function render()
    {
        return view('livewire.pages.product.show')->extends('layouts.app')->section('wrapper');
    }
}
