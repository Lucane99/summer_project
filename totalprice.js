<script type = "text/javascript" >
	function totalprice() {
 

    // JavaScript program to illustrate 
    // calculation of no. of days between two date 
  
    // To set two dates to two variables
    var date1 = new Date(document.getElementById("bookin").value);
var date2 = new Date(document.getElementById("bookout").value);
  
// To calculate the time difference of two dates
var Difference_In_Time = date2.getTime() - date1.getTime();
  
// To calculate the no. of days between two dates
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
var pph=document.getElementById("pph").value;
  
//To display the final no. of days (result)
var totalprice=parseint(pph)*Difference_In_Days *24;
 document.getElementById("totalprice").value = totalprice;
}
  
</script>

