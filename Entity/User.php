<?php



class User
{
    private int $id;
    private string $username;
    private string $email;
    private string $password;
    private string $role;
    private string $avatar_url;
    private string $bio;
    private string $created_at;
    const Admin = 'admin';
    const Organizer = 'organizer';
    const User = 'user';
    public function __construct(

        string $username,
        string $email,
        string $password,
        string $role,
        
        string $created_at
    ) {

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    
        $this->created_at = $created_at;
    }
    public function __get(string $property)
    {
        return $this->$property;
    }
    public function setID($id)
    {
        $this->id = $id;
    }


    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}
