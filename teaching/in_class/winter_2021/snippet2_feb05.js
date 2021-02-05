function Person(_name){
  this.name = _name;
}

let a = Person("Adam"); // no new ==> not a constructor call

console.log(window.name);

const p = new Person("Jody");

console.log(window.name); // no change here

console.log(p.name);


let one = "1";
let x = Number(one);
let y = new Number(one);

console.log(x);
console.log(y);

console.log(x==y);
console.log(x===y);
