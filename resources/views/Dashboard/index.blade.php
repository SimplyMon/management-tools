<x-layouts.layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-gray-800 rounded-xl shadow-lg p-6 flex flex-col">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-100">Today's Tasks</h2>
                <i class="fas fa-tasks text-gray-400"></i>
            </div>
            <ul class="space-y-2 text-gray-300">
                <li class="flex justify-between items-center">
                    Task 1
                    <span class="px-2 py-1 text-xs rounded-full bg-green-500 text-black">Completed</span>
                </li>
                <li class="flex justify-between items-center">
                    Task 2
                    <span class="px-2 py-1 text-xs rounded-full bg-yellow-500 text-black">Pending</span>
                </li>
                <li class="flex justify-between items-center">
                    Task 3
                    <span class="px-2 py-1 text-xs rounded-full bg-red-500 text-black">Overdue</span>
                </li>
            </ul>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg p-6 flex flex-col">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-100">Upcoming Deadlines</h2>
                <i class="fas fa-calendar-alt text-gray-400"></i>
            </div>
            <ul class="space-y-2 text-gray-300">
                <li>Project Alpha - <span class="text-orange-400">Dec 10</span></li>
                <li>Task Beta - <span class="text-orange-400">Dec 12</span></li>
                <li>Project Gamma - <span class="text-orange-400">Dec 15</span></li>
            </ul>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg p-6 flex flex-col items-center justify-center">
            <h2 class="text-lg font-semibold text-gray-100 mb-4">Completed Tasks</h2>
            <p class="text-3xl font-bold text-green-400">12</p>
            <p class="text-gray-300 text-sm mt-1">Tasks completed today</p>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg p-6 flex flex-col items-center justify-center">
            <h2 class="text-lg font-semibold text-gray-100 mb-4">Work Hours</h2>
            <p class="text-3xl font-bold text-blue-400">6h 30m</p>
            <p class="text-gray-300 text-sm mt-1">Today</p>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg p-6">
            <h2 class="text-lg font-semibold text-gray-100 mb-4 flex justify-between items-center">
                Project Progress
                <i class="fas fa-project-diagram text-gray-400"></i>
            </h2>
            <div class="mb-3">
                <p class="text-gray-300 text-sm mb-1">Project Alpha</p>
                <div class="w-full bg-gray-700 rounded-full h-3">
                    <div class="bg-[#FD6F00] h-3 rounded-full w-3/4 transition-all"></div>
                </div>
            </div>
            <div class="mb-3">
                <p class="text-gray-300 text-sm mb-1">Project Beta</p>
                <div class="w-full bg-gray-700 rounded-full h-3">
                    <div class="bg-[#FD6F00] h-3 rounded-full w-1/2 transition-all"></div>
                </div>
            </div>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg p-6 col-span-1 md:col-span-2 lg:col-span-3">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-100">Quick Notes</h2>
                <i class="fas fa-sticky-note text-gray-400"></i>
            </div>
            <ul class="space-y-2 text-gray-300">
                <li>Note 1: Review project proposal</li>
                <li>Note 2: Schedule team meeting</li>
                <li>Note 3: Prepare monthly report</li>
            </ul>
        </div>
    </div>
</x-layouts.layout>
