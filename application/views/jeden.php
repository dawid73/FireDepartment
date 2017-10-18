
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->

                <div class="row">
                  <div class="jumbotron">
                    <?php if($info->num_rows() > 0) {
                    $row = $info->row();
                    ?>
                    <h2>Strona główna!! </h2>
                    <blockquote>
                      <p>Aplikacja internetowa Straży Pożarnej: <strong> <?php echo $row->nazwa; ?></strong></p>
                    </blockquote>
                <p align= "center">
                    <?php
                        }
                    ?>
                <img src="image/logo.png" alt="">
                </p>
                </div>

                <div class="panel panel-default">
                  <div class="panel-body">
                    Korzystanie z aplikacji możliwe jedynie po zalogowaniu!
                  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


