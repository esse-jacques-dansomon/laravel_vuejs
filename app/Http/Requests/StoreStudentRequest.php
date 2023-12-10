<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
//        $table->string('name', 100);
//        $table->string('email', 150);
//        $table->enum('sex', ['M', 'F'] );
//        $table->string('sex')->nullable();
//        $table->dateTime('birth_date')->nullable();
//        $table->string('birth_city', 100)->nullable();
        return [
            "name" => ['required', 'string', 'max:100'],
            "email" => [],
            "sex" => [],
            "birth_date" => [],
            "birth_city" => [],
        ];
    }
}
