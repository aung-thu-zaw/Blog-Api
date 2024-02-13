<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;

class BlogResourcesController extends Controller
{
    public function __invoke()
    {
        try {
            $categories = Category::select("id", "name", "slug")->withCount('contents')->get();

            $tags = Tag::select("id", "name")->get();

            return response()->json([
                'categories' => $categories,
                'tags' => $tags
            ], 200);

        } catch (\Exception $e) {
            return $this->apiExceptionResponse($e);
        }
    }
}
