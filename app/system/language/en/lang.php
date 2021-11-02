<?php

return [
    'system_name' => 'TastyIgniter',
    'system_powered' => '<a target="_blank" href="http://tastyigniter.com">Powered by TastyIgniter</a>',
    'copyright' => 'Thank you for using <a target="_blank" href="http://tastyigniter.com">TastyIgniter</a>',
    'version' => '<b>Version:</b> %s',

    'no_database' => [
        'label' => 'Database Error Was Encountered',
        'help' => 'A database connection is required. Check the database is properly configured and migrated before trying again.',
    ],
    'required' => [
        'config' => "Configuration used in %s must supply a value '%s'.",
    ],
    'not_found' => [
        'model' => "The model ':name' is not found.",
        'layout' => "The layout ':name' is not found.",
        'partial' => "The partial ':name' is not found.",
        'config' => 'Unable to find configuration file %s defined for %s.',
        'class' => "Unable to find '%s' in %s",
        'combiner' => "Unable to find assets '%s'",
    ],
    'missing' => [
        'config_key' => 'Missing required [%s] key in %s',
        'carte_key' => 'No carte key found, click the carte button below to enter one.',
    ],
    'error' => [
    ],

    'date' => [
        'today' => 'Today',
        'tomorrow' => 'Tomorrow',
        'yesterday' => 'Yesterday',
        'full' => '%s at %s',
    ],

    'php' => [
        'date_format' => 'd M Y',
        'date_format_short' => 'd M',
        'date_format_long' => 'l, jS F Y',
        'time_format' => 'H:i',
        'date_time_format' => 'd M Y H:i',
        'date_time_format_short' => 'd M H:i',
        'date_time_format_long' => 'l, jS F Y \a\t h:i a',
    ],

    'moment' => [
        'date_format' => 'DD MMM YYYY',
        'date_format_short' => 'DD MMM',
        'date_format_long' => 'dddd, Do MMM YYYY',
        'time_format' => 'hh:mm a',
        'date_time_format' => 'DD MMMM YYYY HH:mm',
        'date_time_format_short' => 'DD MMM \a\t HH:mm',
        'date_time_format_long' => 'dddd, Do MMMM YYYY \a\t HH:mm a',
        'weekday_format' => 'ddd',
        'day_format' => 'ddd DD',
        'day_time_format' => 'ddd DD hh:mm a',
        'day_time_format_short' => 'ddd hh:mm a',
    ],

    'activities' => [
        'text_title' => 'Activities',
        'button_mark_as_read' => 'Mark all as read',
        'text_empty' => 'There are no activities available.',
        'activity_system' => 'System',
        'activity_self' => 'You',
        'activity_master_logged_in' => ' <b>logged</b> in as <b>:subject.first_name :subject.last_name</b>.',
    ],

    'countries' => [
        'text_title' => 'Countries',
        'text_form_name' => 'Country',
        'text_filter_search' => 'Search by name or code.',
        'text_empty' => 'There are no countries available.',

        'column_iso_code2' => 'ISO Code 2',
        'column_iso_code3' => 'ISO Code 3',
        'column_status' => 'Status',

        'label_priority' => 'Priority',
        'label_format' => 'Format',
        'label_iso_code2' => 'ISO Code 2',
        'label_iso_code3' => 'ISO Code 3',

        'help_format' => 'Address 1 = {address_1}<br />Address 2 = {address_2}<br />City = {city}<br />Postcode = {postcode}<br />State = {state}<br />Country = {country}',
        'help_iso' => 'Learn more about <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO Alpha 2 & 3</a>',
    ],

    'currencies' => [
        'text_title' => 'Currencies',
        'text_form_name' => 'Currency',
        'text_filter_search' => 'Search by name or code.',
        'text_empty' => 'There are no currencies available.',
        'text_right' => 'Right',
        'text_left' => 'Left',

        'column_code' => 'Code',
        'column_country' => 'Country',
        'column_symbol' => 'Symbol',
        'column_rate' => 'Rate',
        'column_status' => 'Status',

        'label_title' => 'Title',
        'label_code' => 'Code',
        'label_country' => 'Country',
        'label_symbol' => 'Symbol',
        'label_symbol_position' => 'Symbol Position',
        'label_rate' => 'Rate',
        'label_thousand_sign' => 'Thousand Separator',
        'label_decimal_sign' => 'Decimal Point',
        'label_decimal_position' => 'Decimal Place',

        'help_iso' => 'Learn more about <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>',
    ],

    'extensions' => [
        'text_title' => 'Extensions',
        'text_delete_title' => 'Extension: Delete',
        'text_filter_search' => 'Search by name.',
        'text_empty' => 'There are no extensions available.',
        'text_installed' => 'Installed',
        'text_uninstalled' => 'Uninstalled',
        'text_files' => 'files',
        'text_files_data' => 'files and data',
        'text_settings' => 'Settings',
        'text_author' => 'Author',

        'button_browse' => '<i class="fa fa-globe"></i>&nbsp;&nbsp;Browse more extensions&nbsp;&nbsp;<i class="fa fa-external-link-alt"></i>',
        'button_delete' => 'Delete',
        'button_payments' => 'Manage Payments',
        'button_settings' => 'Manage Settings',
        'button_yes_delete' => 'Yes, delete',
        'button_return_to_list' => 'No, return to list',

        'column_icon' => 'Icon',
        'column_version' => 'Version',

        'label_delete_data' => 'Delete Data',

        'error_config_no_found' => 'An error occurred, extension registration file could not be found',

        'alert_info_layouts' => '<b>Layout & Page component(s) registered</b>',
        'alert_warning_layouts' => 'To display the component for this extension on a page add it to a layout <a href="%s" class="alert-link">here!</a>',
        'alert_delete_warning' => 'You are about to delete the %s of extension <b>%s</b>',
        'alert_delete_confirm' => 'Are you sure you wish to delete the associated %s? This cannot be undone!',
        'alert_is_installed' => '. You must uninstall an extension before deleting.',
        'alert_setting_missing_id' => 'Extension setting code has not been specified.',
        'alert_setting_not_found' => 'Extension settings was not found.',
        'alert_setting_model_missing' => 'Missing settings model.',
        'alert_setting_model_not_found' => 'Extension settings model [%s] was not found.',
    ],

    'languages' => [
        'text_title' => 'Languages',
        'text_form_name' => 'Language',
        'text_tab_general' => 'Details',
        'text_tab_files' => 'Translations',
        'text_tab_edit_file' => 'Edit Translations',
        'text_filter_search' => 'Search by name.',
        'text_filter_file' => 'View all translations',
        'text_filter_translations' => 'Filter translations.',
        'text_empty' => 'There are no languages available.',
        'text_empty_translations' => 'There are no translations available.',
        'text_files' => 'files',
        'text_locale_strings' => 'Locale Strings (%s%% translated, %s strings)',

        'column_code' => 'Code',
        'column_status' => 'Status',
        'column_variable' => 'Source text (English)',
        'column_language' => 'Translation text (%s)',

        'label_code' => 'Locale Code',
        'label_image' => 'Icon',
        'label_idiom' => 'Idiom',

        'button_new' => 'New Group',

        'help_language' => 'Use a full locale code (e.g. “fr_FR”) instead of just a generic language code (e.g. “fr”), must be same as the locale directory.',

        'alert_save_changes' => 'Your changes will be lost if you don\'t save them before editing another language file.',

        'translations' => [

            'label_file' => 'Locale File',
            'label_search' => 'Search',

            'help_no_files' => 'No matching translations found for this language. You must install a language pack.',
        ],
    ],

    'mail_templates' => [
        'text_title' => 'Mail Layouts',
        'text_form_name' => 'Mail Layout',
        'text_template_title' => 'Mail Templates',
        'text_new_template_title' => 'Mail Template: New',
        'text_edit_template_title' => 'Mail Template: Update',
        'text_preview_template_title' => 'Mail Template: Preview',
        'text_partial_title' => 'Mail Partials',
        'text_partial_form_name' => 'Mail Partial',
        'text_new_partial_title' => 'Mail Partial: New',
        'text_edit_partial_title' => 'Mail Partial: Update',
        'text_preview_partial_title' => 'Mail Partial: Preview',
        'text_templates' => 'Templates',
        'text_layouts' => 'Layouts',
        'text_partials' => 'Partials',
        'text_empty' => 'There are no mail templates available.',
        'text_variables' => 'Variables',
        'text_registration' => 'Registration email to customer',
        'text_password_reset_request' => 'Password reset request email to customer',
        'text_password_reset_request_alert' => 'Password reset request email to admin',
        'text_password_reset' => 'Password reset email to customer',
        'text_password_reset_alert' => 'Password reset email to admin',
        'text_order' => 'Order email to customer',
        'text_reservation' => 'Reservation email to customer',
        'text_internal' => 'Internal Message',
        'text_contact' => 'Contact email to admin',
        'text_registration_alert' => 'Registration alert email to admin',
        'text_order_alert' => 'Order alert email to admin',
        'text_reservation_alert' => 'Reservation alert to admin',
        'text_order_update' => 'Order status update email to customer',
        'text_reservation_update' => 'Reservation status update email to customer',

        'button_test_message' => 'Send test message',

        'column_code' => 'Code',
        'column_title' => 'Title',
        'column_layout' => 'Layout',
        'column_status' => 'Status',

        'label_language' => 'Language',
        'label_code' => 'Code',
        'label_subject' => 'Subject',
        'label_layout' => 'Layout',
        'label_layout_css' => 'Layout CSS',
        'label_body' => 'HTML',
        'label_markdown' => 'Markdown',
        'label_plain' => 'Plain Text',

        'help_variables' => 'Drag these variables into the content area:',

        'alert_test_message_sent' => 'Test message successfully sent to %s',
        'alert_template_id_not_found' => 'Template id not found',
        'alert_template_not_found' => ' Template not found',
    ],

    'mail_variables' => [
        'text_group_global' => 'Global variables',
        'text_site_name' => 'Site name',
        'text_site_logo' => 'Site logo',

        'text_group_customer' => 'Customer variables',
        'text_first_name' => 'Customer first name',
        'text_last_name' => 'Customer last name',
        'text_email' => 'Customer email address',
        'text_telephone' => 'Customer telephone address',

        'text_group_staff_reset' => 'Staff password reset variables',
        'text_staff_name' => 'Staff name',
        'text_staff_reset_link' => 'Staff password reset url',

        'text_group_registration' => 'Registration variables',
        'text_account_login_link' => 'Account login url',

        'text_group_reset' => 'Password reset variables',
        'text_reset_code' => 'Password reset code',
        'text_reset_link' => 'Password reset url',

        'text_group_order' => 'Order variables',
        'text_order_object' => 'Order model object',
        'text_order_number' => 'Order number',
        'text_customer_name' => 'Customer full name',
        'text_order_type' => 'Order type ex. delivery/pick-up',
        'text_order_time' => 'Order delivery/pick-up time',
        'text_order_date' => 'Order delivery/pick-up date',
        'text_order_added' => 'Order created date',
        'text_order_payment' => 'Order payment method',
        'text_order_address' => 'Customer address for delivery order',
        'text_invoice_number' => 'Customer telephone address',
        'text_invoice_date' => 'Customer telephone address',
        'text_order_menus' => 'Array of order menu items',
        'text_order_comment' => 'Order comment',
        'text_location_name' => 'Location name',
        'text_location_email' => 'Location email',
        'text_location_address' => 'Location address',
        'text_location_telephone' => 'Location telephone',
        'text_order_view_url' => 'Order view URL',
        'text_order_totals' => 'Array of order totals',
        'text_menu_name' => 'Order menu name',
        'text_menu_quantity' => 'Order menu quantity',
        'text_menu_price' => 'Order menu price',
        'text_menu_subtotal' => 'Order menu subtotal',
        'text_menu_options' => 'Order menu option ex. name: price',
        'text_menu_comment' => 'Order menu comment',
        'text_order_total_title' => 'Order total title',
        'text_order_total_value' => 'Order total value',
        'text_priority' => 'Order total priority',

        'text_group_reservation' => 'Reservation variables',
        'text_reservation_object' => 'Reservation model object',
        'text_reservation_number' => 'Reservation number',
        'text_reservation_date' => 'Reservation date',
        'text_reservation_time' => 'Reservation time',
        'text_reservation_guest_no' => 'No. of guest reserved',
        'text_reservation_comment' => 'Reservation comment',
        'text_reservation_view_url' => 'Reservation view URL',

        'text_status_name' => 'Status name',
        'text_status_comment' => 'Status comment',

        'text_group_contact' => 'Contact variables',
        'text_full_name' => 'Contact full name',
        'text_contact_email' => 'Contact email',
        'text_contact_telephone' => 'Contact telephone',
        'text_contact_topic' => 'Contact topic',
        'text_contact_message' => 'Contact message body',

    ],

    'permissions' => [
        'name' => 'System',
        'activities' => 'Access activities',
        'countries' => 'Create, edit and delete countries',
        'currencies' => 'Create, edit and delete currencies',
        'system_logs' => 'View system and requests logs',
        'extensions' => 'Install, uninstall and delete extension',
        'mail_templates' => 'Create, edit and delete mail templates',
        'languages' => 'Create, edit and delete site languages',
        'settings' => 'Manage system settings',
        'updates' => 'Ability to apply updates when a new version of TastyIgniter is available',
    ],

    'request_logs' => [
        'text_title' => 'Request Logs',
        'text_form_name' => 'Request Log',
        'text_filter_search' => 'Search by name.',
        'text_empty' => 'There are no request logs available.',
        'text_empty_referrer' => 'There are no referrers to this URL.',

        'column_status_code' => 'Status Code',
        'column_url' => 'Requested Url',
        'column_count' => 'Counter',

        'label_url' => 'Requested Url',
        'label_referer' => 'Referrer',
    ],

    'settings' => [
        'text_title' => 'Settings',
        'text_edit_title' => 'Settings: %s',
        'text_tab_general' => 'General',
        'text_tab_restaurant' => 'Restaurant',
        'text_tab_mail' => 'Mail',
        'text_tab_server' => 'Advanced',

        'text_tab_desc_general' => 'Change your restaurant name, email, default language, currency...',
        'text_tab_desc_mail' => 'Settings for sending out emails',
        'text_tab_desc_server' => 'Manage advanced system settings such as enabling/disabling maintenance.',

        'text_tab_site' => 'Site',
        'text_tab_title_maps' => 'Geolocation',
        'text_tab_title_date_time' => 'Date/Time',
        'text_tab_title_currency' => 'Currency',
        'text_tab_title_language' => 'Language',
        'text_tab_title_taxation' => 'Taxation',
        'text_tab_title_invoice' => 'Invoicing',
        'text_tab_title_order' => 'Order',
        'text_tab_title_reservation' => 'Reservation',
        'text_tab_title_maintenance' => 'Maintenance',
        'text_tab_title_system_log' => 'Log Settings',
        'text_tab_title_activity_log' => 'Activity Log Settings',
        'text_single' => 'Single',
        'text_multiple' => 'Multiple',
        'text_1_hour' => '1 Hours',
        'text_3_hours' => '3 Hours',
        'text_6_hours' => '6 Hours',
        'text_12_hours' => '12 Hours',
        'text_24_hours' => '24 Hours',
        'text_3_days' => '3 Days',
        'text_5_days' => '5 Days',
        'text_1_week' => '1 Week',
        'text_auto' => 'Automatically',
        'text_manual' => 'Manually',
        'text_miles' => 'Miles',
        'text_kilometers' => 'Kilometers',
        'text_chain_geocoder' => 'Chain (Recommended)',
        'text_google_geocoder' => 'Google Geocoding',
        'text_nominatim' => 'OpenStreetMap\'s Nominatim',
        'text_plain' => 'Plain Text',
        'text_html' => 'HTML',
        'text_sendmail' => 'Sendmail',
        'text_smtp' => 'SMTP',
        'text_log_file' => 'Log file',
        'text_mailgun' => 'Mailgun',
        'text_postmark' => 'Postmark (Requires the Third-Party Drivers Extension)',
        'text_ses' => 'SES',
        'text_mail_no_encryption' => 'No encryption',
        'text_mail_tls_encryption' => 'TLS',
        'text_mail_ssl_encryption' => 'SSL',
        'text_to_customer' => 'To customer',
        'text_to_admin' => 'To restaurant',
        'text_to_location' => 'To location',
        'text_send_test_email' => 'Sent Test Email',
        'text_internal_sequence_prefix' => 'Prefix plus Internal numbering sequence',
        'text_menu_price_include_tax' => 'Menu prices already include tax',
        'text_apply_tax_on_menu_price' => 'Apply tax on top of my menu price',
        'text_openexchangerates' => 'Open Exchange Rates',
        'text_fixerio' => 'Fixer.io',

        'label_site_name' => 'Restaurant Name',
        'label_site_email' => 'Restaurant Email',
        'label_site_logo' => 'Restaurant Logo',
        'label_timezone' => 'Default Timezone',
        'label_site_currency' => 'Default Currency',
        'label_currency_converter' => 'Default Currency Converter',
        'label_currency_converter_oer_api_key' => 'Currency Converter (Open Exchange Rates API) App ID',
        'label_currency_converter_fixer_api_key' => 'Currency Converter (Fixer.io API) App ID',
        'label_currency_refresh_interval' => 'Exchange Rates Refresh Interval',
        'label_detect_language' => 'Detect Browser Language',
        'label_site_language' => 'Default Language',
        'label_customer_group' => 'Customer Group',
        'label_country' => 'Country',
        'label_maps_api_key' => 'Google Maps API Key',
        'label_distance_unit' => 'Distance Unit',
        'label_default_geocoder' => 'Default Geocoder',
        'label_tax_mode' => 'Tax Mode',
        'label_tax_title' => 'Tax Title',
        'label_tax_percentage' => 'Tax Rate',
        'label_tax_menu_price' => 'Tax Menu Price',
        'label_tax_delivery_charge' => 'Tax Delivery Charge',
        'label_default_order_status' => 'Default Order Status',
        'label_processing_order_status' => 'Processing Order Status',
        'label_completed_order_status' => 'Completed Order Status',
        'label_canceled_order_status' => 'Cancellation Order Status',
        'label_menus_page' => 'Menu Items Page',
        'label_reservation_page' => 'Reservation Page',
        'label_guest_order' => 'Allow Guest Orders',
        'label_location_order' => 'Reject Orders Outside Delivery Area',
        'label_invoice_prefix' => 'Invoice Prefix',
        'label_default_reservation_status' => 'Default Reservation Status',
        'label_confirmed_reservation_status' => 'Confirmed Reservation Status',
        'label_canceled_reservation_status' => 'Canceled Reservation Status',
        'label_media_max_size' => 'Maximum File Size',
        'label_media_thumb_height' => 'Thumbnail Height',
        'label_media_thumb_width' => 'Thumbnail Width',
        'label_media_uploads' => 'Uploads',
        'label_media_new_folder' => 'New Folder',
        'label_media_copy' => 'Copy',
        'label_media_move' => 'Move',
        'label_media_rename' => 'Rename',
        'label_media_delete' => 'Delete',
        'label_media_transliteration' => 'Transliteration',
        'label_allow_registration' => 'Allow customer registration',
        'label_registration_email' => 'Send Registration Email',
        'label_order_email' => 'Send Order Confirmation/Alert Email',
        'label_reservation_email' => 'Send Reservation Confirmation/Alert Email',
        'label_sender_name' => 'Sender Name',
        'label_sender_email' => 'Sender Email',
        'label_protocol' => 'Mail Protocol',
        'label_sendmail_path' => 'Sendmail Path',
        'label_smtp_host' => 'SMTP Host',
        'label_smtp_port' => 'SMTP Port',
        'label_smtp_user' => 'SMTP Username',
        'label_smtp_pass' => 'SMTP Password',
        'label_smtp_encryption' => 'Encryption Protocol',
        'label_test_email' => 'Test Email',
        'label_mailgun_domain' => 'Mailgun domain',
        'label_mailgun_secret' => 'Mailgun secret',
        'label_postmark_token' => 'Postmark token',
        'label_ses_key' => 'SES key',
        'label_ses_secret' => 'SES secret',
        'label_ses_region' => 'SES region',
        'label_permalink' => 'Permalink',
        'label_enable_request_log' => 'Log Bad Requests',
        'label_maintenance_mode' => 'Maintenance Mode',
        'label_maintenance_message' => 'Maintenance Message',
        'label_activity_log_timeout' => 'Clean Up Activity Log Older Than',

        'alert_email_sending' => 'Sending email...',
        'alert_email_sent' => 'Email sent to %s',
        'alert_settings_missing_model' => 'Missing defined model %s.',
        'alert_settings_not_found' => 'Settings %s not found.',
        'alert_settings_errors' => 'Click to fix the missing required setting items.',
        'alert_delete_setup_files' => '<b>SECURITY WARNING!</b> Delete the setup files to stop someone else from overwriting your site.',

        'help_timezone' => 'The default timezone. Choose a city in the same timezone as your restaurant.',
        'help_detect_language' => 'Enable or disable user browser language detection. If enabled your site will be translated to the browser language.',
        'help_maps_api_key' => 'An API Key is required to use Google Maps and/or Geocoding. <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key">Where can I find my Google Maps API Key?</a> Enable Google Maps Geocoding API and Google Maps JavaScript API in your Google Developer account',
        'help_default_geocoder' => 'Tell the system which geocoder service to use when geocoding addresses. \'Chain\' is a special geocoder that runs both google and open street maps geocoder and stops once it gets a valid response.',
        'help_site_currency' => 'Enable more currencies from Localisation > Currencies.',
        'help_currency_converter_oer_api' => 'You can <a target="_blank" href="https://openexchangerates.org/signup/">sign up here</a> for your Open Exchange Rates API.',
        'help_currency_converter_fixer_api' => 'You can <a target="_blank" href="https://fixer.io/signup/">sign up here</a> for your Fixer.io API.',
        'help_special_category' => 'Select which category to use automatically for special menus',
        'help_tax_mode' => 'Set whether to enable or disable calculating tax in storefront',
        'help_tax_title' => 'Enter the tax title as it should be displayed on storefront. Ex. VAT',
        'help_tax_percentage' => 'Enter the percentage to calculate taxes. Ex. 15',
        'help_tax_menu_price' => 'Set whether menu price already include taxes or taxes should be calculated on menu price',
        'help_tax_delivery_charge' => 'Set whether delivery charge is taxable',
        'help_default_location' => 'Choose or add a new location to set as your main/default restaurant location.',
        'help_default_order_status' => 'Select the default order status when a new order is placed/received',
        'help_processing_order_status' => 'Select the order status an order must reach before the order starts stock reduction',
        'help_completed_order_status' => 'Select the order status to mark an order as completed before the order invoice is created and a customer can leave review',
        'help_canceled_order_status' => 'Select the order status when an order is marked as canceled or suspected of fraudulent activity',
        'help_menus_page' => 'Choose a page to display your menu items',
        'help_reservation_page' => 'Choose a page to display your booking form',
        'help_guest_order' => 'Allow customer to place an order without creating an account.',
        'help_location_order' => 'If disabled, the customer will be allowed to order without entering their postcode/adddress.',
        'help_invoice_prefix' => 'Set the invoice prefix (e.g. <b>INV-2015-00</b>1123). Leave blank to use no prefix. The following macros are available: {year} {month} {day} {hour} {minute} {second}',
        'help_default_reservation_status' => 'Select the default reservation status when new reservation received',
        'help_canceled_reservation_status' => 'Select the reservation status when a reservation is marked as canceled or suspected of fraudulent activity',
        'help_confirmed_reservation_status' => 'Select the reservation status to mark a reservation as confirmed before table is reserved',
        'help_delete_thumbs' => 'This will delete all created thumbs. Note thumbs are automatically created.',
        'help_media_max_size' => 'The maximum size (in kilobytes) limit for file when uploading.',
        'help_media_upload' => 'Enable or disable file uploading',
        'help_media_new_folder' => 'Enable or disable folder creation',
        'help_media_copy' => 'Enable or disable file/folder copy',
        'help_media_move' => 'Enable or disable moving file/folder',
        'help_media_rename' => 'Enable or disable file/folder rename',
        'help_media_delete' => 'Enable or disable deleting file/folder',
        'help_sendmail_path' => 'Please specify the sendmail path.',
        'help_allow_registration' => 'If this is disabled customers can only be created by administrators.',
        'help_registration_email' => 'Send a confirmation mail to the customer and/or admin email after successfully account registration',
        'help_order_email' => 'Send a confirmation mail to the customer, admin and/or location email after a new order has been created',
        'help_reservation_email' => 'Send a confirmation mail to the customer, admin and/or location email when a new reservation is received',
        'help_enable_request_log' => 'Whether to log bad browser requests, such as 404 errors.',
        'help_maintenance' => 'Enable to prevent customers from viewing your store. The maintenance message will be displayed to customers except logged admin.',
        'help_activity_log_timeout' => 'Delete all recorded activities older than the specified number of days',
    ],

    'system_logs' => [
        'text_title' => 'System Logs',

        'button_empty' => '<i class="fa fa-eraser"></i>&nbsp;&nbsp;Empty Logs',
        'button_request_logs' => '<i class="fa fa-globe"></i>&nbsp;&nbsp;Request Logs',
    ],

    'themes' => [
        'text_title' => 'Themes',
        'text_edit_title' => 'Theme: Customize',
        'text_source_title' => 'Theme: Edit Template',
        'text_delete_title' => 'Theme: Delete',
        'text_form_name' => 'Theme',
        'text_tab_customize' => 'Customize',
        'text_tab_markup' => 'Markup',
        'text_tab_php_section' => 'PHP Section',
        'text_tab_meta' => 'Meta',
        'text_tab_components' => 'Components',
        'text_empty' => 'There are no themes available.',
        'text_select_file' => 'Select a [%s] template to edit',
        'text_is_default' => 'Activated',
        'text_set_default' => 'Activate',
        'text_author' => 'by',
        'text_version' => 'Version',
        'text_theme_is_active' => '. You can not delete an active theme.',
        'text_files' => 'files',
        'text_files_data' => 'files and data',
        'text_locked_child' => 'Locked theme: create a child theme',

        'label_code' => 'Code',
        'label_template' => 'Template',
        'label_file' => 'Template filename',
        'label_title' => 'Title',
        'label_layout' => 'Layout',
        'label_permalink' => 'Permalink',
        'label_component' => 'Component',
        'label_component_alias' => 'Component Alias',
        'label_component_status' => 'Component Status',
        'label_delete_data' => 'Delete Data',
        'label_copy_data' => 'Copy Data',
        'label_type_page' => 'Pages',
        'label_type_partial' => 'Partials',
        'label_type_layout' => 'Layouts',
        'label_type_content' => 'Contents',

        'button_browse' => '<i class="fa fa-globe"></i>&nbsp;&nbsp;Browse more themes&nbsp;&nbsp;<i class="fa fa-external-link-alt"></i>',
        'button_source' => '<i class="fa fa-file"></i>&nbsp;&nbsp;Edit template files',
        'button_customize' => '<i class="fa fa-paint-brush"></i>&nbsp;&nbsp;Customize',
        'button_child' => '<i class="fa fa-child"></i>&nbsp;&nbsp;Create child theme',
        'button_choose' => 'Choose',
        'button_new_source' => 'New %s',
        'button_rename_source' => 'Rename %s',
        'button_delete_source' => 'Delete %s',
        'button_delete' => 'Delete',
        'button_yes_delete' => 'Yes, delete',
        'button_yes_copy' => 'Yes, copy',
        'button_return_to_list' => 'No, return to list',

        'help_components' => 'Render the component on a layout or page by adding <code>@component(&#x27;componentAlias&#x27;)</code> to the markup. Learn more <a href="https://tastyigniter.com/docs/master/customize/components">here</a>.',

        'error_config_no_found' => 'An error occurred, theme registration file could not be found',
        'error_theme_exists' => 'the theme already exists',

        'alert_delete_warning' => 'You are about to delete the %s of theme <b>%s</b>',
        'alert_delete_confirm' => 'Are you sure you wish to delete the associated %s? This cannot be undone!',
        'alert_theme_locked' => 'This is a locked theme, changes are restricted, create a child theme to make changes.',
        'alert_theme_path_locked' => 'This template belongs to a locked theme, such actions are restricted.',
        'alert_changes_confirm' => 'Conflicting versions, template file has changed. Reload the page to continue.',
        'alert_customize_not_active' => 'You can only customize an active theme.',
    ],

    'updates' => [
        'text_title' => 'Updates',
        'text_browse_title' => 'Browse %s',

        'text_title_carte' => 'Your Carté',

        'text_tab_title_extensions' => 'Extensions',
        'text_tab_title_themes' => 'Themes',
        'text_ignore' => 'Ignore',
        'text_search' => 'Search the TastyIgniter marketplace for %s to install',
        'text_popular_title' => 'Recommended %s',
        'text_last_checked' => '<b>Last checked:</b> %s',

        'text_no_updates' => 'No updates available.',

        'text_update_found' => '%s update(s) available',
        'text_update_ignored' => '%s update(s) ignored',
        'text_item_update_summary' => 'Update from version %s to <b>%s</b>',

        'text_core_update' => '<i class="fa fa-exclamation-triangle fa-fw"></i>&nbsp;&nbsp;After the core has been updated, other updates will be available.',

        'progress_download' => '<i class="fa fa-cloud-download fa-fw"></i>&nbsp;&nbsp;&nbsp;Downloading %s&#8230;',
        'progress_extract' => '<i class="fa fa-file-archive-o fa-fw"></i>&nbsp;&nbsp;&nbsp;Extracting %s&#8230;',
        'progress_complete' => '<i class="fa fa-download fa-fw"></i>&nbsp;&nbsp;&nbsp;Finishing installation&#8230;',

        'label_meta_code' => 'Meta Code',
        'label_meta_type' => 'Meta Type',
        'label_meta_version' => 'Meta Version',
        'label_meta_hash' => 'Meta Hash',
        'label_meta_description' => 'Meta Description',
        'label_meta_step' => 'Meta Step',
        'label_meta_action' => 'Meta Action',
        'label_meta_items' => 'Meta Items',

        'progress_success' => '<i class="fa fa-check fa-fw"></i>&nbsp;&nbsp;&nbsp;Finished %s %s successfully.&#8230;',
        'progress_update' => '<strong id="progress-updating">Updating %s&#8230;</strong>',
        'progress_enable_maintenance' => 'Enabling Maintenance mode&#8230;',
        'progress_disable_maintenance' => 'Restoring/Disabling Maintenance mode&#8230;',

        'button_browse' => '<i class="fa fa-globe"></i>&nbsp;&nbsp;Browse %s',
        'button_carte' => '<i class="fa fa-key"></i>&nbsp;&nbsp;Attach Carté Key',
        'button_check' => '<i class="fa fa-refresh"></i>&nbsp;&nbsp;Check Updates',
        'button_updates' => '<i class="fa fa-refresh"></i>&nbsp;&nbsp;Updates',
        'button_update' => '<i class="fa fa-check"></i>&nbsp;&nbsp;Update',
        'button_recommended_extension' => 'Install recommended extensions...',
        'button_recommended_theme' => 'Install a recommended theme...',
        'button_install' => 'Install Selected...',

        'help_carte_key' => 'A Carte key is required to add and update item from the TastyIgniter Marketplace. <br>Get one by creating a site from your <a href="%s" target="_blank">TastyIgniter Account</a>, if you haven\'t already. For more information, see the <a href="%s" target="_blank">Carté Key Guide</a>',
        'alert_item_to_ignore' => 'Select item(s) to ignore.',
        'alert_no_carte_key' => 'No carte key specified.',
        'alert_no_items' => 'No item(s) specified.',

    ],
];