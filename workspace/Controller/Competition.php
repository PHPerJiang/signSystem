<?php
header('content-type:text/html;charset=utf-8');
require_once 'common/Db.php';
require_once 'common/common.php';
class Competition{
    /**
     * 竞赛记录首页
     */
    public function view(){
        /*权限验证  */
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        /*数据库连接  */
        $pdo=DB::getInstance();
        $sql='select * from competition';
        $stmt=$pdo->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $key =>$value){
            $data[$key]['time']=empty($value['time'])?'':date('Y-m-d',$value['time']);
        }
        View::assign(array('data'=>$data));
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
            return false;
        }
        //验证上传文件数据
        if (!empty($file['fileField']['size'][0])){
            $fileName='/signSystem/uploads/'.md5($_FILES['fileField']['name'][0].time()).'.jpg';
            if(!move_uploaded_file($file['fileField']['tmp_name'][0],$_SERVER['DOCUMENT_ROOT'].$fileName)){
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
        /*拼装数组  */
        $arr=[
            'name'=>addslashes($data['competitionName']),
            'time'=>empty($data['competitionTime'])?0:strtotime($data['competitionTime']),
            'teamname'=>addslashes($data['competitionTeam']),
            'checkteam'=>isset($data['checkTeam'])?1:0,
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
     * 删除竞赛记录
     */
    public function del(){
       $id=intval($_GET['id']);
       $pdo=DB::getInstance();
       $sql='delete from competition where id=:id';
       $stmt=$pdo->prepare($sql);
       $stmt->execute(array('id'=>$id));
       show(1);
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