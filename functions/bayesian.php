<?php

function bayespositive($gejala, $value)
{
	$qry = mysql_query("SELECT COUNT(*) AS hitung FROM tb_training WHERE $gejala = $value AND  result = 'true'");
	$res = mysql_fetch_assoc($qry);
	return $res['hitung'];
}

function bayesnegative($gejala, $value)
{
	$qry = mysql_query("SELECT COUNT(*) AS hitung FROM tb_training WHERE $gejala = $value AND  result = 'false'");
	$res = mysql_fetch_assoc($qry);
	return $res['hitung'];
}

function positive()
{
	$qry = mysql_query("SELECT COUNT(*) AS hitung FROM tb_training WHERE result = 'true'");
	$res = mysql_fetch_assoc($qry);
	return $res['hitung'];
}

function negative()
{
	$qry = mysql_query("SELECT COUNT(*) AS hitung FROM tb_training WHERE result = 'false'");
	$res = mysql_fetch_assoc($qry);
	return $res['hitung'];
}

?>