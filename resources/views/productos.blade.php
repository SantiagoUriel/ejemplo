<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <h2>Practica de laravel con mongodb</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $producto): ?>
                <tr>
                    <td><?php echo $producto->_id; ?></td>
                    <td><?php echo $producto->nombre; ?></td>
                    <td><?php echo $producto->precio; ?></td>
                    <td><?php echo $producto->descripcion; ?></td>
                    <td><?php echo $producto->categoria; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h3>Santiago Uriel Mayorga Espinoza</h3>
</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>