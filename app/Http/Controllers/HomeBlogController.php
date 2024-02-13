<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContentResource;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    public function __invoke()
    {
        try {
            $contents = Content::where('status', 'published')->orderBy("id", "desc")->paginate(12);

            return ContentResource::collection($contents);
        } catch (\Exception $e) {
            return $this->apiExceptionResponse($e);
        }
    }
}
