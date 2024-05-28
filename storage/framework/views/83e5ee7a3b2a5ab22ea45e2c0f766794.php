<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Configuração <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Principal  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="container">
    

    <div class="card">
        <div class="card-header">
            <h1>Editar Dados</h1>
        </div>
        <form action="<?php echo e(route('config-update',['id'=>$config->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body">
                <div class="col-md-12 d-flex gap-3 align-items-center">
                    <div class="col-md-4">
                        
                        <label class="form-label">
                            Nome do Sistema
                        </label>
                        <input type="text" name="nome" class="form-control " value="<?php echo e($config->nome); ?>" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label class="form-label">
                            Logo marca
                        </label>
                        <input class="form-control" type="file" name="logo" accept=".png">
                    </div>

                    
                </div>

                <div class="col-md-4 bg-primary mt-4 rounded">
                    <img src="<?php echo e(asset('images/' . $config->logo)); ?>" alt="Logo" style="width: 150px">
                </div>
                
                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Atualizar</button>
                    <a href="<?php echo e(route('config-index')); ?>" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                </div>
                
            </div>
        </form>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TEMPLETE\resources\views/master/config/edit.blade.php ENDPATH**/ ?>