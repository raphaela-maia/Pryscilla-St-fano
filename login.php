<?php


?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Fisioterapia Dermatofuncional Pryscilla Stéfano</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	
    
    <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    
     <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    
	
</head>


<body class="body" id="body">
<header id="header">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
       <!-- <h1 class="text-light"><a href="index.php">Bocor<span>.</span></a></h1>-->
<a href="index.php"><img src="assets/img/logohorizontal.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="index.php#about">Conheça mais</a></li>
          <li><a href="index.php#services">Serviços</a></li>
          <li><a href="index.php#portfolio">Resultados</a></li>
            <li><a href="dicas.php">Dicas</a></li>

          <li class="get-started"><a href="contato.php">Entre em contato</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Login</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Login</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
      
      <section class="inner-page">
      <div class="container">
        
          
            


          
          
          <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in"> Usuário </h2>
        </div>

        <center>
            
          
      
<div id="frmDiv">
	<div class="col-lg-12">
            <form action="classes/teste/testeCheckLogin.php" id="frmLogin"  method="post" role="form" class="php-email-form" data-aos="fade-up">
                
                <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu e-mail" />
                <div class="validate"></div>
              </div>
                
              <div class="form-group">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Insira sua senha" />
                <div class="validate"></div>
              </div>
              <p><a href="esqueci.php"> Esqueci a senha</a> </p>
	<input type="button" class="button" id="btnSendFrmLogin" value="Enviar"> 

</form>
</div>



<script type="text/javascript">
	 
	$(document).ready( 
		function() {
			$("#btnSendFrmLogin").click(
					function() {
						//alert("enviando");
						var formData = $("#frmLogin").serialize();
						
						$.post( "classes/teste/testeCheckLogin.php", formData, function( data, status  ) {
								//alert(status);
								//alert(data);
								var objReturn = $.parseJSON( data );
								
								if ( objReturn.login == "true" ){
									
									$(location).attr('href', 'consultas/gerenciamento.php');
								}else{
                                    alert("Usuário ou Senha inválido(s)");
									
								}
							}
						);	
					}		
				);
		} 
	);
	
    
    
</script>
   




        </center>

            </div></div>
    
              
              <!-- End Contact Section -->
          
          </section>
            
            
            
            
        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
<table><tr>
      <div class="container" data-aos="fade-up">

       <th width="50%"> <div class="row  justify-content-center">
          <div class="col-lg-6">
            <text class="a"><i><center> Fisioterapeuta Pryscilla Stéfano</center>  </i>
              <center><img src="assets/img/logo2.png" alt="logo pryscilla stéfano" width="130" height="130"></center>
    
          </div>
           </div></th>
          
      </div>
        <th width="50%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.9908293635413!2d-46.61748468595888!3d-23.460795284732935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef6f47ed393f5%3A0x17237ab51648fbad!2sLumina%20Cabelo%20e%20Corpo%20-%20dia%20da%20noiva%20maquiagem%20HD%20com%20air%20brush%20-%20Av.%20Nova%20Cantareira%2C%204556%20-%20Tucuruvi%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002340-002!5e0!3m2!1spt-BR!2sbr!4v1606440609650!5m2!1spt-BR!2sbr" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </tr></table> </div>

        <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Pryscilla Stéfano</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Design por <a class="linkrodape" href="https://bootstrapmade.com/">BootstrapMade</a> Desenvolvido por <a class="linkrodape" href="https://www.instagram.com/naya.tech/">NayaTech</a> 
      </div>
 
    </div>  
  </footer>
</body>
</html>