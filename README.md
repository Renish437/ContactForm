#  Laravel Livewire Contact Form

This is a customizable contact form package for Laravel using Livewire. Easily publish views and components for user-side customization.

📬 Laravel Livewire Contact Form

A simple, reusable contact form package for Laravel using Livewire v3. Perfect for quickly adding a styled contact form to your Laravel projects.
🚀 Features

    🧩 Plug-and-play Livewire component

    🎨 Beautiful Tailwind CSS design

    📧 Email sending support

    🔒 Validation and CSRF protection

    ⚡ Uses Laravel component structure (no config needed)

📦 Installation

    composer require codewithren/contactform:dev-main --with-all-dependencies
   


If using a local path repo (monorepo or symlink):
Make sure your composer.json includes:

    "repositories": [
      {
        "type": "path",
        "url": "packages/codewithren/contactform",
        "options": {
          "symlink": true
        }
      }
    ]

🧠 Requirements

    PHP 8.2+

    Laravel 10/11/12

    Livewire 3+

    Sweetalert2

Install Sweetalert through composer and run our installer.

    composer require wavey/sweetalert && php artisan sweetalert:install

Include the Sweetalert2 javascript and then include our sweetalert 2 components.

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::sweetalert')

Include the scripts in your layout
     
    <script>
        window.addEventListener('alert', (event) => {
            var data = event.detail;
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
            var data = event.detail;
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


🛠 Usage

Include the Livewire component in your Blade file:

    <livewire:contact-form />

That's it! 🎉 The form includes fields for name, email, and message.
📨 Email Support

To enable email notifications, configure your Mailable in the package or override the email logic using events or extending the component.
🧾 Publish Views (Optional)

If you want to customize email address:

    php artisan vendor:publish --tag=contactform-config

The views will be published to:

resources/views/vendor/contactform/

🗃️ Migrations

The package automatically loads its own migrations.

To run them:

    php artisan migrate

To publish the resources views and livewire component file

    php artisan vendor:publish --tag=contactform-views
    php artisan vendor:publish --tag=contactform-livewire

✅ Validation Rules

The component validates the following:

    name: required, string

    email: required, valid email

    message: required, min:10

You can customize these by publishing and editing the component.
🧪 Example Form Output

🙋‍♂️ Maintainer

Renish Siwakoti
GitHub: @Renish437
📄 License

This package is open-sourced under the MIT license.