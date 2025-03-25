@extends('_partials/body')

@section('conteudo')
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
@endsection