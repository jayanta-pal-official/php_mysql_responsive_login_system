$(document).ready(function () {
   /* $('#fname,#lname,#uname,#email,#phone,#password,#cpassword').focus(function(){
       $(this).css('background-color','rgba(80, 199, 56)');
    });
    $('#fname,#lname,#uname,#email,#phone,#password,#cpassword').blur(function(){
        $(this).css('background-color','');
     });*/
   $('#form').validate({
      rules: {
         firstname: {
            required: true,
            minlength: 3,
            maxlength: 10,
            lettersonly: true
         },
         lastname: {
            required: true,
            minlength: 3,
            maxlength: 10,
            lettersonly: true
         },
         username: {
            required: true,
            minlength: 3,
            maxlength: 15,
            noSpace: true
         },
         email: {
            required: true,
            email: true
         },
         phone_number: {
            required: true,
            minlength: 10,
            maxlength: 12,
            nubersonly: true
         },
         password: {
            required: true,
            minlength: 8,
            maxlength: 20,
            all: true,
            noSpace: true

         },
         cpassword: {
            required: true,
            equalTo: '#password'
         },
         gender: {
            required: true,
         },
         

      }, messages: {
         firstname: {
            required: "please enter first name",
            minlength: "first name must be 3 char long",
            maxlength: "first name maxlenght 10 char long",
            lettersonly: "invalid first name"
         },
         lastname: {
            required: "please enter last name",
            minlength: "last name must be 3 char long",
            maxlength: "last name maxlenght 10 char long",
            lettersonly: "invalid last name"
         },
         username: {
            required: "please enter username",
            minlength: "username must be 3 char long",
            maxlength: "username maxlenght 15 char long",
            noSpace: "space is not allow"
         },
         email: {
            required: "please enter email",
            email: "invalid email"

         },
         phone_number: {
            required: "please enter phone number",
            nubersonly: "please enter number only",
            minlength: "phone number must be 10 degit",
            maxlength: "phone number maximum 12 degit allow"
         },
         password: {
            required: "please enter password",
            minlength: "password must be 8 char long",
            maxlength: "password maxlenght 20 char long",
            all: "must be use one special cheracter",
            noSpace: "Space is not allow"

         },
         cpassword: {
            required: "please enter confirm password",
            equalTo: "please enter same password"
         },
         gender: {
            required: "please select gender",
         }, 
        



      },
      errorPlacement: function (error, element) {
         if (element.is(":radio")) {
            error.appendTo(element.parents(".gen"));
         }
         else { // This is the default behavior 
            error.insertAfter(element);
         }
      },
      submitHandler: function (form) {
         form.submit();
      }

   });

   jQuery.validator.addMethod("lettersonly", function (value) {
      return (/^[a-z]+$/).test(value);
   });
   jQuery.validator.addMethod("nubersonly", function (value) {
      return (/^[0-9]+$/).test(value);
   });
   jQuery.validator.addMethod("all", function (value) {
      return (/[a-zA-Z0-9][!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/).test(value);
   });
   jQuery.validator.addMethod("noSpace", function (value) {
      return value.indexOf(" ") < 0;
   });

});

