<?php 

function flying(): void {
    var_dump('Fly like a bird!');
}
$hi = flying();
var_dump($hi);
hello();

flying();
flying();
flying();

function helloName($name) {
    var_dump("Hello, $name!");
}

helloName('John Marston');

function helloNameAndAge($name, $age) {
    var_dump("Hello, $name! You are $age years old.");
}

helloNameAndAge('John Marston', 30);
helloNameAndAge('Arthur Morgan', 36);

$test = function (){

};

var_dump($test);

$numbers = [1, 2, 3, 4, 5];
$squares = array_map(function ($n) {
    return $n * $n;
}, $numbers);
$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);

function cube(int $a): Int|String {
    if($a < 0){
            return 'No negative!';
    }
        return $a * $a * $a;
    var_dump('MY NAME IS JOHN MARSTON!!!');
}

var_dump(cube(4));

$answer = cube('hjhghjg');
$text = "Cube of 5 is $answer!";
echo $text;