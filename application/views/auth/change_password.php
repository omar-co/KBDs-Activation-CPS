
<!DOCTYPE html>
<html>
<head>
      <?php $this->load->view('base/header_view'); ?>
</head>


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

      <?php $this->load->view('base/menu_view'); ?>
      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
            <h1>
                  <?php echo $this->ion_auth->user()->first_name . ' ' . $this->ion_auth->user()->last_name ?>
                  <small>Orion</small>
            </h1>
      </section>

      <!-- Main content -->
      <section class="content">

            <!-- Default box -->
            <div class="box table-responsive">
                  <div class="box-header with-border">
                        <h3 class="box-title">Clients</h3>
                  </div>
                  <div class="box-body">
                        <h1><?php echo lang('change_password_heading');?></h1>

                        <div id="infoMessage"><?php echo $message;?></div>

                        <?php echo form_open("auth/change_password");?>

                        <p>
                              <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                              <?php echo form_input($old_password);?>
                        </p>

                        <p>
                              <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                              <?php echo form_input($new_password);?>
                        </p>

                        <p>
                              <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                              <?php echo form_input($new_password_confirm);?>
                        </p>

                        <?php echo form_input($user_id);?>
                        <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

                        <?php echo form_close();?>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                        Footer
                  </div>
                  <!-- /.box-footer-->
            </div>
            <!-- /.box -->

      </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->
      <?php $this->load->view('base/footer_view') ?>
</body>
</html>





