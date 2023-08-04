<?php

declare(strict_types=1);

namespace App\Http\Livewire\Pages\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.index')->extends('layouts.app')->section('wrapper');
    }
}
