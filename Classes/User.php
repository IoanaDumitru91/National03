<?php
class User extends BaseClass
{
    public $username;

    public $email;

    public $password;

    public $phone;

    public static function getTable()
    {
        return 'users';
    }


    protected function insert()
    {
        parent::insert(); // TODO: Change the autogenerated stub
    }

}
