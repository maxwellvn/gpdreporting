<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
<main class="bg-white">
    <!-- Hero Section -->
    <section class="py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          About TechStart
        </h1>
        <p class="text-xl text-gray-600 leading-relaxed">
          We're on a mission to democratize technology and empower businesses 
          to achieve their full potential through innovative solutions.
        </p>
      </div>
    </section>
    
    <!-- Story Section -->
    <section class="py-20">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
              Founded in 2020, TechStart began as a simple idea: technology should 
              be accessible, powerful, and human-centered. What started as a small 
              team of passionate developers has grown into a global company serving 
              thousands of businesses worldwide.
            </p>
            <p class="text-gray-600 leading-relaxed">
              Today, we continue to push the boundaries of what's possible, 
              building tools that not only solve problems but inspire innovation 
              and creativity in everything our users do.
            </p>
          </div>
          <div class="bg-gray-100 rounded-2xl h-96 flex items-center justify-center">
            <span class="text-gray-400 text-lg">Image Placeholder</span>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Values Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Values</h2>
          <p class="text-xl text-gray-600">The principles that guide everything we do</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-2xl">
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Innovation First</h3>
            <p class="text-gray-600">We constantly push boundaries and challenge the status quo to create breakthrough solutions.</p>
          </div>
          <div class="bg-white p-8 rounded-2xl">
            <h3 class="text-xl font-semibold text-gray-900 mb-4">User-Centric</h3>
            <p class="text-gray-600">Every decision we make is guided by what's best for our users and their success.</p>
          </div>
          <div class="bg-white p-8 rounded-2xl">
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Transparency</h3>
            <p class="text-gray-600">We believe in open communication and honest relationships with our community.</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Team Section -->
    <section class="py-20">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
          <p class="text-xl text-gray-600">The brilliant minds behind TechStart</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
          <div class="text-center">
            <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-6"></div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Sarah Johnson</h3>
            <p class="text-blue-600 mb-3">CEO & Founder</p>
            <p class="text-gray-600 text-sm">Former VP at Google, passionate about building products that matter.</p>
          </div>
          <div class="text-center">
            <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-6"></div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Mike Chen</h3>
            <p class="text-blue-600 mb-3">CTO</p>
            <p class="text-gray-600 text-sm">Tech visionary with 15+ years building scalable systems.</p>
          </div>
          <div class="text-center">
            <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-6"></div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Emily Rodriguez</h3>
            <p class="text-blue-600 mb-3">Head of Design</p>
            <p class="text-gray-600 text-sm">Award-winning designer focused on human-centered experiences.</p>
          </div>
        </div>
      </div>
    </section>
    @include('components.footer')
  </main>
</body>
</html>