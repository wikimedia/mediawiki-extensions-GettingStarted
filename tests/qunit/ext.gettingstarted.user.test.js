( function ( QUnit, mw, $ ) {

	'use strict';

	var expectedTokenCookieName = mw.config.get( 'wgCookiePrefix' ) + '-gettingStartedUserId';

	QUnit.module( 'ext.gettingstarted.user.getToken', {
		setup: function () {
			this.stub( mw.user, 'generateRandomSessionId' );
			mw.user.generateRandomSessionId.returns( '1234' );

			this.stub( $, 'cookie' );
			$.cookie.returns( null );
		}
	} );

	QUnit.test( 'should try to get the "token" cookie', 1, function ( assert ) {
		mw.gettingStarted.user.getToken();

		assert.strictEqual( $.cookie.lastCall.args[ 0 ], expectedTokenCookieName );
	} );

	QUnit.test( 'should use the token from the "token" cookie when it is set', 1, function ( assert ) {
		$.cookie.returns( '5678' );

		assert.strictEqual( mw.gettingStarted.user.getToken(), '5678' );
	} );

	QUnit.test( 'should generate the token when the "token" cookie isn\'t set', 1, function ( assert ) {
		assert.strictEqual( mw.gettingStarted.user.getToken(), '1234' );
	} );

	QUnit.test( 'should store the generated token when the cookie isn\'t set', 1, function ( assert ) {
		mw.gettingStarted.user.getToken();

		assert.deepEqual( $.cookie.lastCall.args, [
			expectedTokenCookieName,
			'1234',
			{
				expires: 90,
				path: '/'
			}
		] );
	} );

	QUnit.module( 'ext.gettingstarted.user.getBucket', {
		setup: function () {
			this.stub( mw.gettingStarted.user, 'getToken' );
		}
	} );

	$.each( [
		{
			characters: '0123456789ABCDEFGHIJ',
			expectedBucket: 'pre-edit'
		},
		{
			characters: 'KLMNOPQRSTUVWXYZabcd',
			expectedBucket: 'post-edit'
		},
		{
			characters: 'efghijklmnopqrstuvwxyz',
			expectedBucket: 'control'
		}
	], function ( i, data ) {
		QUnit.test( data.characters, data.characters.length, function ( assert ) {
			var j;

			for ( j = 0; j < data.characters.length; ++j ) {
				mw.gettingStarted.user.getToken.returns( data.characters[ j ] );

				assert.strictEqual( mw.gettingStarted.user.getBucket(), data.expectedBucket);
			}
		} );
	} );

} ( QUnit, mediaWiki, jQuery ) );
