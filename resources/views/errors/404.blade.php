<x-layouts.layout :showSidebar="false">
    <x-slot:title>Page Not Found</x-slot:title>

    <div class="flex flex-col items-center justify-center min-h-screen text-center">
        <h1 class="text-9xl font-bold text-orange-600 mb-4">404</h1>
        <h2 class="text-3xl font-semibold mb-2">Oops! Page not found</h2>
        <p class="text-gray-300 mb-6">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <a href="/dashboard"
            class="inline-block px-6 py-3 bg-[#FD6F00] text-gray-900 rounded-lg font-semibold shadow hover:bg-orange-600 transition">
            Go to Dashboard
        </a>
    </div>
</x-layouts.layout>
