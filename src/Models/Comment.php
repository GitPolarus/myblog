<?php

// namespace Ablam\Models;

/**
 * Comment
 * Model use to manage the comment of each article of the blog
 * @author FS-08 <coach.ezian@3wa.io>
 */
class Comment
{
    private int $id;
    public string $message;
    public string $pseudo;
    public string $email;
    public string $commentDate;

    public function __construct(string $message, string $pseudo, string $email, string $commentDate)
    {
        $this->message = $message;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->commentDate = $commentDate;
    }
    
    /**
     * __toString
     *
     * @return string
     */
    public function __toString():string
    {
        return "Comment: {
        message :$this->message;
        pseudo : $this->pseudo ;
        email : $this->email ;
        commentDate : $this->commentDate ;
        }";
    }

}