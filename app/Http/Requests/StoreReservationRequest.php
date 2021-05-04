<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'client_id' => ['required'],
            'car_id' => ['required'],
            'from_date' => ['required', 'date'],
            'to_date' => ['required', 'date'],
            'start_location_id' => ['required'],
            'end_location_id' => ['required'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
