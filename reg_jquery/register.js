	$(function(){
///username

$.validator.addMethod("usernamevalid", function(value, element) {
return this.optional(element) || /^[a-zA-Z -_]{3,30}$/i.test(value);
}, "Please choise a username with only a-z .");

//mobile

$.validator.addMethod('customphone', function (value, element) {
    return this.optional(element) || /^[0-9\.\-_]{3,30}$/.test(value);
}, "Please enter a valid phone number");

var $registerform= $("#registration");
	if($registerform.length){
		$registerform.validate({

			rules:{
				username:{
					required:true,
					usernamevalid:true,
					minlength:3
					},
				email:{
					required:true,
					email:true
				},
				address:{
					required:true,
					
				},
				mobile:{
					required:true,
					customphone:true,
					minlength:11
					
				},
				division:{
					required:true
				},
				district:{
					required:true
				},
				upozila:{
					required:true
				},
				language:{
					required:true
				},
				image:{
					required:true,
					extension: 'jpg|jpeg|png'
				},
				file:{
					required:true,
					
				}

			},

			message:{
				username:{
					required:'username is mandatory'
				},
				email:{
					required:'email is mandatory',
					email:'please enter valid email'

				},
				address:{
					required:'address is mandatory'
				},
				mobile:{
					required:'mobile is mandatory',
									
					},
				division:{
					required:'division is mandatory'
						},
				district:{
					required:'district is mandatory'
				},
				upozila:{
					required:'upozila is mandatory'
				},
				language:{
					required:'language is mandatory',


				},
				image:{
					required:'image is mandatory',
					extension:'You are only allowed to upload jpg or png images.'
				},
				file:{
					required:'cv is mandatory',

				}
			},

			errorPlacement: function (error,element){
				if(element.is(":checkbox"))
				{
					error.appendTo(element.parents(".language"));
				}
				else
				{
					error.insertAfter(element);
				}			
			}


		});
	}

});