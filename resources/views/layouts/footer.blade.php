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
                <x-footer-link :href="route('home')">
                    {{ __('Home') }}
                </x-footer-link>
                <x-footer-link :href="route('about')">
                    {{ __('About') }}
                </x-footer-link>
                <x-footer-link :href="route('contact')">
                    {{ __('Contact') }}
                </x-footer-link>
            </div>
        </div>
    </div>
</footer>