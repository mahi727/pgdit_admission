<?php $CI =& get_instance(); ?>
<!DOCTYPE html>
<html>
<style>
    .wrapper {
        background-color: white;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="assets/img/iitlogo.png">
    <title><?php echo $title;?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
 //   $this->load->view('Layout/css');
    ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
    $this->load->view('Layout/header');
  //  $this->load->view('Layout/leftMenu');
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
<!--        <section class="content-header" style="font-weight: bold; font-size: 16px">-->
<!--            --><?php //echo $header;?>
<!--        </section>-->


        <?php echo !empty($content) ? $content : ''; ?>

    </div>

</div>
<!-- ./wrapper -->
    <?php
    $this->load->view('Layout/footer');
    ?>

</body>
</html>
