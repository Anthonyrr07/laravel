@extends('_partials/body')

@section('conteudo')
    <div class="container mt-5">
      <h1 class="text-center mb-4">Encontre seu novo amigo!</h1>
      
      <!-- Filtros -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Filtrar por:</h5>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary active">Todos</button>
                <button type="button" class="btn btn-outline-primary">Cachorros</button>
                <button type="button" class="btn btn-outline-primary">Gatos</button>
                <button type="button" class="btn btn-outline-primary">Outros</button>
              </div>
              <div class="input-group mt-3" style="max-width: 300px;">
                <input type="text" class="form-control" placeholder="Buscar por nome...">
                <button class="btn btn-primary" type="button">Buscar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Animais disponíveis -->
      <div class="row">
        <!-- Cachorro 1 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://jpimg.com.br/uploads/2023/07/yorkshire-terrier-tudo-o-que-voce-precisa-saber-sobre-essa-raca.jpg" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora correr e brincar ao ar livre.</p>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Idade:</strong> 2 anos</li>
                <li class="list-group-item"><strong>Porte:</strong> Médio</li>
                <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
              </ul>
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="#" class="btn btn-outline-secondary">Detalhes</a>
            </div>
          </div>
        </div>
        
        <!-- Gato 1 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://www.petz.com.br/blog/wp-content/uploads/2019/07/vida-de-gato.jpg" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.</p>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Idade:</strong> 1 ano</li>
                <li class="list-group-item"><strong>Porte:</strong> Pequeno</li>
                <li class="list-group-item"><strong>Sexo:</strong> Fêmea</li>
              </ul>
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="#" class="btn btn-outline-secondary">Detalhes</a>
            </div>
          </div>
        </div>
        
        <!-- Coelho -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://www.agrosete.com.br/wp-content/uploads/2022/03/Coelho-de-estimacao1.jpg" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Bolinha é um coelho muito dócil e brincalhão. Ele adora cenouras e brincar no jardim.</p>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Idade:</strong> 6 meses</li>
                <li class="list-group-item"><strong>Porte:</strong> Pequeno</li>
                <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
              </ul>
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="#" class="btn btn-outline-secondary">Detalhes</a>
            </div>
          </div>
        </div>
        
        <!-- Cachorro 2 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://jpimg.com.br/uploads/2023/07/yorkshire-terrier-tudo-o-que-voce-precisa-saber-sobre-essa-raca.jpg" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Thor</h5>
              <p class="card-text">Thor é um cachorro muito protetor e leal. Ideal para quem busca um companheiro fiel.</p>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Idade:</strong> 3 anos</li>
                <li class="list-group-item"><strong>Porte:</strong> Grande</li>
                <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
              </ul>
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="#" class="btn btn-outline-secondary">Detalhes</a>
            </div>
          </div>
        </div>
        
        <!-- Gato 2 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://www.petz.com.br/blog/wp-content/uploads/2019/07/vida-de-gato.jpg" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Luna</h5>
              <p class="card-text">Luna é uma gata misteriosa e elegante. Adora observar tudo de lugares altos.</p>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Idade:</strong> 2 anos</li>
                <li class="list-group-item"><strong>Porte:</strong> Médio</li>
                <li class="list-group-item"><strong>Sexo:</strong> Fêmea</li>
              </ul>
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="#" class="btn btn-outline-secondary">Detalhes</a>
            </div>
          </div>
        </div>
        
        <!-- Pássaro -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://www.passaro.org/wp-content/uploads/2023/08/passaro-principe.webp" class="card-img-top" alt="Pássaro">
            <div class="card-body">
              <h5 class="card-title">Paco</h5>
              <p class="card-text">Paco é uma cacatua muito inteligente que adora interagir e aprender novos truques.</p>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Idade:</strong> 5 anos</li>
                <li class="list-group-item"><strong>Porte:</strong> Médio</li>
                <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
              </ul>
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="#" class="btn btn-outline-secondary">Detalhes</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Informações sobre adoção -->
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h3>Processo de Adoção</h3>
            </div>
            <div class="card-body">
              <ol>
                <li>Escolha o animal que deseja adotar</li>
                <li>Preencha o formulário de interesse</li>
                <li>Agende uma visita para conhecer o animal</li>
                <li>Passar por entrevista com nossa equipe</li>
                <li>Assinar o termo de adoção responsável</li>
              </ol>
              <p class="mt-3">Todos os nossos animais são vacinados, vermifugados e castrados (quando aplicável).</p>
              <a href="#" class="btn btn-success">Saiba mais sobre o processo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection