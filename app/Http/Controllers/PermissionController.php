<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use App\Http\Livewire\Pages\Permission\Index;

class PermissionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('permissions_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return App::call(Index::class);
    }
}
