
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
                <?php if($info->num_rows() > 0) {
                    $row = $info->row();
                    ?>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nazwa</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $row->nazwa; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Miejscowosc</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $row->miejscowosc; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Adres</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $row->adres; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">www</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $row->www; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">email</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $row->email; ?></p>
                            </div>
                        </div>
                    </form>
                    <?php
                }
                if($this->session->userdata('admin')=='tak'){
                    ?>
                    <a class="btn btn-primary" href= "<?= base_url();?>info/edytuj">Edytuj</a>
                    <?php
                } else if($this->session->userdata('admin')!='tak'){
                    ?>
                    <button type="button" class="btn btn-primary" disabled="disabled">Edytuj</button> <small></br>Dane edytować może tylko Administrator </small>
                    <?php
                } ?>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


