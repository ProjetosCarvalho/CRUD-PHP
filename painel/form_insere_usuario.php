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
                            <h1>Cadastrar novo usuário</h1>
                        </div>
                    </div>
                </div>            
        </div>
        <div class="content mt-3">
            <!--/.col-->
            <div class="col-sm-8">
                <div class="card">
                    <form action="cadastra_usuario.php" method="POST">
                        <div class="mb-3">
                            <label for="nome_usuario" class="form-label">Nome do Usuário</label>
                            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario">                            
                        </div>
                        <div class="mb-3">
                            <label for="email_usuario" class="form-label">Email do Usuário</label>
                            <input type="email" class="form-control" id="email_usuario" name="email_usuario">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha">
                        </div>                        
                        <button style="border-radius: 10px;" type="submit" class="btn btn-success botao-tabela">Cadastrar</button>
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