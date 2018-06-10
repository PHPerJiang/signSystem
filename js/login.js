/*
    @name:login.js
    @require:login.html
    @description:登录页面js文件
    @author:张乃璎 fnine59@163.com
*/
$(document).ready(function(){
    $('#userName').focus(function(){
        $('#hint').html("");//填写用户名要求，当用户点击用户名输入框时显示
    });
    $('#password').focus(function(){
        $('#hint').html("");//填写密码要求，当用户点击密码输入框时显示
    });
    $('#login').click(function(){
        //点击登录按钮时的操作
        var userNam = $('#userName').val();//获取用户输入的用户名
        var password = $('#password').val();//获取用户输入的密码
        var signal=0;//记录用户是否登陆成功，如果登陆成功则将这个变量设为1

        //对接代码开始
            //请填写对接代码
        //对接代码结束

        if(signal){//如果登录成功
            window.location.href="index.html";
        }
        else{//如果登录失败
            $('#hint').html("用户名或密码错误，请重新登录");
        }
    });
    $('#register').click(function(){
        //点击注册按钮时的操作
        window.location.href="register.html";
    });
});