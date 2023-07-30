<?php

namespace App\Http\Livewire\Pages\Supplier;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.supplier.index')->extends('layouts.app')->section('wrapper');
    }
}