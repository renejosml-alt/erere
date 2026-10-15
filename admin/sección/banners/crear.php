<?php
include("../../bd.php");

if($_POST){

    $titulo=(isset($_POST["titulo"])) ? $_POST["titulo"] : "";
    $descripcion=(isset($_POST["descripcion"])) ? $_POST["descripcion"] : "";
    $link=(isset($_POST["link"])) ? $_POST["link"] : "";

    $sentencia = $conexion->prepare("INSERT INTO tbl_banners 
    (ID, titulo, descripcion, link) 
    VALUES (NULL, :titulo, :descripcion, :link);");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":link", $link);

    $sentencia->execute();

    header("Location:index.php");
}

include("../../templates/header.php");
?>

<br/>

<div class="card">
    <div class="card-header">
        Banners
    </div>

    <div class="card-body">

        <form action="" method="POST">

            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="text" name="titulo" class="form-control" placeholder="Escriba el titulo del banners">
            </div>

            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Escriba la descripcion del banners">
            </div>

            <div class="mb-3">
                <label class="form-label">link</label>
                <input type="text" name="link" class="form-control" placeholder="Escriba el enlace">
            </div>

            <button type="submit" class="btn btn-success">
                Crear bnner
            </button>

            <a href="index.php" class="btn btn-primary">
                Cancelar
            </a>

        </form>

    </div>
</div>

<?php include("../../templates/footer.php"); ?>