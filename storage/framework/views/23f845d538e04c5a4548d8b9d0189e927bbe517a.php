<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php echo Form::open(['route'=>['admin.categorias.store'],'method'=>'POST','files'=>true]); ?>

            <div class="row form-group">

                    <?php echo Form::label('slug','SLUG'); ?>


                    <?php echo Form::text('slug',null,['class'=>'form-control']); ?>

            </div>
            <div class="row form-group">

                <?php echo Form::label('title','title'); ?>


                <?php echo Form::text('title',null,['class'=>'form-control']); ?>

        </div>
        <div class="row form-group">

            <?php echo Form::label('description','description'); ?>


            <?php echo Form::text('description',null,['class'=>'form-control']); ?>

    </div>
    <div class="row form-group">

        <?php echo Form::label('nombre','nombre'); ?>


        <?php echo Form::text('nombre',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('descripcion','descripcion'); ?>


    <?php echo Form::text('descripcion',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('urlfoto','urlfoto'); ?>


    <?php echo Form::file('urlfoto'); ?>

</div>
            <div class="row form-group">
            <div class="col-sm-6">
                <?php echo Form::checkbox('portada',null); ?>Portada<br>

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

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/categorias/create.blade.php ENDPATH**/ ?>