
<?php

$path = "storedfiles/"

class Page {
	public function nav(){
		$nav = <<<NAV
      <nav>
        
          <a href="storedfiles/">Show File List</a><br>

          
        
      </nav>
NAV;
		return $nav;
	}
}