
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Samochody
                        </h1>
                    </div>
                        
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-6">
                        <table class="table table-condensed">
                            <tr>
                                <th>Producent</th>
                                <th>Model</th>
                                <th>Rejestracja</th>
                                <th>Numer</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php 
                               foreach ($samochody as $sam){ ?>
                                <tr>
                                <td><?= $sam->producent ?></td>
                                <td><?= $sam->marka ?></td>
                                <td><?= $sam->rejestracja ?></td>
                                <td><?= $sam->typ ?></td>
                                <td><a href="<?= base_url('samochody/usun/'.$sam->id) ?>" class='btn btn-danger btn-xs' onclick="return confirm('Czy na pewno chcesz usunąć?')">Usuń</td>
                                <td><a href="<?= base_url('samochody/edytuj/'.$sam->id) ?>" class='btn btn-info btn-xs' > Edytuj</td>
                            </tr>
                            <?php }?>
                        </table>

                    </div>
                </div>
                <div class="row">

                    <a class="btn btn-primary" href= "<?= base_url();?>samochody/dodaj">Dodaj</a>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


