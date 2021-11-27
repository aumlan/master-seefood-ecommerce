<div class="form-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                    <label for="brand_id">Select Brands</label>
                    <select class="select2 form-control" name="brand_id" id="brand_id" onchange="setSubModel()">
                        <option value="">Select Brands</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"
                            @if($brandModelYear)
                                @if ($brand->id == $brandModelYear->brandModel->brand_id)
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
                <label for="sub_model_id">Select Model</label>
                <select class="select2 form-control" name="sub_model_id" id="sub_model_id">
                    @foreach ($brandModels as $brandModel)
                        <option value="{{ $brandModel->id }}"
                        @if($brandModelYear)
                            @if ($brandModel->id == $brandModelYear->brand_model_id)
                                {{'selected="selected"'}}
                                @endif
                            @endif
                        >{{ $brandModel->name }}</option>
                    @endforeach
                </select>
                @error('brand_model_id')
                <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">Year </label>
                <input type="text" id="first-name-vertical" value="{{$brandModelYear ? $brandModelYear->year : ''}}" class="form-control" name="year" placeholder="Year">
                @error('year')
                <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1">{{$btnText}}</button>
        </div>
    </div>
</div>
