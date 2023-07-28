<?php

namespace App\Http\Livewire\Pages\Supplier;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.pages.supplier.show')->extends('layouts.app')->section('wrapper');
    }
}
