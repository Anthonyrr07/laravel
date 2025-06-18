<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($veiculos as $veiculo)
            <tr>
                <td>id: 0</td>
                <td>Nome: Anthony</td>
                <td>Cpf: 232323</td>
                <td>Telefone: 232123</td>
                <td>Email: dnfifdu@gmail.com</td>
                <td>
					<a href="/proprietario/remove/0">Excluir</a>
                    <a href="/proprietario/update/0">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>