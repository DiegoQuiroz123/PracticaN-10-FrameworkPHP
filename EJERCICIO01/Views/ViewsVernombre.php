<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista De Clientes</title>
</head>
<body>
    
    <table>

        <thead>
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>raza</td>
            </tr>
        </thead>

        <tbody>
            <?php

                foreach ($id as $user) {
                    echo "<tr>";
                    echo "<td>". $user['id'] ."</td>";
                    echo "<td>". $user['nombre'] ."</td>";
                    echo "<td>". $user['raza'] ."</td>";
                    echo "</tr>";
                }

            ?>
        </tbody>

    </table>

</body>
</html>