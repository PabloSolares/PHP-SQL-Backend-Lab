<?php require_once 'includes/helpers.php' ?>

    <aside id="sidebar">
                
                <?php if(isset($_SESSION['usuario'])): ?>
                <div id="usaurio-logueado" class="bloque">
                        <h3>Bienvenido: <?= $_SESSION['usuario']['nombre'].' '. $_SESSION['usuario']['apellidos'] ?></h3>
                        <!--Botones-->

                    <a class="boton boton-verde" href="cerrar.php">Crear entradas</a>
                    <a class="boton boton-azul" href="cerrar.php">Crear categorias</a>
                    <a class="boton boton-naranja" href="cerrar.php">Mis datos</a>    
                    <a class="boton boton-rojo" href="cerrar.php">Cerrar Sesion</a>
                </div>
                <?php endif; ?>

                <div id="login" class="bloque">

                    <h3>Identificate</h3>

                    <?php if(isset($_SESSION['error_login'])): ?>
                        <div  class="alerta alerta-error">
                                <?= $_SESSION['error_login'] ?>
                        </div>
                    <?php endif; ?>

                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email">

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">

                        <input type="submit" value="Entrar">

                    </form>
                </div>
                <div id="register" class="bloque">
                    <!--Mostrar errores-->
                    <?php if(isset($_SESSION['completado'])):?>
                                <div class="alerta alerta-exito">    
                                <?=$_SESSION['completado'];?>
                                </div>
                        <?php elseif(isset($_SESSION['errores']['general'])): ?>
                                <div class="alerta alerta-error">    
                                    <?=$_SESSION['errores']['general']?>
                                </div>
                        <?php endif; ?>
                
                    <h3>Registrate</h3>

                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Enter Your Name">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" placeholder="Enter Your Last Name">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                        <input type="submit" value="Entrar" name="submit">

                    </form>
                </div>
                <?php borrarErrores(); ?>
            </aside>
