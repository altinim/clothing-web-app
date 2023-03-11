<?php


class Article {
    private $id;
    public $titulli;
    public $cmimi;
    public $pershkrimi;
    public $data;
    public $foto;
    public $id_dyqani;


    function __construct(array $article =[]){

        $this->titulli=isset($article['titulli']) ? $article['titulli'] : null;
        $this->cmimi=isset($article['cmimi']) ? $article['cmimi'] : null;
        $this->data=isset($article['data']) ? $article['data'] : null;
        $this->id_dyqani=isset($article['id_dyqani']) ? $article['id_dyqani'] : null;
        $this->pershkrimi=isset($article['pershkrimi']) ? $article['pershkrimi'] : null;
        $this->foto=isset($article['foto']) ? $article['foto'] : null;

    }
    public function getId(){
        return $this->id;
    }
    public function save(){
        if(is_null($this->id)){

            $new_id =$this->db->insert("artikujt",[

                "titulli"=>$this->titulli,
                "cmimi"=>$this->cmimi,
                "data"=>$this->data,
                "id_dyqani"=>$this->id_dyqani,
                "pershkrimi"=>$this->pershkrimi,
                "foto"=>$this->foto
            ]);

            return $new_id;
        }else{
            $rezultati=$this->db->update("artikujt",[
                "titulli"=>$this->titulli,
                "cmimi"=>$this->cmimi,
                "data"=>$this->data,
                "id_dyqani"=>$this->id_dyqani,
                "pershkrimi"=>$this->pershkrimi,
                "foto"=>$this->foto
            ],"id={$this->id}");
            return $rezultati;
        }
    }
    public function delete(){
        $rezultati=$this->db->delete("artikujt","id={$this->id}");
        return $rezultati;
    }
    public static function getById(int $id){

        $sql="SELECT * FROM artikujt WHERE id= :id";

        $db=new Database();

        $datta=$db->select($sql,[":id"=>$id]);

        if(count($datta)){
            $article=new Article();
            $article->id = $datta[0]["id"];
            $article->titulli=$datta[0]["titulli"];
            $article->cmimi=$datta[0]["cmimi"];
            $article->data=$datta[0]["data"];
            $article->id_dyqani=$datta[0]["id_dyqani"];
            $article->pershkrimi=$datta[0]["pershkrimi"];
            $article->foto=$datta[0]["foto"];
            return $article;
        }else{
            return null;
        }
    }
    public static function getList(string $condition="1"){
        $sql="SELECT * FROM artikujt WHERE $condition";

        $db=new Database();

        $dattaa=$db->select($sql);

        $artikujt=[];

        if(count($dattaa)){

            foreach($dattaa as $data){
                $article=new Article();
                $article->id=$data["id"];
                $article->titulli=$data["titulli"];
                $article->cmimi=$data["cmimi"];
                $article->data=$data["data"];
                $article->id_dyqani=$data["id_dyqani"];
                $article->pershkrimi=$data["pershkrimi"];
                $article->foto=$data["foto"];

                array_push($artikujt,$article);
            }

            return $artikujt;
        }else{
            return array();
        }
    }
}