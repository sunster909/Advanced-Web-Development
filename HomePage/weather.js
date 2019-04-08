var looping=1;

theSpace = document.querySelector("#idk");

var request = new XMLHttpRequest();

APItemp();
setInterval(APItemp, 300000);

function APItemp(){
    console.log('made '+looping+' calls');
    looping++;
  request.open('GET', 'http://api.openweathermap.org/data/2.5/weather?zip=32830&APPID=e367e3437d048303c59db0f1193017ea&units=imperial', true);
    request.onload = function () {
       var data = JSON.parse(this.response);
        var temp = data['main']['temp'];
        var windSpeed = data['wind']['speed'];
        var humidity = data['main'] ['humidity'];

 theSpace.innerHTML="<h2>The current temperature is: "+temp+" degrees Fahrenheit with "+windSpeed+" mph winds. The humidity is at "+humidity+"%.</h2>";

}
    
request.send();
} 