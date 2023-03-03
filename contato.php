<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilophp.css" type="text/css">
    <link rel="stylesheet" href="text_contato.css" type="text/css">
    <title>Trilheiros extremos</title>
	
<script language="JavaScript">
	function validaForm(){
          var tamanho_nome = document.forms["meuForm"].name.value.length;
		  if(tamanho_nome < 6 || tamanho_nome > 40)
		  {
			alert("o campo 'Nome' deve ter entre 5 e 40 caracteres." );
			return false;
		  }


		  var mEmail = document.forms["meuForm"].email.value;
		  if(mEmail.length < 5 || mEmail.length > 30 || mEmail.indexOf('@') == -1 || mEmail.indexOf('.') == -1)
		  {
			alert("O campo 'E-mail' deve ter preenchido corretamente.");
			return false;
		  }


		  document.forms["meuForm"].submit();
	}
</script>
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
            <li><a href="index.php"> HOME </a></li>
            <li><a href="quem_somos.php"> QUEM SOMOS </a></li>
            <li><a href="atividades.php"> ATIVIDADES </a></li>
            <li><a href="contato.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> CONTATOS </a></li>
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
<h1>Fale Conosco</h1>
  <article>
   <div class="contato">
     <div class="fonte">Formulário</div>
	   <br/> 
	   <form class="form" method="post" action="enviar_emailh.php" name="meuForm"> 
	 
	   <input class="field" name='nome' placeholder="Nome"  required><br>
	 
	   <input class="field" name='email' placeholder="Email" required><br>
	
	   <textarea class="field1" name='mensagem' placeholder="Digite aqui sua mensagem" required>	 </textarea><br>
	 
	   <input class="field2" type="submit" onclick="validaForm()" name="submit" value="Enviar">

	   </form>
   </div>
   <div id="icons">
	   <div class="icons2"><img src="img/facebook.png"> <p>Trilheiros extremos</p> </div><br>
	   <div class="icons2"><img src="img/115757-removebg-preview.png"> <p>matmarciojsb@gmail.com</p> </div><br>
	   <div class="icons2"><img src="img/instagram.png"> <p>trilheiros@extremos</p> </div><br>
	   <div class="icons2"><img src="img/downloadsap.png"> <p>(21)954331267</p> </div>
   </div>
 </article>

 <hr>
 <h1>Onde estamos</h1>
 <div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29409.00553863562!2d-43.36759470290802!3d-22.871814800241946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9962e0ea7680ef%3A0x774cd378e571e0f3!2sOswaldo%20Cruz%2C%20Rio%20de%20Janeiro%20-%20RJ!5e0!3m2!1spt-PT!2sbr!4v1674947052184!5m2!1spt-PT!2sbr" width="80%" height="500px" frameborder="0" allowfullscreen>
  </iframe>	
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