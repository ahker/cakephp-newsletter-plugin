Newsletter Plugin for cake 2.0

----------------------------------
REQUIREMENTS
----------------------------------
Extend-Associations: I've used this, and it works http://iandeth.dyndns.org/mt/ian/archives/20120110-cakephp-extendassociations-behavior/ExtendAssociations2Behavior.txt
save it under Models/Behavior/ExtendAssociationsBehavior.php

JQuery for ajax calls in admin_send.ctp

You MUST have a sendEmail() function in your Appcontroller, like follow

    public function sendEmail($subject, $message, $address){
        App::uses('CakeEmail', 'Network/Email');
        $email = new CakeEmail('default');
        $email->from(array('your@email.com' => 'My Site'));
        $email->to($address);
        $email->subject($subject);
        $email->send($message);
    }


----------------------------------
INSTALLATION & CONFIGURATION
----------------------------------
drop the plugin files in the folder app/Plugins/Newsletter/

create the necessary DB tables using
the file in app/plugins/newsletter/config/sql/schema.sql

Add this variable to your app/Config/bootstrap.php file

Enjoy!

----------------------------------
TODO
----------------------------------
Explain Configuration Fields
$subject = Configure::read('Newsletter.unsubscribe_subject');
$subject = Configure::read('Newsletter.subscribe_subject');
$from = Configure::read('Newsletter.from'); #Required
$from_email = Configure::read('Newsletter.from_email'); #Required

$subject = Configure::read('Newsletter.sendX'); #Number of emails to sent at each admin_send call.
$subject = Configure::read('Newsletter.sendInterval'); #the interval time before send next batch
$subject = Configure::read('Newsletter.mail_opt_out_message');
$subject = Configure::read('Newsletter.emptyImagePath');
