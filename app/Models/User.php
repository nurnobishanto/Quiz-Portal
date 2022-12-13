<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasRoles;
use JeffGreco13\FilamentBreezy\Traits\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail,HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, TwoFactorAuthenticatable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'image',
        'school',
        'profession',
        'dob',
        'district_id',
        'upazila_id',
        'post_office_id',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
    public function deposit(): HasMany{
        return $this->hasMany(Deposite::class,'user_id','id');
    }
    public function results(): HasMany{
        return $this->hasMany(Result::class,'user_id','id');
    }
    public function withdraw(): HasMany{
        return $this->hasMany(Withdraw::class,'user_id','id');
    }
    public function district():BelongsTo
    {
        return $this->belongsTo(District::class,'district_id');
    }
    public function upazila():BelongsTo
    {
        return $this->belongsTo(Upazila::class,'upazila_id');
    }
    public function post_office():BelongsTo
    {
        return $this->belongsTo(PostOffice::class,'post_office_id');
    }
}
