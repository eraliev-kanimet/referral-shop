<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Request;

class ArticleShowResource extends ArticleResource
{
    public function toArray(Request $request): array
    {
        $array = parent::toArray($request);

        $array['content'] = $this->resource->content;
        $array['tags'] = $this->resource->tags;
        $array['next_article_slug'] = $this->resource->next()?->slug ?? '';
        $array['prev_article_slug'] = $this->resource->prev()?->slug ?? '';

        return $array;
    }
}
