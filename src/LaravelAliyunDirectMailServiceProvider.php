<?php

namespace Chareice\LaravelAliyunDirectMail;

use AlibabaCloud\SDK\Dm\V20151123\Dm;
use Darabonba\OpenApi\Models\Config;
use Illuminate\Support\Facades\Mail;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAliyunDirectMailServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-aliyun-direct-mail');
    }

    public function bootingPackage()
    {
        Mail::extend('directmail', function () {
            $transport = new AliyunDirectMailTransport();
            $transport->setClient($this->createClient());

            return $transport;
        });
    }

    protected function createClient()
    {
        $config = new Config([
            // 您的 AccessKey ID
            'accessKeyId' => env('ALI_DM_ACCESS_KEY'),
            // 您的 AccessKey Secret
            'accessKeySecret' => env('ALI_DM_ACCESS_SECRET'),
        ]);
        // 访问的域名
        $config->endpoint = 'dm.aliyuncs.com';

        return new Dm($config);
    }
}
