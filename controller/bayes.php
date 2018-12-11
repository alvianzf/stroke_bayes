<!-- <h5>Something's not right! Please wait until our technicians are done fixing it!</h5>
<p><a href="../">Go Back</a></p> -->


<?php

include '../models/config.php';
include '../functions/bayesian.php';

$g1 = @$_POST['gejala1'];
$g2 = @$_POST['gejala2'];
$g3 = @$_POST['gejala3'];
$g4 = @$_POST['gejala4'];
$g5 = @$_POST['gejala5'];
$g6 = @$_POST['gejala6'];
$age= @$_POST['usia'];

$one	= bayespositive('g1', $g1);
$two	= bayespositive('g2', $g2);
$three	= bayespositive('g3', $g3);
$four	= bayespositive('g4', $g4);
$five	= bayespositive('g5', $g5);
$six	= bayespositive('g6', $g6);
$pos 	= positive();

$one1	= bayesnegative('g1', $g1);
$two1	= bayespositive('g2', $g2);
$three1	= bayesnegative('g3', $g3);
$four1	= bayesnegative('g4', $g4);
$five1	= bayesnegative('g5', $g5);
$six1	= bayesnegative('g6', $g6);
$neg 	= negative();

$res_pos = $one * $two * $three * $four * $five * $six * $pos;
$res_neg = $one1 * $two1 * $three1 * $four1 * $five1 * $six1 * $neg;

if ($res_pos > $res_neg)
{
	echo 'STROKE';
	header('location: ../?page=result&res=1');
}else if ($res_pos == $res_neg)
{
	echo 'NOT DETERMINED';
	header('location: ../?page=result&res=2');
}else
{
	echo 'NOT STROKE';
	header('location: ../?page=result&res=3');
}

?>