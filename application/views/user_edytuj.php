
        <div id="page-wrapper">


            <div class="container-fluid">

                    <h1 class="page-header">Dodaj użytkownika</h1>

                    <div class="row">
                        <form action="<?= base_url() ?>User/edytujWBazie" method="post">



                        <input type="hidden" name="id" id="id" value=<?php echo '"'.$osoba[0]["id"].'"'; ?> />

                        <div class="col-xs-6 col-md-4">
                            <div class="form-group">
                                <label for="imie">Imię</label>
                                <input value= <?php echo '"'.$osoba[0]["imie"].'"'; ?>  type="text" class="form-control" id="imie" name="imie" placeholder="Imię" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="form-group">
                                <label for="nazwisko">Nazwisko</label>
                                <input value= <?php echo '"'.$osoba[0]["nazwisko"].'"'; ?> type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Nazwisko" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div class="form-group">
                                <label for="email">Login</label>
                                <input value= <?php echo '"'.$osoba[0]["login"].'"'; ?> type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <div class="form-group">
                                <label for="haslo">Hasło</label>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="zmienhaslo" value="yes" > Edytuj hasło
                                        </label>
                                      </div>
                                <input type="password" class="form-control" id="haslo" name="haslo" value="********" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-3">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status" >
                                    <option value="1"> --- </option>
                                    <option value="1" <?php if($osoba[0]["status"]==1) echo 'selected="selected"' ?> > Aktywny </option>
                                    <option value="0" <?php if($osoba[0]["status"]==0) echo 'selected="selected"' ?>> Zablokowany </option>
                                </select>
                        </div>
                        <div class="col-xs-6 col-md-3">
                                <label for="poziom">Poziom</label>
                                <select id="poziom" class="form-control" name="poziom">
                                    <option value="0"> --- </option>
                                    <option value="0" <?php if($osoba[0]["uprawnienia"]==0) echo 'selected="selected"' ?>> Użytkownik </option>
                                    <option value="1" <?php if($osoba[0]["uprawnienia"]==1) echo 'selected="selected"' ?>> Administrator </option>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-10"><h6 style="color:red;">Aby zamienić hasło użytkownika zaznacz "edytuj hasło". Bez zaznaczenia hasło nie zostanie zmienione!</h6></div>
                        <div class="col-xs-6 col-md-2">
                            <button type="submit" class="btn btn-success">Wyślij</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>


                        </form>

            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


