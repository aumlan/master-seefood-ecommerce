<div class="form-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">coupon Name</label>
                <input type="text" id="first-name-vertical" value="{{$coupon?$coupon->name:''}}" class="form-control" name="name" placeholder="Name">
                @error('name')
                    <small id="emailHelp" class="form-text text-muted">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">coupon Discount %</label>
                <input type="number" value="{{$coupon?$coupon->discount:''}}" class="form-control" name="discount" placeholder="Name">
                @error('name')
                <small id="emailHelp" class="form-text text-muted">{{$message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1">{{$btnText}}</button>
        </div>
    </div>
</div>
