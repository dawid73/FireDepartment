
<div id="page-wrapper">

  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Samochody <small>dodaj</small>
        </h1>
      </div>
      
    </div>
    <!-- /.row -->
    <div class="row">
      
      

      <form class="form-horizontal" action="<?= base_url() ?>samochody/dodaj" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Producent: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="producent" name="producent" placeholder="Producent" value="<?php echo set_value('imie') ?>">
          </div><?php echo form_error('producent'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Model: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="marka" name="marka" placeholder="Model">
          </div><?php echo form_error('marka'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Rejestracja: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="rejestracja" name="rejestracja" placeholder="Rejestacja">
          </div><?php echo form_error('rejestracja'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Numery: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="typ" name="typ" placeholder="Numer">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Data produkcji: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dataprodukcji" name="dataprodukcji" placeholder="">
          </div><?php echo form_error('dataprodukcji'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Paliwo: </label>
          <div class="col-sm-4">
            <select class="form-control" name="paliwo">
              <option value="1">Benzyna</option>
              <option value="0">Diesel</option>
            </select> 
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Numer VIN: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="vin" name="vin" placeholder="Numer VIN">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Badania ważne do: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dataprzegladu" name="dataprzegladu" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Ubezpieczenie ważne do: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dataubezpieczenia" name="dataubezpieczenia" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Numer polisy OC/AC: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nrpolisy" name="nrpolisy" placeholder="Numer polisy OC/AC">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Uwagi (informacje dodatkowe)</label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="2" id="uwagi" name="uwagi"></textarea>
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Dodaj</button>
          </div>
        </div>

      </form>
    </div>


  </div>
  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


