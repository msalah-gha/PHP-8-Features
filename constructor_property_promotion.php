<?php

# Constructor Property Promotion
class User
{
    public function __construct(public string $name)
    {}
}
class Plan
{
    public function __construct(public string $name)
    {}
}

class Signup
{
    public function __construct(
        protected User $user,
        protected Plan $plan
    )
    {
    }
    public function getUserNameAndPlan()
    {
        echo 'User '.$this->user->name." with Plan ".$this->plan->name;
    }
}

$user = new User('joe doe');
$plan = new Plan('monthly');

$signup = new Signup($user, $plan);
var_dump($signup);
echo $signup->getUserNameAndPlan();
