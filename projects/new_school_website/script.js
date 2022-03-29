var menuItems = document.getElementById("menuItemID")
var showDate = document.querySelector("#date");
var html = document.querySelector("html");

function showMenu(){
       menuItems.style.right = "0";
     //  I have made visiblilty hidden so I have to change it to visible to show that
       menuItems.style.visibility="visible";
       document.getElementById("showMenu").style.visibility="hidden"; 

}

function hideMenu(){
     menuItems.style.right = "-100%";
     document.getElementById("showMenu").style.visibility="visible";
  
}
