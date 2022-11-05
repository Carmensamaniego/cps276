
<?php

class Page {
	public function nav(){
		$nav = <<<NAV
      <nav>
        <ul>
          <li><a href="index.php"></a></li>
          <li><a href="file_name.php">Folder name</a></li>
          
        </ul>
      </nav>
NAV;
		return $nav;
	}
}