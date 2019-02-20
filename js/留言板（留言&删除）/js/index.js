window.onload = function(){
	var count=0;  //用来判断是否为第一个节点，也可以用来计算留言多少条
	var msg = document.getElementById("message");
	var submits = document.getElementById("submits");
	var msgBox = document.getElementById("msgBox");
	var lis = document.getElementsByTagName("li");  //获取所有的留言条li
	var del = document.getElementsByClassName("del");

	submits.onclick = function(){
		var node = document.createElement("li");   //创建<li></li>
		// console.log(node);
		if(msg.value){
			node.innerHTML = msg.value + "<span class='del'>删除</span>"; //<li>标签内容赋值为input输入框中的内容
		}
		if(count==0){                             //判断是否为添加的第一个li标签，是的话，使用appendChild()添加节点
			msgBox.appendChild(node);
			count++;
		}else{
			msgBox.insertBefore(node,lis[0]);     //不是第一个li标签的话，使用insertBefore将内容添加到最前面
			count++;
		}
		msg.value = "";                           //清空input输入框。或者msg.value = null;

		for(var i=0;i<lis.length;i++){
			del[i].onclick = function(){
				msgBox.removeChild(this.parentNode);       //点击删除，删除相对应的父元素，即<li></li>
				// console.log("removeChild");
				count--;
			}
		}
	}
}





