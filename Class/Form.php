<?php
class Form {

    private $data = [];

    public function __construct($datas = []){
        $this->datas = $datas;
    }

    private function getValue($name){
        if(isset($this->data[$name])){
            return $this->datas['name'];
        }
        else{
            return '';
        }

    }

    private function input($type, $name, $label){
        $value = $this ->getValue($name);

        if($type == 'textarea'){
            $input=
            "<div class=\"col-75\">
                <textarea name=\"$name\" class=\"name\" id=\"$name\">$value</textarea>
            </div>";
        }
        else{
            $input ="
            <div class=\"col-75\">
                <input id=\"$name\" name=\"$name\" type=\"$type\" class=\"name\" value =\"$value\"> 
            </div>";
        }   

    
        return "
       <div class=\"row\">
            <div class=\"col-25\">
                <label for=\"$name\">$label</label>
            </div> 
             $input
        </div>";
    }

    public function name($name, $label){

       return $this->input('text', $name, $label);
    }

    public function tel($name, $label){

        return $this->input('tel', $name, $label);
     }

    public function email($name, $label){

        return $this->input('email', $name, $label);
    }

    public function textarea($name, $label){

        return $this->input('textarea', $name, $label);
     }

     public function submit($label){

         return "
         <br/>
         <div class=\"row\">
            <input type=\"submit\" name=\"submit\" class=\"button_contact\" id=\"send\" . $label . >
        </div>";

     }
    
}