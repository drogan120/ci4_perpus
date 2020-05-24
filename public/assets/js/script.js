$(document).ready(function(){



	$('#keyword').on('keyup',function(){


		$.get('http://localhost:8080/buku/cari/' + $('#keyword').val(), function(data){
			$('#buku').html(data);
			
		});
		
	if($('#keyword').value == ""){
		$.get('http://localhost:8080/buku/index/' + $('#keyword').val(), function(data){
				$('#buku').html(data);
				
			});
	}		

	});
});