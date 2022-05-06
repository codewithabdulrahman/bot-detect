<?php

namespace BotAgent;

if ( !defined ( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( !class_exists ( 'BotAgent' ) ) :
    class BotAgent
    {
        /**
         *Calling Construct
         */
        public function __construct ()
        {
            add_shortcode ( 'google_bot_show' , array( $this , 'googleBotAgentshow' ) );
            add_shortcode ( 'google_bot_hide' , array( $this , 'googleBotAgenthide' ) );
        }

        /**
         * @return bool
         */
        public function isBotAgentdetectBot ()
        {
            if ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) {
                return preg_match ( '/rambler|abacho|acoi|accona|aspseek|altavista|estyle|scrubby|lycos|geona|ia_archiver|alexa|sogou|skype|facebook|twitter|pinterest|linkedin|naver|bing|google|yahoo|duckduckgo|yandex|baidu|teoma|xing|java\/1.7.0_45|bot|crawl|slurp|spider|mediapartners|\sask\s|\saol\s/i' , $_SERVER['HTTP_USER_AGENT'] );
            }
        }


        /**
         * @return string|void
         * Will be shown to normal user
         */
        public function googleBotAgenthide ($data)
        {
            if ( !( self ::isBotAgentdetectBot () ) ) {
                return $data['text'];
            }
        }

        /**
         * @return string|void
         * Will be shown if bot detected
         */
        public function googleBotAgentshow ($data)
        {
            if ( ( self ::isBotAgentdetectBot () ) ) {
                return $data['text'];
            }
        }
    }

endif;
// class_exists check
