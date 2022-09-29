function YNconfirm(el,ev){
    var confirm = window.confirm("Kindly Confirm Transaction Details Before Proceeding, If Sure Press OK");
    if(confirm){
        window.location.href = $(el).attr("href");
    }else{
        ev.preventDefault();
    }
 }




