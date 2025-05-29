<?php
include './inc/header.php';


?>
<!-- Main Content Starts Here -->
<main class="bg-white text-gray-800">

  <!-- Hero Section -->
  <section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Simple Blog</h1>
      <p class="text-lg text-gray-600 mb-6">Your daily dose of tech insights, tutorials, and ideas</p>
      <a href="blog.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
        Browse Blog
      </a>
    </div>
  </section>

  <!-- About / Intro Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
      <img src="assets/images/blog-illustration.svg" alt="Blog Illustration" class="w-full max-w-md mx-auto">
      <div>
        <h2 class="text-3xl font-bold mb-4">About Simple Blog</h2>
        <p class="text-gray-600 leading-relaxed mb-4">
          Simple Blog is a lightweight, clean, and minimalistic blogging platform where you can find articles on programming, web development, and personal productivity.
        </p>
        <p class="text-gray-600 leading-relaxed">
          Whether you're a beginner or experienced developer, you'll find something useful here.
        </p>
      </div>
    </div>
  </section>

  <!-- Latest Blog Posts -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-10">Latest Posts</h2>

      <div class="grid md:grid-cols-3 gap-8">
        <!-- Post 1 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-6 text-left">
          <h3 class="text-xl font-semibold mb-2">Getting Started with PHP</h3>
          <p class="text-gray-600 text-sm mb-4">Learn the basics of PHP for backend development in this beginner-friendly guide.</p>
          <a href="blog.php?post=1" class="text-blue-600 hover:underline">Read more</a>
        </div>

        <!-- Post 2 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-6 text-left">
          <h3 class="text-xl font-semibold mb-2">Tailwind CSS Tips & Tricks</h3>
          <p class="text-gray-600 text-sm mb-4">Improve your frontend design workflow with these handy Tailwind utilities.</p>
          <a href="blog.php?post=2" class="text-blue-600 hover:underline">Read more</a>
        </div>

        <!-- Post 3 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-6 text-left">
          <h3 class="text-xl font-semibold mb-2">Understanding MySQL Joins</h3>
          <p class="text-gray-600 text-sm mb-4">A practical guide to using INNER JOIN, LEFT JOIN, and more in MySQL.</p>
          <a href="blog.php?post=3" class="text-blue-600 hover:underline">Read more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-16 bg-blue-600 text-white text-center">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-4">Want to stay updated?</h2>
      <p class="mb-6">Subscribe to our newsletter to get the latest articles straight to your inbox.</p>
      <a href="contact.php" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
        Contact Us
      </a>
    </div>
  </section>

</main>


<?php include './inc/footer.php' ?>