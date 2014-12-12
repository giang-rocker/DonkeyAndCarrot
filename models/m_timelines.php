 <?php 
include_once("./config/database.php");
  class Tb_timelines extends database{
    private $timeline_id ;
	 private $timeline_icon ;
	 private $timeline_type ;
	 private $timeline_date ;
	 private $timeline_location ;
	  //List OF Primary Key
 // timeline_id 
	
       
	public function setTimeline_id($timeline_id){ 
            $this->timeline_id = $timeline_id;
        }
        public function getTimeline_id(){
            return $this->timeline_id;
        }
		
       
	public function setTimeline_icon($timeline_icon){ 
            $this->timeline_icon = $timeline_icon;
        }
        public function getTimeline_icon(){
            return $this->timeline_icon;
        }
		
       
	public function setTimeline_type($timeline_type){ 
            $this->timeline_type = $timeline_type;
        }
        public function getTimeline_type(){
            return $this->timeline_type;
        }
		
       
	public function setTimeline_date($timeline_date){ 
            $this->timeline_date = $timeline_date;
        }
        public function getTimeline_date(){
            return $this->timeline_date;
        }
		
       
	public function setTimeline_location($timeline_location){ 
            $this->timeline_location = $timeline_location;
        }
        public function getTimeline_location(){
            return $this->timeline_location;
        }
		 public function add(){
$this->setQuery("insert into tb_timelines(timeline_id,timeline_icon,timeline_type,timeline_date,timeline_location) values  ( '".$this->getTimeline_id()."','".$this->getTimeline_icon()."','".$this->getTimeline_type()."','".$this->getTimeline_date()."','".$this->getTimeline_location()."')") ;
			
			return $this->executeQuery(); 
			} 
			  
	 public function update(){ 
        $this->setQuery ("update tb_timelines set timeline_icon='".$this->getTimeline_icon()."' ,timeline_type='".$this->getTimeline_type()."' ,timeline_date='".$this->getTimeline_date()."' ,timeline_location='".$this->getTimeline_location()."' where timeline_id ='".$this->getTimeline_id()."'");
		return $this->executeQuery();
        } 

   public function delete(){ 
            $this->setQuery("delete from tb_timelines where timeline_id ='".$this->getTimeline_id()."'"); 
		   return $this->executeQuery(); 
        }
    public function listOfTb_timelines () { 
  		mysql_query ("set character_set_results='utf8'");  
		 $result = mysql_query("select * from tb_timelines order by TIMELINE_DATE"); 
		 $data; 
		 while ($row = mysql_fetch_array ($result)) 
				$data [] = $row;	 
		
		 return $data; 
		}
		
			}
			
		 ?> 
			