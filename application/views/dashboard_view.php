<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title ?>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-teal">
                    <a href="<?php echo site_url('country') ?>" class="text-white">
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
                    <a href="<?php echo site_url('country') ?>" class="text-white">
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
                    <a href="<?php echo site_url('country') ?>" class="text-white">
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
            <div class="col-md-4">
                <div class="box collapsed-box">
                    <div class="box-header bg-teal">
                        <h3 class="box-title">PHASE 1. FOUNDATION</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
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

                            <tr>
                                <td style="width: 20px">KBDs Alignment Country/Category/Channel/Customer</td>
                                <td><span class="label label-success"> On Track</span></td>
                                <td>Rondon</td>
                            </tr>
                            <tr>
                                <td>Scope definition, Where to play - Top Combinations, 80% NOS</td>
                                <td><span class="label label-success"> On Track</span></td>
                                <td>Rondon</td>
                            </tr>
                            <tr>
                                <td>Data Readiness - Direct Channel</td>
                                <td><span class="label label-success"> On Track</span></td>
                                <td>Avelar</td>
                            </tr>
                            <tr>
                                <td>Data Readiness - Indirect Channel</td>
                                <td><span class="label label-warning">Fair</span></td>
                                <td>Avelar</td>
                            </tr>
                            <tr>
                                <td>Analytic Reporting</td>
                                <td><span class="label label-warning">Fair</span></td>
                                <td>Dadi</td>
                            </tr>
                            <tr>
                                <td>Business Review Process - Insights and Action Planning</td>
                                <td><span class="label label-warning">Fair</span></td>
                                <td>Dadi</td>
                            </tr>
                            <tr>
                                <td>Perfect Stores program and capabilities in place</td>
                                <td><span class="label label-warning">Fair</span></td>
                                <td>Rondon</td>
                            </tr>
                            <tr>
                                <td>Performance Indicator tied to Rating/Compensation</td>
                                <td><span class="label label-warning">Fair</span></td>
                                <td>Rondon</td>
                            </tr>
                            <tr>
                                <td>KBDs tied to Peformance Indicator - standard scorecard</td>
                                <td><span class="label label-warning">Fair</span></td>
                                <td>Rondon</td>
                            </tr>
                            <tr>
                                <td>KBDs tied to ITTs</td>
                                <td><span class="label label-danger"> OFF Track</span></td>
                                <td>Rondon</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box collapsed-box">
                    <div class="box-header bg-aqua">
                        <h3 class="box-title">Phase 2. Operationalization</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
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
                            <?php for ($i = 0; $i < count($detalles2); ++$i)
                            { ?>
                                <tr>

                                    <td><?php echo $detalles2[$i]->task; ?></td>
                                    <td><span
                                            class="label <?php echo $detalles[$i]->Status == 'On Track' ? 'label-success' : ($detalles[$i]->Status == 'Off Track' ? 'label-danger' : 'label-warning') ?>"><?php echo $detalles2[$i]->Status; ?></span>
                                    </td>
                                    <td><?php echo $detalles2[$i]->Owner; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box collapsed-box">
                    <div class="box-header bg-light-blue">
                        <h3 class="box-title">Phase 3. Optimization</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
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
                            <?php for ($i = 0; $i < count($detalles3); ++$i)
                            { ?>
                                <tr>

                                    <td><?php echo $detalles3[$i]->task; ?></td>
                                    <td><span
                                            class="label <?php echo $detalles3[$i]->Status === 'On Track' ? 'label-success' : ($detalles3[$i]->Status === 'Off Track' ? 'label-danger' : 'bg-black') ?>"><?php echo $detalles3[$i]->Status; ?></span>
                                    </td>
                                    <td><?php echo $detalles3[$i]->Owner; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->