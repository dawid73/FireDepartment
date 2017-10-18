
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Szkolenia <small></small>
                        </h1>
                    </div>
                        
                </div>
                <!-- /.row -->
                <div class="row">

                    <div class="col-lg-8" style="padding-bottom: 10px">
                        <form class="form-inline" action=" <?= base_url('szkolenia/szukaj'); ?>" method="get">
                          <div class="form-group">
                            <label>Nazwa szkolenia </label>
                            <input type="text" class="form-control" id="s" name="s" placeholder="">
                            <label> Od </label>
                            <input type="text" class="form-control" id="od" name="od" placeholder="Wyjazd" value="">
                            <label> Do </label>
                            <input type="text" class="form-control" id="do" name="do" placeholder="Wyjazd" value="">
                          </div>
                          <button type="submit" class="btn btn-default ">Szukaj</button>
                        </form>
                    </div>

                    <div class="col-lg-8">
                        <table class="table table-condensed">
                            <tr>
                                <th>Nazwa szkolenia</th>
                                <th>Data szkolenia</th>
                                <th>Miejsce</th>
                                <th>Info</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php 
                               foreach ($szk as $ak){ ?>
                                <tr>
                                <td><?= $ak->nazwa ?></td>
                                <td><?= $ak->data ?></td>
                                <td><?= $ak->miejsce ?></td>
                                <td><?= $ak->info ?></td>
                                <td><a href=" <?php echo base_url() ?>szkolenia/info/<?php echo $ak->id ?> ">Szczególy</a></td>
                                <td><a href="<?= base_url('szkolenia/usun/'.$ak->id) ?>" class='btn btn-danger btn-xs' onclick="return confirm('Czy na pewno chcesz usunąć?')">Usuń</td>
                            </tr>
                            <?php }?>
                        </table>


                    </div>
                </div>
                <div class="row">

                    <a class="btn btn-primary" href= "<?= base_url();?>szkolenia/dodaj">Dodaj</a>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


