<?php
if (isset($_POST['fnama'])) {
    $fnama = $_POST['fnama'];
    $fNim = $_POST['fNim'];
    $falamat = $_POST['falamat'];
    $programstudi = $_POST['programstudi']; 
    
    $filename = $_FILES['ffoto']['name'];
    $tempname = $_FILES['ffoto']['tmp_name'];
    $folder = "../img/" . $filename;
    
    echo "Name : **$fnama**<br/>ID : **$fNim**<br/>Study Program : **$programstudi**<br/>";
    echo "Address : **$falamat**<br/>Photo : <img src='" . $folder. "' style='width:100px'/>";
}

if (isset($_GET['fnama'])) {
    $fnama = $_GET['fnama'];
    $fNim = $_GET['fNim'];
    $falamat = $_GET['falamat'];
    $programstudi = $_GET['programstudi'];

    echo "<span class='success'>With **GET METHOD**</span><br/>";
    echo "Name : **$fnama**<br/>ID : **$fNim**<br/>Study Program : **$programstudi**<br/>";
    echo "Address : **$falamat**<br/>Photo : No photos are displayed due to the GET method";
}
?>