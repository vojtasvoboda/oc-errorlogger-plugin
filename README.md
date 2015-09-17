# Error Logger plugin for OctoberCMS

Immediately sends an error from your OctoberCMS application to email, HipChat, Mandrill, NewRelic, Slack, Syslog, and more!

- no dependencies
- easy setup, just fill your e-mail or API key
- define logging level for each service separately (send warnings to Syslog and critical errors directly to your email)
- know about all errors before your client/customer

## Installation

1. Install plugin VojtaSvoboda.ErrorLogger

2. Set your services at Backend > Settings > System > Error logger

3. Save and sleep with a clear mind!

## Services

_Available:_ Mailer handler, Slack handler and Syslog handler.

_Waiting for implementation:_ HipChat, Mandrill, NewRelic and more.

**Feel free to send pullrequest!**

## Services setup

### Mailer handler

Just fill your email and save.

### Slack handler

Get your own API key at https://api.slack.com/web. Select whether you want to sent notification to some channel or as direct message.

### Syslog handler

Just enable handler and fill Ident and Facility.
