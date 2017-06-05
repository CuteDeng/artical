window.onload = function(){
   var lis = document.getElementsByTagName('li');
   var content = document.getElementById('content');
   var divs = content.getElementsByTagName('div');
        
    for (var i = 0 , len = lis.length; i < len; i++) {
        lis[i].index = i;

        lis[i].onclick = function(){
            //将所有的li的class清除，同时将content中所有的div都隐藏起来
            for (var j = 0 ; j < len; j ++) {
                lis[j].className = "";
                divs[j].style.display = "none";
            }
            //将当前的li的样式设置为on，将对应的div显示出来
            lis[this.index].className = "on";
            divs[this.index].style.display = "block";
            
            //改变鼠标样式
            this.style.cursor = "pointer";
        }
    } 
}
