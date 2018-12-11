	<div class="banner">
		<h1>
				Diagnosa Stroke
			</h1>
	</div>

<div class="blank">
	<div class="blank-page">
		<h3>
			Isilah isian di bawah ini dengan sebaik-baiknya.
		</h3>

		<br/>

		<div class="my-div">
									<form method="post" action="controller/bayes.php" class="valida" autocomplete="off" novalidate="novalidate">

						<div class="input-info">
							<h3>Keluhan:</h3>
						</div>

							<label for="field-1">Apakah kepala anda sering sakit?&nbsp;<span class="at-required-highlight">*</span></label>
						<div class="form-group">

							<select class="form-control" id="pilihan" name="gejala1" required="true">
								<option></option>
							    <option value="3">Sering</option>
							    <option value="2">Kadang Kadang</option>
							    <option value="1">Jarang</option>
							    <option value="0">Tidak Pernah</option>
						 	</select>
											<!--<input type="text" name="field-1" id="field-1" required="true" class="form-control">-->
						</div>
						<div class="form-group">
							<label>Apakah Anda menderita hipertensi?</label>
							<select class="form-control" id="pilihan" name="gejala2"  required="true">
								<option></option>
							    <option value="2">Ya</option>
							    <option value="1">Tidak</option>
							    <option value="0">Tidak Tahu</option>
						 	</select>
						</div>
						<div class="form-group">
							<label>Apakah Anda mengalami kehilangan keseimbangan?</label>
							<select class="form-control" id="pilihan" name="gejala3" required="true">
								<option></option>
							    <option value="2">Ya</option>
							    <option value="1">Tidak</option>
							    <option value="0">Tidak Tahu</option>
						 	</select>
						</div>
								
						<div class="form-group">
							<label>Apakah Anda mengalami kehilangan kesadaran?</label>
							<select class="form-control" id="pilihan" name="gejala4" required="true">
								<option></option>
							    <option value="2">Ya</option>
							    <option value="1">Tidak</option>
							    <option value="0">Tidak Tahu</option>
						 	</select>
						</div>
						<div class="form-group">
							<label>Apakah Anda mengalami kehilangan kendali tungkai (tangan atau kaki)?</label>
							<select class="form-control" id="pilihan" name="gejala5" required="true">
								<option></option>
							    <option value="2">Ya</option>
							    <option value="1">Tidak</option>
							    <option value="0">Tidak Tahu</option>
						 	</select>
						</div>
						<div class="form-group">
							<label>Apakah Anda mengalami gangguan bicara?</label>
							<select class="form-control" id="pilihan" name="gejala6" required="true">
								<option></option>
							    <option value="2">Ya</option>
							    <option value="1">Tidak</option>
							    <option value="0">Tidak Tahu</option>
						 	</select>
						</div>
						<div class="form-group">
							<label>Berapakah usia anda saat ini?</label>
							<input class="form-control" type="number" name="usia" required="true">
						 	</select>
						</div>
									<hr>

										<p>
											<input type="submit" name="sub-1" value="Submit" class="btn btn-success">
											<input type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger">
										</p>
									</form>
								</div>
	</div>
</div>

		<script type="text/javascript" src="assets/js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!--validator js-->
		<script src="assets/js/validator.min.js"></script>
		<!--//validator js-->