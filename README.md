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

🛠 Usage

Include the Livewire component in your Blade file:

<livewire:contact-form />

That's it! 🎉 The form includes fields for name, email, and message.
📨 Email Support

To enable email notifications, configure your Mailable in the package or override the email logic using events or extending the component.
🧾 Publish Views (Optional)

If you want to customize the form view:

php artisan vendor:publish --tag=contactform-config

The views will be published to:

resources/views/vendor/contactform/

🗃️ Migrations

The package automatically loads its own migrations.

To run them:

php artisan migrate

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