<?php

namespace unit\Intellectsoft\HttpApi\Validation;

use Intellectsoft\HttpApi\Validation\FixedJson;
use PhpSpec\ObjectBehavior;

class JsonSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith([]);
    }

    function it_should_be_subtype_of_fixed_json()
    {
        $this->shouldBeAnInstanceOf(FixedJson::class);
    }

    function it_allows_extra_fields()
    {
        $this->allowExtraFields->shouldBe(true);
    }
}
