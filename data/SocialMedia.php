<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    public function login(string $username, string $password): bool
    {
        return true;
    }
}

//error
class FakeFacebook extends Facebook
{
    public function login(string $username, string $password): bool
    {
        return false;
    }
}
