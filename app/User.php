<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

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
	 * Get the roles a user has
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function roles()
	{
		return $this->belongsToMany('App\Role', 'users_roles');
	}

	/**
	 * Find out if user is a staf member based on if has any roles
	 *
	 * @return boolean
     */
	public function isStaff()
	{
		$roles = $this->roles->toArray();
		return !empty($roles);
	}

	/**
	 * Find out if user has a specific role
	 *
	 * @return boolean
     */
	public function hasRole($check)
	{
		return in_array($check, array_fetch($this->roles->toArray(), 'name'));
	}

	/**
	 * Get key in array with corresponding value
	 *
	 * @return int
     */
	private function getIdInArray($array, $term)
	{
		foreach ($array as $key => $value){
			if ($value == $term){
				return $key;
			}
		}

		throw new \UnexpectedValueException;

	}

	public function makeStaff($title)
	{
		$assigned_roles = array();

		$roles = array_fetch(Role::all()->toArray(), 'name');

		switch($title) {
			case 'super_admin':
				$assigned_roles[] = $this->getIdInArray($roles, 'edit_user');
				$assigned_roles[] = $this->getIdInArray($roles, 'delete_user');
                break;
			case 'admin':
				$assigned_roles[] = $this->getIdInArray($roles, 'create_user');
                break;
			case 'moderator':
				$assigned_roles[] = $this->getIdInArray($roles, 'create_article');
				$assigned_roles[] = $this->getIdInArray($roles, 'edit_article');
				$assigned_roles[] = $this->getIdInArray($roles, 'delete_article');
                break;
			default:
				throw new \Exception("The role status entered does not exist");
		}

		$this->roles()->attach($assigned_roles);
	}
}

/* First we have a function that determines if someone is staff.
Then the next function that when given a role it will determine if the user has that particular capability.
The next function is a helper function that will return the id number of the value that is supplied.
The last function allows you to pass the title the person should have. Each title will corresponding with a certain
group of permissions. Each permission set build on each other so the title with the most permissions has to be at
the top of the switch statement. */
