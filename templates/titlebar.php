<section class="title-bar">
			<div class="col-md-1">
				<a href="index.php"><img src="res/puskesmas.png" alt="" width="100" /></a>
			</div>

			<div class="col-md-11">
				<h1>Sistem Pakar Pendiagnosa Stroke</h1>
				<font color="#32C867">Cepat, Tepat, dan Akurat</font
			</div>			
			<div class="header-right">

				<?php
					include 'models/config.php';
					include 'models/conn.php';
				?>

					<div class="profile_details">		
						<div class="full-screen">
							<section class="full-top">
								<font color=<?= $color; ?> data-toggle="tooltip" title=<?= $text; ?> > <i class="fa fa-circle"></i></font>
								<!--
								<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
							-->
							</section>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
