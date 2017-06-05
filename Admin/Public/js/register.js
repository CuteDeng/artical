function checkUsername(value){
    var myreg =  /^[A-Za-z0-9_\u4e00-\u9fa5]{2,16}$/;
    if(value!=""){
        if(!myreg.test(value)){
            $("#username").addClass("errorbox");
            $(".usernameNotice").html("请输入正确的用户名!").removeClass('correct');
            return false;
        }
        else{
            $("#username").removeClass('errorbox');
            $(".usernameNotice").html("").addClass("correct");
        }
    } 
    else {
        $("#username").addClass("errorbox");
        $(".usernameNotice").html("请输入用户名！").removeClass('correct');
    }

    var username = document.getElementById('username').value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4){
            document.getElementById('message').innerHTML = xhr.responseText;
            if(xhr.responseText !== ''){
                $("#username").addClass("errorbox");
                $(".usernameNotice").removeClass('correct');
            }
        }
    }
    xhr.open('get','checkNM?username='+username);
    xhr.send(null);   
}
function checkpwd(value){

    if(value == ""){
        $("#pass").addClass("errorbox");
        $(".passwordNotice").html("请输入密码！").removeClass('correct');
    } else {
        $("#pass").removeClass('errorbox');
        $(".passwordNotice").html("").addClass("correct");
    }

}
function checkRpwd(value){
    if(value == ""){
        $("#pass1").addClass("errorbox");
        $(".password1Notice").html("请再次输入密码！").removeClass('correct');
    } else if(value != $("#pass").val()) {
        $("#pass1").addClass("errorbox");
        $(".password1Notice").html("两次密码不一样！").removeClass('correct');
    } else{
        $("#pass1").removeClass('errorbox');
        $(".password1Notice").html("").addClass("correct");
    }
}
function checkMail(value){
    var myreg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
        if(value!="")
        {
            if(!myreg.test(value))
            {
                $("#mail").addClass("errorbox");
                $(".mailNotice").html("请输入有效的email!").removeClass('correct');
                return false;
            }
            else{
                $("#mail").removeClass('errorbox');
                $(".mailNotice").html("").addClass("correct");
            }
        }
        else {
            $("#mail").addClass("errorbox");
            $(".mailNotice").html("请输入您的邮箱！").removeClass('correct');
        }
}
function checkQQ(value){
    var myreg = /^[1-9][0-9]{4,9}$/;
        if(value!="")
        {
            if(!myreg.test(value))
            {
                $("#qq").addClass("errorbox");
                $(".qqNotice").html("请输入有效的QQ号!").removeClass('correct');
                return false;
            }
            else{
                $("#qq").removeClass('errorbox');
                $(".qqNotice").html("").addClass("correct");
            }
        }
        else {
            $("#qq").addClass("errorbox");
            $(".qqNotice").html("请输入QQ号！").removeClass('correct');
        }
}
function checkTel(value){
    var myreg = /^(0|86|17951)?(13[0-9]|15[012356789]|18[0-9]|14[57])[0-9]{8}$/;
        if(value!="")
        {
            if(!myreg.test(value))
            {
                $("#tel").addClass("errorbox");
                $(".telNotice").html("请输入有效的手机号!").removeClass('correct');
                return false;
            }
            else{
                $("#tel").removeClass('errorbox');
                $(".telNotice").html("").addClass("correct");
            }
        }
        else {
            $("#tel").addClass("errorbox");
            $(".telNotice").html("请输入手机号！").removeClass('correct');
        }
}

$(function() {

    // 密码输入事件
    $("#pass").keyup(function(event) {
        var txt = this.value;
        if( txt.length < 5 ){
            $("#strength_length > span").removeClass();
            $("#weak").addClass("lv1");
        }else{
            if( /^(?:\d+|[a-zA-Z]+|[!@#$%^&*]+)$/.test(txt) ){///[a-zA-Z]/
                $("#strength_length > span").removeClass();
                $("#weak").addClass("lv1");
            };
            if( /^(?![a-zA-z]+$)(?!\d+$)(?![!@#$%^&*]+$)[a-zA-Z\d!@#$%^&*]+$/.test(txt) ){///[0-9]/
                $("#strength_length > span").removeClass();
                $("#weak").addClass("lv1");
                $("#mid").addClass("lv2");
            };
            if( /^(?![a-zA-z]+$)(?!\d+$)(?![!@#$%^&*]+$)(?![a-zA-z\d]+$)(?![a-zA-z!@#$%^&*]+$)(?![\d!@#$%^&*]+$)[a-zA-Z\d!@#$%^&*]+$/.test(txt) ){///[^0-9a-zA-Z]/
                $("#strength_length > span").removeClass();
                $("#weak").addClass("lv1");
                $("#mid").addClass("lv2");
                $("#strong").addClass("lv3");
            };
        }
        
    });
   


    $("#wizard").scrollable({
        onSeek: function(event, i) {
            $("#status li").removeClass("active").eq(i).addClass("active");
        },
        onBeforeSeek: function(event, i) {
            if (i == 1) {
                var user = $("#username").val();
                var pass = $("#pass").val();
                var pass1 = $("#pass1").val();
                if (user == "" || pass == "" || pass1 == "") {
                    return false;
                }
            }

            if (i == 2) {
                var mail = $("#mail").val();
                var qq = $("#qq").val();
                var tel = $("#tel").val();
                if (mail == "" || qq == "" || tel == "") {
                    return false;
                }
            }
        }

    });
    
    // $("#sub").click(function() {
    //     var data = $("form").serialize();
    //     alert(data);
    // });
});
  