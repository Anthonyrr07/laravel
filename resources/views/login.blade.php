@extends('_partials/body')


  @section('conteudo')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center mb-4">Login</h3>
              <form>
                <div class="mb-3">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
                <div class="text-center mt-3">
                  <a href="#" class="text-decoration-none" style="color: #A62F03;">Esqueceu a senha?</a>
                </div>
                <div class="text-center mt-2">
                  <p>Não tem uma conta? <a href="{{ route('registrar') }}" class="text-decoration-none" style="color: #1B7302;">Registre-se aqui</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection