class RegistrationPage
	include PageObject

	text_field(:username, id: 'wpName2')
	text_field(:password, id: 'wpPassword2')
	text_field(:password_confirmation, id: 'wpRetype')
	button(:register, id: 'wpCreateaccount')
	a(:return_to, css: '#mw-returnto a')

	def register_user(username)
		self.username = username
		password = Random.new.rand.to_s
		self.password = password
		self.password_confirmation = password

		if ENV.key?('MEDIAWIKI_CAPTCHA_BYPASS_PASSWORD')
			bypass_script = <<-END
				var $bypass = $( '<input>' ).attr( {
					type: 'hidden',
					name: 'captchabypass',
					value: '#{ENV['MEDIAWIKI_CAPTCHA_BYPASS_PASSWORD']}'
				} );
				$( '#userlogin2' ).append( $bypass );
			END
			execute_script(bypass_script)
		end
		register_element.click
	end
end
