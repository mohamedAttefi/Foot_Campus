@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-schedule'])

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Team Schedule</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Add Match
        </button>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold text-gray-800">Upcoming Matches</h2>
                <div class="flex space-x-4">
                    <select class="border rounded px-3 py-2">
                        <option>All Months</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    <select class="border rounded px-3 py-2">
                        <option>All Types</option>
                        <option>League</option>
                        <option>Cup</option>
                        <option>Friendly</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="space-y-4">
                <div class="border rounded-lg p-4 hover:bg-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs mr-2">League</span>
                                <h3 class="text-lg font-semibold">vs Team Alpha</h3>
                            </div>
                            <div class="flex items-center text-sm text-gray-600 space-x-4">
                                <span>📅 October 20, 2026</span>
                                <span>🕒 3:00 PM</span>
                                <span>📍 Home Stadium</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">Upcoming</span>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg p-4 hover:bg-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs mr-2">Cup</span>
                                <h3 class="text-lg font-semibold">vs Team Beta</h3>
                            </div>
                            <div class="flex items-center text-sm text-gray-600 space-x-4">
                                <span>📅 October 25, 2026</span>
                                <span>🕒 5:00 PM</span>
                                <span>📍 Away Stadium</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">Upcoming</span>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg p-4 hover:bg-gray-50 opacity-75">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs mr-2">Friendly</span>
                                <h3 class="text-lg font-semibold">vs Team Gamma</h3>
                            </div>
                            <div class="flex items-center text-sm text-gray-600 space-x-4">
                                <span>📅 October 15, 2026</span>
                                <span>🕒 2:00 PM</span>
                                <span>📍 Home Stadium</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center">
                                <span class="text-2xl font-bold text-green-600 mr-2">3-1</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Won</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Training Schedule</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                    <div>
                        <p class="font-medium">Morning Training</p>
                        <p class="text-sm text-gray-600">Field work and conditioning</p>
                    </div>
                    <span class="text-sm text-gray-600">Mon, Wed, Fri - 6:00 AM</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                    <div>
                        <p class="font-medium">Evening Training</p>
                        <p class="text-sm text-gray-600">Tactical drills</p>
                    </div>
                    <span class="text-sm text-gray-600">Tue, Thu - 4:00 PM</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Important Dates</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-blue-50 rounded">
                    <div>
                        <p class="font-medium">Team Meeting</p>
                        <p class="text-sm text-gray-600">Strategy discussion</p>
                    </div>
                    <span class="text-sm text-blue-600">Oct 18 - 10:00 AM</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-red-50 rounded">
                    <div>
                        <p class="font-medium">Academic Check</p>
                        <p class="text-sm text-gray-600">Eligibility review</p>
                    </div>
                    <span class="text-sm text-red-600">Oct 22 - 2:00 PM</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
