<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Act-Empleados</title>
</head>
<body class="container">
    <h1>Registro de empleados</h1>

    <form action="empleados.php" method="POST">

        <div class="empleado">
            <h2>Empleado 1</h2>
            <div class="linea">
                <label for="nombre1">Nombre: </label>
                <input type="text" name="nombre1" id="nombre1" required>
                <br>
                <br>

                <label for="apellido1">Apellido: </label>
                <input type="text" name="apellido1" id="apellido1" required>
                <br>
                <br>
                <label for="nombre1">Cedula: </label>
                <input type="number" name="cedula1" id="cedula1" required>
            </div>
            <br>

            <div class="linea">
                <label for="sueldo1">Sueldo ($): </label>
                <input type="number" name="sueldo1" id="sueldo1" required>
                <br>
                <br>
                <label for="departamento1">Departamento: </label>
                <input type="text" name="departamento1" id="departamento1" required>
                <br>
                <br>
                <label for="trabajo1">Lugar de trabajo: </label>
                <input type="text" name="trabajo1" id="trabajo1" required>
            </div>
        </div>
        
        <div class="empleado">
            <h2>Empleado 2</h2>
            <div class="linea">
                <label for="nombre2">Nombre: </label>
                <input type="text" name="nombre2" id="nombre2" required>
                <br>
                <br>
                <label for="apellido2">Apellido: </label>
                <input type="text" name="apellido2" id="apellido2" required>
                <br>
                <br>
                <label for="nombre2">Cedula: </label>
                <input type="number" name="cedula2" id="cedula2" required>
            </div>
            <br>
            <div class="linea">
            <label for="sueldo2">Sueldo ($): </label>
                <input type="number" name="sueldo2" id="sueldo2" required>
                <br>
                <br>
                <label for="departamento2">Departamento: </label>
                <input type="text" name="departamento2" id="departamento2" required>
                <br>
                <br>
                <label for="trabajo2">Lugar de trabajo: </label>
                <input type="text" name="trabajo2" id="trabajo2" required>
            </div>
        </div>

        <div class="empleado">
            <h2>Empleado 3</h2>
            <div class="linea">
                <label for="nombre3">Nombre: </label>
                <input type="text" name="nombre3" id="nombre3" required>
                <br>
                <br>
                <label for="apellido3">Apellido: </label>
                <input type="text" name="apellido3" id="apellido3" required>
                <br>
                <br>
                <label for="nombre3">Cedula: </label>
                <input type="number" name="cedula3" id="cedula3" required>
            </div>
            <br>
            <div class="linea">
            <label for="sueldo3">Sueldo ($): </label>
                <input type="number" name="sueldo3" id="sueldo3" required>
                <br>
                <br>
                <label for="departamento3">Departamento: </label>
                <input type="text" name="departamento3" id="departamento3" required>
                <br>
                <br>
                <label for="trabajo3">Lugar de trabajo: </label>
                <input type="text" name="trabajo3" id="trabajo3" required>
            </div>
        </div>      
        <br>

        <input class="btn" type="submit" value="Enviar registro" name="enviar" id="enviar">
    </form>
    



    
</body>
</html>