<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Started - TechStart</title>
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
                    Quick Setup Guide
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Get Started with <span class="text-blue-600">TechStart</span>
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Follow our simple step-by-step guide to set up your account and start building amazing things in minutes.
                </p>
            </div>
        </section>

        <!-- Quick Start Steps -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Three Simple Steps
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Get up and running with TechStart in less than 5 minutes
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-blue-600">1</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Create Your Account</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Sign up with your email address and verify your account to get started.
                        </p>
                        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                            Sign Up Now
                        </button>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-green-600">2</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Configure Your Setup</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Choose your preferences and customize your workspace to match your needs.
                        </p>
                        <button class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-200 transition-colors">
                            Learn More
                        </button>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Start Building</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Launch your first project and explore all the powerful features we offer.
                        </p>
                        <button class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-200 transition-colors">
                            View Tutorial
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed Setup Guide -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Detailed Setup Guide
                    </h2>
                    <p class="text-xl text-gray-600">
                        Everything you need to know to get the most out of TechStart
                    </p>
                </div>

                <div class="space-y-8">
                    <!-- Account Setup -->
                    <div class="bg-white rounded-2xl p-8 shadow-sm">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Account Setup</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Create your account with a valid email address
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Verify your email address
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Complete your profile information
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Set up two-factor authentication (recommended)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Workspace Configuration with more data-->
                    <div class="bg-white rounded-2xl p-8 shadow-sm">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Workspace Configuration</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Choose your preferred theme and layout
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Configure notification preferences
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Set up integrations with your favorite tools
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Invite team members and set permissions
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- First Project -->
                    <div class="bg-white rounded-2xl p-8 shadow-sm">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Create Your First Project</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Click "New Project" from your dashboard
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Choose a template or start from scratch
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Configure your project settings
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Deploy and share your project
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resources Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Helpful Resources
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Everything you need to succeed with TechStart
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Documentation -->
                    <div class="text-center p-6 rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Documentation</h3>
                        <p class="text-sm text-gray-600 mb-4">Comprehensive guides and API references</p>
                        <a href="/docs" class="text-blue-600 text-sm font-medium hover:text-blue-700">Read Docs →</a>
                    </div>

                    <!-- Video Tutorials -->
                    <div class="text-center p-6 rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h1m4 0h1m-6-8h1m4 0h1M9 6h6a2 2 0 012 2v8a2 2 0 01-2 2H9a2 2 0 01-2-2V8a2 2 0 012-2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Video Tutorials</h3>
                        <p class="text-sm text-gray-600 mb-4">Step-by-step video walkthroughs</p>
                        <a href="/tutorials" class="text-green-600 text-sm font-medium hover:text-green-700">Watch Videos →</a>
                    </div>

                    <!-- Community -->
                    <div class="text-center p-6 rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Community</h3>
                        <p class="text-sm text-gray-600 mb-4">Connect with other developers</p>
                        <a href="/community" class="text-purple-600 text-sm font-medium hover:text-purple-700">Join Community →</a>
                    </div>

                    <!-- Support -->
                    <div class="text-center p-6 rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 12l.01.01M12 12l.01.01M12 12l.01.01M12 12l.01.01M12 12V9m0 6v3" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">24/7 Support</h3>
                        <p class="text-sm text-gray-600 mb-4">Get help when you need it</p>
                        <a href="/support" class="text-orange-600 text-sm font-medium hover:text-orange-700">Get Support →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-xl text-gray-600">
                        Quick answers to common questions
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">How long does setup take?</h3>
                        <p class="text-gray-600">Most users complete the initial setup in under 5 minutes. The detailed configuration can be done gradually as you explore the platform.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Is there a free trial?</h3>
                        <p class="text-gray-600">Yes! We offer a 14-day free trial with full access to all features. No credit card required to get started.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can I import existing projects?</h3>
                        <p class="text-gray-600">Absolutely! We support importing from various platforms and formats. Check our documentation for specific import guides.</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What if I need help?</h3>
                        <p class="text-gray-600">Our support team is available 24/7 via chat, email, or phone. We also have extensive documentation and video tutorials.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-blue-600">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Ready to Get Started?
                </h2>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Join thousands of developers who are already building amazing things with TechStart.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-white text-blue-600 px-8 py-4 rounded-lg text-lg font-medium hover:bg-gray-50 transition-colors shadow-lg">
                        Start Free Trial
                    </button>
                    <button class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-medium hover:bg-white hover:text-blue-600 transition-colors">
                        Schedule Demo
                    </button>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>