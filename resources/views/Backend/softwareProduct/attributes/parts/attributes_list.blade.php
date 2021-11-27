<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Attribute Item</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attributes as $key=>$attribute )
                <tr>
                    <td>{{$key+1}}</td>
                    <td><a href="{{route('admin.product.attribute.configure',$attribute->id)}}">{{$attribute->name}}</a></td>
                    <td>
                        @foreach ($attribute->attributes as $att)
                             <span class="h6 btn btn-sm">{{$att->name}}</span>
                        @endforeach
                    </td>
                    <td><img src="{{asset($attribute->icon)}}" alt="" srcset=""></td>
                    <td>
                        <a href="#" onclick="deleteCategory({{$attribute->id}})" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>