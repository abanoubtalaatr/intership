let send_contact_form = document.getElementById('send_contact_form'),
    your_name = document.getElementById('your_name'),
    email = document.getElementById('email'),
    subject = document.getElementById('subject'),
    message = document.getElementById('message');

send_contact_form.onclick = function(){
console.log('ys');
if(your_name.value!=='' && email.value!=='' && subject.value!=='' && message.value !==''){
	ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function() {
	  if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){

	          console.log(ajaxRequest.response);
	  }//ajaxrequest

	}// end onreadystyatechange 
  ajaxRequest.open('POST','/contact/',true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send('your_name='+your_name.value+'&email='+email.value+'&subject='+subject.value+'&message'+message.value);
}// end if

 
}