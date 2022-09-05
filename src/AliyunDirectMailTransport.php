<?php

namespace Chareice\LaravelAliyunDirectMail;

use AlibabaCloud\SDK\Dm\V20151123\Dm;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mime\MessageConverter;

class AliyunDirectMailTransport extends AbstractTransport
{
    /**
     * @var Dm
     */
    private $client;

    public function setClient(Dm $client): void
    {
        $this->client = $client;
    }

    protected function doSend(SentMessage $message): void
    {
        $email = MessageConverter::toEmail($message->getOriginalMessage());

        $singleSendMailRequest = new SingleSendMailRequest([
            'accountName' => config('mail.from.address'),
            'fromAlias' => config('mail.from.name'),
            'addressType' => 0,
            'replyToAddress' => 'true',
            'toAddress' => $email->getTo()[0]->getAddress(),
            'subject' => $email->getSubject(),
            'htmlBody' => $email->getHtmlBody(),
        ]);

        $runtime = new RuntimeOptions([]);
        $this->client->singleSendMailWithOptions($singleSendMailRequest, $runtime);
    }

    public function __toString(): string
    {
        return 'directmail';
    }
}
