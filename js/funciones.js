function abrirmodal(src){
	$('#imagen-fancy').attr('src',src);
	$('#modalbox').trigger('click'); //abro el div con fancybox
}