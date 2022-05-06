<?php

namespace BotAgent;

class BotAgent
{
    /**
     *Calling Construct
     */
    public function __construct()
    {
        add_shortcode('google_bot_show', array( $this , 'google_bot_show' ));
        add_shortcode('google_bot_hide', array( $this , 'google_bot_hide' ));
    }

    /**
     * @return bool
     */
    public function is_wp_bot_detect()
    {
        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            return preg_match('/rambler|abacho|acoi|accona|aspseek|altavista|estyle|scrubby|lycos|geona|ia_archiver|alexa|sogou|skype|facebook|twitter|pinterest|linkedin|naver|bing|google|yahoo|duckduckgo|yandex|baidu|teoma|xing|java\/1.7.0_45|bot|crawl|slurp|spider|mediapartners|\sask\s|\saol\s/i', $_SERVER['HTTP_USER_AGENT']);
        }
    }


    /**
     * @return string|void
     * Will be shown to normal user
     */
    public function google_bot_hide($data)
    {
        if (!(self::is_wp_bot_detect())) {
            return $data['text'];
        }
    }

    /**
     * @return string|void
     * Will be shown if bot detected
     */
    public function google_bot_show($data)
    {
        if ((self::is_wp_bot_detect())) {
            return $data['text'];
        }
    }
}
