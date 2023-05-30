<?php

namespace App\Models;

use Google\Service\Slides\Page;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_translation extends Model
{
    use HasFactory;
    protected $fillable = ['page_id', 'locale', 'title', 'html', 'css','metatitle','slug','metadescription'];

    public function page()
    {
        return $this->belongsTo(Page::class);
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
}
