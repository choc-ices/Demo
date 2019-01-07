	var year, month, day;
	year = prompt("亲，请输入您的出生年份：");
	month = prompt("请输入您的出生月份：");
	day = prompt("请输入您的出生日期：");

	/*判断年份是否为闰年*/
	function CountFeb(year){
		if ((year%100)&&(year%4==0)||(year%400==0)){
			return 29;
		}
		else
		{
			return 28;
		}
	}

	/*计算具体的天数*/
	function CountDay(month, day, Feb){
		var countbirthday=0;
		var monthArray = [31,Feb,31,30,31,30,31,31,30,31,30,31];
		for (var i = 0; i < month-1; i++) {
			countbirthday += monthArray[i]
		}
		countbirthday = countbirthday + parseInt(day);
		return countbirthday;
	}

	var Feb = CountFeb(year);
	var birthday = CountDay(month, day, Feb);

	document.write("您的出生日期为" + year + "年的第" + birthday + "天！");