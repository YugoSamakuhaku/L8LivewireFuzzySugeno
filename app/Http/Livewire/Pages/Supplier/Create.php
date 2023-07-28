<?php

namespace App\Http\Livewire\Pages\Supplier;

use App\Models\Supplier;
use Livewire\Component;

class Create extends Component
{
    public Supplier $supplier;

    public function mount(Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }

    public function render()
    {
        return view('livewire.pages.supplier.create')->extends('layouts.app')->section('wrapper');
    }

    public function submit(): void
    {
        $this->validate();

        $this->supplier->save();
    }

    protected function rules(): array
    {
        return [
            'supplier.name_supplier' => [
                'required',
            ],
            'supplier.phone_supplier' => [
                'required',
            ],
            'supplier.address_supplier' => [
                'required',
            ],
            'supplier.description_supplier' => [
                'required',
            ],
        ];
    }
}
