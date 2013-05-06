<?php
include('./includes/config.php');

$query = mysql_query("SELECT * FROM servers ORDER BY id") or die(mysql_error());
while($result = mysql_fetch_array($query)){
    $sTable .= '
        
            '.$result["domain"].'
            '.$result["registrar"].'
            '.$result["exdate"].'
            '.$result["host"].'
        
    ';
}
include('./templates/default/index.php');
?>
