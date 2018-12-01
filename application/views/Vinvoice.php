<?php
if ($invoice->num_rows() != 0) {
    foreach ($invoice->result_array() as $row){
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Invoice</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <section class="content invoice">
                            <!-- title row -->
                            <!-- Table row -->
                            <div class="row">
                                <div class="col-xs-12 table">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Triner</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Duration</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row["firstname"]." ".$row["lastname"]; ?></td>
                                                <td><?php echo $row["date_order"]; ?></td>
                                                <td><?php echo $row["time_order"]; ?></td>
                                                <td><?php echo $row["duration"]." Hours"; ?></td>
                                                <td><?php echo "IDR. ".$row["bill"]; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->

                            </div>
                            <form action="<?php echo base_url('index.php/member/discount') ?>" method="post">
                                <div class="col-xs-4">
                                    <div class="col-xs-12">
                                        <div class="col-xs-8">
                                            <div class="button-group">
                                                <input name="code" class="form-control" type="text" placeholder="Code">
                                                <input name="sport" type="text" value="<?php echo $row["sport"] ?>" hidden="">
                                                <input name="id" type="text" value="<?php echo $row["id_order"] ?>" hidden="">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <button type="submit" class="btn btn-primary" style="margin-right: 5px;"><i class="fa fa-sign-in"></i> Apply Code</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
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
