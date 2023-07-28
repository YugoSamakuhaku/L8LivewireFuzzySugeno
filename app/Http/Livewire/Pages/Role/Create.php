<?php

namespace App\Http\Livewire\Pages\Role;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.pages.role.create')->extends('layouts.app')->section('wrapper');
    }
}
