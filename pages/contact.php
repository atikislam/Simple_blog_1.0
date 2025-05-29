<?php
include '../inc/header.php';


?>
<main class="min-h-screen bg-gray-50 px-6 py-16">
  <div class="max-w-3xl mx-auto bg-white p-10 rounded-xl shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-center">Contact Me</h1>
    <p class="text-gray-600 mb-10 text-center">Have a question or want to work together? Fill out the form below.</p>

    <form action="#" method="POST" class="space-y-6">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" id="name" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>
      <div>
        <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
        <textarea id="message" name="message" rows="5" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Send Message</button>
      </div>
    </form>
  </div>
</main>

<?php include '../inc/footer.php' ?>