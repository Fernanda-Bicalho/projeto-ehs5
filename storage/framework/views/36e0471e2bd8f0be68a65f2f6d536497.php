<?php $__env->startSection('conteudo'); ?>
    <div class="container mb-5 mb-md-5 mb-lg-0">
        <h4 class="text-center text-primary mb-5"><strong>Consulta de equipamentos</strong></h4>
        <div class="col-12 d-flex justify-content-center mb-4">
            
            <div class="col-12 col-md-10 col-lg-6 d-flex p-4 border border-primary-subtle rounded row">
                <label for="" class="col-12 col-md-3 me-md-2 fs-5 text-center">Equipamento:</label>
                <div class="dropdown col-12 col-md-6 text-center">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(isset($equip['nome']) ? $equip['nome'] : 'Selecione uma opção'); ?>

                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="px-2"><input type="text" id="searchInput" class="form-control"
                                    placeholder="Buscar"></div>
                        </li>
                        <?php $__currentLoopData = $equipamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="dropdown-item item" href="#" data-id="<?php echo e($equipamento['id']); ?>"
                                    data-value="<?php echo e($equipamento['nome']); ?>"><?php echo e($equipamento['id'] . ' - ' . $equipamento['nome']); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <button class="col-12 col-md-2 btn btn-outline-primary mt-3 mt-md-0" id="filtroBtn"
                    data-route="<?php echo e(route('page.calibracao')); ?>">Filtrar</button>
            </div>
            
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center border border-primary-subtle rounded">
                        <th scope="col" class="">Laboratório</th>
                        <th scope="col" class="">Certificado</th>
                        <th scope="col" class="">Norma</th>
                        <th scope="col" class="">DtCalibração</th>
                        <th scope="col" class="">Prazo Calibração</th>
                        <th scope="col" class="">Prox. Calibração</th>
                        <th scope="col" class="">Opçoes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $calibra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $calibracao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border border-primary-subtle rounded">
                            <td><?php echo e(isset($calibracao->laboratorio) ? $calibracao->laboratorio : ''); ?></td>
                            <td><?php echo e(isset($calibracao->certificado) ? $calibracao->certificado : ''); ?></td>
                            <td><?php echo e(isset($calibracao->norma) ? $calibracao->norma : ''); ?></td>
                            <td><?php echo e(isset($calibracao->dtcalibracao) ? $calibracao->dtcalibracao : ''); ?></td>
                            <td><?php echo e(isset($calibracao->prazocalibracao) ? $calibracao->prazocalibracao : ''); ?></td>
                            <td><?php echo e(isset($calibracao->proxcalibracao) ? $calibracao->proxcalibracao : ''); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(isset($calibracao->arquivo) ? asset($calibracao->arquivo) : '#'); ?>"
                                    target="_blank" class="btn btn-primary">Arquivo</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="tabela"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/calibracao.blade.php ENDPATH**/ ?>