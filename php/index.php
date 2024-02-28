<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librerias/css/alertify.css">
    <link rel="stylesheet" href="librerias/bootstrap-4.6.2-dist/css/bootstrap.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div id="tabla">
        </div>

        <!-- Modal -->
        <div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Información</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control input-sm">
                        <label>Área</label>
                        <input type="text" id="area" class="form-control input-sm">
                        <label>Sexo</label>
                        <input type="text" id="sexo" class="form-control input-sm">
                        <label>Correo</label>
                        <input type="text" id="correo" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Guardar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="cerrar">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Información</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="ModalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Información</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="librerias/jquery.js"></script>
    <script src="librerias/bootstrap-4.6.2-dist/js/bootstrap.bundle.js"></script>
    <script src="librerias/alertify.js"></script>
    <script src="librerias/alertify.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').load('componentes/tabla.php')
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#guardarnuevo').click(function() {
                nombre = $('#nombre').val();
                area = $('#area').val();
                sexo = $('#sexo').val();
                correo = $('#correo').val();
                agregardatos(nombre, area, sexo, correo);
            });
            $('#actualizadatos').click(function() {
                actualizadatos();
            });
        })
    </script>
</body>

</html>