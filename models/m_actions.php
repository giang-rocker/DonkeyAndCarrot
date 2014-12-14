 <?php 
include_once("./config/database.php");
  class Tb_action extends database{
    private $ACTION_ID ;
	 private $ACTION_TITLE ;
	 private $ACTION_POINT ;
	 private $ACTION_DESC ;
	  //List OF Primary Key
 // action_id 
	
       
	public function setACTION_ID($ACTION_ID){ 
            $this->ACTION_ID = $ACTION_ID;
        }
        public function getACTION_ID(){
            return $this->ACTION_ID;
        }
		
       
	public function setACTION_TITLE($ACTION_TITLE){ 
            $this->ACTION_TITLE = $ACTION_TITLE;
        }
        public function getACTION_TITLE(){
            return $this->ACTION_TITLE;
        }
		
       
	public function setACTION_POINT($ACTION_POINT){ 
            $this->ACTION_POINT = $ACTION_POINT;
        }
        public function getACTION_POINT(){
            return $this->ACTION_POINT;
        }
		
       
	public function setACTION_DESC($ACTION_DESC){ 
            $this->ACTION_DESC = $ACTION_DESC;
        }
        public function getACTION_DESC(){
            return $this->ACTION_DESC;
        }
		 public function add(){
$this->setQuery("insert into tb_action(ACTION_ID,ACTION_TITLE,ACTION_POINT,ACTION_DESC) values  ( '".$this->getACTION_ID()."','".$this->getACTION_TITLE()."','".$this->getACTION_POINT()."','".$this->getACTION_DESC()."')") ;
			
			return $this->executeQuery(); 
			} 
			  
	 public function update(){ 
        $this->setQuery ("update tb_action set ACTION_TITLE='".$this->getACTION_TITLE()."' ,ACTION_POINT='".$this->getACTION_POINT()."' ,ACTION_DESC='".$this->getACTION_DESC()."' where ACTION_ID ='".$this->getACTION_ID()."'");
		return $this->executeQuery();
        } 

   public function delete(){ 
            $this->setQuery("delete from tb_action where ACTION_ID ='".$this->getACTION_ID()."'"); 
		   return $this->executeQuery(); 
        }
		public function listOfTb_action () { 
  		mysql_query ("set character_set_results='utf8'");  
		 $result = mysql_query("select * from tb_action"); 
		 $data; 
		 while ($row = mysql_fetch_array ($result)) 
				$data [] = $row;	 
		
		 return $data; 
		}
		
	 public function getActionById($id) {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from tb_action where ACTION_ID=".$id);
        $data="";
         $row = mysql_fetch_array($result);
            $data  = $row;

        return $data;
    }
		
		
    public function getActionTitleById($id) {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select ACTION_TITLE from tb_action where ACTION_ID=".$id);
        $data="";
         $row = mysql_fetch_array($result);
            $data  = $row;

        return $data[0]["ACTION_TITLE"];
    }

}
?> 
