<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 16:55:11
  from 'C:\xampp\htdocs\vscode\rtani\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee63a4f63e0d4_44754351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e4eb9f19d37ba704fa60678ce2c5bcff6365be6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vscode\\rtani\\templates\\index.tpl',
      1 => 1592146487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee63a4f63e0d4_44754351 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mis recetas</title>
    <link rel ="shortcut icon" type="image/x-icon"href="images/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="css/style.css">
    <?php echo '<script'; ?>
 src='main.js'><?php echo '</script'; ?>
>
</head>
<body>
 <div class="encabezado">
        <img class="logo "src="images/logo.png" alt="foto del logo">
        <h1> Mis Recetas</h1>
        <nav>
               <a  href="home_pag">Inicio</a>
               <a  href="pag_sweet">Recetas Dulces</a>
               <a href="pag_salty"> Recetas Saladas</a>
               <a href="pag_subscription">Suscribirme</a>
         </nav>
    </div>
   
  
    <p class="reseña"> Si el mundo de la cocina te fascina, en Mis recetas descubrirás  recetas riquísimas  saladas y 
        dulces que deleitarán incluso a los paladares más exigentes. En nuestra web encontrarás todo tipo de recetas de
        cocina capaces de sorprender a los paladares
        más exquisitos.Ademas cada receta contiene su tabla nutricional!
    </p>
    <h2 class ="subtitulo"> Recetas que encontraras en esta web </h2>
 
    <div class="clase">
        <h3 class="nombrereceta">Tarta de choclo</h3>
        <img class="images"src="images/tarta.jpg" alt="foto de tarta">
    </div>
    
    <div class="clase">
        <h3 class="nombrereceta">Buñuelos de espinaca</h3>
        <img class="images"src="images/bunuelos.jpg" alt="foto de buñuelos">
    </div>
    
    <div class="clase">
        <h3 class="nombrereceta">Panqueques</h3>
        <img class="images" src="images/panqueques.jpg" alt="foto de Panqueques">
    </div>
    
    <div class="clase">
        <h3 class="nombrereceta">Tortilla de papas </h3>
        <img class="images"src="images/tortilla.jpg" alt="foto de tortilla">
    </div>
    
    <div class="clase">
        <h3 class="nombrereceta">Flan casero</h3>
        <img class="images" src="images/flan.jpg" alt="foto de flan">
    </div>
    
    <div class="clase">
        <h3 class="nombrereceta">Torta de ricota</h3>
        <img  class="images"src="images/torta.jpg" alt="foto de Torta">
    </div>
    
    <h3 class="pregunta">¿No sabes que receta elegir?</h3> 
  
     
      <form class="random" name="formulario_random" enctype="text"> 
            <p class="respuesta">  Elige el tipo que mas te guste y nosotros te ayudaremos</p>
            <p class="input"> Receta Salada <input id="receta_salada" type="radio" name="Check1"> </p> 
            <p class="input"> Receta Dulce <input id="receta_dulce" type="radio" name="Check1" > <br></p>   
            <p class= "respuesta">La receta salada que elegimos para vos es :  <span id = "mostrar_salado"> <br> </span> </p>
            <p class="respuesta">La receta dulce que elegimos para vos es :  <span id = "mostrar_dulce">  </span> </p>
            </form> 
        
        <?php echo '<script'; ?>
 src="javascript/main.js"><?php echo '</script'; ?>
>
</body> 
</html>
<?php echo '<?php
';?>
}
<?php echo '?>';
}
}