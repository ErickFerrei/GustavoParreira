<?php $__env->startSection('title'); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::asset('build/libs/filepond/filepond.min.css')); ?>" type="text/css" />
    <link rel="stylesheet"
        href="<?php echo e(URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Configuração <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Principal  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="container">


    <div class="card">
        <div class="card-header">
            <h1>Atualizando dados da Propriedade</h1>
        </div>

        <form action="<?php echo e(route('propriedade-update', ['id'=>$propriedade->id ])); ?>" method="POST" enctype="multipart/form-data" class="form-group">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">TITULO:</label>

                            <input type="text" name="titulo" class="form-control" value="<?php echo e($propriedade['titulo']); ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">TIPO:</label>
                        <input type="text" name="tipo" class="form-control" value="<?php echo e($propriedade->tipo); ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">QUARTOS:</label>
                        <input type="text" name="quarto" class="form-control" value="<?php echo e($propriedade->quarto); ?>">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">STATUS:</label>
                        <input type="text" name="status" class="form-control" value="<?php echo e($propriedade->status); ?>">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="form-label">GARAGEM:</label>
                        <input type="text" name="garagem" class="form-control" value="<?php echo e($propriedade->garagem); ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">ÁREA:</label>
                        <input type="text" name="area" class="form-control" value="<?php echo e($propriedade->area); ?>M²">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">ENDEREÇO:</label>
                        <select class="form-select" aria-label="Default select example" name="endereco_id">
                            <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->cidade); ?>-<?php echo e($item->uf); ?>, <?php echo e($item->rua); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">BANHEIRO:</label>
                        <input type="text" name="banheiro" class="form-control" value="<?php echo e($propriedade->banheiro); ?>">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">DESCRIÇÃO:</label>
                        <textarea name="descricao" cols="50" rows="10" class="form-control"><?php echo e($propriedade->descricao); ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="dropzone">
                            <div class="fallback">
                                <input name="images[]" type="file"  accept="image/png, image/jpeg" multiple>
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                </div>
                                <h4>Solte os arquivos aqui ou clique para fazer upload.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card ">
                    <div class="card-body">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>IMAGENS</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo e($image); ?>" alt="Imagem da Propriedade" style="width: 90px">
                                    </td>
                                    <td>
                                        <form action="#" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="image_url" value="<?php echo e($image); ?>">
                                            <button type="submit" class="btn btn-sm btn-danger remove-item-btn">Excluir</button>
                                        </form>
                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Atualizar</button>
                    <a href="<?php echo e(route('propriedade-index')); ?>" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                </div>
            </div>
        </form>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/dropzone/dropzone-min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/filepond/filepond.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')); ?>">
    </script>
    <script
        src="<?php echo e(URL::asset('build/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')); ?>">
    </script>
    <script
        src="<?php echo e(URL::asset('build/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')); ?>">
    </script>
    <script src="<?php echo e(URL::asset('build/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/pages/form-file-upload.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TEMPLETE\resources\views/master/propriedade/edit.blade.php ENDPATH**/ ?>