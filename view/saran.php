<?php

$q = @$_GET['ref'];

if ($q == 1)
{
	$p = "Anda stroke, kurangi makan makanan berlemak dan kolesterol tinggi";
}else if ($q == 2)
{
	$p = "Hasil and kurang dapat ditentukan, kurangi makan makanan berlemak dan kolesterol tinggi";
}
else if ($q == 3)
{
	$p = "Anda tidak Stroke, tetap hidup sehat dan semangat";
}

?>

<div class="banner">
	<h3>Saran Untuk Anda</h3>
</div>

<div class="blank">
	<div class="blank-page">
		<p><?=$p;?></p>
	</div>
</div>