<!DOCTYPE html>
<html>
   <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Suscripcion </title>
    <link rel ="shortcut icon" type="image/x-icon"href="images/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="css/style.css">
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
      <div class="Suscripcion">
          <h2 class="titulosub"> Completa tus datos para suscribirte</h2>  
             <p class="titulosub"> Con esta suscripcion recibiras diariamente recetas de tu interes</p> 
           <form>
                 <label for="nombre">Nombre </label>
                 <input class="formulario" type="text" placeholder=" Escribe tu nombre" name="nombre" id="nombre"></input>
                 <label for="apellido">Apellido</label>
                 <input class="formulario" type="text" placeholder=" Escribe tu  Apellido" name="apellido" id="apellido"></input>
                   <br>
                   <br>
                 <label for="email">Correo Electronico</label>
                 <input  class= "formulario"type="email" placeholder=" Ingrese su Email " name="email" id="email">
                 <label for="contraseña">Elige una contraseña</label>
                 <input class="formulario" type="password"placeholder=" Escribe una contraseña" name="contraseña" id="contraseña">
                  <br>
                  <br>
                <p class="formulario">  ¿Que tipos de recetas te interesan ? <select></p>
                <option>Seleccionar</option>
                <option>Recetas Dulces</option>
                <option>Recetas Saladas</option></select>
                 <br>
                 <br>
                <input class="boton" type="submit" value="Suscribirme">
           </form>
     </div>
 </body> 

</html> 
