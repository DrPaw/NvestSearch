var x = document.getElementById('buy');
var y = document.getElementById('sell');
var a = document.getElementById('buytable');
var b = document.getElementById('selltable');
var c = document.getElementById('tt1');
var d = document.getElementById('tt2');
function Buy() {
x.style.display = "block";

y.style.display = "none";
a.style.display = "block";
b.style.display = "none";
c.style.backgroundColor = "#28a745";
d.style.backgroundColor = "#007bff";
}
function Sell() {
x.style.display = "none";
y.style.display = "block";

a.style.display = "none";
b.style.display = "block";
d.style.backgroundColor = "#dc3545";
c.style.backgroundColor = "#007bff";
}