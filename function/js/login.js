$( document ).ready(function() {

    $( "#form_login" ).submit(function( e ) {
      event.preventDefault();
      let form = $(this);
        $.ajax({
          url : form.attr('action'),
          type: form.attr('method'),
          data: form.serialize(),
          dataType: 'json',
          success:function(data)
          {
            if (data.success == true)
            {
              alert(data.messages);
              window.location.href = data.url;
            }
            else
            {
              toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "200",
                "hideDuration": "3000",
                "timeOut": "9000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              }
              toastr.error(data.messages);
            }
          }
        })

    });

  });