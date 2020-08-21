<?php

namespace VojtaSvoboda\ErrorLogger\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation as ValidationTrait;

class Settings extends Model
{
    use ValidationTrait;

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'vojtasvoboda_errorlogger_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public $rules = [
        'nativemailer_email' => 'required_if:nativemailer_enabled,1',
        'slack_token' => 'required_if:slack_enabled,1',
        'slack_channel' => 'required_if:slack_enabled,1',
        'slack_username' => 'required_if:slack_enabled,1',
        'syslog_ident' => 'required_if:syslog_enabled,1',
        'syslog_facility' => 'required_if:syslog_enabled,1',
        'newrelic_appname' => 'required_if:newrelic_enabled,1',
    ];

    public $attributeNames = [
        'nativemailer_email' => 'Developer email',
    ];

    public static function getNativemailerLevelOptions()
    {
        return self::getErrorLevelOptions();
    }

    public static function getSlackLevelOptions()
    {
        return self::getErrorLevelOptions();
    }

    public static function getSyslogLevelOptions()
    {
        return self::getErrorLevelOptions();
    }

    public static function getNewrelicLevelOptions()
    {
        return self::getErrorLevelOptions();
    }

    public static function getErrorLevelOptions()
    {
        return [
            100 => 'Debug - Level 100 - Detailed debug information',
            200 => 'Info - Level 200 - Interesting events e.g. user logs in, SQL logs',
            250 => 'Notice - Level 250 - Uncommon events',
            300 => 'Warning - Level 300 - Exceptional occurrences that are not errors',
            400 => 'Error - Level 400 - Runtime errors',
            500 => 'Critical - Level 500 - Critical conditions',
            550 => 'Alert - Level 550 - Action must be taken immediately',
            600 => 'Emergency - Level 600 - Urgent alert'
        ];
    }
}
