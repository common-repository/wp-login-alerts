=== WP Login Alerts by DigiP ===
Contributors: DigiP
Donate link: http://www.attack-scanner.com/
Tags: wordpress, login, security, email, alerts, digip
Requires at least: 2.0.2
Tested up to: 3.9
Stable tag: 2013-05-30.10
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

E-mails the site owner if anyone reaches or attempts to login to the site. Also shows the user names they attempt to login with.

== Description ==

This is a Security focused plug-in, which will send an email to the Administrator of the WordPress site each time login page is reached. 

If someone attempts to login, it will also send the user name they tried logging in with, as well as their IP address, User-Agent, Timestamp, and the Referral URL. 

If you see multiple attempts to login at times you are not logged on to the site, this means someone is attempting to brute force their way into your site, and you should ban the offending IP address from your site. Especially if they are trying multiple names, or sending them rapidly, one after another.

== Installation ==

1. Upload our plug-in to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Wait for login attempts to reach your inbox. Be sure to whitelist emails from yourself!

== Screenshots ==

None.

== Frequently Asked Questions ==

= I received an email when I tried to login myself. Is this normal? =

	Yes. Because of the way the plug-in works, it will send an email no matter who it is that tries to login. It will also tell you the username attempted as well.

= I have the plug-in enabled, but I am not receiving any emails. Whats wrong? =

	1 - This could be a few things. Number one, we use the email located in your WordPress dashboard, set under the Settings panel. If this is not the email you have set you wish to be reached at, then you would need to change it in the WordPress Dashboard.
	
	2 - Check your spam folder. We send the email to you, from yourself.
	
	3 - Your running a server such as IIS, and you don't have a default mail system in place to send the emails. Because we use PHP to send the emails, you will need to speak with your Host provider, to ensure that you can use this feature.

= I see a bunch of user names and just received 30 emails from the plug-in. Is that normal? =

	YES! And this is the reason I created the plug-in. If you are seeing a large amount of email alerts, even for your own username, but was not you attempting to login, then someone is attacking your site and trying to brute force their way into your site. We suggest you take the IP address listed in the email alert, and ban them from reaching your site. This is a security plug-in, and as such, is meant to help inform you of such attacks. 
	
	
= I found a bug, or have a feature request. Do you think you could implement feature "xyz"? =

	I am always looking for ways to improve my plug-ins, as well as know if you've found any bugs so I can fix them and push them out to WordPress. If there is something you feel would bring value to this plug-in, or a feature specific to your own site, like adding additional email users, I could customize the plug-in for your specific site needs, such as adding additional email addresses, if you have more than one Administrator who handles your site.
	
== Changelog ==

= 2014-04-16 =

No codebase changes, just upadting readme to reflect the plug-in works with WP 3.9.x

= 2013-05-30.10 =

Added IP address of attacker in Subject line per user request for easy sorting of attackers

= 2013-01-09.9 =

Added rule to deny direct access to file, to not dislose server side path errors.

= 2013-01-05.8 =

Changing sender address since some users registered with gmail, will not get email from themself and no alerts.

= 2012-11-26.7 =

Fix for UTF-8 changed to "UTF-8" encoding for htmlentities.

= 2012-11-23.6 =

Changed Subject line to add which site the email is from based on users requests.

= 2012-08-13.5 =

Initial Release to WordPress.org

== Upgrade Notice ==

= 2012-08-13.5 =
None at this time.

== Thank you for using my plug-in! ==

We offer a variety of other products and security solutions for WordPress and web site security. We're in the process of releasing our WordPress Attack Scanner, as well as a Firewall based version of the same scanner for paid subscribers.

For more info on these tools and products, please visit and bookmark Attack-Scanner.com, and if you like this Login Alerts Plug-in, please donate to this project. 

I look forward to feedback from my users, as well as feature requests. All and any feedback welcome!

