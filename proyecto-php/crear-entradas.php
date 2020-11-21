<?php 
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';

?>

        <div id="principal">  
            <h1>Crear Entradas</h1>
            <p>
                Añade nuevas entradas al blog para que los usuarios puedan usarlas al crear sus entradas
            </p>
            <br>
            <form action="guardar-entrada.php" method="POST">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo"/>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>


            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion"/>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descipcion') : ''; ?>


            <label for="categoria">Categoria:</label>
            <select name="categoria" >
                <?php 
                $categorias = conseguirCategorias($db) ;
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                    <option value="<?= $categoria['id']?>">
                        <?= $categoria['nombre']?>
                    </option>
                <?php 
                    endwhile;
                endif;
                ?>
            </select>

             <input type="submit" value="Guardar">   
            </form>
        </div>

<?php require_once 'includes/pie.php' ?>
