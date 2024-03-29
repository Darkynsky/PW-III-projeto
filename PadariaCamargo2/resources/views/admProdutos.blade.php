<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Padaria Camargo</title>
</head>
<body>
    <header>
        <a href="/">
            <button id="botaoVoltar">Voltar</button>
        </a>
        <div class="logo">
            <img src="img/logo.png" alt="Logo da Página">
        </div>
        <a href="/logout"> <button>Sair</button> </a>
    </header>
    <div class="content">
        <table class="tb_EAdm">
            <tr class="tb_tr_EAdmT">
                <th class="celTopL">Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Data do Cadastro</th>
                <th>Foto</th>
                <th class="celTopR">Ações</th>
            </tr>
            <form method="POST" action="/Produto" enctype="multipart/form-data">
            {{ csrf_field() }}
                <tr class="tb_tr_EAdmInsert">
                    <td class="celBottonL">
                        <input type="text" name="txProduto" id="txProduto" placeholder="Ex.: Dogão">
                    </td>
                    <td>
                        <input type="text" name="txValor" id="txValor" placeholder="Ex.: 5.99">
                    </td>
                    <td>
                        <input type="text" name="txDescrProduto" placeholder="Ex.: Pão com salsicha">
                    </td>
                    <td>
                        <input type="date" name="txDataCadastro" id="txDataCadastro">
                    </td>
                    <td>
                        <input type="file" name="image" >
                    </td>
                    <td class="celBottonR">
                        <input type="reset" value="Limpar">
                        <input type="submit" value="Salvar">
                    </td>
                </tr>
            </form>
        </table>

        <table class="tb_EAdm">
            <tr class="tb_tr_EAdmT">
                <th class="celTopL">ID</th>
                <th>Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th> Data do Cadastro</th>
                <th class="celTopR">Ações</th>
            </tr>
        
            @foreach($produto as $c)
            <tr class="tb_tr_EAdmList">
                <td>{{$c->idProduto}}</td>
                <td>{{$c->produto}}</td>
                <td>R$ {{$c->valor}}</td>
                <td>{{$c->descrProduto}}</td>
                <td>{{$c->dtCadastro}}</td>
                <td>
                    <a href="/admProdutos/excluir/{{$c->idProduto}}"><button class="btn_Delete">X</button></a>
                    <a><button class="btn_Edit">...</button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <footer>
        <p>&copy; 2023 Todos os direitos reservados.</p>
    </footer>
</body>
</html>