// 예제 7-17 폼 요청 객체

<?php

namespace App\Http\Requests;

use App\Models\BlogPost;
use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
{
    public function authorize()
    {
        $blogPostId = $this->route('blogPost');
        
        return auth()->check() && BlogPost::where('id', $blogPostId)
            ->where('user_id', auth()->id())->exists();
    }

    public function rules()
    {
        return [
            'body' => 'required|max:1000',
        ];
    }
}
