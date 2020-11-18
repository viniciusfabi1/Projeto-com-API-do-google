
<!DOCTYPE HTML>
<html>
	<head>
		<title>Preenchimento de Dados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
        <style>
            .lblb{
                display: inline;
                border: 0 10px 0 10px;
                padding: 10px 30px;
                 margin-left: 1px;
                font-size: 18px;
            }
                
                .lbl-date{
                    padding: 3px 15px;
                    font-size: 18px;
                    display: inline;
                    margin: 2px 10px;
                    background: #e8e8e8;
                    
                }
            .lblb1{
                 display: inline;
                border: 0 10px 0 10px;
                padding: 10px 100px;
                margin-left: 20px;
                font-size: 18px;
            }
            .lbl-date1{
                padding: 3px 15px;
                    font-size: 18px;
                    display: inline;
                    margin: 2px 10px;
                    background: #e8e8e8;
                text-align: center;
            }
                
            }
        </style>
         
		<!-- Header -->
			<header id="header">
				<div class="inner">
                    <img class="logo" src="images/logotipo1.png">
					<nav id="nav">
                         <a href="indexx.php">Visualizar Mapa</a>
						<a href="index.php">Início</a>
						<a href="generic.php">Visualizar Relatórios</a>
						<a href="demo.php">Contato</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						 <h2>Dados da Infração</h2>
						<p></p>
					</header>
 
									<form method="POST" action="salva_furto.php">
									<div class="row uniform">
                                          <div class="12u$">
											<div >     
                                               <input type="email" value="Roubo de Veículo" name="denuncia" id="trafico" readonly/>
											</div>
										</div>
                    
										<div class="6u 12u$(xsmall)">
											<input type="text" name="nome" required maxlength="" id="name" value="" placeholder="Nome *" required/>
										</div>
                                        <div class="6u 12u$(xsmall)">
                                            <div>
                                             <label class="lblb">Data da Ocorrência </label><input class="lbl-date" name="dat" type="date" min="2018-01-30" max="2138-01-30">
                                            </div>
                                        </div>
										<div class="12u$">
											<input type="email" name="email" id="email" value="" placeholder="Email *"required />
										</div>
										<!-- Break -->
										<div class="6u 12u$(xsmall)">
											<div>     
                                          <select name="bairro" required>
                                              <option value="0">Bairro *</option>
                                              <option value="VILA BRITO">VILA BRITO</option>
                                              <option value="VILA NUNES">VILA NUNES</option>
                                              <option value="NOVA LORENA">NOVA LORENA</option>
                                              <option value="JARDIM NOVA LORENA">JARDIM NOVA LORENA</option>
                                              <option value="PARQUE RESIDENCIAL NOVA LORENA">PARQUE RESIDENCIAL NOVA LORENA</option>
                                              <option value="CABELINHA">CABELINHA</option>
                                              <option value="CHÁCARAS LINDA VISTA">CHÁCARAS LINDA VISTA</option>
                                              <option value="VILA CRISTINA">VILA CRISTINA</option>
                                              <option value="VILLAGE DAS PALMEIRAS">VILLAGE DAS PALMEIRAS</option>
                                              <option value="VILA DA FIGUEIRA">VILA DA FIGUEIRA</option>
                                              <option value="VILA APARECIDA">VILA APARECIDA</option>
                                              <option value="CENTRO">CENTRO</option>
                                              <option value="MATADOURO VELHO">MATADOURO VELHO</option>
                                              <option value="SÃO ROQUE">SÃO ROQUE</option>
                                              <option value="BAIRRO DO ATERRADO">BAIRRO DO ATERRADO</option>
                                              <option value="VILA RICA">VILA RICA</option>
                                              <option value="VILA DIVA">VILA DIVA</option>
                                              <option value="VILA NEIDE">VILA NEIDE</option>
                                              <option value="VILA CIDA">VILA CIDA</option>
                                              <option value="SANTO ANTÔNIO">SANTO ANTÔNIO</option>
                                              <option value="VILA BUCK">VILA BUCK</option>
                                              <option value="VILA SÃO BENEDITO">VILA SÃO BENEDITO</option>
                                              <option value="GRANJA SÃO CRISTOVÃO">GRANJA SÃO CRISTOVÃO</option>
                                              <option value="CECAP">CECAP</option>
                                              <option value="VILA IZABEL">VILA IZABEL</option>
                                              <option value="VILA CELINA">VILA CELINA</option>
                                              <option value="VILA HEPACARÉ">VILA HEPACARÉ</option>
                                              <option value="JARDIM PRIMAVERA">JARDIM PRIMAVERA</option>
                                              <option value="VILA DOS COMERCIÁRIOS II">VILA DOS COMERCIÁRIOS II</option>
                                              <option value="PORTAL DAS PALMEIRAS">PORTAL DAS PALMEIRAS</option>
                                              <option value="VILA DOS COMERCIÁRIOS I">VILA DOS COMERCIÁRIOS I</option>
                                              <option value="CIDADE INDUSTRIAL">CIDADE INDUSTRIAL</option>
                                              <option value="PARQUE MONDESIR">PARQUE MONDESIR</option>
                                              <option value="JARDIM AUGUSTA">JARDIM AUGUSTA</option>
                                              <option value="PARQUE TABATINGA">PARQUE TABATINGA</option>
                                              <option value="OLARIA">OLARIA</option>
                                              <option value="CONJUNTO HABITACIOANAL OTTO UDE">CONJUNTO HABITACIOANAL OTTO UDE</option>
                                              <option value="VILA DOM BOSCO">VILA DOM BOSCO</option>
                                              <option value="JARDIM MARGARIDA">JARDIM MARGARIDA</option>
                                              <option value="VILA CELESTE">VILA CELESTE</option>
                                              <option value="JARDIM IMPERIAL">JARDIM IMPERIAL</option>
                                              <option value="VILA ZÉLIA">VILA ZÉLIA</option>
                                              <option value="BAIRRO DA CRUZ">BAIRRO DA CRUZ</option>
                                              <option value="VILA SANTA MARIA">VILA SANTA MARIA</option>
                                              <option value="VILA MARIA LOURDES">VILA MARIA LOURDES</option>
                                              <option value="JARDIM NOVO HORIZONTE">JARDIM NOVO HORIZONTE</option>
                                              <option value="VILA DO IPE">VILA DO IPE</option>
                                              <option value="PARQUE RODOVIAS">PARQUE RODOVIAS</option>
                                              <option value="VILA PASSOS">VILA PASSOS</option>
                                              <option value="VILA SANTA EDWIGES">VILA SANTA EDWIGES</option>
                                              <option value="VILA GENY">VILA GENY</option>
                                              <option value="MADRE MAZZARELLO">MADRE MAZZARELLO</option>
                                              <option value="VILA SIMÃO">VILA SIMÃO</option>
                                              <option value="VILA FABIANO">VILA FABIANO</option>
                                              <option value="SANTA RITA">SANTA RITA</option>
                                              <option value="VILA ESPERANÇA">VILA ESPERANÇA</option>
                                              <option value="SANTA LUCRÉCIA">SANTA LUCRÉCIA</option>
                                              <option value="PEDROSO">PEDROSO</option>
                                              <option value="CERRO ALTO">CERRO ALTO</option>
                                              <option value="PINHAL NOVO">PINHAL NOVO</option>
                                              <option value="SERTÃO VELHO">SERTÃO VELHO</option>
                                              <option value="PORTO DO MEIRA">PORTO DO MEIRA</option>
                                              <option value="TABUÃO">TABUÃO</option>
                                              <option value="COCHO">COCHO</option>
                                              <option value="POÇO FUNDO">POÇO FUNDO</option>
                                              <option value="SÃO BENEDITO">SÃO BENEDITO</option>
                                              <option value="VILLAGE LORENA">VILLAGE LORENA</option>
                                          </select>
                                         </div>
										</div>
                                         <div class="6u 12u$(xsmall)">
                                            <div>
                                             <label class="lblb1">CEP</label><input class="lbl-date1" name="cep" type="number"  min="12600005" max="12614899">
                                            </div>
                                        </div>
                                        <div class="12u$">
											<div>     
                                                <input type="text" name="rua" id="rua" value="" placeholder="Rua *" required/>
											</div>
										</div>
                        
										<!-- Break -->
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-low" name="priority" value="baixa"checked>
											<label for="priority-low">Prioridade Baixa</label>
										</div>
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="priority" value="media"> 
											<label for="priority-normal">Prioridade Média</label>
										</div>
										<div class="4u$ 12u$(small)">
											<input type="radio" id="priority-high" name="priority" value= "alta">
											<label for="priority-high">Prioridade Alta</label>
										</div>
										<!-- Break -->
										<div class="12u$">
											<textarea name="mensagem" id="message" placeholder="Descrição da Infração" rows="6"></textarea>
										</div>
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Enviar" /></li>
												<li><input type="reset" value="Limpar" class="alt" /></li>
											</ul>
										</div>
									</div>
								</form>

		
	

							<!-- Maps -->
                   
								
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design by: Villas<br>Images by: Unsplash.
						</div>
						<ul class="icons1">
							<li><a href="" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
						</ul>
					</div>
				</div>
			</footer>
                     <hr>
                </div>
        </section>

	
	</body>
</html>