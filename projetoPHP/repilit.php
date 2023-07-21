<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro TCDFRP</title>
  <link rel="icon" type="imagem/png" href="https://dev-ecommerce-assets-dist.direcaoconcursos.com.br/course/image/8c7a7ee5-db52-4cd2-a900-e6f68b08a4c3.jpg"/>
<!-- TH -->
   <body>
    
    <!------ Foto do TCDF -->
    <center>
    <img src="https://blog-static.infra.grancursosonline.com.br/wp-content/uploads/2013/11/03141345/tcdf-organizador-cespe-2.jpg"
    width="750px" > 
    </center>
  </body>
  
</head>
<body>
  <!---- estilização titulo ---->
  <style>
   
    .tituloPrincipal {
   color: black;
   font-size: 50px;
   }
  
   .barra {
  background-color:rgb(96, 96, 228);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 20px;
 }
  </style>
  <br>
  <div class="barra"></div> 
  <center>
  <h1 class="tituloPrincipal">Cadastro TCDF</h1>
  </center>
    <?php
     /* DADOS  
     Cadastro patrimonio TCDF
     
     Servidor: nome, CPF, orgão, 
     
     Patrimonio: idbem,NumeroProcesso, DescricaoBem, SubItem, DataAquisicao, ValorBem, ValorBem, IdGestao, IdCompra, IdSetor, 
     IdFuncionario 
     
     Orgão: andar, responsavel
     */
    // Verifica se o formulário foi enviado
       // Banco de Dados detalhado para TCDF
     /*class funcionario
     public $IdFuncionario;
     public $CPF;
     public $Nome;
     public $IdSetor;
     public $Cargo;
     public $patrimonio 

     class $setor
      public $IdSetor;
     public $NomeSetor;
       
     class patrimonio 
     public $idbem;
     public $NumeroProcesso;
     public $DescricaoBem;
     public $Subitem;
     public $DataAquisicao;
     public $ValorBem;
     public $SubItem;
     public $DataAquisicao; 
     public $ValorBem;
     public $IdGestao;
     public $IdCompra;
     public $IdSetor;
     public $IdFuncionario;

     class compra 
     public $IdCompra;
     public $NotaFiscal;
     public $Valor;

     class gestão
      public $IdGestao 
      public $Codigo 
      public $Tipo 
*/
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recupera os valores dos campos do formulário
        $patrimonio = $_POST['patrimonio'];
        $mais_patrimonios = $_POST['mais_patrimonios'];
        $nome_servidor = $_POST['nome_servidor'];
        $orgao_servidor = $_POST['orgao_servidor'];
        $CPF_servidor = $_POST['CPF-servidor'];
      
        
      

        // Processa os dados, por exemplo, salvar no banco de dados

        echo "<h1>Dados cadastrados com sucesso!</h1>";
        echo "<p>Número do patrimônio: $patrimonio</p>";
        echo "<p>Mais de um patrimônio: $mais_patrimonios</p>";
        echo "<p>Nome do servidor: $nome_servidor</p>";
        echo "<p>Órgão do servidor: $orgao_servidor</p>";
    } else {
        // Se o formulário não foi enviado, exibe o formulário de cadastro
        ?> <!--- FIM PHP FIM PHP FIM PHP --------->

      
      <center>
<h1>Insira os dados necessários </h1>
<center>
<!-- INÍCIO DE DADOS NECESSÁRIOS PARA CADASTROO -->
       <!-- Dados a serem inseridos-->
 <from>
   <center>
   Nome servidor
    <input type="text"> <br> <br>
    CPF do servidor 
    <input type="text"> <br> <br>
    Orgão do servidor
    <input type="text"> <br> <br>
    Numero do patrimonio
    <input type="number"> <br> <br>
      
        <form method="POST" action="index.php">
            <label for="patrimonio">Número do patrimônio (máximo 5 caracteres):</label>
            <input type="text" name="patrimonio" id="patrimonio" maxlength="5" required>

            <br><br>

            
            
          <!-- MAIS PATRIMONIO -->
           <!--- Para inserir outo patrimonio vinculado ao servidor -->
    <label for="mais_patrimonios">Será inserido mais de um patrimônio?</label>
  <input type="radio" name="mais_patrimonios" value="sim" id="opcao-sim" required>
  <label for="opcao-sim">Sim</label>

  <input type="radio" name="mais_patrimonios" value="nao" id="opcao-nao">
  <label for="opcao-nao">Não</label>
<br>
  <div id="outro_patrimonio" style="display: none;">
    <label for="input-outro-patrimonio">Segundo patrimônio:</label>
    <input type="text" id="input-outro-patrimonio">
  </div>
<br> 
  <script>
    var opcaoSim = document.getElementById("opcao-sim");
    var outroPatrimonio = document.getElementById("outro_patrimonio");

    opcaoSim.addEventListener("click", function() {
      outroPatrimonio.style.display = "block";
    });

    opcaoNao.addEventListener("click", function() {
      outroPatrimonio.style.display = "none";
    });
  </script>
           <!-- FIM "MAIS PATRIMONIO" -->
    <br>

            <input type="submit" value=" Finalizar Cadastro">
        </form>

    <?php
    }
    ?>

</body>
</html>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Cadastro efetuado com susesso</p>'; ?> 
    <br> <br>
    
    

<!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>

  

          <!--           
    TH        
 ░░░░░░███████ ]▄▄▄▄▄▄▄▄▃
▂▄▅█████████▅▄▃▂
I███████████████████].
◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙◤           
-->   




  </body>
</html>