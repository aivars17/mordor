<?php

namespace uFrame;
class Menu {
	public static function top(){
		$log = new log();
		$db = new Database($log);
		$menulist = $db->select("SELECT * FROM pages");

		foreach ($menulist as $menu) {
			if ($menu['realpage'] != 1) {
				echo "<li class='nav-item active'>
        <a class='nav-link' href='/".CONFIG['site_path'].$menu['body']."/'>".$menu['title']."<span class='sr-only'>(current)</span></a>
      </li>";
			} else {
				echo "<li class='nav-item active'>
        <a class='nav-link' href='/".CONFIG['site_path']."/page/show/".$menu['title']."'>".$menu['title']."<span class='sr-only'>(current)</span></a>
      </li>";
			}
			
		}
	}
}