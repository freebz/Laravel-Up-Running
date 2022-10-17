<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Scopes\ActiveScope;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes; // 트레이트 사용

    protected $fillable = ['name', 'email'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'owner_id'];
    protected $dates = ['deleted_at']; // 이 컬럼이 date 포맷이라는 것을 말한다.
    protected $casts = [
        'vip' => 'boolean',
        'children_names' => 'array',
        'birthday' => 'date',
    ];
    public $hidden = ['paddword', 'remember_token'];
    public $visible = ['name', 'email', 'status'];
    protected $appends = ['full_name'];

    public function scopeActiveVips($query)
    {
        return $query->where('vip', true)->where('trial', false);
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', true);
        });

        static::addGlobalScope(new ActiveScope);
    }

    public function getNameAttribute($value)
    {
        return $value ?: '(No name provided)';
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function phoneNumber()
    {
        return $this->hasOne(PhoneNumber::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function stars()
    {
        return $this->morphMany(Star::class, 'starrable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
