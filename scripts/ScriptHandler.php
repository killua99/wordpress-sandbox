<?php
/**
 * Contains \Composer\ScriptHandler.php
 */

namespace Composer;

use Symfony\Component\Filesystem\Filesystem;

class ScriptHandler {

	public static function prepareFolders(): void {
		$fileSystem = new Filesystem();
		$cwd = \getcwd();

		if ( ! $fileSystem->exists( $cwd . '/web/wp-content' ) ) {
			$fileSystem->mkdir( $cwd . '/web/wp-content' );
		}

		$fileSystem->mkdir( $cwd . '/web/wp-content/themes' );
	}

	public static function createRequiredFiles(): void {
		$fileSystem = new Filesystem();
		$cwd = \getcwd();

		# Directories.
		$fileSystem->symlink( '../wordpress/wp-admin', $cwd . '/web/wp-admin' );
		$fileSystem->symlink( '../wordpress/wp-includes', $cwd . '/web/wp-includes' );
		$fileSystem->symlink( '../../../wordpress/wp-content/themes/twentyseventeen', $cwd . '/web/wp-content/themes/twentyseventeen' );

		# Files.
		$fileSystem->symlink( '../wordpress/index.php', $cwd . '/web/index.php' );
		$fileSystem->symlink( '../wordpress/wp-activate.php', $cwd . '/web/wp-activate.php' );
		$fileSystem->symlink( '../wordpress/wp-blog-header.php', $cwd . '/web/wp-blog-header.php' );
		$fileSystem->symlink( '../wordpress/wp-comments-post.php', $cwd . '/web/wp-comments-post.php' );
		$fileSystem->symlink( '../wordpress/wp-cron.php', $cwd . '/web/wp-cron.php' );
		$fileSystem->symlink( '../wordpress/wp-links-opml.php', $cwd . '/web/wp-links-opml.php' );
		$fileSystem->symlink( '../wordpress/wp-load.php', $cwd . '/web/wp-load.php' );
		$fileSystem->symlink( '../wordpress/wp-login.php', $cwd . '/web/wp-login.php' );
		$fileSystem->symlink( '../wordpress/wp-mail.php', $cwd . '/web/wp-mail.php' );
		$fileSystem->symlink( '../wordpress/wp-settings.php', $cwd . '/web/wp-settings.php' );
		$fileSystem->symlink( '../wordpress/wp-signup.php', $cwd . '/web/wp-signup.php' );
		$fileSystem->symlink( '../wordpress/wp-trackback.php', $cwd . '/web/wp-trackback.php' );
		$fileSystem->symlink( '../wordpress/xmlrpc.php', $cwd . '/web/xmlrpc.php' );
	}
}
