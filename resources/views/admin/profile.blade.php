@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Welcome Back! {{auth()->user()->name}}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        
                    </div>
                </div>
                <!-- end page title -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('layouts.footer')
    </div>
@endsection

@push('js')
<!-- form mask -->
<script src="/assets/libs/imask/imask.min.js"></script>
<script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
<script>
    var phoneMask = IMask(document.getElementById('phone-mask'), {
        mask: '(+{62}) 000-0000-0000'
    });
    phoneMask.on("complete", function () {
        console.log(phoneMask.value)
        console.log(phoneMask.unmaskedValue)
    });

</script>
<!-- form mask init -->
{{-- <script src="/assets/js/pages/form-mask.init.js"></script> --}}
@endpush

@push('css')
<link href="/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
@endpush