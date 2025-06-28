
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Anúncios</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Anúncios</h2>

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Data de Publicação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anuncios as $anuncio)
                    <tr>
                        <td>{{ $anuncio->id }}</td>
                        <td>{{ $anuncio->titulo }}</td>
                        <td>{{ $anuncio->descricao }}</td>
                        <td>R$ {{ number_format($anuncio->preco, 2, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($anuncio->data_publicacao)->format('d/m/Y') }}</td>
                        <td>
                            <a href="/anuncio/remove/{{ $anuncio->id }}" class="btn btn-danger btn-sm me-2">Excluir</a>
                            <a href="{{ route('anuncio-editar', $anuncio->id) }}" class="btn btn-warning btn-sm">Atualizar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (opcional, para funcionalidades como modais) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>