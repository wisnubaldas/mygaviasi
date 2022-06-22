@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>AWB</th>
                                        <th>FLIGHT</th>
                                        <th>DATE</th>
                                        <th>KOLLY</th>
                                        <th>WEIGHT</th>
                                        <th>BTB</th>
                                        <th>SHIPPER</th>
                                        <th>REMARK</th>
                                        <th>FLAG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($track as $t)
                                    <tr>
                                        <th>{{$t->awb}}</th>
                                        <td>{{$t->flight}}</td>
                                        <td>{{$t->track_date}}</td>
                                        <td>{{$t->kolly}}</td>
                                        <td>{{$t->weight}}</td>
                                        <td>{{$t->btb}}</td>
                                        <td>{{$t->shipper}}</td>
                                        <td>{{$t->remarks}}</td>
                                        <td>{{$t->flag}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td rowspan="9">
                                            <br>
                                            {{ $track->links() }}
                                        </td>
                                    </tr>
                                  </tfoot>
                                
                            </table>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('layouts.footer')
    </div>
@endsection

@push('js')
<!-- form mask -->
@endpush

@push('css')

@endpush