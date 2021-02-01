<?php
/**
 * This file was automatically generated by automattic/jetpack-autoloader.
 *
 * @package automattic/jetpack-autoloader
 */

namespace Automattic\Jetpack\Autoloader\jp75a98257ede35999a390e0b44bb22aab;

 // phpcs:ignore

/**
 * Used to select package versions.
 */
class Version_Selector {

	/**
	 * Checks whether the selected package version should be updated. Composer development
	 * package versions ('9999999-dev' or versions that start with 'dev-') are favored
	 * when the JETPACK_AUTOLOAD_DEV constant is set to true.
	 *
	 * @param String $selected_version The currently selected package version.
	 * @param String $compare_version The package version that is being evaluated to
	 *                                determine if the version needs to be updated.
	 *
	 * @return bool Returns true if the selected package version should be updated,
	 *                 else false.
	 */
	public function is_version_update_required( $selected_version, $compare_version ) {
		$use_dev_versions = defined( 'JETPACK_AUTOLOAD_DEV' ) && JETPACK_AUTOLOAD_DEV;

		if ( is_null( $selected_version ) ) {
			return true;
		}

		if ( $use_dev_versions && $this->is_package_version_dev( $selected_version ) ) {
			return false;
		}

		if ( $this->is_package_version_dev( $compare_version ) ) {
			if ( $use_dev_versions ) {
				return true;
			} else {
				return false;
			}
		}

		if ( version_compare( $selected_version, $compare_version, '<' ) ) {
			return true;
		}

		return false;
	}

	/**
	 * Checks whether the given package version is a development version.
	 *
	 * @param String $version The package version.
	 *
	 * @return bool True if the version is a dev version, else false.
	 */
	private function is_package_version_dev( $version ) {
		if ( 'dev-' === substr( $version, 0, 4 ) || '9999999-dev' === $version ) {
			return true;
		}

		return false;
	}
}
