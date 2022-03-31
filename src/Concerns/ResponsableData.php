<?php

namespace Spatie\LaravelData\Concerns;

use Illuminate\Http\JsonResponse;
use Spatie\LaravelData\Resolvers\PartialsTreeFromRequestResolver;

trait ResponsableData
{
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function toResponse($request)
    {
        $this->withPartialTrees(
            resolve(PartialsTreeFromRequestResolver::class)->execute($this, $request)
        );

        return new JsonResponse($this->toArray());
    }

    public static function allowedRequestIncludes(): ?array
    {
        return null;
    }

    public static function allowedRequestExcludes(): ?array
    {
        return null;
    }

    public static function allowedRequestOnly(): ?array
    {
        return null;
    }

    public static function allowedRequestExcept(): ?array
    {
        return null;
    }
}
