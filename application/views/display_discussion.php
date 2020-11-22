<table id="example1" class="table table-bordered table-striped"> 
                <thead>
                <tr>
                  <th>Discussion name</th>
                  <th>Topic</th>
                  <th>Status</th>
                 
                 
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach($res as $row){?>  
                <tr>
                  <td><?php echo $row->discussion_name ?></td>
                  <td><?php echo $row->discussion_topic ?></td>
                  
                  
                  <td>
                          <?php 
                          $stat = $row->discussion_status;

                          if($stat==1)
                          {

                          ?>
                          <button class="btn btn-success"  onclick="priority_set1('<?php echo $row->discussion_id;?>','1');" >Active</button>
                         <?php
                           }
                           else
                           {
                          ?>
                          <button class="btn btn-danger"  onclick="priority_set1('<?php echo $row->discussion_id;?>','2');" >Inactive</button>
                        <?php } ?>
                    </td>
                    <td>
                    <div class="btn-group btn-group-sm">
                        <a data-toggle="modal" data-target="#modal-xl" onclick="editdesc('<?php echo $row->discussion_id ?>');" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a onclick="deletedesc('<?php echo $row->discussion_id ?>');" class="btn btn-danger">&times;</a>
                    </div>


                  </td>
                </tr>

                <?php } ?>

             
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>