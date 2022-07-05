<?php
namespace Ablam\Models;
use Ablam\Models\User;


require_once "./User.php";
/**
 * Article
 * Model use to manage the article of our blog
 * @author FS-08 <coach.ezian@3wa.io>
 */
class Article
{

    private int $id;
    public string $title;
    public string $description;
    public string $publishDate;
    public User $author;
    public string $photo;

    public function __construct(string $title,string $description, string $publishDate,User $author, string $photo ="")
    {
        $this->title = ucwords($title);
        $this->description = ucfirst($description);
        $this->publishDate = date("d/m/YY", time());
        $this->author = $author;
        $this->photo = $photo;
    }
    
    /**
     * __toString: redefinition
     * Convert the object into string
     *
     * @return string
     */
    public function __toString():string
    {
        return "Article : {
            id: $this->id;
            title : $this->title;
            description: $this->description;
            publishDate : $this->publishDate ;
            author : $this->author ;
            photo : $this->photo;
        }";
    }


}