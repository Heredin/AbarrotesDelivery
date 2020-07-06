<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php if(count($detalles)): ?>
        <table class="table">
            <thead>
                <th>#</th><th>Cantidad</th><th>Producto</th><th>Precio</th><th>Precio total</th>
            </thead>
            <tbody>

         <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
         <td><?php echo e($r->id); ?></td>
             <td><?php echo e($r->cantidad); ?></td>
             <td><?php echo e($r->productos->nombre); ?></td>
             <td><?php echo e($r->productos->precio); ?></td>
             <td><?php echo e($r->productos->precio*$r->cantidad); ?></td>
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

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/detalles/index.blade.php ENDPATH**/ ?>