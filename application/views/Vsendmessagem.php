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
                        <h2>Send Message</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="<?php echo base_url(); ?>index.php/member/postmessage" method="post" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">To </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input disabled name="nama_instruktur" value="<?php echo $row["firstname"]." ".$row["lastname"]; ?>" type="text" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="message" class="date-picker form-control col-md-7 col-xs-12" ></textarea>
                                    <input name="id" type="text" value="<?php echo $row["id_instruktur"]; ?>" hidden="">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
                                                 }
}
?>