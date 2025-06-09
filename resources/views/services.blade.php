<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services - TechStart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')

    <main class="bg-white">
        <!-- Hero Section -->
        <section class="py-20 lg:py-32 bg-gradient-to-br from-blue-50 to-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium mb-8">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    Professional Solutions
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Our <span class="text-blue-600">Services</span>
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Comprehensive technology solutions designed to accelerate your business growth and digital transformation.
                </p>
            </div>
        </section>

        <!-- Services Overview -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        What We Offer
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        End-to-end technology services to power your digital journey
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Development Services -->
                    <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Development</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Custom web and mobile applications built with cutting-edge technologies and best practices.
                        </p>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li>• Web Applications</li>
                            <li>• Mobile Apps</li>
                            <li>• API Development</li>
                            <li>• E-commerce Solutions</li>
                        </ul>
                    </div>

                    <!-- Cloud Services -->
                    <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Cloud Solutions</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Scalable cloud infrastructure and migration services to optimize your operations.
                        </p>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li>• Cloud Migration</li>
                            <li>• Infrastructure Setup</li>
                            <li>• DevOps & CI/CD</li>
                            <li>• Security & Monitoring</li>
                        </ul>
                    </div>

                    <!-- Consulting -->
                    <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Consulting</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Strategic technology consulting to guide your digital transformation journey.
                        </p>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li>• Digital Strategy</li>
                            <li>• Technology Audit</li>
                            <li>• Architecture Design</li>
                            <li>• Process Optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed Services -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Detailed Services
                    </h2>
                    <p class="text-xl text-gray-600">
                        Comprehensive solutions tailored to your specific needs
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- Web Development -->
                    <div class="bg-white rounded-2xl p-8 shadow-sm">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-6">
                                <svg class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Web Development</h3>
                                <p class="text-gray-600 mb-4">
                                    Modern, responsive websites and web applications built with the latest technologies.
                                </p>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        React, Vue.js, Angular applications
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Laravel, Node.js, Python backends
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Progressive Web Apps (PWA)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>