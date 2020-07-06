<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php if(count($pedidos)): ?>
        <table class="table">
            <thead>
                <th>#</th><th>Código</th><th>Fecha de pedido</th><th>Entregado</th><th>Acción</th>
            </thead>
            <tbody>

         <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
         <td><?php echo e($r->id); ?></td>
             <td><?php echo e($r->codigo); ?></td>
             <td><?php echo e($r->created_at); ?></td>
             <td><?php echo e($r->estado); ?></td>

             <td>
                <a class="btn btn-success" href="<?php echo e(route('admin.pedidos.show',$r->id)); ?>">Ver detalles</a>
                <?php if(!$r->estado): ?>
                 <a class="btn btn-primary" href="<?php echo e(route('admin.pedidos.edit',$r->id)); ?>">Entregar</a>
                <?php endif; ?>
                </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <?php else: ?>
        <p>No hay pedidos</p>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/pedidos/index.blade.php ENDPATH**/ ?>