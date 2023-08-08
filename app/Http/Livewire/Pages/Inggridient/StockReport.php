<?php

namespace App\Http\Livewire\Pages\Inggridient;

use Livewire\Component;

class StockReport extends Component
{
    public function render()
    {
        return view('livewire.pages.inggridient.stock-report')->extends('layouts.app')->section('wrapper');
    }
}
