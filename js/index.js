/*
    @name:index.js
    @require:index.html
    @description:首页js
    @author:张乃璎 fnine59@163.com
*/
$(document).ready(function(){
    jQuery(document).ready(function () {
        jQuery("#jquery-accordion-menu").jqueryAccordionMenu();

    });
    $(function(){
    	$(".exitHead").click(function(){
    		window.location.href="index.php?c=login&m=index";
    		$.get('index.php?c=login&m=logout');
    	});
    });
    $(function(){
        //顶部导航切换
        $("#demo-list li").click(function(){
            $("#demo-list li.active").removeClass("active")
            $(this).addClass("active");
        })
    });
    (function($) {
        $.expr[":"].Contains = function(a, i, m) {
            return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };
        function filterList(header, list) {
            //@header 头部元素
            //@list 无需列表
            //创建一个搜素表单
            var form = $("<form>").attr({
                "class":"filterform",
                action:"#"
            }), input = $("<input>").attr({
                "class":"filterinput",
                type:"text"
            });
            $(form).append(input).appendTo(header);
            $(input).change(function() {
                var filter = $(this).val();
                if (filter) {
                    $matches = $(list).find("a:Contains(" + filter + ")").parent();
                    $("li", list).not($matches).slideUp();
                    $matches.slideDown();
                } else {
                    $(list).find("li").slideDown();
                }
                return false;
            }).keyup(function() {
                $(this).change();
            });
        }
        $(function() {
            filterList($("#form"), $("#demo-list"));
        });
    })(jQuery);

    $('#attendance').click(function(){
        $('#subFrame').attr("src",'index.php?c=attendance&m=index');
        $('#position').html("签到");
    });
    $('#timetable').click(function(){
        $('#subFrame').attr("src",'index.php?c=timetable&m=index');
        $('#position').html("时间表");
    });
    $('#totaltime').click(function(){
        $('#subFrame').attr("src",'index.php?c=totaltime&m=index');
        $('#position').html("总时间");
    });
    $('#viewcompetition').click(function(){
        $('#subFrame').attr("src",'viewcompetition.html');
        $('#position').html("竞赛信息");
    });

});