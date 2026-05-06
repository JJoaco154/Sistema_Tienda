<?php
/*
include("conexion_bdd.php");

if (!empty($_POST['login'])) { // post sirve para enviar datos a través de un formulario, en este caso el formulario de login y mientras los datos no sean vacias se ejecuta el codigo de abajo
    if (empty($_POST['nombre']) || empty($_POST['contrasena'])) { 
        echo "Los campos no pueden estar vacios";
    } else {

        $usuario = $_POST['nombre']; // se asigna a la variable usuario el valor del campo nombre del formulario
        $contrasena = $_POST['contrasena']; // se asigna a la variable contrasena el valor del campo contrasena del formulario

        $sql=$conexion->query(" select * from usurios where nombre = '$usuario' and contrasena = '$contrasena'"); // se ejecuta una consulta a la base de datos para verificar si el usuario y contraseña existen
        
        if ($datos=$sql->fetch_object()) { // si la consulta devuelve un resultado, se asigna a la variable datos el resultado de la consulta
            
            if($datos->contrasena  == $contrasena) { // se verifica si la contraseña ingresada coincide con la contraseña almacenada en la base de datos
              header("location: index.php"); // si el usuario y contraseña son correctos, se redirige a la página index.php
            exit(); // se termina la ejecución del script
            }   
            else {
              echo "Usuario o contraseña incorrectos"; // si el usuario o contraseña son incorrectos, se muestra un mensaje de error
            }
        } else {
            echo "Usuario o contraseña incorrectos"; // si la consulta no devuelve ningún resultado, se muestra un mensaje de error
        }
    }
}
*/
?>

<?php
include("conexion_bdd.php");

if (!empty($_POST['login'])) {

    if (empty($_POST['nombre']) || empty($_POST['contrasena'])) {
        echo "Los campos no pueden estar vacíos";
    } else {

        $usuario = $_POST['nombre'];
        $contrasena = $_POST['contrasena'];

        $sql = $conexion->query("SELECT * FROM usuario WHERE nombre='$usuario'");

        if ($datos = $sql->fetch_object()) { // fetch_object() devuelve un objeto con los datos de la consulta, si no hay resultados devuelve false

            if ($datos->contrasena == $contrasena) {
                header("Location: index.php");
                exit();
            } else {
                echo "Contraseña incorrecta";
            }

        } else {
            echo "Usuario no encontrado";
        }
    }
}
?>