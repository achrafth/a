(function($) {
	
	$('.ajoutPanier').click(function(event){

		event.preventDefault();
		$.get($(this).attr('href'),{},function(data){
			if(data.error){
				alert(data.message);
			}else{
				if(confirm(data.message + 'consulter panier?')){
					location.href = 'cart.php';
				}else{
					$('#total').empty().append(data.total);
					$('#nbreProduit').empty().append(data.nbreProduit);

				}
			}

		},'json');
		return false;
	});
})(jQuery);