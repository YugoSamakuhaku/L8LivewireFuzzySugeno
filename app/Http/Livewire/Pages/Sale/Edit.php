<?php

namespace App\Http\Livewire\Pages\Sale;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.pages.sale.edit')->extends('layouts.app')->section('wrapper');
    }
}
