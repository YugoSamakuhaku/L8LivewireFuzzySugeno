<?php

namespace App\Http\Livewire\Pages\Supplier;

use App\Models\Supplier;
use Livewire\Component;

class Show extends Component
{
    public Supplier $supplier;

    public function mount(Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }

    public function render()
    {
        return view('livewire.pages.supplier.show')->extends('layouts.app')->section('wrapper');
    }
}
