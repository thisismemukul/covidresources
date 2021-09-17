<?php
include 'db/config.php';
// if (!$database) {
//    echo '<script type ="text/javascript"> alert("Server Down.\nPlease try again later.");window.location= "signin.php"</script>';
//   die();
// }
mysqli_select_db($con,'resources');

// $submit = $_POST['post'];
$resources = $_POST['resources'];
$r_name = $_POST['r_name'];
$state = $_POST['statesearch'];

// $state = strtoupper($statesearch);  

// if (isset($submit)) {
    if (mysqli_query($con,"SELECT * FROM resources WHERE aproved ='Y' AND resources='$resources' AND r_name ='$r_name' AND state_name ='$state' ORDER BY ID DESC ")) {
    // echo '<script type ="text/javascript">window.location= "search_resources.php#upload"</script>';
}else{
    // code...
    echo '<script type ="text/javascript"> alert("Something went wrong please try again.");window.location= "search_resources.php#upload"</script>';
}
// }
// else{
//     echo '<script type ="text/javascript"> alert("Something went wrong please try again.");window.location= "index.html"</script>';
// }
 ?>

