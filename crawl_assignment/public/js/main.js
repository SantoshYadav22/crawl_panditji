$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
  $('.collapse').on('show.bs.collapse', function () {
	  $(this).closest('.accordion-item').addClass('active');
	});

  $('.collapse').on('hidden.bs.collapse', function () {
	  $(this).closest('.accordion-item').removeClass('active');
	});

    

});

jQuery(document).ready(function($){
 
    $("#btn-add").click(function (e) {
		// alert("hdf")
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        
        var name =  document.getElementById('name').value;
        var mobile =  document.getElementById('mobile').value;
        var password =  document.getElementById('password').value;
        var confirm_password =  document.getElementById('confirm_password').value;

        if(name == '' || mobile == '' || password == '' || confirm_password == ""){
            $('#nm').show();
            $('#mob').show();
            $('#pass').show();
            $('#con_firm').show();
        }
        else{
            $('#nm').hide();
            $('#mob').hide();
            $('#pass').hide();
            $('#con_firm').hide();
        var formData = {
            name: jQuery('#name').val(),
            mobile: jQuery('#mobile').val(),
			email: jQuery('#email').val(),
            password: jQuery('#password').val(),
			confirm_password: jQuery('#confirm_password').val(),
        };        
        $.ajax({
            type: "POST",
            url: '/register',
            data: formData,
            dataType: 'json',
            success: function (data) {
				console.log(data)
				const Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000,
					timerProgressBar: true,
					didOpen: (toast) => {
					  toast.addEventListener('mouseenter', Swal.stopTimer)
					  toast.addEventListener('mouseleave', Swal.resumeTimer)
					}
				  })
				  
				  Toast.fire({
					icon: 'success',
					title: 'Signed in successfully ' +data.user.name
				  })
                jQuery('#myForm').trigger("reset");

                // window.location.href = 'welcome';
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    });

	$("#btn-login").click(function (e) {
		// alert("hdf")
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var mobile =  document.getElementById('mobile').value;
        var password =  document.getElementById('password').value;
        if(mobile == '' || password == '' ){
     
            $('#mob').show();
            $('#pass').show();
            $('#alert').hide();

        }
        else{
            $('#mob').hide();
            $('#pass').hide();
        var formData = {           
            mobile: jQuery('#mobile').val(),
			// email: jQuery('#email').val(),
            password: jQuery('#password').val(),
			
        };        
        $.ajax({
            type: "POST",
            url: '/login_vali',
            data: formData,
            dataType: 'json',
            success: function (data) {
				console.log(data)
				// window.location='/welcome'
				// const Toast = Swal.mixin({
				// 	toast: true,
				// 	position: 'top-end',
				// 	showConfirmButton: false,
				// 	timer: 3000,
				// 	timerProgressBar: true,
				// 	didOpen: (toast) => {
				// 	  toast.addEventListener('mouseenter', Swal.stopTimer)
				// 	  toast.addEventListener('mouseleave', Swal.resumeTimer)
				// 	}
				//   })
				  
				//   Toast.fire({
				// 	icon: 'success',
				// 	title: 'Login in successfully ' +data.user.name
				//   })
                  $("#staticBackdrop").modal('show')
                jQuery('#myForm').trigger("reset");

            },
            error: function (data) {
                console.log(data);
            }
        });
        }
    });

        $("#reset").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var mob =  document.getElementById('mobile').value;
           
             if(  mob.length == '' || mob.length > 10 ){
                //  alert(mob.length , i)
                 $('.myLogin').show();
                 $('.change_pass').hide();
                 $('#alert').show();
                 $('#mob').hide();
                 $('#pass').hide();
         
             }else{        
                 $('.myLogin').hide();
                  document.getElementById('headers').innerHTML = 'Reset Password'
                  document.getElementById('chg').innerHTML = 'Enter Your new password to reset'
                  $('.change_pass').show();       
             }
             })


             $("#btn-reset").click(function (e) {
                var mob =  document.getElementById('mobile').value;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var formData = {
                   
                mobile: mob,
                password: jQuery('#password_reset').val(),
                confirm_password: jQuery('#confirm_password').val(),                
            };        
            $.ajax({
                type: "POST",
                url: '/reset',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    console.log(data)
                      $('.myLogin').show();
                      $('.change_pass').hide();
                     

                    jQuery('.change_pass').trigger("reset");
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
	
});

