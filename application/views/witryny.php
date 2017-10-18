
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Witryny <small>wszystkie, lista</small>
                        </h1>
                    </div>
                        
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                        <table class="table table-striped">
                            <tr>
                                <th>Nazwa</th>
                                <th>Adres</th>
                                <th>Autor</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php for($i=0;$i<count($witryna);$i++){ ?>
                            <tr>
                                <td><?php echo $witryna[$i]['nazwa']?></td>
                                <td><?php echo $witryna[$i]['adres']?></td>
                                <td><?php echo $witryna[$i]['autor']?></td>
                                <td>EDYTUJ</td>
                                <td>USUŃ</td>
                            </tr>
                            <?php }?>
                        </table>

                    </div>
                </div>
                <div class="row">

                    <a class="btn btn-primary" href= "<?= base_url();?>witryny/dodaj">Dodaj</a>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


