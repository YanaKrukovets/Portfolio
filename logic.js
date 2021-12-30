function topNavIcon(event) {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
    if (event.target.id == "default") {
        x.className = "topnav";
    }
  }

  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  String.prototype.replaceAt = function(index, replacement) {
    return this.substr(0, index) + replacement + this.substr(index + replacement.length);
}

function solution(A, S) {
  // write your code in JavaScript (Node.js 8.9.4)
  var result = 0, arr = [], sum = 0, arr2 = [];

  for (let i = 0; i < A.length; i++) {
      arr.push(A[i]);
      for (let j = 0; j< arr.length;j++) {
          sum+=arr[j];
      }
      if (sum/arr.length == S) {
          result++;
      }
      sum = 0;
  }
  for (let p = A.length - 1; p > 0; p--) {
      arr2.push(A[p]);
      for (let j = 0; j< arr.length;j++) {
          sum+=arr2[j];
      }
      if (sum/arr2.length == S) {
          result++;
      }
      sum = 0;
  }

  if (result > 1000000000) {
      return 1000000000;
  }
  return result;
}

 
//solution("photo.jpg, Warsaw, 2013-09-05 14:08:15\n john.png, London, 2015-06-20 15:13:22\nmy.png, Warsaw, 2013-09-05 14:07:13\n" +
//"eif.jpg, Paris, 2015-07-23 08:03:02\neifg.jpg, Paris, 2015-07-22 23:59:59\nBob.jpg, London, 2015-08-05 00:02:03");
solution([2, 1, 3], 2 );
//solution(["....X..", "X......", ".....X.", "......."]);