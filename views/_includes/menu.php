<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<header>
    <nav id="menu-principal" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#"></a>
            </div>
            <div class="collapse navbar-collapse " id="collapse-navbar" >
                <ul id="ul" class="nav navbar-nav">
                    <li <?php
                    if($this->title === 'Agenda')
                    	echo 'class="active"';
                    ?>>
                        <a href="<?php echo HOME_URI ?>/agenda">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                            &nbsp;
                            Agenda
                        </a>
                    </li>

                    <li <?php
                    if($this->title === 'Arquivos')
                    	echo 'class="active"';
                    ?>>
                        <a href="<?php echo HOME_URI ?>/arquivos">
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            &nbsp;
                            Arquivos
                        </a>
                    </li>

                    <li <?php
                    if($this->title === 'Caderno')
                    	echo 'class="active"';
                    ?>>
                        <a href="<?php echo HOME_URI ?>/caderno">
                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                            &nbsp;
                            Caderno
                        </a>
                    </li>

                    <li class="visible-xs">
                        <a href="<?php echo HOME_URI ?>/chat">
                            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                            &nbsp;
                            Chat
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/Funcoes/Login/logout.php">Deslogar</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#ConfigModal">
                                    <span class="glyphicon glyphicon-cog"></span>
                                    Configurações
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="modal fade" id="ConfigModal" tabindex="-1" role="dialog" aria-labelledby="ConfigModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>