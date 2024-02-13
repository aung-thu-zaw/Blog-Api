<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date('j/F/Y h:i A', strtotime($value)),
        );
    }

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'reply_to_comment_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reportedComments(): HasMany
    {
        return $this->hasMany(ReportedComment::class);
    }
}
