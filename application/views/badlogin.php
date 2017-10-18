
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->

                <div class="row">
                  <div class="jumbotron">
                    <h3>Zły login lub hasło!! </h3>
                    Spróbuj jeszcze raz wprowadzić dane: <p>

                    <?php  if($this->session->userdata('admin')!='tak'){?>

                    <form class="form-horizontal" action="<?= base_url()?>start" method="post">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control input-sm" id="login" name="login" placeholder="Login">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Hasło</label>
                        <div class="col-sm-3">
                          <input type="password" class="form-control input-sm" id="haslo" name="haslo" placeholder="Haslo">
                        </div>
                      </div>
                      <input type="hidden" name="logowanie" value="tak">
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Zaloguj</button>
                        </div>
                      </div>
                    </form>
                    <h5><small>Jeżeli zapomniałeś hasła zwróć się z prośbą o przywrócenie do Administratora.</small></h5>
                    <?php } ?>

                    
                <p>
                <img src="image/logo.png" alt="">
                </p>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


