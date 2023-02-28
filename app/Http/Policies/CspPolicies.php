<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class CspPolicies extends Basic
{
    public function configure()
    {
        parent::configure();

        $this->addDirective(Directive::STYLE, 'unpkg.com');
        $this->addDirective(Directive::DEFAULT, 'unpkg.com');
        $this->addDirective(Directive::SCRIPT, 'unpkg.com');
        $this->addDirective(Directive::IMG, 'www.w3.org');

    }
}
