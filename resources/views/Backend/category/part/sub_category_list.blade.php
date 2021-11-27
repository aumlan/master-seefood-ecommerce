<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category Name</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sub_categories as $key=>$category )
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->category->name}}</td>
                    <td><img src="{{asset($category->icon)}}" width="70px" alt="" srcset=""></td>
                    <td>
                        {{-- <a href="#" class="btn btn-sm btn-primary">edit</a> --}}
                        <a href="#" onclick="deleteCategory({{$category->id}})" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
