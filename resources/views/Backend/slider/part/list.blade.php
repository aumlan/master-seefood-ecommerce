<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider )
                <tr>
                    <td>1</td>
                    <td>{{$slider->slider_title}}</td>
                    <td><img src="{{asset($slider->image)}}" width="120px" alt="" srcset=""></td>
                    <td>
                        <a href="{{route('admin.slider.destroy',$slider->id)}}" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
