  class Programmer {
           var $name;        
           var $experience;  
           var $lang;         
           var $education;    

           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }


           function get_name() {
                return $this->name;
           }
           function set_name($newname) {
                $this->name = $newname;
           }
           function get_experience() {
                return $this->experience;
           }
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           function get_lang() {
                return $this->lang;
           }
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           function get_education() {
                return $this->education;
           }
           function set_education($neweducation) {
                $this->education = $neweducation;
           }


           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 ?>


