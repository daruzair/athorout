$(".signup-btn").on("click",function(){
    $(".container   ").removeClass("signup-mode");  
})
$(".login-btn").on("click",function(){
      $(".container").addClass("signup-mode");
})