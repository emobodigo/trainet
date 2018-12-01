
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->

                                <?php echo '<img alt="Avatar" title="Change the avatar"  class="img-responsive avatar-view" src="' . base_url('upload/'. $this->session->userdata('photo')).'" />'; ?>
                            </div>
                        </div>
                        <h3><?php echo $this->session->userdata('firstname') ." ", $this->session->userdata('lastname')?></h3>

                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i>  <?php echo $this->session->userdata('address')?>
                            </li>

                            <li>
                                <i class="fa fa-phone user-profile-icon"></i>  <?php echo $this->session->userdata('handphone')?>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="x_content">
                            <div class="title text-center">
                                <h2>NOTIFICATION</h2>
                            </div>
                            <div class="col-md-12">
                                <?php 
    if($notification->num_rows() != 0){
        foreach($notification->result_array() as $row){
            $date = explode("-",$row["date"]);
            echo "
                                                                <div class=\"x_panel\">
                                                            <div class=\"x_content\">
                                                                <article class=\"media event\">
                                                                    <a class=\"pull-left date\">
                                                                        <p class=\"month\">".month($date[1])."</p>
                                                                        <p class=\"day\">".$date[2]."</p>
                                                                    </a>
                                                                    <div class=\"media-body\">
                                                                        <a class=\"title\" >".$row["firstname"]." ".$row["lastname"]."</a>
                                                                        <br>
                                                                        <p>".$row["notification"]."</p>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>

                                                                ";
        }
    }
                                ?>                                                        
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="title text-center">
                                <h2>MESSAGE</h2>
                            </div>
                            <div class="col-md-12">
                                <?php 
                                if($message->num_rows() != 0){
                                    foreach($message->result_array() as $row){
                                        $date = explode("-",$row["date"]);
                                        echo "<div class=\"x_panel\">
                                            <div class=\"x_content\">
                                                <ul class=\"messages\">
                                                    <li>
                                                        <div class=\"message_date\">
                                                            <h3 class=\"date text-info\">".$date[2]."</h3>
                                                            <p class=\"month\">".month($date[1])."</p>
                                                        </div>
                                                        <div class=\"message_wrapper\">
                                                            <h4 class=\"heading\">".$row["firstname"]." ".$row["lastname"]."</h4>
                                                            <blockquote class=\"message\">".$row["message"]."</blockquote>
                                                            <br />
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class=\"pull-right\">
                                                    <a href=\"".base_url()."index.php/member/sendmessage/".$row["id_from"]."\"><button type=\"button\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"> </i> Reply
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>";
                                    }
                                }else{
                                    echo "
                                            <div class=\"x_panel\">
                                            <div class=\"x_content\">
                                                <ul class=\"messages\">
                                                    <li>
                                                        <p class=\"text-center\">No Messages :) </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                            ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>