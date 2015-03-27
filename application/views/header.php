<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Codeigniter Auth</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/miestilo.css" />
<!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layouts/side-menu.css">
<!--<![endif]-->
</head>
<body>
<?php if ($in){ ?>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Auth</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="<?php echo site_url('/'); ?>" class="pure-menu-link">Inicio</a></li>
                <li class="pure-menu-item"><a href="<?php echo site_url('/salir'); ?>" class="pure-menu-link">Salir</a></li>
                <li class="pure-menu-item"><a href="<?php echo site_url('/about'); ?>" class="pure-menu-link">Acerca de</a></li>
            </ul>
        </div>
    </div>

    <div id="main" class="side">
    <?php }else{ ?>
        
    <div id="main" class="no-side">
    <?php } ?>

