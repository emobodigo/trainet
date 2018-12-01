<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <?php if ($instruktur != NULL) {
    foreach ($instruktur->result_array() as $row){
        ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo base_url() ?>images/img.jpg" alt="Avatar">
                                </div>
                            </div>
                            <h3><?php echo $row["firstname"]." ".$row["lastname"] ?></h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $row["address"]; ?>
                                </li>
                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i> <?php echo $row["handphone"]; ?>
                                </li>
                                <div class="text-center">
                                    <a href="<?php echo base_url(); ?>index.php/member/sendmessage/<?php echo $row["id_instruktur"]?>" class="btn btn-success"><i class="fa fa-envelope-o m-right-xs"></i> Send Message</a>
                                </div>
                            </ul>
                        </div>
                        <?php
    }
}
                        ?>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Review</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">                                        <!-- start recent activity -->
                                        <ul class="messages">
                                            <?php if ($review != NULL) {
    foreach ($review->result_array() as $row){
        $date = explode("-",$row["date"]);
        echo "
                                            <li>
                                                <div class=\"message_date\">
                                                    <h3 class=\"date text-info\">".$date[2]."</h3>
                                                    <p class=\"month\">".month($date[1])."</p>
                                                </div>
                                                <div class=\"message_wrapper\">
                                                    <h4 class=\"heading\">".$row["firstname"]." ".$row["lastname"]."</h4>
                                                    <blockquote class=\"message\">".$row["review"]."</blockquote>
                                                    <br />
                                                </div>
                                            </li>";
    }
}
                                            ?>
                                        </ul>
                                        <!-- end recent activity -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->