<?php
//想获取level需现将数组按照pid升序排个序
function list_tree($data,$pk='id',$pid='pid',$root=0,$child="child",$level=1){
    $tree = [];
    $list = [];
    foreach($data as $k=>$v){$list[$v[$pk]]=&$data[$k];}
    foreach($data as $k=>$v){
        $parentId = $v[$pid];
        if($v[$pid] == $root ){
            $data[$k]['level'] = $level;
            $tree[] = &$data[$k];
        }else{
            if(isset($list[$parentId])){
                $parent = &$list[$parentId];
                $parent[$child][] = &$data[$k];
                $data[$k]['level'] = $parent['level']+1;
            }
        }
    }
    return $tree;
}
function list_to_tree($list, $pk='id', $pid = 'pid', $child = '_child', $root = 0,$level = 1) {
    // 创建Tree
    $tree = array();
    if(is_array($list)) {
        // 创建基于主键的数组引用
        $refer = array();
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] =& $list[$key];
        }
        $refer[1]['hello']=1;
        foreach ($list as $key => $data) {
            // 判断是否存在parent
            $parentId = $data[$pid];
            if ($root == $parentId) {
//                $list[$key]['level'] = $level;
                $tree[] =& $list[$key];
            }else{
                if (isset($refer[$parentId])) {
                    $parent =& $refer[$parentId];
//                    $list[$key]['level'] = $parent['level']+1;
                    $parent[$child][] =& $list[$key];
                }
            }
        }
    }
    return $tree;
}
/**
 * 将list_to_tree的树还原成列表
 * @param  array $tree  原来的树
 * @param  string $child 孩子节点的键
 * @param  string $order 排序显示的键，一般是主键 升序排列
 * @param  array  $list  过渡用的中间数组，
 * @return array        返回排过序的列表数组
 * @author yangweijie <yangweijiester@gmail.com>
 */
function tree_to_list($tree, $child = '_child', $order='id', &$list = array()){
    if(is_array($tree)) {
        $refer = array();
        foreach ($tree as $key => $value) {
            $reffer = $value;
            if(isset($reffer[$child])){
                unset($reffer[$child]);
                tree_to_list($value[$child], $child, $order, $list);
            }
            $list[] = $reffer;
        }
        $list = list_sort_by($list, $order, $sortby='asc');
    }
    return $list;
}
function ssort($data,$field='id'){
    array_column($data,'id',$field);
}
/**
 * 二位数组按照字段排序
 * @param array $arr 需要排序的二维数组
 * @param string $field 需要排序的字段
 * @param string $sort 降序还是升序 SORT_ASC，SORT_DESC
 * @pram string $type  可能的值:
 *       SORT_REGULAR 默认按常规排序
 *       SORT_NUMERIC 每一项作为数字来处理
 *       SORT_STRING 每一项作为字符串来处理
 *      SORT_LOCALE_STRING
 *      SORT_NATURAL
 *      SORT_FLAG_CASE
 */
function filedSort($arr,$field='id',$sort=SORT_ASC,$type=SORT_REGULAR){
    $sort = array_column($arr,$field);
    array_multisort($sort,$sort,$type,$arr);
    return $arr;
}

function skin(){
    if(auth('admin')->user()->skin == 'index') return 'admin';
    return 'layout';
}