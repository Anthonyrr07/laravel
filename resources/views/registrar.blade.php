@extends('_partials/body')


  @section('conteudo')
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center mb-4">Registro</h3>
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
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                <div class="text-center mt-3">
                  <p>Já tem uma conta? <a href="{{ route('login') }}" class="text-decoration-none" style="color: #1B7302;">Faça login aqui</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection