<?php
include '../inc/header.php';


?>
<main class="min-h-screen bg-gray-50 py-16 px-6">
  <div class="max-w-6xl mx-auto">
    <h1 class="text-4xl font-bold text-center mb-12">Latest Blog Posts</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      
      <!-- Blog Post 1 -->
      <article class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-2xl font-semibold mb-2">Getting Started with PHP & MySQL</h2>
        <p class="text-gray-600 text-sm mb-4">May 28, 2025 • 5 min read</p>
        <p class="text-gray-700 mb-4">
          A beginner’s guide to setting up your local server, creating a database, and connecting it with PHP.
        </p>
        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
      </article>

      <!-- Blog Post 2 -->
      <article class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-2xl font-semibold mb-2">Mastering Tailwind CSS Basics</h2>
        <p class="text-gray-600 text-sm mb-4">May 25, 2025 • 6 min read</p>
        <p class="text-gray-700 mb-4">
          Learn how to create fast, responsive layouts using Tailwind CSS utility classes with real examples.
        </p>
        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
      </article>

      <!-- Blog Post 3 -->
      <article class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-2xl font-semibold mb-2">Understanding the Admin Dashboard Flow</h2>
        <p class="text-gray-600 text-sm mb-4">May 20, 2025 • 4 min read</p>
        <p class="text-gray-700 mb-4">
          How to build and organize your admin panel using PHP, clean folder structures, and authentication logic.
        </p>
        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
      </article>

    </div>
  </div>
</main>

<?php include '../inc/footer.php' ?>