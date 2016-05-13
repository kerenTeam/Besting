(function(){
	$ = function(el){ return document.querySelector(el)};
	$$ = function(el){ return document.querySelectorAll(el)};

	// var read_li =  $$('.read_body_con');
	var up_num =  $$('.up_num');
	var down_num =  $$('.down_num');



	for (var i = 0; i < up_num.length; i++) {
		up_num[i].onclick = function(){
			var value_1 = this.parentNode.getElementsByTagName('input')[0].value;
				this.parentNode.getElementsByTagName('input')[0].value ++;
				if (value_1 >= 99) {
					this.parentNode.getElementsByTagName('input')[0].value = 99;
				} 	
		}
	}

	for (var i = 0; i < down_num.length; i++) {
		down_num[i].onclick = function(){
			var value_2 = this.parentNode.getElementsByTagName('input')[0].value;
				this.parentNode.getElementsByTagName('input')[0].value --;
				if (value_2 <= 1) {
					this.parentNode.getElementsByTagName('input')[0].value = 1;
				} 	
		}
	}

	

}());