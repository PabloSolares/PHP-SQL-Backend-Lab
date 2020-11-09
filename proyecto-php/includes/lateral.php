<?php require_once 'includes/conexion.php'?>
 
    <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>

                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email">

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">

                        <input type="submit" value="Entrar">

                    </form>
                </div>
                <div id="register" class="bloque">
                    <h3>Registrate</h3>

                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Enter Your Name">

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" placeholder="Enter Your Last Name">

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email">

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">

                        <input type="submit" value="Entrar" name="submit">

                    </form>
                </div>
            </aside>
