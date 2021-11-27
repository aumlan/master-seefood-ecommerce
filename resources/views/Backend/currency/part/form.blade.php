<div class="form-body">
    <div class="row">
        <div class="col-12">
            <h3> Insert Currency Rate </h3>
            <br/>
            <h5> 1 AED = </h5>
            <div class="form-group">
                <label for="first-name-vertical">in Dollar </label>
                <input type="number" id="first-name-vertical" value="{{$currencys[0]->dollar}}" class="form-control" name="dollar" placeholder="$">
                @error('name')
                    <small id="emailHelp" class="form-text text-muted">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">in Euro </label>
                <input type="number" value="{{$currencys[0]->euro}}" class="form-control" name="euro" placeholder="€">
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
