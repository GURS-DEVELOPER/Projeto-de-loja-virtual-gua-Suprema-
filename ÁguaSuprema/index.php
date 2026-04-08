<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Loja - Água Suprema</title>
</head>
<body>
    <!--cabeça da página-->
    <head class="cabeca-web">
          
    </head>

    <nav class="log">
        <h1>Loja virtual - Água Suprema</h1>
    </nav> 
    
    <!--corpo da página-->
    <header class="cabecalho-web">
        <br>
        <!--item1-->
        <div class="item">
            <img src="./img/img-1.jpg" alt="produto1">
            
            <div class="descricao">

        <?php   
            echo "kit 3 garrafas / cor: preto <br>";   
            echo "<br> Valor: R$ 150,00 <br>";   
            echo "<br> Quantos produtos deseja comprar? <br>";
        ?>

        <input type="number" id="qtdd1" placeholder="Quantidade" style="width:90px;" min="1">

        <br><br>

        Digite seu telefone para contato:<br>

        <input type="text" id="telefone1" placeholder="Telefone" style="width:150px;">

        </div>

        
        <button class="botao1"  onclick="enviarWhats1()">COMPRAR PRODUTO</button>
        


        <script>

            function enviarWhats1(){

            let quantidade = document.getElementById("qtdd1").value;
            let numero = document.getElementById("telefone1").value;

            let preco = 150; // preço do produto
            let total = quantidade * preco;

            let mensagem = `Olá!
            Quero comprar o kit 3 garrafas preto.
            Quantidade: ${quantidade}
            Valor total: R$ ${total}`;

            let link = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

            window.open(link,'_blank');

        }

        </script>          
        </div>
        <br>
        <!--item2-->
        <div class="item">
            <img src="./img/img-2.jpg" alt="produto2">

            <div class="descricao">

        <?php   
            echo "kit 3 garrafas / cor: degrade rosa,amarelo e azul <br>";   
            echo "<br> Valor: R$ 80,00 <br>";   
            echo "<br> Quantos produtos deseja comprar? <br>";
        ?>

        <input type="number" id="qtdd2" placeholder="Quantidade" style="width:90px;" min="1">

        <br><br>

        Digite seu telefone para contato:<br>

        <input type="text" id="telefone2" placeholder="Telefone" style="width:150px;">

        </div>


        <button class="botao1"  onclick="enviarWhats2()">COMPRAR PRODUTO</button>


        <script>

            function enviarWhats2(){

            let quantidade = document.getElementById("qtdd2").value;
            let numero = document.getElementById("telefone2").value;

            let preco = 80; // preço do produto
            let total = quantidade * preco;

            let mensagem = `Olá!
            Quero comprar o kit 3 garrafas degrade rosa,amarelo e azul.
            Quantidade: ${quantidade}
            Valor total: R$ ${total}`;

            let link = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

            window.open(link,'_blank');

        }

        </script>  
            
        </div>
        <br>
        <!--item3-->
        <div class="item">
            <img src="./img/img-3.jpg" alt="produto3">
            
            <div class="descricao">

        <?php   
            echo "kit 3 garrafas / cor: degrade preto e azul <br>";   
            echo "<br> Valor: R$ 100,00 <br>";   
            echo "<br> Quantos produtos deseja comprar? <br>";
        ?>

        <input type="number" id="qtdd3" placeholder="Quantidade" style="width:90px;" min="1">

        <br><br>

        Digite seu telefone para contato:<br>

        <input type="text" id="telefone3" placeholder="Telefone" style="width:150px;">

        </div>


        <button class="botao1"  onclick="enviarWhats3()">COMPRAR PRODUTO</button>


        <script>

            function enviarWhats3(){

            let quantidade = document.getElementById("qtdd3").value;
            let numero = document.getElementById("telefone3").value;

            let preco = 100; // preço do produto
            let total = quantidade * preco;

            let mensagem = `Olá!
            Quero comprar o kit 3 garrafas degrade preto e azul.
            Quantidade: ${quantidade}
            Valor total: R$ ${total}`;

            let link = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

            window.open(link,'_blank');

        }

        </script>  
            
        </div>
        <br>
        <!--item4-->
        <div class="item">
            <img src="./img/img-4.jpg" alt="produto4">

            <div class="descricao">

        <?php   
            echo "kit 3 garrafas / cor: degrade verde,amarelo,lilaz <br>";   
            echo "<br> Valor: R$ 200,00 <br>";   
            echo "<br> Quantos produtos deseja comprar? <br>";
        ?>

        <input type="number" id="qtdd4" placeholder="Quantidade" style="width:90px;" min="1">

        <br><br>

        Digite seu telefone para contato:<br>

        <input type="text" id="telefone4" placeholder="Telefone" style="width:150px;">

        </div>


        <button class="botao1"  onclick="enviarWhats4()">COMPRAR PRODUTO</button>


        <script>

            function enviarWhats4(){

            let quantidade = document.getElementById("qtdd4").value;
            let numero = document.getElementById("telefone4").value;

            let preco = 200; // preço do produto
            let total = quantidade * preco;

            let mensagem = `Olá!
            Quero comprar o kit 3 garrafas degrade verde,amarelo,lilaz.
            Quantidade: ${quantidade}
            Valor total: R$ ${total}`;

            let link = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

            window.open(link,'_blank');

        }

        </script>  
            
        </div>
        <br>
        <!--item5-->
        <div class="item">
            <img src="./img/img-5.jpg" alt="produto5">

            <div class="descricao">

        <?php   
            echo "kit 3 garrafas / cor: degrade rosa e branco <br>";   
            echo "<br> Valor: R$ 500,00 <br>";   
            echo "<br> Quantos produtos deseja comprar? <br>";
        ?>

        <input type="number" id="qtdd5" placeholder="Quantidade" style="width:90px;" min="1">

        <br><br>

        Digite seu telefone para contato:<br>

        <input type="text" id="telefone5" placeholder="Telefone" style="width:150px;">

        </div>


        <button class="botao1"  onclick="enviarWhats5()">COMPRAR PRODUTO</button>


        <script>

            function enviarWhats5(){

            let quantidade = document.getElementById("qtdd5").value;
            let numero = document.getElementById("telefone5").value;

            let preco = 500; // preço do produto
            let total = quantidade * preco;

            let mensagem = `Olá!
            Quero comprar o kit 3 garrafas degrade rosa e branco.
            Quantidade: ${quantidade}
            Valor total: R$ ${total}`;

            let link = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

            window.open(link,'_blank');

        }

        </script>  
            
        </div>

    </header>
    <br><br><br>
    <!--rodapé da página-->
    <footer class="rodape-web">
        <p>Copyright © 2026 - Água Suprema <br>Guilherme Ubiratan</p>
    </footer>

</body>
</html>