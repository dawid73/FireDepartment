
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Informacje o akcji
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php if($szkolenie->num_rows() > 0) {
                            $a = $szkolenie->row();
                            ?>
                <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nazwa</label>
                            <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $a->nazwa; ?></p>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Data</label>
                                <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $a->data; ?></p>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Miejsce</label>
                            <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $a->miejsce; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Opis</label>
                            <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $a->info; ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Uczestnicy szkolenia</label>
                            <div class="col-sm-10"> <?php $l=1; ?>
                            <p class="form-control-static">

                            <?php 
                            foreach ($uczestnicy->result() as $u){
                                echo $l. '. ';
                                echo $u->imie;
                                echo ' ';
                                echo $u->nazwisko. '</br>';
                                $l++;
                                } 
                            ?>
                            </p>
                            </div>
                        </div>

                </form>
                <?php
                    
                    if($this->session->userdata('admin')=='tak'){
                ?>
                <a class="btn btn-primary" href= "<?= base_url();?>szkolenia/edytuj/<?php echo $a->id; ?>">Edytuj</a>
                <?php
                }
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


