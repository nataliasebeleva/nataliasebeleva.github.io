	what = "cross";
	index.style.width = "10px";
	mainScreenText.style.display = "none"; 
	function scale() {
		if (parseInt(index.style.width) < 200)
		{
		 
		index.style.width = (parseInt(index.style.width)+1) + "px";


		setTimeout("scale()", 10);
		}
		if (parseInt(index.style.width) == 200) {
			mainScreenText.style.display = "block";
			document.onclick = function() {
				mainScreen.style.display = "none";
				secondScreen.style.display = "block";
			}; 
		}
	}
scale();
let square = document.querySelectorAll(".square");
let result = new Array();
for (var i = 0; i < square.length; i++) {
	square[i].addEventListener("click", function () {
	    this.innerHTML ="<div class ='"+what+"'></div>";
		if(what == "ring"){
		what = "cross";
		}
		else{
			what = "ring";
		}
		console.log(this.innerHTML);
		result.push(this.innerHTML);
		console.log(result);
		if(result.length == 9) {
			alert('Ничья!');
			location.reload();
		}
		let cross = '<div class="cross"></div>';
		let ring = '<div class="ring"></div>';
		if(
			((square[0].innerHTML == cross)&&(square[1].innerHTML == cross)&&(square[2].innerHTML == cross))
			||
			((square[3].innerHTML == cross)&&(square[4].innerHTML == cross)&&(square[5].innerHTML == cross))
			||
			((square[6].innerHTML == cross)&&(square[7].innerHTML == cross)&&(square[8].innerHTML == cross))
			||
			((square[0].innerHTML == cross)&&(square[4].innerHTML == cross)&&(square[8].innerHTML == cross))
			||
			((square[2].innerHTML == cross)&&(square[4].innerHTML == cross)&&(square[6].innerHTML == cross))
			||
			((square[0].innerHTML == cross)&&(square[3].innerHTML == cross)&&(square[6].innerHTML == cross))
			||
			((square[1].innerHTML == cross)&&(square[4].innerHTML == cross)&&(square[7].innerHTML == cross))
			||
			((square[2].innerHTML == cross)&&(square[5].innerHTML == cross)&&(square[8].innerHTML == cross))
			
			||

			((square[0].innerHTML == ring)&&(square[1].innerHTML == ring)&&(square[2].innerHTML == ring))
			||
			((square[3].innerHTML == ring)&&(square[4].innerHTML == ring)&&(square[5].innerHTML == ring))
			||
			((square[6].innerHTML == ring)&&(square[7].innerHTML == ring)&&(square[8].innerHTML == ring))
			||
			((square[0].innerHTML == ring)&&(square[4].innerHTML == ring)&&(square[8].innerHTML == ring))
			||
			((square[2].innerHTML == ring)&&(square[4].innerHTML == ring)&&(square[6].innerHTML == ring))
			||
			((square[0].innerHTML == ring)&&(square[3].innerHTML == ring)&&(square[6].innerHTML == ring))
			||
			((square[1].innerHTML == ring)&&(square[4].innerHTML == ring)&&(square[7].innerHTML == ring))
			||
			((square[2].innerHTML == ring)&&(square[5].innerHTML == ring)&&(square[8].innerHTML == ring))
			) {
			alert('Игра завершена!');
			location.reload();
		}
	}, { once: true }); 
};