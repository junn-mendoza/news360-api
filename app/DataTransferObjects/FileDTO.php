<?php
namespace App\DataTransferObjects;

use Illuminate\Http\Resources\Json\JsonResource;

class FileDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $url,
        public readonly int $width,
        public readonly int $height,
    ){}

    public static function fromResource(JsonResource $resource): self
    {
        return new self(
            id: $resource->id,
            url: $resource->url,
            width: (int) $resource->width,
            height: (int) $resource->height,
        );
       
    }
}