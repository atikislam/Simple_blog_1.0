<?php
include '../inc/header.php';


?>
<main class="bg-gray-50 text-gray-800">

  <!-- Profile Header Section -->
  <section class="bg-white py-20 shadow-md">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
      <div class="md:w-1/3 mb-6 md:mb-0">
        <img src="assets/images/Atik-islam.jpg" alt="Md Atikul Islam" class="rounded-full shadow-lg w-60 h-60 mx-auto object-cover">
      </div>
      <div class="md:w-2/3 text-center md:text-left md:pl-10">
        <h1 class="text-4xl font-bold text-gray-900 mb-2">Md Atikul Islam</h1>
        <h2 class="text-xl text-blue-600 mb-4">Web Developer & WordPress Expert</h2>
        <p class="text-gray-600 leading-relaxed max-w-xl">
          I'm a passionate web developer who loves building clean, functional websites and solving coding problems. With expertise in PHP, MySQL, and WordPress, I help bring digital ideas to life.
        </p>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">What I Do</h2>
      <div class="grid md:grid-cols-3 gap-8">

        <!-- Skill Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2">Web Development</h3>
          <p class="text-gray-600">Building responsive, secure, and performance-optimized websites using PHP, MySQL, JavaScript, and Tailwind CSS.</p>
        </div>

        <!-- Skill Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2">WordPress Customization</h3>
          <p class="text-gray-600">Creating custom themes, plugins, and full WordPress websites for businesses and bloggers.</p>
        </div>

        <!-- Skill Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2">Problem Solving</h3>
          <p class="text-gray-600">Solving programming challenges regularly to improve logical thinking and clean coding skills.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Fun Section (Optional) -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-6">A Little More About Me</h2>
      <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
        When I'm not coding, I enjoy reading tech blogs, learning new frameworks, or participating in programming contests. I’m always excited to learn, build, and share knowledge with others through this blog.
      </p>
    </div>
  </section>

  <!-- Contact CTA -->
  <section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-2xl font-semibold mb-4">Let’s Work Together</h2>
      <p class="mb-6">Need a developer or want to collaborate on something cool? Let’s get in touch.</p>
      <a href="contact.php" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
        Contact Me
      </a>
    </div>
  </section>

</main>

<?php include '../inc/footer.php' ?>