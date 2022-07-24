@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">
                                <a href="/tracking_sample.xlsx">
                                Download Sample Upload Excel !
                                </a>
                            </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                    <li class="breadcrumb-item active">Tracking</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <form action="/{{URI['admin']}}/upload_data" id="upload-form" method="post" enctype="multipart/form-data" class="dropzone">
                                    @csrf
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    @if ($track_status)
                                        <input name="flag" type="text"  hidden>
                                    @endif
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                        </div>
    
                                        <h5>Drop files here or click to upload company Galery</h5>
                                    </div>
                                </form>
                            </div>
                            <div class="col-6" id="response">

                            </div>
                            <div class="col-md-12">
                                <hr/>
                                <form method="post" action="/{{URI['admin']}}/setTrack" target="_blank">
                                    @csrf
                                    <div class="row">                                                            
                                        <div class="col-md-3">
                                            @if ($track_status)
                                                    <input name="flag" type="text"  hidden>
                                            @endif
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input" >Flight</label>
                                                <input name="flight" type="text" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input" >Weight</label>
                                                <input name="weight" type="text" class="form-control" autocomplete="off">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="phone-mask" class="form-label">AWB</label>
                                                <input name="awb" type="text" class="form-control" id="phone-mask" placeholder="000-0000 0000" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Kolly</label>
                                                <input name="kolly" type="text" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">BTB</label>
                                                <input name="btb" type="text" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Shipper</label>
                                                <input name="shipper" type="text" class="form-control" autocomplete="off">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Remark</label>
                                                <input name="remarks" type="text" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Date</label>
                                                <input name="track_date" type="date" class="form-control" autocomplete="off" id="example-date-input">
                                            </div>
                                        </div>
                                    </div>
        
                                    
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
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
    Dropzone.options.uploadForm = { // The camelized version of the ID of the form element
            // The setting up of the dropzone
            init: function() {
                var myDropzone = this;

                this.on("success", function(files, response) {
                    let suc = `<div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> - Success upload data
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`
                    $('#response').html(suc);
                });
                this.on("error", function(files, response) {
                    // console.log(response.message);
                    let err = `<div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-block-helper me-3 align-middle"></i><strong>ERROR</strong> 
                                   - ${response.message}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>`
                    $('#response').html(err);
                });
            }
    }
    var phoneMask = IMask(document.getElementById('phone-mask'), {
        mask: '000-0000 0000'
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