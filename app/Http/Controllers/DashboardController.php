<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Livewire\Pages\Dashboard\Index;

class DashboardController extends Controller
{
    public function index()
    {
        return App::call(Index::class);
    }
}
