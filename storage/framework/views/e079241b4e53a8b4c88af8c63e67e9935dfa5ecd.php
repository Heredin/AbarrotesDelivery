<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php echo Form::open(['route'=>['admin.pedidos.update',$pedido],'method'=>'PUT']); ?>

            <div class="row form-group">

                    <?php echo Form::label('codifo','Código'); ?>


                    <?php echo Form::text('codigo',$pedido->codigo,['class'=>'form-control']); ?>

            </div>

            <div class="row form-group">
            <div class="col-sm-6">
                <?php echo Form::checkbox('estado',null,$pedido->estado); ?>Estado<br>

        </div>
            <div class="col-sm-6">
                <?php echo Form::submit('GUARDAR',['class'=>'btn btn-success']); ?>

            </div>
    </div>
    <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/pedidos/edit.blade.php ENDPATH**/ ?>