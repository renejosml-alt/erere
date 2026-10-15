<?php
include("../../bd.php");

// 🔴 OBTENER ID ORIGINAL
$id = $_GET['id'] ?? "";

// 🔵 BUSCAR REGISTRO
$sentencia = $conexion->prepare("SELECT * FROM tbl_banners WHERE ID=:id");
$sentencia->bindParam(":id", $id);
$sentencia->execute();
$registro = $sentencia->fetch(PDO::FETCH_ASSOC);

// 🔴 ACTUALIZAR
if($_POST){

    $id_nuevo = $_POST["id"]; // editable
    $id_original = $_POST["id_original"]; // oculto

    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $link = $_POST["link"];

    $sentencia = $conexion->prepare("UPDATE tbl_banners 
    SET ID=:id_nuevo, titulo=:titulo, descripcion=:descripcion, link=:link 
    WHERE ID=:id_original");

    $sentencia->bindParam(":id_nuevo", $id_nuevo);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":link", $link);
    $sentencia->bindParam(":id_original", $id_original);

    $sentencia->execute();

    header("Location:index.php");
    exit();
}

include("../../templates/header.php");
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            Editar Banner
        </div>

        <div class="card-body">

            <form method="POST">

                <!-- ID ORIGINAL OCULTO -->
                <input type="hidden" name="id_original" value="<?php echo $registro['ID']; ?>">

                <!-- ID EDITABLE -->
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input 
                        type="number" 
                        name="id" 
                        class="form-control"
                        value="<?php echo $registro['ID']; ?>">
                </div>

                <!-- TITULO -->
                <div class="mb-3">
                    <label class="form-label">Titulo</label>
                    <input 
                        type="text" 
                        name="titulo" 
                        class="form-control"
                        value="<?php echo $registro['titulo']; ?>">
                </div>

                <!-- DESCRIPCION -->
                <div class="mb-3">
                    <label class="form-label">Descripcion</label>
                    <input 
                        type="text" 
                        name="descripcion" 
                        class="form-control"
                        value="<?php echo $registro['descripcion']; ?>">
                </div>

                <!-- LINK -->
                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input 
                        type="text" 
                        name="link" 
                        class="form-control"
                        value="<?php echo $registro['link']; ?>">
                </div>

                <!-- BOTÓN -->
                <button type="submit" class="btn btn-success">
                    Modificar Banner
                </button>

                <a href="index.php" class="btn btn-primary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>

</div>

<?php include("../../templates/footer.php"); ?>