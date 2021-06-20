<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * 
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
