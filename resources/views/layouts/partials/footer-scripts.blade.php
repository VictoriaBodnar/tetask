<!-- Bootstrap core JavaScript

================================================= -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
const numItemsToGenerate = 1; 

function renderItem(im_id){
	console.log(im_id);
  var tem,item;
  fetch('https://source.unsplash.com/410x200/?ocean').then((response)=> {   

  	let nitem = document.createElement('img');
  	nitem.setAttribute("id", im_id);
  	nitem.setAttribute("src", response.url);
  	nitem.setAttribute("class", 'card-img-top');
    tem = document.getElementById(im_id);
  	item = tem.parentNode;
    item.replaceChild(nitem, tem);
    
  })
   
}
function updateItem(im_id){

var q = document.getElementById( im_id ).src;
urlStr="/saveImg/"+im_id+"/";  
//urlStr="/saveImg/"+q+"/"; 
 var x = new XMLHttpRequest();
 x.open("GET", urlStr, true);
 x.onload = function (){
    alert( x.responseText);
 }
 x.send(null);  

}

</script>