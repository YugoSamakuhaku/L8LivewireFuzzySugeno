@section('title', 'Create Data Sale')
<div>
    <div>
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @livewire('components.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('includes.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include('includes.content-header')

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Form Data Sale</h3>
                                </div>
                                <!-- ./card-header -->
                                <div class="card-body pt-4">
                                    <form wire:submit.prevent="submit">
                                        <div class="form-group">
                                            <label for="qty_sale">Qty Product</label>
                                            <input type="number" readonly class="form-control @error('qty_sale') is-invalid @enderror" id="qty_sale" placeholder="Qty Product" wire:model.defer="qty_sale">
                                            @error('qty_sale')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="date_sale">Date Sale</label>
                                                <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                    <div class="input-group-prepend" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                        <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control disabled @error('date_sale') is-invalid @enderror datetimepicker-input" id="date_sale" data-target="#reservationdate" wire:model.defer="date_sale" />
                                                    @error('date_sale')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-large btn-success submit">Save</button>
                                            <a href="{{ route('sale.index') }}" class="btn btn-large btn-secondary">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add Product to cart</h3>
                                </div>
                                <!-- ./card-header -->
                                <div class="card-body pt-4">
                                    <div class="form-group">
                                        <label for="keyProduct">Name Product</label>
                                        <div wire:ignore>
                                            <select id="keyProduct" class="select2bs4 form-control" name="keyProduct" wire:model.defer="keyProduct" required>
                                                <option value="">Select your option</option>
                                                @foreach ($this->listsForProduct['master_products'] as $value)
                                                    <option value="{{ $value['id_product'] }}">{{ $value['name_product'] }} ({{ $value['unit_product'] }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Amount to Buy</label>
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" placeholder="Qty" wire:model.defer="qty">
                                        @error('qty')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a wire:click="add_product" class="btn btn-large btn-primary">Add Product to cart</a>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cart List</h3>
                        </div>
                        <div class="card-body pt-4">
                            <table class="table table-bordered">
                                <thead>
                                    <thead>
                                        <th>ID PRODUCT</th>
                                        <th>NAME PRODUCT</th>
                                        <th>PRICE PRODUCT</th>
                                        <th>QTY</th>
                                        <th>TOTAL</th>
                                        <th>ACTION</th>
                                    </thead>
                                </thead>
                                <tbody>
                                    @php
                                        $subtotal = 0;
                                    @endphp
                                    @foreach ($sale_product as $key => $value)
                                        @php
                                            $subtotal += $value['total_price_product'];
                                        @endphp
                                        <tr>
                                            <td>{{ 'P-' . '' . str_pad('' . $value['id_product'], 5, '0', STR_PAD_LEFT) }}</td>
                                            <td>{{ $value['name_product'] }}</td>
                                            <td>{{ format_uang($value['price_product']) }}</td>
                                            <td>{{ $value['qty'] }}</td>
                                            <td>{{ format_uang($value['total_price_product']) }} ({{ $value['unit_product'] }})</td>
                                            <td>
                                                <a wire:click="delete_product({{ $value['id_product'] }})" class="btn btn-sm btn-danger fas fa-trash-alt"> Delete</a>
                                            </td>
                                        </tr>
                                        @if ($loop->last)
                                            <tr>
                                                <td colspan="4"><strong>SUBTOTAL</strong></td>
                                                <td><strong>{{ format_uang($subtotal) }}</strong></td>
                                                <td></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('includes.footer')
        </div>
        <!-- ./wrapper -->
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#reservationdate1').datetimepicker({
                format: 'DD/MM/YYYY',
            });

            $('#reservationdate1').on("hide.datetimepicker", function(e) {
                console.log(e.date)
                @this.set('date_sale', moment(e.date).format('DD/MM/YYYY'));
            });

            $('.select2bs4').select2({
                theme: 'bootstrap4',
                allowClear: !$('.select2bs4').attr('required')
            })

            $('#keyProduct').on('change', function(e) {
                var data = $('#keyProduct').select2("val");
                @this.set('keyProduct', data);
            });
        });
    </script>
@endpush
