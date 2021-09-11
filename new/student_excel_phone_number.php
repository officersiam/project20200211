<?php
include ('../functions.php');
$output = '';
if(isset($_POST["excel"]))
{
 $query = "SELECT * FROM users WHERE user_type = 'student' ORDER BY class_name AND roll DESC";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
    <center><b>ফিউচার ফাউন্ডেশন স্কুল<b></center>
   <table class="table" border="1" style="border:1px solid #000;width:54%">
                    <tr style="border:1px solid #000">
                      <th>Roll</th>
                      <th>Full Name</th>
                      <th>Class</th>
                      <th>Mobile Number</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
    $s = "+88";
   $output .= '
    <tr style="border:1px solid #000">
         <td style="border:1px solid #000">'.$row["roll"].'</td>
         <td style="border:1px solid #000">'.$row["fullname"].'</td>
         <td style="border:1px solid #000">'.$row["class_name"].'</td>
         <td style="border:1px solid #000">'.$s.' '.$row["phone"].'</td>
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
