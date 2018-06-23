<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogsRequest extends FormRequest
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
            'blog_picture' => 'mimes:png,jpg,jpeg,gif|required',
            'head_line' => 'required|unique:blogs,head_line,'.$this->route('blog'),
            'post' => 'required',
        ];
    }
}
