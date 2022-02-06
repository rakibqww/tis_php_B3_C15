<?php


namespace App\classes;


class PasswordGenerator{

    protected $length;
    protected $data = [];
    protected $password;
    protected $i;
    protected $index;

    public function __construct($post = null)
    {
        $this->length = $post['password_length'];
        $this->data = ['~','!','@','#','$','%','^','&','*','(',')','-','+','a-z','A-Z','0-9'];
    }
    public function newPassword(){
        //echo $this->length;
        for($this->i = 0; $this->i < $this->length; $this->i++){
            $this->index = rand(0,15);
            //echo $this->data[$index];
            $this->password .= $this->data[$this->index];
        }
        return $this->password;
    }

}