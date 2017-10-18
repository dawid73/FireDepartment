
<div id="page-wrapper">

  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Członkowie <small>dodaj</small>
        </h1>
      </div>
      
    </div>
    <!-- /.row -->
    <div class="row">
      
      

      <form class="form-horizontal" action="<?= base_url() ?>Czlonkowie/dodaj" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Imię: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="imie" name="imie" placeholder="Imie" value="<?php echo set_value('imie') ?>">
          </div><?php echo form_error('imie'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nazwisko: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Nazwisko" value="<?php echo set_value('nazwisko') ?>">
          </div><?php echo form_error('nazwisko'); ?>
        </div>


        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Funkcja: </label>
          <div class="col-sm-4">
            <select class="form-control" name="czynny">
              <option value="1">Czynny - Możliwy wyjazd do akcji</option>
              <option value="0">Nie czynny - Niemożliwy wyjazd do akcji</option>
            </select> 

          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Funkcja: </label>
          <div class="col-sm-4">
            <select class="form-control" name="funkcja">
              <option value="1">Zwyczajny</option>
              <option value="2">MDP</option>
              <option value="3">Emerytowany</option>
              <option value="4">Zablokowany</option>
              <option value="5">Skreślony</option>
            </select> 

          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Imię Ojca: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="ojciec" name="ojciec" placeholder="Imię Ojca" value="<?php echo set_value('ojciec') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Płeć: </label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="plec" id="plecm" value="1">
              Mężczyzna
            </label>
            <label class="radio-inline">
              <input type="radio" name="plec" id="pleck" value="2">
              Kobieta
            </label>
          </div><?php echo form_error('plec'); ?>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Pesel: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="pesel" name="pesel" placeholder="Pesel" value="<?php echo set_value('pesel') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nr dowodu: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nrdowodu" name="nrdowodu" placeholder="Nr dowodu" value="<?php echo set_value('nrdowodu') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Data urodzenia: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dataurodzenia" name="dataurodzenia" placeholder="dataurodzenia" value="<?php echo set_value('dataurodzenia') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Miejsce urodzenia: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="miejsceurodzienia" name="miejsceurodzienia" placeholder="Miejsce urodzenia" value="<?php echo set_value('miejsceurodzienia') ?>">
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
            <input type="text" class="form-control" id="ulica" name="ulica" placeholder="Ulica" value="<?php echo set_value('ulica') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Kod pocztowy: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="kodpocztowy" name="kodpocztowy" placeholder="Kod pocztowy" value="<?php echo set_value('kodpocztowy') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Miejscowość: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="miejscowosc" name="miejscowosc" placeholder="Miejscowość" value="<?php echo set_value('miejscowosc') ?>">
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
            <input type="text" class="form-control" id="nrtelefonu" name="nrtelefonu" placeholder="Nr telefonu" value="<?php echo set_value('nrtelefonu') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">E-mail: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" value="<?php echo set_value('email') ?>">
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
            <input type="text" class="form-control" id="badaniedo" name="badaniedo" placeholder="" value="<?php echo set_value('badaniedo') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Szkolenie BHP ważne do: </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="bhpdo" name="bhpdo" placeholder="" value="<?php echo set_value('bhpdo') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Prawo jazdy kat. B:</label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="prawojazdyb" id="prawojazdyb" value="0">
              NIE
            </label>
            <label class="radio-inline">
              <input type="radio" name="prawojazdyb" id="prawojazdyb" value="1">
              TAK
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Prawo jazdy kat. C:</label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="prawojazdyc" id="prawojazdyc" value="0">
              NIE
            </label>
            <label class="radio-inline">
              <input type="radio" name="prawojazdyc" id="prawojazdyc" value="1">
              TAK
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Prowadznie pojazdów uprzywilejowanych:</label>
          <div class="col-sm-4">
            <label class="radio-inline">
              <input type="radio" name="uprawniauprzywi" id="uprawniauprzywi" value="0">
              NIE
            </label>
            <label class="radio-inline">
              <input type="radio" name="uprawniauprzywi" id="uprawniauprzywi" value="1">
              TAK
            </label>
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


