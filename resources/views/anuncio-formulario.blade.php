<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Cadastrar Anúncio</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('anuncio-store') }}" method="POST">
                    @csrf
    
                    <input type="hidden" name="id" value="{{ $anuncios->id ?? old('id') }}">
    
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo"
                            value="{{ $anuncios->titulo ?? old('titulo') }}" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="4"
                            required>{{ $anuncios->descricao ?? old('descricao') }}</textarea>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="preco" class="form-label">Preço (R$)</label>
                            <input type="number" step="0.01" class="form-control" id="preco" name="preco"
                                value="{{ $anuncios->preco ?? old('preco') }}" required>
                        </div>
    
                        <div class="col-md-6 mb-3">
                            <label for="data_publicacao" class="form-label">Data de Publicação</label>
                            <input type="date" class="form-control" id="data_publicacao" name="data_publicacao"
                                value="{{ $anuncios->data_publicacao ?? old('data_publicacao') }}" required>
                        </div>
                    </div>
    
                    <div class="mb-3">
                        <label for="id_proprietario" class="form-label">Proprietário</label>
                        <select class="form-select" name="id_proprietario" id="id_proprietario" required>
                            <option value="">Selecione um proprietário</option>
                            @foreach ($proprietarios as $proprietario)
                                <option value="{{ $proprietario->id }}" @if (($anuncios->id_proprietario ?? old('id_proprietario')) == $proprietario->id) selected @endif>
                                    {{ $proprietario->nome }} ({{ $proprietario->cpf }})
                                </option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="mb-3">
                        <label for="id_veiculo" class="form-label">Veículo</label>
                        <select class="form-select" name="id_veiculo" id="id_veiculo" required>
                            <option value="">Selecione um veículo</option>
                            @foreach ($veiculos as $veiculo)
                                <option value="{{ $veiculo->id }}" @if (($anuncios->id_veiculo ?? old('id_veiculo')) == $veiculo->id) selected @endif>
                                    {{ $veiculo->marca }} - {{ $veiculo->modelo }} ({{ $veiculo->placa }})
                                </option>
                            @endforeach
                        </select>
                    </div>
    
                    <button type="submit" class="btn btn-success mt-3">Cadastrar Anúncio</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>

