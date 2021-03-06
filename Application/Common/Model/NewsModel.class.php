<?php
namespace Common\Model;
use Think\Model;
class NewsModel extends Model{
    private $_db='';
    public function __construct(){
        $this->_db = M("news");
    }
    public function getNews($data,$page,$pageSize = 10){
        $condition = $data; 
        if(isset($data['keywords']) && $data['keywords']){
            $where['news_id'] = array('like',"%".$data['keywords']."%");    //模糊匹配news_id搜索
            $where['title'] = array('like',"%".$data['keywords']."%");      //模糊匹配title搜索
            $where['description'] = array('like',"%".$data['keywords']."%");//模糊匹配description搜索
            $where['_logic'] = 'OR';//or结构
            unset($condition['keywords']); //释放不用的字段
            $condition['_complex'] = $where; //复合查询，默认为and
        }
        if(!$condition['status']){
            $condition['status'] = array('neq',-1);
        }
        $offset = ($page - 1) * $pageSize;
        
        return $this->_db->where($condition)->limit($offset,$pageSize)->order('news_id desc')->select();
    }
    public function getNewsCount($data=array()){
        
        $condition = $data; 
        if(isset($data['keywords']) && $data['keywords']){
            $where['news_id'] = array('like',"%".$data['keywords']."%");
            $where['title'] = array('like',"%".$data['keywords']."%");
            $where['description'] = array('like',"%".$data['keywords']."%");
            $where['_logic'] = 'OR';//or结构
            unset($condition['keywords']); //释放不用的字段
            $condition['_complex'] = $where; //复合查询，默认为and
        }
        if(!$condition['status']){
            $condition['status'] = array('neq',-1);// -1表示删除的状态 ，这里查询条件为不等于-1
        }
        return $this->_db->where($condition)->count();
        
    }
    
    public function find($id){
        if(!$id || !is_numeric($id)){
            return 0;
        }
        return $this->_db->where("news_id = ".$id)->find();
    }


    //添加数据
    public function insert($data){
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        $data['username'] = getLoginUsername();
        $data['create_time'] = time();
        return $this->_db->add($data);
    }
    
    //通过id 更新数据
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('ID不合法！');
        }
        if(!$data || !is_array($data)){
            return E('更新的数据不合法！');
        }

        return $this->_db->where('news_id = '.$id)->save($data);
    }
    
    //更改状态
    public function updateStatusById($id,$status){
        if(!$id || !is_numeric($id)){          
            return E('ID不合法！');
        }
        if(!is_numeric($status)){
            return E('状态不合法！');
        }
        $data = array('status' => $status);
        return $this->_db->where('news_id = '.$id)->save($data);
    }
    
    //前台选择一条最新推荐和列表,后台选择最大阅读数
    public function select($data = array(),$limit = 0,$orderby = '') {
        if(!$data || !is_array($data)){
            return 0;
        }
        if($orderby){
            $this->_db->order($orderby.' desc');
        }  else {
            $this->_db->order('news_id desc');
        }
        
        if($limit){
            $this->_db->limit($limit);
        }
        return $this->_db->where($data)->select();
    }
}