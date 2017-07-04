<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 04.07.2017
 * Time: 11:07
 */

namespace HikingBundle\DataFixtures\ORM;

use HikingBundle\Entity\Track;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultArticleData implements FixtureInterface
{


    public function load(ObjectManager $manager)
    {

        $track = new Track();

        $track->setDate(new \DateTime());
        $track->setDays(5);
        $track->setDifficult(1);
        $track->setTrack("Синекаменка - Кок Асан - Чигенитра - Демерджи - Алушта");

        $manager->persist($track);

        $track = new Track();

        $track->setDate(new \DateTime());
        $track->setDays(7);
        $track->setDifficult(2);
        $track->setTrack("Быстрица - Чёрна Клыва - г. бол.Братковская - пол.Рипта Апшинецкая - 
                            оз.Апшинец - г.Стог - г.Близница - с.Квасы"
                         );

        $manager->persist($track);


        $track = new Track();

        $track->setDate(new \DateTime());
        $track->setDays(5);
        $track->setDifficult(1);
        $track->setTrack("Симферополь - т/б Ангарский перевал - т/с Поляна МАН - 
                            т/с Поляна МАН - Стол Гора - т/с Восточный Суат - т/с Ай 
                            Алексий - т/с Чигенитра - пос. Рыбачье - Симферополь"
                         );

        $manager->persist($track);

        $track = new Track();

        $track->setDate(new \DateTime());
        $track->setDays(4);
        $track->setDifficult(0);
        $track->setTrack("Ялта - ур Таракташ - Ай Петри - т/с Беш Текне - ур.Чёртова Лестница - Форос - Балаклава");

        $manager->persist($track);


        
        $manager->flush();


    }
}