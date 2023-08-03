<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Pages\Dashboard\Index;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function index()
    {
        return App::call(Index::class);
    }
}
