<?php
    include_once "../includs/helper.php";

    ispost(function (){
        if(validate()){
            if(isAuth($_POST["username"], $_POST["password"])){
                if(!isdenide()){
                    if(authorize()){
                        header("Location: ../view/index.php");
                    }else{
                        header("Location: ../view/login.php?err=something went wrong");
                    }
                }else{
                    header("Location: ../view/login.php?err=your are not allowed to login");
                }

            }else{
                header("Location: ../view/login.php?err=username or password is incorrect");
            }
        }
        exit();
    });
    function validate(){
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            if($_POST["username"]!="" && $_POST["password"]!=""){
                return true;
            }else{
                header("Location: ../view/login.php?err=please enter username/password");
            }
        }else{
            header("Location: ../view/login.php?err= lorem  ");

        }
        return false;
    }
    function isAuth($username,$password){
        if($username=="niit" && $password==1234){
            return true;
        }else{
            return false;
        }
    }
    function authorize(){
        return true;
    }
    function isdenide(){
        return false;
     }

    header("Location: ../view/login.php?err=you dont have permition to access this page");




























