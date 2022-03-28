<?php
namespace App\Plugin;
use App\System\Plugins as Plugin_Core;

class Whitelist extends Plugin_Core {
	protected $admin_ip_allowed = [];
	protected $ip_allowed = [];
	protected $ip_blocked = [];
	protected $id = [];
	protected $country = [];
	protected $username = [];

	public function admin_ip(): Array
	{
		/**
		 * Returns an array containing the admin_ip values from .env
		 * and stores that array in the $admin_ip_allowed property.
		 */
		$ips = $this->config->setting['admin_ip'];
		$ip = preg_split('/,/', $ips);

		foreach ($ip as $addr => $val) {
			$this->admin_ip_allowed[] = $val;
		}

		return $this->admin_ip_allowed;
	}

	public function id(Array $ids) {
		foreach ($ids as $id) {
			$this->ip_allowed[$id] = $id;
		}
	}

	public function ip(Array $ips) {
		foreach ($ips as $ip) {
			if (filter_var($ip, FILTER_VALIDATE_IP)) {
				$this->ip_allowed[$ip] = $ip;
			}
		}
	}

	public function username(Array $usernames) {

	}

	public function country(Array $countries) {

	}

	public function allow(Array $allow, String $setting) {
		foreach ($allow as $safe) {
			$this->{$setting}[$safe] = $safe;
		}

		return TRUE;

		return FALSE;
	}

	public function block(Array $block, String $setting) {
		foreach ($block as $unsafe) {
			$this->{$setting}[$unsafe] = $unsafe;
		}

		return TRUE;

		return FALSE;
	}
}