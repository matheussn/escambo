<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

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
        <div class="navbar-brand collapse nav navbar-nav navbar-collapse navbar-right" id="collapse-navbar" >
            <div class="btn-group">
              <button type="button" class="btn btn-info">Login</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-success">Cadastre-se</button>
            </div>
        </div>
    </div>
</nav>
