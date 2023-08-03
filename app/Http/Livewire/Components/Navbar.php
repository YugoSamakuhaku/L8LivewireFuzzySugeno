<?php

namespace App\Http\Livewire\Components;

use App\Traits\LogoutTrait;
use Livewire\Component;

class Navbar extends Component
{
    use LogoutTrait;

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
