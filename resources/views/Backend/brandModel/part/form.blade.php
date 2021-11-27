<div class="form-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                    <label for="brand_id">Select Brands</label>
                    <select class="select2 form-control" name="brand_id" id="brand_id">
                        <option value="">Select Brands</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"
                            @if($brandModel)
                                @if ($brand->id == $brandModel->brand_id)
                                    {{'selected="selected"'}}
                                    @endif
                                @endif
                            >{{ $brand->name }}</option>
                        @endforeach
                    </select>
                @error('brand_id')
                    <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">Model Name</label>
                <input type="text" id="first-name-vertical" value="{{$brandModel?$brandModel->name:''}}" class="form-control" name="name" placeholder="Name">
                @error('name')
                <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1">{{$btnText}}</button>
        </div>
    </div>
</div>
