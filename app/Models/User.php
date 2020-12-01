<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;




/**
 * Classe User : permet de gérer les relations de la table User
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password'];

    protected $casts = ['email_verified_at' => 'datetime'];

	/**
	 * Méthode qui permet de récupérer les propriétaires des boards associés à la table User
	 *
	 * @return : Les propriétaires des boards
	 */
	public function ownedBoards()
	{
		return $this->hasMany('App\Models\Board');
	}

	/**
	 * Méthode qui permet de récupérer les boards associés à la table User
	 *
	 * @return : Les boards
	 */
	public function boards()
    {
        return $this->belongsToMany('App\Models\Board')->using('App\Models\BoardUser')->withPivot('id')->withTimestamps();
    }

	/**
	 * Méthode qui permet de récupérer les tâches assignées associées à la table User
	 *
	 * @return : Les tâches assignées
	 */
	public function assignedTasks()
	{
		return $this->belongsToMany('App\Models\Task')->using('App\Models\TaskUser')->withPivot('id');
	}

	/**
	 * Méthode qui permet de récupérer toutes les tâches associées à la table User
	 *
	 * @return : Toutes les tâches
	 */
	public function allTasks()
	{
		return $this->hasManyThrough('App\Models\Task', 'App\Models\BoardUser', 'user_id', 'board_id', 'id', 'board_id');
	}

	/**
	 * Méthode qui permet de récupérer les commentaires associés à la table User
	 *
	 * @return : Les commentaires
	 */
	public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

	/**
	 * Méthode qui permet de récupérer les pièces jointes associées à la table User
	 *
	 * @return : Les pièces jointes
	 */
	public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }
}
