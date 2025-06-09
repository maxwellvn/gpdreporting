<!-- Contact Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    @vite(  ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
<main class="bg-white">
    <!-- Hero Section -->
    <section class="py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          Get in Touch
        </h1>
        <p class="text-xl text-gray-600 leading-relaxed">
          Have questions? We'd love to hear from you. Send us a message 
          and we'll respond as soon as possible.
        </p>
      </div>
    </section>
    
      <!-- Contact Form & Info -->
      <section class="py-20">
          <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid lg:grid-cols-2 gap-16">
              <!-- Contact Form -->
              <div>
              <h2 class="text-2xl font-bold text-gray-900 mb-8">Send us a message</h2>
              <form class="space-y-6">
                  <div class="grid md:grid-cols-2 gap-6">
                  <div>
                      <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                      <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  </div>
                  <div>
                      <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                      <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  </div>
                  </div>
                  <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                  <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  </div>
                  <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                  <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  </div>
                  <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                  <textarea rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                  </div>
                  <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                  Send Message
                  </button>
              </form>
              </div>
          
          <!-- Contact Info -->
          <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Contact Information</h2>
            <div class="space-y-8">
              <div class="flex items-start">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-2">Office</h3>
                  <p class="text-gray-600">123 Innovation Drive<br>San Francisco, CA 94105</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-2">Phone</h3>
                  <p class="text-gray-600">+1 (555) 123-4567</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <svg class="w-6 h-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
                  <p class="text-gray-600">hello@techstart.com</p>
                </div>
              </div>
            </div>
            
            <!-- Business Hours -->
            <div class="mt-12 p-6 bg-gray-50 rounded-2xl">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Business Hours</h3>
              <div class="space-y-2 text-sm">
                <div class="flex justify-between">
                  <span class="text-gray-600">Monday - Friday</span>
                  <span class="text-gray-900">9:00 AM - 6:00 PM</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">Saturday</span>
                  <span class="text-gray-900">10:00 AM - 4:00 PM</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">Sunday</span>
                  <span class="text-gray-900">Closed</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
</body>
@include('components.footer')
</html>