<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
</head>

<body>

    <style>
        /* Solo funciona px en HTML2PDF */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background-color: #000000;
            color: #ffffff;
            padding: 8px;
            text-align: center;
        }

        td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #b1b1b1;
        }
    </style>

    <h1>Reporte general de vehículos</h1>
    <table>
        <thead>
            <tr>
                <th style="width: 10%">#</th>
                <th style="width: 20%">Marca</th>
                <th style="width: 20%">Modelo</th>
                <th style="width: 20%">Año</th>
                <th style="width: 15%">Color</th>
                <th style="width: 15%">Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehiculos as $vehiculo) : ?>
                <tr>
                    <td><?= esc($vehiculo['id']) ?></td>
                    <td><?= esc($vehiculo['marca']) ?></td>
                    <td><?= esc($vehiculo['modelo']) ?></td>
                    <td><?= esc($vehiculo['anio']) ?></td>
                    <td><?= esc($vehiculo['color']) ?></td>
                    <td><?= esc($vehiculo['precio']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>