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

namespace OCP\Accounts;


/**
 * Interface IAccountProperty
 *
 * @package OCP\Account
 * @since 15.0.0
 */
interface IAccountProperty extends \JsonSerializable {

	/**
	 * Set the name of a property
	 *
	 * @since 15.0.0
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName(string $name);

	/**
	 * Set the value of a property
	 *
	 * @since 15.0.0
	 *
	 * @param string $value
	 * @return void
	 */
	public function setValue(string $value);

	/**
	 * Set the scope of a property
	 *
	 * @since 15.0.0
	 *
	 * @param string $scope
	 * @return void
	 */
	public function setScope(string $scope) ;

	/**
	 * Set the verification status of a property
	 *
	 * @since 15.0.0
	 *
	 * @param bool $verified
	 * @return void
	 */
	public function setVerified(bool $verified);

	/**
	 * Get the name of a property
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getName(): string;

	/**
	 * Get the value of a property
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getValue(): string;

	/**
	 * Get the scope of a property
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getScope(): string;

	/**
	 * Get the verification status of a property
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getVerified(): string;

}


