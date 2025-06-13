<form action="{{ route('produto-store') }}" method="post">
     @csrf <!--Cross-Site Request Forgery (Falsificação de Solicitação entre Sites).  -->
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <br>
    <button type="submit">Cadastrar Produto</button>
</form>