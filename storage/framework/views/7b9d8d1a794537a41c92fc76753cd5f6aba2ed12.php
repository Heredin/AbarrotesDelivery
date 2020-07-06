<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
        <table class="table">
            <thead>
                <th>#</th><th>Nombre</th><th>Email</th><th>Activo</th><th>Accion</th>
            </thead>
            <tbody>
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
         <td><?php echo e($r->id); ?></td>
             <td><?php echo e($r->name); ?></td>
             <td><?php echo e($r->email); ?></td>
             <td><?php echo e($r->estado); ?></td>
             <td>
                <a class="btn btn-success" href="">Pedidos</a>

                 <a class="btn btn-success" href="<?php echo e(route('admin.usuarios.edit',$r->id)); ?>">Editar</a></td>

            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/usuarios/index.blade.php ENDPATH**/ ?>