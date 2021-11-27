<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>#Sl.</th>
                <th>Title</th>
                <th>Banner Type</th>
                <th>Image</th>
                <th class="text-center">Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $key=>$banner)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{ $banner->banner_title }}</td>
                    <td>{{ $banner->type_of_banner }}</td>
                    <td> @if ($banner->banner_image_one) <img src="{{ asset($banner->banner_image_one) }}" width="100px" alt="" srcset=""> @endif</td>
                    <td>{{ \Illuminate\Support\Str::limit($banner->url, '15') }}</td>
                    <td>
                        <a href="{{route('admin.banner.edit',$banner->id)}}" class="btn btn-sm btn-primary">edit</a>
                        <a href="#" data-toggle="modal" data-target="#banner{{ $banner->id }}"
                            class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>

                <div class="modal fade text-left" id="banner{{ $banner->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h4 class="modal-title" id="myModalLabel1">Delete Banner</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Are you sure delete this Banner?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal"
                                    aria-label="Close">No</button>
                                <a href="{{ route('admin.banner.destroy', $banner->id) }}" class="btn btn-danger text-white">Yes</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </tbody>
    </table>
</div>
