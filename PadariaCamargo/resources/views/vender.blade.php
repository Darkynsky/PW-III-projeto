<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <title>PadariaCamargo</title>
    </head>
    <body>
        <div id="cabecalho">
            <a href="/">pagina1</a>
        </div>
        <div id="conteudo">
            <form id="formVenda" method="post" action="pagina3.html">
                <div class="exibeProdutos">
                    <table id="eProduto">
                        <tr>
                            <th>Produto x</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="">
                            </td>
                        </tr>
                        <tr>
                            <td>R$</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" value="-">
                                <input type="text">
                                <input type="button" value="+">
                            </td>
                        </tr>
                    </table>
                </div>
                <input type="reset" value="Limpar ✖">
                <input type="submit" value="Avançar ✔">
            </form>
        </div>
        <div id="rodape"></div>
    </body>
</html>