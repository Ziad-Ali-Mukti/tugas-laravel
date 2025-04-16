<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articles_Comments extends Model
{
    use HasFactory;

    protected $table = 'article_comments'; 

    protected $fillable = ['article_id', 'user_id', 'comment'];

    /**
     * Relasi ke model Article
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class); // ✅ Perbaikan sintaks
    }

    /**
     * Relasi ke model User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // ✅ Perbaikan sintaks
    }
}
