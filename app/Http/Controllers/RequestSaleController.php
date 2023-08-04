<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\RequestSale;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use App\Http\Livewire\Pages\Sale\Show;
use App\Http\Livewire\Pages\Sale\Index;
use App\Http\Livewire\Pages\Sale\Create;

class RequestSaleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('request_sales_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return App::call(Index::class);
    }

    public function create()
    {
        abort_if(Gate::denies('request_sales_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return App::call(Create::class);
    }

    public function show(RequestSale $request_sale)
    {
        abort_if(Gate::denies('request_sales_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return App::call(Show::class)->with(compact('request_sale'));
    }
}
