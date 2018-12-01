<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo base_url() ?>images/img.jpg" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3><?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname') ?></h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $this->session->userdata('address') ?>
                                </li>

                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i> <?php echo $this->session->userdata('handphone') ?>
                                </li>
                            </ul>
                            <br />
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="title text-center">
                                        <h2>ORDER</h2>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="title">
                                            <h2>Order</h2>
                                        </div>
                                        <?php 
    if($orderon->num_rows() != 0){
        foreach($orderon->result_array() as $row){
            $date = explode("-",$row["date_order"]);
            echo "
                    <div class=\"x_panel\">
                            <div class=\"x_content\">
                                    <article class=\"media event\">
                                            <a class=\"pull-left date\">
                                                    <p class=\"month\">".month($date[1])."</p>
                                                    <p class=\"day\">".$date[2]."</p>
                                            </a>
                                                <div class=\"media-body\">
                                                                        <a class=\"title\">".$row["firstname"]." ".$row["lastname"]."</a>
                                                                        <br>
                                                                        <span class=\"badge bg-red\">Time : ".$row["time_order"]."</span>
                                                                        <span class=\"badge bg-red\">Meeting Point : ".$row["meeting_point"]."</span>
                                                                        <a href=\"".base_url('index.php/instruktur/confirmorder/').$row["id_order"]."/0/".$row["id_member"]."\"><span class=\"badge bg-red pull-right\"><i class=\"fa fa-close\"></i> Decline</span></a>
                                                                        <a href=\"".base_url('index.php/instruktur/confirmorder/').$row["id_order"]."/1/".$row["id_member"]."\"><span class=\"badge bg-green pull-right\"><i class=\"fa fa-check\"></i> Accept</span></a>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        ";
        }
    }else{
        echo "
                                                    <div class=\"x_panel\">
                                                            <div class=\"x_content\">
                                                            <p class=\"text-center\">No order at time :)</p>
                                                            </div>
                                                        </div>
                                                    ";
    }
                                        ?>
                                        <div class="title">
                                            <h2>Ongoing Order</h2>
                                        </div>
                                        <?php 
                                        if($orderacc->num_rows() != 0){
                                            foreach($orderacc->result_array() as $row){
                                                $date = explode("-",$row["date_order"]);
                                                echo "
                                                     <div class=\"x_panel\">
                                                            <div class=\"x_content\">
                                                                <article class=\"media event\">
                                                                    <a class=\"pull-left date\">
                                                                        <p class=\"month\">".month($date[1])."</p>
                                                                        <p class=\"day\">".$date[2]."</p>
                                                                    </a>
                                                                    <div class=\"media-body\">
                                                                        <a class=\"title\" href=\"order.php?id=".$row["id_order"]."\">".$row["firstname"]." ".$row["lastname"]."</a>
                                                                        <br>
                                                                        <span class=\"badge bg-red\">Time : ".$row["time_order"]."</span>
                                                                        <span class=\"badge bg-red\">Meeting Point : ".$row["meeting_point"]."</span>
                                                                    <a href=\"".base_url()."index.php/instruktur/showorder/".$row["id_order"]."\"><span class=\"badge bg-green pull-right\"><i class=\"fa fa-arrow-circle-o-right\"></i> Start</span></a>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        ";
                                            }
                                        }else{
                                            echo "
                                                    <div class=\"x_panel\">
                                                            <div class=\"x_content\">
                                                            <p class=\"text-center\">No order at time :)</p>
                                                            </div>
                                                        </div>
                                                    ";
                                        }
                                        ?>
                                        <div class="title">
                                            <h2>Complete Order</h2>
                                        </div>
                                        <?php 
                                        if($ordercom->num_rows() != 0){
                                            foreach($ordercom->result_array() as $row){
                                                $date = explode("-",$row["date_order"]);
                                                echo "
                                                                                         <div class=\"x_panel\">
                                                            <div class=\"x_content\">
                                                                <article class=\"media event\">
                                                                    <a class=\"pull-left date\">
                                                                        <p class=\"month\">".month($date[1])."</p>
                                                                        <p class=\"day\">".$date[2]."</p>
                                                                    </a>
                                                                    <div class=\"media-body\">
                                                                        <a class=\"title\">".$row["firstname"]." ".$row["lastname"]."</a>
                                                                        <br>
                                                                        <span class=\"badge bg-red\">Time : ".$row["time_order"]."</span>
                                                                        <span class=\"badge bg-red\">Meeting Point : ".$row["meeting_point"]."</span>";
                                                if($row["paid"] == 0){
                                                    echo"
                                                                            <a><span class=\"badge bg-red pull-right\"><i class=\"fa fa-close\"></i> Unpaid</span></a>
                                                                            ";
                                                }else{
                                                    echo"
                                                                            <a><span class=\"badge bg-green pull-right\"><i class=\"fa fa-check\"></i> Paid</span></a>
                                                                            ";
                                                }
                                                echo "
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        ";
                                            }
                                        }else{
                                            echo "
                                                    <div class=\"x_panel\">
                                                            <div class=\"x_content\">
                                                            <p class=\"text-center\">No order at time :)</p>
                                                            </div>
                                                        </div>
                                                    ";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="x_panel">
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
                            </div>
                            <div class="x_panel">
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
                                                    <a href=\"".base_url()."index.php/instruktur/sendmessage/".$row["id_from"]."\"><button type=\"button\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"> </i> Reply
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
                    <!-- end recent activity -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->