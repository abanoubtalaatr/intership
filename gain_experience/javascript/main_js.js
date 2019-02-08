// This for appearance log in form 
//This code using in header.php page 
let button_log_in = document.getElementById('log_in'),
    div_form = document.getElementsByClassName('form'),
    cover_div = document.getElementById('cover');
button_log_in.onclick = function(){
	cover_div.style.display = 'block';
    div_form[0].style.display = 'block';
}
// End the appearance log in form 

// This code using in admin_view.php  for appearance page to add new post in news_view page
