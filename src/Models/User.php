<?php

namespace Ablam\Models;

use PDO;

/**
 * User
 * Class to manage the users of the blog
 * @author FS-08 <coach.ezian@3wa.io>
 */
class User extends Model
{
    /**
     * $id : auto increment number from 0 to 100000
     *
     * @var integer
     */
    // private int $id;
    /**
     * firstName : must start with uppercase character 
     * and have as min length : 3
     *
     * @var string
     */
    private string $firstName;

     /**
     * lastName : must start with uppercase character 
     * and have as min length : 3
     *
     * @var string
     */
    private string $lastName;
    /**
     * email: must follow the rule -> username@3wa.io
     *
     * @var string
     */
    private string $email;
    /**
     * pseudo: A nick name that the user can use on the web site 
     *
     * @var string
     */
    public string $pseudo;
    /**
     * password : the password is hash and the min length is 8 characters
     *
     * @var string
     */
    private string $password;
    /**
     * birthDate : date of birth format dd/mm/YY  
     * example : 04/07/2022
     *
     * @var string
     */
    private string $birthDate;
    /**
     * role: [admin, user] to determine the view to display to the user
     *
     * @var string
     */
    private string $role;
    /**
     * activate: proprity that determine if the user account is still active and he can log in
     *
     * @var Bool
     */
    private Bool $activate;

    public function __construct(string $email="", string $password="",string $firstName = "", string $lastName="" , string $pseudo = "", string $birthDate = "" )
    {
        $this->table = "user";
        $this->getConnection();
        
        $this->firstName = ucfirst($firstName);
        $this->lastName = strtoupper($lastName);
        $this->email = $email;
         $this->password = password_hash($password,PASSWORD_DEFAULT);// Hasher le mot de passe avant stockage
        $this->pseudo = $pseudo;
        $this->birthDate = $birthDate;
        $this->role = "user";
        $this->activate = true;
    }
    
    /**
     * getAge: compute the difference of year beatween now and the given birth date
     *
     * @return int 
     */
    public function getAge():int{
        $date = date_create($this->birthDate);
        $now = date_create(date("d/m/YY", time()));
        $age = date_diff($now, $date)->format('%a');
        return $age;
    }

    public function create(){
        $sql = "insert into $this->table (first_name, last_name,email, pseudo, password, birth_date, role, activate) values(
            :first_name, :last_name,:email, :pseudo, :password, :birth_date, :role, :activate
        )";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam( ":first_name",$this->firstName);
        $stmt->bindParam( ":last_name",$this->lastName);
        $stmt->bindParam( ":email",$this->email);
        $stmt->bindParam( ":pseudo",$this->pseudo);
        $stmt->bindParam( ":password",$this->password);
        $stmt->bindParam( ":birth_date",$this->birthDate);
        $stmt->bindParam( ":role",$this->role);
        $stmt->bindParam( ":activate",$this->activate);
        $stmt->execute();
    }

    public function getOneByEmail(){
        $sql = "select * from user where email=:email";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam( ":email",$this->email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function __toString():string
    {
        return "{
            User : {
               fisrtName : $this->firstName
               lastName : $this->lastName ;
               email : $this->email;
                
               pseudo : $this->pseudo ;
               birthDate : $this->birthDate ;
               role : $this->role;
            }
        }";
    }

    // Getters
    public function getId(){
        return $this->id;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }


    public function getLastName(){
        return $this->lastName;
    }
       
    /**
     * getEmail
     *
     * @return void
     */
    public function getEmail(){
        return $this->email;
    }
        
    /**
     * getPseudo
     *
     * @return void
     */
    public function getPseudo(){
        return $this->pseudo;
    }
        
    /**
     * getBirthDate
     *
     * @return void
     */
    public function getBirthDate(){
        return $this->birthDate;
    }
    
    /**
     * isActivate
     *
     * @return void
     */
    public function isActivate(){
        return $this->activate;
    }
    
    /**
     * getRole
     *
     * @return void
     */
    public function getRole(){
        return $this->role;
    }


   
    
}