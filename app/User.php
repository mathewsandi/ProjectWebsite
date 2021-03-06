<?php namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;;
use Cmgmyr\Messenger\Traits\Messagable;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	use Messagable;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'password', 'email'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 *A user can have many articles.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function articles()
	{
		return $this->hasMany('App\Article');
	}

	/**
	 * A user can have many statuses.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function statuses()
	{
		return $this->hasMany('App\Status');
	}

	/**
	 * Get the roles a user has
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

	public function friends()
	{
		return $this->belongsToMany('App\User', 'friends_users', 'user_id', 'friend_id');
	}

	public function addFriend(User $user)
	{
		$this->friends()->attach($user->id);
	}

	public function removeFriend(User $user)
	{
		$this->friends()->detach($user->id);
	}

	/**
	 * A user can have many points
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function points()
	{
		return $this->hasMany('App\Point');
	}

	public function roles()
	{
		return $this->belongsToMany('App\Role')->withTimestamps();
	}

	public function hasRole($name)
	{
		$access = false;
		foreach($this->roles as $role)
		{
			if($role->name == $name)
			{
				$access = true;
			}
		}
		return $access;
	}

	public function assignRole($role)
	{
		$this->roles()->attach($role);
	}

	public function removeRole($role)
	{
		$this->roles()->detach($role);
	}

	public function can($name)
	{
		$access = false;

		foreach($this->roles as $role)
		{
			foreach($role->permissions as $permission) {
				if ($permission->name == $name) {
					$access = true;
				}
			}

		}
		return $access;
	}

	public function picture(){
		return $this->hasOne('App\Picture');
	}

}