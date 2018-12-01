<?php
if ($instruktur->num_rows() != 0) {
    foreach ($instruktur->result_array() as $row){
?>
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Make Review</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                            <div class="well profile_view">
                                <div class="col-sm-12">
                                    <div class="left col-xs-7">
                                        <h2><?php echo $row['firstname']." ", $row['lastname']; ?></h2>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-building"></i> Address: <?php echo $row['address']; ?></li>
                                            <li><i class="fa fa-phone"></i> Phone : <?php echo $row['handphone']; ?></li>
                                        </ul>
                                    </div>

                                    <div class="right col-xs-5 text-center">
                                        <img src="<?php echo base_url(); ?>images/img.jpg" alt="" class="img-circle img-responsive">
                                    </div>
                                </div>

                                <div class="col-xs-12 bottom text-center">
                                    <div class="col-xs-12 col-sm-6 emphasis pull-right">
                                        <a href="<?php echo base_url(); ?>index.php/member/sendmessage/<?php echo $row["id_instruktur"]?>" type="button" class="btn btn-success btn-xs"><i class="fa fa-comments-o"></i> Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="<?php echo base_url()."/index.php/member/review/".$row["id_instruktur"] ?>" method="post">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="x_panel">
                                    <div class="col-sm-12 form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Review</label>
                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                <textarea type="text" class="form-control col-md-7 col-xs-12" name="review"></textarea>
                                                <input name="id_instruktur" type="text" value="<?php echo $row["id_instruktur"] ?>" hidden="">
                                                <?php
                                                if ($id != 0) {
                                                ?>
                                                <input name="id_order" type="text" value="<?php echo $id ?>" hidden="">
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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