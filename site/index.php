<?php

echo "RODANDO NO PHP";
exit();

if(isset($_GET['rotina_diaria']) && ($_GET['rotina_diaria'] == 1))
{
    include "rotina_diaria.php";
    exit();
}

include "includes/configuracao.php";
 
error_reporting(E_ALL); 
ini_set("display_errors", 1);

//echo 'oi';
//echo phpinfo();exit();
validaUsuarioIndex();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--?xml version="1.0" encoding="UTF-8"?-->
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Sonda IT - Sistema de Alocações</title>




<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

 <link rel="stylesheet" href="css/jquery-ui.css">



<script type="text/javascript" src="jquery/jquery-1.js"></script> 
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.js"></script>
<script type="text/javascript" src="jquery/tabs.js"></script>
<script type="text/javascript" src="jquery/superfish.js"></script>
<script type="text/javascript" src="jquery/funcoes.js?v=7"></script> 
<script src="jquery/jquery.maskedinput-1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery/jquery.collapse.js"></script>  
<script type="text/javascript" src="jquery/ajaxfileupload.js"></script>
<script src="chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery/jquery.simplePagination.js"></script>

     
	   
<script type="text/javascript">
// jQuery.fn.filterByText = function(textbox, selectSingleMatch) {
//     return this.each(function() {
//         var select = this;
//         var options = [];
//         $(select).find('option').each(function() {
//             options.push({value: $(this).val(), text: $(this).text()});
//         });
//         $(select).data('options', options);
//         $(textbox).bind('change keyup', function() {
//             var options = $(select).empty().data('options');
//             var search = $(this).val().trim();
//             var regex = new RegExp(search,"gi");
          
//             $.each(options, function(i) {
//                 var option = options[i];
//                 if(option.text.match(regex) !== null) {
//                     $(select).append(
//                        $('<option>').text(option.text).val(option.value)
//                     );
//                 }
//             });
//             if (selectSingleMatch === true && $(select).children().length === 1) {
//                 $(select).children().get(0).selected = true;
//             }
//         });            
//     });
// };

// $(function() {
//     $('#id_cliente_endereco').filterByText($('#filtro_cliente'), false);
//   $("select option").click(function(){
//     alert(1);
//   });
// });
   
</script>



<script type="text/javascript">
jQuery(function($){
   $("#date").mask("99/99/9999");
   $("#phone").mask("(999) 999-9999");
   $("#tin").mask("99-9999999");
   $("#ssn").mask("999-99-9999");
});
</script>
	
<script type="text/javascript">
<!--
$(document).ready(function() {
	$('#menuTopo > ul').superfish({
		hoverClass	 : 'sfHover',
		pathClass	 : 'css',
		delay		 : 0,
		animation	 : {height: 'show'},
		speed		 : 'normal',
		autoArrows   : false,
		dropShadows  : false, 
		disableHI	 : false, 
		onInit		 : function(){},
		onBeforeShow : function(){},
		onShow		 : function(){},
		onHide		 : function(){}
	});
	$('#menuTopo > ul').css('display', 'block');
	
	
});
//-->
</script> 
</head>
<body>
<div id="container">
  <div id="header">
    <?php 
    	include "index.topo.php"; 
    ?>
  </div>
  <div id="content">
  
    <?
     if ($_SESSION['_sonda_']['consultor']    == 'X' &&
         $_SESSION['_sonda_']['aprovador']    == ''  &&
		 $_SESSION['_sonda_']['solicitante']  == ''  &&
         $_SESSION['_sonda_']['aprovador_qa'] == '') {     
		?>
		<script type="text/javascript">
			    $('#content').load('agenda.consultor.php');
	    </script>
		<?php 
	 } else { ?>
		<script type="text/javascript">
			    $('#content').load('solicitacao.procurar.php');
	    </script> 	
   <?  	} ?>

  </div>


  
</div>

</body>
</html>