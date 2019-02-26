<?php

namespace ProfilingBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testAttribuerbadge()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/attribuerBadge');
    }

}
