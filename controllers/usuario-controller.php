<?php
class UsuarioController extends MainController
{

    public function index() {

		$this->title = 'Só Barganha';

		//$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

		//$api = $this->load_model(escambo_route()->component.'/escambo_home/model/home-model');

        require (escambo_route()->view . '_includes/header.php');

        require (escambo_route()->view . '_includes/menu.php');

        require (escambo_route()->view . 'usuario/usuario-view.php');

        require (escambo_route()->view . '_includes/footer.php');

    }
}