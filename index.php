
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilophp.css" type="text/css">
    <link rel="stylesheet" href="text_index.css" type="text/css">
    <title>Trilheiros extremos</title>
</head>
<body>
<div id="topo">
   <header>
       
        <div id="logotipo">
         <img src="img/logotipo.png">
         <h3>Trilheiros extremos</h3>
        </div>
        <nav>
          <ul>
            <li><a href="index.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> HOME </a></li>
            <li><a href="quem_somos.php"> QUEM SOMOS </a></li>
            <li><a href="atividades.php"> ATIVIDADES </a></li>
            <li><a href="contato.php"> CONTATOS </a></li>
          </ul>
        </nav>
        <div id="log">

       
        <div id="bloguinho" > <form  method="post" action="sairf.php?action=sair"><input type="submit"  value="sair"></Form></div>
        <div id="nloguinho"> <?php 
                  session_start();
	                echo $_SESSION['usuario'];
              ?>
         </div>
        </div>
    
   </header> 
</div>
<div id="banner">
   	
	<div id="slider">
			<figure>
                <img src="img/morro_caete.jpg">
                <img src="img/pedra_gavea.jpg">
                <img src= "img/pedra-branca-vista-do.jpg">
                <img src= "img/do-topo-da-pedra-do-quilombo-em-jacarepagua-rio-de-janeiro_63139-635.jpg">
                <img src="img/Pedra_Bonita.jpg">
			</figure>
	</div>

	<script>
		var myIndex=0
		carousel();
		
		function carousel(){
		var i;
		var x= document.getElementsByClassName("mySlides");
		for(i=0;i < x.length; i++){
		  x[i].style.display ="none";
		}
		myIndex++;
		if(myIndex > x.length) {myIndex=1}
		x[myIndex-1].style.display = "block";
		setTimeout(carousel, 4000);//Change image every 0,10 seconds	 
		
		}
	</script>
</div>
<div id="todo">
 <div class="coluna_um">
   <div class="text"><img  src="img/trilha_papagaio.jpg"><h3>Pico do Bico do Papagaio</h3><p>A trilha Trilha do Bico do Papagaio fica na cidade de Rio de Janeiro, no estado de Rio de Janeiro e possui uma dificuldade baixa e exposição ao risco baixa. Possui uma altitude máxima de 987 metros e leva cerca de horas para ser completada ao longo de 3.35 quilômetros. A sinalização interna é completa e a orientação é fácil.</p></div>

  

   <div class="text"><img src="img/Roteiro-da-trilha-da-Cachoeira-dos-Primatas-Horto-RJ-Vamos-Trilhar-1-768x432.jpg"><p>No Horto Florestal do Rio de Janeiro existem diversas cachoeiras. Uma das principais é a Cachoeira dos Primatas. Em época de chuva, suas águas do Rio Algodão possuem um ótimo volume de água, fazendo ela ser uma das mais belas cachoeiras da cidade.</p></div>
   <div class="text"><img src="img/pico_tijuca.jpg"><p>A trilha Pico da Tijuca é o passeio e aventura ideal para quem quer visitar o interior do Parque Nacional da Tijuca e conhecer a Mata Atlântica da Floresta da Tijuca.No passeio da trilha Pico da Tijuca os participantes terão acesso a história da Floresta da Tijuca, que é protegida desde meados do século XIX, preservando tesouros históricos da época do Brasil Colonial e uma série de riquezas e belezas naturais. O Pico da Tijuca possui 1.021m de altitude e está localizado no coração do Parque Nacional da Tijuca e é a maior montanha da Floresta da Tijuca. O roteiro do Pico da Tijuca é considerado um dos mais ricos e belos passeios de trilhas no Rio de Janeiro. O passeio começa no portão de entrada do parque e passa por várias seções de caminhadas pela floresta até chegarmos ao cume do Pico Tijuca Mirim e do Pico da Tijuca</p></div>
 </div>

  <div class="coluna_dois">
   <h2>Trilhas para iniciantes: confira dicas e os itens que não podem faltar</h2>
   <p>Uso de certos acessórios é importante para o conforto e segurança do trilheiro. Planejamento, alimentação adequada e descanso são necessárias para a prática da atividade.Fazer trilha é uma ótima opção para se manter em forma e arejar a cabeça. O Brasil tem lugares incríveis para explorar a pé com trilhas de diferentes níveis de dificuldades. Mas para quem está pensando em aderir a essa prática, é fundamental saber quais são os acessórios necessários e como utilizá-los corretamente, além de ter conhecimento sobre o ambiente que está visitando. Confira algumas dicas que vão facilitar a sua trilha:  </p>

    <div id="mais">
        <h3>Planejamento</h3>
        <p>As trilhas geralmente são bem sinalizadas e possuem rotas demarcadas, mas podem ser desafiadoras. O ideal é começar pelas de nível fácil. Fazer trilhas longas, principalmente para iniciantes, exige planejamento antecipado. Em todos os casos, é importante conferir a previsão do tempo, os pontos de apoio para dormir ou comer e a qualidade das roupas e acessórios que vai usar.</p>
        <p>É fundamental, também, começar a preparação do corpo com meses de antecedência, para que ele se adapte às caminhadas. Antes de dar início as atividades, faça um check-up geral para entender as plenas condições do seu corpo para o esforço físico e conhecer bem suas limitações.</p>

        <h3>Itens para trilha</h3>
        <p>Cada trilha possui um trecho e uma dificuldade diferente. O ideal é que a mochila pese, no máximo, 10% do seu corpo. Então, selecione apenas itens de extrema necessidade durante as trilhas:</p>
 
        <ul>
        <li>Mochila</li>
        <li>Cantil</li>
        <li>Vestuário</li>
        <li>Lanterna</li>
        <li>Calçado apropriado para tilha</li>
        <li>Estojo de primeiros socorros</li>
        <li>Boné ou chapéu</li>
        <li>Protetor solar</li>
        <li>Saco de lixo;</li>
        <li>Papel higiênico</li>
        <li>Repelente</li>
        </ul>
  


        <h3>Vestuário ideal</h3>
        <p>As roupas para as trilhas devem ser leves e proteger o corpo do sol e de insetos. O ideal são as calças para trekking e camisas de mangas longas com proteção contra os raios solares. Antes da atividade, os calçados precisam ser amaciados. Nada de usar aquele tênis novíssimo!</p>
        <p>As trilhas em meio a matas ou terrenos altos demais possuem temperaturas frias, principalmente à noite. Então, leve consigo um casaco corta-vento e uma roupa segunda pele. Prefira os mais leves, resistentes e impermeáveis.</p>
        <p>O mesmo vale para ambientes muito quentes. Proteja-se ao máximo e, se puder, procure fazer a trilha durante a primavera ou o outono, que são estações com climas mais amenos.</p>


       <h3>Alimentação e descanso</h3>
       <p>Durante a trilha, é ideal que o praticante esteja bem alimentado e hidratado. Saiba quais paradas ao longo do percurso oferecem alimentação e se programe para dar uma pausa.</p>
       <p>Se a trilha se estender por dias, você precisará mesmo de um nutricionista. Um profissional da área vai indicar ótimos suplementos e vitaminas para suprir seu gasto energético. Leve sempre barrinhas de cereais e muita água.</p>
       <p> Uma boa noite de sono é indispensável para a conclusão da trilha nestes casos. Separe pelo menos 6 horas de descanso para que recomponha sua saúde e estado físico.</p>

    </div>
    <button onclick="leiaMais()" id="btnLeiaMais">Leia mais</button>
    <script type="text/javascript" src="scripts.js"></script>
    <br><br>

     
 
   <div class="coluna_tres">
      <div class="b">
        <h3> Dicas para o bem-estar</h3> 
        <ul>
          <li>Alimentação adequada.</li>
          <li>Dormir o suficiente.</li>
          <li>Praticar atividade fisica frequentemente.</li>
          <li>IMC adequado.</li>
        </ul>
      </div>
      <img src="img/bemestar.jpg">
   </div>
    
  </div>
 
 
  

  <div id="imc">
      <h3>IMC</h3>
      <p>O IMC (Índice de Massa Corporal) é uma ferramenta usada para detectar casos de obesidade ou desnutrição em pessoas de diferentes idades.
      De acordo com o endocrinologista Mario Kedhi Carra, membro da Associação Brasileira para o Estudo da Obesidade e da Síndrome Metabólica (ABESO), essa é uma medida universal de classificação de obesidade, validada pela Organização Mundial da Saúde.É possível encontrar o resultado do índice fazendo uma conta que envolve a relação do peso de uma pessoa em quilos com a sua altura ao quadrado.</p>
      <div id="maisImc">
        <p>Para a avaliação de um paciente individualmente, no entanto, ele pode ser falho por não levar em conta a composição desse peso corporal, que pode ser composto por gordura, músculos, água e estruturas ósseas.O IMC é calculado dividindo o peso pela altura elevada ao quadrado. Ou seja, de forma mais simples, você multiplica sua altura por ela mesma e depois divide seu peso pelo resultado da última conta.</p>
        <p>Infelizmente, a medida de IMC nem sempre representa a realidade. Por exemplo, o músculo é muito mais pesado que a gordura. Logo, um halterofilista terá um IMC muito alto, mas isso não se reflete em obesidade, já que a maior parte de sua massa corporal é formada por musculatura.É importante levar em conta que a massa corporal é formada por água, gordura, músculos e ossos, e tudo isso precisa ser bem avaliado para medir a saúde de alguém corretamente.Por isso, é de extrema importância consultar um especialista para que ele possa fazer a análise do IMC junto com outros índices e medidas usados para entender a composição corporal.Digite seus dados abaixo para calcular teu IMC.</p>
      </div>
      <button onclick="leiaMaisImc()" id="btnLeiaMaisImc">Leia mais</button>
      <script type="text/javascript" src="maisimc.js"></script>

    <br><br>
    <div id="fcalculadora">
      <div id="calculadora">
          <h4>Calculadora de IMC</h4>
          Digite tua altura(cm):&nbsp;<input type="number" id="altura"><br><br>
          Digite teu peso(kg):&nbsp; <input type="number" id="peso"><br><br>
          <button onclick="calcular()" id="btnimc">Calcular</button><br><br>
          <script  src="index.js"></script>

          <textarea id="textarea"></textarea><br>
      </div>
    </div>
  </div>

  


   

  
</div>

<div class="videos">
  <fieldset><legend>videos</legend>
  <iframe  src="https://www.youtube.com/embed/gJztRJQaMG8" title="Monte Zion (videoclipe) - Ilha Grande.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <iframe src="https://www.youtube.com/embed/4vSGGEpJc6c" title="A HISTÓRIA do PARQUE NACIONAL DA TIJUCA, no Rio de Janeiro | Reflorestamento e Curiosidades" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <iframe  src="https://www.youtube.com/embed/ssmXr82Q384" title="PARQUE ESTADUAL DA PEDRA BRANCA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <iframe src="https://www.youtube.com/embed/DqVP36wj_WU" title="TRILHA SERRA DO VULCÃO l  Nova Iguaçu, RJ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </fieldset>
</div>

<div id="r1">

</div>
<div id="r2">
  <p>Contatos</p>
  <br><br><br><br>
  <h3>Trilheiros extremos<br>Tel (21) 985747278</h3>
  <br>
  <ul>
    <li><img src="img/facebook.png"> </li>
    <li><img src="img/instagram.png"></li>  
    <li><img src="img/115757-removebg-preview.png"></li>
    <li><img src="img/downloadsap.png"></li>
  </ul>
</div>
<div id="r3">
  <br>
  <font><p>Desenvolvido por Marcio Jose; Todos os direitos reservados </p> </font>
</div>
</body>
</html>