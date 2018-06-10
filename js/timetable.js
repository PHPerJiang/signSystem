/*
    @name:timetable.js
    @require:timetable.html
    @description:时间表页面js
    @author:张乃璎 fnine59@163.com
*/
$(document).ready(function(){
    //设置日期控件
    $('.form_datetime').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
    //日期控件设置结束

    //设置select
    $(".ui-select").selectWidget({
        change       : function (changes) {
            return changes;
        },
        effect       : "slide",
        keyControl   : true,
        speed        : 200,
        scrollHeight : 250
    });
    //设置select结束
});