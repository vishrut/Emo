<!DOCTYPE html>

<head>

	<script>	
	var t;    
	function keyfn(str)
	{
	  if ( t )
	  {
		clearTimeout( t );
		t = setTimeout( function() {
		showHint(str);}, 500 );
	  }
	  else
	  {
		t = setTimeout( function() {
		showHint(str);}, 500 );
	  }
	};

	function showHint(str)
	{
	var xmlhttp;
	if (str.length==0)
	  { 
	  document.getElementById("txtHint").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","gethint.php?q="+str,true);
	xmlhttp.send();
	}
	</script>
	
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Emo!</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/presentation.css">

  <script src="javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  <div class="container top-bar home-border">
    <div class="attached">
      <!--div class="name" onclick="void(0);">
        <span><a href="http://foundation.zurb.com">Foundation</a> <a href="#" class="toggle-nav"></a></span>
  		</div-->
		<ul class="left">
        <li>
          <a href="about.php">About</a>
        </li>
		
        
  			<li>
  			  <a href="https://github.com/vishrut/Emo" >Source</a>
  			</li>
        </ul>
  	</div>
  </div>
<header>
  <div class="row">
    <div class="twelve columns">
      <h1>Welcome to Emo!</h1>
      <h4>Emo uses the <strong>Lymbix API</strong> to give a real-time sentiment analysis of your article.</h4>
    </div>
  </div>
 </header> 

  <div class="row">
    <div class="eight columns">

      <!-- Grid Example -->
      <div class="row">
        <div class="twelve columns">          
		<form action="">
		  <fieldset>
			<legend><h5><strong>Go on, write down your story!</h5></strong></legend>
			<textarea rows="20" placeholder="And don't be boring! We'll know." id="txt1" onkeyup="keyfn(this.value);"></textarea>
		  </fieldset>
		</form>
        </div>
      </div>      
    </div>

    <div class="four columns">
      <h4>Dominant Emotion:</h4>
      <p id="txtHint">Neutral</p>
	  <hr>
    </div>
  </div>
  
  <footer>
  <div id="copyright">
    <div class="row">
      <div class="four columns">
        <p>Created by Vishrut Patel; 2012</p>
      </div>

    </div>
	</div>
</footer>

  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
  
</body>
</html>
