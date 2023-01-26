<?php

/**
 * SAML 2.0 IdP configuration for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-hosted
 */

$metadata['https://aoprototest-php2.azurewebsites.net/www/saml2/idp/metadata.php'] = array(
        /*
         * The hostname of the server (VHOST) that will use this SAML entity.
         *
         * Can be '__DEFAULT__', to use this entry by default.
         */
        'host' => 'aoprototest-php2.azurewebsites.net',

        /* X.509 key and certificate. Relative to the cert directory. */
        'certificate' => '/home/site/wwwroot/cert/server.crt',
        'privatekey'  => '/home/site/wwwroot/cert/server.pem',
        // no password

        /*
         * Authentication source to use. Must be one that is configured in
         * 'config/authsources.php'.
         */
        'auth' => 'example-userpass',
        //'auth' => 'example-ldap',

        /* Uncomment the following to use the uri NameFormat on attributes. */
        'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
        'authproc' => array(
                // Convert LDAP names to oids.
                100 => array('class' => 'core:AttributeMap', 'name2oid'),
        ),

);