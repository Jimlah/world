<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Returns the user posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Posts::class, 'author_id');
    }

    /**
     * Returns the user comments
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comments::class, 'from_user');
    }

    /**
     * Checks if a user can post
     *
     * @return void
     */
    public function can_post()
    {
        $role = $this->role;
        if ($role == 'author' || $role == 'admin') {
            return true;
        }
        return false;
    }

    /**
     * Checks if a user is an admin
     *
     * @return void
     */
    public function is_admin()
    {
        $role = $this->role;
        if ($role == 'admin') {
            return true;
        }
        return false;
    }

    /**
     * Checks if a user is an admin
     *
     * @return void
     */
    public function is_author()
    {
        $role = $this->role;
        if ($role == 'author') {
            return true;
        }
        return false;
    }

    /**
     * Checks if a user is an admin
     *
     * @return void
     */
    public function is_subscriber()
    {
        $role = $this->role;
        if ($role == 'subscriber') {
            return true;
        }
        return false;
    }
}
