<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
// use Illuminate\Container\Attributes\Auth;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

    // public function canAccessPanel(Panel $panel): bool
    // {
    //     $user = Auth::user();
    //     $roles = $user->getRoleNames();

    //     if ($panel->getId() === 'admin' && $roles->contains('admin')) {
    //         return true;
    //     } elseif ($panel->getId() === 'student' && $roles->contains('student')) {
    //         return true;
    //     } else {
    //         return false;
    //     }

    //     return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
    // }

    public function canAccessPanel(Panel $panel): bool
    {
        if (! $this->exists) {
            return false;
        }

        return match ($panel->getId()) {
            'admin' => $this->hasRole('admin'),
            'student' => $this->hasRole('student'),
            default => false,
        };
    }

    // public function teams(): BelongsToMany
    // {
    //     return $this->belongsToMany(TeamModel::class);
    // }

    // public function getTenants(Panel $panel): Collection
    // {
    //     return $this->teams;
    // }

    // public function canAccessTenant(Model $tenant): bool
    // {
    //     return $this->teams()->whereKey($tenant)->exists();
    // }
}
