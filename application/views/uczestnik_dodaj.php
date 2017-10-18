                    <div class="col-lg-8" style="padding-bottom: 10px">
                      <form class="form-inline" action=" <?= base_url('akcje/uczestnicy'); ?>" method="get">
                        <div class="form-group">
                          <label>Szukaj</label>
                          <input type="text" class="form-control" id="s" name="s" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-default ">Szukaj</button>
                      </form>
                    </div>

          
                    <?php 
                    
                    foreach ($czl as $cz) { ?>
                    <div class="checkbox">
                      <label>
                        <a href="?redirect&id=<?php echo $cz->id ?>">
                          <?php 
                          echo $cz->imie;
                          echo " ";
                          echo $cz->nazwisko;
                          echo "</br> ";
                          ?></a>
                        </label>
                        <?php } ?>

                      </div>   


                      <?php
  // Sprawdzanie, czyli klikniętą w link
                      if (isset($_GET['redirect']))
                      {
                        $id = $_GET['id'];
                       $_SESSION['nowy'] = $id;
                       ?>
                          <a href="javascript:window.close();" onClick="javascript:window.opener.location.reload();">Zamknij okno</a>
                       <?php
                
                     } ?>  

