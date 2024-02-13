<!DOCTYPE html>
<html lang="pt-br">

<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('templates.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <main>
         <?php echo $__env->yieldContent('conteudo'); ?>
    </main>
</body>

<?php echo $__env->make('templates.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>
<?php /**PATH /var/www/html/resources/views/templates/layout.blade.php ENDPATH**/ ?>