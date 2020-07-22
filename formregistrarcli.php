<!-- Default form login -->
<?php
    include 'encabezado.php';
?>
<div align="center">
    <form action="registrarcli.php" method="POST" class="text-center border border-light p-5"  style="width: 60%;" >

    <p style="color:white;" class="h4 mb-4">Registrar</p>

    <input type="text" id="defaultRegisterPhonePassword" name="idcli" class="form-control" placeholder="Cédula" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
    <br>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="nomcli" class="form-control" placeholder="Nombres" required>
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="apecli" class="form-control" placeholder="Apellidos" required>
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name="correocli" class="form-control mb-4" placeholder="Correo Electrónico" required>

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name="passcli" class="form-control" placeholder="Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
    <br>

    <!-- Phone number -->
    <input type="date" id="fecha_nac" name="fechacli" class="form-control" placeholder="Fecha de Nacimiento" aria-describedby="defaultRegisterFormPhoneHelpBlock" max="22-07-2002" min="01-01-1920" required>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Sólo Mayores de 18 años
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter" name="condicion">
        <label style="color:white;" class="custom-control-label" for="defaultRegisterFormNewsletter">Acepto los <a href="" target="_blank">términos de servicio</a></label>
    </div>
    <div align="center">
        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit" style="width: 60%;">REGISTRAR</button>
    </div>
    

    <!-- Social register -->
    <p style="color:white;">Registrarme con:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>
    <!-- Terms of service -->
    </form>
</div>

<!-- Default form register -->

<?php
        include 'pie.php'
?>