<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility Status</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Eligibility Status</h1>

        <form id="eligibility-form" class="bg-white p-4 rounded shadow">
            <div class="mb-4">
                <label for="player_id" class="block text-sm font-medium text-gray-700">Player ID</label>
                <input type="text" id="player_id" name="player_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Check Eligibility</button>
        </form>

        <div id="response" class="mt-4"></div>
    </div>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        
        function getHeaders() {
            const token = localStorage.getItem('token');
            return {
                'Authorization': token ? `Bearer ${token}` : '',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            };
        }

        async function fetchAPI(endpoint) {
            const response = await fetch(`${API_BASE}${endpoint}`, {
                headers: getHeaders()
            });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        async function checkEligibility(playerId) {
            try {
                const response = await fetchAPI(`/players/${playerId}/eligibility`);
                displayEligibilityResult(response);
            } catch (error) {
                console.error('Error checking eligibility:', error);
                document.getElementById('response').innerHTML = `
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Error</h3>
                                <div class="mt-2 text-sm text-red-700">
                                    <p>Failed to check eligibility. Please try again.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }
        }

        function displayEligibilityResult(result) {
            const responseDiv = document.getElementById('response');
            
            if (!result || !result.eligible) {
                responseDiv.innerHTML = `
                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-yellow-800">Eligibility Status</h3>
                                <div class="mt-2 text-sm text-yellow-700">
                                    <p><strong>Status:</strong> ${result.status || 'Not Eligible'}</p>
                                    <p><strong>Reason:</strong> ${result.reason || 'Academic requirements not met'}</p>
                                    <p><strong>GPA:</strong> ${result.gpa || 'N/A'}</p>
                                    <p><strong>Failed Subjects:</strong> ${result.failed_subjects || 'N/A'}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            } else {
                responseDiv.innerHTML = `
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-green-800">Eligibility Status</h3>
                                <div class="mt-2 text-sm text-green-700">
                                    <p><strong>Status:</strong> ${result.status || 'Eligible'}</p>
                                    <p><strong>Reason:</strong> ${result.reason || 'All requirements met'}</p>
                                    <p><strong>GPA:</strong> ${result.gpa || 'N/A'}</p>
                                    <p><strong>Failed Subjects:</strong> ${result.failed_subjects || '0'}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }
        }

        // Auto-load current user's eligibility if logged in
        async function loadCurrentUserEligibility() {
            try {
                const user = await fetchAPI('/current-user');
                if (user && user.id) {
                    // Try to get player data for current user
                    try {
                        const player = await fetchAPI(`/player/user/${user.id}`);
                        if (player && player.id) {
                            document.getElementById('player_id').value = player.id;
                            await checkEligibility(player.id);
                        }
                    } catch (e) {
                        console.log('Player data not found, user can manually check eligibility');
                    }
                }
            } catch (error) {
                console.log('User not logged in, manual input required');
            }
        }

        document.getElementById('eligibility-form').addEventListener('submit', async function (e) {
            e.preventDefault();
            const playerId = document.getElementById('player_id').value;
            if (playerId) {
                await checkEligibility(playerId);
            }
        });

        // Load current user eligibility on page load
        window.addEventListener('DOMContentLoaded', loadCurrentUserEligibility);
    </script>
</body>

</html>