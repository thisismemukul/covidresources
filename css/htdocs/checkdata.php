<?php
include 'db/config.php';
// if (!$database) {
//    echo '<script type ="text/javascript"> alert("Server Down.\nPlease try again later.");window.location= "signin.php"</script>';
//   die();
// }

// $submit = $_POST['post'];
$ID = $_POST['ID'];
$correct = $_POST['correct'];
$delete = $_POST['wrong'];

mysqli_select_db($con,'resources');
$results = mysqli_query($con,"SELECT * FROM resources where ID = '$ID'") or die("failed to query database".mysqli_error());
$rows = mysqli_fetch_array($results);

if (isset($correct)) {
    mysqli_query($con,"update resources set aproved = 'Y' where ID= '$ID'") or die("failed to query database".mysqli_error());
    echo '<script type ="text/javascript"> alert("Resource Successfully Approved.");window.location= "admin.php"</script>';
        die();

}

if (isset($delete)) {
    // echo '<a href="https://wa.me/?text=Name:*".$rows["fname"]."*%0aContact: *".$rows["contact"]."*%0aResource: *".$rows["resources"]."*%0aResourceName: *".$rows["r_name"]."*%0aState: *".$rows["state"]."*%0aCity: *".$rows["city"]."*%0aApproved: *".$rows["aproved"].*%0aLink: *-*%0a_This resource was shared using *CovidResources*_ " "target="_blank">j</a>';

        mysqli_query($con,"delete from resources where ID = '$ID'") or die("failed to query database".mysqli_error());
        echo '<script type ="text/javascript"> alert("Resource Successfully Deleted.");window.location= "admin.php"</script>';

            die();
    
}



 ?>

