<script>
    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");

        event.preventDefault();

         swal({

			title: `Are you sure?`,
   
			text: "If you delete this, it will be gone forever.",

			icon: "warning",

			buttons: true,

			dangerMode: true,

        }).then((result) => {

			console.log(result);

        if (result) {

            form.submit();

            swal({
            position: 'top-end',
            icon: 'success',
            title: 'Deleted Successfully',

            timer: 1500
            })

        } else {
            
            swal({
            position: 'top-end',
            icon: 'success',
            title: 'Data is Safe.',
            timer: 1500
            })

        }
        });
        });



        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>