
     $(function () {

       $('form').on('submit', function (e) {

         e.preventDefault();
         var errors = false;
         var name = $('#name').val();
         var email = $('#email').val();
         var phone = $('#phone').val();
         var organisation = $('#organisation').val();


         $('#name').removeClass('error');
         $('#email').removeClass('error');
         $('#phone').removeClass('error');
         $('#organisation').removeClass('error');

         $( ".success" ).remove();


         if (name.length < 1) {
            $('#name').addClass('error');
            errors = true;

         }
         var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
         var validEmail = regEx.test(email);

         if (email.length < 1) {
      $('#email').addClass('error');
      errors = true;
    }



    if (organisation.length < 1) {
       $('#organisation').addClass('error');
       errors = true;
    }


if(!errors){

  $.ajax({
    type: 'post',
    url: 'demo.php',
    data: $('form').serialize(),
    success: function () {
      $('form').after('<span class = "success"> <p> Thanks, we will reach out to you shortly </p> </span>')
    },
    error: function () {
      $('form').after('<span class = "success"> <p> Sorry, there was an error. </p> </span>')
    }
  });


}


       });

     });
