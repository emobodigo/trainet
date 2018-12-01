<?php
if ($member->num_rows() != 0) {
    foreach ($member->result_array() as $row){
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#stop").hide();
    $("#start").click(function(){
        $("#start").hide();
        $("#stop").show();
    });
});
</script>
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Order</h2>
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
                                        <a href="<?php echo base_url(); ?>index.php/instruktur/sendmessage/<?php echo $row["id_member"]?>" type="button" class="btn btn-success btn-xs"><i class="fa fa-comments-o"></i> Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                             }
}
                        ?>
                        <?php
                        if ($order->num_rows() != 0) {
                            foreach ($order->result_array() as $row){
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="x_panel">
                                <div class="col-sm-12 form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Meeting Point</label>
                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $row["meeting_point"] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Duration</label>
                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $row["duration"] ?> Hours" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date</label>
                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $row["date_order"] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Time</label>
                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $row["time_order"] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button id="start" class="btn btn-success" type="reset">Start</button>
                                    <a href="<?php echo base_url() ?>index.php/instruktur/endorder/<?php echo $row["id_order"]."/".$row["duration"] ?>"><button id="stop" type="submit" class="btn btn-primary">Stop</button></a>
                                </div>
                            </div>
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