<?php
	include_once('header.php');
?>

<link href="css/estilo-imovel.css" rel="stylesheet" type="text/css" />
<title>Assis Imóveis - Imóveis</title>
</head>

<body>

<?php
	include_once('topo.php');
?>
  
    
    <div id="centro">
    
    	<div id="c-centro">
        
        <p id="tit-busca">Quer comprar ou alugar?</p>
        
            <div id="campo-busca">
            
            	<select class="form-busca" name="tipo" id="tipo">
				<option value="">Tipo Imóvel</option>
				</select>
                
                <select class="form-busca" name="preco" id="preco">
				<option value="">Faixa de Preço</option>
				</select>
                
                <select class="form-busca" name="cidade" id="cidade">
				<option value="">Cidade</option>
				</select>
                
                <select class="form-busca" name="setor" id="setor">
				<option value="">Setor</option>
				</select>
                
                <p class="crt-busca">Eu quero:</p>
                <label><input class="checkbox" type="radio" name="eu-quero" value="comprar"><p class="crt-busca">COMPRAR</p></label>
                
                <label><input class="checkbox" type="radio" name="eu-quero" value="alugar"><p class="crt-busca">ALUGAR</p></label>
                
                <p class="crt-busca" id="lcz">Localização:</p>
                <label><input class="checkbox" type="radio" name="localizacao" value="comprar"><p class="crt-busca">URBANA</p></label>
                
                <label><input class="checkbox" type="radio" name="localizacao" value="alugar"><p class="crt-busca">RURAL</p></label>
                
                <label>
            	<input class="buscar" type="submit" value="" onclick="validation()" />
            	</label> 
                
            </div>
        
        </div><!--FECHA CENTRO-->
    
    </div><!--FECHA CENTRO-->
    
    <div id="corpo">
    
    	<div id="coluna">
    
            <div id="detalhes-imovel">
            
            	<div id="tit-resultado">
                	<p>Resultados da Busca | Detalhes do Imóvel - Venda</p>
                </div>
                
                <div id="coluna-esq">
                
                    <div id="ficha-tecnica">
                    
                        <p><b>Ficha Técnica</b>	<br />
        
                        Cód. Imóvel: <b>3492</b><br />
                        
                        Tipo: <b>Casa</b><br />
                        
                        Cidade: <b>Goiânia</b><br />
                        
                        Bairro: <b>Setor Sul</b><br />
                        
                        Nº de Quartos: <b>4</b><br />
                        
                        Valor R$: <b>550.000,00</b><br />
                        
                        Detalhes:<br />
                        
                        Lote Com Duas Casas Com Apelo Res. E Comerc.1º Casa:4 Quartos Sendo 2 Suítes,Banh. Social,3 Slas,Coz./Copa,Área De Serviço,Dce,Gargns Para 3 Carros,Portão Eletrônico,Interfone E Completa Em Armários.2º Casa:3 Quartos Sendo 1 Suíte,Ampla Sala,Banh. Social.</p>
                    
                    </div><!--FECHA FICHA TECNICA-->
                    
                    <img id="fale-conosco" src="img/fale-conosco.jpg" />
                
                </div><!--FECHA COLUNA ESQUERDA-->
                
                <div id="fotos">
                
                    <div class="img">
                    </div>
                    
                    <div class="img">
                    </div>
                    
                    <div class="img">
                    </div>
                    
                    <div class="img">
                    </div>
                    
                    <div class="img">
                    </div>
                    
                    <div class="img">
                    </div>
                
                </div>
                
                <div id="interessado">
                
                	<form method="post" enctype="multpart/formdata" name="form1" action="asp/form-asp.asp" id="form" onsubmit="return validation(this);">
                    
                    <p>Nome:</p>              	
                	<label><input class="form" name="nome" type="text" /></label>	
                    <p>E-mail:</p>
                    <label><input class="form" name="nome" type="text" /></label>
                    <p>Telefone:</p>
                    <label><input class="form" name="nome" type="text" /></label>
                    <p>Cidade:</p>
                    <label><input class="form" id="cidade" name="nome" type="text" /></label>
                    <p>Estado:</p>
                    <select class="form" name="estado" id="estado">
					<option value=""></option>
					</select>
                    
                    <p>Mensagem:</p>
                    <label><textarea id="f-mensagem" name="mensagem"></textarea></label>
                    
                    <label>
            		<input id="b-enviar" type="submit" value="" onclick="validation()" />
            		</label> 
                     
            		</form>
                
                </div>
            
            </div><!--FECHA DETALHES IMOVEIS-->
        
        </div><!--FECHA COLUNA-->

<?php 
	include_once('sidebar.php');
?>
    
    </div><!--FECHA CORPO-->
    
   <?php
   		include_once('footer.php');
   ?>

</body>
</html>
