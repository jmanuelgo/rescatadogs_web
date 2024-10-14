<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM persona";
    $execonsulta = $mysqli->query($sql);
    ?>
    <br>
    <a href="crear.php" target="_self">REGISTRAR PERSONAS</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th class="sort_alpha">NOMBRE</th>
                <th>EDAD</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($execonsulta) > 0) {
                //el indice es un contador
                $indice = 1;
                while ($row = mysqli_fetch_array($execonsulta)) {
                ?>
                    <tr>
                        <td><?php echo $indice; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['edad']; ?></td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="hidder" name="idPersona" value="<?php echo $row['idPersona'];?>">
                                <button type="submit">Modificar</button>
                            </form>
                            <?php echo $row['idPersona']; ?>
                        </td>
                        <td>
                            <form action="eliminar.php" method="post">
                                <input type="hidder" name="idPersona" value="<?php echo $row['idPersona'];?>">
                                <button type="submit">Eliminar</button>
                            </form>
                            <?php echo $row['idPersona']; ?>
                        </td>

                    </tr>
                <?php
                $indice++;
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>