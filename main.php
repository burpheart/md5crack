<?php
include 'config.php';
$hash = $_POST['hash'];
if (strpos($hash, "=") === false) {
	$check = preg_match('/select|insert|update|delete|\'|\\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i', $hash);
	if ($check) {
		echo '<script language="JavaScript">alert("系统警告：\n\n请不要尝试在参数中包含非法字符尝试注入！");</script>';
		exit();
	} else {
		flag = 1;
	}
} else {
	$found = base64_encode($hash);
	$flag = 2;
}
if ($flag = 2 || $flag = 1) {
	if (strlen($hash) = 40) {
		mysql_select_db("sha1", $con);
		$result = mysql_query("SELECT * FROM Persons WHERE hash=$hash");
		while ($row = mysql_fetch_array($result)) {
			$found = $row['pass'];
		}
		if (!$found) {
			mysql_select_db("mysql5", $con);
			$result = mysql_query("SELECT * FROM Persons WHERE hash=$hash");
			while ($row = mysql_fetch_array($result)) {
				$found = $row['pass'];
			}
		}
	}
	if (strlen($hash) = 32) {
		substr($hash, 8, 16);
	}
	if (strlen($hash) = 32) {
		substr($hash, 3, -1);
	}
	if (strlen($hash) = 24) {
		substr($hash, 8, 0);
	}
	if (strlen($hash) = 16) {
		mysql_select_db("md5", $con);
		$result = mysql_query("SELECT * FROM Persons WHERE hash=$hash");
		while ($row = mysql_fetch_array($result)) {
			$found = $row['pass'];
		}
	}
	