<?php
namespace App;
use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;
class ContentPolicy extends Basic
{
public function configure()
{
    parent::configure();

    // example of denying all framing
}

}
