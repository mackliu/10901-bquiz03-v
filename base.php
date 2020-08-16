<?php
date_default_timezone_set("Asia/Taipei");

session_start();


class DB{
    private $table;
    private $dsn="mysql:host=localhost;charset=utf8;dbname=db03";
    private $root="root";
    private $pw="";
    private $pdo;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->root,$this->pw);
    }

    public function all(...$arg){
        $sql="select * from $this->table ";
        if(!empty($arg[0]) && is_array($arg[0])){
            foreach($arg[0] as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            $sql=$sql ." where " .implode(" && ",$tmp);
        }

        if(!empty($arg[1])){
            $sql= $sql . $arg[1];
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetchAll();
    }

    public function count(...$arg){
        $sql="select count(*) from $this->table ";
        if(!empty($arg[0]) && is_array($arg[0])){
            foreach($arg[0] as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            $sql=$sql . " where" .implode(" && ",$tmp);
        }

        if(!empty($arg[1])){
            $sql= $sql . $arg[1];
        }
        
        return $this->pdo->query($sql)->fetchColumn();
    }
    public function find($arg){
        $sql="select * from $this->table ";

        if(is_array($arg)){
            foreach($arg as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            $sql=$sql . " where " . implode(" && ",$tmp);
        }else{
            $sql= $sql . " where `id`='$arg'";
        }

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    }
    public function del($arg){
        $sql="delete from $this->table ";

        if(is_array($arg)){
            foreach($arg as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            $sql=$sql . " where " . implode(" && ",$tmp);
        }else{
            $sql= $sql . " where `id`='$arg'";
        }

        return $this->pdo->exec($sql);

    }
    public function save($arg){
        if(!empty($arg['id'])){
            foreach($arg as $key => $value){
                if($key != 'id'){

                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
            }
            $sql ="update $this->table set " . implode(",",$tmp) . " where `id`='".$arg['id']."'";
        }else{
            $sql="insert into $this->table (`".implode("`,`",array_keys($arg))."`) values('".implode("','",$arg)."')";
        }
        return $this->pdo->exec($sql);
    }
    public function q($sql){
        return $this->pdo->query($sql)->fetchAll();
    }

}

function to($url){
    header("location:".$url);
}


$Movie=new DB('movie');
$Poster=new DB('poster');
$Ord=new DB("ord");

$sess=[
1=>"14:00~16:00",
2=>"16:00~18:00",
3=>"18:00~20:00",
4=>"20:00~22:00",
5=>"22:00~24:00",
];

$lv=[
1=>'普遍級',
2=>'輔導級',
3=>'保護級',
4=>'限制級'
];


?>