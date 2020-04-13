<?php include("db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO usuarios(username, first_name, last_name, gender, password) VALUES ('$username','$first_name','$last_name','$gender','$password')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Su formulario ha sido enviado, estaremos en contacto.");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "index.php";
    </script>
