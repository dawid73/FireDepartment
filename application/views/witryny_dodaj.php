
        <div id="page-wrapper">


            <div class="container-fluid">

                    <h1 class="page-header">Dodaj witryne</h1>

                    <div class="row">
                        <form action="<?= base_url() ?>witryny/DodajDoBazy" method="post">

                        <div class="col-xs-6 col-md-4">
                            <div class="form-group">
                                <label for="imie">Nazwa</label>
                                <input type="text" class="form-control" id="nazwa" name="nazwa" placeholder="Nazwa" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="form-group">
                                <label for="nazwisko">Adres</label>
                                <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-3">
                                <label for="poziom">Autor</label>
                                <select id="poziom" class="form-control" name="autor"> 
                                    <?php
                                        for ($i=0;$i<count($nazwisko);$i++){
                                            echo '<option value="'.$nazwisko[$i]['id'].'"> '.$nazwisko[$i]['nazwisko'].' </option>';
                                        }
                                    ?>
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


