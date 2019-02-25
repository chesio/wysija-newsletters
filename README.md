# MailPoet Newsletters (version 2)

Fork of [legacy version](https://wordpress.org/plugins/wysija-newsletters/) of [MailPoet](http://www.mailpoet.com/) WordPress plugin.

## Requirements

* [PHP](https://secure.php.net/) 5.3 or newer
* [WordPress](https://wordpress.org/) 3.5 or newer

## Changes

### API

* There is no default filter hooked to the `wysija_send_ok` hook, thus default value passed to `wysija_send_ok` filter is now `true` instead of `false`.
* Following (deprecated) actions have been removed: `wysija_send_test_editor` and `wysija_manual_send`.

### Fixes

* PHP 7.2 compatibility
* The code has been made more defensive in several places in order to not trigger PHP notices about undefined array keys etc.

### Tweaks

* All functionality related to 2000 subscribers limit have been removed, including following `actions`:
  * `wysija_check_total_subscribers`
  * `wysija_remove_action_check_total_subscribers`
