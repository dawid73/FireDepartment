  
<div id="page-wrapper">

  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Szkolenia <small>dodaj</small>
        </h1>
      </div>
      
    </div>
    <!-- /.row -->
    <div class="row">

      <form class="form-horizontal" action="<?= base_url() ?>szkolenia/dodaj" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nazwa </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nazwa" name="nazwa" placeholder="Nazwa" value="<?php echo set_value('nazwa') ?>">
          </div><?php echo form_error('nazwa'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Data </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="data" name="data" placeholder="Data" value="<?php echo set_value('datawyjazdu') ?>">
          </div><?php echo form_error('data'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Miejsce </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="miejsce" name="miejsce" placeholder="Miejsce" value="<?php echo set_value('miejsce') ?>">
          </div><?php echo form_error('miejsce'); ?>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Opis szkolenia </label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="4" id="info" name="info"><?php echo set_value('info')?></textarea>
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


      </br></br>
      <button type="submit" class="btn btn-default">Dodaj</button>

      <!-- Modal -->
      <div class="modal fade" id="uczestnicy" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Uczestnicy szkolenia</h4>
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

    </form>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


