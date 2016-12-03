<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

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
            <div class="modal-body">
                <input type="radio" name="gender" value="male" checked> Usuário
                <br>
                <input type="radio" name="gender" value="female"> Enpresa
                <br>
                <input type="radio" name="gender" value="other"> Ong
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>