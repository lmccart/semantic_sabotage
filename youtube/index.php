<?php
header('X-Frame-Options: GOFORIT'); 
?>

<html>
	
	<head>
	
	<title>Eyeo</title>
        
	<link rel="stylesheet" href="./style.css" type="text/css" media="screen, projection">
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.0.min.js"></script>
  <script src="http://malsup.github.com/jquery.form.js"></script> 
  
  <script> 
      // wait for the DOM to be loaded 
      $(document).ready(function() { 
          // bind 'myForm' and provide a simple callback function 
          $('#youtube_load').ajaxForm({ 
		        // dataType identifies the expected content type of the server response 
		        dataType:  'json', 
		 
		        // success identifies the function to invoke when the server response 
		        // has been received 
		        success:   load 
          }); 
      }); 
  </script> 
		
	    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">
      google.load("swfobject", "2.1");
    </script> 	
		
	<script src="./localStorageDB/localstoragedb.min.js"></script>
	<script src="./statsHandler.js"></script>
	<script src="./parser.js"></script>
	<script src="./fill.js"></script>
	<script src="./embed.js"></script>
	<script src="./player.js"></script>
	<script src="./sabotage.js"></script>

	<!--<script src="https://apis.google.com/js/client.js?onload=load"></script>-->
	</head>
	
	
	
	<body onLoad="init()">
	

		<div id="videoDiv">Loading...</div>
    <div id="videoInfo">
      <p>Player state: <span id="playerState">--</span></p>
      <p>Current Time: <span id="videoCurrentTime">--:--</span> | Duration: <span id="videoDuration">--:--</span></p>
      <p>Bytes Total: <span id="bytesTotal">--</span> | Start Bytes: <span id="startBytes">--</span> | Bytes Loaded: <span id="bytesLoaded">--</span></p>
    </div>

		enter a youtube url for a video with captions.
		
    <form id="youtube_load" action="youtube_load.php"  method="post">
			URL: <input type="text" value="http://www.youtube.com/watch?v=ci5p1OdVLAc" name="url">
			<input type="submit"  value="Submit">
		</form>
    
    <div id="loading" style="display:none">LOADING...</div>
    
    <button id="playButton" style="display:none" onclick="playback();">PLAYBACK</button>
    <button id="pauseButton" style="display:none" onclick="pausePlayback();">PAUSE</button>
    <button id="muteButton" style="display:none" onclick="muteVideo();">MUTE</button>
    <button id="unmuteButton" style="display:none" onclick="unMuteVideo();">UNMUTE</button>
    
    
		<div id="words"></div>
    <div id="results"></div>
	
	</body>
	
</html>





