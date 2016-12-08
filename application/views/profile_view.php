<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title ?>
            <small>Orion</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $this->_user->first_name . ' ' . $this->_user->last_name ?></h3>
            </div>
            <div class="box-body">
                <h1>Change Password</h1>

                <div id="infoMessage"><?php echo $message; ?></div>

                <?php echo form_open("profile"); ?>
                <div class="form-group">
                    <label for="old">Old Password</label>
                    <?php echo form_input($old_password); ?>
                </div>
                <div class="form-group">
                    <label for="new"><?php echo sprintf('New Password', $min_password_length); ?></label>
                    <?php echo form_input($new_password); ?>
                </div>
                <div class="form-group">
                    <label for="new_confirm">Confirm New Password</label>
                    <?php echo form_input($new_password_confirm); ?>
                </div>
                <?php echo form_input($user_id); ?>
                <?php echo form_submit('submit', 'Save', 'class="btn btn-primary pull-right"'); ?>

                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- /.box-body -->

</div>
<!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->