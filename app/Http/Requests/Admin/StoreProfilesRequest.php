<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfilesRequest extends FormRequest
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
            'profile_picture' => 'nullable|mimes:png,jpg,jpeg,gif',
            'name' => 'min:4|max:30|required',
            'phone_number' => 'required|unique:profiles,phone_number,'.$this->route('profile'),
            'email' => 'email',
            'blood_group' => 'required',
            'status' => 'required',
            'last_donation' => 'required|date_format:'.config('app.date_format'),
            'location' => 'required',
        ];
    }
}
