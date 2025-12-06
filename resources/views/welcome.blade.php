<x-layouts.layout :showSidebar='false'>
    <x-slot:title>
        Home
    </x-slot:title>
    <section class="min-h-screen flex items-center justify-center px-6">
        <div class="text-center max-w-2xl">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-100 mb-4">
                Welcome to JobMaster
            </h1>

            <p class="text-lg md:text-xl text-gray-300 mb-8">
                Manage your tasks, track progress, and streamline your workflow—all in one place.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/dashboard"
                    class="px-6 py-3 bg-[#FD6F00] text-gray-100 rounded-lg shadow hover:bg-orange-600 transition">
                    Go to Dashboard
                </a>

            </div>
        </div>
    </section>
</x-layouts.layout>
