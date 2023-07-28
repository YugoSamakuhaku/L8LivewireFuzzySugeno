<?php

namespace App\Http\Livewire\Pages\Role;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.pages.role.edit')->extends('layouts.app')->section('wrapper');
    }
}
