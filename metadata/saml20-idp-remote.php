<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://aoprototest-php2.azurewebsites.net/www/saml2/idp/metadata.php'] = array (
  'name' => 'idp_exp',
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://aoprototest-php2.azurewebsites.net/www/saml2/idp/metadata.php',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://aoprototest-php2.azurewebsites.net/www/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 'https://aoprototest-php2.azurewebsites.net/www/saml2/idp/SingleLogoutService.php',
  'certData' => 'MIIDdTCCAl2gAwIBAgIUIXrmNezbTVWFZwD7BXlUPOf949IwDQYJKoZIhvcNAQELBQAwSjELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRPS1lPMSswKQYDVQQDDCJhb3Byb3RvdGVzdC1waHAuYXp1cmV3ZWJzc2l0ZXMubmV0MB4XDTIzMDEwNjA5NTM1NVoXDTMzMDEwNTA5NTM1NVowSjELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRPS1lPMSswKQYDVQQDDCJhb3Byb3RvdGVzdC1waHAuYXp1cmV3ZWJzc2l0ZXMubmV0MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2TrgDFVBJ6x5s9ePyVoWJ5EOc8QsiCFH9pKHBUqdjgtRIfNUMjNvJFcBdwnMGT8nyVkb9xjs+l8SD7rv5HDBFJeqZSwsEsjcI7rlakVT+Ce3P305wrEwVriilZXMzyraMwEaiUybdBEtBJrkML0mMR0NDB8L5zFvcIMGNsw1Kdz3/xH3i5bC1zjOrrxGR+5abAzWzr2Z4+l5B3UxTBKGacQb8q5LYdoHAW170E0TgiyiuiGi37fLgw2Q5e5d7RuIWZjXemOE8oxHu1syrIlxuvR52PjEEV8nXS7xKiS2TJZzp1qMQkiO0PUgNI0JnCEb8LhrZRRqqLf1fQcEp+VTQQIDAQABo1MwUTAdBgNVHQ4EFgQUre8Z0Mk9e2Q5zzZCcLASeo46A40wHwYDVR0jBBgwFoAUre8Z0Mk9e2Q5zzZCcLASeo46A40wDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEAkJWcFiujadNaCbe5SJDaJIZ7vZ2AH8dQ7Gj2DfDKHxT28XauKR8IMjcTPIvbWcWu7+JOkYrEnXCxzW+rgsYvUUDVpfiWRyG3Nu0x3Axtrg7AzT2y1FVdXmK3zNG8GBVFeap/wW/xewx7GhBplFbPJRVJ0pFYMCzcQYyrfGp42nh8P7u/5JV6IMud3hVNb/7SnVVneL+aTB1NuwxLCHDRNElKj8swXwGNLQADAOmYtDXACnMxapL5f3ssrl2+c5l8hSckHsMsz4NSyNgXLLs4mSKgKCNAJUkfWaXI7JSlzUz6E8IrBiYuBwSMS3L+4JgeQTq423LV84U4JdPVKlD4tA==',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);