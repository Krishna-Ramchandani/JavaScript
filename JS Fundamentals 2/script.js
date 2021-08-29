//console.log("JavaScript Fundamentals Part 2")
'use strict';
// to avoid using reserved keywords //to avoid adding wrong variable names

//function declarations 
function simpleDisplay() {
    console.log("Inside Function");
}
simpleDisplay();

function addTwoNumbers(numberOne, numberTwo) {
    return (numberOne + numberTwo);
}
console.log(addTwoNumbers(10, 20));

//function expressions
const substractTwoNum = function (numOne, numTwo) {
    return (numOne - numTwo);
}
const subResult = substractTwoNum(20, 10);
console.log(subResult);

// Arrow Function => //not using curly braces and implicitly returning 
const currentAge = ageFunction => 2021 - ageFunction;
const curAge = currentAge(2000);
console.log(curAge);

//function calling other function
add2Nums(10, 20);
function add2Nums(num1, num2) {
    const res = num1 + num2;
    compareNum(res);
}
function compareNum(res) {
    if (res > 10) {
        console.log("Number is greater then 10, result is : ", res);
    }
    else {
        console.log("Number is less then 10, result is : ", res);
    }
}

//coding challenge 1 Functions
const calcAvg = (a, b, c) => (a + b + c) / 3;
//console.log(calcAvg(3, 4, 5))

let scoreDol = calcAvg(44, 23, 71);
let scoreKoa = calcAvg(65, 64, 49);
//console.log(scoreDol, scoreKoa);

const checkWin = function (avgDol, avgKoa) {
    if (avgDol >= 2 * avgKoa) {
        console.log(`Dolphins wins`);
    }
    else if (avgKoa >= 2 * avgDol) {
        console.log('Koala Wins');
    }
    else {
        console.log(`No one wins`);
    }
}
checkWin(scoreDol, scoreKoa);
checkWin(233, 107);

scoreDol = calcAvg(85, 54, 41);
scoreKoa = calcAvg(23, 34, 27);
console.log(scoreDol, scoreKoa);
checkWin(scoreDol, scoreKoa);

//arrays
const friends = ['John', 'Brock', 'Dave', 'Smith'];
console.log(friends);

const years = new Array(2015, 2016, 2017, 2018, 2019, 2020, 2021);
console.log(years);

console.log(friends[1]);

console.log(friends.length);
console.log(friends[friends.length - 1]);

friends[3] = 'Sasha';
console.log(friends);
const country = 'America';
const brock = ['Brock', 'Lesnar', 2021 - 1984, 'Wrestling', country];
console.log(brock, "Array Length:", brock.length);

//array exercise

const calcAge = function (birthYear) {
    return 2021 - birthYear;
}
const Birthyears = new Array(2015, 2016, 2017, 2018, 2019, 2020);
let age1 = calcAge(Birthyears[0]);
let age2 = calcAge(Birthyears[1]);
let age3 = calcAge(Birthyears[2]);
let age4 = calcAge(Birthyears[Birthyears.length - 1]);
console.log(age1, age2, age3, age4);

const agesArray = [age1, age2, age3, age4];
console.log(agesArray);

//array operations methods
const newFriends = ['John', 'Brock', 'Dave', 'Smith'];
const newLength = newFriends.push('Rosita');
console.log(newFriends, newLength);
//add at begin
console.log(newFriends.unshift('Miz'), newFriends);

//remove elements 
const popped = newFriends.pop(); //remove last 
console.log(newFriends, popped);

//removie 1st element
newFriends.shift();
console.log(newFriends);

//find index
console.log(newFriends.indexOf('Brock'));
console.log(newFriends.indexOf('Rosita'));
//includes returns boolean value with strict equality check 
console.log(newFriends.includes('Brock'));
console.log(newFriends.includes('Rosita'));

if (friends.includes('Peter')) {
    console.log("You have a friend called Peter");
}
else {
    console.log("You don't have a friend called Peter");
}

//challenge 2 array
console.log("Challenge 2 Array")
let billArray = [125, 55, 44];
console.log(billArray);
calcTip();
function calcTip() {
    let bill1 = billArray[0];
    let bill2 = billArray[1];
    let bill3 = billArray[2];
    let tbill1 = calcRange(bill1);
    let tbill2 = calcRange(bill2);
    let tbill3 = calcRange(bill3);
    let newBillArray = [tbill1, tbill2, tbill3];
    //  console.log(newBillArray);
    console.log("Total Array Bill:", newBillArray);
}
function calcRange(bill) {
    if (bill >= 50 && bill <= 300) {
        let tip = (15 * bill) / 100;
        console.log("tip %: ", tip);
        let tbill = tip + bill;
        return tbill;
    }
    else {
        let tip = (20 * bill) / 100;
        console.log("tip %: ", tip);
        let tbill = tip + bill;
        return tbill;
    }
}

// objects

const person = {
    firstName: 'Krishna',
    lastName: 'Ramchandani',
    age: 2021 - 2000,
    job: 'Programmer',
    friends: ['Neil', 'Nitin', 'Mukesh']
};

console.log(person);
console.log(person.lastName);
console.log(person['lastName']);

const nameKey = 'Name';
console.log(person['first' + nameKey]);
console.log(person['last' + nameKey]);

const choose = prompt('choose between firstName,lastname,age,job,friends');
if (person[choose]) {
    console.log(person[choose]);
}
else {
    console.log("Wrong Request")
}

person.location = 'India';
person.email = 'krishna@mail.com';
console.log(person);

//challenge 
console.log(` ${person.firstName} has ${person.friends.length} 
friends, and his best friend is called ${person.friends[1]} `);

//object methods

const person = {
    firstName: 'Krishna',
    lastName: 'Ramchandani',
    age: 2021 - 2000,
    job: 'Programmer',
    friends: ['Neil', 'Nitin', 'Mukesh'],
    hasDriverLicense: true,
    calcAge: function (birthYear) {
        return 2021 - birthYear;
    }
};
console.log(person.calcAge(1999));

// challenge 3 objects
const person1 = {
    name: 'Mark',
    weight: 78,
    height: 1.69
}
const person2 = {
    name: 'John',
    weight: 92,
    height: 1.95
}

let markBmi = calcBmi(person1.weight, person1.height);
let johnBmi = calcBmi(person2.weight, person2.height);

function calcBmi(weight, height) {
    let bmi = weight / height ** 2;
    return bmi;
}
if (markBmi > johnBmi) {
    console.log(`${person1.name}'s BMI ${markBmi} is higher then ${person2.name}'s BMI ${johnBmi}`);
}
else {
    console.log(`${person2.name}'s BMI ${johnBmi} is higher then ${person1.name}'s BMI ${markBmi}`);
}

// challenge 4 loops

function calcRange(bill) {
    if (bill >= 50 && bill <= 300) {
        let tip = (15 * bill) / 100;
        //console.log("tip %: ", tip);
        let tbill = tip + bill;
        return tbill;
    }
    else {
        let tip = (20 * bill) / 100;
        //console.log("tip %: ", tip);
        let tbill = tip + bill;
        return tbill;
    }
}

//22, 295, 176, 440, 37, 105, 10, 1100, 86 and 52

const bills = [22, 295, 176, 440, 37, 105, 10, 1100, 86, 52];
const tips = [];
const total = [];

for (let i = 0; i < bills.length; i++) {
    const tip = calcRange(bills[i]);
    tips.push(tip);
    total.push(tip + bills[i]);
}
console.log(bills, tips, total);
console.log("Average bills : ", calcAvg(bills));
console.log("Average tips : ", calcAvg(tips));
console.log("Average total : ", calcAvg(total));
function calcAvg(arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
        sum += arr[i];
    }
    return sum / arr.length;
}