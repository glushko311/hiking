<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 04.07.2017
 * Time: 11:07
 */

namespace HikingBundle\DataFixtures\ORM;

use HikingBundle\Entity\Member;
use HikingBundle\Entity\MemberTrack;
use HikingBundle\Entity\Track;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultArticleData implements FixtureInterface
{


    public function load(ObjectManager $manager)
    {

//        $track = new Track();
//
//        $track->setDate(new \DateTime());
//        $track->setDays(5);
//        $track->setDifficult(1);
//        $track->setTrack("Синекаменка - Кок Асан - Чигенитра - Демерджи - Алушта");
//        $track->setStatus(0);
//
//        $manager->persist($track);
//
//        $track = new Track();
//
//        $track->setDate(new \DateTime());
//        $track->setDays(7);
//        $track->setDifficult(2);
//        $track->setTrack("Быстрица - Чёрна Клыва - г. бол.Братковская - пол.Рипта Апшинецкая -
//                            оз.Апшинец - г.Стог - г.Близница - с.Квасы"
//                         );
//        $track->setStatus(0);
//
//        $manager->persist($track);
//
//
//        $track = new Track();
//
//        $track->setDate(new \DateTime());
//        $track->setDays(5);
//        $track->setDifficult(1);
//        $track->setTrack("Симферополь - т/б Ангарский перевал - т/с Поляна МАН -
//                            т/с Поляна МАН - Стол Гора - т/с Восточный Суат - т/с Ай
//                            Алексий - т/с Чигенитра - пос. Рыбачье - Симферополь"
//                         );
//        $track->setStatus(0);
//
//        $manager->persist($track);
//
//        $track = new Track();
//
//        $track->setDate(new \DateTime());
//        $track->setDays(4);
//        $track->setDifficult(0);
//        $track->setTrack("Ялта - ур Таракташ - Ай Петри - т/с Беш Текне - ур.Чёртова Лестница -
//                        Форос - Балаклава");
//        $track->setStatus(0);
//
//        $manager->persist($track);
//
//        $member=new Member();
//
//        $member->setName("Александр");
//        $member->setLastName('Константинов');
//        $member->setAbout('Прекрасный друг и товарищ.Перфекционист во всём особенно в графике питания.
//        Весьма трепетно относится к наличию воды без неё может впадать в не контроллироемое буйство
//        и не реагировать на указания инструктора.Любит всё фотографировать. Кличка - братец Бизон');
//        $manager->persist($member);
//
//        $member=new Member();
//
//        $member->setName("Валентина");
//        $member->setLastName('Зуева');
//        $member->setAbout('Порядок всегда и во всём вот её девиз по жизни что весьма похвально.
//        Очень эмоциональна и общительна склонна к импульсивным плохо обдуманным действиям.
//        Любит побеждать и преодолевать трудности. Не переносит на дух Марию Белую');
//        $manager->persist($member);
//
//        $member=new Member();
//        $member->setName("Елена");
//        $member->setLastName('Глушко');
//        $member->setAbout('Импульсивна эмоциональна бурно реагирует когда поход отклоняется от заложенного
//        маршрута. Осторожно фраза - на осталось тут всего ничего 300 метров и стоянка может вызвать
//        неконтроллируемую ярость. Любит природу и фотографии цветочков в макро режиме.
//        Кличка братец Опоссум');
//        $manager->persist($member);
//
//        $member=new Member();
//        $member->setName("Михаил");
//        $member->setLastName('Страшок');
//        $member->setAbout('Спокойный и уравновешенный иногда даже слишком. Не общительный. Проблем от него
//        нет, но и толку в общем то тоже идеальный участник похода');
//        $manager->persist($member);
//
//        $member=new Member();
//        $member->setName("Анна");
//        $member->setLastName('Каган');
//        $member->setAbout('Спокойная, уравновешенная бывшая девушка Михаила. Не общительная.
//        Они с Михаилом очень похожи в походе их совершенно не заметно. Любит котиков.');
//        $manager->persist($member);
//
//        $member=new Member();
//        $member->setName("Мария");
//        $member->setLastName('Белая');
//        $member->setAbout('Трудности похода переносит спокойно и философски, в экстремальных
//        ситуациях не паникует, выполняет инструкции руководителя.В походы ходит в основном за компанию.
//        Любит в первую очередь общение. Не переносит Зуеву на дух');
//        $manager->persist($member);

//        $member=new Member();
//        $member->setName("Вадим");
//        $member->setLastName('Глушко');
//        $member->setAbout('Красив, умен, скромен и вообще руководитель похода');
//        $manager->persist($member);


        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(7);
        $memberTrack->setTrackId(7);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(3);
        $memberTrack->setTrackId(7);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(3);
        $memberTrack->setTrackId(8);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(7);
        $memberTrack->setTrackId(8);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(4);
        $memberTrack->setTrackId(8);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(5);
        $memberTrack->setTrackId(8);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(1);
        $memberTrack->setTrackId(9);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(2);
        $memberTrack->setTrackId(9);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(6);
        $memberTrack->setTrackId(9);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(7);
        $memberTrack->setTrackId(9);
        $manager->persist($memberTrack);

        $memberTrack = new MemberTrack();
        $memberTrack->setMemberId(3);
        $memberTrack->setTrackId(9);
        $manager->persist($memberTrack);
        
        $manager->flush();


    }
}