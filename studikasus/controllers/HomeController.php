<?php
class HomeController{
    public function home (){
        header ("location:http://localhost/studikasus/");
    }
    public function user (){
        header ("location:http://localhost/studikasus/user");
    }
    public function produk (){
        header ("location:http://localhost/studikasus/produk");
    }

}