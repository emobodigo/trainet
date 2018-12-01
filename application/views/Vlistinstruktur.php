<?php 

function sport($a){
            if($a=="Fitness"){
                return "Fitness Trainer";
            }else if($a=="Yoga"){
                return "Yoga Trainer";
            }else if($a=="Swimming"){
                return "Swimming Trainer";
            }else if($a=="Aerobic"){
                return "Aerobic Trainer";
            }
        }
?>
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">

                                <h3>Instruktur</h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            </div>

                                            <div class="clearfix"></div>
                                            <?php 
                                            if ($sport != NULL) {
                                    foreach ($sport->result_array() as $row){
                                            ?>
                                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                                <div class="well profile_view">
                                                    <div class="col-sm-12">
                                                        <h4 class="brief"><i><?php echo sport($row["sport"]); ?></i></h4>
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
                                                        <div class="col-xs-12 col-sm-6 emphasis">
                                                            <?php
       /** $result1 = $conn->query("SELECT `rating` FROM `rating` WHERE `id_instruktur`='".$row["id_instruktur"]."'");
        if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()){
        echo"
        <p class=\"ratings\">
        <a>".$row1["rating"]."</a>";
        for($i= 1; $i <= $row1["rating"]; $i++){
            echo"<a ><span class=\"fa fa-star\"></span></a>";
        }
        for($i= 1; $i <= (5-$row1["rating"]); $i++){
            echo"<a ><span class=\"fa fa-star-0\"></span></a>";
        }
        echo "</p>";
                                                            
    }
        }**/
        ?>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 emphasis">
                                                            <a href="<?php echo base_url(); ?>index.php/member/order/<?php echo $row["id_instruktur"]?>"><button type="button"  class="btn btn-primary btn-xs">
                                                                <i  class="fa fa-plus"> </i> Order  
                                                                </button></a>
                                                            <a href="<?php echo base_url(); ?>index.php/member/sendmessage/<?php echo $row["id_instruktur"]?>" type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                </i> <i class="fa fa-comments-o"></i> </a>
                                                            <a href="<?php echo base_url(); ?>index.php/member/profileinstruktur/<?php echo $row["id_instruktur"]?>"><button type="button" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-user"> </i> View Profile
                                                                </button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
    }
}?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->