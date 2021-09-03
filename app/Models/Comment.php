<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\Types\True_;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = ['subject', 'body', 'article_id'];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
