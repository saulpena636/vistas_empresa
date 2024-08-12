<?php
   //Conexión a la BD
   require "../BD.php";
   $conexion= new Conexion;

   /* $id=""; */
   $id='1';

   /* if($_GET){ */
   if($id){
       /* $id=$_GET['id']; */
       $sql="SELECT * FROM empresas WHERE id=".$id;
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
       $email_contacto=$resultado[0]['email_contacto'];

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
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos de la empresa</title>

  <link href="./axure_rp_page.css" type="text/css" rel="stylesheet">
  <link href="./styles.css" type="text/css" rel="stylesheet">
  <link href="./styles(1).css" type="text/css" rel="stylesheet">
</head>

<body>
    <div id="base" class="">
        
        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u1" class="ax_default box_2">
        <div id="u1_div" class=""></div>
        </div>

        <!-- Unnamed (Line) TERMINADO-->
        <div id="u2" class="ax_default line">
        <img id="u2_img" class="img " src="./u2.svg">
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u3" class="ax_default shape">
        <div id="u3_div" class=""></div>
        </div>

        <!-- Unnamed (Group)  TERMINADO -->
        <div id="u4" class="ax_default" data-left="512" data-top="82" data-width="512" data-height="32"
        style="cursor: pointer;">

        <!-- Unnamed (Rectangle) -->
        <div id="u5" class="ax_default shape" style="cursor: pointer;">
            <div id="u5_div" class="" tabindex="0"></div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u6" class="ax_default paragraph">
            <div id="u6_text" class="text ">
            <p><span>Ofertas Laborales</span></p>
            </div>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u7" class="ax_default paragraph">
        <div id="u7_text" class="text ">
            <p><span>Bolsa de Trabajo del SUNEO </span></p>
        </div>
        </div>

        <!-- Iconos TERMINADO -->
        <div class="contenedor-iconos">
        <!-- Unnamed (Shape) -->
        <div id="u10" class="icon">
            <img id="u10_img" class="img " src="./u10.svg">
        </div>
        
        <!-- Unnamed (Shape) -->
        <div id="u9" class="icon">
            <img id="u9_img" class="img " src="./u9.svg">
        </div>
        
        <!-- Unnamed (Image) -->
        <div id="u8" class="icon">
            <img id="u8_img" class="img " src="./u8.png">
        </div>
        </div>

        <!-- Unnamed (Group) TERMINADO-->
        <div id="u11" class="ax_default" data-left="0" data-top="82" data-width="512" data-height="32"
        style="cursor: pointer;">

        <!-- Unnamed (Group) -->
        <div id="u12" class="ax_default" data-left="0" data-top="82" data-width="512" data-height="32">

            <!-- Unnamed (Rectangle) -->
            <div id="u13" class="ax_default shape">
            <div id="u13_div" class="" tabindex="0"></div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u14" class="ax_default paragraph">
            <div id="u14_div" class=""></div>
            <div id="u14_text" class="text ">
                <p><span>Datos de la Empresa</span></p>
            </div>
            </div>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u15" class="ax_default box_2">
        <div id="u15_div" class=""></div>
        <div id="u15_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
        </div>

        <!-- Sobre SUNEO (Rectangle) TERMINADO -->
        <div id="u16" class="ax_default paragraph" data-label="Sobre SUNEO" style="cursor: pointer;">
        <div id="u16_text" class="text ">
            <p><span>Sobre SUNEO</span></p>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u17" class="ax_default paragraph">
        <div id="u17_text" class="text ">
            <p><span>Privacidad</span></p>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u18" class="ax_default paragraph">
        <div id="u18_text" class="text ">
            <p><span>Empresas</span></p>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u19" class="ax_default paragraph">
        <div id="u19_text" class="text ">
            <p><span>Ayuda</span></p>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u20" class="ax_default paragraph">
        <div id="u20_text" class="text ">
            <p><span>Coordinación de Vinculación de Alumnos y Egresados UTM</span></p>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u21" class="ax_default paragraph">
        <div id="u21_text" class="text ">
            <p><span>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</span></p>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u22" class="ax_default paragraph">
        <div id="u22_text" class="text ">
            <p><span>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</span></p>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO-->
        <div id="u23" class="ax_default paragraph">
        <div id="u23_text" class="text ">
            <p><span>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P 69000</span></p>
        </div>
        </div>

        <!-- Unnamed (Image) TERMINADO -->
        <div id="u24" class="ax_default image">
        <img id="u24_img" class="img " src="./u24.png">
        </div>

        <!-- Unnamed (Image) TERMINADO-->
        <div id="u25" class="ax_default image">
        <img id="u25_img" class="img " src="./u24.png">
        </div>

        <!-- Unnamed (Group) TERMINADO -->
        <div id="u26" class="ax_default" data-left="941" data-top="10" data-width="60" data-height="57">

        <!-- Unnamed (Ellipse) -->
        <div id="u27" class="ax_default shape">
            <img id="u27_img" class="img " src="./u27.svg">
        </div>

        <!-- Unnamed (Image) -->
        <div id="u28" class="ax_default image">
            <img id="u28_img" class="img " src="./u28.png">
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u29" class="ax_default shape">
        <div id="u29_div" class=""></div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u30" class="ax_default paragraph">
        <div id="u30_text" class="text ">
            <p>
            <span>Mensajes de la coordinación</span>
            </p>
        </div>
        </div>

        <!-- Unnamed (Table) TERMINADO -->
        <div id="u31" class="ax_default">

        <!-- Unnamed (Table Cell) TERMINADO -->
        <div id="u32" class="ax_default table_cell">
            <img id="u32_img" class="img " src="./u32.png">
            <div id="u32_text" class="text ">
            <p><span>Estado de la oferta, “Ingeníero …</span></p>
            </div>
        </div>

        <!-- Unnamed (Table Cell) TERMINADO -->
        <div id="u33" class="ax_default table_cell">
            <img id="u33_img" class="img " src="./u33.png">
            <div id="u33_text" class="text ">
            <p><span>Actualización de datos </span></p>
            </div>
        </div>
        </div>

        <!-- Unnamed (Dynamic Panel) TERMINADO PENDIENTE -->
        <div id="u34" class="ax_default">
        <div id="u34_state0" class="panel_state" data-label="State1">
            <div id="u34_state0_content" class="panel_state_content">

            <!-- Unnamed (Group) TERMINADO REVISION u38-->
            <div id="u35" class="ax_default" data-left="0" data-top="478" data-width="680" data-height="207">

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u36" class="ax_default shape">
                <div id="u36_div" class=""></div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u37" class="ax_default paragraph">
                <div id="u37_text" class="text ">
                    <p><span>Descripción de la empresa </span></p>
                </div>
                </div>

                <!-- Unnamed (Text Field) TERMINADO REVISION-->
                <div id="u38" class="ax_default text_field">
                <div id="u38_div" class=""></div>
                    <textarea name="" id="u38_input" class="u38_input" disabled><?php echo $descripcion_empresa; ?></textarea>
                </div>

            </div>

            <!-- Unnamed (Group) -->
            <div id="u40" class="ax_default" data-left="0" data-top="0" data-width="680" data-height="468">

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u41" class="ax_default shape">
                <div id="u41_div" class=""></div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u42" class="ax_default paragraph">
                <div id="u42_text" class="text ">
                    <p><span>Nombre de la empresa: </span></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u43" class="ax_default paragraph">
                <div id="u43_text" class="text ">
                    <p><span>Ubicación:</span></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u44" class="ax_default paragraph">
                <div id="u44_text" class="text ">
                    <p><span>Teléfono(s):</span></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u45" class="ax_default paragraph">
                <div id="u45_text" class="text ">
                    <p><span>Correo electrónico:</span></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u46" class="ax_default paragraph">
                <div id="u46_text" class="text ">
                    <p><span>Contacto directo: </span></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u47" class="ax_default paragraph">
                <div id="u47_text" class="text ">
                    <p><span>Área:</span></p>
                </div>
                </div>

                <!-- Unnamed (Line) TERMINADO -->
                <div id="u48" class="ax_default line">
                <img id="u48_img" class="img " src="./u48.svg">
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u49" class="ax_default text_field">
                <div id="u49_div" class=""></div>
                <input id="u49_input" type="text" value="<?php echo $nombre_empresa; ?>" class="u49_input" disabled>
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u50" class="ax_default text_field">
                <div id="u50_div" class=""></div>
                <input id="u50_input" type="text" value="<?php echo $ubicacion_empresa; ?>" class="u50_input" disabled>
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u51" class="ax_default text_field">
                <div id="u51_div" class=""></div>
                <input id="u51_input" type="text" value="<?php echo $contacto_directo; ?>" class="u51_input" disabled>
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u52" class="ax_default text_field">
                <div id="u52_div" class=""></div>
                <input id="u52_input" type="text" value="<?php echo $area_contacto; ?>" class="u52_input" disabled>
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u53" class="ax_default text_field">
                <div id="u53_div" class=""></div>
                <input id="u53_input" type="text" value="<?php echo $telefono_contacto; ?>" class="u53_input" disabled>
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u54" class="ax_default text_field">
                <div id="u54_div" class=""></div>
                <input id="u54_input" type="text" value="<?php echo $email_contacto; ?>" class="u54_input" disabled>
                </div>

                <!-- Unnamed (Line) TERMINADO -->
                <div id="u55" class="ax_default line">
                <img id="u55_img" class="img " src="./u48.svg">
                <div id="u55_text" class="text " style="display:none; visibility: hidden">
                    <p></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u56" class="ax_default paragraph">
                <div id="u56_text" class="text ">
                    <p><span>Correo electrónico:</span></p>
                </div>
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u57" class="ax_default text_field">
                <div id="u57_div" class=""></div>
                <input id="u57_input" type="text" value="<?php echo $email_empresa; ?>" class="u57_input" disabled>
                </div>

                <!-- Unnamed (Text Field) TERMINADO -->
                <div id="u58" class="ax_default text_field">
                <div id="u58_div" class=""></div>
                <input id="u58_input" type="text" value="<?php echo $telefono_empresa; ?>" class="u58_input" disabled>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u59" class="ax_default paragraph">
                <div id="u59_text" class="text ">
                    <p><span>Teléfono:</span></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u60" class="ax_default paragraph">
                <div id="u60_text" class="text ">
                    <p><span>Datos del contacto</span></p>
                </div>
                </div>

                <!-- Unnamed (Rectangle) TERMINADO -->
                <div id="u61" class="ax_default paragraph">
                <div id="u61_text" class="text ">
                    <p><span>Datos de la empresa</span></p>
                </div>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u62" class="ax_default shape">
                <div id="u62_div" class=""></div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u63" class="ax_default paragraph">
                <div id="u63_text" class="text ">
                <p><span>Datos adicionales</span></p>
                </div>
            </div>

            <!-- Unnamed (Line) TERMINADO -->
            <div id="u64" class="ax_default line">
                <img id="u64_img" class="img " src="./u48.svg">
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u65" class="ax_default paragraph">
                <div id="u65_text" class="text ">
                <p><span>Dirección de la empresa</span></p>
                </div>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u66" class="ax_default text_field">
                <div id="u66_div" class=""></div>
                <input id="u66_input" type="text" value="<?php echo $ciudad; ?>" class="u66_input" placeholder="Ciudad" disabled>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u67" class="ax_default text_field">
                <div id="u67_div" class=""></div>
                <input id="u67_input" type="text" value="<?php echo $estado; ?>" class="u67_input" placeholder="Estado" disabled>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u68" class="ax_default text_field">
                <div id="u68_div" class=""></div>
                <input id="u68_input" type="text" value="<?php echo $codigo_postal; ?>" class="u68_input" placeholder="C.P." disabled>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u69" class="ax_default text_field">
                <div id="u69_div" class=""></div>
                <input id="u69_input" type="text" value="<?php echo $calle; ?>" class="u69_input" placeholder="Calle" disabled>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u70" class="ax_default text_field">
                <div id="u70_div" class=""></div>
                <input id="u70_input" type="text" value="<?php echo $numero; ?>" class="u70_input" placeholder="Número/Piso" disabled>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u71" class="ax_default text_field">
                <div id="u71_div" class=""></div>
                <input id="u71_input" type="text" value="<?php echo $colonia; ?>" class="u71_input" placeholder="Colonia" disabled>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u72" class="ax_default text_field">
                <div id="u72_div" class=""></div>
                <input id="u72_input" type="text" value="<?php echo $rfc; ?>" class="u72_input" placeholder="RFC" disabled>
            </div>

            <!-- Unnamed (Text Field) TERMINADO -->
            <div id="u73" class="ax_default text_field">
                <div id="u73_div" class=""></div>
                <input id="u73_input" type="text" value="<?php echo $pagina_web; ?>" class="u73_input" placeholder="Página web" disabled>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u74" class="ax_default paragraph">
                <div id="u74_text" class="text ">
                <p><span>Página web:</span></p>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u75" class="ax_default paragraph">
                <div id="u75_text" class="text ">
                <p><span>RFC:</span></p>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u76" class="ax_default paragraph">
                <div id="u76_text" class="text ">
                <p><span>Estado: </span></p>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u77" class="ax_default paragraph">
                <div id="u77_text" class="text ">
                <p><span>Ciudad: </span></p>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u78" class="ax_default paragraph">
                <div id="u78_text" class="text ">
                <p><span>Colonia: </span></p>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u79" class="ax_default paragraph">
                <div id="u79_text" class="text ">
                <p><span>Calle: </span></p>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u80" class="ax_default paragraph">
                <div id="u80_text" class="text ">
                <p><span>Número/Piso: </span></p>
                </div>
            </div>

            <!-- Unnamed (Rectangle) TERMINADO -->
            <div id="u81" class="ax_default paragraph">
                <div id="u81_text" class="text ">
                <p><span>Código postal: </span></p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u83" class="ax_default link_button" style="cursor: pointer;">
        <div id="u83_text" class="text ">
            <p><span>Ver más mensajes</span></p>
        </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u84" class="ax_default image">
        <img id="u84_img" class="img " src="./u84.svg">
        </div>

        <!-- Unnamed (Rectangle) TERMINADO -->
        <div id="u85" class="ax_default button" style="cursor: pointer;">
        <img id="u85_img" class="img " src="./u85.svg" tabindex="0">
        <div id="u85_text" class="text ">
            <form action="../Vistas_php/Editar-datos-empresa.php" method="get"> 
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="Editar datos de la empresa">
            </form>
        </div>
        </div>
    </div>
    <h1><?php echo $id ?></h1>
</body>

</html>