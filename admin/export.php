<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "capstone");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM student";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Student ID</th>  
                         <th>First Name</th>  
                         <th>Last Name</th>  
                         <th>Class</th>  
    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
     $class_id=$row["class_id"];
     $classQuery = "SELECT * FROM class WHERE class_id=$class_id";
     $class_row = mysqli_fetch_array(mysqli_query($connect, $classQuery));
     
   $output .= '
     <tr>  
          <td>'.$row["username"].'</td>  
          <td>'.$row["firstname"].'</td>  
          <td>'.$row["lastname"].'</td>  
          <td>'.$class_row["class_name"].'</td>         
     </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
