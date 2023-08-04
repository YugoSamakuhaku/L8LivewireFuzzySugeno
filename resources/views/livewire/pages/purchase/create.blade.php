@section('title', 'Create Data Purchase')
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
                                    <h3 class="card-title">Form Data Purchase</h3>
                                </div>
                                <!-- ./card-header -->
                                <div class="card-body pt-4">
                                    <form wire:submit.prevent="submit">
                                        <div class="form-group">
                                            <label for="keySupplier">Name Supplier</label>
                                            <div wire:ignore>
                                                <select id="keySupplier" class="select2bs4 form-control" name="keySupplier" wire:model.defer="keySupplier" required>
                                                    <option value="">Select your option</option>
                                                    @foreach ($this->listsForSupplier['suppliers'] as $value)
                                                        <option value="{{ $value['id_supplier'] }}">
                                                            {{ $value['name_supplier'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="qty_purchase_inggridient">Qty Inggridient</label>
                                            <input type="number" readonly class="form-control @error('qty_purchase_inggridient') is-invalid @enderror" id="qty_purchase_inggridient" placeholder="Qty Inggridient" wire:model.defer="qty_purchase_inggridient">
                                            @error('qty_purchase_inggridient')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="date_purchase">Date Purchase</label>
                                                <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                    <div class="input-group-prepend" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                        <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control disabled @error('date_purchase') is-invalid @enderror datetimepicker-input" id="date_purchase" data-target="#reservationdate" wire:model.defer="date_purchase" />
                                                    @error('date_purchase')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-large btn-success submit">Save</button>
                                            <a href="{{ route('purchase.index') }}" class="btn btn-large btn-secondary">Cancel</a>
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
                                    <h3 class="card-title">Add Inggridient to cart</h3>
                                </div>
                                <!-- ./card-header -->
                                <div class="card-body pt-4">
                                    <div class="form-group">
                                        <label for="keyInggridient">Name Inggridient</label>
                                        <div wire:ignore>
                                            <select id="keyInggridient" class="select2bs4 form-control" name="keyInggridient" wire:model.defer="keyInggridient" required>
                                                <option value="">Select your option</option>
                                                @foreach ($this->listsForInggridient['inggridients'] as $value)
                                                    <option value="{{ $value['id_inggridient'] }}">
                                                        {{ $value['name_inggridient'] }}</option>
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
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <label for="date_expired">Date Expired</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <div class="input-group-prepend" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                </div>

                                                <input type="text" class="form-control disabled @error('date_expired') is-invalid @enderror datetimepicker-input" id="date_expired" data-target="#reservationdate" wire:model.defer="date_expired" />

                                                @error('date_expired')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <a wire:click="add_inggridient" class="btn btn-large btn-primary">Add Inggridient to cart</a>
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
                                        <th>ID INGGRIDIENT</th>
                                        <th>NAME INGGRIDIENT</th>
                                        <th>PRICE INGGRIDIENT</th>
                                        <th>DATE EXPIRED</th>
                                        <th>QTY</th>
                                        <th>TOTAL</th>
                                        <th>ACTION</th>
                                    </thead>
                                </thead>
                                <tbody>
                                    @foreach ($purchase_inggridient as $key => $value)
                                        <tr>
                                            <td>{{ 'B-' . '' . str_pad('' . $value['id_inggridient'], 5, '0', STR_PAD_LEFT) }}</td>
                                            <td>{{ $value['name_inggridient'] }} ({{ $value['unit_inggridient'] }})</td>
                                            <td>{{ format_uang($value['price_inggridient']) }}</td>
                                            <td>{{ $value['date_expired'] }}</td>
                                            <td>{{ $value['qty'] }}</td>
                                            <td>{{ format_uang($value['total_price_inggridient']) }}</td>
                                            <td>
                                                <a wire:click="delete_inggridient({{ $value['id_inggridient'] }})" class="btn btn-sm btn-danger fas fa-trash-alt"> Delete</a>
                                            </td>
                                        </tr>
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
            $('#reservationdate').datetimepicker({
                format: 'DD/MM/YYYY',
            });

            $('#reservationdate').on("hide.datetimepicker", function(e) {
                console.log(e.date)
                @this.set('date_expired', moment(e.date).format('DD/MM/YYYY'));
            });

            $('#reservationdate1').datetimepicker({
                format: 'DD/MM/YYYY',
            });

            $('#reservationdate1').on("hide.datetimepicker", function(e) {
                console.log(e.date)
                @this.set('date_purchase', moment(e.date).format('DD/MM/YYYY'));
            });

            $('.select2bs4').select2({
                theme: 'bootstrap4',
                allowClear: !$('.select2bs4').attr('required')
            })

            $('#keyInggridient').on('change', function(e) {
                var data = $('#keyInggridient').select2("val");
                @this.set('keyInggridient', data);
            });

            $('#keySupplier').on('change', function(e) {
                var data = $('#keySupplier').select2("val");
                @this.set('keySupplier', data);
            });
        });
    </script>
@endpush
