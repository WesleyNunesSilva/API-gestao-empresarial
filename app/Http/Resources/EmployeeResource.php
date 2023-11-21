<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'cpf' => $this -> cpf,
            'phone' => $this -> phone,
            'city' => $this -> city,
            'position' => $this -> position,
            'company_id' => $this -> company_id,
            'created' => $this -> created_at,
            'updated' => $this -> updated_at
        ];
    }
}
