// Fibonacci using plain recursion
let fibWithRecursion = (n) => {
    if(n <= 2) return 1;
    return fibWithRecursion(n - 1) + fibWithRecursion(n - 2);
}

// Time Complixity is O(2^n) and Space complexity is O(n)

// driver code:
// console.log(fibWithRecursion(1));
// console.log(fibWithRecursion(2));
// console.log(fibWithRecursion(3));
// console.log(fibWithRecursion(4));
// console.log(fibWithRecursion(50)); this takes too long to excute with plain recursion.


// Fibonacci using dynamic programming with recursion and memoization 

let fibWithDp = (n, memo = {}) => {
    if(n in memo) return memo[n];
    if(n <= 2) return 1;
    memo[n] = fibWithDp(n - 1, memo) + fibWithDp(n - 2, memo);
    return memo[n];
}

// Time Complixity is O(n) and Space complexity is O(n)

// driver code:
console.log(fibWithDp(1));
console.log(fibWithDp(2));
console.log(fibWithDp(3));
console.log(fibWithDp(4));
console.log(fibWithDp(50)); // a huge enhancment in execution time 
