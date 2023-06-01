<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partners extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'website', 'logo'];

    public function logoUrl() {
        return $this->logo ? Storage::disk('partners')->url($this->logo) : 'assets/img/default_teacher.jpg';
    }

    protected $appends = ['created_at', 'updated_at'];
    public function createdAt()
    {
        return date('d/m/Y', strtotime($this->attributes['created_at']));
    }

    public function modifiedAt()
    {
        return date('d/m/Y', strtotime($this->attributes['updated_at']));
    }

    public function getCreatedAtAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['created_at']));
    }

    public function getUpdatedAtAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['updated_at']));
    }
}
