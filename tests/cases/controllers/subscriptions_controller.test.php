<?php
App::import('Controller', 'Newsletter.Subscriptions');

/**
* Controller mock class.
**/ 
class TestSubscriptionsController extends SubscriptionsController {
    var $name = 'Subscriptions';
    var $autoRender = false;
 
    function redirect($url, $status = null, $exit = true) {
        $this->redirectUrl = $url;
    }
 
    function render($action = null, $layout = null, $file = null) {
        $this->renderedAction = $action;
    }
    
    function paginate($object = null, $scope = array(), $whitelist = array()) {
      return $this->Subscription->find('all');
    }
 
    function _stop($status = 0) {
        $this->stopped = $status;
    }
}
 
class SubscriptionsControllerTestCase extends CakeTestCase {

    var $fixtures = array('plugin.newsletter.subscription');
 
    function startTest() {
      $this->Subscriptions = new TestSubscriptionsController();
      $this->Subscriptions->constructClasses();
      $this->Subscriptions->Component->initialize($this->Subscriptions);
    }
    
    function testAdminIndex() {
      $this->Subscriptions->beforeFilter();
      $this->Subscriptions->Component->startup($this->Subscriptions);
      $this->Subscriptions->admin_index();
      
      $this->assertNotNull($this->Subscriptions->viewVars['subscriptions']);
    }
    
    function testAdminAdd() {
      $this->Subscriptions->data = array(
        'Subscription' => array(
            'name' => 'Fake Subscription',
            'email' => 'fake@subscription.com',
        ),
      );
      $this->Subscriptions->beforeFilter();
      $this->Subscriptions->Component->startup($this->Subscriptions);
      $this->Subscriptions->admin_add();
    
      //assert the record was changed
      $result = $this->Subscriptions->Subscription->read(null, $this->Subscriptions->Subscription->id);
      $this->assertEqual($result['Subscription']['name'], 'Fake Subscription');
      $this->assertEqual($result['Subscription']['email'], 'fake@subscription.com');
    
      //assert that some sort of session flash was set.
      $this->assertTrue($this->Subscriptions->Session->check('Message.flash.message'));
      $this->assertEqual($this->Subscriptions->redirectUrl, array('action' => 'edit', 'id' => $this->Subscriptions->Subscription->id));
    }
    
    function testAdminEdit() {
      $this->Subscriptions->data = array(
        'Subscription' => array(
            'id' => 1,
            'name' => 'Fake Subscription',
            'email' => 'fake@subscription.com',
        ),
      );
      $this->Subscriptions->beforeFilter();
      $this->Subscriptions->Component->startup($this->Subscriptions);
      $this->Subscriptions->admin_edit();
    
      //assert the record was changed
      $result = $this->Subscriptions->Subscription->read(null, 1);
      $this->assertEqual($result['Subscription']['name'], 'Fake Subscription');
      $this->assertEqual($result['Subscription']['email'], 'fake@subscription.com');
    
      //assert that some sort of session flash was set.
      $this->assertTrue($this->Subscriptions->Session->check('Message.flash.message'));
      $this->assertEqual($this->Subscriptions->redirectUrl, array('action' => 'index'));
      
      //test for edit without data
      $this->Subscriptions->beforeFilter();
      $this->Subscriptions->Component->startup($this->Subscriptions);
      $this->Subscriptions->admin_edit(1);
      
      $this->assertNotNull($this->Subscriptions->data);
    }
    
    function testAdminDelete() {
      $this->Subscriptions->beforeFilter();
      $this->Subscriptions->Component->startup($this->Subscriptions);
      $this->Subscriptions->admin_delete(1);
    
      //assert the record was changed
      $result = $this->Subscriptions->Subscription->read(null, 1);
      $this->assertFalse($result);
    
      //assert that some sort of session flash was set.
      $this->assertTrue($this->Subscriptions->Session->check('Message.flash.message'));
      $this->assertEqual($this->Subscriptions->redirectUrl, array('action' => 'index'));
    }
 
    function endTest() {
      $this->Subscriptions->Session->destroy();
      unset($this->Subscriptions);
      ClassRegistry::flush();
    }
}
?>
