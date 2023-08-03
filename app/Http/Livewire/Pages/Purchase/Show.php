<?php

namespace App\Http\Livewire\Pages\Purchase;

use App\Models\Purchase;
use Livewire\Component;

class Show extends Component
{
    public Purchase $purchase;

    public function mount(Purchase $purchase): void
    {
        $this->purchase = $purchase;
    }

    public function render()
    {
        return view('livewire.pages.purchase.show')->extends('layouts.app')->section('wrapper');
    }
}
