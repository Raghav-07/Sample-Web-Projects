alert("connected") 
var one=document.querySelector("#p1")
var two=document.querySelector("#p2")
var three=document.querySelector("#reset")
var four=document.querySelector("input");
var five=document.querySelector("p span");

var j=0;
var k=0;
var gameover=false;
var gameover2=false;
var limit=5;

var tag=document.querySelector("#h2id");
var tag2=document.querySelector("#h22id");

one.addEventListener("click",function() {
if(!gameover) {
	j++;
	if(j<=limit) {
tag.textContent=j;
}
else {
	tag.classList.add("greenn");
gameover=true;
}
}
});

two.addEventListener("change",function() {
	if(!gameover2) {
k++;
if(k<=limit) {
tag2.textContent=k;                     
}
else {
		tag2.classList.add("greenn");
gameover2=true;
}
}
}); 

three.addEventListener("click",function() {
	j=0;
	k=0;
	tag.textContent=j;
tag2.textContent=k;
gameover=false;
gameover2=false;
tag.classList.remove("greenn");
tag2.classList.remove("greenn");
}); 


four.addEventListener("click",function() {
five.textContent=four.value;                     
limit=four.value;
}); 