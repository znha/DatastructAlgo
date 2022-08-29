function linearSearch(arr, target) {
    for(let i = 0 ; i < arr.length; i++) {
        if(arr[i] == target) {
            return i;
        }
    }
    return "Target " + target + "not found";

}

console.log(linearSearch([1,20,15,80,46,73],80))