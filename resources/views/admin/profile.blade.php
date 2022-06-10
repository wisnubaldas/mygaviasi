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
                        <div class="row">
                            
                            <div class="col-6">
                                <form action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                        </div>
    
                                        <h5>Drop files here or click to upload company Galery</h5>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <form>
                            <div class="row">                                                            
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Company Name</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="phone-mask" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone-mask" placeholder="(+62) 000-0000-0000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                    <label class="form-check-label" for="formrow-customCheck">Check me out</label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                        
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