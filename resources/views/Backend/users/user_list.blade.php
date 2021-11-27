@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Attributes')
@push('pagecss')
<link rel="stylesheet" type="text/css" href="{{asset('BackendAsset/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush
@push('css')
@endpush
@section('breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table zero-configuration">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Currency</th>
                                    <th>Country</th>
                                    <th>Language</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->currency}}</td>
                                        <td>{{$user->country}}</td>
                                        <td>{{$user->language}}</td>

                                        <td class="float-right">
                                            <a href="#" onclick="deleteCategory({{$user->id}})"  class="btn btn-sm btn-danger">
                                                <i class="feather icon-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pagejs')
<script src="{{asset('BackendAsset/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('BackendAsset/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>

@endpush
@push('js')
<script src="{{asset('BackendAsset/app-assets/js/scripts/datatables/datatable.js')}}"></script>
@push('js')
    <script src="{{asset('BackendAsset/app-assets/js/scripts/datatables/datatable.js')}}"></script>

    <script>
        function deleteCategory(id){
            var user =  confirm('are you Sure You Want to Delete this User');
            if(user){
                $.ajax({
                    url: "/admin/user/delete/"+id,
                    type: 'GET',
                    success: function(res) {
                        location.reload();
                    }
                });
            }
        }

    </script>

@endpush


@endpush
