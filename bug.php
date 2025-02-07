function foo(x) {
  if (x === null) {
    return 0;
  } else {
    return x + 1;
  }
}

function bar(y) {
  return foo(y) * 2;
}

console.log(bar(null)); // Output: 2 (Expected 0)