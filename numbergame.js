var numberToGuess = determineNumber();
var timeID = setTimeout(endGame,15000);
var count = 0;

let theButton = document.getElementById('mySubmit');
theButton.addEventListener('click', function(e){
    e.preventDefault();
    guessNumber();}, false);

function determineNumber(){
    //fill this in--this function just determines the random number to be guessed
    x=Math.floor(Math.random()*100)+1; 
    return x; 
}

function printAnswer(theAnswer){
    //fill this in--this function just prints "You are too high", "You are too low", "You win", or "You lose".  A clue--the variable: 'theAnswer' should equal: " are too high", " are too low", " win", " lose"
    console.log(theAnswer);
 document.getElementById('answer').innerHTML=theAnswer;
}
                                      
function guessNumber(){ 
    //this is an extended if then else statement
theGuess=document.getElementById('myGuess').value;
        
    if(theGuess > numberToGuess){
        printAnswer("You are too high");
    }
    else if (theGuess < numberToGuess){
        printAnswer("You are too low");
    }
    
else if (theGuess == numberToGuess){
    printAnswer("You win!");
}
}

function endGame(){
    //fill this in - this call printAnswer and disables the text field.  
    
}
