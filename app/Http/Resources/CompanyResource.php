<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify' => $this -> id,
            'name' => $this -> name,
            'email' => $this -> email, 
            'cnpj' => $this -> cnpj,
            'phone' => $this -> phone,
            'city' => $this -> city,
            'created' => $this -> created_at,
            
        ];
    }
}
