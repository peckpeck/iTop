<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', [
	'Menu:CreateMailbox' => 'Create a mailbox...',
	'Menu:OAuthClient' => 'OAuth Client',
	'Menu:OAuthClient+' => '',
	'Menu:GenerateTokens' => 'Generate access token...',
	'Menu:RegenerateTokens' => 'Regenerate access token...',

	'itop-oauth-client/Operation:CreateMailBox/Title' => 'Mailbox creation',

	'itop-oauth-client:UsedForSMTP' => 'This OAuth client is used for SMTP',
	'itop-oauth-client:TestSMTP' => 'Email send test',
	'itop-oauth-client:MissingOAuthClient' => 'Missing Oauth client for user name %1$s',
	'itop-oauth-client:Message:MissingToken' => 'Generate access token before using this OAuth client',
	'itop-oauth-client:Message:TokenCreated' => 'Access token created',
	'itop-oauth-client:Message:TokenRecreated' => 'Access token regenerated',

	'OAuthClient:Name/UseForSMTPMustBeUnique' => 'The combination Login (%1$s) and Use for SMTP (%2$s) has already be used for OAuth Client',

	'OAuthClient:baseinfo' => 'Base Information',
	'OAuthClient:scope' => 'Scope',
]);

//
// Class: OAuthClient
//

Dict::Add('EN US', 'English', 'English', [
	'Class:OAuthClient' => 'Oauth Client',
	'Class:OAuthClient/Attribute:provider' => 'Provider',
	'Class:OAuthClient/Attribute:provider+' => '',
	'Class:OAuthClient/Attribute:name' => 'Login',
	'Class:OAuthClient/Attribute:name+' => '',
	'Class:OAuthClient/Attribute:status' => 'Status',
	'Class:OAuthClient/Attribute:status+' => '',
	'Class:OAuthClient/Attribute:status/Value:active' => 'Access token generated',
	'Class:OAuthClient/Attribute:status/Value:inactive' => 'No Access token',
	'Class:OAuthClient/Attribute:description' => 'Description',
	'Class:OAuthClient/Attribute:description+' => '',
	'Class:OAuthClient/Attribute:client_id' => 'Client id',
	'Class:OAuthClient/Attribute:client_id+' => '',
	'Class:OAuthClient/Attribute:client_secret' => 'Client secret',
	'Class:OAuthClient/Attribute:client_secret+' => '',
	'Class:OAuthClient/Attribute:refresh_token' => 'Refresh token',
	'Class:OAuthClient/Attribute:refresh_token+' => '',
	'Class:OAuthClient/Attribute:refresh_token_expiration' => 'Refresh token expiration',
	'Class:OAuthClient/Attribute:refresh_token_expiration+' => '',
	'Class:OAuthClient/Attribute:token' => 'Access token',
	'Class:OAuthClient/Attribute:token+' => '',
	'Class:OAuthClient/Attribute:token_expiration' => 'Access token expiration',
	'Class:OAuthClient/Attribute:token_expiration+' => '',
	'Class:OAuthClient/Attribute:redirect_url' => 'Redirect url',
	'Class:OAuthClient/Attribute:redirect_url+' => '',
	'Class:OAuthClient/Attribute:mailbox_list' => 'Mailbox list',
	'Class:OAuthClient/Attribute:mailbox_list+' => '',
]);

//
// Class: OAuthClientAzure
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OAuthClientAzure' => 'OAuth client for Microsoft Azure',
	'Class:OAuthClientAzure/Name' => '%1$s (%2$s)',
	'Class:OAuthClientAzure/Attribute:scope' => 'Scope',
	'Class:OAuthClientAzure/Attribute:scope+' => '',
	'Class:OAuthClientAzure/Attribute:scope/Value:SMTP' => 'SMTP',
	'Class:OAuthClientAzure/Attribute:scope/Value:SMTP+' => '',
	'Class:OAuthClientAzure/Attribute:scope/Value:IMAP' => 'IMAP',
	'Class:OAuthClientAzure/Attribute:scope/Value:IMAP+' => '',
	'Class:OAuthClientAzure/Attribute:advanced_scope' => 'Advanced scope',
	'Class:OAuthClientAzure/Attribute:advanced_scope+' => '',
	'Class:OAuthClientAzure/Attribute:used_scope' => 'Used scope',
	'Class:OAuthClientAzure/Attribute:used_scope+' => '',
	'Class:OAuthClientAzure/Attribute:used_scope/Value:simple' => 'Simple',
	'Class:OAuthClientAzure/Attribute:used_scope/Value:simple+' => '',
	'Class:OAuthClientAzure/Attribute:used_scope/Value:advanced' => 'Advanced',
	'Class:OAuthClientAzure/Attribute:used_scope/Value:advanced+' => '',
	'Class:OAuthClientAzure/Attribute:used_for_smtp' => 'Used for SMTP',
	'Class:OAuthClientAzure/Attribute:used_for_smtp+' => '',
	'Class:OAuthClientAzure/Attribute:used_for_smtp/Value:yes' => 'Yes',
	'Class:OAuthClientAzure/Attribute:used_for_smtp/Value:no' => 'No',
));

//
// Class: OAuthClientGoogle
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OAuthClientGoogle' => 'OAuth client for Google',
	'Class:OAuthClientGoogle/Name' => '%1$s (%2$s)',
	'Class:OAuthClientGoogle/Attribute:scope' => 'Scope',
	'Class:OAuthClientGoogle/Attribute:scope+' => '',
	'Class:OAuthClientGoogle/Attribute:scope/Value:SMTP' => 'SMTP',
	'Class:OAuthClientGoogle/Attribute:scope/Value:SMTP+' => '',
	'Class:OAuthClientGoogle/Attribute:scope/Value:IMAP' => 'IMAP',
	'Class:OAuthClientGoogle/Attribute:scope/Value:IMAP+' => '',
	'Class:OAuthClientGoogle/Attribute:advanced_scope' => 'Advanced scope',
	'Class:OAuthClientGoogle/Attribute:advanced_scope+' => '',
	'Class:OAuthClientGoogle/Attribute:used_scope' => 'Used scope',
	'Class:OAuthClientGoogle/Attribute:used_scope+' => '',
	'Class:OAuthClientGoogle/Attribute:used_scope/Value:simple' => 'Simple',
	'Class:OAuthClientGoogle/Attribute:used_scope/Value:simple+' => '',
	'Class:OAuthClientGoogle/Attribute:used_scope/Value:advanced' => 'Advanced',
	'Class:OAuthClientGoogle/Attribute:used_scope/Value:advanced+' => '',
	'Class:OAuthClientGoogle/Attribute:used_for_smtp' => 'Used for SMTP',
	'Class:OAuthClientGoogle/Attribute:used_for_smtp+' => '',
	'Class:OAuthClientGoogle/Attribute:used_for_smtp/Value:yes' => 'Yes',
	'Class:OAuthClientGoogle/Attribute:used_for_smtp/Value:no' => 'No',
));
