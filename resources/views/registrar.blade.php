@extends('_partials/body')


  @section('conteudo')
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