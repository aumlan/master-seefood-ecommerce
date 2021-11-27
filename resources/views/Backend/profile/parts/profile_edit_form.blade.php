<div class="card">
    <div class="card-header">
        <h4 class="card-title">Profile Edit</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-vertical">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-icon">Profile</label>
                                <div class="position-relative has-icon-left">
                                    <input type="file" onchange="document.getElementById('profile_image').src = window.URL.createObjectURL(this.files[0])" id="first-name-icon" class="form-control" name="image">
                                    <div class="form-control-position">
                                        <i class="feather icon-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-icon">Full Name</label>
                                <div class="position-relative has-icon-left">
                                    <input type="text" id="first-name-icon" value="{{Auth::guard('admin')->user()->name}}" class="form-control" name="name" placeholder="Full Name">
                                    <div class="form-control-position">
                                        <i class="feather icon-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-icon">Designation</label>
                                <div class="position-relative has-icon-left">
                                    <input type="text" id="first-name-icon" value="{{Auth::guard('admin')->user()->designation}}" class="form-control" name="designation" placeholder="Desingnation">
                                    <div class="form-control-position">
                                        <i class="fa fa-id-card-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Email</label>
                                <div class="position-relative has-icon-left">
                                    <input type="email" id="email-id-icon" value="{{Auth::guard('admin')->user()->email}}" class="form-control" name="email" placeholder="Email">
                                    <div class="form-control-position">
                                        <i class="feather icon-mail"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-icon">Mobile</label>
                                <div class="position-relative has-icon-left">
                                    <input type="number" id="contact-info-icon" value="{{Auth::guard('admin')->user()->mobile}}" class="form-control" name="mobile" placeholder="Mobile">
                                    <div class="form-control-position">
                                        <i class="feather icon-smartphone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-icon">Bio</label>
                                <fieldset class="form-group">
                                    <textarea class="form-control" name="bio" id="basicTextarea" rows="3" placeholder="Bio">{{Auth::guard('admin')->user()->bio}}</textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-icon">Address</label>
                                <fieldset class="form-group">
                                    <textarea class="form-control" name="address" id="basicTextarea" rows="3" placeholder="Address">{{Auth::guard('admin')->user()->address}}</textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">{{$button_text}}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
