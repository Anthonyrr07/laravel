<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proprietários</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Lista de Proprietários</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proprietarios as $proprietario)
                            <tr>
                                <td>{{ $proprietario->id }}</td>
                                <td>{{ $proprietario->nome }}</td>
                                <td>{{ $proprietario->cpf }}</td>
                                <td>{{ $proprietario->telefone }}</td>
                                <td>{{ $proprietario->email }}</td>
                                <td>
                                    <a href="/proprietario/remove/{{ $proprietario->id }}" class="btn btn-danger btn-sm me-2">Excluir</a>
                                    <a href="{{ route('proprietario-editar', $proprietario->id) }}" class="btn btn-warning btn-sm">Atualizar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (opcional, para interações) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
