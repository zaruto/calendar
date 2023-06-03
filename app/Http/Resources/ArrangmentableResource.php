<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArrangmentableResource extends JsonResource
{

    public function toArray(Request $request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'first' => $this->collection->url(1),
                'last' => $this->collection->url($this->collection->lastPage()),
                'prev' => $this->collection->previousPageUrl(),
                'next' => $this->collection->nextPageUrl(),
            ],
            'meta' => [
                'current_page' => $this->collection->currentPage(),
                'from' => $this->collection->firstItem(),
                'to' => $this->collection->lastItem(),
                'per_page' => $this->collection->perPage(),
                'total' => $this->collection->total(),
                'last_page' => $this->collection->lastPage(),
            ],
        ];
    }
}
