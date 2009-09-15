<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses = array("User", "Customer", "Author");
	var $helpers = array('Html', 'Form');
	
	function beforeFilter() {
        $this->Auth->allow('login','register');
    }
	
	function admin_show_authors() {
	   $this->admin_index( array("User.is_author" => 1) );
    }
    
	function admin_show_customers() {
	   $this->admin_index( array("User.is_customer" => 1) );
    }
    
    
    /**
    * Allows a user to sign up for a new account
    */
    function register() {
        // If the user submitted the form…
        if (!empty($this->data)){
            // Turn the supplied password into the correct Hash.
            // and move into the ‘password’ field so it will get saved.
            $this->data['User']['password'] = $this->Auth->password($this->data['User']['password']);
        
            // Always Sanitize any data from users!
            $this->User->data = Sanitize::clean($this->data);
            if ($this->User->save())
            {
                    // Use a private method to send a confirmation
                    // email to the new user (code not shown)
                    $this->__sendConfirmationEmail();
                    // Success! Redirect to a thanks page.
                    $this->redirect('users/thanks');
            }
        
            // The plain text password supplied has been hashed into the ‘password’ field so
            // should now be nulled so it doesn’t get render in the HTML if the save() fails
            $this->data['User']['password'] = null;
        }
    }

	
}
?>