<?php
	$halaman = @$_GET['page'];

	if ($halaman == 'dashboard' || $halaman == '')
	{
		include 'view/dashboard.php';
	}

	else if ($halaman == 'tentang-stroke')
	{
		include 'view/tentang-stroke.php';
	}
	else if ($halaman == 'diagnosa') {
		include 'view/diagnosa.php';
	}else if ($halaman == 'about') {
		# code...
		include 'view/about.php';
	} else if ($halaman == 'help') {
		# code...

		include 'view/help.html';
	} else if (@$halaman == 'result') {
		# code...
		include 'view/results.php';
	} else if (@$halaman == 'saran') {
		# code...
		include 'view/saran.php';
	} else
	{
		include 'view/404.php';
	}

?>