<table id="example" class="display nowrap" style="width:100%"> 
                <thead>
                <tr>
                  <th>IOA_LM_no</th>
                  <th>Registration no</th>
                  <th>Name</th>
                  <th>Photo</th>
                  <th>Hospital Name</th>                  
                  <th>Present Address 1</th>
                  <!-- <th>District</th>
                  <th>District Club</th> -->
                  <!-- <th>Institution</th> -->
                  <th>Mail id</th>
                  <!-- <th>Password</th>
                  <th>Street</th>
                  <th>City</th>
                  <th>District</th>
                  <th>Pincode</th> -->
                  <th>Phone no</th>
                  <!-- <th>Fax</th> -->
                  
                  <th>Payment Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach($res as $row){?>  
                <tr>
                  <td><?php echo $row->IOA_LM_no ?></td>
                  <td><?php echo $row->KOA_Reg_No ?></td>
                  <td><?php echo $row->Name ?></td>
                   <td><a href="<?php echo base_url(); ?>uploads/<?php echo $row->Photo ?>" title="click to see"><img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->Photo ?>"></a></td>
                  <td><?php echo $row->Hospital_Name ?></td>
                  <td><?php echo $row->Present_Address_1 ?></td>
                  <td><?php echo $row->Email_id ?></td>
                  <td><?php echo $row->Mob_no ?></td>
                  
                 
                  <?php if($row->pay_stat=='on'){ ?>
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
                        <a onclick="deletemember('<?php echo $row->members_id ?>','<?php echo $row->Photo ?>');" class="btn btn-danger">&times;</a>
                         <a data-toggle="modal" data-target="#modal-xls" onclick="viewmember('<?php echo $row->members_id ?>')" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
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