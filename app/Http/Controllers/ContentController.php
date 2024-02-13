<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContentResource;
use App\Models\Comment;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        try {
            $contents = Content::filterBy(request(['search', 'category', 'tag']))
                ->where('status', 'published')
                ->sortBy(request('sort', 'latest'))
                ->paginate(12)
                ->withQueryString();

            return ContentResource::collection($contents);
        } catch (\Exception $e) {
            return $this->apiExceptionResponse($e);
        }
    }

    public function show(Content $content)
    {
        try {
            $content->load(['author:id,name', 'category:id,name', 'tags:id,name']);

            $relatedContents = Content::select('id', 'thumbnail', 'title', 'slug', 'published_at')
                ->where('category_id', $content->category_id)
                ->where('slug', '!=', $content->slug)
                ->limit(10)
                ->get();

            $comments = Comment::with(['user:id,name,avatar','replies.user:id,name,avatar'])
                ->where('content_id', $content->id)
                ->orderBy('id', 'asc')
                ->paginate(5)
                ->withQueryString();

            return response()->json(
                [
                    'content' => $content,
                    'relatedContents' => $relatedContents,
                    'comments' => $comments,
                ],
                200,
            );
        } catch (\Exception $e) {
            return $this->apiExceptionResponse($e);
        }
    }
}
