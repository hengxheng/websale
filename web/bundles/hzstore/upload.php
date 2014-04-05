<?php
$data = $_POST['img'];
list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
echo $type:
echo "<br>";
echo $data;

// $data = base64_decode($data);
// file_put_contents('/tmp/image.png', $data);
?>
