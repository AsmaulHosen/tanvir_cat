<header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li> 
                        <li class="scroll"><a href="#about">Who We</a></li>
                        <li class="scroll"><a href="#services">Our Service</a></li>
                        <li class="scroll"><a href="#pricing">Pricing</a></li>
                        <li class="scroll"><a href="#portfolio">Gallery</a></li>
                        <li class="scroll"><a href="#our-team">Team</a></li>
                        <li class="scroll"><a href="#contact-us">Contact</a></li>     
						<?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) { ?>
						<li class="scroll"><a href="#">My Dashboard</a></li>
						<li class="scroll"><a href="#">Logout</a></li>
						
						<?php } else { ?>
						<li class="scroll">
						<a  href="#" data-toggle="modal" data-target=".login-register-form">
                           Login / Registration 
                        </a>
						</li> 
						<?php } ?>
                         
											
                                                
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
	