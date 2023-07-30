<?php

namespace App\Http\Livewire\Pages\Sale;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.pages.sale.create')->extends('layouts.app')->section('wrapper');
    }
}
