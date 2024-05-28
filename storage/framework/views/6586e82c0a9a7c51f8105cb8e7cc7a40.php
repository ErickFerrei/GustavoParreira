<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Configuração <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Principal  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="container">
    

    <div class="card">
        <div class="card-body">
            <a href="<?php echo e(route('config-create')); ?>" class="btn rounded-pill btn-primary waves-effect waves-light">INCLUIR</a>
        </div>
    </div>

    

    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-border-left alert-dismissible fade show mb-xl-0" role="alert">
            <?php echo e(session('error')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-border-left alert-dismissible fade show mb-xl-0" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card mt-3">
        <div class="card-header">
            <h1>Listagem da Configuração</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">IMAGEM</th>
                            <th scope="col">NOME DO SISTEMA</th>
                            <th scope="col">AÇÕES</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $config; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($item->id); ?></th>
                            <td ><img src="<?php echo e(asset('images/' . $item->logo)); ?>" alt="Logo" style="width: 97px"></td>
                            <td><?php echo e($item->nome); ?></td>
                            
                                <th class="d-flex gap-3">
                                    <a href="<?php echo e(route('config-edit', ['id'=>$item->id])); ?>" class="btn btn-success  btn-sm">Editar <i class="ri-arrow-right-line align-middle"></i></a>
                                    <form action="<?php echo e(route('config-destroy', ['id'=>$item->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        
                                    </form>
                                </th>
                               
                            
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TEMPLETE\resources\views/master/config/index.blade.php ENDPATH**/ ?>