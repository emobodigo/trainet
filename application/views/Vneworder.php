<?php
if ($instruktur->num_rows() != 0) {
    foreach ($instruktur->result_array() as $row){
?>
<!-- page content -->
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
                                        <br />
                                        <form action="<?php echo base_url('index.php/member/makeorder') ?>" method="post" data-parsley-validate class="form-horizontal form-label-left">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trainer</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input value="<?php echo $row["firstname"]." ".$row["lastname"]; ?>" name="instruktur" type="text" required="required" class="form-control col-md-7 col-xs-12" disabled>
                                                    <input value="<?php echo $row["id_instruktur"]; ?>" name="id_instruktur" type="text" hidden="">
                                                </div>
                                            </div>
                                            <?php } } ?>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input name="date" type="date" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Duration</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input placeholder="Hours" name="duration" type="text" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Time</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input placeholder="HH:MM" name="time" class="form-control col-md-7 col-xs-12" type="time">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Meeting Point</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input name="meeting_point" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Additional Message</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea placeholder="Optional" name="additional_message"  class="date-picker form-control col-md-7 col-xs-12" ></textarea>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary" type="button">Cancel</button>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success">Order</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>