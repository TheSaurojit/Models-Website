<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  </head>
  <body>
    <div class="min-h-screen">
        

        <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg">
                <div class="max-w-3xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Contact Us</h1>
                        <p class="mt-4 text-lg text-gray-500">Have questions? We're here to help!</p>
                    </div>
                    <div class="mt-12">
                        <!-- Success Message Container (Hidden by Default) -->
<div id="success-message" class="hidden p-4 mb-4 text-green-800 bg-green-100 border border-green-400 rounded-lg">Successfull</div>

<form id="contact-form" action="/contact-us" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
    <?php echo csrf_field(); ?>
    <div>
        <label class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" required class="mt-1 pl-3 border block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    
    <div class="sm:col-span-2">
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" required class="mt-1 pl-3 border block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    
    <div class="sm:col-span-2">
        <label class="block text-sm font-medium text-gray-700">Message</label>
        <textarea rows="4" name="message" required class="mt-1 pl-3 border block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
    </div>
    
    <div class="sm:col-span-2">
        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Send Message
        </button>
    </div>
</form>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.querySelector("#contact-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission
        
            let csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
            if (!csrfTokenElement) {
                console.error("CSRF token meta tag not found!");
                return;
            }
        
            let formData = {
                name: document.querySelector('input[name="name"]').value,
                email: document.querySelector('input[name="email"]').value,
                message: document.querySelector('textarea[name="message"]').value
            };
        
            fetch('/contact-us', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfTokenElement.getAttribute('content')
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                console.log(data); // Debugging - Check if we get the response
        
                if (data.status === "success") { // Ensure response has a success status
                    let successMessage = document.getElementById("success-message");
                    successMessage.innerText = 'Successfull'; // Set success message text
                    successMessage.classList.remove("hidden"); // Show success message
                    successMessage.classList.add("flex", "items-center", "justify-between");
        
                    // Optionally clear the form
                    document.querySelector("#contact-form").reset();
        
                    // Hide message after 5 seconds
                    setTimeout(() => {
                        successMessage.classList.add("hidden");
                    }, 5000);
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
        });
        </script>
        
        
        
        
  </body>
</html><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/pages/contact.blade.php ENDPATH**/ ?>