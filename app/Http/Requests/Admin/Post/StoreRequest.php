<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Post;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'Це поле необхідне для заповнення',
            'content.string' => 'Це поле має бути строкою',
            'title.required' => 'Це поле необхідне для заповнення',
            'title.string' => 'Це поле має бути строкою',
            'preview_image.required' => 'Це поле необхідне для заповнення',
            'preview_image.file' => 'Необхідно вибрати файл',
            'main_image.required' => 'Це поле необхідне для заповнення',
            'main_image.file' => 'Необхідно вибрати файл',
            'category_id.required' => 'Це поле необхідне для заповнення',
            'category_id.integer' => 'Категорія повинна бути числом',
            'category_id.exist' => 'Категорія повинна існувати',
            'tag_ids.array' => 'Необхідно відправити масив даних',


        ];
    }
}
