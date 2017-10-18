
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Użytkownicy <small>użytkownicy systemu</small>
                        </h1>
                    </div>
                        
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                        <table class="table table-striped">
                            <tr>
                                <th>Nazwisko</th>
                                <th>Imię</th>
                                <th>Uprawnienia</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php 
                               foreach ($uzytkownicy as $u) {
                                   # code...
                                ?>
                            <tr >
                                <td><?php echo $u->nazwisko ?></td>
                                <td><?php echo $u->imie ?></td>
                                <td>
                                     <?php
                                        if($u->uprawnienia == 0){
                                            echo 'NORMAL';
                                        } else if($u->uprawnienia == 1){
                                            echo 'ADMIN';
                                        }
                                     ?>   
                                </td>
                                <td>
                                     <?php
                                        if($u->status == 0){
                                            echo 'disable';
                                        } else if($u->status == 1){
                                            echo 'enable';
                                        }
                                     ?> 
                                </td>
                                <td>
                                    <?php echo "<a href='".base_url()."user/edytuj/".$u->id."'>EDYTUJ </a>"?>
                                </td>
                                <td><a href="<?= base_url('user/usun/'.$u->id) ?>" class='btn btn-danger btn-group' onclick="return confirm('Czy na pewno chcesz usunąć?')">USUŃ</a></td>
                            </tr>
                            <?php }?>
                        </table>

                    </div>
                </div>
                <div class="row">

                    <a class="btn btn-primary" href= "<?= base_url();?>user/dodaj">Dodaj</a>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


