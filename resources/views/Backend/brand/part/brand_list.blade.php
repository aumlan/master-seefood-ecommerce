<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Icon</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brands )
                <tr>
                    <td>1</td>
                    <td>{{$brands->name}}</td>
                    <td><img src="{{asset($brands->icon)}}" width="120px" alt="" srcset=""></td>
                    <td>
                        {{Str::limit($brands->description, 50, '...')}}
                    </td>
                    <td>
                        <a href="{{route('admin.brand.edit',$brands->id)}}" class="btn btn-sm btn-primary">edit</a>
                        <a href="#" onclick="deleteCategory({{$brands->id}})" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
