<?php

declare(strict_types=1);

namespace App\Http\Livewire\Pages\Purchase;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.pages.purchase.create')->extends('layouts.app')->section('wrapper');
    }
}
