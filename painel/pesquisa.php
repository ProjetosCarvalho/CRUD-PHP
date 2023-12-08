<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');
    include_once('cabecalho.php');
?>      

        <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Buscar clientes</h1>
                        </div>
                    </div>
                </div>            
        </div>
        <div class="content mt-3">
            <!--/.col-->
            <div class="col-sm-12">
            <div class="card-header">
                <h6 class="card-title">Encontre seus clientes de maneira rápida e eficar aqui! Não precisa nem mesmo do nome completo.</h6>
            </div>
            <br>
            <br>
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Pesquisa de Clientes</strong>
                    </div>
                    <div class="card-body">   
                        <form action="" method="post">                            
                            <input class="form-control" type="text" id="nome" name="nome" onkeyup="buscarClientes()" placeholder="Digite o nome do cliente...">
                        </form>                        
                        <div id="resultado"></div>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Fim Painel Direito -->

    <script>
        function buscarClientes() {
            var nome = document.getElementById('nome').value;
            $.ajax({
                type: 'post',
                url: 'pesquisa_cliente.php',
                data: {
                    nome: nome
                },
                success: function (response) {
                    document.getElementById('resultado').innerHTML = response;
                }
            });
        }
    </script>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
