<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php echo Form::open(['route'=>['admin.portadas.store'],'method'=>'POST','files'=>true]); ?>

            <div class="row form-group">

                    <?php echo Form::label('frase','Frase'); ?>


                    <?php echo Form::text('frase',null,['class'=>'form-control']); ?>

            </div>
            <div class="row form-group">

                <?php echo Form::label('link','Link'); ?>


                <?php echo Form::text('link',null,['class'=>'form-control']); ?>

        </div>

         <div class="row form-group">

        <?php echo Form::label('urlfoto','urlfoto'); ?>


         <?php echo Form::file('urlfoto'); ?>

      </div>
            <div class="row form-group">

                <?php echo Form::checkbox('portada',null); ?>Portada<br>
        </div>
        <div class="row form-group">

            <?php echo Form::label('orden','Orden'); ?>


            <?php echo Form::text('orden',null,['class'=>'form-control']); ?>

    </div>
    <div class="row form-group">

                <?php echo Form::submit('GUARDAR',['class'=>'btn btn-success']); ?>


    </div>
    <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/portadas/create.blade.php ENDPATH**/ ?>