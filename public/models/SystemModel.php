<?php
namespace Web\Model;
use \App\Model\System_Model as System_Model;

class SystemModel extends System_Model {
	public function get_current_release() {
		$sql = $this->db->prepare("SELECT value FROM system WHERE setting = ?");
		$sql->execute(["current_release_version"]);

		foreach ($sql as $row) {
			return $row['value'];
		}
	}
}
