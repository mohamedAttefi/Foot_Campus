@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-team'])

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Team Management</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Add Player
        </button>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold text-gray-800">Current Squad</h2>
                <div class="flex space-x-4">
                    <input type="text" placeholder="Search players..." class="border rounded px-3 py-2">
                    <select class="border rounded px-3 py-2">
                        <option>All Positions</option>
                        <option>Goalkeeper</option>
                        <option>Defender</option>
                        <option>Midfielder</option>
                        <option>Forward</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="p-6">
            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="text-left py-3 px-4">Player</th>
                        <th class="text-left py-3 px-4">Position</th>
                        <th class="text-left py-3 px-4">Age</th>
                        <th class="text-left py-3 px-4">Status</th>
                        <th class="text-left py-3 px-4">Academic</th>
                        <th class="text-left py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-500 rounded-full mr-3"></div>
                                <div>
                                    <p class="font-semibold">John Doe</p>
                                    <p class="text-sm text-gray-600">#10</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-4">Forward</td>
                        <td class="py-3 px-4">19</td>
                        <td class="py-3 px-4">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Active</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Eligible</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">Edit</button>
                            <button class="text-red-600 hover:text-red-800">Remove</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-500 rounded-full mr-3"></div>
                                <div>
                                    <p class="font-semibold">Jane Smith</p>
                                    <p class="text-sm text-gray-600">#5</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-4">Midfielder</td>
                        <td class="py-3 px-4">20</td>
                        <td class="py-3 px-4">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Injured</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Eligible</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">Edit</button>
                            <button class="text-red-600 hover:text-red-800">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
