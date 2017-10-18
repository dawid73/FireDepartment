
<div id="page-wrapper">

  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Sprzęt <small>dodaj</small>
        </h1>
      </div>
      
    </div>
    <!-- /.row -->
    <div class="row">
      
      <?php
      $s = $spr->row();
      ?>
      

      <form class="form-horizontal" action="<?= base_url() ?>sprzet/edytuj/<?php echo $s->id ?>" method="post">
        <input type="hidden" name="id" id="id" value=<?php echo $s->id ?>>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Producent: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="producent" name="producent" placeholder="Producent" value=<?php echo $s->producent ?>>
          </div><?php echo form_error('producent'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Model: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="model" name="model" placeholder="Model" value=<?php echo $s->model ?>>
          </div><?php echo form_error('model'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Numer: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="rodzaj" name="rodzaj" placeholder="Numer" value=<?php echo $s->rodzaj ?>>
          </div><?php echo form_error('rodzaj'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Data produkcji: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dataprodukcji" name="dataprodukcji" placeholder="" value=<?php echo $s->dataprodukcji ?>>
          </div><?php echo form_error('dataprodukcji'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Paliwo: </label>
          <div class="col-sm-4">
            <select class="form-control" name="rodzajpaliwa">
              <option value="1" <?php if($s->rodzajpaliwa=='1'){ echo 'selected="selected"';}?>>Benzyna</option>
              <option value="0" <?php if($s->rodzajpaliwa=='0'){ echo 'selected="selected"';}?>>Diesel</option>
            </select> 

          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Przegląd ważny do: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="databadania" name="databadania" placeholder="" value=<?php echo $s->databadania ?>>
          </div><?php echo form_error('databadania'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Opis (informacje dodatkowe)</label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="2" id="info" name="info"><?php echo $s->info ?></textarea>
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Edytuj</button>
          </div>
        </div>

      </form>
    </div>


  </div>
  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


