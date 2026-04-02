<?php

use Illuminate\Support\Str;

if (!function_exists('generateSlug')) {

    function generateSlug($model, $value, $ignoreId = null)
    {
        $slug = Str::slug($value);
        $originalSlug = $slug;
        $count = 1;

        while (
            $model::where('slug', $slug)
                ->when($ignoreId, function ($query) use ($ignoreId) {
                    return $query->where('id', '!=', $ignoreId);
                })
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
