<?php include 'header.html' ?>

	<!--///////////////////////////////////Phrase Accorche + DIV FACEBOOK ? \\\\\\\\\\\\\\\-->

	<!--///////////////////////////////////CONTENEUR\\\\\\\\\\\\\\\\\\\\\\-->

<div id="containerUne col-md-10 col-md-offset-1">
	<div id="conteneur" class="col-xs-12 col-md-9"> 		<!--Conteneur detier la Une, Menu press et social -->
		<div id="laUne" class="">
			<H2 class="aLaUne col-lg-7 text-left text-capitalize">A <span>La Une</span></H2>  	<!-- La Une DIV -->
			<div class="les-articles">
				<img src="img/une1.png" alt="" class="articleimg1 col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">
				<div class="row">
					               <img class="articleimg2 col-xs-10 col-md-3" src="img/une3.png" width="500px" alt="" onclick="afficherArticle('Art1')"/>
                    <img class="articleimg3 col-xs-10 col-md-3" src="img/une3.png" width="500px" alt="" onclick="afficherArticle('Art2')"/>
                    <img class="articleimg4 col-xs-10 col-md-3" src="img/une3.png" width="500px" alt="" onclick="afficherArticle('Art3')"/> 
                    <img class="articleimg5 col-xs-10 col-md-3" src="img/une3.png" width="500px" alt="" onclick="afficherArticle('Art4')"/>
                </div>  
            </div>  
        </div>
        <div class="cache" id="Art1"><?php include 'article1.html' ?></div>
        <div class="cache" id="Art2">article2</div>
        <div class="cache" id="Art3">article3</div>
        <div class="cache" id="Art4">article4</div>
    </div>
</div>
	<!-- /////////////////////////////////Partie Social FB \\\\\\\\\\\\\\\\-->
	<div class="row">
<div id="fb-root" class="col-md-4" >
	<div class="span4"></div>
    	<img class="col-md-offset-4" src="img/facebook.png" width="120">
    		<div class="span4"></div>
				<iframe class="pagefb" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="1" allowTransparency="true">		
				</iframe>

					<iframe class="recommend col-xs-offset-3" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais&width=105&layout=box_count&action=recommend&size=small&show_faces=true&share=true&height=65&appId" width="105" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">			
					</iframe>
</div>
<div class="cal-md-6">

</div>
	</div>
<div id="containerDeux col-xs-12 col-md-12 ">
	<div id="oldPresse" class="col-xs-10 col-md-12"> 
		<H2 class="aLaUne col-xs-12 col-md-12 col-lg-12 text-left text-capitalize">Plus <span>encore</span></H2>  	<!-- La Une DIV -->
			<div id="etPlusEncore" class="row">
				<div class="col-xs-10 col-md-4 col-lg-4">
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
            	<div class="col-xs-10 col-md-4 col-lg-4">
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
           		<div class="col-xs-10 col-md-4 col-lg-4">
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
<?php include 'footer.html' ?>

