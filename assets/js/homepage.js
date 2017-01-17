$('.carousel').carousel({
        interval: 5000 //changes the speed
    });
	
	$('#joinIn').hover(function(e){
	$(this).addClass('animated swing');},function(e){
	$(this).removeClass('animated swing');});
	
	$('#knowMore').hover(function(e){
	$(this).addClass('animated pulse');},function(e){
	$(this).removeClass('animated pulse');});
	
	$('.info').hover(function(e){
	$(this).addClass('animated rubberBand');},function(e){
	$(this).removeClass('animated rubberBand');});
	
	$('#logIn').hover(function(e){
	$(this).addClass('hvr-float');},function(e){
	$(this).removeClass('hvr-float');});
	
	
	$('#register').hover(function(e){
	$(this).addClass('animated tada');},function(e){
	$(this).removeClass('animated tada');});