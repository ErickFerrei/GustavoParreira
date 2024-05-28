<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Configuração <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Principal  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="container">
    

    <div class="card">
        <div class="card-header">
            <h1>Inserir Dados</h1>
        </div>
        <form action="<?php echo e(route('endereco-store')); ?>" method="POST" enctype="multipart/form-data">
           
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="col-md-12 d-flex gap-3 justify-content-center align-items-center"> 
                    <div class="col-md-3">
                        <label class="form-label">
                            CEP
                        </label>
                        <input type="text" name="cep" id="cep" class="form-control text-uppercase" placeholder="57040-555" required>
                        
                    </div> 

                    <div class="col-md-4">
                        <label class="form-label">
                            CIDADE
                        </label>
                        <input type="text" name="cidade" id="cidade" class="form-control text-uppercase" placeholder="MACEIÓ" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">
                            BAIRRO
                        </label>
                        <input type="text" name="bairro" id="bairro" class="form-control text-uppercase" placeholder="ANTARES"  required>
                    </div> 


                    
                </div>

                <div class="col-md-12 d-flex justify-content-center gap-3 mt-3 align-items-center">
                     <div class="col-md-3">
                        <label class="form-label">
                            ESTADO
                        </label>
                        <input type="text" name="estado" id="uf" class="form-control text-uppercase" placeholder="AL" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">
                            RUA
                        </label>
                        <input type="text" name="rua" id="logradouro" class="form-control text-uppercase" placeholder="RUA AT" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">
                            REFERENCIA
                        </label>
                        <input type="text" name="referenia"  class="form-control text-uppercase" placeholder="AO LADO COVENIENCIA" required>
                    </div>

                    

                </div>
                
                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Incluir</button>
                    <a href="<?php echo e(route('endereco-index')); ?>" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                </div>
                
            </div>
        </form>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

    document.getElementById('cep').addEventListener('input', function(event) {
        var cep = event.target.value.replace(/\D/g, '');
        if (cep.length === 8) {
            buscarCep(cep);
        }
    });

    function buscarCep(cep) {

        axios.get('https://viacep.com.br/ws/' + cep + '/json/')
            .then(function(response) {
                // Atualize os campos do formulário com os detalhes do CEP
                document.getElementById('logradouro').value = response.data.logradouro;
                document.getElementById('bairro').value = response.data.bairro;
                document.getElementById('cidade').value = response.data.localidade;
                document.getElementById('uf').value = response.data.uf;
            })
            .catch(function(error) {
                console.log(error);
            });
    }

    
    
</script>

<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TEMPLETE\resources\views/master/endereco/create.blade.php ENDPATH**/ ?>