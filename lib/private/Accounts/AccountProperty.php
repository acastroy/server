<?php
/**
 * @copyright Copyright (c) 2018 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

declare(strict_types=1);

namespace OC\Accounts;

use OCP\Accounts\IAccountProperty;

class AccountProperty implements IAccountProperty {

	private $name;
	private $value;
	private $scope;
	private $verified = false;

	public function __construct(string $name, string $value, string $scope, string $verified) {
		$this->name = $name;
		$this->value = $value;
		$this->scope = $scope;
		$this->verified = $verified;
	}

	public function jsonSerialize() {
		return [
			'value' => $this->value,
			'scope' => $this->scope,
			'verified' => $this->verified
		];
	}

	/**
	 * Set the name of a property
	 *
	 * @since 15.0.0
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName(string $name) {
		$this->name = $name;
	}

	/**
	 * Set the value of a property
	 *
	 * @since 15.0.0
	 *
	 * @param string $value
	 * @return void
	 */
	public function setValue(string $value) {
		$this->value = $value;
	}

	/**
	 * Set the scope of a property
	 *
	 * @since 15.0.0
	 *
	 * @param string $scope
	 * @return void
	 */
	public function setScope(string $scope) {
		$this->scope = $scope;
	}

	/**
	 * Set the verification status of a property
	 *
	 * @since 15.0.0
	 *
	 * @param bool $verified
	 * @return void
	 */
	public function setVerified(string $verified) {
		$this->verified = $verified;
	}

	/**
	 * Get the name of a property
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * Get the value of a property
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getValue(): string {
		return $this->value;
	}

	/**
	 * Get the scope of a property
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getScope(): string {
		return $this->scope;
	}

	/**
	 * Get the verification status of a property
	 *
	 * @return bool
	 */
	public function getVerified(): string {
		return $this->verified;
	}
}
