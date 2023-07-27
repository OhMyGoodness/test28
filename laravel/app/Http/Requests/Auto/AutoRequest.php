<?php

namespace App\Http\Requests\Auto;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Class AutoRequest
 * @package Http\Requests\Auto
 */
class AutoRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'     => ['nullable', 'integer'],
            'mileage'  => ['nullable', 'integer'],
            'color'    => ['nullable', 'string', 'max:100'],
            'model_id' => ['required', 'integer'],
            'mark_id'  => ['required', 'integer']
        ];
    }

    /**
     * @param Validator $validator
     * @return HttpResponseException
     */
    public function failedValidation(Validator $validator): HttpResponseException
    {
        $errors = $validator->errors();

        $response = response()->json([
            'message' => 'Invalid data send',
            'details' => $errors->messages(),
        ], 422);

        throw new HttpResponseException($response);
    }
}
