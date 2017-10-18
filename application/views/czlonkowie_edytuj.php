
<div id="page-wrapper">

  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Członkowie <small>edytuj</small>
        </h1>
      </div>
      
    </div>
    <!-- /.row -->
    <div class="row">

      <?php
      $row = $czlonkowie->row();
      ?>
      

      <form class="form-horizontal" action="<?= base_url() ?>Czlonkowie/edytuj/<?php echo $row->id ?>" method="post">
      <input type="hidden" name="id" id="id" value=<?php echo $row->id ?>>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Imię: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="imie" name="imie" placeholder="Imie" value=<?php echo $row->imie ?> >
          </div><?php echo form_error('imie'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nazwisko: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Nazwisko" value=<?php echo $row->nazwisko ?>>
          </div><?php echo form_error('nazwisko'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Wyjazd do akcji: </label>
          <div class="col-sm-4">
            <select class="form-control" name="czynny">
              <option class=" btn-success" value="1" <?php if($row->czynny == '1'){ echo 'selected="selected"';} ?>>Czynny - Możliwy wyjazd do akcji</option>
              <option class=" btn-danger" value="0" <?php if($row->czynny == '0'){ echo 'selected="selected"';} ?>>Nie czynny - Niemożliwy wyjazd do akcji</option>
            </select> 

          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Funkcja: </label>
          <div class="col-sm-4">
            <select class="form-control" name="funkcja">
              <option value="1" <?php if($row->funkcja == '1'){ echo 'selected="selected"';} ?>>Zwyczajny</option>
              <option value="2" <?php if($row->funkcja == '2'){ echo 'selected="selected"';} ?>>MDP</option>
              <option value="3" <?php if($row->funkcja == '3'){ echo 'selected="selected"';} ?>>Emerytowany</option>
              <option value="4" <?php if($row->funkcja == '4'){ echo 'selected="selected"';} ?>>Zablokowany</option>
              <option value="5" <?php if($row->funkcja == '5'){ echo 'selected="selected"';} ?>>Skreślony</option>
            </select> 

          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Imię Ojca: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="ojciec" name="ojciec" placeholder="Imię Ojca" value=<?php echo $row->ojciec ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Płeć: </label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="plec" id="plecm" value="1" <?php if($row->plec == '1'){ echo 'checked="checked"';} ?>>
              Mężczyzna
            </label>
            <label class="radio-inline">
              <input type="radio" name="plec" id="pleck" value="2" <?php if($row->plec == '2'){ echo 'checked="checked"';} ?>>
              Kobieta
            </label>
          </div><?php echo form_error('plec'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Pesel: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="pesel" name="pesel" placeholder="Pesel" value=<?php echo $row->pesel ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nr dowodu: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nrdowodu" name="nrdowodu" placeholder="Nr dowodu" value=<?php echo $row->nrdowodu ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Data urodzenia: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dataurodzenia" name="dataurodzenia" placeholder="dataurodzenia" value=<?php echo $row->dataurodzenia ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Miejsce urodzenia: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="miejsceurodzienia" name="miejsceurodzienia" placeholder="Miejsce urodzenia" value=<?php echo $row->miejsceurodzienia ?>>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-3"><p class="lead">Miejsce zamieszkania</p></div>
          <div class="col-sm-6"></div>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Ulica: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="ulica" name="ulica" placeholder="Ulica" value=<?php echo $row->ulica ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Kod pocztowy: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="kodpocztowy" name="kodpocztowy" placeholder="Kod pocztowy" value=<?php echo $row->kodpocztowy ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Miejscowość: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="miejscowosc" name="miejscowosc" placeholder="Miejscowość" value=<?php echo $row->miejscowosc ?>>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-3"><p class="lead">Kontakt</p></div>
          <div class="col-sm-6"></div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nr telefonu: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nrtelefonu" name="nrtelefonu" placeholder="Nr telefonu" value=<?php echo $row->nrtelefonu ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">E-mail: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" value=<?php echo $row->email ?>>
          </div><?php echo form_error('email'); ?>
        </div>

        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-3"><p class="lead">----------</p></div>
          <div class="col-sm-6"></div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Badania lekarskie ważne do: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="badaniedo" name="badaniedo" placeholder="" value=<?php echo $row->badaniedo ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Szkolenie BHP ważne do: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="bhpdo" name="bhpdo" placeholder="" value=<?php echo $row->bhpdo ?>>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Prawo jazdy kat. B:</label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="prawojazdyb" id="prawojazdyb" value="0" <?php if($row->prawojazdyb == '0'){ echo 'checked="checked"';} ?>>
              NIE
            </label>
            <label class="radio-inline">
              <input type="radio" name="prawojazdyb" id="prawojazdyb" value="1" <?php if($row->prawojazdyb == '1'){ echo 'checked="checked"';} ?>>
              TAK
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Prawo jazdy kat. C:</label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="prawojazdyc" id="prawojazdyc" value="0" <?php if($row->prawojazdyc == '0'){ echo 'checked="checked"';} ?>>
              NIE
            </label>
            <label class="radio-inline">
              <input type="radio" name="prawojazdyc" id="prawojazdyc" value="1" <?php if($row->prawojazdyc == '1'){ echo 'checked="checked"';} ?>>
              TAK
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Prowadznie pojazdów uprzywilejowanych:</label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="uprawniauprzywi" id="uprawniauprzywi" value="0" <?php if($row->uprawniauprzywi == '0'){ echo 'checked="checked"';} ?>>
              NIE
            </label>
            <label class="radio-inline">
              <input type="radio" name="uprawniauprzywi" id="uprawniauprzywi" value="1" <?php if($row->uprawniauprzywi == '1'){ echo 'checked="checked"';} ?>>
              TAK
            </label>
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


