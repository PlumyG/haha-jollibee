<!--
	Author: Lee Hiu Wa		SID:17004248S
			Leung Tin Yau 	SID:17063771S
			Liu Sze Nga		SID:17005386S
			Man Wing Long 	SID:17037452S

-->
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/perspectiveRules.css" rel="stylesheet" />
      <style>
         body {
         overflow: hidden;
         }
         #demo1{
         cursor:pointer;
         }
      </style>
   </head>
   <body>
      <div id="demo1" title="Click To Enter">
         <img alt="background" src="assets/images/background.png" />
         <div id="particle-target" ></div>
         <img alt="logo" src="images/text.ver.png" />
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="assets/js/jquery.particleground.min.js"></script>
      <script src="jquery.logosDistort.js"></script>
      <script>
         $(document).ready(function(){
         	$("#demo1").click(function(){
         		window.location.href="myhome.html";
         	});
         });
      </script>
      <script>
         var particles = {
             dotColor: '#1ec5ee',
             lineColor: '#0a4e90',
             density: 20000,
             parallax: false
         };
         var particleDensity;
         var options = {
                 effectWeight: 1,
                 outerBuffer: 1.05,
                 elementDepth: 200,
                 perspectiveMulti: 1.5,
                 enableSmoothing: true,
                 onInit: function() {
                   $('#particle-target').particleground(particles);
                 }
             };
         
         $('#min-max-tag').click(function(){
           if ($('#demo-menu').hasClass('closed')) {
             $('#demo-menu').removeClass('closed').addClass('open');
           } else {
             $('#demo-menu').removeClass('open').addClass('closed');
           }
         });
         
         $(document).ready(function() {
         
           $('#demo1').logosDistort(options);
         
         });
      </script>
      <audio autoplay loop>
         <source src="assets/bgmusic.mp3" type="audio/mpeg">
         Your browser does not support the audio element.
      </audio>
   </body>
</html>