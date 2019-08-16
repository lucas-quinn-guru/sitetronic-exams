<?php

namespace LucasQuinnGuru\SitetronicExam\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function topics()
    {
        return $this->hasMany(\LucasQuinnGuru\SitetronicExam\Models\Topic::class);
    }
}
