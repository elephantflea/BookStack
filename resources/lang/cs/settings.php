<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nastavení',
    'settings_save' => 'Uložit nastavení',
    'settings_save_success' => 'Nastavení bylo uloženo',

    // App Settings
    'app_customization' => 'Customization',
    'app_features_security' => 'Features & Security',
    'app_name' => 'Název aplikace',
    'app_name_desc' => 'Název se bude zobrazovat v záhlaví této aplikace a v odesílaných emailech.',
    'app_name_header' => 'Zobrazovát název aplikace v záhlaví?',
    'app_public_access' => 'Public Access',
    'app_public_access_desc' => 'Enabling this option will allow visitors, that are not logged-in, to access content in your BookStack instance.',
    'app_public_access_desc_guest' => 'Access for public visitors can be controlled through the "Guest" user.',
    'app_public_access_toggle' => 'Allow public access',
    'app_public_viewing' => 'Povolit prohlížení veřejností?',
    'app_secure_images' => 'Nahrávat obrázky neveřejně a zabezpečeně?',
    'app_secure_images_toggle' => 'Enable higher security image uploads',
    'app_secure_images_desc' => 'Z výkonnostních důvodů jsou všechny obrázky veřejné. Tato volba přidá do adresy obrázku náhodné číslo, aby nikdo neodhadnul adresu obrázku. Zajistěte ať adresáře nikomu nezobrazují seznam souborů.',
    'app_editor' => 'Editor stránek',
    'app_editor_desc' => 'Zvolte který editor budou užívat všichni uživatelé k úpravě stránek.',
    'app_custom_html' => 'Vlastní HTML kód pro sekci hlavičky (<head>).',
    'app_custom_html_desc' => 'Cokoliv sem napíšete bude přidáno na konec sekce <head> v každém místě této aplikace. To se hodí pro přidávání nebo změnu CSS stylů nebo přidání kódu pro analýzu používání (např.: google analytics.).',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Logo aplikace',
    'app_logo_desc' => 'Obrázek by měl mít 43 pixelů na výšku. <br>Větší obrázky zmenšíme na tuto velikost.',
    'app_primary_color' => 'Hlavní barva aplikace',
    'app_primary_color_desc' => 'Zápis by měl být hexa (#aabbcc). <br>Pro základní barvu nechte pole prázdné.',
    'app_homepage' => 'Úvodní stránka aplikace',
    'app_homepage_desc' => 'Zvolte pohled který se objeví jako úvodní stránka po přihlášení. Pokud zvolíte stránku, její specifická oprávnění budou ignorována (výjimka z výjimky 😜).',
    'app_homepage_select' => 'Zvolte stránku',
    'app_disable_comments' => 'Zakázání komentářů',
    'app_disable_comments_toggle' => 'Disable comments',
    'app_disable_comments_desc' => 'Zakáže komentáře napříč všemi stránkami. Existující komentáře se přestanou zobrazovat.',

    // Color settings
    'content_colors' => 'Content Colors',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Shelf Color',
    'book_color' => 'Book Color',
    'chapter_color' => 'Chapter Color',
    'page_color' => 'Page Color',
    'page_draft_color' => 'Page Draft Color',

    // Registration Settings
    'reg_settings' => 'Nastavení registrace',
    'reg_enable' => 'Enable Registration',
    'reg_enable_toggle' => 'Enable registration',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => 'Role přiřazená po registraci',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Email Confirmation',
    'reg_email_confirmation_toggle' => 'Require email confirmation',
    'reg_confirm_email_desc' => 'Pokud zapnete omezení emailové domény, tak bude ověřování emailové adresy vyžadováno vždy.',
    'reg_confirm_restrict_domain' => 'Omezit registraci podle domény',
    'reg_confirm_restrict_domain_desc' => 'Zadejte emailové domény, kterým bude povolena registrace uživatelů. Oddělujete čárkou. Uživatelům bude odeslán email s odkazem pro potvrzení vlastnictví emailové adresy. Bez potvrzení nebudou moci aplikaci používat. <br> Pozn.: Uživatelé si mohou emailovou adresu změnit po úspěšné registraci.',
    'reg_confirm_restrict_domain_placeholder' => 'Žádná omezení nebyla nastvena',

    // Maintenance settings
    'maint' => 'Údržba',
    'maint_image_cleanup' => 'Pročistění obrázků',
    'maint_image_cleanup_desc' => "Prohledá stránky a jejich revize, aby zjistil, které obrázky a kresby jsou momentálně používány a které jsou zbytečné. Zajistěte plnou zálohu databáze a obrázků než se do toho pustíte.",
    'maint_image_cleanup_ignore_revisions' => 'Ignorovat obrázky v revizích',
    'maint_image_cleanup_run' => 'Spustit pročištění',
    'maint_image_cleanup_warning' => 'Nalezeno :count potenciálně nepoužitých obrázků. Jste si jistí, že je chcete smazat?',
    'maint_image_cleanup_success' => 'Potenciálně nepoužité obrázky byly smazány. Celkem :count.',
    'maint_image_cleanup_nothing_found' => 'Žádné potenciálně nepoužité obrázky nebyly nalezeny. Nic nebylo smazáno.',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',

    // Role Settings
    'roles' => 'Role',
    'role_user_roles' => 'Uživatelské role',
    'role_create' => 'Vytvořit novou roli',
    'role_create_success' => 'Role byla úspěšně vytvořena',
    'role_delete' => 'Smazat roli',
    'role_delete_confirm' => 'Role \':roleName\' bude smazána.',
    'role_delete_users_assigned' => 'Role je přiřazena :userCount uživatelům. Pokud jim chcete náhradou přidělit jinou roli, zvolte jednu z následujících.',
    'role_delete_no_migration' => "Nepřiřazovat uživatelům náhradní roli",
    'role_delete_sure' => 'Opravdu chcete tuto roli smazat?',
    'role_delete_success' => 'Role byla úspěšně smazána',
    'role_edit' => 'Upravit roli',
    'role_details' => 'Detaily role',
    'role_name' => 'Název role',
    'role_desc' => 'Stručný popis role',
    'role_external_auth_id' => 'Přihlašovací identifikátory třetích stran',
    'role_system' => 'Systémová oprávnění',
    'role_manage_users' => 'Správa úživatelů',
    'role_manage_roles' => 'Správa rolí a jejich práv',
    'role_manage_entity_permissions' => 'Správa práv všech knih, kapitol a stránek',
    'role_manage_own_entity_permissions' => 'Správa práv vlastních knih, kapitol a stránek',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Správa nastavení aplikace',
    'role_asset' => 'Práva děl',
    'role_asset_desc' => 'Tato práva řídí přístup k dílům v rámci systému. Specifická práva na knihách, kapitolách a stránkách překryjí tato nastavení.',
    'role_asset_admins' => 'Administrátoři automaticky dostávají přístup k veškerému obsahu, ale tyto volby mohou ukázat nebo skrýt volby v uživatelském rozhraní.',
    'role_all' => 'Vše',
    'role_own' => 'Vlastní',
    'role_controlled_by_asset' => 'Řídí se dílem do kterého jsou nahrávány',
    'role_save' => 'Uloži roli',
    'role_update_success' => 'Role úspěšně aktualizována',
    'role_users' => 'Uživatelé mající tuto roli',
    'role_users_none' => 'Žádný uživatel nemá tuto roli.',

    // Users
    'users' => 'Uživatelé',
    'user_profile' => 'Profil uživatele',
    'users_add_new' => 'Přidat nového uživatele',
    'users_search' => 'Vyhledávání uživatelů',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'Uživatelské role',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'Přihlašovací identifikátory třetích stran',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Vyplňujte pouze v případě, že chcete heslo změnit:',
    'users_system_public' => 'Symbolizuje libovolného veřejného návštěvníka, který navštívil vaší aplikaci. Nelze ho použít k přihlášení ale je přiřazen automaticky veřejnosti.',
    'users_delete' => 'Smazat uživatele',
    'users_delete_named' => 'Smazat uživatele :userName',
    'users_delete_warning' => 'Uživatel \':userName\' bude úplně smazán ze systému.',
    'users_delete_confirm' => 'Opravdu chcete tohoto uživatele smazat?',
    'users_delete_success' => 'Uživatel byl úspěšně smazán',
    'users_edit' => 'Upravit uživatele',
    'users_edit_profile' => 'Upravit profil',
    'users_edit_success' => 'Uživatel byl úspěšně aktualizován',
    'users_avatar' => 'Uživatelský obrázek',
    'users_avatar_desc' => 'Obrázek by měl být čtverec 256 pixelů široký. Bude oříznut do kruhu.',
    'users_preferred_language' => 'Upřednostňovaný jazyk',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Přidružené účty ze sociálních sítí',
    'users_social_accounts_info' => 'Zde můžete přidat vaše účty ze sociálních sítí pro pohodlnější přihlašování. Zrušení přidružení zde neznamená, že tato aplikace pozbude práva číst detaily z vašeho účtu. Zakázat této aplikaci přístup k detailům vašeho účtu musíte přímo ve vašem profilu na dané sociální síti.',
    'users_social_connect' => 'Přidružit účet',
    'users_social_disconnect' => 'Zrušit přidružení',
    'users_social_connected' => 'Účet :socialAccount byl úspěšně přidružen k vašemu profilu.',
    'users_social_disconnected' => 'Přidružení účtu :socialAccount k vašemu profilu bylo úspěšně zrušeno.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID"" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Created :timeAgo',
    'user_api_token_updated' => 'Token Updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
