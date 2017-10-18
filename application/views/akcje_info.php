
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
                        <?php if($akcje->num_rows() > 0) {
                            $a = $akcje->row();
                            ?>
                <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Numer akcji</label>
                            <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $a->nrakcji; ?></p>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Data wyjazdu</label>
                                <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $a->datawyjazdu; ?></p>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Data powrotu</label>
                            <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $a->datapowrotu; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Opis</label>
                            <div class="col-sm-10">
                            <p class="form-control-static"><?php echo $a->opis; ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Uczestnicy akcji</label>
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

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Samochody:</label>
                            <div class="col-sm-10"> <?php $l=1; ?>
                            <p class="form-control-static">

                            <?php 
                            foreach ($samochody->result() as $s){
                                echo $l. '. ';
                                echo $s->producent;
                                echo ' ';
                                echo $s->marka;
                                echo ' ';
                                echo $s->rejestracja;
                                echo ' ';
                                echo $s->typ. '</br>';
                                $l++;
                                } 
                            ?>
                            </p>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sprzęt:</label>
                            <div class="col-sm-10"> <?php $l=1; ?>
                            <p class="form-control-static">

                            <?php 
                            foreach ($sprzet->result() as $sp){
                                echo $l. '. ';
                                echo $sp->producent;
                                echo ' ';
                                echo $sp->model;
                                echo ' ';
                                echo $sp->rodzaj. '</br>';
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
                <a class="btn btn-primary" href= "<?= base_url();?>akcje/edytuj/<?php echo $a->id; ?>">Edytuj</a>
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


