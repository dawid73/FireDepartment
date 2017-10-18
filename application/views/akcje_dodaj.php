  
<div id="page-wrapper">

  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Akcje <small>dodaj</small>
        </h1>
      </div>
      
    </div>
    <!-- /.row -->
    <div class="row">

      <form class="form-horizontal" action="<?= base_url() ?>akcje/dodaj" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nr akcji: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nrakcji" name="nrakcji" placeholder="Nr akcji" value="<?php echo set_value('nrakcji') ?>">
          </div><?php echo form_error('nrakcji'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Wyjazd </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="datawyjazdu" name="datawyjazdu" placeholder="Wyjazd" value="<?php echo set_value('datawyjazdu') ?>">
          </div><?php echo form_error('datawyjazdu'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Powrót </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="datapowrotu" name="datapowrotu" placeholder="Powrót" value="<?php echo set_value('datapowrotu') ?>">
          </div><?php echo form_error('datapowrotu'); ?>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Opis akcji </label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="4" id="opis" name="opis"><?php echo set_value('opis')?></textarea>
          </div>
        </div>
        <!-- Button trigger modal -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Uczestnicy </label>
          <div class="col-sm-8">                        
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#uczestnicy">
              Wybierz
            </button><?php echo form_error('id[]'); ?>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Samochody </label>
          <div class="col-sm-8">                        
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#samochody">
              Wybierz
            </button><?php echo form_error('ids[]'); ?>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Sprzęt </label>
          <div class="col-sm-8">                        
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#sprzet">
              Wybierz
            </button><?php echo form_error('idsp[]'); ?>
          </div>
        </div>


      </br></br>
      <button type="submit" class="btn btn-default">Dodaj</button>

      <!-- Modal -->
      <div class="modal fade" id="uczestnicy" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Uczestnicy akcji</h4>
            </div>
            <div class="modal-body">

              <input class="form-control" type="text" id="szukaj_osoby" placeholder="wpisz imię lub nazwisko">

              <table id="tabela" class="table table-hover">
                <?php foreach ($czl as $cz) { ?>
                <tr>
                  <td><input type="checkbox" name="id[]" value="<?php echo $cz->id; ?>" <?php echo set_checkbox('id[]', $cz->id ); ?> ></td>

                  <td> <?php echo $cz->imie; ?></td>

                  <td><?php echo $cz->nazwisko; ?></td>

                </tr>
                <?php } ?>
              </table>
                <script type="text/javascript">
                  var $rows = $('#tabela tr');
                  $('#szukaj_osoby').keyup(function() {

                    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                    reg = RegExp(val, 'i'),
                    text;

                    $rows.show().filter(function() {
                      text = $(this).text().replace(/\s+/g, ' ');
                      return !reg.test(text);
                    }).hide();
                  });
                </script>
                       
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
            </div>
          </div>
        </div>
      </div>
      <!-- koniec Modal -->


      <!-- Modal -->
      <div class="modal fade" id="samochody" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Samochody biorące udział w akcji</h4>
            </div>
            <div class="modal-body">

              <table id="tabela" class="table table-hover">
                <?php foreach ($sam as $sa) { ?> 
                <tr>
                  <td><input type="checkbox" name="ids[]" value="<?php echo $sa->id; ?>" <?php echo set_checkbox('ids[]', $sa->id ); ?> ></td>

                  <td> <?php echo $sa->producent; ?></td>

                  <td><?php echo $sa->marka; ?></td>

                  <td><?php echo $sa->typ; ?></td>

                  <td><?php echo $sa->rejestracja; ?></td>

                </tr>
                <?php } ?>
              </table>
                       
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
            </div>
          </div>
        </div>
      </div>
      <!-- koniec Modal -->


            <!-- Modal -->
      <div class="modal fade" id="sprzet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Sprzęt biorący udział w akcji</h4>
            </div>
            <div class="modal-body">

              <table id="tabela" class="table table-hover">
                <?php foreach ($spr as $sp) { ?> 
                <tr>
                  <td><input type="checkbox" name="idsp[]" value="<?php echo $sp->id; ?>" <?php echo set_checkbox('idsp[]', $sp->id ); ?> ></td>

                  <td> <?php echo $sp->producent; ?></td>

                  <td><?php echo $sp->model; ?></td>

                  <td><?php echo $sp->rodzaj; ?></td>

                </tr>
                <?php } ?>
              </table>
                       
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
            </div>
          </div>
        </div>
      </div>
      <!-- koniec Modal -->


    </form>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


