
$("header .test").on("click",function(){
    $("header ul").toggle();
})

var img =
["./images/barbecue-1239434_960_720.webp",
"./images/brick-wall-1834784_960_720.webp",
"./images/buffet-315691_960_720.webp",
"./images/coffee-918926_960_720.jpg",
"./images/mediterranean-cuisine-2378758_960_720.webp",
"./images/pizza-2802332_960_720.webp"
];

var text =
["taste.it restaurant",
"choose any time",
"All you need",
"Quickly ask",
"Ease of communication",
"Ask while you are at home"
];

setInterval(function(){

    var rand2 = Math.floor(Math.random() * text.length);

    document.getElementById("j").innerHTML = text[rand2];

},4000)

setInterval(function(){

    var rand = Math.floor(Math.random() * img.length);

    document.getElementById('all').style.backgroundImage = "url('"+img[rand]+"')";

},3000)

wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
  }
  )
wow.init();

$("#one,.one").on("click",function(){
    $("html,body").scrollTop(0);
})  

$(".two").on("click",function(){
    $("html,body").scrollTop("400");
})  
    
$(".tt").on("click",function(){

$("body,html").animate({
    
scrollTop : 0
    
},5000)
    
})

$(".ab1").on("click",function(){

    $('.timer').countTo({
        speed: 10000,
      });

});

$('.num').on("blur",function(){

    if( $(this).val().length < 11 || $(this).val().length > 11){
        $(".pass form input:last-of-type").fadeOut(500);
        $(this).css("border","3px red solid");
    }

    else{
        $(".pass form input:last-of-type").fadeIn(500);        
    }

});
