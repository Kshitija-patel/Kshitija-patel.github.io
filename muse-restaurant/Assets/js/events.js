$(document).ready(function(){
   
    // $(".contentBox").hide();
    
   // $('#h1').click(function(){
      // $('#h1-content').slideToggle(3000);
    // });

    // $('#h2').click(function(){
        // $('#h2-content').slideToggle(3000);
    // });
	
	// $('#h3').click(function(){
        // $('#h3-content').slideToggle(3000);
    // });
	// function myFunction() {
  // document.getElementById("demo").innerHTML = "Hello World";
// }
});

function changeText() {

var b1 = document.getElementById('b1');
var b2 = document.getElementById('b2');
var b3 = document.getElementById('b3');

            document.getElementById("b1").onclick = function(){ 
			myfun('h1','December 14');
			myfun('title1','You are cordially invited to a Holiday Afternoon Tea at Muse');
			myfun('h1-content','Todays special is Mini Scones served with Chantilly Cream and Fruit Preserves, Assorted Finger Sandwiches and some Delectable Desserts.');
			}
			
			document.getElementById("b2").onclick = function(){ 
			myfun('h1','December 25');
			myfun('title1','Festive Christmas Buffet in the Grand Ballroom');
			myfun('h1-content','This Holiday Buffet features five fresh and tasty Salads, an Antipasto Bar with Cheeses, grilled Vegetables, smoked Meats and chilled Seafood, slow roasted Turkey, Prime Rib, Sole, Maple Cinnamon Glazed Ham, Pasta, Vegetables, Fruits and decadent Desserts.');
			}
			
			document.getElementById("b3").onclick = function(){ 
			myfun('h1','December 31');
			myfun('title1','Ring in the New Year in Style at our Muse Dinner & Dance!');
			myfun('h1-content','Ring in the new decade at Muse Restaurant with our New Years Eve dinner.Two Seating times are available, 5:30-7:30 (4 course menu) and 8:30-10:30 (5 course menu) for more information, and reservations please call 456-789-1234.');
            }
}
function myfun(elementid, content){
	   document.getElementById(elementid).innerHTML = content;
}

