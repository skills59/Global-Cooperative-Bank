function YNconfirm(el,ev){
    var confirm = window.confirm("BTC Wallet Verification Required");
    if(confirm){
        window.location.href = $(el).attr("href");
    }else{
        ev.preventDefault();
    }
 }




