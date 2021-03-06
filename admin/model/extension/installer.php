<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

class ModelExtensionInstaller extends Model {

	public function languageExist($dir) {
		$query = $this->db->query("SELECT language_id FROM " . DB_PREFIX . "language WHERE `directory` = '" . $this->db->escape($dir) . "'");

		if ($query->num_rows) {
			return $query->row['language_id'];
		} else {
			return false;
		}
	}
}
