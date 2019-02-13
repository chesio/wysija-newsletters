# MailPoet Newsletters (version 2)

Fork of [legacy version](https://wordpress.org/plugins/wysija-newsletters/) of [MailPoet](http://www.mailpoet.com/) WordPress plugin.

## Requirements

At the moment the same as of legacy plugin.

## Changes

### Compatibility

* There is no default filter hooked to the `wysija_send_ok` hook, thus default value passed to `wysija_send_ok` filter is now `true` instead of `false`.
* Following (deprecated) actions have been removed: `wysija_send_test_editor` and `wysija_manual_send`.

### Tweaks

* All functionality related to 2000 subscribers limit have been removed, including following `actions`:
 * `wysija_check_total_subscribers`
 * `wysija_remove_action_check_total_subscribers`
