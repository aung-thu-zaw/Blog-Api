<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'author_id' => $this->author_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'thumbnail' => $this->thumbnail,
            'content' => str()->limit($this->content, 100, '...'),
            'published_at' => $this->published_at,
            'author' => [
                'name' => $this->author->name,
                'avatar' => $this->author->avatar,
            ],
            'category' => [
                "name" => $this->category->name,
                "slug" => $this->category->slug
            ]
        ];
    }
}
