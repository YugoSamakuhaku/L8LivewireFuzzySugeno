<?php

namespace App\Http\Livewire\Pages\Sale;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.pages.sale.show')->extends('layouts.app')->section('wrapper');
    }
}