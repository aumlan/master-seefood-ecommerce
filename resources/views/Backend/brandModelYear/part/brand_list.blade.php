<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>Year</th>
                <th>Model Name</th>
                <th>Brand Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brandModelYears as $brandModelYear )
                <tr>
                    <td>{{$brandModelYear->year}}</td>
                    <td>{{$brandModelYear->brandModel->name}}</td>
                    <td>{{$brandModelYear->brandModel->brand->name}}</td>
                    <td>
                        <a href="{{route('admin.brandModelYear.edit',$brandModelYear->id)}}" class="btn btn-sm btn-primary">edit</a>
                        <a href="#" onclick="deleteCategory({{$brandModelYear->id}})" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
