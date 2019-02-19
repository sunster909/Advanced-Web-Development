// array of words to choose from 
var randomWords = ["dinglehopper", "ratatouille", "fantasia", "baloo", "cinderella", "quasimodo", "tarzan", "eeyore", "figaro", "mickey", "donald", "castle"];

// choosing one of the words from the array above
var randomWord = randomWords[Math.floor(Math.random() * randomWords.length)];

var s;
var answerArray = [];
var count = 0;

function startUp() {
    for (var i = 0; i < randomWord.length; i++)
    {
     answerArray[i] = "_";
    }

    s = answerArray.join(" ");
document.getElementById("answer").innerHTML = s;

    }

function Letter()
{
    // to get the letter typed in the box 
    var letter = document.getElementById("letter").value;
    
    //to make sure there is a guess in the box 
    if (letter.length > 0)
        {
            for (var i = 0; i < randomWord.length; i++)
            {
                // if random word contains a letter that's been typed in, it gets assigned to letter 
                if (randomWord[i] === letter)
                {
                 answerArray[i] == letter;
            
                }
            }
            
 //keeps track of how many guesses have been made            
count++;
document.getElementById("counter").innerHTML = "Number of guesses: " + count;
document.getElementById("answer").innterHTML = answerArray.join(" ");
}
}
