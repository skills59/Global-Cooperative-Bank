function show(aval) {    
		if (aval == "0") {//if 1 then show it
			optionyes.style.visibility='visible';
			optionyes.style.display='block';
			Form.fileURL.focus();
    } 
		else {//for everything else hide it
			optionyes.style.visibility='hidden';
			optionyes.style.display='none';
    }
		if (aval == "1") {//if 1 then show it
			optionlong.style.visibility='visible';
			optionlong.style.display='block';
			Form.fileURL.focus();
    }
		else {//for everything else hide it
			optionlong.style.visibility='hidden';
			optionlong.style.display='none';
    }    
}
