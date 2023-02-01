var googleIconsSharp = document.createElement("link");
googleIconsSharp.rel = "stylesheet";
googleIconsSharp.href = "https://fonts.googleapis.com/icon?family=Material+Icons+Sharp";

var googleIconsSymbols = document.createElement("link");
googleIconsSymbols.rel = "stylesheet";
googleIconsSymbols.href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0";

var googleIconsSymbolsOutlinedFill = document.createElement("link");
googleIconsSymbolsOutlinedFill.href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0";

var googleIconsSymbolsRounded = document.createElement("link");
googleIconsSymbolsRounded.rel = "stylesheet";
googleIconsSymbolsRounded.href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0";

var jQuery = document.createElement("script");
jQuery.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";

let title = document.createElement("title");
title.innerHTML = "Ted";

document.getElementsByTagName("head")[0].appendChild(googleIconsSharp);
document.getElementsByTagName("head")[0].appendChild(googleIconsSymbols);
document.getElementsByTagName("head")[0].appendChild(googleIconsSymbolsOutlinedFill);
document.getElementsByTagName("head")[0].appendChild(googleIconsSymbolsRounded);
document.getElementsByTagName("head")[0].appendChild(jQuery);
document.getElementsByTagName("head")[0].appendChild(title);

function redirect(path){
    
    // loader();
    location.href = path;
}


function redirectBack(){

    // loader();
    window.location.replace(document.referrer);
}

function showHidePlaceHolder(self, placeHolderId, accountHolderContainId){

    if(self.value.length > 0){

        document.querySelector("#" + placeHolderId).style.display = "block";
    }else{

        document.querySelector("#" + placeHolderId).style.display = "none";
    }
}

function showHideElement(toHide = null, toShow = null, displayStyle = null){
    
    if(toHide !== null){

        document.querySelector("#" + toHide).style.display = "none";
    }

    if(toShow !== null){

        document.querySelector("#" + toShow).style.display = displayStyle;
    }
}