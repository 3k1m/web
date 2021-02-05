let arr = [1,"two", 3, "four", 5];

//for(let i =0; i < arr.length; ++i){
//  console.log(arr[i]);
//}

for(const a of arr){
  // const a = it
  console.log(a);
}

console.log("with in: ");
for(const a in arr){
  console.log(a);
}

let obj = {
  x: 7,
  y: false,
  z: "third"
};

for(const i in obj){
  console.log(i + ": " + obj[i]);
}

console.log("with of:")
//for(const i of obj){
//  console.log(i + ": " + obj[i]);
//}

let m = new Map();
m.set('x', 7);
m['y'] = 14;

for(const [k,v] of m){
  console.log(k + ":" + v);
}

for(const i in m){
  console.log(i + ":" + m[i]);
}
