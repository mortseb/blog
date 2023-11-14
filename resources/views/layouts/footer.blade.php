<footer class="bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
            </div>

            <!-- Footer Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <a href="route('home')">
                    {{ __('Home') }}
                </a>
                <a href="route('about')">
                    {{ __('About') }}
                </a>
                <a href="route('contact')">
                    {{ __('Contact') }}
                </a>
            </div>
        </div>
    </div>
</footer>