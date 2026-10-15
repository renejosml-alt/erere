<!doctype html>
<html lang="en">
<head>
<title>Restaurant La Orureña</title>

<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

<style>
html{
scroll-behavior:smooth;
}
</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="#"><i class="fas fa-utensils"></i> Restaurant la Orureña</a>

<button class="navbar-toggler" type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#Inicio">Inicio</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#Menu">Menu del dia</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#Chefs">Chefs</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#testimonios">Testimonios</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#Contactos">Contactos</a>
</li>

<li class="nav-item ms-2">
<a class="btn btn-warning text-dark" href="#Horario">
<i class="fas fa-clock"></i> Horario
</a>
</li>

</ul>
</div>
</div>
</nav>

<!-- BANNER -->
<section id="Inicio" class="container-fluid p-0">

<div style="position:relative;
background:url('images/fondo2.jpeg') center/cover no-repeat;
height:400px;">

<div style="position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
text-align:center;
color:white;">

<h1>La Orureña</h1>
<p>Restaurant de los mejores sabores típicos</p>

<a href="#Menu" class="btn btn-primary">Ver Menu</a>

</div>
</div>
</section>

<!-- BIENVENIDA -->
<section class="container mt-4 text-center">

<div class="bg-dark text-white p-4 rounded">

<h2>¡Bienvenido al restaurant la Orureña!</h2>
<p>Descubre una experiencia culinaria única</p>

</div>

</section>

<!-- SECCION CHEFS -->
<section id="Chefs" class="container mt-4 text-center">

<h2>Nuestros Chefs</h2>

<div class="row">

<div class="col-md-4">
<div class="card">
<img src="images/Colaboradores/fondo3.jpeg" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Chef Mario</h5>
<p class="card-text">Especialista en comida típica</p>
<i class="fab fa-facebook me-2"></i>
<i class="fab fa-instagram me-2"></i>
<i class="fab fa-linkedin"></i>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<img src="images/Colaboradores/fondo4.jpeg" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Chef Mari</h5>
<p class="card-text">Experta en sabores tradicionales</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<img src="images/Colaboradores/fondo5.jpeg" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Chef Belén</h5>
<p class="card-text">Especialista en comida gourmet</p>
</div>
</div>
</div>

</div>
</section>

<!-- TESTIMONIOS -->
<section id="testimonios" class="bg-light py-5">
<div class="container">
<h2 class="text-center mb-4">Testimonios</h2>

<div class="row">

<div class="col-md-6">
<div class="card">
<div class="card-body">
<p>"Muy buena comida"</p>
</div>
<div class="card-footer text-muted">Oscar UH</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-body">
<p>"Excelente atención"</p>
</div>
<div class="card-footer text-muted">María López</div>
</div>
</div>

</div>
</div>
</section>

<!-- MENU -->
<section id="Menu" class="container mt-4">
<h2 class="text-center">Menú (nuestra recomendación)</h2>

<div class="row row-cols-1 row-cols-md-4 g-4">

<div class="col">
<div class="card">
<img src="images/menu/fondo6.jpg" class="card-img-top">
<div class="card-body">
<h5>Pique Macho</h5>
<p class="small">Carne de res, salchicha, papas fritas, cebolla, tomate y huevo.</p>
<strong>Precio: Bs 40</strong>
</div>
</div>
</div>

<div class="col">
<div class="card">
<img src="images/menu/fondo7.jpg" class="card-img-top">
<div class="card-body">
<h5>Silpancho</h5>
<p class="small">Carne empanizada, arroz, papas fritas, huevo frito y ensalada.</p>
<strong>Precio: Bs 35</strong>
</div>
</div>
</div>

<div class="col">
<div class="card">
<img src="images/menu/fondo8.jpg" class="card-img-top">
<div class="card-body">
<h5>Chicharrón</h5>
<p class="small">Carne de cerdo con mote, chuño y llajua.</p>
<strong>Precio: Bs 38</strong>
</div>
</div>
</div>

<div class="col">
<div class="card">
<img src="images/menu/fondo9.jpg" class="card-img-top">
<div class="card-body">
<h5>Fricasé</h5>
<p class="small">Sopa espesa de cerdo con maíz, papa y ají.</p>
<strong>Precio: Bs 32</strong>
</div>
</div>
</div>

</div>
</section>

<!-- CONTACTO -->
<section id="Contactos" class="container mt-5">
<h2 class="text-center mb-4">Contáctanos</h2>
<p class="text-center">Estamos aquí para servirle</p>

<form action="?" method="post">

<div class="mb-3">
<label class="form-label">Nombre</label>
<input type="text" class="form-control" name="nombre" required>
</div>

<div class="mb-3">
<label class="form-label">Correo electrónico</label>
<input type="email" class="form-control" name="correo" required>
</div>

<div class="mb-3">
<label class="form-label">Mensaje</label>
<textarea class="form-control" rows="5" name="mensaje"></textarea>
</div>

<div class="text-center">
<button type="submit" class="btn btn-primary">
Enviar mensaje
</button>
</div>

</form>
</section>

<!-- HORARIO -->
<div id="Horario" class="text-center bg-light p-4 mt-5">

<h3 class="mb-4">Horario de atención</h3>

<p><strong>Lunes a Viernes</strong></p>
<p>11:00 a.m. - 10:00 p.m</p>

<p><strong>Sábado</strong></p>
<p>12:00 a.m. - 5:00 p.m</p>

<p><strong>Domingo</strong></p>
<p>7:00 a.m. - 2:00 p.m</p>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-light text-center py-3">
<p>&copy; 2027 Restaurant la Orureña, todos los derechos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>