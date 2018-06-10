/*
    @name:attendance.js
    @require:attendance.html
    @description:签到计时页面js
    @author:张乃璎 fnine59@163.com
*/
var interval, reg = /^\d$/,
    sleep = 1000,
    sum = 0;
window.onload = function() {
    var oA = document.getElementById('oA');
    var oT = document.getElementById('oT');
    oA.onclick = function() {
        if (!interval) {
            interval = setInterval(function() {
                sum++;
                var d = new Date("1111/1/1,0:0:0");
                d.setSeconds(sum);
                var h = d.getHours();
                h = reg.test(h) ? "0" + h + ":" : h + ":"
                var m = d.getMinutes();
                m = reg.test(m) ? "0" + m + ":" : m + ":"
                var s = d.getSeconds();
                s = reg.test(s) ? "0" + s : s;
                oT.value = h + m + s;
            }, sleep);
            this.innerHTML = "停止计时";
        } else {
            clearInterval(interval);
            interval = null;
            this.innerHTML = "开始计时";
            //在这里由oT.value获取到暂停时的时间
            alert(oT.value);
        }
    }
}