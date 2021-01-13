<?php
class wp_slimstat_i18n {
	public static $dynamic_strings = array();

	public static function init_dynamic_strings() {
		if ( false === ( self::$dynamic_strings = get_transient( 'slimstat_dynamic_strings' ) ) ) {
			self::$dynamic_strings = array(
				'xx' => __( 'Unknown', 'wp-slimstat' ),

				// Countries
				'c-' => __( 'Unknown', 'wp-slimstat' ),
				'c-xx' => __( 'Unknown', 'wp-slimstat' ),
				'c-xy' => __( 'Local IP Address', 'wp-slimstat' ),

				'c-af' => __( 'Afghanistan', 'wp-slimstat' ),
				'c-ax' => __( 'Aland Islands', 'wp-slimstat' ),
				'c-al' => __( 'Albania', 'wp-slimstat' ),
				'c-dz' => __( 'Algeria', 'wp-slimstat' ),
				'c-ad' => __( 'Andorra', 'wp-slimstat' ),
				'c-ao' => __( 'Angola', 'wp-slimstat' ),
				'c-ai' => __( 'Anguilla', 'wp-slimstat' ),
				'c-ag' => __( 'Antigua and Barbuda', 'wp-slimstat' ),
				'c-ar' => __( 'Argentina', 'wp-slimstat' ),
				'c-am' => __( 'Armenia', 'wp-slimstat' ),
				'c-aw' => __( 'Aruba', 'wp-slimstat' ),
				'c-au' => __( 'Australia', 'wp-slimstat' ),
				'c-at' => __( 'Austria', 'wp-slimstat' ),
				'c-az' => __( 'Azerbaijan', 'wp-slimstat' ),
				'c-bs' => __( 'Bahamas', 'wp-slimstat' ),
				'c-bh' => __( 'Bahrain', 'wp-slimstat' ),
				'c-bd' => __( 'Bangladesh', 'wp-slimstat' ),
				'c-bb' => __( 'Barbados', 'wp-slimstat' ),
				'c-by' => __( 'Belarus', 'wp-slimstat' ),
				'c-be' => __( 'Belgium', 'wp-slimstat' ),
				'c-bz' => __( 'Belize', 'wp-slimstat' ),
				'c-bj' => __( 'Benin', 'wp-slimstat' ),
				'c-bm' => __( 'Bermuda', 'wp-slimstat' ),
				'c-bt' => __( 'Bhutan', 'wp-slimstat' ),
				'c-bo' => __( 'Bolivia', 'wp-slimstat' ),
				'c-ba' => __( 'Bosnia and Herzegovina', 'wp-slimstat' ),
				'c-bw' => __( 'Botswana', 'wp-slimstat' ),
				'c-br' => __( 'Brazil', 'wp-slimstat' ),
				'c-bn' => __( 'Brunei Darussalam', 'wp-slimstat' ),
				'c-bg' => __( 'Bulgaria', 'wp-slimstat' ),
				'c-bf' => __( 'Burkina Faso', 'wp-slimstat' ),
				'c-bi' => __( 'Burundi', 'wp-slimstat' ),
				'c-kh' => __( 'Cambodia', 'wp-slimstat' ),
				'c-cm' => __( 'Cameroon', 'wp-slimstat' ),
				'c-ca' => __( 'Canada', 'wp-slimstat' ),
				'c-cv' => __( 'Cape Verde', 'wp-slimstat' ),
				'c-ky' => __( 'Cayman Islands', 'wp-slimstat' ),
				'c-cf' => __( 'Central African Republic', 'wp-slimstat' ),
				'c-td' => __( 'Chad', 'wp-slimstat' ),
				'c-cl' => __( 'Chile', 'wp-slimstat' ),
				'c-cn' => __( 'China', 'wp-slimstat' ),
				'c-co' => __( 'Colombia', 'wp-slimstat' ),
				'c-km' => __( 'Comoros', 'wp-slimstat' ),
				'c-cg' => __( 'Congo', 'wp-slimstat' ),
				'c-cd' => __( 'The Democratic Republic of the Congo', 'wp-slimstat' ),
				'c-cr' => __( 'Costa Rica', 'wp-slimstat' ),
				'c-ci' => __( 'Côte d\'Ivoire', 'wp-slimstat' ),
				'c-hr' => __( 'Croatia', 'wp-slimstat' ),
				'c-cu' => __( 'Cuba', 'wp-slimstat' ),
				'c-cy' => __( 'Cyprus', 'wp-slimstat' ),
				'c-cz' => __( 'Czech Republic', 'wp-slimstat' ),
				'c-dk' => __( 'Denmark', 'wp-slimstat' ),
				'c-dj' => __( 'Djibouti', 'wp-slimstat' ),
				'c-dm' => __( 'Dominica', 'wp-slimstat' ),
				'c-do' => __( 'Dominican Republic', 'wp-slimstat' ),
				'c-ec' => __( 'Ecuador', 'wp-slimstat' ),
				'c-eg' => __( 'Egypt', 'wp-slimstat' ),
				'c-sv' => __( 'El Salvador', 'wp-slimstat' ),
				'c-gq' => __( 'Equatorial Guinea', 'wp-slimstat' ),
				'c-er' => __( 'Eritrea', 'wp-slimstat' ),
				'c-ee' => __( 'Estonia', 'wp-slimstat' ),
				'c-et' => __( 'Ethiopia', 'wp-slimstat' ),
				'c-fo' => __( 'Faroe Islands', 'wp-slimstat' ),
				'c-fk' => __( 'Falkland Islands (Malvinas)', 'wp-slimstat' ),
				'c-fj' => __( 'Fiji', 'wp-slimstat' ),
				'c-fi' => __( 'Finland', 'wp-slimstat' ),
				'c-fr' => __( 'France', 'wp-slimstat' ),
				'c-gf' => __( 'French Guiana', 'wp-slimstat' ),
				'c-ga' => __( 'Gabon', 'wp-slimstat' ),
				'c-gm' => __( 'Gambia', 'wp-slimstat' ),
				'c-ge' => __( 'Georgia', 'wp-slimstat' ),
				'c-de' => __( 'Germany', 'wp-slimstat' ),
				'c-gh' => __( 'Ghana', 'wp-slimstat' ),
				'c-gr' => __( 'Greece', 'wp-slimstat' ),
				'c-gl' => __( 'Greenland', 'wp-slimstat' ),
				'c-gd' => __( 'Grenada', 'wp-slimstat' ),
				'c-gp' => __( 'Guadeloupe', 'wp-slimstat' ),
				'c-gt' => __( 'Guatemala', 'wp-slimstat' ),
				'c-gn' => __( 'Guinea', 'wp-slimstat' ),
				'c-gw' => __( 'Guinea-Bissau', 'wp-slimstat' ),
				'c-gy' => __( 'Guyana', 'wp-slimstat' ),
				'c-ht' => __( 'Haiti', 'wp-slimstat' ),
				'c-hn' => __( 'Honduras', 'wp-slimstat' ),
				'c-hk' => __( 'Hong Kong', 'wp-slimstat' ),
				'c-hu' => __( 'Hungary', 'wp-slimstat' ),
				'c-is' => __( 'Iceland', 'wp-slimstat' ),
				'c-in' => __( 'India', 'wp-slimstat' ),
				'c-id' => __( 'Indonesia', 'wp-slimstat' ),
				'c-ir' => __( 'Islamic Republic of Iran', 'wp-slimstat' ),
				'c-iq' => __( 'Iraq', 'wp-slimstat' ),
				'c-ie' => __( 'Ireland', 'wp-slimstat' ),
				'c-il' => __( 'Israel', 'wp-slimstat' ),
				'c-it' => __( 'Italy', 'wp-slimstat' ),
				'c-jm' => __( 'Jamaica', 'wp-slimstat' ),
				'c-jp' => __( 'Japan', 'wp-slimstat' ),
				'c-jo' => __( 'Jordan', 'wp-slimstat' ),
				'c-kz' => __( 'Kazakhstan', 'wp-slimstat' ),
				'c-ke' => __( 'Kenya', 'wp-slimstat' ),
				'c-nr' => __( 'Nauru', 'wp-slimstat' ),
				'c-kp' => __( 'Democratic People\'s Republic of Korea', 'wp-slimstat' ),
				'c-kr' => __( 'Republic of Korea', 'wp-slimstat' ),
				'c-kv' => __( 'Kosovo', 'wp-slimstat' ),
				'c-kw' => __( 'Kuwait', 'wp-slimstat' ),
				'c-kg' => __( 'Kyrgyzstan', 'wp-slimstat' ),
				'c-la' => __( 'Lao People\'s Democratic Republic', 'wp-slimstat' ),
				'c-lv' => __( 'Latvia', 'wp-slimstat' ),
				'c-lb' => __( 'Lebanon', 'wp-slimstat' ),
				'c-ls' => __( 'Lesotho', 'wp-slimstat' ),
				'c-lr' => __( 'Liberia', 'wp-slimstat' ),
				'c-ly' => __( 'Libyan Arab Jamahiriya', 'wp-slimstat' ),
				'c-li' => __( 'Liechtenstein', 'wp-slimstat' ),
				'c-lt' => __( 'Lithuania', 'wp-slimstat' ),
				'c-lu' => __( 'Luxembourg', 'wp-slimstat' ),
				'c-mk' => __( 'The Former Yugoslav Republic of Macedonia', 'wp-slimstat' ),
				'c-mg' => __( 'Madagascar', 'wp-slimstat' ),
				'c-mw' => __( 'Malawi', 'wp-slimstat' ),
				'c-my' => __( 'Malaysia', 'wp-slimstat' ),
				'c-ml' => __( 'Mali', 'wp-slimstat' ),
				'c-mt' => __( 'Malta', 'wp-slimstat' ),
				'c-mq' => __( 'Martinique', 'wp-slimstat' ),
				'c-mr' => __( 'Mauritania', 'wp-slimstat' ),
				'c-mu' => __( 'Mauritius', 'wp-slimstat' ),
				'c-mx' => __( 'Mexico', 'wp-slimstat' ),
				'c-md' => __( 'Moldova', 'wp-slimstat' ),
				'c-mn' => __( 'Mongolia', 'wp-slimstat' ),
				'c-me' => __( 'Montenegro', 'wp-slimstat' ),
				'c-ms' => __( 'Montserrat', 'wp-slimstat' ),
				'c-ma' => __( 'Morocco', 'wp-slimstat' ),
				'c-mz' => __( 'Mozambique', 'wp-slimstat' ),
				'c-mm' => __( 'Myanmar', 'wp-slimstat' ),
				'c-na' => __( 'Namibia', 'wp-slimstat' ),
				'c-np' => __( 'Nepal', 'wp-slimstat' ),
				'c-nl' => __( 'Netherlands', 'wp-slimstat' ),
				'c-nc' => __( 'New Caledonia', 'wp-slimstat' ),
				'c-nz' => __( 'New Zealand', 'wp-slimstat' ),
				'c-ni' => __( 'Nicaragua', 'wp-slimstat' ),
				'c-ne' => __( 'Niger', 'wp-slimstat' ),
				'c-ng' => __( 'Nigeria', 'wp-slimstat' ),
				'c-no' => __( 'Norway', 'wp-slimstat' ),
				'c-om' => __( 'Oman', 'wp-slimstat' ),
				'c-pk' => __( 'Pakistan', 'wp-slimstat' ),
				'c-pw' => __( 'Palau', 'wp-slimstat' ),
				'c-ps' => __( 'Occupied Palestinian Territory', 'wp-slimstat' ),
				'c-pa' => __( 'Panama', 'wp-slimstat' ),
				'c-pg' => __( 'Papua New Guinea', 'wp-slimstat' ),
				'c-py' => __( 'Paraguay', 'wp-slimstat' ),
				'c-pe' => __( 'Peru', 'wp-slimstat' ),
				'c-ph' => __( 'Philippines', 'wp-slimstat' ),
				'c-pl' => __( 'Poland', 'wp-slimstat' ),
				'c-pt' => __( 'Portugal', 'wp-slimstat' ),
				'c-pr' => __( 'Puerto Rico', 'wp-slimstat' ),
				'c-qa' => __( 'Qatar', 'wp-slimstat' ),
				'c-re' => __( 'Réunion', 'wp-slimstat' ),
				'c-ro' => __( 'Romania', 'wp-slimstat' ),
				'c-ru' => __( 'Russian Federation', 'wp-slimstat' ),
				'c-rw' => __( 'Rwanda', 'wp-slimstat' ),
				'c-kn' => __( 'Saint Kitts and Nevis', 'wp-slimstat' ),
				'c-lc' => __( 'Saint Lucia', 'wp-slimstat' ),
				'c-mf' => __( 'Saint Martin', 'wp-slimstat' ),
				'c-vc' => __( 'Saint Vincent and the Grenadines', 'wp-slimstat' ),
				'c-ws' => __( 'Samoa', 'wp-slimstat' ),
				'c-st' => __( 'Sao Tome and Principe', 'wp-slimstat' ),
				'c-sa' => __( 'Saudi Arabia', 'wp-slimstat' ),
				'c-sn' => __( 'Senegal', 'wp-slimstat' ),
				'c-rs' => __( 'Serbia', 'wp-slimstat' ),
				'c-sl' => __( 'Sierra Leone', 'wp-slimstat' ),
				'c-sg' => __( 'Singapore', 'wp-slimstat' ),
				'c-sk' => __( 'Slovakia', 'wp-slimstat' ),
				'c-si' => __( 'Slovenia', 'wp-slimstat' ),
				'c-sb' => __( 'Solomon Islands', 'wp-slimstat' ),
				'c-so' => __( 'Somalia', 'wp-slimstat' ),
				'c-za' => __( 'South Africa', 'wp-slimstat' ),
				'c-gs' => __( 'South Georgia and the South Sandwich Islands', 'wp-slimstat' ),
				'c-es' => __( 'Spain', 'wp-slimstat' ),
				'c-lk' => __( 'Sri Lanka', 'wp-slimstat' ),
				'c-sc' => __( 'Seychelles', 'wp-slimstat' ),
				'c-sd' => __( 'Sudan', 'wp-slimstat' ),
				'c-ss' => __( 'South Sudan', 'wp-slimstat' ),
				'c-sr' => __( 'Suriname', 'wp-slimstat' ),
				'c-sj' => __( 'Svalbard and Jan Mayen', 'wp-slimstat' ),
				'c-sz' => __( 'Swaziland', 'wp-slimstat' ),
				'c-se' => __( 'Sweden', 'wp-slimstat' ),
				'c-ch' => __( 'Switzerland', 'wp-slimstat' ),
				'c-sy' => __( 'Syrian Arab Republic', 'wp-slimstat' ),
				'c-tw' => __( 'Taiwan', 'wp-slimstat' ),
				'c-tj' => __( 'Tajikistan', 'wp-slimstat' ),
				'c-tz' => __( 'United Republic of Tanzania', 'wp-slimstat' ),
				'c-th' => __( 'Thailand', 'wp-slimstat' ),
				'c-tl' => __( 'Timor-Leste', 'wp-slimstat' ),
				'c-tg' => __( 'Togo', 'wp-slimstat' ),
				'c-to' => __( 'Tonga', 'wp-slimstat' ),
				'c-tt' => __( 'Trinidad and Tobago', 'wp-slimstat' ),
				'c-tn' => __( 'Tunisia', 'wp-slimstat' ),
				'c-tr' => __( 'Turkey', 'wp-slimstat' ),
				'c-tm' => __( 'Turkmenistan', 'wp-slimstat' ),
				'c-tc' => __( 'Turks and Caicos Islands', 'wp-slimstat' ),
				'c-ug' => __( 'Uganda', 'wp-slimstat' ),
				'c-ua' => __( 'Ukraine', 'wp-slimstat' ),
				'c-ae' => __( 'United Arab Emirates', 'wp-slimstat' ),
				'c-gb' => __( 'United Kingdom', 'wp-slimstat' ),
				'c-us' => __( 'United States', 'wp-slimstat' ),
				'c-uy' => __( 'Uruguay', 'wp-slimstat' ),
				'c-uz' => __( 'Uzbekistan', 'wp-slimstat' ),
				'c-vu' => __( 'Vanuatu', 'wp-slimstat' ),
				'c-ve' => __( 'Venezuela', 'wp-slimstat' ),
				'c-vn' => __( 'Viet Nam', 'wp-slimstat' ),
				'c-vg' => __( 'British Virgin Islands', 'wp-slimstat' ),
				'c-vi' => __( 'U.S. Virgin Islands', 'wp-slimstat' ),
				'c-eh' => __( 'Western Sahara', 'wp-slimstat' ),
				'c-ye' => __( 'Yemen', 'wp-slimstat' ),
				'c-zm' => __( 'Zambia', 'wp-slimstat' ),
				'c-zw' => __( 'Zimbabwe', 'wp-slimstat' ),
				'c-gg' => __( 'Guernsey', 'wp-slimstat' ),
				'c-je' => __( 'Jersey', 'wp-slimstat' ),
				'c-im' => __( 'Isle of Man', 'wp-slimstat' ),
				'c-mv' => __( 'Maldives', 'wp-slimstat' ),
				'c-eu' => __( 'Europe', 'wp-slimstat' ),

				// Languages
				'l-' => __( 'Unknown', 'wp-slimstat' ),
				'l-empty' => __( 'Unknown', 'wp-slimstat' ),
				'l-xx' => __( 'Unknown', 'wp-slimstat' ),

				'l-af' => __( 'Afrikaans', 'wp-slimstat' ),
				'l-af-za' => __( 'Afrikaans (South Africa)', 'wp-slimstat' ),
				'l-ar' => __( 'Arabic', 'wp-slimstat' ),
				'l-ar-ae' => __( 'Arabic (U.A.E.)', 'wp-slimstat' ),
				'l-ar-bh' => __( 'Arabic (Bahrain)', 'wp-slimstat' ),
				'l-ar-dz' => __( 'Arabic (Algeria)', 'wp-slimstat' ),
				'l-ar-eg' => __( 'Arabic (Egypt)', 'wp-slimstat' ),
				'l-ar-iq' => __( 'Arabic (Iraq)', 'wp-slimstat' ),
				'l-ar-jo' => __( 'Arabic (Jordan)', 'wp-slimstat' ),
				'l-ar-kw' => __( 'Arabic (Kuwait)', 'wp-slimstat' ),
				'l-ar-lb' => __( 'Arabic (Lebanon)', 'wp-slimstat' ),
				'l-ar-ly' => __( 'Arabic (Libya)', 'wp-slimstat' ),
				'l-ar-ma' => __( 'Arabic (Morocco)', 'wp-slimstat' ),
				'l-ar-om' => __( 'Arabic (Oman)', 'wp-slimstat' ),
				'l-ar-qa' => __( 'Arabic (Qatar)', 'wp-slimstat' ),
				'l-ar-sa' => __( 'Arabic (Saudi Arabia)', 'wp-slimstat' ),
				'l-ar-sy' => __( 'Arabic (Syria)', 'wp-slimstat' ),
				'l-ar-tn' => __( 'Arabic (Tunisia)', 'wp-slimstat' ),
				'l-ar-ye' => __( 'Arabic (Yemen)', 'wp-slimstat' ),
				'l-az' => __( 'Azeri (Latin)', 'wp-slimstat' ),
				'l-az-az' => __( 'Azeri (Latin) (Azerbaijan)', 'wp-slimstat' ),
				'l-be' => __( 'Belarusian', 'wp-slimstat' ),
				'l-be-by' => __( 'Belarusian (Belarus)', 'wp-slimstat' ),
				'l-bg' => __( 'Bulgarian', 'wp-slimstat' ),
				'l-bg-bg' => __( 'Bulgarian (Bulgaria)', 'wp-slimstat' ),
				'l-bs-ba' => __( 'Bosnian (Bosnia and Herzegovina)', 'wp-slimstat' ),
				'l-ca' => __( 'Catalan', 'wp-slimstat' ),
				'l-ca-es' => __( 'Catalan (Spain)', 'wp-slimstat' ),
				'l-cs' => __( 'Czech', 'wp-slimstat' ),
				'l-cs-cz' => __( 'Czech (Czech Republic)', 'wp-slimstat' ),
				'l-cy' => __( 'Welsh', 'wp-slimstat' ),
				'l-cy-gb' => __( 'Welsh (United Kingdom)', 'wp-slimstat' ),
				'l-da' => __( 'Danish', 'wp-slimstat' ),
				'l-da-dk' => __( 'Danish (Denmark)', 'wp-slimstat' ),
				'l-de' => __( 'German', 'wp-slimstat' ),
				'l-de-at' => __( 'German (Austria)', 'wp-slimstat' ),
				'l-de-ch' => __( 'German (Switzerland)', 'wp-slimstat' ),
				'l-de-de' => __( 'German (Germany)', 'wp-slimstat' ),
				'l-de-li' => __( 'German (Liechtenstein)', 'wp-slimstat' ),
				'l-de-lu' => __( 'German (Luxembourg)', 'wp-slimstat' ),
				'l-dv' => __( 'Divehi', 'wp-slimstat' ),
				'l-dv-mv' => __( 'Divehi (Maldives)', 'wp-slimstat' ),
				'l-el' => __( 'Greek', 'wp-slimstat' ),
				'l-el-gr' => __( 'Greek (Greece)', 'wp-slimstat' ),
				'l-en' => __( 'English', 'wp-slimstat' ),
				'l-en-au' => __( 'English (Australia)', 'wp-slimstat' ),
				'l-en-bz' => __( 'English (Belize)', 'wp-slimstat' ),
				'l-en-ca' => __( 'English (Canada)', 'wp-slimstat' ),
				'l-en-cb' => __( 'English (Caribbean)', 'wp-slimstat' ),
				'l-en-gb' => __( 'English (United Kingdom)', 'wp-slimstat' ),
				'l-en-ie' => __( 'English (Ireland)', 'wp-slimstat' ),
				'l-en-jm' => __( 'English (Jamaica)', 'wp-slimstat' ),
				'l-en-nz' => __( 'English (New Zealand)', 'wp-slimstat' ),
				'l-en-ph' => __( 'English (Republic of the Philippines)', 'wp-slimstat' ),
				'l-en-tt' => __( 'English (Trinidad and Tobago)', 'wp-slimstat' ),
				'l-en-us' => __( 'English (United States)', 'wp-slimstat' ),
				'l-en-za' => __( 'English (South Africa)', 'wp-slimstat' ),
				'l-en-zw' => __( 'English (Zimbabwe)', 'wp-slimstat' ),
				'l-eo' => __( 'Esperanto', 'wp-slimstat' ),
				'l-es' => __( 'Spanish', 'wp-slimstat' ),
				'l-es-ar' => __( 'Spanish (Argentina)', 'wp-slimstat' ),
				'l-es-bo' => __( 'Spanish (Bolivia)', 'wp-slimstat' ),
				'l-es-cl' => __( 'Spanish (Chile)', 'wp-slimstat' ),
				'l-es-co' => __( 'Spanish (Colombia)', 'wp-slimstat' ),
				'l-es-cr' => __( 'Spanish (Costa Rica)', 'wp-slimstat' ),
				'l-es-do' => __( 'Spanish (Dominican Republic)', 'wp-slimstat' ),
				'l-es-ec' => __( 'Spanish (Ecuador)', 'wp-slimstat' ),
				'l-es-es' => __( 'Spanish (Spain)', 'wp-slimstat' ),
				'l-es-gt' => __( 'Spanish (Guatemala)', 'wp-slimstat' ),
				'l-es-hn' => __( 'Spanish (Honduras)', 'wp-slimstat' ),
				'l-es-mx' => __( 'Spanish (Mexico)', 'wp-slimstat' ),
				'l-es-ni' => __( 'Spanish (Nicaragua)', 'wp-slimstat' ),
				'l-es-pa' => __( 'Spanish (Panama)', 'wp-slimstat' ),
				'l-es-pe' => __( 'Spanish (Peru)', 'wp-slimstat' ),
				'l-es-pr' => __( 'Spanish (Puerto Rico)', 'wp-slimstat' ),
				'l-es-py' => __( 'Spanish (Paraguay)', 'wp-slimstat' ),
				'l-es-sv' => __( 'Spanish (El Salvador)', 'wp-slimstat' ),
				'l-es-uy' => __( 'Spanish (Uruguay)', 'wp-slimstat' ),
				'l-es-ve' => __( 'Spanish (Venezuela)', 'wp-slimstat' ),
				'l-et' => __( 'Estonian', 'wp-slimstat' ),
				'l-et-ee' => __( 'Estonian (Estonia)', 'wp-slimstat' ),
				'l-eu' => __( 'Basque', 'wp-slimstat' ),
				'l-eu-es' => __( 'Basque (Spain)', 'wp-slimstat' ),
				'l-fa' => __( 'Farsi', 'wp-slimstat' ),
				'l-fa-ir' => __( 'Farsi (Iran)', 'wp-slimstat' ),
				'l-fi' => __( 'Finnish', 'wp-slimstat' ),
				'l-fi-fi' => __( 'Finnish (Finland)', 'wp-slimstat' ),
				'l-fo' => __( 'Faroese', 'wp-slimstat' ),
				'l-fo-fo' => __( 'Faroese (Faroe Islands)', 'wp-slimstat' ),
				'l-fr' => __( 'French', 'wp-slimstat' ),
				'l-fr-be' => __( 'French (Belgium)', 'wp-slimstat' ),
				'l-fr-ca' => __( 'French (Canada)', 'wp-slimstat' ),
				'l-fr-ch' => __( 'French (Switzerland)', 'wp-slimstat' ),
				'l-fr-fr' => __( 'French (France)', 'wp-slimstat' ),
				'l-fr-lu' => __( 'French (Luxembourg)', 'wp-slimstat' ),
				'l-fr-mc' => __( 'French (Principality of Monaco)', 'wp-slimstat' ),
				'l-gl' => __( 'Galician', 'wp-slimstat' ),
				'l-gl-es' => __( 'Galician (Spain)', 'wp-slimstat' ),
				'l-gu' => __( 'Gujarati', 'wp-slimstat' ),
				'l-gu-in' => __( 'Gujarati (India)', 'wp-slimstat' ),
				'l-he' => __( 'Hebrew', 'wp-slimstat' ),
				'l-he-il' => __( 'Hebrew (Israel)', 'wp-slimstat' ),
				'l-hi' => __( 'Hindi', 'wp-slimstat' ),
				'l-hi-in' => __( 'Hindi (India)', 'wp-slimstat' ),
				'l-hr' => __( 'Croatian', 'wp-slimstat' ),
				'l-hr-ba' => __( 'Croatian (Bosnia and Herzegovina)', 'wp-slimstat' ),
				'l-hr-hr' => __( 'Croatian (Croatia)', 'wp-slimstat' ),
				'l-hu' => __( 'Hungarian', 'wp-slimstat' ),
				'l-hu-hu' => __( 'Hungarian (Hungary)', 'wp-slimstat' ),
				'l-hy' => __( 'Armenian', 'wp-slimstat' ),
				'l-hy-am' => __( 'Armenian (Armenia)', 'wp-slimstat' ),
				'l-id' => __( 'Indonesian', 'wp-slimstat' ),
				'l-id-id' => __( 'Indonesian (Indonesia)', 'wp-slimstat' ),
				'l-is' => __( 'Icelandic', 'wp-slimstat' ),
				'l-is-is' => __( 'Icelandic (Iceland)', 'wp-slimstat' ),
				'l-it' => __( 'Italian', 'wp-slimstat' ),
				'l-it-ch' => __( 'Italian (Switzerland)', 'wp-slimstat' ),
				'l-it-it' => __( 'Italian (Italy)', 'wp-slimstat' ),
				'l-ja' => __( 'Japanese', 'wp-slimstat' ),
				'l-ja-jp' => __( 'Japanese (Japan)', 'wp-slimstat' ),
				'l-ka' => __( 'Georgian', 'wp-slimstat' ),
				'l-ka-ge' => __( 'Georgian (Georgia)', 'wp-slimstat' ),
				'l-kk' => __( 'Kazakh', 'wp-slimstat' ),
				'l-kk-kz' => __( 'Kazakh (Kazakhstan)', 'wp-slimstat' ),
				'l-kn' => __( 'Kannada', 'wp-slimstat' ),
				'l-kn-in' => __( 'Kannada (India)', 'wp-slimstat' ),
				'l-ko' => __( 'Korean', 'wp-slimstat' ),
				'l-ko-kr' => __( 'Korean (Korea)', 'wp-slimstat' ),
				'l-kok' => __( 'Konkani', 'wp-slimstat' ),
				'l-kok-in' => __( 'Konkani (India)', 'wp-slimstat' ),
				'l-ky' => __( 'Kyrgyz', 'wp-slimstat' ),
				'l-ky-kg' => __( 'Kyrgyz (Kyrgyzstan)', 'wp-slimstat' ),
				'l-lt' => __( 'Lithuanian', 'wp-slimstat' ),
				'l-lt-lt' => __( 'Lithuanian (Lithuania)', 'wp-slimstat' ),
				'l-lv' => __( 'Latvian', 'wp-slimstat' ),
				'l-lv-lv' => __( 'Latvian (Latvia)', 'wp-slimstat' ),
				'l-mi' => __( 'Maori', 'wp-slimstat' ),
				'l-mi-nz' => __( 'Maori (New Zealand)', 'wp-slimstat' ),
				'l-mk' => __( 'FYRO Macedonian', 'wp-slimstat' ),
				'l-mk-ml' => __( 'FYRO Macedonian (Former Yugoslav Republic of Macedonia)', 'wp-slimstat' ),
				'l-mn' => __( 'Mongolian', 'wp-slimstat' ),
				'l-mn-mn' => __( 'Mongolian (Mongolia)', 'wp-slimstat' ),
				'l-mr' => __( 'Marathi', 'wp-slimstat' ),
				'l-mr-in' => __( 'Marathi (India)', 'wp-slimstat' ),
				'l-ms' => __( 'Malay', 'wp-slimstat' ),
				'l-ms-bn' => __( 'Malay (Brunei Darussalam)', 'wp-slimstat' ),
				'l-ms-my' => __( 'Malay (Malaysia)', 'wp-slimstat' ),
				'l-mt' => __( 'Maltese', 'wp-slimstat' ),
				'l-mt-mt' => __( 'Maltese (Malta)', 'wp-slimstat' ),
				'l-nb' => __( 'Norwegian (Bokmål)', 'wp-slimstat' ),
				'l-nb-no' => __( 'Norwegian (Bokmål) (Norway)', 'wp-slimstat' ),
				'l-nl' => __( 'Dutch', 'wp-slimstat' ),
				'l-nl-be' => __( 'Dutch (Belgium)', 'wp-slimstat' ),
				'l-nl-nl' => __( 'Dutch (Netherlands)', 'wp-slimstat' ),
				'l-nn-no' => __( 'Norwegian (Nynorsk) (Norway)', 'wp-slimstat' ),
				'l-ns' => __( 'Northern Sotho', 'wp-slimstat' ),
				'l-ns-za' => __( 'Northern Sotho (South Africa)', 'wp-slimstat' ),
				'l-pa' => __( 'Punjabi', 'wp-slimstat' ),
				'l-pa-in' => __( 'Punjabi (India)', 'wp-slimstat' ),
				'l-pl' => __( 'Polish', 'wp-slimstat' ),
				'l-pl-pl' => __( 'Polish (Poland)', 'wp-slimstat' ),
				'l-ps' => __( 'Pashto', 'wp-slimstat' ),
				'l-ps-ar' => __( 'Pashto (Afghanistan)', 'wp-slimstat' ),
				'l-pt' => __( 'Portuguese', 'wp-slimstat' ),
				'l-pt-br' => __( 'Portuguese (Brazil)', 'wp-slimstat' ),
				'l-pt-pt' => __( 'Portuguese (Portugal)', 'wp-slimstat' ),
				'l-qu' => __( 'Quechua', 'wp-slimstat' ),
				'l-qu-bo' => __( 'Quechua (Bolivia)', 'wp-slimstat' ),
				'l-qu-ec' => __( 'Quechua (Ecuador)', 'wp-slimstat' ),
				'l-qu-pe' => __( 'Quechua (Peru)', 'wp-slimstat' ),
				'l-ro' => __( 'Romanian', 'wp-slimstat' ),
				'l-ro-ro' => __( 'Romanian (Romania)', 'wp-slimstat' ),
				'l-ru' => __( 'Russian', 'wp-slimstat' ),
				'l-ru-ru' => __( 'Russian (Russia)', 'wp-slimstat' ),
				'l-sa' => __( 'Sanskrit', 'wp-slimstat' ),
				'l-sa-in' => __( 'Sanskrit (India)', 'wp-slimstat' ),
				'l-se' => __( 'Sami (Northern)', 'wp-slimstat' ),
				'l-se-fi' => __( 'Sami (Northern) (Finland)', 'wp-slimstat' ),
				'l-se-no' => __( 'Sami (Northern) (Norway)', 'wp-slimstat' ),
				'l-se-se' => __( 'Sami (Northern) (Sweden)', 'wp-slimstat' ),
				'l-sk' => __( 'Slovak', 'wp-slimstat' ),
				'l-sk-sk' => __( 'Slovak (Slovakia)', 'wp-slimstat' ),
				'l-sl' => __( 'Slovenian', 'wp-slimstat' ),
				'l-sl-si' => __( 'Slovenian (Slovenia)', 'wp-slimstat' ),
				'l-sq' => __( 'Albanian', 'wp-slimstat' ),
				'l-sq-al' => __( 'Albanian (Albania)', 'wp-slimstat' ),
				'l-sr-ba' => __( 'Serbian (Latin) (Bosnia and Herzegovina)', 'wp-slimstat' ),
				'l-sr-rs' => __( 'Serbian (Serbia and Montenegro)', 'wp-slimstat' ),
				'l-sr-sp' => __( 'Serbian (Latin) (Serbia and Montenegro)', 'wp-slimstat' ),
				'l-sv' => __( 'Swedish', 'wp-slimstat' ),
				'l-sv-fi' => __( 'Swedish (Finland)', 'wp-slimstat' ),
				'l-sv-se' => __( 'Swedish (Sweden)', 'wp-slimstat' ),
				'l-sw' => __( 'Swahili', 'wp-slimstat' ),
				'l-sw-ke' => __( 'Swahili (Kenya)', 'wp-slimstat' ),
				'l-ta' => __( 'Tamil', 'wp-slimstat' ),
				'l-ta-in' => __( 'Tamil (India)', 'wp-slimstat' ),
				'l-te' => __( 'Telugu', 'wp-slimstat' ),
				'l-te-in' => __( 'Telugu (India)', 'wp-slimstat' ),
				'l-th' => __( 'Thai', 'wp-slimstat' ),
				'l-th-th' => __( 'Thai (Thailand)', 'wp-slimstat' ),
				'l-tl' => __( 'Tagalog', 'wp-slimstat' ),
				'l-tl-ph' => __( 'Tagalog (Philippines)', 'wp-slimstat' ),
				'l-tn' => __( 'Tswana', 'wp-slimstat' ),
				'l-tn-za' => __( 'Tswana (South Africa)', 'wp-slimstat' ),
				'l-tr' => __( 'Turkish', 'wp-slimstat' ),
				'l-tr-tr' => __( 'Turkish (Turkey)', 'wp-slimstat' ),
				'l-tt' => __( 'Tatar', 'wp-slimstat' ),
				'l-tt-ru' => __( 'Tatar (Russia)', 'wp-slimstat' ),
				'l-ts' => __( 'Tsonga', 'wp-slimstat' ),
				'l-uk' => __( 'Ukrainian', 'wp-slimstat' ),
				'l-uk-ua' => __( 'Ukrainian (Ukraine)', 'wp-slimstat' ),
				'l-ur' => __( 'Urdu', 'wp-slimstat' ),
				'l-ur-pk' => __( 'Urdu (Islamic Republic of Pakistan)', 'wp-slimstat' ),
				'l-uz' => __( 'Uzbek (Latin)', 'wp-slimstat' ),
				'l-uz-uz' => __( 'Uzbek (Cyrillic) (Uzbekistan)', 'wp-slimstat' ),
				'l-vi' => __( 'Vietnamese', 'wp-slimstat' ),
				'l-vi-vn' => __( 'Vietnamese (Viet Nam)', 'wp-slimstat' ),
				'l-xh' => __( 'Xhosa', 'wp-slimstat' ),
				'l-xh-za' => __( 'Xhosa (South Africa)', 'wp-slimstat' ),
				'l-zh' => __( 'Chinese', 'wp-slimstat' ),
				'l-zh-cn' => __( 'Chinese (S)', 'wp-slimstat' ),
				'l-zh-hk' => __( 'Chinese (Hong Kong)', 'wp-slimstat' ),
				'l-zh-mo' => __( 'Chinese (Macau)', 'wp-slimstat' ),
				'l-zh-sg' => __( 'Chinese (Singapore)', 'wp-slimstat' ),
				'l-zh-tw' => __( 'Chinese (T)', 'wp-slimstat' ),
				'l-zu' => __( 'Zulu', 'wp-slimstat' ),
				'l-zu-za' => __( 'Zulu (South Africa)', 'wp-slimstat' ),

				// Operating Systems
				'aix' => __( 'IBM AIX', 'wp-slimstat' ),
				'amiga' => __( 'Amiga', 'wp-slimstat' ),
				'android' => __( 'Android', 'wp-slimstat' ),
				'beos' => __( 'BeOS', 'wp-slimstat' ),
				'blackberry os' => __( 'BlackBerry OS', 'wp-slimstat' ),
				'centos' => __( 'CentOS', 'wp-slimstat' ),
				'chromeos' => __( 'ChromeOS', 'wp-slimstat' ),
				'commodore64' => __( 'Commodore 64', 'wp-slimstat' ),
				'cygwin' => __( 'Cygwin', 'wp-slimstat' ),
				'debian' => __( 'Debian', 'wp-slimstat' ),
				'digital unix' => __( 'Digital Unix', 'wp-slimstat' ),
				'fedora' => __( 'Fedora', 'wp-slimstat' ),
				'firefoxos' => __( 'Firefox OS', 'wp-slimstat' ),
				'freebsd' => __( 'FreeBSD', 'wp-slimstat' ),
				'gentoo' => __( 'Gentoo', 'wp-slimstat' ),
				'hp-ux' => __( 'HP-UX', 'wp-slimstat' ),
				'ios' => __( 'iPhone OS', 'wp-slimstat' ),
				'iphone os' => __( 'iPhone OS', 'wp-slimstat' ),
				'iphone osx' => __( 'iPhone OS X', 'wp-slimstat' ),
				'irix' => __( 'SGI / IRIX', 'wp-slimstat' ),
				'java' => __( 'Java', 'wp-slimstat' ),
				'kanotix' => __( 'Kanotix Linux', 'wp-slimstat' ),
				'knoppix' => __( 'Knoppix Linux', 'wp-slimstat' ),
				'linux' => __( 'Linux Generic', 'wp-slimstat' ),
				'mac' => __( 'Mac', 'wp-slimstat' ),
				'mac68k' => __( 'Mac 68k', 'wp-slimstat' ),
				'macos' => __( 'Mac OS X', 'wp-slimstat' ),
				'macosx' => __( 'Mac OS X', 'wp-slimstat' ),
				'macppc' => __( 'Mac PowerPC', 'wp-slimstat' ),
				'mandrake' => __( 'Mandrake Linux', 'wp-slimstat' ),
				'mandriva' => __( 'MS-DOS', 'wp-slimstat' ),
				'mepis' => __( 'MEPIS Linux', 'wp-slimstat' ),
				'ms-dos' => __( 'MS-DOS', 'wp-slimstat' ),
				'netbsd' => __( 'NetBSD', 'wp-slimstat' ),
				'nintendo' => __( 'Nintendo', 'wp-slimstat' ),
				'openbsd' => __( 'OpenBSD', 'wp-slimstat' ),
				'openvms' => __( 'OpenVMS', 'wp-slimstat' ),
				'os/2' => __( 'IBM OS/2', 'wp-slimstat' ),
				'palm' => __( 'Palm OS', 'wp-slimstat' ),
				'palmos' => __( 'Palm OS', 'wp-slimstat' ),
				'pclinuxos' => __( 'PCLinux OS', 'wp-slimstat' ),
				'playstation' => __( 'Playstation', 'wp-slimstat' ),
				'powertv' => __( 'PowerTV', 'wp-slimstat' ),
				'redhat' => __( 'RedHat Linux', 'wp-slimstat' ),
				'rim os' => __( 'Blackberry', 'wp-slimstat' ),
				'risc os' => __( 'Risc OS', 'wp-slimstat' ),
				'slackware' => __( 'Slackware Linux', 'wp-slimstat' ),
				'solaris' => __( 'Solaris', 'wp-slimstat' ),
				'sunos' => __( 'Sun OS', 'wp-slimstat' ),
				'suse' => __( 'SuSE Linux', 'wp-slimstat' ),
				'symbianos' => __( 'Symbian OS', 'wp-slimstat' ),
				'localhost' => __( 'localhost', 'wp-slimstat' ),
				'unix' => __( 'Unix', 'wp-slimstat' ),
				'unknown' => __( 'Unknown', 'wp-slimstat' ),
				'xandros' => __( 'Xandros Linux', 'wp-slimstat' ),
				'wap' => __( 'WAP', 'wp-slimstat' ),
				'webos' => __( 'WebOS', 'wp-slimstat' ),
				'win10' => __( 'Windows 10', 'wp-slimstat' ),
				'win16' => __( 'Windows 16-bit', 'wp-slimstat' ),
				'win2000' => __( 'Windows 2000', 'wp-slimstat' ),
				'win2003' => __( 'Windows 2003', 'wp-slimstat' ),
				'win31' => __( 'Windows 3.1', 'wp-slimstat' ),
				'win32' => __( 'Windows 32-bit', 'wp-slimstat' ),
				'win7' => __( 'Windows 7', 'wp-slimstat' ),
				'win7' => __( 'Windows 7', 'wp-slimstat' ),
				'win8' => __( 'Windows 8', 'wp-slimstat' ),
				'win8.1' => __( 'Windows 8.1', 'wp-slimstat' ),
				'win95' => __( 'Windows 95', 'wp-slimstat' ),
				'win98' => __( 'Windows 98', 'wp-slimstat' ),
				'wince' => __( 'Windows CE', 'wp-slimstat' ),
				'winme' => __( 'Windows ME', 'wp-slimstat' ),
				'winnt' => __( 'Windows NT', 'wp-slimstat' ),
				'winphone7' => __( 'Windows Phone', 'wp-slimstat' ),
				'winphone7.5' => __( 'Windows Phone', 'wp-slimstat' ),
				'winphone8' => __( 'Windows Phone', 'wp-slimstat' ),
				'winphone8.1' => __( 'Windows RT / Runtime', 'wp-slimstat' ),
				'winrt' => __( 'Windows Phone', 'wp-slimstat' ),
				'winvista' => __( 'Windows Vista', 'wp-slimstat' ),
				'winxp' => __( 'Windows XP', 'wp-slimstat' ),
				'wyderos' => __( 'WyderOS', 'wp-slimstat' ),
				'zaurus' => __( 'Zaurus WAP', 'wp-slimstat' ),

				// Operating System Families
				'p-unk' => __( 'Unknown', 'wp-slimstat' ),
				'p-' => __( 'Unknown', 'wp-slimstat' ),

				'p-and' => __( 'Android', 'wp-slimstat' ),
				'p-bla' => __( 'BlackBerry', 'wp-slimstat' ),
				'p-chr' => __( 'Chrome OS', 'wp-slimstat' ),
				'p-fir' => __( 'Fire OS', 'wp-slimstat' ),
				'p-fre' => __( 'Linux FreeBSD', 'wp-slimstat' ),
				'p-ios' => __( 'Apple iOS', 'wp-slimstat' ),
				'p-jav' => __( 'Java-based OS', 'wp-slimstat' ),
				'p-lin' => __( 'Linux', 'wp-slimstat' ),
				'p-mac' => __( 'Apple', 'wp-slimstat' ),
				'p-rim' => __( 'Blackberry', 'wp-slimstat' ),
				'p-sym' => __( 'Symbian OS', 'wp-slimstat' ),
				'p-ubu' => __( 'Linux', 'wp-slimstat' ),
				'p-win' => __( 'Microsoft', 'wp-slimstat' ),

				// Tracker Errors
				'e-101' => __( 'Invalid data signature. Try clearing your WordPress cache.', 'wp-slimstat' ),
				'e-102' => __( 'Invalid content type signature. Try clearing your WordPress cache.', 'wp-slimstat' ),
				'e-103' => __( 'Invalid content type format. Try clearing your WordPress cache.', 'wp-slimstat' ),
				'e-200' => __( 'Unspecified error while attempting to add a new record to the table', 'wp-slimstat' ),
				'e-201' => __( 'Malformed referrer URL', 'wp-slimstat' ),
				'e-202' => __( 'Pageview not tracked because the IP address format was invalid.', 'wp-slimstat' ),
				'e-203' => __( 'Malformed resource URL', 'wp-slimstat' ),
				'e-204' => __( 'Tracking is turned off, but it looks like the client-side code is still attached to your pages. Do you have a caching tool enabled?', 'wp-slimstat' ),
				'e-205' => __( 'Invalid MaxMind data file. Please <a target="_blank" href="https://slimstat.freshdesk.com/support/solutions/articles/12000039798-how-to-manually-install-the-maxmind-geolocation-data-file-">follow these steps</a> to download it manually.', 'wp-slimstat' ),
			);

			// set_transient( 'slimstat_dynamic_strings', self::$dynamic_strings, 86400 );
		}
	}

	public static function get_country_codes() {
		if ( empty( self::$dynamic_strings ) ) {
			self::init_dynamic_strings();
		}

		$country_codes = array();
		foreach ( array_keys( self::$dynamic_strings ) as $a_code ) {
			if ( strpos( $a_code, 'c-', 0 ) !== false && strlen( $a_code ) > 2 && $a_code != 'c-xx' && $a_code != 'c-xy' ) {
				$country_codes[ strtolower( str_replace( 'c-', '', $a_code ) ) ] = self::$dynamic_strings[ $a_code ];
			}
		}

		return $country_codes;
	}

	public static function get_string( $_code = '' ) {
		if ( empty( self::$dynamic_strings ) ) {
			self::init_dynamic_strings();
		}

		if ( !isset( self::$dynamic_strings[ $_code ] ) ) {
			return $_code;
		}

		return self::$dynamic_strings[ $_code ];
	}
}