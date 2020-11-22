<table id="example1" class="table table-bordered table-striped"> 
                <thead>
                <tr>
                  <th>Contact Primary Email</th>
                  <th>Contact Alternate Email</th>
                  <th>Contact Primary Number</th>
                  <th>Contact Alternate Number</th>
                  <th>Contact Locationsrc</th>
                  <th>Contact Address</th>
                  <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach($res as $row){?>  
                <tr>
                  <td><?php echo $row->contact_mail1 ?></td>
                  <td><?php echo $row->contact_mail2 ?></td>
                  <td><?php echo $row->contact_phone1 ?></td>
                  <td><?php echo $row->contact_phone2 ?></td>
                  <td><?php echo $row->contact_locationsrc ?></td>
                  <td><?php echo $row->contact_address ?></td>

                   <td> <div class="btn-group btn-group-sm">
                        <a data-toggle="modal" data-target="#modal-xl" onclick="editadminContact('<?php echo $row->contact_id ?>');" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    </div>


                  </td>
                </tr>

                <?php } ?>

             
                </tbody>
              </table>