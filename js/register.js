/*
    @name:register.js
    @require:login.html
    @description:注册页面js文件
    @author:张乃璎 fnine59@163.com
*/
$(document).ready(function(){
    var userReg = /^[a-zA-Z0-9_\u4e00-\u9fa5]{1,10}$/;//用户名验证规则（汉字、字母或数字，1-10位）
    var msg=/^[0-9a-zA-Z!@#$%^&*()_+-=./\*\\~`,;'":\[\]\{\}|?><]{6,20}$/;//密码验证规则(数字、字母、键盘上可见的特殊符号，6-20位)
    var pwdFlag,userFlag;
    $('#userName').focus(function(){
        $('#hint').html("请设置用户名，可包含汉字字母或数字，1-10位");//填写用户名要求，当用户点击用户名输入框时显示
    });
    $('#userName').blur(function(){
        var userNam = $('#userName').val();//获取用户输入的用户名
        userFlag = userReg.test(userNam);
        if(userFlag){//如果满足用户名条件
            $('#hint').html("");
        }
        else{
            $('#hint').html("用户名格式错误");
        }
    });
    $('#password').focus(function(){
        $('#hint').html("请设置密码，可包含数字字母及特殊符号，6-20位");//填写密码要求，当用户点击密码输入框时显示
    });
    $('#password').blur(function(){
        var password = $('#password').val();//获取用户输入的密码
        pwdFlag= msg.test(password);
        if(pwdFlag){//如果满足密码条件
            $('#hint').html("");
        }
        else{
            $('#hint').html("密码格式错误");
        }
    });
    $('#register').click(function(){
        //点击注册按钮时的操作
        var userNam = $('#userName').val();//获取用户输入的用户名
        var password = $('#password').val();//获取用户输入的密码
        if(userFlag&&pwdFlag){
            //对接代码开始
                //请填写用户注册对接代码
        	var url='../doAction/register.php';
        	var data={"username":userNam,"password":password};
        	var success=function(res){
        		if(res.status==1){
        			window.location.href="index.php?c=index&m=index";
        		};
        	}
        	$.ajax({
        		url:url,
        		data:data,
        		success:success,
        		dataType:'json',
        		type:'post',
        	});
            //对接代码结束
        }
        else if(!userFlag){
            $('#hint').html("用户名格式错误");
        }
        else if(!pwdFlag){
            $('#hint').html("密码格式错误");
        }
        else{
            $('#hint').html("注册失败，请重新注册");
        }
    });
    $('#login').click(function(){
        //点击登录按钮时的操作
        window.location.href="index.php?c=login&m=index";
    });
});