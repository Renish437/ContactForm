<div>
    <form class="max-w-md mx-auto mt-12" wire:submit.prevent="submitContactForm">
        <h1 class="text-2xl font-semibold my-3">Contact Form</h1>

        <!-- Name -->
        <div class="mb-6">
            <label class="text-sm font-medium text-gray-600">Name</label>
            <input type="text" wire:model.defer="name" class="w-full h-11 border border-gray-300 rounded-full px-5" placeholder="Name">
            @error('name') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <!-- Email -->
        <div class="mb-6">
            <label class="text-sm font-medium text-gray-600">Email</label>
            <input type="text" wire:model.defer="email" class="w-full h-11 border border-gray-300 rounded-full px-5" placeholder="name@example.com">
            @error('email') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <!-- Message -->
        <div class="mb-6">
            <label class="text-sm font-medium text-gray-600">Message</label>
            <textarea wire:model.defer="message" class="w-full h-40 border border-gray-300 rounded-2xl px-4 py-2.5" placeholder="Write your message..."></textarea>
            @error('message') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="w-full h-12 bg-indigo-600 hover:bg-indigo-800 text-white rounded-sm font-semibold">
            <span wire:loading wire:target="submitContactForm">Sending...</span>
            <span wire:loading.remove  wire:target="submitContactForm" >Send Message</span></button>
    </form>
</div>
