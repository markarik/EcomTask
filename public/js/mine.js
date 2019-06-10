       window.onscroll = function(){myFunction()};
       var navbar = document.getElementById('navbars');
   
       var sticky = navbar.offsetTop;
   
       function myFunction(){
         if(window.pageYOffset >= sticky){
           navbar.classList.add("sticky");
         }
         else{
           navbar.classList.remove("sticky");
         }
       }

       // form validation
       (function () {
           'use strict'

           window.addEventListener('load', function () {
               // Fetch all the forms we want to apply custom Bootstrap validation styles to
               var forms = document.getElementsByClassName('needs-validation')

               // Loop over them and prevent submission
               Array.prototype.filter.call(forms, function (form) {
                   form.addEventListener('submit', function (event) {
                       if (form.checkValidity() === false) {
                           event.preventDefault()
                           event.stopPropagation()
                       }
                       form.classList.add('was-validated')
                   }, false)
               })
           }, false)
       }())