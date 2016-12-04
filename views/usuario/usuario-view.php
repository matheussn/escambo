<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<div class="container-fluid" style="height: 48px;">
	<div style=" padding: 0;" class="container-fluid">
		<div id="submenu" class="row">
		    <!-- Nav tabs -->
		    <ul class="nav nav-tabs" role="tablist">
		        <li role="presentation" class="col-xs-6 active">
		            <a href="#arquivos-send" aria-controls="arquivos-send" id="lnk-send" role="tab" data-toggle="tab">Home</a>
		        </li>
		        <li role="presentation" class="col-xs-6">
		            <a href="#arquivos-new" aria-controls="arquivos-new" role="tab" data-toggle="tab">Seus Objetos</a>
		        </li>
		    </ul>
		</div>
	</div>
</div>
<div id="test1" style=" width:100%; height:800px;">
	<div id="map" style="width: 100%; height: 800px; position: relative; overflow: hidden;">

	</div>
</div>