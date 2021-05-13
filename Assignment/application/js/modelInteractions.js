
//functions to switch between fanta,coke and costa scenes

function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	cameraFront();
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}


//Functions for animations of the different models


var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__Line001-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__cup002-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__Group06-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Line001-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__cup002-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__Group06-TIMER').setAttribute('enabled', spinning.toString());
	
}



//Functions for audio


function play() {
	document.getElementById('model__audio').setAttribute('enabled', 'true');
}

function stop() {
	document.getElementById('model__audio').setAttribute('enabled', 'false');
}






function animateModel()
{
  
		//Animation for can
    if(document.getElementById('model__Line001-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Line001-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Line001-TIMER').setAttribute('enabled', 'false');

	
	
		//Animation for costa
    if(document.getElementById('model__cup002-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__cup002-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__cup002-TIMER').setAttribute('enabled', 'false');
	
	
	
		//Animation for bottle
    if(document.getElementById('model__Group06-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Group06-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Group06-TIMER').setAttribute('enabled', 'false');
	
	
	
}


//Convert model to wireframe function


function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}



//Convert model to poly function

function poly()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(false);
	
}



//change materials of the models

toggle = false;
toggle2 = false;
toggle3 = false;
function texture()

{
 toggle = !toggle;
 toggle2 = !toggle2;
 toggle3 = !toggle3;
 
 
 //Fanta can changes to coke can
 
 if (toggle){
	 
  document.getElementById('model__fanta').setAttribute('url','../assets/can_texture.jpg');
 }
  
  else {
  document.getElementById('model__fanta').setAttribute('url','../assets/fanta2.jpg');

  }
  	
	
//coke bottle changes to coke zero
	
	if (toggle2){
	 
  document.getElementById('model__coke').setAttribute('url','../assets/zero.jpg');
 }
  
  else {
  document.getElementById('model__coke').setAttribute('url','../assets/bottle_label.png');

  }
  	
	
	
	//costa changes to different costa cup label
	
	if (toggle3){
	 
  document.getElementById('model__costa').setAttribute('url','../assets/costa.jpg');
 }
  
  else {
  document.getElementById('model__costa').setAttribute('url','../assets/costa2.jpg');

  }
  	
	
		
	
	
	
  
}





 //Lighting functions
 

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__Omni001').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__Omni002').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}





 //Camera functions


function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');

}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');

	
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
	
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
	
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
	
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
	
}








