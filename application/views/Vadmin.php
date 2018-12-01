<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Manage Instruktur</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="title">
                                        <h2>Order Payment</h2>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <form action="admin/confirmpayorder" method="post" data-parsley-validate class="form-horizontal form-label-left">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Instruktur <span class="required"></span>
                                                </label>
                                                <div class="col-md-9 col-sm-12 col-xs-12">
                                                    <input name="id_instruktur" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Order <span class="required"></span>
                                                </label>
                                                <div class="col-md-9 col-sm-12 col-xs-12">
                                                    <input name="id_order" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pay <span class="required"></span>
                                                </label>
                                                <div class="col-md-9 col-sm-12 col-xs-12">
                                                    <input name="pay" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success">Confirm</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end recent activity -->

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="title">
                                        <h2>Validation</h2>
                                    </div>
                                    <div class="col-md-12">
                                        <?php
                                            if ($listinstrukturuv->num_rows() != 0) {
                                                foreach ($listinstrukturuv->result_array() as $row){
                                                echo "
                                        <div class=\"x_panel\">
                                            <div class=\"x_content\">
                                                <article class=\"media event\">
                                                    <div class=\"media-body\">
                                                        <a class=\"title\">".$row["firstname"]." ".$row["lastname"]."</a>
                                                        <a href=\"".base_url()."index.php/admin/instrukturvalidation/".$row["id_instruktur"]."\"><span class=\"badge bg-green pull-right\"><i class=\"fa fa-check\"></i> Validate</span></a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>";
                                                }
                                            }else{
                                                echo "
                                        <div class=\"x_panel\">
                                            <div class=\"x_content\">
                                                <article class=\"media event\">
                                                    <div class=\"media-body\">
                                                        <a class=\"title\">No Data</a>
                                                        </div>
                                                </article>
                                            </div>
                                        </div>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List Of Instruktur </h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th class="column-title">No </th>
                                                <th class="column-title">Name </th>
                                                <th class="column-title">Username </th>
                                                <th class="column-title">Type </th>
                                                <th class="column-title">Status </th>
                                                <th class="column-title">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $num = 1;
                                            if ($listinstruktur->num_rows() != 0) {
                                                foreach ($listinstruktur->result_array() as $row){
                                                echo "
                                                <tr class=\"even pointer\">
                                                <td class=\"a-center\">
                                                    ".$num."
                                                </td>
                                                <td class=\" \">".$row["firstname"]." ".$row["lastname"]."</td>
                                                <td class=\" \">".$row["username"]."</td>
                                                <td class=\" \">".$row["sport"]."</td>
                                                <td class=\" \"><span class=\"badge bg-green\"><i class=\"fa fa-check\"></i> active</span></td>
                                                <td class=\" \"><a href=\"".base_url()."index.php/admin/editinstruktur/".$row["id_instruktur"]."\"><span class=\"badge bg-red\"><i class=\"fa fa-edit\"></i> Edit</span></a></td>
                                            </tr>";
                                                    $num++;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                        <a href="Admin/viewtambahInstruktur"><button type="button" name="edit" class="btn btn-success">Add Instruktur</button></a>
                                    </table>
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
