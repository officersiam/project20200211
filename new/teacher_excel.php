<?php
include ('../functions.php');
$output = '';
if(isset($_POST["excel"]))
{
 $query = "SELECT * FROM users WHERE user_type = 'teacher'";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" border="1">
                    <tr>
                      <th>ID</th>
                      <th>ID Card No</th>
                      <th>Username</th>
                      <th>Full Name</th>
                      <th>Designation</th>
                      <th>Email</th>
                      <th>Mobile Number</th>
                      <th>Blood Group</th>
                      <th>Address</th>
                      <th>Details</th>
                      <th>User Type</th>
                      <th>Date</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
         <td>'.$row["id"].'</td>
         <td>'.$row["card_no"].'</td>
         <td>'.$row["username"].'</td>
         <td>'.$row["fullname"].'</td>
         <td>'.$row["designation"].'</td>
         <td>'.$row["email"].'</td>
         <td>'.$row["phone"].'</td>
         <td>'.$row["blood_group"].'</td>
         <td>'.$row["address"].'</td>
         <td>'.$row["details"].'</td>
         <td>'.$row["user_type"].'</td>
         <td>'.$row["date"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=teacher_list.xls');
  echo $output;
 }
}
?>
