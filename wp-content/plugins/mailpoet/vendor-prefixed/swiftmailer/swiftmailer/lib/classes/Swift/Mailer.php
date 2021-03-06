<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Mailer
{
 private $transport;
 public function __construct(Swift_Transport $transport)
 {
 $this->transport = $transport;
 }
 public function createMessage($service = 'message')
 {
 return Swift_DependencyContainer::getInstance()->lookup('message.' . $service);
 }
 public function send(Swift_Mime_SimpleMessage $message, &$failedRecipients = null)
 {
 $failedRecipients = (array) $failedRecipients;
 // FIXME: to be removed in 7.0 (as transport must now start itself on send)
 if (!$this->transport->isStarted()) {
 $this->transport->start();
 }
 $sent = 0;
 try {
 $sent = $this->transport->send($message, $failedRecipients);
 } catch (Swift_RfcComplianceException $e) {
 foreach ($message->getTo() as $address => $name) {
 $failedRecipients[] = $address;
 }
 }
 return $sent;
 }
 public function registerPlugin(Swift_Events_EventListener $plugin)
 {
 $this->transport->registerPlugin($plugin);
 }
 public function getTransport()
 {
 return $this->transport;
 }
}
