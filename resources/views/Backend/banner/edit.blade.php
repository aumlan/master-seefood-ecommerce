@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Banner Name')
@push('pagecss')
<link rel="stylesheet" type="text/css" href="{{asset('BackendAsset/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush
@push('css')
@endpush
@section('breadcrumb')
@endsection
@section('content')
<div class="form-body">
    <div class="row">
        <div class="col-lg-4">
            <form action="{{route('admin.banner.update',$banner->id)}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="form-group">
                            <label for="banner">Banner Type</label>
                            <select class="form-control" name="bannerType" id="bannerType">
                              <option>{{$banner->type_of_banner}}</option>
                            </select>
                          </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="banner_title">Banner Title</label>
                                    <input type="text" id="first-name-vertical" value="{{$banner->banner_title}}" class="form-control" name="banner_title" placeholder="title">
                                    @error('banner_title')
                                        <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="banner_sub_title">Banner Sub Title</label>
                                    <input type="text" id="first-name-vertical" value="{{$banner->banner_sub_title}}" class="form-control" name="banner_sub_title" placeholder="Sub Title">
                                    @error('banner_sub_title')
                                        <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="url">Banner Url</label>
                                    <input type="text" id="first-name-vertical" value="{{$banner->banner_url}}" class="form-control" name="url" placeholder="http://">
                                    @error('url')
                                        <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" onchange="document.getElementById('imageOne').src = window.URL.createObjectURL(this.files[0])" id="icon-pic" class="form-control" name="image">
                                    @error('image')
                                        <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="color_pick">Backgroud Color</label>
                                    <input type="color" id="first-name-vertical" value="{{$banner->bg_color}}" class="form-control" name="color_pick" placeholder="title">
                                </div>
                            </div>
                            <div class="col-12" id="second_image">
                                <div class="form-group">
                                    <label for="image">Image-2</label>
                                    <input type="file" onchange="document.getElementById('imageTwo').src = window.URL.createObjectURL(this.files[0])" id="image-2" class="form-control" name="image_two">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked name="publish" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                    Publish
                                    </label>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            @if ($banner->banner_image_one)
                                <img src="{{asset($banner->banner_image_one)}}" id="imageOne" width="150px" alt="" srcset="">
                            @endif
                        </div>
                        <div class="col-4" id="second_image">
                            @if ($banner->banner_image_two)
                                <img src="{{asset($banner->banner_image_two)}}" id="imageTwo" width="150px" alt="" srcset="">
                            @endif
                        </div>
                    </div>
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
$(document).ready(function() {
            let type_of_post = $('#bannerType').val();
            if (type_of_post == 'Main Banner') {
                    $("#second_image").show();
                } else {
                    $("#second_image").hide();
                }
})
function deleteSlider(id){
    var brand =  confirm('are you Sure You Want to Delete this Slide');
    if(brand){
    $.ajax({
        url: "/admin/slider/delete/"+id,
        type: 'GET',
        success: function(res) {
            location.reload();
        }
    });
    }
}
</script>
@endpush
