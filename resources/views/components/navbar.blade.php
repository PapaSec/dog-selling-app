<nav class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center">
        <div class="flex items-center gap-2 mr-8">
            <span class="text-xl font-bold text-gray-900 dark:text-white">🐶 DogApp</span>
        </div>
        <div class="flex-grow flex justify-center">
            <flux:navbar>
                <flux:navbar.item href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">Home</flux:navbar.item>
                <flux:navbar.item href="{{ route('dogs') }}" class="{{ request()->routeIs('dogs') ? 'text-blue-600 font-semibold' : '' }}">Dogs</flux:navbar.item>
                <flux:navbar.item href="#" class="{{ request()->is('about') ? 'text-blue-600 font-semibold' : '' }}">About</flux:navbar.item>
                <flux:navbar.item href="#" class="{{ request()->is('about') ? 'text-blue-600 font-semibold' : '' }}">Contact</flux:navbar.item>
            </flux:navbar>
        </div>
    </div>
</nav>