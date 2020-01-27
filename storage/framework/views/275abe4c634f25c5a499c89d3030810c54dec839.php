<?php $__env->startSection('content'); ?>
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><h3>Lista Libros</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="<?php echo e(route('libro.create')); ?>" class="btn btn-info" >Añadir Libro</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Resumen</th>
                                <th>No. Páginas</th>
                                <th>Edicion</th>
                                <th>Autor</th>
                                <th>Precio</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                            <?php if($libros->count()): ?>  
                                <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                <tr>
                                    <td><?php echo e($libro->nombre); ?></td>
                                    <td><?php echo e($libro->resumen); ?></td>
                                    <td><?php echo e($libro->npagina); ?></td>
                                    <td><?php echo e($libro->edicion); ?></td>
                                    <td><?php echo e($libro->autor); ?></td>
                                    <td><?php echo e($libro->precio); ?></td>
                                    <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('LibroController@edit', $libro->id)); ?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td>
                                    <form action="<?php echo e(action('LibroController@destroy', $libro->id)); ?>" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input name="_method" type="hidden" value="DELETE">

                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            <?php else: ?>
                                <tr>
                                    <td colspan="8">No hay registro !!</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php echo e($libros->links()); ?>

    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>