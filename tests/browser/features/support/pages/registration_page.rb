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

    if env.lookup(:mediawiki_captcha_bypass_password, default: nil)
      bypass_script = <<-END
        var $bypass = $( '<input>' ).attr( {
          type: 'hidden',
          name: 'captchabypass',
          value: '#{env[:mediawiki_captcha_bypass_password]}'
        } );
        $( '#userlogin2' ).append( $bypass );
      END
      execute_script(bypass_script)
    end
    register_element.click
  end
end
