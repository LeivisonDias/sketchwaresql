<?php
include 'config.php';
connectsql();
$g_key = $_GET["key"];
$g_value = $_GET["value"];
$sql = "INSERT INTO " .mysqli_real_escape_string($sql_link, $table_name). " VALUES('".mysqli_real_escape_string($sql_link,$g_key) . "','" . mysqli_real_escape_string($sql_link,$g_value). "') ON DUPLICATE KEY UPDATE VALUE='" . mysqli_real_escape_string($sql_link,$g_value). "'";
mysqli_query($sql_link,$sql);
$sql = "SELECT VALUE FROM " .mysqli_real_escape_string($sql_link, $table_name). " WHERE `KEY`='" .mysqli_real_escape_string($sql_link,$g_key). "'";
$sqlquery = mysqli_query($sql_link,$sql);
$result = mysqli_fetch_array($sqlquery);
closesql();
$stringkey = $result["VALUE"];
$redirect = $url_host . 'saved.php?saved=' . $g_key . '-' . $stringkey;
header("location:$redirect");
?>
