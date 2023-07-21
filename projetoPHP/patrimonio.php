<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Patrimônio</title>
</head>
<body>
<!-- TH -->    
    
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
        ?>

        <h1>Bem-vindo ao cadastro de patrimônio</h1>

        <form method="POST" action="index.php">
            <label for="patrimonio">Número do patrimônio (máximo 5 caracteres):</label>
            <input type="text" name="patrimonio" id="patrimonio" maxlength="5" required>

            <br><br>

            <label for="mais_patrimonios">Será inserido mais de um patrimônio?</label>
            <input type="radio" name="mais_patrimonios" value="sim" id="opcao-sim" required>
            <label for="opcao-sim">Sim</label>

            <input type="radio" name="mais_patrimonios" value="nao" id="opcao-nao">
            <label for="opcao-nao">Não</label>

            <br><br>

            <label for="nome_servidor">Nome do servidor ligado ao patrimônio:</label>
            <input type="text" name="nome_servidor" id="nome_servidor" required>

            <br><br>

            <label for="orgao_servidor">Órgão do servidor:</label>
            <input type="text" name="orgao_servidor" id="orgao_servidor" required>

            <br><br>

            <input type="submit" value="Cadastrar">
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

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>