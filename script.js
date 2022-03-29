var menuItems = document.getElementById("menuItemID")
var showDate = document.querySelector("#date");
var html = document.querySelector("html");

function showMenu(){
       menuItems.style.right = "0";
     //  I have made visiblilty hidden so I have to change it to visible to show that
       menuItems.style.visibility="visible";
       document.getElementById("showMenu").style.visibility="hidden"; 
       html.style.overflow="hidden"; //doing nothing not scrolling when
                                //mobile three dots is opened     
}

function hideMenu(){
     menuItems.style.right = "-100%";
     document.getElementById("showMenu").style.visibility="visible";
     html.style.overflow="visible";   // doing normal again in three dots 
}

//timing function 
const date = new Date().getHours();

if(date>=0 && date<=4){
  showDate.innerHTML="Good Night <span>(</span> <span class='blink'>:</span> ";
}
else if(date>=5 && date<=11){
  showDate.innerHTML='Good Morning <span>(</span> <span class="blink">:</span>';
}
else if(date>=12 && date<=17){
  showDate.innerHTML="Good Afternoon <span>(</span> <span class='blink'>:</span> ";
}
else if(date>=18 && date<=21){
  showDate.innerHTML="Good Evening <span>(</span> <span class='blink'>:</span>";
}
else{
  showDate.innerHTML="Good Night <span>(</span> <span class='blink'>:</span>";
}



// chat Plugin goes here
// ************************
// ***********************


var chatbox = document.getElementById('fb-customer-chat');
chatbox.setAttribute("page_id", "1149917848539590");
chatbox.setAttribute("attribution", "biz_inbox");

window.fbAsyncInit = function() {
FB.init({
xfbml            : true,
version          : 'v12.0'
});
};

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));