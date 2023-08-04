<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Http\Livewire\Pages\Dashboard\Index;

class DashboardController extends Controller
{
    public function index()
    {
        return App::call(Index::class);
    }
}
