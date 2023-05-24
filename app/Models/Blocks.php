<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blocks extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'media', 'activate', 'type', 'content'];

    public function pictureUrl() {
        return $this->media ? Storage::disk('blocks')->url($this->media) : '/assets/img/default-block.jpeg';
    }

    protected $appends = ['created_at', 'updated_at'];
    public function createdAt()
    {
        return date('m/d/Y', strtotime($this->attributes['created_at']));
    }

    public function modifiedAt()
    {
        return date('m/d/Y', strtotime($this->attributes['updated_at']));
    }
}
