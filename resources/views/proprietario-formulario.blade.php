<form action="{{ route('proprietario-store') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value={{ $proprietario->id ?? old('id') }}>
    
    <label for="marca">Nome</label>
    <input type="text" name="nome" id="nome" value={{ $proprietario->nome ?? old('nome') }}>

    <label for="modelo">CPF</label>
    <input type="text" name="cpf" id="cpf" value={{ $proprietario-> cpf ?? old('cpf') }}>

    <label for="ano">telefone</label>
    <input type="text" name="telefone" id="telefone" value={{ $proprietario-> telefone ?? old('telefone') }}>

    <label for="ano">email</label>
    <input type="text" name="email" id="email" value={{ $proprietario-> email ?? old('email') }}>


    <button type="submit">Cadastrar</button>
</form>