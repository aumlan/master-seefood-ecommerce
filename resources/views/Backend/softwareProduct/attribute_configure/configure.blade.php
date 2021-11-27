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
        <div class="col-xl-4 col-lg-4">
            <div class="card">
                <div class="card-header">
                    Add New  {{$attribute->name}}
                </div>
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{route('admin.product.attribute.configure.store',$attribute->id)}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Name</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="Name">
                                    @error('name')
                                        <small id="emailHelp" class="form-text text-muted">{{$message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="basicTextarea" rows="3" name="description" placeholder="Description"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table zero-configuration">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($configure as $key=>$attribute)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$attribute->name}}</td>
                                        <td><img src="{{asset($attribute->icon)}}" alt="" srcset=""></td>
                                        <td>
                                            <a href="#" onclick="deleteCategory({{$attribute->id}})" class="btn btn-sm btn-danger">x</a>
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

<script>
    function deleteCategory(id){
      var category =  confirm('are you Sure You Want to Delete this?');
      if(category){
        $.ajax({
            url: "/admin/configure/attribute/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
