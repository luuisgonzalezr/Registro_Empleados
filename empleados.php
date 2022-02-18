<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Empleados_Info</title>
</head>
<body>
    <h1>Lista de empleados registrados:</h1></br></br>
<?php

if(isset($_POST['enviar'])){
    
    $empleados = [
        "empleado1" => [
            $_POST['nombre1'],
            $_POST['apellido1'],
            $_POST['cedula1'],
            $_POST['sueldo1'],
            $_POST['departamento1'],
            $_POST['trabajo1'],
        ],

        "empleado2" => [
            $_POST['nombre2'],
            $_POST['apellido2'],
            $_POST['cedula2'],
            $_POST['sueldo2'],
            $_POST['departamento2'],
            $_POST['trabajo2'],
        ],

        "empleado3" => [
            $_POST['nombre3'],
            $_POST['apellido3'],
            $_POST['cedula3'],
            $_POST['sueldo3'],
            $_POST['departamento3'],
            $_POST['trabajo3'],
        ]
    ];
    
    print
    "<table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Sueldo</th>
            <th>Departamento</th>
            <th>Lugar de Trabajo</th>
        </tr>";
   
        print "<tr>";

    foreach($empleados as $key => $value){

        for($i = 0; $i < count($value); $i++){
            print "
                    <td>{$value[$i]}</td>
            ";
        }
        print "</tr>";

    }

    print 
    "</table>";
}


    print "<br/><br/>";
    print "<a class='btn' href='index.php'>Desea regresar al registro?</a>";
   


?>
</body>
</html>
