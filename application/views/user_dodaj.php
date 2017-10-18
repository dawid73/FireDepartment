
        <div id="page-wrapper">


            <div class="container-fluid">

                    <h1 class="page-header">Dodaj użytkownika</h1>

                    <div class="row">
                        <form action="<?= base_url() ?>User/DodajDoBazy" method="post">

                        <div class="col-xs-6 col-md-4">
                            <div class="form-group">
                                <label for="imie">Imię</label>
                                <input type="text" class="form-control" id="imie" name="imie" placeholder="Imię" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="form-group">
                                <label for="nazwisko">Nazwisko</label>
                                <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Nazwisko" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div class="form-group">
                                <label for="email">Login</label>
                                <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <div class="form-group">
                                <label for="haslo">Hasło</label>
                                <input type="password" class="form-control" id="haslo" name="haslo" placeholder="Hasło" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-3">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="1"> --- </option>
                                    <option value="1"> Aktywny </option>
                                    <option value="0"> Zablokowany </option>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-10"></div>
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


