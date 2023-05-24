<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'html', 'css','metatitle','slug','metadescription', 'language'];

    protected $appends = ['created_at', 'updated_at'];
    public function createdAt()
    {
        return date('d/m/Y', strtotime($this->attributes['created_at']));
    }

    public function modifiedAt()
    {
        return date('d/m/Y', strtotime($this->attributes['updated_at']));
    }
}
