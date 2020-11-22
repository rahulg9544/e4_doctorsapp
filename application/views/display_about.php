<table id="example1" class="table table-bordered table-striped"> 
                <thead>
                <tr>
                  <th>About Title</th>
                  <th>About Description</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach($res as $row){?>  
                <tr>
                  <td><?php echo $row->about_title ?></td>
                  <td><?php echo $row->about_description ?></td>
                  

                   <td> <div class="btn-group btn-group-sm">
                        <a data-toggle="modal" data-target="#modal-xl" onclick="editadminAbout('<?php echo $row->about_id ?>');" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    </div>


                  </td>
                </tr>

                <?php } ?>

             
                </tbody>
              </table>