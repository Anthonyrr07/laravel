<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veículos</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ícones do Font Awesome (opcional, só se quiser os ícones de edição/lixeira funcionando) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Lista de Veículos</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
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
                                    <span class="badge" style="background-color: {{ $veiculo->cor }}; color: black;">
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
        </div>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
