@section('title', 'Inggridient Stock Report')

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
                <div class="card">
                    <!-- ./card-header -->
                    <div class="card-body pt-4">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>ID INGGRIDIENT</th>
                                    <th>NAME INGGRIDIENT</th>
                                    <th>STOREHOUSE STOCK</th>
                                    <th>PURCHASE</th>
                                    <th>STOCK IN</th>
                                    <th>STOCK OUT</th>
                                    <th>LAST STOCK</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $period = \Carbon\CarbonPeriod::create($this->date_start, '1 month' , $this->date_end);
                                @endphp
                                @foreach ($period as $date)
                                @foreach($this->stock_report as $key => $value)
                                <tr>
                                    <td>{{ $date->format("F Y") }}</td>
                                    <td>{{ 'B-' . '' . str_pad('' . $this->stock_report[$key][$date->format("Y")][$date->format("n")]['id_inggridient'], 5, '0', STR_PAD_LEFT) }} </td>
                                    <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['name_inggridient'] }} ({{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['unit_inggridient'] }})</td>
                                    <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['begin_stock'] }}</td>
                                    <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['purchase'] }}</td>
                                    <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['stock_in'] }}</td>
                                    <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['stock_out'] }}</td>
                                    <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['last_stock'] }}</td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('includes.footer')
    </div>
    <!-- ./wrapper -->
</div>
@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
    $(function() {
        $("#datatable").DataTable({
            "columnDefs": [{
                    "visible": false
                    , "targets": 1
                }
                , {
                    "type": "date"
                    , "targets": 0
                }
            ]
            , "lengthMenu": [
                [10, 25, 50, -1]
                , [10, 25, 50, "All"]
            ]
            , "responsive": true
            , "lengthChange": true
            , "autoWidth": false
            , "buttons": ["csv", "excel", "print", "colvis"]
        }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    });

</script>
@endpush
