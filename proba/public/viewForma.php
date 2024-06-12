<?php

$msg=isset($msg)?$msg:"";

?>

<html>

<body>

<form method="post">

ID: <br>
<input type="text" name="id" value=""><br>
Ime: <br>
<input type="text" name="ime" value=""><br>
Prezime: <br>
<input type="text" name="prezime" value=""><br>
Indeks: <br>
<input type="text" name="brIndeksa" value=""><br>
<input type="submit" name="action" value="Update">

<?php
echo $msg;
?>
</body>

</html>