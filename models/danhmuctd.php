<?php 
    function them_thucdon($ten){
        $sql = "insert into thucdon(name) values('$ten')";
        pdo_execute($sql);
    }
    function xoa_thucdon($id){
        $sql = "delete from thucdon where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function ht_thucdon(){
        $sql ="select * from thucdon";
        $thucdon = pdo_query($sql);
        return $thucdon;
    }
    function sua_thucdon($id){
        $sql ="select * from thucdon where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function capnhap_dm($id,$ten){
        $sql = " update thucdon set name = '".$ten."' where id=".$id;
        pdo_execute($sql);
    }
?>