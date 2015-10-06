# Error Logger plugin for OctoberCMS

Immediately sends an error from your OctoberCMS application to email, HipChat, Mandrill, NewRelic, Slack, Syslog, and more!

- no plugin dependencies
- easy setup, just fill your e-mail or API key
- define logging level for each service separately (send warnings to Syslog and critical errors directly to your email)
- know about all errors before your client/customer

## Installation

1. Install plugin [VojtaSvoboda.ErrorLogger](http://octobercms.com/plugin/vojtasvoboda-errorlogger)
2. Set your services at Backend > Settings > System > Error logger
3. Save and sleep with a clear mind!

## Services

_Available:_ Mailer handler, Slack handler, Syslog handler and New Relic handler.

_Waiting for implementation:_ CouchDB, Cube, ElasticSearch, FirePHP, Flowdock, HipChat, IFTTT, Mandrill, MongoDB , Redis and more.

**Feel free to send pullrequest!**

## License

Error logger plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT) same as OctoberCMS platform.

## Contributing

Please send Pull Request to master branch.