<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // parent::toArray($request)

            // 'user' => User::where('id', 1)->get(),
            'id' => $this->id, 
            // 'user' => $this->user->name,
            'title' => $this->title,
            'description' => $this->description,
            'created_at' => $this->created_at->diffForHumans()  
        ];
    }
}