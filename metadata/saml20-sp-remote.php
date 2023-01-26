<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
$metadata['https://saml2sp.example.org'] = [
    'AssertionConsumerService' => 'https://saml2.example.org/module.php/saml/sp/saml2-acs.php/default-sp',
    'SingleLogoutService' => 'https://saml2sp.example.org/module.php/saml/sp/saml2-logout.php/default-sp',
];

/*
 * This example shows an example config that works with Google Workspace (G Suite / Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * Google Workspace. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com,
 * then you must properly configure the saml:AttributeNameID authproc-filter with the name of an attribute that for
 * this user has the value of 'john'.
 */
$metadata['google.com'] = [
    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'authproc' => [
      1 => [
        'saml:AttributeNameID',
        'identifyingAttribute' => 'uid',
        'format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
      ],
    ],
    'simplesaml.attributes' => false,
];

$metadata['https://legacy.example.edu'] = [
    'AssertionConsumerService' => 'https://legacy.example.edu/saml/acs',
    /*
     * Currently, SimpleSAMLphp defaults to the SHA-256 hashing algorithm.
     * Uncomment the following option to use SHA-1 for signatures directed
     * at this specific service provider if it does not support SHA-256 yet.
     *
     * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
     * Please refer to the following document for more information:
     * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
     */
    //'signature.algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
];

$metadata['https://aoprototest-php3.azurewebsites.net/www/saml2/idp/metadata.php/default-sp'] = [
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://aoprototest-php3.azurewebsites.net/www/module.php/saml/sp/saml2-logout.php/default-sp',
        ],
    ],
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://aoprototest-php3.azurewebsites.net/www/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 0,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://aoprototest-php3.azurewebsites.net/www/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 1,
        ],
    ],
    'certData' => 'MIIDdTCCAl2gAwIBAgIUIXrmNezbTVWFZwD7BXlUPOf949IwDQYJKoZIhvcNAQELBQAwSjELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRPS1lPMSswKQYDVQQDDCJhb3Byb3RvdGVzdC1waHAuYXp1cmV3ZWJzc2l0ZXMubmV0MB4XDTIzMDEwNjA5NTM1NVoXDTMzMDEwNTA5NTM1NVowSjELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRPS1lPMSswKQYDVQQDDCJhb3Byb3RvdGVzdC1waHAuYXp1cmV3ZWJzc2l0ZXMubmV0MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2TrgDFVBJ6x5s9ePyVoWJ5EOc8QsiCFH9pKHBUqdjgtRIfNUMjNvJFcBdwnMGT8nyVkb9xjs+l8SD7rv5HDBFJeqZSwsEsjcI7rlakVT+Ce3P305wrEwVriilZXMzyraMwEaiUybdBEtBJrkML0mMR0NDB8L5zFvcIMGNsw1Kdz3/xH3i5bC1zjOrrxGR+5abAzWzr2Z4+l5B3UxTBKGacQb8q5LYdoHAW170E0TgiyiuiGi37fLgw2Q5e5d7RuIWZjXemOE8oxHu1syrIlxuvR52PjEEV8nXS7xKiS2TJZzp1qMQkiO0PUgNI0JnCEb8LhrZRRqqLf1fQcEp+VTQQIDAQABo1MwUTAdBgNVHQ4EFgQUre8Z0Mk9e2Q5zzZCcLASeo46A40wHwYDVR0jBBgwFoAUre8Z0Mk9e2Q5zzZCcLASeo46A40wDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEAkJWcFiujadNaCbe5SJDaJIZ7vZ2AH8dQ7Gj2DfDKHxT28XauKR8IMjcTPIvbWcWu7+JOkYrEnXCxzW+rgsYvUUDVpfiWRyG3Nu0x3Axtrg7AzT2y1FVdXmK3zNG8GBVFeap/wW/xewx7GhBplFbPJRVJ0pFYMCzcQYyrfGp42nh8P7u/5JV6IMud3hVNb/7SnVVneL+aTB1NuwxLCHDRNElKj8swXwGNLQADAOmYtDXACnMxapL5f3ssrl2+c5l8hSckHsMsz4NSyNgXLLs4mSKgKCNAJUkfWaXI7JSlzUz6E8IrBiYuBwSMS3L+4JgeQTq423LV84U4JdPVKlD4tA==',
];