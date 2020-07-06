<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <?php echo Form::open(['route'=>['admin.subcategorias.update',$subcategoria],'method'=>'PUT','files'=>true]); ?>

            <div class="row form-group">

                    <?php echo Form::label('slug','SLUG'); ?>


                    <?php echo Form::text('slug',$subcategoria->slug,['class'=>'form-control']); ?>

            </div>
            <div class="row form-group">

                <?php echo Form::label('title','title'); ?>


                <?php echo Form::text('title',$subcategoria->title,['class'=>'form-control']); ?>

        </div>
        <div class="row form-group">

            <?php echo Form::label('description','description'); ?>


            <?php echo Form::text('description',$subcategoria->description,['class'=>'form-control']); ?>

    </div>
    <div class="row form-group">

        <?php echo Form::label('nombre','nombre'); ?>


        <?php echo Form::text('nombre',$subcategoria->nombre,['class'=>'form-control']); ?>

        <br><br>
        <?php echo Form::label('descripcion','descripcion'); ?>

    </div>
<div class="row form-group">



    <?php echo Form::textarea('descripcion',$subcategoria->descripcion,['class'=>'form-control']); ?>

</div>
<div class="row form-group">
<img src="/img/subcategorias/<?php echo e($subcategoria->urlfoto); ?>">
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

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AbarrotesDelivery\resources\views/admin/subcategorias/edit.blade.php ENDPATH**/ ?>