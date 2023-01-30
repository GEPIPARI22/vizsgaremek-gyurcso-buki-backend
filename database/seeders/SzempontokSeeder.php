<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SzempontokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('szemponts')->insert([
            [
                //igazgatói
                'szempontsor_id' => 1,
                'terulet' => 'Képzettség - szakképzettség',
                'szempont' => 'Szakirányú végzettség - Pedagógiai végzettség - Szakirányú továbbképzés - Nyelvismeret',
                'magyarazat' => 'A tanított szakmának, tantárgynak megfelelő szakirányú végzettség, vezetői munkakörhöz előírt végzettség Tanári, szakokt "Megállapítás: 6: az 5 túl további szakirányú diploma, szakvizsga, továbbképzések (akkreditát vagy vállalati környezetben töltött vagy egyéb jogszabályban nevesített),  szakképzésben hasznosítható nyelvismeret (az intézmény számára hasznos további kompetenciák);  5: szakirányú + pedagógiai végzettség (diploma, szakvizsga);  4: jogszabályban előírt szakirányú végzettség, pedagógiai végzettség nélkül;  3: szakirányú szakmai végzettség + felsőfokú végzettség;  2: középfokú szakirányú végzettség (érettségi) + mestervizsga;  1: középfokú szakirányú végzettség"	atói végzettség Szakmai, pedagógiai, vezetői továbbképzések Igazolt nyelvismeret',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'oklevelek, bizonyítványok, tanúsítványok',
                'ertek' => 6,
                'sulyszorzo' => 3,
                'sulyozott' => 18
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Szakmai tapasztalat',
                'szempont' => 'Pedagógusként eltöltötött idő, azon belül vezetői tapasztalat Releváns szakirányú szakmai és vezetői munkerő-piaci tapasztalat  Nemzetközi szakirányú tapasztalat',
                'magyarazat' => 'Szakmai gyakorlati (oktatói), azon belül vezetői tapasztalat Az oktatói pályára szakirányú munkaerőpiaci tapasztalattal érkező oktatók, vezetők szakirányú gyakorlati ideje. Munkaerőpiacon, oktatásirányítói területen szerzett vezetői tapasztalat. A fenti gyakorlati tapasztalat külföldön',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'szakmai önéletrajz (KIRA adatok)',
                'ertek' => 6,
                'sulyszorzo' => 4,
                'sulyozott' => 24
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Munkaerőpiaci érték',
                'szempont' => 'Szervezeten belüli hatása az intézményi eredményességre, vezetői szerepe Stratégiai szakterület, vezetői szerep',
                'magyarazat' => 'Az intézményen belül az intézmény eredményességére gyakorolt közvetlen hatása Keresett, magas munkaerőpiaci értékű szakma képviselője. Szakmai végzettsége kapcsolódik az intézmény szakmai profiljához.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'az intézményi jövőkép és stratégia alapján meghatározott munkaköri értékek',
                'ertek' => 6,
                'sulyszorzo' => 8,
                'sulyozott' => 48
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Szakmai felkészültség',
                'szempont' => 'Vezetői tudása biztos, megalapozott, korszerű. Szakmai-pedagógiai céljai elérése érdekében képzi önmagát.A korszerű ismeretek beépítését segíti és támogatja a tanulás-tanítás folyamatába.Szakmai céljaihoz illeszkedve tudatosan tervezi szakmai munkáját, oktatói és vezetői karrierjét.',
                'magyarazat' => 'Biztos szakmai tudás, önképzés jellemzi, képes és kész is megújulni, tudása korszerű és naprakész. Szakmai és vezetői ismereteit fejleszti. Vezetőként határozottan képviseli az intézmény pedagógiai céljait, értékeit, a kollégáknak irányt mutat és támogatást ad.Figyelemmel kíséri és információt biztosít a munkatársaknak, támogatja a szakmai területnek megfelelő változó tartalmak és a duális partneri elvárások beépítését a tanulási-tanítási folyamatba.Szakmai munkáját reálisan értékeli, tisztában van értékeivel, nyitott annak fejlesztésére. Biztos szakmai tudás jellemzi a korszerű pedagógia és a helyzetfüggő vezetés területén. Szakmai és vezetői tudását jól alkalmazza a gyakorlatban.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'M4É1É2',
                'adatforras' => 'tervezési dokumentumok, munkatervek és beszámolók,  továbbképzési program, oktatói vélemények, munkaerőpiaci, duális partneri visszajelzések tervezési dokumentumok, oktatói vélemények, munkaerőpiaci, duális partneri visszajelzésektervezési dokumentumok, oktatói vélemények, duális partneri visszajelzések',
                'ertek' => 6,
                'sulyszorzo' => 10,
                'sulyozott' => 60
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Pedagógiai folyamatok irányítása',
                'szempont' => 'Irányítja és részt vállal a célok meghatározásában (európai, országos, ágazati, regionális célokkal összhangban meghatározott intézményi szakképzési célrendszer). Részt vesz a minőségirányítási rendszer, az önértékelés és az oktatói értékelés rendszerének kialakításában, működtetésében.Biztosítja, támogatja a korszerű szakmai tartalmak, a módszertan és a digitális oktatás alkalmazását. Irányítja az oktatók pedagógiai tervező munkáját.Vezetői munkájával ösztönzi és támogatja a szociális tanulásban rejlő lehetőségeket, az oktatók közösségépítő, személyiségfejlesztő tevékenységét.Irányítja a szakmai és közismereti oktatók együttműködését,  értékelési rendszerük összehangolását. Elősegíti az együttműködést a szakmai oktatók és a  duális képzőhely között, a szakmai tartalom, a korszerű módszertan és az összehangolt  értékelési rendszer területén.Irányítja a korszerű tanulói mérések alkalmazását. Méri és értékeli a tanulási folyamat eredményességét. A korai jelzőrendszer eredményeit felhasználja a szakmai- pedagógiai munka fejlesztéséhez.A külső, belső mérési eredmények és a tanulói eredmények (vizsgák, értékelések, partneri visszajelzések) alapján fejleszti a pedagógiai folyamatokat.',
                'magyarazat' => 'Vezetői munkájában érvényesül a folyamatos minőségfejlesztés logikája (PDCA logika). Ismeri, és a tervezési dokumentumok tartalmazzák ezeket a célokat,  melyek alapján a fejlesztéseket megtervezi. A gyakorlatban a megvalósítás során támogatja a célok elérését, a célok és a kialakított intézményi gyakorlat egymással koherensek. Vezetőként elkötelezett a korszerű pedagógiai gyakorlat megvalósításában. Támogatja a korszerű módszerek alkalmazását, mérési eredményekre támaszkodva fejleszti az intézmény módszertani kultúráját.Vezetői munkájában segíti a közösségépítést, a tanulók együttműködését. Elvárja az oktatók személyiségfejlesztő, egyénre szabott pedagógiai munkáját.A közismereti és szakmai képzés együttműködését biztosítja a megfelelő szervezeti keretek működtetésével, szakmai támogatást nyújt a duális parrtnerekkel való képzési együttműködéshez.A tanulói mérési rendszer kialakítását és alkalmazását irányítja. Szisztematikusan méri és értékeli a célok teljesülését, és az azokban meghatározott feladatok eredményességét. Felhasználja a külső mérés eredményeit és az intézményi mérési feladatokat támogatja.A mérési eredmények alapján rendszeresen felülvizsgálja a célokat, a működési folyamatokat, és ez alapján pedagógiai fejlesztéseket valósít meg.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'T1T4M1M2M3M4M5M6É1É2É4',
                'adatforras' => 'tervezési dokumentumok, munkatervek és beszámolókmunkatervek  és beszámolók, oktatói véleményektanulói vélemények, oktatói véleményekmunkatervek, beszámolók, oktatói és duális partneri véleményekmunkatervek és beszámolók, továbbképzési program, beiskolázási terv, mérési dokumentumokmunkatervek és beszámolók, intézményi alapdokumentumok, oktatói,  tanulói és duális partneri vélemények',
                'ertek' => 6,
                'sulyszorzo' => 14,
                'sulyozott' => 84
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Változások kezelése',
                'szempont' => 'A jövőkép, a célok megfogalmazása és a feladatok tanévekre bontása során figyelembe veszi az intézmény külső és belső környezetét, a folyamatban lévő és várható munkaerő-piaci változásokat."Képes a változtatás folyamatát hatékonyan megtervezni, végrehajtani és értékelni, amelynek során felhasználja a minőségirányítási rendszer működtetésének eredményeit. Alkalmazza a tanuló szervezetté válás elvét és gyakorlatát.A vezető ösztönzi, engedi, és szívesen befogadja a tanítás-tanulás eredményesebbé tételére irányuló kezdeményezéseket, innovációkat, fejlesztéseket. Támogatja a belső tudásmegosztást."Folyamatosan nyomon követi és értékeli a célok megvalósulását, a mérési rendszer eredményeit, az elemzéseket bemutatja partnereinek. Rendszeresen meghatározza az intézmény erősségeit és gyengeségeit, fejlesztendő területeit, ehhez felhasználja a belső és külső intézményértékelés eredményeit.A mérési eredmények alapján terveit felülvizsgálja, korrigálja a célokat, fejleszti az intézmény pedagógiai, szakmai munkáját.',
                'magyarazat' => 'Kialakítja és működteti az - intézmény jövőbeni lehetőségeit, irányait befolyásoló, meghatározó - információk, adatok gyűjtésének és elemzésének, feldolgozásának rendszerét.Részt vesz a szakképzést érintő helyi igények elemzésének folyamatában. Folyamatosan informálja kollégáit és az intézmény partnereit a megjelenő változásokról, lehetőséget biztosít számukra az önálló információszerzésre (konferenciák, előadások, egyéb források), és reagál a feltárt igényekre.Az értékelések méréseken, konkrét elemzéseken alapulnak, amelybe bevonja munkatársait, partnereit. A mérés eredményeit felhasználja az intézmény szakmai munkájának értékelésére és a fejlesztések megalapozására.Az éves, féléves értékelések eredményei nyomonkövethetők a fejlesztési tervekben, a következő időszak terveiben, azok koherensen illeszkednek egymáshoz.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'T2T4M1É1F1F2',
                'adatforras' => 'munkatervek és beszámolók, intézményi alapdokumentumok, felettes vezetői és fenntartói interjúminőségirányítási dokumentumok, intézményi értékelések, értekezletek jegyzőkönyvei, munkatervek és beszámolók, továbbképzési program, beiskolázási tervminőségirányítási dokumentumok, intézményi értékelések, értekezletek jegyzőkönyvei, munkatervek és beszámolókminőségirányítási dokumentumok,  munkatervek és beszámolók, intézményi alapdokumentumok, felettes vezetői és fenntartói interjú',
                'ertek' => 6,
                'sulyszorzo' => 14,
                'sulyozott' => 84
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Vezetői kommunikáció',
                'szempont' => 'Alkalmazott kommunikációs csatornákInformáció szolgáltatás, tájékoztatásVezetői együttműködés, lojalitásAz intézmény képviselete a belső és a külső partnerek tekintetében',
                'magyarazat' => 'Átgondolt, szervezett kommunikációs rendszert működtet, tájékoztatást, értekezletet tart, elektronikus csatornákat használ.Oktatók, szülők, tanulók tájékoztatását tervezi és koordinálja, amely rendszeresen, szabályozottan működik. Részt vesz a  naprakész kommunikációs megjelenés (honlap, sajtó) biztosításában, egyéb tájékoztatási formák működtetésében.Átlátható, rendszerszintű vezetői feladatmegosztás működik. Hiteles és etikus magatartást tanúsít. (Kommunikációja, magatartása a pedagógus etika normáinak megfelel.)Vezetői munkájával kapcsolatban számít munkatársai véleményére, rendszeres és szervezett kapcsolatot tart az intézményi közösségekkel. Külső kapcsolatait az intézmény érdekében végzett nyitott, konstruktív kapcsolatrendszer jellemzi.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'T3M2M3M7F1F3',
                'adatforras' => 'felettes vezetői és fenntartói interjú, intézményi kommunikációs csatornák, értekezletek jergyzőkönyvei, digitális felületekoktatói,  tanulói és duális partneri vélemények, felettes vezetői és fenntartói interjú, intézményi kommunikációs csatornák, értekezletek jergyzőkönyvei, digitális felületekSZMSZ, felettes vezetői és fenntartói interjú, oktatói véleményekfelettes vezetői és fenntartói interjú, oktatói,  tanulói és duális partneri vélemények',
                'ertek' => 6,
                'sulyszorzo' => 10,
                'sulyozott' => 60
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Oktatói munka ellenőrzése, értékelése, fejlesztések támogatása',
                'szempont' => 'Átlátható ellenőrzési rendszert  működtet, azonosítja az erősségeket, a fejlesztendő területeket, támogatja a fejlesztéseket.Irányítja és delegálja az ellenőrzési, értékelési feladatokat.Támogatja az oktatói értékelésen  alapuló egyéni cselekvési terveket.',
                'magyarazat' => 'Differenciáló értékelési rendszert működtetnek az intézményben, az elvárások és az értékelések átláthatóak és koherensek. Az oktatói értékelés kiemelt célja a fejlesztés, amelyhez vezetői támogatást ad.A munkatársak ellenőrzése, értékelése rendszeres, amelybe bevonja vezetőtársait. Az értékelések adatokon alapulnak, a visszajelzések korrektek, tárgyszerűek.Tisztában van munkatársai erősségeivel, bevonja és támogatja őket az intézményi fejlesztések és az egyéni fejlődési (karrier) lehetőség kihasználásában.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'M4É2F1',
                'adatforras' => 'SZMSZ, munkatervek és beszámolók, értékelési dokumentumok, minőségirányítási dsokumentumok, oktatói vélemények, felettes vezetői és fenntartói interjúértékelési dokumentumok, oktatói vélemények, felettes vezetői és fenntartói interjúmunkatervek, továbbképzési program, beiskolázási terv, oktatói vélemények',
                'ertek' => 6,
                'sulyszorzo' => 12,
                'sulyozott' => 72
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Kapcsolatrendszer működtetése',
                'szempont' => 'Szerepet vállal az intézményi  kapcsolatrendszer fejlesztésében. Együttműködik a partnerekkel (tanulók, szülők, fenntartó, társszervezetek, duális képzési partnerek, munkaerőpiac).A pozitív kép kialakításával és a folyamatos kapcsolattartással célja a helyi munkaerőpiac igényeinek kielégítése.',
                'magyarazat' => 'Támogatja a team munkát, hatékonyan működtet iskolai oktatói közösségeket, számít a munkájukra. Vezetőként támogatja és elvárja az oktatói együttműködést, ő maga is része az iskolai közösségnek.Ismeri az intézmény partneri körét, részt vesz a partnerek képviselőivel és a partnereket képviselő szervezetekkel (pl. kamara, gyakorlati képzést folytató duális partnerek, munkaerőpiaci szervezetek, végzetteket alkalmazó munkaadók) való kapcsolattartásban. Vezetőként kiemelten kezeli a duális képzési partnerekkel való együttműködést.Az intézmény munkájába bevonja partnereit mind a tervezés, a megvalósítás, az értékelés és a fejlesztések indítása területén. Aktivan és kezdeményezően vesz részt az intézmény imázsának alakításában, a pályaorientációs tevékenységben.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'T3T5T6M2M3F3',
                'adatforras' => 'munkatervek és beszámolók, oktatói vélemények SZMSZ, értékelési dokumentumok, felettes vezetői és fenntartói interjú, oktatói, tanulói és duális partneri vélemények, végzett tanulók és az őket alkalmazó munkaadók véleményeSZMSZ, értékelési dokumentumok, felettes vezetői és fenntartói interjú, oktatói és duális partneri vélemények, végzett tanulók és az őket alkalmazó munkaadók véleménye',
                'ertek' => 6,
                'sulyszorzo' => 9,
                'sulyozott' => 54
            ],
            [
                'szempontsor_id' => 1,
                'terulet' => 'Innováció, iskola menedzselése',
                'szempont' => 'Aktívan részt vesz az intézményi fejlesztésekben, projektekben.Biztosítja az intézmény működéséhez szükséges humán - és infrastrukturális erőforrásokat. Elkötelezettséget mutat az intézmény tervszerű digitális fejlesztése iránt, szervezi a digitális innováció folyamatát.Biztonságos intézményi környezetet biztosít. Biztosítja a biztonságos adatkezelés és adattovábbítás rendjét, a közérdekű adatok nyilvánosságát.Hatékony gazdálkodás',
                'magyarazat' => 'Vezetői munkájában kreatív és kezdeményező, az intézmény céljaihoz illeszkedően irányítja a fejlesztő tevékenységeket.Részvételével az erőforrások elemzése az intézményi céloknak megfelelően történik. Az erőforrások értékelésének eredményeit a képzési kínálat, a képzési tartalmak, a hatékony idő- és erőforrás felhasználás érdekében használják fel.Hatáskörének megfelelően megszervezi az intézmény, mint létesítmény és a használt eszközök biztonságos működtetését (pl. tanműhelyek, sportlétesítmények eszközei, IKT-eszközök, taneszközök). Figyelmbe veszi a környezettudatosság alapelvét, törekszik a fenntarthatósági követelmények betartására.A gazdálkodás területén képviseli a környezettudatos, takarékos megoldásokat. Hatékonyan használja fel az intézményi erőforrásokat a célok elérése érdekében. Törekszik a gazdaságos működtetésre, kihasználja az intézmény bevételi lehetőségeit.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'T1T7M7É3F1F2F3',
                'adatforras' => 'pályázatok, intézményi fejlesztési tervek, munkatervek és beszámolók, felettes vezetői és fenntartói interjúpályázatok, intézményi fejlesztési tervek, oktatói, duális partneri véleményekmunkatervek és beszámolók, pályázatok, oktatói véleményekeredményességi és hatékonysági mutatók, költségvetési-, pályázati adatok, munkatervek és beszámolók, fejlesztési tervek, pályázatok',
                'ertek' => 6,
                'sulyszorzo' => 16,
                'sulyozott' => 96
            ],

//1. iskola - oktató
            [
                'szempontsor_id' => 2,
                'terulet' => 'Képzettség - szakképzettség',
                'szempont' => 'Szakirányú végzettség Pedagógiai végzettség Szakirányú továbbképzés Nyelvismeret',
                'magyarazat' => 'A tanított szakmának, tantárgynak megfelelő szakirányú végzettség Tanári, szakoktatói végzettség Szakmai és pedagógiai továbbképzések Igazolt nyelvismeret "Megállapítás: 6: az ""5"" túl további szakirányú diploma, szakvizsga, továbbképzések (akkreditát vagy vállalati környezetben töltött vagy egyéb jogszabályban nevesített), szakképzésben hasznosítható nyelvismeret (az intézmény számára hasznos további kompetenciák); 5: szakirányú + pedagógiai végzettség (diploma, szakvizsga); 4: jogszabályban előírt szakirányú végzettség, pedagógiai végzettség nélkül; 3: szakirányú szakmai végzettség + felsőfokú végzettség; 2: középfokú szakirányú végzettség (érettségi) + mestervizsga; 1: középfokú szakirányú végzettség"',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'oklevelek, bizonyítványok, tanúsítvány',
                'ertek' => 6,
                'sulyszorzo' => 8,
                'sulyozott' => 13
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Szakmai tapasztalat',
                'szempont' => 'Pedagógusként eltöltött időReleváns munkaerő-piaci tapasztalatNemzetközi szakirányú tapasztalat',
                'magyarazat' => 'Szakmai gyakorlati (oktatói) tapasztalatSzakirányú munkaerő-piaci tapasztalataSakirányú gyakorlati vagy munkaerő-piaci tapasztalat  külföldön',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'szakmai önéletrajz (KIRA adatok)',
                'ertek' => 6,
                'sulyszorzo' => 4,
                'sulyozott' => 24
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Munkaerőpiaci érték',
                'szempont' => 'Szervezeten belüli hatása az intézményi eredményességreStratégiai szakterület',
                'magyarazat' => 'Az intézményen belül az intézmény eredményességére gyakorolt közvetlen hatása (pl:  szakmai - érettségi vizsgatárgy sikeres oktatója, hátrányos helyzetűek sikeres támogatása, eredményes tehetséggondozás, stb.)Keresett, magas munkaerőpiaci értékű szakma képviselője (pl.  nehezen betöthető munkakör (mérnöktanár), minimális létszámú felsőfokú végzett (matematika, természettudományos tantárgy), stb. )',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'az intézményi jövőkép és stratégia alapján meghatározott munkaköri értékek',
                'ertek' => 6,
                'sulyszorzo' => 8,
                'sulyozott' => 48
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Szakmai felkészültség',
                'szempont' => 'Pedagógiai eredményességSzakirányában biztos, megalapozott korszerű szakmai tudással rendelkezik. A korszerű ismereteket beépíti a tanulás-tanítás folyamatába.',
                'magyarazat' => 'Szakmai területén  mérhetően, bizonyíthatóan eredményes oktató. A tanulói teljesítményben mérhető a pedagógiai tevékenység hozzáadott értéke.Biztos szakmai tudás jellemzi, képes  és kíván is megújulni, tudása korszerű és naprakész. Szakmai-pedagógiai céljai elérése érdekében képzi önmagát.Figyelemmel kíséri és beépíti a tanulási-tanítási folymatba a szakmai területének változó tartalmát, az új ismeretek, a duális partnerek elvárásait, az általuk alkalmazott eszközöket, technológiát, modern módszertant alkalmaz.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'tanulói eredmények (KRÉTA adatok), központi mérések, vizsgaeredmények, versenyeredmények, munkatervek és beszámolóktanmenetek, (óratervek), egyéni fejlesztési tervek,  óralátogatás, munkaerőpiaci, duális partneri visszajelzéstanmenetek, (óratervek), egyéni fejlesztési tervek, óralátogatás, munkaerőpiaci, duális partneri visszajelzés',
                'ertek' => 6,
                'sulyszorzo' => 11,
                'sulyozott' => 66
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'A szakképzésreleváns korszerű módszertan alkalmazása',
                'szempont' => 'Gyakorlatorientált, tevékenységközpontú, tanulási eredmény alapú módszereket alkalmaz.Digitális eszközök, módszerek alkalmazásaA tanulók, tanulócsoportok egyéni szükségletéhez illeszkedő módszereket és munkaformákat alkalmaz (pl. differenciált oktatás).A szakképzési tartalomhoz megfelelő munkaformákat alkalmaz.',
                'magyarazat' => 'Tanulási-tanítási tevékenysége során alkalmazza az olyan korszerű módszereket, mint a kooperatív módszertan, a digitális tanulás, az önálló tanulás, a projektmódszer. Fejleszti a "soft skill" -eket: problémamegoldás, kretatívitás, együttműködés, stb. A tanulási eredmény eléréshez tudatosan választtja meg az eredményes  módszereket.Tanulási-tanítási folymatban rendszeresen alkalmazza a digitális eszközöket, azokat tudatosan a pedagógiai folyamat céljainak megfelelően, rutinszerűen alkalmazza.A módszereket a tanulók és a tanuló csoportok igényeinek, előzetes tudásának megfelelően választja ki, differenciált oktatást alkalmaz.A pedagógiai folyamathoz választja a munkaformákat. A szakképzés elvárásainak megfelelően  alkalmazza a frontális, csoportos és egyéni munkaformákat.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'óralátogatás, (óratervek), egyéni fejlesztési tervek, tanmenetekóralátogatás, (óratervek), egyéni fejlesztési tervek, tanmenetekóralátogatás, (óratervek), egyéni fejlesztési tervek, tanmenetekóralátogatás, (óratervek), egyéni fejlesztési tervek, tanmenetek',
                'ertek' => 6,
                'sulyszorzo' => 18,
                'sulyozott' => 108
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Pedagógiai tervezés',
                'szempont' => 'Részt vesz az intézmény belső tananyagfejlesztési tevékenységében.Részt vesz az intézményi dokumentumok elkészítésében, a saját dokumentumaiban nyomon követhető az összhang az intézményi célokkal. Tervezésében figyelembe veszi a tanulói igényeket és adottságokat, beépíti a digitális oktatás módszereit és eszközeit.Tervező tevékenységében szerepet kap a tanulók motiválása, motivációjuk fejlesztése, épít a tanulók aktív részvételére.Tervezésében épít a tanulók előzetes tudására, valamint a duális képzőhelyen szerzett ismeretekre, tapasztalatokra.',
                'magyarazat' => 'Tananyagot készít tananyagot, amely tükrözi a szakmai korszerűséget (tartalom, módszer, digitalizáció).Az intézményi tervek elkészítésében részt vesz; pedagógiai tervei összhangban vannak a szakképzés ágazati és intézményi céljaival.Pedagógiai tervei tanuló és csoport fókuszúak, differenciáltan tervezi meg a pedagógiai folyamatokat; terveiben a korszerű (a generációra jellemző) digitális oktatás hangsúlyosan jelen van.Tudatosan tervezi meg a tanulók motivációjának fejlesztését, a feladatok kijelölésével, változatos, figyelmet igénylő munkaszervezéssel. Tervezett módszerei, munkaformái a tanulói aktvitást, a gyakorlatorientált képzést támogatják.Terveiben figyelembe veszi a tanuló szakmáját, épít az ezzel kapcsolatos előzetes tudásukra és a duális képzőhelyen megszerzett tudásukra és tapasztalataikra.',
                'kiegeszites' => 'Nincs',
                'kapcsolodo' => 'Nincs',
                'adatforras' => 'munkatervek és beszámolók, digitális tanyagok, óralátogatás, munkatervek, tanmenetek, (óratervek), egyéni fejlesztési tervek, óralátogatástanmenetek, (óratervek), egyéni fejlesztési tervek, óralátogatás, tanulói véleménytanmenetek, (óratervek), egyéni fejlesztési tervek, óralátogatás, tanulói véleménytanmenetek, (óratervek), egyéni fejlesztési tervek, óralátogatás, tanulói, duális partneri vélemény',
                'ertek' => 6,
                'sulyszorzo' => 9,
                'sulyozott' => 54
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Pedagógiai értékelés',
                'szempont' => 'A pedagógiai folyamathoz illeszkedve diagnosztikus, fejlesztő és összegző értékelést alkalmaz. A visszajelzései rendszeresek, egyértelműek, tárgyilagosak, fejlesztő hatásúak.A pedagógiai célokhoz, a szakmai programhoz és a képzési és kimeneti követelményekhez (KKK) illeszkedő  értékelést alkalmaz.Az oktatási folyamat elején ismerteti az elvárásokat a szülőkkel, tanulókkal.A duális képzőhely értékelési gyakorlatával összhangban alakítja értékelési gyakorlatát.Ellenőrzéseinek méréseinek, értékeléseinek eredményeit rendszeresen szakszerűen elemzi, felhasználja a tanulók fejlesztési céljainak és feladatainak kijelölésében.',
                'magyarazat' => 'Ismeri és pedagógiailag tudatosan alkalmazza az értékelési módszereket.Értékelési rendszere koherens, a követelmények alapján meghatározott.A tanulók és a szülők számára ismert az értékelési szempontrendszer.Értékelési rendszerét összehangolja a duális képzőhely értékelési rendszerével.Az értékelés eredményeinek elemzésével visszacsatol a pedagógiai folyamatra (tartalom, módszer, munkaforma), annak fejlesztéséhez használja fel.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'óralátogatás, tanulói vélemény, tanulói eredmények (KRÉTA napló)óralátogatás, tanulói vélemény (szakmai program és értékelési gyakorlat összevetése)óralátogatás, tanulói vélemény (szakmai program és értékelési gyakorlat összevetése), szülői véleményduális partneri vélemény, tanulói vélemény, tanulói eredmények (KRÉTA napló), vizsgaeredmények,tanulói eredmények (KRÉTA napló), vizsgaeredmények, központi mérések, óralátogatás',
                'ertek' => 6,
                'sulyszorzo' => 10,
                'sulyozott' => 60
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Együttműködés más oktatókkal, a szülőkkel és a gyakorlati oktatási partnerekkel',
                'szempont' => 'Együttműködik az egy osztályban tanító oktatókkal, a tantárgyköziség megvalósításában és a tanulók személyiségfejlesztése érdekében. Részt vesz tudásmegosztásban. Együttműködik a szülőkkel és a pedagógiai munkát segítő szakemberekkel. Aktív pályaorientációs tevékenységet végez. Együttműködik a duális képzőhelyekkel.',
                'magyarazat' => 'Kiemelten fontos a szakmai oktatók, illetve a közismereti és a szakmai oktatók együttműködése. Tudását megosztja és nyitott a szakmai együttműködésre, támogatja, segíti kollégáinak a munkáját. A szülőkkel való kapcsolat fenntartására törekszik, ehhez használja a digitális eszközöket is (KRÉTA, stb.). A tanulók érdekében együttműködik a segítő munkatársakkal és szervezetekkel (pszichológus, iskolaorvos, védőnő, gyógypedagógus, szociális munkás, gyámügyi szakemberek stb.) Feladatkörének megfelelően bekapcsolódik a pályaorientációs munkába (rendezvények, társszervezetekkel, általános iskolákkal, gazdálkodó szervezetekkel való kapcsolattartás) Részt vesz a duális partnerekkel folytatott kommunikációban, kapcsolatot tart velük.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'munkatervek és beszámolók munkatervek és beszámolók munkatervek és beszámolók, szülői vélemény munkatervek duális partneri vélemény',
                'ertek' => 6,
                'sulyszorzo' => 7,
                'sulyozott' => 42
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Személyiségfejlesztő, csoportvezetői, tanulás támogató tevékenység',
                'szempont' => 'Pedagógiai munkájában épít a szociális tanulásban rejlő lehetőségekre. Támogatja a tanulók önálló gondolkodását, a tanulási-tanítási folyamat részévé teszi a tanulók ötleteit, önálló kezdeményezéseit, ezzel támogatva a munkavállalói és a vállalkozói kompetenciáik fejlesztését.',
                'magyarazat' => 'A foglakozásokon és az azon túli intézményi pedagógiai munkájában segíti a közösségépítést, a tanulók együttműködését, közös programokat, kirándulásokat szervez.Épít a tanulói kreatívitásra, jól kezeli a tanulói sokszínűségét, az egyéni ötleteket, kezdeményezéeket támogatja. Fejleszti a munkaerőpiac által igényelét kompetenciákat: önállóság, kreativitás, problémamegoldás, csapatmunka, felelősségvállalás, érzelmi intelligencia, rugalmasság stb.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'munkatervek és beszámolók, tanmenetek, óralátogatásmunkatervek és beszámolók, tanmenetek, óralátogatás',
                'ertek' => 6,
                'sulyszorzo' => 15,
                'sulyozott' => 90
            ],
            [
                'szempontsor_id' => 2,
                'terulet' => 'Innovációs tevékenység és szakmai elkötelezettség',
                'szempont' => 'Aktívan részt vesz projektekben, intézményi fejlesztésekben, innovációkban. Külső-belső szakmai kapcsolatrendszerrel rendelkezik. Szakmai céljaihoz illeszkedve tudatosan tervezi szakmai munkáját, oktatói karrierjét.',
                'magyarazat' => 'Szervező, fejlesztő, oktató tevékenységet végez a projektekben és a fejlesztésekben. Pl: pályázatok megvalósítása, korszerű szakmai tartalmak, módszertan és a digitális oktatás alkalmazása, innovatív ötletek kidolgozása. Az iskolai élet aktív tagja, nyitott az újra, aktívan részt vállal az iskola eredményességében, a külső megítélésének alakításában. Szakmai kapcsolatai támogatják, segítik és ösztönzik a pedagógiai munkájának fejlesztését. Elhivatottság jellemzi iskolai munkáját. Szakmai munkáját reálisan értékeli, tisztában van értékeivel, nyitott annak fejlesztésére.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'munkatervek és beszámolók munkatervek és beszámolók munkatervek és beszámolók',
                'ertek' => 6,
                'sulyszorzo' => 15,
                'sulyozott' => 90
            ],


//1. iskola - vezető
            [
                'szempontsor_id' => 3,
                'terulet' => 'Képzettség - szakképzettség',
                'szempont' => 'Szakirányú végzettségPedagógiai végzettségSzakirányú továbbképzésNyelvismeret',
                'magyarazat' => 'A tanított szakmának, tantárgynak megfelelő szakirányú végzettség, vezetői munkakörhöz előírt végzettségTanári, szakoktatói végzettségSzakmai, pedagógiai, vezetői továbbképzésekIgazolt nyelvismeret"Megállapítás:6: az ""5"" túl további szakirányú diploma, szakvizsga, továbbképzések (akkreditát vagy vállalati környezetben töltött vagy egyéb jogszabályban nevesített),  szakképzésben hasznosítható nyelvismeret (az intézmény számára hasznos további kompetenciák); 5: szakirányú + pedagógiai végzettség (diploma, szakvizsga); 4: jogszabályban előírt szakirányú végzettség, pedagógiai végzettség nélkül; 3: szakirányú szakmai végzettség + felsőfokú végzettség; 2: középfokú szakirányú végzettség (érettségi) + mestervizsga; 1: középfokú szakirányú végzettség',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'oklevelek, bizonyítványok, tanúsítványok',
                'ertek' => 6,
                'sulyszorzo' => 3,
                'sulyozott' => 18
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Szakmai tapasztalat',
                'szempont' => 'Pedagógusként eltöltötött idő, azon belül vezetői tapasztalatReleváns szakirányú szakmai és vezetői munkerő-piaci tapasztalat Nemzetközi szakirányú tapasztalat',
                'magyarazat' => 'Szakmai gyakorlati (oktatói), azon belül vezetői tapasztalatAz oktatói pályára szakirányú munkaerőpiaci tapasztalattal érkező oktatók, vezetők szakirányú gyakorlati ideje. Munkaerőpiacon, oktatásirányítói területen szerzett vezetői tapasztalat.A fenti gyakorlati tapasztalat külföldön',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'szakmai önéletrajz (KIRA adatok)',
                'ertek' => 6,
                'sulyszorzo' => 4,
                'sulyozott' => 24
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Munkaerőpiaci érték',
                'szempont' => 'Szervezeten belüli hatása az intézményi eredményességre, vezetői szerepe Stratégiai szakterület, vezetői szerep',
                'magyarazat' => 'Az intézményen belül az intézmény eredményességére gyakorolt közvetlen hatása Keresett, magas munkaerőpiaci értékű szakma képviselője. Szakmai végzettsége kapcsolódik az intézmény szakmai profiljához.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'az intézményi jövőkép és stratégia alapján meghatározott munkaköri értékek',
                'ertek' => 6,
                'sulyszorzo' => 8,
                'sulyozott' => 48
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Szakmai felkészültség',
                'szempont' => 'Vezetői tudása biztos, megalapozott, korszerű. Szakmai-pedagógiai céljai elérése érdekében képzi önmagát.A korszerű ismeretek beépítését segíti és támogatja a tanulás-tanítás folyamatába.Szakmai céljaihoz illeszkedve tudatosan tervezi szakmai munkáját, oktatói és vezetői karrierjét.',
                'magyarazat' => 'Biztos szakmai tudás, önképzés jellemzi, képes és kész is megújulni, tudása korszerű és naprakész. Szakmai és vezetői ismereteit fejleszti. Vezetőként határozottan képviseli az intézmény pedagógiai céljait, értékeit, a kollégáknak irányt mutat és támogatást ad.Figyelemmel kíséri és információt biztosít a munkatársaknak, támogatja a szakmai területnek megfelelő változó tartalmak és a duális partneri elvárások beépítését a tanulási-tanítási folyamatba.Szakmai munkáját reálisan értékeli, tisztában van értékeivel, nyitott annak fejlesztésére. Biztos szakmai tudás jellemzi a korszerű pedagógia és a helyzetfüggő vezetés területén. Szakmai és vezetői tudását jól alkalmazza a gyakorlatban.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'tervezési dokumentumok, munkatervek és beszámolók,  továbbképzési program, oktatói vélemények, munkaerőpiaci, duális partneri visszajelzések tervezési dokumentumok, oktatói vélemények, munkaerőpiaci, duális partneri visszajelzésektervezési dokumentumok, oktatói vélemények, duális partneri visszajelzések',
                'ertek' => 6,
                'sulyszorzo' => 10,
                'sulyozott' => 60
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Pedagógiai folyamatok irányítása',
                'szempont' => 'Irányítja és részt vállal a célok meghatározásában (európai, országos, ágazati, regionális célokkal összhangban meghatározott intézményi szakképzési célrendszer). Részt vesz a minőségirányítási rendszer, az önértékelés és az oktatói értékelés rendszerének kialakításában, működtetésében.Biztosítja, támogatja a korszerű szakmai tartalmak, a módszertan és a digitális oktatás alkalmazását. Irányítja az oktatók pedagógiai tervező munkáját.Vezetői munkájával ösztönzi és támogatja a szociális tanulásban rejlő lehetőségeket, az oktatók közösségépítő, személyiségfejlesztő tevékenységét.Irányítja a szakmai és közismereti oktatók együttműködését,  értékelési rendszerük összehangolását. Elősegíti az együttműködést a szakmai oktatók és a  duális képzőhely között, a szakmai tartalom, a korszerű módszertan és az összehangolt  értékelési rendszer területén.Irányítja a korszerű tanulói mérések alkalmazását. Méri és értékeli a tanulási folyamat eredményességét. A korai jelzőrendszer eredményeit felhasználja a szakmai- pedagógiai munka fejlesztéséhez.A külső, belső mérési eredmények és a tanulói eredmények (vizsgák, értékelések, partneri visszajelzések) alapján fejleszti a pedagógiai folyamatokat.',
                'magyarazat' => 'Vezetői munkájában érvényesül a folyamatos minőségfejlesztés logikája (PDCA logika). Ismeri, és a tervezési dokumentumok tartalmazzák ezeket a célokat,  melyek alapján a fejlesztéseket megtervezi. A gyakorlatban a megvalósítás során támogatja a célok elérését, a célok és a kialakított intézményi gyakorlat egymással koherensek. Vezetőként elkötelezett a korszerű pedagógiai gyakorlat megvalósításában. Támogatja a korszerű módszerek alkalmazását, mérési eredményekre támaszkodva fejleszti az intézmény módszertani kultúráját.Vezetői munkájában segíti a közösségépítést, a tanulók együttműködését. Elvárja az oktatók személyiségfejlesztő, egyénre szabott pedagógiai munkáját.A közismereti és szakmai képzés együttműködését biztosítja a megfelelő szervezeti keretek működtetésével, szakmai támogatást nyújt a duális parrtnerekkel való képzési együttműködéshez.A tanulói mérési rendszer kialakítását és alkalmazását irányítja. Szisztematikusan méri és értékeli a célok teljesülését, és az azokban meghatározott feladatok eredményességét. Felhasználja a külső mérés eredményeit és az intézményi mérési feladatokat támogatja.A mérési eredmények alapján rendszeresen felülvizsgálja a célokat, a működési folyamatokat, és ez alapján pedagógiai fejlesztéseket valósít meg.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'tervezési dokumentumok, munkatervek és beszámolókmunkatervek  és beszámolók, oktatói véleményektanulói vélemények, oktatói véleményekmunkatervek, beszámolók, oktatói és duális partneri véleményekmunkatervek és beszámolók, továbbképzési program, beiskolázási terv, mérési dokumentumokmunkatervek és beszámolók, intézményi alapdokumentumok, oktatói,  tanulói és duális partneri vélemények',
                'ertek' => 6,
                'sulyszorzo' => 14,
                'sulyozott' => 84
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Változások kezelése',
                'szempont' => 'A jövőkép, a célok megfogalmazása és a feladatok tanévekre bontása során figyelembe veszi az intézmény külső és belső környezetét, a folyamatban lévő és várható munkaerő-piaci változásokat."Képes a változtatás folyamatát hatékonyan megtervezni, végrehajtani és értékelni, amelynek során felhasználja a minőségirányítási rendszer működtetésének eredményeit. Alkalmazza a tanuló szervezetté válás elvét és gyakorlatát.A vezető ösztönzi, engedi, és szívesen befogadja a tanítás-tanulás eredményesebbé tételére irányuló kezdeményezéseket, innovációkat, fejlesztéseket. Támogatja a belső tudásmegosztást."Folyamatosan nyomon követi és értékeli a célok megvalósulását, a mérési rendszer eredményeit, az elemzéseket bemutatja partnereinek. Rendszeresen meghatározza az intézmény erősségeit és gyengeségeit, fejlesztendő területeit, ehhez felhasználja a belső és külső intézményértékelés eredményeit.A mérési eredmények alapján terveit felülvizsgálja, korrigálja a célokat, fejleszti az intézmény pedagógiai, szakmai munkáját.',
                'magyarazat' => 'Kialakítja és működteti az - intézmény jövőbeni lehetőségeit, irányait befolyásoló, meghatározó - információk, adatok gyűjtésének és elemzésének, feldolgozásának rendszerét.Részt vesz a szakképzést érintő helyi igények elemzésének folyamatában. Folyamatosan informálja kollégáit és az intézmény partnereit a megjelenő változásokról, lehetőséget biztosít számukra az önálló információszerzésre (konferenciák, előadások, egyéb források), és reagál a feltárt igényekre.Az értékelések méréseken, konkrét elemzéseken alapulnak, amelybe bevonja munkatársait, partnereit. A mérés eredményeit felhasználja az intézmény szakmai munkájának értékelésére és a fejlesztések megalapozására.Az éves, féléves értékelések eredményei nyomonkövethetők a fejlesztési tervekben, a következő időszak terveiben, azok koherensen illeszkednek egymáshoz.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'munkatervek és beszámolók, intézményi alapdokumentumok, felettes vezetői és fenntartói interjúminőségirányítási dokumentumok, intézményi értékelések, értekezletek jegyzőkönyvei, munkatervek és beszámolók, továbbképzési program, beiskolázási tervminőségirányítási dokumentumok, intézményi értékelések, értekezletek jegyzőkönyvei, munkatervek és beszámolókminőségirányítási dokumentumok,  munkatervek és beszámolók, intézményi alapdokumentumok, felettes vezetői és fenntartói interjú',
                'ertek' => 6,
                'sulyszorzo' => 14,
                'sulyozott' => 84
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Vezetői kommunikáció',
                'szempont' => 'Alkalmazott kommunikációs csatornákInformáció szolgáltatás, tájékoztatásVezetői együttműködés, lojalitásAz intézmény képviselete a belső és a külső partnerek tekintetében',
                'magyarazat' => 'Átgondolt, szervezett kommunikációs rendszert működtet, tájékoztatást, értekezletet tart, elektronikus csatornákat használ.Oktatók, szülők, tanulók tájékoztatását tervezi és koordinálja, amely rendszeresen, szabályozottan működik. Részt vesz a  naprakész kommunikációs megjelenés (honlap, sajtó) biztosításában, egyéb tájékoztatási formák működtetésében.Átlátható, rendszerszintű vezetői feladatmegosztás működik. Hiteles és etikus magatartást tanúsít. (Kommunikációja, magatartása a pedagógus etika normáinak megfelel.)Vezetői munkájával kapcsolatban számít munkatársai véleményére, rendszeres és szervezett kapcsolatot tart az intézményi közösségekkel. Külső kapcsolatait az intézmény érdekében végzett nyitott, konstruktív kapcsolatrendszer jellemzi.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'felettes vezetői és fenntartói interjú, intézményi kommunikációs csatornák, értekezletek jergyzőkönyvei, digitális felületekoktatói,  tanulói és duális partneri vélemények, felettes vezetői és fenntartói interjú, intézményi kommunikációs csatornák, értekezletek jergyzőkönyvei, digitális felületekSZMSZ, felettes vezetői és fenntartói interjú, oktatói véleményekfelettes vezetői és fenntartói interjú, oktatói,  tanulói és duális partneri vélemények',
                'ertek' => 6,
                'sulyszorzo' => 10,
                'sulyozott' => 60
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Oktatói munka ellenőrzése, értékelése, fejlesztések támogatása',
                'szempont' => 'Átlátható ellenőrzési rendszert  működtet, azonosítja az erősségeket, a fejlesztendő területeket, támogatja a fejlesztéseket.Irányítja és delegálja az ellenőrzési, értékelési feladatokat.Támogatja az oktatói értékelésen  alapuló egyéni cselekvési terveket.',
                'magyarazat' => 'Differenciáló értékelési rendszert működtetnek az intézményben, az elvárások és az értékelések átláthatóak és koherensek. Az oktatói értékelés kiemelt célja a fejlesztés, amelyhez vezetői támogatást ad.A munkatársak ellenőrzése, értékelése rendszeres, amelybe bevonja vezetőtársait. Az értékelések adatokon alapulnak, a visszajelzések korrektek, tárgyszerűek.Tisztában van munkatársai erősségeivel, bevonja és támogatja őket az intézményi fejlesztések és az egyéni fejlődési (karrier) lehetőség kihasználásában.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'SZMSZ, munkatervek és beszámolók, értékelési dokumentumok, minőségirányítási dsokumentumok, oktatói vélemények, felettes vezetői és fenntartói interjúértékelési dokumentumok, oktatói vélemények, felettes vezetői és fenntartói interjúmunkatervek, továbbképzési program, beiskolázási terv, oktatói vélemények',
                'ertek' => 6,
                'sulyszorzo' => 12,
                'sulyozott' => 72
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Kapcsolatrendszer működtetése',
                'szempont' => 'Szerepet vállal az intézményi  kapcsolatrendszer fejlesztésében. Együttműködik a partnerekkel (tanulók, szülők, fenntartó, társszervezetek, duális képzési partnerek, munkaerőpiac).A pozitív kép kialakításával és a folyamatos kapcsolattartással célja a helyi munkaerőpiac igényeinek kielégítése.',
                'magyarazat' => 'Támogatja a team munkát, hatékonyan működtet iskolai oktatói közösségeket, számít a munkájukra. Vezetőként támogatja és elvárja az oktatói együttműködést, ő maga is része az iskolai közösségnek.Ismeri az intézmény partneri körét, részt vesz a partnerek képviselőivel és a partnereket képviselő szervezetekkel (pl. kamara, gyakorlati képzést folytató duális partnerek, munkaerőpiaci szervezetek, végzetteket alkalmazó munkaadók) való kapcsolattartásban. Vezetőként kiemelten kezeli a duális képzési partnerekkel való együttműködést.Az intézmény munkájába bevonja partnereit mind a tervezés, a megvalósítás, az értékelés és a fejlesztések indítása területén. Aktivan és kezdeményezően vesz részt az intézmény imázsának alakításában, a pályaorientációs tevékenységben.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'munkatervek és beszámolók, oktatói vélemények SZMSZ, értékelési dokumentumok, felettes vezetői és fenntartói interjú, oktatói, tanulói és duális partneri vélemények, végzett tanulók és az őket alkalmazó munkaadók véleményeSZMSZ, értékelési dokumentumok, felettes vezetői és fenntartói interjú, oktatói és duális partneri vélemények, végzett tanulók és az őket alkalmazó munkaadók véleménye',
                'ertek' => 6,
                'sulyszorzo' => 9,
                'sulyozott' => 54
            ],
            [
                'szempontsor_id' => 3,
                'terulet' => 'Innováció, iskola menedzselése',
                'szempont' => 'Aktívan részt vesz az intézményi fejlesztésekben, projektekben.Biztosítja az intézmény működéséhez szükséges humán - és infrastrukturális erőforrásokat. Elkötelezettséget mutat az intézmény tervszerű digitális fejlesztése iránt, szervezi a digitális innováció folyamatát.Biztonságos intézményi környezetet biztosít. Biztosítja a biztonságos adatkezelés és adattovábbítás rendjét, a közérdekű adatok nyilvánosságát.Hatékony gazdálkodás',
                'magyarazat' => 'Vezetői munkájában kreatív és kezdeményező, az intézmény céljaihoz illeszkedően irányítja a fejlesztő tevékenységeket.Részvételével az erőforrások elemzése az intézményi céloknak megfelelően történik. Az erőforrások értékelésének eredményeit a képzési kínálat, a képzési tartalmak, a hatékony idő- és erőforrás felhasználás érdekében használják fel.Hatáskörének megfelelően megszervezi az intézmény, mint létesítmény és a használt eszközök biztonságos működtetését (pl. tanműhelyek, sportlétesítmények eszközei, IKT-eszközök, taneszközök). Figyelmbe veszi a környezettudatosság alapelvét, törekszik a fenntarthatósági követelmények betartására.A gazdálkodás területén képviseli a környezettudatos, takarékos megoldásokat. Hatékonyan használja fel az intézményi erőforrásokat a célok elérése érdekében. Törekszik a gazdaságos működtetésre, kihasználja az intézmény bevételi lehetőségeit.',
                'kiegeszites' => 'nincs',
                'kapcsolodo' => 'nincs',
                'adatforras' => 'pályázatok, intézményi fejlesztési tervek, munkatervek és beszámolók, felettes vezetői és fenntartói interjúpályázatok, intézményi fejlesztési tervek, oktatói, duális partneri véleményekmunkatervek és beszámolók, pályázatok, oktatói véleményekeredményességi és hatékonysági mutatók, költségvetési-, pályázati adatok, munkatervek és beszámolók, fejlesztési tervek, pályázatok',
                'ertek' => 6,
                'sulyszorzo' => 16,
                'sulyozott' => 96
            ]
    ]);
    }
}
