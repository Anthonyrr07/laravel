<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
        color: #014040;
      }
      .navbar {
        background-color: #014040 !important;
      }
      .navbar-brand, .nav-link {
        color: #f8f9fa !important;
      }
      .btn-primary {
        background-color: #A62F03;
        border-color: #A62F03;
      }
      .btn-primary:hover {
        background-color: #1B7302;
        border-color: #1B7302;
      }
      .card {
        border: 1px solid #014040;
      }
      .card-title {
        color: #014040;
      }
      .card-text {
        color: #1B7302;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
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
      <h1 class="text-center mb-4">Adote um Amigo</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://static.wixstatic.com/media/894d3e_5b35b4311510410fbe9403dc85f46845~mv2.jpg/v1/fill/w_1000,h_563,al_c,q_85,usm_0.66_1.00_0.01/894d3e_5b35b4311510410fbe9403dc85f46845~mv2.jpg" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Adote um cachorro e ganhe um amigo leal para toda a vida.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i1.sndcdn.com/artworks-000254519180-au5ijw-t500x500.jpg" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Adote um gato e tenha um companheiro independente e carinhoso.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://muralzinhodeideias.com.br/wp-content/uploads/2022/10/pernalonga-divulgacao.jpg" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Coelho</h5>
              <p class="card-text">Adote um coelho e desfrute de um amigo fofo e tranquilo.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>