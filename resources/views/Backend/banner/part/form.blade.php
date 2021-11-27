<div class="form-body">
    <div class="row">
        <div class="col-12">


            <div class="form-group">
                <label for="banner">Banner Type</label>
                <select class="form-control" name="bannerType" id="bannerType">
                  <option>Main Banner</option>
                  <option>Second Banner</option>
                  <option>Third Banner</option>
                </select>
              </div>


            <div class="form-group">
                <label for="banner_title">Banner Title</label>
                <input type="text" id="first-name-vertical" class="form-control" name="banner_title" placeholder="title">
                @error('banner_title')
                    <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="banner_sub_title">Banner Sub Title</label>
                <input type="text" id="first-name-vertical" class="form-control" name="banner_sub_title" placeholder="Sub Title">
                @error('banner_sub_title')
                    <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="url">Banner Url</label>
                <input type="text" id="first-name-vertical" class="form-control" name="url" placeholder="http://">
                @error('url')
                    <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="icon-pic" class="form-control" name="image">
                @error('image')
                    <small id="emailHelp" class="form-text text-danger">{{$message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="color_pick">Backgroud Color</label>
                <input type="color" id="first-name-vertical" class="form-control" name="color_pick" placeholder="title">
            </div>
        </div>
        <div class="col-12" id="second_image">
            <div class="form-group">
                <label for="image">Image-2</label>
                <input type="file" id="image-2" class="form-control" name="image_two">
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" checked name="publish" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Publish
                </label>
              </div>
              <br>
            <button type="submit" class="btn btn-primary mr-1 mb-1">Save</button>
        </div>
    </div>
</div>
