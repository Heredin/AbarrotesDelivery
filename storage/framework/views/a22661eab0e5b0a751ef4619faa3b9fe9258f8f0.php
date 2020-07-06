<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php echo Form::open(['route'=>['admin.productos.update',$producto],'method'=>'PUT','files'=>true]); ?>

            <div class="row form-group">

                    <?php echo Form::label('slug','SLUG'); ?>


                    <?php echo Form::text('slug',$producto->slug,['class'=>'form-control']); ?>

            </div>
            <div class="row form-group">

                <?php echo Form::label('title','title'); ?>


                <?php echo Form::text('title',$producto->title,['class'=>'form-control']); ?>

        </div>
        <div class="row form-group">

            <?php echo Form::label('description','description'); ?>


            <?php echo Form::text('description',$producto->description,['class'=>'form-control']); ?>

    </div>
    <div class="row form-group">

        <?php echo Form::label('nombre','nombre'); ?>


        <?php echo Form::text('nombre',$producto->nombre,['class'=>'form-control']); ?>

        <br><br>
        <?php echo Form::label('descripcion','descripcion'); ?>

    </div>
<div class="row form-group">
    <?php echo Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control']); ?>

</div>

<div class="row form-group">

    <?php echo Form::label('precio','Precio'); ?>


    <?php echo Form::text('precio',$producto->precio,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('stock','Stock'); ?>


    <?php echo Form::number('stock',$producto->stock,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('unidad','Unidad'); ?>


    <?php echo Form::text('unidad',$producto->unidad,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('orden','Orden'); ?>


    <?php echo Form::text('orden',$producto->orden,['class'=>'form-control']); ?>

</div>
<div class="row form-group">

    <?php echo Form::label('estado','Estado'); ?>


    <?php echo Form::checkbox('estado',null,$producto->estado); ?>

</div>

<div class="row form-group">
<img src="/img/productos/<?php echo e($producto->urlfoto); ?>">
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
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('descripcion');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/productos/edit.blade.php ENDPATH**/ ?>