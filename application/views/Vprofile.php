<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>User Profile </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
                        if ($user->num_rows() != 0) {
                            foreach ($user->result_array() as $row){
                        ?>
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->

                                    <?php echo '<img alt="Avatar" title="Change the avatar"  class="img-responsive avatar-view" src="' . base_url('upload/'. $this->session->userdata('photo')).'" />'; ?>
                                </div>
                            </div>
                            <h3><?php echo $row["firstname"] ." ", $row["lastname"] ?></h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i>  <?php echo $row["address"]?>
                                </li>

                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i>  <?php echo $row["handphone"]?>
                                </li>
                            </ul>

                            <a href="<?php echo base_url('index.php/member/edit/').$this->session->userdata('id_member') ?>"><button type="button" name="edit" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</button></a>
                            <br />
                        </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="col-md-12">
                                <div class="title text-center">
                                    <h2>ORDER</h2>
                                </div>
                                <div class="title">
                                    <h2>Ongoing Order</h2>
                                </div>
                                <?php  
                                if ($orderon->num_rows() != 0) {
                                    foreach ($orderon->result_array() as $row){
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
                                                                        <a href=\"".base_url()."index.php/member/cancelorderm/".$row["id_order"]."/".$row["id_instruktur"]."\"><span class=\"badge bg-red pull-right\"><i class=\"fa fa-close\" onclick=\"return confirm('Apakah anda akan membatalkan order?')\"></i> Cancel Order</span></a>
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

                                if ($ordercom->num_rows() != 0) {
                                    foreach ($ordercom->result_array() as $row){
                                        $date = explode("-",$row["date_order"]);
                                        if($row["paid"]==0){
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
                                                                        <a href=\"".base_url()."index.php/member/showinvoice/".$row["id_order"]."\"><span class=\"badge bg-gray pull-right\"><i class=\"fa fa-money\"></i> Invoice</span></a>";
                                            if($row["review"]==0){
                                                echo"
                                                                            <a href=\"".base_url()."index.php/member/makereview/".$row["id_instruktur"]."\"><span class=\"badge bg-gray pull-right\"><i class=\"fa fa-pencil\"></i> Review</span></a>
                                                                            ";
                                            }
                                            echo" </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        ";    
                                        }else if($row["paid"]==1){
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
                                                                        <a><span class=\"badge bg-green pull-right\"><i class=\"fa fa-check\"></i> Paid</span></a>";
                                            if($row["review"]==0){
                                                echo"
                                                                            <a href=\"".base_url()."index.php/member/makereview/".$row["id_instruktur"]."\"><span class=\"badge bg-gray pull-right\"><i class=\"fa fa-pencil\"></i> Review</span></a>
                                                                            ";
                                            }
                                            echo"
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        "; 
                                        }
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->