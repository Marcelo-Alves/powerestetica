 <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>POWER ESTÉTICA LOCAÇÕES</title>
        <meta name="title" content="Power Estética " />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="description" content="Power Estética Locação disponibiliza dos melhores equipamentos de medicina estética para sua clinica para emagrecer usando equipamento Lyra, Hooke, Polary. Para tratamento estético, venha para Power Estética e imagreça rápido e com saúde" />
		<meta content="Power Estética Locação disponibiliza dos melhores equipamentos de medicina estética para sua clinica para emagrecer usando equipamento Lyra, Hooke, Polary. Para tratamento estético" />
		<meta property="og:description" content="De olho nas novidades do mercado e sempre atualizado, a Power Estética Locação disponibiliza dos melhores equipamentos de medicina estética para sua clinica, centro estético e salão. Pontualidade com logística própria, a empresa garante que o aparelho estará instalado no horário agendado. Satisfação para os clientes." />
		<meta name="twitter:description" content="De olho nas novidades do mercado e sempre atualizado, a Power Estética Locação disponibiliza dos melhores equipamentos de medicina estética para sua clinica, centro estético e salão. Pontualidade com logística própria, a empresa garante que o aparelho estará instalado no horário agendado. Satisfação para os clientes." />
        <meta name="keywords" content="emagrecer urgente, emagraça com saúde, cosmética, beleza,imagem pessoal, Estética, bonita, linda, magra, telangiectasias, corpo,emagrecer, emagreça, Lyra, Hooke, Polary, rejuvenescimento, tratamento estético, CRIOLIPÓLISE, tratamento estético  " />              
        <link rel="stylesheet" href="./css/responsiveslides.css" />
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <link rel="shortcut icon" href="./img/logo_favico.jpg" type="image/x-icon" />
        <script src="./js/jquery.min.js"></script>
		<script async src="./js/qtaq.js?id=UA-129351427-1"></script>
        <script src="./js/responsiveslides.min.js"></script>
         <script>
            $(function () {
              $("#slider").responsiveSlides({
                speed: 500
              });
             });
            
            function Enviar(){
                var nome = $("#txtnome").val();
                var empresa = $("#txtempresa").val();
                var telefone = $("#txttelefone").val();
                var email = $("#txtemail").val();
                var mensagem = $("#txtmensagem").val();
                if(nome != "" || email != "" || telefone != "" || mensagem !=""){
                
                
                    $.post("./php/envia_email.php",{nome:nome,telefone:telefone,empresa:empresa,email:email,mensagem:mensagem},
                        function(data){
                            if(data){
                                $("#form_contato").html("<div>"+ data +"</div>");
                            }
                            else{
                                $("#form_contato").html("<div style='text-align: center;'>Obrigado por entrar em contato conosco.<br> Sua Mensagem foi enviada<br>com sucesso<br>Logo entraremos em contato.</div>");
                            }
                        });
                    }
                    else{
                        alert("Por favor Preencha os campos com * ");
                    }
            }
          
            function rolar_para(elemento) {
                $('html, body').animate({
                  scrollTop: $(elemento).offset().top
                }, 2000);
            }
			 
			<!-- Global site tag (gtag.js) - Google Analytics -->
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-129351427-1');
		</script>
        <style> 
            @media screen and (max-width: 768px) {
                #tudo,#tudo_topo{
                    width: 95%;
                    margin: 0 auto; 
                    background-color: #FFF;                
                }
                #logo{
                    visibility: hidden;
                    
                }
                #logo img{
                    visibility: hidden;
                }
                #tudo_topo{
                    width: 50px;
                    height: 0;
                }
                
            }
            
        </style>
        <script language="javascript">
             if (screen.width <= 800){ 
                   window.location.href="index_1.php";
               }
        </script>
    </head>
    <body>
        <div id="topo_contato">
            <img src="./img/whatsapp-32.png" width="18px" /> 
            Whatsapp (11) 94996-1107 | 
            <img src="./img/email-novo.jpg" width="18px" /> 
            contato@powerestetica.com.br 
        </div>
        <div id="tudo_topo">
        
            <div id="geral_topo">
                
                <div id="top">
                    <div id="logo">
                        <img src="img/logo.png" title="Power Estética" alt="Power Estética"/>
                    </div>
                    <div id="titulo">
                        <a href="" title="Power Estética HOME" alt="Power Estética">Home</a> |
                        <a href="#" title="Power Estética PRODUTOS" alt="Power Estética" onclick="rolar_para('#tit_equipamento')">Produto</a> |
                        <a href="#"  title="Power Estética CONTATO" alt="Power Estética" onclick="rolar_para('#contato')">Contato</a>   
                    </div>
                </div>
            </div>
        </div>
        <ul class="rslides" id="slider">
            <li><img src="./img/polarys.jpg" title="Power Estética POLARYS" alt="Power Estetica POLARYS" /></li>
            <li><img src="./img/hooke.jpg" title="Power Estética HOOKE" alt="Power Estética HOOKE" /></li>
            <li><img src="./img/lyra.jpg"  title="Power Estética LYRA" alt="Power Estética LYRA" /></li>
        </ul>
        <div id="tudo">
            <div id="geral" class="geral_tudo">                    
                <div id="conteudo">
                    <div id="texto_princ">
                        De olho nas novidades do mercado e sempre atualizado, a Power Estética Locação disponibiliza dos melhores equipamentos de medicina estética para sua clinica, centro estético e salão. <br><br>
                        Pontualidade com logística própria, a empresa garante que o aparelho estará instalado no horário agendado.<br>
                        Satisfação para os clientes.<br><br>
                        Os clientes ficarão satisfeitos ao receberem tratamentos diferenciados, com alta tecnologia e ótimos resultados. Clientes satisfeitos trazem mais clientes e fazem seu negócio prosperar.<br>
                    </div>
                    <div id="equipamento">
                        <div id="tit_equipamento" class="tit_prod">Equipamentos</div>                    
                        <div style="background-color: #DDD;margin-bottom: 8px;" >
                            <table border="0px">
                                <tr>
                                    <td>
                                        <div class="produto">
                                            <div class="tit_prod">Polarys</div>
                                            <p>
                                                Conheça aqui a mais nova criolipólise de contraste!<br>
                                                O POLARYS é uma avançada tecnologia voltada para redução da gordura localizada e modelagem 
                                                não invasiva do contorno corporal por meio do sistema inovador de CRIOLIPÓLISE. <br>
                                                Criolipólise de Contraste elimina até 43% da gordura local, já na primeira sessão.<br>
                                                O equipamento conta com 4 modalidades de tratamento: CRIOLIPÓLISE CONVENCIONAL, 
                                                de CONTRASTE, de REPERFUSÃO e de PREPARO.
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="imagem">
                                            <img src="img/polarysm.png"  title="Power Estética Polary" ALT="Power Estetica POLARYS" />.
                                        </div>
                                    </td>

                                </tr>
                            </table>
                        </div>
                        <div style="background-color: #CDD;margin-bottom: 8px;">
                            <table border="0">
                                <tr>
                                    <td>
                                        <div class="imagem">
                                            <img src="img/hookem.png" title="Power Estética HOOKE" ALT="Power Estetica HOOKE" />.
                                        </div
                                    </td>
                                    <td>
                                        <div class="produto" id="hooke">
											<div class="tit_prod">Hooke</div>
											<br>
											Radiofrequência
											<p>A radiofrequência é o tratamento mais indicado para o tratamento de flacidez da pele e 
												estimulação de colágeno. A locação acompanha ainda a ponteira criogênica para maior conforto 
												do tratamento.
											</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <div style="background-color: #CEF;">
                            <table border="0">
                                <tr>
                                    <td>
                                        <div class="produto">
                                            <div class="tit_prod" id="lyra">Lyra</div> <br>
                                            <label class="texto_produto">
                                                Luz Intensa Pulsada<br>
                                                <p>
                                                    A luz intensa pulsada utiliza tecnologia semelhante ao laser e é indicado para 
                                                    tratamentos como 
                                                    rejuvenescimento, remoção de manchas e a tão famosa depilação definitiva.<br>
                                                </p>
                                                <b>Indicações:</b><br>
												<img src="./img/marcador.jpg" width="18px" ALT="Power Estetica" /> Remoção de pelos<br>
												<img src="./img/marcador.jpg" width="18px" ALT="Power Estetica" /> Redução permanente de pelos<br>
												<img src="./img/marcador.jpg" width="18px" ALT="Power Estetica" /> Tratamento da pele acneica<br>
												<img src="./img/marcador.jpg" width="18px" ALT="Power Estetica" /> Tratamento de lesões (telangiectasias)<br>
												<img src="./img/marcador.jpg" width="18px" ALT="Power Estetica" /> Tratamento de rosácea<br>
												<img src="./img/marcador.jpg" width="18px" ALT="Power Estetica" /> Tratamento de lesões pigmentares benignas<br>
												<img src="./img/marcador.jpg" width="18px" ALT="Power Estetica" /> Foto envelhecimento cutâneo (rejuvenescimento)<br>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="imagem">
                                            <img src="img/lyram.png" title="Power Estética Lyra" alt="Power Estética LYRA"  />.
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <div id="contato">
                    <div id="rede_social">
                        <label class="cont_texto">
                            ENTRE EM CONTATO 
                        </label>
                        <BR><BR><BR>
                        <label>
                            <img src="./img/tel.png" title="Power Estética What'sapp" alt="Power Estética" style="width: 40px;" /> &nbsp; &nbsp;
                            (11) 94996-1207
                        </label>
                        <BR><BR>
                        <label>
                            <img src="./img/email.jpg" title="Power Estética EMAIL" alt="Power Estética" style="width: 40px;" /> &nbsp; &nbsp;
                            contato@powerestetica.com.br                               
                        </label>
                        <BR><BR>
                        <label>
                            <a href="https://www.facebook.com/powerestetica" target="_blank"  title="Power Estética facebook.com/powerestetica" alt="Power Estética">
                                <img src="./img/facebook.jpg" style="width: 40px;" title="Power Estética facebook.com/powerestetica" alt="Power Estética" /> &nbsp; &nbsp;
                                https://www.facebook.com/powerestetica
                            </a>
                        </label>
                        
                    </div>
                    
                    <div id="form_contato">
                        <label class="cont_texto">
                            DEIXE SUA SOLICITAÇÃO
                        </label>
                        <BR><BR><BR>
                        <input type="text" required id="txtnome" name="txtnome" placeholder="* Nome"/>
                        
                        <input type="text" id="txtempresa" name="txtempresa" placeholder="Empresa"/>
                        <br>
                        <br>
                        <input type="text" required id="txtemail" name="txtemail" placeholder="* email"/>

                        <input type="text" required id="txttelefone" name="txttelefone"  placeholder="* Telefone"/>
                        <br>
                        <br>
                        <textarea id="txtmensagem" required name="txtmensagem" cols="40" rows="10" style="margin-bottom: 8px;" placeholder="* Deixe sua Solicitação"></textarea>
                        <BR>
                        <input id="bnt" name="bnt" type="button" value="Enviar" onclick="Enviar()" />
                    </div>
                </div>
                <div id="rodape">
                        <a href="#" title="Power Estética HOME" alt="Power Estética" onclick="rolar_para('#tudo_topo')">Home</a> |
                        <a href="#" title="Power Estética EQUIPAMENTO" alt="Power Estética" onclick="rolar_para('#tit_equipamento')">Produto</a> |
                        <a href="#" title="Power Estética CONTATO" alt="Power Estética"  onclick="rolar_para('#contato')">Contato</a>  
                </div> 
            </div>        
        </div>  
    </body>
</html>
