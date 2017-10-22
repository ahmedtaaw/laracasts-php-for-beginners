<?php 

$coursename="";
$duration="";
$coursesubname="";
$description="";

    $db = mysqli_connect('localhost','root','','laracasts-beginners');
    
    
    //retrieve courses
    $results = mysqli_query($db, "SELECT * FROM courseslist");
    if(!$results){
        printf("Error: %s\n",mysqli_error($db));
        exit();
    }
    
    //save courses
    if(isset($_POST['save'])){
        $coursename=$_POST['cName'];
        $duration=$_POST['cDuration'];
        $coursesubname=$_POST['cSubName'];
        $description=$_POST['cDescription'];
        
        $query= "INSERT INTO courseslist(coursename,duration,coursesubname,description) VALUES ('$coursename','$duration','$coursesubname','$description')";
        mysqli_query($db,$query);
        header('location:course-list.php');
    }
?>