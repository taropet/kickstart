<?php header("Content-Type: text/html; charset=utf-8"); ?>
<meta http-equiv="Content_Type" content="text/html; charset=utf-8"/>
<?php

require_once 'Pet.php';

class Cat extends Pet {
    
    public function speak() {
        return 'Мяу!';   
    }
    
    public function plays() {
        return 'ловит мышь';
    }
}



