<?php include_once('../../inc/header.php'); ?>
<!-- Centralizar -->
<div class="centralizar"> 
  <!-- Cuerpo -->
  
  <div id="Cuerpo" class="contenido">
    <h2 class="titles in">Cat&aacute;logo <span>Asthor Agrícola SA‏</span></h2>
    <script type="text/javascript" src="../../js/jssor.js"></script> 
    <script type="text/javascript" src="../../js/jssor.slider.js"></script> 
    <script>
        jssor_slider1_starter = function (containerId) {

            var options = {
               $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
</script> 
<!-- Jssor Slider Begin --> 
<!-- You can move inline styles to css file or css block. -->
<div id="slider1_container" class="slidecatalogo"> 
      <!-- Slides Container -->
      <div u="slides" class="theslidesc">
      <?php $dir = 'images';
      $files1  = array_diff(scandir($dir), array('..', '.'));
		
		foreach($files1 as $image){
			echo "<div>";
			echo '<img u="image" src="'. "images/" . $image .'" />';
			echo "</div>";
			}
		
	 ?>
      </div>
      <span u="arrowleft" class="jssora06l" style="width: 45px; height: 45px; top: 123px; left: 8px;"> </span> 
      
      <!-- Arrow Right --> 
      
      <span u="arrowright" class="jssora06r" style="width: 45px; height: 45px; top: 123px; right: 8px"> </span> 
      <script>
            jssor_slider1_starter('slider1_container');
      </script> 
    </div>
    
    <!-- Jssor Slider End -->  
  </div>
  <!-- Cuerpo --> 
</div>
<!-- Centralizar -->
<?php include_once('../../inc/footer.php'); ?>