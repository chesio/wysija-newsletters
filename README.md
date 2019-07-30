# MailPoet Newsletters (version 2)

Fork of [legacy version](https://wordpress.org/plugins/wysija-newsletters/) of [MailPoet](http://www.mailpoet.com/) WordPress plugin.

## Requirements

* [PHP](https://www.php.net/) 5.3 or newer
* [WordPress](https://wordpress.org/) 3.5 or newer

## Changes

Note: All changes can be reviewed by [comparing](https://github.com/chesio/wysija-newsletters/compare/master...develop) master branch (legacy version) to develop branch (forked version with updates).

### API

* There is no default filter hooked to the `wysija_send_ok` hook, thus default value passed to `wysija_send_ok` filter is now `true` instead of `false`.
* Following (deprecated) actions have been removed: `wysija_send_test_editor` and `wysija_manual_send`.

### Fixes

* PHP 7.2 and 7.3 compatibility
* The code has been made more defensive in several places in order to not trigger PHP notices about undefined array keys etc.

### Tweaks

* All functionality related to 2000 subscribers limit has been removed, including following `actions`:
  * `wysija_check_total_subscribers`
  * `wysija_remove_action_check_total_subscribers`
* Blacklist functionality (introduced in upstream version 2.12) has been removed
