<?php

namespace App\Models;

use PDO;
use Config\DataBase;
class User
{
    protected ?int $id;
    protected ?string $pseudo;
    protected ?string $mail;
    protected ?string $password;
    protected int|string|null $id_role;

    public function __construct(?int $id, ?string $pseudo, ?string $mail, ?string $password, int|string|null $id_role)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->password = $password;
        $this->id_role = $id_role;
    }

    public function save(): bool
    {
        $pdo = DataBase::getConnection();
        $sql = "INSERT INTO user (id,pseudo,mail,password,id_role) VALUES (?,?,?,?,?)";
        $statement = $pdo->prepare($sql);
        return $statement->execute([$this->id, $this->pseudo, $this->mail, $this->password, $this->id_role]);
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getId_role(): ?int
    {
        return $this->id_role;
    }
}