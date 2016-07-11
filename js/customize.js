$(document).ready(function() {
    
 $('.content').tabs();
 
 $('#SlideShow').tabs({fx:{opacity: "show"}}).tabs("rotate", 3500, true);
 
 $('.NewsHome').tabs({fx:{opacity: "show"}}).tabs("rotate", 7500, true); 
    
 $( "#Listaccordion" ).accordion();
 
 $("#menu > ul > li").hover(function(){
 $("ul.submenu").show( "scroll" );
  });

var url = window.location.href;

// Will also work for relative and absolute hrefs
$('#menu li a').filter(function() {
    return this.href == url;
}).addClass('active');    
    
    
});

