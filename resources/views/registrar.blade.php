<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - AdoçãoPets</title>
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
      .register-container {
        background-color: #053D38;
        padding: 30px;
        border-radius: 10px;
        margin-top: 50px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
      }
      .register-container h2 {
        color: #F26800;
        text-align: center;
        margin-bottom: 20px;
      }
      .form-control {
        background-color: #34675C;
        border: 1px solid #34675C;
        color: #A3CCAB;
      }
      .form-control:focus {
        background-color: #34675C;
        border-color: #F26800;
        color: #A3CCAB;
      }
      .btn-primary {
        background-color: #F26800;
        border-color: #F26800;
        width: 100%;
        margin-top: 20px;
      }
      .btn-primary:hover {
        background-color: #C65300;
        border-color: #C65300;
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
              <a class="nav-link" href="{{ route('principal') }}">Início</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="register-container">
      <h2>Registro</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirmar-senha" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmar-senha" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
      <p class="text-center mt-3">
        Já tem uma conta? <a href="{{ route('login') }}" style="color: #F26800;">Faça login aqui</a>.
      </p>
    </div>

    <footer class="footer">
      <p>&copy; 2023 AdoçãoPets. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>