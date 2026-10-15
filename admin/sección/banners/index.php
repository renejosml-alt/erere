<?php
include("../../bd.php");

if(isset($_GET['id'])){
    $txtID = $_GET['id'];

    $sentencia = $conexion->prepare("DELETE FROM tbl_banners WHERE ID=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    header("Location:index.php");
    exit();
}

// 🔵 LISTAR
$sentencia = $conexion->prepare("SELECT * FROM tbl_banners");
$sentencia->execute();
$lista_banners = $sentencia->fetchAll(PDO::FETCH_ASSOC);

include("../../templates/header.php");
?>

<div class="container-fluid">

    <!-- BOTÓN -->
    <a class="btn btn-primary mb-3" href="crear.php">
        Agregar registros
    </a>

    <!-- CARD -->
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Enlace</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($lista_banners as $value) { ?>
                        <tr>
                            <td><?php echo $value['ID']; ?></td>
                            <td><?php echo $value['titulo']; ?></td>
                            <td><?php echo $value['descripcion']; ?></td>
                            <td><?php echo $value['link']; ?></td>
                            <td>
                                <a class="btn btn-info btn-sm" 
                                   href="editar.php?id=<?php echo $value['ID']; ?>">
                                   Editar
                                </a>

                                <a class="btn btn-danger btn-sm" 
                                   href="index.php?id=<?php echo $value['ID']; ?>"
                                   onclick="return confirm('¿Eliminar registro?');">
                                   Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<?php include("../../templates/footer.php"); ?>