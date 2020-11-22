!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<table border="1" cellspacing="5" cellpadding="5">
  <tr>
    <th>First Name</th>  <!--tag th is used for table heading -->
    <th>Last Name</th>
    <th>Middle Name</th>
    <th>Specialty</th>
    <th>highestqualification</th>
    <th>department</th>
    <th>institution</th>
    <th>email</th>
  <th>street</th>
  <th>city</th>
   <th> state</th>
   <th> pin</th>
   <th>contact</th>
   <th> fax</th>
   <th>date</th>

  </tr>
  
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";           
  echo "<td>".$i."</td>";           
  echo "<td>".$row->firstname."</td>";
  echo "<td>".$row->lastname."</td>";
  echo "<td>".$row->middlename."</td>";
  echo "<td>".$row->speciality."</td>";
  echo "<td>".$row->highestqualification."</td>";
  echo "<td>".$row->department."</td>";
  echo "<td>".$row->institution."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->street."</td>";
  echo "<td>".$row->city."</td>";
  echo "<td>".$row->state."</td>";
  echo "<td>".$row->pin."</td>";
  echo "<td>".$row->contact."</td>";
  echo "<td>".$row->fax."</td>";
  echo "<td>".$row->date."</td>";

  echo "</tr>";
  $i++;
  }
  ?>

</table>
</body>
</html>