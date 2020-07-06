<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php echo Form::open(['route'=>['admin.productos.store'],'method'=>'POST','files'=>true]); ?>

            <div class="row form-group">

                    <?php echo Form::label('slug','SLUG'); ?>


                    <?php echo Form::text('slug',null,['class'=>'form-control']); ?>

            </div>
            <div class="row form-group">

                <?php echo Form::label('title','Title'); ?>


                <?php echo Form::text('title',null,['class'=>'form-control']); ?>

        </div>
        <div class="row form-group">

            <?php echo Form::label('description','Description'); ?>


            <?php echo Form::text('description',null,['class'=>'form-control']); ?>

    </div>
    <div class="row form-group">

        <?php echo Form::label('nombre','Nombre'); ?>


        <?php echo Form::text('nombre',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('descripcion','Descripcion'); ?>


    <?php echo Form::text('descripcion',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('precio','Precio'); ?>


    <?php echo Form::text('precio',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('stock','Stock'); ?>


    <?php echo Form::number('stock',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('unidad','Unidad'); ?>


    <?php echo Form::text('unidad',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('orden','Orden'); ?>


    <?php echo Form::text('orden',null,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('estado','Estado'); ?>


    <?php echo Form::checkbox('estado',null); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('urlfoto','urlfoto'); ?>


    <?php echo Form::file('urlfoto'); ?>

</div>
            <div class="row form-group">

            <div class="col-sm-6">
                <?php echo Form::submit('GUARDAR',['class'=>'btn btn-success']); ?>

            </div>
    </div>
    <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/productos/create.blade.php ENDPATH**/ ?>