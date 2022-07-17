<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Str;

final class CreatePostResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        unset($args['directive']);
        
        $args['slug'] = Str::slug($args['title']);
        
        return Post::create($args);
    }
}
