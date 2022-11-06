if(isset($_POST["Export"])){
     
     header('Content-Type: text/csv; charset=utf-8');  
     header('Content-Disposition: attachment; filename=data.csv');  
     $output = fopen("php://output", "w");  
     fputcsv($output, array('student_id', 'First Name', 'Last Name'));  
     $query = "SELECT * from student ORDER BY student_id DESC";  
     $result = mysqli_query($con, $query);  
     while($row = mysqli_fetch_assoc($result))  
     {  
          fputcsv($output, $row);  
     }  
     fclose($output);  
} 