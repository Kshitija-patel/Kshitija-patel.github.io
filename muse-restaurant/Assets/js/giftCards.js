window.onload = pageReady;

function pageReady(){

	//Min Image
	var bigImage = document.getElementById("mainImg")

	//Getting images from gallery

	var i=0;
	var image=[];

	for(i=1;i<4;i++)
	{
		let giftImage = $("#pic"+i);
		giftImage.click(()=>{
			bigImage.src = giftImage.attr("src");
			console.log(giftImage);
		});
	}
	document.getElementById("cus_amt").addEventListener('input',function () {
		document.getElementById('amt').style.display = 'block';
		document.getElementById('amt').innerHTML = '$' + document.getElementById("cus_amt").value;
	})

	$(".amt_list").click(function (element) {
		document.getElementById('amt').style.display = 'block';
		document.getElementById("cus_amt").setAttribute('value', element.target.innerHTML.split('$')[1]);
		document.getElementById('amt').innerHTML = element.target.innerHTML;
		// document.getElementById('amt').style.border="2px solid  #4f2122";
		document.getElementById('amt').style.backdropFilter="blur(5px) contrast(0.8)";
	}) 

	$( "form.gc_form" ).submit(function( event ) {
		event.preventDefault();
		console.log('asd')
		$("#giftcard-form").html("<h3 class='thankyou-message'>Thank you for purchasing gift card!</h3>");
		return false;
	})
	
	
}

function myFunction() {
	var x = document.getElementById("rname").value;
	document.getElementById("gc_rnamecard").innerHTML =x;
  }

//   function myFunction1() {
// 	var y = document.getElementById("rmsg").value;
// 	document.getElementById("gc_rmessage").innerHTML =y;
//   }

