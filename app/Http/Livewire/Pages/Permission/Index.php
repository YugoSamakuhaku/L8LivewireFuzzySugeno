<?php

namespace App\Http\Livewire\Pages\Permission;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.permission.index')->extends('layouts.app')->section('wrapper');
    }
}