<div class="form-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">Attribute Name</label>
                <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="Name">
                @error('name')
                    <small id="emailHelp" class="form-text text-muted">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <fieldset class="form-group">
                <textarea class="form-control" id="basicTextarea" rows="3" name="description" placeholder="Description"></textarea>
            </fieldset>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1">Save</button>
        </div>
    </div>
</div>
