<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>My Portfolio</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900 font-sans">
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold text-indigo-600 cursor-pointer">MyPortfolio</h1>
      <nav class="hidden md:block">
        <ul class="flex space-x-8 text-gray-700 font-semibold">
          <li><a href="#about" class="hover:text-indigo-600 transition">About</a></li>
          <li><a href="#projects" class="hover:text-indigo-600 transition">Projects</a></li>
          <li><a href="#contact" class="hover:text-indigo-600 transition">Contact</a></li>
        </ul>
      </nav>
      <button id="menu-btn" class="md:hidden focus:outline-none">
        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" 
             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

    <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
      <ul class="flex flex-col p-4 space-y-3 text-gray-700 font-semibold">
        <li><a href="#about" class="hover:text-indigo-600 transition block">About</a></li>
        <li><a href="#projects" class="hover:text-indigo-600 transition block">Projects</a></li>
        <li><a href="#contact" class="hover:text-indigo-600 transition block">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="container mx-auto px-6 py-24 flex flex-col md:flex-row items-center md:space-x-20">
    <div class="md:w-1/2 space-y-6" data-aos="fade-right">
      <h2 class="text-5xl font-extrabold leading-tight text-indigo-700">Hi, I'm Ugly./</h2>
      <p class="text-lg text-gray-700 max-w-lg">
        I'm a passionate web developer specializing in modern, responsive websites and apps. 
        I create sleek, user-friendly digital experiences.
      </p>
      <a href="#projects" 
         class="inline-block bg-indigo-600 text-white px-8 py-4 rounded-md hover:bg-indigo-700 transition font-semibold shadow-lg">
         View My Work
      </a>
    </div>
    <div class="md:w-1/2 mt-12 md:mt-0" data-aos="fade-left">
      <img src="/me.png" alt="Foto" class="rounded-xl shadow-2xl max-w-full object-cover" />
    </div>
  </section>

  <section id="about" class="bg-white py-24">
    <div class="container mx-auto px-6 max-w-3xl text-center">
      <h3 class="text-4xl font-bold mb-8 text-indigo-700">About Me</h3>
      <p class="text-gray-700 leading-relaxed text-lg">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel libero eu turpis luctus convallis. Curabitur ut nibh in urna ullamcorper fermentum. 
        <br /><br />
        I love crafting clean and efficient code, and I'm always eager to learn new technologies and improve my skills.
      </p>
    </div>
  </section>

  <section id="projects" class="py-24 container mx-auto px-6 max-w-7xl">
    <h3 class="text-4xl font-bold mb-14 text-center text-indigo-700">Projects</h3>
    <div class="grid gap-12 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-indigo-400 transition-shadow duration-300">
        <img src="/project1.png" alt="Project 1" class="w-full object-cover h-56" />
        <div class="p-6">
          <h4 class="font-semibold text-2xl mb-2">Project One</h4>
          <p class="text-gray-700 mb-4">A brief description of this project.</p>
          <a href="#" class="text-indigo-600 font-semibold hover:underline">View Details</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-indigo-400 transition-shadow duration-300">
        <img src="/project2.png" alt="Project 2" class="w-full object-cover h-56" />
        <div class="p-6">
          <h4 class="font-semibold text-2xl mb-2">Project Two</h4>
          <p class="text-gray-700 mb-4">A brief description of this project.</p>
          <a href="#" class="text-indigo-600 font-semibold hover:underline">View Details</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-indigo-400 transition-shadow duration-300">
        <img src="/project3.png" alt="Project 3" class="w-full object-cover h-56" />
        <div class="p-6">
          <h4 class="font-semibold text-2xl mb-2">Project Three</h4>
          <p class="text-gray-700 mb-4">A brief description of this project.</p>
          <a href="#" class="text-indigo-600 font-semibold hover:underline">View Details</a>
        </div>
      </div>

    </div>
  </section>

  <section id="contact" class="bg-white py-24">
    <div class="container mx-auto px-6 max-w-3xl text-center">
      <h3 class="text-4xl font-bold mb-8 text-indigo-700">Contact Me</h3>
      <p class="mb-10 text-gray-700 text-lg">Feel free to reach out for collaborations or just a friendly hello 👋</p>
      <a href="mailto:your.email@example.com" 
         class="inline-block bg-indigo-600 text-white px-10 py-4 rounded-md hover:bg-indigo-700 transition font-semibold shadow-lg">
         Say Hello
      </a>
    </div>
  </section>

  <footer class="bg-gray-100 py-8 text-center text-gray-600 font-medium">
    &copy; 2025 Ugly./ All rights reserved.
  </footer>

  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    document.querySelectorAll('#mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });
  </script>
</body>
</html>
