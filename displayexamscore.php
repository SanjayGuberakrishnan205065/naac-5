<?php
  $link = mysqli_connect("localhost", "id18380925_admin", "C}AHF-v/}Mt7}]HE", "id19228304_id18380925_naac_criterion5");
$name = $_GET['name'];
$query = "SELECT * FROM exam_qualifications WHERE Student_name LIKE '$name%'";
$req = mysqli_query($link, $query) or die(mysqli_error($link));
while($a = mysqli_fetch_array($req)){
    $imageData = $a['Proof_file'];
    $imageType = $a['Proof_file_type'];
}
header("content-type:$imageType");
echo $imageData;
?>