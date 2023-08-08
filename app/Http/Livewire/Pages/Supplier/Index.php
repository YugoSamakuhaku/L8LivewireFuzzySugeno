<?php

declare(strict_types=1);

namespace App\Http\Livewire\Pages\Supplier;

use Livewire\Component;

class Index extends Component
{
    // Melakukan scan tampilan component
    public function render()
    {
        // menampilkan halaman blade
        return view('livewire.pages.supplier.index')->extends('layouts.app')->section('wrapper');
    }
}
