(function(){
	$$$ = function(el){ return document.querySelector(el)};
	$$ = function(el){ return document.querySelectorAll(el)};

	var up_num =  $$('.up_num');
	var down_num =  $$('.down_num');
	var price_s =  $$('.price_s');
	var allprice = $$$('#allprice');


	// 加
	for (var i = 0; i < up_num.length; i++) {
		up_num[i].i = i;
		up_num[i].onclick = function(){
			updown(this);
		}
	}

	// 减
	for (var i = 0; i < down_num.length; i++) {
		down_num[i].i = i;
		down_num[i].onclick = function(){
			updown(this);

		}
	}

	// 加减函数
	function updown(index){
		var ad = index.i;
		var oneprice = price_s[ad].innerHTML.split("￥")[1];
		var value_s = 0;

		if (index.className == 'down_num') {
			value_s = --index.parentNode.getElementsByTagName('input')[0].value;
			if (value_s <= 0) {
				value_s = index.parentNode.getElementsByTagName('input')[0].value = 0;
			}
			console.log(value_s);
		} 
		if (index.className == 'up_num') {
			value_s = ++index.parentNode.getElementsByTagName('input')[0].value;
			if (value_s >= 99) {
				value_s = index.parentNode.getElementsByTagName('input')[0].value = 99;
			}
			console.log(value_s);
		}
		 
		total(ad,value_s,oneprice);
	}

	// 合计
	function total(ads,values,oneprices){
		var totals = 0;
		var sub_total = values*oneprices;
		for (var i = 0; i < price_s.length; i++) {
			price_s[ads].sub = sub_total;//给点击的对象添加sub属性，保存每次点击菜品 的 小计
			if (price_s[i].sub) {//如果元素有这个属性 就遍历他
				totals +=  parseFloat(price_s[i].sub);
			}
		}
		
		allprice.innerHTML = totals.toFixed(2);

	}

}());