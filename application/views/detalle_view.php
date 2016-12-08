<div class="container">
          <div class="row">
          <div class="col-lg-12 col-sm-12">
               <table class="table table-striped table-hover">
                    <thead>
                         <tr>
                             
                              <th>pais</th>
                              <th>task</th>
                              <th>Status</th>
                              <th>Owner</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php for ($i = 0; $i < count($detalles); ++$i) { ?>
                              <tr>
                                   
                                   <td><?php echo $detalles[$i]->pais; ?></td>
                                   <td><?php echo $detalles[$i]->task; ?></td>
                                   <td><?php echo $detalles[$i]->Status; ?></td>
                                   <td><?php echo $detalles[$i]->Owner; ?></td>
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
          </div>
          </div>
    