<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>Name</th>
                <th>Discount %</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupons )
                <tr>

                    <td>{{$coupons->name}}</td>
                    <td>{{ $coupons->discount }}</td>
                    <td>
                        <a href="{{route('admin.coupon.edit',$coupons->id)}}" class="btn btn-sm btn-primary">edit</a>
                        <a href="#" onclick="deleteCoupon({{$coupons->id}})" class="btn btn-sm btn-danger">x</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
