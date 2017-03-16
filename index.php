<?php include 'header.php' ?>

	<!--///////////////////////////////////Phrase Accorche + DIV FACEBOOK ? \\\\\\\\\\\\\\\-->

	<!--///////////////////////////////////CONTENEUR\\\\\\\\\\\\\\\\\\\\\\-->
<img classe="phraseacroche col-xs-offset-3" src="img/phrase.png" width="40%">

<div id="containerUne col-md-10 col-md-offset-3">
	<div id="conteneur" class="col-xs-12 col-md-10 col-md-offset-1"> 		<!--Conteneur detier la Une, Menu press et social -->
		<div id="laUne" class="">
			<H2 class="aLaUne col-lg-7 text-left text-capitalize">A <span>La Une</span></H2>  	<!-- La Une DIV -->
			<div class="les-articles">
				<img src="img/une1.png" alt="" class="articleimg1 col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">
				<div class="row">
                    <img class="articleimg2 col-xs-10 col-md-3 col-xs-offset-1 col-md-offset-0" src="img/une3.png" width="500px" alt="" onload="afficherArticle('Art1')" onclick="afficherArticle('Art1')"/>
                    <img class="articleimg3 col-xs-10 col-md-3 col-xs-offset-1 col-md-offset-0" src="img/une2.png" width="500px" alt="" onclick="afficherArticle('Art2')"/>
                    <img class="articleimg4 col-xs-10 col-md-3 col-xs-offset-1 col-md-offset-0" src="img/une4.png" width="500px" alt="" onclick="afficherArticle('Art3')"/> 
                    <img class="articleimg5 col-xs-10 col-md-3 col-xs-offset-1 col-md-offset-0" src="img/une5.png" width="500px" alt="" onclick="afficherArticle('Art4')"/>
                </div>  
            </div>  
        </div>
        <div class="cache" id="Art1"><?php include 'articles/article1.php' ?></div>
        <div class="cache" id="Art2"><?php include 'articles/article2.php' ?></div>
        <div class="cache" id="Art3"><?php include 'articles/article3.php' ?></div>
        <div class="cache" id="Art4"><?php include 'articles/article4.php' ?></div>
    </div>
</div>
	<!-- /////////////////////////////////Partie Social FB \\\\\\\\\\\\\\\\-->

<div class="cal-md-6">

</div>
	</div>
<div id="containerDeux col-xs-12 col-md-12 ">
	<div id="oldPresse" class="col-xs-10 col-md-12"> 
		<H2 class="aLaUne col-xs-12 col-md-12 col-lg-12 text-left text-capitalize">Plus <span>encore</span></H2>  	<!-- La Une DIV -->
			<div id="etPlusEncore" class="row">
				<div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-2 col-md-offset-0">
                	<div class="panel panel-default">
                    	<div class="panel-heading">
                       	 	<h4><i class="fa fa-fw fa-check"></i> OLD ARTICLE</h4>
                    	</div>
                    	<div class="panel-body">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        		<a href="#" class="btn btn-default">Lire la suite</a>
                    
                    	</div>
                	</div>
            	</div>
            	<div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-2 col-md-offset-0">
                	<div class="panel panel-default">
                    	<div class="panel-heading">
                       	 	<h4><i class="fa fa-fw fa-gift"></i> OLD ARTICLE</h4>
                    	</div>
                    	<div class="panel-body">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                       			<a href="#" class="btn btn-default">Lire la suite</a>
                    	</div>
                	</div>
            	</div>
           		<div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-2 col-md-offset-0">
                	<div class="panel panel-default">
                    	<div class="panel-heading">
                        	<h4><i class="fa fa-fw fa-compass"></i> OLD ARTICLE</h4>
                    	</div>
                    		<div class="panel-body">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p> 
                        		<a href="#" class="btn btn-default">Lire la suite</a>                      
                   			</div>
                	</div>
            	</div>
           	</div>
	</div>  
</div>	

</div> <!-- fermeture containerUne -->


<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
 include 'footer.php' 
 
