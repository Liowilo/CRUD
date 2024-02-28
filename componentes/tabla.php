<?php
require_once "../php/conexion.php"
?>

<div class="row">
    <div class="col-sm-12"></div>
    <h2>Tabla</h2>
    <table class="table table-hover table-condensed table-bordered">
        <caption>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregar">
                Agregar
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEditar">
                Editar
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEliminar">
                Eliminar
            </button>
        </caption>
        <tr>
            <td>Nombre</td>
            <td>Area</td>
            <td>Sexo</td>
            <td>Correo</td>
            <td>Editar</td>
            <td>Eliminiar</td>
        </tr>
        <?php
        $sql="SELECT id,nombre,sexo,area,correo from Registros";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){
            $datos=$ver[0]."||".
            $ver[1]."||".
            $ver[2]."||".
            $ver[3]."||".
            $ver[4]."||";
            ?>
        
        <tr>
            <td><?php echo $ver[1]?>/td>
            <td><?php echo $ver[1]?></td>
            <td><?php echo $ver[1]?></td>
            <td><?php echo $ver[1]?></td>
            <td>
                <button class="btn btn-warning">Editar</button>
            </td>
            <td>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <?
        }
        ?>
    </table>
</div>