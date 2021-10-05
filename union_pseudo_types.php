<?php

# Union and Pseudo Types
/*
 cancel method accept user or null (?User $user)
 cancel method can accept union types (bool|string|DateTime|User ) or (mixed )

 */

class User
{
    public function makeFriendsWith(User|string $user)
    {
        var_dump('hi friends');
    }

    public function cancel(bool $immediate = false)
    {
        var_dump($immediate);
    }
}
$joe = new User;
$sam = new User;

$joe->makeFriendsWith($sam);
$joe->makeFriendsWith('sam@exaample.com');

$joe->cancel(); // false by default
$joe->cancel(true);
$joe->cancel(false);
$joe->cancel('next week'); // true while not empty string