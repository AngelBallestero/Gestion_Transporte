
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Clientes</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            background-color:aquamarine;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ad1b1b;
        }
    </style>
</head>
<body>

<center><h2>Datos de Clientes</h2>

<center><table>
    <thead>
        <tr>
            <th>Tipo de Documento</th>
            <th>Documento</th>
            <th>Rol</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Departamento</th>
            <th>Ciudad</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo htmlspecialchars($row->name_document); ?></td>
            <td><?php echo htmlspecialchars($row->document);?></td>
            <td><?php echo htmlspecialchars($row->Rol);?></td>
            <td><?php echo htmlspecialchars($row->name);?></td>
            <td><?php echo htmlspecialchars($row->last_name);?></td>
            <td><?php echo htmlspecialchars($row->phone);?></td>
            <td><?php echo htmlspecialchars($row->email);?></td>
            <td><?php echo htmlspecialchars($row->name_departament); ?></td>
            <td><?php echo htmlspecialchars($row->name_city); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>