$(document).on("submit", "#login_form", function(e) {
        e.preventDefault();
		jQuery.ajax({
			url:'proccess/login.php',
			type:'POST',
			dataType:'json',
			data:$(this).serialize(),
			success: function(resp){
				if(resp.error == false)
				{
					if(resp.access==1)
					{
                        swal({
                            position: 'top-end',
                            type: 'success',
                            title: 'Bienvenido ' + resp.user+"!",
                            showConfirmButton: false,
                            timer: 2000,
                        });
                        setTimeout(function(){
                            window.location.href='POS/admin/';
                        },1500)
					}
					else if(resp.access==2)
					{
						swal({
							type:'success',
							title:'Bienvenido '+resp.user,
							showConfirmButton:false,
							timer: 1500
                        })
                        setTimeout(function(){
                            window.location.href='index.php';
                        },1500)
					
					}
					else if(resp.access ==3)
					{
						swal({
							type:'success',
							title:'Bienvenido '+resp.user,
							showConfirmButton:false,
							timer: 1500
                        })
                        setTimeout(function(){
                            window.location.href='POS/supplier/';
                        },1500)
					}
                }
                else
                {
                    swal({
                        type:'error',
                        title:'Error: '+resp.message,
                        showConfirmButton:true,
                    })
                }
			},error: function(resp){
                if(resp.error == true)
                {
                    swal({
                        type:'error',
                        title:'Error: '+resp.message,
                        showConfirmButton:true,
                    })
                }
				
			}
		})
 });