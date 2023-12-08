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
?>      

        <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Inserir novo cliente</h1>
                        </div>
                    </div>
                </div>            
        </div>

        <div class="content mt-3">
            <!--/.col-->
            <div class="col-sm-8">
                <div class="card">
                    <form action="insere_cliente.php" method="POST">
                        <div class="mb-3">
                            <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                            <input type="text" class="form-control" id="nome_cliente" name="nome_cliente">                            
                        </div>
                        <div class="mb-3">
                            <label for="email_cliente" class="form-label">Email do cliente</label>
                            <input type="email" class="form-control" id="email_cliente" name="email_cliente">
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade do cliente</label>
                            <input type="text" class="form-control" id="cidade" name="cidade">
                        </div>                        
                        <button style="border-radius: 10px;" type="submit" class="btn btn-success botao-tabela">Inserir</button>
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
