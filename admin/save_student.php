<?php
    include('dbcon.php');

    $un = $_POST['un'];
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $class_id = $_POST['class_id'];

    if (empty($un)) {
        $query = "SELECT student_id FROM student";
        $result = mysqli_query($conn, $query);
        $un = mysqli_num_rows($result)+1;
    }
        mysqli_query($conn,"insert into student (username,firstname,lastname,location,class_id,status)
    values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered')                                    
    ") or die(mysqli_error()); 
?>
<?php    ?>