<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #14140F;
        color: #A3CCAB;
      }
      .navbar {
        background-color: #053D38 !important;
      }
      .navbar-brand, .nav-link {
        color: #A3CCAB !important;
      }
      .nav-link:hover {
        color: #F26800 !important;
      }
      .btn-primary {
        background-color: #34675C;
        border-color: #34675C;
      }
      .btn-primary:hover {
        background-color: #053D38;
        border-color: #053D38;
      }
      .card {
        background-color: #053D38;
        color: #A3CCAB;
        margin-bottom: 20px;
      }
      .card-title {
        color: #F26800;
      }
      .footer {
        background-color: #053D38;
        color: #A3CCAB;
        padding: 20px 0;
        text-align: center;
        margin-top: 40px;
        position: fixed;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">AdoçãoPets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <h1 class="text-center mb-4">Encontre seu novo amigo!</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://jpimg.com.br/uploads/2023/07/yorkshire-terrier-tudo-o-que-voce-precisa-saber-sobre-essa-raca.jpg" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora correr e brincar ao ar livre.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.petz.com.br/blog/wp-content/uploads/2019/07/vida-de-gato.jpg" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.agrosete.com.br/wp-content/uploads/2022/03/Coelho-de-estimacao1.jpg" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Bolinha é um coelho muito dócil e brincalhão. Ele adora cenouras e brincar no jardim.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>&copy; 2023 AdoçãoPets. Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>