<?php
	include_once('header.php');
?>

<link href="css/estilo-inicio.css" rel="stylesheet" type="text/css" />

<title>Assis Imóveis</title>

</head>

<body>

<?php
	include_once('topo.php');
?>
  
    
    <div id="centro">
    
        <div id="c-centro">
        
            <div id="busca">
            
            <form name="busca" action="">
            	<p id="tit-busca">QUER COMPRAR <br> OU ALUGAR?</p>
            	
					<select name="tipo_imovel" class="form-busca">
						<option value="qualquer" >Tipo imóvel</option>
						<option value="casa" >Casa</option>
						<option value="apartamento" >Apartamento</option>
						<option value="lote" >Lote</option>
						<option value="fazenda" >Fazenda</option>
						<option value="chacara" >Chácara</option>	
					</select>
					
					
					<select name="faixa_preco" class="form-busca">
						<option value="qualquer" >Faixa de preço</option>
						<option value="ate" >Até R$ 100.000,00</option>
						<option value="1" >R$ 100.000,00 a R$ 200.000,00</option>
						<option value="2" >R$ 200.000,00 a R$ 300.000,00</option>
						<option value="3" >R$ 300.000,00 a R$ 400.000,00</option>
						<option value="4" >R$ 400.000,00 a R$ 500.000,00</option>	
						<option value="5" >R$ 500.000,00 a R$ 1.000.000.000,00</option>
						<option value="acima" >Acima de R$ 1.000.000.000,00 </option>		
					</select>
					
					<select name="estado" class="form-busca">
						<option value="qualquer">Estado</option>
					</select>
					
					<select name="cidade" class="form-busca">
						<option value="qualquer">Cidade</option>
					</select>
            
            		<p class="op-busca">EU QUERO: <br>
            			<label><input type="radio" name="eu_quero" value="comprar" />COMPRAR</label>
            			<label><input type="radio" name="eu_quero" value="alugar" />ALUGAR</label>
            		</p>
            		
            		<p class="op-busca">LOCALIZADO NA ÁREA: <br>
            			<label><input type="radio" name="area" value="urbana" />URBANA</label>
            			<label><input type="radio" name="area" value="rural" />RURAL</label>
            		</p>
            		
            		<button id="b-buscar"></button>
            
            </form>
            
            </div> <!-- Fim busca -->
        
            <div id="banner">
            
                <div class="slider-wrapper theme-default">

                    <div id="slider" class="nivoSlider">
                    
                        <img src="img/banner1.jpg" alt="" title="" />
                        <img src="img/banner2.jpg" alt="" title="" />
                        
                    </div>
                    
                </div>
            
            </div><!--FECHA BANNER-->
        
        </div><!--FECHA CENTRO-->
    
    </div><!--FECHA CENTRO-->

    <div id="corpo">
    
        <div id="coluna">
        
            <div id="destaques">
            
                <img class="ic-colunas" src="img/icone-logo.jpg" />
                <p class="tit-colunas">DESTAQUES</p>
                <a href="#">
                <p class="ver-todos">VER TODOS</p></a>
            
                <div id="cont-dest">
                
                    <a href="#">
                    <div id="dest1" class="box-dest">
                    
                        <div class="c-img">
                        <img src="img/img-casa.jpg" />
                        </div>
                        
                        <p class="nom-dest">Sobrado Comercial</p>
                        <p class="com-dest">07 cômodos</p>
                        <p class="set-dest">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div id="dest2" class="box-dest">
                    
                        <div class="c-img">
                        <img src="img/img-casa.jpg" />
                        </div>
                        
                        <p class="nom-dest">Sobrado Comercial</p>
                        <p class="com-dest">07 cômodos</p>
                        <p class="set-dest">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div id="dest3" class="box-dest">
                    
                        <div class="c-img">
                        <img src="img/img-casa.jpg" />
                        </div>
                        
                        <p class="nom-dest">Sobrado Comercial</p>
                        <p class="com-dest">07 cômodos</p>
                        <p class="set-dest">Setor Santa Maria</p>
                    
                    </div></a>
                
                </div><!--FECHA CONTAINER DESTAQUES-->
        
            </div><!--FECHA DESTAQUES-->
            
            <div id="revenda">
            
                <img class="ic-colunas" src="img/icone-logo.jpg" />
                <p class="tit-colunas">REVENDA</p>
                <a href="#">
                <p class="ver-todos">VER TODOS</p></a>
            
                <div id="cont-rev">
                
                    <a href="#">
                    <div class="box-rev">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div class="box-rev">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div class="box-rev">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div class="box-rev">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                
                </div><!--FECHA CONTAINER REVENDA-->
            
            </div><!--FECHA REVENDA-->
            
            <div id="aluguel">
            
                <img class="ic-colunas" src="img/icone-logo.jpg" />
                <p class="tit-colunas">ALUGUEL</p>
                <a href="#">
                <p class="ver-todos">VER TODOS</p></a>
                
                <div id="cont-alu">
                
                    <a href="#">
                    <div class="box-alu">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div class="box-alu">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div class="box-alu">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                    
                    <a href="#">
                    <div class="box-alu">
                    
                        <div class="c-img c-img-rev">
                        <img src="img/img-casa-min.jpg" />
                        </div>
                        
                        <p class="tit-imovel">Sobrado Comercial</p>
                        <p class="com-imovel">07 cômodos</p>
                        <p class="set-imovel">Setor Santa Maria</p>
                    
                    </div></a>
                
                </div><!--FECHA CONTAINER ALUGUEL-->
                
            </div><!--FECHA ALUGUEL-->
        
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
