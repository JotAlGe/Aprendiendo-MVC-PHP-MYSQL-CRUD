<a name="" id="" class="btn btn-primary mb-3 col-md-12" href="?controller=employees&action=create" role="button">Agregar empleado</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $employee) {
        ?>
            <tr>
                <td><?php echo $employee->id; ?></td>
                <td><?php echo $employee->name; ?></td>
                <td><?php echo $employee->email; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controller=employees&action=edit&id=<?php echo $employee->id; ?>"" class=" btn btn-info">Editar</a>
                        <a id="delete" href="?controller=employees&action=delete&id=<?php echo $employee->id; ?>" class="btn btn-danger">Borrar</a>
                    </div>
                </td>
            </tr>

        <?php
        } ?>
    </tbody>
</table>
<script src="/assets/functions.js"></script>