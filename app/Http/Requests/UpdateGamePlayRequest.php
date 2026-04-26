<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGamePlayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'home_team_id' => 'sometimes|required|exists:teams,id',
            'away_team_id' => 'sometimes|required|exists:teams,id|different:home_team_id',
            'season_id' => 'sometimes|required|exists:seasons,id',
            'date' => 'sometimes|required|date|after_or_equal:today',
            'time' => 'sometimes|required|date_format:H:i',
            'location' => 'sometimes|required|string|max:255',
            'status' => 'nullable|string|in:scheduled,live,finished',
            'home_score' => 'nullable|integer|min:0',
            'away_score' => 'nullable|integer|min:0',
            'validated_by_admin' => 'nullable|boolean'
        ];
    }
}
