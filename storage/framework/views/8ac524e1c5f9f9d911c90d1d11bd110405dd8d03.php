<?php $__env->startSection('content'); ?>
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<?php if(Session::has('success')): ?>
			<div class="alert alert-info">
				<?php echo e(Session::get('success')); ?>

			</div>
			<?php endif; ?>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Libro</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="<?php echo e(route('libro.update',$libro->id)); ?>"  role="form">
							<?php echo e(csrf_field()); ?>

							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="<?php echo e($libro->nombre); ?>">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="npagina" id="npagina" class="form-control input-sm" value="<?php echo e($libro->npagina); ?>">
									</div>
								</div>
							</div>

							<div class="form-group">
								<textarea name="resumen" class="form-control input-sm"  placeholder="Resumen"><?php echo e($libro->resumen); ?></textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="edicion" id="edicion" class="form-control input-sm" value="<?php echo e($libro->edicion); ?>">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="precio" id="precio" class="form-control input-sm" value="<?php echo e($libro->precio); ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="autor" class="form-control input-sm" placeholder="Autor"><?php echo e($libro->autor); ?></textarea>
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="<?php echo e(route('libro.index')); ?>" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>