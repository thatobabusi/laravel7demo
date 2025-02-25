<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreBlogPostRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {

        return [
            'user_id'                   => ['required'], //user is going to be author of the blog post
            'blog_post_category_id'     => ['required'],
            'blog_post_status_id'       => ['required'],
            'upload'                    => ['required'],
            'title'                     => ['required'],
            'slug '                     => [''], //TODO::check why these dont return valid when actually filled in
            'summary '                  => [''], //TODO::check why these dont return valid when actually filled in
            'body  '                    => [''], //TODO::check why these dont return valid when actually filled in
        ];
    }
}
