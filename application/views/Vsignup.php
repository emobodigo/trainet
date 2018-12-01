<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Member Baru</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_content">  
                            <br />
                            <?php echo form_open_multipart('daftar') ?>
                            <div class="form-horizontal form-label-left">
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">First Name
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" name="id_member">
                                            <input type="text" id="firstname" name="firstname"  required="required" class="form-control col-md-7 col-xs-12">
                                        </div>'
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Last Name
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="lastname" name="lastname"  required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Username</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="username" class="form-control col-md-7 col-xs-12" type="text" name="username" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Password</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password" class="form-control col-md-7 col-xs-12" type="password" name="password" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">E-Mail</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="email" class="form-control col-md-7 col-xs-12" type="email" name="email" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Gender</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="gender" class="form-control col-md-7 col-xs-12" type="text" name="gender" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Address</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Level</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="level" class="form-control col-md-7 col-xs-12" type="text" name="level" value="2" readonly>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Handphone</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="phone" class="form-control col-md-7 col-xs-12" type="number" name="phone" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                        <div class="profile_img">
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <img class="img-responsive avatar-view" src="images/user.png" alt="Avatar" title="Change the avatar">
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="file" name="foto" id="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
