<?php

$result = @$_GET['res'];

if ($result == 1){
	$q = 'STROKE';
}else if ($result == 2)
{
	$q = 'TIDAK TAU';

}else
{
	$q = 'TIDAK STROKE';
}

?>


<div class="banner">
	Results
</div>


<div class="blank">
		<div class="blank-page">
			<p>Hasil anda: </p>
			<h1><?= $q; ?></h1>
			<a href="?page=saran&ref=<?=$result;?>">Lihat saran</a>
		</div>
</div>