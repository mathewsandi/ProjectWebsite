<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 30/11/2015
 * Time: 15:16
 */

namespace app\Http\Controllers;


class FollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function store()
    {

    }

    public function destroy()
    {

    }

    /**
     * Follow a user.
     *
     * @param $userIdToFollow
     * @param User $user
     * @return mixed
     */
    public function follow($userIdToFollow, User $user)
    {
        return $user->followedUsers()->attach($userIdToFollow);
    }
    /**
     * Unfollow a user.
     *
     * @param $userIdToUnfollow
     * @param User $user
     * @return mixed
     */
    public function unfollow($userIdToUnfollow, User $user)
    {
        return $user->followedUsers()->detach($userIdToUnfollow);
    }
}