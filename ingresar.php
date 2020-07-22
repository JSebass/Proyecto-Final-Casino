<!-- Default form login -->
<?php
    include 'encabezado.php';
?>
<div align ="center">
    <form id="formini" class="text-center border border-light p-5" action="iniciar.php" method="POST" style="width: 60%;">

        <p class="h4 mb-4" style="color:white;">Iniciar Sesion</p>
    
        
        <input type="text" id="defaultLoginFormEmail" name="idusuario" class="form-control mb-4" placeholder="Identificación">
    
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name = "passusuario" class="form-control mb-4" placeholder="Password">
    
        <div class="d-flex justify-content-around">
            
            <div>
                <!-- Forgot password -->
                <a style="color:white;" href="">Forgot password?</a>
            </div>
        </div>
        <div align ="center">
             <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit" style="width: 60%;">Iniciar Sesion</button>
        </div>
       
    
        <!-- Register -->
        <p style="color:white;">No es miembro?
            <a href="formregistrarcli.php">Registrar</a>
        </p>
    
        <!-- Social login -->
        <p style="color:white;">Iiniciar sesion desde:</p>
    
        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
    
    </form>
    <!-- Default form login -->
</div>
<?php
        include 'pie.php'
?>