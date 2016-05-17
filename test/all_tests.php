<?php  
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(__FILE__) . '/../vendor/autoload.php');

class AllTests extends TestSuite {
  function __construct() {
    parent::__construct();
    QuadernoBase::init(getenv('QUADERNO_SANDBOX_KEY'), getenv('QUADERNO_SANDBOX_URL'));
    echo 'Running all tests...';
    $this->addFile(dirname(__FILE__) . '/unit/general_test.php');
    $this->addFile(dirname(__FILE__) . '/unit/contact_test.php');
    $this->addFile(dirname(__FILE__) . '/unit/item_test.php');
    $this->addFile(dirname(__FILE__) . '/unit/invoice_test.php');
    $this->addFile(dirname(__FILE__) . '/unit/expense_test.php'); 
    $this->addFile(dirname(__FILE__) . '/unit/payment_test.php');
    $this->addFile(dirname(__FILE__) . '/unit/estimate_test.php');
  }
}
?>
