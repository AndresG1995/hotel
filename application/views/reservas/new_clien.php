
	
	
	<section  id="contactForm" >
		<div class="ink-alert basic error"><?= $error?></div>
		<?php echo validation_errors('<div class="ink-alert basic error">', '</div>'); ?>
		<?=form_open("reserva/guardar_cli/$id_hab")?>
	
	<div class="control-group">		
			<?=form_label('Apellidos', 'ap_pol')?>
			<div class="controls">

			<?= form_input(array('name' => 'apellido', 'id'=>'apellido', 'size'=>'20', 'value'=>set_value('apellido'), 'placeholder'=>'Ingrese los Apellidos', 'required'=>'required'))?>
 			</div>
 		</div>
	<div class="control-group">
			<?=form_label('Nombres', 'nombre')?>
			<div class="controls">
			<?= form_input(array('name' => 'nombre', 'id'=>'nombre', 'size'=>'20', 'value'=>set_value('nombre'), 'placeholder'=>'Ingrese los nombres', 'required'=>'required'))?>
			</div>
		</div>
	<div
	<div class="control-group">
     	<?= form_label('Tipo de documento:', 'tipo');?>
     	<div class="controls">
       		<select name='tipo' id="tipo">
       			
       			<option value="CI">C.I.</option>
       			<option value="LIBRETA MILITAR">LIBRETA MILITAR</option>
       			<option value="DNI">DNI</option>
       			<option value="PASAPORTE">PASAPORTE</option>
       			<option value="OTROS">OTROS</option>
       			
       		</select>
     	</div>
   	</div>	
   	<div class="control-group">	
			<?=form_label('Numero de documento', 'ci')?>

			<div class="controls">
			<?= form_input(array('name' => 'numero', 'id'=>'numero', 'size'=>'20', 'value'=>set_value('numero'), 'placeholder'=>'Ingrese el numero de documento', 'required'=>'required'))?>
			</div>
		</div>	
		<div class="control-group">	
			<?=form_label('Telefono', 'ci')?>

			<div class="controls">
			<?= form_input(array('name' => 'telefono', 'id'=>'telefono', 'size'=>'20', 'value'=>set_value('telefono'), 'placeholder'=>'Ingrese el numero de telefono', 'required'=>'required'))?>
			</div>
		</div>	
		<div class="control-group">	
			<?=form_label('Procedencia', 'ci')?>

			<div class="controls">
			<?= form_input(array('name' => 'procedencia', 'id'=>'procedencia', 'size'=>'20', 'value'=>set_value('procedencia'), 'placeholder'=>'Ingrese la procedencia', 'required'=>'required'))?>
			</div>
		</div>	
		<div class="control-group">	
			<?=form_label('Fecha de nacimiento', 'ci')?>

			<div class="controls">
			<input type = "date" name = "desde" id = "desde" value = "" >
			</div>
		</div>		


					
			
			<br><br>
			<p><input   name="submit" type="submit"  value="Guardar" id="submit" />


			
		<?form_close()?>
		
	</section>
