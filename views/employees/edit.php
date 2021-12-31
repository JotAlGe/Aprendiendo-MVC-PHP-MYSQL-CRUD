<div class="card">
    <div class="card-header">
        Editar datos empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre del empleado" value="<?php echo $employee->name; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Correo del empleado" value="<?php echo $employee->email; ?>">
            </div>
            <input name=" send" id="" class="btn btn-primary" type="submit" value="Agregar empleado">
            <a name="" id="cancel" class="btn btn-danger" href="?controller=employees&action=index" role="button">Cancelar</a>
        </form>
    </div>
</div>
<script src="assets/functions.js"></script>