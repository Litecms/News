<?php

namespace Litecms\News\Http\Requests;

use App\Http\Requests\Request as FormRequest;
use Illuminate\Http\Request;

class NewsUserApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        $news = $this->route('news');

        if (is_null($news)) {
            // Determine if the user is authorized to access news module,
            return $request->user('api')->canDo('news.news.view');
        }

        if ($request->isMethod('POST') || $request->is('*/create')) {
            // Determine if the user is authorized to create an entry,
            return $request->user('api')->can('create', $news);
        }

        if ($request->isMethod('PUT') || $request->isMethod('PATCH') || $request->is('*/edit')) {
            // Determine if the user is authorized to update an entry,
            return $request->user('api')->can('update', $news);
        }

        if ($request->isMethod('DELETE')) {
            // Determine if the user is authorized to delete an entry,
            return $request->user('api')->can('delete', $news);
        }

        // Determine if the user is authorized to view the module.
        return $request->user('api')->can('view', $news);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {

        if ($request->isMethod('POST')) {
            // validation rule for create request.
            return [

            ];
        }

        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            // Validation rule for update request.
            return [

            ];
        }

        // Default validation rule.
        return [

        ];
    }

}
