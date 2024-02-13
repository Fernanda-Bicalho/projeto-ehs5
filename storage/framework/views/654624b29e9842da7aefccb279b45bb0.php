<?php $__env->startSection('conteudo'); ?>
    <div class="container mb-5 mb-md-5 mb-lg-0">
        <h4 class="text-center text-primary mb-5"><strong>Consulta de equipamentos</strong></h4>
        <div class="col-12 d-flex justify-content-center mb-4">
            
            <div class="col-12 col-md-10 col-lg-7 d-flex p-4 border border-primary-subtle rounded row">
                <label for="" class="col-12 col-md-3 me-md-2 fs-5 text-center">Equipamento:</label>
                <div class="dropdown col-12 col-md-6 text-center">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(isset($equip['nome']) ? $equip['nome'] : 'Selecione uma opção'); ?>

                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="px-2"><input type="text" id="searchInput" class="form-control" placeholder="Buscar"></div>
                        </li>
                        <?php $__currentLoopData = $equipamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="dropdown-item item" href="#" data-id="<?php echo e($equipamento['id']); ?>" data-value="<?php echo e($equipamento['nome']); ?>"><?php echo e($equipamento['id'] .' - '. $equipamento['nome']); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <button class="col-12 col-md-2 btn btn-outline-primary mt-3 mt-md-0" id="filtroBtn" data-route="<?php echo e(route('page.index')); ?>">Filtrar</button>
            </div>
            
        </div>

        <form class="row" method="POST" action="">
            <?php echo csrf_field(); ?>
            <div class="col-12 col-md-8">
                <div class="col-12 form-group d-flex mb-3 ">
                    <label for="codigo" class="col-3 col-md-3 col-lg-2 form-label me-1"><strong>Código:</strong></label>
                    <input type="text" class="col-8 col-md-2 form-control border-primary-subtle" disabled id="codigo"
                        name="codigo" value="<?php echo e(isset($equip['id']) ? $equip['id'] : ''); ?>">
                </div>
                <div class="mb-3 col-12 form-group d-flex ">
                    <label for="modelo" class="col-md-3 col-lg-2 form-label me-1"><strong>Modelo:</strong></label>
                    <input type="text" class="form-control border-primary-subtle" disabled id="modelo" name="modelo"
                        value="<?php echo e(isset($equip['modelo']) ? $equip['modelo'] : ''); ?>">
                </div>
                <div class="mb-3 col-12 form-group d-flex">
                    <label for="serie" class="col-md-3 col-lg-2 form-label me-1"><strong>Serie:</strong></label>
                    <input type="text" class="form-control border-primary-subtle" disabled id="serie" name="serie"
                        value="<?php echo e(isset($equip['serie']) ? $equip['serie'] : ''); ?>">
                </div>
                <div class="mb-3 col-12 form-group d-flex">
                    <label for="tipo" class="col-md-3 col-lg-2 form-label me-1"><strong>Tipo:</strong></label>
                    <input type="text" class="form-control border-primary-subtle" disabled id="tipo" name="tipo"
                        value="<?php echo e(isset($equip['tipo']) ? $equip['tipo'] : ''); ?>">
                </div>
                <div class="mb-3 col-12 form-group d-flex">
                    <label for="fabricante" class="col-md-3 col-lg-2 form-label me-1"><strong>Fabricante:</strong></label>
                    <input type="text" class="form-control border-primary-subtle" disabled id="fabricante"
                        name="fabricante" value="<?php echo e(isset($equip['fabricante']) ? $equip['fabricante'] : ''); ?>">
                </div>
                <div class="row mb-3 col-12 form-group d-flex">
                    <label for="capacidade" class="col-12 col-md-3 col-lg-2 form-label me-1"><strong>Capacidade</strong></label>
                    <label for="min" class="col-2 col-md-1 col-lg-1 form-label me-2 me-md-3"><strong>Min:</strong></label>
                    <input type="text" class="me-md-1 form-control border-primary-subtle" disabled id="min"
                        name="min" value="<?php echo e(isset($equip['mincapac']) ? $equip['mincapac'] : ''); ?>">
                    <label for="max" class="col-2 col-md-1 col-lg-1 form-label me-2 me-md-3"><strong>Max:</strong></label>
                    <input type="text" class="form-control border-primary-subtle" disabled id="max" name="max"
                        value="<?php echo e(isset($equip['maxcapac']) ? $equip['maxcapac'] : ''); ?>">
                </div>
                <div class="row mb-3 col-12 form-group d-flex">
                    <label for="escala" class="col-3 col-md-3 col-lg-2 form-label me-2 me-md-3"><strong>Escala:</strong></label>
                    <input type="text" class="form-control me-md-0 me-lg-1 border-primary-subtle mb-3 mb-md-3 mb-lg-0" disabled id="escala"
                        name="escala" value="<?php echo e(isset($equip['escala']) ? $equip['escala'] : ''); ?>">
                    <label for="localizacao" class="col-5 col-md-3 col-lg-2 me-md-3 ms-lg-1 form-label "><strong>Localização:</strong></label>
                    <input type="text" class="form-control border-primary-subtle" disabled id="localizacao"
                        name="localizacao" value="<?php echo e(isset($equip['localizacao']) ? $equip['localizacao'] : ''); ?>">
                </div>
                <div class="mb-3 col-12 form-group d-flex">
                    <label for="situacao" class="col-md-3 col-lg-2 form-label me-1"><strong>Situação:</strong></label>
                    <input type="text" class="form-control border-primary-subtle" disabled id="situacao"
                        name="situacao" value="<?php echo e(isset($equip['situacao']) ? $equip['situacao'] : ''); ?>">
                </div>
            </div>
            <div class="mb-md-3 col-12 col-md-4 container d-flex justify-content-center justify-content-md-end align-items-center ">
                <div class="bg-primary blocoImage">
                   <img src="<?php echo e(isset($equip['imagem']) ? $equip['imagem'] : ''); ?>" alt="imagem_equipamento">
                </div>
            </div>
        </form>
    </div>
    <div class="col-12 mb-5 text-center container text-md-end" id="btns">
        <a href="<?php echo e(route('page.calibracao')); ?>"><button class="col-10 col-md-2 btn btn-secondary text-center mb-2 mb-md-0">Calibração</button></a>
        <a href="<?php echo e(route('page.index')); ?>"><button type="submit" class="col-10 col-md-2 btn btn-secondary ms-md-3 mb-2 mb-md-0">Limpar</button></a>
        <button type="submit" class="col-10 col-md-2 btn btn-secondary ms-md-3">Cancelar</button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/equipamentos.blade.php ENDPATH**/ ?>