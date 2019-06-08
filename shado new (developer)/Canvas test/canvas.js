console.log('HTML file is reading js file properly');

var canvas = document.querySelector('canvas');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext('2d');

/* c.fillStyle = "rgba(255,0,0,.5)";
c.fillRect(100, 100, 100, 100);
c.fillStyle = "rgba(0,0,255,.5)";
c.fillRect(400, 100, 100, 100);
c.fillStyle = "rgba(0,255,0,.5)";
c.fillRect(300, 300, 100, 100);


line
c.beginPath();
c.moveTo(50, 300);
c.lineTo(300, 100);
c.lineTo(400, 300);
c.strokeStyle = "rgba(230,0,150,1)";
c.stroke();

Arc /Circle
c.beginPath();
c.arc(300, 300, 30, 0, Math.PI*2, false);
c.strokeStyle = "blue";
c.stroke();

for (var i = 0; i < 3; i++) {
	var x = Math.random()*window.innerWidth;
	var y = Math.random()*window.innerHeight;
	var r = Math.random()*100;
	var red = Math.floor(Math.random())*255;
	c.beginPath();
	c.arc(x, y, r, 0, Math.PI*2, false);
	c.strokeStyle = "blue";
	c.stroke();
}

RANDOM COLOR CIRCLE
for(var i=0; i<1; i++){

var x = Math.random() * window.innerWidth
var y = Math.random() * window.innerHeight
var r = Math.floor(Math.random() * 256)
var g = Math.floor(Math.random() * 256)
var b = Math.floor(Math.random() * 256)
var rgb = "rgba("+r+ ", " +g+ ", " +b+ ", " +0.9+ ")";
 
c.beginPath()
c.arc(x, y, 30, 0, Math.PI * 2, false);
c.strokeStyle = rgb;
c.stroke();
}﻿

ANIMATED CIRCLE */

var mouse = {
	x: undefined,
	y: undefined
}

var maxr = 50;
var minr = 3;
var region = 50;
var maxcircles = 1000;

var colorArray = [
	"#A9D955",
	"#F26866",
	"#F2BD3A",
	"#F27C38",
	"#58A69A",
];


window.addEventListener("mousemove", function(event)	{
	mouse.x = event.x;
	mouse.y = event.y;

})


window.addEventListener("resize", function()	{
		canvas.width = window.innerWidth;
		canvas.height = window.innerHeight;
		
		init();
})



function Circle(x, y, dx, dy, r)	{
	this.x = x;
	this.y = y;
	this.dx = dx;
	this.dy = dy;
	this.r = r;
	this.minr = r;
	this.color = colorArray[Math.floor(Math.random() * colorArray.length)];
	this.draw = function()	{
		c.beginPath();
		c.arc(this.x, this.y, this.r, 0, Math.PI*2, false);
		c.fillStyle = this.color;
		c.fill();
	}
	
	this.update = function()	{
			if (this.x + this.r > innerWidth || this.x - this.r < 0)	{
				this.dx = -this.dx;
			}
			if (this.y + this.r > innerHeight || this.y - this.r < 0)	{
				this.dy = -this.dy;
			}
			this.x += this.dx;
			this.y += this.dy;
			
			// interactivity
			if (mouse.x - this.x < region && mouse.x - this.x > -region && mouse.y - this.y < region && mouse.y - this.y > -region)	{
				if (this.r < maxr)	{
					this.r += 1;
				}
			} else if (this.r > this.minr){
				this.r -= 1;
			}
			
		this.draw();
	}
}

	var circleArray = [];

function init()	{

	circleArray = [];
	for (var i = 0; i < maxcircles; i++)	{
		var r = Math.random() * 3 + 1;
		var x = Math.random() * (innerWidth - r * 2) + r;
		var y = Math.random() * (innerHeight - r * 2) + r;
		var dx = (Math.random() - 0.5) * 5;
		var dy = (Math.random() - 0.5) * 5;

	
		circleArray.push(new Circle(x, y, dx, dy, r));
	}
}

function animate()	{
	requestAnimationFrame(animate);
	c.clearRect(0, 0, innerWidth, innerHeight);
	
	for (var i = 0; i < circleArray.length; i++)	{
		circleArray[i].update();
	}

//	circle.update();
/* 	c.beginPath();
	c.arc(x, y, r, 0, Math.PI*2, false);
	c.strokeStyle = "blue";
	c.stroke(); */
	
/* 	if (x + r > innerWidth || x - r < 0)	{
		dx = -dx;
	}
	if (y + r > innerHeight || y - r < 0)	{
		dy = -dy;
	}
	x += dx;
	y += dy; */
}
init();
animate();






















































console.log(canvas);