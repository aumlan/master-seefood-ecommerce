<div class="form-group">
    <label for="first-name-icon">Facebook</label>
    <div class="position-relative has-icon-left">
        <input type="text" id="first-name-icon" class="form-control" value="{{$socialSettings->facebook}}" name="facebook" placeholder="Facebook Links">
        <div class="form-control-position">
             <i class="fa fa-facebook-square"></i>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="first-name-icon">Instagram</label>
    <div class="position-relative has-icon-left">
        <input type="text" id="first-name-icon" class="form-control" value="{{$socialSettings->instagram}}" name="instagram" placeholder="Instagram Links">
        <div class="form-control-position">
              <i class="fa fa-instagram"></i>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="first-name-icon">YouTube</label>
    <div class="position-relative has-icon-left">
        <input type="text" id="first-name-icon" value="{{$socialSettings->youtube}}" class="form-control" name="youtube" placeholder="YouTube Links">
        <div class="form-control-position">
            <i class="fa fa-youtube-play"></i>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="first-name-icon">Twitter</label>
    <div class="position-relative has-icon-left">
        <input type="text" id="first-name-icon" value="{{$socialSettings->twitter}}" class="form-control" name="twitter" placeholder="Twitter Links">
        <div class="form-control-position">
        <i class="fa fa-twitter-square"></i>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="first-name-icon">Linkedin</label>
    <div class="position-relative has-icon-left">
        <input type="text" id="first-name-icon" value="{{$socialSettings->linkedin}}" class="form-control" name="linkedin" placeholder="Linkedin Links">
        <div class="form-control-position">
            <i class="fa fa-linkedin"></i>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Update</button>
