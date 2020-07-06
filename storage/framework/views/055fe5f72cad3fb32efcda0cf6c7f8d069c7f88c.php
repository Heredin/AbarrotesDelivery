<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <a class="btn btn-success" href="<?php echo e(route('admin.subcategorias.create')); ?>">Nuevo</a>
            <?php if(count($subcategorias)): ?>
        <table class="table">
            <thead>
                <th>#</th><th>Nombre</th><th>Accion</th>
            </thead>
            <tbody>

         <?php $__currentLoopData = $subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
         <td><?php echo e($r->id); ?></td>
             <td><?php echo e($r->nombre); ?></td>

             <td>
                <a class="btn btn-success" href="<?php echo e(route('admin.subcategorias.show',$r->id)); ?>">Productos</a>
                 <a class="btn btn-primary" href="<?php echo e(route('admin.subcategorias.edit',$r->id)); ?>">Editar</a>
                <?php echo Form::open(['method'=>'DELETE','route'=>['admin.subcategorias.destroy',$r->id],'style'=>'display:inline']); ?>

                <?php echo Form::submit('ELIMINAR',['class'=>'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

            </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <?php else: ?>
        <p>No hay registros</p>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/subcategorias/index.blade.php ENDPATH**/ ?>