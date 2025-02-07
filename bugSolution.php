function foo(x) {
  if (x === null) {
    return 0;
  } else if (is_numeric($x)){
    return $x + 1;
  } else {
    return null; // or throw an exception
  }
}

function bar(y) {
  return foo(y) * 2;
}

console.log(bar(null)); // Output: 0
console.log(bar(5)); // Output: 12