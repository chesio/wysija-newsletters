# MailPoet Newsletters (version 2)

Fork of [legacy version](https://wordpress.org/plugins/wysija-newsletters/) of [MailPoet](http://www.mailpoet.com/) WordPress plugin.

## Requirements

* [PHP](https://www.php.net/) 5.3 or newer
* [WordPress](https://wordpress.org/) 3.5 or newer

## Changes

Note: All changes can be reviewed by [comparing](https://github.com/chesio/wysija-newsletters/compare/legacy...master) legacy branch to master branch (forked version with updates).

### API

* There is no default filter hooked to the `wysija_send_ok` hook, thus default value passed to `wysija_send_ok` filter is now `true` instead of `false`.
* Following (deprecated) actions have been removed: `wysija_send_test_editor` and `wysija_manual_send`.

### Fixes

* Compatibility with PHP 7.2 and newer has been improved
* The code has been made more defensive in several places in order to not trigger PHP notices about undefined array keys etc.

### Tweaks

* All functionality related to 2000 subscribers limit has been removed, including following `actions`:
  * `wysija_check_total_subscribers`
  * `wysija_remove_action_check_total_subscribers`
* Blacklist functionality (introduced in upstream version 2.12) has been removed
* If [Git Updater](https://github.com/afragen/git-updater) is installed, this plugin can only be updated from GitHub, never from WordPress.org Plugin Directory.
* The custom post type registered by this plugin is excluded from [core XML sitemaps](https://make.wordpress.org/core/2020/07/22/new-xml-sitemaps-functionality-in-wordpress-5-5/) added in WordPress 5.5.
