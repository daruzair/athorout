<?php
function isget($call){
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(is_callable($call)){
            $call();
        }
    }

}
function ispost($call){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(is_callable($call)){
            call_user_func($call);
        }
    }
}
