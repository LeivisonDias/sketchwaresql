<?php
include 'config.php';
connectsql();
$sql = "CREATE TABLE IF NOT EXISTS `" .mysqli_real_escape_string($sql_link, $table_name). "` (
  `KEY` varchar(240) COLLATE utf8_unicode_ci NOT NULL,
  `VALUE` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`KEY`),
  KEY `KEY` (`KEY`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
mysqli_query($sql_link,$sql);
$g_key = 'Test';
$g_value = 'If you are reading this text, it is because the installation was successful! For your security, delete the install.php file from your server.';
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