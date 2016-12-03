<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<body onload="initialize()">
	<div id="test1" style="width:100%;height:800px;" >
		<div id="map" style="width:100%;height:800px;"></div>
	</div>
	<div id="test2" class="col s12">Test 2</div>
	<div id="test4" class="col s12">Test 4</div>

	<div id="modal1" class="modal">
		<div class="modal-content">
		  <h4>Maycon Pacheco</h4>
		  <div class="row">
		  	<div class="col s4">
		  		<img src="images/perfil.jpg" style="width:100%;">
		  	</div>
		  	<div class="col s8">
		  		<ul class="collection">
			      <li class="collection-item">E-mail: teste@teste.com</li>
			      <li class="collection-item">Tel.: (00)0000-0000</li>
			      <li class="collection-item">Este usuário tem preferencia pelo aplicativo Whats app para contato</li>
			      <li class="collection-item"><img src="images/rating.png" width="100%"></li>
			    </ul>
		  	</div>
		  </div>
		</div>
		<div class="modal-footer">
		  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		</div>
	</div>