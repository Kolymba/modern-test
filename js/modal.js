var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
  document.location.href = "/../index.php";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.location.href = "/../index.php";
  }
}
setTimeout(function(){document.getElementById('myModal').style.display = 'none';}, 3000);
