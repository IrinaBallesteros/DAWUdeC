<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['nombre'] ?></td>
                    <td><?= $usuario['apellidos'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td><?= $usuario['telefono'] ?></td>
                    <td><?= $usuario['rol'] ?></td>
                    <td><?= $usuario['estado'] ?></td>
                    <td>
                        <a href="editar_usuario.php?id=<?= $usuario['id'] ?>">Editar</a>
                        <a href="eliminar_usuario.php?id=<?= $usuario['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

                       