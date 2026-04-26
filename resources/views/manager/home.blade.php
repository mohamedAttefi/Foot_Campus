@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-dashboard'])

@section('content')
<div class="p-8">
    <h1 class="text-3xl font-bold text-gray-900 mb-8">Manager Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Players</h3>
            <p class="text-3xl font-bold text-blue-600">24</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Upcoming Matches</h3>
            <p class="text-3xl font-bold text-green-600">3</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Team Performance</h3>
            <p class="text-3xl font-bold text-purple-600">85%</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Academic Eligibility</h3>
            <p class="text-3xl font-bold text-orange-600">92%</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Matches</h2>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 bg-gray-50 rounded">
                    <div>
                        <p class="font-semibold">Team A vs Team B</p>
                        <p class="text-sm text-gray-600">Yesterday, 3:00 PM</p>
                    </div>
                    <span class="text-green-600 font-bold">2-1</span>
                </div>
                <div class="flex justify-between items-center p-4 bg-gray-50 rounded">
                    <div>
                        <p class="font-semibold">Team C vs Team D</p>
                        <p class="text-sm text-gray-600">2 days ago, 5:00 PM</p>
                    </div>
                    <span class="text-red-600 font-bold">0-3</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Team Activities</h2>
            <div class="space-y-4">
                <div class="flex items-center p-4 bg-gray-50 rounded">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                    <div>
                        <p class="font-semibold">Training Session</p>
                        <p class="text-sm text-gray-600">Today, 4:00 PM</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-gray-50 rounded">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                    <div>
                        <p class="font-semibold">Team Meeting</p>
                        <p class="text-sm text-gray-600">Tomorrow, 10:00 AM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
