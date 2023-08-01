<?php

namespace App\Http\Controllers;

use Gate;
use App\Models\Purchase;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use App\Http\Livewire\Pages\Purchase\Show;
use App\Http\Livewire\Pages\Purchase\Index;
use App\Http\Livewire\Pages\Purchase\Create;


class PurchaseController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('purchases_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return App::call(Index::class);
    }

    public function create()
    {
        abort_if(Gate::denies('purchases_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return App::call(Create::class);
    }

    public function show(Role $role)
    {
        abort_if(Gate::denies('purchases_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return App::call(Show::class)->with(compact('role'));
    }
}
