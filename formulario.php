<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ecobike</title>
        <script src="js/validate.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    
    <body>
    	<div id="formbg">
        	<form id="form" name="form" enctype="multipart/form-data" action="ingreso.php" method="post" style="width:100%">
            	<div class="input"	id="inputname">
                	<input class="inputt"id="name" name="name"  type="text" value="" style="position:absolute;" maxlength="50"/>
                </div>
                <div class="input"	id="inputlastname">
                	<input class="inputt"id="lastname" name="lastname"  type="text" value="" style="position:absolute;" maxlength="50"/>
                </div>
                <div class="input"	id="inputmail">
                	<input class="inputt"id="mail" name="mail"  type="text" value="" style="position:absolute;" maxlength="100"/>
                </div>
                <div class="input"	id="inputphone">
                	<input class="inputt"id="phone" name="phone"  type="text" value="" style="position:absolute;" maxlength="20" onKeyPress="return numbersonly(event)"/>
                </div>
                <div class="input"	id="inputci">
                	<input class="inputt"id="ci" name="ci"  type="text" value="" style="position:absolute;" maxlength="10"/>
                    
                </div>
                <div class="btn"	id="btnsend">
                <input type="hidden" name="datehost" id="datehost"  value="<?php echo date("Y-m-d H:i:s");?>" />
                
                	<input type="button"  class="enviar" value="" onClick="validate();"/>
                </div>
            </form>
        </div>
    </body>
</html>
