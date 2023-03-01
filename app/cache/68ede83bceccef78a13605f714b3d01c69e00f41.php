<?php $__env->startSection('content'); ?>
    <h1>Contatos</h1>   

    <form action="/contact" method="POST">
    
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="lastName">Sobre nome</label>
            <input type="text" name="lastName">
        </div>
        <button type="submit">Enviar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/soares/Área de Trabalho/php/project_routes/app/views/contact.blade.php ENDPATH**/ ?>