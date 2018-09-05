
     $(function () {

       $('form').on('submit', function (e) {

         e.preventDefault();
         var errors = false;
         var name = $('#name').val();
         var email = $('#email').val();
         var subject = $('#subject').val();
         var message = $('#message').val();


         $('#name').removeClass('error');
         $('#email').removeClass('error');
         $('#subject').removeClass('error');
         $('#message').removeClass('error');

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

    if (subject.length < 1) {
       $('#subject').addClass('error');
       errors = true;
    }

    if (message.length < 1) {
       $('#message').addClass('error');
       errors = true;
    }


if(!errors){

  $.ajax({
    type: 'post',
    url: 'contact.php',
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
