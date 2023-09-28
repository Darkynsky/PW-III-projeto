<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="css/style-produtos-cliente.css">
    <script src="js/script.js"></script>
    <title>Padaria Camargo</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header__logo">
                <img src="img/logo.png" alt="Logo da Página">
            </div>
            <!-- <nav class="header__navbar">
                <a class="header__navbar__link" href="clienteProdutos">Produtos</a>
                 <a class="header__navbar__link" href=""></a>
                </nav> -->
            <a class="header__link" href="/">
           
                <span class="material-symbols-outlined">
                    arrow_back  
                </span>    
                    Voltar
    
            </a>
            <!--<button id="botaoSair">Sair</button>-->
        </header>
        
        <div class="content2">
    
            <div class="centerCont">
            @foreach($produto as $c)
                <!-- <table class="tb_ECliente">    
                
                    <tr>
                        <th class="tb_tr_EClienteList">
                            {{$c->produto}}
                        </th>                
                    </tr>
                    <tr>
                        <td>
                            <img src="/img/exibidores_img.jpg" class="img_ProdutosE">
                        </td>
                    </tr>
                    <tr>
                        <td>{{$c->descrProduto}}</td>
                    </tr>
                    <tr>
                        <td>
                            <h2>R$ {{$c->valor}}</h2>
                        </td>
                    </tr>
                
                </table> -->
                <div class="tb_ECliente"> 
                    <div class="tbECliente__left">

                        <img src="/img/exibidores_img.jpg" class="tb_ECliente__img">   
                    </div>
                    <div class="tbECliente__right">
                        <div>
                        <h2 class="tb_ECliente__title">
                            {{$c->produto}}
                        </h2>             
                            <p class="tb_EClient__desc">{{$c->descrProduto}}</p>
                        </div>
                            <span class="tb_EClient__price">R$ {{$c->valor}}</span>
    
                                    
    
                    </div>           
    
                    
                
                </div>
            @endforeach
            </div>
            
        </div>
    
        <footer>
            <p>&copy; 2023 Todos os direitos reservados.</p>
        </footer>

    </div>
</body>
</html>