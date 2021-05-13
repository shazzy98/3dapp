<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

      <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	
	
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
	
	
	
	
	
	
	
	
    
    <title>3DAPP Web 3D Applications Assignment</title>

  </head>
  <body id="bodyColor">
      <!-- The 3D App header -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div class="logo">
              <a class="navbar-brand" href="#">
                <h1>1oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
              </a>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
			
            
            <!-- link Menu Icon button to the links class navbar-collapse selector] -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                  </li>
              
                  <!-- Dropdown -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" onclick="cokeScene()" data-content="There are three X3D models: Fanta, Coke and Costa">Models</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#linkModal"> Links </a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#searchModal"> Search </a>
                  </li> 
                </ul>
            </div>
      </nav>
	  
	  
	 

      <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts-->
      <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
		  
		  
            <!-- A row for the main 3D image theme — Jubotron with a carousel -->
         <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>   
          <div class="carousel-inner">
           <div class="carousel-item active">	
            <img class="d-block w-100" src="../application/assets/images/coke_large.jpg" alt="First slide"> 			  
            </div>
				
            <div class="carousel-item">
                 <img class="d-block w-100" src="../application/assets/images/fanta_large.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../application/assets/images/sprite_big.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
			

            <!-- A row to hold three cards for the Fanta, Coke and Costa contents -->
            <div class="row">
			
			
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/render_images/cqfanta.jpg" data-fancybox data-caption="3D Fanta Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/fanta.jpg" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText">
								<h2><?php echo $data[0][1]['title'] ?></h2>
								</div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
								<h3><?php echo $data[0][1]['subTitle'] ?></h3>
                                <div id="description_left" class="card-text drinksText">
								<p><?php echo $data[0][1]['picDescription'] ?></p>
								</div>   
                            <a href="https://www.coca-colacompany.com/brands/fanta" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
				  
				  
				  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="../application/assets/images/render_images/coke.jpg" data-fancybox data-caption="3D Coke Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/coca_cola.jpg" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText">
							<h2><?php echo $data[0][2]['title'] ?></h2>
							</div>
                            <div id="subTitle_centre" class="card-subtitle drinksText">
							<h3><?php echo $data[0][2]['subTitle'] ?></h3>
							</div>	
                            <div id="description_centre" class="card-text drinksText">
							<p><?php echo $data[0][2]['picDescription'] ?></p>
							</div>   
                            <a href="https://www.coca-colacompany.com/brands/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
				  
				  
				  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/render_images/costa.jpg" data-fancybox data-caption="3D Costa Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/costa.jpg" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText">
							<h2><?php echo $data[0][3]['title'] ?></h2>
							</div>
                            <div id="subTitle_right" class="card-subtitle drinksText">
								<h3><?php echo $data[0][3]['subTitle'] ?></h3>
							</div>
                            <div id="description_right" class="card-text drinksText">
							<p><?php echo $data[0][3]['picDescription'] ?></p>
							</div>   
                            <a href="https://www.coca-colacompany.com/brands/costa-coffee" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  
		  
		  <!-- End home page contents-->
         <!-- About page-->

          <div id="about" style="display:none;">
             Web 3D is a module taken by students at Sussex University.
			     
          </div>  



       <!-- Deeper understanding-->


       <div id="understand" style="display:none;">
             <h3> Deeper Understanding: </h3>
			 <p><?php echo $data[2][2]['paragraph'] ?></p>
			 <p><?php echo $data[2][3]['paragraph'] ?></p>
			 <p><?php echo $data[2][4]['paragraph'] ?></p>
			 <p><?php echo $data[2][5]['paragraph'] ?></p>
			 <p><?php echo $data[2][6]['paragraph'] ?></p>
          </div>  




          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText">
						<h2><?php echo $data[1][0]['x3dModelTitle'] ?></h2>
						</div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText">
						<h2><?php echo $data[1][1]['x3dModelTitle'] ?></h2>
						</div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText">
						<h2><?php echo $data[1][2]['x3dModelTitle'] ?></h2>
						</div>

                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Fanta</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Costa</button>
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/fanta_can.html" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/Final_bottle.html"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/final_cup.html"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText">
						<p><?php echo $data[1][0]['x3dCreationMethod'] ?></p>	
						</div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText">
						<p><?php echo $data[1][1]['x3dCreationMethod'] ?></p>	
						</div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText">
						<p><?php echo $data[1][2]['x3dCreationMethod'] ?></p>	
						</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 3D image gallery -->
              <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText">
							<h2><?php echo $data[2][0]['paragraph'] ?></h2>
						</div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText">
						<p><?php echo $data[2][1]['paragraph'] ?></p>
						</div>
                    </div>
                </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->
            </div> <!-- End row for X3D Model and Gallery -->
          </div> 

          <!-- Row to hold the interaction panels -->
          <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
						  
						  
						  
                          <!-- Dropdown nav-tab -->
					  
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>		  
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"  onclick="poly();">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                                <a class="dropdown-item" href="#"  onclick="poly();">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                              </div>
                            </li>
							
							
							 <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Audio</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="play();">Play</a>
								 <a class="dropdown-item" href="#" onclick="stop();">Stop</a>
                              </div>
                            </li>
							
				
							
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive" onclick="poly();">Poly</a>
						  <a id="texturebutton" href="#" class="btn btn-secondary btn-responsive" onclick="texture();">Material</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End row for the interaction panels -->

          <!-- Row to hold one card to hold the fanta descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText">
						  <h2><?php echo $data[1][0]['title'] ?></h2>	
						  </div>
                          <div id="subTitle_coke" class="card-subtitle drinksText">
						  <h3><?php echo $data[1][0]['subTitle'] ?></h3>
						  </div>
                          <div id="description_coke" class="card-text drinksText">
						  <p><?php echo $data[1][0]['ModelTxtription'] ?></p>
						  </div>   
                        <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-primary btn-responsive">Visit Fanta</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End fanta description contents -->

          <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_sprite" class="card-title drinksText">
						  <h2><?php echo $data[1][1]['title'] ?></h2>
						  </div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText">
						    <h3><?php echo $data[1][1]['subTitle'] ?></h3>
						  </div>
                          <div id="description_sprite" class="card-text drinksText">
						   <p><?php echo $data[1][1]['ModelTxtription'] ?></p>
						  </div>  
                        <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the costa descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText">
						<h2><?php echo $data[1][2]['title'] ?></h2>
						</div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText">
						  <h3><?php echo $data[1][2]['subTitle'] ?></h3>
						</div>
                        <div id="description_pepper" class="card-text drinksText">
						<p><?php echo $data[1][2]['ModelTxtription'] ?></p>
						</div>  
                        <a href="https://www.coca-cola.co.uk/brands/costa-coffee" class="btn btn-primary btn-responisve">Visit Costa</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End costa description contents -->

      </div> <!-- End 3D App SPA Contents -->
      
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2021 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a> | <a id="navunderstand" href="#">Deeper Understanding</a> </span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 

      <!-- My 3D App modals -->
      <!-- Contact modal -->
      <!-- The Modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Irfan Shahzad is270@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>
	  
	  
	  
	   <!-- Links Modal -->
	  
	  <div class="modal fade" id="linkModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Download links</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Github: </p>
				  <p>Download Models: </p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>
	  
	  
	  
	  
	       <!-- Search -->  
	       <div class="modal fade" id="searchModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Flickr Search</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> 
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Flickr Web Service: </p>
				    
				 <!-- Text input box -->
				<div class="textInput">
				<input type="text" id="txt" />
				</div>
  
				<div class="btn">
				<button onclick="loadImages()">Search</button>
				</div>

				<div class="box">
				<p> Results returned form the flickr web service: </p>
				<div id="images" ></div>
				</div>

				<script src="http://code.jquery.com/jquery-latest.js"></script>
		
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>
	  
	  

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
	  
      <!-- JQuery code to get content data from a backend JSON file -->
       <!--  <script src="../application/js/getJsonData.js"></script>  NOT NEEDED ANYMORE-->
	    
      <!-- JavaScript model interactions -->
      <script src="../application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="../application/js/jquery.fancybox.min.js"></script>
	  
	  
  </body>
</html>