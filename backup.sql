-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (3,'11.11.2011','TUGA I BOL','Dva najbolja golmana zagrebačkog Središta Bašić i Orlović danas su primila deset komada','U naknadno odigranoj utakmici devetog kola Zagorec je pobijedio Ponikve sa 6-4. Rezultat je neobičan, neobično je mijenjanje rezultata, ali je svakako najneobičnija činjenica kako su tolike golove primili reprezentativni čuvar mreže Središta Antonio Orlović i Goran Bašić, prethodnih sezona sjajan vratar Rubinoćevog Vinogradara. Njemu je ovo bio prvi nastup\r\nza Zagorec.\r\nU 30. minuti domaći su vodili s 3-0, u 71. je bilo 4-4. Smrekar i Firer zabili su po dva gola na krapinskoj strani, te Kanceljak i Cvilko po jedan. Strijelci za Ponikve bili su Brajko dva, Aziji i Lojber.\r\n-Razlog ovako visokom rezultati je to što je to bila ho-ruk utakmica. Nije bilo discipline ni rasporeda, izjavio je trener Ponikvi Hrvoje Pipinić.\r\nZagorec ovu jesen igra s jako protuslovnim rezultatima.Od krajnje visokih poraza, do još viših pobjeda, no već je dostigao Trnje na četvrtom i petom mjestu.\r\n-Dvaput sam davao ostavku, srećom Uprava ju nije prihvatila, otkrio je trener Zagorca Drago Bartolić.','nogomet.jfif','sport',0),(4,'20.5.2016','ZADNJI TRZAJI','Posljednji pokušaji spašavanja Cibone: Aco sazvao presicu','Aleksandar Aco Petrović i Saša Pavličić Bekić imat će u ponedjeljak veliku presicu u 13 sati u Ciboni. Naravno, tema je spas kluba pod nazivom \"Mi smo Cibona\".\r\n\r\nKao što ste već mogli čuti i pročitati posljednjih dana, nekoć najbogatiji sportski klub u Hrvatskoj je pred gašenjem. \r\n\r\n- Emocije ne mogu spasiti Cibonu. Financije da. Idemo nas 2000 koji su financijski u stanju uplatiti po 5000 eura i tako pokrivamo dug i imamo solidan budžet za sljedeću godinu. Isti ti ljudi bi birali Skupštinu, Upravni i Nadzorni odbor. A Grad neka radi po svome! - napisao je Aco Petrović prije nekoliko dana na društvenim mrežama.','kosarka.jfif','sport',0),(27,'16.06.2022.','PANNONIAN CHALLENGE','Pobjeda Thiema, Hrvat Ranteš drugi u BMX Pro kategoriji','Pobjedom Amerikanca Jacoba Thiema ispred Hrvata Marina Ranteša u BMX Pro kategoriji u Osijeku je završeno 23. izdanje Pannonian Challengea, natjecanja u ekstremnim sportovima. \r\n\r\nFinalni dan sportskog dijela natjecanja 23. izdanja Pannonian Challengea pokazao je još jednom zašto taj festival s razlogom nosi laskavu titulu najuspješnijeg i najposebnijeg festivala ekstremnog sporta i urbane kulture u regiji. Vratolomije vozača s tri kontinenta i devet država pratio je zavidan broj gledatelja na lijevoj strani Drave u Osijeku.','tenis.jfif','sport',0),(60,'19.06.2022.','PAVIČIĆ O ‘BACI SE NA POD‘','Nina Violić dala si je zadatak da glumi osobu koja je misterij, a Goran Bogdan je žrtva koncepta','Film se pokazuje na Festivalu mediteranskog filma, a bavi se temom razvoda\r\nPočne li neupućeni gledatelj gledati početak filma \"Baci se na pod\" Nine Violić, nakon desetak minuta pomislit će da je pogriješio dvoranu i ušao na drugi film. Prvih deset minuta, naime, ne može ni pomisliti da gleda obiteljsku dramu. Činit će mu se da gleda animirani film za djecu.\r\n\r\nRealiziran tehnikom stop-animacije, taj početak prati dogodovštine dviju mucica prašine na dnu kutije za igračke. Dva čupava prašna junaka pokušavaju se izbaviti iz kartonskog ambisa, a sve vrijeme strahuju od svog najvećeg dušmana: to je usisavač. Njihovu igru prati- ili, još točnije, izmišlja- dječačić Igor.\r\n\r\nNegdje oko četvrt sata filma, Igor (Bruno Frketić Bajić) onako uzgred izgovara rečenicu u kojoj je sadržan ključni motiv...\r\n\r\n','nina.jfif','kultura',0),(61,'19.06.2022.','FILM ZA SVE','Dobit ćemo prvi film o životu Dražena Petrovića','Hrvatski audiovizualni centar objavio je u utorak i srijedu odluke o raspodjeli sredstava. Riječ je o rezultatima javnih poziva za proizvodnju kratkometražnih igranih i eksperimentalnih filmova, poticanje filmskih koprodukcija s manjinskim hrvatskim udjelom, komplementarnih djelatnosti te distribucije filmova, kao i proizvodnju dugometražnih, kratkometražnih i animiranih filmova, serijskih televizijskih djela te razvoj projekata i scenarija. ZAVRŠIO ANIMAFESTImamo vrhunsku animaciju, ali u kinima je nema Tako je na natječaj u kategoriji dugometražnog igranog filma pristiglo ukupno 37 projekata, a HAVC je odlučio financijski poduprijeti četiri filma, i to dva debitantska s ukupno 11 milijuna i 800 tisuća kuna. Među njima se našao \"Drugi krug\" redatelja i scenarista Josipa Lukića, poznatog nam po nizu uspješnih kratkometražnih i srednjemetražnih filmova poput \"Majči\", nagrađenog Grand Prixom na Danima hrvatskog filma. U \"Drugom krugu\" donosi nam osobnu priču o studentu Jakovu koji se vratio u rodni Split kako bi se brinuo o majci koja se bori s depresijom. Zahtjevnoj temi mentalnih poremećaja, prosudili su HAVC-ovi umjetnički savjetnici Zvonimir Jurić, Ivor Martinić i Ana Štulina, pristupa s empatijom, ali prisutna je i kritika zdravstvenog sustava.\r\n\r\nPročitajte više na internetu negdi.','drazen.jiff.jfif','kultura',0),(62,'19.06.2022.','PAKLENI ŠUND','REDATELJ:Quentin Tarantino\r\nGLAVNE ULOGE Bruce Willis, Uma Thurman, John Travolta, Ving Rhames','Godina 1994 bila je izuzetno zanimljiva, prepuna naslova koji se i danas rado gledaju i prepričavaju. Te godine je Tom Hanks interpretirao Forresta Gumpa, Tim Robbins i Morgan Freeman su ispisali jednu od najupečatljivijih zatvorskih priča u filmu “Iskupljenje u Shawshanku”, Jean Reno je čuvao i sačuvao malenu Natalie Portman u “Leonu”, Christian Slater je imao poduži intervju s Brad Pittom, Kevin Smith se ukazao s niskobudžetnim, ali originalnim “Trgovcima”, Jim Carrey je bio gluplji od Jeffa Danielsa, Sandra Bullock je vozila autobus u društvu Keanua Reevesa, a Simba je rastao i odrastao te postao kralj. Svi navedeni filmovi su doživjeli komercijalni i(li) kreativni,oscarovski uspjeh. Međutim niti jedan od tih naslova nije izazvao tolike kontroverze te imao utjecaja na filmaše i filmofile u godinama koje slijede kao Tarantinov “Pakleni šund”….\r\n\r\nGodine 1992. Quentin Jerome Tarantino napisao je scenarij i prema njemu režirao nasilni, krvavi “film pljačke” “Reservoir dogs”. Riječ je o odličnom, u nekim dijelovima iznimno brutalnom filmu sa sjajnom glumačkom ekipom (Harvey Keitel, Michael Madsen, Tim Roth, Chris Penn, Steve Buscemi….).\r\n\r\n Film je od većine kritičara zaradio izvrsne ocjene, te je stekao kultni status kod filmofila. Dvije godine kasnije (unatoč brojnim problemima s produkcijom i distribucijom filma (“Columbia” je odbila projekt zbog eksplicitnih scena drogiranja u filmu pa je film preuzeo “Miramax”, odnosno braća Weinstein) bivši djelatnik videoteke režira “Pakleni šund” i ponovo dobiva naklonost kritike, ali ovim filmom Tarantino osvaja  publiku diljem svijeta. Film je postao “blockbuster” – na uloženih (obzirom na glumačku ekipu skromnih 8 milijuna dolara) zaradio je preko dvjesto milijuna. Tarantino je zauvijek osigurao mjesto na A listi hollywoodskih redatelja, film je postao neizbježna “lektira” svakog ljubitelja filma. U čemu je tajna uspjeha “Paklenog šunda” ?','mie.png','kultura',0);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `razina` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `korisnik`
--

LOCK TABLES `korisnik` WRITE;
/*!40000 ALTER TABLE `korisnik` DISABLE KEYS */;
INSERT INTO `korisnik` VALUES (1,'c','$2y$10$RTr.HjVYLv6gK2WiX5Ubmu1/AxIF35mlMCfly3TDPl6RHflE305di','a','b',1),(2,'swinger6969','$2y$10$0FEQPCE.Q2xQ1a.6FDa1j.c4UwgdqVoLGiPwYUaSDgAN7kF9sT9Ay','paulo','ANIC',0),(3,'tri','$2y$10$PONo5vqb7nY.hUMaDAanrubo4cjaUdGyAn1XYIZjMo6xJw3/eDeRO','jedan','dva',0),(4,'osam','$2y$10$dA5jExrQDp5OLiwQVY4N8evtVB8.RdhoJnXwF3n0Rm8Z7Hrv9omIi','osam','osam',0),(5,'nkfsnskn','$2y$10$Vmrzi27i7WJTYkQnr/BZROEtjFSEhAtG7c7O73wBVWmWopeTZI.wm','djso','jdls',0),(6,'a','$2y$10$9RGRdAGBY0IFnugBOZ7r0ee4ntH8yklB2beQMrk0TTmt8SzIYiVu.','a','a',0),(7,'dwadadwadwad','$2y$10$dQeJpGuDuDikJ4oJ8DmRA.871wNwRmytaPFWRjvHXop7d26OUYDxu','aewd','dwaddwad',0);
/*!40000 ALTER TABLE `korisnik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-19 14:52:30
