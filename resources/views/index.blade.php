<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap sürümünün linki-->
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Ana Sayfa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hizmetler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Jumbotron Ekleme-->
<div class="jumbotron jumbotron-fluid text-center bg-primary text-white">
<div class="container">
    <h1 class="display-4">Hoş Geldiniz!</h1>
    <p class="lead">Bootstrap ve Jumbotron ile Basit bir Anasayfa</p>
    <a class="btn btn-light btn-lg py-2 px-4 my-2 mx-4" href="#" role="button">Daha Fazla Bilgi</a>
</div>


</div>

<!-- İçerik Bölümü -->
<div class="container jumbotron jumbotron-fluid text-center mt-5">
    <div class="row">
        <div class="col-md-4">
            <h2>Özellik 1</h2>
            <p>Bu özellik hakkında bilgi.</p>
        </div>
        <div class="col-md-4">
            <h2>Özellik 2</h2>
            <p>Bu özellik hakkında bilgi.</p>
        </div>
        <div class="col-md-4">
            <h2>Özellik 3</h2>
            <p>Bu özellik hakkında bilgi.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
