<?php include("includes/header.php")?>


<div class ="card text-center">
    <div class="card-body">
        <h1 class="card-title">Datos basicos de contacto para voluntarios</h1>
        <p class="card-text">Por favor ingrese los datos y nos pondremos en contacto</p>

        <form action="save.php" method="POST">

            

            <div class="row">

            <div class="col">
            <input type="text" name="first_name" class="form-control" placeholder="Nombres y apellidos" autofocus>
            </div>

            <div class="col">
            <input type="text" name="last_name" class="form-control" placeholder="Telefono" autofocus>
            </div>

            </div>

            <div class="row">
            
            <div class="col">
            <label></label>
            <input type="text" name="username" class="form-control" placeholder="Ingrese ciudad" autofocus>
            </div> 

            <div class="col">
            <label></label>
            <input type="email" name="gender" class="form-control" placeholder="Correo" autofocus>
            </div>

            </div>

            

            <div class="form-group">
            <label></label>
            <input type="text" name="password" class="form-control" placeholder="Ingrese tipo de ayuda" autofocus>
            </div>



            <input type="submit" class="btn btn-success" name="guardar_registro" value="Guardar">
        </form>
    </div>
</div>

  
<?php include("includes/footer.php")?>
