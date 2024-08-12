<?php

    //Conexión a la BD
    require "BD.php";
    $conexion= new Conexion;

    $id="";

    if($_GET){
        $id=$_GET['id'];
        $sql="SELECT * FROM persona WHERE id=".$id;
        $listOne=$conexion->ejecutar($sql);
        $resultado=$listOne->fetchALL();
        //Datos de la empresa
        $nombre_empresa=$resultado[0]['nombre_empresa'];
        $email_empresa=$resultado[0]['email_empresa'];
        $telefono_empresa=$resultado[0]['telefono_empresa'];
        $ubicacion_empresa=$resultado[0]['ubicacion_empresa'];
        
        //Datos del contacto
        $contacto_directo=$resultado[0]['contacto_directo'];
        $area_contacto=$resultado[0]['area_contacto'];
        $telefono_contacto=$resultado[0]['telefono_contacto'];
        $emai_contacto=$resultado[0]['emai_contacto'];

        //Descripción de la empresa
        $descripcion_empresa=$resultado[0]['descripcion_empresa'];

        //Datos adicionales
        $calle=$resultado[0]['calle'];
        $colonia=$resultado[0]['colonia'];
        $numero=$resultado[0]['numero'];
        $codigo_postal=$resultado[0]['codigo_postal'];
        $ciudad=$resultado[0]['ciudad'];
        $estado=$resultado[0]['estado'];
        $rfc=$resultado[0]['$rfc'];
        $pagina_web=$resultado[0]['pagina_web'];
    }
    if($_POST){
        $id=(isset($_POST['id'])) ? $_POST['id']:"";
        //Datos de la empresa
        $nombre_empresa=(isset($_POST['nombre_empresa'])) ? $_POST['nombre_empresa']:"";
        $email_empresa=(isset($_POST['email_empresa'])) ? $_POST['email_empresa']:"";
        $telefono_empresa=(isset($_POST['telefono_empresa'])) ? $_POST['telefono_empresa']:"";
        $ubicacion_empresa=(isset($_POST['ubicacion_empresa'])) ? $_POST['ubicacion_empresa']:"";
        
        //Datos del contacto
        $contacto_directo=(isset($_POST['contacto_directo'])) ? $_POST['contacto_directo']:"";
        $area_contacto=(isset($_POST['area_contacto'])) ? $_POST['area_contacto']:"";
        $telefono_contacto=(isset($_POST['telefono_contacto'])) ? $_POST['telefono_contacto']:"";
        $emai_contacto=(isset($_POST['email_contacto'])) ? $_POST['email_contacto']:"";

        //Descripción de la empresa
        $descripcion_empresa=(isset($_POST['descripcion_empresa'])) ? $_POST['descripcion_empresa']:"";

        //Datos adicionales
        $calle=(isset($_POST['calle'])) ? $_POST['calle']:"";
        $colonia=(isset($_POST['colonia'])) ? $_POST['colonia']:"";
        $numero=(isset($_POST['numero'])) ? $_POST['numero']:"";
        $codigo_postal=(isset($_POST['codigo_postal'])) ? $_POST['codigo_postal']:"";
        $ciudad=(isset($_POST['ciudad'])) ? $_POST['ciudad']:"";
        $estado=(isset($_POST['estado'])) ? $_POST['estado']:"";
        $rfc=(isset($_POST['rfc'])) ? $_POST['rfc']:"";
        $pagina_web=(isset($_POST['pagina_web'])) ? $_POST['pagina_web']:"";
        
        //Actualizar
        $sql="UPDATE persona SET nombre='".$nombre."', apellidos='".$apellidos."' WHERE id=".$id;
        $agregar=$conexion->ejecutar($sql);
        echo "<div>Se ha actualizado correctamente a: <strong>".$nombre." ".$apellidos."</strong></div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Vistas-Empresas/editar-datos-empresa.css" />
  <title>Editar datos de la empresa</title>
</head>

<body>
    <header>
      <!--Inicio del titulo-->
        <figure>
            <img src="../assets/img/u26.png" class="header--img1" alt="" />
        </figure>
        <div class="header--title">
          <p>Bolsa de Trabajo del SUNEO</p>
        </div>
        <figure>
          <img src="../assets/img/u43.png" class="header--img2" alt="" />
        </figure>
        <!--Fin del titulo-->
    </header>
<center>
<!--Inicio del menu-->
<div class="div-menu">
    <div class="div-texto-menu"><a class="texto-menu" href="Datos-de-la-empresa.html">Datos de la Empresa</a></div>
    <div class="div-icon"><img src="../assets/icons/u18.svg" class="icon--question"></div>
    <div class="div-icon"><img src="../assets/icons/u11.svg" class="icon--settings"></div>
    <div class="div-icon"><img src="../assets/img/u462.png" class="icon--profile"></div>
</div>
<!--Fin del menu-->
</center>
    <main>
      <!--Inicio de la seccion del contenido de los datos-->
      <section class="main--section">
           <!--Inicio del titulo-->
        <div class="main--title">
          <p>Se encuentra editando los datos correspondientes a su empresa asegúrese de guardar los cambios una vez que termine</p>
        </div>
        <!--Fin del titulo-->
        <!--Inicio de la linea de separacion entre las dos secciones-->
        <div>
        <hr class="line-title1">
        </div>
     <!--fin de la linea de separacion-->
        <div class="main--content">
          <div class="content2">
         <!--Inicio de la segunda seccion-->
           <div class="content2--information">
            <!--Inicio del area de la imagen-->
            <div class="content1--img">
              <img src="../assets/img/cemex.png" class="img--enterprise" alt="" />
            </div>
            <!--Fin del area de la imagen-->
            <!--Inicio del campo editar imagen-->
             <div class="tamano">
            <li><img src="../assets/icons/editar-n.svg"></li>
            <li><a class="editar" href="#">Editar/Cambiar foto</a></li>
          </div>
            <!--Fin del campo editar imagen-->
              <div class="content2--information-title1">
                <p>Datos de la empresa</p>

                  <hr class="line-title2">
               </div>
              <div class="contact">
              <diV class="content2--information-text1">
                <p>Nombre de la empresa  <input type="text" class="content2--information-texto1" name="nombre" placeholder=" CEMEX"></p>
                <p>Correo electronico <input type="text" class="content2--information-texto1" name="correo" placeholder=" cemex@cemex.com.mx" ></p>
                <p>Telefono <input type="text" class="content2--information-texto1" name="telefono" placeholder=" 442 3091600" ></p>
                <p>Ubicación: <input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Santiago de Querétaro, Querétaro" > </p>
              </diV>

              <div class="content2--information-title2">
                <p>Direccion de la empresa</p>
                <hr class="line-title3">
              </div>

                    <div class="dir">
                        <label for="#"class="content2--information-text3">Calle:<input class="celdas1" id="nombre" type="text" name="name" placeholder="      Calle de la empresa..."></label>

                        <label for="#" class="content2--information-text3">Colonia:<input  class="celdas2"  type="text" name="company" placeholder="     Colonia de la empresa..." ></label>
                        <br>
                  </div>

                    <div class="dir">
                        <label for="#"class="content2--information-text3">Número:<input class="celdas1" id="nombre" type="text" name="name" placeholder="     Numero de la empresa..."></label>

                        <label for="#" class="content2--information-text3">C.P.:<input  class="celdas2"  type="text" name="company" placeholder="     Codigo Postal de la empresa..." ></label>
                        <br>
                  </div>

                  <div class="dir">
                        <label for="#"class="content2--information-text3">Ciudad:<input class="celdas1" id="nombre" type="text" name="name" placeholder="     Ciudad de la empresa..."></label>

                        <label for="#" class="content2--information-text3">Estado:<input  class="celdas2"  type="text" name="company" placeholder="     Estado de la empresa..." ></label>
                        <br>
                  </div>
              <div class="content2--information-title3">
                <p>Datos adicionales</p>
                <hr class="line-title3">
              </div>
                    <div class="dir">
                        <label for="#"class="content2--information-text3">Página web:<input class="celdas1" id="nombre" type="text" name="name" placeholder="     Pagina web de la empresa..."></label>

                        <label for="#" class="content2--information-text3">RFC:<input  class="celdas2"  type="text" name="company" placeholder="     RFC de la empresa..." ></label>
                  </div>
              <div class="content2--description-title">
                <p>Descripción de la empresa</p>
                <hr class="line-title3">
              </div>
              <div >
                <textarea class="content2--description-text" placeholder=" Nuestra compañía fue fundada en Monterrey, México, en 1906. Empezamos como una empresa local y, gracias a nuestra visión, evolucionamos hasta convertirnos en una de las compañías globales líderes en nuestra industria. Ahora contamos con el apoyo de cerca de 43 mil colaboradores en todo el mundo. Mantenemos relaciones comerciales con más de cien países y una red de operaciones con más de cincuenta naciones en la que se produce, distribuye y comercializa cemento, concreto premezclado, agregados y productos relacionados."></textarea>
              </div>
              <div class="content2--information-title2">
                <p>Datos del contacto</p>
                <hr class="line-title3">
                <p style="font-size: 14px;">Contacto directo</p>
              </div>

                  <div class="dir">
                        <label for="#"class="content2--information-text3">Nombre:<input class="celdas1" id="nombre" type="text" name="name" placeholder="     Nombre de la empresa..."></label>

                        <label for="#" class="content2--information-text3">Area:<input  class="celdas2"  type="text" name="company" placeholder="     Area de la empresa..." ></label>
                        <br>
                  </div>
                  <div class="dir">
                        <label for="#"class="content2--information-text3">Telefono:<input class="celdas1" id="nombre" type="text" name="name" placeholder="     Telefono de la empresa..."></label>

                        <label for="#" class="content2--information-text3">Email:<input  class="celdas2"  type="text" name="company" placeholder="     Email de la empresa..." ></label>
                        <br>
                  </div>

                    <div class="dir2">

                        <a class="boton-cancelar" href="#modal"><span class="content1--more_coments-text"> Cancelar </span></a>

                        <a class="boton-guardar" href="#modal2"><span class="content1--more_coments-text"> Guardar </span></a>

                </div>
              </div>
              </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer--div1-img">
      <img src="../assets/img/u26.png" class="footer-img1"  alt="">
      </div>
      <div class="footer--titleT1">
        <div class="footer--title1">
          <p>Sobre SUNEO</p>
        </div>
        <div class="footer--title1">
          <p>Aviso de Privacidad</p>
        </div>
        <div class="footer--title1">
          <p>Empresas</p>
        </div>
        <div class="footer--title1">
          <p>Ayuda</p>
        </div>
      </div>
      <div class="footer--text">
        <div class="footer--textT1">
        <div class="footer--text1">
          <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
        </div>
        <div class="footer--text1">
          <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
        </div>
      </div>
      <div class="footer--textT2">
        <div class="footer--text1">
          <p>
            Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116
          </p>
        </div>
        <div class="footer--text1">
          <p>
            Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P
            69000
          </p>
        </div>
      </div>
      </div>
    </footer>
        <aside id="modal" class="modal--container">
      <div class="content-modal">
        <div class="modal--title">
          <p>Mensaje</p>
        </div>
        <div class="container-text1">
        <p>¿Desea guardar los cambios realizados antes de salir?</p>
        </div>
        <div class="modal--container-buttons">
           <a href="Datos-de-la-empresa.html" class="modal-button2"> <span class="modal-button1-text">Cerrar</span></a>
         <a href="#modal2" class="modal-button1"> <span class="modal-button1-text">Guardar</span></a>

        </div>
      </div>
    </aside>
    <aside id="modal2" class="modal--container">
      <div class="content-modal">
        <div class="modal--title">
          <p>Mensaje</p>
        </div>
        <div class="container-text2">
        <p>¡Enhorabuena!,Cambios guardados con exito</p>
        </div>
        <div class="modal--container-buttons">
         <a href="Datos-de-la-empresa.html" class="modal-button3"> <span class="modal-button1-text">Cerrar</span></a>
        </div>
      </div>
    </aside>
</body>
</html>
