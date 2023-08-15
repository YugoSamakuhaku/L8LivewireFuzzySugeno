<?php

namespace App\Http\Livewire\Pages\StockReport;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Index extends Component
{
    public $date_start;
    public $date_end;

    public $keySubmit;
    public $load_datatable = false;

    public function render()
    {
        $this->dispatchBrowserEvent('destroy');
        $this->dispatchBrowserEvent('initSomething');
        
        return view('livewire.pages.stock-report.index')->extends('layouts.app')->section('wrapper');
    }

    public function submit()
    {
        $this->validate([
            'date_start' => 'required',
            'date_end' => 'required',
        ]);

        $this->dispatchBrowserEvent('destroy');
        $this->dispatchBrowserEvent('initSomething');

        $this->keySubmit = 1;
        $this->load_datatable = true;
    }
}
