@extends('_partials/body')

@section('conteudo')
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
        <img src="https://lh3.googleusercontent.com/proxy/FL_YyvGJjZ-kvh-WeQ1ylK1kiz9xylqnV5H9phTYTLtPIrmq61607f28699grzZwWoRCZ3nEHAnynGau_FIDSbHYiCNVAEBm7bx0RJdoajwsUJX-B7RcZ-DeeTXJwgMmmoI" class="card-img-top" alt="Gato">
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
@endsection
