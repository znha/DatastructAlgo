
let binarySearch = (arr, target) => {
  let first = 0;
  let last = arr.length - 1;
  while (first <= last) {
    let mid = Math.floor((first + last) / 2);
    if (arr[mid] === target) {
      return mid;
    } else if (arr[mid] < target) {
      first = mid + 1;
    } else {
      last = mid - 1;
    }
  }
  return null;
};

//Dirver code
let arr = [1, 5, 9, 40, 60, 80, 100];
let target = 60;
console.log(binarySearch(arr, target));
