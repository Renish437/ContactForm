<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>
  @include('sweetalert::sweetalert')
  @include('contactform::contactform')

     @livewireStyles
     
      
    
          @livewire('contact-form')
     

       @livewireScripts

   <script>
       window.addEventListener('alert', (event) => {
       var data= event.detail;
       console.log(data);
Swal.fire({
  title: "Success",
  text: data.message,
  icon: "success",
  toast: true,
  position: "top-end",
  showCloseButton: true,
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  customClass: {
    popup: 'rounded-xl shadow-md text-sm bg-white',
    title: 'font-semibold text-gray-800',
    closeButton: 'text-gray-500 hover:text-red-500',
  },
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
       });
       window.addEventListener('alert-error', (event) => {
       var data= event.detail;
       console.log(data);
Swal.fire({
  title: "Error",
  text: data.message,
  icon: "error",
  toast: true,
  position: "top-end",
  showCloseButton: true,
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  customClass: {
    popup: 'rounded-xl shadow-md text-sm bg-white',
    title: 'font-semibold text-gray-800',
    closeButton: 'text-gray-500 hover:text-red-500',
  },
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
       });
   </script>

</body>
</html>