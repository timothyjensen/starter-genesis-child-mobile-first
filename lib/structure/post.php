<?php
/**
 * Description
 *
 * @package     TimJensen\GenesisStarter
 * @since       0.1.0
 * @author      Tim Jensen
 * @link        https://www.timjensen.us
 * @license     GNU General Public License 2.0+
 */

namespace TimJensen\GenesisStarter;

add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\\setup_author_box_gravatar_size' );
/**
 * Modify size of the Gravatar in the author box.
 *
 * @since 0.1.0
 *
 * @param int $size Gravatar size.
 * @return int
 */
function setup_author_box_gravatar_size( $size ) {
	return 90;
}
