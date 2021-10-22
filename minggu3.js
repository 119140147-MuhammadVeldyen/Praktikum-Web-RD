function theme(){
    var theme = document.getElementById("theme").value;
    if (theme == "white"){
        document.body.style.backgroundColor="white";
        document.body.style.color="black";
    }
    else if (theme == "black"){
        document.body.style.backgroundColor="black";
        document.body.style.color="white";
    }
}
function weather(){
    var weather = document.getElementById("weather").value;
    if (weather == "sunny"){
        weatherr.innerText= "It is so nice outside today. Wear shorts! Go to the beach, or the park, and get an ice cream.";
    }
    else if (weather == "rainy"){
        weatherr.innerText= "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long.";
    }
}
function faktorial(){
    var x = document.getElementById("faktorial").value;
    var y = x;
    var hasil = document.getElementById("hasil");
    for(i = y-1; i>1 ;i--){
        y=y*i;
    }
    hasil.innerText = "The factorial of "+x+" is "+y;
}