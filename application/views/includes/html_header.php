<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APLIKACJA - Straż pożarna</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url();?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?= base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link href="<?= base_url();?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <script type="text/javascript" src="<?= base_url();?>assets/js/jquery-1.12.0.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url()?>">APLIKACJA - STRAŻ POŻARNA</a>
            </div>
            <!-- Top Menu Items -->

            <ul class="nav navbar-right top-nav">
            <?php  if($this->session->userdata('admin')!='tak'){?>

               <li class="dropdown" style="padding: 10px 2px">
                <form action="<?= base_url()?>start" class="form-inline" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control input-sm" id="login" name="login" placeholder="Login">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control input-sm" id="haslo" name="haslo" placeholder="Haslo">
                  </div>
                  <input type="hidden" name="logowanie" value="tak">
                  <button type="submit" class="btn btn-primary btn-sm">Zaloguj</button>
                </form>
                    
               </li>
            </form>
            <?php } ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('imie'); ?> <b class="caret"></b></a>
                    <?php if($this->session->userdata('admin')=='tak'){ ?>
                    <ul class="dropdown-menu">
                      <!--  <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profil </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Ustawienia</a>
                        </li>
                    -->
                        <li class="divider"></li>
                        <li>
                            <a href=" <?= base_url()?>Wyloguj"> <i class="fa fa-fw fa-power-off"></i> Wyloguj</a>
                        </li>
                    </ul> 
                    <?php } ?>
                </li>
            </ul>