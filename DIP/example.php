<?php

    interface MessageSender {
        public function send(string $message): void;
    }

    class EmailSender implements MessageSender {
        public function send(string $message): void {
            echo "Sending email: $message";
        }
    }

    class SmsSender implements MessageSender {
        public function send(string $message): void {
            echo "Sending SMS: $message";
        }
    }

    class Notification {
        private $messageSender;

        public function __construct(MessageSender $messageSender) {
            $this->messageSender = $messageSender;
        }

        public function notify(string $message): void {
            $this->messageSender->send($message);
        }
    }

    $emailSender = new EmailSender();
    $notification = new Notification($emailSender);
    $notification->notify("Hello via Email!");
    $smsSender = new SmsSender();
    $notification = new Notification($smsSender);
    $notification->notify("Hello via SMS!");
