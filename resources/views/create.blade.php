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
     @livewireStyles
     {{-- @if(Session::has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ Session::get('success') }}</span>
        </div>
        @endif --}}

        <div id="contactForm" class="bg-green-100 border hidden border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ Session::get('success') }}</span>
        </div>
    
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
   </script>

</body>
</html>