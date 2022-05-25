<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dietplan(){
        return $this->hasMany(DietPlan::class);
    }
    public function healthcondition(){
        return $this->hasMany(HealthCondition::class);
    }
    public function meal(){
        return $this->hasMany(Meal::class);
    }
    public function experiences(){
        return $this->hasMany(Experience::class, 'experience_id');
    }
     public function educations(){
        return $this->hasMany(Education::class, 'education_id');
    }
     public function carts(){
        return $this->hasMany(Cart::class);
    } 
    public function feedback(){
        return $this->hasOne(Feedback::class);
    }
     public function orders(){
        return $this->hasMany(Order::class);
    }
     public function rating(){
        return $this->hasOne(Rating::class);
    }
     public function messages(){
        return $this->hasMany(Message::class);
    }
    public function cartitems(){
        return $this->hasMany(CartItem::class);
    }
         public function payment(){
        return $this->hasOne(Payment::class);
    }
}
