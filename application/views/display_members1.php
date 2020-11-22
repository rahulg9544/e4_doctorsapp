<table id="example1" class="table table-bordered table-striped"> 
                <thead>
                <tr>
                  <th>Registration no</th>
                  <th>First name</th>
                  <th>Middle name</th>
                  <th>Last name</th>                  
                  <th>Speciality</th>
                  <th>High Qualification</th>
                  <th>Department</th>
                  <th>Institution</th>
                  <th>Mail id</th>
                  <th>Password</th>
                  <th>Street</th>
                  <th>City</th>
                  <th>District</th>
                  <th>Pincode</th>
                  <th>Phone no</th>
                  <th>Fax</th>
                  <th>Photo</th>
                  <th>Payment Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach($res as $row){?>  
                <tr>
                  <td><?php echo $row->members_regno ?></td>
                  <td><?php echo $row->members_fname ?></td>
                  <td><?php echo $row->members_mname ?></td>
                  <td><?php echo $row->members_lname ?></td>
                  <td><?php echo $row->members_speciality ?></td>
                  <td><?php echo $row->members_qualify ?></td>
                  <td><?php echo $row->members_dep ?></td>
                  <td><?php echo $row->members_inst ?></td>
                  <td><?php echo $row->members_mail ?></td>
                  <td><?php echo $row->members_password ?></td>
                  <td><?php echo $row->members_street ?></td>
                  <td><?php echo $row->members_city ?></td>
                  <td><?php echo $row->members_dist ?></td>
                  <td><?php echo $row->members_pin ?></td>
                  <td><?php echo $row->members_phone ?></td>
                  <td><?php echo $row->members_fax ?></td>
                  <td><a href="<?php echo base_url(); ?>uploads/<?php echo $row->members_pic ?>" title="click to see"><img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->members_pic ?>"></a></td>
                  <?php if($row->members_payment_stat=='on'){ ?>
                  <td>Done</td>
                <?php }
                   else
                   {
                 ?>
                   <td>Not done</td>
                 <?php } ?>
                  <td> 

                    <div class="btn-group btn-group-sm">
                        <a data-toggle="modal" data-target="#modal-xl" onclick="editmember('<?php echo $row->members_id ?>');" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a onclick="deletemember('<?php echo $row->members_id ?>','<?php echo $row->members_pic ?>');" class="btn btn-danger">&times;</a>
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