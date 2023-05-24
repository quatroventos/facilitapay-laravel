<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];

    public function createdAt()
    {
        return date('d/m/Y', strtotime($this->attributes['created_at']));
    }

    public function modifiedAt()
    {
        return date('d/m/Y', strtotime($this->attributes['updated_at']));
    }
}
