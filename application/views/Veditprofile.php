<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Profile</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_content">  
                            <br />
                            <?php echo form_open('member/update');
                            if ($user->num_rows() != 0) {
                                foreach ($user->result_array() as $row){
                            ?>
                            <div class="form-horizontal form-label-left">
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" name="id_member" value="<?php echo $this->session->userdata('id_member') ?>">
                                            <input type="text" name="firstname" id="first-name" value="<?php echo $row["firstname"]; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="lastname" value="<?php echo $row["lastname"]; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="email" class="form-control col-md-7 col-xs-12" type="email" name="email" value="<?php echo $row["email"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Gender</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input required id="gender" class="form-control col-md-7 col-xs-12" type="text" name="gender" value="<?php echo $row["gender"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Address</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address" value="<?php echo $row["address"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Phone</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone" value="<?php echo $row["handphone"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Password <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password" required class="form-control col-md-7 col-xs-12" type="password" name="password" value="<?php echo $row["password"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Avatar</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="btn btn-primary" type="file" name="foto" id="upload">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-1">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                        <div class="profile_img">
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <?php echo '<img alt="Avatar" title="Change the avatar"  class="img-responsive avatar-view" src="' . base_url('upload/'. $this->session->userdata('photo')).'" />'; ?>
                                                <br>
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
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
