<?php if ( ! defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="pt-BR">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="pt-BR">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="pt-BR">
<!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_URI . "/views/_css/reset.css"?>">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_URI . "/viwes/_css/materialize.css"?>">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_URI . "/viwes/_css/materialize.min.css"?>">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_URI . "/views/bootstrap/css/bootstrap.css"?>">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_URI . "/views/_css/style-". $this->help .".css"?>">
	<!--[if lt IE 9]>
	<script src="<?php echo HOME_URI;?>/views/_js/scripts.js"></script>
	<![endif]-->
	<title><?php echo $this->title; ?></title>
	<script src="<?php echo HOME_URI . "/views/_js/jquery.js"?>"></script>
 	<script src="<?php echo HOME_URI . "/views/bootstrap/js/bootstrap.js"?>"></script>
</head>