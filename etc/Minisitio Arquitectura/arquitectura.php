<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >

<title>Arquitectura - Facultad de Arquitectura - Universidad de Belgrano</title>

<link href="../../css/carreras.css" rel="stylesheet" type="text/css" />
<link href="../../css/home.css" rel="stylesheet" type="text/css" />
<link href="../../css/menu_acordeon.css" rel="stylesheet" type="text/css" />
<link href="../../css/pilares.css" rel="stylesheet" type="text/css" />

<!-- llamada a jquery -->
<script language="JavaScript" src="ver.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
	//Set default open/close settings
	$('.acc_container1').hide(); //Hide/close all containers
	$('.acc_container2').hide(); //Hide/close all containers
	$('.acc_container3').hide(); //Hide/close all containers
	$('.acc_trigger1:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container
	$('.acc_trigger2:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container
	$('.acc_trigger3:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

	//On Click1
	$('.acc_trigger1').click(function(){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			$('.acc_trigger1').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
			$(this).toggleClass('active').next().slideDown(); //Add "active" state to clicked trigger and slide down the immediate next container
		}
		return false; //Prevent the browser jump to the link anchor
	});
	//On Click2
	$('.acc_trigger2').click(function(){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			$('.acc_trigger2').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
			$(this).toggleClass('active').next().slideDown(); //Add "active" state to clicked trigger and slide down the immediate next container
		}
		return false; //Prevent the browser jump to the link anchor
	});
	//On Click3
	$('.acc_trigger3').click(function(){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			$('.acc_trigger3').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
			$(this).toggleClass('active').next().slideDown(); //Add "active" state to clicked trigger and slide down the immediate next container
		}
		return false; //Prevent the browser jump to the link anchor
	});

});
</script>


<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>


</head>



<body onload="MM_preloadImages('../../imagenes/zocalo_over.jpg','../../imagenes/formulario_home_facebook_over.jpg','../../imagenes/carreras/curso_ingreso_oscuro.jpg','../../imagenes/carreras/plan_estudios_oscuro.jpg')">

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="110" title="">
  <param name="movie" value="../../encabezados/encabezado5.swf" />
  <param name="FlashVars" value="carrera=arquitectura" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="6.0.65.0" />
  <param name="allowFullScreen" value="true" />
  <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="../../encabezados/encabezado5.swf" width="1000" height="110" flashvars="carrera=arquitectura">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="6.0.65.0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
    <div>
      <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="1000" height="110" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>

<?php include("../../encabezado_carreras.php")?>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1000" align="center" valign="top" bgcolor="#FFFFFF">
	<table width="1000" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top">
		<table width="780" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top">

		<!-- Inicio Videos -->
		<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="375">
          <param name="movie" value="arquitectura.swf" />
          <!--<param name="FlashVars" value="carrera=arquitectura" />-->
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
          <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
          <param name="expressinstall" value="file:///C|/Documents and Settings/ubusuario/Escritorio/prueba_grado/Scripts/expressInstall.swf" />
          <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="arquitectura.swf" width="1000" height="375">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="6.0.65.0" />
            <param name="expressinstall" value="file:///C|/Documents and Settings/ubusuario/Escritorio/prueba_grado/Scripts/expressInstall.swf" />
            <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
            <div>
              <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
		<!-- Fin Videos -->
		  
		  </td>
          </tr>
          </table></td>
        
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">
	
	
	<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>

		<td class="fondo_pilares">
		<!--**** -->				
				<h2 class="acc_trigger1"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('trabajos_alumnos','','../../imagenes/img/pilares/arquitectura_ub.jpg',1)"><img src="../../imagenes/img/pilares/arquitectura_ub.jpg" name="trabajos_alumnos" width="301" height="33" border="0" id="trabajos_alumnos" /></a></h2>
				<div class="acc_container1">
					<div class="block">
					<!--Content Goes Here-->
						<div class="trabajos"><A HREF="http://www.ub.edu.ar/inscripcion/carreras_de_grado/arquitectura_en_la_ub.pdf"><img src="http://www.ub.edu.ar/inscripcion/imagenes/banner_porque_arquitectura.jpg" height="401" border="0"/></A><br></div>
					</div>
				</div>
				<h2 class="acc_trigger1"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ver','','../../imagenes/img/pilares/sub_ver_trabajos2.jpg',1)"><img src="../../imagenes/img/pilares/sub_ver_trabajos.jpg" name="ver" width="301" height="33" border="0" id="ver" /></a></h2>
				<div class="acc_container1">
					<div class="block">

				<!--Content Goes Here--><br>
				  <table width="283" border="0" align="center" cellpadding="4" cellspacing="0">
                  <tr>
                    <td align="left" valign="top" class="trabajos_listado"><A HREF="javascript:abrirVer('imagenes/fotos/1.jpg')"><img src="imagenes/fotos/miniaturas/1.jpg" border="0" alt="" width="53" height="53" /></a></td>
                    <td width="230" class="trabajos_listado">Lareu, Emiliano<br>Speranza, María Laura</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="trabajos_listado"><a href="javascript:abrirVer('imagenes/fotos/2.jpg')"><img src="imagenes/fotos/miniaturas/2.jpg" border="0" alt="" width="53" height="53" /></a></td>
                    <td width="230" class="trabajos_listado">Sabbatini, Martín<br />Furlan, Gianfranco<br />Tellería, Mariana</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="trabajos_listado"><a href="javascript:abrirVer('imagenes/fotos/3.jpg')"><img src="imagenes/fotos/miniaturas/3.jpg" border="0" alt="" width="53" height="53" /></a></td>
                    <td width="230" class="trabajos_listado">Cenoz, Victoria<br />Crivelli, María Marta<br />Mangiantini, Nicolás<br /></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="trabajos_listado"><a href="javascript:abrirVer('imagenes/fotos/4.jpg')"><img src="imagenes/fotos/miniaturas/4.jpg" border="0" alt="" width="53" height="53" /></a></td>
                    <td width="230" class="trabajos_listado">Ramos Viale, Constanza<br />Richmond, María Emilia<br />Schiacchitano, Francesca<br /></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="trabajos_listado"><a href="javascript:abrirVer('imagenes/fotos/5.jpg')"><img src="imagenes/fotos/miniaturas/5.jpg" border="0" alt="" width="53" height="53" /></a></td>
                    <td width="230" class="trabajos_listado">Oettinger, Nicolás<br />Tedesco, Cristian<br />Gazzetta, Thomas<br /></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="trabajos_listado"><a href="javascript:abrirVer('imagenes/fotos/6.jpg')"><img src="imagenes/fotos/miniaturas/6.jpg" border="0" alt="" width="53" height="53" /></a></td>
                    <td width="230" class="trabajos_listado">Bernardini, Mauro<br />Bulach, Michelle</td>
                  </tr>
                  </table>

					</div>
				</div>
		<!--**** -->		
		</td>	

		<td class="fondo_pilares">
		<!--**** -->				
				<h2 class="acc_trigger2"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen28','','../../imagenes/img/pilares/convenios_empresas2.jpg',1)"><img src="../../imagenes/img/pilares/convenios_empresas.jpg" name="Imagen28" width="301" height="33" border="0" id="Imagen28" /></a></h2>
				<div class="acc_container2">
					<div class="block">
					<!--Content Goes Here-->
						<div class="edu_inter"><a href="http://www.ub.edu.ar/inscripcion/convenios_con_empresas.pdf"><img src="../../imagenes/marcas_empresas.jpg" /></a></div>
					</div>
				</div>
				<h2 class="acc_trigger2"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen25','','../../imagenes/img/pilares/sub_pasantias2.jpg',1)"><img src="../../imagenes/img/pilares/sub_pasantias.jpg" name="Imagen25" width="301" height="33" border="0" id="Imagen25" /></a></h2>
				<div class="acc_container2">
					<div class="block">
					<!--Content Goes Here--><br>
						<table width="283" border="0" cellspacing="0" cellpadding="0">
		                  <tr>
				            <td><img src="../../imagenes/fondo_pasantias.jpg" /></td>
						  </tr>
		                  <tr>
				            <td align="left"><span class="bold12TXTDD">La Universidad de Belgrano posee una Dirección dedicada a la Capacitación específica para la  búsqueda de empleo y una red de acuerdos Marcos de Pasantías a través de los cuales sus alumnos tienen la oportunidad de desarrollar prácticas profesionales en más de 200 empresas.<br><br><br></span></td>
		                  </tr>
				        </table>
					</div>
				</div>
				<h2 class="acc_trigger2"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen24','','../../imagenes/img/pilares/sub_graduados2.jpg',1)"><img src="../../imagenes/img/pilares/sub_graduados.jpg" name="Imagen24" width="301" height="33" border="0" id="Imagen24" /></a></h2>
				<div class="acc_container2">
					<div class="block">
					<!--Content Goes Here-->
						<img src="../../imagenes/filete_blanco.jpg">
						<table width="283" border="0" cellpadding="4" cellspacing="0" bgcolor="#BFD1F0">
			              <tr>
						    <td align="left" valign="top" class="trabajos_listado_blanco"><a href="http://www.essesnaistat.com.ar/web/index.html" target="_blank"><img src="imagenes/esses.jpg" border="0" alt="" width="38" height="52" /></a></td>
			                <td width="230" class="trabajos_listado_blanco"><span class="bold12"><a href="http://www.essesnaistat.com.ar/web/index.html" class="link_block" target="_blank">Arq. Gustavo Alberto Esses</a></span><br />Director de Essesnaist.com.ar</td>
						</tr>
		                  <tr>
				            <td align="left" valign="top" class="trabajos_listado_blanco"><a href="http://ar.linkedin.com/in/pablogomezmacgregor" target="_blank"><img src="imagenes/macgregor.jpg" border="0" alt="" width="38" height="52" /></a></td>
			                <td class="trabajos_listado_blanco"><span class="bold12"><a href="http://ar.linkedin.com/in/pablogomezmacgregor" class="link_block" target="_blank">Arq. Pablo Gómez Macgregor</a></span><br />Arquitecto</td>
						 </tr>
				          <tr>
						    <td align="left" valign="top" class="trabajos_listado_blanco"><a href="http://ar.linkedin.com/pub/pablo-carniglia/13/320/268" target="_blank"><img src="imagenes/carniglia.jpg" border="0" alt="" width="38" height="52" /></a></td>
			                <td width="230" class="trabajos_listado_blanco"><span class="bold12"><a href="http://ar.linkedin.com/pub/pablo-carniglia/13/320/268" class="link_block" target="_blank">Arq. Pablo Carniglia</a></span><br />Director Estudio C73</td>
		                  </tr>
				          <tr>
			                <td align="left" valign="top" class="trabajos_listado_blanco"><a href="http://ar.linkedin.com/pub/martin-lopo/a/859/a72" target="_blank"><img src="imagenes/lopo.jpg" border="0" alt="" width="38" height="52" /></a></td>
			                <td width="230" class="trabajos_listado_blanco"><span class="bold12"><a href="http://ar.linkedin.com/pub/martin-lopo/a/859/a72" class="link_block" target="_blank">Arq. Martin Lopo</a></span><br />Arquitecto Asociado</td>
		                  </tr>
				          <tr>
						    <td height="117" colspan="2" align="left" valign="middle">
							<table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
								<tr>
									<td>&nbsp;</td><td>&nbsp;</td>
								</tr>
								<tr>
									<td>Fuente de contacto:</td>
									<td><img src="../../imagenes/linkedin_logo.png" align="right" /></td>
								</tr>
							</table>
						</tr>
					</table>
					</div>
				</div>
		<!--**** -->
		</td>


		<td class="fondo_pilares">
		<!--**** -->				
				<h2 class="acc_trigger3"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen29','','../../imagenes/img/pilares/educacion_internacional2.jpg',1)"><img src="../../imagenes/img/pilares/educacion_internacional.jpg" name="Imagen29" width="301" height="33" border="0" id="Imagen29" /></a></h2>
				<div class="acc_container3">
					<div class="block">
					<!--Content Goes Here-->
						<div class="edu_inter"><img src="imagenes/educacion_inter_arq.jpg" border="0" usemap="#Map2" /></div>

						<map name="Map2" id="Map2"><area shape="rect" coords="177,139,273,251" href="../doble_diploma.php" /><area shape="rect" coords="8,247,125,363" href="http://www.architecture.com/" target="_blank" />
						<area shape="circle" coords="221,310,49" href="../intercambio.php" />
						</map>

					</div>
				</div>
				
				<h2 class="acc_trigger3"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen26','','../../imagenes/img/pilares/sub_doble_espana_francia_italia2.jpg',1)"><img src="../../imagenes/img/pilares/sub_doble_espana_francia_italia.jpg" name="Imagen26" width="301" height="33" border="0" id="Imagen26" /></a></h2>
				<div class="acc_container3">
					<div class="block">
					<!--Content Goes Here-->
						<img src="../../imagenes/dd_paisaje.jpg" alt="" align="top" />
							
						<table width="283" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td align="left"><span class="bold12">¿QUÉ ES EL DOBLE DIPLOMA?</span></td>
							</tr>
							<tr>
								<td><span class="bold12TXTDD">¿Alguna vez pensaste que tu título podía ser reconocido en otro país? La Universidad de Belgrano a través de sus convenios con otras universidades brinda a sus alumnos una formación académica internacional.<a href="../doble_diploma.php" class="link_block">+ Info</a></span></td>
							</tr>
							
				              <tr>
								<td align="left"><p><span class="bold12">ITALIA</span><br />
				                    <span class="bold12">&gt; </span><a href="http://www.polimi.it/home/" target="_blank" class="link_block_sin_negrita">Politécnico di Milano, Facoltá di Architettura Civile</a><br />
				                    <span class="bold12">&gt; </span><a href="http://www.polito.it/index.php" target="_blank" class="link_block_sin_negrita">Politécnico di Torino II Facoltà di Architettura</a><br />
			                     <br />
								     
									 
									 <span class="bold12">FRANCIA</span><br />
				                     <span class="bold12">&gt; </span><a href="http://www.esa-paris.fr/" target="_blank" class="link_block_sin_negrita">École Spéciale d`Architecture de Paris</a></p>
									
									
									 <span class="bold12">ESPAÑA</span><br />
				                     <span class="bold12">&gt; </span><a href="http://www.uic.es/es" target="_blank" class="link_block_sin_negrita">Universidad Internacional de Catalunya</a></p>
									 
									
							    </td>
				              </tr>
							  <tr><td>&nbsp;</td></tr>
		                </table>
					</div>
				</div>
				
				<h2 class="acc_trigger3"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen27','','../../imagenes/img/pilares/sub_intercambio2.jpg',1)"><img src="../../imagenes/img/pilares/sub_intercambio.jpg" name="Imagen27" width="301" height="33" border="0" id="Imagen27" /></a></h2>
				<div class="acc_container3">
					<div class="block">
					<!--Content Goes Here-->
						<img src="../../imagenes/fondo_intercambio.jpg" />
						<table width="283" border="0" cellspacing="0" cellpadding="0">
		                <tr>
				            <td align="left"><span class="bold12TXTDD">Estudiar en el extranjero es cultural y profesio-nalmente enriquecedor. A través del Programa de Movilidad Internacional podrás asistir por un semestre o un año académico a una universidad extranjera a fin de cursar materias de tu carrera, que luego serán homologadas por la UB.&nbsp;<A HREF="../intercambio.php" target="_top" class="link_block">+ Info</A></span></td>
						</tr>
		                </table>
					</div>
				</div>
		<!--**** -->
		</td>
      
      
	  </tr>
    </table>
	  
	  
	  </tr>
    </table></td>
  </tr>
</table>


<!-- Pie -->

<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<table border="0" align="center" cellpadding="0" cellspacing="0" class="footer">
  <tr>
    <td align="left" bgcolor="#FFFFFF"><a href="../../mapas_principal.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('zocalo','','../../imagenes/zocalo_over.jpg',1)"><img src="../../imagenes/zocalo.jpg" name="zocalo" width="998" height="50" border="0" id="zocalo" /></a></td>
  </tr>
</table>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-132846-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
