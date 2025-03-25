@extends('_partials/body')

@section('conteudo')
    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
      <p class="text-center mt-3">
        <a href="#" style="color: #F26800;">Esqueceu sua senha?</a>
      </p>
      <p class="text-center mt-2">
        Não tem uma conta? <a href="{{ route('registrar') }}" style="color: #F26800;">Registre-se aqui</a>.
      </p>
    </div>
@endsection