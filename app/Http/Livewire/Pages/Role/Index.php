<?php

namespace App\Http\Livewire\Pages\Role;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.role.index')->extends('layouts.app')->section('wrapper');
    }
}
