<!DOCTYPE html>
<html>
	<head>
<!--//BEWARE//SUBLIMINAL//MESSAGES//BEWARE//-->
		<title>playlist</title>
		<meta name="theme-color" content="#FF5A5F">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
		<link rel="shortcut icon" href="favicon.ico?v=2"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script>
			var video = document.getElementById('video');
			video.addEventListener('click',function(){
			video.play();
			},false);
		</script>
		<!-- <script type="text/javascript">
			function yHandler(){
				var wrap = document.getElementById('wrap');
				var contentHeight =wrap.offsetHeight;// Gets page content height
				var yOffset = window.pageYOffset;// Gets the vertical scroll position
				var y = yOffset + window.innerHeight;
				if(y >= contentHeight){
					wrap.innerHTML += 'node.test.html';
					// Ajax call to get more dynamic data goes here
				}
				var contentmenu = document.getElementById('contentmenu');
				contentmenu.innerHTML = contentHeight+" | "+y;
			}
			window.onscroll = yHandler;
		</script> -->
		<script src="nodrag.js"></script>
		<script src="w3data.js"></script>
<!--//BEWARE//SUBLIMINAL//MESSAGES//BEWARE//-->
	</head>
	<body>
<!--//START//LEFT//MENU//HERE//START//-->
		<div id="contentmenu">
			<div class="contentmenu1">
			<div w3-include-html="contentmenu.html"></div>
			</div>
		</div>
<!--//END//LEFT//MENU//HERE//END//-->

<!--//START//I//PUT//MY//CONTENT//HERE//END//-->
<!--
	*//CONTENT//APIs//*
	content = normal node
	content + alt = purple node
	content + video = video node
-->
	<div class="wrap">
			
			<div class="content spotifydark">
			<h2><span class="spotifygreen">the "to be named"</span></h2>
				<iframe src="https://embed.spotify.com/?uri=spotify:user:altimint:playlist:7BTMiBzhVdW1qo28fi0t1c" 
				width="100%" 
				height="580" 
				frameborder="0" 
				allowtransparency="true"></iframe>
			<p>genuinely hope people will like this
			<br>
			<br>
			3/30/2017</p>
			</div>
		
	</div>
	
	
	<script>
		$(document).ready(function() {
		$("img").unveil();
		});
	</script>
	<script>
		w3IncludeHTML();
	</script>
		<script src="jquery-1.12.0.min.js"></script>
		<script src="jquery.unveil.js"></script>
		<script src="twitter2.js"></script>
<!--//END//I//PUT//MY//CONTENT//HERE//END//-->

		<footer>
			<div id="spotify">
			</div>
			<h1>
			<span class="alt">♥ ♦ ♣ ♠</span>
			</h1>
			<p>
			what.
			</p>
			<a name="bottom">
		</footer>
	</body>
</html>