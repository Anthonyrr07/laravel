<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Cor</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                <tr>
                    <td>{{ $veiculo->id }}</td>
                    <td>{{ $veiculo->marca }}</td>
                    <td>{{ $veiculo->modelo }}</td>
                    <td>{{ $veiculo->ano }}</td>
                    <td>{{ $veiculo->placa }}</td>
                    <td>
                        <span class="badge" style="background-color: {{ $veiculo->cor }}; color: white;">
                            {{ $veiculo->cor }}
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a href="{{ route('veiculo-editar', $veiculo->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <a href="/veiculo/remove/{{ $veiculo->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este veículo?')">
                                <i class="fas fa-trash-alt"></i> Excluir
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Adicione esses links no cabeçalho do seu documento para os ícones do Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>