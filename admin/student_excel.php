<?php
include ('../functions.php');
$output = '';
if(isset($_POST["excel"]))
{
 $query = "SELECT * FROM users WHERE user_type = 'student'";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" border="1" style="border:1px solid #000">
                    <tr style="border:1px solid #000">
                      <th>ID</th>
                      <th>ID Card No</th>
                      <th>Username</th>
                      <th>Full Name</th>
                      <th>Class</th>
                      <th>Shift</th>
                      <th>Section</th>
                      <th>Roll</th>
                      <th>Father Name</th>
                      <th>Mother Name</th>
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
    <tr style="border:1px solid #000">
         <td style="border:1px solid #000">'.$row["id"].'</td>
         <td style="border:1px solid #000">'.$row["card_no"].'</td>
         <td style="border:1px solid #000">'.$row["username"].'</td>
         <td style="border:1px solid #000">'.$row["fullname"].'</td>
         <td style="border:1px solid #000">'.$row["class_name"].'</td>
         <td style="border:1px solid #000">'.$row["shift"].'</td>
         <td style="border:1px solid #000">'.$row["section"].'</td>
         <td style="border:1px solid #000">'.$row["roll"].'</td>
         <td style="border:1px solid #000">'.$row["father_name"].'</td>
         <td style="border:1px solid #000">'.$row["mother_name"].'</td>
         <td style="border:1px solid #000">'.$row["phone"].'</td>
         <td style="border:1px solid #000">'.$row["blood_group"].'</td>
         <td style="border:1px solid #000">'.$row["address"].'</td>
         <td style="border:1px solid #000">'.$row["details"].'</td>
         <td style="border:1px solid #000">'.$row["user_type"].'</td>
         <td style="border:1px solid #000">'.$row["date"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=student_list.xls');
  echo $output;
 }
}
?>
