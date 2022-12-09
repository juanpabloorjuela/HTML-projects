<?php include("../../includes/headerviewsblanco.php") ?>
<?php include("../../config/conexion.php") ?>

<div class="contenido-opticita">
    <div class="titulos-opticita">
        <h2 class="TITULO_OPTICITA">Agenda Tu Opticita Ahora</h2>
        <p class="crea-cuenta">Primero crea una cuenta para conocer los horarios disponibles</p>
    </div>

    <div class="container-formulario">
        <form action="RespuestaCrearUsuario.php" method="post">

            <input class="Nombre" type="text" required class="form-control" id="nombreUsuario" name="valorNombreUsuario" placeholder="Nombre">
            <input class="Apellido" type="text" required class="form-control" id="apellidoUsuario" name="valorApellidoUsuario" placeholder="Apellido">
            <input class="E-mail" type="text" required class="form-control" id="emailUsuario" name="valorEmailUsuario" placeholder="E-mail">
            <output class="Pais"> 
                <br />
                <br />

                <?php
                $query = "SELECT * FROM ciudades";
                $result = mysqli_query($conn, $query);
                ?>

                <select name="idCiudad">
                    <?php
                    while ($fila = $result->fetch_assoc()) :
                        $idciudad = $fila['idCiudad'];
                        $nombreciudad = $fila['nombreCiudad'];
                        echo "<option value=$idciudad> $nombreciudad <option/>";
                    endwhile;
                    ?>
                </select>
            </output>
            <input class="Direccion" type="text" required class="form-control" id="direccionUsuario" name="valorDireccionUsuario" placeholder="Direccion">
            <input class="Numerodedocumento" type="text" required class="form-control" id="numerodedocumentoUsuario" name="valorNumerodedocumentoUsuario" placeholder="Numero de documento">
            <input class="Fechadenacimiento" type="date" required class="form-control" id="FechadenacimientoUsuario" name="valorFechadenacimientoUsuario" placeholder="Fecha de nacimiento">
            <button type="submit" class="btn_btn-primary" >Crear cuenta</button>
            <a href="listarUsuarios.php" class="active">Listar Usuarios</a>
        </form>

        <div class="formulario-fondo">
            <h3 class="titulo-fondo">Informacion de Contacto</h3>
            <p class="parrafo-fondo">Llama o envia un correo y nuestro equipo te contactara en menos de 24 horas!</p>
            <span class="celular-fondo">+880 163 675 6208</span>
            <span class="correo-fondo">contact@debuggersstudio.com</span>
            <span class="direccion-fondo">C.c. Unicentro L-1040 Remansos De Sta Inés</span>
            <img class="imagen-formulario" src="..\..\..\src\images\imagen-logo5.png" alt="logo" width="127px" height="91px">

        </div>

    </div>

</div>

<?php include("../../includes/footeropticitas.php") ?>