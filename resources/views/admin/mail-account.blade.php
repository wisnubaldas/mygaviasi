@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="{{route('post_email')}}" method="POST" >
                                @csrf
                                <label for="example-email-input" class="form-label">Email</label>
                                <div class="input-group">
                                    <input class="form-control" type="email" name="email" id="example-email-input">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Save</button> 
                                     </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Mail</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mail as $t)
                                    <tr>
                                        <td>{{$t->mail_name}}</td>
                                        <td>
                                            <a href="{{route('post_email',$t->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td rowspan="2">
                                            <br>
                                            {{ $mail->links() }}
                                        </td>
                                    </tr>
                                  </tfoot>
                                
                            </table>
                        </div>
                    </div>
            </div> 
        </div>
        @include('layouts.footer')
    </div>
@endsection

@push('js')

@endpush

@push('css')

@endpush