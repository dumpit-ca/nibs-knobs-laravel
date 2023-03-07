<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;
use Spatie\Csp\Keyword;

class CspPolicies extends Basic
{
    public function configure()
    {
        parent::configure();

        //add a directive for frame ancestors
        $this->addDirective(Directive::FRAME_ANCESTORS, Keyword::SELF);

        // $this->addDirective(Directive::STYLE, 'unpkg.com');
        // $this->addDirective(Directive::DEFAULT, 'unpkg.com');
        // $this->addDirective(Directive::SCRIPT, 'unpkg.com');
        $this->addDirective(Directive::IMG, 'www.w3.org');
        $this->addDirective(Directive::STYLE, 'www.w3.org');


    }
}
