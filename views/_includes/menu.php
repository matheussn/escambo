<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<?php 
    if($this->title == "Só Barganha - Home")
    {
?>
<body>
<nav id="menu-principal" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Só Barganha</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul href="#" data-toggle="modal" data-target="#ConfigModal" class="nav navbar-nav navbar-right" id="ul-button">
                <a class="btn btn-success" href="#" role="button">Cadastre-se</a>
            </ul>

            <form method="post" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mail ou CPF" required>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                </div>
                <button type="submit" class="btn btn-default">Entrar</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<div class="modal fade" id="ConfigModal" tabindex="-1" role="dialog" aria-labelledby="ConfigModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Cadastre-se</h4>
            </div>
            <div class="modal-body" id="modal-body-cad">
                <p>
                    <input type="radio" name="User" value="User" checked> Usuário
                    <br>
                    <input type="radio" name="User" value="Emp"> Empresa
                    <br>
                    <input type="radio" name="User" value="Ong"> Ong
                </p>
                
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                    <input type="text" name="nome" placeholder="Nome Completo da Ong" class="col-xs-11">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" name="email" placeholder="E-mail" class="col-xs-11">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-credit-card"></span>
                    <input type="text" name="cnpj" placeholder="CNPJ" class="col-xs-10">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-credit-card"></span>
                    <input type="text" name="cnas" placeholder="CNAS" class="col-xs-10">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                    <input type="text" name="username" placeholder="username" class="col-xs-11">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <input type="password" name="senha" placeholder="senha" class="col-xs-11">
                </div>
                <h4>Endereço:</h4>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-road"></span>
                    <input type="text" name="estado" placeholder="Estado" class="col-xs-2">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-road"></span>
                    <input type="text" name="cidade" placeholder="Cidade" class="col-xs-4">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-home"></span>
                    <input type="text" name="logradouro" placeholder="Logradouro" class="col-xs-5">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
<?php
    }
    else if($this->title === "Só Barganha - Usuário")
    {
?>
<body onload="initialize()">
<nav id="menu-principal" class="navbar navbar-inverse navbar-fixed-top" style="margin: 0px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Só Barganha</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<?php 
    }
?>