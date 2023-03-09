// Description: This file is used to manage the banner on the front page
//link to the title banner
document.getElementById('title_on_banner').innerHTML = "Vous cherchez une boutique éphémère ?";

//link to the selector "ville" in banner
let selcity = document.createElement("select_city");
let opt1city = document.createElement("option_city");


opt1city.value = "1";
opt1city.text = "Option: Value 1";

selcity.add(opt1city, null);

//link to the selector "activité" in banner
let selactivity = document.createElement("select_activity");
let opt1activity = document.createElement("option_activity");


opt1activity.value = "1";
opt1activity.text = "Option: Value 1";

selactivity.add(opt1activity, null);

//link to the map
document.getElementById("main-map");
