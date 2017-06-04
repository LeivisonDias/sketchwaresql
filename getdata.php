<?php
include 'config.php';
connectsql();
$g_key = $_GET["key"];
$sql = "SELECT VALUE FROM " .mysqli_real_escape_string($sql_link, $table_name). " WHERE `KEY`='" .mysqli_real_escape_string($sql_link,$g_key). "'";
$sqlquery = mysqli_query($sql_link,$sql);
$result = mysqli_fetch_array($sqlquery);
closesql();
$stringkey = $result["VALUE"];
$redirect = $url_host . 'result.php?result=' . $g_key . '-' . $stringkey;
header("location:$redirect");
?>