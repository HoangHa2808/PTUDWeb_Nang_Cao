<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone_number',
        'subject_name',
        'notes',
    ];
    protected $with = ['hotel', 'news', 'tours'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function posts_hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
    public function posts_news()
    {
        return $this->belongsTo(News::class, 'news_id', 'id');
    }
    public function posts_tours()
    {
        return $this->belongsTo(Tours::class, 'tours_id', 'id');
    }

}
