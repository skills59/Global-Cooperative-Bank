function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 350);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      document.getElementById("myP").className = "w3-text-green w3-animate-opacity";
      document.getElementById("myP").innerHTML = "TRANSFER SUCCESSFUL!! <br>Dear Customer Due To the Electronic Fund Transfer Act (EFTA) Kindly Note That Funds Transfered Would Reflect In Recipitients Bank Account After 5 Working Days";
    } else {
      width++; 
      elem.style.width = width + '%'; 
      var num = width * 1 / 10;
      num = num.toFixed(0)
      document.getElementById("demo").innerHTML = num;
    }
  }
}