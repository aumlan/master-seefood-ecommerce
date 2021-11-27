<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>Model Name</th>
                <th>Brand Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brandModels as $brandModels )
                <tr>
                    <td>{{$brandModels->name}}</td>
                    <td>{{$brandModels->brand->name}}</td>
                    <td>
                        <a href="{{route('admin.brandModel.edit',$brandModels->id)}}" class="btn btn-sm btn-primary">edit</a>
                        <a href="#" onclick="deleteCategory({{$brandModels->id}})" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
