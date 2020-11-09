<?php

class Validate{

    private $datas =[];
    private $errors=[];

    public function __construct(array $datas){
        $this->datas = $datas;
        // var_dump($this->datas);
    }

    public function check($name, $rule, $option =false){
        $validate = "validate_$rule";
        if(!$this->$validate($name, $options)){
            $this->errors[$name] = "Le champs $name n'a pas été rempli correctement";
        }
    }

    public function validate_required($name){
        return array_key_exists($name, $this->datas) && $this->datas[$name] != '';
         
    }

    public function validate_email($name){
        return array_key_exists($name, $this->datas) && filter_var($this->datas[$name], FILTER_VALIDATE_EMAIL);
    }

    public function errors(){
        return $this->errors;
    }
}