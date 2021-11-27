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
            @foreach ($manufactures as $key=>$manufacture )
                <tr>
                    <td>{{ $key++ }}</td>
                    <td>{{$manufacture->name}}</td>
                    <td><img src="{{asset($manufacture->icon)}}" width="120px" alt="" srcset=""></td>
                    <td>
                        {{Str::limit($manufacture->description, 50, '...')}}
                    </td>
                    <td>
                        <a href="{{route('admin.manufactures.edit',$manufacture->id)}}" class="btn btn-sm btn-primary">edit</a>
                        <a href="#" onclick="deleteManuFacture({{$manufacture->id}})" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
