<table id="example1" class="table table-bordered table-striped"> 
                <thead>
                <tr>
                  <th>Event Title</th>
                  <th>Event Description</th>
                  <th>Event Venue</th>
                  <th>Event Date</th>
                  <th>Event Image</th>
                  
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach($res as $row){?>  
                <tr>
                  <td><?php echo $row->event_title ?></td>
                  <td><?php echo $row->event_description ?></td>
                  <td><?php echo $row->event_venue ?></td>
                  <td><?php echo $row->event_date ?></td>
                  <td><?php echo $row->event_image ?></td>

                   <td> <div class="btn-group btn-group-sm">
                        <a data-toggle="modal" data-target="#modal-xl" onclick="editadminEvent('<?php echo $row->event_id ?>');" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a onclick="deleteadminEvent('<?php echo $row->event_id ?>','<?php echo $row->event_image ?>');" class="btn btn-danger">&times;</a>
                    </div>


                  </td>
                </tr>

                <?php } ?>

             
                </tbody>
              </table>