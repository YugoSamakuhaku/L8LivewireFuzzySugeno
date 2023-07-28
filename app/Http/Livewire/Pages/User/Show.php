<?php

namespace App\Http\Livewire\Pages\User;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.pages.user.show')->extends('layouts.app')->section('wrapper');
    }
}
