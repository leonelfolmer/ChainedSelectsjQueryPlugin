<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Chained Selects jQuery Plugin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<style type="text/css">
	
	/* Custom css */
	body { padding-top: 60px; }
		
	.btn { visibility:hidden }
	
	code { font-family: Monaco, Verdana, Sans-serif; font-size: 12px; 
		   background-color: #f9f9f9; border: 1px solid #D0D0D0; 
		   color: #002166; display: block; margin: 14px 0 14px 0; 
		   padding: 12px 10px 12px 10px }

	#loading { position: fixed; z-index:20000!important; left: 0; top: 0;
			   bottom: 0; right: 0; background: #fff; opacity: 0.8;
			   filter: alpha(opacity=80); display:none; 
			   background: white url(assets/img/ajax_loader.gif) center center no-repeat }
	</style>
    
	</head>

	<body>
    
    <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Chained Selects jQuery Plugin</a>
              <div class="nav-collapse collapse">
            <ul class="nav">
                  <li class="active"><a href="http://www.leonelfolmer.com/sources/ChainedSelectsjQueryPlugin/">Home</a></li>
                  <li><a href="http://www.leonelfolmer.com/site/contato/">Contact</a></li>
                </ul>
          </div>
              <!--/.nav-collapse --> 
            </div>
      </div>
    </div>
    
	
    <div class="container">
      <h4>Chained Selects jQuery Plugin: Codeigniter, MySQL and Twitter Bootstrap Framework</h4>
      <p>This code is used to select a state, city and neighborhood from some country, in this case brazil, and also populated from MySQL database.</p>
      <p>&nbsp;</p>
      
      
      <h4>How works</h4>
      <p>Select a state, city and neighborhood: Paraná, Curitiba and Cristo Rei.</p>

  		<div id="loading">Aguarde ...</div>
      
          <form name="" method="" action="">
            
                <select id="estado" name="estado">
                      <option value="1" selected>Acre</option>
                      <option value="2">Alagoas</option>
                      <option value="3">Amap&aacute;</option>
                      <option value="4">Amazonas</option>
                      <option value="5">Bahia</option>
                      <option value="6">Cear&aacute;</option>
                      <option value="7">Distrito Federal</option>
                      <option value="8">Esp&iacute;rito Santo</option>
                      <option value="9">Goi&aacute;s</option>
                      <option value="10">Maranh&atilde;o</option>
                      <option value="11">Mato Grosso</option>
                      <option value="12">Mato Grosso do Sul</option>
                      <option value="13">Minas Gerais</option>
                      <option value="14">Par&aacute;</option>
                      <option value="15">Para&iacute;ba</option>
                      <option value="16">Paran&aacute;</option>
                      <option value="17">Pernambuco</option>
                      <option value="18">Piau&iacute;</option>
                      <option value="19">Rio de Janeiro</option>
                      <option value="20">Rio Grande do Norte</option>
                      <option value="21">Rio Grande do Sul</option>
                      <option value="22">Rond&ocirc;nia</option>
                      <option value="23">Roraima</option>
                      <option value="24">Santa Catarina</option>
                      <option value="25">S&atilde;o Paulo</option>
                      <option value="26">Sergipe</option>
                      <option value="27">Tocantins</option>
            </select>
            
            <select name="cidade" id="cidade" style="display:none"></select>
            <select name="bairro" id="bairro" style="display:none"></select>
            
          </form>
          
          <p>&nbsp;</p>
          <h4>Download</h4>
          <p>Check <a href="http://github.com/leonelfolmer/ChainedSelectsjQueryPlugin">Chained Selects jQuery Plugin</a> in Github.</p>
          <p>&nbsp;</p>
          
    </div><!-- /container --> 

	<script src="assets/js/jquery.js"></script> 
	
	<script>
	$(function() {
		
		$('#estado').cs('#cidade','welcome/cs', { 
			before:function (target) { 
				$("#loading").css("display","block");
				$(target).css("display","none");
			},
			after:function (target) { 
				$("#loading").css("display","none");
				$(target).css("display","inline");
			}
		});
	
	
			$('#cidade').cs('#bairro','welcome/cs', { 
				before:function (target) { 
					$("#loading").css("display","block");
					$(target).css("display","none");
				},
		
					after:function (target) { 
						$("#loading").css("display","none");
						$(target).css("display","inline");	
					}
			});
	});
    </script> 
    
	<script src="assets/js/cs.js"></script> 
</body>
</html>