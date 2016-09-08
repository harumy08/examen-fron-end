<?php require("functions.php"); ?>
<?php require("simplepie.inc"); ?>
<?php
$pageUrl = "http://gdata.youtube.com/feeds/videos";
$pageSiz = 10;
$pageQue = getVariable($_GET["query"], "oasis");
$pageNum = getVariable($_GET["page"], 1);
$pageIni = $pageNum*$pageSiz-9;
$pageEnd = $pageUrl."?vq=".urlencode($pageQue)."&start-index=".$pageIni."&max-results=".$pageSiz."&alt=rss";

$vfeed = new SimplePie();
$vfeed->feed_url($pageEnd);
$vfeed->init();
$vfeed->handle_content_type();
$vmax = $vfeed->get_item_quantity();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SpryTube: Busca y descarga videos Youtube</title>
<meta name="description" content="Buscador de videos Youtube, visualiza y descarga videos de YouTube sin instalaciones adicionales." />
<meta name="keywords" content="youtube, videos, descarga, unijimpe, spry, download" />
<script type="text/javascript" src="includes/swfobject.js"></script>
<script type="text/javascript" src="includes/functions.js"></script>
<script type="text/javascript">
var vartag = "<?php echo $pageQue; ?>";
var varpag = <?php echo $pageNum; ?>;
</script>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="840" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="840" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="38%" class="title"><img src="images/logo.gif" width="116" height="58" hspace="10"></td>
        <td width="62%" align="right" class="title" style="padding-right:10px;">
		  <input name="criterio" type="text" id="criterio" value="<?php echo $pageQue; ?>" size="60">
          <input name="Submit" type="button" class="boton" value="Buscar" onClick="getVideo();" ></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="840" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="232" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="100%" height="16"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td align="center"><div class="borde" id="txtresult">Resultados de la  b&uacute;squeda de <span id="query"><?php echo $pageQue; ?></span></div></td>
              </tr>
              <tr>
                <td align="center"><div class="imgvideo">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <?php 
					for ($x = 0; $x < $vmax; $x++) { 
					$vitem = $vfeed->get_item($x);
					$video = getVideoid($vitem->get_id());
				  ?>
                    <tr>
                      <td height="10" colspan="2" valign="top"><img src="images/spacer.gif" width="1" height="1"></td>
                    </tr>
                    <tr spry:repeat="dsYouTube">
                      <td width="30%" valign="top"><img src="http://img.youtube.com/vi/<?php echo $video; ?>/2.jpg" width="134" height="97" hspace="16" border="0" style="cursor:pointer;"><br>
                          <br></td>
                      <td width="70%" class="lista">
					    <a href="javascript:setVideo('<?php echo $video; ?>')" class="name"><?php echo $vitem->get_title(); ?></a><br>
                        <span class="urlweb"><?php echo $vitem->get_id(); ?></span><br>
                        <?php echo feed2txt($vitem->get_description()); ?><br>
                        <a href="javascript:setVideo('<?php echo $video; ?>')" class="action">[ play video ]</a> - <a href="download.php?v=<?php echo $video; ?>" class="action">[ download video ]</a> <br>
                        <br></td>
                    </tr>
			      <?php } ?>
                  </table>
                </div></td>
              </tr>
              <tr>
                <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td align="center"><div class="borde" id="div"><a href="javascript:pagVideo(-1);">&laquo; anterior</a> P&aacute;gina <span id="pagnum"><?php echo $pageNum; ?></span> <a href="javascript:pagVideo(1);">siguiente &raquo;</a></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
            </table>
		    <div spry:region="dsYouTube" style="visibility:hidden;" id="readData"></div>		  </td>
        <td width="328" align="center" valign="top" class="lista">
        <div id="swfvideo" style="text-align:center;">
          <br> 
          <br> 
          <br> <br> <br> <br> Seleccione un video para reproducir.<span class="namedet" id="namedet">&nbsp;</span></div>
	    <div class="bordeder"> <strong class="subder">Descarga Directa de Videos</strong><br>
	      Ingresar identificador del Video<br>
	      <input name="codigo" id="codigo" type="text" size="30">
	    <br>
	    <input name="btgetvideo" id="btgetvideo" type="button" class="boton" value="Descargar Video" onClick="download();">
	    </div>
	    <p><strong>Como encuentro el identificador del video?</strong> <br>
	    Si estas visualizando un video, este video <br>
	      tendr&aacute; una 
	      direcci&oacute;n de la forma: <font color="#3354AA">http://www.youtube.com/watch?v=3C9CH3q9PLI</font><br>
	    donde el Identificador es: <strong><font color="#3354AA">3C9CH3q9PLI</font></strong></p>
	    <p>&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="right" class="copy">Powered by <a href="http://blog.unijimpe.net">http://blog.unijimpe.net</a></td>
  </tr>
</table>
</body>
</html>
