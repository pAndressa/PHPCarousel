$(document).ready(function()){

	$('#formulario').submit(function(){
		$.post('cadastra_arquivo2.php',function(data){
			success:function(){
				$('#valida').html('Cadastrado!');
			},
			error:function(){
				$('#valida').html('Erro ao cadastrar');
			}
		});
	});
});

/*$('#btn_envia').submit(function(){

$.ajax(
			{
				type: "Post",
				url: "cadastra_arquivo.php",
				datatype: "php",
				//data: "param="+nome,
			   
				beforeSend: function()
				{
				   //alert('beforeSend');
				},
			   
				error: function()
				{
					//alert('error');
					alert('nao foi');
					console.log('Tente outra vez');
					$('.msg').append('<p>Tente outra vez</p>');
				},
			   
				success: function(msg)
				{
					alert('foi');
					//$("retorno").html(result);
					$('.msg').append('Agora deu');
				},
			   
				complete: function()
				{
					//alert('complete');
				}
			});
		});    */    
//http://www.todoespacoonline.com/w/2014/08/29/ajax-php-e-jquery/