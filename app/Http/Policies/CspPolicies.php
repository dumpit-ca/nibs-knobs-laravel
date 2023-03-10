<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy;
use Spatie\Csp\Keyword;

class CspPolicies extends Policy
{
    public function configure()
    {
        $this
        ->addDirective(Directive::BASE, Keyword::SELF)
        ->addDirective(Directive::CONNECT, Keyword::SELF)
        ->addDirective(Directive::DEFAULT, Keyword::SELF)
        ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
        ->addDirective(Directive::IMG, [Keyword::SELF, 'data:'])
        ->addDirective(Directive::MEDIA, Keyword::SELF)
        ->addDirective(Directive::OBJECT, Keyword::NONE)
        ->addDirective(Directive::SCRIPT, Keyword::SELF)
        ->addDirective(Directive::STYLE, Keyword::UNSAFE_INLINE)
        ->addDirective(Directive::FONT, "self data:")
        // ->addDirective(Directive::STYLE, Keyword::SELF)
        ->addNonceForDirective(Directive::SCRIPT)
        ->addNonceForDirective(Directive::SCRIPT_ELEM)
        ->addNonceForDirective(Directive::STYLE_ELEM);


        //add a directive for frame ancestors
        $this
        ->addDirective(Directive::FRAME_ANCESTORS, Keyword::SELF)
        ->addDirective(Directive::SCRIPT_ELEM, Keyword::SELF)
		->addDirective(Directive::STYLE_ELEM, Keyword::SELF)
        //Add XSS protection
        // ->addDirective(Directive::BASE_URI, Keyword::SELF)
        ->addDirective(Directive::FORM_ACTION, Keyword::SELF);





        // $this->addDirective(Directive::STYLE, 'unpkg.com');
        // $this->addDirective(Directive::DEFAULT, 'unpkg.com');
        // $this->addDirective(Directive::SCRIPT, 'unpkg.com');
        // $this->addDirective(Directive::IMG, 'www.w3.org');
        // $this->addDirective(Directive::STYLE, 'www.w3.org');


        // $this->reportOnly();
    }
}
