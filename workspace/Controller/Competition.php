<?php
header('content-type:text/html;charset=utf-8');
require_once 'common/Db.php';
class Competition{
    /**
     * 竞赛记录首页
     */
    public function view(){
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('viewcompetition.html');
        
    }
    /**
     * 添加竞赛记录
     */
    public function add(){
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('addcompetition.html'); 
    }
    /**
     * 存储竞赛数据
     */
    public function save(){
        //获取表单传来的值
        $data=$_POST;
        $file=$_FILES;
        //初步校验表单数据
        if(($res=$this->checkInfo($data))!=1){
            $this->direct("$res");
        }
        //验证上传文件数据
        if (!empty($file['fileField']['size'][0])){
            $fileName=$_SERVER['DOCUMENT_ROOT'].'/signSystem/uploads/'.md5($_FILES['fileField']['name'][0].time()).'.jpg';
            if(!move_uploaded_file($file['fileField']['tmp_name'][0],$fileName)){
                $this->direct('文件上传失败');
            }
        }else {
            $fileName='';
        }
        //实例化Db引擎，录入数据
        $pdo=DB::getInstance();
        $sql='insert into competition value (null,:name,:time,:teamname,
:checkteam,:title,:grade,:top,:certificate)';
        $stmt=$pdo->prepare($sql);
        $arr=[
            'name'=>addslashes($data['competitionName']),
            'time'=>isset($data['competitionTime'])?strtotime($data['competitionTime']):0,
            'teamname'=>addslashes($data['competitionTeam']),
            'checkteam'=>isset($data['checkteam'])?1:0,
            'title'=>addslashes($data['title']),
            'grade'=>addslashes($data['grade']),
            'top'=>addslashes($data['top']),
            'certificate'=>$fileName,
        ];
        $stmt->execute($arr);
        if (($row=$stmt->rowCount())>0){
            $this->direct('上传成功');
        }else {
            $this->direct('上传失败');
        }
    }
    /**
     * 校验post数据
     * @param unknown $data
     * @return string|number|string
     */
    private function checkInfo($data){
        $mes=1;
        if (empty($data['competitionName'])){
            $mes='竞赛名称不能为空';
            return $mes;
        }elseif (empty($data['competitionTeam'])){
            $mes='队名不能为空';
            return $mes;
        }elseif (empty($data['title'])){
            $mes='题目不能为空';
            return $mes;
        }elseif (empty($data['grade'])||empty($data['top'])){
            $mes='等级和名词不能为空';
            return $mes;
        }
        return $mes;
    }
    /**
     * 信息提示及页面跳转
     * @param unknown $mes
     * @param string $url
     */
    private function direct($mes,$url='index.php?c=competition&m=add'){
        echo "<script>alert('$mes');window.location.href='$url';</script>";
    }
}