<?php

namespace ProfilingBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InteretCategorieControllerTest extends WebTestCase
{
    public function testAjouterinteretcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterInteretCategorie');
    }

    public function testSupprimerinteretcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimerInteretCategorie');
    }

    public function testAfficherinteretcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherInteretCategorie');
    }

    public function testModifierinteretcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modifierInteretCategorie');
    }

}
