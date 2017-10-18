
    </div>
    <!-- /#wrapper -->    
    <!-- jQuery -->
    <script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>



    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>

    




    <script src="<?= base_url();?>assets/js/moment.js"></script>
    <script src="<?= base_url();?>assets/js/pl.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <script>
    $(function () {
        $('#datetimepicker2').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD HH:mm'
        });

        $('#dataurodzenia').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

        $('#badaniedo').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

        $('#bhpdo').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

        $('#datawyjazdu').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD HH:mm'
        });

        $('#datapowrotu').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD HH:mm'
        });

        $('#dataprodukcji').datetimepicker({
            locale: 'pl',
            format: 'YYYY'
        });

        $('#databadania').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

        $('#dataprzegladu').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

        $('#dataubezpieczenia').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

        $('#od').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

        $('#do').datetimepicker({
            locale: 'pl',
            format: 'YYYY-MM-DD'
        });

    });
    </script>


    <!-- Morris Charts JavaScript -->
    <script src="<?= base_url();?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?= base_url();?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?= base_url();?>assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>
