
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Członkowie
                        </h1>
                    </div>
                        
                </div>
                <!-- /.row -->
                <div class="row">

                    <div class="col-lg-8" style="padding-bottom: 10px">
                        <form class="form-inline" action=" <?= base_url('czlonkowie/szukaj'); ?>" method="get">
                          <div class="form-group">
                            <label>Szukaj</label>
                            <input type="text" class="form-control" id="s" name="s" placeholder="">
                          </div>
                          <button type="submit" class="btn btn-default ">Szukaj</button>
                        </form>
                    </div>

                    <div class="col-lg-8">
                        <table class="table table-condensed">
                            <tr>
                                <th>Nazwisko</th>
                                <th>Imię</th>
                                <th>Pesel</th>
                                <th>Płeć</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php 
                               foreach ($czlonek as $czl){ ?>
                                <tr>
                                <td><?= $czl->nazwisko ?></td>
                                <td><?= $czl->imie ?></td>
                                <td><?= $czl->pesel ?></td>
                                <td><?= $czl->plec==1?'Mężczyzna':'Kobieta' ?></td>
                                <td><a href="<?= base_url('czlonkowie/usun/'.$czl->id) ?>" class='btn btn-danger btn-xs' onclick="return confirm('Czy na pewno chcesz usunąć?')">USUŃ</td>
                                <td><a href="<?= base_url('czlonkowie/edytuj/'.$czl->id) ?>" class='btn btn-info btn-xs' > EDYTUJ</td>
                            </tr>
                            <?php }?>
                        </table>

                    </div>
                </div>
                <div class="row">

                    <a class="btn btn-primary" href= "<?= base_url();?>czlonkowie/dodaj">Dodaj</a>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


