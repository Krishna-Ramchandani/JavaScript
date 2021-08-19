
//let js = 'awesome';
//if (js === 'awesome') alert('Inside IF');

console.log(40 + 60);
// assignment values and variables
let firstName = "Krishna";
console.log(firstName);
var lastName = "Ramchandani";
console.log(lastName);

const countryName = "India";
console.log(countryName);
let continentName = "Asia";
console.log(continentName);
let totalPopulation = 10000
console.log(totalPopulation);

let age = 18; //let bill = 99.99; //number variables;
let subjectName = "JavaScript"; let subName = 'JavaScript'; //String variables
let real = true; let unreal = false;//booleans variables;
let carName, modelNumber;//undefined variables;
let last = null;//null variable;
console.log("Checking the type of Null:", typeof (last))

console.log(real);
console.log(typeof (carName));
age = 'Eighteen'; //dynamic typing converting number to string
console.log(typeof (age));

console.log(carName);
console.log(typeof (carName));

carName = 'Mercedes';
console.log(carName);
console.log(typeof (carName));

//assignment data types
let isIsland = false;
let language;
console.log(isIsland)
console.log(totalPopulation);
console.log(countryName);
language = "Hindi";
console.log(language);

//assignment let, const and var
const nationalBird = "Peacock";
console.log(nationalBird);
language = "English";
language = "Hindi"


//ternary operator
let num = 32;
let evenOrOddNum = (num % 2 == 0) ? "Even Number" : "Odd Number";
console.log(evenOrOddNum);

//operators
//math operators :  +,-,/,*,**
//assignment operators: =, +=, -=, *=, /=
//increment decrement:   ++,--
//comparison: <, >, <=, >=

//basic operators
console.log(totalPopulation / 2);
totalPopulation++;
console.log(totalPopulation);
console.log(totalPopulation > 6);
console.log(totalPopulation < 33);
const description1 =
    countryName +
    ' is in ' +
    continentName +
    ', and its ' +
    totalPopulation +
    ' million people speak ' +
    language;
console.log(description1);

//average of birth years
const birthYearJohn = 1999, birthYearSim = 2000, birthyearAndy = 2001, birthYearMartha = 1999;
console.log("Average Birth Year of John, Sim, Andy, Martha is: ", (birthYearJohn + birthYearSim + birthyearAndy + birthYearMartha) / 4)

//coding challenge #1 and #2 Mix

console.log("coding challenge #1")
let markWeight = 78, markHeight = 1.69, johnWeight = 92, johnHeight = 1.95;
let bmiMark = markWeight / markHeight ** 2;
let bmiJohn = johnWeight / johnHeight ** 2;
console.log("Mark's MBI: " + bmiMark + ", John's BMI: " + bmiJohn);
let markHigherBMI;
if (bmiMark > bmiJohn) {
    markHigherBMI = true;
    console.log(markHigherBMI);
    console.log("Mark's BMI is greater then John's BMI");
}
else {
    markHigherBMI = false;
    console.log(markHigherBMI);
    console.log("John's BMI is greater then Mark's BMI");
}

//objects examples and referencing
let humanMale = { eyes: "Two", hands: "Two" };
let humanFemale = humanMale;
console.log("Description of Male: Eyes: " + humanMale.eyes, "Hands: " + humanMale.hands,
    " Description of Female: Eyes: " + humanFemale.eyes, "Hands: " + humanFemale.hands);
humanFemale = { hairs: "long" };//creating new key for humanFemale object
let alien = humanFemale;
alien.hands = "Many"; //changing alien hands key also changing hands key in humanFemale but not in humanMale
console.log("Female Hands: " + humanFemale.hands);
console.log("Male Hands: " + humanMale.hands);
// console.log("Male hairs:" + humanMale.hairs); //showing undefined when trying to add new key to female obj and trying to print to male object

//nested objects 
humanMale = {
    face: {
        nose: "One",
        ears: "Two",
        mouth: "One"
    }
}
console.log("Human Facial Features: Nose: " + humanMale.face.nose, " Humans Ears: " + humanMale.face.ears,
    "Human Mouth: " + humanMale.face.mouth);

//simple referencing 
let numberOne = 10;
let numberTwo = numberOne;
console.log(numberTwo);
numberTwo = 20;
console.log(numberTwo);

//string 
//const firstName = "Krishna", lastName = "Ramchandani";
console.log("Hello, I'm", firstName, lastName, "I'm from", countryName);
console.log("Hello, I'm " + firstName + ' ' + lastName + " I'm from " + countryName);
//above both line has same output

//string literal template
const newNameVar = `Hello, I'm ${firstName} ${lastName}. I'm from ${countryName} `;
console.log(newNameVar);

//type conversion and coercion
const inputYear = "2021";
console.log(Number(inputYear) + 18);
console.log('23' + '10' - 3 + ' Number ' + '23' * '2');
console.log('23' > '2');

//truthy and falsy
const money = 0;
if (money) {
    console.log("Inside IF");
}
else {
    console.log("Inside ELSE")
}


//switch case 
const dayOfTheWeek = "Saturday";
switch (dayOfTheWeek) {
    case "Monday":
        console.log("This is Monday.");
        break;
    case "Tuesday":
        console.log("This is Tuesday");
        break;
    case "Wednesday":
        console.log("This is Wednesday");
        break;
    case "Thursday":
        console.log("This is Thursday");
        break;
    case "Friday":
        console.log("This is Friday");
        break;
    case "Saturday":
    case "Sunday":
        console.log("Enjoy the Weekend!!");
        break;
    default:
        console.log("Not a valid Day of the week");
}

//coding challenge #3
/*There are two gymnastics teams, Dolphins and Koalas. They compete against each 
other 3 times. The winner with the highest average score wins a trophy! */
const dolphinAvg = (97 + 112 + 101) / 3, koalasAvg = (109 + 95 + 123) / 3;
if (dolphinAvg >= 100 && dolphinAvg > koalasAvg) {
    console.log("Dolphins Win the Game");
}
else if (koalasAvg >= 100 && koalasAvg > dolphinAvg) {
    console.log("Koalas Win the Game");
}
else if (koalasAvg === dolphinAvg) {
    console.log("Match Tied");
}
else {
    console.log("No One Wins")
}


//coding challenge #4
/*Steven wants to build a very simple tip calculator for whenever he goes eating in a
restaurant. In his country, it's usual to tip 15% if the bill value is between 50 and
300. If the value is different, the tip is 20%.*/
const bill = 430;
bill >= 50 && bill <= 300 ? console.log(`The bill was ${bill}, the tip was ${(15 * bill) / 100}, 
and the total value is ${bill + ((15 * bill) / 100)} `) : console.log(`The bill was ${bill}, 
the tip was ${(20 * bill) / 100}, and the total value is ${bill + ((20 * bill) / 100)} `);

