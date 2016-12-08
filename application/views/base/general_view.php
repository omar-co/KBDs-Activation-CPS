<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('base/header_view'); ?>
</head>


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <?php $this->load->view('base/menu_view'); ?>


    <?php $this->load->view($view); ?>


    <?php $this->load->view('base/footer_view') ?>
</body>
</html>
