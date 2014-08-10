function login(){
	$.ajax({
		type:'POST',
		url:'http://anysolution.esy.es/MCU/inc/login.php',
		dataType:'json',
		data:$('#dForm').serialize(),
		success:function(data){
			if(data.status===1){
				window.location.href='webapp.html';
			}
		}

	});
}