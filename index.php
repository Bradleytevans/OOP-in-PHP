<?php

class TeamException extends Exception{
    public static function fromTooManyMembers() {
        return new static('You may not add more than 3 team members.');
    }
}
class Member
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Team
{
    protected $members = [];
    public function add(Member $member)
    {
        if (count($this->members) === 3) {
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }
    public function members()
    {
        return $this->members;
    }
}

class TeamMembersController
{
    public function store()
    {   
        $team = new Team;
        try {
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('John Doe'));
            $team->add(new Member('Jessy Doe'));
            $team->add(new Member('Jim Doe'));
            var_dump($team->members());
        } catch (MaximumMembersReached $e) {
            var_dump($e);
        }
        
    }
}

(new TeamMembersController())->store();
