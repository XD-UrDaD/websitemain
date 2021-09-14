<?php
/*
 *  Made by alsoGAMER
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Italian Language - Installation
 */

$language = array(
    /*
     *  Installation
     */
    'install' => 'Installa',
    'pre-release' => 'Pre-Rilascio',
    'installer_welcome' => 'Benvenuti nel pre-rilascio di NamelessMC versione 2.0.',
    'pre-release_warning' => "Si prega di notare che questo è un pre-rilascio e non è pensato per l'uso su un sito pubblico.",
    'installer_information' => 'Il programma di installazione ti guiderà attraverso il processo di installazione.',
    'terms_and_conditions' => 'Continuando accetti i termini e le condizioni.',
    'new_installation_question' => 'Innanzitutto, si tratta di una nuova installazione?',
    'new_installation' => 'Nuova installazione &raquo;',
    'upgrading_from_v1' => 'Aggiornamento dalla versione 1 &raquo;',
    'requirements' => 'Requisiti:',
    'config_writable' => 'core/config.php scrivibile',
    'cache_writable' => 'Cache scrivibile',
    'template_cache_writable' => 'Cache modelli scrivibile',
    'exif_imagetype_banners_disabled' => 'Senza la funzione exif_imagetype, i banner del server saranno disabilitati.',
    'requirements_error' => "È necessario disporre di tutte le estensioni richieste installate e disporre delle autorizzazioni corrette impostate per procedere con l'installazione.",
    'proceed' => 'Procedi',
    'database_configuration' => 'Configurazione del database',
    'database_address' => 'Indirizzo del database',
    'database_port' => 'Porta del database',
    'database_username' => 'Username del database',
    'database_password' => 'Password del database',
    'database_name' => 'Nome del database',
    'nameless_path' => 'Percorso di installazione',
    'nameless_path_info' => 'Questo è il percorso in cui Nameless verrà installato, relativamente al tuo dominio. Ad esempio, se Nameless è installato su example.com/forum, questo deve essere <strong>forum</strong>. Lascia vuoto se Nameless non si trova in una sottocartella.',
    'friendly_urls' => 'URL amichevoli',
    'friendly_urls_info' => 'Le URL amichevoli miglioreranno la leggibilità degli URL nel tuo browser. <br />Ad esempio: <br /><code>example.com/index.php?route=/forum</code><br />diventerebbe<br /><code>example.com/forum</code><br /><div class="ui inverted orange segment"><i class="exclamation circle icon"></i><strong>Importante!</strong><br /> Il tuo server deve essere configurato correttamente affinché ciò funzioni. Puoi controllare se puoi abilitare questa opzione cliccando <a href=\'./rewrite_test.php\' target=\'_blank\'style="color:#2185D0">qui</a>.</div>',
    'enabled' => 'Abilitato',
    'disabled' => 'Disabilitato',
    'character_set' => 'Set di caratteri',
    'database_engine' => 'Motore di archiviazione del database',
    'host' => 'Nome host',
    'host_help' => "L'hostname è <strong>URL di base</strong> per il tuo sito web. Non includere le sottocartelle dal campo 'Percorso di installazione' o http(s):// qui!",
    'database_error' => 'Assicurati che tutti i campi siano stati compilati.',
    'submit' => 'Invia',
    'installer_now_initialising_database' => 'Il programma di installazione sta inizializzando il database. Ciò potrebbe richiedere del tempo...',
    'configuration' => 'Configurazione',
    'configuration_info' => 'Inserisci le informazioni di base sul tuo sito. Questi valori possono essere modificati in seguito attraverso il pannello di amministrazione.',
    'configuration_error' => 'Inserisci un nome sito valido compreso tra 1 e 32 caratteri e un indirizzo email valido da 4 a 64 caratteri.',
    'site_name' => 'Nome del sito',
    'contact_email' => 'Email di contatto',
    'outgoing_email' => 'Email in uscita',
    'language' => 'Lingua',
    'initialising_database_and_cache' => 'Inizializzazione del database e della cache, attendere...',
    'unable_to_login' => "Impossibile effettuare l'accesso.",
    'unable_to_create_account' => "Impossibile creare l'account",
    'input_required' => 'Si prega di inserire un username, un indirizzo e-mail e una password validi.',
    'input_minimum' => 'Assicurati che il tuo username sia composto da un minimo di 3 caratteri, che il tuo indirizzo email sia composto da un minimo di 4 caratteri e che la tua password sia composta da un minimo di 6 caratteri.',
    'input_maximum' => 'Assicurati che il tuo username sia composto da un massimo di 20 caratteri e che il tuo indirizzo email e la password siano al massimo 64 caratteri.',
    'email_invalid' => 'La tua email non è valida',
    'passwords_must_match' => 'Le password devono corrispondere.',
    'creating_admin_account' => 'Creazione account amministratore',
    'enter_admin_details' => "Si prega di inserire i dettagli per l'account amministratore.",
    'username' => 'Nome utente',
    'email_address' => 'Indirizzo email',
    'password' => 'Password',
    'confirm_password' => 'Conferma Password',
    'upgrade' => 'Aggiorna',
    'input_v1_details' => "Si prega di inserire i dettagli del database per l'installazione della versione 1 di Nameless.",
    'installer_upgrading_database' => 'Attendi mentre il programma di installazione aggiorna il tuo database...',
    'errors_logged' => "Gli errori sono stati registrati, fai clic su Continua per continuare con l'aggiornamento.",
    'continue' => 'Continua',
    'convert' => 'Converti',
    'convert_message' => 'Infine, vuoi convertire da un altro software per forum?',
    'yes' => 'Si',
    'no' => 'No',
    'converter' => 'Convertitore',
    'back' => 'Indietro',
    'unable_to_load_converter' => 'Impossibile caricare il convertitore!',
    'finish' => 'Fine',
    'finish_message' => 'Grazie per aver installato NamelessMC! È ora possibile accedere al pannello amministrativo, dove è possibile configurare ulteriormente il sito web.',
    'support_message' => 'Se hai bisogno di supporto, consulta il nostro sito <a href="https://namelessmc.com" target="_blank">qui</a>, oppure puoi anche visitare il nostro <a href="https://discord.gg/nameless" target="_blank">Server Discord</a> o il nostro <a href="https://github.com/NamelessMC/Nameless/" target="_blank">Repository GitHub</a>.',
    'credits' => 'Crediti',
    'credits_message' => 'Un enorme ringraziamento a tutti i <a href="https://github.com/NamelessMC/Nameless/graphs/contributors" target="_blank">Collaboratori NamelessMC</a> dal 2014',

    'step_home' => 'Home',
    'step_requirements' => 'Requisiti',
    'step_general_config' => 'Configurazione generale',
    'step_database_config' => 'Configurazione del database',
    'step_site_config' => 'Configurazione del sito',
    'step_admin_account' => 'Account Admin',
    'step_conversion' => 'Conversione',
    'step_finish' => 'Fine',

    'general_configuration' => 'Configurazione generale',
    'reload' => 'Ricarica',
    'reload_page' => 'Ricarica la pagina',
    'no_converters_available' => 'Non ci sono convertitori disponibili.',
    'config_not_writable' => 'Il file di configurazione non è scrivibile.',

    'session_doesnt_exist' => 'Impossibile rilevare la sessione. Il salvataggio delle sessioni è un requisito per utilizzare Nameless. Prova di nuovo, e se il problema persiste, contatta il tuo host web per assistenza.'
);