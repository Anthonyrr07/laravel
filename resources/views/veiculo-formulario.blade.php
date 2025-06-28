<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Cadastrar Veículo</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('veiculo-store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $veiculo->id ?? old('id') }}">

                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" id="marca" value="{{ $veiculo->marca ?? old('marca') }}">
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="modelo" id="modelo" value="{{ $veiculo->modelo ?? old('modelo') }}">
                    </div>

                    <div class="mb-3">
                        <label for="ano" class="form-label">Ano</label>
                        <input type="text" class="form-control" name="ano" id="ano" value="{{ $veiculo->ano ?? old('ano') }}">
                    </div>

                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa</label>
                        <input type="text" class="form-control" name="placa" id="placa" value="{{ $veiculo->placa ?? old('placa') }}">
                    </div>

                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor</label>
                        <input type="text" class="form-control" name="cor" id="cor" value="{{ $veiculo->cor ?? old('cor') }}">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
