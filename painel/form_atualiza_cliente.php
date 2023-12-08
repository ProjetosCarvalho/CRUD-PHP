<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');

?>
<?php
    include_once('cabecalho.php');
    $id_cliente = $_GET['id'];
    
    $sql = "SELECT * FROM cadastro WHERE id_cliente = $id_cliente";
    $consulta = $conexao->query($sql);    
    while ($dados = $consulta->fetch_assoc()){        
        $id_cliente = $dados['id_cliente'];
        $nome_cliente = $dados['nome_cliente'];
        $email_cliente = $dados['email_cliente'];
        $cidade = $dados['cidade'];
    }
?>

        <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Atualizar cadastro de cliente</h1>
                        </div>
                    </div>
                </div>            
        </div>
        <div class="content mt-3">
            <!--/.col-->
            <div class="col-sm-8 tabela">
                <div class="card">
                    <form action="atualiza_cliente.php?id=<?php echo $id_cliente; ?>" method="POST">
                        <div class="mb-3">
                            <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                            <input type="text" class="form-control" id="nome_cliente" name="nome_cliente_novo" value="<?php echo $nome_cliente;?>">                            
                        </div>
                        <div class="mb-3">
                            <label for="email_cliente" class="form-label">Email do cliente</label>
                            <input type="email" class="form-control" id="email_cliente" name="email_cliente_novo" value="<?php echo $email_cliente;?>">
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade do cliente</label>
                            <input type="text" class="form-control" id="cidade" name="cidade_novo" value="<?php echo $cidade;?>">
                        </div>                        
                        <button style="border-radius: 10px;" type="submit" class="btn btn-primary botao-tabela">Atualizar</button>
                    </form>
                </div>
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Fim Painel Direito -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
