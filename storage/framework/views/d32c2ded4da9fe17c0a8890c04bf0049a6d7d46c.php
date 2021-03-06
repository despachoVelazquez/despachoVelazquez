<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?> 
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-date.css')); ?>">
<link href="<?php echo e(asset('css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet">   
<div class="row">
	<div class="col-12">
		<div class="card" >
			<div class="card-header">
				Juicios
			</div>
			<div class="card-body">
				<h3 class="card-title">Modifica Juicio</h3>
				<form role="form" action="<?php echo e(route('guardaedicionjuicio')); ?>" method="POST" class="text-center row" enctype="multipart/form-data"> 
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
							<?php if($errors->first('num_juicio')): ?>
							<i> <?php echo e($errors->first('num_juicio')); ?> </i>
							<?php endif; ?>
								Folio:<input type="text" placeholder="Folio..." name="num_juicio" value="<?php echo e($juicio->num_juicio); ?>" readonly='readonly' class="form-control">
							</div>
							<div class="form-group col-6">
							<?php if($errors->first('NomDemandante')): ?>
							<i> <?php echo e($errors->first('NomDemandante')); ?> </i>
							<?php endif; ?>
								Demandante:<input type="text" placeholder="Demandante..." name="NomDemandante" value="<?php echo e($juicio->NomDemandante); ?>" class="form-control">
							</div>
							<div class="col-md-6 ">
							<?php if($errors->first('FechaDemanda')): ?>
							<i> <?php echo e($errors->first('FechaDemanda')); ?> </i>
							<?php endif; ?>
							
								<div class="well well-sm">
									<div class='input-group date' id='divMiCalendario'>
										Fecha Demanda:<input type='text' id="txtFecha" class="form-control"  readonly name="FechaDemanda" value="<?php echo e($juicio->FechaDemanda); ?>" />
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>
						<div class="col-md-6 ">
						<?php if($errors->first('FechaAuditoria')): ?>
						<i> <?php echo e($errors->first('FechaAuditoria')); ?> </i>
						<?php endif; ?>
						
								<div class="well well-sm">
									<div class='input-group date' id='divMiCalendario2'>
										Fecha Auditoria:<input type='text' id="txtFecha" class="form-control"  readonly name="FechaAuditoria" value="<?php echo e($juicio->FechaAuditoria); ?>"/>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>

						<div class="form-group col-6">
							Selecciona Tipo de juicio:<select name="id_TipoJuicio" class="form-control">
								<option value='<?php echo e($id_TipoJuicio); ?>'><?php echo e($tipojuicio); ?></option>
								<?php foreach($todas1 as $tipojui): ?>
								<option value= '<?php echo e($tipojui->id_TipoJuicio); ?>'> <?php echo e($tipojui->NomTipoJuicio); ?> 
								</option>	
								<?php endforeach; ?>
							</select>
							<br>
						</div>
						<div class="form-group col-6">
							Selecciona Cliente:<select name="id_cte" class="form-control">
								<option value='<?php echo e($id_cte); ?>'><?php echo e($cliente); ?></option>
								<?php foreach($todas2 as $cli): ?>
								<option value= '<?php echo e($cli->id_cte); ?>' > <?php echo e($cli->NomCliente); ?> 
								</option>	
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-6">Selecciona Abogado:
							<select name="num_folio" class="form-control">
								<option value='<?php echo e($num_folio); ?>'><?php echo e($abogado); ?></option>
								<?php foreach($todas5 as $numfol): ?>
								<option value= '<?php echo e($numfol->num_folio); ?>'> <?php echo e($numfol->NomAbogado); ?> 
								</option>	
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-6">Selecciona Nombre de archivo:
							<select name="id_TipoArchivo" class="form-control">
								<option value='<?php echo e($id_TipoArchivo); ?>'><?php echo e($tipo_archivo); ?></option>
								<?php foreach($todas3 as $archi): ?>
								<option value= '<?php echo e($archi->id_TipoArchivo); ?>'> <?php echo e($archi->NomArchivo); ?> 
								</option>	
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-6">Selecciona Folio Juzgado:
							<select name="FolioJuzgado" class="form-control">
								<option value='<?php echo e($FolioJuzgado); ?>'><?php echo e($juzgado); ?></option>
								<?php foreach($todas1 as $foljuz): ?>
								<option value= '<?php echo e($foljuz->FolioJuzgado); ?>'> <?php echo e($foljuz->FolioJuzgado); ?> 
								</option>	
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-6">
								Selecciona Archivo (Si desea modificarlo):
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo" value="<?php echo e($juicio->archivo); ?>">
							</div>
						<div class="form-group col-6">
								<?php if($errors->first('archivo')): ?>
								<i> <?php echo e($errors->first('archivo')); ?> </i>
								<?php endif; ?> 
									Archivo Asignado:<br>
									<img src=" <?php echo e(asset('archivo/'.$doctip)); ?>" height="120" width="120"><br>
									<?php echo e($doc); ?>


							</div>
					</div>		
					<input type="submit" value="Guardar" class="btn btn-success col-2">
					<input type="submit" value="Cancelar" class="btn btn-warning col-2">
				</div>	
			</form>
		</div>
	</div>
</div>
</div>
<!--FIN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap-datetimepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap-datetimepicker.es.js')); ?>"></script>
<script type="text/javascript">
	$('#divMiCalendario').datetimepicker({
		format: 'YYYY-MM-DD '    
	});
	//$('#divMiCalendario').data("DateTimePicker").show();
	$('#divMiCalendario2').datetimepicker({
		format: 'YYYY-MM-DD '    
	});
	//$('#divMiCalendario2').data("DateTimePicker").show();
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>