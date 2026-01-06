<?php   



class User
{
    private int $id;
    private string $username;
    private string $email;
    private string $password;
    private string $role;
    private ?string $avatar_url;
    private ?string $bio;
    private string $created_at;
    const Admin = 'admin';
    const Organizer = 'organizer';
    const User = 'user';
    public function __construct(
        int $id,
        string $username,
        string $email,
        string $password,
        string $role,
        ?string $avatar_url,
        ?string $bio,
        string $created_at
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->avatar_url = $avatar_url;
        $this->bio = $bio;
        $this->created_at = $created_at;
    }
    public function __get(string $property)
    {
        return $this->$property;
    }
}
