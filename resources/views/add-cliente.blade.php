<form action="{{ route('store-cliente') }}" method="post"> <!-- post esconde os dados, get coloca na url -->
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Cadastrar</button> 
</form>