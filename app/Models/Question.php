<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'name',
        'description'
      
    ];


    public function questionnaires(): BelongsToMany
    {
        return $this->belongsToMany(Questionnaire::class)->withTimestamps();
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

}
