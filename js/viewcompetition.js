/*
    @name:viewcompetition.js
    @require:viewcompetition.html
    @description:查看竞赛信息页面js
    @author:张乃璎 fnine59@163.com
*/
$(document).ready(function(){
    $('#addcompetition').click(function(){
        window.location.href="index.php?c=competition&m=add";
    });
    $("#del").click(function(){
    	var id =$("#del-id").val();
    	//声明全局变量，防止闭包问题
    	var $tr =$(this).parent().parent();
    	$.ajax({
    		url:'index.php?c=competition&m=del',
    		data:{"id":id},
    		success:function(res){
    			if(res.status==1){
    				$tr.remove();
    			}
    		},
    		cache:false,
    		dataType:'json',
    		type:'get',
    	});
    });
});