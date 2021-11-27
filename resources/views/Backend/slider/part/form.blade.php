<div class="form-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">Slider Tile</label>
                <input type="text" id="first-name-vertical" value="" class="form-control" name="name"
                    placeholder="Name">
                @error('name')
                    <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="icon-pic">Slider Pic</label>
                <input type="file" id="icon-pic" class="form-control" name="image">
                @error('image')
                    <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1">Add</button>
        </div>
    </div>
</div>
