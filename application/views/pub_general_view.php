<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            KBD Activation Status
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-teal">

                    <a href="<?php echo site_url('pub') ?>" class="text-white">
                        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Phase 1. Foundation</span>
                            <span class="progress-description">
                    Overall Status: <span class="label label-success">On Track</span>
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-aqua">
                    <a href="<?php echo site_url('pub') ?>" class="text-white">
                        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Phase 2. Operationalization</span>
                            <span class="progress-description">
                    Overall Status: <span class="label label-success">On Track</span>

                  </span>
                        </div>
                    </a>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-light-blue">
                    <a href="<?php echo site_url('pub') ?>" class="text-white">
                        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Phase 3. Optimization</span>
                            <span class="progress-desvcription">
                    Overall Status: <span class="label label-success">On Track</span>

                  </span>
                        </div>
                    </a>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>
        <div class="row">
            <?php for ($i = 1; $i < 4; $i++)
            { ?>
                <div class="col-md-4">
                    <div class="box collapsed-box">
                        <div class="box-header <?php echo $i === 1 ? 'bg-teal' :
                            ($i === 2 ? 'bg-aqua' : 'bg-light-blue') ?>">
                            <h3 class="box-title">
                                <?php echo $i === 1 ? 'PHASE 1. FOUNDATION' :
                                    ($i === 2 ? 'Phase 2. Operationalization' : 'Phase 3. Optimization') ?>
                            </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <thead>
                                <tr>

                                    <th>Task</th>
                                    <th>Status</th>
                                    <th>Owner</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($tasks as $task)
                                { ?>
                                    <?php if ($task->task->phase == $i)
                                { ?>
                                    <tr>
                                        <td> <?php echo $task->task->name ?></td>
                                        <td><span id="<?php echo $task->id ?>" class="label
<?php echo $task->status === 'On Track' ? 'label-success' :
                                                ($task->status === 'Fair' ? 'label-warning' :
                                                    ($task->status === 'Off Track' ? 'label-danger' : 'bg-black')) ?>
">
                                                <?php if ($this->ion_auth->is_admin())
                                                { ?>
                                                <a class="text-white" href="#"
                                                   data-name="status"
                                                   data-type="select"
                                                   data-pk="<?php echo $task->id ?>"
                                                   data-title="Select status"
                                                   data-value="<?php echo $task->status ?>">
                                                        <?php } ?>
                                                        <?php echo $task->status ?>
                                                        <?php if ($this->ion_auth->is_admin())
                                                        { ?>
                                                </a>
                                            <?php } ?>
                                                                                    </span>
                                        </td>
                                        <td><?php echo $task->owner ?></td>
                                    </tr>
                                <?php }
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->