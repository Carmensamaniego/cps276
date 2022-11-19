<?php
//russet-v8.wccnet.edu/~csamanicg/cps276/assignments/assignment9/displaynotes
//russet-v8.wccnet.edu/~csamanicg/cps276/assignments/assignment9/index

class Pages {
	public function nav(){
		$nav = <<<NAV
      <nav>
        
          <a href="displaynotes">Display Notes</a><br>

          
        
      </nav>
NAV;
		return $nav;
	}

    public function home(){
		$nav = <<<NAV
      <nav>
        
          <a href="index">Add Notes</a><br>

          
        
      </nav>
NAV;
		return $nav;
	}
}



?>