@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-stats'])

@section('content')
<div class="p-8">
    <h1 class="text-3xl font-bold text-gray-900 mb-8">Player Statistics</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Performance Overview</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center">
                        <p class="text-3xl font-bold text-blue-600">12</p>
                        <p class="text-sm text-gray-600">Goals</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-green-600">8</p>
                        <p class="text-sm text-gray-600">Assists</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-purple-600">24</p>
                        <p class="text-sm text-gray-600">Matches</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-orange-600">85%</p>
                        <p class="text-sm text-gray-600">Pass Accuracy</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Match Statistics</h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Date</th>
                                <th class="text-left py-2">Opponent</th>
                                <th class="text-left py-2">Goals</th>
                                <th class="text-left py-2">Assists</th>
                                <th class="text-left py-2">Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Oct 15</td>
                                <td class="py-2">Team A</td>
                                <td class="py-2">2</td>
                                <td class="py-2">1</td>
                                <td class="py-2">8.5</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Oct 8</td>
                                <td class="py-2">Team B</td>
                                <td class="py-2">0</td>
                                <td class="py-2">2</td>
                                <td class="py-2">7.8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Physical Stats</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium">Speed</span>
                            <span class="text-sm">92%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium">Stamina</span>
                            <span class="text-sm">88%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 88%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium">Strength</span>
                            <span class="text-sm">85%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Academic Status</h2>
                <div class="text-center">
                    <p class="text-3xl font-bold text-green-600 mb-2">3.8 GPA</p>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Eligible</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
