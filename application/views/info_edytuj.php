
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Informacje o straży
                        </h1>
                    </div>
                        
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                            <?php
                            $row = $info->row();
                            ?>
                <form class="form-horizontal" action="<?= base_url() ?>Info/edytujInfo" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nazwa</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="2" name="nazwa"><?php echo $row->nazwa ?></textarea>
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Miejscowosc</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="1" name="miejscowosc"><?php echo $row->miejscowosc?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Adres</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="adres"><?php echo $row->adres?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">www</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="1" name="www"><?php echo $row->www ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">email</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="1" name="email"><?php echo $row->email ?></textarea>
                            </div>
                        </div>

                <?php
                    if($this->session->userdata('admin')=='tak'){
                ?>
                <button type="submit" class="btn btn-success">Wyślij</button>
                <?php
                } else if($this->session->userdata('admin')!='tak'){
                ?>
                <button type="button" class="btn btn-primary" disabled="disabled">Edytuj</button> <small></br>Dane edytować może tylko Administrator </small>
                <?php
                } ?>                </form>
            </div>
        </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


