<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    CONST SEKOLAH_DUMP = [
            '0' => [
                'npsn' => '69786400',
                'nama' => 'SLBS PUTRA HANJUANG KABUPATEN GARUT',
            ],
            '1' => [
                'npsn' => '20221568',
                'nama' => 'SMKN 1 SUKABUMI KOTA SUKABUMI',
            ],
            '2' => [
                'npsn' => '20274621',
                'nama' => 'SMAS IBNU SINA KABUPATEN PURWAKARTA',
            ],
            '3' => [
                'npsn' => '20231420',
                'nama' => 'SMKN 1 CIBINONG KABUPATEN BOGOR',
            ],
            '4' => [
                'npsn' => '20216001',
                'nama' => 'SMKN 1 LOSARANG KABUPATEN INDRAMAYU',
            ],
            '5' => [
                'npsn' => '20229659',
                'nama' => 'SMKN 1 PLERED KABUPATEN PURWAKARTA',
            ],
            '6' => [
                'npsn' => '20217802',
                'nama' => 'SMKN 1 KARAWANG KABUPATEN KARAWANG',
            ],
            '7' => [
                'npsn' => '20216952',
                'nama' => 'SMAN 3 SUBANG KABUPATEN SUBANG',
            ],
            '8' => [
                'npsn' => '69830649',
                'nama' => 'SMKS INSAN MUTIARA AWANI BANGSA (IMABA) KOTA BOGOR',
            ],
            '9' => [
                'npsn' => '69923504',
                'nama' => 'SMKS TI GARUDA NUSANTARA KOTA BANDUNG',
            ],
            '10' => [
                'npsn' => '69857715',
                'nama' => 'SMKS ISLAM PARONGPONG KABUPATEN BANDUNG BARAT',
            ],
            '11' => [
                'npsn' => '69904921',
                'nama' => 'SMKS TEKNOLOGI KRISTEN EAGLE KABUPATEN BANDUNG BARAT',
            ],
            '12' => [
                'npsn' => '69957429',
                'nama' => 'SMAN 1 PAGELARAN KABUPATEN CIANJUR',
            ],
            '13' => [
                'npsn' => '69833578',
                'nama' => 'SMKS NURUL UYUN BUNGBULANG KABUPATEN GARUT',
            ],
            '14' => [
                'npsn' => '20219175',
                'nama' => 'SMKN 11 BANDUNG KOTA BANDUNG',
            ],
            '15' => [
                'npsn' => '69824839',
                'nama' => 'SMAN 1 SAGULING KABUPATEN BANDUNG BARAT',
            ],
            '16' => [
                'npsn' => '20200590',
                'nama' => 'SMKS GUNA KARYA KABUPATEN BOGOR',
            ],
            '17' => [
                'npsn' => '20206215',
                'nama' => 'SMKN 5 PANGALENGAN KABUPATEN BANDUNG',
            ],
            '18' => [
                'npsn' => '20221560',
                'nama' => 'SMAN 2 SUKABUMI KOTA SUKABUMI',
            ],
            '19' => [
                'npsn' => '20219142',
                'nama' => 'SMKN 6 BANDUNG KOTA BANDUNG',
            ],
            '20' => [
                'npsn' => '20206211',
                'nama' => 'SMAN 1 LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '21' => [
                'npsn' => '20203873',
                'nama' => 'SMKN 2 CILAKU KABUPATEN CIANJUR',
            ],
            '22' => [
                'npsn' => '20227483',
                'nama' => 'SMKS PGRI BUNGBULANG KABUPATEN GARUT',
            ],
            '23' => [
                'npsn' => '20224614',
                'nama' => 'SMKN 1 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '24' => [
                'npsn' => '69864690',
                'nama' => 'SMKS PLUS GODOG KABUPATEN GARUT',
            ],
            '25' => [
                'npsn' => '20211510',
                'nama' => 'SMKN 1 CIAMIS KABUPATEN CIAMIS',
            ],
            '26' => [
                'npsn' => '20214996',
                'nama' => 'SMAN 1 JAMBLANG KABUPATEN CIREBON',
            ],
            '27' => [
                'npsn' => '20256282',
                'nama' => 'SMKN 1 PADAHERANG KABUPATEN PANGANDARAN',
            ],
            '28' => [
                'npsn' => '20233645',
                'nama' => 'SMAS BINA BHAKTI JALANCAGAK KABUPATEN SUBANG',
            ],
            '29' => [
                'npsn' => '20212911',
                'nama' => 'SMKN 3 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '30' => [
                'npsn' => '70029783',
                'nama' => 'SLBS LOKA MANDIRI KABUPATEN CIANJUR',
            ],
            '31' => [
                'npsn' => '20227464',
                'nama' => 'SMAN 8 GARUT KABUPATEN GARUT',
            ],
            '32' => [
                'npsn' => '20252029',
                'nama' => 'SMKN 1 PACET KABUPATEN CIANJUR',
            ],
            '33' => [
                'npsn' => '20219231',
                'nama' => 'SMKN PEKERJAAN UMUM (PU) PROVINSI JAWA BARAT KOTA BANDUNG',
            ],
            '34' => [
                'npsn' => '20279892',
                'nama' => 'SMKS PASUNDAN CARINGIN KABUPATEN GARUT',
            ],
            '35' => [
                'npsn' => '69774710',
                'nama' => 'SMAS PELITA BANGSA KABUPATEN GARUT',
            ],
            '36' => [
                'npsn' => '69760688',
                'nama' => 'SMAS ISLAM NURUL IMAN KABUPATEN GARUT',
            ],
            '37' => [
                'npsn' => '20272059',
                'nama' => 'SMAS PEMUDA GARUT KABUPATEN GARUT',
            ],
            '38' => [
                'npsn' => '69981694',
                'nama' => 'SLBS BANY AL MUTTAQIN KABUPATEN GARUT',
            ],
            '39' => [
                'npsn' => '20219248',
                'nama' => 'SMAN 24 BANDUNG KOTA BANDUNG',
            ],
            '40' => [
                'npsn' => '20227479',
                'nama' => 'SMKS GILANG KENCANA 1 GARUT KABUPATEN GARUT',
            ],
            '41' => [
                'npsn' => '20219241',
                'nama' => 'SMAN 12 BANDUNG KOTA BANDUNG',
            ],
            '42' => [
                'npsn' => '20219863',
                'nama' => 'SLBN SUKAPURA KOTA BANDUNG',
            ],
            '43' => [
                'npsn' => '69979630',
                'nama' => 'SMKS PERMATA INDONESIA KOTA BEKASI',
            ],
            '44' => [
                'npsn' => '20232371',
                'nama' => 'SMAN 1 TAJURHALANG KABUPATEN BOGOR',
            ],
            '45' => [
                'npsn' => '20202258',
                'nama' => 'SMAN 1 SIMPENAN KABUPATEN SUKABUMI',
            ],
            '46' => [
                'npsn' => '69979165',
                'nama' => 'SMKS INTAN MANDIRI KABUPATEN GARUT',
            ],
            '47' => [
                'npsn' => '20276137',
                'nama' => 'SLBS YAYASAN CAHAYA AL FURQON KABUPATEN GARUT',
            ],
            '48' => [
                'npsn' => '20267968',
                'nama' => 'SMAN 1 CIKAKAK KABUPATEN SUKABUMI',
            ],
            '49' => [
                'npsn' => '20253664',
                'nama' => 'SMAN 1 KABANDUNGAN KABUPATEN SUKABUMI',
            ],
            '50' => [
                'npsn' => '20253633',
                'nama' => 'SMKN 1 GUNUNGGURUH KABUPATEN SUKABUMI',
            ],
            '51' => [
                'npsn' => '20268247',
                'nama' => 'SLBS BAG BC PURNAMA KABUPATEN CIANJUR',
            ],
            '52' => [
                'npsn' => '69945126',
                'nama' => 'SMAS PLUS SIROJUSSYAFIIYYAH KABUPATEN CIANJUR',
            ],
            '53' => [
                'npsn' => '69953506',
                'nama' => 'SMAS STAMFORD KOTA BANDUNG',
            ],
            '54' => [
                'npsn' => '20254202',
                'nama' => 'SMKN 1 BOJONGGENTENG KABUPATEN SUKABUMI',
            ],
            '55' => [
                'npsn' => '69978526',
                'nama' => 'SMKS BAHRUL HIDAYAH KABUPATEN TASIKMALAYA',
            ],
            '56' => [
                'npsn' => '69852115',
                'nama' => 'SMKS TAZKIA NUSANTARA CIPANAS KABUPATEN CIANJUR',
            ],
            '57' => [
                'npsn' => '70005381',
                'nama' => 'SMAS IT QOSHRUL MUHAJIRIN KABUPATEN TASIKMALAYA',
            ],
            '58' => [
                'npsn' => '20268138',
                'nama' => 'SLBS BAG ABC BAITURROHMAN KABUPATEN TASIKMALAYA',
            ],
            '59' => [
                'npsn' => '20258132',
                'nama' => 'SMKS RIYADLUT TAUHID KABUPATEN TASIKMALAYA',
            ],
            '60' => [
                'npsn' => '20268064',
                'nama' => 'SMKS KOMUNIKA PRESTASI GENTUR PADAKEMBANG KABUPATEN TASIKMALAYA',
            ],
            '61' => [
                'npsn' => '20209194',
                'nama' => 'SMAN 21 GARUT KABUPATEN GARUT',
            ],
            '62' => [
                'npsn' => '69888680',
                'nama' => 'SMTK KADESI BOGOR KABUPATEN BOGOR',
            ],
            '63' => [
                'npsn' => '69954905',
                'nama' => 'SMKS AL JAZIRAH TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '64' => [
                'npsn' => '69774935',
                'nama' => 'SMKS NU AL FARISI KABUPATEN GARUT',
            ],
            '65' => [
                'npsn' => '69856918',
                'nama' => 'SMAS IT BAITURROHMAN KABUPATEN GARUT',
            ],
            '66' => [
                'npsn' => '20209203',
                'nama' => 'SMKN 2 GARUT KABUPATEN GARUT',
            ],
            '67' => [
                'npsn' => '20258203',
                'nama' => 'SLBS AL MASDUKI TAROGONG KALER KABUPATEN GARUT',
            ],
            '68' => [
                'npsn' => '20269703',
                'nama' => 'SMKS SIROJUL UMMAH KABUPATEN TASIKMALAYA',
            ],
            '69' => [
                'npsn' => '69947697',
                'nama' => 'SMKS IBNU HAMBAL KABUPATEN TASIKMALAYA',
            ],
            '70' => [
                'npsn' => '20227827',
                'nama' => 'SMAS TERPADU BAITURRAHMAN KABUPATEN BANDUNG',
            ],
            '71' => [
                'npsn' => '20228525',
                'nama' => 'SMKS FARMASI AS SHIFA KABUPATEN BANDUNG',
            ],
            '72' => [
                'npsn' => '20258490',
                'nama' => 'SLBS SATRIA GALDIN KABUPATEN BANDUNG',
            ],
            '73' => [
                'npsn' => '20216003',
                'nama' => 'SMKN 1 KANDANGHAUR KABUPATEN INDRAMAYU',
            ],
            '74' => [
                'npsn' => '69904917',
                'nama' => 'SMKS TEKNOLOGI KRISTEN KATHAROS KOTA BEKASI',
            ],
            '75' => [
                'npsn' => '69754538',
                'nama' => 'SMAS PUTRADARMA GLOBAL SCHOOL KABUPATEN BEKASI',
            ],
            '76' => [
                'npsn' => '69852111',
                'nama' => 'SMKN 1 SINDANG BARANG KABUPATEN CIANJUR',
            ],
            '77' => [
                'npsn' => '20227477',
                'nama' => 'SMKS PLUS AL FALAH BIRU TAROGONG KIDUL KABUPATEN GARUT',
            ],
            '78' => [
                'npsn' => '20206133',
                'nama' => 'SMAS PGRI RANCAEKEK KABUPATEN BANDUNG',
            ],
            '79' => [
                'npsn' => '20203874',
                'nama' => 'SMKN 1 CIDAUN KABUPATEN CIANJUR',
            ],
            '80' => [
                'npsn' => '20269232',
                'nama' => 'SMKS BAKTI ILHAM KABUPATEN BANDUNG',
            ],
            '81' => [
                'npsn' => '20252386',
                'nama' => 'SMKN 1 CIBINONG KABUPATEN CIANJUR',
            ],
            '82' => [
                'npsn' => '20209200',
                'nama' => 'SMKS PASUNDAN 1 GARUT KABUPATEN GARUT',
            ],
            '83' => [
                'npsn' => '20209231',
                'nama' => 'SMKS MAARIF GARUT KABUPATEN GARUT',
            ],
            '84' => [
                'npsn' => '20238050',
                'nama' => 'SMKS PUTRA SENA CIBARUSAH KABUPATEN BEKASI',
            ],
            '85' => [
                'npsn' => '70007506',
                'nama' => 'SMAS TERPADU BAITUL HIKMAH KOTA DEPOK',
            ],
            '86' => [
                'npsn' => '20209201',
                'nama' => 'SMKN 1 GARUT KABUPATEN GARUT',
            ],
            '87' => [
                'npsn' => '20227437',
                'nama' => 'SMAS CILEDUG AL MUSADDADIYAH KABUPATEN GARUT',
            ],
            '88' => [
                'npsn' => '69760684',
                'nama' => 'SMKS INSAN UNGGUL KABUPATEN BANDUNG',
            ],
            '89' => [
                'npsn' => '20209207',
                'nama' => 'SMKS CILEDUG AL MUSADDADIYAH GARUT KABUPATEN GARUT',
            ],
            '90' => [
                'npsn' => '69754617',
                'nama' => 'SMKS INSAN PRIMA MANDIRI KABUPATEN GARUT',
            ],
            '91' => [
                'npsn' => '20279897',
                'nama' => 'SMKS BINA WIRA USAHA KABUPATEN GARUT',
            ],
            '92' => [
                'npsn' => '20209206',
                'nama' => 'SMKS HIKMAH GARUT KABUPATEN GARUT',
            ],
            '93' => [
                'npsn' => '69954587',
                'nama' => 'SMKS MUHAMMADIYAH TAROGONG KIDUL KABUPATEN GARUT',
            ],
            '94' => [
                'npsn' => '69925315',
                'nama' => 'SMKS IT AL ANWARY KABUPATEN GARUT',
            ],
            '95' => [
                'npsn' => '20262124',
                'nama' => 'SMKS FARMASI YBKP3 GARUT KABUPATEN GARUT',
            ],
            '96' => [
                'npsn' => '69894140',
                'nama' => 'SMAS IT AS SYAKUR KABUPATEN GARUT',
            ],
            '97' => [
                'npsn' => '69775761',
                'nama' => 'SMKS AN NIDA KABUPATEN GARUT',
            ],
            '98' => [
                'npsn' => '69888821',
                'nama' => 'SMKS PLUS NURUL HUDA PASIRWANGI KABUPATEN GARUT',
            ],
            '99' => [
                'npsn' => '69947905',
                'nama' => 'SMAS IT BAITUL HIKMAH AS SHIDDIQ KABUPATEN GARUT',
            ],
            '100' => [
                'npsn' => '20270927',
                'nama' => 'SMKS PERTANIAN SARIMUKTI PASIRWANGI KABUPATEN GARUT',
            ],
            '101' => [
                'npsn' => '20271204',
                'nama' => 'SMKS MAARIF SUKAWENING KABUPATEN GARUT',
            ],
            '102' => [
                'npsn' => '20258240',
                'nama' => 'SLBS AN NAJAAT KABUPATEN GARUT',
            ],
            '103' => [
                'npsn' => '69756305',
                'nama' => 'SMKS BINA IKHWANI KABUPATEN BOGOR',
            ],
            '104' => [
                'npsn' => '20231368',
                'nama' => 'SMKS ADI SANGGORO KABUPATEN BOGOR',
            ],
            '105' => [
                'npsn' => '69904500',
                'nama' => 'SMKS YAPURA 2 KABUPATEN BOGOR',
            ],
            '106' => [
                'npsn' => '20258512',
                'nama' => 'SMKS PLUS QURROTA A^YUN SAMARANG KABUPATEN GARUT',
            ],
            '107' => [
                'npsn' => '20271022',
                'nama' => 'SMKS ASSALAM SAMARANG KABUPATEN GARUT',
            ],
            '108' => [
                'npsn' => '69944250',
                'nama' => 'SMKS TUNAS NUSANTARA GARUT KABUPATEN GARUT',
            ],
            '109' => [
                'npsn' => '20258193',
                'nama' => 'SLBS BAG BC AL BARKAH KABUPATEN GARUT',
            ],
            '110' => [
                'npsn' => '69904251',
                'nama' => 'SMKS SYIS BADRUZZAMAN KABUPATEN GARUT',
            ],
            '111' => [
                'npsn' => '69758140',
                'nama' => 'SMKS PLUS AL ISTIQOMAH SAMARANG KABUPATEN GARUT',
            ],
            '112' => [
                'npsn' => '20254242',
                'nama' => 'SMKS MUHAMMADIYAH BANYURESMI KABUPATEN GARUT',
            ],
            '113' => [
                'npsn' => '20258161',
                'nama' => 'SLBS BAG BC BINA MANDIRI KABUPATEN GARUT',
            ],
            '114' => [
                'npsn' => '20227442',
                'nama' => 'SMAS MUHAMMADIYAH BANYURESMI KABUPATEN GARUT',
            ],
            '115' => [
                'npsn' => '20227472',
                'nama' => 'SMAN 17 GARUT KABUPATEN GARUT',
            ],
            '116' => [
                'npsn' => '69815424',
                'nama' => 'SMKS PASUNDAN RANCAEKEK KABUPATEN BANDUNG',
            ],
            '117' => [
                'npsn' => '69897254',
                'nama' => 'SMAS IT RIJALUL GOD KABUPATEN GARUT',
            ],
            '118' => [
                'npsn' => '20227942',
                'nama' => 'SMKS HARAPAN 2 RANCAEKEK KABUPATEN BANDUNG',
            ],
            '119' => [
                'npsn' => '20227460',
                'nama' => 'SMAN 28 GARUT KABUPATEN GARUT',
            ],
            '120' => [
                'npsn' => '69888427',
                'nama' => 'SMKS NURUL HUDA YASPINDA KABUPATEN GARUT',
            ],
            '121' => [
                'npsn' => '69950277',
                'nama' => 'SMAS IT MEKARJAYA KABUPATEN GARUT',
            ],
            '122' => [
                'npsn' => '20262092',
                'nama' => 'SMKS FAUZANIYYAH KABUPATEN GARUT',
            ],
            '123' => [
                'npsn' => '69988521',
                'nama' => 'SMKS PLUS RASANA RASYIDAH KABUPATEN GARUT',
            ],
            '124' => [
                'npsn' => '69771399',
                'nama' => 'SMKS IT CIHANJA KABUPATEN GARUT',
            ],
            '125' => [
                'npsn' => '20258475',
                'nama' => 'SLBS BAG ABC YKS II KABUPATEN BANDUNG',
            ],
            '126' => [
                'npsn' => '20227945',
                'nama' => 'SMKS KP 1 MAJALAYA KABUPATEN BANDUNG',
            ],
            '127' => [
                'npsn' => '20253152',
                'nama' => 'SMAN 1 SUKADANA KABUPATEN CIAMIS',
            ],
            '128' => [
                'npsn' => '69923901',
                'nama' => 'SMAS BHAKTI PUTRA INDONESIA KABUPATEN GARUT',
            ],
            '129' => [
                'npsn' => '69753553',
                'nama' => 'SMKS ASY SYARIFIYAH TAROGONG KIDUL KABUPATEN GARUT',
            ],
            '130' => [
                'npsn' => '20227451',
                'nama' => 'SMAS PGRI GARUT KABUPATEN GARUT',
            ],
            '131' => [
                'npsn' => '69882346',
                'nama' => 'SMKS ISLAM TERPADU IQRO LELES KABUPATEN GARUT',
            ],
            '132' => [
                'npsn' => '20257267',
                'nama' => 'SMKS AL FARISI KABUPATEN GARUT',
            ],
            '133' => [
                'npsn' => '20206155',
                'nama' => 'SMAS BUPPI MAJALAYA KABUPATEN BANDUNG',
            ],
            '134' => [
                'npsn' => '69908714',
                'nama' => 'SMKS IT BAITUL AZIZ KABUPATEN BANDUNG',
            ],
            '135' => [
                'npsn' => '20219731',
                'nama' => 'SMAS BINA BHAKTI 1 KOTA BANDUNG',
            ],
            '136' => [
                'npsn' => '20258199',
                'nama' => 'SLBS AT TAQWA KABUPATEN GARUT',
            ],
            '137' => [
                'npsn' => '69899030',
                'nama' => 'SMKS SADAM CISURUPAN KABUPATEN GARUT',
            ],
            '138' => [
                'npsn' => '69953683',
                'nama' => 'SMKS TUNAS PERSADA KABUPATEN GARUT',
            ],
            '139' => [
                'npsn' => '69859377',
                'nama' => 'SMAS TUNAS PERSADA MALANGBONG KABUPATEN GARUT',
            ],
            '140' => [
                'npsn' => '69753315',
                'nama' => 'SMKS DHARMA AGUNG KABUPATEN GARUT',
            ],
            '141' => [
                'npsn' => '69919741',
                'nama' => 'SMAS BIP MALANGBONG KABUPATEN GARUT',
            ],
            '142' => [
                'npsn' => '69952943',
                'nama' => 'SMKS MA ARIF NU AL MUZAYYIN KABUPATEN CIAMIS',
            ],
            '143' => [
                'npsn' => '20209237',
                'nama' => 'SMAN 16 GARUT KABUPATEN GARUT',
            ],
            '144' => [
                'npsn' => '20211502',
                'nama' => 'SMAN 1 LAKBOK KABUPATEN CIAMIS',
            ],
            '145' => [
                'npsn' => '20262132',
                'nama' => 'SMKN 7 GARUT KABUPATEN GARUT',
            ],
            '146' => [
                'npsn' => '69822687',
                'nama' => 'SMAS ISLAM TERPADU AL KAFI CIGEDUG KABUPATEN GARUT',
            ],
            '147' => [
                'npsn' => '20209198',
                'nama' => 'SMKS SANTANA 2 CIBATU KABUPATEN GARUT',
            ],
            '148' => [
                'npsn' => '60730358',
                'nama' => 'SMKS AL QUDSY CIBATU KABUPATEN GARUT',
            ],
            '149' => [
                'npsn' => '20258243',
                'nama' => 'SLBS BAG BC YGP CIBATU KABUPATEN GARUT',
            ],
            '150' => [
                'npsn' => '20209199',
                'nama' => 'SMKS SANTANA 1 CIBATU GARUT KABUPATEN GARUT',
            ],
            '151' => [
                'npsn' => '20227470',
                'nama' => 'SMAN 23 GARUT KABUPATEN GARUT',
            ],
            '152' => [
                'npsn' => '20227882',
                'nama' => 'SMAS TERPADU BANDUNG IBUN KABUPATEN BANDUNG',
            ],
            '153' => [
                'npsn' => '69949896',
                'nama' => 'SMKS MAHAPUTRA CERDAS UTAMA KABUPATEN BANDUNG',
            ],
            '154' => [
                'npsn' => '20227964',
                'nama' => 'SMKS PENIDA 2 KATAPANG KABUPATEN BANDUNG',
            ],
            '155' => [
                'npsn' => '20228551',
                'nama' => 'SMKS PENIDA 1 KATAPANG KABUPATEN BANDUNG',
            ],
            '156' => [
                'npsn' => '20270034',
                'nama' => 'SMKS KESEHATAN BHAKTI KENCANA KABUPATEN GARUT',
            ],
            '157' => [
                'npsn' => '20227476',
                'nama' => 'SMKS AL MUKHTARIYAH BAYONGBONG KABUPATEN GARUT',
            ],
            '158' => [
                'npsn' => '20220341',
                'nama' => 'SMAN 10 BOGOR KOTA BOGOR',
            ],
            '159' => [
                'npsn' => '70034814',
                'nama' => 'SMKS AL BURDAH KABUPATEN BANDUNG',
            ],
            '160' => [
                'npsn' => '20252466',
                'nama' => 'SMKS MIFTAHUSSALAM KABUPATEN CIAMIS',
            ],
            '161' => [
                'npsn' => '20227458',
                'nama' => 'SMAN 19 GARUT KABUPATEN GARUT',
            ],
            '162' => [
                'npsn' => '20238517',
                'nama' => 'SMAN 5 BOGOR KOTA BOGOR',
            ],
            '163' => [
                'npsn' => '20219306',
                'nama' => 'SMAN 6 BANDUNG KOTA BANDUNG',
            ],
            '164' => [
                'npsn' => '69888695',
                'nama' => 'SMAS PLUS AL MOENIR BAYONGBONG KABUPATEN GARUT',
            ],
            '165' => [
                'npsn' => '69761961',
                'nama' => 'SMKS TERPADU HIDAYATUL FAIZIEN KABUPATEN GARUT',
            ],
            '166' => [
                'npsn' => '20271047',
                'nama' => 'SMKS PERSADA BAYONGBONG KABUPATEN GARUT',
            ],
            '167' => [
                'npsn' => '20258194',
                'nama' => 'SLBS MUHAMMADIYAH BAYONGBONG GARUT KABUPATEN GARUT',
            ],
            '168' => [
                'npsn' => '20254601',
                'nama' => 'SMKS FARMASI BHAKTI ADI HUSODO KABUPATEN GARUT',
            ],
            '169' => [
                'npsn' => '20227439',
                'nama' => 'SMAS ISLAM PESANTREN GALMASI KABUPATEN GARUT',
            ],
            '170' => [
                'npsn' => '20254626',
                'nama' => 'SMKS DARUL FALAH CIJEUNGJING KABUPATEN CIAMIS',
            ],
            '171' => [
                'npsn' => '20251781',
                'nama' => 'SMAS MATHLAUL ANWAR MARGAHAYU KABUPATEN BANDUNG',
            ],
            '172' => [
                'npsn' => '20270374',
                'nama' => 'SMKS PGRI 2 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '173' => [
                'npsn' => '20219728',
                'nama' => 'SMAS BPK 2 PENABUR KOTA BANDUNG',
            ],
            '174' => [
                'npsn' => '20253861',
                'nama' => 'SMKN 9 GARUT KABUPATEN GARUT',
            ],
            '175' => [
                'npsn' => '20228503',
                'nama' => 'SMAS IT DANUL FALAH KABUPATEN BANDUNG',
            ],
            '176' => [
                'npsn' => '69946880',
                'nama' => 'SMKS KAMAL PERSADA CILAWU KABUPATEN GARUT',
            ],
            '177' => [
                'npsn' => '20209197',
                'nama' => 'SMKS SETIA BHAKTI CILAWU KABUPATEN GARUT',
            ],
            '178' => [
                'npsn' => '69952583',
                'nama' => 'SMKS BAITTUL RAHMAT KABUPATEN GARUT',
            ],
            '179' => [
                'npsn' => '69758969',
                'nama' => 'SMKS TELKOM BANDUNG KABUPATEN BANDUNG',
            ],
            '180' => [
                'npsn' => '20224507',
                'nama' => 'SMAN 5 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '181' => [
                'npsn' => '20206210',
                'nama' => 'SMAN 1 MAJALAYA KABUPATEN BANDUNG',
            ],
            '182' => [
                'npsn' => '20256573',
                'nama' => 'SMKS ASSALAAM BANDUNG KABUPATEN BANDUNG',
            ],
            '183' => [
                'npsn' => '20271473',
                'nama' => 'SMKS AL AMANAH KABUPATEN BANDUNG',
            ],
            '184' => [
                'npsn' => '69762662',
                'nama' => 'SMKS RIYADLUL HUDA KABUPATEN GARUT',
            ],
            '185' => [
                'npsn' => '20223019',
                'nama' => 'SMAN 10 BEKASI KOTA BEKASI',
            ],
            '186' => [
                'npsn' => '69947934',
                'nama' => 'SMAS ISLAM NURUL BAYAN SUKAWANGI KABUPATEN GARUT',
            ],
            '187' => [
                'npsn' => '69946512',
                'nama' => 'SMAS PLUS SINGAJAYA KABUPATEN GARUT',
            ],
            '188' => [
                'npsn' => '20271843',
                'nama' => 'SMAS PLUS AL HIDAYAH CILAWU KABUPATEN GARUT',
            ],
            '189' => [
                'npsn' => '20227816',
                'nama' => 'SMAS PLUS BABUSSALAM CIMENYAN KABUPATEN BANDUNG',
            ],
            '190' => [
                'npsn' => '20227453',
                'nama' => 'SMAS SETIA BHAKTI CILAWU KABUPATEN GARUT',
            ],
            '191' => [
                'npsn' => '20270714',
                'nama' => 'SMKS PLUS ASY SYUHADA KABUPATEN GARUT',
            ],
            '192' => [
                'npsn' => '20276131',
                'nama' => 'SMKS SENTOSA CILAWU KABUPATEN GARUT',
            ],
            '193' => [
                'npsn' => '20254638',
                'nama' => 'SMKS AL FATTAH BOJONGMENGGER KABUPATEN CIAMIS',
            ],
            '194' => [
                'npsn' => '20271212',
                'nama' => 'SMKS BMI CIKAJANG KABUPATEN GARUT',
            ],
            '195' => [
                'npsn' => '69822688',
                'nama' => 'SMAS ISLAM TERPADU SITUWANGI CIKAJANG KABUPATEN GARUT',
            ],
            '196' => [
                'npsn' => '20257889',
                'nama' => 'SMKS 1 JULI CIKAJANG KABUPATEN GARUT',
            ],
            '197' => [
                'npsn' => '69758144',
                'nama' => 'SMKS TARBIYATUL AULAD CIKAJANG KABUPATEN GARUT',
            ],
            '198' => [
                'npsn' => '20258233',
                'nama' => 'SLBS BAG BC YGP BL LIMBANGAN KABUPATEN GARUT',
            ],
            '199' => [
                'npsn' => '69759062',
                'nama' => 'SMKS KORPORASI KABUPATEN GARUT',
            ],
            '200' => [
                'npsn' => '69899602',
                'nama' => 'SMAS IT CILOA LIMBANGAN KABUPATEN GARUT',
            ],
            '201' => [
                'npsn' => '20227488',
                'nama' => 'SMKN 6 GARUT KABUPATEN GARUT',
            ],
            '202' => [
                'npsn' => '69964624',
                'nama' => 'SMKS BINA REMAJA UTAMA KABUPATEN GARUT',
            ],
            '203' => [
                'npsn' => '20231742',
                'nama' => 'SMKS PATRIOT 2 BEKASI KOTA BEKASI',
            ],
            '204' => [
                'npsn' => '20223135',
                'nama' => 'SMKS NURJAMILAH KOTA BEKASI',
            ],
            '205' => [
                'npsn' => '69941916',
                'nama' => 'SMAS MUHAMMADIYAH 1 TALEGONG KABUPATEN GARUT',
            ],
            '206' => [
                'npsn' => '69938225',
                'nama' => 'SMKS MEKARWANGI KABUPATEN GARUT',
            ],
            '207' => [
                'npsn' => '69899219',
                'nama' => 'SMKS IT TALEGONG KABUPATEN GARUT',
            ],
            '208' => [
                'npsn' => '69949062',
                'nama' => 'SMAS IT TALEGONG KABUPATEN GARUT',
            ],
            '209' => [
                'npsn' => '69929696',
                'nama' => 'SLBS AL HASYEMI KABUPATEN GARUT',
            ],
            '210' => [
                'npsn' => '69971232',
                'nama' => 'SMKS PLUS AL HIDAYAH CILAWU KABUPATEN GARUT',
            ],
            '211' => [
                'npsn' => '69758993',
                'nama' => 'SMKS IT AL HAWARI KABUPATEN GARUT',
            ],
            '212' => [
                'npsn' => '20271078',
                'nama' => 'SMKS IT DAARUL ABROR KABUPATEN GARUT',
            ],
            '213' => [
                'npsn' => '20227443',
                'nama' => 'SMAS MUHAMMADIYAH CIBIUK KABUPATEN GARUT',
            ],
            '214' => [
                'npsn' => '20227471',
                'nama' => 'SMAN 5 GARUT KABUPATEN GARUT',
            ],
            '215' => [
                'npsn' => '20263279',
                'nama' => 'SMAN 1 LUMBUNG KABUPATEN CIAMIS',
            ],
            '216' => [
                'npsn' => '69948400',
                'nama' => 'SMAS NUSA BANGSA KABUPATEN GARUT',
            ],
            '217' => [
                'npsn' => '20270957',
                'nama' => 'SMKS INSAN MANDIRI KABUPATEN GARUT',
            ],
            '218' => [
                'npsn' => '69934888',
                'nama' => 'SMKS IT BANJARWANGI KABUPATEN GARUT',
            ],
            '219' => [
                'npsn' => '69963074',
                'nama' => 'SMAS DAARUTTIBYAN KABUPATEN GARUT',
            ],
            '220' => [
                'npsn' => '69758354',
                'nama' => 'SMKS GRIYA MUKTI SELAAWI KABUPATEN GARUT',
            ],
            '221' => [
                'npsn' => '69774523',
                'nama' => 'SMKS TPI AL GHONIYYAH SELAAWI KABUPATEN GARUT',
            ],
            '222' => [
                'npsn' => '20262109',
                'nama' => 'SMKS PGRI SELAAWI KABUPATEN GARUT',
            ],
            '223' => [
                'npsn' => '20255776',
                'nama' => 'SMKS KP BAROS KABUPATEN BANDUNG',
            ],
            '224' => [
                'npsn' => '20210719',
                'nama' => 'SMAN 1 SODONGHILIR KABUPATEN TASIKMALAYA',
            ],
            '225' => [
                'npsn' => '69971267',
                'nama' => 'SMAN 32 GARUT KABUPATEN GARUT',
            ],
            '226' => [
                'npsn' => '69753910',
                'nama' => 'SMKS YABP GARUT KABUPATEN GARUT',
            ],
            '227' => [
                'npsn' => '69877293',
                'nama' => 'SMAS AL AMANAH BUNGBULANG KABUPATEN GARUT',
            ],
            '228' => [
                'npsn' => '69759027',
                'nama' => 'SMKS BINA BAKTI BUNGBULANG KABUPATEN GARUT',
            ],
            '229' => [
                'npsn' => '20276140',
                'nama' => 'SMAS AL MADINAH CIBATU KABUPATEN GARUT',
            ],
            '230' => [
                'npsn' => '70006483',
                'nama' => 'SMAS QURANIC SCIENCE BOARDING SCHOOL KABUPATEN TASIKMALAYA',
            ],
            '231' => [
                'npsn' => '20227459',
                'nama' => 'SMAN 7 GARUT KABUPATEN GARUT',
            ],
            '232' => [
                'npsn' => '20219792',
                'nama' => 'SMAS TRI MULIA KOTA BANDUNG',
            ],
            '233' => [
                'npsn' => '20253413',
                'nama' => 'SMKS ASYSAAKIRIN KABUPATEN TASIKMALAYA',
            ],
            '234' => [
                'npsn' => '20272055',
                'nama' => 'SMKS MAARIF NU CIHAURBEUTI KABUPATEN CIAMIS',
            ],
            '235' => [
                'npsn' => '20215032',
                'nama' => 'SLBS BAG ABCD BINA MANDIRI KABUPATEN CIREBON',
            ],
            '236' => [
                'npsn' => '20238031',
                'nama' => 'SMKN 1 BABELAN KABUPATEN BEKASI',
            ],
            '237' => [
                'npsn' => '20253399',
                'nama' => 'SMAS MAARIF BANYURESMI KABUPATEN GARUT',
            ],
            '238' => [
                'npsn' => '69935715',
                'nama' => 'SMAS IT AR ROHMAH KABUPATEN TASIKMALAYA',
            ],
            '239' => [
                'npsn' => '20254133',
                'nama' => 'SMKS PUTRA BAHARI KABUPATEN BANDUNG',
            ],
            '240' => [
                'npsn' => '69952392',
                'nama' => 'SMKS PLUS MUNAWAROTUL HIDAYAH KABUPATEN TASIKMALAYA',
            ],
            '241' => [
                'npsn' => '20271672',
                'nama' => 'SMKS BHAKTI PERTIWI MANONJAYA KABUPATEN TASIKMALAYA',
            ],
            '242' => [
                'npsn' => '20279869',
                'nama' => 'SMKS AL RUZHAN KABUPATEN TASIKMALAYA',
            ],
            '243' => [
                'npsn' => '20268132',
                'nama' => 'SLBS BAG ABC PGRI CIAWI KABUPATEN TASIKMALAYA',
            ],
            '244' => [
                'npsn' => '20210716',
                'nama' => 'SMKS ISLAMIYAH CIAWI TASIKMALAYA KABUPATEN TASIKMALAYA',
            ],
            '245' => [
                'npsn' => '20270173',
                'nama' => 'SMKS YADIFA CIAWI KABUPATEN TASIKMALAYA',
            ],
            '246' => [
                'npsn' => '20232376',
                'nama' => 'SMAN 1 CISEENG KABUPATEN BOGOR',
            ],
            '247' => [
                'npsn' => '20246472',
                'nama' => 'SMKN 1 TEGALBULEUD KABUPATEN SUKABUMI',
            ],
            '248' => [
                'npsn' => '20253960',
                'nama' => 'SMKS WIDYA UTAMA KABUPATEN BANDUNG',
            ],
            '249' => [
                'npsn' => '69774711',
                'nama' => 'SLBS NURHAKAM KABUPATEN GARUT',
            ],
            '250' => [
                'npsn' => '20224114',
                'nama' => 'SMAN 3 CIMAHI KOTA CIMAHI',
            ],
            '251' => [
                'npsn' => '69873948',
                'nama' => 'SMKS ISLAM AS SYARIEF KABUPATEN GARUT',
            ],
            '252' => [
                'npsn' => '69968753',
                'nama' => 'SMKS AL FURQON CIBIRU KABUPATEN TASIKMALAYA',
            ],
            '253' => [
                'npsn' => '20210762',
                'nama' => 'SMAS NURUL AMANAH SALAWU KABUPATEN TASIKMALAYA',
            ],
            '254' => [
                'npsn' => '69830474',
                'nama' => 'SMKS CENDEKIA BAITURRAHMAN PAKENJENG KABUPATEN GARUT',
            ],
            '255' => [
                'npsn' => '69849359',
                'nama' => 'SMAS MUHAMMADIYAH PAKENJENG KABUPATEN GARUT',
            ],
            '256' => [
                'npsn' => '20279894',
                'nama' => 'SMKS AL HAMDANIYYAH PAKENJENG KABUPATEN GARUT',
            ],
            '257' => [
                'npsn' => '69977456',
                'nama' => 'SMKN 15 GARUT KABUPATEN GARUT',
            ],
            '258' => [
                'npsn' => '20262088',
                'nama' => 'SMKS AL HIKMAH TAROGONG KALER KABUPATEN GARUT',
            ],
            '259' => [
                'npsn' => '69849584',
                'nama' => 'SMKS BIDARA MUKTI GARUT KABUPATEN GARUT',
            ],
            '260' => [
                'npsn' => '20209184',
                'nama' => 'SMAS YPI SUKAWENING KABUPATEN GARUT',
            ],
            '261' => [
                'npsn' => '69902577',
                'nama' => 'SMAS SIROJUL HUDA SUKAWENING KABUPATEN GARUT',
            ],
            '262' => [
                'npsn' => '69900993',
                'nama' => 'SMKS KIANSANTANG SUKAWENING KABUPATEN GARUT',
            ],
            '263' => [
                'npsn' => '20262722',
                'nama' => 'SMKS RIYADUL ULUM KABUPATEN TASIKMALAYA',
            ],
            '264' => [
                'npsn' => '69758141',
                'nama' => 'SMKS YAYASAN AMANAH BINA PERSADA GARUT KABUPATEN GARUT',
            ],
            '265' => [
                'npsn' => '69922135',
                'nama' => 'SMAS IT MAROKO KABUPATEN GARUT',
            ],
            '266' => [
                'npsn' => '20268140',
                'nama' => 'SLBS WINAYA BHAKTI KABUPATEN TASIKMALAYA',
            ],
            '267' => [
                'npsn' => '20209181',
                'nama' => 'SMKS PGRI WANARAJA KABUPATEN GARUT',
            ],
            '268' => [
                'npsn' => '69948596',
                'nama' => 'SMKS MIFTAHUL ULUM KABUPATEN TASIKMALAYA',
            ],
            '269' => [
                'npsn' => '20214816',
                'nama' => 'SMKS YAMI WALED KABUPATEN CIREBON',
            ],
            '270' => [
                'npsn' => '20219318',
                'nama' => 'SMKS ANGKASA HUSEIN S BANDUNG KOTA BANDUNG',
            ],
            '271' => [
                'npsn' => '20219274',
                'nama' => 'SMAS YPI KOTA BANDUNG',
            ],
            '272' => [
                'npsn' => '20219729',
                'nama' => 'SMAS BINA BHAKTI 2 KOTA BANDUNG',
            ],
            '273' => [
                'npsn' => '20219730',
                'nama' => 'SMAS BPK 1 PENABUR BANDUNG KOTA BANDUNG',
            ],
            '274' => [
                'npsn' => '20265538',
                'nama' => 'SMKS PAJAJARAN BANDUNG KOTA BANDUNG',
            ],
            '275' => [
                'npsn' => '20219794',
                'nama' => 'SMAS KRISTEN PAULUS KOTA BANDUNG',
            ],
            '276' => [
                'npsn' => '20219756',
                'nama' => 'SMAS ANGKASA KOTA BANDUNG',
            ],
            '277' => [
                'npsn' => '20238548',
                'nama' => 'SMAN 1 CIGALONTANG KABUPATEN TASIKMALAYA',
            ],
            '278' => [
                'npsn' => '69872009',
                'nama' => 'SMKS IT MIFTAHUL HUDA KABUPATEN GARUT',
            ],
            '279' => [
                'npsn' => '69830402',
                'nama' => 'SMAS ISLAM TERPADU AL FALAH BUNGBULANG KABUPATEN GARUT',
            ],
            '280' => [
                'npsn' => '20262037',
                'nama' => 'SMAS ISLAM MEKARBAKTI BUNGBULANG KABUPATEN GARUT',
            ],
            '281' => [
                'npsn' => '20209191',
                'nama' => 'SMAS ISLAM CIKUYA BUNGBULANG KABUPATEN GARUT',
            ],
            '282' => [
                'npsn' => '69758142',
                'nama' => 'SMKS ISLAM TERPADU MUHAJIRIN KARANGPAWITAN KABUPATEN GARUT',
            ],
            '283' => [
                'npsn' => '20268980',
                'nama' => 'SMKS PLUS SUKARAJA KABUPATEN GARUT',
            ],
            '284' => [
                'npsn' => '69760690',
                'nama' => 'SMKS ISLAM MADINATUL ULUM KABUPATEN GARUT',
            ],
            '285' => [
                'npsn' => '69991794',
                'nama' => 'SMAS PLUS SUKARAJA KABUPATEN GARUT',
            ],
            '286' => [
                'npsn' => '20209208',
                'nama' => 'SMKN 4 GARUT KABUPATEN GARUT',
            ],
            '287' => [
                'npsn' => '69939164',
                'nama' => 'SMKS PERMATA NEGERI KABUPATEN GARUT',
            ],
            '288' => [
                'npsn' => '69767585',
                'nama' => 'SMKS ANWARUL HUDA PASIRWANGI KABUPATEN GARUT',
            ],
            '289' => [
                'npsn' => '20227435',
                'nama' => 'SMAS ASSHIDDIQIYAH KABUPATEN GARUT',
            ],
            '290' => [
                'npsn' => '20258195',
                'nama' => 'SLBS MUHAMMADIYAH KARANGPAWITAN KABUPATEN GARUT',
            ],
            '291' => [
                'npsn' => '69956456',
                'nama' => 'SLBS AL FALAH JAYA KABUPATEN GARUT',
            ],
            '292' => [
                'npsn' => '69931913',
                'nama' => 'SMAS BINA NUSA PURWAJAYA KABUPATEN GARUT',
            ],
            '293' => [
                'npsn' => '20227440',
                'nama' => 'SMAS MAARIF PEUNDEUY KABUPATEN GARUT',
            ],
            '294' => [
                'npsn' => '20254116',
                'nama' => 'SMKS DAARUDDAWAH KABUPATEN TASIKMALAYA',
            ],
            '295' => [
                'npsn' => '60730359',
                'nama' => 'SMKN 14 GARUT KABUPATEN GARUT',
            ],
            '296' => [
                'npsn' => '20219279',
                'nama' => 'SMAS TRINITAS BANDUNG KOTA BANDUNG',
            ],
            '297' => [
                'npsn' => '69896002',
                'nama' => 'SMAS PLUS AL QOMARIYAH WALAHIR KABUPATEN GARUT',
            ],
            '298' => [
                'npsn' => '20253656',
                'nama' => 'SMKS YASPIM KABUPATEN SUKABUMI',
            ],
            '299' => [
                'npsn' => '69980025',
                'nama' => 'SMAS IT ATTA AWUN KABUPATEN GARUT',
            ],
            '300' => [
                'npsn' => '69947043',
                'nama' => 'SMAS IT SILIWANGI KABUPATEN GARUT',
            ],
            '301' => [
                'npsn' => '20268982',
                'nama' => 'SMKS AZZAHRA KABUPATEN TASIKMALAYA',
            ],
            '302' => [
                'npsn' => '20268066',
                'nama' => 'SMKS NURUL ILMI KABUPATEN TASIKMALAYA',
            ],
            '303' => [
                'npsn' => '20210717',
                'nama' => 'SMAS PLUS NURUL ILMI KABUPATEN TASIKMALAYA',
            ],
            '304' => [
                'npsn' => '20258242',
                'nama' => 'SLBS BAG BC KURNIA KABUPATEN GARUT',
            ],
            '305' => [
                'npsn' => '20210710',
                'nama' => 'SMKS NUANSA MANGUNREJA KABUPATEN TASIKMALAYA',
            ],
            '306' => [
                'npsn' => '20268137',
                'nama' => 'SLBS BAG ABC YKS MANGUNREJA KABUPATEN TASIKMALAYA',
            ],
            '307' => [
                'npsn' => '20227466',
                'nama' => 'SMAN 11 GARUT KABUPATEN GARUT',
            ],
            '308' => [
                'npsn' => '20275996',
                'nama' => 'SMAS PLUS MARGAWATI GARUT KOTA KABUPATEN GARUT',
            ],
            '309' => [
                'npsn' => '20227441',
                'nama' => 'SMAS MUHAMMADIYAH 1 GARUT KABUPATEN GARUT',
            ],
            '310' => [
                'npsn' => '20210746',
                'nama' => 'SMAS AL HIDAYAH CUKANGKAWUNG KABUPATEN TASIKMALAYA',
            ],
            '311' => [
                'npsn' => '69947374',
                'nama' => 'SMKS AN NUR LEUWIDULANG KABUPATEN TASIKMALAYA',
            ],
            '312' => [
                'npsn' => '69934750',
                'nama' => 'SMKS YAPIM KABUPATEN TASIKMALAYA',
            ],
            '313' => [
                'npsn' => '60726847',
                'nama' => 'SMKS MANDIRI KABUPATEN TASIKMALAYA',
            ],
            '314' => [
                'npsn' => '69937714',
                'nama' => 'SMKS AL MUKHTARA KABUPATEN TASIKMALAYA',
            ],
            '315' => [
                'npsn' => '20257522',
                'nama' => 'SMKS YASBU AL QOMARIYAH KABUPATEN TASIKMALAYA',
            ],
            '316' => [
                'npsn' => '20270495',
                'nama' => 'SMKS BHAKTI KENCANA CILEUNYI KABUPATEN BANDUNG',
            ],
            '317' => [
                'npsn' => '70030337',
                'nama' => 'SMKS KESEHATAN RAJAWALI KABUPATEN BANDUNG BARAT',
            ],
            '318' => [
                'npsn' => '69972134',
                'nama' => 'SMKS BINA MUDA RAKSA KABUPATEN GARUT',
            ],
            '319' => [
                'npsn' => '69940395',
                'nama' => 'SMAS PLUS PERJUANGAN 78 KABUPATEN GARUT',
            ],
            '320' => [
                'npsn' => '20279870',
                'nama' => 'SMKS DARUL HIKMAH KABUPATEN TASIKMALAYA',
            ],
            '321' => [
                'npsn' => '69948933',
                'nama' => 'SMKS TERPADU AL BASYARIYAH KABUPATEN TASIKMALAYA',
            ],
            '322' => [
                'npsn' => '20210766',
                'nama' => 'SMAN 1 CIKATOMAS KABUPATEN TASIKMALAYA',
            ],
            '323' => [
                'npsn' => '20210767',
                'nama' => 'SMAN 1 CIKALONG KABUPATEN TASIKMALAYA',
            ],
            '324' => [
                'npsn' => '20251793',
                'nama' => 'SMAN 1 CILEUNYI KABUPATEN BANDUNG',
            ],
            '325' => [
                'npsn' => '20267919',
                'nama' => 'SMKS BAKTI NUSANTARA 666 KABUPATEN BANDUNG',
            ],
            '326' => [
                'npsn' => '20246367',
                'nama' => 'SMAN 1 PASAWAHAN KABUPATEN KUNINGAN',
            ],
            '327' => [
                'npsn' => '20238547',
                'nama' => 'SMAS ISLAM CIPICUNG KABUPATEN TASIKMALAYA',
            ],
            '328' => [
                'npsn' => '69812110',
                'nama' => 'SMKS YPAI RAHAYU KABUPATEN BANDUNG',
            ],
            '329' => [
                'npsn' => '69877297',
                'nama' => 'SMAS IT AL MUAWANAH CIGEDUG KABUPATEN GARUT',
            ],
            '330' => [
                'npsn' => '70029864',
                'nama' => 'SMAS IT DAARUL AMIIN KABUPATEN GARUT',
            ],
            '331' => [
                'npsn' => '20227482',
                'nama' => 'SMKS MANDIRI KADUNGORA KABUPATEN GARUT',
            ],
            '332' => [
                'npsn' => '20209210',
                'nama' => 'SMKS MUHAMMADIYAH KADUNGORA KABUPATEN GARUT',
            ],
            '333' => [
                'npsn' => '20258484',
                'nama' => 'SLBS HASRAT MULIA KABUPATEN BANDUNG',
            ],
            '334' => [
                'npsn' => '20258480',
                'nama' => 'SLBS DARUL MAARIF KABUPATEN BANDUNG',
            ],
            '335' => [
                'npsn' => '20252198',
                'nama' => 'SMAS TALENTA KABUPATEN BANDUNG',
            ],
            '336' => [
                'npsn' => '20227434',
                'nama' => 'SMAS AR RAHMAN KADUNGORA KABUPATEN GARUT',
            ],
            '337' => [
                'npsn' => '20258172',
                'nama' => 'SLBS BAG C PUSPA MENTARI KABUPATEN GARUT',
            ],
            '338' => [
                'npsn' => '69753308',
                'nama' => 'SMKS IKA KARTIKA KABUPATEN GARUT',
            ],
            '339' => [
                'npsn' => '60728545',
                'nama' => 'SMAS KRISTEN 3 BINA BAKTI KABUPATEN BANDUNG',
            ],
            '340' => [
                'npsn' => '69931788',
                'nama' => 'SMKS BHAKTI INSAN CENDEKIA KABUPATEN GARUT',
            ],
            '341' => [
                'npsn' => '69769422',
                'nama' => 'SMKS ISLAM IBNU HAJAR KABUPATEN GARUT',
            ],
            '342' => [
                'npsn' => '20209233',
                'nama' => 'SMKS NUURUL MUTTAQIIN CISURUPAN KABUPATEN GARUT',
            ],
            '343' => [
                'npsn' => '69907337',
                'nama' => 'SMAS IT ASSYIFA KABUPATEN GARUT',
            ],
            '344' => [
                'npsn' => '20227445',
                'nama' => 'SMAS MUHAMMADIYAH KADUNGORA KABUPATEN GARUT',
            ],
            '345' => [
                'npsn' => '20267756',
                'nama' => 'SMKS MUHAMMADIYAH HARUMANSARI KABUPATEN GARUT',
            ],
            '346' => [
                'npsn' => '20279893',
                'nama' => 'SMKS MUHAMMADIYAH 3 KADUNGORA KABUPATEN GARUT',
            ],
            '347' => [
                'npsn' => '20270993',
                'nama' => 'SMKS MUHAMMADIYAH 2 KADUNGORA KABUPATEN GARUT',
            ],
            '348' => [
                'npsn' => '20270792',
                'nama' => 'SMAS MA ARIF KADUNGORA KABUPATEN GARUT',
            ],
            '349' => [
                'npsn' => '69934745',
                'nama' => 'SMAS PLUS AL MUBAROK KABUPATEN TASIKMALAYA',
            ],
            '350' => [
                'npsn' => '20254052',
                'nama' => 'SMKN 1 PEBAYURAN KABUPATEN BEKASI',
            ],
            '351' => [
                'npsn' => '69888462',
                'nama' => 'SMKS AL MADANI GARUT KABUPATEN GARUT',
            ],
            '352' => [
                'npsn' => '20209193',
                'nama' => 'SMAN 20 GARUT KABUPATEN GARUT',
            ],
            '353' => [
                'npsn' => '20270946',
                'nama' => 'SMKS AL MADANIYAH KABUPATEN TASIKMALAYA',
            ],
            '354' => [
                'npsn' => '20268845',
                'nama' => 'SMKS MIFTAHUL ULUM KABUPATEN TASIKMALAYA',
            ],
            '355' => [
                'npsn' => '20279871',
                'nama' => 'SMKS 3 LPPMRI CISAYONG KABUPATEN TASIKMALAYA',
            ],
            '356' => [
                'npsn' => '69873570',
                'nama' => 'SMKS IGASARPINDAD KABUPATEN TASIKMALAYA',
            ],
            '357' => [
                'npsn' => '69788583',
                'nama' => 'SMKS TERPADU AL ISTIQOMAH KABUPATEN TASIKMALAYA',
            ],
            '358' => [
                'npsn' => '20272134',
                'nama' => 'SMKS PASUNDAN PADAHERANG KABUPATEN PANGANDARAN',
            ],
            '359' => [
                'npsn' => '69928466',
                'nama' => 'SMKS PLUS DARUNNAJAH PADAHERANG KABUPATEN PANGANDARAN',
            ],
            '360' => [
                'npsn' => '20227478',
                'nama' => 'SMKS TEKNOLOGI AL SALMAN GARUT KABUPATEN GARUT',
            ],
            '361' => [
                'npsn' => '20209196',
                'nama' => 'SMKS YPPT GARUT KABUPATEN GARUT',
            ],
            '362' => [
                'npsn' => '20227454',
                'nama' => 'SMAS YBKP3 TAROGONG KABUPATEN GARUT',
            ],
            '363' => [
                'npsn' => '20209186',
                'nama' => 'SMAS YPI PULOSARI LIMBANGAN KABUPATEN GARUT',
            ],
            '364' => [
                'npsn' => '69934717',
                'nama' => 'SMAS AT TAJDID BOARDING SCHOOL KABUPATEN TASIKMALAYA',
            ],
            '365' => [
                'npsn' => '69881316',
                'nama' => 'SMAS AL HASBILLAH CISOMPET KABUPATEN GARUT',
            ],
            '366' => [
                'npsn' => '20210740',
                'nama' => 'SMAN 1 SINGAPARNA KABUPATEN TASIKMALAYA',
            ],
            '367' => [
                'npsn' => '69900119',
                'nama' => 'SMAS PLUS AL MUQORROBIN CISOMPET KABUPATEN GARUT',
            ],
            '368' => [
                'npsn' => '20210779',
                'nama' => 'SMAS PESANTREN CINTAWANA KABUPATEN TASIKMALAYA',
            ],
            '369' => [
                'npsn' => '20210745',
                'nama' => 'SMAS ISLAM CIPASUNG KABUPATEN TASIKMALAYA',
            ],
            '370' => [
                'npsn' => '20210743',
                'nama' => 'SMAS KHZ MUSTHAFA SUKAMANAH KABUPATEN TASIKMALAYA',
            ],
            '371' => [
                'npsn' => '20268812',
                'nama' => 'SMKS SYAHIDA KABUPATEN TASIKMALAYA',
            ],
            '372' => [
                'npsn' => '69880249',
                'nama' => 'SLBS YAYASAN MITRA ISWARA KABUPATEN TASIKMALAYA',
            ],
            '373' => [
                'npsn' => '20262721',
                'nama' => 'SMKS NURUL WAFA KABUPATEN TASIKMALAYA',
            ],
            '374' => [
                'npsn' => '20238551',
                'nama' => 'SMKS PLUS AN NUUR KABUPATEN TASIKMALAYA',
            ],
            '375' => [
                'npsn' => '20212934',
                'nama' => 'SMKS YAMSIK KUNINGAN KABUPATEN KUNINGAN',
            ],
            '376' => [
                'npsn' => '20219259',
                'nama' => 'SMAS SWADAYA BANDUNG KOTA BANDUNG',
            ],
            '377' => [
                'npsn' => '69866096',
                'nama' => 'SMAS AL MINHAJ KABUPATEN BOGOR',
            ],
            '378' => [
                'npsn' => '20253086',
                'nama' => 'SMAS PASUNDAN 9 BANDUNG KOTA BANDUNG',
            ],
            '379' => [
                'npsn' => '20219773',
                'nama' => 'SMAS PASUNDAN 7 BANDUNG KOTA BANDUNG',
            ],
            '380' => [
                'npsn' => '20244755',
                'nama' => 'SMKN RAJAPOLAH KABUPATEN TASIKMALAYA',
            ],
            '381' => [
                'npsn' => '69758143',
                'nama' => 'SMKS ISLAM ATTURMUDZIYYAH GARUT KABUPATEN GARUT',
            ],
            '382' => [
                'npsn' => '20209244',
                'nama' => 'SMKS PASUNDAN 2 GARUT KABUPATEN GARUT',
            ],
            '383' => [
                'npsn' => '20211509',
                'nama' => 'SMAN 1 RANCAH KABUPATEN CIAMIS',
            ],
            '384' => [
                'npsn' => '20263130',
                'nama' => 'SLBS BAG C YSDP BAGOR RANCAH KABUPATEN CIAMIS',
            ],
            '385' => [
                'npsn' => '69899135',
                'nama' => 'SMAS TUNAS NUSANTARA KABUPATEN TASIKMALAYA',
            ],
            '386' => [
                'npsn' => '20244749',
                'nama' => 'SMKS DAARUL HIDAYAH KABUPATEN TASIKMALAYA',
            ],
            '387' => [
                'npsn' => '69753590',
                'nama' => 'SMKS ISLAM TERPADU MARIFA KABUPATEN TASIKMALAYA',
            ],
            '388' => [
                'npsn' => '69758461',
                'nama' => 'SMAS NURUL FALAH KABUPATEN TASIKMALAYA',
            ],
            '389' => [
                'npsn' => '20253894',
                'nama' => 'SMAS KRISTEN GAMALIEL KOTA BANDUNG',
            ],
            '390' => [
                'npsn' => '20268810',
                'nama' => 'SMKS HUMANIKA 1 KABUPATEN BOGOR',
            ],
            '391' => [
                'npsn' => '20244748',
                'nama' => 'SMKS AS SAABIQ KABUPATEN TASIKMALAYA',
            ],
            '392' => [
                'npsn' => '20268062',
                'nama' => 'SMKS KESEHATAN KH MOH ILYAS RUHIAT KABUPATEN TASIKMALAYA',
            ],
            '393' => [
                'npsn' => '20210704',
                'nama' => 'SMKS YPC TASIKMALAYA KABUPATEN TASIKMALAYA',
            ],
            '394' => [
                'npsn' => '20268018',
                'nama' => 'SMKS IT AL MUQOWAMAH KABUPATEN TASIKMALAYA',
            ],
            '395' => [
                'npsn' => '20210761',
                'nama' => 'SMAS MUHAMMADIYAH SINGAPARNA KABUPATEN TASIKMALAYA',
            ],
            '396' => [
                'npsn' => '69949625',
                'nama' => 'SMKS ISLAM MADANI KABUPATEN TASIKMALAYA',
            ],
            '397' => [
                'npsn' => '20219266',
                'nama' => 'SMAS ST ANGELA KOTA BANDUNG',
            ],
            '398' => [
                'npsn' => '20219288',
                'nama' => 'SMKS BPP KOTA BANDUNG',
            ],
            '399' => [
                'npsn' => '20219158',
                'nama' => 'SMKS PASUNDAN 3 BANDUNG KOTA BANDUNG',
            ],
            '400' => [
                'npsn' => '20211499',
                'nama' => 'SMAN 3 CIAMIS KABUPATEN CIAMIS',
            ],
            '401' => [
                'npsn' => '20227473',
                'nama' => 'SMAN 14 GARUT KABUPATEN GARUT',
            ],
            '402' => [
                'npsn' => '20263125',
                'nama' => 'SLBN KABUPATEN CIAMIS',
            ],
            '403' => [
                'npsn' => '20209374',
                'nama' => 'SMAS DARUSSALAM WANARAJA KABUPATEN GARUT',
            ],
            '404' => [
                'npsn' => '20274173',
                'nama' => 'SMAS MUHAMMADIYAH WANARAJA KABUPATEN GARUT',
            ],
            '405' => [
                'npsn' => '20258174',
                'nama' => 'SLBS NUSANTARA KITA KABUPATEN GARUT',
            ],
            '406' => [
                'npsn' => '20269135',
                'nama' => 'SMKS SUKARAJA KABUPATEN TASIKMALAYA',
            ],
            '407' => [
                'npsn' => '20251798',
                'nama' => 'SMAS PLUS INFORMATIKA KABUPATEN CIAMIS',
            ],
            '408' => [
                'npsn' => '20254625',
                'nama' => 'SMKS BHAKTI KENCANA CIAMIS KABUPATEN CIAMIS',
            ],
            '409' => [
                'npsn' => '20219804',
                'nama' => 'SMAS MUHAMMADIYAH 4 KOTA BANDUNG',
            ],
            '410' => [
                'npsn' => '20212956',
                'nama' => 'SMAN 2 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '411' => [
                'npsn' => '20262716',
                'nama' => 'SMAN 1 BANTARKALONG KABUPATEN TASIKMALAYA',
            ],
            '412' => [
                'npsn' => '20279815',
                'nama' => 'SMKS BINA DHARMA KOTA BANDUNG',
            ],
            '413' => [
                'npsn' => '20219292',
                'nama' => 'SMKS ICB CINTA TEKNIKA BANDUNG KOTA BANDUNG',
            ],
            '414' => [
                'npsn' => '20219299',
                'nama' => 'SMKS INFORMATIKA BANDUNG KOTA BANDUNG',
            ],
            '415' => [
                'npsn' => '20255008',
                'nama' => 'SMAN 2 BANJARSARI KABUPATEN CIAMIS',
            ],
            '416' => [
                'npsn' => '70011500',
                'nama' => 'SMAS KYAI HAJI SAEPUDIN ZUHRI KABUPATEN TASIKMALAYA',
            ],
            '417' => [
                'npsn' => '20268063',
                'nama' => 'SMKS KESEHATAN MIFTAHUNNAJAH KABUPATEN TASIKMALAYA',
            ],
            '418' => [
                'npsn' => '20241184',
                'nama' => 'SMKS AL HUDA SARIWANGI KABUPATEN TASIKMALAYA',
            ],
            '419' => [
                'npsn' => '69758462',
                'nama' => 'SMAS AL IDRIS KABUPATEN TASIKMALAYA',
            ],
            '420' => [
                'npsn' => '69953679',
                'nama' => 'SMKS TARUNA JAYA BANJARSARI KABUPATEN CIAMIS',
            ],
            '421' => [
                'npsn' => '20254624',
                'nama' => 'SMKS SILIWANGI AMS BANJARSARI KABUPATEN CIAMIS',
            ],
            '422' => [
                'npsn' => '20263274',
                'nama' => 'SMAS AL HASAN BANJARSARI KABUPATEN CIAMIS',
            ],
            '423' => [
                'npsn' => '69882355',
                'nama' => 'SMAS TERPADU DAMPASAN KABUPATEN CIAMIS',
            ],
            '424' => [
                'npsn' => '20219801',
                'nama' => 'SMAS MUTIARA 1 KOTA BANDUNG',
            ],
            '425' => [
                'npsn' => '20212938',
                'nama' => 'SMAN 1 CIGUGUR KABUPATEN KUNINGAN',
            ],
            '426' => [
                'npsn' => '20258299',
                'nama' => 'SMKS ASSHIDDIQIYAH KABUPATEN GARUT',
            ],
            '427' => [
                'npsn' => '69962739',
                'nama' => 'SMKS IT RABBANY KABUPATEN GARUT',
            ],
            '428' => [
                'npsn' => '69934741',
                'nama' => 'SMAS PLUS KOMARULAHYAR KABUPATEN TASIKMALAYA',
            ],
            '429' => [
                'npsn' => '20210774',
                'nama' => 'SMAS AL MUKROM KABUPATEN TASIKMALAYA',
            ],
            '430' => [
                'npsn' => '20268846',
                'nama' => 'SMKS PST AL HUDA KABUPATEN TASIKMALAYA',
            ],
            '431' => [
                'npsn' => '20229253',
                'nama' => 'SMKS DARUL ULUM KARANGTAWANG KABUPATEN KUNINGAN',
            ],
            '432' => [
                'npsn' => '20265529',
                'nama' => 'SMKS CHEMICA BANDUNG KOTA BANDUNG',
            ],
            '433' => [
                'npsn' => '20265536',
                'nama' => 'SMKS MUHAMMADIYAH 4 BANDUNG KOTA BANDUNG',
            ],
            '434' => [
                'npsn' => '20265530',
                'nama' => 'SMKS CITRA PEMBAHARUAN KOTA BANDUNG',
            ],
            '435' => [
                'npsn' => '69775760',
                'nama' => 'SMKS MAARIF BANYURESMI KABUPATEN GARUT',
            ],
            '436' => [
                'npsn' => '20209209',
                'nama' => 'SMKS MUHAMMADIYAH GARUT KABUPATEN GARUT',
            ],
            '437' => [
                'npsn' => '20227447',
                'nama' => 'SMAS PASUNDAN GARUT KABUPATEN GARUT',
            ],
            '438' => [
                'npsn' => '20209204',
                'nama' => 'SMKS GILANG KENCANA 2 GARUT KABUPATEN GARUT',
            ],
            '439' => [
                'npsn' => '20227484',
                'nama' => 'SMKS PGRI GARUT KABUPATEN GARUT',
            ],
            '440' => [
                'npsn' => '20211497',
                'nama' => 'SMKS MUHAMMADIYAH 1 BANJARSARI KABUPATEN CIAMIS',
            ],
            '441' => [
                'npsn' => '69995497',
                'nama' => 'SMKS MA`ARIF NU BANJARSARI KABUPATEN CIAMIS',
            ],
            '442' => [
                'npsn' => '20258211',
                'nama' => 'SLBS BAG ABC MUHAMMADIYAH BANJARSARI KABUPATEN CIAMIS',
            ],
            '443' => [
                'npsn' => '20233753',
                'nama' => 'SMAS DARUSSALAM KANDANGHAUR KABUPATEN INDRAMAYU',
            ],
            '444' => [
                'npsn' => '20219148',
                'nama' => 'SMKS PASUNDAN 2 BANDUNG KOTA BANDUNG',
            ],
            '445' => [
                'npsn' => '20227485',
                'nama' => 'SMKS 1 SATU MARET GARUT KABUPATEN GARUT',
            ],
            '446' => [
                'npsn' => '70035109',
                'nama' => 'SMAS BOARDING AR ROHMAT KABUPATEN GARUT',
            ],
            '447' => [
                'npsn' => '69875536',
                'nama' => 'SMKS AL HUDA KABUPATEN GARUT',
            ],
            '448' => [
                'npsn' => '69978332',
                'nama' => 'SMKS BINA KARYA MANDIRI KABUPATEN GARUT',
            ],
            '449' => [
                'npsn' => '69760679',
                'nama' => 'SMAS PLUS NURUL IMAN KABUPATEN GARUT',
            ],
            '450' => [
                'npsn' => '20210707',
                'nama' => 'SMKS PLUS YSB SURYALAYA KABUPATEN TASIKMALAYA',
            ],
            '451' => [
                'npsn' => '20210770',
                'nama' => 'SMAS SERBA BAKTI KABUPATEN TASIKMALAYA',
            ],
            '452' => [
                'npsn' => '69899563',
                'nama' => 'SLBS PLUS ABCD BINA WARGA KABUPATEN TASIKMALAYA',
            ],
            '453' => [
                'npsn' => '69934724',
                'nama' => 'SMKS CITRA MANDIRI KABUPATEN TASIKMALAYA',
            ],
            '454' => [
                'npsn' => '20219787',
                'nama' => 'SMAS MUTIARA 2 BANDUNG KOTA BANDUNG',
            ],
            '455' => [
                'npsn' => '20219760',
                'nama' => 'SMAS ADVENT CIMINDI BANDUNG KOTA BANDUNG',
            ],
            '456' => [
                'npsn' => '20212955',
                'nama' => 'SMAN 3 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '457' => [
                'npsn' => '20212961',
                'nama' => 'SMAN 1 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '458' => [
                'npsn' => '20252287',
                'nama' => 'SMAN 1 CIMARAGAS KABUPATEN CIAMIS',
            ],
            '459' => [
                'npsn' => '69788577',
                'nama' => 'SMAS SURURON KABUPATEN GARUT',
            ],
            '460' => [
                'npsn' => '69753312',
                'nama' => 'SMKS IT NURUL AMIEN KABUPATEN GARUT',
            ],
            '461' => [
                'npsn' => '70026552',
                'nama' => 'SMAS GEMAYASIH BOARDING SCHOOL KABUPATEN TASIKMALAYA',
            ],
            '462' => [
                'npsn' => '70034317',
                'nama' => 'SMAS TERPADU NADHIRUL ULUM KABUPATEN TASIKMALAYA',
            ],
            '463' => [
                'npsn' => '20276099',
                'nama' => 'SMKS BINA BANGSA KABUPATEN TASIKMALAYA',
            ],
            '464' => [
                'npsn' => '20210713',
                'nama' => 'SMKS CIJANGKAR KABUPATEN TASIKMALAYA',
            ],
            '465' => [
                'npsn' => '70023547',
                'nama' => 'SMAS TUNAS UNGGUL KOTA BANDUNG',
            ],
            '466' => [
                'npsn' => '69759058',
                'nama' => 'SMKS AL HADI KOTA BANDUNG',
            ],
            '467' => [
                'npsn' => '20219762',
                'nama' => 'SMAS PMB KOTA BANDUNG',
            ],
            '468' => [
                'npsn' => '20219757',
                'nama' => 'SMAS AL HADI KOTA BANDUNG',
            ],
            '469' => [
                'npsn' => '20254282',
                'nama' => 'SMKS MULIA JAYA ASSADIYYAH KOTA BEKASI',
            ],
            '470' => [
                'npsn' => '20255285',
                'nama' => 'SMKS AL AMIN KABUPATEN GARUT',
            ],
            '471' => [
                'npsn' => '69944359',
                'nama' => 'SMAS NURUL AMIN KABUPATEN GARUT',
            ],
            '472' => [
                'npsn' => '20227450',
                'nama' => 'SMAS PGRI CIBATU KABUPATEN GARUT',
            ],
            '473' => [
                'npsn' => '20251810',
                'nama' => 'SMKN 1 RAJADESA KABUPATEN CIAMIS',
            ],
            '474' => [
                'npsn' => '20210711',
                'nama' => 'SMKN BANTARKALONG KABUPATEN TASIKMALAYA',
            ],
            '475' => [
                'npsn' => '20209183',
                'nama' => 'SMAN 3 GARUT KABUPATEN GARUT',
            ],
            '476' => [
                'npsn' => '69949643',
                'nama' => 'SMKS PLUS IBNU HAJAR KABUPATEN TASIKMALAYA',
            ],
            '477' => [
                'npsn' => '69786494',
                'nama' => 'SLBS AS SURUR RAJADESA KABUPATEN CIAMIS',
            ],
            '478' => [
                'npsn' => '70006980',
                'nama' => 'SMAS TERPADU AL MU`AAWANAH KABUPATEN CIAMIS',
            ],
            '479' => [
                'npsn' => '20217093',
                'nama' => 'SMAS NURUL GINA ABIDIN CISALAK KABUPATEN SUBANG',
            ],
            '480' => [
                'npsn' => '20219751',
                'nama' => 'SMAS ADVENT KOTA BANDUNG',
            ],
            '481' => [
                'npsn' => '20211512',
                'nama' => 'SMKN 2 CIAMIS KABUPATEN CIAMIS',
            ],
            '482' => [
                'npsn' => '69899300',
                'nama' => 'SMKS AS SALWA LIMBANGAN KABUPATEN GARUT',
            ],
            '483' => [
                'npsn' => '69756585',
                'nama' => 'SMKS IT AL MAMUN KABUPATEN GARUT',
            ],
            '484' => [
                'npsn' => '20271171',
                'nama' => 'SMKS KESEHATAN BHAKTI KENCANA BALUBUR LIMBANGAN KABUPATEN GARUT',
            ],
            '485' => [
                'npsn' => '69981950',
                'nama' => 'SMKS PELITA NUSA LIMBANGAN KABUPATEN GARUT',
            ],
            '486' => [
                'npsn' => '20211492',
                'nama' => 'SMKS HEPWETI CIAMIS KABUPATEN CIAMIS',
            ],
            '487' => [
                'npsn' => '20211529',
                'nama' => 'SMKS LPS 1 CIAMIS KABUPATEN CIAMIS',
            ],
            '488' => [
                'npsn' => '20251831',
                'nama' => 'SMKS LPS 2 CIAMIS KABUPATEN CIAMIS',
            ],
            '489' => [
                'npsn' => '69862428',
                'nama' => 'SMKS PETERNAKAN JUARA SUBANG KABUPATEN SUBANG',
            ],
            '490' => [
                'npsn' => '20219267',
                'nama' => 'SMAS RAJAWALI KOTA BANDUNG',
            ],
            '491' => [
                'npsn' => '69882370',
                'nama' => 'SMAS PELITA NUSANTARA KOTA BANDUNG',
            ],
            '492' => [
                'npsn' => '69755545',
                'nama' => 'SMKS MANBAUL HUDA KABUPATEN GARUT',
            ],
            '493' => [
                'npsn' => '69896046',
                'nama' => 'SMAS SITI AISYAH KADUNGORA KABUPATEN GARUT',
            ],
            '494' => [
                'npsn' => '20212951',
                'nama' => 'SMAN 1 GARAWANGI KABUPATEN KUNINGAN',
            ],
            '495' => [
                'npsn' => '69989797',
                'nama' => 'SMAS ISLAM TERPADU ANNISA KADUNGORA KABUPATEN GARUT',
            ],
            '496' => [
                'npsn' => '69955031',
                'nama' => 'SMKS MUTIARA BANGSA KABUPATEN GARUT',
            ],
            '497' => [
                'npsn' => '20258236',
                'nama' => 'SLBS BAG BC YGP SELAAWI GARUT KABUPATEN GARUT',
            ],
            '498' => [
                'npsn' => '69948482',
                'nama' => 'SMKS IT BINA NUSANTARA KABUPATEN GARUT',
            ],
            '499' => [
                'npsn' => '69967026',
                'nama' => 'SMAS NANJUNG HARAPAN KABUPATEN GARUT',
            ],
            '500' => [
                'npsn' => '20254647',
                'nama' => 'SMKS MAARIF SABILUNNAJAT RANCAH KABUPATEN CIAMIS',
            ],
            '501' => [
                'npsn' => '20252882',
                'nama' => 'SMAS IT AL MULTAZAM KABUPATEN KUNINGAN',
            ],
            '502' => [
                'npsn' => '20219327',
                'nama' => 'SMAN 3 BANDUNG KOTA BANDUNG',
            ],
            '503' => [
                'npsn' => '20219215',
                'nama' => 'SMKS R A KARTINI KOTA BANDUNG',
            ],
            '504' => [
                'npsn' => '20219726',
                'nama' => 'SMAS KARTIKA XIX 3 KOTA BANDUNG',
            ],
            '505' => [
                'npsn' => '20219285',
                'nama' => 'SMKS DHYANA SAKTI BANDUNG KOTA BANDUNG',
            ],
            '506' => [
                'npsn' => '20253837',
                'nama' => 'SMKS EKUIN PANGERAN JAYAKARTA KOTA BEKASI',
            ],
            '507' => [
                'npsn' => '69899806',
                'nama' => 'SMKS AL HIKMAH 2 GARUT KABUPATEN GARUT',
            ],
            '508' => [
                'npsn' => '69753569',
                'nama' => 'SMKS BAKTI KUSUMAH KABUPATEN GARUT',
            ],
            '509' => [
                'npsn' => '20252465',
                'nama' => 'SMAS PLUS DARUSSALAM KABUPATEN CIAMIS',
            ],
            '510' => [
                'npsn' => '20219765',
                'nama' => 'SMAS PASUNDAN 3 BANDUNG KOTA BANDUNG',
            ],
            '511' => [
                'npsn' => '69949542',
                'nama' => 'SMKS AL ASYARIAH KABUPATEN CIAMIS',
            ],
            '512' => [
                'npsn' => '20237887',
                'nama' => 'SMKS TARUNA BANGSA KABUPATEN CIAMIS',
            ],
            '513' => [
                'npsn' => '20254627',
                'nama' => 'SMKS TERPADU YAKPIDATEK KABUPATEN CIAMIS',
            ],
            '514' => [
                'npsn' => '20253143',
                'nama' => 'SMKS YASIRA KABUPATEN CIAMIS',
            ],
            '515' => [
                'npsn' => '20252464',
                'nama' => 'SMAS AR RISSALAH KABUPATEN CIAMIS',
            ],
            '516' => [
                'npsn' => '20219272',
                'nama' => 'SMAS YWKA KOTA BANDUNG',
            ],
            '517' => [
                'npsn' => '20209377',
                'nama' => 'SMAS BAITUL HIKMAH TAROGONG KALER KABUPATEN GARUT',
            ],
            '518' => [
                'npsn' => '69759073',
                'nama' => 'SMAS BIDAYATUL FAIZIN CIKAJANG KABUPATEN GARUT',
            ],
            '519' => [
                'npsn' => '20210742',
                'nama' => 'SMAN 1 KARANGNUNGGAL KABUPATEN TASIKMALAYA',
            ],
            '520' => [
                'npsn' => '69949239',
                'nama' => 'SLBS MADHANI KABUPATEN GARUT',
            ],
            '521' => [
                'npsn' => '69964499',
                'nama' => 'SMAS YASHMIKA KABUPATEN GARUT',
            ],
            '522' => [
                'npsn' => '69788582',
                'nama' => 'SMKS 2 LPPM RI KARANGNUNGGAL KABUPATEN TASIKMALAYA',
            ],
            '523' => [
                'npsn' => '20210706',
                'nama' => 'SMKS SWADAYA KARANGNUNGGAL KABUPATEN TASIKMALAYA',
            ],
            '524' => [
                'npsn' => '20212935',
                'nama' => 'SMKS BUDI BHAKTI MANDIRANCAN KABUPATEN KUNINGAN',
            ],
            '525' => [
                'npsn' => '69949979',
                'nama' => 'SMKS AL MUMTAZ CIKALAHANG KABUPATEN CIREBON',
            ],
            '526' => [
                'npsn' => '20215025',
                'nama' => 'SMAS KRAMAT DUKUPUNTANG KABUPATEN CIREBON',
            ],
            '527' => [
                'npsn' => '69912321',
                'nama' => 'SMAS BANJARWANGI SATU KABUPATEN GARUT',
            ],
            '528' => [
                'npsn' => '20219240',
                'nama' => 'SMAN 13 BANDUNG KOTA BANDUNG',
            ],
            '529' => [
                'npsn' => '20269714',
                'nama' => 'SMKN 1 CIPATUJAH KABUPATEN TASIKMALAYA',
            ],
            '530' => [
                'npsn' => '69969191',
                'nama' => 'SLBN CIPATUJAH KABUPATEN TASIKMALAYA',
            ],
            '531' => [
                'npsn' => '20210764',
                'nama' => 'SMAN 1 CIPATUJAH KABUPATEN TASIKMALAYA',
            ],
            '532' => [
                'npsn' => '69954369',
                'nama' => 'SMKS AR RIDWAN CINTAMULYA KABUPATEN TASIKMALAYA',
            ],
            '533' => [
                'npsn' => '69953970',
                'nama' => 'SMKS IT DAARUL FALAAH KABUPATEN TASIKMALAYA',
            ],
            '534' => [
                'npsn' => '69935709',
                'nama' => 'SMKS AL AMIN KABUPATEN TASIKMALAYA',
            ],
            '535' => [
                'npsn' => '69907851',
                'nama' => 'SMKS MA ARIF NU CIDOLOG KABUPATEN CIAMIS',
            ],
            '536' => [
                'npsn' => '69949770',
                'nama' => 'SMKS JAYA NUSANTARA KABUPATEN BEKASI',
            ],
            '537' => [
                'npsn' => '20258168',
                'nama' => 'SLBS BAG C YKB KAB GARUT KABUPATEN GARUT',
            ],
            '538' => [
                'npsn' => '20214993',
                'nama' => 'SMAN 1 LOSARI KABUPATEN CIREBON',
            ],
            '539' => [
                'npsn' => '69856919',
                'nama' => 'SMAS PLUS AL FURQON CIBIUK KABUPATEN GARUT',
            ],
            '540' => [
                'npsn' => '69956437',
                'nama' => 'SLBS AN NURFALAH KABUPATEN GARUT',
            ],
            '541' => [
                'npsn' => '20262102',
                'nama' => 'SMKS MUHAMMADIYAH CIBIUK KABUPATEN GARUT',
            ],
            '542' => [
                'npsn' => '69757364',
                'nama' => 'SMKS ISLAM AS SALAFIYAH CIBIUK KABUPATEN GARUT',
            ],
            '543' => [
                'npsn' => '20212943',
                'nama' => 'SMAS MANBAUL ULUM KABUPATEN KUNINGAN',
            ],
            '544' => [
                'npsn' => '20247269',
                'nama' => 'SMKS BAKTI INDONESIA KABUPATEN KUNINGAN',
            ],
            '545' => [
                'npsn' => '20214806',
                'nama' => 'SMKS DARUL FALAH LOSARI KABUPATEN CIREBON',
            ],
            '546' => [
                'npsn' => '20279948',
                'nama' => 'SLBS MUTIARA BUNDA KABUPATEN CIREBON',
            ],
            '547' => [
                'npsn' => '20270754',
                'nama' => 'SMKS AL WASLIYAH SUMBER KABUPATEN CIREBON',
            ],
            '548' => [
                'npsn' => '69725569',
                'nama' => 'SMKS WIRAGUNA LIMBANGAN KABUPATEN GARUT',
            ],
            '549' => [
                'npsn' => '20227432',
                'nama' => 'SMAS AL FATAH LIMBANGAN KABUPATEN GARUT',
            ],
            '550' => [
                'npsn' => '69831561',
                'nama' => 'SMKS BINA SISWA MANDIRI BL. LIMBANGAN KABUPATEN GARUT',
            ],
            '551' => [
                'npsn' => '69760659',
                'nama' => 'SMKS AS SYUKRON BL. LIMBANGAN KABUPATEN GARUT',
            ],
            '552' => [
                'npsn' => '69953764',
                'nama' => 'SLBS AL HASANI LIMBANGAN KABUPATEN GARUT',
            ],
            '553' => [
                'npsn' => '20269970',
                'nama' => 'SLBS AL ICHLAS JAYARATU KABUPATEN TASIKMALAYA',
            ],
            '554' => [
                'npsn' => '20215028',
                'nama' => 'SLBS BAG B BERINGIN BHAKTI KABUPATEN CIREBON',
            ],
            '555' => [
                'npsn' => '20215031',
                'nama' => 'SLBS BAG C BERINGIN BHAKTI KABUPATEN CIREBON',
            ],
            '556' => [
                'npsn' => '20215017',
                'nama' => 'SLBS BAG A BERINGIN BHAKTI KABUPATEN CIREBON',
            ],
            '557' => [
                'npsn' => '20268562',
                'nama' => 'SMKS SATYA MANDALA KABUPATEN CIREBON',
            ],
            '558' => [
                'npsn' => '20271320',
                'nama' => 'SMKS AS SYAFIIYAH KABUPATEN TASIKMALAYA',
            ],
            '559' => [
                'npsn' => '69888870',
                'nama' => 'SLBS SYIARUL MUSLIMIN KABUPATEN GARUT',
            ],
            '560' => [
                'npsn' => '20268133',
                'nama' => 'SLBN CINEAM KABUPATEN TASIKMALAYA',
            ],
            '561' => [
                'npsn' => '20210765',
                'nama' => 'SMAN 1 CINEAM KABUPATEN TASIKMALAYA',
            ],
            '562' => [
                'npsn' => '69754618',
                'nama' => 'SMKS TEKNOLOGI MANDIRI KABUPATEN GARUT',
            ],
            '563' => [
                'npsn' => '20212908',
                'nama' => 'SMKS PERTIWI KUNINGAN KABUPATEN KUNINGAN',
            ],
            '564' => [
                'npsn' => '20270923',
                'nama' => 'SMAS BINAUL UMMAH KABUPATEN KUNINGAN',
            ],
            '565' => [
                'npsn' => '20258324',
                'nama' => 'SLBS AL ZAKIYAH KLANGENAN KABUPATEN CIREBON',
            ],
            '566' => [
                'npsn' => '69948128',
                'nama' => 'SMKS YAPENAS KABUPATEN CIREBON',
            ],
            '567' => [
                'npsn' => '20214998',
                'nama' => 'SMAS PGRI KLANGENAN KABUPATEN CIREBON',
            ],
            '568' => [
                'npsn' => '69947787',
                'nama' => 'SMKS HUBBUL WATHON KABUPATEN TASIKMALAYA',
            ],
            '569' => [
                'npsn' => '20209236',
                'nama' => 'SMAN 13 GARUT KABUPATEN GARUT',
            ],
            '570' => [
                'npsn' => '20209235',
                'nama' => 'SMKS PBI LIMBANGAN KABUPATEN GARUT',
            ],
            '571' => [
                'npsn' => '20227481',
                'nama' => 'SMKS KRIJA BHAKTI UTAMA KABUPATEN GARUT',
            ],
            '572' => [
                'npsn' => '20214981',
                'nama' => 'SMAN 1 SURANENGGALA KABUPATEN CIREBON',
            ],
            '573' => [
                'npsn' => '69874083',
                'nama' => 'SMKS KARYA PUTRA MANGGALA KABUPATEN TASIKMALAYA',
            ],
            '574' => [
                'npsn' => '20210763',
                'nama' => 'SMAN 1 JATIWARAS KABUPATEN TASIKMALAYA',
            ],
            '575' => [
                'npsn' => '20227455',
                'nama' => 'SMAS YKBBB LELES KABUPATEN GARUT',
            ],
            '576' => [
                'npsn' => '20257143',
                'nama' => 'SMKS SWADAYA BOJONGASIH KABUPATEN TASIKMALAYA',
            ],
            '577' => [
                'npsn' => '69753509',
                'nama' => 'SMAS IT MIFTAHULHUDA KABUPATEN TASIKMALAYA',
            ],
            '578' => [
                'npsn' => '20244753',
                'nama' => 'SMKS YPI KHOERUL FALAH JOMPONG KABUPATEN TASIKMALAYA',
            ],
            '579' => [
                'npsn' => '20254606',
                'nama' => 'SMKS AL FALAH TANJUNGJAYA KABUPATEN TASIKMALAYA',
            ],
            '580' => [
                'npsn' => '69786374',
                'nama' => 'SMKS SUKAPURA KABUPATEN TASIKMALAYA',
            ],
            '581' => [
                'npsn' => '20268016',
                'nama' => 'SMKS AL MUAWWANAH KABUPATEN TASIKMALAYA',
            ],
            '582' => [
                'npsn' => '20254698',
                'nama' => 'SMKS MUHAMMADIYAH 3 JALAKSANA KABUPATEN KUNINGAN',
            ],
            '583' => [
                'npsn' => '20212914',
                'nama' => 'SMKS MUHAMMADIYAH 1 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '584' => [
                'npsn' => '20212952',
                'nama' => 'SMKS BINA KUNINGAN KABUPATEN KUNINGAN',
            ],
            '585' => [
                'npsn' => '69896045',
                'nama' => 'SMAS IT NURUL HUDA KAIMAS KABUPATEN GARUT',
            ],
            '586' => [
                'npsn' => '20253990',
                'nama' => 'SMKS AL MANSHURIYAH KABUPATEN TASIKMALAYA',
            ],
            '587' => [
                'npsn' => '69990975',
                'nama' => 'SMKS MUTIARA SALAWU KABUPATEN TASIKMALAYA',
            ],
            '588' => [
                'npsn' => '20210780',
                'nama' => 'SMAN 1 SARIWANGI KABUPATEN TASIKMALAYA',
            ],
            '589' => [
                'npsn' => '20222311',
                'nama' => 'SMAN 6 CIREBON KOTA CIREBON',
            ],
            '590' => [
                'npsn' => '70038414',
                'nama' => 'SMAS QUR`AN PESANTREN CIPANSOR KABUPATEN TASIKMALAYA',
            ],
            '591' => [
                'npsn' => '69920674',
                'nama' => 'SMKS MA ARIF NU TARBIYATUL HUDA CIMARAGAS KABUPATEN CIAMIS',
            ],
            '592' => [
                'npsn' => '20258314',
                'nama' => 'SLBS BAG B PANCARAN KASIH KOTA CIREBON',
            ],
            '593' => [
                'npsn' => '20222163',
                'nama' => 'SMKS WAHIDIN CIREBON KOTA CIREBON',
            ],
            '594' => [
                'npsn' => '20222382',
                'nama' => 'SMAS ISLAM AL AZHAR CIREBON KOTA CIREBON',
            ],
            '595' => [
                'npsn' => '70011973',
                'nama' => 'SMAS HIGHFIELD KOTA CIREBON',
            ],
            '596' => [
                'npsn' => '69830500',
                'nama' => 'SMAS ISLAM BINA INSAN MANDIRI KABUPATEN TASIKMALAYA',
            ],
            '597' => [
                'npsn' => '20268916',
                'nama' => 'SMKS BINA MANDIRI KABUPATEN TASIKMALAYA',
            ],
            '598' => [
                'npsn' => '69870672',
                'nama' => 'SMAS TERPADU BABUSSALAM KABUPATEN TASIKMALAYA',
            ],
            '599' => [
                'npsn' => '69949489',
                'nama' => 'SMKS TERPADU AL MUNAWAROH KABUPATEN TASIKMALAYA',
            ],
            '600' => [
                'npsn' => '20247265',
                'nama' => 'SMKS ISLAM PANIIS KABUPATEN TASIKMALAYA',
            ],
            '601' => [
                'npsn' => '20229518',
                'nama' => 'SMKS SINGAPARNA KABUPATEN TASIKMALAYA',
            ],
            '602' => [
                'npsn' => '69948854',
                'nama' => 'SMKS AL FALAH KH. SYAMSUDIN KABUPATEN TASIKMALAYA',
            ],
            '603' => [
                'npsn' => '20256803',
                'nama' => 'SLBS BAG C YPALB PERWARI KUNINGAN KABUPATEN KUNINGAN',
            ],
            '604' => [
                'npsn' => '20256691',
                'nama' => 'SLBS BAG A PERWARI KABUPATEN KUNINGAN',
            ],
            '605' => [
                'npsn' => '20275333',
                'nama' => 'SMKS BAKTI BANGSA KOTA BANDUNG',
            ],
            '606' => [
                'npsn' => '69934738',
                'nama' => 'SMKS BAHRUL HUDA KABUPATEN TASIKMALAYA',
            ],
            '607' => [
                'npsn' => '69878671',
                'nama' => 'SMKS MANUK HEULANG KABUPATEN TASIKMALAYA',
            ],
            '608' => [
                'npsn' => '20229515',
                'nama' => 'SMAS MIFTAHUL ULUM KABUPATEN TASIKMALAYA',
            ],
            '609' => [
                'npsn' => '69775436',
                'nama' => 'SMKS ISLAM CIAWANG KABUPATEN TASIKMALAYA',
            ],
            '610' => [
                'npsn' => '20268134',
                'nama' => 'SLBS AISYIYAH LEUWISARI KABUPATEN TASIKMALAYA',
            ],
            '611' => [
                'npsn' => '20268924',
                'nama' => 'SMKS PASAWAHAN BANJARSARI KABUPATEN CIAMIS',
            ],
            '612' => [
                'npsn' => '20254643',
                'nama' => 'SMKS INFORMATIKA AL IHYA BANJARSARI KABUPATEN CIAMIS',
            ],
            '613' => [
                'npsn' => '20258232',
                'nama' => 'SLBS CIREMAI KASIH KABUPATEN MAJALENGKA',
            ],
            '614' => [
                'npsn' => '20208403',
                'nama' => 'SMKS PERKASA 1 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '615' => [
                'npsn' => '20235635',
                'nama' => 'SMKS GUNA CIPTA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '616' => [
                'npsn' => '69809508',
                'nama' => 'SMAS PLUS PANCATENGAH KABUPATEN TASIKMALAYA',
            ],
            '617' => [
                'npsn' => '69873974',
                'nama' => 'SMKS WIDYA MUKTI KABUPATEN TASIKMALAYA',
            ],
            '618' => [
                'npsn' => '69934744',
                'nama' => 'SMAS GAZA KABUPATEN TASIKMALAYA',
            ],
            '619' => [
                'npsn' => '20254696',
                'nama' => 'SMKS BHAKTI HUSADA KUNINGAN KABUPATEN KUNINGAN',
            ],
            '620' => [
                'npsn' => '20256689',
                'nama' => 'SLBS BAG B YPALB PERWARI KABUPATEN KUNINGAN',
            ],
            '621' => [
                'npsn' => '70039210',
                'nama' => 'SMAS ISLAM PLUS BAITUSSALAM KUNINGAN KABUPATEN KUNINGAN',
            ],
            '622' => [
                'npsn' => '20235625',
                'nama' => 'SMAS AL MASOEM JATINANGOR KABUPATEN SUMEDANG',
            ],
            '623' => [
                'npsn' => '20219799',
                'nama' => 'SMAS LPPN KOTA BANDUNG',
            ],
            '624' => [
                'npsn' => '20219179',
                'nama' => 'SMKS MUTIARA BANDUNG KOTA BANDUNG',
            ],
            '625' => [
                'npsn' => '20219281',
                'nama' => 'SMKS KIANSANTANG BANDUNG KOTA BANDUNG',
            ],
            '626' => [
                'npsn' => '69934728',
                'nama' => 'SMAS PLUS ASSYIFA KABUPATEN TASIKMALAYA',
            ],
            '627' => [
                'npsn' => '20268130',
                'nama' => 'SLBS BAG ABC PGRI MANONJAYA KABUPATEN TASIKMALAYA',
            ],
            '628' => [
                'npsn' => '20229517',
                'nama' => 'SMKS HUSNUL KHOTIMAH KABUPATEN TASIKMALAYA',
            ],
            '629' => [
                'npsn' => '69830137',
                'nama' => 'SMKS CENDIKIA UTAMA KABUPATEN KUNINGAN',
            ],
            '630' => [
                'npsn' => '20244677',
                'nama' => 'SMAS YADIKA KEDAWUNG KABUPATEN CIREBON',
            ],
            '631' => [
                'npsn' => '20215020',
                'nama' => 'SMAS PGRI KEDAWUNG KABUPATEN CIREBON',
            ],
            '632' => [
                'npsn' => '20244686',
                'nama' => 'SMKS FARMASI MUHAMMADIYAH CIREBON KABUPATEN CIREBON',
            ],
            '633' => [
                'npsn' => '20210744',
                'nama' => 'SMAS YAPPAS AL BAROKAH KABUPATEN TASIKMALAYA',
            ],
            '634' => [
                'npsn' => '20210714',
                'nama' => 'SMKS AS SHOFA KABUPATEN TASIKMALAYA',
            ],
            '635' => [
                'npsn' => '20271674',
                'nama' => 'SMKS PADAKEMBANG KABUPATEN TASIKMALAYA',
            ],
            '636' => [
                'npsn' => '70026792',
                'nama' => 'SMAS QUR`AN EL TAHFIDH KABUPATEN BOGOR',
            ],
            '637' => [
                'npsn' => '20244751',
                'nama' => 'SMKS KH A WAHAB MUHSIN KABUPATEN TASIKMALAYA',
            ],
            '638' => [
                'npsn' => '20279873',
                'nama' => 'SMKS NURUSSALAM KABUPATEN TASIKMALAYA',
            ],
            '639' => [
                'npsn' => '20268015',
                'nama' => 'SMKS AL AFSAR KABUPATEN TASIKMALAYA',
            ],
            '640' => [
                'npsn' => '69954106',
                'nama' => 'SMKS PLUS ASSYARI ATUL ULUUM KABUPATEN SUMEDANG',
            ],
            '641' => [
                'npsn' => '20254838',
                'nama' => 'SMKN PERTANIAN PEMBANGUNAN SUMEDANG KABUPATEN SUMEDANG',
            ],
            '642' => [
                'npsn' => '20268843',
                'nama' => 'SMAS PLUS AL FALAH KABUPATEN TASIKMALAYA',
            ],
            '643' => [
                'npsn' => '69947333',
                'nama' => 'SMKS IT BUSTANUL ULUM KABUPATEN TASIKMALAYA',
            ],
            '644' => [
                'npsn' => '20254079',
                'nama' => 'SMKS YASMI GEBANG KABUPATEN CIREBON',
            ],
            '645' => [
                'npsn' => '69944061',
                'nama' => 'SLBS SHAPPHIRA DIYANAH KABUPATEN SUMEDANG',
            ],
            '646' => [
                'npsn' => '69849577',
                'nama' => 'SMKS IT UMAMUL HUDA MALANGBONG KABUPATEN GARUT',
            ],
            '647' => [
                'npsn' => '20208419',
                'nama' => 'SMAN 1 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '648' => [
                'npsn' => '69899324',
                'nama' => 'SMKS YI CIRANGKONG MALANGBONG KABUPATEN GARUT',
            ],
            '649' => [
                'npsn' => '69786373',
                'nama' => 'SMAS TERPADU AL MUKHTAR KABUPATEN TASIKMALAYA',
            ],
            '650' => [
                'npsn' => '20253929',
                'nama' => 'SMKS AL JILANI BABAKAN KABUPATEN CIREBON',
            ],
            '651' => [
                'npsn' => '20214804',
                'nama' => 'SMKS ISDA BABAKAN KABUPATEN CIREBON',
            ],
            '652' => [
                'npsn' => '20227469',
                'nama' => 'SMAN 9 GARUT KABUPATEN GARUT',
            ],
            '653' => [
                'npsn' => '69964868',
                'nama' => 'SMKS PEMBANGUNAN INDONESIA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '654' => [
                'npsn' => '69762645',
                'nama' => 'SLBS SHOLAHUDDIN AL AYUBI KABUPATEN SUMEDANG',
            ],
            '655' => [
                'npsn' => '20235634',
                'nama' => 'SMKS BINA HARAPAN SUMEDANG KABUPATEN SUMEDANG',
            ],
            '656' => [
                'npsn' => '69983922',
                'nama' => 'SMAS ISLAM TERPADU AL FAQIH KABUPATEN TASIKMALAYA',
            ],
            '657' => [
                'npsn' => '69934911',
                'nama' => 'SMAS IT YASHUDA KABUPATEN TASIKMALAYA',
            ],
            '658' => [
                'npsn' => '20253274',
                'nama' => 'SMAS ISLAM TERPADU RIYADLUSSHOLIHIN KABUPATEN TASIKMALAYA',
            ],
            '659' => [
                'npsn' => '20214985',
                'nama' => 'SMAN 1 PALIMANAN KABUPATEN CIREBON',
            ],
            '660' => [
                'npsn' => '20269182',
                'nama' => 'SMKS AR RIZQI BINA INSANI KABUPATEN TASIKMALAYA',
            ],
            '661' => [
                'npsn' => '20229519',
                'nama' => 'SMKS YAPINDA KABUPATEN TASIKMALAYA',
            ],
            '662' => [
                'npsn' => '20210769',
                'nama' => 'SMAS YAB SUKARATU KABUPATEN TASIKMALAYA',
            ],
            '663' => [
                'npsn' => '20214805',
                'nama' => 'SMKS DWI BHAKTI CILEDUG CIREBON KABUPATEN CIREBON',
            ],
            '664' => [
                'npsn' => '20214979',
                'nama' => 'SMAS PGRI PALIMANAN KABUPATEN CIREBON',
            ],
            '665' => [
                'npsn' => '20270755',
                'nama' => 'SMKS BASURAGA KABUPATEN CIREBON',
            ],
            '666' => [
                'npsn' => '20210747',
                'nama' => 'SMAS AL MUCHTAR SINGAPARNA KABUPATEN TASIKMALAYA',
            ],
            '667' => [
                'npsn' => '69787428',
                'nama' => 'SMKS UMMUL QURO JATIWARAS KABUPATEN TASIKMALAYA',
            ],
            '668' => [
                'npsn' => '20244750',
                'nama' => 'SMKS FADRIS KABUPATEN TASIKMALAYA',
            ],
            '669' => [
                'npsn' => '69985006',
                'nama' => 'SLBS DARUSSALAM KABUPATEN TASIKMALAYA',
            ],
            '670' => [
                'npsn' => '20276075',
                'nama' => 'SMKS AL MANAR KABUPATEN CIAMIS',
            ],
            '671' => [
                'npsn' => '69766974',
                'nama' => 'SMKS AN NUUR PASALEMAN KABUPATEN CIREBON',
            ],
            '672' => [
                'npsn' => '69899937',
                'nama' => 'SMKS ILMAN NAFIAH CIREBON KABUPATEN CIREBON',
            ],
            '673' => [
                'npsn' => '20214820',
                'nama' => 'SMKS TEKNIK BAKTI PERSADA KABUPATEN CIREBON',
            ],
            '674' => [
                'npsn' => '20270756',
                'nama' => 'SMKS TARA DEPOK KABUPATEN CIREBON',
            ],
            '675' => [
                'npsn' => '20214818',
                'nama' => 'SMKS ULIL ALBAB DEPOK KABUPATEN CIREBON',
            ],
            '676' => [
                'npsn' => '20229514',
                'nama' => 'SMAS ITTIHADUL UMMAT KABUPATEN TASIKMALAYA',
            ],
            '677' => [
                'npsn' => '69934747',
                'nama' => 'SMAS TERPADU MANAHIJUL HUDA KABUPATEN TASIKMALAYA',
            ],
            '678' => [
                'npsn' => '20258065',
                'nama' => 'SMAS TERPADU DARUSSALAM KABUPATEN TASIKMALAYA',
            ],
            '679' => [
                'npsn' => '20219237',
                'nama' => 'SMAN 16 BANDUNG KOTA BANDUNG',
            ],
            '680' => [
                'npsn' => '20210772',
                'nama' => 'SMAS PLUS MUALLIMIN PERSIS RAJAPOLAH KABUPATEN TASIKMALAYA',
            ],
            '681' => [
                'npsn' => '20263118',
                'nama' => 'SLBS BINA HARAPAN BANGSA KABUPATEN CIAMIS',
            ],
            '682' => [
                'npsn' => '20238437',
                'nama' => 'SMAN 1 SINDANGKASIH KABUPATEN CIAMIS',
            ],
            '683' => [
                'npsn' => '69953926',
                'nama' => 'SMAS NANGTANG KABUPATEN TASIKMALAYA',
            ],
            '684' => [
                'npsn' => '69954465',
                'nama' => 'SMAS AL KAUTSAR KABUPATEN TASIKMALAYA',
            ],
            '685' => [
                'npsn' => '20210778',
                'nama' => 'SMAS PGRI 43 SINGAPARNA KABUPATEN TASIKMALAYA',
            ],
            '686' => [
                'npsn' => '20214992',
                'nama' => 'SMAN 1 PABEDILAN KABUPATEN CIREBON',
            ],
            '687' => [
                'npsn' => '69935711',
                'nama' => 'SMKS AL ISHLAH CINTARAJA KABUPATEN TASIKMALAYA',
            ],
            '688' => [
                'npsn' => '20244752',
                'nama' => 'SMKS DAARUL ABROOR KABUPATEN TASIKMALAYA',
            ],
            '689' => [
                'npsn' => '20247295',
                'nama' => 'SMAS ITUS JALAKSANA KABUPATEN KUNINGAN',
            ],
            '690' => [
                'npsn' => '20244688',
                'nama' => 'SMKS MUHAMMADIYAH LEMAHABANG CIREBON KABUPATEN CIREBON',
            ],
            '691' => [
                'npsn' => '20244683',
                'nama' => 'SMKS BINA WARGA LEMAHABANG KABUPATEN CIREBON',
            ],
            '692' => [
                'npsn' => '20244693',
                'nama' => 'SMKS SAHIDA LEMAHABANG KABUPATEN CIREBON',
            ],
            '693' => [
                'npsn' => '20244696',
                'nama' => 'SMKS WAHIDIN ARJAWINANGUN KABUPATEN CIREBON',
            ],
            '694' => [
                'npsn' => '69953066',
                'nama' => 'SMKS CIPTA KARYA KABUPATEN SUMEDANG',
            ],
            '695' => [
                'npsn' => '60726119',
                'nama' => 'SMKS BANI MAHFUD KABUPATEN SUMEDANG',
            ],
            '696' => [
                'npsn' => '20244700',
                'nama' => 'SMKN 1 LEMAHABANG KABUPATEN CIREBON',
            ],
            '697' => [
                'npsn' => '20267751',
                'nama' => 'SLBN KABUPATEN CIREBON',
            ],
            '698' => [
                'npsn' => '20212909',
                'nama' => 'SMKS PERTIWI CILIMUS KABUPATEN KUNINGAN',
            ],
            '699' => [
                'npsn' => '20200592',
                'nama' => 'SMKS MANDALA KABUPATEN BOGOR',
            ],
            '700' => [
                'npsn' => '20212940',
                'nama' => 'SMAS PUI CIWEDUS TIMBANG KABUPATEN KUNINGAN',
            ],
            '701' => [
                'npsn' => '20247190',
                'nama' => 'SMKS PUI CIKIJING KABUPATEN MAJALENGKA',
            ],
            '702' => [
                'npsn' => '20213882',
                'nama' => 'SLBS AL MUFTI KABUPATEN MAJALENGKA',
            ],
            '703' => [
                'npsn' => '20208401',
                'nama' => 'SMKS YPK SUMEDANG KABUPATEN SUMEDANG',
            ],
            '704' => [
                'npsn' => '20253782',
                'nama' => 'SMKS BHAKTI NUSANTARA KABUPATEN SUMEDANG',
            ],
            '705' => [
                'npsn' => '20235639',
                'nama' => 'SMKS PGRI 2 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '706' => [
                'npsn' => '69964370',
                'nama' => 'SMKS AN NUUR KABUPATEN SUMEDANG',
            ],
            '707' => [
                'npsn' => '20235548',
                'nama' => 'SLBS BAG ABC MUHAMMADIYAH SUMEDANG KABUPATEN SUMEDANG',
            ],
            '708' => [
                'npsn' => '70006541',
                'nama' => 'SMKS LOGISTIK SUMEDANG KABUPATEN SUMEDANG',
            ],
            '709' => [
                'npsn' => '69945389',
                'nama' => 'SLBS MUTIARA HATI BANGSA KABUPATEN CIREBON',
            ],
            '710' => [
                'npsn' => '20244671',
                'nama' => 'SMAS ISLAMIYAH WERU KABUPATEN CIREBON',
            ],
            '711' => [
                'npsn' => '69893742',
                'nama' => 'SMKS MAARIF AL MIZAN KABUPATEN MAJALENGKA',
            ],
            '712' => [
                'npsn' => '20214016',
                'nama' => 'SLBS BAG ABC MUHAMMADIYAH JATIWANGI KABUPATEN MAJALENGKA',
            ],
            '713' => [
                'npsn' => '20247179',
                'nama' => 'SMAS AL MIZAN JATIWANGI KABUPATEN MAJALENGKA',
            ],
            '714' => [
                'npsn' => '20219213',
                'nama' => 'SMKS PELITA 2 KOTA BANDUNG',
            ],
            '715' => [
                'npsn' => '20219295',
                'nama' => 'SMKS KENCANA BANDUNG KOTA BANDUNG',
            ],
            '716' => [
                'npsn' => '69944494',
                'nama' => 'SMKS IT AL KASYAF KABUPATEN SUKABUMI',
            ],
            '717' => [
                'npsn' => '69831998',
                'nama' => 'SMKS DAARUT TAUHID KABUPATEN BOGOR',
            ],
            '718' => [
                'npsn' => '69755456',
                'nama' => 'SMKS PERSADA CIEMAS KABUPATEN SUKABUMI',
            ],
            '719' => [
                'npsn' => '69772603',
                'nama' => 'SMKN 1 PUNCAK CISARUA KABUPATEN BOGOR',
            ],
            '720' => [
                'npsn' => '69725991',
                'nama' => 'SMKS SIMA BANGSA DEPOK KABUPATEN CIREBON',
            ],
            '721' => [
                'npsn' => '69949974',
                'nama' => 'SMKS ULUMUDIN 2 SUSUKAN KABUPATEN CIREBON',
            ],
            '722' => [
                'npsn' => '20257548',
                'nama' => 'SMKS ULUMUDDIN SUSUKAN KABUPATEN CIREBON',
            ],
            '723' => [
                'npsn' => '69950622',
                'nama' => 'SMKS NU KELAUTAN KAPLONGAN KABUPATEN INDRAMAYU',
            ],
            '724' => [
                'npsn' => '20216203',
                'nama' => 'SMAS MUHAMMADIYAH KARANGAMPEL KABUPATEN INDRAMAYU',
            ],
            '725' => [
                'npsn' => '20271073',
                'nama' => 'SMKS PGRI KARANGAMPEL KABUPATEN INDRAMAYU',
            ],
            '726' => [
                'npsn' => '69893428',
                'nama' => 'SMKS PELITA MANDIRI JALANCAGAK KABUPATEN SUBANG',
            ],
            '727' => [
                'npsn' => '69920763',
                'nama' => 'SMKS BUDI AGUNG JALANCAGAK KABUPATEN SUBANG',
            ],
            '728' => [
                'npsn' => '69967270',
                'nama' => 'SMAS IT DARUL ULUM KUMPAY KABUPATEN SUBANG',
            ],
            '729' => [
                'npsn' => '20270484',
                'nama' => 'SMAS MODERN RIYADHUL JALANCAGAK KABUPATEN SUBANG',
            ],
            '730' => [
                'npsn' => '20258396',
                'nama' => 'SMAS IT AS SYIFA BOARDING SCHOOL KABUPATEN SUBANG',
            ],
            '731' => [
                'npsn' => '20256802',
                'nama' => 'SLBN TARUNA MANDIRI KABUPATEN KUNINGAN',
            ],
            '732' => [
                'npsn' => '20258391',
                'nama' => 'SMKS NU WARGABINANGUN KABUPATEN CIREBON',
            ],
            '733' => [
                'npsn' => '69757511',
                'nama' => 'SMAS NU TENAJAR KIDUL KABUPATEN INDRAMAYU',
            ],
            '734' => [
                'npsn' => '20252154',
                'nama' => 'SMAS PERJUANGAN DWI WARNA KABUPATEN INDRAMAYU',
            ],
            '735' => [
                'npsn' => '69888774',
                'nama' => 'SMKS BANI MASUM KABUPATEN SUBANG',
            ],
            '736' => [
                'npsn' => '69770470',
                'nama' => 'SMKS BUKANAGARA KABUPATEN SUBANG',
            ],
            '737' => [
                'npsn' => '20216949',
                'nama' => 'SLBS KANDAGA BINA BANGSA CISALAK KABUPATEN SUBANG',
            ],
            '738' => [
                'npsn' => '20264739',
                'nama' => 'SMKS AL MUBAROK CISALAK KABUPATEN SUBANG',
            ],
            '739' => [
                'npsn' => '69875559',
                'nama' => 'SMKS ISLAM LEUWINUTUG KABUPATEN SUBANG',
            ],
            '740' => [
                'npsn' => '20214990',
                'nama' => 'SMAN 1 PLUMBON KABUPATEN CIREBON',
            ],
            '741' => [
                'npsn' => '69763256',
                'nama' => 'SMKS KESEHATAN YPKH PALIMANAN KABUPATEN CIREBON',
            ],
            '742' => [
                'npsn' => '20231280',
                'nama' => 'SMAS BINA RUHAMA KABUPATEN BOGOR',
            ],
            '743' => [
                'npsn' => '20214983',
                'nama' => 'SMKS AS SALAM GEGESIK KABUPATEN CIREBON',
            ],
            '744' => [
                'npsn' => '20270760',
                'nama' => 'SMKS BUDI MULYA GEGESIK KABUPATEN CIREBON',
            ],
            '745' => [
                'npsn' => '69725986',
                'nama' => 'SMKS PUI GEGESIK KABUPATEN CIREBON',
            ],
            '746' => [
                'npsn' => '20214808',
                'nama' => 'SMKS PLUS FATAHILLAH KABUPATEN CIREBON',
            ],
            '747' => [
                'npsn' => '20213856',
                'nama' => 'SMKS PGRI DAWUAN KABUPATEN MAJALENGKA',
            ],
            '748' => [
                'npsn' => '20254118',
                'nama' => 'SMKS PUTRA PAKUAN KABUPATEN BOGOR',
            ],
            '749' => [
                'npsn' => '70010104',
                'nama' => 'SMAS IT INSAN CENDEKIA MADANI GUNUNG GEULIS KABUPATEN BOGOR',
            ],
            '750' => [
                'npsn' => '69862572',
                'nama' => 'SMKS MASTER INDONESIA KABUPATEN BOGOR',
            ],
            '751' => [
                'npsn' => '20212937',
                'nama' => 'SMAN 1 CILIMUS KABUPATEN KUNINGAN',
            ],
            '752' => [
                'npsn' => '20212936',
                'nama' => 'SMKS BM YALTI CILIMUS KABUPATEN KUNINGAN',
            ],
            '753' => [
                'npsn' => '20214800',
                'nama' => 'SMKS MARITIM CIREBON KABUPATEN CIREBON',
            ],
            '754' => [
                'npsn' => '20244685',
                'nama' => 'SMKS DELTA MUNDU CIREBON KABUPATEN CIREBON',
            ],
            '755' => [
                'npsn' => '20222364',
                'nama' => 'SMAN 1 CIREBON KOTA CIREBON',
            ],
            '756' => [
                'npsn' => '20263968',
                'nama' => 'SMKN 1 LEMAHSUGIH KABUPATEN MAJALENGKA',
            ],
            '757' => [
                'npsn' => '69947287',
                'nama' => 'SMKS NU DARMA AJI KABUPATEN INDRAMAYU',
            ],
            '758' => [
                'npsn' => '20215946',
                'nama' => 'SMKS TELEMATIKA INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '759' => [
                'npsn' => '20247182',
                'nama' => 'SMAN 1 SUMBERJAYA KABUPATEN MAJALENGKA',
            ],
            '760' => [
                'npsn' => '69919892',
                'nama' => 'SLBS PELITA INSAN KABUPATEN KUNINGAN',
            ],
            '761' => [
                'npsn' => '20214968',
                'nama' => 'SMAN 1 BEBER KABUPATEN CIREBON',
            ],
            '762' => [
                'npsn' => '20268585',
                'nama' => 'SMKS PATIH SEMI UJUNG SEMI KABUPATEN CIREBON',
            ],
            '763' => [
                'npsn' => '20253021',
                'nama' => 'SMKS DARUL FATWA KABUPATEN SUMEDANG',
            ],
            '764' => [
                'npsn' => '20269709',
                'nama' => 'SMKS KESEHATAN ANNISA KABUPATEN BOGOR',
            ],
            '765' => [
                'npsn' => '20235618',
                'nama' => 'SMAS DARUL FATWA JATINANGOR KABUPATEN SUMEDANG',
            ],
            '766' => [
                'npsn' => '69815451',
                'nama' => 'SMKS BAABULKAMIL KABUPATEN SUMEDANG',
            ],
            '767' => [
                'npsn' => '20217030',
                'nama' => 'SMKS KUTAWARINGIN SUBANG KABUPATEN SUBANG',
            ],
            '768' => [
                'npsn' => '60726454',
                'nama' => 'SMKS RISE KOTA CIREBON',
            ],
            '769' => [
                'npsn' => '20222368',
                'nama' => 'SMAS IT NURUSSHIDIQ CIREBON KOTA CIREBON',
            ],
            '770' => [
                'npsn' => '20222381',
                'nama' => 'SMAS COKROAMINOTO CIREBON KOTA CIREBON',
            ],
            '771' => [
                'npsn' => '69952597',
                'nama' => 'SMAS ISLAM QURANI ALBAHJAH KABUPATEN CIREBON',
            ],
            '772' => [
                'npsn' => '69990047',
                'nama' => 'SLBS MUTIARA KASIH KABUPATEN INDRAMAYU',
            ],
            '773' => [
                'npsn' => '20222379',
                'nama' => 'SMAS ADVENT CIREBON KOTA CIREBON',
            ],
            '774' => [
                'npsn' => '20222177',
                'nama' => 'SMKS PAKUNGWATI CIREBON KOTA CIREBON',
            ],
            '775' => [
                'npsn' => '20223027',
                'nama' => 'SMAS TOGA TERANG KOTA BEKASI',
            ],
            '776' => [
                'npsn' => '20223136',
                'nama' => 'SMKN 1 BEKASI KOTA BEKASI',
            ],
            '777' => [
                'npsn' => '69953095',
                'nama' => 'SMAS SEKOLAH ANAK INDONESIA KABUPATEN BOGOR',
            ],
            '778' => [
                'npsn' => '20253249',
                'nama' => 'SMAS GEMILANG YASIFA KABUPATEN BOGOR',
            ],
            '779' => [
                'npsn' => '20232481',
                'nama' => 'SMKS PGRI BABAKANMADANG KABUPATEN BOGOR',
            ],
            '780' => [
                'npsn' => '69816558',
                'nama' => 'SMKS TRI MITRA 2 CIKAUM KABUPATEN SUBANG',
            ],
            '781' => [
                'npsn' => '20233675',
                'nama' => 'SMKS BUDI UTOMO CIKAUM KABUPATEN SUBANG',
            ],
            '782' => [
                'npsn' => '20213878',
                'nama' => 'SLBN MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '783' => [
                'npsn' => '20200903',
                'nama' => 'SMAN 1 RUMPIN KABUPATEN BOGOR',
            ],
            '784' => [
                'npsn' => '69899812',
                'nama' => 'SMKS NASIONAL SUMBER KABUPATEN CIREBON',
            ],
            '785' => [
                'npsn' => '69952594',
                'nama' => 'SMAS ISLAM QURANI AL BAHJAH CIREBON 2 KABUPATEN CIREBON',
            ],
            '786' => [
                'npsn' => '70033563',
                'nama' => 'SMKS IBNU KHALDUN KABUPATEN CIREBON',
            ],
            '787' => [
                'npsn' => '20247183',
                'nama' => 'SMKS ANALIS KIMIA YPPT MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '788' => [
                'npsn' => '20247191',
                'nama' => 'SMKS PUI MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '789' => [
                'npsn' => '20232453',
                'nama' => 'SMKS ISLAM PERMATASARI 2 KABUPATEN BOGOR',
            ],
            '790' => [
                'npsn' => '70036285',
                'nama' => 'SMAS AL BAYAN ISLAMIC BOARDING SCHOOL KABUPATEN BOGOR',
            ],
            '791' => [
                'npsn' => '20213879',
                'nama' => 'SLBS BAG C YPLB MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '792' => [
                'npsn' => '20213877',
                'nama' => 'SMAS PGRI 1 MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '793' => [
                'npsn' => '69943905',
                'nama' => 'SLBS TUNAS KEMUNING KABUPATEN CIREBON',
            ],
            '794' => [
                'npsn' => '20254048',
                'nama' => 'SMKS FARMASI MUHAMMADIYAH 2 KEDAWUNG KABUPATEN CIREBON',
            ],
            '795' => [
                'npsn' => '20263964',
                'nama' => 'SMKN 1 KERTAJATI KABUPATEN MAJALENGKA',
            ],
            '796' => [
                'npsn' => '20215023',
                'nama' => 'SMAS MUHAMMADIYAH KEDAWUNG KABUPATEN CIREBON',
            ],
            '797' => [
                'npsn' => '20244692',
                'nama' => 'SMKS RISE CIREBON KABUPATEN CIREBON',
            ],
            '798' => [
                'npsn' => '20245300',
                'nama' => 'SMKS YADIKA CIREBON KABUPATEN CIREBON',
            ],
            '799' => [
                'npsn' => '20253554',
                'nama' => 'SMKS CENDEKIA WANASARI KABUPATEN INDRAMAYU',
            ],
            '800' => [
                'npsn' => '20257317',
                'nama' => 'SMKS MIFTAHUL BARIYYAH KABUPATEN SUBANG',
            ],
            '801' => [
                'npsn' => '69942549',
                'nama' => 'SMAS IT BUDJEMAK KABUPATEN SUBANG',
            ],
            '802' => [
                'npsn' => '20233771',
                'nama' => 'SMKS AL MUMMTAZ TANJUNGSIANG KABUPATEN SUBANG',
            ],
            '803' => [
                'npsn' => '20235632',
                'nama' => 'SMKN SITURAJA KABUPATEN SUMEDANG',
            ],
            '804' => [
                'npsn' => '20254004',
                'nama' => 'SMAS MADINATUNNAJAH KABUPATEN CIREBON',
            ],
            '805' => [
                'npsn' => '69752446',
                'nama' => 'SMKS BROADCASTING PERTELEVISIAN BINA INSAN MULIA KABUPATEN CIREBON',
            ],
            '806' => [
                'npsn' => '20253930',
                'nama' => 'SMKS CARUBAN NAGARI KABUPATEN CIREBON',
            ],
            '807' => [
                'npsn' => '20231314',
                'nama' => 'SMAS MANBAUL HUDA KABUPATEN BOGOR',
            ],
            '808' => [
                'npsn' => '69769402',
                'nama' => 'SMKS AL BANNA DUKUPUNTANG KABUPATEN CIREBON',
            ],
            '809' => [
                'npsn' => '69774540',
                'nama' => 'SMKS AL TAFAQQUH FIDDIN SINDANGWANGI KABUPATEN MAJALENGKA',
            ],
            '810' => [
                'npsn' => '69894293',
                'nama' => 'SLBS ABDUL MUCHYI KABUPATEN MAJALENGKA',
            ],
            '811' => [
                'npsn' => '69762603',
                'nama' => 'SMKS PERBANKAN SYARIAH KABUPATEN SUMEDANG',
            ],
            '812' => [
                'npsn' => '20270950',
                'nama' => 'SMKS KEHUTANAN RIMBA BAHARI KABUPATEN SUMEDANG',
            ],
            '813' => [
                'npsn' => '20208391',
                'nama' => 'SMAN SITURAJA KABUPATEN SUMEDANG',
            ],
            '814' => [
                'npsn' => '20270759',
                'nama' => 'SMKS PGRI 2 PLUMBON KABUPATEN CIREBON',
            ],
            '815' => [
                'npsn' => '20214978',
                'nama' => 'SMAS PGRI PLUMBON KABUPATEN CIREBON',
            ],
            '816' => [
                'npsn' => '20244691',
                'nama' => 'SMKS PGRI PLUMBON KABUPATEN CIREBON',
            ],
            '817' => [
                'npsn' => '69892260',
                'nama' => 'SMKS SURYA NEGARA PLUMBON KABUPATEN CIREBON',
            ],
            '818' => [
                'npsn' => '20214001',
                'nama' => 'SLBS WELAS ASIH KABUPATEN MAJALENGKA',
            ],
            '819' => [
                'npsn' => '69812109',
                'nama' => 'SMKS PGRI SITURAJA KABUPATEN SUMEDANG',
            ],
            '820' => [
                'npsn' => '20235547',
                'nama' => 'SLBS BAG ABC MIROJUTTAQWA KABUPATEN SUMEDANG',
            ],
            '821' => [
                'npsn' => '69939998',
                'nama' => 'SMKS NUSANTARA AKHFAS KABUPATEN INDRAMAYU',
            ],
            '822' => [
                'npsn' => '20213857',
                'nama' => 'SMKN 1 MAJA KABUPATEN MAJALENGKA',
            ],
            '823' => [
                'npsn' => '20213883',
                'nama' => 'SMAN 1 KASOKANDEL KABUPATEN MAJALENGKA',
            ],
            '824' => [
                'npsn' => '20244681',
                'nama' => 'SMKS ABDI KARYA LEMAHABANG CIREBON KABUPATEN CIREBON',
            ],
            '825' => [
                'npsn' => '20244673',
                'nama' => 'SMAS NU LEMAHABANG KABUPATEN CIREBON',
            ],
            '826' => [
                'npsn' => '20208399',
                'nama' => 'SMKS PEMUDA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '827' => [
                'npsn' => '20234106',
                'nama' => 'SMKS YASPRI SUMEDANG KABUPATEN SUMEDANG',
            ],
            '828' => [
                'npsn' => '20235640',
                'nama' => 'SMKS PGRI SUMEDANG KABUPATEN SUMEDANG',
            ],
            '829' => [
                'npsn' => '20208396',
                'nama' => 'SMKS MAARIF 2 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '830' => [
                'npsn' => '20208395',
                'nama' => 'SMKS KORPRI SUMEDANG KABUPATEN SUMEDANG',
            ],
            '831' => [
                'npsn' => '69786713',
                'nama' => 'SLBS HIKMAH MANDIRI KABUPATEN SUMEDANG',
            ],
            '832' => [
                'npsn' => '20208393',
                'nama' => 'SMKN 1 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '833' => [
                'npsn' => '20235578',
                'nama' => 'SLBS RAHMAH DEWI KABUPATEN SUMEDANG',
            ],
            '834' => [
                'npsn' => '20235637',
                'nama' => 'SMKS MAARIF 1 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '835' => [
                'npsn' => '70011439',
                'nama' => 'SMAS ISLAM TERPADU INSAN SEJAHTERA KABUPATEN SUMEDANG',
            ],
            '836' => [
                'npsn' => '69913940',
                'nama' => 'SMKS FAJAR MANDALA KABUPATEN SUMEDANG',
            ],
            '837' => [
                'npsn' => '20254179',
                'nama' => 'SMKS PUSDAI KABUPATEN SUMEDANG',
            ],
            '838' => [
                'npsn' => '69899133',
                'nama' => 'SLBS CIMAREME KABUPATEN SUMEDANG',
            ],
            '839' => [
                'npsn' => '69893377',
                'nama' => 'SMKS PARIWISATA METLAND SCHOOL KABUPATEN BOGOR',
            ],
            '840' => [
                'npsn' => '20258202',
                'nama' => 'SMKS AVICENNA CILEUNGSI KABUPATEN BOGOR',
            ],
            '841' => [
                'npsn' => '69768238',
                'nama' => 'SMKS FAJAR SENTOSA KABUPATEN BOGOR',
            ],
            '842' => [
                'npsn' => '70028282',
                'nama' => 'SMAS ISLAM AL AZHAR BSD METLAND KABUPATEN BOGOR',
            ],
            '843' => [
                'npsn' => '20214986',
                'nama' => 'SMAN 1 KARANG WARENG KABUPATEN CIREBON',
            ],
            '844' => [
                'npsn' => '69928535',
                'nama' => 'SMKS NU KAPETAKAN KABUPATEN CIREBON',
            ],
            '845' => [
                'npsn' => '20247180',
                'nama' => 'SMAS DAARUL AMANAH KABUPATEN MAJALENGKA',
            ],
            '846' => [
                'npsn' => '69954454',
                'nama' => 'SMKS MAARIF AL GHOZALI KABUPATEN MAJALENGKA',
            ],
            '847' => [
                'npsn' => '20276125',
                'nama' => 'SMKS IBNU SINA RAJAGALUH KABUPATEN MAJALENGKA',
            ],
            '848' => [
                'npsn' => '69880227',
                'nama' => 'SMKS KARYA BAKTI KABUPATEN MAJALENGKA',
            ],
            '849' => [
                'npsn' => '20268734',
                'nama' => 'SMKN 1 GUNUNG JATI KABUPATEN CIREBON',
            ],
            '850' => [
                'npsn' => '20214989',
                'nama' => 'SMAN 1 SUMBER KABUPATEN CIREBON',
            ],
            '851' => [
                'npsn' => '20214793',
                'nama' => 'SMKS PATRIOT CIREBON KABUPATEN CIREBON',
            ],
            '852' => [
                'npsn' => '20268221',
                'nama' => 'SMKS KARYA NASIONAL SINDANGWANGI KABUPATEN MAJALENGKA',
            ],
            '853' => [
                'npsn' => '20247185',
                'nama' => 'SMKS PUTERA NUSANTARA MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '854' => [
                'npsn' => '70032560',
                'nama' => 'SMAN TENGAH TANI KABUPATEN CIREBON',
            ],
            '855' => [
                'npsn' => '20271781',
                'nama' => 'SMKS INDUSTRI LOGAM SITURAJA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '856' => [
                'npsn' => '20220291',
                'nama' => 'SMKS WINDIAN NUGRAHA BOGOR KOTA BOGOR',
            ],
            '857' => [
                'npsn' => '20271922',
                'nama' => 'SMKS TUNAS BANGSA SEJAHTERA KOTA BOGOR',
            ],
            '858' => [
                'npsn' => '69775446',
                'nama' => 'SMKS TELEKOMEDIKA KOTA BOGOR',
            ],
            '859' => [
                'npsn' => '69944078',
                'nama' => 'SMAN 1 CIREUNGHAS KABUPATEN SUKABUMI',
            ],
            '860' => [
                'npsn' => '20214803',
                'nama' => 'SMKS ISLAMIC CENTRE KABUPATEN CIREBON',
            ],
            '861' => [
                'npsn' => '20215024',
                'nama' => 'SMAS MANDIRI KEDAWUNG KABUPATEN CIREBON',
            ],
            '862' => [
                'npsn' => '20221583',
                'nama' => 'SLBS BAG A BUDI NURANI KOTA SUKABUMI',
            ],
            '863' => [
                'npsn' => '20280579',
                'nama' => 'SMKS PLUS AN NABA KOTA SUKABUMI',
            ],
            '864' => [
                'npsn' => '69754839',
                'nama' => 'SMKS IT MADANI KOTA SUKABUMI',
            ],
            '865' => [
                'npsn' => '69957149',
                'nama' => 'SMKS AL MURQONIYAH KABUPATEN BOGOR',
            ],
            '866' => [
                'npsn' => '20258273',
                'nama' => 'SLBS YPI AL MAGHFIROH KABUPATEN CIAMIS',
            ],
            '867' => [
                'npsn' => '69762706',
                'nama' => 'SMKS TRI BINTANG PURWADADI KABUPATEN CIAMIS',
            ],
            '868' => [
                'npsn' => '69972417',
                'nama' => 'SMKS TUNAS HARAPAN PURWADADI KABUPATEN CIAMIS',
            ],
            '869' => [
                'npsn' => '60726715',
                'nama' => 'SMKS IT ABU DZAR KABUPATEN TASIKMALAYA',
            ],
            '870' => [
                'npsn' => '69878670',
                'nama' => 'SMKS BINA KARYA DARUL ULUM KABUPATEN TASIKMALAYA',
            ],
            '871' => [
                'npsn' => '70008586',
                'nama' => 'SMAS PLUS ULUMUL QUR’AN AL MUSTOFA KABUPATEN SUMEDANG',
            ],
            '872' => [
                'npsn' => '20271103',
                'nama' => 'SMKS KESEHATAN 1 SUKRA KABUPATEN INDRAMAYU',
            ],
            '873' => [
                'npsn' => '20216210',
                'nama' => 'SMAS NU SUKRA KABUPATEN INDRAMAYU',
            ],
            '874' => [
                'npsn' => '20264426',
                'nama' => 'SMKS AL WASHLIYAH SUKRA KABUPATEN INDRAMAYU',
            ],
            '875' => [
                'npsn' => '20214984',
                'nama' => 'SMKS AL MUSYAWIRIN WERU CIREBON KABUPATEN CIREBON',
            ],
            '876' => [
                'npsn' => '20214802',
                'nama' => 'SMKS ISLAMIYAH WERU CIREBON KABUPATEN CIREBON',
            ],
            '877' => [
                'npsn' => '20227910',
                'nama' => 'SMAN 2 PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '878' => [
                'npsn' => '20208392',
                'nama' => 'SMAN TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '879' => [
                'npsn' => '20254188',
                'nama' => 'SMKN PERTANIAN PEMBANGUNAN TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '880' => [
                'npsn' => '69955375',
                'nama' => 'SMKS BINA INSAN HARAPAN KABUPATEN SUMEDANG',
            ],
            '881' => [
                'npsn' => '69964748',
                'nama' => 'SMAS PLUS AL MUNAWWAARAH KABUPATEN SUMEDANG',
            ],
            '882' => [
                'npsn' => '20222310',
                'nama' => 'SMKS TAMAN KARYA MADYA TEKNIK KOTA CIREBON',
            ],
            '883' => [
                'npsn' => '20214801',
                'nama' => 'SMKS MANDIRI CIREBON KABUPATEN CIREBON',
            ],
            '884' => [
                'npsn' => '20235628',
                'nama' => 'SMAS PLUS GUNA CIPTA KABUPATEN SUMEDANG',
            ],
            '885' => [
                'npsn' => '20279938',
                'nama' => 'SLBS AL FAZA KABUPATEN SUMEDANG',
            ],
            '886' => [
                'npsn' => '69954100',
                'nama' => 'SMKS PLUS AL IRSYAD KABUPATEN SUMEDANG',
            ],
            '887' => [
                'npsn' => '20216175',
                'nama' => 'SMAS PGRI 2 SINDANG KABUPATEN INDRAMAYU',
            ],
            '888' => [
                'npsn' => '20271883',
                'nama' => 'SMKS IBS TATHMAINUL QULUUB KABUPATEN INDRAMAYU',
            ],
            '889' => [
                'npsn' => '20216196',
                'nama' => 'SMAS PGRI 1 SINDANG KABUPATEN INDRAMAYU',
            ],
            '890' => [
                'npsn' => '69947079',
                'nama' => 'SMKS ISLAM NUSANTARA KABUPATEN INDRAMAYU',
            ],
            '891' => [
                'npsn' => '20233750',
                'nama' => 'SMAS LINGGAJATI ARAHAN KABUPATEN INDRAMAYU',
            ],
            '892' => [
                'npsn' => '20215998',
                'nama' => 'SMKN 1 SINDANG KABUPATEN INDRAMAYU',
            ],
            '893' => [
                'npsn' => '69965195',
                'nama' => 'SMAS PELITA BANGSA KOTA CIREBON',
            ],
            '894' => [
                'npsn' => '69815452',
                'nama' => 'SMKS ASMAUL HUSNA KABUPATEN SUMEDANG',
            ],
            '895' => [
                'npsn' => '20215981',
                'nama' => 'SMAN 1 HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '896' => [
                'npsn' => '20235629',
                'nama' => 'SMAS YKM TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '897' => [
                'npsn' => '20208424',
                'nama' => 'SMAS PASUNDAN TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '898' => [
                'npsn' => '20271298',
                'nama' => 'SMAS YADIKA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '899' => [
                'npsn' => '20216011',
                'nama' => 'SMKS AL IRSYAD AL ISLAMIYYAH HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '900' => [
                'npsn' => '20216207',
                'nama' => 'SMAS MUHAMMADIYAH HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '901' => [
                'npsn' => '20222361',
                'nama' => 'SMAS TAMAN SISWA CIREBON KOTA CIREBON',
            ],
            '902' => [
                'npsn' => '20200682',
                'nama' => 'SMAS AL NUR KABUPATEN BOGOR',
            ],
            '903' => [
                'npsn' => '20231408',
                'nama' => 'SMKS MAHARDIKA BOGOR KABUPATEN BOGOR',
            ],
            '904' => [
                'npsn' => '20213853',
                'nama' => 'SMKN 1 MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '905' => [
                'npsn' => '20213897',
                'nama' => 'SMAN 1 KADIPATEN KABUPATEN MAJALENGKA',
            ],
            '906' => [
                'npsn' => '20214798',
                'nama' => 'SMKS MUHAMMADIYAH KEDAWUNG KABUPATEN CIREBON',
            ],
            '907' => [
                'npsn' => '20214819',
                'nama' => 'SMKS TUGAS PRAKARSA SILIWANGI KEDAWUNG KABUPATEN CIREBON',
            ],
            '908' => [
                'npsn' => '20244698',
                'nama' => 'SMKS FARMASI YPIB CIREBON KABUPATEN CIREBON',
            ],
            '909' => [
                'npsn' => '20213854',
                'nama' => 'SMKS KORPRI MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '910' => [
                'npsn' => '20213880',
                'nama' => 'SLBS BAG BC YP AL AZHAR KABUPATEN MAJALENGKA',
            ],
            '911' => [
                'npsn' => '20276421',
                'nama' => 'SMKS BHINNEKA NUSANTARA KOTA BEKASI',
            ],
            '912' => [
                'npsn' => '20202289',
                'nama' => 'SMAN 1 CICURUG KABUPATEN SUKABUMI',
            ],
            '913' => [
                'npsn' => '20214971',
                'nama' => 'SMAN 1 ARJAWINANGUN KABUPATEN CIREBON',
            ],
            '914' => [
                'npsn' => '20271759',
                'nama' => 'SMKS DARUL KAWAKIB KABUPATEN CIREBON',
            ],
            '915' => [
                'npsn' => '20215018',
                'nama' => 'SLBS BAG ABC WATHANIYAH KABUPATEN CIREBON',
            ],
            '916' => [
                'npsn' => '20254049',
                'nama' => 'SMKS DINAMIKA ARJAWINANGUN KABUPATEN CIREBON',
            ],
            '917' => [
                'npsn' => '69758451',
                'nama' => 'SMKS PLUS AL HILAL ARJAWINANGUN KABUPATEN CIREBON',
            ],
            '918' => [
                'npsn' => '20223036',
                'nama' => 'SMKS ANANDA BEKASI KOTA BEKASI',
            ],
            '919' => [
                'npsn' => '20213885',
                'nama' => 'SMAN 1 JATIWANGI KABUPATEN MAJALENGKA',
            ],
            '920' => [
                'npsn' => '20208407',
                'nama' => 'SMAN TANJUNGKERTA KABUPATEN SUMEDANG',
            ],
            '921' => [
                'npsn' => '20215975',
                'nama' => 'SMAN 1 KROYA KABUPATEN INDRAMAYU',
            ],
            '922' => [
                'npsn' => '20214792',
                'nama' => 'SMKS PGRI 1 PALIMANAN CIREBON KABUPATEN CIREBON',
            ],
            '923' => [
                'npsn' => '20214807',
                'nama' => 'SMKS PGRI 2 PALIMANAN CIREBON KABUPATEN CIREBON',
            ],
            '924' => [
                'npsn' => '69769403',
                'nama' => 'SMKS BABUS SALAM PANGURAGAN KABUPATEN CIREBON',
            ],
            '925' => [
                'npsn' => '69764523',
                'nama' => 'SMKS NASIONAL JATIWANGI KABUPATEN MAJALENGKA',
            ],
            '926' => [
                'npsn' => '20247189',
                'nama' => 'SMKS PGRI JATIWANGI KABUPATEN MAJALENGKA',
            ],
            '927' => [
                'npsn' => '20259889',
                'nama' => 'SLBS BAG C YPWG TANJUNGKERTA KABUPATEN SUMEDANG',
            ],
            '928' => [
                'npsn' => '69831540',
                'nama' => 'SMKS NU REHOBOT KROYA KABUPATEN INDRAMAYU',
            ],
            '929' => [
                'npsn' => '20235576',
                'nama' => 'SLBN BAG B SUMEDANG KABUPATEN SUMEDANG',
            ],
            '930' => [
                'npsn' => '20271070',
                'nama' => 'SMKN 1 TERISI KABUPATEN INDRAMAYU',
            ],
            '931' => [
                'npsn' => '69946961',
                'nama' => 'SLBS AKIRRA 2 KABUPATEN CIREBON',
            ],
            '932' => [
                'npsn' => '20244684',
                'nama' => 'SMKS BUDI TRESNA CIREBON KABUPATEN CIREBON',
            ],
            '933' => [
                'npsn' => '69857737',
                'nama' => 'SMKS SAHABAT ABAH KABUPATEN CIREBON',
            ],
            '934' => [
                'npsn' => '69725985',
                'nama' => 'SMKS MIFTAHUL HUDA CIWARINGIN KABUPATEN CIREBON',
            ],
            '935' => [
                'npsn' => '70003658',
                'nama' => 'SMKS AL ISLAM SUMEDANG KABUPATEN SUMEDANG',
            ],
            '936' => [
                'npsn' => '20235532',
                'nama' => 'SLBS BINA NUSANTARA KABUPATEN SUMEDANG',
            ],
            '937' => [
                'npsn' => '69768180',
                'nama' => 'SMKS MUHAMMADIYAH TERISI KABUPATEN INDRAMAYU',
            ],
            '938' => [
                'npsn' => '69734355',
                'nama' => 'SMKS AS SALAAM JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '939' => [
                'npsn' => '20268778',
                'nama' => 'SMKS PELITA AL IKHSAN KABUPATEN SUMEDANG',
            ],
            '940' => [
                'npsn' => '20208390',
                'nama' => 'SLBS WINAYA BHAKTI KABUPATEN SUMEDANG',
            ],
            '941' => [
                'npsn' => '69946173',
                'nama' => 'SMAS BIDYATUL MUBTADIN TUKDANA KABUPATEN INDRAMAYU',
            ],
            '942' => [
                'npsn' => '60728696',
                'nama' => 'SMKS AL WUTSQO KABUPATEN SUBANG',
            ],
            '943' => [
                'npsn' => '20233681',
                'nama' => 'SMKS NURUL GINA ABIDIN KASOMALANG KABUPATEN SUBANG',
            ],
            '944' => [
                'npsn' => '20200600',
                'nama' => 'SMKS PELAYARAN MAKARYA 1 BOGOR KABUPATEN BOGOR',
            ],
            '945' => [
                'npsn' => '69888840',
                'nama' => 'SMKS AVICENNA MANDIRI KABUPATEN BOGOR',
            ],
            '946' => [
                'npsn' => '69880577',
                'nama' => 'SMKS 2 PEMBINA BANGSA KABUPATEN BOGOR',
            ],
            '947' => [
                'npsn' => '20232476',
                'nama' => 'SMKS PEMBINA BANGSA KABUPATEN BOGOR',
            ],
            '948' => [
                'npsn' => '69967704',
                'nama' => 'SMKS GOLDEN KABUPATEN BOGOR',
            ],
            '949' => [
                'npsn' => '20251847',
                'nama' => 'SMAN 1 LANGKAPLANCAR KABUPATEN PANGANDARAN',
            ],
            '950' => [
                'npsn' => '20271756',
                'nama' => 'SMKS ASY SYAHIDA DUKUPUNTANG KABUPATEN CIREBON',
            ],
            '951' => [
                'npsn' => '20214973',
                'nama' => 'SMAS YAPISA DUKUPUNTANG KABUPATEN CIREBON',
            ],
            '952' => [
                'npsn' => '20232499',
                'nama' => 'SMKS YAPIA PARUNG KABUPATEN BOGOR',
            ],
            '953' => [
                'npsn' => '20232366',
                'nama' => 'SMAS MUHAMMADIYAH PARUNG KABUPATEN BOGOR',
            ],
            '954' => [
                'npsn' => '20268277',
                'nama' => 'SLBS AL MA`RIFAH KABUPATEN CIREBON',
            ],
            '955' => [
                'npsn' => '20271760',
                'nama' => 'SMKS AL MARIFAH GEMPOL KABUPATEN CIREBON',
            ],
            '956' => [
                'npsn' => '70005342',
                'nama' => 'SMKS KHAS KEMPEK BERBASIS PESANTREN KABUPATEN CIREBON',
            ],
            '957' => [
                'npsn' => '20213872',
                'nama' => 'SMKN 1 TALAGA KABUPATEN MAJALENGKA',
            ],
            '958' => [
                'npsn' => '69946175',
                'nama' => 'SMKS DARUSHSHOLIHIN KROYA KABUPATEN INDRAMAYU',
            ],
            '959' => [
                'npsn' => '20216194',
                'nama' => 'SMAS AL ISHLAH BOARDING SCHOOL KABUPATEN INDRAMAYU',
            ],
            '960' => [
                'npsn' => '69952520',
                'nama' => 'SMKS ASSAIDIYYAH PONPES GEDONGAN KABUPATEN CIREBON',
            ],
            '961' => [
                'npsn' => '20215987',
                'nama' => 'SMAS PUI JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '962' => [
                'npsn' => '20216205',
                'nama' => 'SMAS MUHAMMADIYAH JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '963' => [
                'npsn' => '20215948',
                'nama' => 'SMKS PUI JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '964' => [
                'npsn' => '20252980',
                'nama' => 'SMKS MUHAMMADIYAH JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '965' => [
                'npsn' => '20215994',
                'nama' => 'SMKS PELITA JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '966' => [
                'npsn' => '20253006',
                'nama' => 'SLBS BAG C GANDASARI JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '967' => [
                'npsn' => '20253847',
                'nama' => 'SMKS AL HUDA KEDUNGWUNGU KABUPATEN INDRAMAYU',
            ],
            '968' => [
                'npsn' => '20216211',
                'nama' => 'SMAS DARUL FIKRI BUGIS KABUPATEN INDRAMAYU',
            ],
            '969' => [
                'npsn' => '20233761',
                'nama' => 'SMKN 1 JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '970' => [
                'npsn' => '20253138',
                'nama' => 'SMKS MUHAMMADIYAH SEGERAN JUNTINYUAT KABUPATEN INDRAMAYU',
            ],
            '971' => [
                'npsn' => '20215949',
                'nama' => 'SMKS PGRI KAMAL JUNTINYUAT KABUPATEN INDRAMAYU',
            ],
            '972' => [
                'npsn' => '69831539',
                'nama' => 'SMKS NU PEMBANGUNAN BONGAS KABUPATEN INDRAMAYU',
            ],
            '973' => [
                'npsn' => '69768187',
                'nama' => 'SMAN 1 BONGAS KABUPATEN INDRAMAYU',
            ],
            '974' => [
                'npsn' => '20252891',
                'nama' => 'SMKS GARUDA SATYA KABUPATEN BOGOR',
            ],
            '975' => [
                'npsn' => '69945623',
                'nama' => 'SMKS DARUL MUFLIHIN BONGAS KABUPATEN INDRAMAYU',
            ],
            '976' => [
                'npsn' => '20222164',
                'nama' => 'SMKS VETERAN CIREBON KOTA CIREBON',
            ],
            '977' => [
                'npsn' => '20222360',
                'nama' => 'SMAS SYARIF HIDAYATULLAH CIREBON KOTA CIREBON',
            ],
            '978' => [
                'npsn' => '20200598',
                'nama' => 'SMKS AL MANAR KABUPATEN BOGOR',
            ],
            '979' => [
                'npsn' => '20253547',
                'nama' => 'SMKS BINA HARAPAN KABUPATEN BOGOR',
            ],
            '980' => [
                'npsn' => '20252959',
                'nama' => 'SMAS NURUL FALAAH KABUPATEN BOGOR',
            ],
            '981' => [
                'npsn' => '20268575',
                'nama' => 'SMKS NAHDLATUL ULAMA KRANGKENG KABUPATEN INDRAMAYU',
            ],
            '982' => [
                'npsn' => '20256685',
                'nama' => 'SMKS GHONIYUL ULUM SAGALAHERANG KABUPATEN SUBANG',
            ],
            '983' => [
                'npsn' => '20222171',
                'nama' => 'SMKS BUDI ARTI CIREBON KOTA CIREBON',
            ],
            '984' => [
                'npsn' => '20222170',
                'nama' => 'SMKS BUANA BAHARI CIREBON KOTA CIREBON',
            ],
            '985' => [
                'npsn' => '20222178',
                'nama' => 'SMKS PARIWISATA KOTA CIREBON',
            ],
            '986' => [
                'npsn' => '20222383',
                'nama' => 'SMAS KARTIKA III 5 CIREBON KOTA CIREBON',
            ],
            '987' => [
                'npsn' => '20222370',
                'nama' => 'SMAS KRISTEN PENABUR CIREBON KOTA CIREBON',
            ],
            '988' => [
                'npsn' => '60729051',
                'nama' => 'SMKS ISLAM DAARUL KHOIR KABUPATEN BOGOR',
            ],
            '989' => [
                'npsn' => '20211504',
                'nama' => 'SMAN 1 PAMARICAN KABUPATEN CIAMIS',
            ],
            '990' => [
                'npsn' => '20253373',
                'nama' => 'SMKS PELITA ALAM KOTA BEKASI',
            ],
            '991' => [
                'npsn' => '69830492',
                'nama' => 'SMAS SULTHON AULIA BOARDING SCHOOL KOTA BEKASI',
            ],
            '992' => [
                'npsn' => '20247208',
                'nama' => 'SMKS BHAKTI PERSADA KOTA BEKASI',
            ],
            '993' => [
                'npsn' => '20231710',
                'nama' => 'SMAS ISLAM ASSYAFIIYAH 02 KOTA BEKASI',
            ],
            '994' => [
                'npsn' => '69809513',
                'nama' => 'SMKS AL BAROKAH KOTA BEKASI',
            ],
            '995' => [
                'npsn' => '20276430',
                'nama' => 'SMKS DHARMA BAKTI PERTIWI KOTA BEKASI',
            ],
            '996' => [
                'npsn' => '69948448',
                'nama' => 'SMAN 1 SUKRA KABUPATEN INDRAMAYU',
            ],
            '997' => [
                'npsn' => 'NP975673',
                'nama' => 'SMAS GENERUS MANDIRI KABUPATEN BOGOR',
            ],
            '998' => [
                'npsn' => '20270010',
                'nama' => 'SMKS DARUNNAJAH CIPINING KABUPATEN BOGOR',
            ],
            '999' => [
                'npsn' => '69904742',
                'nama' => 'SMKN 12 BEKASI KOTA BEKASI',
            ],
            '1000' => [
                'npsn' => '69949977',
                'nama' => 'SMKS FATHUL AMIN KABUPATEN CIREBON',
            ],
            '1001' => [
                'npsn' => '69931775',
                'nama' => 'SMKS AL WASHLIYAH ANJATAN KABUPATEN INDRAMAYU',
            ],
            '1002' => [
                'npsn' => '69945952',
                'nama' => 'SMKS DZUL ZALALI WA IKROM ANJATAN KABUPATEN INDRAMAYU',
            ],
            '1003' => [
                'npsn' => '60726457',
                'nama' => 'SMAS KRISTEN TERANG BANGSA KOTA CIREBON',
            ],
            '1004' => [
                'npsn' => '60726449',
                'nama' => 'SMAS GEETA SCHOOL KOTA CIREBON',
            ],
            '1005' => [
                'npsn' => '20222176',
                'nama' => 'SMKS NASIONAL CIREBON KOTA CIREBON',
            ],
            '1006' => [
                'npsn' => '20222169',
                'nama' => 'SMKS TAMAN KARYA MADYA EKONOMI CIREBON KOTA CIREBON',
            ],
            '1007' => [
                'npsn' => '69980600',
                'nama' => 'SMAS KRISTEN PLUS PENABUR KOTA CIREBON',
            ],
            '1008' => [
                'npsn' => '20222362',
                'nama' => 'SMAS WIDYA UTAMA CIREBON KOTA CIREBON',
            ],
            '1009' => [
                'npsn' => '20215984',
                'nama' => 'SMAN 1 ANJATAN KABUPATEN INDRAMAYU',
            ],
            '1010' => [
                'npsn' => '69950863',
                'nama' => 'SMKS MANARUL HUDA KABUPATEN CIAMIS',
            ],
            '1011' => [
                'npsn' => '69980689',
                'nama' => 'SMKS MANHAJUL HAQ RANCAH KABUPATEN CIAMIS',
            ],
            '1012' => [
                'npsn' => '20253107',
                'nama' => 'SMKS HASANUDIN KANDANGHAUR KABUPATEN INDRAMAYU',
            ],
            '1013' => [
                'npsn' => '20216208',
                'nama' => 'SMAS ISLAM AT TAQWA KANDANGHAUR KABUPATEN INDRAMAYU',
            ],
            '1014' => [
                'npsn' => '20216006',
                'nama' => 'SMKS MUHAMMADIYAH KANDANGHAUR KABUPATEN INDRAMAYU',
            ],
            '1015' => [
                'npsn' => '70027865',
                'nama' => 'SMKS TRI PATRIA BOGOR KABUPATEN BOGOR',
            ],
            '1016' => [
                'npsn' => '69962720',
                'nama' => 'SMKS IBADURROHMAN KABUPATEN SUKABUMI',
            ],
            '1017' => [
                'npsn' => '20268817',
                'nama' => 'SMKS AL IHYAUL IRSYAD KABUPATEN SUKABUMI',
            ],
            '1018' => [
                'npsn' => '69888828',
                'nama' => 'SMKS NASIONAL AL ULUM KABUPATEN SUKABUMI',
            ],
            '1019' => [
                'npsn' => '60726514',
                'nama' => 'SMKS AT TIIJAAN KABUPATEN SUKABUMI',
            ],
            '1020' => [
                'npsn' => '20253564',
                'nama' => 'SMKS KEBANGSAAN LOSARANG KABUPATEN INDRAMAYU',
            ],
            '1021' => [
                'npsn' => '20223086',
                'nama' => 'SMKS WIRA BUANA KOTA BEKASI',
            ],
            '1022' => [
                'npsn' => '69856206',
                'nama' => 'SMAS IT INSAN MANDIRI KOTA BEKASI',
            ],
            '1023' => [
                'npsn' => '69966915',
                'nama' => 'SMAS INKLUSI SCHOOL OF HUMAN KOTA BEKASI',
            ],
            '1024' => [
                'npsn' => '20223087',
                'nama' => 'SMKS WALISONGO BEKASI KOTA BEKASI',
            ],
            '1025' => [
                'npsn' => '20223130',
                'nama' => 'SMKS TAHTA SYAJAR BEKASI KOTA BEKASI',
            ],
            '1026' => [
                'npsn' => '20223134',
                'nama' => 'SMKS PATRIOT 1 BEKASI KOTA BEKASI',
            ],
            '1027' => [
                'npsn' => '69786316',
                'nama' => 'SMAS ISLAM AL AZHAR HARAPAN INDAH KOTA BEKASI',
            ],
            '1028' => [
                'npsn' => '20223085',
                'nama' => 'SMKS YAPERTI BEKASI KOTA BEKASI',
            ],
            '1029' => [
                'npsn' => '69949162',
                'nama' => 'SMKN 14 BEKASI KOTA BEKASI',
            ],
            '1030' => [
                'npsn' => '20251964',
                'nama' => 'SMAS YRM CIHAWAR KABUPATEN CIAMIS',
            ],
            '1031' => [
                'npsn' => '69988141',
                'nama' => 'SMAS TERPADU CIKANYERE KABUPATEN CIAMIS',
            ],
            '1032' => [
                'npsn' => '69754528',
                'nama' => 'SMKS NU CIDEMPET KABUPATEN INDRAMAYU',
            ],
            '1033' => [
                'npsn' => '69947225',
                'nama' => 'SMKS MAARIF ARAHAN KABUPATEN INDRAMAYU',
            ],
            '1034' => [
                'npsn' => '69755576',
                'nama' => 'SMKS GEMA BHAKTI 1 JASINGA KABUPATEN BOGOR',
            ],
            '1035' => [
                'npsn' => '20280626',
                'nama' => 'SMKS AGROBISNIS WIRASINGA KABUPATEN BOGOR',
            ],
            '1036' => [
                'npsn' => '20202264',
                'nama' => 'SMAN 1 JAMPANGTENGAH KABUPATEN SUKABUMI',
            ],
            '1037' => [
                'npsn' => '20231347',
                'nama' => 'SMAS PGRI JASINGA KABUPATEN BOGOR',
            ],
            '1038' => [
                'npsn' => '70005380',
                'nama' => 'SMKS MASTER TEKNOLOGI KABUPATEN SUKABUMI',
            ],
            '1039' => [
                'npsn' => '20268787',
                'nama' => 'SMKS AL MIZAB KABUPATEN SUKABUMI',
            ],
            '1040' => [
                'npsn' => '20233752',
                'nama' => 'SMAN 1 LOHBENER KABUPATEN INDRAMAYU',
            ],
            '1041' => [
                'npsn' => '69952350',
                'nama' => 'SMKS RISTEK INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '1042' => [
                'npsn' => '20244212',
                'nama' => 'SMKS MAARIF LANGUT KABUPATEN INDRAMAYU',
            ],
            '1043' => [
                'npsn' => '20233751',
                'nama' => 'SMAS MAARIF LOH BENER KABUPATEN INDRAMAYU',
            ],
            '1044' => [
                'npsn' => '20270063',
                'nama' => 'SMKS MITRA NUSANTARA KOTA BEKASI',
            ],
            '1045' => [
                'npsn' => '20231727',
                'nama' => 'SMAS YADIKA 4 KOTA BEKASI',
            ],
            '1046' => [
                'npsn' => '20268788',
                'nama' => 'SMKS TIRTAYASA CIRACAP KABUPATEN SUKABUMI',
            ],
            '1047' => [
                'npsn' => '10648868',
                'nama' => 'SMAS BP FAI UMJ KABUPATEN BOGOR',
            ],
            '1048' => [
                'npsn' => '20258119',
                'nama' => 'SMKS YASIPA TERPADU PALABUHAN RATU KABUPATEN SUKABUMI',
            ],
            '1049' => [
                'npsn' => '20202269',
                'nama' => 'SMKS AL FAJAR PELABUHANRATU SUKABUMI KABUPATEN SUKABUMI',
            ],
            '1050' => [
                'npsn' => '57580133',
                'nama' => 'SMKS AL HUSNA KABUPATEN SUBANG',
            ],
            '1051' => [
                'npsn' => '20222355',
                'nama' => 'SMAS PUTRA NIRMALA CIREBON KOTA CIREBON',
            ],
            '1052' => [
                'npsn' => '60726462',
                'nama' => 'SMKS TELEKOMUNIKASI BUDI ARTI KOTA CIREBON',
            ],
            '1053' => [
                'npsn' => '20222363',
                'nama' => 'SMAS WINDU WACANA CIREBON KOTA CIREBON',
            ],
            '1054' => [
                'npsn' => '20222172',
                'nama' => 'SMKS GRACIKA CIREBON KOTA CIREBON',
            ],
            '1055' => [
                'npsn' => '20222150',
                'nama' => 'SMKS WIDYA UTAMA CIREBON KOTA CIREBON',
            ],
            '1056' => [
                'npsn' => '20223073',
                'nama' => 'SMAS METROPOLITAN KOTA BEKASI',
            ],
            '1057' => [
                'npsn' => '20223125',
                'nama' => 'SMKS BINA MANDIRI KOTA BEKASI',
            ],
            '1058' => [
                'npsn' => '20258518',
                'nama' => 'SMKS SIRAJUL FALAH PARUNG KABUPATEN BOGOR',
            ],
            '1059' => [
                'npsn' => '20223124',
                'nama' => 'SMKS BINA SISWA UTAMA 1 BEKASI KOTA BEKASI',
            ],
            '1060' => [
                'npsn' => '60726844',
                'nama' => 'SMKS IT MBU JAMANIS KABUPATEN TASIKMALAYA',
            ],
            '1061' => [
                'npsn' => '20233673',
                'nama' => 'SMKS BINA TARUNA JALANCAGAK KABUPATEN SUBANG',
            ],
            '1062' => [
                'npsn' => '60726851',
                'nama' => 'SMKS RANACO KABUPATEN SUBANG',
            ],
            '1063' => [
                'npsn' => '20253046',
                'nama' => 'SMKS BINA BANGSA 2 SUKABUMI KABUPATEN SUKABUMI',
            ],
            '1064' => [
                'npsn' => '20257690',
                'nama' => 'SMKS PLUS NUSA PUTRA KABUPATEN SUKABUMI',
            ],
            '1065' => [
                'npsn' => '20216943',
                'nama' => 'SMAN 1 JALANCAGAK KABUPATEN SUBANG',
            ],
            '1066' => [
                'npsn' => '20252621',
                'nama' => 'SMKS KESEHATAN HARAPAN BUNDA KABUPATEN SUKABUMI',
            ],
            '1067' => [
                'npsn' => '20269160',
                'nama' => 'SMKS AL MUHTAR PABUARAN KABUPATEN SUKABUMI',
            ],
            '1068' => [
                'npsn' => '69864701',
                'nama' => 'SMKS GRAHA MEDIKA INDONESIA KABUPATEN SUBANG',
            ],
            '1069' => [
                'npsn' => '20253979',
                'nama' => 'SMAN 1 SURADE KABUPATEN SUKABUMI',
            ],
            '1070' => [
                'npsn' => '69948105',
                'nama' => 'SMKS MAARIF NU CIPAKU KABUPATEN CIAMIS',
            ],
            '1071' => [
                'npsn' => '20251963',
                'nama' => 'SMAS IT AL HIDAYAH JALAN CAGAK KABUPATEN SUBANG',
            ],
            '1072' => [
                'npsn' => '20217025',
                'nama' => 'SMKS RIYADHUL JANNAH JALANCAGAK KABUPATEN SUBANG',
            ],
            '1073' => [
                'npsn' => '20253394',
                'nama' => 'SLBS BAG BC AL GAFFAR GUCHANY KOTA BEKASI',
            ],
            '1074' => [
                'npsn' => '60726695',
                'nama' => 'SMKS HARAPAN BARU KOTA BEKASI',
            ],
            '1075' => [
                'npsn' => '69856209',
                'nama' => 'SMAS GALAJUARA KOTA BEKASI',
            ],
            '1076' => [
                'npsn' => '70028128',
                'nama' => 'SMAS IT AN NAAFI KABUPATEN BOGOR',
            ],
            '1077' => [
                'npsn' => '69935362',
                'nama' => 'SMKS TRI SUKSES KABUPATEN BOGOR',
            ],
            '1078' => [
                'npsn' => '20246334',
                'nama' => 'SMAS AZ ZAINIYYAH KABUPATEN SUKABUMI',
            ],
            '1079' => [
                'npsn' => '20258059',
                'nama' => 'SMKS AZZAINIYAH KABUPATEN SUKABUMI',
            ],
            '1080' => [
                'npsn' => '20333823',
                'nama' => 'SLBS BAG C1 DHARMA ASIH KOTA DEPOK',
            ],
            '1081' => [
                'npsn' => '20211562',
                'nama' => 'SMAS PLUS MULTAZAM KABUPATEN CIAMIS',
            ],
            '1082' => [
                'npsn' => '69757494',
                'nama' => 'SMKN 1 PATOKBEUSI KABUPATEN SUBANG',
            ],
            '1083' => [
                'npsn' => '20217035',
                'nama' => 'SMKS AS SYIFA PATOKBEUSI KABUPATEN SUBANG',
            ],
            '1084' => [
                'npsn' => '69754619',
                'nama' => 'SMKS PARIWISATA CIASEM KABUPATEN SUBANG',
            ],
            '1085' => [
                'npsn' => '20233686',
                'nama' => 'SMKS PERTIWI CIASEM KABUPATEN SUBANG',
            ],
            '1086' => [
                'npsn' => '60728697',
                'nama' => 'SMKS MERAH PUTIH CIASEM SUBANG KABUPATEN SUBANG',
            ],
            '1087' => [
                'npsn' => '60728702',
                'nama' => 'SMKS ANNAHLA KABUPATEN SUBANG',
            ],
            '1088' => [
                'npsn' => '60725457',
                'nama' => 'SMKS 1 LPPM CIASEM KABUPATEN SUBANG',
            ],
            '1089' => [
                'npsn' => '20254195',
                'nama' => 'SMKS AL MADANI JAMPANGKULON KABUPATEN SUKABUMI',
            ],
            '1090' => [
                'npsn' => '20247169',
                'nama' => 'SMAS TERPADU DARUL AMAL KABUPATEN SUKABUMI',
            ],
            '1091' => [
                'npsn' => '69984099',
                'nama' => 'SMAN 2 SETU KABUPATEN BEKASI',
            ],
            '1092' => [
                'npsn' => '20253549',
                'nama' => 'SMKS AL SHIGHOR PANGENAN KABUPATEN CIREBON',
            ],
            '1093' => [
                'npsn' => '70012227',
                'nama' => 'SMKS TEXMACO KABUPATEN SUBANG',
            ],
            '1094' => [
                'npsn' => '20233672',
                'nama' => 'SMKS BINA SARANA INDUSTRI CIPEUNDEUY KABUPATEN SUBANG',
            ],
            '1095' => [
                'npsn' => '69775466',
                'nama' => 'SMKS TEKNOLOGI INFORMASI MANUFAKTUR &amp; BISNIS KABUPATEN SUBANG',
            ],
            '1096' => [
                'npsn' => '69930824',
                'nama' => 'SMKS BHAKTI KENCANA PAMANUKAN KABUPATEN SUBANG',
            ],
            '1097' => [
                'npsn' => '69875561',
                'nama' => 'SMKS TERPADU KARYA CENDIKIA BHAKTI KABUPATEN SUBANG',
            ],
            '1098' => [
                'npsn' => '20233669',
                'nama' => 'SMAS TAMAN SISWA PAMANUKAN KABUPATEN SUBANG',
            ],
            '1099' => [
                'npsn' => '20217031',
                'nama' => 'SMKS DARUL MAARIF PAMANUKAN SUBANG KABUPATEN SUBANG',
            ],
            '1100' => [
                'npsn' => '20265214',
                'nama' => 'SMKS IPTEK SANGGA BUANA KABUPATEN KARAWANG',
            ],
            '1101' => [
                'npsn' => '20264741',
                'nama' => 'SMKN 1 CIPEUNDEUY KABUPATEN SUBANG',
            ],
            '1102' => [
                'npsn' => '69830426',
                'nama' => 'SMKS PLUS AL AZHAR KABUPATEN SUBANG',
            ],
            '1103' => [
                'npsn' => '20245434',
                'nama' => 'SMAN 3 CIKARANG UTARA KABUPATEN BEKASI',
            ],
            '1104' => [
                'npsn' => '20219238',
                'nama' => 'SMAN 15 BANDUNG KOTA BANDUNG',
            ],
            '1105' => [
                'npsn' => '20218356',
                'nama' => 'SMAN 1 CIKARANG UTARA KABUPATEN BEKASI',
            ],
            '1106' => [
                'npsn' => '69787100',
                'nama' => 'SMKS YAMABA PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1107' => [
                'npsn' => '20268272',
                'nama' => 'SMKS KESEHATAN EFARINA KABUPATEN PURWAKARTA',
            ],
            '1108' => [
                'npsn' => '20217455',
                'nama' => 'SLBS BAG BC YDBA CIBENING KABUPATEN PURWAKARTA',
            ],
            '1109' => [
                'npsn' => '69774545',
                'nama' => 'SMKS PRATAMA MULYA KARAWANG KABUPATEN KARAWANG',
            ],
            '1110' => [
                'npsn' => '20218476',
                'nama' => 'SMKS TEKNOLOGI ASSALAM BEKASI KABUPATEN BEKASI',
            ],
            '1111' => [
                'npsn' => '20244767',
                'nama' => 'SMKS ISLAM AL AMIN KABUPATEN BEKASI',
            ],
            '1112' => [
                'npsn' => '20233667',
                'nama' => 'SMAS RIYADHUL JANNAH CIMENTENG KABUPATEN SUBANG',
            ],
            '1113' => [
                'npsn' => '69875553',
                'nama' => 'SMKS ISLAM CIKADU KABUPATEN SUBANG',
            ],
            '1114' => [
                'npsn' => '69875552',
                'nama' => 'SMKS ISLAM CIBULUH KABUPATEN SUBANG',
            ],
            '1115' => [
                'npsn' => '20233690',
                'nama' => 'SMKS RIYADHUL JANNAH CIJAMBE KABUPATEN SUBANG',
            ],
            '1116' => [
                'npsn' => '70006856',
                'nama' => 'SMAS PLUS AR RAUDHAH KABUPATEN PURWAKARTA',
            ],
            '1117' => [
                'npsn' => '69877402',
                'nama' => 'SMKN CIJAMBE KABUPATEN SUBANG',
            ],
            '1118' => [
                'npsn' => '20202266',
                'nama' => 'SMAN 1 NAGRAK KABUPATEN SUKABUMI',
            ],
            '1119' => [
                'npsn' => '69755712',
                'nama' => 'SMKS ARDSENTRA KABUPATEN BOGOR',
            ],
            '1120' => [
                'npsn' => 'NP964838',
                'nama' => 'SMKS NURUL QOLBI KABUPATEN BOGOR',
            ],
            '1121' => [
                'npsn' => '69728617',
                'nama' => 'SMKS BUDHI MULIA KABUPATEN SUKABUMI',
            ],
            '1122' => [
                'npsn' => '20247162',
                'nama' => 'SMAS PGRI CISAAT KABUPATEN SUKABUMI',
            ],
            '1123' => [
                'npsn' => '69972558',
                'nama' => 'SMKS PARIWISATA PABUARAN KABUPATEN SUBANG',
            ],
            '1124' => [
                'npsn' => '20219233',
                'nama' => 'SMAN 26 BANDUNG KOTA BANDUNG',
            ],
            '1125' => [
                'npsn' => '60728701',
                'nama' => 'SMKS TERPADU BANGUN PERSADA KABUPATEN SUBANG',
            ],
            '1126' => [
                'npsn' => '69952214',
                'nama' => 'SMAS IT AT TAUFIQ KABUPATEN SUKABUMI',
            ],
            '1127' => [
                'npsn' => '69754714',
                'nama' => 'SMKS NURUL ICHSAN KABUPATEN SUKABUMI',
            ],
            '1128' => [
                'npsn' => '20237461',
                'nama' => 'SMKS MITRA KARYA RENGASDENGKLOK KABUPATEN KARAWANG',
            ],
            '1129' => [
                'npsn' => '20258502',
                'nama' => 'SMKS TEKNOLOGI AL BARKAH KABUPATEN KARAWANG',
            ],
            '1130' => [
                'npsn' => '20268314',
                'nama' => 'SMKS GANESA KABUPATEN SUKABUMI',
            ],
            '1131' => [
                'npsn' => '70004943',
                'nama' => 'SMKS ISLAM HEGARMANAH KABUPATEN SUKABUMI',
            ],
            '1132' => [
                'npsn' => '20270820',
                'nama' => 'SMKS IT BANI YASIN KABUPATEN SUKABUMI',
            ],
            '1133' => [
                'npsn' => '20253845',
                'nama' => 'SMAN 1 KALIBUNDER KABUPATEN SUKABUMI',
            ],
            '1134' => [
                'npsn' => '69946530',
                'nama' => 'SLBS AL FAHMI KABUPATEN SUBANG',
            ],
            '1135' => [
                'npsn' => '20233689',
                'nama' => 'SMKS RIYADHUL JANNAH CIBOGO KABUPATEN SUBANG',
            ],
            '1136' => [
                'npsn' => '20217457',
                'nama' => 'SLBS BINA INSANI KABUPATEN PURWAKARTA',
            ],
            '1137' => [
                'npsn' => '70031733',
                'nama' => 'SMKS IT ASSYAFAQ RANA MIHARDJA KABUPATEN PURWAKARTA',
            ],
            '1138' => [
                'npsn' => '20217369',
                'nama' => 'SMKS PRABU SAKTI 1 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1139' => [
                'npsn' => '69958816',
                'nama' => 'SMAS AL QURAN NURHASANAT KABUPATEN KARAWANG',
            ],
            '1140' => [
                'npsn' => '69774547',
                'nama' => 'SMKS JAYABEKA 03 KABUPATEN KARAWANG',
            ],
            '1141' => [
                'npsn' => '69873964',
                'nama' => 'SMKS GLOBAL MARINE KABUPATEN KARAWANG',
            ],
            '1142' => [
                'npsn' => '20223030',
                'nama' => 'SMAS SYARIF HIDAYATULLAH KOTA BEKASI',
            ],
            '1143' => [
                'npsn' => '69878008',
                'nama' => 'SMKN CIBOGO KABUPATEN SUBANG',
            ],
            '1144' => [
                'npsn' => '20269154',
                'nama' => 'SMKS IT AL ASIYAH KABUPATEN BOGOR',
            ],
            '1145' => [
                'npsn' => '20233688',
                'nama' => 'SMKS RADITA YUDHA PAGADEN KABUPATEN SUBANG',
            ],
            '1146' => [
                'npsn' => '69987316',
                'nama' => 'SMAS ISLAM TERPADU AL UKHUWAH KABUPATEN SUBANG',
            ],
            '1147' => [
                'npsn' => '20237428',
                'nama' => 'SMKS TAMANSISWA CIKAMPEK KABUPATEN KARAWANG',
            ],
            '1148' => [
                'npsn' => '20253344',
                'nama' => 'SMKS PAMOR CIKAMPEK KABUPATEN KARAWANG',
            ],
            '1149' => [
                'npsn' => '20217800',
                'nama' => 'SMKS PAKUSARAKAN CIKAMPEK KABUPATEN KARAWANG',
            ],
            '1150' => [
                'npsn' => '20253340',
                'nama' => 'SMAS PAMOR KABUPATEN KARAWANG',
            ],
            '1151' => [
                'npsn' => '20217810',
                'nama' => 'SMKS TARUNA KARYA 1 KARAWANG KABUPATEN KARAWANG',
            ],
            '1152' => [
                'npsn' => '20217803',
                'nama' => 'SMKN 1 CIKAMPEK KABUPATEN KARAWANG',
            ],
            '1153' => [
                'npsn' => '69915812',
                'nama' => 'SMAN 3 CIKAMPEK KABUPATEN KARAWANG',
            ],
            '1154' => [
                'npsn' => '20231299',
                'nama' => 'SMAS INDOCEMENT KABUPATEN BOGOR',
            ],
            '1155' => [
                'npsn' => '69955539',
                'nama' => 'SMKS TERPADU DIPONEGORO KABUPATEN SUBANG',
            ],
            '1156' => [
                'npsn' => '20233651',
                'nama' => 'SMAS MUHAMMADIYAH SUBANG KABUPATEN SUBANG',
            ],
            '1157' => [
                'npsn' => '69988763',
                'nama' => 'SMAS ISLAM TERPADU AS SYIFA BOARDING SCHOOL WANAREJA KABUPATEN SUBANG',
            ],
            '1158' => [
                'npsn' => '20246322',
                'nama' => 'SMKS YPIB SUBANG KABUPATEN SUBANG',
            ],
            '1159' => [
                'npsn' => '20233646',
                'nama' => 'SMAS BINA PUTERA SUBANG KABUPATEN SUBANG',
            ],
            '1160' => [
                'npsn' => '69859743',
                'nama' => 'SMKS KESENIAN SUBANG KABUPATEN SUBANG',
            ],
            '1161' => [
                'npsn' => '20232490',
                'nama' => 'SMKS 1 TRIPLE J KABUPATEN BOGOR',
            ],
            '1162' => [
                'npsn' => '20269416',
                'nama' => 'SMKS KESEHATAN TRIPLE J KABUPATEN BOGOR',
            ],
            '1163' => [
                'npsn' => '20254122',
                'nama' => 'SMAS PUSPA MEKAR KABUPATEN BOGOR',
            ],
            '1164' => [
                'npsn' => '20232425',
                'nama' => 'SMKS ASH SHOHEH 2 CITEUREUP KABUPATEN BOGOR',
            ],
            '1165' => [
                'npsn' => '20254107',
                'nama' => 'SMKS KESEHATAN BHAKTI KENCANA SUBANG KABUPATEN SUBANG',
            ],
            '1166' => [
                'npsn' => '20233658',
                'nama' => 'SMAS PGRI 1 SUBANG KABUPATEN SUBANG',
            ],
            '1167' => [
                'npsn' => '20217034',
                'nama' => 'SMKS BINA MANDIRI SUBANG KABUPATEN SUBANG',
            ],
            '1168' => [
                'npsn' => '69864702',
                'nama' => 'SMKS INTEGRAL PROF DR. HAMKA SUBANG KABUPATEN SUBANG',
            ],
            '1169' => [
                'npsn' => '20217033',
                'nama' => 'SMKS BINA PUTERA SUBANG KABUPATEN SUBANG',
            ],
            '1170' => [
                'npsn' => '20233659',
                'nama' => 'SMAS PGRI 2 SUBANG KABUPATEN SUBANG',
            ],
            '1171' => [
                'npsn' => '20233684',
                'nama' => 'SMKS PASUNDAN SUBANG KABUPATEN SUBANG',
            ],
            '1172' => [
                'npsn' => '20233683',
                'nama' => 'SMKS PARIWISATA SYAKTI SUBANG KABUPATEN SUBANG',
            ],
            '1173' => [
                'npsn' => '20217028',
                'nama' => 'SMKN 2 SUBANG KABUPATEN SUBANG',
            ],
            '1174' => [
                'npsn' => '69880741',
                'nama' => 'SMKS FARMASI AVERUS KABUPATEN BOGOR',
            ],
            '1175' => [
                'npsn' => '20271052',
                'nama' => 'SMKS DARUL HIKAM BINONG KABUPATEN SUBANG',
            ],
            '1176' => [
                'npsn' => '69952436',
                'nama' => 'SMKS IMAM GHOZALI KABUPATEN SUBANG',
            ],
            '1177' => [
                'npsn' => '20233663',
                'nama' => 'SMAS ASTHA HANNAS BINONG KABUPATEN SUBANG',
            ],
            '1178' => [
                'npsn' => '69894044',
                'nama' => 'SMKS TERPADU ASSAFIIYAH KABUPATEN BANDUNG BARAT',
            ],
            '1179' => [
                'npsn' => '69772947',
                'nama' => 'SMKS PUTRA GUNUNGHALU KABUPATEN BANDUNG BARAT',
            ],
            '1180' => [
                'npsn' => '69861093',
                'nama' => 'SMKS IT AL HIDAYAH KABUPATEN BANDUNG BARAT',
            ],
            '1181' => [
                'npsn' => '69894494',
                'nama' => 'SMKS GARDA MADANI KABUPATEN BANDUNG BARAT',
            ],
            '1182' => [
                'npsn' => '20279924',
                'nama' => 'SMKS BINA SISWA 1 KABUPATEN BANDUNG BARAT',
            ],
            '1183' => [
                'npsn' => '69874369',
                'nama' => 'SMKS AL QOHHARIYYAH KABUPATEN BANDUNG BARAT',
            ],
            '1184' => [
                'npsn' => '20232480',
                'nama' => 'SMKS PGRI 2 CIBINONG KABUPATEN BOGOR',
            ],
            '1185' => [
                'npsn' => '20217026',
                'nama' => 'SMKS PGRI SUBANG KABUPATEN SUBANG',
            ],
            '1186' => [
                'npsn' => '69892598',
                'nama' => 'SMAS MH YASIN SUBANG KABUPATEN SUBANG',
            ],
            '1187' => [
                'npsn' => '69755356',
                'nama' => 'SMKS TERPADU LAMPANG KABUPATEN SUBANG',
            ],
            '1188' => [
                'npsn' => '69759052',
                'nama' => 'SMKS IT MINATUL HUDA KABUPATEN PURWAKARTA',
            ],
            '1189' => [
                'npsn' => '20246722',
                'nama' => 'SMAS ANWARUL HIDAYAH KABUPATEN KARAWANG',
            ],
            '1190' => [
                'npsn' => '20253323',
                'nama' => 'SLBS DHARUL MUKHSININ KABUPATEN BEKASI',
            ],
            '1191' => [
                'npsn' => '20216938',
                'nama' => 'SMAN 1 SUBANG KABUPATEN SUBANG',
            ],
            '1192' => [
                'npsn' => '20200676',
                'nama' => 'SMAN 1 CIAMPEA KABUPATEN BOGOR',
            ],
            '1193' => [
                'npsn' => '69769379',
                'nama' => 'SMKS BANGUN NUSA BANGSA KABUPATEN BOGOR',
            ],
            '1194' => [
                'npsn' => '20233680',
                'nama' => 'SMKN 1 SUBANG KABUPATEN SUBANG',
            ],
            '1195' => [
                'npsn' => '20216948',
                'nama' => 'SLBN KABUPATEN SUBANG',
            ],
            '1196' => [
                'npsn' => '20255783',
                'nama' => 'SMKS YADIKA KALIJATI KABUPATEN SUBANG',
            ],
            '1197' => [
                'npsn' => '20270741',
                'nama' => 'SMKS AULIA KALIJATI KABUPATEN SUBANG',
            ],
            '1198' => [
                'npsn' => '69823296',
                'nama' => 'SLBS PGRI KALIJATI KABUPATEN SUBANG',
            ],
            '1199' => [
                'npsn' => '20253844',
                'nama' => 'SMKN 1 SAGARANTEN KABUPATEN SUKABUMI',
            ],
            '1200' => [
                'npsn' => '20217036',
                'nama' => 'SMKS ANGKASA 2 KALIJATI KABUPATEN SUBANG',
            ],
            '1201' => [
                'npsn' => '69944155',
                'nama' => 'SMAS ISLAM TERPADU AN NUR DUKUHDALEM KABUPATEN KUNINGAN',
            ],
            '1202' => [
                'npsn' => '69981316',
                'nama' => 'SMKS YAHALMA KABUPATEN SUKABUMI',
            ],
            '1203' => [
                'npsn' => '69888446',
                'nama' => 'SMKS PERMATA MANDIRI KABUPATEN SUKABUMI',
            ],
            '1204' => [
                'npsn' => '69915781',
                'nama' => 'SMAS PERMATA MANDIRI KABUPATEN SUKABUMI',
            ],
            '1205' => [
                'npsn' => '20271152',
                'nama' => 'SMAS IT AT TAISIRIYAH KABUPATEN SUKABUMI',
            ],
            '1206' => [
                'npsn' => '69916895',
                'nama' => 'SMKS TERPADU BINA INSAN KABUPATEN SUMEDANG',
            ],
            '1207' => [
                'npsn' => '20275984',
                'nama' => 'SMKS BISTEKIN KABUPATEN PURWAKARTA',
            ],
            '1208' => [
                'npsn' => '20238040',
                'nama' => 'SMKS CITRA MUTIARA KABUPATEN BEKASI',
            ],
            '1209' => [
                'npsn' => '69949187',
                'nama' => 'SMKS ARMANIYAH KABUPATEN BEKASI',
            ],
            '1210' => [
                'npsn' => '69896412',
                'nama' => 'SMKS DARMA ASIH KABUPATEN BEKASI',
            ],
            '1211' => [
                'npsn' => '20238006',
                'nama' => 'SMAS ISLAM ASY SYIFA KABUPATEN BEKASI',
            ],
            '1212' => [
                'npsn' => '69753766',
                'nama' => 'SLBN KABUPATEN BEKASI',
            ],
            '1213' => [
                'npsn' => '20246432',
                'nama' => 'SMKS BUDINIAH 2 CITEUREUP KABUPATEN BOGOR',
            ],
            '1214' => [
                'npsn' => '69987314',
                'nama' => 'SMAS PLUS TEKNOLOGI KABUPATEN SUKABUMI',
            ],
            '1215' => [
                'npsn' => '69734081',
                'nama' => 'SMKS AL MARFUIYAH KABUPATEN SUKABUMI',
            ],
            '1216' => [
                'npsn' => '20255782',
                'nama' => 'SMAS YADIKA KALIJATI KABUPATEN SUBANG',
            ],
            '1217' => [
                'npsn' => '69942618',
                'nama' => 'SMKS AL MUHAJIRIN KABUPATEN PURWAKARTA',
            ],
            '1218' => [
                'npsn' => '20217356',
                'nama' => 'SMKS UTAMA PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1219' => [
                'npsn' => '60725232',
                'nama' => 'SMKS PUTRA BANGSA KABUPATEN BEKASI',
            ],
            '1220' => [
                'npsn' => '69849090',
                'nama' => 'SMKN 3 SUKATANI KABUPATEN PURWAKARTA',
            ],
            '1221' => [
                'npsn' => '69858458',
                'nama' => 'SMAN 2 SUKATANI KABUPATEN PURWAKARTA',
            ],
            '1222' => [
                'npsn' => '69774530',
                'nama' => 'SMKN 1 SUKATANI KABUPATEN PURWAKARTA',
            ],
            '1223' => [
                'npsn' => '20238054',
                'nama' => 'SMKS YAPIN 02 SETU KABUPATEN BEKASI',
            ],
            '1224' => [
                'npsn' => '20232319',
                'nama' => 'SMAS BINA PENDIDIKAN 2 KABUPATEN BOGOR',
            ],
            '1225' => [
                'npsn' => '20253849',
                'nama' => 'SMKS BINA BANGSA MANDIRI KABUPATEN BOGOR',
            ],
            '1226' => [
                'npsn' => '20214799',
                'nama' => 'SMKS MAARIF PANGENAN KABUPATEN CIREBON',
            ],
            '1227' => [
                'npsn' => '20217040',
                'nama' => 'SMKS SUKAMANDI CIASEM KABUPATEN SUBANG',
            ],
            '1228' => [
                'npsn' => '69733857',
                'nama' => 'SMKS LUHUR BALADIKA KABUPATEN BANDUNG BARAT',
            ],
            '1229' => [
                'npsn' => '20268293',
                'nama' => 'SMKS AL IHSAN BATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '1230' => [
                'npsn' => '69894099',
                'nama' => 'SMKS MUTIARA CENDEKIA KOTA SUKABUMI',
            ],
            '1231' => [
                'npsn' => '20221572',
                'nama' => 'SMKS PELITA YNH SUKABUMI KOTA SUKABUMI',
            ],
            '1232' => [
                'npsn' => '20219715',
                'nama' => 'SMAS BPK 3 PENABUR BANDUNG KOTA BANDUNG',
            ],
            '1233' => [
                'npsn' => '20217941',
                'nama' => 'SLBS WIDI ASIH KOTA BANDUNG',
            ],
            '1234' => [
                'npsn' => '20219810',
                'nama' => 'SMAS KRISTEN BPPK KOTA BANDUNG',
            ],
            '1235' => [
                'npsn' => '20221569',
                'nama' => 'SMKN 2 SUKABUMI KOTA SUKABUMI',
            ],
            '1236' => [
                'npsn' => '20221559',
                'nama' => 'SMAN 1 SUKABUMI KOTA SUKABUMI',
            ],
            '1237' => [
                'npsn' => '20229654',
                'nama' => 'SMKS TARUNA SAKTI PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1238' => [
                'npsn' => '20271592',
                'nama' => 'SMKS PGRI KLARI KABUPATEN KARAWANG',
            ],
            '1239' => [
                'npsn' => '69949201',
                'nama' => 'SMKS IT ASSALAM KARAWANG KABUPATEN KARAWANG',
            ],
            '1240' => [
                'npsn' => '69949224',
                'nama' => 'SMKS SEHATI KARAWANG KABUPATEN KARAWANG',
            ],
            '1241' => [
                'npsn' => '20218369',
                'nama' => 'SMKN 1 CIKARANG BARAT KABUPATEN BEKASI',
            ],
            '1242' => [
                'npsn' => '60728564',
                'nama' => 'SMKN 1 KLARI KABUPATEN KARAWANG',
            ],
            '1243' => [
                'npsn' => '69981676',
                'nama' => 'SMKS ISLAM TERPADU YASIN KABUPATEN SUKABUMI',
            ],
            '1244' => [
                'npsn' => '69962157',
                'nama' => 'SLBS SUKALARANG KABUPATEN SUKABUMI',
            ],
            '1245' => [
                'npsn' => '20217787',
                'nama' => 'SMAN 1 KLARI KABUPATEN KARAWANG',
            ],
            '1246' => [
                'npsn' => '69915809',
                'nama' => 'SMAN 2 KLARI KABUPATEN KARAWANG',
            ],
            '1247' => [
                'npsn' => '69940392',
                'nama' => 'SMKS SINAR FAJAR CIKIJING KABUPATEN MAJALENGKA',
            ],
            '1248' => [
                'npsn' => '20229653',
                'nama' => 'SMKS PURNAWARMAN PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1249' => [
                'npsn' => '69759292',
                'nama' => 'SMKS MUTTAQIEN KABUPATEN PURWAKARTA',
            ],
            '1250' => [
                'npsn' => '20229753',
                'nama' => 'SMKS BINA BUDI PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1251' => [
                'npsn' => '69787101',
                'nama' => 'SMKS KOTA ILMU KABUPATEN PURWAKARTA',
            ],
            '1252' => [
                'npsn' => '20258253',
                'nama' => 'SLBN KABUPATEN PURWAKARTA',
            ],
            '1253' => [
                'npsn' => '20269719',
                'nama' => 'SMKS MUTIARA INSANI KABUPATEN BOGOR',
            ],
            '1254' => [
                'npsn' => '20271153',
                'nama' => 'SMKS DWI WARNA KABUPATEN SUKABUMI',
            ],
            '1255' => [
                'npsn' => '69786520',
                'nama' => 'SMKS TERPADU INSAN CITA KABUPATEN SUKABUMI',
            ],
            '1256' => [
                'npsn' => '69945006',
                'nama' => 'SMKS BINA HUSADA MANDIRI KABUPATEN SUKABUMI',
            ],
            '1257' => [
                'npsn' => '69758239',
                'nama' => 'SMKS BINA NUGRAHA KABUPATEN PURWAKARTA',
            ],
            '1258' => [
                'npsn' => '20229748',
                'nama' => 'SMKS NUR SYAFIIL UMMAH KABUPATEN PURWAKARTA',
            ],
            '1259' => [
                'npsn' => '20268713',
                'nama' => 'SMKS INFORMATIKA PASUNDAN PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1260' => [
                'npsn' => '20229641',
                'nama' => 'SMAS AL ISLAM KABUPATEN PURWAKARTA',
            ],
            '1261' => [
                'npsn' => '20229751',
                'nama' => 'SMAS PGRI 3 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1262' => [
                'npsn' => '20229745',
                'nama' => 'SMAS AL MUHAJIRIN KABUPATEN PURWAKARTA',
            ],
            '1263' => [
                'npsn' => '20217357',
                'nama' => 'SMAN 1 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1264' => [
                'npsn' => '20217363',
                'nama' => 'SMAN 3 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1265' => [
                'npsn' => '69787172',
                'nama' => 'SMKS NIDA EL ADABI KABUPATEN BOGOR',
            ],
            '1266' => [
                'npsn' => '69886243',
                'nama' => 'SMKS GUNA JAYA KABUPATEN SUKABUMI',
            ],
            '1267' => [
                'npsn' => '20211498',
                'nama' => 'SMKS MUHAMMADIYAH 2 BANJARSARI KABUPATEN CIAMIS',
            ],
            '1268' => [
                'npsn' => '20268139',
                'nama' => 'SLBN KABUPATEN TASIKMALAYA',
            ],
            '1269' => [
                'npsn' => '69899623',
                'nama' => 'SMAS PESANTREN GEDONGAN KABUPATEN CIREBON',
            ],
            '1270' => [
                'npsn' => '69959434',
                'nama' => 'SMKS BHAKTI ASIH PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1271' => [
                'npsn' => '69958842',
                'nama' => 'SMKS PATRIOT MANDIRI KABUPATEN SUKABUMI',
            ],
            '1272' => [
                'npsn' => '20270898',
                'nama' => 'SMKS MARDI YUANA KABUPATEN SUKABUMI',
            ],
            '1273' => [
                'npsn' => '20276126',
                'nama' => 'SMKS AL FARIZI BANTARUJEG KABUPATEN MAJALENGKA',
            ],
            '1274' => [
                'npsn' => '20213855',
                'nama' => 'SMKS YIC JATIWANGI KABUPATEN MAJALENGKA',
            ],
            '1275' => [
                'npsn' => '20217459',
                'nama' => 'SMAS PASUNDAN PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1276' => [
                'npsn' => '20217365',
                'nama' => 'SMKS BINA KERJA PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1277' => [
                'npsn' => '60728565',
                'nama' => 'SMKN PERTANIAN KABUPATEN KARAWANG',
            ],
            '1278' => [
                'npsn' => '69849572',
                'nama' => 'SMKN 3 LINGGABUANA KABUPATEN PURWAKARTA',
            ],
            '1279' => [
                'npsn' => '20229752',
                'nama' => 'SMAS PGRI 1 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1280' => [
                'npsn' => '70010870',
                'nama' => 'SMAS FULLDAY AL MUHAJIRIN KABUPATEN PURWAKARTA',
            ],
            '1281' => [
                'npsn' => '20229758',
                'nama' => 'SMKS PRABU SAKTI 2 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1282' => [
                'npsn' => '69759053',
                'nama' => 'SMKS MUTIARA BANGSA KABUPATEN PURWAKARTA',
            ],
            '1283' => [
                'npsn' => '20265294',
                'nama' => 'SMKS TRI ASYIFA KABUPATEN KARAWANG',
            ],
            '1284' => [
                'npsn' => '20217767',
                'nama' => 'SMKS SUNAN GUNUNG JATI KARAWANG KABUPATEN KARAWANG',
            ],
            '1285' => [
                'npsn' => '20254289',
                'nama' => 'SMKS PLUS LABORATORIUM INDONESIA KABUPATEN KARAWANG',
            ],
            '1286' => [
                'npsn' => 'NP400090',
                'nama' => 'SMKS TRI PATRIA NUSANTARA KABUPATEN BOGOR',
            ],
            '1287' => [
                'npsn' => '69857917',
                'nama' => 'SMKS AL BADAR KABUPATEN PURWAKARTA',
            ],
            '1288' => [
                'npsn' => '69864644',
                'nama' => 'SMAS PANGUDI LUHUR BERNARDUS KABUPATEN BEKASI',
            ],
            '1289' => [
                'npsn' => '69947174',
                'nama' => 'SMKS DEWANTARA 2 KABUPATEN BEKASI',
            ],
            '1290' => [
                'npsn' => '20244820',
                'nama' => 'SMKN 1 CIKARANG PUSAT KABUPATEN BEKASI',
            ],
            '1291' => [
                'npsn' => '20252009',
                'nama' => 'SMAN 1 NYALINDUNG KABUPATEN SUKABUMI',
            ],
            '1292' => [
                'npsn' => '69946251',
                'nama' => 'SMKS NURUL HUDA SUKABUMI KABUPATEN SUKABUMI',
            ],
            '1293' => [
                'npsn' => '69756185',
                'nama' => 'SMKS PUTRA MANDALA I KABUPATEN SUKABUMI',
            ],
            '1294' => [
                'npsn' => '60724696',
                'nama' => 'SMKS WIRA UTAMA KABUPATEN SUKABUMI',
            ],
            '1295' => [
                'npsn' => '69975637',
                'nama' => 'SMKS BAKTI INSANI KABUPATEN SUKABUMI',
            ],
            '1296' => [
                'npsn' => '69864653',
                'nama' => 'SMKS AL FADHIILAH KABUPATEN SUKABUMI',
            ],
            '1297' => [
                'npsn' => '20237421',
                'nama' => 'SMKS PGRI JATISARI KABUPATEN KARAWANG',
            ],
            '1298' => [
                'npsn' => '69964749',
                'nama' => 'SMAS AL KAMILIYYAH BOARDING SCHOOL KABUPATEN BEKASI',
            ],
            '1299' => [
                'npsn' => '20238028',
                'nama' => 'SMAS DARUL MUTAQIN KABUPATEN BEKASI',
            ],
            '1300' => [
                'npsn' => '69728581',
                'nama' => 'SMKS FARMASI BINTANG HARAPAN KABUPATEN BEKASI',
            ],
            '1301' => [
                'npsn' => '69940018',
                'nama' => 'SMKS SURYA KENCANA KABUPATEN BEKASI',
            ],
            '1302' => [
                'npsn' => '69728579',
                'nama' => 'SMAS DAARUL QURAN KABUPATEN BEKASI',
            ],
            '1303' => [
                'npsn' => '20238007',
                'nama' => 'SMAS BAITURRAHMAN KABUPATEN BEKASI',
            ],
            '1304' => [
                'npsn' => '20232404',
                'nama' => 'SMAS TERPADU ATAM BINA INSANI KABUPATEN BOGOR',
            ],
            '1305' => [
                'npsn' => '20272053',
                'nama' => 'SMKS MUHAMMADIYAH 6 LEUWILIANG KABUPATEN BOGOR',
            ],
            '1306' => [
                'npsn' => '69888422',
                'nama' => 'SMKS AKADEMIK BANI AGUNG KABUPATEN SUKABUMI',
            ],
            '1307' => [
                'npsn' => '20253658',
                'nama' => 'SMKN PERTANIAN 1 SUKARAJA KABUPATEN SUKABUMI',
            ],
            '1308' => [
                'npsn' => '69734348',
                'nama' => 'SMAN 1 TELUKJAMBE BARAT KABUPATEN KARAWANG',
            ],
            '1309' => [
                'npsn' => '20237361',
                'nama' => 'SMAS AL KHOLIDIYAH KABUPATEN KARAWANG',
            ],
            '1310' => [
                'npsn' => '20258155',
                'nama' => 'SLBS BAG ABC PURNA BHAKTI PERTIWI KABUPATEN SUKABUMI',
            ],
            '1311' => [
                'npsn' => '69728578',
                'nama' => 'SMAS IT AL FIDAA KABUPATEN BEKASI',
            ],
            '1312' => [
                'npsn' => '20238027',
                'nama' => 'SMAS YADIKA 8 JATI MULYA KABUPATEN BEKASI',
            ],
            '1313' => [
                'npsn' => '20202250',
                'nama' => 'SMAN 1 SUKARAJA KABUPATEN SUKABUMI',
            ],
            '1314' => [
                'npsn' => '20247153',
                'nama' => 'SMAS ISLAM AL BASHRY KALAPA NUNGGAL KABUPATEN SUKABUMI',
            ],
            '1315' => [
                'npsn' => '70002292',
                'nama' => 'SMAN 1 KALAPANUNGGAL KABUPATEN SUKABUMI',
            ],
            '1316' => [
                'npsn' => '69949780',
                'nama' => 'SMKS ISLAM TERPADU MIFTAHUSSUNAN ADDAIMIAH KABUPATEN CIANJUR',
            ],
            '1317' => [
                'npsn' => '69947172',
                'nama' => 'SMAS ISLAM TERPADU HARAPAN UMAT KARAWANG KABUPATEN KARAWANG',
            ],
            '1318' => [
                'npsn' => '60728560',
                'nama' => 'SMKS BUDI MULYA KABUPATEN KARAWANG',
            ],
            '1319' => [
                'npsn' => '69830651',
                'nama' => 'SLBS PGRI GEGERBITUNG KABUPATEN SUKABUMI',
            ],
            '1320' => [
                'npsn' => '20258509',
                'nama' => 'SMKS AL FATHIMIYAH KABUPATEN KARAWANG',
            ],
            '1321' => [
                'npsn' => '69915815',
                'nama' => 'SMAN 2 TELUKJAMBE TIMUR KABUPATEN KARAWANG',
            ],
            '1322' => [
                'npsn' => '20252841',
                'nama' => 'SMKN 1 GEGERBITUNG KABUPATEN SUKABUMI',
            ],
            '1323' => [
                'npsn' => '69888757',
                'nama' => 'SMAS PGRI CITRA CIKIDANG KABUPATEN SUKABUMI',
            ],
            '1324' => [
                'npsn' => '20217780',
                'nama' => 'SMAN 1 TELUKJAMBE KABUPATEN KARAWANG',
            ],
            '1325' => [
                'npsn' => '20247157',
                'nama' => 'SMAS AL FARDIYATUSSAADAH KABUPATEN SUKABUMI',
            ],
            '1326' => [
                'npsn' => '20247160',
                'nama' => 'SMAS MUTIARA KABUPATEN SUKABUMI',
            ],
            '1327' => [
                'npsn' => '69947206',
                'nama' => 'SMAS ISLAM TERPADU MENTARI ILMU KARAWANG KABUPATEN KARAWANG',
            ],
            '1328' => [
                'npsn' => '20237363',
                'nama' => 'SMAS BUDI MULYA KABUPATEN KARAWANG',
            ],
            '1329' => [
                'npsn' => '20229779',
                'nama' => 'SMKS KARYA BHAKTI 2 KABUPATEN BEKASI',
            ],
            '1330' => [
                'npsn' => '20246479',
                'nama' => 'SMAS AZZAHIRIYAH KABUPATEN BEKASI',
            ],
            '1331' => [
                'npsn' => '69952831',
                'nama' => 'SMKS MERAH PUTIH KABUPATEN BEKASI',
            ],
            '1332' => [
                'npsn' => '20255702',
                'nama' => 'SMKS IPTEK BEKASI KABUPATEN BEKASI',
            ],
            '1333' => [
                'npsn' => '20238049',
                'nama' => 'SMKS NUSANTARA KABUPATEN BEKASI',
            ],
            '1334' => [
                'npsn' => '69954187',
                'nama' => 'SMKS BINA KHARISMA KABUPATEN BEKASI',
            ],
            '1335' => [
                'npsn' => '20275342',
                'nama' => 'SMKS KARYA BHAKTI 4 KEDUNGWARINGIN KABUPATEN BEKASI',
            ],
            '1336' => [
                'npsn' => '69896047',
                'nama' => 'SMKS BIMA SAKTI KABUPATEN BEKASI',
            ],
            '1337' => [
                'npsn' => '60726509',
                'nama' => 'SMKS TECMA CIAMBAR KABUPATEN SUKABUMI',
            ],
            '1338' => [
                'npsn' => '69770348',
                'nama' => 'SMKS YANUDA TAMA KABUPATEN CIREBON',
            ],
            '1339' => [
                'npsn' => '20237405',
                'nama' => 'SMKS KORPRI KARAWANG KABUPATEN KARAWANG',
            ],
            '1340' => [
                'npsn' => '69760680',
                'nama' => 'SLBS PGRI CIAMBAR KABUPATEN SUKABUMI',
            ],
            '1341' => [
                'npsn' => '69888716',
                'nama' => 'SMAS PGRI CIAMBAR KABUPATEN SUKABUMI',
            ],
            '1342' => [
                'npsn' => '20217763',
                'nama' => 'SMAN 2 KARAWANG KABUPATEN KARAWANG',
            ],
            '1343' => [
                'npsn' => '20202280',
                'nama' => 'SMKS AL HASANAH SUKABUMI KABUPATEN SUKABUMI',
            ],
            '1344' => [
                'npsn' => '69726062',
                'nama' => 'SMKS DOA BANGSA KABUPATEN SUKABUMI',
            ],
            '1345' => [
                'npsn' => '20217805',
                'nama' => 'SMKS KARYA UTAMA KARAWANG KABUPATEN KARAWANG',
            ],
            '1346' => [
                'npsn' => '20253660',
                'nama' => 'SMKN 1 PALABUHANRATU KABUPATEN SUKABUMI',
            ],
            '1347' => [
                'npsn' => '20244687',
                'nama' => 'SMKS MEKANIKA KABUPATEN CIREBON',
            ],
            '1348' => [
                'npsn' => '69864667',
                'nama' => 'SMKS SUHARA MANDIRI KABUPATEN GARUT',
            ],
            '1349' => [
                'npsn' => '69948410',
                'nama' => 'SMKS PGRI 2 KOTABARU KABUPATEN KARAWANG',
            ],
            '1350' => [
                'npsn' => '20237389',
                'nama' => 'SMAS PGRI CIKAMPEK KABUPATEN KARAWANG',
            ],
            '1351' => [
                'npsn' => '20246452',
                'nama' => 'SMAS ISLAM AL KAMAL KABUPATEN BEKASI',
            ],
            '1352' => [
                'npsn' => '60728541',
                'nama' => 'SMKS BHAKTI KENCANA PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '1353' => [
                'npsn' => '20258330',
                'nama' => 'SLBS BAG BC BINA HARAPAN PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '1354' => [
                'npsn' => '20211526',
                'nama' => 'SMKS PUTERA PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '1355' => [
                'npsn' => '20246324',
                'nama' => 'SMAS JEND SUDIRMAN BANDUNG KOTA BANDUNG',
            ],
            '1356' => [
                'npsn' => '20237984',
                'nama' => 'SMAN 1 BOJONGMANGU KABUPATEN BEKASI',
            ],
            '1357' => [
                'npsn' => '20237371',
                'nama' => 'SMAN 1 CIKAMPEK KABUPATEN KARAWANG',
            ],
            '1358' => [
                'npsn' => '20217798',
                'nama' => 'SMKS PGRI 1 KARAWANG KABUPATEN KARAWANG',
            ],
            '1359' => [
                'npsn' => '20217799',
                'nama' => 'SMKS PENDEKAR KARAWANG KABUPATEN KARAWANG',
            ],
            '1360' => [
                'npsn' => '20217792',
                'nama' => 'SMKS BHINNEKA KARAWANG KABUPATEN KARAWANG',
            ],
            '1361' => [
                'npsn' => '20217809',
                'nama' => 'SMKS BINA KARYA 1 KARAWANG KABUPATEN KARAWANG',
            ],
            '1362' => [
                'npsn' => '70025263',
                'nama' => 'SMAS ISLAM TELADAN AL IRSYAD AL ISLAMIYYAH KABUPATEN KARAWANG',
            ],
            '1363' => [
                'npsn' => '20217782',
                'nama' => 'SLBS BAG C TUNAS HARAPAN KARAWANG KABUPATEN KARAWANG',
            ],
            '1364' => [
                'npsn' => '20265284',
                'nama' => 'SMAS YOS SUDARSO KABUPATEN KARAWANG',
            ],
            '1365' => [
                'npsn' => '20217811',
                'nama' => 'SLBS BAG B TUNAS HARAPAN KARAWANG KABUPATEN KARAWANG',
            ],
            '1366' => [
                'npsn' => '69904548',
                'nama' => 'SMAN 6 KARAWANG KABUPATEN KARAWANG',
            ],
            '1367' => [
                'npsn' => '20258235',
                'nama' => 'SLBS AL ROSYADIYAH KABUPATEN SUKABUMI',
            ],
            '1368' => [
                'npsn' => '20202275',
                'nama' => 'SMKS UMMUL QURO SUKABUMI KABUPATEN SUKABUMI',
            ],
            '1369' => [
                'npsn' => '20265292',
                'nama' => 'SMKS ROSMA KABUPATEN KARAWANG',
            ],
            '1370' => [
                'npsn' => '20267932',
                'nama' => 'SMKS AL KAUTSAR KABUPATEN SUKABUMI',
            ],
            '1371' => [
                'npsn' => '20253651',
                'nama' => 'SMKS AL MUSTHOFA KABUPATEN SUKABUMI',
            ],
            '1372' => [
                'npsn' => '20258122',
                'nama' => 'SMKS TERPADU SINAR ISLAM KABUPATEN SUKABUMI',
            ],
            '1373' => [
                'npsn' => '69981895',
                'nama' => 'SMAS AL MASYHAD KABUPATEN SUKABUMI',
            ],
            '1374' => [
                'npsn' => '20217797',
                'nama' => 'SMKS PGRI 2 KARAWANG KABUPATEN KARAWANG',
            ],
            '1375' => [
                'npsn' => '20217808',
                'nama' => 'SMKS BINA KARYA 2 KARAWANG KABUPATEN KARAWANG',
            ],
            '1376' => [
                'npsn' => '20265273',
                'nama' => 'SMAS KOSGORO KARAWANG KABUPATEN KARAWANG',
            ],
            '1377' => [
                'npsn' => '20217915',
                'nama' => 'SMKS TUNAS MEKAR KARAWANG KABUPATEN KARAWANG',
            ],
            '1378' => [
                'npsn' => '20252214',
                'nama' => 'SMKS JAYABEKA 01 KARAWANG KABUPATEN KARAWANG',
            ],
            '1379' => [
                'npsn' => '20217916',
                'nama' => 'SMKS TRIJAYA SAKTI KARAWANG KABUPATEN KARAWANG',
            ],
            '1380' => [
                'npsn' => '20237401',
                'nama' => 'SMKS IBNU SINA KARAWANG KABUPATEN KARAWANG',
            ],
            '1381' => [
                'npsn' => '20217804',
                'nama' => 'SMKS KOSGORO KARAWANG KABUPATEN KARAWANG',
            ],
            '1382' => [
                'npsn' => '69991703',
                'nama' => 'SMKS BINA PENDIDIKAN 4 KABUPATEN KARAWANG',
            ],
            '1383' => [
                'npsn' => '20217786',
                'nama' => 'SMAN 1 KARAWANG KABUPATEN KARAWANG',
            ],
            '1384' => [
                'npsn' => '20217801',
                'nama' => 'SMKN 2 KARAWANG KABUPATEN KARAWANG',
            ],
            '1385' => [
                'npsn' => '20217765',
                'nama' => 'SMAN 4 KARAWANG KABUPATEN KARAWANG',
            ],
            '1386' => [
                'npsn' => '69972822',
                'nama' => 'SMAS IT ADZKIA KABUPATEN SUKABUMI',
            ],
            '1387' => [
                'npsn' => '20202274',
                'nama' => 'SMKS TEKNIKA CISAAT SUKABUMI KABUPATEN SUKABUMI',
            ],
            '1388' => [
                'npsn' => '60726516',
                'nama' => 'SMKS YAPAN KABUPATEN SUKABUMI',
            ],
            '1389' => [
                'npsn' => '20258121',
                'nama' => 'SMKS ISLAM PARAKANSALAK KABUPATEN SUKABUMI',
            ],
            '1390' => [
                'npsn' => '20252413',
                'nama' => 'SMKS MIHADUNAL ULA KABUPATEN SUKABUMI',
            ],
            '1391' => [
                'npsn' => '20257336',
                'nama' => 'SMAS IT DARUSSUUD TANJUNGSIANG KABUPATEN SUBANG',
            ],
            '1392' => [
                'npsn' => '20237366',
                'nama' => 'SMAS KORPRI KARAWANG KABUPATEN KARAWANG',
            ],
            '1393' => [
                'npsn' => '20217794',
                'nama' => 'SMKS PROKLAMASI KARAWANG KABUPATEN KARAWANG',
            ],
            '1394' => [
                'npsn' => '20217849',
                'nama' => 'SMKS TARUNA KARYA 2 KARAWANG KABUPATEN KARAWANG',
            ],
            '1395' => [
                'npsn' => '69957259',
                'nama' => 'SMAS TUNAS DHARMA KABUPATEN KARAWANG',
            ],
            '1396' => [
                'npsn' => '69893303',
                'nama' => 'SMKS TERPADU SULTAN GIRI KABUPATEN CIANJUR',
            ],
            '1397' => [
                'npsn' => '69961989',
                'nama' => 'SMKS CITRA NUSANTARA KABUPATEN CIANJUR',
            ],
            '1398' => [
                'npsn' => '69907646',
                'nama' => 'SMAS DAARUL MUAWANAH KABUPATEN CIANJUR',
            ],
            '1399' => [
                'npsn' => '69886263',
                'nama' => 'SMKS PELITA ANUGRAH BANGSA 1 KABUPATEN CIANJUR',
            ],
            '1400' => [
                'npsn' => '20200604',
                'nama' => 'SMAN 1 TAMANSARI KABUPATEN BOGOR',
            ],
            '1401' => [
                'npsn' => '69786600',
                'nama' => 'SMKS RAYHAN KABUPATEN BEKASI',
            ],
            '1402' => [
                'npsn' => '69753998',
                'nama' => 'SMKS DEWANTARA CIKARANG UTARA KABUPATEN BEKASI',
            ],
            '1403' => [
                'npsn' => '20245437',
                'nama' => 'SMKS HIJAU MUDA KABUPATEN BEKASI',
            ],
            '1404' => [
                'npsn' => '20218412',
                'nama' => 'SMKS PUJA BANGSA BM KABUPATEN BEKASI',
            ],
            '1405' => [
                'npsn' => '20269741',
                'nama' => 'SMAS AL ICHWAN KABUPATEN BEKASI',
            ],
            '1406' => [
                'npsn' => '20251857',
                'nama' => 'SMKS KITRI BAKTI KABUPATEN BEKASI',
            ],
            '1407' => [
                'npsn' => '20244733',
                'nama' => 'SMAS RIYADLUL JANNAH KABUPATEN BEKASI',
            ],
            '1408' => [
                'npsn' => '70008990',
                'nama' => 'SMAS TERPADU ISLAM AL AZHAR 22 KABUPATEN BEKASI',
            ],
            '1409' => [
                'npsn' => '69971042',
                'nama' => 'SMKS YASALAM EL UMMAH KABUPATEN BOGOR',
            ],
            '1410' => [
                'npsn' => '69758807',
                'nama' => 'SMKS METROPOLITAN KABUPATEN BEKASI',
            ],
            '1411' => [
                'npsn' => '20253270',
                'nama' => 'SMKS INFORMATIKA AMANAH BANGSA KABUPATEN BEKASI',
            ],
            '1412' => [
                'npsn' => '20244735',
                'nama' => 'SMKS BINA MITRA KABUPATEN BEKASI',
            ],
            '1413' => [
                'npsn' => 'NP582477',
                'nama' => 'SMAS IT ANNUR KABUPATEN BEKASI',
            ],
            '1414' => [
                'npsn' => '20253251',
                'nama' => 'SMAS BHAKTI NEGARA KAB BEKASI KABUPATEN BEKASI',
            ],
            '1415' => [
                'npsn' => '20237988',
                'nama' => 'SMAN 1 CIKARANG TIMUR KABUPATEN BEKASI',
            ],
            '1416' => [
                'npsn' => '20271912',
                'nama' => 'SMKS PUNCAK BARU KABUPATEN CIANJUR',
            ],
            '1417' => [
                'npsn' => '69928981',
                'nama' => 'SMKS MA ARIF CIDAUN KABUPATEN CIANJUR',
            ],
            '1418' => [
                'npsn' => '69786634',
                'nama' => 'SMAS PGRI CIDAUN KABUPATEN CIANJUR',
            ],
            '1419' => [
                'npsn' => '69899009',
                'nama' => 'SMAS BUDI BAKTI 2 KABUPATEN CIANJUR',
            ],
            '1420' => [
                'npsn' => '69959049',
                'nama' => 'SMKS KRIDA MANDIRI KABUPATEN BEKASI',
            ],
            '1421' => [
                'npsn' => '60725234',
                'nama' => 'SMKS ISLAM AZZHAHIRIYAH KABUPATEN BEKASI',
            ],
            '1422' => [
                'npsn' => '20258452',
                'nama' => 'SMKS IT NURUL QOLBI KABUPATEN BEKASI',
            ],
            '1423' => [
                'npsn' => '69733777',
                'nama' => 'SMKS IT CITRA BANGSA KABUPATEN BEKASI',
            ],
            '1424' => [
                'npsn' => '20218365',
                'nama' => 'SMAN 1 TARUMAJAYA KABUPATEN BEKASI',
            ],
            '1425' => [
                'npsn' => '69943589',
                'nama' => 'SMKS CITRA NIAGA NUSANTARA KABUPATEN CIANJUR',
            ],
            '1426' => [
                'npsn' => '69754520',
                'nama' => 'SMKS TUNAS KANCANA KABUPATEN CIANJUR',
            ],
            '1427' => [
                'npsn' => '20268699',
                'nama' => 'SMKS INFORMATIKA TERPADU BANDUNG KABUPATEN BANDUNG',
            ],
            '1428' => [
                'npsn' => '20227823',
                'nama' => 'SMAS ASY SYUJAIYYAH CIWIDEY KABUPATEN BANDUNG',
            ],
            '1429' => [
                'npsn' => '20227934',
                'nama' => 'SMKS BUDI BAKTI CIWIDEY KABUPATEN BANDUNG',
            ],
            '1430' => [
                'npsn' => '20254077',
                'nama' => 'SMKS SUDIRMAN KABUPATEN SUKABUMI',
            ],
            '1431' => [
                'npsn' => '69943870',
                'nama' => 'SMAS ISLAM DARUNNADWAH KABUPATEN BEKASI',
            ],
            '1432' => [
                'npsn' => '69862672',
                'nama' => 'SMKS KESEHATAN SENTRA MEDIKA KABUPATEN BEKASI',
            ],
            '1433' => [
                'npsn' => '20246387',
                'nama' => 'SMKS INDUSTRI JABABEKA KABUPATEN BEKASI',
            ],
            '1434' => [
                'npsn' => '69964623',
                'nama' => 'SMAS SANTO LEO III KABUPATEN BEKASI',
            ],
            '1435' => [
                'npsn' => '20279949',
                'nama' => 'SMKS KESEHATAN EL HURRIYAH KABUPATEN BEKASI',
            ],
            '1436' => [
                'npsn' => '69786633',
                'nama' => 'SMAS PGRI CIKADU KABUPATEN CIANJUR',
            ],
            '1437' => [
                'npsn' => '69900067',
                'nama' => 'SMAS SULTHAN BARUNA KABUPATEN CIANJUR',
            ],
            '1438' => [
                'npsn' => '69922328',
                'nama' => 'SMKS AL IKHWAN KABUPATEN CIANJUR',
            ],
            '1439' => [
                'npsn' => '69840945',
                'nama' => 'SMKS PERMATA INSAN KABUPATEN CIANJUR',
            ],
            '1440' => [
                'npsn' => '69929051',
                'nama' => 'SMAS AL MA MOEN KABUPATEN CIANJUR',
            ],
            '1441' => [
                'npsn' => '69893352',
                'nama' => 'SMKS LABORATORIUM GLOBAL KABUPATEN BEKASI',
            ],
            '1442' => [
                'npsn' => '20268742',
                'nama' => 'SMKS BINA NASIONAL INFORMATIKA KABUPATEN BEKASI',
            ],
            '1443' => [
                'npsn' => '69986554',
                'nama' => 'SMAS KRISTEN PENABUR KOTA JABABEKA KABUPATEN BEKASI',
            ],
            '1444' => [
                'npsn' => '69759171',
                'nama' => 'SMKS AL CHAIDAR KABUPATEN BEKASI',
            ],
            '1445' => [
                'npsn' => '69984299',
                'nama' => 'SMKS PLUS KARYA BHAKTI PERTIWI KABUPATEN CIANJUR',
            ],
            '1446' => [
                'npsn' => '69883258',
                'nama' => 'SMKS IT BINA WARGA KABUPATEN CIANJUR',
            ],
            '1447' => [
                'npsn' => '69888448',
                'nama' => 'SMAS PUTRA JUANG KABUPATEN CIANJUR',
            ],
            '1448' => [
                'npsn' => '69852112',
                'nama' => 'SMKS MUHAMMADIYAH HAURWANGI KABUPATEN CIANJUR',
            ],
            '1449' => [
                'npsn' => '20203703',
                'nama' => 'SMAS KARYA BAKTI KABUPATEN CIANJUR',
            ],
            '1450' => [
                'npsn' => '69726012',
                'nama' => 'SMKS NURUL HIDAYAH PASUNDAN KABUPATEN CIANJUR',
            ],
            '1451' => [
                'npsn' => '20229775',
                'nama' => 'SMKS AL AMIN CIBARUSAH KABUPATEN BEKASI',
            ],
            '1452' => [
                'npsn' => '20238029',
                'nama' => 'SMAS ISLAM YASPIA CIBARUSAH KABUPATEN BEKASI',
            ],
            '1453' => [
                'npsn' => '69971065',
                'nama' => 'SMKS TRISIMA KABUPATEN BEKASI',
            ],
            '1454' => [
                'npsn' => '69938604',
                'nama' => 'SMKS GEMA NUSANTARA KABUPATEN BEKASI',
            ],
            '1455' => [
                'npsn' => '20232374',
                'nama' => 'SMAN 1 CIOMAS KABUPATEN BOGOR',
            ],
            '1456' => [
                'npsn' => '20252505',
                'nama' => 'SMKN 1 CIJATI KABUPATEN CIANJUR',
            ],
            '1457' => [
                'npsn' => '69900084',
                'nama' => 'SMKS AL BAROKAH KABUPATEN CIANJUR',
            ],
            '1458' => [
                'npsn' => '69899988',
                'nama' => 'SMKS IT PERMATA HATI KABUPATEN CIANJUR',
            ],
            '1459' => [
                'npsn' => '69910996',
                'nama' => 'SMKS IT BUDI LUHUR KABUPATEN CIANJUR',
            ],
            '1460' => [
                'npsn' => '69989079',
                'nama' => 'SMAN 2 CIBARUSAH KABUPATEN BEKASI',
            ],
            '1461' => [
                'npsn' => '20203741',
                'nama' => 'SMAN 1 CIBINONG KABUPATEN CIANJUR',
            ],
            '1462' => [
                'npsn' => '20238035',
                'nama' => 'SMKS AL ISHLAH KABUPATEN BEKASI',
            ],
            '1463' => [
                'npsn' => '20252288',
                'nama' => 'SMAS PRESIDEN (BOARDING SCHOOL) KABUPATEN BEKASI',
            ],
            '1464' => [
                'npsn' => '20244822',
                'nama' => 'SMKS PUJA MAHARDIKA KABUPATEN BEKASI',
            ],
            '1465' => [
                'npsn' => '70007150',
                'nama' => 'SMAS IT EZZAT EL FATIR KABUPATEN BEKASI',
            ],
            '1466' => [
                'npsn' => '69898931',
                'nama' => 'SLBS SAASIH CIGUGUR KABUPATEN PANGANDARAN',
            ],
            '1467' => [
                'npsn' => '20247250',
                'nama' => 'SMKN 1 CIKARANG UTARA KABUPATEN BEKASI',
            ],
            '1468' => [
                'npsn' => '20253982',
                'nama' => 'SMAS PGRI CIBADAK KABUPATEN SUKABUMI',
            ],
            '1469' => [
                'npsn' => '69856657',
                'nama' => 'SMKS IT NURUL ITTIHAD KABUPATEN CIANJUR',
            ],
            '1470' => [
                'npsn' => '69840933',
                'nama' => 'SMKS REFERENCIA AURORA KABUPATEN CIANJUR',
            ],
            '1471' => [
                'npsn' => '20252048',
                'nama' => 'SMAS PGRI TAKOKAK KABUPATEN CIANJUR',
            ],
            '1472' => [
                'npsn' => '69888748',
                'nama' => 'SMKS PGRI BOJONGMANGU KABUPATEN BEKASI',
            ],
            '1473' => [
                'npsn' => '20271401',
                'nama' => 'SMKS SMART KABUPATEN BEKASI',
            ],
            '1474' => [
                'npsn' => '20253810',
                'nama' => 'SMAS DON BOSCO III KABUPATEN BEKASI',
            ],
            '1475' => [
                'npsn' => '20244764',
                'nama' => 'SMAS IT AL LUTFAH KABUPATEN BEKASI',
            ],
            '1476' => [
                'npsn' => '20238018',
                'nama' => 'SMAS KRISTEN NASIONAL ANGLO KABUPATEN BEKASI',
            ],
            '1477' => [
                'npsn' => '20238032',
                'nama' => 'SMKN 1 CIKARANG SELATAN KABUPATEN BEKASI',
            ],
            '1478' => [
                'npsn' => '69920079',
                'nama' => 'SMKS AR ROSYID CAMPAKA PUTRA KABUPATEN CIANJUR',
            ],
            '1479' => [
                'npsn' => '69900347',
                'nama' => 'SMKS AL FARIS KABUPATEN CIANJUR',
            ],
            '1480' => [
                'npsn' => '20227856',
                'nama' => 'SMAS MAJALAYA PUTRA KABUPATEN BANDUNG',
            ],
            '1481' => [
                'npsn' => '20252399',
                'nama' => 'SMKN 1 CAMPAKA KABUPATEN CIANJUR',
            ],
            '1482' => [
                'npsn' => '69904627',
                'nama' => 'SMKS AL MANAR ISLAMIC SCHOOL KABUPATEN BEKASI',
            ],
            '1483' => [
                'npsn' => '69786190',
                'nama' => 'SMKS MANDIRI KABUPATEN BEKASI',
            ],
            '1484' => [
                'npsn' => '20253229',
                'nama' => 'SMKS BM ABDI NEGARA 2 CIBARUSAH KABUPATEN BEKASI',
            ],
            '1485' => [
                'npsn' => '69756186',
                'nama' => 'SLBS BAG A DAN A GANDA BINAR INSAN ISTIQOMAH KABUPATEN BEKASI',
            ],
            '1486' => [
                'npsn' => '69899523',
                'nama' => 'SMKS ALAM KARYA KABUPATEN BEKASI',
            ],
            '1487' => [
                'npsn' => '20244734',
                'nama' => 'SMKN 1 CIBARUSAH KABUPATEN BEKASI',
            ],
            '1488' => [
                'npsn' => '69874000',
                'nama' => 'SMAS CIMENTENG KABUPATEN CIANJUR',
            ],
            '1489' => [
                'npsn' => '69888720',
                'nama' => 'SMKS HIDAYATUL MUSTOFA KABUPATEN CIANJUR',
            ],
            '1490' => [
                'npsn' => '20203746',
                'nama' => 'SMKS SILIWANGI AMS KABUPATEN CIANJUR',
            ],
            '1491' => [
                'npsn' => '69883305',
                'nama' => 'SMKS MUTIARA QOLBU CIANJUR KABUPATEN CIANJUR',
            ],
            '1492' => [
                'npsn' => '69973143',
                'nama' => 'SMAS PGRI SINDANGBARANG KABUPATEN CIANJUR',
            ],
            '1493' => [
                'npsn' => '20245433',
                'nama' => 'SMAN 2 CIKARANG PUSAT KABUPATEN BEKASI',
            ],
            '1494' => [
                'npsn' => '69988559',
                'nama' => 'SMKS ANANDA MITRA INDUSTRI DELTAMAS KABUPATEN BEKASI',
            ],
            '1495' => [
                'npsn' => '20254247',
                'nama' => 'SMKS ISLAM AL MUHAJIRIN BOARDING SCHOOL KABUPATEN BEKASI',
            ],
            '1496' => [
                'npsn' => '20238008',
                'nama' => 'SMAS BINA BANGSA SUKATANI KABUPATEN BEKASI',
            ],
            '1497' => [
                'npsn' => '20252868',
                'nama' => 'SMKN 1 SUKANAGARA KABUPATEN CIANJUR',
            ],
            '1498' => [
                'npsn' => '20218353',
                'nama' => 'SMAN 1 SUKATANI KABUPATEN BEKASI',
            ],
            '1499' => [
                'npsn' => '69786396',
                'nama' => 'SMKS PUTERA PERTIWI INDONESIA KABUPATEN CIANJUR',
            ],
            '1500' => [
                'npsn' => '69786375',
                'nama' => 'SMKS BINA KARYA BANGSA KABUPATEN CIANJUR',
            ],
            '1501' => [
                'npsn' => '20252384',
                'nama' => 'SMKN 1 CUGENANG KABUPATEN CIANJUR',
            ],
            '1502' => [
                'npsn' => '20247201',
                'nama' => 'SMKS TARUNA BHAKTI KABUPATEN BEKASI',
            ],
            '1503' => [
                'npsn' => '70035539',
                'nama' => 'SMAS KRISTEN TUNAS BANGSA KABUPATEN BEKASI',
            ],
            '1504' => [
                'npsn' => '69930294',
                'nama' => 'SMKS TEKNOLOGI INDUSTRI MANDIRI KABUPATEN BEKASI',
            ],
            '1505' => [
                'npsn' => '20276431',
                'nama' => 'SMKS GARUDA NUSANTARA KABUPATEN BEKASI',
            ],
            '1506' => [
                'npsn' => '20252020',
                'nama' => 'SMAS IIBS KABUPATEN BEKASI',
            ],
            '1507' => [
                'npsn' => '20268752',
                'nama' => 'SMKS AL LUTHFAH KABUPATEN BEKASI',
            ],
            '1508' => [
                'npsn' => '69874367',
                'nama' => 'SMAS AL HIDAYAH KABUPATEN CIANJUR',
            ],
            '1509' => [
                'npsn' => '69852113',
                'nama' => 'SMKS BINA INSANI KABUPATEN CIANJUR',
            ],
            '1510' => [
                'npsn' => '20258462',
                'nama' => 'SLBS BINA KARYA KABUPATEN BANDUNG',
            ],
            '1511' => [
                'npsn' => '20227966',
                'nama' => 'SMKS TAMANSISWA RANCAEKEK KABUPATEN BANDUNG',
            ],
            '1512' => [
                'npsn' => '69788554',
                'nama' => 'SMKS SWASTA MUTIARA HUSADA KABUPATEN BEKASI',
            ],
            '1513' => [
                'npsn' => '69841003',
                'nama' => 'SMAS MUTIARA ISLAMI PLUS KABUPATEN BEKASI',
            ],
            '1514' => [
                'npsn' => '69899932',
                'nama' => 'SMAS PESANTREN DARUL IKHLAS KABUPATEN BEKASI',
            ],
            '1515' => [
                'npsn' => '70001343',
                'nama' => 'SMKS MANBA`UL ULUM KABUPATEN BEKASI',
            ],
            '1516' => [
                'npsn' => '20238009',
                'nama' => 'SMAS BINA NEGARA KABUPATEN BEKASI',
            ],
            '1517' => [
                'npsn' => '69786200',
                'nama' => 'SMKS AL JAZARI KABUPATEN BEKASI',
            ],
            '1518' => [
                'npsn' => '20227834',
                'nama' => 'SMAS DARUL FALAH CIHAMPELAS KABUPATEN BANDUNG BARAT',
            ],
            '1519' => [
                'npsn' => '20279923',
                'nama' => 'SMKS WYATA DHARMA KABUPATEN BANDUNG BARAT',
            ],
            '1520' => [
                'npsn' => '69733999',
                'nama' => 'SMKS MANDALA PUTRA 2 KABUPATEN BANDUNG BARAT',
            ],
            '1521' => [
                'npsn' => '20228433',
                'nama' => 'SMAS DAARUL ILMI CIPEUNDEUY KABUPATEN BANDUNG BARAT',
            ],
            '1522' => [
                'npsn' => '20206151',
                'nama' => 'SMAN 1 BALEENDAH KABUPATEN BANDUNG',
            ],
            '1523' => [
                'npsn' => '69969192',
                'nama' => 'SMAS BUNYAN INDONESIA KABUPATEN BEKASI',
            ],
            '1524' => [
                'npsn' => '20268861',
                'nama' => 'SMKS TUNAS UNGGUL KABUPATEN BEKASI',
            ],
            '1525' => [
                'npsn' => '20258057',
                'nama' => 'SMKS INSAN MANDIRI KABUPATEN BEKASI',
            ],
            '1526' => [
                'npsn' => '20202282',
                'nama' => 'SMKS BAHARI GUPPI YPAI KABUPATEN SUKABUMI',
            ],
            '1527' => [
                'npsn' => '20229822',
                'nama' => 'SMKS BINA NEGARA BALEENDAH KABUPATEN BANDUNG',
            ],
            '1528' => [
                'npsn' => '20228467',
                'nama' => 'SMAS MUTIARA SANDI KABUPATEN BANDUNG',
            ],
            '1529' => [
                'npsn' => '20259576',
                'nama' => 'SMKS BPPI BALEENDAH KABUPATEN BANDUNG',
            ],
            '1530' => [
                'npsn' => '20251790',
                'nama' => 'SMAS YPPI BALEENDAH KABUPATEN BANDUNG',
            ],
            '1531' => [
                'npsn' => '20238038',
                'nama' => 'SMKS ISLAM AN NUUR KABUPATEN BEKASI',
            ],
            '1532' => [
                'npsn' => '20238020',
                'nama' => 'SMAS ISLAM PB SOEDIRMAN 2 BEKASI KABUPATEN BEKASI',
            ],
            '1533' => [
                'npsn' => '20279951',
                'nama' => 'SMKS AN NUR KABUPATEN BEKASI',
            ],
            '1534' => [
                'npsn' => '69758308',
                'nama' => 'SMKS AL FUDHOLA KABUPATEN BEKASI',
            ],
            '1535' => [
                'npsn' => '20244766',
                'nama' => 'SMKN 1 TARUMAJAYA KABUPATEN BEKASI',
            ],
            '1536' => [
                'npsn' => '20246388',
                'nama' => 'SMKS PERMATA KABUPATEN BEKASI',
            ],
            '1537' => [
                'npsn' => '20271466',
                'nama' => 'SMKS AL MUJAHIDIN KABUPATEN BEKASI',
            ],
            '1538' => [
                'npsn' => '20271496',
                'nama' => 'SMKS ASSA ADATUL ABADIYAH KABUPATEN BEKASI',
            ],
            '1539' => [
                'npsn' => '20251860',
                'nama' => 'SMAS IMAN MUARAGEMBONG KABUPATEN BEKASI',
            ],
            '1540' => [
                'npsn' => '69889026',
                'nama' => 'SMAS TERPADU PELITA BANGSA KABUPATEN BEKASI',
            ],
            '1541' => [
                'npsn' => '69759172',
                'nama' => 'SMKS YAPINUH KABUPATEN BEKASI',
            ],
            '1542' => [
                'npsn' => '20667660',
                'nama' => 'SLBS RAMA SEJAHTERA KABUPATEN BANDUNG BARAT',
            ],
            '1543' => [
                'npsn' => '69975633',
                'nama' => 'SMKN 2 SETU KABUPATEN BEKASI',
            ],
            '1544' => [
                'npsn' => '69888556',
                'nama' => 'SMKS INSAN NASIONAL KABUPATEN BEKASI',
            ],
            '1545' => [
                'npsn' => '69765809',
                'nama' => 'SMKS INDUSTRI NASIONAL 1 KABUPATEN BEKASI',
            ],
            '1546' => [
                'npsn' => '69969322',
                'nama' => 'SMKS NURUL AZHAR KABUPATEN BEKASI',
            ],
            '1547' => [
                'npsn' => '20238014',
                'nama' => 'SMAS ISLAM MIFTAHUL ULUM KABUPATEN BEKASI',
            ],
            '1548' => [
                'npsn' => '20279925',
                'nama' => 'SMKS INFORMATIKA FITRAH INSANI KABUPATEN BANDUNG BARAT',
            ],
            '1549' => [
                'npsn' => '20267658',
                'nama' => 'SLBS NGAMPRAH RAYA KABUPATEN BANDUNG BARAT',
            ],
            '1550' => [
                'npsn' => '69773518',
                'nama' => 'SLBS SABK GEMILANG RAHAYU ARBIAH KABUPATEN BANDUNG BARAT',
            ],
            '1551' => [
                'npsn' => '69881552',
                'nama' => 'SMKS TERPADU MIFTAHUL HASANAH KABUPATEN CIANJUR',
            ],
            '1552' => [
                'npsn' => '69949271',
                'nama' => 'SMKS IT AL HASANAH KABUPATEN CIANJUR',
            ],
            '1553' => [
                'npsn' => '20271411',
                'nama' => 'SMKS MITRA PASUNDAN KABUPATEN CIANJUR',
            ],
            '1554' => [
                'npsn' => '69725572',
                'nama' => 'SMKS AL MUKHLISIYAH KABUPATEN GARUT',
            ],
            '1555' => [
                'npsn' => '69774924',
                'nama' => 'SMKS IT ATAMMUL HUSNA KABUPATEN BEKASI',
            ],
            '1556' => [
                'npsn' => '70032507',
                'nama' => 'SMKS IT ATTAQWA PUSAT KABUPATEN BEKASI',
            ],
            '1557' => [
                'npsn' => '69856223',
                'nama' => 'SMKS KESEHATAN PRIMA INDONESIA KABUPATEN BEKASI',
            ],
            '1558' => [
                'npsn' => '69881361',
                'nama' => 'SMKS BANI ROSA INSANI KABUPATEN BEKASI',
            ],
            '1559' => [
                'npsn' => '69786497',
                'nama' => 'SMKS ADZIKRO KUSUMAH KABUPATEN CIANJUR',
            ],
            '1560' => [
                'npsn' => '69774723',
                'nama' => 'SMKS ISTIQOMAH MARUYUNG KABUPATEN BANDUNG',
            ],
            '1561' => [
                'npsn' => '69883648',
                'nama' => 'SMKS AROFAH KABUPATEN BANDUNG',
            ],
            '1562' => [
                'npsn' => '20228512',
                'nama' => 'SMKS AL ISLAM PACET KABUPATEN BANDUNG',
            ],
            '1563' => [
                'npsn' => '20258373',
                'nama' => 'SMKS KESEHATAN ZAMZAM KURNIA KABUPATEN BEKASI',
            ],
            '1564' => [
                'npsn' => '69854723',
                'nama' => 'SLBS BUNGA INDONESIA KABUPATEN BEKASI',
            ],
            '1565' => [
                'npsn' => '20214970',
                'nama' => 'SMAN 1 ASTANAJAPURA KABUPATEN CIREBON',
            ],
            '1566' => [
                'npsn' => '20268860',
                'nama' => 'SMAS YADIKA 13 KABUPATEN BEKASI',
            ],
            '1567' => [
                'npsn' => '20271498',
                'nama' => 'SMKS TEKNOLOGI ATTAQWA 04 SRIAMUR KABUPATEN BEKASI',
            ],
            '1568' => [
                'npsn' => '69940507',
                'nama' => 'SMKS IT AL FATH JALEN KABUPATEN BEKASI',
            ],
            '1569' => [
                'npsn' => '20253561',
                'nama' => 'SMAS ISLAM AL MUNIR KABUPATEN BEKASI',
            ],
            '1570' => [
                'npsn' => '20203736',
                'nama' => 'SMAS PLUS PGRI CIRANJANG KABUPATEN CIANJUR',
            ],
            '1571' => [
                'npsn' => '20252364',
                'nama' => 'SMKS UTAMA CIRANJANG KABUPATEN CIANJUR',
            ],
            '1572' => [
                'npsn' => '69900219',
                'nama' => 'SMAS IT AL HUDA KABUPATEN CIANJUR',
            ],
            '1573' => [
                'npsn' => '69728582',
                'nama' => 'SMKS KESEHATAN FAHD ISLAMIC SCHOOL KABUPATEN BEKASI',
            ],
            '1574' => [
                'npsn' => '69758805',
                'nama' => 'SMKS PELAYARAN INTERNASIONAL BEKASI KABUPATEN BEKASI',
            ],
            '1575' => [
                'npsn' => '20280609',
                'nama' => 'SMKS ATTAQWA 03 BABELAN KABUPATEN BEKASI',
            ],
            '1576' => [
                'npsn' => '20271664',
                'nama' => 'SMKS ATTAQWA 05 KEBALEN KABUPATEN BEKASI',
            ],
            '1577' => [
                'npsn' => '20218459',
                'nama' => 'SMKS TEKNOLOGI PEMBANGUNAN KABUPATEN BEKASI',
            ],
            '1578' => [
                'npsn' => '20270824',
                'nama' => 'SMKS ATTAQWA 02 KABUPATEN BEKASI',
            ],
            '1579' => [
                'npsn' => '20253898',
                'nama' => 'SMAS ISLAM ANNUR BABELAN KABUPATEN BEKASI',
            ],
            '1580' => [
                'npsn' => '20223029',
                'nama' => 'SMAS TAMAN HARAPAN 1 KOTA BEKASI',
            ],
            '1581' => [
                'npsn' => '20203700',
                'nama' => 'SMAS COKROAMINOTO CIANJUR KABUPATEN CIANJUR',
            ],
            '1582' => [
                'npsn' => '20203732',
                'nama' => 'SMKS PGRI 3 CIANJUR KABUPATEN CIANJUR',
            ],
            '1583' => [
                'npsn' => '69786685',
                'nama' => 'SLBS BAG B DAN C KRISTEN EPHPHATHA INDONESIA KABUPATEN BEKASI',
            ],
            '1584' => [
                'npsn' => '20269061',
                'nama' => 'SMKS SATRIA NUSANTARA KABUPATEN BEKASI',
            ],
            '1585' => [
                'npsn' => '20247319',
                'nama' => 'SMAS ATHENA KABUPATEN BEKASI',
            ],
            '1586' => [
                'npsn' => '20267917',
                'nama' => 'SMKS GLOBAL TEKNOLOGI KABUPATEN BEKASI',
            ],
            '1587' => [
                'npsn' => '20268791',
                'nama' => 'SMKS YADIKA 13 KABUPATEN BEKASI',
            ],
            '1588' => [
                'npsn' => '20227885',
                'nama' => 'SMAS YAS SINDANGKERTA KABUPATEN BANDUNG BARAT',
            ],
            '1589' => [
                'npsn' => '69925403',
                'nama' => 'SMKS HIKARI KABUPATEN BANDUNG BARAT',
            ],
            '1590' => [
                'npsn' => '69881369',
                'nama' => 'SMKS IT BUSTANUL ARIFIN KABUPATEN BANDUNG BARAT',
            ],
            '1591' => [
                'npsn' => '20279926',
                'nama' => 'SMKS DWI PUTRA KABUPATEN BANDUNG BARAT',
            ],
            '1592' => [
                'npsn' => '69786290',
                'nama' => 'SMAS LGBP SINDANGKERTA KABUPATEN BANDUNG BARAT',
            ],
            '1593' => [
                'npsn' => '20203744',
                'nama' => 'SMAN 1 PACET KABUPATEN CIANJUR',
            ],
            '1594' => [
                'npsn' => '69979683',
                'nama' => 'SMKS PELITA ANUGRAH BANGSA 2 KABUPATEN CIANJUR',
            ],
            '1595' => [
                'npsn' => '20255009',
                'nama' => 'SMKS BINA NUSA KABUPATEN BEKASI',
            ],
            '1596' => [
                'npsn' => '69897257',
                'nama' => 'SMKS INDUSTRI NUSANTARA BABELAN KABUPATEN BEKASI',
            ],
            '1597' => [
                'npsn' => '69899090',
                'nama' => 'SMKS MAGDA NUSANTARA KABUPATEN BEKASI',
            ],
            '1598' => [
                'npsn' => '20267753',
                'nama' => 'SLBN SUKANEGARA KABUPATEN CIANJUR',
            ],
            '1599' => [
                'npsn' => '20268204',
                'nama' => 'SMKS AL HASYIMIYAH KABUPATEN CIANJUR',
            ],
            '1600' => [
                'npsn' => '20251787',
                'nama' => 'SMAS SUMUR BANDUNG CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '1601' => [
                'npsn' => '20279922',
                'nama' => 'SMKS BINA SISWA 2 KABUPATEN BANDUNG BARAT',
            ],
            '1602' => [
                'npsn' => '20218359',
                'nama' => 'SMAN 1 BABELAN KABUPATEN BEKASI',
            ],
            '1603' => [
                'npsn' => '69899721',
                'nama' => 'SLBS RAISYA PURI KABUPATEN BEKASI',
            ],
            '1604' => [
                'npsn' => '20218350',
                'nama' => 'SMKS PGRI TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1605' => [
                'npsn' => '20253675',
                'nama' => 'SMKS TELEKOMUNIKASI TELESANDI KABUPATEN BEKASI',
            ],
            '1606' => [
                'npsn' => '20251809',
                'nama' => 'SMAS YAPINK TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1607' => [
                'npsn' => '20279950',
                'nama' => 'SMKS MANTIYAH KABUPATEN BEKASI',
            ],
            '1608' => [
                'npsn' => '20238015',
                'nama' => 'SMAS JAYA SUTI ABADI KABUPATEN BEKASI',
            ],
            '1609' => [
                'npsn' => '20256576',
                'nama' => 'SMKS BOEDI LUHUR KABUPATEN BEKASI',
            ],
            '1610' => [
                'npsn' => '20238037',
                'nama' => 'SMKS PLUS AN NADWAH TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1611' => [
                'npsn' => '69982031',
                'nama' => 'SMAN 8 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1612' => [
                'npsn' => '69771380',
                'nama' => 'SMKS AL FAJAR KABUPATEN BOGOR',
            ],
            '1613' => [
                'npsn' => '70034131',
                'nama' => 'SMKS BINA INDUSTRI KABUPATEN BEKASI',
            ],
            '1614' => [
                'npsn' => '20271602',
                'nama' => 'SMKS HASANAH FATHIMIYAH KABUPATEN BEKASI',
            ],
            '1615' => [
                'npsn' => '69914381',
                'nama' => 'SMKS IT BINA MADANI KABUPATEN BEKASI',
            ],
            '1616' => [
                'npsn' => '20258340',
                'nama' => 'SLBS BAG BC WIJAYA KUSUMAH KABUPATEN BEKASI',
            ],
            '1617' => [
                'npsn' => '20244052',
                'nama' => 'SMAS AL MAGHFIRAH KABUPATEN BEKASI',
            ],
            '1618' => [
                'npsn' => '20229773',
                'nama' => 'SMKS 11 MARET CIKARANG BARAT KABUPATEN BEKASI',
            ],
            '1619' => [
                'npsn' => '69893607',
                'nama' => 'SMKS TERPADU H. ABDUL MALIK KABUPATEN BEKASI',
            ],
            '1620' => [
                'npsn' => '20252045',
                'nama' => 'SMKS IPPS CIPANAS CIANJUR KABUPATEN CIANJUR',
            ],
            '1621' => [
                'npsn' => '20203735',
                'nama' => 'SMAS PGRI CIPANAS KABUPATEN CIANJUR',
            ],
            '1622' => [
                'npsn' => '69956533',
                'nama' => 'SMKS SUFFAH AL HAFIIZ KABUPATEN CIANJUR',
            ],
            '1623' => [
                'npsn' => '69942478',
                'nama' => 'SMAS MULTI ISTIQLAL KABUPATEN BEKASI',
            ],
            '1624' => [
                'npsn' => '69728580',
                'nama' => 'SMKS BINA JAYA PRESTASI KABUPATEN BEKASI',
            ],
            '1625' => [
                'npsn' => '20257102',
                'nama' => 'SMAS IT THORIQ BIN ZIYAD KABUPATEN BEKASI',
            ],
            '1626' => [
                'npsn' => '69786681',
                'nama' => 'SLBS ANANDA MANDIRI KABUPATEN BEKASI',
            ],
            '1627' => [
                'npsn' => '20258461',
                'nama' => 'SMKS KARYA BANGSA KABUPATEN BEKASI',
            ],
            '1628' => [
                'npsn' => '20238003',
                'nama' => 'SMAS AL MUSLIM KABUPATEN BEKASI',
            ],
            '1629' => [
                'npsn' => '20268522',
                'nama' => 'SMKS TUNAS TEKNOLOGI KABUPATEN BEKASI',
            ],
            '1630' => [
                'npsn' => '69949642',
                'nama' => 'SMAS IT MUTIARA HIKMAH KABUPATEN BEKASI',
            ],
            '1631' => [
                'npsn' => '60726703',
                'nama' => 'SMKS PENERBANGAN BAKTI NUSANTARA KABUPATEN BEKASI',
            ],
            '1632' => [
                'npsn' => '20270561',
                'nama' => 'SMKS TRIDAYA KABUPATEN BEKASI',
            ],
            '1633' => [
                'npsn' => '20229778',
                'nama' => 'SMKS BINA PENDIDIKAN KABUPATEN BEKASI',
            ],
            '1634' => [
                'npsn' => '69754539',
                'nama' => 'SMKS MITRA INDUSTRI KABUPATEN BEKASI',
            ],
            '1635' => [
                'npsn' => '69962642',
                'nama' => 'SMKS AL LATHIFAH KABUPATEN BEKASI',
            ],
            '1636' => [
                'npsn' => '20218377',
                'nama' => 'SMKN 2 CIKARANG BARAT KABUPATEN BEKASI',
            ],
            '1637' => [
                'npsn' => '20218370',
                'nama' => 'SMKS KARYA NUSANTARA KABUPATEN BEKASI',
            ],
            '1638' => [
                'npsn' => '60730351',
                'nama' => 'SMKS BAHRUL MAGHFIROH KABUPATEN CIANJUR',
            ],
            '1639' => [
                'npsn' => '69830537',
                'nama' => 'SMKS ASSHIDDIQIYAH 10 KABUPATEN CIANJUR',
            ],
            '1640' => [
                'npsn' => '70033961',
                'nama' => 'SMAS IT INSAN MANDIRI ARRAHMAN KABUPATEN CIANJUR',
            ],
            '1641' => [
                'npsn' => '69976881',
                'nama' => 'SMKS BHAKTI PUTRA KABUPATEN BANDUNG',
            ],
            '1642' => [
                'npsn' => 'NP971223',
                'nama' => 'SMKS BHAKTI MULIA UTAMA KABUPATEN BANDUNG',
            ],
            '1643' => [
                'npsn' => '20238042',
                'nama' => 'SMKS DEWANTARA KABUPATEN BEKASI',
            ],
            '1644' => [
                'npsn' => '69904930',
                'nama' => 'SMKS DHARMA PARAMITHA KABUPATEN BEKASI',
            ],
            '1645' => [
                'npsn' => '20238046',
                'nama' => 'SMKS MITRA KARYA KABUPATEN BEKASI',
            ],
            '1646' => [
                'npsn' => '20238045',
                'nama' => 'SMKS KARYA PEMBAHARUAN KABUPATEN BEKASI',
            ],
            '1647' => [
                'npsn' => '20252197',
                'nama' => 'SMKS BINA PATRIOT KABUPATEN BEKASI',
            ],
            '1648' => [
                'npsn' => '69787351',
                'nama' => 'SMKS HS AGUNG KABUPATEN BEKASI',
            ],
            '1649' => [
                'npsn' => '69909689',
                'nama' => 'SMKS MIFTAHUL HUDA KABUPATEN CIANJUR',
            ],
            '1650' => [
                'npsn' => '69939970',
                'nama' => 'SMAS PRIMA TELADAN KABUPATEN CIANJUR',
            ],
            '1651' => [
                'npsn' => '20252189',
                'nama' => 'SMAS TERPADU AL MASHUM MARDIYAH KABUPATEN CIANJUR',
            ],
            '1652' => [
                'npsn' => '69939505',
                'nama' => 'SMKS MAN AROFA KABUPATEN CIANJUR',
            ],
            '1653' => [
                'npsn' => '69947131',
                'nama' => 'SMAS IT AL ARABI KABUPATEN BEKASI',
            ],
            '1654' => [
                'npsn' => '20238002',
                'nama' => 'SMAS AL MAKMUR KABUPATEN BEKASI',
            ],
            '1655' => [
                'npsn' => '69989763',
                'nama' => 'SMAS IT NURUL FAJRI KABUPATEN BEKASI',
            ],
            '1656' => [
                'npsn' => '20229780',
                'nama' => 'SMKS GELORA INDUSTRI KABUPATEN BEKASI',
            ],
            '1657' => [
                'npsn' => '20227840',
                'nama' => 'SMAS HARAPAN CIPONGKOR KABUPATEN BANDUNG BARAT',
            ],
            '1658' => [
                'npsn' => '69943804',
                'nama' => 'SMKS AZZAHRA KABUPATEN BANDUNG BARAT',
            ],
            '1659' => [
                'npsn' => '69971039',
                'nama' => 'SMKS BINA MANDIRI KABUPATEN BANDUNG BARAT',
            ],
            '1660' => [
                'npsn' => '69947412',
                'nama' => 'SMKS DHARMA AGUNG SIDAMULIH KABUPATEN PANGANDARAN',
            ],
            '1661' => [
                'npsn' => '69757152',
                'nama' => 'SMKS BINA SATYA MANDIRI KOTA SUKABUMI',
            ],
            '1662' => [
                'npsn' => '20237986',
                'nama' => 'SMAN 1 CIKARANG BARAT KABUPATEN BEKASI',
            ],
            '1663' => [
                'npsn' => '20253753',
                'nama' => 'SMAS ISLAM KARANGBAHAGIA KABUPATEN BEKASI',
            ],
            '1664' => [
                'npsn' => '20279927',
                'nama' => 'SMKS BINA PUTRA KABUPATEN BANDUNG BARAT',
            ],
            '1665' => [
                'npsn' => '69928417',
                'nama' => 'SLBS BHINNEKA KABUPATEN BANDUNG BARAT',
            ],
            '1666' => [
                'npsn' => '69725703',
                'nama' => 'SMKS TUNATSU KABUPATEN BANDUNG BARAT',
            ],
            '1667' => [
                'npsn' => '20258212',
                'nama' => 'SLBS YPK CIJULANG KABUPATEN PANGANDARAN',
            ],
            '1668' => [
                'npsn' => '20280595',
                'nama' => 'SLBS KASIH IBU KOTA BANDUNG',
            ],
            '1669' => [
                'npsn' => '20219867',
                'nama' => 'SLBS BAG ABCD CARINGIN KOTA BANDUNG',
            ],
            '1670' => [
                'npsn' => '20219880',
                'nama' => 'SLBS GEMILANG KOTA BANDUNG',
            ],
            '1671' => [
                'npsn' => '20247287',
                'nama' => 'SMAS BAITURRAHMAN KOTA BANDUNG',
            ],
            '1672' => [
                'npsn' => '20252563',
                'nama' => 'SMKN 1 CIHAMPELAS KABUPATEN BANDUNG BARAT',
            ],
            '1673' => [
                'npsn' => '20218379',
                'nama' => 'SMAN 2 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1674' => [
                'npsn' => '69893297',
                'nama' => 'SMKS KESEHATAN TAMBUN ISLAMIC SCHOOL KABUPATEN BEKASI',
            ],
            '1675' => [
                'npsn' => '70030489',
                'nama' => 'SMAS SAMPOERNA KABUPATEN BOGOR',
            ],
            '1676' => [
                'npsn' => '70031656',
                'nama' => 'SMKS TARUNA TERPADU 3 KABUPATEN BOGOR',
            ],
            '1677' => [
                'npsn' => '69843548',
                'nama' => 'SMKS PELITA CIANJUR KABUPATEN CIANJUR',
            ],
            '1678' => [
                'npsn' => '70034375',
                'nama' => 'SLBN CIHAURBEUTI KABUPATEN CIAMIS',
            ],
            '1679' => [
                'npsn' => '70031960',
                'nama' => 'SMKS TERPADU AL HASAN KABUPATEN CIAMIS',
            ],
            '1680' => [
                'npsn' => '20271063',
                'nama' => 'SLBS BAG A DAN B BINA ASIH KABUPATEN CIANJUR',
            ],
            '1681' => [
                'npsn' => '20238041',
                'nama' => 'SMKS DAARUN NAIM KABUPATEN BEKASI',
            ],
            '1682' => [
                'npsn' => '20258316',
                'nama' => 'SLBS BAG C PANCARAN KASIH KOTA CIREBON',
            ],
            '1683' => [
                'npsn' => '70025399',
                'nama' => 'SMAS KRISTEN CORNERSTONE GLOBAL ACADEMY KABUPATEN BEKASI',
            ],
            '1684' => [
                'npsn' => '70031477',
                'nama' => 'SMAS IT AT TAKWIN KABUPATEN SUKABUMI',
            ],
            '1685' => [
                'npsn' => '70029865',
                'nama' => 'SMAS IT DAARUT TAQWA ASYAMSURIYYAH KABUPATEN CIANJUR',
            ],
            '1686' => [
                'npsn' => '70032752',
                'nama' => 'SMKS SKYE DIGIPRENEUR KABUPATEN BANDUNG',
            ],
            '1687' => [
                'npsn' => '70032332',
                'nama' => 'SMAS IT IBNU HAFIDZ KABUPATEN SUBANG',
            ],
            '1688' => [
                'npsn' => '69759066',
                'nama' => 'SMKN 1 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1689' => [
                'npsn' => '69902897',
                'nama' => 'SMAS IT KI HAJAR DEWANTORO KABUPATEN BEKASI',
            ],
            '1690' => [
                'npsn' => '70031480',
                'nama' => 'SMAS GLOBAL SOLUSI INDONESIA KABUPATEN BANDUNG BARAT',
            ],
            '1691' => [
                'npsn' => '70032579',
                'nama' => 'SMAS EL FITRA KOTA BANDUNG',
            ],
            '1692' => [
                'npsn' => '70033357',
                'nama' => 'SMKS MITRA BANGSA KABUPATEN SUBANG',
            ],
            '1693' => [
                'npsn' => '70028130',
                'nama' => 'SMAS KRISTEN BPK PENABUR BANDA KOTA BANDUNG',
            ],
            '1694' => [
                'npsn' => '70031852',
                'nama' => 'SMKS SINERGI BINA BANGSA KABUPATEN SUKABUMI',
            ],
            '1695' => [
                'npsn' => '70033364',
                'nama' => 'SMAS TRI JAYA NUSANTARA KABUPATEN SUKABUMI',
            ],
            '1696' => [
                'npsn' => '70030074',
                'nama' => 'SMKS ROUDLOTUL ULUM KABUPATEN BANDUNG BARAT',
            ],
            '1697' => [
                'npsn' => '70034792',
                'nama' => 'SMAS PONDOK PESANTREN AMINUL UMMAH KABUPATEN GARUT',
            ],
            '1698' => [
                'npsn' => '70030725',
                'nama' => 'SMKS QIROATUSSAB`AH KUDANG KABUPATEN GARUT',
            ],
            '1699' => [
                'npsn' => '70033200',
                'nama' => 'SMKS NURUL HUDA JANNATUN KOTA CIREBON',
            ],
            '1700' => [
                'npsn' => '70035605',
                'nama' => 'SMKS AL ANSORI KABUPATEN BEKASI',
            ],
            '1701' => [
                'npsn' => '70029513',
                'nama' => 'SLBS DARUL HIDAYAH KABUPATEN CIAMIS',
            ],
            '1702' => [
                'npsn' => '70031731',
                'nama' => 'SMAS EDU GLOBAL KOTA CIREBON',
            ],
            '1703' => [
                'npsn' => '70035800',
                'nama' => 'SMAS IT DARUL QUR`AN MULIA KABUPATEN BOGOR',
            ],
            '1704' => [
                'npsn' => '70034291',
                'nama' => 'SMKS ISLAM TAZKIYAH SUKANAGARA KABUPATEN CIANJUR',
            ],
            '1705' => [
                'npsn' => '70033663',
                'nama' => 'SMAS PLUS AL HASIBIYAH KABUPATEN SUKABUMI',
            ],
            '1706' => [
                'npsn' => '70035433',
                'nama' => 'SLBS YMK ASY SYIFA KABUPATEN CIAMIS',
            ],
            '1707' => [
                'npsn' => '70035586',
                'nama' => 'SMAS UNGGULAN BINA INSAN MULIA KABUPATEN CIREBON',
            ],
            '1708' => [
                'npsn' => '20258556',
                'nama' => 'SMKS AL MADINA KABUPATEN CIANJUR',
            ],
            '1709' => [
                'npsn' => '70033728',
                'nama' => 'SMAS IT RAHMANIYAH KOTA DEPOK',
            ],
            '1710' => [
                'npsn' => '70027600',
                'nama' => 'SMAS IT AL KAUTSAR KABUPATEN KUNINGAN',
            ],
            '1711' => [
                'npsn' => '20227867',
                'nama' => 'SMAS MUSLIMIN SINDANGKERTA KABUPATEN BANDUNG BARAT',
            ],
            '1712' => [
                'npsn' => '20267649',
                'nama' => 'SMKS PLUS KRIDA UTAMA PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '1713' => [
                'npsn' => '20279920',
                'nama' => 'SMKS PENGETAHUAN NUSANTARA SAKTI (PENUS) KABUPATEN BANDUNG BARAT',
            ],
            '1714' => [
                'npsn' => '20268291',
                'nama' => 'SMKS KARYA PEMBANGUNAN PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '1715' => [
                'npsn' => '20227849',
                'nama' => 'SMAS KP CIWIDEY PASIRJAMBU KABUPATEN BANDUNG',
            ],
            '1716' => [
                'npsn' => '70030268',
                'nama' => 'SMKS TARUNA HARAPAN BANGSA KABUPATEN BANDUNG',
            ],
            '1717' => [
                'npsn' => '69831494',
                'nama' => 'SMKS PIB PASIRJAMBU KABUPATEN BANDUNG',
            ],
            '1718' => [
                'npsn' => '20259617',
                'nama' => 'SLBS PGRI PASIRJAMBU KABUPATEN BANDUNG',
            ],
            '1719' => [
                'npsn' => '20258499',
                'nama' => 'SMKS KP PASIRJAMBU KABUPATEN BANDUNG',
            ],
            '1720' => [
                'npsn' => '20259619',
                'nama' => 'SLBS BAG BC PUTRA 45 KABUPATEN BANDUNG',
            ],
            '1721' => [
                'npsn' => '20252323',
                'nama' => 'SMKS YAPIN BEKASI KABUPATEN BEKASI',
            ],
            '1722' => [
                'npsn' => '20238036',
                'nama' => 'SMKS AL MUSLIM KABUPATEN BEKASI',
            ],
            '1723' => [
                'npsn' => '20238570',
                'nama' => 'SMAS PUSAKA NUSANTARA 2 KABUPATEN BEKASI',
            ],
            '1724' => [
                'npsn' => '20244765',
                'nama' => 'SMKS BUDI PERKASA BEKASI KABUPATEN BEKASI',
            ],
            '1725' => [
                'npsn' => '20218372',
                'nama' => 'SMKS BINA PRESTASI KABUPATEN BEKASI',
            ],
            '1726' => [
                'npsn' => '20268366',
                'nama' => 'SMKS KARYA GUNA JAYA KABUPATEN BEKASI',
            ],
            '1727' => [
                'npsn' => '20227907',
                'nama' => 'SMAN 1 MARGAASIH KABUPATEN BANDUNG',
            ],
            '1728' => [
                'npsn' => '20227864',
                'nama' => 'SMAS MUHAMMADIYAH 6 KERTASARI KABUPATEN BANDUNG',
            ],
            '1729' => [
                'npsn' => '69965794',
                'nama' => 'SMAN 7 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1730' => [
                'npsn' => '69821180',
                'nama' => 'SMAN 6 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1731' => [
                'npsn' => 'NP564368',
                'nama' => 'SMAS IT MUSLIMAH SEJATI KABUPATEN BEKASI',
            ],
            '1732' => [
                'npsn' => '20238053',
                'nama' => 'SMKS TIARA BANGSA KABUPATEN BEKASI',
            ],
            '1733' => [
                'npsn' => '69990974',
                'nama' => 'SMAS BINTANG TIMUR KABUPATEN BEKASI',
            ],
            '1734' => [
                'npsn' => '20219232',
                'nama' => 'SMKS KIFAYATUL ACHYAR BANDUNG KOTA BANDUNG',
            ],
            '1735' => [
                'npsn' => '60724654',
                'nama' => 'SLBS BAG ABC PUTRA PASUNDAN 2 KOTA BANJAR',
            ],
            '1736' => [
                'npsn' => '20254098',
                'nama' => 'SMAN 1 CARINGIN KABUPATEN BOGOR',
            ],
            '1737' => [
                'npsn' => '20206207',
                'nama' => 'SMAN 1 PANGALENGAN KABUPATEN BANDUNG',
            ],
            '1738' => [
                'npsn' => 'NP612542',
                'nama' => 'SMKS NURUL HUDA JANNATUN KOTA CIREBON',
            ],
            '1739' => [
                'npsn' => '69851453',
                'nama' => 'SMKS FARMASI MEDIKA FARMA KABUPATEN PURWAKARTA',
            ],
            '1740' => [
                'npsn' => '69857914',
                'nama' => 'SMKS KESEHATAN BHAKTI MANDIRI PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '1741' => [
                'npsn' => '60726115',
                'nama' => 'SMKS BUDHI CENDEKIA KOTA BANDUNG',
            ],
            '1742' => [
                'npsn' => '20269309',
                'nama' => 'SMKS FARMASI BPK PENABUR KOTA BANDUNG',
            ],
            '1743' => [
                'npsn' => '69949425',
                'nama' => 'SMKS MAARIF ALMADINAH KABUPATEN TASIKMALAYA',
            ],
            '1744' => [
                'npsn' => '20232461',
                'nama' => 'SMKS MENARASISWA 2 BOGOR KABUPATEN BOGOR',
            ],
            '1745' => [
                'npsn' => '69957213',
                'nama' => 'SMKS IMTAQ KABUPATEN BANDUNG',
            ],
            '1746' => [
                'npsn' => '20221594',
                'nama' => 'SMKS PGRI 2 SUKABUMI KOTA SUKABUMI',
            ],
            '1747' => [
                'npsn' => '69969221',
                'nama' => 'SMKS ISLAM DAN TEKNOLOGI KABUPATEN SUMEDANG',
            ],
            '1748' => [
                'npsn' => '20279933',
                'nama' => 'SMKS BINA INSAN MANDIRI KABUPATEN BANDUNG BARAT',
            ],
            '1749' => [
                'npsn' => '20268251',
                'nama' => 'SMKS FLORA KOTA BEKASI',
            ],
            '1750' => [
                'npsn' => '69856205',
                'nama' => 'SMAS IT AL MUCHTAR KOTA BEKASI',
            ],
            '1751' => [
                'npsn' => '69774555',
                'nama' => 'SMAS ISLAM AL AZHAR 8 KOTA BEKASI',
            ],
            '1752' => [
                'npsn' => '69734184',
                'nama' => 'SMKS GLOBAL PRIMA ISLAMIC SCHOOL KOTA BEKASI',
            ],
            '1753' => [
                'npsn' => '20258470',
                'nama' => 'SLBS AL FITHRI KABUPATEN BANDUNG',
            ],
            '1754' => [
                'npsn' => '69829541',
                'nama' => 'SMKS AS SOLEHHIYAH KABUPATEN BANDUNG',
            ],
            '1755' => [
                'npsn' => '69830415',
                'nama' => 'SMKS KESEHATAN BOJONGSOANG KABUPATEN BANDUNG',
            ],
            '1756' => [
                'npsn' => '20206212',
                'nama' => 'SMAN 1 GUNUNG HALU KABUPATEN BANDUNG BARAT',
            ],
            '1757' => [
                'npsn' => '69812112',
                'nama' => 'SMKS 21 AL MISBAH KABUPATEN BANDUNG',
            ],
            '1758' => [
                'npsn' => '69864017',
                'nama' => 'SMKS ISLAM NUR EL ARAFAH KABUPATEN BEKASI',
            ],
            '1759' => [
                'npsn' => '69774539',
                'nama' => 'SLBS TUMBUH KEMBANG CERIA KABUPATEN BEKASI',
            ],
            '1760' => [
                'npsn' => '69952244',
                'nama' => 'SMKS IT AL FIDAA KABUPATEN BEKASI',
            ],
            '1761' => [
                'npsn' => '69927177',
                'nama' => 'SMAS KRISTEN IPEKA GRAND WISATA KABUPATEN BEKASI',
            ],
            '1762' => [
                'npsn' => '60725231',
                'nama' => 'SLBS DINAMIKA KABUPATEN BEKASI',
            ],
            '1763' => [
                'npsn' => '69774725',
                'nama' => 'SMKS CENDIKIA PASEH KABUPATEN BANDUNG',
            ],
            '1764' => [
                'npsn' => '20240400',
                'nama' => 'SMAS KP 3 PASEH KABUPATEN BANDUNG',
            ],
            '1765' => [
                'npsn' => '20227912',
                'nama' => 'SMAS TERPADU AL MUMIN KABUPATEN BANDUNG',
            ],
            '1766' => [
                'npsn' => '69983821',
                'nama' => 'SMAN 9 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1767' => [
                'npsn' => '20237996',
                'nama' => 'SMAN 3 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1768' => [
                'npsn' => '20262719',
                'nama' => 'SMKS BHAKTI KENCANA CIAWI KABUPATEN TASIKMALAYA',
            ],
            '1769' => [
                'npsn' => '20275311',
                'nama' => 'SMAS ISLAM FATAHILLAH CABANGBUNGIN KABUPATEN BEKASI',
            ],
            '1770' => [
                'npsn' => '20270932',
                'nama' => 'SMKS ADHI KARYA KABUPATEN BEKASI',
            ],
            '1771' => [
                'npsn' => '69956672',
                'nama' => 'SMKS AL INSANI CICALENGKA KABUPATEN BANDUNG',
            ],
            '1772' => [
                'npsn' => '20228542',
                'nama' => 'SMKS MAARIF CICALENGKA KABUPATEN BANDUNG',
            ],
            '1773' => [
                'npsn' => '20252195',
                'nama' => 'SMKS ATTAQWA CABANGBUNGIN KABUPATEN BEKASI',
            ],
            '1774' => [
                'npsn' => '69905931',
                'nama' => 'SMKS BROADCAST TV TIRTA KENCANA KABUPATEN KUNINGAN',
            ],
            '1775' => [
                'npsn' => '69909098',
                'nama' => 'SMKS BHAKTI SEJAHTERA CIREBON KOTA CIREBON',
            ],
            '1776' => [
                'npsn' => '69935371',
                'nama' => 'SMKS BERDIKARI 1 GARUT KABUPATEN GARUT',
            ],
            '1777' => [
                'npsn' => '20233660',
                'nama' => 'SMAS PGRI KALIJATI KABUPATEN SUBANG',
            ],
            '1778' => [
                'npsn' => '69757250',
                'nama' => 'SMKS IT AT TAJULIYYAH KABUPATEN GARUT',
            ],
            '1779' => [
                'npsn' => '20232429',
                'nama' => 'SMKS BHAKTI TARUNA 2 KAB BOGOR KABUPATEN BOGOR',
            ],
            '1780' => [
                'npsn' => '20232460',
                'nama' => 'SMKS MENARASISWA 1 BOGOR KABUPATEN BOGOR',
            ],
            '1781' => [
                'npsn' => '20232501',
                'nama' => 'SMKS YASI 2 CILEBUT BOGOR KABUPATEN BOGOR',
            ],
            '1782' => [
                'npsn' => '20279822',
                'nama' => 'SMKS PERSADA KABUPATEN BOGOR',
            ],
            '1783' => [
                'npsn' => 'NP853813',
                'nama' => 'SMKS BAKTI NUSA KABUPATEN BOGOR',
            ],
            '1784' => [
                'npsn' => '20220351',
                'nama' => 'SMAS YZA 2 BOGOR KOTA BOGOR',
            ],
            '1785' => [
                'npsn' => '20220435',
                'nama' => 'SMAS BHAKTI TARUNA KOTA BOGOR',
            ],
            '1786' => [
                'npsn' => '20229208',
                'nama' => 'SMKS GIOVANI DEPOK KOTA DEPOK',
            ],
            '1787' => [
                'npsn' => '69934552',
                'nama' => 'SMAS BAITUL QUR`AN KOTA DEPOK',
            ],
            '1788' => [
                'npsn' => '20276181',
                'nama' => 'SMKS LAZUARDI KOTA DEPOK',
            ],
            '1789' => [
                'npsn' => '20256288',
                'nama' => 'SMKS ASY SYIFA KABUPATEN BEKASI',
            ],
            '1790' => [
                'npsn' => '69775472',
                'nama' => 'SMKS EL AMIN KABUPATEN BEKASI',
            ],
            '1791' => [
                'npsn' => '20227873',
                'nama' => 'SMAS PANCA KARSA LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '1792' => [
                'npsn' => '20267645',
                'nama' => 'SMKS BUDI RAKSA LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '1793' => [
                'npsn' => '20268821',
                'nama' => 'SMKS CIPTA KARYA KOTA BEKASI',
            ],
            '1794' => [
                'npsn' => '20227855',
                'nama' => 'SMAS MAHAWARMAN KABUPATEN BANDUNG',
            ],
            '1795' => [
                'npsn' => '20254193',
                'nama' => 'SMKS PGRI CIBARIBIS KABUPATEN BANDUNG',
            ],
            '1796' => [
                'npsn' => '20258464',
                'nama' => 'SLBS BAG BC YPLAB BANJARAN KABUPATEN BANDUNG',
            ],
            '1797' => [
                'npsn' => '69979670',
                'nama' => 'SMKS AL FALAH KABUPATEN BANDUNG',
            ],
            '1798' => [
                'npsn' => '20206223',
                'nama' => 'SMKS PASUNDAN 1 BANJARAN KABUPATEN BANDUNG',
            ],
            '1799' => [
                'npsn' => '69762715',
                'nama' => 'SMKS INDUSTRI INDOKREATIVA KABUPATEN BEKASI',
            ],
            '1800' => [
                'npsn' => '69864016',
                'nama' => 'SMKS CITRA KARYA KABUPATEN BEKASI',
            ],
            '1801' => [
                'npsn' => '20271243',
                'nama' => 'SMKS MEKAR MURNI KABUPATEN BEKASI',
            ],
            '1802' => [
                'npsn' => '69900759',
                'nama' => 'SMKS PUTRA BHAGASASI KABUPATEN BEKASI',
            ],
            '1803' => [
                'npsn' => '20228520',
                'nama' => 'SMKS BINA PRESTASI BANGSA KABUPATEN BANDUNG BARAT',
            ],
            '1804' => [
                'npsn' => '69964619',
                'nama' => 'SMAS TARUNA NUSANTARA INDONESIA KABUPATEN BANDUNG BARAT',
            ],
            '1805' => [
                'npsn' => '69761971',
                'nama' => 'SMKS TARUNA NUSANTARA JAYA KABUPATEN BANDUNG BARAT',
            ],
            '1806' => [
                'npsn' => '70034321',
                'nama' => 'SMKS ADIDAYA NUSANTARA KABUPATEN BANDUNG BARAT',
            ],
            '1807' => [
                'npsn' => '20271250',
                'nama' => 'SMKS CIPTA INSANI KABUPATEN BOGOR',
            ],
            '1808' => [
                'npsn' => '20251782',
                'nama' => 'SMAN 1 CIKALONGWETAN KABUPATEN BANDUNG BARAT',
            ],
            '1809' => [
                'npsn' => '20227467',
                'nama' => 'SMAN 2 GARUT KABUPATEN GARUT',
            ],
            '1810' => [
                'npsn' => '20212915',
                'nama' => 'SMKS MUHAMMADIYAH 2 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '1811' => [
                'npsn' => '69788689',
                'nama' => 'SMKS MEKARSARI KABUPATEN BEKASI',
            ],
            '1812' => [
                'npsn' => '20247325',
                'nama' => 'SMKS YADIKA 8 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '1813' => [
                'npsn' => '20227831',
                'nama' => 'SMAS CIPTA MANDIRI CISARUA KABUPATEN BANDUNG BARAT',
            ],
            '1814' => [
                'npsn' => '20279833',
                'nama' => 'SLBS AGRO INDUSTRI KABUPATEN BANDUNG BARAT',
            ],
            '1815' => [
                'npsn' => '20206168',
                'nama' => 'SMAS BINA PUTRA INDONESIA KABUPATEN BANDUNG BARAT',
            ],
            '1816' => [
                'npsn' => '69888925',
                'nama' => 'SMKN 1 CISARUA KABUPATEN BANDUNG BARAT',
            ],
            '1817' => [
                'npsn' => '20206227',
                'nama' => 'SMAN 1 CISARUA KABUPATEN BANDUNG BARAT',
            ],
            '1818' => [
                'npsn' => '69965155',
                'nama' => 'BANDUNG ALLIANCE INTERCULTURAL SCHOOL KABUPATEN BANDUNG BARAT',
            ],
            '1819' => [
                'npsn' => '20279931',
                'nama' => 'SMAS AL IRSYAD SATYA KABUPATEN BANDUNG BARAT',
            ],
            '1820' => [
                'npsn' => '20274847',
                'nama' => 'SMAS CAHAYA BANGSA CLASSICAL SCHOOL KABUPATEN BANDUNG BARAT',
            ],
            '1821' => [
                'npsn' => '20280624',
                'nama' => 'SMKS PERTANIAN AT TAUFIQ KABUPATEN BEKASI',
            ],
            '1822' => [
                'npsn' => '60726183',
                'nama' => 'SMAS TERPADU NURUSSA ADAH KABUPATEN BANDUNG BARAT',
            ],
            '1823' => [
                'npsn' => '69733998',
                'nama' => 'SMKS GALUH PERKASA INDONESIA 1 KABUPATEN BANDUNG BARAT',
            ],
            '1824' => [
                'npsn' => '69893110',
                'nama' => 'SMAS DAARUT TAUHIID BOARDING SCHOOL KABUPATEN BANDUNG BARAT',
            ],
            '1825' => [
                'npsn' => 'NP841904',
                'nama' => 'SMKS PARIWISATA ISLAM TERPADU NURUL IMAM KABUPATEN BANDUNG BARAT',
            ],
            '1826' => [
                'npsn' => 'NP244000',
                'nama' => 'SMKS ROUDLOTUL ULUM KABUPATEN BANDUNG BARAT',
            ],
            '1827' => [
                'npsn' => '20267643',
                'nama' => 'SMKS BINNA ESSA KABUPATEN BANDUNG BARAT',
            ],
            '1828' => [
                'npsn' => '69766194',
                'nama' => 'SMKS INSAN MANDIRI KABUPATEN BANDUNG BARAT',
            ],
            '1829' => [
                'npsn' => '69733997',
                'nama' => 'SMKS PERJUANGAN KABUPATEN BANDUNG BARAT',
            ],
            '1830' => [
                'npsn' => '20267657',
                'nama' => 'SLBS HANJUANG JAYA KABUPATEN BANDUNG BARAT',
            ],
            '1831' => [
                'npsn' => '20267659',
                'nama' => 'SLBS PURNAMA ASIH KABUPATEN BANDUNG BARAT',
            ],
            '1832' => [
                'npsn' => '69930027',
                'nama' => 'SMAS MUTIARA NUSANTARA KABUPATEN BANDUNG BARAT',
            ],
            '1833' => [
                'npsn' => '69916542',
                'nama' => 'SMAS IT AL IZZAH KOTA SUKABUMI',
            ],
            '1834' => [
                'npsn' => '20279934',
                'nama' => 'SMKS IT NU KABUPATEN BANDUNG BARAT',
            ],
            '1835' => [
                'npsn' => '69894473',
                'nama' => 'SMKS 2 HAMKA SAGULING KABUPATEN BANDUNG BARAT',
            ],
            '1836' => [
                'npsn' => '20227901',
                'nama' => 'SMAN 1 PARONGPONG KABUPATEN BANDUNG BARAT',
            ],
            '1837' => [
                'npsn' => '20258238',
                'nama' => 'SLBS AL GHIFARI KABUPATEN GARUT',
            ],
            '1838' => [
                'npsn' => '20270819',
                'nama' => 'SMKS PGRI SELABINTANA KABUPATEN SUKABUMI',
            ],
            '1839' => [
                'npsn' => '20258167',
                'nama' => 'SLBS BAG C BINA GRAHITA LELES KABUPATEN GARUT',
            ],
            '1840' => [
                'npsn' => '20280578',
                'nama' => 'SMKS TALENTA BANGSA KABUPATEN BEKASI',
            ],
            '1841' => [
                'npsn' => '20229776',
                'nama' => 'SMKS BINA BANGSA KABUPATEN BEKASI',
            ],
            '1842' => [
                'npsn' => '20238047',
                'nama' => 'SMKS MITRA UNGGUL KABUPATEN BEKASI',
            ],
            '1843' => [
                'npsn' => '20237994',
                'nama' => 'SMAN 2 SUKATANI KABUPATEN BEKASI',
            ],
            '1844' => [
                'npsn' => '20232383',
                'nama' => 'SMAN 1 SUKAMAKMUR KABUPATEN BOGOR',
            ],
            '1845' => [
                'npsn' => '20254089',
                'nama' => 'SMKS AR RAHMAH KABUPATEN SUKABUMI',
            ],
            '1846' => [
                'npsn' => '69726057',
                'nama' => 'SMKS HASSINA KABUPATEN SUKABUMI',
            ],
            '1847' => [
                'npsn' => '20214817',
                'nama' => 'SMKS YALIS ASTANAJAPURA KABUPATEN CIREBON',
            ],
            '1848' => [
                'npsn' => '20235573',
                'nama' => 'SLBS BHAKTI MULIA KABUPATEN SUMEDANG',
            ],
            '1849' => [
                'npsn' => '20211503',
                'nama' => 'SMAN 1 MANGUNJAYA KABUPATEN PANGANDARAN',
            ],
            '1850' => [
                'npsn' => '69849585',
                'nama' => 'SMKS NU CIKEDUNG KABUPATEN INDRAMAYU',
            ],
            '1851' => [
                'npsn' => '69786599',
                'nama' => 'SMKS EKUINTEK KABUPATEN BEKASI',
            ],
            '1852' => [
                'npsn' => '69881052',
                'nama' => 'SMKS TEKNIKOM CIKARANG KABUPATEN BEKASI',
            ],
            '1853' => [
                'npsn' => '60725084',
                'nama' => 'SMAS IT AL MAIDAH KABUPATEN BEKASI',
            ],
            '1854' => [
                'npsn' => '69888558',
                'nama' => 'SMKS MITRA UTAMA KABUPATEN BEKASI',
            ],
            '1855' => [
                'npsn' => '20211524',
                'nama' => 'SMKS PASUNDAN CIJULANG KABUPATEN PANGANDARAN',
            ],
            '1856' => [
                'npsn' => '69995692',
                'nama' => 'SMAS INFORMATIKA NURUL BAYAN KABUPATEN PANGANDARAN',
            ],
            '1857' => [
                'npsn' => '20227908',
                'nama' => 'SMAN 1 NGAMPRAH KABUPATEN BANDUNG BARAT',
            ],
            '1858' => [
                'npsn' => '20254699',
                'nama' => 'SMKS PLUS PERTIWI SUKAMULYA KABUPATEN KUNINGAN',
            ],
            '1859' => [
                'npsn' => '20212918',
                'nama' => 'SMKS KARYA NASIONAL KUNINGAN KABUPATEN KUNINGAN',
            ],
            '1860' => [
                'npsn' => '69769410',
                'nama' => 'SMKS 1 PARAHYANGAN KABUPATEN BANDUNG BARAT',
            ],
            '1861' => [
                'npsn' => '69933838',
                'nama' => 'SMAS IT FITHRAH INSANI KABUPATEN BANDUNG BARAT',
            ],
            '1862' => [
                'npsn' => '20227974',
                'nama' => 'SMKS YUDHA UTAMA NGAMPRAH KABUPATEN BANDUNG BARAT',
            ],
            '1863' => [
                'npsn' => '69893499',
                'nama' => 'SMKS NURUL HUDA AL GINA KABUPATEN PANGANDARAN',
            ],
            '1864' => [
                'npsn' => '69758345',
                'nama' => 'SMKS SAMUDERA BUANA LANGKAPLANCAR KABUPATEN PANGANDARAN',
            ],
            '1865' => [
                'npsn' => '69946200',
                'nama' => 'SMKS PELITA BANGSA MANGUNJAYA KABUPATEN PANGANDARAN',
            ],
            '1866' => [
                'npsn' => '69935515',
                'nama' => 'SMAS KSATRIA NUSANTARA PADAHERANG KABUPATEN PANGANDARAN',
            ],
            '1867' => [
                'npsn' => '69986555',
                'nama' => 'SMAN 2 JONGGOL KABUPATEN BOGOR',
            ],
            '1868' => [
                'npsn' => '69892332',
                'nama' => 'SMAS IT NURUL BAROKAH KABUPATEN MAJALENGKA',
            ],
            '1869' => [
                'npsn' => '20244679',
                'nama' => 'SMAS YAKPI SUSUKAN KABUPATEN CIREBON',
            ],
            '1870' => [
                'npsn' => '69856921',
                'nama' => 'SMKS BAKTI ASSYUKUR KABUPATEN BANDUNG BARAT',
            ],
            '1871' => [
                'npsn' => '69893234',
                'nama' => 'SMKS AL HIKMAH KABUPATEN BANDUNG BARAT',
            ],
            '1872' => [
                'npsn' => '69888924',
                'nama' => 'SMKN 1 CIPATAT KABUPATEN BANDUNG BARAT',
            ],
            '1873' => [
                'npsn' => '20254630',
                'nama' => 'SMKS TEKNOLOGI MODERN KALIPUCANG KABUPATEN PANGANDARAN',
            ],
            '1874' => [
                'npsn' => '20211506',
                'nama' => 'SMAN 1 PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '1875' => [
                'npsn' => '69894474',
                'nama' => 'SMKS IT IBNU AHKAM KALIPUCANG KABUPATEN PANGANDARAN',
            ],
            '1876' => [
                'npsn' => '20211560',
                'nama' => 'SMAS MUHAMMADIYAH PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '1877' => [
                'npsn' => '69752443',
                'nama' => 'SMKS NASYRUL ULUM GEGESIK KABUPATEN CIREBON',
            ],
            '1878' => [
                'npsn' => '69752279',
                'nama' => 'SMAN 1 TENJOLAYA KABUPATEN BOGOR',
            ],
            '1879' => [
                'npsn' => '20272028',
                'nama' => 'SMKS PAHLAWAN TOHA KOTA BANDUNG',
            ],
            '1880' => [
                'npsn' => '20246140',
                'nama' => 'SMKS BUDAYA BANGSA KOTA BANDUNG',
            ],
            '1881' => [
                'npsn' => '69926270',
                'nama' => 'SMAN 2 CILEUNGSI KABUPATEN BOGOR',
            ],
            '1882' => [
                'npsn' => '20212913',
                'nama' => 'SMKN 1 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '1883' => [
                'npsn' => '20212912',
                'nama' => 'SMKN 2 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '1884' => [
                'npsn' => '20271653',
                'nama' => 'SMKS GRACIA KOTA BANDUNG',
            ],
            '1885' => [
                'npsn' => '20219138',
                'nama' => 'SMKS OTO ISKANDARDINATA BANDUNG KOTA BANDUNG',
            ],
            '1886' => [
                'npsn' => '20219283',
                'nama' => 'SMKS GANESHA BANDUNG KOTA BANDUNG',
            ],
            '1887' => [
                'npsn' => '69888996',
                'nama' => 'SMAN 1 BOJONGGEDE KABUPATEN BOGOR',
            ],
            '1888' => [
                'npsn' => '20219793',
                'nama' => 'SMAS REHOBOTH KOTA BANDUNG',
            ],
            '1889' => [
                'npsn' => '20219167',
                'nama' => 'SMKS LPPM 2 BANDUNG KOTA BANDUNG',
            ],
            '1890' => [
                'npsn' => '20219737',
                'nama' => 'SMAS BPI 2 BANDUNG KOTA BANDUNG',
            ],
            '1891' => [
                'npsn' => '69894963',
                'nama' => 'SMKS BAHAGIA KOTA BANDUNG',
            ],
            '1892' => [
                'npsn' => '69959752',
                'nama' => 'SMKS ADI DHARMA KENCANA KOTA BANDUNG',
            ],
            '1893' => [
                'npsn' => '20231339',
                'nama' => 'SMAN 3 CIBINONG KABUPATEN BOGOR',
            ],
            '1894' => [
                'npsn' => '20219744',
                'nama' => 'SLBS JATIS HURIP KOTA BANDUNG',
            ],
            '1895' => [
                'npsn' => '20219876',
                'nama' => 'SLBS BAG BC NIKE ARDILA YPWN KOTA BANDUNG',
            ],
            '1896' => [
                'npsn' => '20219879',
                'nama' => 'SLBS BAG BC HIKMAT KOTA BANDUNG',
            ],
            '1897' => [
                'npsn' => '20274909',
                'nama' => 'SMAS ISTIQAMAH KOTA BANDUNG',
            ],
            '1898' => [
                'npsn' => '20219154',
                'nama' => 'SMKS PGRI BANDUNG KOTA BANDUNG',
            ],
            '1899' => [
                'npsn' => '20219289',
                'nama' => 'SMKS BINA WARGA BANDUNG KOTA BANDUNG',
            ],
            '1900' => [
                'npsn' => '20246420',
                'nama' => 'SMKS NUSA BHAKTI BANDUNG KOTA BANDUNG',
            ],
            '1901' => [
                'npsn' => '20219210',
                'nama' => 'SMKS TAMANSISWA BANDUNG KOTA BANDUNG',
            ],
            '1902' => [
                'npsn' => '20219875',
                'nama' => 'SLBS BAG BC YPLAB WARTAWAN KOTA BANDUNG',
            ],
            '1903' => [
                'npsn' => '20200884',
                'nama' => 'SMAN 1 CARIU KABUPATEN BOGOR',
            ],
            '1904' => [
                'npsn' => '20213893',
                'nama' => 'SMAN 1 MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '1905' => [
                'npsn' => '20247195',
                'nama' => 'SMKS YPIB KABUPATEN MAJALENGKA',
            ],
            '1906' => [
                'npsn' => '20265548',
                'nama' => 'SMKS YPF KOTA BANDUNG',
            ],
            '1907' => [
                'npsn' => '20258092',
                'nama' => 'SMAS MUTIARA BUNDA KOTA BANDUNG',
            ],
            '1908' => [
                'npsn' => '20280600',
                'nama' => 'SLBS YRBB KOTA BANDUNG',
            ],
            '1909' => [
                'npsn' => '20276177',
                'nama' => 'SMKS KARYA PEMBANGUNAN KOTA BANDUNG',
            ],
            '1910' => [
                'npsn' => '20219775',
                'nama' => 'SMAS PLUS MUTHAHHARI KOTA BANDUNG',
            ],
            '1911' => [
                'npsn' => '20219264',
                'nama' => 'SMAS SANTA MARIA 2 KOTA BANDUNG',
            ],
            '1912' => [
                'npsn' => '20219739',
                'nama' => 'SMAS BINA DHARMA 2 BANDUNG KOTA BANDUNG',
            ],
            '1913' => [
                'npsn' => '20202317',
                'nama' => 'SMAN 1 CIBADAK KABUPATEN SUKABUMI',
            ],
            '1914' => [
                'npsn' => '20254167',
                'nama' => 'SMAN 2 MAJALAYA KABUPATEN BANDUNG',
            ],
            '1915' => [
                'npsn' => '69895438',
                'nama' => 'SMAS NEHRU MEMORIAL SCHOOL KOTA BANDUNG',
            ],
            '1916' => [
                'npsn' => '69775706',
                'nama' => 'SLBS ASSAKINAH SEJAHTERA KABUPATEN BANDUNG BARAT',
            ],
            '1917' => [
                'npsn' => '20219869',
                'nama' => 'SLBS BAG B KARYA BHAKTI KOTA BANDUNG',
            ],
            '1918' => [
                'npsn' => '20219811',
                'nama' => 'SLBS BAG C SUKAPURA KOTA BANDUNG',
            ],
            '1919' => [
                'npsn' => '20219212',
                'nama' => 'SMKS SMIP YPPT BANDUNG KOTA BANDUNG',
            ],
            '1920' => [
                'npsn' => '20219878',
                'nama' => 'SLBS BAG BC MURNI YPKSM KOTA BANDUNG',
            ],
            '1921' => [
                'npsn' => '69830375',
                'nama' => 'SLBS DARUL HIDAYAH KOTA BANDUNG',
            ],
            '1922' => [
                'npsn' => '20200885',
                'nama' => 'SMAN 1 CIBINONG KABUPATEN BOGOR',
            ],
            '1923' => [
                'npsn' => '20219324',
                'nama' => 'SMAN 9 BANDUNG KOTA BANDUNG',
            ],
            '1924' => [
                'npsn' => '20219174',
                'nama' => 'SMKN 12 BANDUNG KOTA BANDUNG',
            ],
            '1925' => [
                'npsn' => '20247196',
                'nama' => 'SMKS YPPT MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '1926' => [
                'npsn' => '20219263',
                'nama' => 'SMAS ALLOYSIUS 1 KOTA BANDUNG',
            ],
            '1927' => [
                'npsn' => '20219727',
                'nama' => 'SMAS KARTIKA XIX 1 KOTA BANDUNG',
            ],
            '1928' => [
                'npsn' => '20219791',
                'nama' => 'SMAS YAHYA KOTA BANDUNG',
            ],
            '1929' => [
                'npsn' => '20219217',
                'nama' => 'SMKS PUTRA PAJAJARAN BANDUNG KOTA BANDUNG',
            ],
            '1930' => [
                'npsn' => '20270776',
                'nama' => 'SMAN 2 GUNUNG PUTRI KABUPATEN BOGOR',
            ],
            '1931' => [
                'npsn' => '69906465',
                'nama' => 'SMKS DARUL MAARIF KABUPATEN MAJALENGKA',
            ],
            '1932' => [
                'npsn' => '20213894',
                'nama' => 'SMAN 1 MAJA KABUPATEN MAJALENGKA',
            ],
            '1933' => [
                'npsn' => '69880814',
                'nama' => 'SMKS PGRI TANJUNGMEDAR KABUPATEN SUMEDANG',
            ],
            '1934' => [
                'npsn' => '20208518',
                'nama' => 'SLBS KARTINI KABUPATEN SUMEDANG',
            ],
            '1935' => [
                'npsn' => '20279889',
                'nama' => 'SMKS YASPRI WADO KABUPATEN SUMEDANG',
            ],
            '1936' => [
                'npsn' => '69786617',
                'nama' => 'SMKS AL JAUHAR KABUPATEN SUMEDANG',
            ],
            '1937' => [
                'npsn' => '20265525',
                'nama' => 'SMKS BINA INSAN MULIA KOTA BANDUNG',
            ],
            '1938' => [
                'npsn' => '20219743',
                'nama' => 'SLBS PUSPPA SURYAKANTI KOTA BANDUNG',
            ],
            '1939' => [
                'npsn' => '20219277',
                'nama' => 'SMAS YAS BANDUNG KOTA BANDUNG',
            ],
            '1940' => [
                'npsn' => '20247184',
                'nama' => 'SMKS MEC MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '1941' => [
                'npsn' => '69756184',
                'nama' => 'SMKS MAARIF NU AL FATHONAH KABUPATEN SUKABUMI',
            ],
            '1942' => [
                'npsn' => '60726513',
                'nama' => 'SMKS PUTRA KABANDUNGAN KABUPATEN SUKABUMI',
            ],
            '1943' => [
                'npsn' => '69968020',
                'nama' => 'SMAS AL AZHAR SYIFA BUDI PARAHYANGAN KABUPATEN BANDUNG BARAT',
            ],
            '1944' => [
                'npsn' => '20228557',
                'nama' => 'SMKS TUNAS BANGSA NGAMPRAH KABUPATEN BANDUNG BARAT',
            ],
            '1945' => [
                'npsn' => '69733880',
                'nama' => 'SMKS BINA INSAN BANGSA KABUPATEN BANDUNG BARAT',
            ],
            '1946' => [
                'npsn' => '70031817',
                'nama' => 'SMAS TERPADU RIYADLUL HUDA KABUPATEN BANDUNG BARAT',
            ],
            '1947' => [
                'npsn' => '20231325',
                'nama' => 'SMAN 1 CIGUDEG KABUPATEN BOGOR',
            ],
            '1948' => [
                'npsn' => '20231322',
                'nama' => 'SMAN 1 BABAKAN MADANG KABUPATEN BOGOR',
            ],
            '1949' => [
                'npsn' => '20219874',
                'nama' => 'SLBS ADITYA GRAHITA KOTA BANDUNG',
            ],
            '1950' => [
                'npsn' => '20253836',
                'nama' => 'SMAS PRIBADI KOTA BANDUNG',
            ],
            '1951' => [
                'npsn' => '69929126',
                'nama' => 'SMKS BHAKTI WIJAYA KUSUMA KABUPATEN GARUT',
            ],
            '1952' => [
                'npsn' => '20206144',
                'nama' => 'SMAN 1 CIPATAT KABUPATEN BANDUNG BARAT',
            ],
            '1953' => [
                'npsn' => '20247194',
                'nama' => 'SMKS WAHANA BAKTI MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '1954' => [
                'npsn' => '69881046',
                'nama' => 'SMKS DARMA SAKTI KABUPATEN BANDUNG BARAT',
            ],
            '1955' => [
                'npsn' => '20213889',
                'nama' => 'SMAN 2 MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '1956' => [
                'npsn' => '69888788',
                'nama' => 'SMKS INSAN CITA KABUPATEN SUKABUMI',
            ],
            '1957' => [
                'npsn' => 'NP956425',
                'nama' => 'SMKS SINERGI BINA BANGSA KABUPATEN SUKABUMI',
            ],
            '1958' => [
                'npsn' => '69988520',
                'nama' => 'SMKS TERPADU NURUL QUR AN CIKAKAK KABUPATEN SUKABUMI',
            ],
            '1959' => [
                'npsn' => '69786715',
                'nama' => 'SLBN KABUPATEN BANDUNG BARAT',
            ],
            '1960' => [
                'npsn' => '69945052',
                'nama' => 'SMKS PLUS PARADIS CIDAHU KABUPATEN SUKABUMI',
            ],
            '1961' => [
                'npsn' => '20252618',
                'nama' => 'SMKS BINA ANAK BANGSA KABUPATEN SUKABUMI',
            ],
            '1962' => [
                'npsn' => '20247170',
                'nama' => 'SMAS ULUL AL BAAB KABUPATEN SUKABUMI',
            ],
            '1963' => [
                'npsn' => '69919887',
                'nama' => 'SMKS TARUNA TUNAS BANGSA KABUPATEN SUKABUMI',
            ],
            '1964' => [
                'npsn' => '20247188',
                'nama' => 'SMKS PGRI MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '1965' => [
                'npsn' => '20214017',
                'nama' => 'SLBS BAG A YPLB MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '1966' => [
                'npsn' => '69763258',
                'nama' => 'SMKS 3 PASUNDAN PERKASA KABUPATEN BANDUNG BARAT',
            ],
            '1967' => [
                'npsn' => '20279930',
                'nama' => 'SMKS TARUNA HARAPAN 1 KABUPATEN BANDUNG BARAT',
            ],
            '1968' => [
                'npsn' => '20219521',
                'nama' => 'SMAS PURAGABAYA KOTA BANDUNG',
            ],
            '1969' => [
                'npsn' => '69953758',
                'nama' => 'SMKS PASUNDAN MALANGBONG KABUPATEN GARUT',
            ],
            '1970' => [
                'npsn' => '20246145',
                'nama' => 'SMAS AL FURQON KABUPATEN SUKABUMI',
            ],
            '1971' => [
                'npsn' => '69920272',
                'nama' => 'SMKS WIGUNA KABUPATEN SUKABUMI',
            ],
            '1972' => [
                'npsn' => '69756183',
                'nama' => 'SMKS BINA TEKNOLOGI AL FATAH KABUPATEN SUKABUMI',
            ],
            '1973' => [
                'npsn' => '69931917',
                'nama' => 'SMAS PGRI MALANGBONG KABUPATEN GARUT',
            ],
            '1974' => [
                'npsn' => '20247145',
                'nama' => 'SMAS AL ATIQIYAH KABUPATEN SUKABUMI',
            ],
            '1975' => [
                'npsn' => '69816737',
                'nama' => 'SMKS BANGKIT INDONESIA TALAGA KABUPATEN MAJALENGKA',
            ],
            '1976' => [
                'npsn' => '20213891',
                'nama' => 'SMAN 1 TALAGA KABUPATEN MAJALENGKA',
            ],
            '1977' => [
                'npsn' => '20268294',
                'nama' => 'SMKS BANDUNG BARAT KABUPATEN BANDUNG BARAT',
            ],
            '1978' => [
                'npsn' => '20220321',
                'nama' => 'SMAS KOSGORO KOTA BOGOR',
            ],
            '1979' => [
                'npsn' => '69929546',
                'nama' => 'SMAS JUMHURIYYAH KABUPATEN CIANJUR',
            ],
            '1980' => [
                'npsn' => '69972894',
                'nama' => 'SMAS SULTAN GIRI KABUPATEN CIANJUR',
            ],
            '1981' => [
                'npsn' => '69872006',
                'nama' => 'SMAS ISLAM TERPADU MEKARMUKTI KABUPATEN GARUT',
            ],
            '1982' => [
                'npsn' => '20258241',
                'nama' => 'SLBS AT TURMUDZI II KABUPATEN GARUT',
            ],
            '1983' => [
                'npsn' => '20258239',
                'nama' => 'SLBS AT TURMUDZI I MALANGBONG KABUPATEN GARUT',
            ],
            '1984' => [
                'npsn' => '20276127',
                'nama' => 'SMKS AL TAUFIK BANTARUJEG KABUPATEN MAJALENGKA',
            ],
            '1985' => [
                'npsn' => '69944858',
                'nama' => 'SMKS KARTINI BHAKTI MANDIRI KABUPATEN BANDUNG BARAT',
            ],
            '1986' => [
                'npsn' => '20267646',
                'nama' => 'SMKS 4 LPPM RI KABUPATEN BANDUNG BARAT',
            ],
            '1987' => [
                'npsn' => '60730356',
                'nama' => 'SMKS DHARMA PERTIWI KABUPATEN BANDUNG BARAT',
            ],
            '1988' => [
                'npsn' => '20275998',
                'nama' => 'SMKS AL ILYAS MALANGBONG KABUPATEN GARUT',
            ],
            '1989' => [
                'npsn' => '69988550',
                'nama' => 'SMAS SULTAN AGUNG KABUPATEN CIANJUR',
            ],
            '1990' => [
                'npsn' => '69786423',
                'nama' => 'SMAN 30 GARUT KABUPATEN GARUT',
            ],
            '1991' => [
                'npsn' => '69910388',
                'nama' => 'SMAS IT CARINGIN KABUPATEN GARUT',
            ],
            '1992' => [
                'npsn' => '69922305',
                'nama' => 'SMAS DARUL ULUM KADUPANDAK KABUPATEN CIANJUR',
            ],
            '1993' => [
                'npsn' => '69943172',
                'nama' => 'SMKS IT CAMPAKA WANGI KABUPATEN GARUT',
            ],
            '1994' => [
                'npsn' => '20252210',
                'nama' => 'SMKN 1 TANGGEUNG KABUPATEN CIANJUR',
            ],
            '1995' => [
                'npsn' => '69759017',
                'nama' => 'SMKS IT BINA INSAN KABUPATEN GARUT',
            ],
            '1996' => [
                'npsn' => '69954090',
                'nama' => 'SMKS PLUS WARDATUL JANNAH KABUPATEN MAJALENGKA',
            ],
            '1997' => [
                'npsn' => '20228562',
                'nama' => 'SMKS WYATA MANDALA 2 KABUPATEN BANDUNG BARAT',
            ],
            '1998' => [
                'npsn' => '20252192',
                'nama' => 'SMAN 1 KADUPANDAK KABUPATEN CIANJUR',
            ],
            '1999' => [
                'npsn' => '69956526',
                'nama' => 'SLBS BAG ABCD MAHMUD MAHMUDAH KABUPATEN GARUT',
            ],
            '2000' => [
                'npsn' => '69944385',
                'nama' => 'SMAS PGRI KADUPANDAK KABUPATEN CIANJUR',
            ],
            '2001' => [
                'npsn' => '69973702',
                'nama' => 'SMKS AL MUZTAHID KABUPATEN CIANJUR',
            ],
            '2002' => [
                'npsn' => '69954141',
                'nama' => 'SMAS IT NURUL ITTIHAD KABUPATEN CIANJUR',
            ],
            '2003' => [
                'npsn' => '69888696',
                'nama' => 'SMAS TERPADU BAITUL AMANAH PASIRWANGI KABUPATEN GARUT',
            ],
            '2004' => [
                'npsn' => '20213871',
                'nama' => 'SMKN 1 KADIPATEN KABUPATEN MAJALENGKA',
            ],
            '2005' => [
                'npsn' => '20263963',
                'nama' => 'SMKN KEHUTANAN KADIPATEN KABUPATEN MAJALENGKA',
            ],
            '2006' => [
                'npsn' => '20279932',
                'nama' => 'SMAS AL MUKHTARIYAH RAJAMANDALA KABUPATEN BANDUNG BARAT',
            ],
            '2007' => [
                'npsn' => '69733906',
                'nama' => 'SMKS MANDALA PUTRA 1 KABUPATEN BANDUNG BARAT',
            ],
            '2008' => [
                'npsn' => '69772948',
                'nama' => 'SMKS WYATA MANDALA 3 CIPATAT KABUPATEN BANDUNG BARAT',
            ],
            '2009' => [
                'npsn' => '20209187',
                'nama' => 'SMAS YASTIC KARANGTENGAH KABUPATEN GARUT',
            ],
            '2010' => [
                'npsn' => '20227449',
                'nama' => 'SMAS PGRI KURNIA KABUPATEN GARUT',
            ],
            '2011' => [
                'npsn' => '69899779',
                'nama' => 'SMKS MUHAMMADIYAH KERSAMANAH KABUPATEN GARUT',
            ],
            '2012' => [
                'npsn' => '69959887',
                'nama' => 'SMKS AL ANWARIYYAH KABUPATEN MAJALENGKA',
            ],
            '2013' => [
                'npsn' => '69991402',
                'nama' => 'SMKS ISLAM TERPADU AL WAHHAB KABUPATEN CIANJUR',
            ],
            '2014' => [
                'npsn' => '69988774',
                'nama' => 'SMKS MITRA MARITIM KABUPATEN INDRAMAYU',
            ],
            '2015' => [
                'npsn' => '20257291',
                'nama' => 'SMKS AS SHIDDIQIN KABUPATEN CIANJUR',
            ],
            '2016' => [
                'npsn' => '69772949',
                'nama' => 'SMKS BANI ABDUL MALIK KABUPATEN BANDUNG BARAT',
            ],
            '2017' => [
                'npsn' => '20228558',
                'nama' => 'SMKS WIDYA KARYA PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '2018' => [
                'npsn' => '20206224',
                'nama' => 'SMKN 4 PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '2019' => [
                'npsn' => '69920203',
                'nama' => 'SMKS BHAKTI NEGERI KABUPATEN CIANJUR',
            ],
            '2020' => [
                'npsn' => '69956457',
                'nama' => 'SLBS LANGIT SUNDA KABUPATEN GARUT',
            ],
            '2021' => [
                'npsn' => '70035731',
                'nama' => 'SMAS IT AR RAHMAN KABUPATEN MAJALENGKA',
            ],
            '2022' => [
                'npsn' => '20213881',
                'nama' => 'SLBS GELORA KARYA KABUPATEN MAJALENGKA',
            ],
            '2023' => [
                'npsn' => '20247193',
                'nama' => 'SMKS TRI DAYA BUDI MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '2024' => [
                'npsn' => '20253098',
                'nama' => 'SMKS MULTI GUNA DARMARAJA KABUPATEN SUMEDANG',
            ],
            '2025' => [
                'npsn' => '20268578',
                'nama' => 'SMKS CENDIKIA RANCAKALONG KABUPATEN SUMEDANG',
            ],
            '2026' => [
                'npsn' => '20258209',
                'nama' => 'SLBS BHAKTI MULIA 2 KABUPATEN SUMEDANG',
            ],
            '2027' => [
                'npsn' => '20279935',
                'nama' => 'SMKS HAMKA PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '2028' => [
                'npsn' => '20220520',
                'nama' => 'SMAS BHAKTI INSANI KOTA BOGOR',
            ],
            '2029' => [
                'npsn' => '20206208',
                'nama' => 'SMAN 1 PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '2030' => [
                'npsn' => '20279896',
                'nama' => 'SMKS AL HALIM GARUT KABUPATEN GARUT',
            ],
            '2031' => [
                'npsn' => '69858460',
                'nama' => 'SMKS DARUSSALAM TAROGONG KALER KABUPATEN GARUT',
            ],
            '2032' => [
                'npsn' => '20275997',
                'nama' => 'SMKS WIKRAMA 1 GARUT KABUPATEN GARUT',
            ],
            '2033' => [
                'npsn' => '20227475',
                'nama' => 'SMAN 6 GARUT KABUPATEN GARUT',
            ],
            '2034' => [
                'npsn' => '20227474',
                'nama' => 'SMAN 1 GARUT KABUPATEN GARUT',
            ],
            '2035' => [
                'npsn' => '69900793',
                'nama' => 'SMAS NURUL FAJRI KABUPATEN MAJALENGKA',
            ],
            '2036' => [
                'npsn' => '20271881',
                'nama' => 'SMKS BUDI BAKTI UTAMA KABUPATEN BANDUNG BARAT',
            ],
            '2037' => [
                'npsn' => '20267652',
                'nama' => 'SLBS AL HIKMAH KABUPATEN BANDUNG BARAT',
            ],
            '2038' => [
                'npsn' => '69985878',
                'nama' => 'SMKS NU AL ITQON CIMERAK KABUPATEN PANGANDARAN',
            ],
            '2039' => [
                'npsn' => '69882394',
                'nama' => 'SMKS MIFTAHUL ULUM CIMERAK KABUPATEN PANGANDARAN',
            ],
            '2040' => [
                'npsn' => '20247197',
                'nama' => 'SMKN 1 PALASAH KABUPATEN MAJALENGKA',
            ],
            '2041' => [
                'npsn' => '20263962',
                'nama' => 'SMKS AR RAHMAT KABUPATEN MAJALENGKA',
            ],
            '2042' => [
                'npsn' => '60728700',
                'nama' => 'SMKS AL MAMUN CIBUGEL KABUPATEN SUMEDANG',
            ],
            '2043' => [
                'npsn' => '20234021',
                'nama' => 'SLBS LINGGA DHARMA KABUPATEN SUMEDANG',
            ],
            '2044' => [
                'npsn' => '60726121',
                'nama' => 'SMKS PASUNDAN CIBUGEL KABUPATEN SUMEDANG',
            ],
            '2045' => [
                'npsn' => '20202260',
                'nama' => 'SMAN 1 CIRACAP KABUPATEN SUKABUMI',
            ],
            '2046' => [
                'npsn' => '69929578',
                'nama' => 'SMKS AL MAMUN SURIAN KABUPATEN SUMEDANG',
            ],
            '2047' => [
                'npsn' => '20268529',
                'nama' => 'SMKS PASUNDAN 2 CIANJUR KABUPATEN CIANJUR',
            ],
            '2048' => [
                'npsn' => '20258153',
                'nama' => 'SLBN BAG B KABUPATEN GARUT',
            ],
            '2049' => [
                'npsn' => '20258173',
                'nama' => 'SLBS BAG A YKB GARUT KABUPATEN GARUT',
            ],
            '2050' => [
                'npsn' => '69936614',
                'nama' => 'SMAS PLUS MA RUFUL HIDAYAH KABUPATEN GARUT',
            ],
            '2051' => [
                'npsn' => '69935579',
                'nama' => 'SMAS TUNAS KARYA KABUPATEN GARUT',
            ],
            '2052' => [
                'npsn' => '20257268',
                'nama' => 'SMKS AL FALAH KABUPATEN GARUT',
            ],
            '2053' => [
                'npsn' => '20258141',
                'nama' => 'SLBN GARUT KOTA KABUPATEN GARUT',
            ],
            '2054' => [
                'npsn' => '20263961',
                'nama' => 'SMKS KESEHATAN BHAKTI KENCANA JATIWANGI KABUPATEN MAJALENGKA',
            ],
            '2055' => [
                'npsn' => '69899353',
                'nama' => 'SMAS MADYA UTAMA KABUPATEN BANDUNG BARAT',
            ],
            '2056' => [
                'npsn' => '20267650',
                'nama' => 'SMKS PUSAT TEKNOLOGI CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '2057' => [
                'npsn' => '20252202',
                'nama' => 'SMAN 1 MANDE KABUPATEN CIANJUR',
            ],
            '2058' => [
                'npsn' => '20235533',
                'nama' => 'SLBS BAG ABCD NUR AMALIA KABUPATEN SUMEDANG',
            ],
            '2059' => [
                'npsn' => '20280592',
                'nama' => 'SLBS NOOR RAKHMAH KOTA BANDUNG',
            ],
            '2060' => [
                'npsn' => '20219745',
                'nama' => 'SLBS BAG D YPAC KOTA BANDUNG',
            ],
            '2061' => [
                'npsn' => '20259612',
                'nama' => 'SLBS MUHAMMADIYAH CIPEDES KOTA BANDUNG',
            ],
            '2062' => [
                'npsn' => '69850868',
                'nama' => 'SMAS BANDUNG INDEPENDENT SCHOOL KOTA BANDUNG',
            ],
            '2063' => [
                'npsn' => '20203720',
                'nama' => 'SMAS PASUNDAN CIKALONGKULON KABUPATEN CIANJUR',
            ],
            '2064' => [
                'npsn' => '69881555',
                'nama' => 'SMAS IT NURUL ISLAM KABUPATEN CIANJUR',
            ],
            '2065' => [
                'npsn' => '20271291',
                'nama' => 'SMKS KOMPUTER ARYA KARINA PRATAMA AKP KABUPATEN CIANJUR',
            ],
            '2066' => [
                'npsn' => '69950250',
                'nama' => 'SMKS ILMINA PERSADA KABUPATEN CIANJUR',
            ],
            '2067' => [
                'npsn' => '69938154',
                'nama' => 'SMKS ISAS LEUWIMUNDING KABUPATEN MAJALENGKA',
            ],
            '2068' => [
                'npsn' => '20234018',
                'nama' => 'SLBS BINA NUSANTARA I KABUPATEN SUMEDANG',
            ],
            '2069' => [
                'npsn' => '69862818',
                'nama' => 'SMKS MAARIF SUKASLAMET KABUPATEN INDRAMAYU',
            ],
            '2070' => [
                'npsn' => '69888852',
                'nama' => 'SMKS SENI INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2071' => [
                'npsn' => '20227859',
                'nama' => 'SMAS MITRA DARMA CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '2072' => [
                'npsn' => '69946120',
                'nama' => 'SMAS LEPPESA 2 CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '2073' => [
                'npsn' => '20267647',
                'nama' => 'SMKS FARMASI MITADHARMA CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '2074' => [
                'npsn' => '69915489',
                'nama' => 'SMKS AL BASHRIYAH KABUPATEN SUKABUMI',
            ],
            '2075' => [
                'npsn' => '69786231',
                'nama' => 'SMKS INSAN KARYA NUSANTARA KABUPATEN CIANJUR',
            ],
            '2076' => [
                'npsn' => '69758124',
                'nama' => 'SMKS NURUL FALLAH CIKALONGKULON KABUPATEN CIANJUR',
            ],
            '2077' => [
                'npsn' => '69752268',
                'nama' => 'SMKN 2 CIPATUJAH KABUPATEN TASIKMALAYA',
            ],
            '2078' => [
                'npsn' => '69964651',
                'nama' => 'SMAN 1 BOJONG PICUNG KABUPATEN CIANJUR',
            ],
            '2079' => [
                'npsn' => '69870901',
                'nama' => 'SMKS ISLAM BIHBUL KABUPATEN TASIKMALAYA',
            ],
            '2080' => [
                'npsn' => '20254178',
                'nama' => 'SMKS PATRIOT SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2081' => [
                'npsn' => '20279921',
                'nama' => 'SMKS SURYA PERTIWI KABUPATEN BANDUNG BARAT',
            ],
            '2082' => [
                'npsn' => '20267656',
                'nama' => 'SLBS BUDI MULIA CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '2083' => [
                'npsn' => '20252032',
                'nama' => 'SMKN 1 CIKALONG KULON KABUPATEN CIANJUR',
            ],
            '2084' => [
                'npsn' => '20203722',
                'nama' => 'SMAN 1 WARUNGKONDANG KABUPATEN CIANJUR',
            ],
            '2085' => [
                'npsn' => '69888855',
                'nama' => 'SMKS AL JAUHARIYAH KABUPATEN CIANJUR',
            ],
            '2086' => [
                'npsn' => '69945596',
                'nama' => 'SMAS IT TUNAS BANGSA KABUPATEN CIANJUR',
            ],
            '2087' => [
                'npsn' => '20276191',
                'nama' => 'SMKS SATRIA MANDALA KABUPATEN CIANJUR',
            ],
            '2088' => [
                'npsn' => '69786347',
                'nama' => 'SMAS ISLAMIC AL IRSYAD BOARDING SCHOOL KABUPATEN CIANJUR',
            ],
            '2089' => [
                'npsn' => '20210715',
                'nama' => 'SMKS ARROJA TASIKMALAYA KABUPATEN TASIKMALAYA',
            ],
            '2090' => [
                'npsn' => '69946437',
                'nama' => 'SLBS DENIR BHAKTI KABUPATEN SUMEDANG',
            ],
            '2091' => [
                'npsn' => '20235644',
                'nama' => 'SMKS YPSA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2092' => [
                'npsn' => '69955104',
                'nama' => 'SMKS DAARUL ULUM KABUPATEN BANDUNG BARAT',
            ],
            '2093' => [
                'npsn' => '20227872',
                'nama' => 'SMAS PGRI CIPEUNDEUY KABUPATEN BANDUNG BARAT',
            ],
            '2094' => [
                'npsn' => '20227813',
                'nama' => 'SMAS AL AMANAH CIWIDEY KABUPATEN BANDUNG',
            ],
            '2095' => [
                'npsn' => '69727436',
                'nama' => 'SMKS SINAR PARAHYANGAN KABUPATEN CIANJUR',
            ],
            '2096' => [
                'npsn' => '20259574',
                'nama' => 'SMKS AL WAFA KABUPATEN BANDUNG',
            ],
            '2097' => [
                'npsn' => '69755244',
                'nama' => 'SMKN 1 HAURWANGI KABUPATEN CIANJUR',
            ],
            '2098' => [
                'npsn' => '20208400',
                'nama' => 'SMKS YP GEUSAN ULUN KABUPATEN SUMEDANG',
            ],
            '2099' => [
                'npsn' => '20208398',
                'nama' => 'SMKS MUHAMADIYAH 2 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2100' => [
                'npsn' => '69755713',
                'nama' => 'SMKS PEMUDA 2 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2101' => [
                'npsn' => '69945707',
                'nama' => 'SMAS AN NAJA BOARDING SCHOOL KABUPATEN BANDUNG BARAT',
            ],
            '2102' => [
                'npsn' => '20279832',
                'nama' => 'SLBS CHAHYA PUTRA KABUPATEN BANDUNG BARAT',
            ],
            '2103' => [
                'npsn' => '20238539',
                'nama' => 'SMKS SAGAMULIA KOTA BOGOR',
            ],
            '2104' => [
                'npsn' => '20279929',
                'nama' => 'SMKS TARUNA HARAPAN 2 KABUPATEN BANDUNG BARAT',
            ],
            '2105' => [
                'npsn' => '20228526',
                'nama' => 'SMKS GEMA NUSANTARA 5 KABUPATEN BANDUNG BARAT',
            ],
            '2106' => [
                'npsn' => '69882331',
                'nama' => 'SMKS AL ISHLAH CIKALONG KABUPATEN TASIKMALAYA',
            ],
            '2107' => [
                'npsn' => '69934752',
                'nama' => 'SMKS NURUL FALAH KABUPATEN TASIKMALAYA',
            ],
            '2108' => [
                'npsn' => '69948746',
                'nama' => 'SMKS AL FALAH PANCATENGAH KABUPATEN TASIKMALAYA',
            ],
            '2109' => [
                'npsn' => '69829360',
                'nama' => 'SMKS KARYA BHAKTI IBU KABUPATEN SUMEDANG',
            ],
            '2110' => [
                'npsn' => '20235534',
                'nama' => 'SLBS BAG ABC DOA BUNDA KABUPATEN SUMEDANG',
            ],
            '2111' => [
                'npsn' => '69948626',
                'nama' => 'SMKS AL HIKMAH ANJATAN KABUPATEN INDRAMAYU',
            ],
            '2112' => [
                'npsn' => '69942788',
                'nama' => 'SMKS NU DARUSSALAM KABUPATEN INDRAMAYU',
            ],
            '2113' => [
                'npsn' => '20267654',
                'nama' => 'SLBS BAG BC MULYA BAKTI KABUPATEN BANDUNG BARAT',
            ],
            '2114' => [
                'npsn' => '69935558',
                'nama' => 'SMAS TEMASEK INDEPENDENT SCHOOL KOTA BANDUNG',
            ],
            '2115' => [
                'npsn' => '69754527',
                'nama' => 'SMKS NU SUKRA KABUPATEN INDRAMAYU',
            ],
            '2116' => [
                'npsn' => '20255394',
                'nama' => 'SMKS YAPARI AKTRIPA KOTA BANDUNG',
            ],
            '2117' => [
                'npsn' => '20280590',
                'nama' => 'SLBS SOLALIN KOTA BANDUNG',
            ],
            '2118' => [
                'npsn' => '69949530',
                'nama' => 'SMKS MAARIF NU ZAENAL MUTTAQIN KABUPATEN TASIKMALAYA',
            ],
            '2120' => [
                'npsn' => '20269637',
                'nama' => 'SMKS TEKNOLOGI INTISABI KABUPATEN SUMEDANG',
            ],
            '2121' => [
                'npsn' => '20237464',
                'nama' => 'SMKN 1 JATISARI KABUPATEN KARAWANG',
            ],
            '2122' => [
                'npsn' => '69867943',
                'nama' => 'SMKS NU CANTIGI KABUPATEN INDRAMAYU',
            ],
            '2123' => [
                'npsn' => '20272025',
                'nama' => 'SMKS DAARUT TAUHIID KOTA BANDUNG',
            ],
            '2124' => [
                'npsn' => '20219763',
                'nama' => 'SMAS PASUNDAN 5 BANDUNG KOTA BANDUNG',
            ],
            '2125' => [
                'npsn' => '20221571',
                'nama' => 'SMKS PASUNDAN 2 SUKABUMI KOTA SUKABUMI',
            ],
            '2126' => [
                'npsn' => '20258482',
                'nama' => 'SLBS AL FAJAR KABUPATEN BANDUNG',
            ],
            '2127' => [
                'npsn' => '20262713',
                'nama' => 'SMAS IJTIMAUL AHADIAH KABUPATEN TASIKMALAYA',
            ],
            '2128' => [
                'npsn' => '20268931',
                'nama' => 'SMKS NASHIRUL HUDA KABUPATEN TASIKMALAYA',
            ],
            '2129' => [
                'npsn' => '69985008',
                'nama' => 'SMKS PLUS MADYA KUSUMAH KABUPATEN TASIKMALAYA',
            ],
            '2130' => [
                'npsn' => '20208402',
                'nama' => 'SMKS YPPS SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2131' => [
                'npsn' => '69786578',
                'nama' => 'SMKS PEMBAHARUAN GANTAR KABUPATEN INDRAMAYU',
            ],
            '2132' => [
                'npsn' => '20227847',
                'nama' => 'SMAS KP CIKALONGWETAN KABUPATEN BANDUNG BARAT',
            ],
            '2133' => [
                'npsn' => '20221596',
                'nama' => 'SMKS TEKNOLOGI PLUS PADJADJARAN SUKABUMI KOTA SUKABUMI',
            ],
            '2134' => [
                'npsn' => '20223069',
                'nama' => 'SMAS PANGERAN JAYAKARTA KOTA BEKASI',
            ],
            '2135' => [
                'npsn' => '20252537',
                'nama' => 'SMKS TAMAN HARAPAN KOTA BEKASI',
            ],
            '2136' => [
                'npsn' => '20210775',
                'nama' => 'SMAS PGRI SALAWU KABUPATEN TASIKMALAYA',
            ],
            '2137' => [
                'npsn' => '20210773',
                'nama' => 'SMAS PLUS AL WAHID SALAWU KABUPATEN TASIKMALAYA',
            ],
            '2138' => [
                'npsn' => '69878672',
                'nama' => 'SMKS NURUL FITRI KABUPATEN TASIKMALAYA',
            ],
            '2139' => [
                'npsn' => '20258084',
                'nama' => 'SMKS AL AMIN KABUPATEN TASIKMALAYA',
            ],
            '2140' => [
                'npsn' => '69946123',
                'nama' => 'SMKS TARUNA TERPADU AL MUSYAWARAH KABUPATEN BANDUNG BARAT',
            ],
            '2141' => [
                'npsn' => '20268834',
                'nama' => 'SMKS AN NUR MARUYUNG KABUPATEN BANDUNG',
            ],
            '2142' => [
                'npsn' => '20251889',
                'nama' => 'SMKN SUKASARI KABUPATEN SUMEDANG',
            ],
            '2143' => [
                'npsn' => '69826571',
                'nama' => 'SMKS NU SUKAGUMIWANG KABUPATEN INDRAMAYU',
            ],
            '2144' => [
                'npsn' => '20240402',
                'nama' => 'SMAS MEKARWANGI LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2145' => [
                'npsn' => '69816315',
                'nama' => 'SMKS PUTRA NASIONAL CIBODAS KABUPATEN BANDUNG BARAT',
            ],
            '2146' => [
                'npsn' => '69954549',
                'nama' => 'SMAS PLUS AL HIKMAH SUKARAJA KABUPATEN TASIKMALAYA',
            ],
            '2147' => [
                'npsn' => '20210712',
                'nama' => 'SMKS KESEHATAN BHAKTI KENCANA KABUPATEN TASIKMALAYA',
            ],
            '2148' => [
                'npsn' => '20258190',
                'nama' => 'SMKS YPIB TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '2149' => [
                'npsn' => '20259573',
                'nama' => 'SMKS ALOER WARGAKUSUMAH KABUPATEN BANDUNG',
            ],
            '2150' => [
                'npsn' => '20235638',
                'nama' => 'SMKS PASUNDAN TANJUNGSARI SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2151' => [
                'npsn' => '69946301',
                'nama' => 'SMKS RAHAYU IHSANI KABUPATEN PANGANDARAN',
            ],
            '2152' => [
                'npsn' => '69759272',
                'nama' => 'SMKS NU PELITA NUSANTARA KABUPATEN PANGANDARAN',
            ],
            '2153' => [
                'npsn' => '69947712',
                'nama' => 'SMKS TUNAS HARAPAN BANGSA KABUPATEN PANGANDARAN',
            ],
            '2154' => [
                'npsn' => '20280589',
                'nama' => 'SLBS BAG B TUT WURI HANDAYANI KOTA BANDUNG',
            ],
            '2155' => [
                'npsn' => '20237997',
                'nama' => 'SMAN 4 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '2156' => [
                'npsn' => '20268946',
                'nama' => 'SMKN SPP KABUPATEN TASIKMALAYA',
            ],
            '2157' => [
                'npsn' => '69952223',
                'nama' => 'SMAS IT UMMUL QURO KABUPATEN TASIKMALAYA',
            ],
            '2158' => [
                'npsn' => '69920115',
                'nama' => 'SMKS INKANAS TEMBONG AGUNG KABUPATEN SUMEDANG',
            ],
            '2159' => [
                'npsn' => '20235636',
                'nama' => 'SMKS INFORMATIKA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2160' => [
                'npsn' => '20267648',
                'nama' => 'SMKS PGRI LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2161' => [
                'npsn' => '69945428',
                'nama' => 'SMAS PP BAITUL IZZAH NUSANTARA KABUPATEN BANDUNG BARAT',
            ],
            '2162' => [
                'npsn' => '20267644',
                'nama' => 'SMKS BINA WISATA LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2163' => [
                'npsn' => '20219742',
                'nama' => 'SLBS SUKAGALIH KABUPATEN BANDUNG BARAT',
            ],
            '2164' => [
                'npsn' => '20269747',
                'nama' => 'SMAS NURUL FIKRI BOARDING SCHOOL LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2165' => [
                'npsn' => '20251786',
                'nama' => 'SMAS PGRI LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2166' => [
                'npsn' => '20279888',
                'nama' => 'SMKS NURUL HUDA KABUPATEN TASIKMALAYA',
            ],
            '2167' => [
                'npsn' => '20208421',
                'nama' => 'SMAN 3 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2168' => [
                'npsn' => '20227821',
                'nama' => 'SMAS AL HIDAYAH CIPARAY KABUPATEN BANDUNG',
            ],
            '2169' => [
                'npsn' => '20268847',
                'nama' => 'SMKS RIYADUL HIKMAH KABUPATEN TASIKMALAYA',
            ],
            '2170' => [
                'npsn' => '20209195',
                'nama' => 'SMAN 15 GARUT KABUPATEN GARUT',
            ],
            '2171' => [
                'npsn' => '69786575',
                'nama' => 'SMKS DHARMA NEGARA KABUPATEN INDRAMAYU',
            ],
            '2172' => [
                'npsn' => '69946799',
                'nama' => 'SMKS MAARIF CIJULANG KABUPATEN PANGANDARAN',
            ],
            '2173' => [
                'npsn' => '20220314',
                'nama' => 'SMAS MUHAMMADIYAH KOTA BOGOR',
            ],
            '2174' => [
                'npsn' => '20221587',
                'nama' => 'SMAS PESANTREN TERPADU HAYATAN THAYYIBAH KOTA SUKABUMI',
            ],
            '2175' => [
                'npsn' => '20221616',
                'nama' => 'SMKS SILIWANGI SUKABUMI KOTA SUKABUMI',
            ],
            '2176' => [
                'npsn' => '20279872',
                'nama' => 'SMKS JAYA MANDIRI KABUPATEN TASIKMALAYA',
            ],
            '2177' => [
                'npsn' => '20210741',
                'nama' => 'SMAN 1 MANONJAYA KABUPATEN TASIKMALAYA',
            ],
            '2178' => [
                'npsn' => '20210709',
                'nama' => 'SMKS PANCASILA MANONJAYA KABUPATEN TASIKMALAYA',
            ],
            '2179' => [
                'npsn' => '20258453',
                'nama' => 'SMKN PERTANIAN PEMBANGUNAN LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2180' => [
                'npsn' => '20235626',
                'nama' => 'SMAS PGRI PARAKAN MUNCANG KABUPATEN SUMEDANG',
            ],
            '2181' => [
                'npsn' => '20251780',
                'nama' => 'SMAS ISLAM MUSYAWARAH KABUPATEN BANDUNG BARAT',
            ],
            '2182' => [
                'npsn' => '20227841',
                'nama' => 'SMAS ISLAM NURUL HUDA LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2183' => [
                'npsn' => '69822684',
                'nama' => 'SMAS DARUL HIKAM INTERNASIONAL KABUPATEN BANDUNG BARAT',
            ],
            '2184' => [
                'npsn' => '20267651',
                'nama' => 'SLBS BAG ABC YPLAB LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2185' => [
                'npsn' => '20244754',
                'nama' => 'SMKN MANONJAYA KABUPATEN TASIKMALAYA',
            ],
            '2186' => [
                'npsn' => '20227940',
                'nama' => 'SMKS HANDAYANI BANJARAN KABUPATEN BANDUNG',
            ],
            '2187' => [
                'npsn' => '20268595',
                'nama' => 'SMKS GANESHA CIMANGGUNG KABUPATEN SUMEDANG',
            ],
            '2188' => [
                'npsn' => '69954809',
                'nama' => 'SMKS AL AMAH SINDULANG KABUPATEN SUMEDANG',
            ],
            '2189' => [
                'npsn' => '20227965',
                'nama' => 'SMKS STMC 4245 BALEENDAH KABUPATEN BANDUNG',
            ],
            '2190' => [
                'npsn' => '20256563',
                'nama' => 'SMKS HARAPAN BANGSA BALEENDAH KABUPATEN BANDUNG',
            ],
            '2191' => [
                'npsn' => '20227949',
                'nama' => 'SMKS KP BALEENDAH KABUPATEN BANDUNG',
            ],
            '2192' => [
                'npsn' => '20228550',
                'nama' => 'SMKS PAKUAN LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2193' => [
                'npsn' => '20228510',
                'nama' => 'SMKS 45 LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '2194' => [
                'npsn' => '20267655',
                'nama' => 'SLBS BINA ANUGRAH KABUPATEN BANDUNG BARAT',
            ],
            '2195' => [
                'npsn' => '20251791',
                'nama' => 'SMAN 1 BANJARAN KABUPATEN BANDUNG',
            ],
            '2196' => [
                'npsn' => '69987056',
                'nama' => 'SMKN 1 KALIPUCANG KABUPATEN PANGANDARAN',
            ],
            '2197' => [
                'npsn' => '20268131',
                'nama' => 'SLBS AISYIYAH SINGAPARNA KABUPATEN TASIKMALAYA',
            ],
            '2198' => [
                'npsn' => '20268061',
                'nama' => 'SMKS ISLAM CIPASUNG KABUPATEN TASIKMALAYA',
            ],
            '2199' => [
                'npsn' => '20271840',
                'nama' => 'SMKS PGRI JATINANGOR KABUPATEN SUMEDANG',
            ],
            '2200' => [
                'npsn' => '20254180',
                'nama' => 'SMKS PASUNDAN JATINANGOR KABUPATEN SUMEDANG',
            ],
            '2201' => [
                'npsn' => '20227887',
                'nama' => 'SMAS YUMIK BANJARAN KABUPATEN BANDUNG',
            ],
            '2202' => [
                'npsn' => '20254177',
                'nama' => 'SMKS FARMASI BHAKTI SEJAHTERA JATINANGOR KABUPATEN SUMEDANG',
            ],
            '2203' => [
                'npsn' => '69897177',
                'nama' => 'SMAS DARUN NASYA KABUPATEN BANDUNG BARAT',
            ],
            '2204' => [
                'npsn' => '20258344',
                'nama' => 'SLBS DARMA PUTRA KALIPUCANG KABUPATEN PANGANDARAN',
            ],
            '2205' => [
                'npsn' => '20254632',
                'nama' => 'SMKS AL KAUTSAR KALIPUCANG KABUPATEN PANGANDARAN',
            ],
            '2206' => [
                'npsn' => '20268934',
                'nama' => 'SMKS ISLAM TENJONAGARA KABUPATEN TASIKMALAYA',
            ],
            '2207' => [
                'npsn' => '20268136',
                'nama' => 'SLBS AL ISHLAH KABUPATEN TASIKMALAYA',
            ],
            '2208' => [
                'npsn' => '20210760',
                'nama' => 'SMAS MUHAMMADIYAH RAWA KABUPATEN TASIKMALAYA',
            ],
            '2209' => [
                'npsn' => '20268017',
                'nama' => 'SMKS CENDIKIA KABUPATEN TASIKMALAYA',
            ],
            '2210' => [
                'npsn' => '20254319',
                'nama' => 'SMKS GLOBAL JATITUJUH KABUPATEN MAJALENGKA',
            ],
            '2211' => [
                'npsn' => '20220273',
                'nama' => 'SMKN 1 BOGOR KOTA BOGOR',
            ],
            '2212' => [
                'npsn' => '20238516',
                'nama' => 'SMAN 2 BOGOR KOTA BOGOR',
            ],
            '2213' => [
                'npsn' => '20220322',
                'nama' => 'SMAS BINA INSANI KOTA BOGOR',
            ],
            '2214' => [
                'npsn' => '20235620',
                'nama' => 'SMAN 2 CIMALAKA KABUPATEN SUMEDANG',
            ],
            '2215' => [
                'npsn' => '70003343',
                'nama' => 'SMKN CIMERAK KABUPATEN PANGANDARAN',
            ],
            '2216' => [
                'npsn' => '20213884',
                'nama' => 'SMAN 1 JATITUJUH KABUPATEN MAJALENGKA',
            ],
            '2217' => [
                'npsn' => '69876152',
                'nama' => 'SMKS MARGA INSAN KAMIL KABUPATEN BANDUNG',
            ],
            '2218' => [
                'npsn' => '69752270',
                'nama' => 'SMKS PELITA CENDEKIA BANGSA KABUPATEN TASIKMALAYA',
            ],
            '2219' => [
                'npsn' => '69934906',
                'nama' => 'SMKS IT MALIK AL FATH KABUPATEN TASIKMALAYA',
            ],
            '2220' => [
                'npsn' => '69955220',
                'nama' => 'SMKS AL HIKAM KABUPATEN SUMEDANG',
            ],
            '2221' => [
                'npsn' => '69992302',
                'nama' => 'SMAS PLUS AL AQSHA KABUPATEN SUMEDANG',
            ],
            '2222' => [
                'npsn' => '69939325',
                'nama' => 'SMKS PUI JATINANGOR KABUPATEN SUMEDANG',
            ],
            '2223' => [
                'npsn' => '69759273',
                'nama' => 'SMKS KESEHATAN PARIGI KABUPATEN PANGANDARAN',
            ],
            '2224' => [
                'npsn' => '69883502',
                'nama' => 'SMKS BAKTI KARYA PARIGI KABUPATEN PANGANDARAN',
            ],
            '2225' => [
                'npsn' => '20258478',
                'nama' => 'SLBS BAG BC NUFTAH HIDAYAH KABUPATEN BANDUNG',
            ],
            '2226' => [
                'npsn' => '20268462',
                'nama' => 'SLBS BINTANG HARAPAN KABUPATEN BANDUNG',
            ],
            '2227' => [
                'npsn' => '69893351',
                'nama' => 'SMKS BINA INSANI JAMANIS KABUPATEN TASIKMALAYA',
            ],
            '2228' => [
                'npsn' => '69858466',
                'nama' => 'SMKS YPIB JATINUNGGAL KABUPATEN SUMEDANG',
            ],
            '2229' => [
                'npsn' => '69956573',
                'nama' => 'SMKS TIYASA KABUPATEN SUMEDANG',
            ],
            '2230' => [
                'npsn' => '69888975',
                'nama' => 'SMKS AL AKRAM KABUPATEN SUMEDANG',
            ],
            '2231' => [
                'npsn' => '69831550',
                'nama' => 'SMKS ASY SYIFA 02 PARIGI KABUPATEN PANGANDARAN',
            ],
            '2232' => [
                'npsn' => '20232486',
                'nama' => 'SMKS TAMAN REZEKI KABUPATEN BOGOR',
            ],
            '2233' => [
                'npsn' => '20210768',
                'nama' => 'SMAN 1 CIAWI KABUPATEN TASIKMALAYA',
            ],
            '2234' => [
                'npsn' => '20251887',
                'nama' => 'SMKN 1 BUAHDUA KABUPATEN SUMEDANG',
            ],
            '2235' => [
                'npsn' => '69897021',
                'nama' => 'SMKS MMC KABUPATEN TASIKMALAYA',
            ],
            '2236' => [
                'npsn' => '69873966',
                'nama' => 'SMKS SARIWANGI KABUPATEN TASIKMALAYA',
            ],
            '2237' => [
                'npsn' => '69831502',
                'nama' => 'SMKS IT AL ITIHAD KABUPATEN TASIKMALAYA',
            ],
            '2238' => [
                'npsn' => '69968414',
                'nama' => 'SMKS AGRO KABUPATEN SUMEDANG',
            ],
            '2239' => [
                'npsn' => '69840969',
                'nama' => 'SLBS BINANGKIT KABUPATEN SUMEDANG',
            ],
            '2240' => [
                'npsn' => '69752263',
                'nama' => 'SMKN PARUNGPONTENG KABUPATEN TASIKMALAYA',
            ],
            '2241' => [
                'npsn' => '20219182',
                'nama' => 'SMKS MUHAMMADIYAH 3 BANDUNG KOTA BANDUNG',
            ],
            '2242' => [
                'npsn' => '69926941',
                'nama' => 'SMKN 2 PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '2243' => [
                'npsn' => '20265516',
                'nama' => 'SMAN 27 BANDUNG KOTA BANDUNG',
            ],
            '2244' => [
                'npsn' => '20228432',
                'nama' => 'SMAS DARUL HIKMAH BOJONGSOANG KABUPATEN BANDUNG',
            ],
            '2245' => [
                'npsn' => '20210748',
                'nama' => 'SMAS AL HIDAYAH PUSPAHIANG KABUPATEN TASIKMALAYA',
            ],
            '2246' => [
                'npsn' => '20262717',
                'nama' => 'SMKS AL MUBAROKAH KABUPATEN TASIKMALAYA',
            ],
            '2247' => [
                'npsn' => '69934731',
                'nama' => 'SMAS TERPADU SALMAN AL FARISI KABUPATEN TASIKMALAYA',
            ],
            '2248' => [
                'npsn' => '20229516',
                'nama' => 'SMAS NURUL WAFA KABUPATEN TASIKMALAYA',
            ],
            '2249' => [
                'npsn' => '70038416',
                'nama' => 'SMAS ISLAM TERPADU AL IKHLAS KABUPATEN CIANJUR',
            ],
            '2250' => [
                'npsn' => '69788177',
                'nama' => 'SMKS INOVASI MANDIRI KABUPATEN SUMEDANG',
            ],
            '2251' => [
                'npsn' => '69899974',
                'nama' => 'SMKS PLUS MAARIF NU PARIGI KABUPATEN PANGANDARAN',
            ],
            '2252' => [
                'npsn' => '20235623',
                'nama' => 'SMAN DARMARAJA KABUPATEN SUMEDANG',
            ],
            '2253' => [
                'npsn' => '70039707',
                'nama' => 'SMAS IT AL MULTAZAM KABUPATEN BANDUNG',
            ],
            '2254' => [
                'npsn' => '69752267',
                'nama' => 'SMKN PUSPAHIANG KABUPATEN TASIKMALAYA',
            ],
            '2255' => [
                'npsn' => '69897019',
                'nama' => 'SMAS SABILUL HUDA KABUPATEN TASIKMALAYA',
            ],
            '2256' => [
                'npsn' => '70001209',
                'nama' => 'SLBS IZZUL HAQ GUNUNG TANJUNG KABUPATEN TASIKMALAYA',
            ],
            '2257' => [
                'npsn' => '20268067',
                'nama' => 'SMKS PLUS AL HASANAH KABUPATEN TASIKMALAYA',
            ],
            '2258' => [
                'npsn' => '20220292',
                'nama' => 'SMKS YKTB 1 BOGOR KOTA BOGOR',
            ],
            '2259' => [
                'npsn' => '69765806',
                'nama' => 'SMKS BINA SEJAHTERA 3 KOTA BOGOR',
            ],
            '2260' => [
                'npsn' => '20251830',
                'nama' => 'SMKS IT NURUL HIKMAH KABUPATEN TASIKMALAYA',
            ],
            '2261' => [
                'npsn' => '69953978',
                'nama' => 'SMAS ZUMROTUL MUTTAQIEN KABUPATEN SUMEDANG',
            ],
            '2262' => [
                'npsn' => '20216946',
                'nama' => 'SLBS WALIWIS PUTIH KABUPATEN SUBANG',
            ],
            '2263' => [
                'npsn' => '20246320',
                'nama' => 'SMKS PELITA NUSA JALANCAGAK KABUPATEN SUBANG',
            ],
            '2264' => [
                'npsn' => '20238478',
                'nama' => 'SLBS BAG B TUNAS KASIH 2 KOTA BOGOR',
            ],
            '2265' => [
                'npsn' => '20258272',
                'nama' => 'SLBN WIDI ASIH KABUPATEN PANGANDARAN',
            ],
            '2266' => [
                'npsn' => '69947328',
                'nama' => 'SMAS ISLAM TERPADU NURUL JANNAH KABUPATEN TASIKMALAYA',
            ],
            '2267' => [
                'npsn' => '69946268',
                'nama' => 'SMKS AL IHSAN LANGKAPLANCAR KABUPATEN PANGANDARAN',
            ],
            '2268' => [
                'npsn' => '69966602',
                'nama' => 'SMKS BANI KAMIL KABUPATEN TASIKMALAYA',
            ],
            '2269' => [
                'npsn' => '69881561',
                'nama' => 'SMKS TERPADU AL AZHARIYAH KABUPATEN TASIKMALAYA',
            ],
            '2270' => [
                'npsn' => '69949084',
                'nama' => 'SMKS JABAL TORIQ BOARDING SCHOOL KABUPATEN TASIKMALAYA',
            ],
            '2271' => [
                'npsn' => '69954729',
                'nama' => 'SMKS TERPADU THURSINA KABUPATEN SUMEDANG',
            ],
            '2272' => [
                'npsn' => '20233662',
                'nama' => 'SMAS PGRI TANJUNG SIANG KABUPATEN SUBANG',
            ],
            '2273' => [
                'npsn' => '69970491',
                'nama' => 'SMKS YABA NUSANTARA KABUPATEN SUBANG',
            ],
            '2274' => [
                'npsn' => '70037893',
                'nama' => 'SMAS ANNUR WAHID KABUPATEN GARUT',
            ],
            '2275' => [
                'npsn' => '70038822',
                'nama' => 'SMAS ASSA`ADAH KABUPATEN GARUT',
            ],
            '2276' => [
                'npsn' => '70038854',
                'nama' => 'SMAS IT DINAMIKA UMAT KABUPATEN BOGOR',
            ],
            '2277' => [
                'npsn' => '20271673',
                'nama' => 'SMKS NANGKALEAH KABUPATEN TASIKMALAYA',
            ],
            '2278' => [
                'npsn' => '20279936',
                'nama' => 'SLBN TANJUNGMEDAR KABUPATEN SUMEDANG',
            ],
            '2279' => [
                'npsn' => '69759274',
                'nama' => 'SMKS VIP MAMBAUS KABUPATEN CIAMIS',
            ],
            '2280' => [
                'npsn' => '70011225',
                'nama' => 'SMAS AL FADLIL KABUPATEN CIAMIS',
            ],
            '2281' => [
                'npsn' => '20254648',
                'nama' => 'SMKS MUHAMMADIYAH 3 BANJARSARI KABUPATEN CIAMIS',
            ],
            '2282' => [
                'npsn' => '20254099',
                'nama' => 'SMKN 1 GABUSWETAN KABUPATEN INDRAMAYU',
            ],
            '2283' => [
                'npsn' => '20215990',
                'nama' => 'SMAS PGRI GABUS WETAN KABUPATEN INDRAMAYU',
            ],
            '2284' => [
                'npsn' => '20253574',
                'nama' => 'SMKS NU GABUSWETAN KABUPATEN INDRAMAYU',
            ],
            '2285' => [
                'npsn' => '69787069',
                'nama' => 'SMKS AL MASTURIYAH LANGKAPLANCAR KABUPATEN PANGANDARAN',
            ],
            '2286' => [
                'npsn' => '69947461',
                'nama' => 'SMKS TAMANSISWA BOGOR KOTA BOGOR',
            ],
            '2287' => [
                'npsn' => '20220296',
                'nama' => 'SMKS YZA 3 BOGOR KOTA BOGOR',
            ],
            '2288' => [
                'npsn' => '20263285',
                'nama' => 'SMKS AL IHSAN PAMARICAN KABUPATEN CIAMIS',
            ],
            '2289' => [
                'npsn' => '69870687',
                'nama' => 'SLBS HARAPAN BUNDA KABUPATEN SUMEDANG',
            ],
            '2290' => [
                'npsn' => '69920278',
                'nama' => 'SMKS MUHAMMADIYAH MANGUNJAYA KABUPATEN PANGANDARAN',
            ],
            '2291' => [
                'npsn' => '70038321',
                'nama' => 'SMAS IT AL ANDALUS KABUPATEN BOGOR',
            ],
            '2292' => [
                'npsn' => '70038405',
                'nama' => 'SMAS AL MANAR KABUPATEN BEKASI',
            ],
            '2293' => [
                'npsn' => '20221585',
                'nama' => 'SLBS BAG C BUDI NURANI KOTA SUKABUMI',
            ],
            '2294' => [
                'npsn' => '20221593',
                'nama' => 'SMAS PELITA MADANIA KOTA SUKABUMI',
            ],
            '2295' => [
                'npsn' => '69757154',
                'nama' => 'SMKS GEMA ISTIQOMAH KOTA SUKABUMI',
            ],
            '2296' => [
                'npsn' => '20221584',
                'nama' => 'SLBS BAG B BUDI NURANI KOTA SUKABUMI',
            ],
            '2297' => [
                'npsn' => '20265532',
                'nama' => 'SMKS LPPM 1 BANDUNG KOTA BANDUNG',
            ],
            '2298' => [
                'npsn' => '20219767',
                'nama' => 'SMAS PASUNDAN 1 BANDUNG KOTA BANDUNG',
            ],
            '2299' => [
                'npsn' => '20216947',
                'nama' => 'SLBN TRITUNA KABUPATEN SUBANG',
            ],
            '2300' => [
                'npsn' => '70037894',
                'nama' => 'SMAS PLUS AL HIKMAH KABUPATEN SUKABUMI',
            ],
            '2301' => [
                'npsn' => '69875537',
                'nama' => 'SMKS MINHAJUT THALIBIN KABUPATEN SUBANG',
            ],
            '2302' => [
                'npsn' => '20233676',
                'nama' => 'SMKS GEMA NUSANTARA 1 PABUARAN KABUPATEN SUBANG',
            ],
            '2303' => [
                'npsn' => '20233649',
                'nama' => 'SMAS MATLAUL HUDA PURWADADI KABUPATEN SUBANG',
            ],
            '2304' => [
                'npsn' => '20233693',
                'nama' => 'SMKS GEMA PATRIOT PURWADADI KABUPATEN SUBANG',
            ],
            '2305' => [
                'npsn' => '20217037',
                'nama' => 'SMKS ANGKASA 1 KALIJATI KABUPATEN SUBANG',
            ],
            '2306' => [
                'npsn' => '70039755',
                'nama' => 'SMAS ZAD IQBS KABUPATEN CIANJUR',
            ],
            '2307' => [
                'npsn' => '70012920',
                'nama' => 'SMAS KRISTEN BPK PENABUR SINGGASANA KOTA BANDUNG',
            ],
            '2308' => [
                'npsn' => '20271622',
                'nama' => 'SMKS TERPADU AD DIMYATI KOTA BANDUNG',
            ],
            '2309' => [
                'npsn' => '20219319',
                'nama' => 'SMKS AL HASAN KOTA BANDUNG',
            ],
            '2310' => [
                'npsn' => '70038324',
                'nama' => 'SLBS HIDAYAH DREAMABLE KABUPATEN BANDUNG',
            ],
            '2311' => [
                'npsn' => 'NP705183',
                'nama' => 'SMKS MITRA BANGSA KABUPATEN SUBANG',
            ],
            '2312' => [
                'npsn' => '70037413',
                'nama' => 'SMKS BERBASIS PESANTREN TARBIYATUL FALAH KABUPATEN SUKABUMI',
            ],
            '2313' => [
                'npsn' => '70038215',
                'nama' => 'SMAS TAHFIZH AL BASYIR KABUPATEN BOGOR',
            ],
            '2314' => [
                'npsn' => '20216950',
                'nama' => 'SLBS TARBIYATUL MUTAALIMIN PAGADEN KABUPATEN SUBANG',
            ],
            '2315' => [
                'npsn' => '20247270',
                'nama' => 'SMAS ASSALAFIYAH CIASEM KABUPATEN SUBANG',
            ],
            '2316' => [
                'npsn' => '20233650',
                'nama' => 'SMAS MUHAMMADIYAH SUKAMANDI KABUPATEN SUBANG',
            ],
            '2317' => [
                'npsn' => '69772518',
                'nama' => 'SMKN 1 CIASEM KABUPATEN SUBANG',
            ],
            '2318' => [
                'npsn' => '69899673',
                'nama' => 'SMKS IT AMAL ISLAMI KOTA SUKABUMI',
            ],
            '2319' => [
                'npsn' => '69757213',
                'nama' => 'SMKS KESEHATAN TUNAS MADANI KOTA SUKABUMI',
            ],
            '2320' => [
                'npsn' => '20265663',
                'nama' => 'SMKS TERPADU IBADURRAHMAN KOTA SUKABUMI',
            ],
            '2321' => [
                'npsn' => '20221595',
                'nama' => 'SMKS PLUS BINA TEKNIK YLPI SUKABUMI KOTA SUKABUMI',
            ],
            '2322' => [
                'npsn' => '20267923',
                'nama' => 'SMKS NASIONAL SERANG PANJANG KABUPATEN SUBANG',
            ],
            '2323' => [
                'npsn' => '70037363',
                'nama' => 'SMKS BUANA INSAN KABUPATEN BOGOR',
            ],
            '2324' => [
                'npsn' => '69888297',
                'nama' => 'SMKS ANSORUNA SUBANG KABUPATEN SUBANG',
            ],
            '2325' => [
                'npsn' => '69757495',
                'nama' => 'SMKN 1 LEGONKULON KABUPATEN SUBANG',
            ],
            '2326' => [
                'npsn' => '69981453',
                'nama' => 'SMKS ABDI BANGSA KABUPATEN SUBANG',
            ],
            '2327' => [
                'npsn' => '69952443',
                'nama' => 'SMKS BINA BANGSA KABUPATEN SUBANG',
            ],
            '2328' => [
                'npsn' => '69757496',
                'nama' => 'SMKN 1 DAWUAN KABUPATEN SUBANG',
            ],
            '2329' => [
                'npsn' => '70039426',
                'nama' => 'SMAS QURAN ASY SYAHID KABUPATEN BOGOR',
            ],
            '2330' => [
                'npsn' => '20264708',
                'nama' => 'SLBS BAG BC SUKAMANDI KABUPATEN SUBANG',
            ],
            '2331' => [
                'npsn' => '69758182',
                'nama' => 'SMKS DWI PUTRI HUSADA KOTA BOGOR',
            ],
            '2332' => [
                'npsn' => '69775444',
                'nama' => 'SMAS IT UMMUL QURO KOTA BOGOR',
            ],
            '2333' => [
                'npsn' => '69848997',
                'nama' => 'SMAN 1 PLERED KABUPATEN PURWAKARTA',
            ],
            '2334' => [
                'npsn' => '69899282',
                'nama' => 'SMKS INTERMEDIKA KABUPATEN PURWAKARTA',
            ],
            '2335' => [
                'npsn' => '69953932',
                'nama' => 'SMKS PERSIS 03 AL HUDA PUSAKAJAYA KABUPATEN SUBANG',
            ],
            '2336' => [
                'npsn' => '20229760',
                'nama' => 'SMKS YPB PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '2337' => [
                'npsn' => '20217359',
                'nama' => 'SMAN 1 TEGALWARU KABUPATEN PURWAKARTA',
            ],
            '2338' => [
                'npsn' => '69849084',
                'nama' => 'SMKN 1 JATILUHUR KABUPATEN PURWAKARTA',
            ],
            '2339' => [
                'npsn' => '69923800',
                'nama' => 'SMAS RAMA GLOBAL SCHOOL KABUPATEN PURWAKARTA',
            ],
            '2340' => [
                'npsn' => '70038214',
                'nama' => 'SMAS PESANTREN UNGGUL AL BAYAN PUTRI KABUPATEN SUKABUMI',
            ],
            '2341' => [
                'npsn' => '20238523',
                'nama' => 'SMKS PERMATA 1 KOTA BOGOR',
            ],
            '2342' => [
                'npsn' => '20220346',
                'nama' => 'SMAS SILIWANGI KOTA BOGOR',
            ],
            '2343' => [
                'npsn' => '20220305',
                'nama' => 'SMKS TRI DHARMA 1 BOGOR KOTA BOGOR',
            ],
            '2344' => [
                'npsn' => '70037404',
                'nama' => 'SMAS BINTANG PELAJAR ISLAMIC BOARDING SCHOOL KOTA BOGOR',
            ],
            '2345' => [
                'npsn' => '70038213',
                'nama' => 'SMAS ISLAM TERPADU AL AMIN KABUPATEN CIANJUR',
            ],
            '2346' => [
                'npsn' => '70039709',
                'nama' => 'SMAS ISLAM CENDEKIA KABUPATEN CIANJUR',
            ],
            '2347' => [
                'npsn' => '70038412',
                'nama' => 'SMAS AISYIYAH BOARDING SCHOOL BANDUNG KABUPATEN BANDUNG',
            ],
            '2348' => [
                'npsn' => '70037204',
                'nama' => 'SMAS BINA INDONESIA GEMILANG BOARDING SCHOOL KOTA DEPOK',
            ],
            '2349' => [
                'npsn' => '70037203',
                'nama' => 'SMKS BINAKARYA MANDIRI MN KOTA BEKASI',
            ],
            '2350' => [
                'npsn' => '20220304',
                'nama' => 'SMKS TI SURYAKENCANA YAPIS BOGOR KOTA BOGOR',
            ],
            '2351' => [
                'npsn' => '20220339',
                'nama' => 'SMKS ANALIS KIMIA NUSA BANGSA BOGOR KOTA BOGOR',
            ],
            '2352' => [
                'npsn' => '69950954',
                'nama' => 'SMKS MODERN AL ALAWIYAH BOGOR KOTA BOGOR',
            ],
            '2353' => [
                'npsn' => '69949664',
                'nama' => 'SMAS DAAR EN NISA ISLAMIC SCHOOL BOGOR KOTA BOGOR',
            ],
            '2354' => [
                'npsn' => '69727268',
                'nama' => 'SMKS NUSA WIDYA MANDIRI KOTA BOGOR',
            ],
            '2355' => [
                'npsn' => '20220271',
                'nama' => 'SMKS MEKANIKA BOGOR KOTA BOGOR',
            ],
            '2356' => [
                'npsn' => '69831562',
                'nama' => 'SMKS INTELEKTUAL BANGSA KOTA BOGOR',
            ],
            '2357' => [
                'npsn' => '20220318',
                'nama' => 'SMAS PGRI 3 BOGOR KOTA BOGOR',
            ],
            '2358' => [
                'npsn' => '20220308',
                'nama' => 'SMKS TRI DHARMA 4 BOGOR KOTA BOGOR',
            ],
            '2359' => [
                'npsn' => '69986335',
                'nama' => 'SMAS IT AT TAUFIQ KOTA BOGOR',
            ],
            '2360' => [
                'npsn' => '20220278',
                'nama' => 'SMKS PERMATA 2 BOGOR KOTA BOGOR',
            ],
            '2361' => [
                'npsn' => '60726274',
                'nama' => 'SMKS BUDI DARMA KOTA BOGOR',
            ],
            '2362' => [
                'npsn' => '20220307',
                'nama' => 'SMKS TRI DHARMA 3 BOGOR KOTA BOGOR',
            ],
            '2363' => [
                'npsn' => '69921748',
                'nama' => 'SMKS GENERASI 77 KABUPATEN PURWAKARTA',
            ],
            '2364' => [
                'npsn' => '69849085',
                'nama' => 'SMKN KIARAPEDES KABUPATEN PURWAKARTA',
            ],
            '2365' => [
                'npsn' => '20238479',
                'nama' => 'SLBS BAG C TUNAS KASIH 2 KOTA BOGOR',
            ],
            '2366' => [
                'npsn' => '20216945',
                'nama' => 'SMAN 1 CIASEM KABUPATEN SUBANG',
            ],
            '2367' => [
                'npsn' => '69929445',
                'nama' => 'SMKS IT YASIBA KOTA BOGOR',
            ],
            '2368' => [
                'npsn' => '20220293',
                'nama' => 'SMKS YKTB 2 BOGOR KOTA BOGOR',
            ],
            '2369' => [
                'npsn' => '20233655',
                'nama' => 'SMAN 1 SERANG PANJANG KABUPATEN SUBANG',
            ],
            '2370' => [
                'npsn' => '20206226',
                'nama' => 'SMKN 2 BALEENDAH KABUPATEN BANDUNG',
            ],
            '2371' => [
                'npsn' => '20237377',
                'nama' => 'SMAN 1 PANGKALAN KABUPATEN KARAWANG',
            ],
            '2372' => [
                'npsn' => '20216937',
                'nama' => 'SMAN 2 SUBANG KABUPATEN SUBANG',
            ],
            '2373' => [
                'npsn' => '20203742',
                'nama' => 'SMAN 1 CILAKU KABUPATEN CIANJUR',
            ],
            '2374' => [
                'npsn' => '20252031',
                'nama' => 'SMKN 1 PAGELARAN KABUPATEN CIANJUR',
            ],
            '2375' => [
                'npsn' => '20220541',
                'nama' => 'SLBS BAG ABCD SEJAHTERA KOTA BOGOR',
            ],
            '2376' => [
                'npsn' => '20220310',
                'nama' => 'SMKS AL AZHAR PLUS KOTA BOGOR',
            ],
            '2377' => [
                'npsn' => '20247315',
                'nama' => 'SMKS YBS TIRTAMULYA KABUPATEN KARAWANG',
            ],
            '2378' => [
                'npsn' => '20268712',
                'nama' => 'SMKS AR RAIHAN CIKAMPEK KABUPATEN KARAWANG',
            ],
            '2379' => [
                'npsn' => '20258093',
                'nama' => 'SMAS BOGOR RAYA KOTA BOGOR',
            ],
            '2380' => [
                'npsn' => '20220347',
                'nama' => 'SMAS TAMAN SISWA BOGOR TENGAH KOTA BOGOR',
            ],
            '2381' => [
                'npsn' => '69858462',
                'nama' => 'SMKS IT INSAN TODA KOTA BOGOR',
            ],
            '2382' => [
                'npsn' => '20279947',
                'nama' => 'SMKS AL GHAZALY KOTA BOGOR',
            ],
            '2383' => [
                'npsn' => '20220338',
                'nama' => 'SMAN 9 BOGOR KOTA BOGOR',
            ],
            '2384' => [
                'npsn' => '20227465',
                'nama' => 'SMAN 12 GARUT KABUPATEN GARUT',
            ],
            '2385' => [
                'npsn' => '20270735',
                'nama' => 'SMKN 1 TIRTAMULYA KABUPATEN KARAWANG',
            ],
            '2386' => [
                'npsn' => '20214969',
                'nama' => 'SMAN 1 BABAKAN KABUPATEN CIREBON',
            ],
            '2387' => [
                'npsn' => '70030366',
                'nama' => 'SMKS IT ADZIKRI KABUPATEN SUBANG',
            ],
            '2388' => [
                'npsn' => '20220546',
                'nama' => 'SMAS AL AZHAR PLUS KOTA BOGOR',
            ],
            '2389' => [
                'npsn' => '20220542',
                'nama' => 'SLBS BAG B DHARMA WANITA KOTA BOGOR',
            ],
            '2390' => [
                'npsn' => '20220544',
                'nama' => 'SLBS BAG C DHARMA WANITA KOTA BOGOR',
            ],
            '2391' => [
                'npsn' => '20238538',
                'nama' => 'SMKS RANTI MULA BOGOR KOTA BOGOR',
            ],
            '2392' => [
                'npsn' => '20220286',
                'nama' => 'SMKS BINA SEJAHTERA 2 KOTA BOGOR',
            ],
            '2393' => [
                'npsn' => '20214967',
                'nama' => 'SMAN 1 CILEDUG KABUPATEN CIREBON',
            ],
            '2394' => [
                'npsn' => '60726805',
                'nama' => 'SMKS HARAPAN SISWA KOTA BOGOR',
            ],
            '2395' => [
                'npsn' => '20220311',
                'nama' => 'SMKS AL FITRIYAH BOGOR KOTA BOGOR',
            ],
            '2396' => [
                'npsn' => '20220294',
                'nama' => 'SMKS YKTB 3 BOGOR KOTA BOGOR',
            ],
            '2397' => [
                'npsn' => '20219145',
                'nama' => 'SMKN 3 BANDUNG KOTA BANDUNG',
            ],
            '2398' => [
                'npsn' => '20220306',
                'nama' => 'SMKS TRI DHARMA 2 BOGOR KOTA BOGOR',
            ],
            '2399' => [
                'npsn' => '20271493',
                'nama' => 'SMKS YAK 1 KOTA BOGOR',
            ],
            '2400' => [
                'npsn' => '69972549',
                'nama' => 'SMAS ISLAM TERPADU AL FATH KOTA SUKABUMI',
            ],
            '2401' => [
                'npsn' => '20221588',
                'nama' => 'SMAS NURUL KAROMAH KOTA SUKABUMI',
            ],
            '2402' => [
                'npsn' => '20221573',
                'nama' => 'SMKS ISLAM PENGUJI SUKABUMI KOTA SUKABUMI',
            ],
            '2403' => [
                'npsn' => '69942149',
                'nama' => 'SMAS ISLAM TERPADU INSANI KOTA SUKABUMI',
            ],
            '2404' => [
                'npsn' => '20229796',
                'nama' => 'SMKS PASUNDAN 1 SUKABUMI KOTA SUKABUMI',
            ],
            '2405' => [
                'npsn' => '20221574',
                'nama' => 'SMKS PGRI 1 SUKABUMI KOTA SUKABUMI',
            ],
            '2406' => [
                'npsn' => '20221577',
                'nama' => 'SMAS PGRI 1 SUKABUMI KOTA SUKABUMI',
            ],
            '2407' => [
                'npsn' => '20254283',
                'nama' => 'SMKN 12 GARUT KABUPATEN GARUT',
            ],
            '2408' => [
                'npsn' => '20271050',
                'nama' => 'SMAN 1 CIJERUK KABUPATEN BOGOR',
            ],
            '2409' => [
                'npsn' => '20229756',
                'nama' => 'SMKN 2 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '2410' => [
                'npsn' => '20222167',
                'nama' => 'SMAN 9 CIREBON KOTA CIREBON',
            ],
            '2411' => [
                'npsn' => '20222366',
                'nama' => 'SMAN 3 CIREBON KOTA CIREBON',
            ],
            '2412' => [
                'npsn' => '20253907',
                'nama' => 'SMKN 4 SUKABUMI KOTA SUKABUMI',
            ],
            '2413' => [
                'npsn' => '20221570',
                'nama' => 'SMKN 3 SUKABUMI KOTA SUKABUMI',
            ],
            '2414' => [
                'npsn' => '20256261',
                'nama' => 'SMKS AL HIDAYAH KOTA CIREBON',
            ],
            '2415' => [
                'npsn' => '60726451',
                'nama' => 'SMKS AL ISTIQOMAH KOTA CIREBON',
            ],
            '2416' => [
                'npsn' => '20271407',
                'nama' => 'SMKS BINA INSAN MANDIRI KOTA CIREBON',
            ],
            '2417' => [
                'npsn' => '60728500',
                'nama' => 'SMKS CENDEKIA KOTA CIREBON',
            ],
            '2418' => [
                'npsn' => '20222165',
                'nama' => 'SMKS PUI CIREBON KOTA CIREBON',
            ],
            '2419' => [
                'npsn' => '20265786',
                'nama' => 'SLBS MEKAR ARUM KOTA CIREBON',
            ],
            '2420' => [
                'npsn' => '20208425',
                'nama' => 'SMAS PGRI SITURAJA KABUPATEN SUMEDANG',
            ],
            '2421' => [
                'npsn' => '20246434',
                'nama' => 'SMAS BS MIFTAHUL ULUM TERISI KABUPATEN INDRAMAYU',
            ],
            '2422' => [
                'npsn' => '69875558',
                'nama' => 'SMKS CIMENTENG KABUPATEN SUBANG',
            ],
            '2423' => [
                'npsn' => '20220344',
                'nama' => 'SMAS RIMBA MADYA KOTA BOGOR',
            ],
            '2424' => [
                'npsn' => '69771422',
                'nama' => 'SMKS NAHDLATUL ULAMA KOTA CIREBON',
            ],
            '2425' => [
                'npsn' => '20222367',
                'nama' => 'SMAN 4 CIREBON KOTA CIREBON',
            ],
            '2426' => [
                'npsn' => '20222149',
                'nama' => 'SMAN 7 CIREBON KOTA CIREBON',
            ],
            '2427' => [
                'npsn' => '20222166',
                'nama' => 'SMAN 8 CIREBON KOTA CIREBON',
            ],
            '2428' => [
                'npsn' => '20222365',
                'nama' => 'SMAN 2 CIREBON KOTA CIREBON',
            ],
            '2429' => [
                'npsn' => '20222384',
                'nama' => 'SMAN 5 CIREBON KOTA CIREBON',
            ],
            '2430' => [
                'npsn' => '20271077',
                'nama' => 'SMKN 1 PATROL KABUPATEN INDRAMAYU',
            ],
            '2431' => [
                'npsn' => '60726448',
                'nama' => 'SMKS KARTIKA XIX 3 KOTA CIREBON',
            ],
            '2432' => [
                'npsn' => '20222358',
                'nama' => 'SMAS SEKAR KEMUNING CIREBON KOTA CIREBON',
            ],
            '2433' => [
                'npsn' => '20220289',
                'nama' => 'SMKS PGRI 1 BOGOR KOTA BOGOR',
            ],
            '2434' => [
                'npsn' => '20270262',
                'nama' => 'SMAS BINA BANGSA SCHOOL KABUPATEN BANDUNG',
            ],
            '2435' => [
                'npsn' => '70029863',
                'nama' => 'SMAS BINA INSAN MANDIRI KOTA BOGOR',
            ],
            '2436' => [
                'npsn' => '69774880',
                'nama' => 'SMKS KEHUTANAN BAKTI RIMBA KOTA BOGOR',
            ],
            '2437' => [
                'npsn' => '69952171',
                'nama' => 'SMKS BHAKTI TARUNA 4 BOGOR KOTA BOGOR',
            ],
            '2438' => [
                'npsn' => '20223088',
                'nama' => 'SMKS TUNAS WISATA INDONESIA KOTA BEKASI',
            ],
            '2439' => [
                'npsn' => '20223038',
                'nama' => 'SMKS ABDI KARYA BEKASI KOTA BEKASI',
            ],
            '2440' => [
                'npsn' => '69812059',
                'nama' => 'SMKN 1 MALAUSMA KABUPATEN MAJALENGKA',
            ],
            '2441' => [
                'npsn' => '20214988',
                'nama' => 'SMAN 1 WALED KABUPATEN CIREBON',
            ],
            '2442' => [
                'npsn' => '69754612',
                'nama' => 'SMKS ATTHAHIRIYAH BANGODUA KABUPATEN INDRAMAYU',
            ],
            '2443' => [
                'npsn' => '69849580',
                'nama' => 'SMKS NAHDLATUL ULAMA LOSARANG KABUPATEN INDRAMAYU',
            ],
            '2444' => [
                'npsn' => '20258204',
                'nama' => 'SLBS BAG BC AS SYAFI`IYAH KOTA BEKASI',
            ],
            '2445' => [
                'npsn' => '20258329',
                'nama' => 'SLBS BAG BC SURYA WIYATA KOTA BEKASI',
            ],
            '2446' => [
                'npsn' => '69820147',
                'nama' => 'SMAS IT ALMARJAN KOTA BEKASI',
            ],
            '2447' => [
                'npsn' => '20223077',
                'nama' => 'SMAS MALIDAR KOTA BEKASI',
            ],
            '2448' => [
                'npsn' => '69969278',
                'nama' => 'SMAN 1 JAMANIS KABUPATEN TASIKMALAYA',
            ],
            '2449' => [
                'npsn' => '20252550',
                'nama' => 'SMKS TRISAKA KOTA BEKASI',
            ],
            '2450' => [
                'npsn' => '20223084',
                'nama' => 'SMKS YPP BEKASI KOTA BEKASI',
            ],
            '2451' => [
                'npsn' => '20223060',
                'nama' => 'SMAS AL MUHADJIRIN KOTA BEKASI',
            ],
            '2452' => [
                'npsn' => '20223076',
                'nama' => 'SMAS MANDALAHAYU KOTA BEKASI',
            ],
            '2453' => [
                'npsn' => '69774554',
                'nama' => 'SMAS GLOBAL PERSADA MANDIRI KOTA BEKASI',
            ],
            '2454' => [
                'npsn' => '20231704',
                'nama' => 'SMAS ANANDA KOTA BEKASI',
            ],
            '2455' => [
                'npsn' => '20223071',
                'nama' => 'SMAS MUHAMMADIYAH 9 BEKASI KOTA BEKASI',
            ],
            '2456' => [
                'npsn' => '69947164',
                'nama' => 'SMAS PERGURUAN ADVENT XIV BEKASI KOTA BEKASI',
            ],
            '2457' => [
                'npsn' => '20215976',
                'nama' => 'SMAN 1 KRANGKENG KABUPATEN INDRAMAYU',
            ],
            '2458' => [
                'npsn' => '20254866',
                'nama' => 'SMKS BANI SALEH KOTA BEKASI',
            ],
            '2459' => [
                'npsn' => '20223127',
                'nama' => 'SMKS MANDALAHAYU BEKASI KOTA BEKASI',
            ],
            '2460' => [
                'npsn' => '20218362',
                'nama' => 'SLBS BAG ABC CITRA MANDALA KOTA BEKASI',
            ],
            '2461' => [
                'npsn' => '70035047',
                'nama' => 'SMAN DEPOK KABUPATEN CIREBON',
            ],
            '2462' => [
                'npsn' => '20231718',
                'nama' => 'SMAN 12 BEKASI KOTA BEKASI',
            ],
            '2463' => [
                'npsn' => '20215985',
                'nama' => 'SMAS YAPIN KERTASEMAYA KABUPATEN INDRAMAYU',
            ],
            '2464' => [
                'npsn' => '20269706',
                'nama' => 'SLBS SINAR KASIH KOTA BEKASI',
            ],
            '2465' => [
                'npsn' => '69900732',
                'nama' => 'SMAS TAHFIZH NURJAMILAH KOTA BEKASI',
            ],
            '2466' => [
                'npsn' => '70006118',
                'nama' => 'SMAS STRADA BHAKTI WIYATA KOTA BEKASI',
            ],
            '2467' => [
                'npsn' => '69978344',
                'nama' => 'SMKS NURUL HUDA KOTA BEKASI',
            ],
            '2468' => [
                'npsn' => '20223122',
                'nama' => 'SMKS BISNIS DAN TEKNOLOGI BEKASI KOTA BEKASI',
            ],
            '2469' => [
                'npsn' => '20227468',
                'nama' => 'SMAN 10 GARUT KABUPATEN GARUT',
            ],
            '2470' => [
                'npsn' => '60725448',
                'nama' => 'SMKN 1 AGRABINTA KABUPATEN CIANJUR',
            ],
            '2471' => [
                'npsn' => '69962245',
                'nama' => 'SMAN 1 CANTIGI KABUPATEN INDRAMAYU',
            ],
            '2472' => [
                'npsn' => '69886260',
                'nama' => 'SMAN 2 CIBINONG KABUPATEN CIANJUR',
            ],
            '2473' => [
                'npsn' => '20246730',
                'nama' => 'SMAS GLOBAL PRESTASI KOTA BEKASI',
            ],
            '2474' => [
                'npsn' => '20235631',
                'nama' => 'SMKS ARDLI SELA KABUPATEN SUMEDANG',
            ],
            '2475' => [
                'npsn' => '20235537',
                'nama' => 'SLBS AMALIA BHAKTI KABUPATEN SUMEDANG',
            ],
            '2476' => [
                'npsn' => '20270665',
                'nama' => 'SMKS PEMBANGUNAN TUKDANA KABUPATEN INDRAMAYU',
            ],
            '2477' => [
                'npsn' => '20269324',
                'nama' => 'SMKS BOGOR MUHIDIN SCHOOL BMS KOTA BOGOR',
            ],
            '2478' => [
                'npsn' => '20256553',
                'nama' => 'SMKS INFORMATIKA GLOBAL NUSANTARA KOTA BOGOR',
            ],
            '2479' => [
                'npsn' => '69948160',
                'nama' => 'SMKS BAKTI MANDIRI KOTA BEKASI',
            ],
            '2480' => [
                'npsn' => '20214995',
                'nama' => 'SMAN 1 LEMAHABANG KABUPATEN CIREBON',
            ],
            '2481' => [
                'npsn' => '69819338',
                'nama' => 'SMKS GALAJUARA KOTA BEKASI',
            ],
            '2482' => [
                'npsn' => '20269587',
                'nama' => 'SMKS DASTAMACO KOTA BEKASI',
            ],
            '2483' => [
                'npsn' => '20252553',
                'nama' => 'SMKS PERWIRA BANGSA KOTA BEKASI',
            ],
            '2484' => [
                'npsn' => '20206146',
                'nama' => 'SMAN 1 CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '2485' => [
                'npsn' => '69727427',
                'nama' => 'SMKS TUNAS BANGSA CIEMAS KABUPATEN SUKABUMI',
            ],
            '2486' => [
                'npsn' => '69727426',
                'nama' => 'SMKS JAYA TAMA BANGSA KABUPATEN SUKABUMI',
            ],
            '2487' => [
                'npsn' => '69930324',
                'nama' => 'SMKS ADZIKRO NAGREG KABUPATEN BANDUNG',
            ],
            '2488' => [
                'npsn' => '69826567',
                'nama' => 'SMKS YPPM TOMO KABUPATEN SUMEDANG',
            ],
            '2489' => [
                'npsn' => '20208411',
                'nama' => 'SLBS PERMATA HATI KABUPATEN SUMEDANG',
            ],
            '2490' => [
                'npsn' => '20220302',
                'nama' => 'SMKS TARUNA BANGSA 1 BOGOR KOTA BOGOR',
            ],
            '2491' => [
                'npsn' => '20220327',
                'nama' => 'SMAS INSAN KAMIL KOTA BOGOR',
            ],
            '2492' => [
                'npsn' => '20252559',
                'nama' => 'SMKS GLOBAL SURYA MANDIRI KOTA BEKASI',
            ],
            '2493' => [
                'npsn' => '20269981',
                'nama' => 'SMKN 4 BEKASI KOTA BEKASI',
            ],
            '2494' => [
                'npsn' => '69824459',
                'nama' => 'SMKS AL FALAH KABUPATEN BANDUNG',
            ],
            '2495' => [
                'npsn' => '20259618',
                'nama' => 'SLBS PELITA BANGSA KABUPATEN BANDUNG',
            ],
            '2496' => [
                'npsn' => '69957268',
                'nama' => 'SMKS TARUNA WIYATAMANDALA KABUPATEN BANDUNG',
            ],
            '2497' => [
                'npsn' => '20263116',
                'nama' => 'SLBS BAITURRAHMAN CISAGA KABUPATEN CIAMIS',
            ],
            '2498' => [
                'npsn' => '69774870',
                'nama' => 'SMKS AL HUSNA KABUPATEN CIAMIS',
            ],
            '2499' => [
                'npsn' => '70011819',
                'nama' => 'SMAN BINONG KABUPATEN SUBANG',
            ],
            '2500' => [
                'npsn' => '20215995',
                'nama' => 'SMKS ISLAM TERISI KABUPATEN INDRAMAYU',
            ],
            '2501' => [
                'npsn' => '20220335',
                'nama' => 'SMAN 6 BOGOR KOTA BOGOR',
            ],
            '2502' => [
                'npsn' => '69948380',
                'nama' => 'SMKN 15 BEKASI KOTA BEKASI',
            ],
            '2503' => [
                'npsn' => '20219144',
                'nama' => 'SMKN 4 BANDUNG KOTA BANDUNG',
            ],
            '2504' => [
                'npsn' => '20231343',
                'nama' => 'SMAS PELITA HARAPAN KABUPATEN BOGOR',
            ],
            '2505' => [
                'npsn' => '20258495',
                'nama' => 'SLBS AULIA KABUPATEN BANDUNG',
            ],
            '2506' => [
                'npsn' => '69754526',
                'nama' => 'SMKS CAKRAWALA KABUPATEN INDRAMAYU',
            ],
            '2507' => [
                'npsn' => '20268853',
                'nama' => 'SMKS NUSANTARA TERISI KABUPATEN INDRAMAYU',
            ],
            '2508' => [
                'npsn' => '69894392',
                'nama' => 'SMKS AL FATIH TERISI KABUPATEN INDRAMAYU',
            ],
            '2509' => [
                'npsn' => '20220325',
                'nama' => 'SMAS BUDI MULIA KOTA BOGOR',
            ],
            '2510' => [
                'npsn' => '20220343',
                'nama' => 'SMAS REGINA PACIS KOTA BOGOR',
            ],
            '2511' => [
                'npsn' => '69896725',
                'nama' => 'SMKS GLOBAL INDONESIA KOTA BOGOR',
            ],
            '2512' => [
                'npsn' => '20220545',
                'nama' => 'SMAS AL GHAZALY KOTA BOGOR',
            ],
            '2513' => [
                'npsn' => '20220342',
                'nama' => 'SMAN 1 BOGOR KOTA BOGOR',
            ],
            '2514' => [
                'npsn' => '20220285',
                'nama' => 'SMKS BINA SEJAHTERA 1 BOGOR KOTA BOGOR',
            ],
            '2515' => [
                'npsn' => '20238527',
                'nama' => 'SMKS BINA INSAN CITA KOTA BOGOR',
            ],
            '2516' => [
                'npsn' => '20251886',
                'nama' => 'SMAS PLUS AL FALAH JATINAGOR KABUPATEN SUMEDANG',
            ],
            '2517' => [
                'npsn' => '20208541',
                'nama' => 'SLBS BAG BC FADHILAH KABUPATEN SUMEDANG',
            ],
            '2518' => [
                'npsn' => '20271226',
                'nama' => 'SMKS PADJADJARAN JATINANGOR KABUPATEN SUMEDANG',
            ],
            '2519' => [
                'npsn' => '69931787',
                'nama' => 'SMKS ASH SHOBUNIYYAH CIKEDUNG KABUPATEN INDRAMAYU',
            ],
            '2520' => [
                'npsn' => '20256281',
                'nama' => 'SMKS PLUS AS SALAFIYAH KERANGKENG KABUPATEN INDRAMAYU',
            ],
            '2521' => [
                'npsn' => '69952846',
                'nama' => 'SMKS NU AL QURANIYAH KABUPATEN INDRAMAYU',
            ],
            '2522' => [
                'npsn' => '69840995',
                'nama' => 'SMKS NURUL QURAN KABUPATEN INDRAMAYU',
            ],
            '2523' => [
                'npsn' => '69894948',
                'nama' => 'SMKS KUSUMA WARDHANA KOTA BOGOR',
            ],
            '2524' => [
                'npsn' => '20253784',
                'nama' => 'SLBS MENTARI KITA KOTA BOGOR',
            ],
            '2525' => [
                'npsn' => '20220288',
                'nama' => 'SMKS BINA WARGA 2 BOGOR KOTA BOGOR',
            ],
            '2526' => [
                'npsn' => '69886244',
                'nama' => 'SMKS NUSANTARA KOTA BOGOR',
            ],
            '2527' => [
                'npsn' => '69945625',
                'nama' => 'SMKS AS SAHIDU GABUSWETAN KABUPATEN INDRAMAYU',
            ],
            '2528' => [
                'npsn' => '20253309',
                'nama' => 'SMKS EL HUDA KEDOKANGABUS KABUPATEN INDRAMAYU',
            ],
            '2529' => [
                'npsn' => '20220283',
                'nama' => 'SMKS BINA BUDI LUHUR BOGOR KOTA BOGOR',
            ],
            '2530' => [
                'npsn' => '20238524',
                'nama' => 'SMKN SMAK BOGOR KOTA BOGOR',
            ],
            '2531' => [
                'npsn' => '20233656',
                'nama' => 'SMAN 1 TANJUNGSIANG KABUPATEN SUBANG',
            ],
            '2532' => [
                'npsn' => '20247277',
                'nama' => 'SMKS AL AMAH CIMANGGUNG KABUPATEN SUMEDANG',
            ],
            '2533' => [
                'npsn' => '20208404',
                'nama' => 'SMKS PERKASA 2 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2534' => [
                'npsn' => '20220299',
                'nama' => 'SMKS WIKRAMA BOGOR KOTA BOGOR',
            ],
            '2535' => [
                'npsn' => '20227904',
                'nama' => 'SMAN 1 CIKANCUNG KABUPATEN BANDUNG',
            ],
            '2536' => [
                'npsn' => '20252324',
                'nama' => 'SMAN 1 CISAGA KABUPATEN CIAMIS',
            ],
            '2537' => [
                'npsn' => '20227869',
                'nama' => 'SMAN 1 CIPONGKOR KABUPATEN BANDUNG BARAT',
            ],
            '2538' => [
                'npsn' => '20244763',
                'nama' => 'SMAN 1 SUKAKARYA KABUPATEN BEKASI',
            ],
            '2539' => [
                'npsn' => '20216201',
                'nama' => 'SMAS NU JUNTINYUAT KABUPATEN INDRAMAYU',
            ],
            '2540' => [
                'npsn' => '20264424',
                'nama' => 'SMAN 1 JUNTINYUAT KABUPATEN INDRAMAYU',
            ],
            '2541' => [
                'npsn' => '20215982',
                'nama' => 'SMAN 1 TERISI KABUPATEN INDRAMAYU',
            ],
            '2542' => [
                'npsn' => '20255767',
                'nama' => 'SMKS YABUJAH SEGERAN KABUPATEN INDRAMAYU',
            ],
            '2543' => [
                'npsn' => '69945954',
                'nama' => 'SMKS MADINATUL ROSUL LOHBENER KABUPATEN INDRAMAYU',
            ],
            '2544' => [
                'npsn' => '20254031',
                'nama' => 'SMKS FATAHILLAH LOHBENER KABUPATEN INDRAMAYU',
            ],
            '2545' => [
                'npsn' => '69754614',
                'nama' => 'SMKS PGRI 1 GANTAR KABUPATEN INDRAMAYU',
            ],
            '2546' => [
                'npsn' => '69892475',
                'nama' => 'SMKS BHAKTI SATRIA BUANA KABUPATEN INDRAMAYU',
            ],
            '2547' => [
                'npsn' => '20233760',
                'nama' => 'SMKN 1 GANTAR KABUPATEN INDRAMAYU',
            ],
            '2548' => [
                'npsn' => '20229220',
                'nama' => 'SMKN 2 DEPOK KOTA DEPOK',
            ],
            '2549' => [
                'npsn' => '20262128',
                'nama' => 'SMKN 10 GARUT KABUPATEN GARUT',
            ],
            '2550' => [
                'npsn' => '69972351',
                'nama' => 'SMKS AL ISTIQOMAH RANCAH KABUPATEN CIAMIS',
            ],
            '2551' => [
                'npsn' => '69955313',
                'nama' => 'SMKS BAROKAH BHAKTI RANCAKALONG KABUPATEN SUMEDANG',
            ],
            '2552' => [
                'npsn' => '20235643',
                'nama' => 'SMKS BUDI MANDIRI TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '2553' => [
                'npsn' => '20253097',
                'nama' => 'SMKN 1 RANCAH KABUPATEN CIAMIS',
            ],
            '2554' => [
                'npsn' => '20209232',
                'nama' => 'SMAN 22 GARUT KABUPATEN GARUT',
            ],
            '2555' => [
                'npsn' => '20271297',
                'nama' => 'SMKS YADIKA TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '2556' => [
                'npsn' => '20233748',
                'nama' => 'SLBS PELANGI KASIH KABUPATEN INDRAMAYU',
            ],
            '2557' => [
                'npsn' => '20216009',
                'nama' => 'SMKS MANDIRI HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '2558' => [
                'npsn' => '20270922',
                'nama' => 'SMAS BHAKTI INSAN PERSADA KOTA BOGOR',
            ],
            '2559' => [
                'npsn' => '20223058',
                'nama' => 'SMAS ATTAQWA KOTA BEKASI',
            ],
            '2560' => [
                'npsn' => '60730051',
                'nama' => 'SMKS INSAN KARYA BHAKTI KABUPATEN CIANJUR',
            ],
            '2561' => [
                'npsn' => '20254620',
                'nama' => 'SMKN 1 CIJULANG KABUPATEN PANGANDARAN',
            ],
            '2562' => [
                'npsn' => '20220275',
                'nama' => 'SMKN 3 BOGOR KOTA BOGOR',
            ],
            '2563' => [
                'npsn' => '69948195',
                'nama' => 'SMKS PARIWISATA YAPPMI JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '2564' => [
                'npsn' => '20238535',
                'nama' => 'SMKS PANDUTAMA BOGOR KOTA BOGOR',
            ],
            '2565' => [
                'npsn' => '69864697',
                'nama' => 'SMAS KRISTEN SAINT JOHN KOTA BEKASI',
            ],
            '2566' => [
                'npsn' => '20255901',
                'nama' => 'SMKN 1 CIKEDUNG KABUPATEN INDRAMAYU',
            ],
            '2567' => [
                'npsn' => '20270896',
                'nama' => 'SLBS BINA MULYA CAKRAWATI KABUPATEN CIAMIS',
            ],
            '2568' => [
                'npsn' => '69768179',
                'nama' => 'SMKS PEJUANG NEGERI HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '2569' => [
                'npsn' => '20216007',
                'nama' => 'SMKS MUHAMMADIYAH HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '2570' => [
                'npsn' => '69754418',
                'nama' => 'SMKS YAPIIM INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2571' => [
                'npsn' => '69754532',
                'nama' => 'SMKS NU RAUDLATUL MUTA`ALLIMIN KABUPATEN INDRAMAYU',
            ],
            '2572' => [
                'npsn' => '20237376',
                'nama' => 'SMAN 1 LEMAHABANG KABUPATEN KARAWANG',
            ],
            '2573' => [
                'npsn' => '69734347',
                'nama' => 'SMAN 1 RAWAMERTA KABUPATEN KARAWANG',
            ],
            '2574' => [
                'npsn' => '20211565',
                'nama' => 'SMAN 1 CIAMIS KABUPATEN CIAMIS',
            ],
            '2575' => [
                'npsn' => '20251792',
                'nama' => 'SMAN 1 CICALENGKA KABUPATEN BANDUNG',
            ],
            '2576' => [
                'npsn' => '20217762',
                'nama' => 'SMAN 1 TEMPURAN KABUPATEN KARAWANG',
            ],
            '2577' => [
                'npsn' => '20211500',
                'nama' => 'SMAN 2 CIAMIS KABUPATEN CIAMIS',
            ],
            '2578' => [
                'npsn' => '20220284',
                'nama' => 'SMKS BINA PROFESI BOGOR KOTA BOGOR',
            ],
            '2579' => [
                'npsn' => '20252870',
                'nama' => 'SMKN 1 SUKALUYU KABUPATEN CIANJUR',
            ],
            '2580' => [
                'npsn' => '20263126',
                'nama' => 'SLBN SINDANGSARI CIKONENG KABUPATEN CIAMIS',
            ],
            '2581' => [
                'npsn' => '20271658',
                'nama' => 'SMKN 8 BEKASI KOTA BEKASI',
            ],
            '2582' => [
                'npsn' => '69950862',
                'nama' => 'SMKS KESEHATAN CIAMIS KABUPATEN CIAMIS',
            ],
            '2583' => [
                'npsn' => '20211530',
                'nama' => 'SMKS LPT CIAMIS KABUPATEN CIAMIS',
            ],
            '2584' => [
                'npsn' => '69827765',
                'nama' => 'SMKS INDUSTRI TEKNOLOGI NASIONAL KABUPATEN KARAWANG',
            ],
            '2585' => [
                'npsn' => '69958771',
                'nama' => 'SMKS KALIMASYADA KABUPATEN KARAWANG',
            ],
            '2586' => [
                'npsn' => '20276384',
                'nama' => 'SMKS KOSGORO KOTA BOGOR',
            ],
            '2587' => [
                'npsn' => '20256408',
                'nama' => 'SMAS IBNU SIENA CIKONENG KABUPATEN CIAMIS',
            ],
            '2588' => [
                'npsn' => '20211525',
                'nama' => 'SMKS PGRI CIKONENG KABUPATEN CIAMIS',
            ],
            '2589' => [
                'npsn' => '69756872',
                'nama' => 'SLBS TAMAN RAFLESIA KABUPATEN CIAMIS',
            ],
            '2590' => [
                'npsn' => '20231338',
                'nama' => 'SMAN 1 TENJO KABUPATEN BOGOR',
            ],
            '2591' => [
                'npsn' => '20257330',
                'nama' => 'SMAS VICTORY PLUS KOTA BEKASI',
            ],
            '2592' => [
                'npsn' => '20238531',
                'nama' => 'SMKS INFOKOM BOGOR KOTA BOGOR',
            ],
            '2593' => [
                'npsn' => '20263114',
                'nama' => 'SLBS AL HUDA SADANANYA KABUPATEN CIAMIS',
            ],
            '2594' => [
                'npsn' => '69759288',
                'nama' => 'SMKS AL HUDA SADANANYA KABUPATEN CIAMIS',
            ],
            '2595' => [
                'npsn' => '20218066',
                'nama' => 'SMKS MATHLAUL ANWAR PAKISJAYA KABUPATEN KARAWANG',
            ],
            '2596' => [
                'npsn' => '20238520',
                'nama' => 'SMAS YP 17 KOTA BOGOR',
            ],
            '2597' => [
                'npsn' => '20220352',
                'nama' => 'SMAS BINA BANGSA SEJAHTERA KOTA BOGOR',
            ],
            '2598' => [
                'npsn' => '20270746',
                'nama' => 'SMKS BITEC AL MASHURIAH KABUPATEN KARAWANG',
            ],
            '2599' => [
                'npsn' => '20220320',
                'nama' => 'SMAS KRISTEN YPK SATU BAKTI KOTA BOGOR',
            ],
            '2600' => [
                'npsn' => '20254027',
                'nama' => 'SMKS JAYA CIMUNING KOTA BEKASI',
            ],
            '2601' => [
                'npsn' => '20270736',
                'nama' => 'SMKN 1 LEUWILIANG KABUPATEN BOGOR',
            ],
            '2602' => [
                'npsn' => '20254621',
                'nama' => 'SMKN 1 CIPAKU KABUPATEN CIAMIS',
            ],
            '2603' => [
                'npsn' => '20263276',
                'nama' => 'SMAS AL MUMINUN CIPAKU KABUPATEN CIAMIS',
            ],
            '2604' => [
                'npsn' => '69988146',
                'nama' => 'SMKS AS SULTHONIAH KABUPATEN CIAMIS',
            ],
            '2605' => [
                'npsn' => '69976927',
                'nama' => 'SMKS MA ARIF RIYADLUSH SHOLAWAT KABUPATEN CIAMIS',
            ],
            '2606' => [
                'npsn' => '20263121',
                'nama' => 'SLBS BUDI BAKTI 2 KABUPATEN CIAMIS',
            ],
            '2607' => [
                'npsn' => '69989441',
                'nama' => 'SMAS BINA NUSANTARA BEKASI KOTA BEKASI',
            ],
            '2608' => [
                'npsn' => '69988140',
                'nama' => 'SMAS ERHA JATINAGARA KABUPATEN CIAMIS',
            ],
            '2609' => [
                'npsn' => '69954591',
                'nama' => 'SMKS MA ARIF NU AL MUSHLIHUUN KABUPATEN CIAMIS',
            ],
            '2610' => [
                'npsn' => '20263295',
                'nama' => 'SMKS MIFTAHUL HUDA II JATINAGARA KABUPATEN CIAMIS',
            ],
            '2611' => [
                'npsn' => '20217796',
                'nama' => 'SMKS PGRI CIKAMPEK KABUPATEN KARAWANG',
            ],
            '2612' => [
                'npsn' => '20220317',
                'nama' => 'SMAS PGRI 1 BOGOR KOTA BOGOR',
            ],
            '2613' => [
                'npsn' => '20238519',
                'nama' => 'SMAS PGRI 5 BOGOR KOTA BOGOR',
            ],
            '2614' => [
                'npsn' => '20211505',
                'nama' => 'SMAN 1 PANAWANGAN KABUPATEN CIAMIS',
            ],
            '2615' => [
                'npsn' => '20211490',
                'nama' => 'SMAN 1 KAWALI KABUPATEN CIAMIS',
            ],
            '2616' => [
                'npsn' => '20209182',
                'nama' => 'SMAN 18 GARUT KABUPATEN GARUT',
            ],
            '2617' => [
                'npsn' => '20233694',
                'nama' => 'SMKN 1 KAWALI KABUPATEN CIAMIS',
            ],
            '2618' => [
                'npsn' => '69948102',
                'nama' => 'SMKS DARUL ILMI PANAWANGAN KABUPATEN CIAMIS',
            ],
            '2619' => [
                'npsn' => '20254646',
                'nama' => 'SMKS AL IKHLAS SUSURU PANAWANGAN KABUPATEN CIAMIS',
            ],
            '2620' => [
                'npsn' => '20263299',
                'nama' => 'SMKS PLUS MULTAZAM PANAWANGAN KABUPATEN CIAMIS',
            ],
            '2621' => [
                'npsn' => '69930735',
                'nama' => 'SLBS FIRDAUS KABUPATEN CIAMIS',
            ],
            '2622' => [
                'npsn' => '69899305',
                'nama' => 'SMKS PRIMA MAARIF KOTA BEKASI',
            ],
            '2623' => [
                'npsn' => '69892644',
                'nama' => 'SMKS ZAFIRAH KOTA BOGOR',
            ],
            '2624' => [
                'npsn' => '70024225',
                'nama' => 'SMAS TAHFIDZ ANHARUL ULUM KABUPATEN CIAMIS',
            ],
            '2625' => [
                'npsn' => '69894020',
                'nama' => 'SMKS HIDAYAH PAKUAN KABUPATEN CIAMIS',
            ],
            '2626' => [
                'npsn' => '20254636',
                'nama' => 'SMKS BAHRUL ULUUM KAWALI KABUPATEN CIAMIS',
            ],
            '2627' => [
                'npsn' => '20253142',
                'nama' => 'SMKS FARMASI PASUNDAN KAWALI KABUPATEN CIAMIS',
            ],
            '2628' => [
                'npsn' => '20211566',
                'nama' => 'SMKS MUHAMMADIYAH KAWALI KABUPATEN CIAMIS',
            ],
            '2629' => [
                'npsn' => '20263115',
                'nama' => 'SLBS AMANAH KAWALI KABUPATEN CIAMIS',
            ],
            '2630' => [
                'npsn' => '20263119',
                'nama' => 'SLBS BUDI BAKTI I KAWALI KABUPATEN CIAMIS',
            ],
            '2631' => [
                'npsn' => '20276412',
                'nama' => 'SMKS PGRI 1 CILAMAYA WETAN KABUPATEN KARAWANG',
            ],
            '2632' => [
                'npsn' => '20268961',
                'nama' => 'SMKS FARMASI TUNAS MANDIRI KOTA BOGOR',
            ],
            '2633' => [
                'npsn' => 'NP039162',
                'nama' => 'SMKS NUSA BAKTI KOTA DEPOK',
            ],
            '2634' => [
                'npsn' => '20217358',
                'nama' => 'SMAN 1 SUKATANI KABUPATEN PURWAKARTA',
            ],
            '2635' => [
                'npsn' => '69759219',
                'nama' => 'SMKN 1 PANJALU KABUPATEN CIAMIS',
            ],
            '2636' => [
                'npsn' => '20220336',
                'nama' => 'SMAN 7 BOGOR KOTA BOGOR',
            ],
            '2637' => [
                'npsn' => '69947388',
                'nama' => 'SMKS INDUSTRI PERUNGGASAN PANJALU (IPP) KABUPATEN CIAMIS',
            ],
            '2638' => [
                'npsn' => '69965478',
                'nama' => 'SMKS PUTRA PANJALU KABUPATEN CIAMIS',
            ],
            '2639' => [
                'npsn' => '20263112',
                'nama' => 'SLBS AGROWISATA SHALEHA PANJALU KABUPATEN CIAMIS',
            ],
            '2640' => [
                'npsn' => '20219178',
                'nama' => 'SMKN 1 BANDUNG KOTA BANDUNG',
            ],
            '2641' => [
                'npsn' => '69968464',
                'nama' => 'SMKN 1 PANUMBANGAN KABUPATEN CIAMIS',
            ],
            '2642' => [
                'npsn' => '70013944',
                'nama' => 'SMAN 1 PANUMBANGAN KABUPATEN CIAMIS',
            ],
            '2643' => [
                'npsn' => '20237386',
                'nama' => 'SMAN 5 KARAWANG KABUPATEN KARAWANG',
            ],
            '2644' => [
                'npsn' => '69984154',
                'nama' => 'SMKS DAARUL MUTTAQIEN KABUPATEN CIAMIS',
            ],
            '2645' => [
                'npsn' => '69911253',
                'nama' => 'SMKS NURUL FIRDAUS KABUPATEN CIAMIS',
            ],
            '2646' => [
                'npsn' => '20254644',
                'nama' => 'SMKS NURUL HUDA PANUMBANGAN KABUPATEN CIAMIS',
            ],
            '2647' => [
                'npsn' => '69863248',
                'nama' => 'SLBS MANDIRI PANUMBANGAN KABUPATEN CIAMIS',
            ],
            '2648' => [
                'npsn' => '20244795',
                'nama' => 'SMKS JAYABEKA 02 KARAWANG KABUPATEN KARAWANG',
            ],
            '2649' => [
                'npsn' => '20237369',
                'nama' => 'SMAS MUHAMMADIYAH KARAWANG KABUPATEN KARAWANG',
            ],
            '2650' => [
                'npsn' => '20220324',
                'nama' => 'SMAS BPK PENABUR BOGOR KOTA BOGOR',
            ],
            '2651' => [
                'npsn' => '69849364',
                'nama' => 'SMKS TUNAS MEDIA KOTA DEPOK',
            ],
            '2652' => [
                'npsn' => '20232533',
                'nama' => 'SMKS AN NUR KOTA DEPOK',
            ],
            '2653' => [
                'npsn' => '69945332',
                'nama' => 'SLBS AL FALAH KABUPATEN CIAMIS',
            ],
            '2654' => [
                'npsn' => '20215996',
                'nama' => 'SMKS NU KAPLONGAN KABUPATEN INDRAMAYU',
            ],
            '2655' => [
                'npsn' => '20220297',
                'nama' => 'SMKS YZA 4 BOGOR KOTA BOGOR',
            ],
            '2656' => [
                'npsn' => '69899184',
                'nama' => 'SMAS MUHAMMADIYAH 04 DEPOK KOTA DEPOK',
            ],
            '2657' => [
                'npsn' => '20229199',
                'nama' => 'SMKS BASKARA DEPOK KOTA DEPOK',
            ],
            '2658' => [
                'npsn' => '20252869',
                'nama' => 'SMKN 1 CIKADU KABUPATEN CIANJUR',
            ],
            '2659' => [
                'npsn' => '69857937',
                'nama' => 'SMAN 11 DEPOK KOTA DEPOK',
            ],
            '2660' => [
                'npsn' => '69816446',
                'nama' => 'SMKN 1 PAKISJAYA KABUPATEN KARAWANG',
            ],
            '2661' => [
                'npsn' => '20211491',
                'nama' => 'SMAN 1 BAREGBEG KABUPATEN CIAMIS',
            ],
            '2662' => [
                'npsn' => '20220316',
                'nama' => 'SMAS PESAT KOTA BOGOR',
            ],
            '2663' => [
                'npsn' => '70010787',
                'nama' => 'SMAS NUSANTARA CIAMIS KABUPATEN CIAMIS',
            ],
            '2664' => [
                'npsn' => '70003746',
                'nama' => 'SMKS PETERNAKAN CIAMIS KABUPATEN CIAMIS',
            ],
            '2665' => [
                'npsn' => '20254634',
                'nama' => 'SMKS AL HUDA TURALAK KABUPATEN CIAMIS',
            ],
            '2666' => [
                'npsn' => '20254633',
                'nama' => 'SMKS MAARIF NU CIAMIS KABUPATEN CIAMIS',
            ],
            '2667' => [
                'npsn' => '20263113',
                'nama' => 'SLBS AL BAROKAH BAREGBEG KABUPATEN CIAMIS',
            ],
            '2668' => [
                'npsn' => '69759289',
                'nama' => 'SLBS PANCARAN IMAN CIAMIS KABUPATEN CIAMIS',
            ],
            '2669' => [
                'npsn' => '20267664',
                'nama' => 'SMKS INFORMATIKA PESAT KOTA BOGOR',
            ],
            '2670' => [
                'npsn' => '60726806',
                'nama' => 'SMAS IT INSANTAMA PLUS KOTA BOGOR',
            ],
            '2671' => [
                'npsn' => '69932818',
                'nama' => 'SMKS PLUS DAWATUL QURAN BOGOR KOTA BOGOR',
            ],
            '2672' => [
                'npsn' => '69992952',
                'nama' => 'SMKS BINATAMA KABUPATEN BEKASI',
            ],
            '2673' => [
                'npsn' => '20220337',
                'nama' => 'SMAN 8 BOGOR KOTA BOGOR',
            ],
            '2674' => [
                'npsn' => '69853500',
                'nama' => 'SMKS BRAHARI KABUPATEN BEKASI',
            ],
            '2675' => [
                'npsn' => '69976651',
                'nama' => 'SMKS MA ARIF NURUL HUDA UTSMANIYYAH LUMBUNG KABUPATEN CIAMIS',
            ],
            '2676' => [
                'npsn' => '69929894',
                'nama' => 'SMKS ADISA KABUPATEN BEKASI',
            ],
            '2677' => [
                'npsn' => '20238477',
                'nama' => 'SLBS BINA MANDIRI KOTA BOGOR',
            ],
            '2678' => [
                'npsn' => '69853507',
                'nama' => 'SMKS IT AN NABA KOTA BOGOR',
            ],
            '2679' => [
                'npsn' => '20220319',
                'nama' => 'SMAS PGRI 4 BOGOR KOTA BOGOR',
            ],
            '2680' => [
                'npsn' => '20220328',
                'nama' => 'SMAS KAMANDAKA KOTA BOGOR',
            ],
            '2681' => [
                'npsn' => '20238528',
                'nama' => 'SMKS BINA MANDIRI BOGOR KOTA BOGOR',
            ],
            '2682' => [
                'npsn' => '20238033',
                'nama' => 'SMKN 1 SETU KABUPATEN BEKASI',
            ],
            '2683' => [
                'npsn' => '20270894',
                'nama' => 'SLBS HARAPAN SAKINAH KABUPATEN CIAMIS',
            ],
            '2684' => [
                'npsn' => '20220323',
                'nama' => 'SMAS BINA SEJAHTERA KOTA BOGOR',
            ],
            '2685' => [
                'npsn' => '20220290',
                'nama' => 'SMKS PGRI 2 BOGOR KOTA BOGOR',
            ],
            '2686' => [
                'npsn' => '20220301',
                'nama' => 'SMKS TARUNA ANDIGHA KOTA BOGOR',
            ],
            '2687' => [
                'npsn' => '20220300',
                'nama' => 'SMKS WIDAYA ANANDA BOGOR KOTA BOGOR',
            ],
            '2688' => [
                'npsn' => '20223817',
                'nama' => 'SMAN 3 DEPOK KOTA DEPOK',
            ],
            '2689' => [
                'npsn' => '20223819',
                'nama' => 'SMAN 1 DEPOK KOTA DEPOK',
            ],
            '2690' => [
                'npsn' => '69754446',
                'nama' => 'SMAN 1 RANCABUNGUR KABUPATEN BOGOR',
            ],
            '2691' => [
                'npsn' => '20220349',
                'nama' => 'SMAS YASIH KOTA BOGOR',
            ],
            '2692' => [
                'npsn' => '20220295',
                'nama' => 'SMKS YZA 1 BOGOR KOTA BOGOR',
            ],
            '2693' => [
                'npsn' => '20238515',
                'nama' => 'SMAS ISLAM AL UMM KOTA BOGOR',
            ],
            '2694' => [
                'npsn' => '20220329',
                'nama' => 'SMAS KESATUAN KOTA BOGOR',
            ],
            '2695' => [
                'npsn' => '20238534',
                'nama' => 'SMKS SIROJUL HUDA 1 BOGOR KOTA BOGOR',
            ],
            '2696' => [
                'npsn' => '69855412',
                'nama' => 'SMAS PERGURUAN ADVENT BOGOR KOTA BOGOR',
            ],
            '2697' => [
                'npsn' => '69768300',
                'nama' => 'SMKS BINA PUTERA BOGOR KOTA BOGOR',
            ],
            '2698' => [
                'npsn' => '69888738',
                'nama' => 'SMKN KASOMALANG KABUPATEN SUBANG',
            ],
            '2699' => [
                'npsn' => '20241355',
                'nama' => 'SMKN 1 KRANGKENG KABUPATEN INDRAMAYU',
            ],
            '2700' => [
                'npsn' => '20233652',
                'nama' => 'SMAN 1 BLANAKAN KABUPATEN SUBANG',
            ],
            '2701' => [
                'npsn' => '20254054',
                'nama' => 'SMAN 1 RANCAEKEK KABUPATEN BANDUNG',
            ],
            '2702' => [
                'npsn' => '20211578',
                'nama' => 'SMAN 1 CIHAURBEUTI KABUPATEN CIAMIS',
            ],
            '2703' => [
                'npsn' => '20268573',
                'nama' => 'SMKS ISLAM AL MUAMMILIN KABUPATEN INDRAMAYU',
            ],
            '2704' => [
                'npsn' => '69754534',
                'nama' => 'SMKS MUHAMMADIYAH KARANGAMPEL KABUPATEN INDRAMAYU',
            ],
            '2705' => [
                'npsn' => '20253762',
                'nama' => 'SMKS HARAPAN BANGSA KOTA DEPOK',
            ],
            '2706' => [
                'npsn' => '20229232',
                'nama' => 'SMKS TARUNA BHAKTI KOTA DEPOK',
            ],
            '2707' => [
                'npsn' => '20276182',
                'nama' => 'SMKS ISLAM PLUS YAPIA KOTA DEPOK',
            ],
            '2708' => [
                'npsn' => '69774823',
                'nama' => 'SMKS TARUNA BAJA 1 KOTA DEPOK',
            ],
            '2709' => [
                'npsn' => '20232542',
                'nama' => 'SMKS IT RAFLESIA KOTA DEPOK',
            ],
            '2710' => [
                'npsn' => '20267206',
                'nama' => 'SLBS FROBEL MONTESSORI 2 KOTA DEPOK',
            ],
            '2711' => [
                'npsn' => '20252519',
                'nama' => 'SMAN 15 BEKASI KOTA BEKASI',
            ],
            '2712' => [
                'npsn' => '20238569',
                'nama' => 'SMAN 1 SUKAWANGI KABUPATEN BEKASI',
            ],
            '2713' => [
                'npsn' => '20229168',
                'nama' => 'SMAN 6 DEPOK KOTA DEPOK',
            ],
            '2714' => [
                'npsn' => '20253827',
                'nama' => 'SMAN 1 DARMA KABUPATEN KUNINGAN',
            ],
            '2715' => [
                'npsn' => '70028643',
                'nama' => 'SMAS ISLAM GHAMA AR RASYID KOTA DEPOK',
            ],
            '2716' => [
                'npsn' => '20271540',
                'nama' => 'SMKS CAKRA NUSANTARA KOTA DEPOK',
            ],
            '2717' => [
                'npsn' => '20229141',
                'nama' => 'SMAS TERPADU ALMANAR KOTA DEPOK',
            ],
            '2718' => [
                'npsn' => '20229211',
                'nama' => 'SMKS KARYA MUDA KOTA DEPOK',
            ],
            '2719' => [
                'npsn' => '69944302',
                'nama' => 'SMKS ISLAM TERPADU PELITA SUBANA DARMA KABUPATEN KUNINGAN',
            ],
            '2720' => [
                'npsn' => '20229818',
                'nama' => 'SLBN KOTA DEPOK',
            ],
            '2721' => [
                'npsn' => '69964922',
                'nama' => 'SMAN 1 TIRTAJAYA KABUPATEN KARAWANG',
            ],
            '2722' => [
                'npsn' => '20215977',
                'nama' => 'SMAN 1 SUKAGUMIWANG KABUPATEN INDRAMAYU',
            ],
            '2723' => [
                'npsn' => '20254697',
                'nama' => 'SMKS JAGARA KABUPATEN KUNINGAN',
            ],
            '2724' => [
                'npsn' => '69830210',
                'nama' => 'SLBS LASKAR PUTRA MANDIRI DARMA KABUPATEN KUNINGAN',
            ],
            '2725' => [
                'npsn' => '20233764',
                'nama' => 'SMKS PONPES CADANGPINGGAN KABUPATEN INDRAMAYU',
            ],
            '2726' => [
                'npsn' => '20276432',
                'nama' => 'SMKS YADIKA 12 KOTA DEPOK',
            ],
            '2727' => [
                'npsn' => '20223815',
                'nama' => 'SMKS NASIONAL DEPOK KOTA DEPOK',
            ],
            '2728' => [
                'npsn' => '20223816',
                'nama' => 'SMKS EKONOMIKA KOTA DEPOK',
            ],
            '2729' => [
                'npsn' => '20229162',
                'nama' => 'SMAS MAWADDAH KOTA DEPOK',
            ],
            '2730' => [
                'npsn' => '20252983',
                'nama' => 'SMAS NU DUKUHJATI KABUPATEN INDRAMAYU',
            ],
            '2731' => [
                'npsn' => '20212962',
                'nama' => 'SMAN 1 KADUGEDE KABUPATEN KUNINGAN',
            ],
            '2732' => [
                'npsn' => '20208420',
                'nama' => 'SMAN 2 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2733' => [
                'npsn' => '20208397',
                'nama' => 'SMKS MUHAMADIYAH 1 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2734' => [
                'npsn' => '69831538',
                'nama' => 'SMKS KARANGMANGU KABUPATEN INDRAMAYU',
            ],
            '2735' => [
                'npsn' => '70029069',
                'nama' => 'SMKS BHAKTI PASUNDAN KABUPATEN INDRAMAYU',
            ],
            '2736' => [
                'npsn' => '69829369',
                'nama' => 'SMKS NUR ROHMAH KOTA BOGOR',
            ],
            '2737' => [
                'npsn' => '20220281',
                'nama' => 'SMKS BHAKTI TARUNA 1 BOGOR KOTA BOGOR',
            ],
            '2738' => [
                'npsn' => '20238526',
                'nama' => 'SMKS BHAKTI TARUNA 3 BOGOR KOTA BOGOR',
            ],
            '2739' => [
                'npsn' => '20220280',
                'nama' => 'SMKS 1 DASA SEMESTA BOGOR KOTA BOGOR',
            ],
            '2740' => [
                'npsn' => '20212922',
                'nama' => 'SMKS TARUNA BHAKTI KADUGEDE KABUPATEN KUNINGAN',
            ],
            '2741' => [
                'npsn' => '20258191',
                'nama' => 'SLBS KADUGEDE KABUPATEN KUNINGAN',
            ],
            '2742' => [
                'npsn' => '20235538',
                'nama' => 'SLBS BAG BC BAITUL ROHMAN KABUPATEN SUMEDANG',
            ],
            '2743' => [
                'npsn' => '69824453',
                'nama' => 'SMKS KARYA ABADI KABUPATEN SUMEDANG',
            ],
            '2744' => [
                'npsn' => '69758235',
                'nama' => 'SMKS PLUS MUTAALLIMIN KABUPATEN SUMEDANG',
            ],
            '2745' => [
                'npsn' => '69965370',
                'nama' => 'SMKS TONS KABUPATEN BEKASI',
            ],
            '2746' => [
                'npsn' => '69786198',
                'nama' => 'SMKS PERSADA BAGIA INFORMATIKA KABUPATEN BEKASI',
            ],
            '2747' => [
                'npsn' => '69852849',
                'nama' => 'SMKS MITRA BAKTI KABUPATEN BEKASI',
            ],
            '2748' => [
                'npsn' => '20271374',
                'nama' => 'SMKS IBNU SINA KOTA BOGOR',
            ],
            '2749' => [
                'npsn' => '20237989',
                'nama' => 'SMAN 1 KARANG BAHAGIA KABUPATEN BEKASI',
            ],
            '2750' => [
                'npsn' => '20252248',
                'nama' => 'SMKS AL IHYA SELAJAMBE KUNINGAN KABUPATEN KUNINGAN',
            ],
            '2751' => [
                'npsn' => '20212957',
                'nama' => 'SMAN 1 SUBANG KABUPATEN KUNINGAN',
            ],
            '2752' => [
                'npsn' => '20234014',
                'nama' => 'SLBS BAG ABC AL BAROKAH KABUPATEN SUMEDANG',
            ],
            '2753' => [
                'npsn' => '20220348',
                'nama' => 'SMAS TARUNA ANDIGHA KOTA BOGOR',
            ],
            '2754' => [
                'npsn' => '20254692',
                'nama' => 'SMKN 1 LURAGUNG KABUPATEN KUNINGAN',
            ],
            '2755' => [
                'npsn' => '70025375',
                'nama' => 'SMAS AR RIDHA AL SALAAM KOTA DEPOK',
            ],
            '2756' => [
                'npsn' => '20231330',
                'nama' => 'SMAN 1 GUNUNG PUTRI KABUPATEN BOGOR',
            ],
            '2757' => [
                'npsn' => '20276187',
                'nama' => 'SMAN 9 DEPOK KOTA DEPOK',
            ],
            '2758' => [
                'npsn' => '20212953',
                'nama' => 'SMAN 1 CIDAHU KABUPATEN KUNINGAN',
            ],
            '2759' => [
                'npsn' => '20212959',
                'nama' => 'SMAN 1 LURAGUNG KABUPATEN KUNINGAN',
            ],
            '2760' => [
                'npsn' => '69946248',
                'nama' => 'SMKS PERSADA KUNINGAN KABUPATEN KUNINGAN',
            ],
            '2761' => [
                'npsn' => '69942119',
                'nama' => 'SMKS CIBENING KABUPATEN KUNINGAN',
            ],
            '2762' => [
                'npsn' => '20235622',
                'nama' => 'SMAN CONGGEANG KABUPATEN SUMEDANG',
            ],
            '2763' => [
                'npsn' => '20232380',
                'nama' => 'SMAN 1 MEGAMENDUNG KABUPATEN BOGOR',
            ],
            '2764' => [
                'npsn' => '20235624',
                'nama' => 'SMAN TOMO KABUPATEN SUMEDANG',
            ],
            '2765' => [
                'npsn' => '20246370',
                'nama' => 'SMKN 5 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '2766' => [
                'npsn' => '20212960',
                'nama' => 'SMAN 1 LEBAKWANGI KABUPATEN KUNINGAN',
            ],
            '2767' => [
                'npsn' => '69755714',
                'nama' => 'SMKS HIDAYATUL ISLAM GARAWANGI KABUPATEN KUNINGAN',
            ],
            '2768' => [
                'npsn' => '20235641',
                'nama' => 'SMKS WIDYA NUSANTARA SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2769' => [
                'npsn' => '20238542',
                'nama' => 'SMKS YATEK BARU BOGOR KOTA BOGOR',
            ],
            '2770' => [
                'npsn' => '20212920',
                'nama' => 'SMKS PGRI CIAWIGEBANG KABUPATEN KUNINGAN',
            ],
            '2771' => [
                'npsn' => '20270794',
                'nama' => 'SLBS BAG ABCD AL AHDA KAPANDAYAN KABUPATEN KUNINGAN',
            ],
            '2772' => [
                'npsn' => '20235575',
                'nama' => 'SLBN BAG B PEMBINA TINGKAT PROVINSI JAWA BARAT KABUPATEN SUMEDANG',
            ],
            '2773' => [
                'npsn' => '20219141',
                'nama' => 'SMKN 7 BANDUNG KOTA BANDUNG',
            ],
            '2774' => [
                'npsn' => '69787186',
                'nama' => 'SMKS KESEHATAN SUMBER DAYA MANUSIA (SDM) KABUPATEN SUMEDANG',
            ],
            '2775' => [
                'npsn' => '69823285',
                'nama' => 'SMAN 3 BABELAN KABUPATEN BEKASI',
            ],
            '2776' => [
                'npsn' => '20246454',
                'nama' => 'SMAS SEKOLAH RAKYAT KABUPATEN BEKASI',
            ],
            '2777' => [
                'npsn' => '20253934',
                'nama' => 'SMAS IT ATTAUHID BABELAN KABUPATEN BEKASI',
            ],
            '2778' => [
                'npsn' => '69765807',
                'nama' => 'SMKS BINA SEJAHTERA 4 KOTA BOGOR',
            ],
            '2779' => [
                'npsn' => '20220303',
                'nama' => 'SMKS TARUNA BANGSA 2 BOGOR KOTA BOGOR',
            ],
            '2780' => [
                'npsn' => '20219779',
                'nama' => 'SMAS PGRI 2 BANDUNG KOTA BANDUNG',
            ],
            '2781' => [
                'npsn' => '70006693',
                'nama' => 'SMAS AL KENZIE KOTA BANDUNG',
            ],
            '2782' => [
                'npsn' => '20212921',
                'nama' => 'SMKS SWADAYA PUI KABUPATEN KUNINGAN',
            ],
            '2783' => [
                'npsn' => '69992708',
                'nama' => 'SMAS ISLAM TERPADU AL MULTAZAM 2 LINGGAJATI KABUPATEN KUNINGAN',
            ],
            '2784' => [
                'npsn' => '20256801',
                'nama' => 'SLBS BAG BC DHARMA WANITA KABUPATEN KUNINGAN',
            ],
            '2785' => [
                'npsn' => '20234024',
                'nama' => 'SLBS PGRI DHARMA PERTIWI KABUPATEN SUMEDANG',
            ],
            '2786' => [
                'npsn' => '20253145',
                'nama' => 'SMKS AL MAMUN KABUPATEN SUMEDANG',
            ],
            '2787' => [
                'npsn' => '20235541',
                'nama' => 'SLBS BAG BC YAYASAN PUTRA BUAH DUA KABUPATEN SUMEDANG',
            ],
            '2788' => [
                'npsn' => '20238051',
                'nama' => 'SMKS SEGARA WIYATA KABUPATEN BEKASI',
            ],
            '2789' => [
                'npsn' => '69880228',
                'nama' => 'SMKS LAZMA KABUPATEN BEKASI',
            ],
            '2790' => [
                'npsn' => '20238529',
                'nama' => 'SMKS FARMASI BOGOR KOTA BOGOR',
            ],
            '2791' => [
                'npsn' => '20211511',
                'nama' => 'SMKN 1 PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '2792' => [
                'npsn' => '20212958',
                'nama' => 'SMAN 1 MANDIRANCAN KABUPATEN KUNINGAN',
            ],
            '2793' => [
                'npsn' => '20254291',
                'nama' => 'SMKS ATTAQWA 01 TARUMAJAYA KABUPATEN BEKASI',
            ],
            '2794' => [
                'npsn' => '69901351',
                'nama' => 'SMKS ALQI PROFESI BOGOR KOTA BOGOR',
            ],
            '2795' => [
                'npsn' => '20218378',
                'nama' => 'SMAN 1 CIKARANG SELATAN KABUPATEN BEKASI',
            ],
            '2796' => [
                'npsn' => '69762805',
                'nama' => 'SMKS TEKNOLOGI NASIONAL AR RASWAD KABUPATEN KUNINGAN',
            ],
            '2797' => [
                'npsn' => '69754611',
                'nama' => 'SMKS AN NUR SUKAGUMIWANG KABUPATEN INDRAMAYU',
            ],
            '2798' => [
                'npsn' => '20220287',
                'nama' => 'SMKS BINA WARGA 1 BOGOR KOTA BOGOR',
            ],
            '2799' => [
                'npsn' => '20238480',
                'nama' => 'SLBS BAG BC MEKAR SARI 2 KOTA BOGOR',
            ],
            '2800' => [
                'npsn' => '69775473',
                'nama' => 'SMAS JHON PAULS SCHOOL KABUPATEN BEKASI',
            ],
            '2801' => [
                'npsn' => '20232449',
                'nama' => 'SMKS GIRI TARUNA 2 KABUPATEN BOGOR',
            ],
            '2802' => [
                'npsn' => '20280611',
                'nama' => 'SMKS SILIWANGI MANDIRI KABUPATEN BOGOR',
            ],
            '2803' => [
                'npsn' => '69734363',
                'nama' => 'SMKS YAPANSA KABUPATEN BOGOR',
            ],
            '2804' => [
                'npsn' => '20264428',
                'nama' => 'SMKS NU KARANGAMPEL KABUPATEN INDRAMAYU',
            ],
            '2805' => [
                'npsn' => '69880471',
                'nama' => 'SMAS NU KARANGANYAR KABUPATEN INDRAMAYU',
            ],
            '2806' => [
                'npsn' => '69843184',
                'nama' => 'SMKS GENTRA PASUNDAN KUNINGAN KABUPATEN KUNINGAN',
            ],
            '2807' => [
                'npsn' => '20229252',
                'nama' => 'SMKS AUTO MATSUDA KABUPATEN KUNINGAN',
            ],
            '2808' => [
                'npsn' => '69942661',
                'nama' => 'SMKS SAMIUDIN PLUS KABUPATEN KUNINGAN',
            ],
            '2809' => [
                'npsn' => '20212946',
                'nama' => 'SMAS AINURRAFIQ KABUPATEN KUNINGAN',
            ],
            '2810' => [
                'npsn' => '20217032',
                'nama' => 'SMKS BINA TEKNOLOGI SUBANG KABUPATEN SUBANG',
            ],
            '2811' => [
                'npsn' => '20219873',
                'nama' => 'SLBS BAG BC BANDUNG RAYA KOTA BANDUNG',
            ],
            '2812' => [
                'npsn' => '20219151',
                'nama' => 'SMKS PRAKARYA INTERNASIONAL 1 BANDUNG KOTA BANDUNG',
            ],
            '2813' => [
                'npsn' => '60730230',
                'nama' => 'SMAS MIFTHAUSSAADAH KABUPATEN BOGOR',
            ],
            '2814' => [
                'npsn' => '20255039',
                'nama' => 'SMKS AL MADZHAB KABUPATEN BOGOR',
            ],
            '2815' => [
                'npsn' => '20213873',
                'nama' => 'SMAN 1 CIKIJING KABUPATEN MAJALENGKA',
            ],
            '2816' => [
                'npsn' => '69883478',
                'nama' => 'SMKS AULIYA TELADAN MANDIRI (ATM) KABUPATEN MAJALENGKA',
            ],
            '2817' => [
                'npsn' => '20219137',
                'nama' => 'SMKS PASUNDAN 1 BANDUNG KOTA BANDUNG',
            ],
            '2818' => [
                'npsn' => '20219261',
                'nama' => 'SMAS SEBELAS MARET KOTA BANDUNG',
            ],
            '2819' => [
                'npsn' => '69985500',
                'nama' => 'SMKS HAFADATA YUSUF KABUPATEN MAJALENGKA',
            ],
            '2820' => [
                'npsn' => '20258214',
                'nama' => 'SLBS KAMILIA SHANTARI KABUPATEN MAJALENGKA',
            ],
            '2821' => [
                'npsn' => '69764522',
                'nama' => 'SMKS BINA WIRAUSAHA TALAGA KABUPATEN MAJALENGKA',
            ],
            '2822' => [
                'npsn' => '69978378',
                'nama' => 'SMAS FITRAH ISLAMIC WORLD ACADEMY KABUPATEN BOGOR',
            ],
            '2823' => [
                'npsn' => '20200671',
                'nama' => 'SMAS RIYADLUL JANNAH KABUPATEN BOGOR',
            ],
            '2824' => [
                'npsn' => '20224526',
                'nama' => 'SMKS ARTANITA KOTA TASIKMALAYA',
            ],
            '2825' => [
                'npsn' => '20247186',
                'nama' => 'SMKS MUHAMMADIYAH MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '2826' => [
                'npsn' => '20213898',
                'nama' => 'SLBS BAG B YPLB MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '2827' => [
                'npsn' => '69756301',
                'nama' => 'SLBS BINA BHAKTI MANDIRI KABUPATEN SUMEDANG',
            ],
            '2828' => [
                'npsn' => '20235633',
                'nama' => 'SMKS AGRIBISNIS SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2829' => [
                'npsn' => '20219243',
                'nama' => 'SMAN 11 BANDUNG KOTA BANDUNG',
            ],
            '2830' => [
                'npsn' => '20235536',
                'nama' => 'SLBS BAG ABCD KOSERA PUTRA KABUPATEN SUMEDANG',
            ],
            '2831' => [
                'npsn' => '69873706',
                'nama' => 'SMKS NUSA MANGGA SUCI KABUPATEN INDRAMAYU',
            ],
            '2832' => [
                'npsn' => '20238521',
                'nama' => 'SMAS YPH PLUS KOTA BOGOR',
            ],
            '2833' => [
                'npsn' => '20220312',
                'nama' => 'SMAS TUNAS HARAPAN KOTA BOGOR',
            ],
            '2834' => [
                'npsn' => '20238476',
                'nama' => 'SLBS FITRIA KOTA BOGOR',
            ],
            '2835' => [
                'npsn' => '69830509',
                'nama' => 'SMKS UMMI BOGOR KOTA BOGOR',
            ],
            '2836' => [
                'npsn' => '20238525',
                'nama' => 'SMKS BARANANGSIANG BOGOR KOTA BOGOR',
            ],
            '2837' => [
                'npsn' => '69954998',
                'nama' => 'SLBS AR RAHMAN KABUPATEN KUNINGAN',
            ],
            '2838' => [
                'npsn' => '20258140',
                'nama' => 'SMAN 1 SINDANGWANGI KABUPATEN MAJALENGKA',
            ],
            '2839' => [
                'npsn' => '69944965',
                'nama' => 'SMKN 1 LEUWIMUNDING KABUPATEN MAJALENGKA',
            ],
            '2840' => [
                'npsn' => '20213896',
                'nama' => 'SMAN 1 LEUWIMUNDING KABUPATEN MAJALENGKA',
            ],
            '2841' => [
                'npsn' => '69760656',
                'nama' => 'SMKS GUMATI MULYA KOTA BOGOR',
            ],
            '2842' => [
                'npsn' => '20213886',
                'nama' => 'SMAN 1 RAJAGALUH KABUPATEN MAJALENGKA',
            ],
            '2843' => [
                'npsn' => '69889032',
                'nama' => 'SMKS NU LEMAH AYU KABUPATEN INDRAMAYU',
            ],
            '2844' => [
                'npsn' => '69893604',
                'nama' => 'SLBS BAG BC ABDI PRATAMA BOJONGSARI KOTA DEPOK',
            ],
            '2845' => [
                'npsn' => '20276433',
                'nama' => 'SMKS ISLAMIYAH SERUA KOTA DEPOK',
            ],
            '2846' => [
                'npsn' => '20224115',
                'nama' => 'SMAS BUDI LUHUR KOTA CIMAHI',
            ],
            '2847' => [
                'npsn' => '20224109',
                'nama' => 'SMAN 4 CIMAHI KOTA CIMAHI',
            ],
            '2848' => [
                'npsn' => '20229166',
                'nama' => 'SMAN 4 DEPOK KOTA DEPOK',
            ],
            '2849' => [
                'npsn' => '20224105',
                'nama' => 'SMAS PASUNDAN 2 KOTA CIMAHI',
            ],
            '2850' => [
                'npsn' => '20271621',
                'nama' => 'SMKS PASUNDAN 2 KOTA CIMAHI',
            ],
            '2851' => [
                'npsn' => '69901269',
                'nama' => 'SMKS KESEHATAN SURYA GLOBAL KOTA CIMAHI',
            ],
            '2852' => [
                'npsn' => '69772703',
                'nama' => 'SMAN 2 CIKARANG SELATAN KABUPATEN BEKASI',
            ],
            '2853' => [
                'npsn' => '20247192',
                'nama' => 'SMKS RISE MAJALENGKA KABUPATEN MAJALENGKA',
            ],
            '2854' => [
                'npsn' => '60726123',
                'nama' => 'SMKS YAPPRI SUMEDANG KABUPATEN SUMEDANG',
            ],
            '2855' => [
                'npsn' => '69887367',
                'nama' => 'SMKS NU AMPERA KABUPATEN INDRAMAYU',
            ],
            '2856' => [
                'npsn' => '20247198',
                'nama' => 'SMKN 1 PANYINGKIRAN KABUPATEN MAJALENGKA',
            ],
            '2857' => [
                'npsn' => '20245286',
                'nama' => 'SMKS YZA 2 BOGOR KOTA BOGOR',
            ],
            '2858' => [
                'npsn' => '20219748',
                'nama' => 'SLBS BAG C TUT WURI HANDAYANI KOTA CIMAHI',
            ],
            '2859' => [
                'npsn' => '20220332',
                'nama' => 'SMAN 3 BOGOR KOTA BOGOR',
            ],
            '2860' => [
                'npsn' => '20215983',
                'nama' => 'SMAN 1 TUKDANA KABUPATEN INDRAMAYU',
            ],
            '2861' => [
                'npsn' => '20219244',
                'nama' => 'SMAN 18 BANDUNG KOTA BANDUNG',
            ],
            '2862' => [
                'npsn' => '60726667',
                'nama' => 'SMAS TERPADU AL FIYYAH KABUPATEN SUKABUMI',
            ],
            '2863' => [
                'npsn' => '20238532',
                'nama' => 'SMKS KAMANDAKA KOTA BOGOR',
            ],
            '2864' => [
                'npsn' => '20224504',
                'nama' => 'SMAN 8 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2865' => [
                'npsn' => '20224118',
                'nama' => 'SLBS PAMBUDI DHARMA 1 KOTA CIMAHI',
            ],
            '2866' => [
                'npsn' => '20224104',
                'nama' => 'SMKS TARUNA MANDIRI KOTA CIMAHI',
            ],
            '2867' => [
                'npsn' => '20224599',
                'nama' => 'SMKN 3 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2868' => [
                'npsn' => '20235621',
                'nama' => 'SMAN CIMANGGUNG KABUPATEN SUMEDANG',
            ],
            '2869' => [
                'npsn' => '69978566',
                'nama' => 'SMKS KARYA NASIONAL KADIPATEN KABUPATEN MAJALENGKA',
            ],
            '2870' => [
                'npsn' => '69826568',
                'nama' => 'SMKS DAIROBBY KABUPATEN SUMEDANG',
            ],
            '2871' => [
                'npsn' => '20268572',
                'nama' => 'SMKS DARUL ULUM KERTASEMAYA KABUPATEN INDRAMAYU',
            ],
            '2872' => [
                'npsn' => '20251822',
                'nama' => 'SLBS AISYIYAH KAWALU KOTA TASIKMALAYA',
            ],
            '2873' => [
                'npsn' => '20268762',
                'nama' => 'SMKS AL MARUFI KOTA TASIKMALAYA',
            ],
            '2874' => [
                'npsn' => '20224517',
                'nama' => 'SMKS MJPS 3 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2875' => [
                'npsn' => '20268813',
                'nama' => 'SMKS BUSTANUL ULUM KOTA TASIKMALAYA',
            ],
            '2876' => [
                'npsn' => '20224525',
                'nama' => 'SMKS BPI BATUROMPE KOTA TASIKMALAYA',
            ],
            '2877' => [
                'npsn' => '69900162',
                'nama' => 'SMKS TERPADU AL URWATUL WUSTHA KOTA TASIKMALAYA',
            ],
            '2878' => [
                'npsn' => '20268574',
                'nama' => 'SMKS NU KERTASEMAYA KABUPATEN INDRAMAYU',
            ],
            '2879' => [
                'npsn' => '69752264',
                'nama' => 'SMKN KADIPATEN KABUPATEN TASIKMALAYA',
            ],
            '2880' => [
                'npsn' => '20202265',
                'nama' => 'SMAN 1 LENGKONG KABUPATEN SUKABUMI',
            ],
            '2881' => [
                'npsn' => '69905536',
                'nama' => 'SMKS IT BAITUL MA ARIF CISEWU KABUPATEN GARUT',
            ],
            '2882' => [
                'npsn' => '20219149',
                'nama' => 'SMKS PROFITA BANDUNG KOTA BANDUNG',
            ],
            '2883' => [
                'npsn' => '20219784',
                'nama' => 'SMAS PELITA BANGSA KOTA BANDUNG',
            ],
            '2884' => [
                'npsn' => '20271533',
                'nama' => 'SLBS YPDP KOTA BANDUNG',
            ],
            '2885' => [
                'npsn' => '20219247',
                'nama' => 'SMAN 25 BANDUNG KOTA BANDUNG',
            ],
            '2886' => [
                'npsn' => '20206213',
                'nama' => 'SMAN 1 CIWIDEY KABUPATEN BANDUNG',
            ],
            '2887' => [
                'npsn' => '20216002',
                'nama' => 'SMKN 1 LELEA KABUPATEN INDRAMAYU',
            ],
            '2888' => [
                'npsn' => '69757941',
                'nama' => 'SMKS NU BONGAS KABUPATEN INDRAMAYU',
            ],
            '2889' => [
                'npsn' => '20268467',
                'nama' => 'SMAS IT TQ IHYA AS SUNNAH KOTA TASIKMALAYA',
            ],
            '2890' => [
                'npsn' => '20224594',
                'nama' => 'SMKS YAPSIPA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2891' => [
                'npsn' => '69786493',
                'nama' => 'SMAS ISLAM TERPADU ISHLAHUL UMMAH BOARDING SCHOOL KOTA TASIKMALAYA',
            ],
            '2892' => [
                'npsn' => '20269445',
                'nama' => 'SMKS TRI KARYA HUSADA KOTA TASIKMALAYA',
            ],
            '2893' => [
                'npsn' => '20224519',
                'nama' => 'SMKS MITRA BATIK TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2894' => [
                'npsn' => '20224593',
                'nama' => 'SMKS YAYASAN ISLAM TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2895' => [
                'npsn' => '70004640',
                'nama' => 'SMKS ISLAM TERPADU SABILILLAH KABUPATEN INDRAMAYU',
            ],
            '2896' => [
                'npsn' => '20219235',
                'nama' => 'SMAN 17 BANDUNG KOTA BANDUNG',
            ],
            '2897' => [
                'npsn' => '20247187',
                'nama' => 'SMKS PELITA NUSANTARA KERTAJATI KABUPATEN MAJALENGKA',
            ],
            '2898' => [
                'npsn' => '20224597',
                'nama' => 'SMKS PERIWATAS TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2899' => [
                'npsn' => '20253324',
                'nama' => 'SMKS TERPADU BOJONGNANGKA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2900' => [
                'npsn' => '20224545',
                'nama' => 'SMAS PERWARI TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '2901' => [
                'npsn' => '20215973',
                'nama' => 'SMKS NASIONAL INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2902' => [
                'npsn' => '20215979',
                'nama' => 'SMAN 1 JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '2903' => [
                'npsn' => '20213895',
                'nama' => 'SMAN 1 LIGUNG KABUPATEN MAJALENGKA',
            ],
            '2904' => [
                'npsn' => '20264429',
                'nama' => 'SLBN 2 KABUPATEN INDRAMAYU',
            ],
            '2905' => [
                'npsn' => '69753554',
                'nama' => 'SMKN 13 GARUT KABUPATEN GARUT',
            ],
            '2906' => [
                'npsn' => '20271841',
                'nama' => 'SMKS BINA INSANI KABUPATEN MAJALENGKA',
            ],
            '2907' => [
                'npsn' => '20263967',
                'nama' => 'SMKS PERJUANGAN BANGSA LIGUNG KABUPATEN MAJALENGKA',
            ],
            '2908' => [
                'npsn' => '20219865',
                'nama' => 'SLBS AUTISME PELITA HAFIZH KOTA BANDUNG',
            ],
            '2909' => [
                'npsn' => '69893732',
                'nama' => 'SMKS MIFTAHUL HUDA AL HUSNA KOTA TASIKMALAYA',
            ],
            '2910' => [
                'npsn' => '69895683',
                'nama' => 'SMAS TERPADU DARUL MUTA`ALLIMIN KOTA TASIKMALAYA',
            ],
            '2911' => [
                'npsn' => '69830632',
                'nama' => 'SMKS DARUSSALAM KABUPATEN MAJALENGKA',
            ],
            '2912' => [
                'npsn' => '20225281',
                'nama' => 'SMKS HIKMAH BANJAR KOTA BANJAR',
            ],
            '2913' => [
                'npsn' => '20258213',
                'nama' => 'SLBS TUNAS TEKAD SUMBERJAYA KABUPATEN MAJALENGKA',
            ],
            '2914' => [
                'npsn' => '20252398',
                'nama' => 'SMKN 1 CIPANAS KABUPATEN CIANJUR',
            ],
            '2915' => [
                'npsn' => '20216195',
                'nama' => 'SMAS ASSALAFIAH INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2916' => [
                'npsn' => '20220277',
                'nama' => 'SMKS PEMBANGUNAN KOTA BOGOR',
            ],
            '2917' => [
                'npsn' => '20227446',
                'nama' => 'SMAS MAARIF NURUL HIDAYAH CIKELET KABUPATEN GARUT',
            ],
            '2918' => [
                'npsn' => '69952604',
                'nama' => 'SMKS NAILUL KHOIR KABUPATEN MAJALENGKA',
            ],
            '2919' => [
                'npsn' => '20213874',
                'nama' => 'SMAS PRAKARYA SINDANG KABUPATEN MAJALENGKA',
            ],
            '2920' => [
                'npsn' => '69794873',
                'nama' => 'SMKS AL AMIIN SANGKANHURIP KABUPATEN MAJALENGKA',
            ],
            '2921' => [
                'npsn' => '69934870',
                'nama' => 'SMKS AL ASYARIYAH KABUPATEN CIREBON',
            ],
            '2922' => [
                'npsn' => '20214997',
                'nama' => 'SMAS PGRI LOSARI KABUPATEN CIREBON',
            ],
            '2923' => [
                'npsn' => '20214797',
                'nama' => 'SMKS MUHAMMADIYAH CILEDUG KABUPATEN CIREBON',
            ],
            '2924' => [
                'npsn' => '20215021',
                'nama' => 'SMAS NU CILEDUG KABUPATEN CIREBON',
            ],
            '2925' => [
                'npsn' => '20215997',
                'nama' => 'SMKN 2 INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2926' => [
                'npsn' => '20219786',
                'nama' => 'SMAS NUGRAHA BANDUNG KOTA BANDUNG',
            ],
            '2927' => [
                'npsn' => '20280591',
                'nama' => 'SLBS RISANTYA KOTA BANDUNG',
            ],
            '2928' => [
                'npsn' => '70032509',
                'nama' => 'SMAS AL IHSAN CIMENCRANG BANDUNG KOTA BANDUNG',
            ],
            '2929' => [
                'npsn' => '69948290',
                'nama' => 'SMKS AL MUSTHOFA INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2930' => [
                'npsn' => '20244694',
                'nama' => 'SMKS SUNAN GUNUNG JATI BABAKAN KABUPATEN CIREBON',
            ],
            '2931' => [
                'npsn' => '20220350',
                'nama' => 'SMAS YZA 1 BOGOR TIMUR KOTA BOGOR',
            ],
            '2932' => [
                'npsn' => '20215019',
                'nama' => 'SMAS PGRI KARANGSEMBUNG KABUPATEN CIREBON',
            ],
            '2933' => [
                'npsn' => '69766973',
                'nama' => 'SMKS BINA CENDEKIA CIREBON KABUPATEN CIREBON',
            ],
            '2934' => [
                'npsn' => '20244676',
                'nama' => 'SMAS PGRI BABAKAN KABUPATEN CIREBON',
            ],
            '2935' => [
                'npsn' => '20244672',
                'nama' => 'SMAS MUHAMMADIYAH LEMAHABANG KABUPATEN CIREBON',
            ],
            '2936' => [
                'npsn' => '20214982',
                'nama' => 'SMKS BINA BANGSA SEDONG KABUPATEN CIREBON',
            ],
            '2937' => [
                'npsn' => '20256262',
                'nama' => 'SMKS PGRI 4 BOGOR KOTA BOGOR',
            ],
            '2938' => [
                'npsn' => '20238541',
                'nama' => 'SMKS SIROJUL HUDA 2 BOGOR KOTA BOGOR',
            ],
            '2939' => [
                'npsn' => '20219173',
                'nama' => 'SMKS MUHAMMADIYAH 2 CIBIRU KOTA BANDUNG',
            ],
            '2940' => [
                'npsn' => '20214822',
                'nama' => 'SMKS SAMUDRA NUSANTARA CIREBON KABUPATEN CIREBON',
            ],
            '2941' => [
                'npsn' => '69954194',
                'nama' => 'SMAS ISLAM AL AZHAR 18 GRAND WISATA KABUPATEN BEKASI',
            ],
            '2942' => [
                'npsn' => '69991233',
                'nama' => 'SMAS NURAIDA ISLAMIC BOARDING SCHOOL KOTA BOGOR',
            ],
            '2943' => [
                'npsn' => '20220330',
                'nama' => 'SMAS YPHB KOTA BOGOR',
            ],
            '2944' => [
                'npsn' => '20238536',
                'nama' => 'SMKS PGRI 3 BOGOR KOTA BOGOR',
            ],
            '2945' => [
                'npsn' => '20220274',
                'nama' => 'SMKN 2 BOGOR KOTA BOGOR',
            ],
            '2946' => [
                'npsn' => '20220340',
                'nama' => 'SMKS ANALIS KIMIA YKPI BOGOR KOTA BOGOR',
            ],
            '2947' => [
                'npsn' => '20238533',
                'nama' => 'SMKS KARYA NUGRAHA BOGOR KOTA BOGOR',
            ],
            '2948' => [
                'npsn' => '69965368',
                'nama' => 'SMAS AL BIRUNI CERDAS MULIA KOTA BANDUNG',
            ],
            '2949' => [
                'npsn' => '20227433',
                'nama' => 'SMAS AL HIKMAH CIBATU KABUPATEN GARUT',
            ],
            '2950' => [
                'npsn' => '69896978',
                'nama' => 'SMAS AL ISLAM ISLAMIC BOARDING SCHOOL KABUPATEN CIREBON',
            ],
            '2951' => [
                'npsn' => '20244689',
                'nama' => 'SMKS NUSANTARA BEBER CIREBON KABUPATEN CIREBON',
            ],
            '2952' => [
                'npsn' => '69888465',
                'nama' => 'SMKS ISLAM TERPADU AL IRSYADY KABUPATEN INDRAMAYU',
            ],
            '2953' => [
                'npsn' => '20269368',
                'nama' => 'SMKS CITRA PARIWISATA KOTA BOGOR',
            ],
            '2954' => [
                'npsn' => '20220279',
                'nama' => 'SMKS GRAFIKA MARDI YUANA BOGOR KOTA BOGOR',
            ],
            '2955' => [
                'npsn' => '20238537',
                'nama' => 'SMKS PUI BOGOR KOTA BOGOR',
            ],
            '2956' => [
                'npsn' => '70003436',
                'nama' => 'SLBN KOTA BOGOR',
            ],
            '2957' => [
                'npsn' => '20208422',
                'nama' => 'SMAN JATINANGOR KABUPATEN SUMEDANG',
            ],
            '2958' => [
                'npsn' => '20220334',
                'nama' => 'SMAN 4 BOGOR KOTA BOGOR',
            ],
            '2959' => [
                'npsn' => '20214821',
                'nama' => 'SMKS SULTAN AGUNG SUMBER KABUPATEN CIREBON',
            ],
            '2960' => [
                'npsn' => '70011522',
                'nama' => 'SMAS IT AL BURHANY KABUPATEN CIREBON',
            ],
            '2961' => [
                'npsn' => '69952016',
                'nama' => 'SMKS TARUNA INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2962' => [
                'npsn' => '20268852',
                'nama' => 'SMKS AS SAKIENAH BOARDING SCHOOL KABUPATEN INDRAMAYU',
            ],
            '2963' => [
                'npsn' => '20214823',
                'nama' => 'SMKS SALAFIYAH CIREBON KABUPATEN CIREBON',
            ],
            '2964' => [
                'npsn' => '60729212',
                'nama' => 'SLBS MEKAR MANDIRI BATULAWANG KOTA BANJAR',
            ],
            '2965' => [
                'npsn' => '20253667',
                'nama' => 'SMKS AL AZHAR BANJAR KOTA BANJAR',
            ],
            '2966' => [
                'npsn' => '20215992',
                'nama' => 'SMAN 1 SLIYEG KABUPATEN INDRAMAYU',
            ],
            '2967' => [
                'npsn' => '20227906',
                'nama' => 'SMAN 1 KERTASARI KABUPATEN BANDUNG',
            ],
            '2968' => [
                'npsn' => '69962280',
                'nama' => 'SMAN 1 TANJUNGSARI KABUPATEN BOGOR',
            ],
            '2969' => [
                'npsn' => '69769404',
                'nama' => 'SMKS PAHLAWAN KABUPATEN CIREBON',
            ],
            '2970' => [
                'npsn' => '69725981',
                'nama' => 'SMKS GROGOL KAPETAKAN KABUPATEN CIREBON',
            ],
            '2971' => [
                'npsn' => '20214966',
                'nama' => 'SMAN 1 CIWARINGIN KABUPATEN CIREBON',
            ],
            '2972' => [
                'npsn' => '69969195',
                'nama' => 'SMAN 1 KAPETAKAN KABUPATEN CIREBON',
            ],
            '2973' => [
                'npsn' => '20265481',
                'nama' => 'SMKS BHINEKA TUNGGAL IKA KABUPATEN BEKASI',
            ],
            '2974' => [
                'npsn' => '20219871',
                'nama' => 'SLBS BAG C BUDAYA BANGSA KOTA BANDUNG',
            ],
            '2975' => [
                'npsn' => '20275331',
                'nama' => 'SMKS PUTRA NASIONAL KOTA BANDUNG',
            ],
            '2976' => [
                'npsn' => '69972418',
                'nama' => 'SMKS PERSIS 02 KOTA BANDUNG',
            ],
            '2977' => [
                'npsn' => '69991690',
                'nama' => 'SMAS PELITA FAJAR KOTA BANDUNG',
            ],
            '2978' => [
                'npsn' => '20265533',
                'nama' => 'SMKS MADANI KOTA BANDUNG',
            ],
            '2979' => [
                'npsn' => '69849087',
                'nama' => 'SMKN TEGALWARU KABUPATEN PURWAKARTA',
            ],
            '2980' => [
                'npsn' => '20214824',
                'nama' => 'SMKS PESANTREN CIWARINGIN KABUPATEN CIREBON',
            ],
            '2981' => [
                'npsn' => '69725984',
                'nama' => 'SMKS AL BIRUNI CIWARINGIN KABUPATEN CIREBON',
            ],
            '2982' => [
                'npsn' => '20214976',
                'nama' => 'SMAS PUI GEGESIK KABUPATEN CIREBON',
            ],
            '2983' => [
                'npsn' => '20215022',
                'nama' => 'SMAS NASRUL ULUM GEGESIK KABUPATEN CIREBON',
            ],
            '2984' => [
                'npsn' => '20215972',
                'nama' => 'SMKS PGRI INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '2985' => [
                'npsn' => '20223041',
                'nama' => 'SMAN 8 BEKASI KOTA BEKASI',
            ],
            '2986' => [
                'npsn' => '20214794',
                'nama' => 'SMKN 1 SUSUKAN KABUPATEN CIREBON',
            ],
            '2987' => [
                'npsn' => '20244680',
                'nama' => 'SMAN 1 SUSUKAN KABUPATEN CIREBON',
            ],
            '2988' => [
                'npsn' => '20268566',
                'nama' => 'SMKS SALAFIYYAH DARURROHMAH KABUPATEN CIREBON',
            ],
            '2989' => [
                'npsn' => '60725235',
                'nama' => 'SMKS AL MUTHMAINNAH KABUPATEN BEKASI',
            ],
            '2990' => [
                'npsn' => '20225276',
                'nama' => 'SMAS AL AZHAR KOTA BANJAR',
            ],
            '2991' => [
                'npsn' => '69873594',
                'nama' => 'SMAS DAARUL FIKRI KABUPATEN BEKASI',
            ],
            '2992' => [
                'npsn' => '20219303',
                'nama' => 'SMKS BANDUNG SELATAN 2 KOTA BANDUNG',
            ],
            '2993' => [
                'npsn' => '20219304',
                'nama' => 'SMKS BANDUNG SELATAN 1 BANDUNG KOTA BANDUNG',
            ],
            '2994' => [
                'npsn' => '69978296',
                'nama' => 'SMKS AL BARKAH KOTA BANJAR',
            ],
            '2995' => [
                'npsn' => '20254187',
                'nama' => 'SMKS TEKNOLOGI YAYASAN AL FALAH KOTA BANJAR',
            ],
            '2996' => [
                'npsn' => '20225280',
                'nama' => 'SMAN 2 BANJAR KOTA BANJAR',
            ],
            '2997' => [
                'npsn' => '20209202',
                'nama' => 'SMKN 3 GARUT KABUPATEN GARUT',
            ],
            '2998' => [
                'npsn' => '69974030',
                'nama' => 'SMKN 3 CIKARANG BARAT KABUPATEN BEKASI',
            ],
            '2999' => [
                'npsn' => '69925462',
                'nama' => 'SMKS MUHAMMADIYAH GEBANG KABUPATEN CIREBON',
            ],
            '3000' => [
                'npsn' => '20246375',
                'nama' => 'SMKS PONPES MANBAUUL ULUM KABUPATEN CIREBON',
            ],
            '3001' => [
                'npsn' => '20214964',
                'nama' => 'SMKS MANBAUL ULUM KABUPATEN CIREBON',
            ],
            '3002' => [
                'npsn' => '69770350',
                'nama' => 'SMKS AN NAHDLIYAH KABUPATEN CIREBON',
            ],
            '3003' => [
                'npsn' => '20214977',
                'nama' => 'SMAS PLUS NU PANGURAGAN KABUPATEN CIREBON',
            ],
            '3004' => [
                'npsn' => '70033729',
                'nama' => 'SLBN CIMERAK KABUPATEN PANGANDARAN',
            ],
            '3005' => [
                'npsn' => '69957365',
                'nama' => 'SMKS MIGAS BALONGAN INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3006' => [
                'npsn' => '60728750',
                'nama' => 'SMKS BANDUNG UTARA KOTA BANDUNG',
            ],
            '3007' => [
                'npsn' => '20219305',
                'nama' => 'SMKS AQUA VITAE KOTA BANDUNG',
            ],
            '3008' => [
                'npsn' => '69968471',
                'nama' => 'SMAN KALIWEDI KABUPATEN CIREBON',
            ],
            '3009' => [
                'npsn' => '20271880',
                'nama' => 'SLBN PANGERAN CAKRABUANA KABUPATEN CIREBON',
            ],
            '3010' => [
                'npsn' => '20246451',
                'nama' => 'SMAS MUHAMMADIYAH SLIYEG KABUPATEN INDRAMAYU',
            ],
            '3011' => [
                'npsn' => '70011442',
                'nama' => 'SMAS IT AKMALA SABILA KABUPATEN CIREBON',
            ],
            '3012' => [
                'npsn' => '20253369',
                'nama' => 'SMKS IBNU SIENA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '3013' => [
                'npsn' => '20224547',
                'nama' => 'SMAS PASUNDAN 1 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '3014' => [
                'npsn' => '20268508',
                'nama' => 'SMKS HEMAZ KARANGWARENG KABUPATEN CIREBON',
            ],
            '3015' => [
                'npsn' => '20267668',
                'nama' => 'SLBS BINA KARYA KABUPATEN CIREBON',
            ],
            '3016' => [
                'npsn' => '20214796',
                'nama' => 'SMKN 1 KEDAWUNG KABUPATEN CIREBON',
            ],
            '3017' => [
                'npsn' => '69987212',
                'nama' => 'SMKS ASYIFA DEPOK KABUPATEN CIREBON',
            ],
            '3018' => [
                'npsn' => '69896728',
                'nama' => 'SMKS PERJUANGAN KOTA TASIKMALAYA',
            ],
            '3019' => [
                'npsn' => '69857713',
                'nama' => 'SMKS BINA PUTRA MANDIRI KOTA TASIKMALAYA',
            ],
            '3020' => [
                'npsn' => '20233755',
                'nama' => 'SMKS WIDYA UTAMA KABUPATEN INDRAMAYU',
            ],
            '3021' => [
                'npsn' => '20216202',
                'nama' => 'SMAS NU INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3022' => [
                'npsn' => '20220309',
                'nama' => 'SMKS BHAKTI INSANI BOGOR KOTA BOGOR',
            ],
            '3023' => [
                'npsn' => '69774752',
                'nama' => 'SMKS BINA INSAN MANDIRI KOTA BOGOR',
            ],
            '3024' => [
                'npsn' => '69761880',
                'nama' => 'SMKS KESEHATAN BINA HUSADA KOTA BOGOR',
            ],
            '3025' => [
                'npsn' => '69830391',
                'nama' => 'SMKS PUTRA HARAPAN BOGOR KOTA BOGOR',
            ],
            '3026' => [
                'npsn' => '20271224',
                'nama' => 'SMKS YASBAM KOTA BOGOR',
            ],
            '3027' => [
                'npsn' => '69883219',
                'nama' => 'SMAS DASA SEMESTA KOTA BOGOR',
            ],
            '3028' => [
                'npsn' => '20206214',
                'nama' => 'SMKN 1 KATAPANG KABUPATEN BANDUNG',
            ],
            '3029' => [
                'npsn' => '20216004',
                'nama' => 'SMKN 1 INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3030' => [
                'npsn' => '20244682',
                'nama' => 'SMKS AL JABBAR CILEDUG CIREBON KABUPATEN CIREBON',
            ],
            '3031' => [
                'npsn' => '20267761',
                'nama' => 'SMKS KHAIRA UMMAH KABUPATEN CIREBON',
            ],
            '3032' => [
                'npsn' => '20214975',
                'nama' => 'SMAS SUNAN GUNUNG JATI TENGAHTANI KABUPATEN CIREBON',
            ],
            '3033' => [
                'npsn' => '69852822',
                'nama' => 'SMKS PONDOK PESANTREN ABU MANSHUR KABUPATEN CIREBON',
            ],
            '3034' => [
                'npsn' => '20244690',
                'nama' => 'SMKS NUSANTARA WERU CIREBON KABUPATEN CIREBON',
            ],
            '3035' => [
                'npsn' => '69948086',
                'nama' => 'SMKS TEKNOLOGI GEDONG JATI KABUPATEN CIREBON',
            ],
            '3036' => [
                'npsn' => '70009925',
                'nama' => 'SMKS NAHDHATUL UMAM KABUPATEN CIREBON',
            ],
            '3037' => [
                'npsn' => '20238013',
                'nama' => 'SMAS DIAN HARAPAN KABUPATEN BEKASI',
            ],
            '3038' => [
                'npsn' => '20219170',
                'nama' => 'SMKS KIMIA PERMENTASI KOTA BANDUNG',
            ],
            '3039' => [
                'npsn' => '20227903',
                'nama' => 'SMAN 1 BOJONGSOANG KABUPATEN BANDUNG',
            ],
            '3040' => [
                'npsn' => '69948091',
                'nama' => 'SMKS AL KARIM KABUPATEN CIREBON',
            ],
            '3041' => [
                'npsn' => '20271757',
                'nama' => 'SMKS LESTARI GUMULUNG LEBAK KABUPATEN CIREBON',
            ],
            '3042' => [
                'npsn' => '69919132',
                'nama' => 'SMKS PGRI 1 HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '3043' => [
                'npsn' => '20238021',
                'nama' => 'SMAS PELITA HARAPAN CIKARANG KABUPATEN BEKASI',
            ],
            '3044' => [
                'npsn' => '69957088',
                'nama' => 'SMKS REPUBLIK KABUPATEN INDRAMAYU',
            ],
            '3045' => [
                'npsn' => '20269849',
                'nama' => 'SMKS NU AL BASYARIYAH KEDOKANBUNDER KABUPATEN INDRAMAYU',
            ],
            '3046' => [
                'npsn' => '69819427',
                'nama' => 'SMKS GLOBAL MULIA KABUPATEN BEKASI',
            ],
            '3047' => [
                'npsn' => '69956973',
                'nama' => 'SMKS PARIWISATA KABUPATEN BEKASI',
            ],
            '3048' => [
                'npsn' => '20265522',
                'nama' => 'SMAS PLUS PARIWISATA KOTA BANDUNG',
            ],
            '3049' => [
                'npsn' => '69929705',
                'nama' => 'SMKN 1 CILENGKRANG KABUPATEN BANDUNG',
            ],
            '3050' => [
                'npsn' => '20244699',
                'nama' => 'SMKN 1 JAMBLANG KABUPATEN CIREBON',
            ],
            '3051' => [
                'npsn' => '20223818',
                'nama' => 'SMAN 2 DEPOK KOTA DEPOK',
            ],
            '3052' => [
                'npsn' => '69947092',
                'nama' => 'SMKS AL MUSTAQIM CIKEDUNG KABUPATEN INDRAMAYU',
            ],
            '3053' => [
                'npsn' => '69894394',
                'nama' => 'SMKS INSAN KAMIL KABUPATEN INDRAMAYU',
            ],
            '3054' => [
                'npsn' => '20244757',
                'nama' => 'SMKS PUI HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '3055' => [
                'npsn' => '20233763',
                'nama' => 'SMKS NU HAURGEULIS KABUPATEN INDRAMAYU',
            ],
            '3056' => [
                'npsn' => '20215993',
                'nama' => 'SMAN 2 INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3057' => [
                'npsn' => '20216010',
                'nama' => 'SMKS ENDANG DARMA AYU INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3058' => [
                'npsn' => '69947224',
                'nama' => 'SMKS BENTENG PANCASILA KABUPATEN INDRAMAYU',
            ],
            '3059' => [
                'npsn' => '20219795',
                'nama' => 'SMAS KALAM KUDUS KOTA BANDUNG',
            ],
            '3060' => [
                'npsn' => '20219275',
                'nama' => 'SMAS YPS KOTA BANDUNG',
            ],
            '3061' => [
                'npsn' => '69759191',
                'nama' => 'SMKS MIFTAHUL JANNAH LELEA KABUPATEN INDRAMAYU',
            ],
            '3062' => [
                'npsn' => '20229783',
                'nama' => 'SMKN 1 RANCAEKEK KABUPATEN BANDUNG',
            ],
            '3063' => [
                'npsn' => '20255799',
                'nama' => 'SMKS BINTANG SEMBILAN KEDOKANBUNDER KABUPATEN INDRAMAYU',
            ],
            '3064' => [
                'npsn' => '20216197',
                'nama' => 'SMAS P MKGR KERTASEMAYA KABUPATEN INDRAMAYU',
            ],
            '3065' => [
                'npsn' => '20269454',
                'nama' => 'SMKS NU KARANGANYAR KABUPATEN INDRAMAYU',
            ],
            '3066' => [
                'npsn' => '20233665',
                'nama' => 'SMAS PLUS PAGELARAN CISALAK KABUPATEN SUBANG',
            ],
            '3067' => [
                'npsn' => '69888854',
                'nama' => 'SMAN 1 LELEA KABUPATEN INDRAMAYU',
            ],
            '3068' => [
                'npsn' => '20219770',
                'nama' => 'SMAS PAHLAWAN TOHA KOTA BANDUNG',
            ],
            '3069' => [
                'npsn' => '20216198',
                'nama' => 'SMAS NU WIDASARI KABUPATEN INDRAMAYU',
            ],
            '3070' => [
                'npsn' => '69973159',
                'nama' => 'SMKN 1 KAPETAKAN KABUPATEN CIREBON',
            ],
            '3071' => [
                'npsn' => '20215971',
                'nama' => 'SMKS PGRI JATIBARANG KABUPATEN INDRAMAYU',
            ],
            '3072' => [
                'npsn' => '20268569',
                'nama' => 'SMKS ISLAM ASY SYAFIIYYAH KRANGKENG KABUPATEN INDRAMAYU',
            ],
            '3073' => [
                'npsn' => '20280593',
                'nama' => 'SLBN BAG A PAJAJARAN KOTA BANDUNG',
            ],
            '3074' => [
                'npsn' => '20215947',
                'nama' => 'SMKS TELADAN KERTASEMAYA KABUPATEN INDRAMAYU',
            ],
            '3075' => [
                'npsn' => '20245860',
                'nama' => 'SMAN 1 PABUARAN KABUPATEN SUBANG',
            ],
            '3076' => [
                'npsn' => '69786581',
                'nama' => 'SMKS YAPIN KERTASEMAYA KABUPATEN INDRAMAYU',
            ],
            '3077' => [
                'npsn' => '20245435',
                'nama' => 'SMAS NURUL YAQIN KABUPATEN BEKASI',
            ],
            '3078' => [
                'npsn' => '20219785',
                'nama' => 'SMAS NUSANTARA KOTA BANDUNG',
            ],
            '3079' => [
                'npsn' => '20255797',
                'nama' => 'SLBS PANCARAN IMAN KOTA BANDUNG',
            ],
            '3080' => [
                'npsn' => '69788548',
                'nama' => 'SMKS BUANA KARYA KOTA BANDUNG',
            ],
            '3081' => [
                'npsn' => '20257237',
                'nama' => 'SMKS AL GHIFARI BANYURESMI KABUPATEN GARUT',
            ],
            '3082' => [
                'npsn' => '69725567',
                'nama' => 'SMKS DARUL MUKMININ KABUPATEN GARUT',
            ],
            '3083' => [
                'npsn' => '69896875',
                'nama' => 'SLBS MUTIARA HATI KABUPATEN INDRAMAYU',
            ],
            '3084' => [
                'npsn' => '69979164',
                'nama' => 'SMAS HARAPAN KASIH KOTA BANDUNG',
            ],
            '3085' => [
                'npsn' => '20269170',
                'nama' => 'SMAS BINTANG MULIA KOTA BANDUNG',
            ],
            '3086' => [
                'npsn' => '20252452',
                'nama' => 'SMKS AL BAROKAH KABUPATEN SUKABUMI',
            ],
            '3087' => [
                'npsn' => '20241338',
                'nama' => 'SMKS FARMASI INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3088' => [
                'npsn' => '69728102',
                'nama' => 'SMKS AL HIKMAH KARANGAMPEL KABUPATEN INDRAMAYU',
            ],
            '3089' => [
                'npsn' => '20216200',
                'nama' => 'SMAS NU KAPLONGAN KABUPATEN INDRAMAYU',
            ],
            '3090' => [
                'npsn' => '20280596',
                'nama' => 'SLBS BAG BC YPLAB CIBADUYUT KOTA BANDUNG',
            ],
            '3091' => [
                'npsn' => '20219788',
                'nama' => 'SMAS LANGLANGBUANA KOTA BANDUNG',
            ],
            '3092' => [
                'npsn' => '69962773',
                'nama' => 'SMAS BINA MANDIRI KABUPATEN BANDUNG BARAT',
            ],
            '3093' => [
                'npsn' => '69953996',
                'nama' => 'SMKS BELA PERSADA SINDANGKERTA KABUPATEN BANDUNG BARAT',
            ],
            '3094' => [
                'npsn' => '70032331',
                'nama' => 'SMKS IT BINAUL UMMAH KUNINGAN KABUPATEN KUNINGAN',
            ],
            '3095' => [
                'npsn' => '69958271',
                'nama' => 'SMKS MADANI CIHAMPELAS KABUPATEN BANDUNG BARAT',
            ],
            '3096' => [
                'npsn' => '20228532',
                'nama' => 'SMKS HARAPAN BANGSA 2 CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '3097' => [
                'npsn' => '69761879',
                'nama' => 'SMKS BINA INFORMATIKA KOTA BOGOR',
            ],
            '3098' => [
                'npsn' => '20237414',
                'nama' => 'SMKN 3 KARAWANG KABUPATEN KARAWANG',
            ],
            '3099' => [
                'npsn' => '20220331',
                'nama' => 'SMAS PUI KOTA BOGOR',
            ],
            '3100' => [
                'npsn' => '20220543',
                'nama' => 'SLBS BAG BC AL IRSYAD AL ISLAMIYYAH KOTA BOGOR',
            ],
            '3101' => [
                'npsn' => '20235830',
                'nama' => 'SMKS 2 GRAFIKA DASA SEMESTA BOGOR KOTA BOGOR',
            ],
            '3102' => [
                'npsn' => '69899323',
                'nama' => 'SMKS PEMBANGUNAN BANDUNG BARAT KABUPATEN BANDUNG BARAT',
            ],
            '3103' => [
                'npsn' => '69946965',
                'nama' => 'SMKS CENDEKIA BATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '3104' => [
                'npsn' => '20268297',
                'nama' => 'SMKS KARYA PERJUANGAN KABUPATEN BANDUNG BARAT',
            ],
            '3105' => [
                'npsn' => '20267945',
                'nama' => 'SMKS FAJAR KENCANA KABUPATEN BANDUNG BARAT',
            ],
            '3106' => [
                'npsn' => '20219183',
                'nama' => 'SMKS KIMIA DHARMA BHAKTI BANDUNG KOTA BANDUNG',
            ],
            '3107' => [
                'npsn' => '69948890',
                'nama' => 'SLBS PELITA ADINDA B KOTA BANDUNG',
            ],
            '3108' => [
                'npsn' => '20219764',
                'nama' => 'SMAS PASUNDAN 4 BANDUNG KOTA BANDUNG',
            ],
            '3109' => [
                'npsn' => '20265547',
                'nama' => 'SMKS WIDYA DIRGANTARA BANDUNG KOTA BANDUNG',
            ],
            '3110' => [
                'npsn' => '70024550',
                'nama' => 'SMAS CITRA CEMARA KOTA BANDUNG',
            ],
            '3111' => [
                'npsn' => '20219273',
                'nama' => 'SMAS YPKKP BANDUNG KOTA BANDUNG',
            ],
            '3112' => [
                'npsn' => '20265549',
                'nama' => 'SMKS YPKKP KOTA BANDUNG',
            ],
            '3113' => [
                'npsn' => '20227955',
                'nama' => 'SMKS MAHARDHIKA BATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '3114' => [
                'npsn' => '69728242',
                'nama' => 'SMKS DHARMA BHAKTI INDONESIA KABUPATEN BANDUNG BARAT',
            ],
            '3115' => [
                'npsn' => '69830696',
                'nama' => 'SMKS PASUNDAN PERKASA DAARUL HIDAYAH KABUPATEN BANDUNG BARAT',
            ],
            '3116' => [
                'npsn' => '69883254',
                'nama' => 'SMAS CAHAYA RANCAMAYA KOTA BOGOR',
            ],
            '3117' => [
                'npsn' => '20220547',
                'nama' => 'SMAS ANANDA KOTA BOGOR',
            ],
            '3118' => [
                'npsn' => '20220313',
                'nama' => 'SMAS MARDI YUANA KOTA BOGOR',
            ],
            '3119' => [
                'npsn' => '69945341',
                'nama' => 'SMKS NIBA BUSINESS SCHOOL BOGOR KOTA BOGOR',
            ],
            '3120' => [
                'npsn' => '69859380',
                'nama' => 'SMKS BINA NUSANTARA KUNINGAN KABUPATEN KUNINGAN',
            ],
            '3121' => [
                'npsn' => 'NP018108',
                'nama' => 'SMKS DARUSSAADAH KABUPATEN BOGOR',
            ],
            '3122' => [
                'npsn' => '20268526',
                'nama' => 'SMKS FARMASI GALANG PARMASIA KOTA DEPOK',
            ],
            '3123' => [
                'npsn' => '69900391',
                'nama' => 'SMKS IT GLOBAL MADANI KOTA DEPOK',
            ],
            '3124' => [
                'npsn' => '20218375',
                'nama' => 'SMKS ABDI NEGARA 1 BEKASI KABUPATEN BEKASI',
            ],
            '3125' => [
                'npsn' => '69978339',
                'nama' => 'SMKS ATMANEGARA KABUPATEN BEKASI',
            ],
            '3126' => [
                'npsn' => '20223021',
                'nama' => 'SMAS YPI 45 KOTA BEKASI',
            ],
            '3127' => [
                'npsn' => '20253303',
                'nama' => 'SMAS PROKLAMASI 1945 KOTA BEKASI',
            ],
            '3128' => [
                'npsn' => '20223117',
                'nama' => 'SMKS ISLAM KADER BANGSA KOTA BEKASI',
            ],
            '3129' => [
                'npsn' => '20223092',
                'nama' => 'SMKS TOGA TERANG  BEKASI KOTA BEKASI',
            ],
            '3130' => [
                'npsn' => '20231713',
                'nama' => 'SMAS IT AL MARATUS SHOLIHAH KOTA BEKASI',
            ],
            '3131' => [
                'npsn' => '20269184',
                'nama' => 'SMKS FARMASI BEKASI 1 KOTA BEKASI',
            ],
            '3132' => [
                'npsn' => '20237364',
                'nama' => 'SMAS SUNAN GUNUNG JATI KABUPATEN KARAWANG',
            ],
            '3133' => [
                'npsn' => '69786318',
                'nama' => 'SMKS WIKRAMA I BEKASI KOTA BEKASI',
            ],
            '3134' => [
                'npsn' => '20233648',
                'nama' => 'SMAS LANG-LANG BUANA KABUPATEN SUBANG',
            ],
            '3135' => [
                'npsn' => '69904551',
                'nama' => 'SMKS BINA LESTARI PLUS KOTA BEKASI',
            ],
            '3136' => [
                'npsn' => '69948825',
                'nama' => 'SMKS PLUS YAPIMU KABUPATEN SUBANG',
            ],
            '3137' => [
                'npsn' => '69972962',
                'nama' => 'SMKS PELOPOR SUBANG KABUPATEN SUBANG',
            ],
            '3138' => [
                'npsn' => '20252975',
                'nama' => 'SMKS AL ANDINA KABUPATEN SUKABUMI',
            ],
            '3139' => [
                'npsn' => '20221564',
                'nama' => 'SMKS KARTIKA III 2 SUKABUMI KOTA SUKABUMI',
            ],
            '3140' => [
                'npsn' => 'NP960889',
                'nama' => 'SMKS LANGLANG BUANA SUKABUMI KABUPATEN SUKABUMI',
            ],
            '3141' => [
                'npsn' => '20221565',
                'nama' => 'SMKS KRISTEN BPK PENABUR SUKABUMI KOTA SUKABUMI',
            ],
            '3142' => [
                'npsn' => '20259622',
                'nama' => 'SLBS TOTAL SYSTEM KABUPATEN BANDUNG',
            ],
            '3143' => [
                'npsn' => '20227844',
                'nama' => 'SMAS KP 5 PADALARANG KABUPATEN BANDUNG BARAT',
            ],
            '3144' => [
                'npsn' => '20228561',
                'nama' => 'SMKS WYATA MANDALA 1 KABUPATEN BANDUNG BARAT',
            ],
            '3145' => [
                'npsn' => '20268298',
                'nama' => 'SMKS 3 LPPM RI BATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '3146' => [
                'npsn' => '69824832',
                'nama' => 'SMKS BHAKTI NUSANTARA NASIONAL KABUPATEN BANDUNG BARAT',
            ],
            '3147' => [
                'npsn' => '69946117',
                'nama' => 'SMKS KESENIAN MANDALA BUDAYA KABUPATEN BANDUNG BARAT',
            ],
            '3148' => [
                'npsn' => 'NP895376',
                'nama' => 'SMAS TERPADU RIYADLUL HUDA KABUPATEN BANDUNG BARAT',
            ],
            '3149' => [
                'npsn' => '20219736',
                'nama' => 'SMAS KARYA AGUNG KOTA BANDUNG',
            ],
            '3150' => [
                'npsn' => '20219750',
                'nama' => 'SMAS ASIA AFRIKA 55 KOTA BANDUNG',
            ],
            '3151' => [
                'npsn' => '20255301',
                'nama' => 'SMKS TADIKA PURI BANDUNG KOTA BANDUNG',
            ],
            '3152' => [
                'npsn' => '20265523',
                'nama' => 'SMKS NUGRAHA KOTA BANDUNG',
            ],
            '3153' => [
                'npsn' => '20265528',
                'nama' => 'SMKS BINA PROFESI KOTA BANDUNG',
            ],
            '3154' => [
                'npsn' => '20224138',
                'nama' => 'SMAS TUT WURI HANDAYANI KOTA CIMAHI',
            ],
            '3155' => [
                'npsn' => '69786297',
                'nama' => 'SMKS TI BINTANG HARAPAN KOTA CIMAHI',
            ],
            '3156' => [
                'npsn' => '69726561',
                'nama' => 'SMKS MEKAR RAHAYU KABUPATEN BANDUNG',
            ],
            '3157' => [
                'npsn' => '69761902',
                'nama' => 'SMKS FARMASI THIBBUN NABAWI KABUPATEN BANDUNG',
            ],
            '3158' => [
                'npsn' => '69956695',
                'nama' => 'SMKS AL KHATMA MANDALAHAJI KABUPATEN BANDUNG',
            ],
            '3159' => [
                'npsn' => '69762602',
                'nama' => 'SMKS PANGERAN ARIA SOERIA ATMADJA KABUPATEN SUMEDANG',
            ],
            '3160' => [
                'npsn' => '69954172',
                'nama' => 'SMKS AL GHOFUR KABUPATEN SUMEDANG',
            ],
            '3161' => [
                'npsn' => '20269060',
                'nama' => 'SMKS BINA PERSADA TERISI KABUPATEN INDRAMAYU',
            ],
            '3162' => [
                'npsn' => '69786582',
                'nama' => 'SMKS RISE SLEMAN KABUPATEN INDRAMAYU',
            ],
            '3163' => [
                'npsn' => '69946819',
                'nama' => 'SMAS AL QUDDUSU BANGODUA KABUPATEN INDRAMAYU',
            ],
            '3164' => [
                'npsn' => '69962019',
                'nama' => 'SMAS AL WAHHAB SUKAGUMIWANG KABUPATEN INDRAMAYU',
            ],
            '3165' => [
                'npsn' => '69794862',
                'nama' => 'SMKS SAUNG BALONG NUSANTARA KABUPATEN MAJALENGKA',
            ],
            '3166' => [
                'npsn' => '20271357',
                'nama' => 'SMKS PGRI KEDAWUNG KABUPATEN CIREBON',
            ],
            '3167' => [
                'npsn' => '69725989',
                'nama' => 'SMKS TAKHASUS QURAN AL HIKMAH DUKUPUNTANG KABUPATEN CIREBON',
            ],
            '3168' => [
                'npsn' => '20212942',
                'nama' => 'SMAS PERTIWI CILIMUS KABUPATEN KUNINGAN',
            ],
            '3169' => [
                'npsn' => '20212944',
                'nama' => 'SMAS KOSGORO KUNINGAN KABUPATEN KUNINGAN',
            ],
            '3170' => [
                'npsn' => '20212917',
                'nama' => 'SMKS KORPRI KUNINGAN KABUPATEN KUNINGAN',
            ],
            '3171' => [
                'npsn' => '69956492',
                'nama' => 'SMKS TEKNOLOGI MANUFAKTUR INDONESIA KUNINGAN KABUPATEN KUNINGAN',
            ],
            '3172' => [
                'npsn' => '60726461',
                'nama' => 'SMKS TEKNIK PERKAPALAN KOTA CIREBON',
            ],
            '3173' => [
                'npsn' => '20227486',
                'nama' => 'SMKS SMIP NUSANTARA GARUT KABUPATEN GARUT',
            ],
            '3174' => [
                'npsn' => '60730360',
                'nama' => 'SMKS BINA MANDIRI KABUPATEN GARUT',
            ],
            '3175' => [
                'npsn' => '69883218',
                'nama' => 'SMAS ASSALAM GARUT KOTA KABUPATEN GARUT',
            ],
            '3176' => [
                'npsn' => '69915320',
                'nama' => 'SMKS GALIH PUTERA INDONESIA KABUPATEN GARUT',
            ],
            '3177' => [
                'npsn' => '20268068',
                'nama' => 'SMKS YAYASAN 17 CIBALONG KABUPATEN TASIKMALAYA',
            ],
            '3178' => [
                'npsn' => '69758460',
                'nama' => 'SMKS GUNA BAKTI KABUPATEN TASIKMALAYA',
            ],
            '3179' => [
                'npsn' => '20211495',
                'nama' => 'SMKS BHAKTI PANUMBANGAN KABUPATEN CIAMIS',
            ],
            '3180' => [
                'npsn' => '69954332',
                'nama' => 'SMKS AT THIN KARANGNUNGGAL KABUPATEN TASIKMALAYA',
            ],
            '3181' => [
                'npsn' => '20254641',
                'nama' => 'SMKS INFORMATIKA CITRA BANGSA PANAWANGAN KABUPATEN CIAMIS',
            ],
            '3182' => [
                'npsn' => '20272114',
                'nama' => 'SMKS TAMTAMA LAKBOK KABUPATEN CIAMIS',
            ],
            '3183' => [
                'npsn' => '69972577',
                'nama' => 'SMKS BENC CIAMIS KABUPATEN CIAMIS',
            ],
            '3184' => [
                'npsn' => '69920653',
                'nama' => 'SMKS AL ISLAM NURUSSALAM CIDOLOG KABUPATEN CIAMIS',
            ],
            '3185' => [
                'npsn' => '20211528',
                'nama' => 'SMKS TUNAS BRILLIANT PARIGI KABUPATEN PANGANDARAN',
            ],
            '3186' => [
                'npsn' => '69889188',
                'nama' => 'SMKS INDUSTRI LOGAM PANGANDARAN KABUPATEN PANGANDARAN',
            ],
            '3187' => [
                'npsn' => '20229177',
                'nama' => 'SMAS TARBIYAH ISLAMIYAH KOTA DEPOK',
            ],
            '3188' => [
                'npsn' => '69883500',
                'nama' => 'SMAS ANNUR DARUNNAJAH 8 KABUPATEN BOGOR',
            ],
            '3189' => [
                'npsn' => '20229151',
                'nama' => 'SMAS PERINTIS DEPOK KOTA DEPOK',
            ],
            '3190' => [
                'npsn' => '20238016',
                'nama' => 'SMAS KARYA IMAN KABUPATEN BEKASI',
            ],
            '3191' => [
                'npsn' => '20238022',
                'nama' => 'SMAS SARIPUTRA KABUPATEN BEKASI',
            ],
            '3192' => [
                'npsn' => '20238023',
                'nama' => 'SMAS PGRI TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '3193' => [
                'npsn' => '20244054',
                'nama' => 'SMAS BINA PENDIDIKAN KABUPATEN BEKASI',
            ],
            '3194' => [
                'npsn' => '69895400',
                'nama' => 'SMAS BPK PENABUR HOLIS KOTA BANDUNG',
            ],
            '3195' => [
                'npsn' => '20219862',
                'nama' => 'SLBS BAG B SUMBERSARI KOTA BANDUNG',
            ],
            '3196' => [
                'npsn' => '20219761',
                'nama' => 'SLBS BAG C SUMBER SARI KOTA BANDUNG',
            ],
            '3197' => [
                'npsn' => '20275329',
                'nama' => 'SMKS NURUL HIDAYAH KOTA BANDUNG',
            ],
            '3198' => [
                'npsn' => '20219806',
                'nama' => 'SMAS MUHAMMADIYAH 2 KOTA BANDUNG',
            ],
            '3199' => [
                'npsn' => '20254075',
                'nama' => 'SMAS TAMAN HARAPAN 2 KOTA BEKASI',
            ],
            '3200' => [
                'npsn' => '20253971',
                'nama' => 'SMKS VINAMA 2 BEKASI KOTA BEKASI',
            ],
            '3201' => [
                'npsn' => '69870886',
                'nama' => 'SMAS KRISTEN PENABUR SUMMARECON BEKASI KOTA BEKASI',
            ],
            '3202' => [
                'npsn' => '20269158',
                'nama' => 'SMKS YAPURA 1 KABUPATEN BOGOR',
            ],
            '3203' => [
                'npsn' => '20258176',
                'nama' => 'SMKN 5 BEKASI KOTA BEKASI',
            ],
            '3204' => [
                'npsn' => '69964365',
                'nama' => 'SMAN 1 SALOPA KABUPATEN TASIKMALAYA',
            ],
            '3205' => [
                'npsn' => '69900111',
                'nama' => 'SMKN 4 DEPOK KOTA DEPOK',
            ],
            '3206' => [
                'npsn' => '20219246',
                'nama' => 'SMAN 19 BANDUNG KOTA BANDUNG',
            ],
            '3207' => [
                'npsn' => '20219143',
                'nama' => 'SMKN 5 BANDUNG KOTA BANDUNG',
            ],
            '3208' => [
                'npsn' => '69947763',
                'nama' => 'SMKN 13 BEKASI KOTA BEKASI',
            ],
            '3209' => [
                'npsn' => '20225282',
                'nama' => 'SMKN 1 BANJAR KOTA BANJAR',
            ],
            '3210' => [
                'npsn' => '20237998',
                'nama' => 'SMAN 5 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '3211' => [
                'npsn' => '69947344',
                'nama' => 'SMKS IT HIDAYATUL MUJAHIDIN KABUPATEN INDRAMAYU',
            ],
            '3212' => [
                'npsn' => '69754533',
                'nama' => 'SMKS SAYID SABIQ INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3213' => [
                'npsn' => '20215991',
                'nama' => 'SMAN 1 SINDANG KABUPATEN INDRAMAYU',
            ],
            '3214' => [
                'npsn' => '20252867',
                'nama' => 'SMKN 1 TAKOKAK KABUPATEN CIANJUR',
            ],
            '3215' => [
                'npsn' => '20208408',
                'nama' => 'SMAN RANCAKALONG KABUPATEN SUMEDANG',
            ],
            '3216' => [
                'npsn' => '20214965',
                'nama' => 'SMAN 1 DUKUPUNTANG KABUPATEN CIREBON',
            ],
            '3217' => [
                'npsn' => '20210718',
                'nama' => 'SMAN 1 TARAJU KABUPATEN TASIKMALAYA',
            ],
            '3218' => [
                'npsn' => '20271184',
                'nama' => 'SMKN 1 GUNUNG SINDUR KABUPATEN BOGOR',
            ],
            '3219' => [
                'npsn' => '20219249',
                'nama' => 'SMAN 23 BANDUNG KOTA BANDUNG',
            ],
            '3220' => [
                'npsn' => '20271075',
                'nama' => 'SMKS SUAKA SINDANG KABUPATEN INDRAMAYU',
            ],
            '3221' => [
                'npsn' => '69946817',
                'nama' => 'SMKS NURUR RAHMAH KABUPATEN INDRAMAYU',
            ],
            '3222' => [
                'npsn' => '69892476',
                'nama' => 'SMKS ISLAM DARUL FIKRI KABUPATEN INDRAMAYU',
            ],
            '3223' => [
                'npsn' => '69945455',
                'nama' => 'SMKS AL HIJRAH BONGAS KABUPATEN INDRAMAYU',
            ],
            '3224' => [
                'npsn' => '20233692',
                'nama' => 'SMKS TUNAS BANGSA (NASSA) CIATER KABUPATEN SUBANG',
            ],
            '3225' => [
                'npsn' => '20215978',
                'nama' => 'SMAN 1 KANDANGHAUR KABUPATEN INDRAMAYU',
            ],
            '3226' => [
                'npsn' => '69849088',
                'nama' => 'SMAN BABAKANCIKAO KABUPATEN PURWAKARTA',
            ],
            '3227' => [
                'npsn' => '20256636',
                'nama' => 'SMAS PASUNDAN MAJALAYA KABUPATEN BANDUNG',
            ],
            '3228' => [
                'npsn' => '20279827',
                'nama' => 'SMKN 1 CILIMUS KABUPATEN KUNINGAN',
            ],
            '3229' => [
                'npsn' => '20229759',
                'nama' => 'SMKS TEKNIK INDUSTRI KABUPATEN PURWAKARTA',
            ],
            '3230' => [
                'npsn' => '20215980',
                'nama' => 'SMAN 1 INDRAMAYU KABUPATEN INDRAMAYU',
            ],
            '3231' => [
                'npsn' => '70001826',
                'nama' => 'SMAN 1 CIGUGUR KABUPATEN PANGANDARAN',
            ],
            '3232' => [
                'npsn' => '20253190',
                'nama' => 'SMAN 2 CIKARANG UTARA KABUPATEN BEKASI',
            ],
            '3233' => [
                'npsn' => '20233754',
                'nama' => 'SMKS BANGUN BANGSA MANDIRI KABUPATEN INDRAMAYU',
            ],
            '3234' => [
                'npsn' => '20216212',
                'nama' => 'SMAS YSMP CANDRADIMUKA KABUPATEN INDRAMAYU',
            ],
            '3235' => [
                'npsn' => '20215950',
                'nama' => 'SMKS PGRI KANDANGHAUR KABUPATEN INDRAMAYU',
            ],
            '3236' => [
                'npsn' => '20215974',
                'nama' => 'SMAN 1 LOSARANG KABUPATEN INDRAMAYU',
            ],
            '3237' => [
                'npsn' => '69955278',
                'nama' => 'SMKN 1 KEMANG KABUPATEN BOGOR',
            ],
            '3238' => [
                'npsn' => '20212963',
                'nama' => 'SMAN 1 JALAKSANA KABUPATEN KUNINGAN',
            ],
            '3239' => [
                'npsn' => '20252392',
                'nama' => 'SMKN 1 LELES KABUPATEN CIANJUR',
            ],
            '3240' => [
                'npsn' => '20279928',
                'nama' => 'SMKN 1 CIPEUNDEUY KABUPATEN BANDUNG BARAT',
            ],
            '3241' => [
                'npsn' => '20212939',
                'nama' => 'SMAN 1 CIAWIGEBANG KABUPATEN KUNINGAN',
            ],
            '3242' => [
                'npsn' => '20253571',
                'nama' => 'SMKS ISLAM DARUL ISTIQOMAH KABUPATEN INDRAMAYU',
            ],
            '3243' => [
                'npsn' => '20218364',
                'nama' => 'SMAN 1 TAMBUN UTARA KABUPATEN BEKASI',
            ],
            '3244' => [
                'npsn' => '69774751',
                'nama' => 'SMKS IT RAUDHATUL ULUUM KABUPATEN SUBANG',
            ],
            '3245' => [
                'npsn' => '20267749',
                'nama' => 'SMKS BINA KUSUMAH KASOMALANG KABUPATEN SUBANG',
            ],
            '3246' => [
                'npsn' => '69725871',
                'nama' => 'SMKS CITRA TRI TUNGGAL GARMENT KASOMALANG KABUPATEN SUBANG',
            ],
            '3247' => [
                'npsn' => '69892759',
                'nama' => 'SMKS KARYA NASIONAL SINDANGKASIH KABUPATEN CIAMIS',
            ],
            '3248' => [
                'npsn' => '20254622',
                'nama' => 'SMKS GALUH RAHAYU SINDANGKASIH KABUPATEN CIAMIS',
            ],
            '3249' => [
                'npsn' => '20219326',
                'nama' => 'SMAN 8 BANDUNG KOTA BANDUNG',
            ],
            '3250' => [
                'npsn' => '20231337',
                'nama' => 'SMAN 1 SUKARAJA KABUPATEN BOGOR',
            ],
            '3251' => [
                'npsn' => '60726697',
                'nama' => 'SMAN 1 CIEMAS KABUPATEN SUKABUMI',
            ],
            '3252' => [
                'npsn' => '20251778',
                'nama' => 'SMAN 1 PARAKANSALAK KABUPATEN SUKABUMI',
            ],
            '3253' => [
                'npsn' => '69972642',
                'nama' => 'SMAN 2 PAGADEN KABUPATEN SUBANG',
            ],
            '3254' => [
                'npsn' => '20271677',
                'nama' => 'SMKS PLUS PAGELARAN CISALAK KABUPATEN SUBANG',
            ],
            '3255' => [
                'npsn' => '20252962',
                'nama' => 'SMKS BINA NUSANTARA CISALAK KABUPATEN SUBANG',
            ],
            '3256' => [
                'npsn' => '20244793',
                'nama' => 'SMAS IT BANI MASUM CISALAK KABUPATEN SUBANG',
            ],
            '3257' => [
                'npsn' => '20271852',
                'nama' => 'SMKS PERSADA CISALAK KABUPATEN SUBANG',
            ],
            '3258' => [
                'npsn' => '20233657',
                'nama' => 'SMAN 1 PATOKBEUSI KABUPATEN SUBANG',
            ],
            '3259' => [
                'npsn' => '20270931',
                'nama' => 'SLBN 2 SENTRA PKPLK KOTA CIMAHI',
            ],
            '3260' => [
                'npsn' => '20237995',
                'nama' => 'SMAN 2 TAMBUN UTARA KABUPATEN BEKASI',
            ],
            '3261' => [
                'npsn' => '20238043',
                'nama' => 'SMKS GEMA KASA KABUPATEN BEKASI',
            ],
            '3262' => [
                'npsn' => '20245436',
                'nama' => 'SMKN 1 TAMBUN UTARA KABUPATEN BEKASI',
            ],
            '3263' => [
                'npsn' => '69726019',
                'nama' => 'SMKS AL INTISAB KABUPATEN SUBANG',
            ],
            '3264' => [
                'npsn' => '20279814',
                'nama' => 'SMKS AL MUNIR KABUPATEN BEKASI',
            ],
            '3265' => [
                'npsn' => '20211508',
                'nama' => 'SMAN 1 PARIGI KABUPATEN PANGANDARAN',
            ],
            '3266' => [
                'npsn' => '20237987',
                'nama' => 'SMAN 1 CIKARANG PUSAT KABUPATEN BEKASI',
            ],
            '3267' => [
                'npsn' => '69849083',
                'nama' => 'SMKN 1 CAMPAKA KABUPATEN PURWAKARTA',
            ],
            '3268' => [
                'npsn' => '20256690',
                'nama' => 'SLBN LURAGUNG KABUPATEN KUNINGAN',
            ],
            '3269' => [
                'npsn' => '69858468',
                'nama' => 'SMKS YADIKA SOREANG KABUPATEN BANDUNG',
            ],
            '3270' => [
                'npsn' => '20208423',
                'nama' => 'SMAN JATINUNGGAL KABUPATEN SUMEDANG',
            ],
            '3271' => [
                'npsn' => '69918547',
                'nama' => 'SLBS TRI MEDYA KABUPATEN BANDUNG BARAT',
            ],
            '3272' => [
                'npsn' => '60728562',
                'nama' => 'SMKN 1 RAWAMERTA KABUPATEN KARAWANG',
            ],
            '3273' => [
                'npsn' => '20268872',
                'nama' => 'SMKN 1 JAPARA KABUPATEN KUNINGAN',
            ],
            '3274' => [
                'npsn' => '69892762',
                'nama' => 'SMKN 1 CIKALONG KABUPATEN TASIKMALAYA',
            ],
            '3275' => [
                'npsn' => '20244792',
                'nama' => 'SMAS TERPADU RAHMATIKA SAGALAHERANG KABUPATEN SUBANG',
            ],
            '3276' => [
                'npsn' => '20271649',
                'nama' => 'SMKS SAGALAHERANG KABUPATEN SUBANG',
            ],
            '3277' => [
                'npsn' => '20268268',
                'nama' => 'SMKS NURUL HUDA SAGALAHERANG KABUPATEN SUBANG',
            ],
            '3278' => [
                'npsn' => '20264707',
                'nama' => 'SLBS AL ISLAH PURWADADI KABUPATEN SUBANG',
            ],
            '3279' => [
                'npsn' => '20217038',
                'nama' => 'SMKS AL MUFTI KABUPATEN SUBANG',
            ],
            '3280' => [
                'npsn' => '20233668',
                'nama' => 'SMAS SUDIRMAN PURWADADI KABUPATEN SUBANG',
            ],
            '3281' => [
                'npsn' => '20221558',
                'nama' => 'SMAS YAYASAN AHMAD DJUWAENI KOTA SUKABUMI',
            ],
            '3282' => [
                'npsn' => '20221589',
                'nama' => 'SMAS KRISTEN BPK PENABUR KOTA SUKABUMI',
            ],
            '3283' => [
                'npsn' => '69921197',
                'nama' => 'SMKS IT AL FATH KOTA SUKABUMI',
            ],
            '3284' => [
                'npsn' => '20221586',
                'nama' => 'SMAS ADVENT SUKABUMI KOTA SUKABUMI',
            ],
            '3285' => [
                'npsn' => '20221617',
                'nama' => 'SMKS TAMANSISWA SUKABUMI KOTA SUKABUMI',
            ],
            '3286' => [
                'npsn' => '20215988',
                'nama' => 'SMAS PGRI PATROL KABUPATEN INDRAMAYU',
            ],
            '3287' => [
                'npsn' => '70026791',
                'nama' => 'SMAS JUARA WIRAUTAMA KABUPATEN INDRAMAYU',
            ],
            '3288' => [
                'npsn' => '69757153',
                'nama' => 'SMKS PRIORITY KOTA SUKABUMI',
            ],
            '3289' => [
                'npsn' => '20221618',
                'nama' => 'SMKS YASPI SYAMSUL ULUM SUKABUMI KOTA SUKABUMI',
            ],
            '3290' => [
                'npsn' => '20253909',
                'nama' => 'SMKS ULUL ALBAB SUKABUMI KOTA SUKABUMI',
            ],
            '3291' => [
                'npsn' => '20254980',
                'nama' => 'SMKS KOMPUTER ABDI BANGSA SUKABUMI KOTA SUKABUMI',
            ],
            '3292' => [
                'npsn' => '20253392',
                'nama' => 'SMKS NUSANTARA RAYA KOTA BANDUNG',
            ],
            '3293' => [
                'npsn' => '20272026',
                'nama' => 'SMKS MVP ARS INTERNASIONAL KOTA BANDUNG',
            ],
            '3294' => [
                'npsn' => '20219219',
                'nama' => 'SMKS VIJAYA KUSUMA KOTA BANDUNG',
            ],
            '3295' => [
                'npsn' => '20219226',
                'nama' => 'SMKS YP 17 BANDUNG KOTA BANDUNG',
            ],
            '3296' => [
                'npsn' => '20271834',
                'nama' => 'SMKN 1 SOREANG KABUPATEN BANDUNG',
            ],
            '3297' => [
                'npsn' => '70037137',
                'nama' => 'SMAS SAINS AL QUR`AN AL ABROR SUKRA KABUPATEN INDRAMAYU',
            ],
            '3298' => [
                'npsn' => '20217338',
                'nama' => 'SMAN 1 JATILUHUR KABUPATEN PURWAKARTA',
            ],
            '3299' => [
                'npsn' => '20258459',
                'nama' => 'SLBS YKSB CIJEUNGJING KABUPATEN CIAMIS',
            ],
            '3300' => [
                'npsn' => '20252460',
                'nama' => 'SMAN 1 GANTAR KABUPATEN INDRAMAYU',
            ],
            '3301' => [
                'npsn' => '20211563',
                'nama' => 'SMAN 1 BANJARSARI KABUPATEN CIAMIS',
            ],
            '3302' => [
                'npsn' => '20268183',
                'nama' => 'SMKS PLUS MEKARWANGI PAGADEN BARAT KABUPATEN SUBANG',
            ],
            '3303' => [
                'npsn' => '20257901',
                'nama' => 'SMKN PANCATENGAH KABUPATEN TASIKMALAYA',
            ],
            '3304' => [
                'npsn' => '69774531',
                'nama' => 'SMKS KESEHATAN PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '3305' => [
                'npsn' => '69759051',
                'nama' => 'SMKS TIK AL ISLAM KABUPATEN PURWAKARTA',
            ],
            '3306' => [
                'npsn' => '69876151',
                'nama' => 'SMKS AL HIKMAH KABUPATEN PURWAKARTA',
            ],
            '3307' => [
                'npsn' => '69888737',
                'nama' => 'SMKN 1 COMPRENG KABUPATEN SUBANG',
            ],
            '3308' => [
                'npsn' => '20216942',
                'nama' => 'SMAN 1 KALIJATI KABUPATEN SUBANG',
            ],
            '3309' => [
                'npsn' => '20269651',
                'nama' => 'SMKN 6 BEKASI KOTA BEKASI',
            ],
            '3310' => [
                'npsn' => '70003406',
                'nama' => 'SMAN 1 CISALAK KABUPATEN SUBANG',
            ],
            '3311' => [
                'npsn' => '20246369',
                'nama' => 'SMKN 4 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '3312' => [
                'npsn' => '20253263',
                'nama' => 'SMKS YAPIM COMPRENG KABUPATEN SUBANG',
            ],
            '3313' => [
                'npsn' => '60730390',
                'nama' => 'SMKS AL ISHLAH COMPRENG KABUPATEN SUBANG',
            ],
            '3314' => [
                'npsn' => '69816593',
                'nama' => 'SMKS CAHAYA RAYA BLANAKAN KABUPATEN SUBANG',
            ],
            '3315' => [
                'npsn' => '60724655',
                'nama' => 'SLBN KOTA BANJAR',
            ],
            '3316' => [
                'npsn' => '20227457',
                'nama' => 'SMAN 25 GARUT KABUPATEN GARUT',
            ],
            '3317' => [
                'npsn' => '69966267',
                'nama' => 'SMKN 2 CIPUNAGARA KABUPATEN SUBANG',
            ],
            '3318' => [
                'npsn' => '20233677',
                'nama' => 'SMKN 1 CIPUNAGARA KABUPATEN SUBANG',
            ],
            '3319' => [
                'npsn' => '20200587',
                'nama' => 'SMAN 1 JASINGA KABUPATEN BOGOR',
            ],
            '3320' => [
                'npsn' => '20206131',
                'nama' => 'SMAN 1 CIPEUNDEUY KABUPATEN BANDUNG BARAT',
            ],
            '3321' => [
                'npsn' => '20264425',
                'nama' => 'SMAN 1 KEDOKANBUNDER KABUPATEN INDRAMAYU',
            ],
            '3322' => [
                'npsn' => '20276107',
                'nama' => 'SLBN TAMANSARI KOTA TASIKMALAYA',
            ],
            '3323' => [
                'npsn' => '60728703',
                'nama' => 'SMKS PLUS ULUMUL QURAN KUNIR KABUPATEN SUBANG',
            ],
            '3324' => [
                'npsn' => '20267937',
                'nama' => 'SMKS TEXAR KARAWANG KABUPATEN KARAWANG',
            ],
            '3325' => [
                'npsn' => '20252393',
                'nama' => 'SMKS INDUSTRI MANDIRI KARAWANG KABUPATEN KARAWANG',
            ],
            '3326' => [
                'npsn' => '20217936',
                'nama' => 'SMKS TEXMACO KARAWANG KABUPATEN KARAWANG',
            ],
            '3327' => [
                'npsn' => '20233654',
                'nama' => 'SMAN 1 PUSAKANAGARA KABUPATEN SUBANG',
            ],
            '3328' => [
                'npsn' => '69954894',
                'nama' => 'SMAN 1 LEUWISADENG KABUPATEN BOGOR',
            ],
            '3329' => [
                'npsn' => '20231324',
                'nama' => 'SMAN 1 CIBUNGBULANG KABUPATEN BOGOR',
            ],
            '3330' => [
                'npsn' => '20227828',
                'nama' => 'SMAS BHAKTI MULYA BANJARAN KABUPATEN BANDUNG',
            ],
            '3331' => [
                'npsn' => '20254043',
                'nama' => 'SMAN 1 CAMPAKA KABUPATEN PURWAKARTA',
            ],
            '3332' => [
                'npsn' => '69954820',
                'nama' => 'SMAN 1 GABUSWETAN KABUPATEN INDRAMAYU',
            ],
            '3333' => [
                'npsn' => '69760562',
                'nama' => 'SMAN 18 BEKASI KOTA BEKASI',
            ],
            '3334' => [
                'npsn' => '20246376',
                'nama' => 'SMAS AT TAWAZUN KABUPATEN SUBANG',
            ],
            '3335' => [
                'npsn' => '20217371',
                'nama' => 'SMKS MUHAMMADIYAH CAMPAKA KABUPATEN PURWAKARTA',
            ],
            '3336' => [
                'npsn' => '69950346',
                'nama' => 'SMAN 21 BEKASI KOTA BEKASI',
            ],
            '3337' => [
                'npsn' => '20224600',
                'nama' => 'SMKN 2 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '3338' => [
                'npsn' => '20251992',
                'nama' => 'SLBN PAHLAWAN KABUPATEN INDRAMAYU',
            ],
            '3339' => [
                'npsn' => '20203739',
                'nama' => 'SMAN 1 CIANJUR KABUPATEN CIANJUR',
            ],
            '3340' => [
                'npsn' => '69770469',
                'nama' => 'SMKS KRIDA TARUNA SUKAMANDI KABUPATEN SUBANG',
            ],
            '3341' => [
                'npsn' => '20233685',
                'nama' => 'SMKS PELAYARAN 1 CIASEM KABUPATEN SUBANG',
            ],
            '3342' => [
                'npsn' => '20202254',
                'nama' => 'SMAN 1 PARUNG KUDA KABUPATEN SUKABUMI',
            ],
            '3343' => [
                'npsn' => '69757493',
                'nama' => 'SMKN 1 CIKAUM KABUPATEN SUBANG',
            ],
            '3344' => [
                'npsn' => '20271648',
                'nama' => 'SMKN 9 BEKASI KOTA BEKASI',
            ],
            '3345' => [
                'npsn' => '70004426',
                'nama' => 'SMKS PARAHYANGAN KABUPATEN SUBANG',
            ],
            '3346' => [
                'npsn' => '70036813',
                'nama' => 'SMKS TEKNOLOGI DAN VOKASIONAL KABUPATEN SUBANG',
            ],
            '3347' => [
                'npsn' => '20216940',
                'nama' => 'SMAN 1 PAMANUKAN KABUPATEN SUBANG',
            ],
            '3348' => [
                'npsn' => '20217461',
                'nama' => 'SMAN 1 BUNGURSARI KABUPATEN PURWAKARTA',
            ],
            '3349' => [
                'npsn' => '20270492',
                'nama' => 'SMAN 8 DEPOK KOTA DEPOK',
            ],
            '3350' => [
                'npsn' => '20232382',
                'nama' => 'SMAN 1 SUKAJAYA KABUPATEN BOGOR',
            ],
            '3351' => [
                'npsn' => '69849082',
                'nama' => 'SMKN BUNGURSARI KABUPATEN PURWAKARTA',
            ],
            '3352' => [
                'npsn' => '20264709',
                'nama' => 'SLBS PGRI KARYA WINAYA PAMANUKAN KABUPATEN SUBANG',
            ],
            '3353' => [
                'npsn' => '69915817',
                'nama' => 'SMAN 1 TEGALWARU KABUPATEN KARAWANG',
            ],
            '3354' => [
                'npsn' => '20219254',
                'nama' => 'SMAN 2 BANDUNG KOTA BANDUNG',
            ],
            '3355' => [
                'npsn' => '20229219',
                'nama' => 'SMKN 1 DEPOK KOTA DEPOK',
            ],
            '3356' => [
                'npsn' => '69989796',
                'nama' => 'SMKN BOJONGGAMBIR KABUPATEN TASIKMALAYA',
            ],
            '3357' => [
                'npsn' => '69964653',
                'nama' => 'SMAN 2 CIKARANG BARAT KABUPATEN BEKASI',
            ],
            '3358' => [
                'npsn' => '69955280',
                'nama' => 'SMKS MAARIF DARUSSULAEMAN KABUPATEN SUBANG',
            ],
            '3359' => [
                'npsn' => '20217027',
                'nama' => 'SMKS AL MUNAWAROH SUKASARI KABUPATEN SUBANG',
            ],
            '3360' => [
                'npsn' => '20237410',
                'nama' => 'SMKN 1 CILAMAYA KABUPATEN KARAWANG',
            ],
            '3361' => [
                'npsn' => '20229757',
                'nama' => 'SMKN 1 CIBATU KABUPATEN PURWAKARTA',
            ],
            '3362' => [
                'npsn' => '20276402',
                'nama' => 'SMKS INDONESIA MAS KABUPATEN KARAWANG',
            ],
            '3363' => [
                'npsn' => '20233679',
                'nama' => 'SMKN 1 PUSAKANAGARA KABUPATEN SUBANG',
            ],
            '3364' => [
                'npsn' => '58570036',
                'nama' => 'SLBN BAG A CITEUREUP KOTA CIMAHI',
            ],
            '3365' => [
                'npsn' => '20200887',
                'nama' => 'SMAN 1 PARUNG PANJANG KABUPATEN BOGOR',
            ],
            '3366' => [
                'npsn' => '20203872',
                'nama' => 'SMKN 1 CIANJUR KABUPATEN CIANJUR',
            ],
            '3367' => [
                'npsn' => '20253302',
                'nama' => 'SMKS NU GHOFARONA PUSAKANEGARA KABUPATEN SUBANG',
            ],
            '3368' => [
                'npsn' => '20217367',
                'nama' => 'SMKN 1 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '3369' => [
                'npsn' => '20268745',
                'nama' => 'SMKS SAINS TEKNOLOGI MANGGALA KABUPATEN PURWAKARTA',
            ],
            '3370' => [
                'npsn' => '20229657',
                'nama' => 'SMKS YPK PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '3371' => [
                'npsn' => '20217366',
                'nama' => 'SMKS BINA TARUNA PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '3372' => [
                'npsn' => '20237362',
                'nama' => 'SMAS BHINNEKA KARAWANG KABUPATEN KARAWANG',
            ],
            '3373' => [
                'npsn' => '69974158',
                'nama' => 'SMAN 4 SUBANG KABUPATEN SUBANG',
            ],
            '3374' => [
                'npsn' => '20219271',
                'nama' => 'SMAN 1 BANDUNG KOTA BANDUNG',
            ],
            '3375' => [
                'npsn' => '69881559',
                'nama' => 'SMAN 1 CISAYONG KABUPATEN TASIKMALAYA',
            ],
            '3376' => [
                'npsn' => '20217360',
                'nama' => 'SMAN 1 WANAYASA KABUPATEN PURWAKARTA',
            ],
            '3377' => [
                'npsn' => '69990973',
                'nama' => 'SMAS AL BADAR KABUPATEN PURWAKARTA',
            ],
            '3378' => [
                'npsn' => '20217785',
                'nama' => 'SMAN 1 JATISARI KABUPATEN KARAWANG',
            ],
            '3379' => [
                'npsn' => '20227909',
                'nama' => 'SMAN 1 SINDANGKERTA KABUPATEN BANDUNG BARAT',
            ],
            '3380' => [
                'npsn' => '20271276',
                'nama' => 'SMKS MADQA IQLIMA KABUPATEN PURWAKARTA',
            ],
            '3381' => [
                'npsn' => '20229747',
                'nama' => 'SMAN 1 SUKASARI KABUPATEN PURWAKARTA',
            ],
            '3382' => [
                'npsn' => '20258169',
                'nama' => 'SLBS YAKALIMU KABUPATEN PURWAKARTA',
            ],
            '3383' => [
                'npsn' => '20253778',
                'nama' => 'SMKN 1 GEBANG KABUPATEN CIREBON',
            ],
            '3384' => [
                'npsn' => '69849086',
                'nama' => 'SMKN MANIIS KABUPATEN PURWAKARTA',
            ],
            '3385' => [
                'npsn' => '69849091',
                'nama' => 'SMKN 1 DARANGDAN KABUPATEN PURWAKARTA',
            ],
            '3386' => [
                'npsn' => '60728563',
                'nama' => 'SMKN 1 BANYUSARI KABUPATEN KARAWANG',
            ],
            '3387' => [
                'npsn' => '69946486',
                'nama' => 'SMKS NAGRAK KABUPATEN PURWAKARTA',
            ],
            '3388' => [
                'npsn' => '69964626',
                'nama' => 'SMAN 1 BANYUSARI KABUPATEN KARAWANG',
            ],
            '3389' => [
                'npsn' => '20217408',
                'nama' => 'SMAN 1 DARANGDAN KABUPATEN PURWAKARTA',
            ],
            '3390' => [
                'npsn' => '20216005',
                'nama' => 'SMKN 1 ANJATAN KABUPATEN INDRAMAYU',
            ],
            '3391' => [
                'npsn' => '20251911',
                'nama' => 'SMAN 1 MANIIS KABUPATEN PURWAKARTA',
            ],
            '3392' => [
                'npsn' => '20258501',
                'nama' => 'SMKS TARUNA KARYA 76 NURUL FALAH KARAWANG KABUPATEN KARAWANG',
            ],
            '3393' => [
                'npsn' => '20253277',
                'nama' => 'SMKN 1 BOJONG KABUPATEN PURWAKARTA',
            ],
            '3394' => [
                'npsn' => '20267759',
                'nama' => 'SMKN PETERNAKAN LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '3395' => [
                'npsn' => '20223043',
                'nama' => 'SMAN 6 BEKASI KOTA BEKASI',
            ],
            '3396' => [
                'npsn' => '69948040',
                'nama' => 'SMKS WIBAWA TARUNA KABUPATEN PURWAKARTA',
            ],
            '3397' => [
                'npsn' => '70005449',
                'nama' => 'SMKS ANSORUNA HADE RANCAGE KABUPATEN PURWAKARTA',
            ],
            '3398' => [
                'npsn' => '20253160',
                'nama' => 'SLBS BAG ABCD BUDI UTAMA KABUPATEN PURWAKARTA',
            ],
            '3399' => [
                'npsn' => '20229650',
                'nama' => 'SMKS CITRA BANGSA KABUPATEN PURWAKARTA',
            ],
            '3400' => [
                'npsn' => '20229749',
                'nama' => 'SMAS PASUNDAN PLERED KABUPATEN PURWAKARTA',
            ],
            '3401' => [
                'npsn' => '20258505',
                'nama' => 'SMKS DWI WARNA KABUPATEN KARAWANG',
            ],
            '3402' => [
                'npsn' => '20275988',
                'nama' => 'SMKS TEKNOLOGI SAIN DAN AGROBISNIS KABUPATEN PURWAKARTA',
            ],
            '3403' => [
                'npsn' => '20252207',
                'nama' => 'SMKN 1 KARANGTENGAH KABUPATEN CIANJUR',
            ],
            '3404' => [
                'npsn' => '20271076',
                'nama' => 'SMKN 1 ARAHAN KABUPATEN INDRAMAYU',
            ],
            '3405' => [
                'npsn' => '20253346',
                'nama' => 'SMKS BIMA NUSANTARA KABUPATEN KARAWANG',
            ],
            '3406' => [
                'npsn' => '20237408',
                'nama' => 'SMKS TI MUHAMMADIYAH CIKAMPEK KABUPATEN KARAWANG',
            ],
            '3407' => [
                'npsn' => '20237434',
                'nama' => 'SMKS TRI MITRA KARAWANG KABUPATEN KARAWANG',
            ],
            '3408' => [
                'npsn' => '20253328',
                'nama' => 'SMKS KHARISMAS NUSANTARA KABUPATEN PURWAKARTA',
            ],
            '3409' => [
                'npsn' => '69948682',
                'nama' => 'SMKS PLUS TUNAS BANGSA KABUPATEN PURWAKARTA',
            ],
            '3410' => [
                'npsn' => '69734349',
                'nama' => 'SMAS AT TAUBAH KABUPATEN KARAWANG',
            ],
            '3411' => [
                'npsn' => '69934151',
                'nama' => 'SMKS TARUNA KARYA MANDIRI KABUPATEN KARAWANG',
            ],
            '3412' => [
                'npsn' => '69958770',
                'nama' => 'SMKS INOTEK TEMPURAN KABUPATEN KARAWANG',
            ],
            '3413' => [
                'npsn' => '69752266',
                'nama' => 'SMKN KARANGJAYA KABUPATEN TASIKMALAYA',
            ],
            '3414' => [
                'npsn' => '20221561',
                'nama' => 'SMAN 3 SUKABUMI KOTA SUKABUMI',
            ],
            '3415' => [
                'npsn' => '20233759',
                'nama' => 'SMKN 1 BONGAS KABUPATEN INDRAMAYU',
            ],
            '3416' => [
                'npsn' => '20212949',
                'nama' => 'SMAN 1 CINIRU KABUPATEN KUNINGAN',
            ],
            '3417' => [
                'npsn' => '69734354',
                'nama' => 'SMKN 1 PURWASARI KABUPATEN KARAWANG',
            ],
            '3418' => [
                'npsn' => '69786714',
                'nama' => 'SLBN KABUPATEN KARAWANG',
            ],
            '3419' => [
                'npsn' => '69897020',
                'nama' => 'SMKS KIM BINA CENDEKIA KABUPATEN PURWAKARTA',
            ],
            '3420' => [
                'npsn' => '69956667',
                'nama' => 'SMAS AL MURIDIYYAH KABUPATEN PURWAKARTA',
            ],
            '3421' => [
                'npsn' => '69946508',
                'nama' => 'SMKS TEXMACO PURWASARI KABUPATEN KARAWANG',
            ],
            '3422' => [
                'npsn' => '20237395',
                'nama' => 'SMKS AL MUNAWAR KARAWANG KABUPATEN KARAWANG',
            ],
            '3423' => [
                'npsn' => '70036284',
                'nama' => 'SMAS IT INSAN HARAPAN KABUPATEN KARAWANG',
            ],
            '3424' => [
                'npsn' => '20200685',
                'nama' => 'SMAN 1 CIAWI BOGOR KABUPATEN BOGOR',
            ],
            '3425' => [
                'npsn' => '20237453',
                'nama' => 'SMAN 1 CIAMPEL KABUPATEN KARAWANG',
            ],
            '3426' => [
                'npsn' => '70008409',
                'nama' => 'SMKS SURYACIPTA KABUPATEN KARAWANG',
            ],
            '3427' => [
                'npsn' => '69862575',
                'nama' => 'SMKS TARBIYATUL ULUM KABUPATEN KARAWANG',
            ],
            '3428' => [
                'npsn' => '69972349',
                'nama' => 'SMKS NAHDLATUL ULAMA ATTARBIYYAH KABUPATEN KARAWANG',
            ],
            '3429' => [
                'npsn' => '20217795',
                'nama' => 'SMKS PGRI TELAGASARI KABUPATEN KARAWANG',
            ],
            '3430' => [
                'npsn' => '69958769',
                'nama' => 'SMKS ISP KARAWANG KABUPATEN KARAWANG',
            ],
            '3431' => [
                'npsn' => '20223042',
                'nama' => 'SMAN 7 BEKASI KOTA BEKASI',
            ],
            '3432' => [
                'npsn' => '69989078',
                'nama' => 'SMAS ISLAM AL AZHAR 17 GALUH MAS KARAWANG KABUPATEN KARAWANG',
            ],
            '3433' => [
                'npsn' => '20252842',
                'nama' => 'SMAS SLAMET RIYADI KABUPATEN KARAWANG',
            ],
            '3434' => [
                'npsn' => '69888584',
                'nama' => 'SMKS MERAH PUTIH KABUPATEN CIANJUR',
            ],
            '3435' => [
                'npsn' => '20216944',
                'nama' => 'SMAN 1 CIPEUNDEUY KABUPATEN SUBANG',
            ],
            '3436' => [
                'npsn' => '20252388',
                'nama' => 'SMKN 1 BOJONGPICUNG KABUPATEN CIANJUR',
            ],
            '3437' => [
                'npsn' => '20218358',
                'nama' => 'SMAN 1 CABANGBUNGIN KABUPATEN BEKASI',
            ],
            '3438' => [
                'npsn' => '20202259',
                'nama' => 'SMAN 1 SAGARANTEN KABUPATEN SUKABUMI',
            ],
            '3439' => [
                'npsn' => '20219312',
                'nama' => 'SMAN 4 BANDUNG KOTA BANDUNG',
            ],
            '3440' => [
                'npsn' => '69857939',
                'nama' => 'SMAN 13 DEPOK KOTA DEPOK',
            ],
            '3441' => [
                'npsn' => '20214795',
                'nama' => 'SMKN 1 MUNDU KABUPATEN CIREBON',
            ],
            '3442' => [
                'npsn' => '20223044',
                'nama' => 'SMAN 5 BEKASI KOTA BEKASI',
            ],
            '3443' => [
                'npsn' => '69788581',
                'nama' => 'SMAN 2 SINGAPARNA KABUPATEN TASIKMALAYA',
            ],
            '3444' => [
                'npsn' => '20202251',
                'nama' => 'SMAN WARUNG KIARA KABUPATEN SUKABUMI',
            ],
            '3445' => [
                'npsn' => '20258252',
                'nama' => 'SLBN SURADE KABUPATEN SUKABUMI',
            ],
            '3446' => [
                'npsn' => '20217764',
                'nama' => 'SMAN 3 KARAWANG KABUPATEN KARAWANG',
            ],
            '3447' => [
                'npsn' => '20213887',
                'nama' => 'SMAN 1 BANTARUJEG KABUPATEN MAJALENGKA',
            ],
            '3448' => [
                'npsn' => '20217479',
                'nama' => 'SMAN 1 CIBATU KABUPATEN PURWAKARTA',
            ],
            '3449' => [
                'npsn' => '20253307',
                'nama' => 'SMKN 3 BEKASI KOTA BEKASI',
            ],
            '3450' => [
                'npsn' => '20258445',
                'nama' => 'SMKN 1 SUKALARANG KABUPATEN SUKABUMI',
            ],
            '3451' => [
                'npsn' => '20276403',
                'nama' => 'SMKS PGRI LEMAHABANG KABUPATEN KARAWANG',
            ],
            '3452' => [
                'npsn' => '69984091',
                'nama' => 'SMKS LENTERA BANGSA 2 KABUPATEN KARAWANG',
            ],
            '3453' => [
                'npsn' => '20271865',
                'nama' => 'SMKS YAPINAS KABUPATEN KARAWANG',
            ],
            '3454' => [
                'npsn' => '69904549',
                'nama' => 'SMAN 1 CIBUAYA KABUPATEN KARAWANG',
            ],
            '3455' => [
                'npsn' => '69873937',
                'nama' => 'SMKS YASPIF KABUPATEN KARAWANG',
            ],
            '3456' => [
                'npsn' => '20217364',
                'nama' => 'SMKS BHAKTI PRAJA PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '3457' => [
                'npsn' => '69734356',
                'nama' => 'SMKN 1 TIRTAJAYA KABUPATEN KARAWANG',
            ],
            '3458' => [
                'npsn' => '20245313',
                'nama' => 'SMKS FARMASI PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '3459' => [
                'npsn' => '20237459',
                'nama' => 'SMKS ASSHIDDIQIYAH KARAWANG KABUPATEN KARAWANG',
            ],
            '3460' => [
                'npsn' => '20253343',
                'nama' => 'SMKS PASUNDAN CILAMAYA KABUPATEN KARAWANG',
            ],
            '3461' => [
                'npsn' => '20258288',
                'nama' => 'SLBN KAPTEN HALIM KABUPATEN PURWAKARTA',
            ],
            '3462' => [
                'npsn' => '69957014',
                'nama' => 'SMKS MITRA JAYA TIRTAJAYA KABUPATEN KARAWANG',
            ],
            '3463' => [
                'npsn' => '69983844',
                'nama' => 'SMAS ISLAM AL AZHAR 21 SUKABUMI KOTA SUKABUMI',
            ],
            '3464' => [
                'npsn' => '20221591',
                'nama' => 'SMAS MUHAMMADIYAH KOTA SUKABUMI',
            ],
            '3465' => [
                'npsn' => '20270889',
                'nama' => 'SMKS PASIM PLUS SUKABUMI KOTA SUKABUMI',
            ],
            '3466' => [
                'npsn' => '20233653',
                'nama' => 'SMAN 1 COMPRENG KABUPATEN SUBANG',
            ],
            '3467' => [
                'npsn' => '69965194',
                'nama' => 'SMAN 2 LEMBANG KABUPATEN BANDUNG BARAT',
            ],
            '3468' => [
                'npsn' => '20200602',
                'nama' => 'SMAN 1 PARUNG KABUPATEN BOGOR',
            ],
            '3469' => [
                'npsn' => '20203745',
                'nama' => 'SMAN 1 SINDANG BARANG KABUPATEN CIANJUR',
            ],
            '3470' => [
                'npsn' => '20237992',
                'nama' => 'SMAN 1 SETU KABUPATEN BEKASI',
            ],
            '3471' => [
                'npsn' => '69867994',
                'nama' => 'SMKS KARYA MANDIRI KABUPATEN KARAWANG',
            ],
            '3472' => [
                'npsn' => '20258507',
                'nama' => 'SMKS SAINTEK NURUL MUSLIMIN KARAWANG KABUPATEN KARAWANG',
            ],
            '3473' => [
                'npsn' => '20265274',
                'nama' => 'SMAS MATHLA UL ANWAR KABUPATEN KARAWANG',
            ],
            '3474' => [
                'npsn' => '20203740',
                'nama' => 'SMAN 1 CIBEBER KABUPATEN CIANJUR',
            ],
            '3475' => [
                'npsn' => '70036745',
                'nama' => 'SMAS RAUDHATUL IRFAN KABUPATEN KARAWANG',
            ],
            '3476' => [
                'npsn' => '69965414',
                'nama' => 'SMAN 2 CIBITUNG KABUPATEN BEKASI',
            ],
            '3477' => [
                'npsn' => '20209213',
                'nama' => 'SMAN 24 GARUT KABUPATEN GARUT',
            ],
            '3478' => [
                'npsn' => '69900178',
                'nama' => 'SMKS MADANI KABUPATEN CIANJUR',
            ],
            '3479' => [
                'npsn' => '70000014',
                'nama' => 'SMKS ANNIHAYAH KABUPATEN KARAWANG',
            ],
            '3480' => [
                'npsn' => '20265293',
                'nama' => 'SMKS NIHAYATUL AMAL KABUPATEN KARAWANG',
            ],
            '3481' => [
                'npsn' => '20254135',
                'nama' => 'SMKN 1 CIOMAS KABUPATEN BOGOR',
            ],
            '3482' => [
                'npsn' => '69971541',
                'nama' => 'SMKS 10 NOVEMBER CIBITUNG KABUPATEN BEKASI',
            ],
            '3483' => [
                'npsn' => '69889095',
                'nama' => 'SMKS DM SOLUSI BANGSA KABUPATEN BEKASI',
            ],
            '3484' => [
                'npsn' => '69882372',
                'nama' => 'SMKS INFORMATIKA BISNIS KABUPATEN BEKASI',
            ],
            '3485' => [
                'npsn' => '69734352',
                'nama' => 'SMKN 1 JAYAKERTA KABUPATEN KARAWANG',
            ],
            '3486' => [
                'npsn' => '20212954',
                'nama' => 'SMAN 1 CIBINGBIN KABUPATEN KUNINGAN',
            ],
            '3487' => [
                'npsn' => '20247316',
                'nama' => 'SMAN 2 CIKAMPEK KABUPATEN KARAWANG',
            ],
            '3488' => [
                'npsn' => '70011821',
                'nama' => 'SLBN 1 KARAWANG BARAT KABUPATEN KARAWANG',
            ],
            '3489' => [
                'npsn' => '20255284',
                'nama' => 'SMKN 1 SUKRA KABUPATEN INDRAMAYU',
            ],
            '3490' => [
                'npsn' => '20216941',
                'nama' => 'SMAN 1 PAGADEN KABUPATEN SUBANG',
            ],
            '3491' => [
                'npsn' => '20237387',
                'nama' => 'SMAS ISLAM NURUSSALAM KABUPATEN KARAWANG',
            ],
            '3492' => [
                'npsn' => '69752261',
                'nama' => 'SMKN SUKARESIK KABUPATEN TASIKMALAYA',
            ],
            '3493' => [
                'npsn' => '20237426',
                'nama' => 'SMKS NURUL ANSOR JAYAKERTA KABUPATEN KARAWANG',
            ],
            '3494' => [
                'npsn' => '20276408',
                'nama' => 'SMKS RISMATEK KABUPATEN KARAWANG',
            ],
            '3495' => [
                'npsn' => '20221566',
                'nama' => 'SMKS MUHAMMADIYAH 1 SUKABUMI KOTA SUKABUMI',
            ],
            '3496' => [
                'npsn' => '20221590',
                'nama' => 'SMAS MARDI YUANA KOTA SUKABUMI',
            ],
            '3497' => [
                'npsn' => '20221562',
                'nama' => 'SMAN 4 SUKABUMI KOTA SUKABUMI',
            ],
            '3498' => [
                'npsn' => '26017001',
                'nama' => 'SLBN BAG B CICENDO KOTA BANDUNG',
            ],
            '3499' => [
                'npsn' => '69972643',
                'nama' => 'SMKS IT NURUL ILMI KABUPATEN KARAWANG',
            ],
            '3500' => [
                'npsn' => '20265290',
                'nama' => 'SMKS PGRI 3 KARAWANG KABUPATEN KARAWANG',
            ],
            '3501' => [
                'npsn' => '69979166',
                'nama' => 'SMKS MANDALLA ENTREPRENEUR SCHOOL KABUPATEN KARAWANG',
            ],
            '3502' => [
                'npsn' => '20237425',
                'nama' => 'SMKS LENTERA BANGSA KARAWANG KABUPATEN KARAWANG',
            ],
            '3503' => [
                'npsn' => '69757214',
                'nama' => 'SMKS PERSADA KOTA SUKABUMI',
            ],
            '3504' => [
                'npsn' => '20221575',
                'nama' => 'SMAS TAMAN SISWA KOTA SUKABUMI',
            ],
            '3505' => [
                'npsn' => '69946479',
                'nama' => 'SMAS EDU GLOBAL KOTA BANDUNG',
            ],
            '3506' => [
                'npsn' => '20219297',
                'nama' => 'SMKS KARTIKA XIX 1 KOTA BANDUNG',
            ],
            '3507' => [
                'npsn' => '20217781',
                'nama' => 'SMAN 1 TELAGASARI KABUPATEN KARAWANG',
            ],
            '3508' => [
                'npsn' => '69857935',
                'nama' => 'SMKS IPTEK AL IKHWAN KABUPATEN KARAWANG',
            ],
            '3509' => [
                'npsn' => '20217788',
                'nama' => 'SMAN 1 PEDES KABUPATEN KARAWANG',
            ],
            '3510' => [
                'npsn' => '20252150',
                'nama' => 'SMKS TARUNA GANESHA KOTA BANDUNG',
            ],
            '3511' => [
                'npsn' => '20219776',
                'nama' => 'SMAS PLUS AL GHIFARI BANDUNG KOTA BANDUNG',
            ],
            '3512' => [
                'npsn' => '20219301',
                'nama' => 'SMKS IGASAR PINDAD BANDUNG KOTA BANDUNG',
            ],
            '3513' => [
                'npsn' => '20272033',
                'nama' => 'SMKS PRIMA GRAFIKA KOTA BANDUNG',
            ],
            '3514' => [
                'npsn' => '20265518',
                'nama' => 'SMAS ALFA CENTAURI KOTA BANDUNG',
            ],
            '3515' => [
                'npsn' => '20219316',
                'nama' => 'SMAN 7 BANDUNG KOTA BANDUNG',
            ],
            '3516' => [
                'npsn' => '20200886',
                'nama' => 'SMAN 1 CIGOMBONG KABUPATEN BOGOR',
            ],
            '3517' => [
                'npsn' => '20229746',
                'nama' => 'SMAN 1 PASAWAHAN KABUPATEN PURWAKARTA',
            ],
            '3518' => [
                'npsn' => '69960705',
                'nama' => 'SMKS INDONESIA MAS 2 KABUPATEN KARAWANG',
            ],
            '3519' => [
                'npsn' => '69947173',
                'nama' => 'SMKS TEKNOLOGI KABUPATEN KARAWANG',
            ],
            '3520' => [
                'npsn' => '20268195',
                'nama' => 'SMKS WIRASABA KARAWANG KABUPATEN KARAWANG',
            ],
            '3521' => [
                'npsn' => '20218357',
                'nama' => 'SMAN 1 CIBARUSAH KABUPATEN BEKASI',
            ],
            '3522' => [
                'npsn' => '69963098',
                'nama' => 'SMAN 1 CIDAHU KABUPATEN SUKABUMI',
            ],
            '3523' => [
                'npsn' => '20265521',
                'nama' => 'SMAS PGRI 3 BANDUNG KOTA BANDUNG',
            ],
            '3524' => [
                'npsn' => '69915810',
                'nama' => 'SMAN 1 MAJALAYA KABUPATEN KARAWANG',
            ],
            '3525' => [
                'npsn' => '69734350',
                'nama' => 'SMKN 1 CILEBAR KABUPATEN KARAWANG',
            ],
            '3526' => [
                'npsn' => '20237465',
                'nama' => 'SMKN 1 RENGASDENGKLOK KABUPATEN KARAWANG',
            ],
            '3527' => [
                'npsn' => '20217361',
                'nama' => 'SMAN 2 PURWAKARTA KABUPATEN PURWAKARTA',
            ],
            '3528' => [
                'npsn' => '20237469',
                'nama' => 'SMKS YISCA CILAMAYA KABUPATEN KARAWANG',
            ],
            '3529' => [
                'npsn' => '20237402',
                'nama' => 'SMKS IPTEK CILAMAYA KABUPATEN KARAWANG',
            ],
            '3530' => [
                'npsn' => '20253131',
                'nama' => 'SMKS BHAKTI KENCANA BANDUNG KOTA BANDUNG',
            ],
            '3531' => [
                'npsn' => '20219868',
                'nama' => 'SLBS BAG ABC BINA MANDIRI KOTA BANDUNG',
            ],
            '3532' => [
                'npsn' => '20219718',
                'nama' => 'SMAS GUNA DHARMA KOTA BANDUNG',
            ],
            '3533' => [
                'npsn' => '70011502',
                'nama' => 'SMAS INTELIGENSIA KOTA BANDUNG',
            ],
            '3534' => [
                'npsn' => '20224112',
                'nama' => 'SMAN 5 CIMAHI KOTA CIMAHI',
            ],
            '3535' => [
                'npsn' => '20206209',
                'nama' => 'SMAN 1 MARGAHAYU KABUPATEN BANDUNG',
            ],
            '3536' => [
                'npsn' => '20219239',
                'nama' => 'SMAN 14 BANDUNG KOTA BANDUNG',
            ],
            '3537' => [
                'npsn' => '20217784',
                'nama' => 'SMAN 1 CILAMAYA KABUPATEN KARAWANG',
            ],
            '3538' => [
                'npsn' => '20219257',
                'nama' => 'SMAN 10 BANDUNG KOTA BANDUNG',
            ],
            '3539' => [
                'npsn' => '69958940',
                'nama' => 'SMKS MUHAMMADIYAH 2 CIKAMPEK KABUPATEN KARAWANG',
            ],
            '3540' => [
                'npsn' => '69946696',
                'nama' => 'SMKS INSAN TAZAKKA KABUPATEN KARAWANG',
            ],
            '3541' => [
                'npsn' => '70024784',
                'nama' => 'SMAS ISLAM TERPADU KHARISMAS DARUSSALAM KABUPATEN KARAWANG',
            ],
            '3542' => [
                'npsn' => '20265291',
                'nama' => 'SMKS PEMBANGUNAN GLOBAL KABUPATEN KARAWANG',
            ],
            '3543' => [
                'npsn' => '20272027',
                'nama' => 'SMKS YASRI KOTA BANDUNG',
            ],
            '3544' => [
                'npsn' => '20272029',
                'nama' => 'SMKS BAKTI PERSADA KOTA BANDUNG',
            ],
            '3545' => [
                'npsn' => '20272023',
                'nama' => 'SMAS DARUL QUR AN KOTA BANDUNG',
            ],
            '3546' => [
                'npsn' => '20219735',
                'nama' => 'SMAS KARYA PEMB 2 KOTA BANDUNG',
            ],
            '3547' => [
                'npsn' => '20275334',
                'nama' => 'SMKS GANTRA KOTA BANDUNG',
            ],
            '3548' => [
                'npsn' => '20272032',
                'nama' => 'SMKS CIPTA SKILL KOTA BANDUNG',
            ],
            '3549' => [
                'npsn' => '69759252',
                'nama' => 'SMKS BINA SARANA CENDEKIA KOTA BANDUNG',
            ],
            '3550' => [
                'npsn' => '20265544',
                'nama' => 'SMKS SUMATRA 40 KOTA BANDUNG',
            ],
            '3551' => [
                'npsn' => '20237370',
                'nama' => 'SMAN 1 BATUJAYA KABUPATEN KARAWANG',
            ],
            '3552' => [
                'npsn' => '69807800',
                'nama' => 'SMKS MINHAJUL FALAH KABUPATEN KARAWANG',
            ],
            '3553' => [
                'npsn' => '20237457',
                'nama' => 'SMKS AL IKHLAS BATUJAYA KABUPATEN KARAWANG',
            ],
            '3554' => [
                'npsn' => '70029781',
                'nama' => 'SLBS BAG BC CAHAYA BANGSA KABUPATEN KARAWANG',
            ],
            '3555' => [
                'npsn' => '60728561',
                'nama' => 'SMKS MATHLAUL ANWAR KABUPATEN KARAWANG',
            ],
            '3556' => [
                'npsn' => '20219296',
                'nama' => 'SMKS KARYA BHAKTI KOTA BANDUNG',
            ],
            '3557' => [
                'npsn' => '20219864',
                'nama' => 'SLBS BAG B SILIH ASIH KOTA BANDUNG',
            ],
            '3558' => [
                'npsn' => '60726116',
                'nama' => 'SMKS AMAL BAKTI KOTA BANDUNG',
            ],
            '3559' => [
                'npsn' => '20219732',
                'nama' => 'SMAS KIFAYATUL ACHYAR KOTA BANDUNG',
            ],
            '3560' => [
                'npsn' => '20265517',
                'nama' => 'SMAS AL ISLAM KOTA BANDUNG',
            ],
            '3561' => [
                'npsn' => '69734353',
                'nama' => 'SMKN 1 BATUJAYA KABUPATEN KARAWANG',
            ],
            '3562' => [
                'npsn' => '20217793',
                'nama' => 'SMKS RISTEK KARAWANG KABUPATEN KARAWANG',
            ],
            '3563' => [
                'npsn' => '20217769',
                'nama' => 'SMKS AL HURRIYYAH KUTAWALUYA KABUPATEN KARAWANG',
            ],
            '3564' => [
                'npsn' => '20246723',
                'nama' => 'SMKS PERBANKAN INDONESIA KABUPATEN KARAWANG',
            ],
            '3565' => [
                'npsn' => '69958814',
                'nama' => 'SMKS AL INAYAH KUTAMUKTI KABUPATEN KARAWANG',
            ],
            '3566' => [
                'npsn' => '20265534',
                'nama' => 'SMKS MEDIKACOM KOTA BANDUNG',
            ],
            '3567' => [
                'npsn' => '20237379',
                'nama' => 'SMAN 1 RENGASDENGKLOK KABUPATEN KARAWANG',
            ],
            '3568' => [
                'npsn' => '20219309',
                'nama' => 'SMAN 5 BANDUNG KOTA BANDUNG',
            ],
            '3569' => [
                'npsn' => '20202267',
                'nama' => 'SMAN 1 PELABUHAN RATU KABUPATEN SUKABUMI',
            ],
            '3570' => [
                'npsn' => '70002720',
                'nama' => 'SMAN 14 DEPOK KOTA DEPOK',
            ],
            '3571' => [
                'npsn' => '20221563',
                'nama' => 'SMAN 5 SUKABUMI KOTA SUKABUMI',
            ],
            '3572' => [
                'npsn' => '20237990',
                'nama' => 'SMAN 1 KEDUNGWARINGIN KABUPATEN BEKASI',
            ],
            '3573' => [
                'npsn' => '20258095',
                'nama' => 'SMKN 4 BOGOR KOTA BOGOR',
            ],
            '3574' => [
                'npsn' => '70002721',
                'nama' => 'SLBN KOTA SUKABUMI',
            ],
            '3575' => [
                'npsn' => '20223032',
                'nama' => 'SMAN 11 BEKASI KOTA BEKASI',
            ],
            '3576' => [
                'npsn' => '20216939',
                'nama' => 'SMAN 1 PURWADADI KABUPATEN SUBANG',
            ],
            '3577' => [
                'npsn' => '20209242',
                'nama' => 'SMKN 8 GARUT KABUPATEN GARUT',
            ],
            '3578' => [
                'npsn' => '20231331',
                'nama' => 'SMAN 1 GUNUNG SINDUR KABUPATEN BOGOR',
            ],
            '3579' => [
                'npsn' => '20231720',
                'nama' => 'SMAN 14 BEKASI KOTA BEKASI',
            ],
            '3580' => [
                'npsn' => '20213892',
                'nama' => 'SMAN 1 SUKAHAJI KABUPATEN MAJALENGKA',
            ],
            '3581' => [
                'npsn' => '20227463',
                'nama' => 'SMAN 4 GARUT KABUPATEN GARUT',
            ],
            '3582' => [
                'npsn' => '69772519',
                'nama' => 'SMKN 1 BINONG KABUPATEN SUBANG',
            ],
            '3583' => [
                'npsn' => '69990565',
                'nama' => 'SMAN 4 BABELAN KABUPATEN BEKASI',
            ],
            '3584' => [
                'npsn' => '20227900',
                'nama' => 'SMAN 1 NAGREG KABUPATEN BANDUNG',
            ],
            '3585' => [
                'npsn' => '20235619',
                'nama' => 'SMAN 1 CIMALAKA KABUPATEN SUMEDANG',
            ],
            '3586' => [
                'npsn' => '69753909',
                'nama' => 'SMAN 29 GARUT KABUPATEN GARUT',
            ],
            '3587' => [
                'npsn' => '69851425',
                'nama' => 'SMAN 10 DEPOK KOTA DEPOK',
            ],
            '3588' => [
                'npsn' => '20258187',
                'nama' => 'SLBN BUDI UTAMA KOTA CIREBON',
            ],
            '3589' => [
                'npsn' => '20203723',
                'nama' => 'SMAN 2 CIANJUR KABUPATEN CIANJUR',
            ],
            '3590' => [
                'npsn' => '20271071',
                'nama' => 'SMKN 1 WIDASARI KABUPATEN INDRAMAYU',
            ],
            '3591' => [
                'npsn' => '20222175',
                'nama' => 'SMKN 2 CIREBON KOTA CIREBON',
            ],
            '3592' => [
                'npsn' => '20218351',
                'nama' => 'SMAN 1 TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '3593' => [
                'npsn' => '20254165',
                'nama' => 'SMAN 2 BABELAN KABUPATEN BEKASI',
            ],
            '3594' => [
                'npsn' => '69967685',
                'nama' => 'SMKN 1 ARJASARI KABUPATEN BANDUNG',
            ],
            '3595' => [
                'npsn' => '69761934',
                'nama' => 'SMAN 1 PASIRKUDA KABUPATEN CIANJUR',
            ],
            '3596' => [
                'npsn' => '20203733',
                'nama' => 'SMAN 1 SUKARESMI KABUPATEN CIANJUR',
            ],
            '3597' => [
                'npsn' => '20233758',
                'nama' => 'SMKN 1 BALONGAN KABUPATEN INDRAMAYU',
            ],
            '3598' => [
                'npsn' => '69904939',
                'nama' => 'SMKS DARUTTAQWA KABUPATEN BEKASI',
            ],
            '3599' => [
                'npsn' => '20247328',
                'nama' => 'SMKS DARUL AMAL KABUPATEN BEKASI',
            ],
            '3600' => [
                'npsn' => '20251918',
                'nama' => 'SMAS SABILUL MUHTADIN KABUPATEN BEKASI',
            ],
            '3601' => [
                'npsn' => '69928480',
                'nama' => 'SMAS BINA UMAT KABUPATEN BEKASI',
            ],
            '3602' => [
                'npsn' => '20252161',
                'nama' => 'SMKN 6 KUNINGAN KABUPATEN KUNINGAN',
            ],
            '3603' => [
                'npsn' => '20246453',
                'nama' => 'SMAS AT TAQWA 02 BABELAN KABUPATEN BEKASI',
            ],
            '3604' => [
                'npsn' => '69940449',
                'nama' => 'SMKS IT ATTAQWA 9 KABUPATEN BEKASI',
            ],
            '3605' => [
                'npsn' => '20219262',
                'nama' => 'SMAS ALLOYSIUS 2 KOTA BANDUNG',
            ],
            '3606' => [
                'npsn' => '20280598',
                'nama' => 'SLBS AUTIS PRANANDA KOTA BANDUNG',
            ],
            '3607' => [
                'npsn' => '20219166',
                'nama' => 'SMKS MADYA BANDUNG KOTA BANDUNG',
            ],
            '3608' => [
                'npsn' => '70029866',
                'nama' => 'SMAS DAARUT TAUHIID BOARDING SCHOOL PUTRI KOTA BANDUNG',
            ],
            '3609' => [
                'npsn' => '20219725',
                'nama' => 'SMAS KARTIKA XIX 2 KOTA BANDUNG',
            ],
            '3610' => [
                'npsn' => '20219752',
                'nama' => 'SMAS BINA DHARMA 1 BANDUNG KOTA BANDUNG',
            ],
            '3611' => [
                'npsn' => '20219790',
                'nama' => 'SMAS LABORATORIUM PERCONTOHAN UPI KOTA BANDUNG',
            ],
            '3612' => [
                'npsn' => '69929094',
                'nama' => 'SMKS PRESIDEN CIREBON KOTA CIREBON',
            ],
            '3613' => [
                'npsn' => '20222356',
                'nama' => 'SMAS SANTA MARIA 1 CIREBON KOTA CIREBON',
            ],
            '3614' => [
                'npsn' => '20253885',
                'nama' => 'SMKS MUHAMMADIYAH KOTA CIREBON',
            ],
            '3615' => [
                'npsn' => '20279943',
                'nama' => 'SLBN RAHARJA TANJUNGSARI KABUPATEN SUMEDANG',
            ],
            '3616' => [
                'npsn' => '20209351',
                'nama' => 'SMAN 26 GARUT KABUPATEN GARUT',
            ],
            '3617' => [
                'npsn' => '20237985',
                'nama' => 'SMAN 1 CIBITUNG KABUPATEN BEKASI',
            ],
            '3618' => [
                'npsn' => '20208394',
                'nama' => 'SMKN 2 SUMEDANG KABUPATEN SUMEDANG',
            ],
            '3619' => [
                'npsn' => '20214980',
                'nama' => 'SMAN 1 GEGESIK KABUPATEN CIREBON',
            ],
            '3620' => [
                'npsn' => '20219146',
                'nama' => 'SMKN 2 BANDUNG KOTA BANDUNG',
            ],
            '3621' => [
                'npsn' => '20219250',
                'nama' => 'SMAN 22 BANDUNG KOTA BANDUNG',
            ],
            '3622' => [
                'npsn' => '70029938',
                'nama' => 'SMAS ISLAM TERPADU ULIL ALBAB KABUPATEN BEKASI',
            ],
            '3623' => [
                'npsn' => '20268951',
                'nama' => 'SMAS IT DARUL MUHSININ KABUPATEN BEKASI',
            ],
            '3624' => [
                'npsn' => '70011076',
                'nama' => 'SMKS CIBITUNG 1 KABUPATEN BEKASI',
            ],
            '3625' => [
                'npsn' => '69892336',
                'nama' => 'SMKS IT FITRAH HANNIAH KABUPATEN BEKASI',
            ],
            '3626' => [
                'npsn' => '69889007',
                'nama' => 'SMKS NURUL AINI KABUPATEN BEKASI',
            ],
            '3627' => [
                'npsn' => '20238039',
                'nama' => 'SMKS CBT BEKASI KABUPATEN BEKASI',
            ],
            '3628' => [
                'npsn' => '20238004',
                'nama' => 'SMAS AL MUTTAQIN KABUPATEN BEKASI',
            ],
            '3629' => [
                'npsn' => '20219877',
                'nama' => 'SLBS BAG BC BINA KASIH KOTA BANDUNG',
            ],
            '3630' => [
                'npsn' => '20219866',
                'nama' => 'SLBS ARRAHMAN KOTA BANDUNG',
            ],
            '3631' => [
                'npsn' => '20237993',
                'nama' => 'SMAN 1 TAMBELANG KABUPATEN BEKASI',
            ],
            '3632' => [
                'npsn' => '20238568',
                'nama' => 'SMAN 1 SERANG BARU KABUPATEN BEKASI',
            ],
            '3633' => [
                'npsn' => '20206145',
                'nama' => 'SMAN 1 CIPARAY KABUPATEN BANDUNG',
            ],
            '3634' => [
                'npsn' => '20218376',
                'nama' => 'SMKN 1 TAMBELANG KABUPATEN BEKASI',
            ],
            '3635' => [
                'npsn' => '69857938',
                'nama' => 'SMAN 12 DEPOK KOTA DEPOK',
            ],
            '3636' => [
                'npsn' => '69753773',
                'nama' => 'SMAS ISLAM PUTRA DARMA KABUPATEN BEKASI',
            ],
            '3637' => [
                'npsn' => '20253014',
                'nama' => 'SMKN 1 SURADE KABUPATEN SUKABUMI',
            ],
            '3638' => [
                'npsn' => '20222174',
                'nama' => 'SMKN 1 CIREBON KOTA CIREBON',
            ],
            '3639' => [
                'npsn' => '20238019',
                'nama' => 'SMAS ISLAM NUR EL GHAZY KABUPATEN BEKASI',
            ],
            '3640' => [
                'npsn' => '20280586',
                'nama' => 'SMKS BINTANG TIMUR KABUPATEN BEKASI',
            ],
            '3641' => [
                'npsn' => '69774853',
                'nama' => 'SMKS IT ATTAQWA 07 KABUPATEN BEKASI',
            ],
            '3642' => [
                'npsn' => '20254013',
                'nama' => 'SMKS 10 NOVEMBER TAMBUN SELATAN KABUPATEN BEKASI',
            ],
            '3643' => [
                'npsn' => '20280610',
                'nama' => 'SMAS PLUS BINAAUL UMMAH KABUPATEN BEKASI',
            ],
            '3644' => [
                'npsn' => '69882371',
                'nama' => 'SMKS BINA ILMU MANDIRI KABUPATEN BEKASI',
            ],
            '3645' => [
                'npsn' => '20238044',
                'nama' => 'SMKS INSAN MADANI KABUPATEN BEKASI',
            ],
            '3646' => [
                'npsn' => '20218354',
                'nama' => 'SMAN 1 PEBAYURAN KABUPATEN BEKASI',
            ],
            '3647' => [
                'npsn' => '20253130',
                'nama' => 'SMAS IT AL BINA KABUPATEN BEKASI',
            ],
            '3648' => [
                'npsn' => '20251802',
                'nama' => 'SMAS TUNAS BANGSA PEBAYURAN KABUPATEN BEKASI',
            ],
            '3649' => [
                'npsn' => '69917680',
                'nama' => 'SMKS BINA PUTRA KABUPATEN BEKASI',
            ],
            '3650' => [
                'npsn' => '69775290',
                'nama' => 'SMKS BINA PRESTASI MANDIRI KABUPATEN BEKASI',
            ],
            '3651' => [
                'npsn' => '69774804',
                'nama' => 'SMKS TEKNOLOGI PELITA KARYA KABUPATEN BEKASI',
            ],
            '3652' => [
                'npsn' => '20238011',
                'nama' => 'SMAS DARUL MUALLAMAH KABUPATEN BEKASI',
            ],
            '3653' => [
                'npsn' => '20237991',
                'nama' => 'SMAN 1 MUARAGEMBONG KABUPATEN BEKASI',
            ],
            '3654' => [
                'npsn' => '20271985',
                'nama' => 'SMAS AL JIHAD KABUPATEN BOGOR',
            ],
            '3655' => [
                'npsn' => '69927320',
                'nama' => 'SMKS GEMA BANGSA KABUPATEN BOGOR',
            ],
            '3656' => [
                'npsn' => '10648861',
                'nama' => 'SMKS PUTRA PELITA KABUPATEN BOGOR',
            ],
            '3657' => [
                'npsn' => '69893379',
                'nama' => 'SMKS ZENIA RAHMAT KABUPATEN BOGOR',
            ],
            '3658' => [
                'npsn' => '20202284',
                'nama' => 'SMKS BINA MANDIRI SUKABUMI KABUPATEN SUKABUMI',
            ],
            '3659' => [
                'npsn' => '20238048',
                'nama' => 'SMKS MUTIARA JAYA KABUPATEN BEKASI',
            ],
            '3660' => [
                'npsn' => '69893233',
                'nama' => 'SMAS AL MAHAD KABUPATEN BEKASI',
            ],
            '3661' => [
                'npsn' => '69967710',
                'nama' => 'SMKN 1 CIPONGKOR KABUPATEN BANDUNG BARAT',
            ],
            '3662' => [
                'npsn' => '69734083',
                'nama' => 'SMKS CIMAHI KABUPATEN SUKABUMI',
            ],
            '3663' => [
                'npsn' => '69964418',
                'nama' => 'SMKS SURYA PERTIWI 2 KABUPATEN BANDUNG BARAT',
            ],
            '3664' => [
                'npsn' => '20229824',
                'nama' => 'SMKS DARUL FIKRI CIPONGKOR KABUPATEN BANDUNG BARAT',
            ],
            '3665' => [
                'npsn' => '69950746',
                'nama' => 'SMKS AL FATIH CIPONGKOR KABUPATEN BANDUNG BARAT',
            ],
            '3666' => [
                'npsn' => '20200601',
                'nama' => 'SMAN 1 LEUWILIANG KABUPATEN BOGOR',
            ],
            '3667' => [
                'npsn' => '20231315',
                'nama' => 'SMAS MANDALA KABUPATEN BOGOR',
            ],
            '3668' => [
                'npsn' => '20231313',
                'nama' => 'SMAS MAFAZAH KABUPATEN BOGOR',
            ],
            '3669' => [
                'npsn' => '20253120',
                'nama' => 'SMAS MUHAMMADIYAH PURASEDA KABUPATEN BOGOR',
            ],
            '3670' => [
                'npsn' => '69824824',
                'nama' => 'SMAS PLUS LIWAUL FURQON KABUPATEN BOGOR',
            ],
            '3671' => [
                'npsn' => '20200669',
                'nama' => 'SMAS PGRI LEUWILIANG KABUPATEN BOGOR',
            ],
            '3672' => [
                'npsn' => '20251852',
                'nama' => 'SMKS BINA PEMUDA CIHAMPELAS KABUPATEN BANDUNG BARAT',
            ],
            '3673' => [
                'npsn' => '69947229',
                'nama' => 'SMKS BANDUNG BARAT 2 CIHAMPELAS KABUPATEN BANDUNG BARAT',
            ],
            '3674' => [
                'npsn' => '20268303',
                'nama' => 'SMKS YPII CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '3675' => [
                'npsn' => '20227902',
                'nama' => 'SMAN 1 BATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '3676' => [
                'npsn' => '69733996',
                'nama' => 'SMKS KESFAM BATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '3677' => [
                'npsn' => '20268296',
                'nama' => 'SMKS JABIR AL HAYYAN KABUPATEN BANDUNG BARAT',
            ],
            '3678' => [
                'npsn' => '20268292',
                'nama' => 'SMAS DARUL FALAH BATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '3679' => [
                'npsn' => '20251779',
                'nama' => 'SMAS AL BIDAYAH NBATUJAJAR KABUPATEN BANDUNG BARAT',
            ],
            '3680' => [
                'npsn' => '20246466',
                'nama' => 'SMKS ISLAM DARURROHMAN KABUPATEN BEKASI',
            ],
            '3681' => [
                'npsn' => '20270709',
                'nama' => 'SMAS INFORMATIKA KABUPATEN BEKASI',
            ],
            '3682' => [
                'npsn' => '20246383',
                'nama' => 'SMAS AT TAQWA 03 KABUPATEN BEKASI',
            ],
            '3683' => [
                'npsn' => '20247172',
                'nama' => 'SMAS YASTI CISAAT KABUPATEN SUKABUMI',
            ],
            '3684' => [
                'npsn' => '69883649',
                'nama' => 'SMKS IT AL JUNAEDIYAH KABUPATEN SUKABUMI',
            ],
            '3685' => [
                'npsn' => '20252022',
                'nama' => 'SMKS MUHAMMADIYAH 3 CISAAT KABUPATEN SUKABUMI',
            ],
            '3686' => [
                'npsn' => '69968748',
                'nama' => 'SMKS ATMARIVA KABUPATEN BANDUNG BARAT',
            ],
            '3687' => [
                'npsn' => '69964337',
                'nama' => 'SMAS AL AZIZ ISLAMIC BOARDING SCHOOL KABUPATEN BANDUNG BARAT',
            ],
            '3688' => [
                'npsn' => '69881356',
                'nama' => 'SMKS PENA NUGRAHA INDONESIA KABUPATEN BANDUNG BARAT',
            ],
            '3689' => [
                'npsn' => '69825148',
                'nama' => 'SMKS BINA MASHLAHAT KABUPATEN BANDUNG BARAT',
            ],
            '3690' => [
                'npsn' => '60728854',
                'nama' => 'SMAS TERPADU AL KANDIYAS KABUPATEN BANDUNG BARAT',
            ],
            '3691' => [
                'npsn' => '20227866',
                'nama' => 'SMAS MUSLIMIN CIPONGKOR KABUPATEN BANDUNG BARAT',
            ],
            '3692' => [
                'npsn' => '69950745',
                'nama' => 'SMKS KARYA PEMBANGUNAN 2 CIPONGKOR KABUPATEN BANDUNG BARAT',
            ],
            '3693' => [
                'npsn' => '20219882',
                'nama' => 'SLBS BAG C SILIH ASIH KOTA BANDUNG',
            ],
            '3694' => [
                'npsn' => '20265541',
                'nama' => 'SMKS PLUS AL GHIPARI KOTA BANDUNG',
            ],
            '3695' => [
                'npsn' => '20219270',
                'nama' => 'SMAS KRIDA NUSANTARA KOTA BANDUNG',
            ],
            '3696' => [
                'npsn' => '20280599',
                'nama' => 'SLBS BAG ABCDE LOB KOTA BANDUNG',
            ],
            '3697' => [
                'npsn' => '20219723',
                'nama' => 'SMAS BPN KOTA BANDUNG',
            ],
            '3698' => [
                'npsn' => '69895412',
                'nama' => 'SMAS KUNTUM CEMERLANG KOTA BANDUNG',
            ],
            '3699' => [
                'npsn' => '20219771',
                'nama' => 'SMAS NUSANTARA 1 KOTA BANDUNG',
            ],
            '3700' => [
                'npsn' => '20254612',
                'nama' => 'SMAN 1 NANGGUNG KABUPATEN BOGOR',
            ],
            '3701' => [
                'npsn' => '69754780',
                'nama' => 'SMKS CENDIKIA MUSLIM KABUPATEN BOGOR',
            ],
            '3702' => [
                'npsn' => '20267653',
                'nama' => 'SLBS BAG BC BINA WIDYA KABUPATEN BANDUNG BARAT',
            ],
            '3703' => [
                'npsn' => '20231334',
                'nama' => 'SMAN 1 PAMIJAHAN KABUPATEN BOGOR',
            ],
            '3704' => [
                'npsn' => '20271764',
                'nama' => 'SMKS BUMI PUTERA KABUPATEN BOGOR',
            ],
            '3705' => [
                'npsn' => '20231268',
                'nama' => 'SMAS AL IJTIHAD KABUPATEN BOGOR',
            ],
            '3706' => [
                'npsn' => '69899711',
                'nama' => 'SMAS PEMBERDAYAAN UMMAT AN NAHL KABUPATEN BOGOR',
            ],
            '3707' => [
                'npsn' => '20227854',
                'nama' => 'SMAS LEPPESA CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '3708' => [
                'npsn' => '20227865',
                'nama' => 'SMAS MUSLIMIN CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '3709' => [
                'npsn' => '20228531',
                'nama' => 'SMKS HARAPAN BANGSA 1 CILILIN KABUPATEN BANDUNG BARAT',
            ],
            '3710' => [
                'npsn' => '20258513',
                'nama' => 'SMKS MIFTAAHUSH SHUDUUR KABUPATEN BOGOR',
            ],
            '3711' => [
                'npsn' => '69754226',
                'nama' => 'SMKS MADANI 2 KABUPATEN BOGOR',
            ],
            '3712' => [
                'npsn' => '69880254',
                'nama' => 'SMKS PANDU 2 KABUPATEN BOGOR',
            ],
            '3713' => [
                'npsn' => '69918550',
                'nama' => 'SMAS MUSLIMIN RONGGA KABUPATEN BANDUNG BARAT',
            ],
            '3714' => [
                'npsn' => '69756137',
                'nama' => 'SMKN 1 RONGGA KABUPATEN BANDUNG BARAT',
            ],
            '3715' => [
                'npsn' => '20267642',
                'nama' => 'SMAN 1 RONGGA KABUPATEN BANDUNG BARAT',
            ],
            '3716' => [
                'npsn' => '20232377',
                'nama' => 'SMAN 1 DRAMAGA KABUPATEN BOGOR',
            ],
            '3717' => [
                'npsn' => '20269064',
                'nama' => 'SMKS GLOBIN KABUPATEN BOGOR',
            ],
            '3718' => [
                'npsn' => '20231292',
                'nama' => 'SMAS DARUSSALAM PURWASARI KABUPATEN BOGOR',
            ],
            '3719' => [
                'npsn' => '20231308',
                'nama' => 'SMAS KORNITA KABUPATEN BOGOR',
            ],
            '3720' => [
                'npsn' => '10648862',
                'nama' => 'SMKS YAFAHI KABUPATEN BOGOR',
            ],
            '3721' => [
                'npsn' => '20232419',
                'nama' => 'SMKS AL HADIID 2 CILEUNGSI BOGOR KABUPATEN BOGOR',
            ],
            '3722' => [
                'npsn' => '20231288',
                'nama' => 'SMAS DAARUL ISTIQOOMAH KABUPATEN BOGOR',
            ],
            '3723' => [
                'npsn' => '69981358',
                'nama' => 'SMKS YAPAN 1 CIAMPEA KABUPATEN BOGOR',
            ],
            '3724' => [
                'npsn' => '20232337',
                'nama' => 'SMAS HANURA KABUPATEN BOGOR',
            ],
            '3725' => [
                'npsn' => '69755462',
                'nama' => 'SMKS MADANI KABUPATEN BOGOR',
            ],
            '3726' => [
                'npsn' => '69895414',
                'nama' => 'SMKS KOMPUTER INDONESIA KABUPATEN BOGOR',
            ],
            '3727' => [
                'npsn' => '20200670',
                'nama' => 'SMAS DARUTAFSIR KABUPATEN BOGOR',
            ],
            '3728' => [
                'npsn' => '20276162',
                'nama' => 'SMKS GEO INFORMATIKA KABUPATEN BOGOR',
            ],
            '3729' => [
                'npsn' => '20200606',
                'nama' => 'SMKS PELITA CIAMPEA 1 KABUPATEN BOGOR',
            ],
            '3730' => [
                'npsn' => '20200607',
                'nama' => 'SMKS PELITA CIAMPEA 2 KABUPATEN BOGOR',
            ],
            '3731' => [
                'npsn' => '20253293',
                'nama' => 'SMKS FARMASI GALENIUM KABUPATEN BOGOR',
            ],
            '3732' => [
                'npsn' => '69725856',
                'nama' => 'SMKS BINTANG PELAJAR KABUPATEN BOGOR',
            ],
            '3733' => [
                'npsn' => '69947222',
                'nama' => 'SMKS BIPMAN KABUPATEN BOGOR',
            ],
            '3734' => [
                'npsn' => '20231426',
                'nama' => 'SMKS PANDU BOGOR KABUPATEN BOGOR',
            ],
            '3735' => [
                'npsn' => '20200595',
                'nama' => 'SMKS PERTIWI CIBUNGBULANG BOGOR KABUPATEN BOGOR',
            ],
            '3736' => [
                'npsn' => '20232322',
                'nama' => 'SMAS BUMI SEJAHTERA KABUPATEN BOGOR',
            ],
            '3737' => [
                'npsn' => '69954269',
                'nama' => 'SMKS MATUSHA DWI ELANG KABUPATEN BOGOR',
            ],
            '3738' => [
                'npsn' => '69893524',
                'nama' => 'SMKS TEKNOMEDIKA 2 KABUPATEN BOGOR',
            ],
            '3739' => [
                'npsn' => '20272049',
                'nama' => 'SMKS AL HIDAYAH KABUPATEN BOGOR',
            ],
            '3740' => [
                'npsn' => '20232441',
                'nama' => 'SMKS BUMI SEJAHTERA KABUPATEN BOGOR',
            ],
            '3741' => [
                'npsn' => '20254845',
                'nama' => 'SMKS CAHAYA KABUPATEN BOGOR',
            ],
            '3742' => [
                'npsn' => '20271915',
                'nama' => 'SMKS AULIA KABUPATEN BOGOR',
            ],
            '3743' => [
                'npsn' => '69774887',
                'nama' => 'SMKS YAPMA KABUPATEN BOGOR',
            ],
            '3744' => [
                'npsn' => '10648860',
                'nama' => 'SMKS KESEHATAN PELITA KABUPATEN BOGOR',
            ],
            '3745' => [
                'npsn' => '70029710',
                'nama' => 'SMKS TI BAZMA KABUPATEN BOGOR',
            ],
            '3746' => [
                'npsn' => '20200674',
                'nama' => 'SMAS TARBIYATUL FALAH KABUPATEN BOGOR',
            ],
            '3747' => [
                'npsn' => '20232478',
                'nama' => 'SMKS AGRI INSANI KABUPATEN BOGOR',
            ],
            '3748' => [
                'npsn' => '69768294',
                'nama' => 'SMKS MA`ARIF NU CIOMAS KABUPATEN BOGOR',
            ],
            '3749' => [
                'npsn' => '20270945',
                'nama' => 'SMKS YASPI KABUPATEN BOGOR',
            ],
            '3750' => [
                'npsn' => '20200591',
                'nama' => 'SMKS IBNU AQIL BOGOR KABUPATEN BOGOR',
            ],
            '3751' => [
                'npsn' => '20232338',
                'nama' => 'SMAS IBNU AQIL KABUPATEN BOGOR',
            ],
            '3752' => [
                'npsn' => '20268466',
                'nama' => 'SMKS KUSUMA BANGSA KABUPATEN BOGOR',
            ],
            '3753' => [
                'npsn' => '20268864',
                'nama' => 'SMAS MA ARIF NU KABUPATEN BOGOR',
            ],
            '3754' => [
                'npsn' => '69755454',
                'nama' => 'SMKS CINTA RASUL KABUPATEN BOGOR',
            ],
            '3755' => [
                'npsn' => '20200683',
                'nama' => 'SMAS AULIA KABUPATEN BOGOR',
            ],
            '3756' => [
                'npsn' => '69727468',
                'nama' => 'SMKS CO2 KABUPATEN BOGOR',
            ],
            '3757' => [
                'npsn' => '20200673',
                'nama' => 'SMAS TAMAN ISLAM KABUPATEN BOGOR',
            ],
            '3758' => [
                'npsn' => '20253352',
                'nama' => 'SMKS ADZKIA KHARISMA KABUPATEN BOGOR',
            ],
            '3759' => [
                'npsn' => '70028590',
                'nama' => 'SMKS BAKTI NUSA KABUPATEN BOGOR',
            ],
            '3760' => [
                'npsn' => '69987474',
                'nama' => 'SMAS ISLAM TERPADU NURUL FIKRI BOARDING SCHOOL KABUPATEN BOGOR',
            ],
            '3761' => [
                'npsn' => '20270720',
                'nama' => 'SMAS ISLAM HASMI KABUPATEN BOGOR',
            ],
            '3762' => [
                'npsn' => '69926041',
                'nama' => 'SMKS SATRIA BANGSA KABUPATEN BOGOR',
            ],
            '3763' => [
                'npsn' => '69877619',
                'nama' => 'SMKS INFORMATIKA BINA GENERASI 3 KABUPATEN BOGOR',
            ],
            '3764' => [
                'npsn' => '69759160',
                'nama' => 'SMKS NURFADILLAH KABUPATEN BOGOR',
            ],
            '3765' => [
                'npsn' => '69774834',
                'nama' => 'SMAS MAN ANA KABUPATEN BOGOR',
            ],
            '3766' => [
                'npsn' => '69886257',
                'nama' => 'SMKS SAHID KABUPATEN BOGOR',
            ],
            '3767' => [
                'npsn' => '20252939',
                'nama' => 'SMKS PGRI PAMIJAHAN KABUPATEN BOGOR',
            ],
            '3768' => [
                'npsn' => '69894525',
                'nama' => 'SMKS 2 AL AMIN SURYADINATA KABUPATEN BOGOR',
            ],
            '3769' => [
                'npsn' => '69880768',
                'nama' => 'SMKS NURLIDA PAMIJAHAN KABUPATEN BOGOR',
            ],
            '3770' => [
                'npsn' => '69827809',
                'nama' => 'SMAS AL AMIN KABUPATEN BOGOR',
            ],
            '3771' => [
                'npsn' => '20231304',
                'nama' => 'SMAS ISLAM PAMBUDI LUHUR KABUPATEN BOGOR',
            ],
            '3772' => [
                'npsn' => '20232368',
                'nama' => 'SMAS MUHAMMADIYAH PAMIJAHAN KABUPATEN BOGOR',
            ],
            '3773' => [
                'npsn' => '69883428',
                'nama' => 'SMKS CIPTA MANDIRI KABUPATEN BOGOR',
            ],
            '3774' => [
                'npsn' => '69755234',
                'nama' => 'SMKS MUHAMMADIYAH 5 KABUPATEN BOGOR',
            ],
            '3775' => [
                'npsn' => '20270625',
                'nama' => 'SMKS ASSALAM KABUPATEN BOGOR',
            ],
            '3776' => [
                'npsn' => '69788559',
                'nama' => 'SMKS KESEHATAN RAFLESIA KABUPATEN BOGOR',
            ],
            '3777' => [
                'npsn' => '20232415',
                'nama' => 'SMKS AL AMIN KABUPATEN BOGOR',
            ],
            '3778' => [
                'npsn' => '69775678',
                'nama' => 'SMAS PLUS IBNU SINA KABUPATEN BOGOR',
            ],
            '3779' => [
                'npsn' => '20232339',
                'nama' => 'SMAS IBNU HAJAR KABUPATEN BOGOR',
            ],
            '3780' => [
                'npsn' => '20280623',
                'nama' => 'SMKS SIROJUL HUDA 3 KABUPATEN BOGOR',
            ],
            '3781' => [
                'npsn' => '69880403',
                'nama' => 'SMKS NAHDLATUL ULAMA KABUPATEN BOGOR',
            ],
            '3782' => [
                'npsn' => '69956384',
                'nama' => 'SMKS TARUMA NEGARA BOGOR KABUPATEN BOGOR',
            ],
            '3783' => [
                'npsn' => '69888767',
                'nama' => 'SMKS MANDIRI BERKAH KABUPATEN BOGOR',
            ],
            '3784' => [
                'npsn' => '70010597',
                'nama' => 'SMKS QOTRUNNADA 1 KABUPATEN BOGOR',
            ],
            '3785' => [
                'npsn' => '20268503',
                'nama' => 'SMKS ASY SYUKUR KABUPATEN BOGOR',
            ],
            '3786' => [
                'npsn' => '69894539',
                'nama' => 'SMKS CITA TEKNIKA KABUPATEN BOGOR',
            ],
            '3787' => [
                'npsn' => '69928561',
                'nama' => 'SMKS KARYA UNCINTA KABUPATEN BOGOR',
            ],
            '3788' => [
                'npsn' => '20232492',
                'nama' => 'SMKS WIDYA BHAKTI UTAMA KABUPATEN BOGOR',
            ],
            '3789' => [
                'npsn' => '20271596',
                'nama' => 'SMKS AL KAUTSAR KABUPATEN BOGOR',
            ],
            '3790' => [
                'npsn' => '69759854',
                'nama' => 'SMKS PESONA DYWANTARA KABUPATEN BOGOR',
            ],
            '3791' => [
                'npsn' => '69882421',
                'nama' => 'SMKS KESEHATAN PROF. DR. MOESTOPO KABUPATEN BOGOR',
            ],
            '3792' => [
                'npsn' => '20268252',
                'nama' => 'SMKS TERPADU ANTAM BINA INSANI KABUPATEN BOGOR',
            ],
            '3793' => [
                'npsn' => '20258215',
                'nama' => 'SMKS TRIWIJAYA KABUPATEN BOGOR',
            ],
            '3794' => [
                'npsn' => 'NP905022',
                'nama' => 'SMAS NAHDLATUL WATHAN BOGOR KABUPATEN BOGOR',
            ],
            '3795' => [
                'npsn' => '69799885',
                'nama' => 'SMAS BINA SPORA MANDIRI KABUPATEN BOGOR',
            ],
            '3796' => [
                'npsn' => '20253857',
                'nama' => 'SMAS AL HASANAH KABUPATEN BOGOR',
            ],
            '3797' => [
                'npsn' => '20230410',
                'nama' => 'SLBS BAG ABC TUNAS KASIH 1 KABUPATEN BOGOR',
            ],
            '3798' => [
                'npsn' => '20232307',
                'nama' => 'SMAS AL HUSNA KABUPATEN BOGOR',
            ],
            '3799' => [
                'npsn' => '70034161',
                'nama' => 'SMAS RAUDHATUL MUTTAQIN KABUPATEN BOGOR',
            ],
            '3800' => [
                'npsn' => '69896518',
                'nama' => 'SMKS IT HIDAYATUL FALAH KABUPATEN BOGOR',
            ],
            '3801' => [
                'npsn' => '69762769',
                'nama' => 'SMKS AL HAFIDZ KABUPATEN BOGOR',
            ],
            '3802' => [
                'npsn' => '70034107',
                'nama' => 'SMKS IT CYBER GLOBAL ORENZ KABUPATEN BOGOR',
            ],
            '3803' => [
                'npsn' => '69788539',
                'nama' => 'SMKS TI AL HUSNA KABUPATEN BOGOR',
            ],
            '3804' => [
                'npsn' => '69755802',
                'nama' => 'SMKS BINA CENDIKIA KABUPATEN BOGOR',
            ],
            '3805' => [
                'npsn' => '20254258',
                'nama' => 'SMKS INOVATIF KABUPATEN BOGOR',
            ],
            '3806' => [
                'npsn' => '20270996',
                'nama' => 'SMKS AMALIAH 1 KABUPATEN BOGOR',
            ],
            '3807' => [
                'npsn' => '69877904',
                'nama' => 'SMKS 98 CIAWI KABUPATEN BOGOR',
            ],
            '3808' => [
                'npsn' => '20231272',
                'nama' => 'SMAS AL MUSTHOPA KABUPATEN BOGOR',
            ],
            '3809' => [
                'npsn' => '69734364',
                'nama' => 'SMKS KENCANA KABUPATEN BOGOR',
            ],
            '3810' => [
                'npsn' => '20231381',
                'nama' => 'SMKS AVICENA KABUPATEN BOGOR',
            ],
            '3811' => [
                'npsn' => '69757149',
                'nama' => 'SMKS MODIS KABUPATEN BOGOR',
            ],
            '3812' => [
                'npsn' => '69757150',
                'nama' => 'SMKS ACASIA FORNIS KABUPATEN BOGOR',
            ],
            '3813' => [
                'npsn' => '20231290',
                'nama' => 'SMAS ISLAM DAARUL ARHAM KABUPATEN BOGOR',
            ],
            '3814' => [
                'npsn' => '70002373',
                'nama' => 'SMKS BINA NUSANTARA KABUPATEN BOGOR',
            ],
            '3815' => [
                'npsn' => '20200689',
                'nama' => 'SMAS HIDAYATUL IKHWAN KABUPATEN BOGOR',
            ],
            '3816' => [
                'npsn' => '20255780',
                'nama' => 'SMKS BINA PUTRA MANDIRI KABUPATEN BOGOR',
            ],
            '3817' => [
                'npsn' => '20202262',
                'nama' => 'SMAN 1 CISOLOK KABUPATEN SUKABUMI',
            ],
            '3818' => [
                'npsn' => '20232375',
                'nama' => 'SMAN 1 CISARUA KABUPATEN BOGOR',
            ],
            '3819' => [
                'npsn' => '20232324',
                'nama' => 'SMAS CISARUA KABUPATEN BOGOR',
            ],
            '3820' => [
                'npsn' => '69859699',
                'nama' => 'SMKS DIVA TUNAS BANGSA KABUPATEN BOGOR',
            ],
            '3821' => [
                'npsn' => '20231374',
                'nama' => 'SMKS BM AL IKHLAS KABUPATEN BOGOR',
            ],
            '3822' => [
                'npsn' => '69755276',
                'nama' => 'SMKS HUMANIKA 2 KABUPATEN BOGOR',
            ],
            '3823' => [
                'npsn' => '20253162',
                'nama' => 'SMKS KESEHATAN AL IKHLAS KABUPATEN BOGOR',
            ],
            '3824' => [
                'npsn' => '20271579',
                'nama' => 'SMKS BHINNEKA NUSANTARA KABUPATEN BOGOR',
            ],
            '3825' => [
                'npsn' => '69733313',
                'nama' => 'SLBS AL FAJRI KABUPATEN BOGOR',
            ],
            '3826' => [
                'npsn' => '70023638',
                'nama' => 'SMKS FAJAR UTAMA KABUPATEN BOGOR',
            ],
            '3827' => [
                'npsn' => '69978248',
                'nama' => 'SMAS HISHNUS SALAM KABUPATEN CIANJUR',
            ],
            '3828' => [
                'npsn' => '20271196',
                'nama' => 'SMKS GRAHA NUSANTARA KABUPATEN BOGOR',
            ],
            '3829' => [
                'npsn' => '20202261',
                'nama' => 'SMAN 1 CISAAT KABUPATEN SUKABUMI',
            ],
            '3830' => [
                'npsn' => '60726379',
                'nama' => 'SMAS BINA PERSADA KABUPATEN SUKABUMI',
            ],
            '3831' => [
                'npsn' => '20200596',
                'nama' => 'SMKS WISATA SATRIA 1 KABUPATEN BOGOR',
            ],
            '3832' => [
                'npsn' => '20255760',
                'nama' => 'SMKS SUMPAH PEMUDA 2 KABUPATEN BOGOR',
            ],
            '3833' => [
                'npsn' => '20268437',
                'nama' => 'SMAS PURWA BHAKTI KABUPATEN BOGOR',
            ],
            '3834' => [
                'npsn' => '20254275',
                'nama' => 'SMKS KUSUMA BANGSA YASTIA KABUPATEN BOGOR',
            ],
            '3835' => [
                'npsn' => '20268242',
                'nama' => 'SMKS AMALIAH 2 KABUPATEN BOGOR',
            ],
            '3836' => [
                'npsn' => '69859698',
                'nama' => 'SMKS BINASENA KABUPATEN BOGOR',
            ],
            '3837' => [
                'npsn' => '20232497',
                'nama' => 'SMKS WISATA SATRIA 2 KABUPATEN BOGOR',
            ],
            '3838' => [
                'npsn' => '20232335',
                'nama' => 'SMAS FATHAN MUBINA KABUPATEN BOGOR',
            ],
            '3839' => [
                'npsn' => '20231448',
                'nama' => 'SMKS WIJAYA PLUS KABUPATEN BOGOR',
            ],
            '3840' => [
                'npsn' => '20232392',
                'nama' => 'SMAS PGRI CIAWI KABUPATEN BOGOR',
            ],
            '3841' => [
                'npsn' => '20272075',
                'nama' => 'SMKS BHAKTI CANDRA KABUPATEN BOGOR',
            ],
            '3842' => [
                'npsn' => '69758825',
                'nama' => 'SMKS AL WATASI KABUPATEN BOGOR',
            ],
            '3843' => [
                'npsn' => '20279816',
                'nama' => 'SMKS TEKNOLOGI INDONESIA KABUPATEN BOGOR',
            ],
            '3844' => [
                'npsn' => '69755751',
                'nama' => 'SMKS TEKINDO KABUPATEN BOGOR',
            ],
            '3845' => [
                'npsn' => '20231384',
                'nama' => 'SMKS BINA CIPTA INSANI CARINGIN KABUPATEN BOGOR',
            ],
            '3846' => [
                'npsn' => '10648877',
                'nama' => 'SMKS FARMAKO MEDIKA PLUS KABUPATEN BOGOR',
            ],
            '3847' => [
                'npsn' => '20232331',
                'nama' => 'SMAS DARUL FAIZIN KABUPATEN BOGOR',
            ],
            '3848' => [
                'npsn' => '20270546',
                'nama' => 'SMKS NAHDLATUL ULAMA AL MINHAJ KABUPATEN BOGOR',
            ],
            '3849' => [
                'npsn' => '69755810',
                'nama' => 'SMKS KARYA NYATA KABUPATEN BOGOR',
            ],
            '3850' => [
                'npsn' => '20232498',
                'nama' => 'SMKS YAPAS BOGOR KABUPATEN BOGOR',
            ],
            '3851' => [
                'npsn' => '69816347',
                'nama' => 'SMKS PUTRA MANDIRI BANGSA KABUPATEN BOGOR',
            ],
            '3852' => [
                'npsn' => '20270667',
                'nama' => 'SMKS WIJAYA PLUS 2 KABUPATEN BOGOR',
            ],
            '3853' => [
                'npsn' => '20232313',
                'nama' => 'SMAS AMALIAH KABUPATEN BOGOR',
            ],
            '3854' => [
                'npsn' => '20232315',
                'nama' => 'SMAS AS SYUJA IYAH KABUPATEN BOGOR',
            ],
            '3855' => [
                'npsn' => '70028589',
                'nama' => 'SMKS DARUS SAADAH KABUPATEN BOGOR',
            ],
            '3856' => [
                'npsn' => '20200599',
                'nama' => 'SMKS YASI 1 CILEBUT BOGOR KABUPATEN BOGOR',
            ],
            '3857' => [
                'npsn' => '69786949',
                'nama' => 'SMKS AL BANA KABUPATEN BOGOR',
            ],
            '3858' => [
                'npsn' => '10648871',
                'nama' => 'SMKS PELITA HUSADA KABUPATEN BOGOR',
            ],
            '3859' => [
                'npsn' => '20272054',
                'nama' => 'SMKS NU GLOBAL MADANI KABUPATEN BOGOR',
            ],
            '3860' => [
                'npsn' => '20271471',
                'nama' => 'SMAS IT DARUL QUR AN KABUPATEN BOGOR',
            ],
            '3861' => [
                'npsn' => '69753993',
                'nama' => 'SMKS BISTEK KABUPATEN BOGOR',
            ],
            '3862' => [
                'npsn' => '20232351',
                'nama' => 'SMAS ISLAM AL GOZALI KABUPATEN BOGOR',
            ],
            '3863' => [
                'npsn' => '20232470',
                'nama' => 'SMKS NUANSA BOGOR KABUPATEN BOGOR',
            ],
            '3864' => [
                'npsn' => '20200688',
                'nama' => 'SMAS HARAPAN BANGSA KABUPATEN BOGOR',
            ],
            '3865' => [
                'npsn' => '20232412',
                'nama' => 'SMAS SEJAHTERA YASINA KABUPATEN BOGOR',
            ],
            '3866' => [
                'npsn' => '69943920',
                'nama' => 'SMKS GITA PRIMA KABUPATEN BOGOR',
            ],
            '3867' => [
                'npsn' => '69775308',
                'nama' => 'SMKS BHAKTI KENCANA KABUPATEN BOGOR',
            ],
            '3868' => [
                'npsn' => '69755750',
                'nama' => 'SMKS MUTIARA LIDO KABUPATEN BOGOR',
            ],
            '3869' => [
                'npsn' => '69907893',
                'nama' => 'SMKS IT MIFTAHUL AZIZ KABUPATEN BOGOR',
            ],
            '3870' => [
                'npsn' => '20252852',
                'nama' => 'SMAS AL KAHFI KABUPATEN BOGOR',
            ],
            '3871' => [
                'npsn' => '70011787',
                'nama' => 'SMAS ISLAM AL AZHAR 24 KABUPATEN BOGOR',
            ],
            '3872' => [
                'npsn' => '20232428',
                'nama' => 'SMKS PARIWISATA BAMBU PASUNDAN KABUPATEN BOGOR',
            ],
            '3873' => [
                'npsn' => '20232336',
                'nama' => 'SMAS GITA PGRI KABUPATEN BOGOR',
            ],
            '3874' => [
                'npsn' => '20268948',
                'nama' => 'SMKS IT NAPALA KABUPATEN BOGOR',
            ],
            '3875' => [
                'npsn' => '20258318',
                'nama' => 'SMKS TI DARUL FURQON KABUPATEN BOGOR',
            ],
            '3876' => [
                'npsn' => '69946107',
                'nama' => 'SMAS NASIONAL PLUS BPK PENABUR BOGOR KABUPATEN BOGOR',
            ],
            '3877' => [
                'npsn' => '69830586',
                'nama' => 'SMKS PLUS INSAN CEMERLANG KABUPATEN BOGOR',
            ],
            '3878' => [
                'npsn' => '20280621',
                'nama' => 'SMAS PANCAR BAKTI KABUPATEN BOGOR',
            ],
            '3879' => [
                'npsn' => '69972352',
                'nama' => 'SMAS TARUNA BANGSA KABUPATEN BOGOR',
            ],
            '3880' => [
                'npsn' => '69953897',
                'nama' => 'SMKS DARMAWAN KABUPATEN BOGOR',
            ],
            '3881' => [
                'npsn' => '69982490',
                'nama' => 'SMAS INSAN CENDEKIA BOARDING SCHOOL KABUPATEN BOGOR',
            ],
            '3882' => [
                'npsn' => '20232445',
                'nama' => 'SMKS GALILEO KABUPATEN BOGOR',
            ],
            '3883' => [
                'npsn' => '69880578',
                'nama' => 'SMKS AL MUTTAQIEN KABUPATEN BOGOR',
            ],
            '3884' => [
                'npsn' => '20231455',
                'nama' => 'SMKS YASINA CIGOMBONG KABUPATEN BOGOR',
            ],
            '3885' => [
                'npsn' => '69830090',
                'nama' => 'SMKS DAARUL QURAN KABUPATEN BOGOR',
            ],
            '3886' => [
                'npsn' => '69786623',
                'nama' => 'SMKS AN NUR CARIU KABUPATEN BOGOR',
            ],
            '3887' => [
                'npsn' => '69758966',
                'nama' => 'SMKS SINAR ISLAM ASIA PASIFIC KABUPATEN BOGOR',
            ],
            '3888' => [
                'npsn' => '70029923',
                'nama' => 'SMAS SINAR ISLAM ASIA PASIFIC BOARDING SCHOOL KABUPATEN BOGOR',
            ],
            '3889' => [
                'npsn' => '70001547',
                'nama' => 'SMKS ISLAM TERPADU AR RISALAH CARIU KABUPATEN BOGOR',
            ],
            '3890' => [
                'npsn' => '20232451',
                'nama' => 'SMKS IBNU HAMZAH KABUPATEN BOGOR',
            ],
            '3891' => [
                'npsn' => '20254053',
                'nama' => 'SMKS PURNAMA BAKTI KABUPATEN BOGOR',
            ],
            '3892' => [
                'npsn' => '20231419',
                'nama' => 'SMKN 1 CARIU KABUPATEN BOGOR',
            ],
            '3893' => [
                'npsn' => '69918146',
                'nama' => 'SMAN 4 CIBINONG KABUPATEN BOGOR',
            ],
            '3894' => [
                'npsn' => '20232471',
                'nama' => 'SMKS NURUL HIDAYAH 1 BOGOR KABUPATEN BOGOR',
            ],
            '3895' => [
                'npsn' => '20276163',
                'nama' => 'SMKS MITRA INDONESIA KABUPATEN BOGOR',
            ],
            '3896' => [
                'npsn' => '20253286',
                'nama' => 'SMKS TUNAS SINAR MANDIRI KABUPATEN BOGOR',
            ],
            '3897' => [
                'npsn' => '69830393',
                'nama' => 'SMKS TUNAS SINAR MANDIRI 2 KABUPATEN BOGOR',
            ],
            '3898' => [
                'npsn' => '20252077',
                'nama' => 'SMAS INTERNATIONAL ISLAMIC SCHOOL OF INDONESIA KABUPATEN BOGOR',
            ],
            '3899' => [
                'npsn' => '20232424',
                'nama' => 'SMKS ASH SHOHEH 1 CITEUREUP KABUPATEN BOGOR',
            ],
            '3900' => [
                'npsn' => '20231394',
                'nama' => 'SMKS BUDINIAH KABUPATEN BOGOR',
            ],
            '3901' => [
                'npsn' => '20280627',
                'nama' => 'SMKS BINA MANDIRI SEJAHTERA KABUPATEN BOGOR',
            ],
            '3902' => [
                'npsn' => '20232493',
                'nama' => 'SMKS WIDYA DHARMA 1 CITEUREUP BOGOR KABUPATEN BOGOR',
            ],
            '3903' => [
                'npsn' => '20200603',
                'nama' => 'SMAN 1 CITEUREUP KABUPATEN BOGOR',
            ],
            '3904' => [
                'npsn' => '69876824',
                'nama' => 'SMKS INFORMATIKA BINA GENERASI 2 KABUPATEN BOGOR',
            ],
            '3905' => [
                'npsn' => '69893376',
                'nama' => 'SMKS BHAKTI MEDIKA KABUPATEN BOGOR',
            ],
            '3906' => [
                'npsn' => '20232472',
                'nama' => 'SMKS NURUL HIDAYAH 2 BOGOR KABUPATEN BOGOR',
            ],
            '3907' => [
                'npsn' => '20232431',
                'nama' => 'SMKS INFORMATIKA BINA GENERASI BOGOR KABUPATEN BOGOR',
            ],
            '3908' => [
                'npsn' => '69860526',
                'nama' => 'SMAS PLUS PUTRA MELATI KABUPATEN BOGOR',
            ],
            '3909' => [
                'npsn' => '20200594',
                'nama' => 'SMKS OTISTA JONGGOL KABUPATEN BOGOR',
            ],
            '3910' => [
                'npsn' => '69896671',
                'nama' => 'SMKS INSAN RELIGI KABUPATEN BOGOR',
            ],
            '3911' => [
                'npsn' => '20251938',
                'nama' => 'SMAS ISLAM RIYADLUL JANNAH KABUPATEN BOGOR',
            ],
            '3912' => [
                'npsn' => '69937830',
                'nama' => 'SMKS PASIR ANGIN KABUPATEN CIANJUR',
            ],
            '3913' => [
                'npsn' => '20200680',
                'nama' => 'SMAN 1 JONGGOL KABUPATEN BOGOR',
            ],
            '3914' => [
                'npsn' => '20268875',
                'nama' => 'SMAS AL HIKMAH KABUPATEN BOGOR',
            ],
            '3915' => [
                'npsn' => '20272052',
                'nama' => 'SMKS INSAN NUR MUHAMMAD KABUPATEN BOGOR',
            ],
            '3916' => [
                'npsn' => '69725855',
                'nama' => 'SMKS BHAKTI NUGRAHA KABUPATEN BOGOR',
            ],
            '3917' => [
                'npsn' => '69901004',
                'nama' => 'SMAS IC MAGNET SCHOOL KABUPATEN BOGOR',
            ],
            '3918' => [
                'npsn' => '20268485',
                'nama' => 'SMKS AN NUR KLAPANUNGGAL KABUPATEN BOGOR',
            ],
            '3919' => [
                'npsn' => '70015921',
                'nama' => 'SMKS TUNGGAL PRAKARSA KABUPATEN BOGOR',
            ],
            '3920' => [
                'npsn' => '20231376',
                'nama' => 'SMKS 2 AMAL MULIA KABUPATEN BOGOR',
            ],
            '3921' => [
                'npsn' => '20268426',
                'nama' => 'SMKS TRI KARYA KABUPATEN BOGOR',
            ],
            '3922' => [
                'npsn' => '20231375',
                'nama' => 'SMKS 1 AMAL MULIA KABUPATEN BOGOR',
            ],
            '3923' => [
                'npsn' => '20252030',
                'nama' => 'SMKN 1 CILAKU KABUPATEN CIANJUR',
            ],
            '3924' => [
                'npsn' => '20276388',
                'nama' => 'SMAN 1 KLAPANUNGGAL KABUPATEN BOGOR',
            ],
            '3925' => [
                'npsn' => '20232410',
                'nama' => 'SMAS YAPISA KABUPATEN BOGOR',
            ],
            '3926' => [
                'npsn' => '20254358',
                'nama' => 'SMAS GLOBAL MANDIRI KABUPATEN BOGOR',
            ],
            '3927' => [
                'npsn' => '69786312',
                'nama' => 'SMAS LABS SCHOOL KAIZEN KABUPATEN BOGOR',
            ],
            '3928' => [
                'npsn' => '20279952',
                'nama' => 'SMAS PILAR INDONESIA KABUPATEN BOGOR',
            ],
            '3929' => [
                'npsn' => '69786982',
                'nama' => 'SMAS PM AT TAQWA KABUPATEN BOGOR',
            ],
            '3930' => [
                'npsn' => '20258210',
                'nama' => 'SMKS TAMAN WISATA KABUPATEN BOGOR',
            ],
            '3931' => [
                'npsn' => '69874079',
                'nama' => 'SMAS REGINA CAELI KABUPATEN BOGOR',
            ],
            '3932' => [
                'npsn' => '20254158',
                'nama' => 'SMAS FAJAR DUNIA KABUPATEN BOGOR',
            ],
            '3933' => [
                'npsn' => '20231416',
                'nama' => 'SMKS MUHAMMADIYAH 2 CILEUNGSI KABUPATEN BOGOR',
            ],
            '3934' => [
                'npsn' => '20280622',
                'nama' => 'SMKS YPB CILEUNGSI KABUPATEN BOGOR',
            ],
            '3935' => [
                'npsn' => '70031734',
                'nama' => 'SMAS AL HADIID CILEUNGSI KABUPATEN BOGOR',
            ],
            '3936' => [
                'npsn' => '69888841',
                'nama' => 'SMKS PLUS ARRUSYDA KABUPATEN BOGOR',
            ],
            '3937' => [
                'npsn' => '69984405',
                'nama' => 'SMKS BINA MANDIRI MULTIMEDIA KABUPATEN BOGOR',
            ],
            '3938' => [
                'npsn' => '69755363',
                'nama' => 'SMKS TAMAN QURANIYAH KABUPATEN BOGOR',
            ],
            '3939' => [
                'npsn' => '20200677',
                'nama' => 'SMAS MUHAMMADIYAH CILEUNGSI KABUPATEN BOGOR',
            ],
            '3940' => [
                'npsn' => '20246141',
                'nama' => 'SMKS MUHAMMADIYAH 3 CILEUNGSI BOGOR KABUPATEN BOGOR',
            ],
            '3941' => [
                'npsn' => '20258413',
                'nama' => 'SMKS FATAHILLAH CILEUNGSI KABUPATEN BOGOR',
            ],
            '3942' => [
                'npsn' => '20232438',
                'nama' => 'SMKS BPS&amp;K 1 CILEUNGSI KABUPATEN BOGOR',
            ],
            '3943' => [
                'npsn' => '70027072',
                'nama' => 'SMAS IT AL FITYAN BOARDING SCHOOL BOGOR KABUPATEN BOGOR',
            ],
            '3944' => [
                'npsn' => '20231359',
                'nama' => 'SMAS WIDYA KUSUMA KABUPATEN BOGOR',
            ],
            '3945' => [
                'npsn' => '10648870',
                'nama' => 'SMKS YAPA KABUPATEN BOGOR',
            ],
            '3946' => [
                'npsn' => '20232418',
                'nama' => 'SMKS AL HADIID 1 CILEUNGSI BOGOR KABUPATEN BOGOR',
            ],
            '3947' => [
                'npsn' => '69753949',
                'nama' => 'SMKS PIJAR ALAM 2 KABUPATEN BOGOR',
            ],
            '3948' => [
                'npsn' => '69775432',
                'nama' => 'SMKS KESEHATAN SABILURRAHIM KABUPATEN BOGOR',
            ],
            '3949' => [
                'npsn' => '69847637',
                'nama' => 'SMKN 1 CILEUNGSI KABUPATEN BOGOR',
            ],
            '3950' => [
                'npsn' => '20200681',
                'nama' => 'SMAN 1 CILEUNGSI KABUPATEN BOGOR',
            ],
            '3951' => [
                'npsn' => '20280620',
                'nama' => 'SMKS IBNU SOBRI KABUPATEN BOGOR',
            ],
            '3952' => [
                'npsn' => '20231303',
                'nama' => 'SMAS NURUL HIKMAH KABUPATEN BOGOR',
            ],
            '3953' => [
                'npsn' => '69944176',
                'nama' => 'SMKS MADINATULQURAN KABUPATEN BOGOR',
            ],
            '3954' => [
                'npsn' => '69908200',
                'nama' => 'SMAS ISLAM CIKAL HARAPAN 2 KABUPATEN BOGOR',
            ],
            '3955' => [
                'npsn' => '20253093',
                'nama' => 'SMAS SAINT ENOCH KABUPATEN BOGOR',
            ],
            '3956' => [
                'npsn' => '69861171',
                'nama' => 'SMAS ISLAM AL MADINAH MALATI KABUPATEN BOGOR',
            ],
            '3957' => [
                'npsn' => '20232353',
                'nama' => 'SMAS BINA INSAN JONGGOL KABUPATEN BOGOR',
            ],
            '3958' => [
                'npsn' => '20232473',
                'nama' => 'SMKS NURUL HIKMAH KABUPATEN BOGOR',
            ],
            '3959' => [
                'npsn' => '70001504',
                'nama' => 'SMAS AQL ISLAMIC SCHOOL KABUPATEN BOGOR',
            ],
            '3960' => [
                'npsn' => '20231436',
                'nama' => 'SMKS PUTRA NEGARA KABUPATEN BOGOR',
            ],
            '3961' => [
                'npsn' => '20232391',
                'nama' => 'SMAS PGRI JONGGOL KABUPATEN BOGOR',
            ],
            '3962' => [
                'npsn' => '69774721',
                'nama' => 'SMKS MUHAMMADIYAH 4 KABUPATEN BOGOR',
            ],
            '3963' => [
                'npsn' => '20271340',
                'nama' => 'SMKS WIDYA KUSUMA KABUPATEN BOGOR',
            ],
            '3964' => [
                'npsn' => '20269650',
                'nama' => 'SMAS PLUS DARUSSALAM KOPOSARI KABUPATEN BOGOR',
            ],
            '3965' => [
                'npsn' => '69908501',
                'nama' => 'SMKS GLOBAL SURYA PRATAMA KABUPATEN BOGOR',
            ],
            '3966' => [
                'npsn' => '20230408',
                'nama' => 'SLBS BINA SEJAHTERA KABUPATEN BOGOR',
            ],
            '3967' => [
                'npsn' => '20268443',
                'nama' => 'SMKS PGRI KARISMAS BANGSA KABUPATEN BOGOR',
            ],
            '3968' => [
                'npsn' => '20232417',
                'nama' => 'SMKS AL FARABI KABUPATEN BOGOR',
            ],
            '3969' => [
                'npsn' => '20276164',
                'nama' => 'SMKS DARMA BAKTI KABUPATEN BOGOR',
            ],
            '3970' => [
                'npsn' => '20232439',
                'nama' => 'SMKS BPS&amp;K 2 CILEUNGSI KABUPATEN BOGOR',
            ],
            '3971' => [
                'npsn' => '20253395',
                'nama' => 'SMKS FARMASI BHAKTI KENCANA KABUPATEN BOGOR',
            ],
            '3972' => [
                'npsn' => '20231415',
                'nama' => 'SMKS MUHAMMADIYAH 1 CILEUNGSI KABUPATEN BOGOR',
            ],
            '3973' => [
                'npsn' => '69728034',
                'nama' => 'SMKS AL MUASYARAH KABUPATEN BOGOR',
            ],
            '3974' => [
                'npsn' => '69953981',
                'nama' => 'SMAS CITRA BERKAT KABUPATEN BOGOR',
            ],
            '3975' => [
                'npsn' => '20271528',
                'nama' => 'SMKS KESEHATAN LOGOS KABUPATEN BOGOR',
            ],
            '3976' => [
                'npsn' => '20254110',
                'nama' => 'SMKS JAKARTA RAYA 3 KABUPATEN BOGOR',
            ],
            '3977' => [
                'npsn' => '20268288',
                'nama' => 'SMKS NUSANTARA KABUPATEN BOGOR',
            ],
            '3978' => [
                'npsn' => '20232458',
                'nama' => 'SMKS MANDIRI KABUPATEN BOGOR',
            ],
            '3979' => [
                'npsn' => '20232442',
                'nama' => 'SMKS DAARUL FATAA KABUPATEN BOGOR',
            ],
            '3980' => [
                'npsn' => '69968461',
                'nama' => 'SMKS TARUNA BUDI BANGSA KABUPATEN BOGOR',
            ],
            '3981' => [
                'npsn' => '20268220',
                'nama' => 'SMKS WIRA BUANA 2 KABUPATEN BOGOR',
            ],
            '3982' => [
                'npsn' => '70035676',
                'nama' => 'SMAS LOGOS KABUPATEN BOGOR',
            ],
            '3983' => [
                'npsn' => '20232466',
                'nama' => 'SMKN 1 BOJONG GEDE KABUPATEN BOGOR',
            ],
            '3984' => [
                'npsn' => '20272048',
                'nama' => 'SMKS PGRI SUKAMAKMUR KABUPATEN BOGOR',
            ],
            '3985' => [
                'npsn' => '20272074',
                'nama' => 'SMAS MIFTAHUL HUDA AL BARKAH KABUPATEN BOGOR',
            ],
            '3986' => [
                'npsn' => '69753670',
                'nama' => 'SMKS ISLAM SOLALATUL HUDA KABUPATEN BOGOR',
            ],
            '3987' => [
                'npsn' => '20271986',
                'nama' => 'SMAS PUSPA BANGSA KABUPATEN BOGOR',
            ],
            '3988' => [
                'npsn' => '69769377',
                'nama' => 'SMKS KHARISMA NUSANTARA KABUPATEN BOGOR',
            ],
            '3989' => [
                'npsn' => '20200608',
                'nama' => 'SMKS WIYATA MANDALA KABUPATEN BOGOR',
            ],
            '3990' => [
                'npsn' => '20232403',
                'nama' => 'SMAS TARUNA TERPADU KABUPATEN BOGOR',
            ],
            '3991' => [
                'npsn' => '20231356',
                'nama' => 'SMAS SMART EKSELENSIA INDONESIA KABUPATEN BOGOR',
            ],
            '3992' => [
                'npsn' => '20258244',
                'nama' => 'SMKS NUSANTARA MANDIRI KABUPATEN BOGOR',
            ],
            '3993' => [
                'npsn' => '20271195',
                'nama' => 'SMKS NUSA BANGSA KABUPATEN BOGOR',
            ],
            '3994' => [
                'npsn' => '69762752',
                'nama' => 'SMKS BINA TEKNIKA KABUPATEN BOGOR',
            ],
            '3995' => [
                'npsn' => '69888844',
                'nama' => 'SMKS IZZATUL ISLAM KABUPATEN BOGOR',
            ],
            '3996' => [
                'npsn' => '20271211',
                'nama' => 'SMKS ATTAJIR KABUPATEN BOGOR',
            ],
            '3997' => [
                'npsn' => '20200690',
                'nama' => 'SMAS BAITUSSALAM KABUPATEN BOGOR',
            ],
            '3998' => [
                'npsn' => '20271038',
                'nama' => 'SMKS SYADAM BOJONGGEDE KABUPATEN BOGOR',
            ],
            '3999' => [
                'npsn' => '69882415',
                'nama' => 'SMKS MUTIARA BANGSA KABUPATEN BOGOR',
            ],
            '4000' => [
                'npsn' => '20253579',
                'nama' => 'SMKS CYBER MEDIA UTAMA KABUPATEN BOGOR',
            ],
            '4001' => [
                'npsn' => '69878508',
                'nama' => 'SMKS BUKIT GLORIA KABUPATEN BOGOR',
            ],
            '4002' => [
                'npsn' => '69992187',
                'nama' => 'SMAS AL WAFI IBS KABUPATEN BOGOR',
            ],
            '4003' => [
                'npsn' => '20271209',
                'nama' => 'SMKS SARADAN KABUPATEN BOGOR',
            ],
            '4004' => [
                'npsn' => '69864654',
                'nama' => 'SMKS GUNADARMA JAYA KABUPATEN BOGOR',
            ],
            '4005' => [
                'npsn' => '20258339',
                'nama' => 'SMKS AGRIBISNIS DAN AGROTEKNOLOGI AMERTA KABUPATEN BOGOR',
            ],
            '4006' => [
                'npsn' => '20253671',
                'nama' => 'SMKS ISLAM MIFTAHUL HUDA KABUPATEN BOGOR',
            ],
            '4007' => [
                'npsn' => '20232426',
                'nama' => 'SMKS PLUS AT THAHIRIN KABUPATEN BOGOR',
            ],
            '4008' => [
                'npsn' => '20232446',
                'nama' => 'SMKS GAZZA WIGUNA 1 MEGAMENDUNG KABUPATEN BOGOR',
            ],
            '4009' => [
                'npsn' => '20254149',
                'nama' => 'SMKS TERPADU YAPISA KABUPATEN BOGOR',
            ],
            '4010' => [
                'npsn' => '20232447',
                'nama' => 'SMKS GAZZA WIGUNA 2 MEGAMENDUNG KABUPATEN BOGOR',
            ],
            '4011' => [
                'npsn' => '69728750',
                'nama' => 'SMKS KARYA INSANI KABUPATEN BOGOR',
            ],
            '4012' => [
                'npsn' => '69990743',
                'nama' => 'SMAS ISLAM TERPADU AL MUSTHAFAWIYAH KABUPATEN BOGOR',
            ],
            '4013' => [
                'npsn' => '69948173',
                'nama' => 'SMKS IT AL MUSTHAFAWIYAH KABUPATEN BOGOR',
            ],
            '4014' => [
                'npsn' => '20231459',
                'nama' => 'SMKS YMA MEGAMENDUNG KABUPATEN BOGOR',
            ],
            '4015' => [
                'npsn' => '70026880',
                'nama' => 'SMAS SEKOLAH ALAM CIKEAS KABUPATEN BOGOR',
            ],
            '4016' => [
                'npsn' => '69765081',
                'nama' => 'SMKS PRATAMA KABUPATEN BOGOR',
            ],
            '4017' => [
                'npsn' => '69873999',
                'nama' => 'SMAS KRISTEN PENABUR KOTA WISATA KABUPATEN BOGOR',
            ],
            '4018' => [
                'npsn' => '69964918',
                'nama' => 'SMAS TERUNA MUDA KABUPATEN BOGOR',
            ],
            '4019' => [
                'npsn' => '20253974',
                'nama' => 'SMAS TRISULA KABUPATEN BOGOR',
            ],
            '4020' => [
                'npsn' => '20268965',
                'nama' => 'SMAS PLUS CENDEKIA CIKEAS KABUPATEN BOGOR',
            ],
            '4021' => [
                'npsn' => '20232448',
                'nama' => 'SMKS GENERASI MANDIRI GUNUNG PUTRI KABUPATEN BOGOR',
            ],
            '4022' => [
                'npsn' => '20232434',
                'nama' => 'SMKS BINA PENDIDIKAN 2 BOGOR KABUPATEN BOGOR',
            ],
            '4023' => [
                'npsn' => '20231453',
                'nama' => 'SMKS YAPSA KABUPATEN BOGOR',
            ],
            '4024' => [
                'npsn' => '20254256',
                'nama' => 'SMKS BIT BINA AULIA KABUPATEN BOGOR',
            ],
            '4025' => [
                'npsn' => '20272050',
                'nama' => 'SMKS PLUS CINDERA HATI KABUPATEN BOGOR',
            ],
            '4026' => [
                'npsn' => '69860537',
                'nama' => 'SMKS FAJAR KABUPATEN BOGOR',
            ],
            '4027' => [
                'npsn' => '69728240',
                'nama' => 'SMKS JOYOREJO KABUPATEN BOGOR',
            ],
            '4028' => [
                'npsn' => '20253598',
                'nama' => 'SMKS WIRADIKARYA KABUPATEN BOGOR',
            ],
            '4029' => [
                'npsn' => '20253548',
                'nama' => 'SMKS HARAPAN KABUPATEN BOGOR',
            ],
            '4030' => [
                'npsn' => '20231301',
                'nama' => 'SMAS AL MUKLISIN KABUPATEN BOGOR',
            ],
            '4031' => [
                'npsn' => '20228539',
                'nama' => 'SMKS 2 LPPM RI MAJALAYA KABUPATEN BANDUNG',
            ],
            '4032' => [
                'npsn' => '20227860',
                'nama' => 'SMAS MUHAMMADIYAH 2 MAJALAYA KABUPATEN BANDUNG',
            ],
            '4033' => [
                'npsn' => '20228538',
                'nama' => 'SMKS 1 LPPM RI MAJALAYA KABUPATEN BANDUNG',
            ],
            '4034' => [
                'npsn' => '20256564',
                'nama' => 'SMKN 1 MAJALAYA KABUPATEN BANDUNG',
            ],
            '4035' => [
                'npsn' => 'NP074347',
                'nama' => 'SMAS DAAR EL SALAM KABUPATEN BOGOR',
            ],
            '4036' => [
                'npsn' => '20232435',
                'nama' => 'SMKS BINA PENDIDIKAN 3 BOGOR KABUPATEN BOGOR',
            ],
            '4037' => [
                'npsn' => '20231277',
                'nama' => 'SMAS BINA BANGSA MANDIRI KABUPATEN BOGOR',
            ],
            '4038' => [
                'npsn' => '20232409',
                'nama' => 'SMAS YAPIDA KABUPATEN BOGOR',
            ],
            '4039' => [
                'npsn' => '20254097',
                'nama' => 'SMAS KETAPANG 3 KABUPATEN BOGOR',
            ],
            '4040' => [
                'npsn' => '20253279',
                'nama' => 'SMAS BUNDA KABUPATEN BOGOR',
            ],
            '4041' => [
                'npsn' => '20231283',
                'nama' => 'SMAS BUNDA HATI KUDUS KABUPATEN BOGOR',
            ],
            '4042' => [
                'npsn' => '20252184',
                'nama' => 'SMAS FAJAR HIDAYAH KABUPATEN BOGOR',
            ],
            '4043' => [
                'npsn' => '20268738',
                'nama' => 'SMAS AN NUR ALIYYAH KABUPATEN BOGOR',
            ],
            '4044' => [
                'npsn' => '20231421',
                'nama' => 'SMKN 1 GUNUNGPUTRI KABUPATEN BOGOR',
            ],
            '4045' => [
                'npsn' => '20232457',
                'nama' => 'SMKS MAKARYA 2 BOGOR KABUPATEN BOGOR',
            ],
            '4046' => [
                'npsn' => '69909748',
                'nama' => 'SMKS AL FURQON KABUPATEN BOGOR',
            ],
            '4047' => [
                'npsn' => '20253655',
                'nama' => 'SMKS MUTIARA HIKMAH KABUPATEN SUKABUMI',
            ],
            '4048' => [
                'npsn' => '20273960',
                'nama' => 'SMAS ISLAM TERPADU SASAMA KABUPATEN BANDUNG',
            ],
            '4049' => [
                'npsn' => '20227947',
                'nama' => 'SMKS KP 3 MAJALAYA KABUPATEN BANDUNG',
            ],
            '4050' => [
                'npsn' => '20271836',
                'nama' => 'SMKS AN NUR IBUN KABUPATEN BANDUNG',
            ],
            '4051' => [
                'npsn' => '69894045',
                'nama' => 'SMKS BINA INSANI IBUN KABUPATEN BANDUNG',
            ],
            '4052' => [
                'npsn' => '20227850',
                'nama' => 'SMAS KP 1 PASEH KABUPATEN BANDUNG',
            ],
            '4053' => [
                'npsn' => '20227946',
                'nama' => 'SMKS KP 2 MAJALAYA KABUPATEN BANDUNG',
            ],
            '4054' => [
                'npsn' => '20258479',
                'nama' => 'SLBS BAG BC YKS I MAJALAYA KABUPATEN BANDUNG',
            ],
            '4055' => [
                'npsn' => '20202288',
                'nama' => 'SMAN 1 CIKEMBAR KABUPATEN SUKABUMI',
            ],
            '4056' => [
                'npsn' => '20232356',
                'nama' => 'SMAS DARUL KHOLIDIN KABUPATEN BOGOR',
            ],
            '4057' => [
                'npsn' => '20231312',
                'nama' => 'SMAS MADANIA KABUPATEN BOGOR',
            ],
            '4058' => [
                'npsn' => '20200597',
                'nama' => 'SMKS WIYATA KHARISMA KABUPATEN BOGOR',
            ],
            '4059' => [
                'npsn' => '20200589',
                'nama' => 'SMKS CITRA BANGSA KABUPATEN BOGOR',
            ],
            '4060' => [
                'npsn' => '20231317',
                'nama' => 'SMAS MARSUDIRINI KABUPATEN BOGOR',
            ],
            '4061' => [
                'npsn' => '20253393',
                'nama' => 'SMKS BUDIASIH PRATAMA KABUPATEN BOGOR',
            ],
            '4062' => [
                'npsn' => '20231361',
                'nama' => 'SMAS YADIKA 7 BOGOR KABUPATEN BOGOR',
            ],
            '4063' => [
                'npsn' => '20269975',
                'nama' => 'SMKS LUQMAN AL HAKIM KABUPATEN BOGOR',
            ],
            '4064' => [
                'npsn' => '20232477',
                'nama' => 'SMKS PENERBANGAN ANGKASA KABUPATEN BOGOR',
            ],
            '4065' => [
                'npsn' => '20200610',
                'nama' => 'SMKS YADIKA 7 BOGOR KABUPATEN BOGOR',
            ],
            '4066' => [
                'npsn' => '20231440',
                'nama' => 'SMKS TARUNA TERPADU 2 KABUPATEN BOGOR',
            ],
            '4067' => [
                'npsn' => '20232487',
                'nama' => 'SMKS TARUNA TERPADU 1 KABUPATEN BOGOR',
            ],
            '4068' => [
                'npsn' => '70025861',
                'nama' => 'SMKS EKA NUSA PUTRA KABUPATEN SUKABUMI',
            ],
            '4069' => [
                'npsn' => '69919117',
                'nama' => 'SMKS TIRTA UMRAN TERPADU KABUPATEN SUKABUMI',
            ],
            '4070' => [
                'npsn' => '20271154',
                'nama' => 'SMKS BINA BAHARI KABUPATEN SUKABUMI',
            ],
            '4071' => [
                'npsn' => '69757439',
                'nama' => 'SMKS AL MUHAJIRIN KABUPATEN SUKABUMI',
            ],
            '4072' => [
                'npsn' => '20254148',
                'nama' => 'SMKS KESEHATAN PUJA MEDIKA HUSADA KABUPATEN SUKABUMI',
            ],
            '4073' => [
                'npsn' => '69734151',
                'nama' => 'SMKS AL MUMTAZ KABUPATEN SUKABUMI',
            ],
            '4074' => [
                'npsn' => '60725292',
                'nama' => 'SMKS GEMA PELITA KABUPATEN CIANJUR',
            ],
            '4075' => [
                'npsn' => '20252008',
                'nama' => 'SMAN 1 CIKIDANG KABUPATEN SUKABUMI',
            ],
            '4076' => [
                'npsn' => '20202263',
                'nama' => 'SMAN 1 JAMPANGKULON KABUPATEN SUKABUMI',
            ],
            '4077' => [
                'npsn' => '20232485',
                'nama' => 'SMKS SATRIA BANGSA KABUPATEN BOGOR',
            ],
            '4078' => [
                'npsn' => '20267731',
                'nama' => 'SMKS GARUDA BANGSA KABUPATEN BOGOR',
            ],
            '4079' => [
                'npsn' => '20272047',
                'nama' => 'SMKS TONJONG KABUPATEN BOGOR',
            ],
            '4080' => [
                'npsn' => '20253855',
                'nama' => 'SMKS LABORATORIUM INDONESIA KABUPATEN BOGOR',
            ],
            '4081' => [
                'npsn' => '20258348',
                'nama' => 'SMKS ARRAHMANIYAH KABUPATEN BOGOR',
            ],
            '4082' => [
                'npsn' => '20268197',
                'nama' => 'SMKS AL MUBAROKATUSSAADILLAH KABUPATEN SUKABUMI',
            ],
            '4083' => [
                'npsn' => '20254146',
                'nama' => 'SMKS PARADIS WALURAN KABUPATEN SUKABUMI',
            ],
            '4084' => [
                'npsn' => '69754715',
                'nama' => 'SMKS KESEHATAN JUANG KENCANA KABUPATEN SUKABUMI',
            ],
            '4085' => [
                'npsn' => '69758946',
                'nama' => 'SMKS PTN CICANTAYAN KABUPATEN SUKABUMI',
            ],
            '4086' => [
                'npsn' => '69752142',
                'nama' => 'SMKS AL HUSAENIYAH KABUPATEN SUKABUMI',
            ],
            '4087' => [
                'npsn' => '69728615',
                'nama' => 'SMKS AL AUDI KABUPATEN SUKABUMI',
            ],
            '4088' => [
                'npsn' => '20232483',
                'nama' => 'SMKS PIONIR KABUPATEN BOGOR',
            ],
            '4089' => [
                'npsn' => '20268241',
                'nama' => 'SMKS AL FIQORIYAH KABUPATEN BOGOR',
            ],
            '4090' => [
                'npsn' => '20268832',
                'nama' => 'SMKS PARIWISATA CITAYAM KABUPATEN BOGOR',
            ],
            '4091' => [
                'npsn' => '20268219',
                'nama' => 'SMKS WIRABUANA 1 KABUPATEN BOGOR',
            ],
            '4092' => [
                'npsn' => '20254047',
                'nama' => 'SMKS MEDIA TEKNOLOGI KABUPATEN BOGOR',
            ],
            '4093' => [
                'npsn' => '69755439',
                'nama' => 'SMKS CAKRAWALA KABUPATEN BOGOR',
            ],
            '4094' => [
                'npsn' => '20232304',
                'nama' => 'SMAS AL BASYARIAH KABUPATEN BOGOR',
            ],
            '4095' => [
                'npsn' => '20232416',
                'nama' => 'SMKS AL BASYARIAH KABUPATEN BOGOR',
            ],
            '4096' => [
                'npsn' => '69896556',
                'nama' => 'SMKS AL HUSNA KABUPATEN BOGOR',
            ],
            '4097' => [
                'npsn' => '20253652',
                'nama' => 'SMKS BINA BANGSA 1 SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4098' => [
                'npsn' => '20247156',
                'nama' => 'SMAS ISLAM TARBIYYATUL FALAH KABUPATEN SUKABUMI',
            ],
            '4099' => [
                'npsn' => '20232411',
                'nama' => 'SMAS YAPNI KABUPATEN BOGOR',
            ],
            '4100' => [
                'npsn' => '20231405',
                'nama' => 'SMKS INSAN KREATIF KABUPATEN BOGOR',
            ],
            '4101' => [
                'npsn' => '20253322',
                'nama' => 'SMAS CITRA MADANI KABUPATEN BOGOR',
            ],
            '4102' => [
                'npsn' => '69787012',
                'nama' => 'SMKS KESEHATAN CITRA HUSADA KABUPATEN BOGOR',
            ],
            '4103' => [
                'npsn' => '69899185',
                'nama' => 'SMKS SAPTA MARGA KABUPATEN BOGOR',
            ],
            '4104' => [
                'npsn' => '69759190',
                'nama' => 'SMKS MIGAS CIBINONG KABUPATEN BOGOR',
            ],
            '4105' => [
                'npsn' => '20232306',
                'nama' => 'SMAS AL HIDAYAH KABUPATEN BOGOR',
            ],
            '4106' => [
                'npsn' => '20231411',
                'nama' => 'SMKS MEKANIK CIBINONG KABUPATEN BOGOR',
            ],
            '4107' => [
                'npsn' => '20231390',
                'nama' => 'SMKS BINA TEKNOLOGI KABUPATEN BOGOR',
            ],
            '4108' => [
                'npsn' => '69830365',
                'nama' => 'SMKN 2 CIBINONG KABUPATEN BOGOR',
            ],
            '4109' => [
                'npsn' => '20276390',
                'nama' => 'SMKS GENERASI MADANI KABUPATEN BOGOR',
            ],
            '4110' => [
                'npsn' => '20232305',
                'nama' => 'SMAS AL FALAH KABUPATEN BOGOR',
            ],
            '4111' => [
                'npsn' => '20232326',
                'nama' => 'SMAS CITRA NUSA KABUPATEN BOGOR',
            ],
            '4112' => [
                'npsn' => '69753668',
                'nama' => 'SMKS TI BUMI PUTRA CIBINONG KABUPATEN BOGOR',
            ],
            '4113' => [
                'npsn' => '20231403',
                'nama' => 'SMKS HARAPAN KITA BOGOR KABUPATEN BOGOR',
            ],
            '4114' => [
                'npsn' => '20231414',
                'nama' => 'SMKS MOTIVASI INSANI KABUPATEN BOGOR',
            ],
            '4115' => [
                'npsn' => '10648865',
                'nama' => 'SMKS TEKNOMEDIKA PLUS KABUPATEN BOGOR',
            ],
            '4116' => [
                'npsn' => '69892599',
                'nama' => 'SMKS KESEHATAN AMALIAH CIBINONG KABUPATEN BOGOR',
            ],
            '4117' => [
                'npsn' => '20231431',
                'nama' => 'SMKS PLUS PGRI 1 CIBINONG KABUPATEN BOGOR',
            ],
            '4118' => [
                'npsn' => '20200593',
                'nama' => 'SMKS MANUNGGAL CIBINONG BOGOR KABUPATEN BOGOR',
            ],
            '4119' => [
                'npsn' => '70029070',
                'nama' => 'SMAS AL QUR`AN WAHDAH ISLAMIYAH CIBINONG KABUPATEN BOGOR',
            ],
            '4120' => [
                'npsn' => '20279946',
                'nama' => 'SMKS BHAKTI KENCANA KABUPATEN BOGOR',
            ],
            '4121' => [
                'npsn' => '20231434',
                'nama' => 'SMKS PGRI CITEUREUP KABUPATEN BOGOR',
            ],
            '4122' => [
                'npsn' => '20200675',
                'nama' => 'SMAS TRIPLE J CITEUREUP KABUPATEN BOGOR',
            ],
            '4123' => [
                'npsn' => '20232310',
                'nama' => 'SMAS AL KHAIRIYAH KABUPATEN BOGOR',
            ],
            '4124' => [
                'npsn' => '20279817',
                'nama' => 'SMKS PANCA KARYA SENTUL KABUPATEN BOGOR',
            ],
            '4125' => [
                'npsn' => '20280618',
                'nama' => 'SMKS DARUL MUSLIM KABUPATEN BOGOR',
            ],
            '4126' => [
                'npsn' => '69756124',
                'nama' => 'SMKS PUSPA MEKAR KABUPATEN BOGOR',
            ],
            '4127' => [
                'npsn' => '69754153',
                'nama' => 'SMKS TI ANNISA 2 KABUPATEN BOGOR',
            ],
            '4128' => [
                'npsn' => '10648863',
                'nama' => 'SMKS KESEHATAN ANNISA 3 KABUPATEN BOGOR',
            ],
            '4129' => [
                'npsn' => '20232491',
                'nama' => 'SMKS 2 TRIPLE J CITEUREUP KABUPATEN BOGOR',
            ],
            '4130' => [
                'npsn' => '20232494',
                'nama' => 'SMKS WIDYA DHARMA 2 CITEUREUP KABUPATEN BOGOR',
            ],
            '4131' => [
                'npsn' => '20268950',
                'nama' => 'SMAS NURUL HIKMAH KABUPATEN BOGOR',
            ],
            '4132' => [
                'npsn' => '20232329',
                'nama' => 'SMAS DARUT TAQWA KABUPATEN BOGOR',
            ],
            '4133' => [
                'npsn' => '69774613',
                'nama' => 'SMKS KESEHATAN BHAKTI MANDIRI KABUPATEN BOGOR',
            ],
            '4134' => [
                'npsn' => '20232303',
                'nama' => 'SMAS AL ASIYAH KABUPATEN BOGOR',
            ],
            '4135' => [
                'npsn' => '20253814',
                'nama' => 'SMKS EKA WIJAYA KABUPATEN BOGOR',
            ],
            '4136' => [
                'npsn' => '20232496',
                'nama' => 'SMKS WIJAYAKUSUMA KABUPATEN BOGOR',
            ],
            '4137' => [
                'npsn' => '20230406',
                'nama' => 'SLBN KABUPATEN BOGOR',
            ],
            '4138' => [
                'npsn' => '20232396',
                'nama' => 'SMAS PGRI CIBINONG KABUPATEN BOGOR',
            ],
            '4139' => [
                'npsn' => '20200687',
                'nama' => 'SMAS EKAWIJAYA CIBINONG KABUPATEN BOGOR',
            ],
            '4140' => [
                'npsn' => '20231316',
                'nama' => 'SMAS MARDI WALUYA KABUPATEN BOGOR',
            ],
            '4141' => [
                'npsn' => '69759136',
                'nama' => 'SMKS TRIMITSA KABUPATEN BOGOR',
            ],
            '4142' => [
                'npsn' => '20269642',
                'nama' => 'SMKS KSATRIA BANGSA CITEUREUP KABUPATEN BOGOR',
            ],
            '4143' => [
                'npsn' => '20270490',
                'nama' => 'SMKS ISLAM MADANI AL HUSAINIYAH KABUPATEN BOGOR',
            ],
            '4144' => [
                'npsn' => '20252951',
                'nama' => 'SMKS TERPADU AL ITTIHAD KABUPATEN SUKABUMI',
            ],
            '4145' => [
                'npsn' => '69992903',
                'nama' => 'SMAS PLUS AL RAIHAN KABUPATEN SUKABUMI',
            ],
            '4146' => [
                'npsn' => '20252855',
                'nama' => 'SMAS ISLAM AS SYAFIIYAH KABUPATEN SUKABUMI',
            ],
            '4147' => [
                'npsn' => '70000534',
                'nama' => 'SMAS PLUS INSAN ADZKIA KABUPATEN SUKABUMI',
            ],
            '4148' => [
                'npsn' => '20253030',
                'nama' => 'SMAS AL KHOLILIYAH KABUPATEN SUKABUMI',
            ],
            '4149' => [
                'npsn' => '20252604',
                'nama' => 'SMKS YASIDIK KABUPATEN SUKABUMI',
            ],
            '4150' => [
                'npsn' => '69902487',
                'nama' => 'SMAS AWWALULHUDA KABUPATEN CIANJUR',
            ],
            '4151' => [
                'npsn' => '69921082',
                'nama' => 'SMAS BINA INSAN MULIA CIBINONG KABUPATEN CIANJUR',
            ],
            '4152' => [
                'npsn' => '20232503',
                'nama' => 'SMKS YASTRIF 1 PARUNGPANJANG KABUPATEN BOGOR',
            ],
            '4153' => [
                'npsn' => '69754542',
                'nama' => 'SMKS SULTAN AGUNG KABUPATEN BOGOR',
            ],
            '4154' => [
                'npsn' => '20232369',
                'nama' => 'SMAS MULIA BUANA KABUPATEN BOGOR',
            ],
            '4155' => [
                'npsn' => '20253557',
                'nama' => 'SMAS MATHLAHUL HUDA KABUPATEN BOGOR',
            ],
            '4156' => [
                'npsn' => '20230407',
                'nama' => 'SLBS AYAH BUNDA KABUPATEN BOGOR',
            ],
            '4157' => [
                'npsn' => '69861090',
                'nama' => 'SMKS BAKTI PUTRA MANDIRI KABUPATEN BOGOR',
            ],
            '4158' => [
                'npsn' => '20232504',
                'nama' => 'SMKS YASTRIF 2 PARUNGPANJANG KABUPATEN BOGOR',
            ],
            '4159' => [
                'npsn' => '69757497',
                'nama' => 'SMAS AL KAUTSAR KABUPATEN BOGOR',
            ],
            '4160' => [
                'npsn' => '20258522',
                'nama' => 'SMKS MULIA BUANA KABUPATEN BOGOR',
            ],
            '4161' => [
                'npsn' => '69861092',
                'nama' => 'SMKS GAPURA EDUCATIONAL TECHNOLOGY KABUPATEN BOGOR',
            ],
            '4162' => [
                'npsn' => '69888654',
                'nama' => 'SMKS KESEHATAN SAGARANTEN KABUPATEN SUKABUMI',
            ],
            '4163' => [
                'npsn' => '69752157',
                'nama' => 'SMKS DEWANTARA KABUPATEN BOGOR',
            ],
            '4164' => [
                'npsn' => '69894431',
                'nama' => 'SMKS GENERASI CENDIKIA KABUPATEN BOGOR',
            ],
            '4165' => [
                'npsn' => '69978524',
                'nama' => 'SMKS PLUS PELITA NUSANTARA KABUPATEN BOGOR',
            ],
            '4166' => [
                'npsn' => '69978567',
                'nama' => 'SMAS CIPTA CENDIKIA KABUPATEN BOGOR',
            ],
            '4167' => [
                'npsn' => '20232489',
                'nama' => 'SMKS TRIDAYA CIBINONG KABUPATEN BOGOR',
            ],
            '4168' => [
                'npsn' => '69768247',
                'nama' => 'SMKS KESEHATAN PRIMA MULIA KABUPATEN BOGOR',
            ],
            '4169' => [
                'npsn' => '20232327',
                'nama' => 'SMAS PLUS DAARUL FUDLOLA KABUPATEN BOGOR',
            ],
            '4170' => [
                'npsn' => '20271748',
                'nama' => 'SLBS MEKAR SARI 1 KABUPATEN BOGOR',
            ],
            '4171' => [
                'npsn' => '70029407',
                'nama' => 'SMAS IT RAHMANIYAH KABUPATEN BOGOR',
            ],
            '4172' => [
                'npsn' => '20267928',
                'nama' => 'SMKS MEKARWANGI KABUPATEN BOGOR',
            ],
            '4173' => [
                'npsn' => '20232311',
                'nama' => 'SMAS ISLAM TERPADU AL MADINAH KABUPATEN BOGOR',
            ],
            '4174' => [
                'npsn' => '20280616',
                'nama' => 'SMKS INSAN MADANI KABUPATEN BOGOR',
            ],
            '4175' => [
                'npsn' => '20202279',
                'nama' => 'SMKS MUHAMMADIYAH 2 CIBADAK KABUPATEN SUKABUMI',
            ],
            '4176' => [
                'npsn' => '20253662',
                'nama' => 'SMAS BAITUL HIKMAH KABUPATEN SUKABUMI',
            ],
            '4177' => [
                'npsn' => '60726510',
                'nama' => 'SMKS PEMBANGUNAN CIBADAK KABUPATEN SUKABUMI',
            ],
            '4178' => [
                'npsn' => '20247171',
                'nama' => 'SMAS UNWANUL FALAH KABUPATEN SUKABUMI',
            ],
            '4179' => [
                'npsn' => '69960972',
                'nama' => 'SMAS DOA BANGSA KABUPATEN SUKABUMI',
            ],
            '4180' => [
                'npsn' => '20202273',
                'nama' => 'SMKS TAMAN SISWA CIBADAK KABUPATEN SUKABUMI',
            ],
            '4181' => [
                'npsn' => '69734082',
                'nama' => 'SMKS YLA CIBADAK KABUPATEN SUKABUMI',
            ],
            '4182' => [
                'npsn' => '20202287',
                'nama' => 'SMKS LODAYA SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4183' => [
                'npsn' => '20202278',
                'nama' => 'SMKN 1 CIBADAK KABUPATEN SUKABUMI',
            ],
            '4184' => [
                'npsn' => '20280617',
                'nama' => 'SMKS KESEHATAN TUNAS BANGSA KABUPATEN BOGOR',
            ],
            '4185' => [
                'npsn' => '20232433',
                'nama' => 'SMKS BINANTARA CIBINONG KABUPATEN BOGOR',
            ],
            '4186' => [
                'npsn' => '20232432',
                'nama' => 'SMKS BINA INSANI MANDIRI KABUPATEN BOGOR',
            ],
            '4187' => [
                'npsn' => '20276389',
                'nama' => 'SMAS IT RAUDHATUL ULUM KABUPATEN BOGOR',
            ],
            '4188' => [
                'npsn' => '20232423',
                'nama' => 'SMKS ANAK BANGSA KABUPATEN BOGOR',
            ],
            '4189' => [
                'npsn' => '69888795',
                'nama' => 'SMKS TERPADU RANGGANIS KABUPATEN BOGOR',
            ],
            '4190' => [
                'npsn' => '60724699',
                'nama' => 'SMKS YBPI KABUPATEN SUKABUMI',
            ],
            '4191' => [
                'npsn' => '69962735',
                'nama' => 'SMKS AL FATAH SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4192' => [
                'npsn' => '69752367',
                'nama' => 'SMKS JAMIYATUL AULAD KABUPATEN SUKABUMI',
            ],
            '4193' => [
                'npsn' => '20203698',
                'nama' => 'SMAS AL MUAWANAH CIANJUR KABUPATEN CIANJUR',
            ],
            '4194' => [
                'npsn' => '20200691',
                'nama' => 'SMAN 2 CIBINONG KABUPATEN BOGOR',
            ],
            '4195' => [
                'npsn' => '20246436',
                'nama' => 'SMAS AN NAJAH KABUPATEN BOGOR',
            ],
            '4196' => [
                'npsn' => '20231348',
                'nama' => 'SMAS PGRI RUMPIN KABUPATEN BOGOR',
            ],
            '4197' => [
                'npsn' => '20200605',
                'nama' => 'SMKS ISLAM PERMATASARI 1 KABUPATEN BOGOR',
            ],
            '4198' => [
                'npsn' => '69770473',
                'nama' => 'SMAS IT YAPIRA KABUPATEN BOGOR',
            ],
            '4199' => [
                'npsn' => '20253969',
                'nama' => 'SMKS ISLAM ASY SYUHADA KABUPATEN BOGOR',
            ],
            '4200' => [
                'npsn' => '60726517',
                'nama' => 'SMKS HARAPAN NUSA BANGSA KABUPATEN SUKABUMI',
            ],
            '4201' => [
                'npsn' => '69925858',
                'nama' => 'SMKS DZAKIYYUN KABUPATEN CIANJUR',
            ],
            '4202' => [
                'npsn' => '69920073',
                'nama' => 'SMKS BUSTANUL ULUM KABUPATEN CIANJUR',
            ],
            '4203' => [
                'npsn' => '20227877',
                'nama' => 'SMAS PLUS ISLAM PACET KABUPATEN BANDUNG',
            ],
            '4204' => [
                'npsn' => '20256638',
                'nama' => 'SMAS MANGGALA KABUPATEN BANDUNG',
            ],
            '4205' => [
                'npsn' => '70006066',
                'nama' => 'SMAS IT AN NAWAWI AL BANTANI KABUPATEN BOGOR',
            ],
            '4206' => [
                'npsn' => '20232475',
                'nama' => 'SMKS PANTI KARYA 3 GUNUNG SINDUR KABUPATEN BOGOR',
            ],
            '4207' => [
                'npsn' => '20258064',
                'nama' => 'SMKS HARAPAN BANGSA KABUPATEN SUKABUMI',
            ],
            '4208' => [
                'npsn' => '69786222',
                'nama' => 'SMAS COKROAMINOTO SUKARESMI KABUPATEN CIANJUR',
            ],
            '4209' => [
                'npsn' => '20227881',
                'nama' => 'SMAS SWADAYA KARYA CIWIDEY KABUPATEN BANDUNG',
            ],
            '4210' => [
                'npsn' => '20227876',
                'nama' => 'SMAS PERKAPEN SINUMBRA KABUPATEN BANDUNG',
            ],
            '4211' => [
                'npsn' => '20228515',
                'nama' => 'SMKS ANGKASA 1 MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4212' => [
                'npsn' => '20271837',
                'nama' => 'SMKS KP 2 MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4213' => [
                'npsn' => '20227928',
                'nama' => 'SMKS ANGKASA 2 MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4214' => [
                'npsn' => '69883580',
                'nama' => 'SMKN 1 RANCABALI KABUPATEN BANDUNG',
            ],
            '4215' => [
                'npsn' => '20257671',
                'nama' => 'SMAS ASHRIYAH NURUL IMAN KABUPATEN BOGOR',
            ],
            '4216' => [
                'npsn' => '20275885',
                'nama' => 'SMKS MUTIARA INSANI PARUNG KABUPATEN BOGOR',
            ],
            '4217' => [
                'npsn' => '20268527',
                'nama' => 'SMKS YPUI KABUPATEN BOGOR',
            ],
            '4218' => [
                'npsn' => '69860538',
                'nama' => 'SMKS ISLAM TERPADU AL QOSIMIYYAH KABUPATEN BOGOR',
            ],
            '4219' => [
                'npsn' => '20200686',
                'nama' => 'SMAS DWI WARNA KABUPATEN BOGOR',
            ],
            '4220' => [
                'npsn' => '20232465',
                'nama' => 'SMKS MUHAMMADIYAH PARUNG KABUPATEN BOGOR',
            ],
            '4221' => [
                'npsn' => '69787173',
                'nama' => 'SMAS SCHOOL OF UNIVERSE KABUPATEN BOGOR',
            ],
            '4222' => [
                'npsn' => '69893232',
                'nama' => 'SMAS PGRI BANTARGADUNG KABUPATEN SUKABUMI',
            ],
            '4223' => [
                'npsn' => '69842628',
                'nama' => 'SMKS AL MA`SHUM MARDIYAH KABUPATEN CIANJUR',
            ],
            '4224' => [
                'npsn' => '69978196',
                'nama' => 'SMKS GEMA INSANI KABUPATEN CIANJUR',
            ],
            '4225' => [
                'npsn' => '20247146',
                'nama' => 'SMAS AL BAIRUNI KABUPATEN SUKABUMI',
            ],
            '4226' => [
                'npsn' => '20269163',
                'nama' => 'SMKS GENTRA PASUNDAN KABUPATEN SUKABUMI',
            ],
            '4227' => [
                'npsn' => '69957240',
                'nama' => 'SMKS TARUNA MANDIRI KABUPATEN SUKABUMI',
            ],
            '4228' => [
                'npsn' => '20246335',
                'nama' => 'SMAS PLUS YASPIDA KABUPATEN SUKABUMI',
            ],
            '4229' => [
                'npsn' => '69946750',
                'nama' => 'SMKS WAHDATUL UMMAT KABUPATEN SUKABUMI',
            ],
            '4230' => [
                'npsn' => '20257493',
                'nama' => 'SMKS PLUS AL FARHAN KABUPATEN SUKABUMI',
            ],
            '4231' => [
                'npsn' => '20252607',
                'nama' => 'SMKS TERPADU 1 YASPIDA SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4232' => [
                'npsn' => '20202276',
                'nama' => 'SMKS TERPADU 2 YASPIDA SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4233' => [
                'npsn' => '20258510',
                'nama' => 'SMKS PERTANIAN KADUDAMPIT KABUPATEN SUKABUMI',
            ],
            '4234' => [
                'npsn' => '20247150',
                'nama' => 'SMAS AT TIJARAH KABUPATEN SUKABUMI',
            ],
            '4235' => [
                'npsn' => '69979656',
                'nama' => 'SMAS AL UMANAA BOARDING SCHOOL KABUPATEN SUKABUMI',
            ],
            '4236' => [
                'npsn' => '69892682',
                'nama' => 'SMKS NUSANTARA 89 KABUPATEN SUKABUMI',
            ],
            '4237' => [
                'npsn' => '69920252',
                'nama' => 'SMKS PLUS CENDIKIA KABUPATEN SUKABUMI',
            ],
            '4238' => [
                'npsn' => '60724698',
                'nama' => 'SMKS BUMI RIYADHUTHOLIBIN KABUPATEN SUKABUMI',
            ],
            '4239' => [
                'npsn' => '20253315',
                'nama' => 'SMKS YASHIKA KABUPATEN SUKABUMI',
            ],
            '4240' => [
                'npsn' => '69888463',
                'nama' => 'SMKS BINA MANDIRI 2 KABUPATEN SUKABUMI',
            ],
            '4241' => [
                'npsn' => '20269164',
                'nama' => 'SMKS AL BASHRY KABUPATEN SUKABUMI',
            ],
            '4242' => [
                'npsn' => '20253654',
                'nama' => 'SMKS NUURUL BAYAN KALAPANUNGGAL KABUPATEN SUKABUMI',
            ],
            '4243' => [
                'npsn' => '69895918',
                'nama' => 'SMKS IT PUNCAK MULIA KABUPATEN CIANJUR',
            ],
            '4244' => [
                'npsn' => '69899008',
                'nama' => 'SMAS BUDI BAKTI 1 KABUPATEN CIANJUR',
            ],
            '4245' => [
                'npsn' => '69830092',
                'nama' => 'SMKS AGRAPURA PARAHITA KABUPATEN CIANJUR',
            ],
            '4246' => [
                'npsn' => '20247147',
                'nama' => 'SMAS PESANTREN UNGGUL AL BAYAN KABUPATEN SUKABUMI',
            ],
            '4247' => [
                'npsn' => '69888445',
                'nama' => 'SMAS PLUS KEMBANG KUNING KABUPATEN SUKABUMI',
            ],
            '4248' => [
                'npsn' => '70014071',
                'nama' => 'SMAS NURUL HUDA KABUPATEN CIANJUR',
            ],
            '4249' => [
                'npsn' => '69903026',
                'nama' => 'SMAS MIFTAHUL ULUM KABUPATEN CIANJUR',
            ],
            '4250' => [
                'npsn' => '69968640',
                'nama' => 'SMKS AZ ZARKASYIH KABUPATEN CIANJUR',
            ],
            '4251' => [
                'npsn' => '20203705',
                'nama' => 'SMAS MIFTAHUL HUDA KABUPATEN CIANJUR',
            ],
            '4252' => [
                'npsn' => '20252044',
                'nama' => 'SMKS BINA PUTRA NUGRAHA KABUPATEN CIANJUR',
            ],
            '4253' => [
                'npsn' => '69943680',
                'nama' => 'SMAS AL KAMIL ISLAMIC BOARDING SCHOOL KABUPATEN CIANJUR',
            ],
            '4254' => [
                'npsn' => '69947490',
                'nama' => 'SMKS AL LUTFHI KABUPATEN CIANJUR',
            ],
            '4255' => [
                'npsn' => '69883636',
                'nama' => 'SMKN 2 LELES KABUPATEN CIANJUR',
            ],
            '4256' => [
                'npsn' => '20253129',
                'nama' => 'SLBN HANDAYANI KABUPATEN SUKABUMI',
            ],
            '4257' => [
                'npsn' => '57580344',
                'nama' => 'SLBS PGRI CISAAT KABUPATEN SUKABUMI',
            ],
            '4258' => [
                'npsn' => '20247144',
                'nama' => 'SMAS AL MASTHURIYAH KABUPATEN SUKABUMI',
            ],
            '4259' => [
                'npsn' => '20202277',
                'nama' => 'SMKS YASTI CISAAT SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4260' => [
                'npsn' => '20254196',
                'nama' => 'SMKS PGRI CISAAT KABUPATEN SUKABUMI',
            ],
            '4261' => [
                'npsn' => '20247313',
                'nama' => 'SMKS DAARUSSALAAM KABUPATEN SUKABUMI',
            ],
            '4262' => [
                'npsn' => '70032798',
                'nama' => 'SMAS ISLAM PROGRESIF DAARUSSALAAM KABUPATEN SUKABUMI',
            ],
            '4263' => [
                'npsn' => '20202281',
                'nama' => 'SMKS AL MASTHURIYAH SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4264' => [
                'npsn' => '69874019',
                'nama' => 'SMAS ISLAM TERPADU YALHAS KABUPATEN SUKABUMI',
            ],
            '4265' => [
                'npsn' => '20247166',
                'nama' => 'SMAS PLUS AL MANSHURIYAH KABUPATEN SUKABUMI',
            ],
            '4266' => [
                'npsn' => '69954585',
                'nama' => 'SMAS NURUL HUDA BOJONGGALING KABUPATEN SUKABUMI',
            ],
            '4267' => [
                'npsn' => '69983739',
                'nama' => 'SMKS BP AL ATIQIYAH KABUPATEN SUKABUMI',
            ],
            '4268' => [
                'npsn' => '20258142',
                'nama' => 'SLBS BAKTI PERTIWI KABUPATEN SUKABUMI',
            ],
            '4269' => [
                'npsn' => '69758275',
                'nama' => 'SMKS AR RAHMA KABUPATEN SUKABUMI',
            ],
            '4270' => [
                'npsn' => '69786517',
                'nama' => 'SMKS ISLAM NURUL HUDA KABUPATEN SUKABUMI',
            ],
            '4271' => [
                'npsn' => '69888787',
                'nama' => 'SMAS PGRI CIDAHU KABUPATEN SUKABUMI',
            ],
            '4272' => [
                'npsn' => '20275994',
                'nama' => 'SLBS BAG ABC ANUGRAH KABUPATEN SUKABUMI',
            ],
            '4273' => [
                'npsn' => '60726511',
                'nama' => 'SMKS YPM CIDAHU KABUPATEN SUKABUMI',
            ],
            '4274' => [
                'npsn' => '20247161',
                'nama' => 'SMAS PESANTREN HUSNAYAIN KABUPATEN SUKABUMI',
            ],
            '4275' => [
                'npsn' => '69943791',
                'nama' => 'SMKS AL INAYAH KABUPATEN CIANJUR',
            ],
            '4276' => [
                'npsn' => '69758123',
                'nama' => 'SMAS AL FALAH KABUPATEN CIANJUR',
            ],
            '4277' => [
                'npsn' => '69944511',
                'nama' => 'SMKS BINA INSAN AL FALAH KABUPATEN CIANJUR',
            ],
            '4278' => [
                'npsn' => '20254290',
                'nama' => 'SMKS YASPI AL FALAH KABUPATEN CIANJUR',
            ],
            '4279' => [
                'npsn' => '69925473',
                'nama' => 'SMAS NURUL JANAH KABUPATEN CIANJUR',
            ],
            '4280' => [
                'npsn' => '69888479',
                'nama' => 'SMKS ISLAM NURUL IKHWAN KABUPATEN SUKABUMI',
            ],
            '4281' => [
                'npsn' => '69904295',
                'nama' => 'SMKS INSAN KAMIL KABUPATEN SUKABUMI',
            ],
            '4282' => [
                'npsn' => '69733909',
                'nama' => 'SMKS AL HIKMAH KABUPATEN SUKABUMI',
            ],
            '4283' => [
                'npsn' => '20268425',
                'nama' => 'SMKS ISLAM AL QUDSIYAH KABUPATEN SUKABUMI',
            ],
            '4284' => [
                'npsn' => '20202285',
                'nama' => 'SMKS DWI DARMA KABUPATEN SUKABUMI',
            ],
            '4285' => [
                'npsn' => '69755799',
                'nama' => 'SMKS WIRA INFORMATIKA GLOBAL KABUPATEN SUKABUMI',
            ],
            '4286' => [
                'npsn' => '20202283',
                'nama' => 'SMKS BINA BAKTI PERTIWI KABUPATEN SUKABUMI',
            ],
            '4287' => [
                'npsn' => '20247155',
                'nama' => 'SMAS ISLAM MIFTAUSSA`ADAH KABUPATEN SUKABUMI',
            ],
            '4288' => [
                'npsn' => '69950289',
                'nama' => 'SMAS PLUS DAMAR BANGSA KABUPATEN SUKABUMI',
            ],
            '4289' => [
                'npsn' => '60726515',
                'nama' => 'SMKN 1 SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4290' => [
                'npsn' => '20252994',
                'nama' => 'SMKS TEKNIK CICURUG CENTER KABUPATEN SUKABUMI',
            ],
            '4291' => [
                'npsn' => '69981846',
                'nama' => 'SMKS MIGAS CICURUG KABUPATEN SUKABUMI',
            ],
            '4292' => [
                'npsn' => '69946747',
                'nama' => 'SMKS M BENDA KABUPATEN SUKABUMI',
            ],
            '4293' => [
                'npsn' => '69726566',
                'nama' => 'SMKS BHAKTI KENCANA CICURUG KABUPATEN SUKABUMI',
            ],
            '4294' => [
                'npsn' => '20202286',
                'nama' => 'SMKS EKA PRASETYA KABUPATEN SUKABUMI',
            ],
            '4295' => [
                'npsn' => '69888758',
                'nama' => 'SMKS INFORMATIKA CBI KABUPATEN SUKABUMI',
            ],
            '4296' => [
                'npsn' => '20247149',
                'nama' => 'SMAS AMALIYAH KABUPATEN SUKABUMI',
            ],
            '4297' => [
                'npsn' => '20247163',
                'nama' => 'SMAS PGRI CICURUG KABUPATEN SUKABUMI',
            ],
            '4298' => [
                'npsn' => '20202270',
                'nama' => 'SMKS PARIWISATA INDONESIA SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4299' => [
                'npsn' => '20247159',
                'nama' => 'SMAS KHARISMAS 39 KABUPATEN SUKABUMI',
            ],
            '4300' => [
                'npsn' => '20253657',
                'nama' => 'SMKS TAMAN GLOBAL CICURUG KABUPATEN SUKABUMI',
            ],
            '4301' => [
                'npsn' => '60726666',
                'nama' => 'SMKS UNGGUL KALPATARU KABUPATEN SUKABUMI',
            ],
            '4302' => [
                'npsn' => '20253663',
                'nama' => 'SMAS AL BASHRIYAH KABUPATEN SUKABUMI',
            ],
            '4303' => [
                'npsn' => '20247167',
                'nama' => 'SMAS PLUS DARUL HIDAYAH KABUPATEN SUKABUMI',
            ],
            '4304' => [
                'npsn' => '69772581',
                'nama' => 'SMKS BHAKTI PERTIWI INDONESIA KABUPATEN SUKABUMI',
            ],
            '4305' => [
                'npsn' => '69939986',
                'nama' => 'SMKS ISLAM TAMAN FIRDAUS KABUPATEN SUKABUMI',
            ],
            '4306' => [
                'npsn' => '20258120',
                'nama' => 'SMKS ISLAM ANNAZHIRIYAH KABUPATEN SUKABUMI',
            ],
            '4307' => [
                'npsn' => '20247158',
                'nama' => 'SMAS IT MAHMUDIYYAH KABUPATEN SUKABUMI',
            ],
            '4308' => [
                'npsn' => '69753902',
                'nama' => 'SMKS SAMUDRA KABUPATEN SUKABUMI',
            ],
            '4309' => [
                'npsn' => '69734380',
                'nama' => 'SMKS AL HAFIZ KABUPATEN SUKABUMI',
            ],
            '4310' => [
                'npsn' => '69983846',
                'nama' => 'SMKS BHAYANGKARA KABUPATEN SUKABUMI',
            ],
            '4311' => [
                'npsn' => '60729090',
                'nama' => 'SMKS AL IKHLAS KABUPATEN SUKABUMI',
            ],
            '4312' => [
                'npsn' => '20258335',
                'nama' => 'SMAS UNGGUL AR RAHMAN KABUPATEN SUKABUMI',
            ],
            '4313' => [
                'npsn' => '20267933',
                'nama' => 'SMKS PLUS MADANIAH KABUPATEN SUKABUMI',
            ],
            '4314' => [
                'npsn' => '69786519',
                'nama' => 'SMKS IT BINA INSANI KABUPATEN SUKABUMI',
            ],
            '4315' => [
                'npsn' => '69899675',
                'nama' => 'SMKS PELITA NUSANTARA SINDANGBARANG KABUPATEN CIANJUR',
            ],
            '4316' => [
                'npsn' => '69921989',
                'nama' => 'SMAS CITRA NUSANTARA SINDANGBARANG KABUPATEN CIANJUR',
            ],
            '4317' => [
                'npsn' => '69760685',
                'nama' => 'SMKS BROSSA KABUPATEN BANDUNG',
            ],
            '4318' => [
                'npsn' => '20240394',
                'nama' => 'SMAS AL FIIL KABUPATEN BANDUNG',
            ],
            '4319' => [
                'npsn' => '20821002',
                'nama' => 'SLBS ADHITYA SOREANG KABUPATEN BANDUNG',
            ],
            '4320' => [
                'npsn' => '20265543',
                'nama' => 'SMKS SETIA BHAKTI KOTA BANDUNG',
            ],
            '4321' => [
                'npsn' => '20219251',
                'nama' => 'SMAN 21 BANDUNG KOTA BANDUNG',
            ],
            '4322' => [
                'npsn' => '60724689',
                'nama' => 'SMAS PGRI CIKIDANG KABUPATEN SUKABUMI',
            ],
            '4323' => [
                'npsn' => '69888435',
                'nama' => 'SMAS BAITURRAHMAN KABUPATEN SUKABUMI',
            ],
            '4324' => [
                'npsn' => '69858826',
                'nama' => 'SMKS SALSABIILA ZAINIA KABUPATEN CIANJUR',
            ],
            '4325' => [
                'npsn' => '69852114',
                'nama' => 'SMKS SC BUMI PERSYADA KABUPATEN CIANJUR',
            ],
            '4326' => [
                'npsn' => '69856264',
                'nama' => 'SMAS PLUS BAHRUL ULUM KABUPATEN CIANJUR',
            ],
            '4327' => [
                'npsn' => '69892382',
                'nama' => 'SMKS SULTHAN BARUNA KABUPATEN CIANJUR',
            ],
            '4328' => [
                'npsn' => '69978363',
                'nama' => 'SMKS ASSATINEM KABUPATEN CIANJUR',
            ],
            '4329' => [
                'npsn' => '20258552',
                'nama' => 'SMAS RAUDATUL ISLAM KABUPATEN CIANJUR',
            ],
            '4330' => [
                'npsn' => '69974197',
                'nama' => 'SMKS AL FATIH KABUPATEN CIANJUR',
            ],
            '4331' => [
                'npsn' => '69985855',
                'nama' => 'SMKS CINTA NEGERI KABUPATEN CIANJUR',
            ],
            '4332' => [
                'npsn' => '69946712',
                'nama' => 'SMAS TARBIYATUL ISLAM KABUPATEN CIANJUR',
            ],
            '4333' => [
                'npsn' => '20247152',
                'nama' => 'SMAS INSAN CENDEKIA AL KAUSAR KABUPATEN SUKABUMI',
            ],
            '4334' => [
                'npsn' => '69888979',
                'nama' => 'SMKS CINTA MEKARWANGI KABUPATEN CIANJUR',
            ],
            '4335' => [
                'npsn' => '69974471',
                'nama' => 'SMAS NAHWA CANTIGI KABUPATEN CIANJUR',
            ],
            '4336' => [
                'npsn' => '20271161',
                'nama' => 'SMKS AS SULAIMANIYYAH KABUPATEN CIANJUR',
            ],
            '4337' => [
                'npsn' => '69725150',
                'nama' => 'SMKS IT AL MUSYARROFAH KABUPATEN CIANJUR',
            ],
            '4338' => [
                'npsn' => '69948075',
                'nama' => 'SMKS KARYA PENA BANGSA KABUPATEN CIANJUR',
            ],
            '4339' => [
                'npsn' => '20254159',
                'nama' => 'SMKS TEKNIK KOMPUTER TERPADU COKROAMINOTO KABUPATEN CIANJUR',
            ],
            '4340' => [
                'npsn' => '20252873',
                'nama' => 'SMKS TUNAS HARAPAN BANGSA KABUPATEN CIANJUR',
            ],
            '4341' => [
                'npsn' => '69899700',
                'nama' => 'SMKS AL AHMAD KABUPATEN CIANJUR',
            ],
            '4342' => [
                'npsn' => '20203734',
                'nama' => 'SMAN 1 SUKANAGARA KABUPATEN CIANJUR',
            ],
            '4343' => [
                'npsn' => '20219160',
                'nama' => 'SMKN 14 BANDUNG KOTA BANDUNG',
            ],
            '4344' => [
                'npsn' => '20280597',
                'nama' => 'SLBS AZ ZAKIYAH KOTA BANDUNG',
            ],
            '4345' => [
                'npsn' => '20219284',
                'nama' => 'SMKS BUMI SILIWANGI KOTA BANDUNG',
            ],
            '4346' => [
                'npsn' => '20219161',
                'nama' => 'SMKN 13 BANDUNG KOTA BANDUNG',
            ],
            '4347' => [
                'npsn' => '20223061',
                'nama' => 'SLBS CAHAYA PERTIWI KOTA BEKASI',
            ],
            '4348' => [
                'npsn' => '20231738',
                'nama' => 'SMKS MANDIRI KOTA BEKASI',
            ],
            '4349' => [
                'npsn' => '20253599',
                'nama' => 'SMAS PENABUR KOTA BEKASI',
            ],
            '4350' => [
                'npsn' => '20252516',
                'nama' => 'SMAS CINDERA MATA KOTA BEKASI',
            ],
            '4351' => [
                'npsn' => '20252521',
                'nama' => 'SMAS BINA TUNGGAL KOTA BEKASI',
            ],
            '4352' => [
                'npsn' => '20219139',
                'nama' => 'SMKN 9 BANDUNG KOTA BANDUNG',
            ],
            '4353' => [
                'npsn' => '20219176',
                'nama' => 'SMKN 10 BANDUNG KOTA BANDUNG',
            ],
            '4354' => [
                'npsn' => '69896859',
                'nama' => 'SMAS TRI DARMA NUSANTARA KABUPATEN CIANJUR',
            ],
            '4355' => [
                'npsn' => '69949270',
                'nama' => 'SMAS COKROAMINOTO BALEGEDE KABUPATEN CIANJUR',
            ],
            '4356' => [
                'npsn' => '20276398',
                'nama' => 'SMAS PGRI NARINGGUL KABUPATEN CIANJUR',
            ],
            '4357' => [
                'npsn' => '20219214',
                'nama' => 'SMKS PARIWISATA TELKOM KOTA BANDUNG',
            ],
            '4358' => [
                'npsn' => '20219172',
                'nama' => 'SMKS MUHAMMADIYAH 1 BANDUNG KOTA BANDUNG',
            ],
            '4359' => [
                'npsn' => '20219808',
                'nama' => 'SMAS MEDINA BANDUNG KOTA BANDUNG',
            ],
            '4360' => [
                'npsn' => '20265542',
                'nama' => 'SMKS PAJAJARAN 2 BANDUNG KOTA BANDUNG',
            ],
            '4361' => [
                'npsn' => '20219805',
                'nama' => 'SMAS MUHAMMADIYAH 3 KOTA BANDUNG',
            ],
            '4362' => [
                'npsn' => '20219140',
                'nama' => 'SMKN 8 BANDUNG KOTA BANDUNG',
            ],
            '4363' => [
                'npsn' => '20252652',
                'nama' => 'SMKN 1 NARINGGUL KABUPATEN CIANJUR',
            ],
            '4364' => [
                'npsn' => '69756851',
                'nama' => 'SMKS PLUS SARIPUDIN CIBINONG KABUPATEN CIANJUR',
            ],
            '4365' => [
                'npsn' => '69965196',
                'nama' => 'SMKS PUTRA PAGELARAN KABUPATEN CIANJUR',
            ],
            '4366' => [
                'npsn' => '60725421',
                'nama' => 'SMKS AL AZAMI KABUPATEN CIANJUR',
            ],
            '4367' => [
                'npsn' => '69956371',
                'nama' => 'SMAS ISLAM ANNABA KABUPATEN CIANJUR',
            ],
            '4368' => [
                'npsn' => '20203702',
                'nama' => 'SMAS ISLAM AL MAZIYYAH CILAKU KABUPATEN CIANJUR',
            ],
            '4369' => [
                'npsn' => '69933509',
                'nama' => 'SMKS BELA NUSANTARA ANDIKA KABUPATEN CIANJUR',
            ],
            '4370' => [
                'npsn' => '20252874',
                'nama' => 'SMKS AL FATONAH KABUPATEN CIANJUR',
            ],
            '4371' => [
                'npsn' => '69957093',
                'nama' => 'SMKS IT TARUNA ANSOR KABUPATEN CIANJUR',
            ],
            '4372' => [
                'npsn' => '20203726',
                'nama' => 'SMKS BELA NUSANTARA CIANJUR KABUPATEN CIANJUR',
            ],
            '4373' => [
                'npsn' => '60726857',
                'nama' => 'SMKN PERTANIAN PEMBANGUNAN CIANJUR KABUPATEN CIANJUR',
            ],
            '4374' => [
                'npsn' => '69939969',
                'nama' => 'SMAS IT ADZIKRI NURUL HUDA KABUPATEN CIANJUR',
            ],
            '4375' => [
                'npsn' => '69973008',
                'nama' => 'SMKS AL JABBAR KABUPATEN CIANJUR',
            ],
            '4376' => [
                'npsn' => '69788556',
                'nama' => 'SMKS AL BANTARI KABUPATEN CIANJUR',
            ],
            '4377' => [
                'npsn' => '20256464',
                'nama' => 'SLBS CAHAYA GEMILANG PERTIWI KABUPATEN CIANJUR',
            ],
            '4378' => [
                'npsn' => '69895908',
                'nama' => 'SMKS NUSA BANGSA KABUPATEN CIANJUR',
            ],
            '4379' => [
                'npsn' => '20252875',
                'nama' => 'SMKS KARISMA KABUPATEN CIANJUR',
            ],
            '4380' => [
                'npsn' => '20203719',
                'nama' => 'SMAS MUHAMADIYAH CIPANAS KABUPATEN CIANJUR',
            ],
            '4381' => [
                'npsn' => '69894018',
                'nama' => 'SMKS AL IRSYAD CIPANAS KABUPATEN CIANJUR',
            ],
            '4382' => [
                'npsn' => '20252872',
                'nama' => 'SMKS FUTUUHIYAH KABUPATEN CIANJUR',
            ],
            '4383' => [
                'npsn' => '69774724',
                'nama' => 'SMKS KARYA NUSANTARA KABUPATEN BANDUNG',
            ],
            '4384' => [
                'npsn' => '69762682',
                'nama' => 'SMKN 1 PASIRKUDA KABUPATEN CIANJUR',
            ],
            '4385' => [
                'npsn' => '69760695',
                'nama' => 'SMKS MULYA BHAKTI MANDIRI KABUPATEN CIANJUR',
            ],
            '4386' => [
                'npsn' => '69968942',
                'nama' => 'SMAS PGRI CIBEBER KABUPATEN CIANJUR',
            ],
            '4387' => [
                'npsn' => '69901210',
                'nama' => 'SMKS TIRTA WALATRA KABUPATEN CIANJUR',
            ],
            '4388' => [
                'npsn' => '20254341',
                'nama' => 'SMAS AL QODIRIYAH CIBEBER KABUPATEN CIANJUR',
            ],
            '4389' => [
                'npsn' => '69888493',
                'nama' => 'SMKS AL FATH CIBEBER KABUPATEN CIANJUR',
            ],
            '4390' => [
                'npsn' => '20252206',
                'nama' => 'SMKS AN NAHL KABUPATEN CIANJUR',
            ],
            '4391' => [
                'npsn' => '20275359',
                'nama' => 'SMKS PLUS AL ISTIQOMAH KABUPATEN CIANJUR',
            ],
            '4392' => [
                'npsn' => '70035106',
                'nama' => 'SMAS ADYATAMA KABUPATEN CIANJUR',
            ],
            '4393' => [
                'npsn' => '20257479',
                'nama' => 'SMKS FAUZAN KABUPATEN CIANJUR',
            ],
            '4394' => [
                'npsn' => '20203743',
                'nama' => 'SMAN 1 CIRANJANG KABUPATEN CIANJUR',
            ],
            '4395' => [
                'npsn' => '69883634',
                'nama' => 'SMAS PLUS AT TAQWA KABUPATEN CIANJUR',
            ],
            '4396' => [
                'npsn' => '69892523',
                'nama' => 'SMKS AL ROHMAT KABUPATEN CIANJUR',
            ],
            '4397' => [
                'npsn' => '20254913',
                'nama' => 'SMKS ASSUYUTIYYAH KABUPATEN CIANJUR',
            ],
            '4398' => [
                'npsn' => '69888857',
                'nama' => 'SMAS ISLAM AL KHAIRIYAH KABUPATEN CIANJUR',
            ],
            '4399' => [
                'npsn' => '69904078',
                'nama' => 'SMAS AL HASBI KABUPATEN CIANJUR',
            ],
            '4400' => [
                'npsn' => '20267754',
                'nama' => 'SLBS AL AZAMI KABUPATEN CIANJUR',
            ],
            '4401' => [
                'npsn' => '20268414',
                'nama' => 'SMKS AL FATMAH CIANJUR KABUPATEN CIANJUR',
            ],
            '4402' => [
                'npsn' => '20252015',
                'nama' => 'SMAS PASUNDAN 2 CIANJUR KABUPATEN CIANJUR',
            ],
            '4403' => [
                'npsn' => '20275816',
                'nama' => 'SMKS KESEHATAN DARMAWANGSA KABUPATEN CIANJUR',
            ],
            '4404' => [
                'npsn' => '20203699',
                'nama' => 'SMAS BPK PENABUR KABUPATEN CIANJUR',
            ],
            '4405' => [
                'npsn' => '20203728',
                'nama' => 'SMKS NURUL ISLAM KABUPATEN CIANJUR',
            ],
            '4406' => [
                'npsn' => '69883257',
                'nama' => 'SMAS DAR EL FIKRI CIANJUR KABUPATEN CIANJUR',
            ],
            '4407' => [
                'npsn' => '20267922',
                'nama' => 'SMKS AL IBROHIMIYAH KABUPATEN CIANJUR',
            ],
            '4408' => [
                'npsn' => '69943169',
                'nama' => 'SMKS SOLUSI BANGUN INDONESIA KABUPATEN CIANJUR',
            ],
            '4409' => [
                'npsn' => '69969939',
                'nama' => 'SMKS PLUS RIYADHUL HUDA KABUPATEN CIANJUR',
            ],
            '4410' => [
                'npsn' => '69881554',
                'nama' => 'SMAS PLUS AL MUSLIMUN KABUPATEN CIANJUR',
            ],
            '4411' => [
                'npsn' => '69786388',
                'nama' => 'SMKS KARYA BHAKTI UTAMA KABUPATEN CIANJUR',
            ],
            '4412' => [
                'npsn' => '69880140',
                'nama' => 'SMKS AR RAHMAN KABUPATEN CIANJUR',
            ],
            '4413' => [
                'npsn' => '60725293',
                'nama' => 'SMKS VANCANITTY KABUPATEN CIANJUR',
            ],
            '4414' => [
                'npsn' => '69888376',
                'nama' => 'SMKN 2 PACET KABUPATEN CIANJUR',
            ],
            '4415' => [
                'npsn' => '69981915',
                'nama' => 'SMAS TERPADU YASPIN KABUPATEN SUKABUMI',
            ],
            '4416' => [
                'npsn' => '69733919',
                'nama' => 'SMKS KESEHATAN HARAPAN BANGSA PALABUHANRATU KABUPATEN SUKABUMI',
            ],
            '4417' => [
                'npsn' => '69892760',
                'nama' => 'SMKS MUSLIM CENDIKIA KABUPATEN SUKABUMI',
            ],
            '4418' => [
                'npsn' => '69726060',
                'nama' => 'SMKS KOMPUTER AL BASHRY PALABUHANRATU KABUPATEN SUKABUMI',
            ],
            '4419' => [
                'npsn' => '20253661',
                'nama' => 'SMAS NURUL HUDA KABUPATEN SUKABUMI',
            ],
            '4420' => [
                'npsn' => '20269318',
                'nama' => 'SMKS MUTIARA TERPADU PALABUHAN RATU KABUPATEN SUKABUMI',
            ],
            '4421' => [
                'npsn' => '20268198',
                'nama' => 'SMKS ASSUBANDIYAH PALABUHANRATU KABUPATEN SUKABUMI',
            ],
            '4422' => [
                'npsn' => '20202272',
                'nama' => 'SMKS PGRI PALABUHANRATU SUKABUMI KABUPATEN SUKABUMI',
            ],
            '4423' => [
                'npsn' => '69880405',
                'nama' => 'SMKS DZAKIYYUN 2 KABUPATEN CIANJUR',
            ],
            '4424' => [
                'npsn' => '20202315',
                'nama' => 'SLBN MUTIARA BAHARI MANDIRI KABUPATEN SUKABUMI',
            ],
            '4425' => [
                'npsn' => '69758952',
                'nama' => 'SMKS PLUS INSAN MANDIRI KABUPATEN CIANJUR',
            ],
            '4426' => [
                'npsn' => '69892375',
                'nama' => 'SMKS ISLAM HIRSHULFATA AL GHINA KABUPATEN CIANJUR',
            ],
            '4427' => [
                'npsn' => '20228479',
                'nama' => 'SMAS TELKOM BANDUNG KABUPATEN BANDUNG',
            ],
            '4428' => [
                'npsn' => '20206171',
                'nama' => 'SMAS ASSALAM DAYEUHKOLOT KABUPATEN BANDUNG',
            ],
            '4429' => [
                'npsn' => '20258486',
                'nama' => 'SLBS NURUL IMAN KABUPATEN BANDUNG',
            ],
            '4430' => [
                'npsn' => '20265524',
                'nama' => 'SMKS BAKTI MANDIRI KOTA BANDUNG',
            ],
            '4431' => [
                'npsn' => '20219796',
                'nama' => 'SMAS KRISTEN HIDUP BARU KOTA BANDUNG',
            ],
            '4432' => [
                'npsn' => '20219721',
                'nama' => 'SMAS BUNGA BANGSA BANDUNG KOTA BANDUNG',
            ],
            '4433' => [
                'npsn' => '20223090',
                'nama' => 'SMKS TRAVINA PRIMA KOTA BEKASI',
            ],
            '4434' => [
                'npsn' => '20268896',
                'nama' => 'SMKS CATUR GLOBAL BEKASI KOTA BEKASI',
            ],
            '4435' => [
                'npsn' => '20227889',
                'nama' => 'SMAN 1 DAYEUHKOLOT KABUPATEN BANDUNG',
            ],
            '4436' => [
                'npsn' => '69903098',
                'nama' => 'SMKS TERPADU BUANA NUSANTARA KABUPATEN CIANJUR',
            ],
            '4437' => [
                'npsn' => '69905283',
                'nama' => 'SMKS ARIA CENDEKIA KABUPATEN CIANJUR',
            ],
            '4438' => [
                'npsn' => '20252651',
                'nama' => 'SMKS BINA TEKNIK CIKALONG KULON KABUPATEN CIANJUR',
            ],
            '4439' => [
                'npsn' => '60725291',
                'nama' => 'SMKS PASUNDAN CIKALONGKULON KABUPATEN CIANJUR',
            ],
            '4440' => [
                'npsn' => '20252653',
                'nama' => 'SMAS AL BARKAH KABUPATEN CIANJUR',
            ],
            '4441' => [
                'npsn' => '69956708',
                'nama' => 'SMAS AL JUNDIYAH KABUPATEN CIANJUR',
            ],
            '4442' => [
                'npsn' => '60729093',
                'nama' => 'SMKS BINA UMMAH KABUPATEN CIANJUR',
            ],
            '4443' => [
                'npsn' => '20227820',
                'nama' => 'SMAS AL MASUDIYAH MARGAASIH KABUPATEN BANDUNG',
            ],
            '4444' => [
                'npsn' => '20219717',
                'nama' => 'SMAS INDONESIA RAYA BANDUNG KOTA BANDUNG',
            ],
            '4445' => [
                'npsn' => '20219780',
                'nama' => 'SMAS PGRI 1 BANDUNG KOTA BANDUNG',
            ],
            '4446' => [
                'npsn' => '20265539',
                'nama' => 'SMKS PURAGABAYA KOTA BANDUNG',
            ],
            '4447' => [
                'npsn' => '20252047',
                'nama' => 'SMAS MAARIF PACET KABUPATEN CIANJUR',
            ],
            '4448' => [
                'npsn' => '69883635',
                'nama' => 'SMKS AL UZLAH KABUPATEN CIANJUR',
            ],
            '4449' => [
                'npsn' => '69888896',
                'nama' => 'SMKS GARNESIA KABUPATEN CIANJUR',
            ],
            '4450' => [
                'npsn' => '69899055',
                'nama' => 'SMKS SENI SALAKA DOMAS KABUPATEN CIANJUR',
            ],
            '4451' => [
                'npsn' => '20255779',
                'nama' => 'SMAS PLUS TAUHIDUL AFKAR KABUPATEN CIANJUR',
            ],
            '4452' => [
                'npsn' => '20203696',
                'nama' => 'SMAS ADDWAH CIPANAS KABUPATEN CIANJUR',
            ],
            '4453' => [
                'npsn' => '20227916',
                'nama' => 'SMAS ISLAM AL MUKLIS KABUPATEN BANDUNG',
            ],
            '4454' => [
                'npsn' => '20258466',
                'nama' => 'SLBS BAG BC AL HUDA KABUPATEN BANDUNG',
            ],
            '4455' => [
                'npsn' => '69830511',
                'nama' => 'SMKS SAIS 1 KABUPATEN BANDUNG',
            ],
            '4456' => [
                'npsn' => '69945088',
                'nama' => 'SLBS AUTISMAS BUNDA BENING SELAKSHAHATI KABUPATEN BANDUNG',
            ],
            '4457' => [
                'npsn' => '20258465',
                'nama' => 'SLBS BAG ABC NITA KARYA KABUPATEN BANDUNG',
            ],
            '4458' => [
                'npsn' => '20252016',
                'nama' => 'SMAS MARDI YUANA CIANJUR KABUPATEN CIANJUR',
            ],
            '4459' => [
                'npsn' => '20203704',
                'nama' => 'SMAS KANAAN KABUPATEN CIANJUR',
            ],
            '4460' => [
                'npsn' => '20252366',
                'nama' => 'SMKS PARIWISATA PHT CIANJUR KABUPATEN CIANJUR',
            ],
            '4461' => [
                'npsn' => '20275815',
                'nama' => 'SMKS DHARMA KUSUMA CIANJUR KABUPATEN CIANJUR',
            ],
            '4462' => [
                'npsn' => '20252208',
                'nama' => 'SMKS TEKNIK MUHAMMADIYAH PLUS CIANJUR KABUPATEN CIANJUR',
            ],
            '4463' => [
                'npsn' => '20268501',
                'nama' => 'SMKS KUJANG PILAWA KABUPATEN CIANJUR',
            ],
            '4464' => [
                'npsn' => '69896309',
                'nama' => 'SMKS IT NURUL AZKA KABUPATEN CIANJUR',
            ],
            '4465' => [
                'npsn' => '20269403',
                'nama' => 'SLBS BAG C BINA ASIH KABUPATEN CIANJUR',
            ],
            '4466' => [
                'npsn' => '20252365',
                'nama' => 'SMKS PROGRESIA CIANJUR KABUPATEN CIANJUR',
            ],
            '4467' => [
                'npsn' => '20203727',
                'nama' => 'SMKS MARDI YUANA CIANJUR KABUPATEN CIANJUR',
            ],
            '4468' => [
                'npsn' => '20203729',
                'nama' => 'SMKS PASUNDAN CIANJUR KABUPATEN CIANJUR',
            ],
            '4469' => [
                'npsn' => '20252051',
                'nama' => 'SMAS PASUNDAN 1 CIANJUR KABUPATEN CIANJUR',
            ],
            '4470' => [
                'npsn' => '20203803',
                'nama' => 'SMKS TARUNA BHAKTI CIANJUR KABUPATEN CIANJUR',
            ],
            '4471' => [
                'npsn' => '20258557',
                'nama' => 'SMKS KESEHATAN BHAKTI MEDIKA CIANJUR KABUPATEN CIANJUR',
            ],
            '4472' => [
                'npsn' => '20252205',
                'nama' => 'SMKS AL ITTIHAD KABUPATEN CIANJUR',
            ],
            '4473' => [
                'npsn' => '69755828',
                'nama' => 'SMKS BUNGA PERSADA CIANJUR KABUPATEN CIANJUR',
            ],
            '4474' => [
                'npsn' => '69786221',
                'nama' => 'SMKS BINA BANGSA PERTIWI KABUPATEN CIANJUR',
            ],
            '4475' => [
                'npsn' => '20254693',
                'nama' => 'SLBS BAG ABC BINA BANGSA KABUPATEN CIANJUR',
            ],
            '4476' => [
                'npsn' => '69964390',
                'nama' => 'SMAN 1 KARANGTENGAH KABUPATEN CIANJUR',
            ],
            '4477' => [
                'npsn' => '69914680',
                'nama' => 'SMKS MITRA INSAN KABUPATEN CIANJUR',
            ],
            '4478' => [
                'npsn' => '69758122',
                'nama' => 'SMKS IT NURUL HUDA KABUPATEN CIANJUR',
            ],
            '4479' => [
                'npsn' => '20203730',
                'nama' => 'SMKS PGRI 1 PARIWISATA CIANJUR KABUPATEN CIANJUR',
            ],
            '4480' => [
                'npsn' => '20203697',
                'nama' => 'SMAS AL AZHARY CIANJUR KABUPATEN CIANJUR',
            ],
            '4481' => [
                'npsn' => '20203721',
                'nama' => 'SMAS PGRI CIANJUR KABUPATEN CIANJUR',
            ],
            '4482' => [
                'npsn' => '20203725',
                'nama' => 'SMKS AR RAHMAH KABUPATEN CIANJUR',
            ],
            '4483' => [
                'npsn' => '20203731',
                'nama' => 'SMKS PGRI 2 CIANJUR KABUPATEN CIANJUR',
            ],
            '4484' => [
                'npsn' => '20203701',
                'nama' => 'SMAS AL IANAH CIANJUR KABUPATEN CIANJUR',
            ],
            '4485' => [
                'npsn' => '69831977',
                'nama' => 'SMAS ISLAM KREATIF MUHAMMADIYAH CIANJUR KABUPATEN CIANJUR',
            ],
            '4486' => [
                'npsn' => '20203724',
                'nama' => 'SMKS PLUS ASHABULYAMIN KABUPATEN CIANJUR',
            ],
            '4487' => [
                'npsn' => '20252871',
                'nama' => 'SMKS BROADCAST AL IANAH KABUPATEN CIANJUR',
            ],
            '4488' => [
                'npsn' => '69930653',
                'nama' => 'SMAS MANARULHUDA KABUPATEN CIANJUR',
            ],
            '4489' => [
                'npsn' => '69904592',
                'nama' => 'SMKS AL MUNAWWARAH KABUPATEN CIANJUR',
            ],
            '4490' => [
                'npsn' => '20256557',
                'nama' => 'SMKS MANDIRI BERSEMI KABUPATEN CIANJUR',
            ],
            '4491' => [
                'npsn' => '69896911',
                'nama' => 'SMKS DARUL MUTTAQIN CIANJUR KABUPATEN CIANJUR',
            ],
            '4492' => [
                'npsn' => '69906513',
                'nama' => 'SMAS ISLAM AL ISTIQOMAH KABUPATEN CIANJUR',
            ],
            '4493' => [
                'npsn' => '69883477',
                'nama' => 'SMKS AL MADINAH MADANIA KABUPATEN CIANJUR',
            ],
            '4494' => [
                'npsn' => '69886280',
                'nama' => 'SMKS ISLAM TERPADU IZZUL ISLAM KABUPATEN CIANJUR',
            ],
            '4495' => [
                'npsn' => '20252046',
                'nama' => 'SMAS AL ITTIHAD CIANJUR KABUPATEN CIANJUR',
            ],
            '4496' => [
                'npsn' => '69955233',
                'nama' => 'SMKS BPI 64 KABUPATEN BANDUNG',
            ],
            '4497' => [
                'npsn' => '20259585',
                'nama' => 'SMKS MANDALASARI KABUPATEN BANDUNG',
            ],
            '4498' => [
                'npsn' => '69758974',
                'nama' => 'SMKS KESEHATAN CIANJUR KABUPATEN CIANJUR',
            ],
            '4499' => [
                'npsn' => '20254284',
                'nama' => 'SMKS ISLAMIYAH SAYANG KABUPATEN CIANJUR',
            ],
            '4500' => [
                'npsn' => '69981047',
                'nama' => 'SLBS AL HIDAYAH KABUPATEN BANDUNG',
            ],
            '4501' => [
                'npsn' => '69983825',
                'nama' => 'SLBS RIFALIANA KABUPATEN BANDUNG',
            ],
            '4502' => [
                'npsn' => '69870903',
                'nama' => 'SMKS KP PASEH KABUPATEN BANDUNG',
            ],
            '4503' => [
                'npsn' => '20227879',
                'nama' => 'SMAS PUTRA INDONESIA PASEH KABUPATEN BANDUNG',
            ],
            '4504' => [
                'npsn' => '69725847',
                'nama' => 'SMKS DHARMA AGUNG KABUPATEN BANDUNG',
            ],
            '4505' => [
                'npsn' => '69955507',
                'nama' => 'SMKS AL MUHSININ KABUPATEN BANDUNG',
            ],
            '4506' => [
                'npsn' => '20259590',
                'nama' => 'SMKS YP 79 MAJALAYA KABUPATEN BANDUNG',
            ],
            '4507' => [
                'npsn' => '20256568',
                'nama' => 'SMKS YADIKA 2 CIJAGRA PASEH KABUPATEN BANDUNG',
            ],
            '4508' => [
                'npsn' => '20258237',
                'nama' => 'SLBS PERMATA CIRANJANG KABUPATEN CIANJUR',
            ],
            '4509' => [
                'npsn' => '69943909',
                'nama' => 'SMKS AL MANAR KABUPATEN CIANJUR',
            ],
            '4510' => [
                'npsn' => '69830093',
                'nama' => 'SMKS TERPADU AL YUMNI KABUPATEN CIANJUR',
            ],
            '4511' => [
                'npsn' => '69759077',
                'nama' => 'SMKS PAULUS PALALANGON KABUPATEN CIANJUR',
            ],
            '4512' => [
                'npsn' => '20228549',
                'nama' => 'SMKS PGRI 35 SOLOKAN JERUK KABUPATEN BANDUNG',
            ],
            '4513' => [
                'npsn' => '20228518',
                'nama' => 'SMKS BHAKTI KENCANA MAJALAYA KABUPATEN BANDUNG',
            ],
            '4514' => [
                'npsn' => '20271838',
                'nama' => 'SMKS GPI SOLOKANJERUK KABUPATEN BANDUNG',
            ],
            '4515' => [
                'npsn' => '20227913',
                'nama' => 'SMAS BHAKTI PUTRA KABUPATEN BANDUNG',
            ],
            '4516' => [
                'npsn' => '69774722',
                'nama' => 'SMKS INFORMATIKA DIENUL ISLAM KABUPATEN BANDUNG',
            ],
            '4517' => [
                'npsn' => '20265526',
                'nama' => 'SMKS BPI BANDUNG KOTA BANDUNG',
            ],
            '4518' => [
                'npsn' => '20251784',
                'nama' => 'SMAS PGRI CICALENGKA KABUPATEN BANDUNG',
            ],
            '4519' => [
                'npsn' => '20258468',
                'nama' => 'SLBS BAG BCD YPKR KABUPATEN BANDUNG',
            ],
            '4520' => [
                'npsn' => '69786716',
                'nama' => 'SLBS PUTRA BERLIAN KABUPATEN BANDUNG',
            ],
            '4521' => [
                'npsn' => '69760683',
                'nama' => 'SMKS BINA BANGSA INDONESIA KABUPATEN BANDUNG',
            ],
            '4522' => [
                'npsn' => '69956589',
                'nama' => 'SMKS MA ARIF TERPADU CICALENGKA KABUPATEN BANDUNG',
            ],
            '4523' => [
                'npsn' => '20256566',
                'nama' => 'SMKS GUNA DHARMA NUSANTARA KABUPATEN BANDUNG',
            ],
            '4524' => [
                'npsn' => '20251788',
                'nama' => 'SMAS YADIKA CICALENGKA KABUPATEN BANDUNG',
            ],
            '4525' => [
                'npsn' => '20271747',
                'nama' => 'SMKS PUTRA INDONESIA KABUPATEN BANDUNG',
            ],
            '4526' => [
                'npsn' => '20259592',
                'nama' => 'SLBS BAG A YPKR KABUPATEN BANDUNG',
            ],
            '4527' => [
                'npsn' => '20259589',
                'nama' => 'SMKS TIK YADIKA CICALENGKA KABUPATEN BANDUNG',
            ],
            '4528' => [
                'npsn' => '20206169',
                'nama' => 'SMAS BINA MUDA CICALENGKA KABUPATEN BANDUNG',
            ],
            '4529' => [
                'npsn' => '69725846',
                'nama' => 'SMKS MUTHIA HARAPAN CICALENGKA KABUPATEN BANDUNG',
            ],
            '4530' => [
                'npsn' => '20227814',
                'nama' => 'SMAS KP CICALENGKA KABUPATEN BANDUNG',
            ],
            '4531' => [
                'npsn' => '20227884',
                'nama' => 'SMAS TUNAS BARU CIPARAY KABUPATEN BANDUNG',
            ],
            '4532' => [
                'npsn' => '20227842',
                'nama' => 'SMAS KP 2 CIPARAY KABUPATEN BANDUNG',
            ],
            '4533' => [
                'npsn' => '20227886',
                'nama' => 'SMAS YAPI AL HUSAENI KABUPATEN BANDUNG',
            ],
            '4534' => [
                'npsn' => '20227914',
                'nama' => 'SMAS CENDIKIA INFORMATIKA KABUPATEN BANDUNG',
            ],
            '4535' => [
                'npsn' => '20259594',
                'nama' => 'SLBS IBNU SINA KABUPATEN BANDUNG',
            ],
            '4536' => [
                'npsn' => '20228560',
                'nama' => 'SMKS WIRAKARYA 2 CIPARAY KABUPATEN BANDUNG',
            ],
            '4537' => [
                'npsn' => '20227861',
                'nama' => 'SMAS MUHAMMADIYAH 3 CIPARAY KABUPATEN BANDUNG',
            ],
            '4538' => [
                'npsn' => '69966961',
                'nama' => 'SMKS COKROAMINOTO KABUPATEN BANDUNG',
            ],
            '4539' => [
                'npsn' => '20240396',
                'nama' => 'SMAS AL MADINA KABUPATEN BANDUNG',
            ],
            '4540' => [
                'npsn' => '20227843',
                'nama' => 'SMAS KP 2 PASEH KABUPATEN BANDUNG',
            ],
            '4541' => [
                'npsn' => '20227857',
                'nama' => 'SMAS MARDIKA PASEH KABUPATEN BANDUNG',
            ],
            '4542' => [
                'npsn' => '20227846',
                'nama' => 'SMAS KP BAROS ARJASARI KABUPATEN BANDUNG',
            ],
            '4543' => [
                'npsn' => '20227874',
                'nama' => 'SMAS PELITA BUNGA BANGSA KABUPATEN BANDUNG',
            ],
            '4544' => [
                'npsn' => '20227931',
                'nama' => 'SMKS BAKTI NUSANTARA KABUPATEN BANDUNG',
            ],
            '4545' => [
                'npsn' => '69912939',
                'nama' => 'SLBS RAFAHA KABUPATEN BANDUNG',
            ],
            '4546' => [
                'npsn' => '20258134',
                'nama' => 'SMKS PELITA BUNGA BANGSA KABUPATEN BANDUNG',
            ],
            '4547' => [
                'npsn' => '20227819',
                'nama' => 'SMAS AL HUDA ARJASARI KABUPATEN BANDUNG',
            ],
            '4548' => [
                'npsn' => '20227837',
                'nama' => 'SMAS HANDAYANI 2 BANJARAN KABUPATEN BANDUNG',
            ],
            '4549' => [
                'npsn' => '69939603',
                'nama' => 'SLBS BUNDA PERTIWI INDONESIA KABUPATEN BANDUNG',
            ],
            '4550' => [
                'npsn' => '20251783',
                'nama' => 'SMAS PASUNDAN BANJARAN KABUPATEN BANDUNG',
            ],
            '4551' => [
                'npsn' => '20257433',
                'nama' => 'SMKS PLUS PRATAMA ADI KABUPATEN BANDUNG',
            ],
            '4552' => [
                'npsn' => '20227875',
                'nama' => 'SMAS PEMUDA BANJARAN KABUPATEN BANDUNG',
            ],
            '4553' => [
                'npsn' => '69814876',
                'nama' => 'SMKS KHARISMAS NUSANTARA KABUPATEN BANDUNG',
            ],
            '4554' => [
                'npsn' => '20206220',
                'nama' => 'SMKS PASUNDAN 2 BANJARAN KABUPATEN BANDUNG',
            ],
            '4555' => [
                'npsn' => '20270062',
                'nama' => 'SMKS UMI KULSUM BANJARAN KABUPATEN BANDUNG',
            ],
            '4556' => [
                'npsn' => '20272113',
                'nama' => 'SMKS YASTRIB KABUPATEN BANDUNG',
            ],
            '4557' => [
                'npsn' => '20227911',
                'nama' => 'SMAS AL FALAH BANJARAN KABUPATEN BANDUNG',
            ],
            '4558' => [
                'npsn' => '69726560',
                'nama' => 'SMKS NUR KAUTSAR KABUPATEN BANDUNG',
            ],
            '4559' => [
                'npsn' => '20269316',
                'nama' => 'SMKS BUSTANUL ULUM KABUPATEN BANDUNG',
            ],
            '4560' => [
                'npsn' => '20254602',
                'nama' => 'SMKS BANJAR ASRI CIMAUNG KABUPATEN BANDUNG',
            ],
            '4561' => [
                'npsn' => '20206170',
                'nama' => 'SMAS BANJAR ASRI CIMAUNG KABUPATEN BANDUNG',
            ],
            '4562' => [
                'npsn' => '20259611',
                'nama' => 'SLBS MIFTAHUL FALAH KABUPATEN BANDUNG',
            ],
            '4563' => [
                'npsn' => '20227833',
                'nama' => 'SMAS DARMAYANTI CIMAUNG KABUPATEN BANDUNG',
            ],
            '4564' => [
                'npsn' => '69952316',
                'nama' => 'SMKS TARUNA MADYA CEMPAKA MULYA KABUPATEN BANDUNG',
            ],
            '4565' => [
                'npsn' => '20258492',
                'nama' => 'SLBS YKS 3 KABUPATEN BANDUNG',
            ],
            '4566' => [
                'npsn' => '20259598',
                'nama' => 'SMKS GENIUS BANDUNG KABUPATEN BANDUNG',
            ],
            '4567' => [
                'npsn' => '20268473',
                'nama' => 'SLBS SABILULUNGAN KABUPATEN BANDUNG',
            ],
            '4568' => [
                'npsn' => '20256569',
                'nama' => 'SMKS AL AITAAM KABUPATEN BANDUNG',
            ],
            '4569' => [
                'npsn' => '20227905',
                'nama' => 'SMAN 1 KATAPANG KABUPATEN BANDUNG',
            ],
            '4570' => [
                'npsn' => '20227871',
                'nama' => 'SMAS PGRI 31 PANGALENGAN KABUPATEN BANDUNG',
            ],
            '4571' => [
                'npsn' => '20259588',
                'nama' => 'SMKS TRIBAKTI PANGALENGAN KABUPATEN BANDUNG',
            ],
            '4572' => [
                'npsn' => '69829542',
                'nama' => 'SMKS MASHALIHUL MURSALAT KABUPATEN BANDUNG',
            ],
            '4573' => [
                'npsn' => '20228546',
                'nama' => 'SMKS MERDEKA SOREANG KABUPATEN BANDUNG',
            ],
            '4574' => [
                'npsn' => '20268835',
                'nama' => 'SMKS FARMASI BHAKTI KENCANA SOREANG KABUPATEN BANDUNG',
            ],
            '4575' => [
                'npsn' => '20259621',
                'nama' => 'SLBS BAG BC ROUDHOTUL ZANNAH KABUPATEN BANDUNG',
            ],
            '4576' => [
                'npsn' => '20206132',
                'nama' => 'SMAS SAPTA DHARMA KABUPATEN BANDUNG',
            ],
            '4577' => [
                'npsn' => '20228511',
                'nama' => 'SMKS AL JIHAD PANGALENGAN KABUPATEN BANDUNG',
            ],
            '4578' => [
                'npsn' => '69984529',
                'nama' => 'SMAS YADIKA SOREANG KABUPATEN BANDUNG',
            ],
            '4579' => [
                'npsn' => '20206205',
                'nama' => 'SMAN 1 SOREANG KABUPATEN BANDUNG',
            ],
            '4580' => [
                'npsn' => '20259604',
                'nama' => 'SLBS BAG BC YPNI PAMEUNGPEUK KABUPATEN BANDUNG',
            ],
            '4581' => [
                'npsn' => '20271415',
                'nama' => 'SMKS ALMARWAH KABUPATEN BANDUNG',
            ],
            '4582' => [
                'npsn' => '20227815',
                'nama' => 'SMAS PUQ PAMEUNGPEUK KABUPATEN BANDUNG',
            ],
            '4583' => [
                'npsn' => '20227825',
                'nama' => 'SMAS YP BINA BANGSA KABUPATEN BANDUNG',
            ],
            '4584' => [
                'npsn' => '20227818',
                'nama' => 'SMAS AMS PAMEUNGPEUK KABUPATEN BANDUNG',
            ],
            '4585' => [
                'npsn' => '20227852',
                'nama' => 'SMAS KARANG ARUM CILENGKRANG KABUPATEN BANDUNG',
            ],
            '4586' => [
                'npsn' => '20228469',
                'nama' => 'SMAS NURUZAMAN CILENGKRANG KABUPATEN BANDUNG',
            ],
            '4587' => [
                'npsn' => '20271683',
                'nama' => 'SMAS MUHAMMADIYAH CIKELET KABUPATEN GARUT',
            ],
            '4588' => [
                'npsn' => '20271839',
                'nama' => 'SMKS PERINTIS KABUPATEN BANDUNG',
            ],
            '4589' => [
                'npsn' => '20227487',
                'nama' => 'SMKN 5 GARUT KABUPATEN GARUT',
            ],
            '4590' => [
                'npsn' => '20251948',
                'nama' => 'SMAS HANDAYANI I ARJASARI KABUPATEN BANDUNG',
            ],
            '4591' => [
                'npsn' => '20227829',
                'nama' => 'SMAS BAKTI NUSANTARA KABUPATEN BANDUNG',
            ],
            '4592' => [
                'npsn' => '69915321',
                'nama' => 'SMKS GIRI BHAKTI INDONESIA KABUPATEN GARUT',
            ],
            '4593' => [
                'npsn' => '69859376',
                'nama' => 'SMAS IT MEKARSEWU KABUPATEN GARUT',
            ],
            '4594' => [
                'npsn' => '69915323',
                'nama' => 'SMKS KARYA BHAKTI INDONESIA KABUPATEN GARUT',
            ],
            '4595' => [
                'npsn' => '20276132',
                'nama' => 'SMKS PGRI 1 PAKENJENG KABUPATEN GARUT',
            ],
            '4596' => [
                'npsn' => '20227448',
                'nama' => 'SMAS PERSIS PAKENJENG KABUPATEN GARUT',
            ],
            '4597' => [
                'npsn' => '20269278',
                'nama' => 'SMAS YABAFA PAKENJENG KABUPATEN GARUT',
            ],
            '4598' => [
                'npsn' => '69962327',
                'nama' => 'SMAS ISLAMIC CENTRE PAKENJENG KABUPATEN GARUT',
            ],
            '4599' => [
                'npsn' => '69929246',
                'nama' => 'SMAS NURUL FALAH CINANGSI KABUPATEN GARUT',
            ],
            '4600' => [
                'npsn' => '20262129',
                'nama' => 'SMKN 11 GARUT KABUPATEN GARUT',
            ],
            '4601' => [
                'npsn' => '20228442',
                'nama' => 'SMAS KP BALEENDAH KABUPATEN BANDUNG',
            ],
            '4602' => [
                'npsn' => '20227830',
                'nama' => 'SMAS BINA NEGARA 1 BALEENDAH KABUPATEN BANDUNG',
            ],
            '4603' => [
                'npsn' => '20227826',
                'nama' => 'SMAS BPPI BALEENDAH KABUPATEN BANDUNG',
            ],
            '4604' => [
                'npsn' => '69820637',
                'nama' => 'SMKS AKAR ILMU KABUPATEN BANDUNG',
            ],
            '4605' => [
                'npsn' => '70032175',
                'nama' => 'SMAS IT FITHRAH INSANI BALEENDAH KABUPATEN BANDUNG',
            ],
            '4606' => [
                'npsn' => '20227960',
                'nama' => 'SMKS MUTIARA SANDI BALEENDAH KABUPATEN BANDUNG',
            ],
            '4607' => [
                'npsn' => '20227839',
                'nama' => 'SMAS HARAPAN BANGSA BALEENDAH KABUPATEN BANDUNG',
            ],
            '4608' => [
                'npsn' => '20256637',
                'nama' => 'SMAS AL QONAAH BALEENDAH KABUPATEN BANDUNG',
            ],
            '4609' => [
                'npsn' => '20229784',
                'nama' => 'SMKN 7 BALEENDAH KABUPATEN BANDUNG',
            ],
            '4610' => [
                'npsn' => '20206225',
                'nama' => 'SMKN 3 BALEENDAH KABUPATEN BANDUNG',
            ],
            '4611' => [
                'npsn' => '20227848',
                'nama' => 'SMAS KP 1 CIPARAY KABUPATEN BANDUNG',
            ],
            '4612' => [
                'npsn' => '20240399',
                'nama' => 'SMAS IT DIPATIUKUR KABUPATEN BANDUNG',
            ],
            '4613' => [
                'npsn' => '69940514',
                'nama' => 'SLBS NURUL MAJID KABUPATEN BANDUNG',
            ],
            '4614' => [
                'npsn' => '20258472',
                'nama' => 'SLBS BAG ABCD MUHAMMADIYAH CIPARAY KABUPATEN BANDUNG',
            ],
            '4615' => [
                'npsn' => '20227921',
                'nama' => 'SMAS PLUS TEBAR ILMU CIPARAY KABUPATEN BANDUNG',
            ],
            '4616' => [
                'npsn' => '20228559',
                'nama' => 'SMKS WIRAKARYA 1 CIPARAY KABUPATEN BANDUNG',
            ],
            '4617' => [
                'npsn' => '20256565',
                'nama' => 'SMKS ITIKURIH HIBARNA CIPARAY KABUPATEN BANDUNG',
            ],
            '4618' => [
                'npsn' => '20219300',
                'nama' => 'SMKS INDONESIA RAYA BANDUNG KOTA BANDUNG',
            ],
            '4619' => [
                'npsn' => '20252557',
                'nama' => 'SMKS PONDOK UNGU PERMAI KOTA BEKASI',
            ],
            '4620' => [
                'npsn' => '69774526',
                'nama' => 'SMKS PANJATEK KOTA BEKASI',
            ],
            '4621' => [
                'npsn' => '20259623',
                'nama' => 'SLBS BAG G YBMU BALEENDAH KABUPATEN BANDUNG',
            ],
            '4622' => [
                'npsn' => '20271280',
                'nama' => 'SMKS PUTRA PAJAJARAN 2 BANDUNG KOTA BANDUNG',
            ],
            '4623' => [
                'npsn' => '20219164',
                'nama' => 'SMKS MAARIF BANDUNG KOTA BANDUNG',
            ],
            '4624' => [
                'npsn' => '20219180',
                'nama' => 'SMKS MUSLIMIN 2 BANDUNG KOTA BANDUNG',
            ],
            '4625' => [
                'npsn' => '20219800',
                'nama' => 'SMAS MAARIF BANDUNG KOTA BANDUNG',
            ],
            '4626' => [
                'npsn' => '20219722',
                'nama' => 'SMAS BUDI ISTRI KOTA BANDUNG',
            ],
            '4627' => [
                'npsn' => '20219807',
                'nama' => 'SMAS MUHAMMADIYAH 1 KOTA BANDUNG',
            ],
            '4628' => [
                'npsn' => '20219181',
                'nama' => 'SMKS MUSLIMIN 1 BANDUNG KOTA BANDUNG',
            ],
            '4629' => [
                'npsn' => '20219738',
                'nama' => 'SMAS BPI 1 BANDUNG KOTA BANDUNG',
            ],
            '4630' => [
                'npsn' => '20219733',
                'nama' => 'SMAS KEMALA BHAYANGKARI KOTA BANDUNG',
            ],
            '4631' => [
                'npsn' => '20219159',
                'nama' => 'SMKN 15 BANDUNG KOTA BANDUNG',
            ],
            '4632' => [
                'npsn' => '20227959',
                'nama' => 'SMKS MUHAMMADIYAH MAJALAYA KABUPATEN BANDUNG',
            ],
            '4633' => [
                'npsn' => '20227919',
                'nama' => 'SMAS ASH SHOPA MAJALAYA KABUPATEN BANDUNG',
            ],
            '4634' => [
                'npsn' => '20256632',
                'nama' => 'SMKS PASUNDAN MAJALAYA KABUPATEN BANDUNG',
            ],
            '4635' => [
                'npsn' => '20270339',
                'nama' => 'SMKS BINA UMAT MAJALAYA KABUPATEN BANDUNG',
            ],
            '4636' => [
                'npsn' => '20227824',
                'nama' => 'SMAS AULIA MAJALAYA KABUPATEN BANDUNG',
            ],
            '4637' => [
                'npsn' => '69774726',
                'nama' => 'SMKS TUNAS MEKAR RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4638' => [
                'npsn' => '69948331',
                'nama' => 'SMKS BINA TEKNOLOGI KABUPATEN BANDUNG',
            ],
            '4639' => [
                'npsn' => '69734357',
                'nama' => 'SMKS KESEHATAN RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4640' => [
                'npsn' => '70006290',
                'nama' => 'SMKS PIRAMIDA KABUPATEN BANDUNG',
            ],
            '4641' => [
                'npsn' => '20227918',
                'nama' => 'SMAS PASUNDAN RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4642' => [
                'npsn' => '20258498',
                'nama' => 'SLBS YAPMI RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4643' => [
                'npsn' => '20227863',
                'nama' => 'SMAS MUHAMMADIYAH 5 RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4644' => [
                'npsn' => '20258494',
                'nama' => 'SLBS BAG BC MULTAHADA KABUPATEN BANDUNG',
            ],
            '4645' => [
                'npsn' => '60728547',
                'nama' => 'SMKS CELLULAR HAURO 49 KABUPATEN BANDUNG',
            ],
            '4646' => [
                'npsn' => '20227941',
                'nama' => 'SMKS HARAPAN 1 RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4647' => [
                'npsn' => '20259581',
                'nama' => 'SMKS KARYA PERMATA KABUPATEN BANDUNG',
            ],
            '4648' => [
                'npsn' => '20227933',
                'nama' => 'SMKS BINTARA RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4649' => [
                'npsn' => '20228541',
                'nama' => 'SMKS LUGINA RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4650' => [
                'npsn' => '69950528',
                'nama' => 'SMKS PLUS BANI MUCHTAR RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4651' => [
                'npsn' => '20227920',
                'nama' => 'SMAS TAMAN SISWA RANCAEKEK KABUPATEN BANDUNG',
            ],
            '4652' => [
                'npsn' => '70027168',
                'nama' => 'SMAS ISLAM BAKTI ASIH KABUPATEN BANDUNG',
            ],
            '4653' => [
                'npsn' => '22059620',
                'nama' => 'SLBS BAG BCD PUTERA MANDIRI KABUPATEN BANDUNG',
            ],
            '4654' => [
                'npsn' => '20258471',
                'nama' => 'SLBS BAG ABCD ASYIFA KABUPATEN BANDUNG',
            ],
            '4655' => [
                'npsn' => '20270832',
                'nama' => 'SMKS KESEHATAN PRIMA HUSADA KABUPATEN GARUT',
            ],
            '4656' => [
                'npsn' => '20258197',
                'nama' => 'SLBS BAG BC NURUL INSANI KABUPATEN GARUT',
            ],
            '4657' => [
                'npsn' => '20271302',
                'nama' => 'SMKS NURUL HAKIM KABUPATEN GARUT',
            ],
            '4658' => [
                'npsn' => '69867931',
                'nama' => 'SMAS IT SINARSARI KABUPATEN GARUT',
            ],
            '4659' => [
                'npsn' => '69755543',
                'nama' => 'SMAS PLUS PERSIS PAMEUNGPEUK KABUPATEN GARUT',
            ],
            '4660' => [
                'npsn' => '20262098',
                'nama' => 'SMKS MAARIF PAMEUNGPEUK KABUPATEN GARUT',
            ],
            '4661' => [
                'npsn' => '20219749',
                'nama' => 'SMAS 19 BUMI SIL KOTA BANDUNG',
            ],
            '4662' => [
                'npsn' => '20219859',
                'nama' => 'SLBS BAG C ASIH MANUNGGAL KOTA BANDUNG',
            ],
            '4663' => [
                'npsn' => '20268497',
                'nama' => 'SMKS KARYA BUDI KABUPATEN BANDUNG',
            ],
            '4664' => [
                'npsn' => '20227858',
                'nama' => 'SMAS MEKAR ARUM CILEUNYI KABUPATEN BANDUNG',
            ],
            '4665' => [
                'npsn' => '20227853',
                'nama' => 'SMAS KARYA BUDI CILEUNYI KABUPATEN BANDUNG',
            ],
            '4666' => [
                'npsn' => '20227929',
                'nama' => 'SMKS BANDUNG TIMUR KABUPATEN BANDUNG',
            ],
            '4667' => [
                'npsn' => '20228545',
                'nama' => 'SMKS MEKAR GALIH KABUPATEN BANDUNG',
            ],
            '4668' => [
                'npsn' => '69946906',
                'nama' => 'SMKS GUNUNG NAGARA KABUPATEN GARUT',
            ],
            '4669' => [
                'npsn' => '20219720',
                'nama' => 'SMAS DARUL HIKAM BANDUNG KOTA BANDUNG',
            ],
            '4670' => [
                'npsn' => '20219774',
                'nama' => 'SMAS PASUNDAN 8 BANDUNG KOTA BANDUNG',
            ],
            '4671' => [
                'npsn' => '20219716',
                'nama' => 'SMAS IT MIFTAHUL KHOIR KOTA BANDUNG',
            ],
            '4672' => [
                'npsn' => '20259613',
                'nama' => 'SLBN CILEUNYI KABUPATEN BANDUNG',
            ],
            '4673' => [
                'npsn' => '20227851',
                'nama' => 'SMAS KP MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4674' => [
                'npsn' => '20227822',
                'nama' => 'SMAS ANGKASA MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4675' => [
                'npsn' => '20258477',
                'nama' => 'SLBS ANGKASA LANUD SULAIMAN KABUPATEN BANDUNG',
            ],
            '4676' => [
                'npsn' => '20228536',
                'nama' => 'SMKS KP MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4677' => [
                'npsn' => '20259616',
                'nama' => 'SLBS NURVITA KABUPATEN BANDUNG',
            ],
            '4678' => [
                'npsn' => '20268801',
                'nama' => 'SMKS MATHLAUL ANWAR KABUPATEN BANDUNG',
            ],
            '4679' => [
                'npsn' => '20259586',
                'nama' => 'SMKS MARHAS MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4680' => [
                'npsn' => '20227862',
                'nama' => 'SMAS MUHAMMADIYAH 4 MARGAHAYU KABUPATEN BANDUNG',
            ],
            '4681' => [
                'npsn' => '20272030',
                'nama' => 'SMKS PLUS MUHAJIRIN KOTA BANDUNG',
            ],
            '4682' => [
                'npsn' => '20219157',
                'nama' => 'SMKS PELITA BANDUNG KOTA BANDUNG',
            ],
            '4683' => [
                'npsn' => '20279895',
                'nama' => 'SMKS AS SALAM PEUNDEUY KABUPATEN GARUT',
            ],
            '4684' => [
                'npsn' => '69947076',
                'nama' => 'SMKS FATAH MA SUM KABUPATEN GARUT',
            ],
            '4685' => [
                'npsn' => '20247286',
                'nama' => 'SMAS NASIONAL KOTA BANDUNG',
            ],
            '4686' => [
                'npsn' => '20219766',
                'nama' => 'SMAS PASUNDAN 2 BANDUNG KOTA BANDUNG',
            ],
            '4687' => [
                'npsn' => '20219797',
                'nama' => 'SMAS KRISTEN DAGO KOTA BANDUNG',
            ],
            '4688' => [
                'npsn' => '20219758',
                'nama' => 'SMAS AL FALAH KOTA BANDUNG',
            ],
            '4689' => [
                'npsn' => '20219734',
                'nama' => 'SMAS KEMAH IND 2 KOTA BANDUNG',
            ],
            '4690' => [
                'npsn' => '20219746',
                'nama' => 'SLBS BAG C YPLB KOTA BANDUNG',
            ],
            '4691' => [
                'npsn' => '20265537',
                'nama' => 'SMKS NASIONAL KOTA BANDUNG',
            ],
            '4692' => [
                'npsn' => '20219747',
                'nama' => 'SLBS BAG C YAYASAN TERATE KOTA BANDUNG',
            ],
            '4693' => [
                'npsn' => '20219782',
                'nama' => 'SMAS PGII 1 KOTA BANDUNG',
            ],
            '4694' => [
                'npsn' => '20227878',
                'nama' => 'SMAS PLUS MERDEKA SOREANG KABUPATEN BANDUNG',
            ],
            '4695' => [
                'npsn' => '20206142',
                'nama' => 'SMAS SOREANG PUTRA KABUPATEN BANDUNG',
            ],
            '4696' => [
                'npsn' => '20219781',
                'nama' => 'SMAS PGII 2 KOTA BANDUNG',
            ],
            '4697' => [
                'npsn' => '20257154',
                'nama' => 'SMKS UNGGULAN TERPADU PGII KOTA BANDUNG',
            ],
            '4698' => [
                'npsn' => '20219162',
                'nama' => 'SMKS MERDEKA BANDUNG KOTA BANDUNG',
            ],
            '4699' => [
                'npsn' => '20265540',
                'nama' => 'SMKS PASUNDAN 4 KOTA BANDUNG',
            ],
            '4700' => [
                'npsn' => '20219293',
                'nama' => 'SMKS ICB CINTA WISATA KOTA BANDUNG',
            ],
            '4701' => [
                'npsn' => '20219291',
                'nama' => 'SMKS ICB CINTA NIAGA BANDUNG KOTA BANDUNG',
            ],
            '4702' => [
                'npsn' => '20247281',
                'nama' => 'SMAS SUMATRA 40 1 KOTA BANDUNG',
            ],
            '4703' => [
                'npsn' => '69864718',
                'nama' => 'SLBS AL AZHAR KOTA BEKASI',
            ],
            '4704' => [
                'npsn' => '20258497',
                'nama' => 'SLBN CINTA ASIH KABUPATEN BANDUNG',
            ],
            '4705' => [
                'npsn' => '69979631',
                'nama' => 'SMKS PRIMA PRATAMA BOARDING SCHOOL KABUPATEN GARUT',
            ],
            '4706' => [
                'npsn' => '20219872',
                'nama' => 'SLBS BAG C KARYA BAKTI KOTA BANDUNG',
            ],
            '4707' => [
                'npsn' => '20223120',
                'nama' => 'SMKS CITRA KENCANA BEKASI KOTA BEKASI',
            ],
            '4708' => [
                'npsn' => '20253848',
                'nama' => 'SMAS ISLAM AN NUR KOTA BEKASI',
            ],
            '4709' => [
                'npsn' => '20231709',
                'nama' => 'SMAS FLORA KOTA BEKASI',
            ],
            '4710' => [
                'npsn' => '20252518',
                'nama' => 'SMAS IT GEMA NURANI KOTA BEKASI',
            ],
            '4711' => [
                'npsn' => '69952197',
                'nama' => 'SMAN 20 BEKASI KOTA BEKASI',
            ],
            '4712' => [
                'npsn' => '20227461',
                'nama' => 'SMAN 27 GARUT KABUPATEN GARUT',
            ],
            '4713' => [
                'npsn' => '69755585',
                'nama' => 'SMKN 11 BEKASI KOTA BEKASI',
            ],
            '4714' => [
                'npsn' => '20223045',
                'nama' => 'SMAN 4 BEKASI KOTA BEKASI',
            ],
            '4715' => [
                'npsn' => '69971763',
                'nama' => 'SMAN 31 GARUT KABUPATEN GARUT',
            ],
            '4716' => [
                'npsn' => '69888676',
                'nama' => 'SMKS GARUT SELATAN KABUPATEN GARUT',
            ],
            '4717' => [
                'npsn' => '69899720',
                'nama' => 'SMKS TUNAS BANGSA GARUT KABUPATEN GARUT',
            ],
            '4718' => [
                'npsn' => '69824445',
                'nama' => 'SMKS MUHAMMADIYAH CIKELET KABUPATEN GARUT',
            ],
            '4719' => [
                'npsn' => '69980601',
                'nama' => 'SMKS NURUL YAQIN KABUPATEN GARUT',
            ],
            '4720' => [
                'npsn' => '20219268',
                'nama' => 'SMAS TAMAN SISWA BANDUNG KOTA BANDUNG',
            ],
            '4721' => [
                'npsn' => '20219163',
                'nama' => 'SMKS MEDINA BANDUNG KOTA BANDUNG',
            ],
            '4722' => [
                'npsn' => '20222168',
                'nama' => 'SMKS INFORMATIKA AL IRSYAD AL ISLAMIYYAH KOTA CIREBON',
            ],
            '4723' => [
                'npsn' => '20271775',
                'nama' => 'SMKS CIPTO KOTA CIREBON',
            ],
            '4724' => [
                'npsn' => '70000066',
                'nama' => 'SMKS TELKOM SEKAR KEMUNING CIREBON KOTA CIREBON',
            ],
            '4725' => [
                'npsn' => '20258315',
                'nama' => 'SLBS BAG B SAYANGE KOTA CIREBON',
            ],
            '4726' => [
                'npsn' => '69899685',
                'nama' => 'SMKS BINA BHAKTI MEKARMUKTI KABUPATEN GARUT',
            ],
            '4727' => [
                'npsn' => '69753550',
                'nama' => 'SMKS MEKARMUKTI KABUPATEN GARUT',
            ],
            '4728' => [
                'npsn' => '69944357',
                'nama' => 'SMKS WIYATA MANDALA GARUT KABUPATEN GARUT',
            ],
            '4729' => [
                'npsn' => '20219265',
                'nama' => 'SMAS ST MARIA 1 BANDUNG KOTA BANDUNG',
            ],
            '4730' => [
                'npsn' => '20219269',
                'nama' => 'SMAS TARUNA BAKTI KOTA BANDUNG',
            ],
            '4731' => [
                'npsn' => '69829164',
                'nama' => 'SMKS AL IKHLAS KOTA BEKASI',
            ],
            '4732' => [
                'npsn' => '20231728',
                'nama' => 'SMAS YATAMA KOTA BEKASI',
            ],
            '4733' => [
                'npsn' => '69873996',
                'nama' => 'SMKS INSAN BHAKTI MULIA KOTA BEKASI',
            ],
            '4734' => [
                'npsn' => '70015925',
                'nama' => 'SMAS TRENMATIKA KOTA BEKASI',
            ],
            '4735' => [
                'npsn' => '20247209',
                'nama' => 'SMKS YADIKA 6 BEKASI KOTA BEKASI',
            ],
            '4736' => [
                'npsn' => '20219253',
                'nama' => 'SMAN 20 BANDUNG KOTA BANDUNG',
            ],
            '4737' => [
                'npsn' => '69849075',
                'nama' => 'SMAS AL AMANAH PAKENJENG KABUPATEN GARUT',
            ],
            '4738' => [
                'npsn' => '69971847',
                'nama' => 'SMKS ISLAMIC CENTRE PAKENJENG KABUPATEN GARUT',
            ],
            '4739' => [
                'npsn' => '70008041',
                'nama' => 'SMAS ISLAM AS SAKINAH PAKENJENG KABUPATEN GARUT',
            ],
            '4740' => [
                'npsn' => '69753551',
                'nama' => 'SMKS PLUS PONTREN YABAFA PAKENJENG KABUPATEN GARUT',
            ],
            '4741' => [
                'npsn' => '69756151',
                'nama' => 'SMKS GALUH PAKUAN KOTA BANDUNG',
            ],
            '4742' => [
                'npsn' => '20219320',
                'nama' => 'SMKS AL FALAH BANDUNG KOTA BANDUNG',
            ],
            '4743' => [
                'npsn' => '69856208',
                'nama' => 'SMAS QUANTUM INDONESIA KOTA BEKASI',
            ],
            '4744' => [
                'npsn' => '20253916',
                'nama' => 'SMKS YADIKA 11 JATIRANGGA KOTA BEKASI',
            ],
            '4745' => [
                'npsn' => '20276416',
                'nama' => 'SMAS LABSCHOOL CIBUBUR KOTA BEKASI',
            ],
            '4746' => [
                'npsn' => '20231711',
                'nama' => 'SMAS ISLAM DARUL ABROR KOTA BEKASI',
            ],
            '4747' => [
                'npsn' => '20253915',
                'nama' => 'SMAS YADIKA 11 BEKASI KOTA BEKASI',
            ],
            '4748' => [
                'npsn' => '69873998',
                'nama' => 'SMAS UNITY SCHOOL KOTA BEKASI',
            ],
            '4749' => [
                'npsn' => '20223024',
                'nama' => 'SMAS TUNAS JAKA SAMPURNA KOTA BEKASI',
            ],
            '4750' => [
                'npsn' => '69948381',
                'nama' => 'SMKS DINAMIKA INSAN MANDIRI KOTA BEKASI',
            ],
            '4751' => [
                'npsn' => '20223110',
                'nama' => 'SMKS TERATAI PUTIH GLOBAL 1 BEKASI KOTA BEKASI',
            ],
            '4752' => [
                'npsn' => '20231722',
                'nama' => 'SMAS PAX PATRIAE KOTA BEKASI',
            ],
            '4753' => [
                'npsn' => '20231708',
                'nama' => 'SMAS ISLAM DARUSALAM KOTA BEKASI',
            ],
            '4754' => [
                'npsn' => '20223067',
                'nama' => 'SMAS ISLAM PANGLIMA BESAR SOEDIRMAN KOTA BEKASI',
            ],
            '4755' => [
                'npsn' => '20231735',
                'nama' => 'SMKS BPS &amp; K II BEKASI KOTA BEKASI',
            ],
            '4756' => [
                'npsn' => '20223049',
                'nama' => 'SMAS PUTRA HARAPAN KOTA BEKASI',
            ],
            '4757' => [
                'npsn' => '20223033',
                'nama' => 'SMAN 2 BEKASI KOTA BEKASI',
            ],
            '4758' => [
                'npsn' => '69945768',
                'nama' => 'SMKS BINA TUNGGAL MURANDIKA PUTRA BEKASI KOTA BEKASI',
            ],
            '4759' => [
                'npsn' => '20231721',
                'nama' => 'SMAS PATRIOT BEKASI KOTA BEKASI',
            ],
            '4760' => [
                'npsn' => '20223054',
                'nama' => 'SMAS GALATIA KOTA BEKASI',
            ],
            '4761' => [
                'npsn' => '69948071',
                'nama' => 'SMKS ALODIA KOTA BEKASI',
            ],
            '4762' => [
                'npsn' => '20276428',
                'nama' => 'SMKS KESEHATAN PATRIOT 3 KOTA BEKASI',
            ],
            '4763' => [
                'npsn' => '20271213',
                'nama' => 'SMKS GENESIS MEDICARE KOTA DEPOK',
            ],
            '4764' => [
                'npsn' => '20229157',
                'nama' => 'SMAS ISLAM TERPADU NURUL FIKRI KOTA DEPOK',
            ],
            '4765' => [
                'npsn' => '69816259',
                'nama' => 'SMAS IBNU HAJAR BOARDING SCHOOL KOTA DEPOK',
            ],
            '4766' => [
                'npsn' => '20252375',
                'nama' => 'SMAS PONDOK DAUN KOTA DEPOK',
            ],
            '4767' => [
                'npsn' => '69753314',
                'nama' => 'SMKS CARAKA NUSANTARA KOTA DEPOK',
            ],
            '4768' => [
                'npsn' => '20229178',
                'nama' => 'SMAS SPRING FIELD KOTA DEPOK',
            ],
            '4769' => [
                'npsn' => '20276190',
                'nama' => 'SMKS GLOBAL PERSADA KOTA BEKASI',
            ],
            '4770' => [
                'npsn' => '20223119',
                'nama' => 'SMKS GELORA BEKASI KOTA BEKASI',
            ],
            '4771' => [
                'npsn' => '20223057',
                'nama' => 'SMAS BINA SISWA UTAMA KOTA BEKASI',
            ],
            '4772' => [
                'npsn' => '20252421',
                'nama' => 'SMAS YADIKA 9 KOTA BEKASI',
            ],
            '4773' => [
                'npsn' => '69759206',
                'nama' => 'SMAS DHARMA PUTRA ADVENT KOTA BEKASI',
            ],
            '4774' => [
                'npsn' => '69901596',
                'nama' => 'SMKS YADIKA 9 BINTARA KOTA BEKASI',
            ],
            '4775' => [
                'npsn' => '69759856',
                'nama' => 'ROYAL WELLS HIGH SCHOOL KOTA BEKASI',
            ],
            '4776' => [
                'npsn' => '20232537',
                'nama' => 'SMKS CITRA NEGARA DEPOK KOTA DEPOK',
            ],
            '4777' => [
                'npsn' => '20229164',
                'nama' => 'SMAS MUHAMMADIYAH BEJI KOTA DEPOK',
            ],
            '4778' => [
                'npsn' => '20268432',
                'nama' => 'SMKS SARI FARMA KOTA DEPOK',
            ],
            '4779' => [
                'npsn' => '20276113',
                'nama' => 'SMAS IT AL QUDWAH KOTA DEPOK',
            ],
            '4780' => [
                'npsn' => '20231725',
                'nama' => 'SMAS ST BELLARMINUS KOTA BEKASI',
            ],
            '4781' => [
                'npsn' => '69881366',
                'nama' => 'SMKS ISLAM TERPADU ARAFAH KOTA BEKASI',
            ],
            '4782' => [
                'npsn' => '20223025',
                'nama' => 'SMAS TULUS BHAKTI KOTA BEKASI',
            ],
            '4783' => [
                'npsn' => '70028846',
                'nama' => 'SMAS AL MUBAAROK KOTA BEKASI',
            ],
            '4784' => [
                'npsn' => '20268740',
                'nama' => 'SMKS MALIDAR KOTA BEKASI',
            ],
            '4785' => [
                'npsn' => '20280604',
                'nama' => 'SMAS FUTURE GATE KOTA BEKASI',
            ],
            '4786' => [
                'npsn' => '20254902',
                'nama' => 'SMKS GUNA BANGSA KOTA BEKASI',
            ],
            '4787' => [
                'npsn' => '20269693',
                'nama' => 'SMKS BINA HUSADA MANDIRI KOTA BEKASI',
            ],
            '4788' => [
                'npsn' => '20231743',
                'nama' => 'SMKS PEMBANGUNAN NASIONAL KOTA BEKASI',
            ],
            '4789' => [
                'npsn' => '20252515',
                'nama' => 'SMAS AR RIDWAN KOTA BEKASI',
            ],
            '4790' => [
                'npsn' => '20269696',
                'nama' => 'SMKN 7 BEKASI KOTA BEKASI',
            ],
            '4791' => [
                'npsn' => '20223059',
                'nama' => 'SMAS AL IHSAN KOTA BEKASI',
            ],
            '4792' => [
                'npsn' => '70006454',
                'nama' => 'SMKS GEMA KARYA BAHANA KOTA BEKASI',
            ],
            '4793' => [
                'npsn' => '20254039',
                'nama' => 'SMKS TERATAI PUTIH GLOBAL 2 BEKASI KOTA BEKASI',
            ],
            '4794' => [
                'npsn' => '20223074',
                'nama' => 'SMAS MARTIA BHAKTI KOTA BEKASI',
            ],
            '4795' => [
                'npsn' => '69758792',
                'nama' => 'SLBS AGCA CENTER KOTA BEKASI',
            ],
            '4796' => [
                'npsn' => '20271398',
                'nama' => 'SMKS TUNAS JAKASAMPURNA KOTA BEKASI',
            ],
            '4797' => [
                'npsn' => '20258182',
                'nama' => 'SLBS KEMBAR KARYA PEMBANGUNAN KOTA BEKASI',
            ],
            '4798' => [
                'npsn' => '20253970',
                'nama' => 'SMKS PERMATA BANGSA KOTA BEKASI',
            ],
            '4799' => [
                'npsn' => '20276429',
                'nama' => 'SMAN 17 BEKASI KOTA BEKASI',
            ],
            '4800' => [
                'npsn' => '20223046',
                'nama' => 'SMAN 3 BEKASI KOTA BEKASI',
            ],
            '4801' => [
                'npsn' => '70028608',
                'nama' => 'SMKS INDUSTRI KREATIF KOTA BEKASI',
            ],
            '4802' => [
                'npsn' => '20252558',
                'nama' => 'SMKS AL BAHRI KOTA BEKASI',
            ],
            '4803' => [
                'npsn' => '20276418',
                'nama' => 'SMKS AL MUHTADIN KOTA BEKASI',
            ],
            '4804' => [
                'npsn' => '20231731',
                'nama' => 'SMKS AL MUTAQIN KOTA BEKASI',
            ],
            '4805' => [
                'npsn' => '20232526',
                'nama' => 'SMAS ISLAM TERPADU RAFLESIA KOTA DEPOK',
            ],
            '4806' => [
                'npsn' => '69989332',
                'nama' => 'SMAS ISLAM ALAM DAN SAINS AL JANNAH KOTA DEPOK',
            ],
            '4807' => [
                'npsn' => '69772639',
                'nama' => 'SMKS ASSALAM KOTA DEPOK',
            ],
            '4808' => [
                'npsn' => '20269218',
                'nama' => 'SMKS SEMESTA KOTA DEPOK',
            ],
            '4809' => [
                'npsn' => '69973604',
                'nama' => 'SMAN 22 BEKASI KOTA BEKASI',
            ],
            '4810' => [
                'npsn' => '20231741',
                'nama' => 'SMKN 2 BEKASI KOTA BEKASI',
            ],
            '4811' => [
                'npsn' => '20276422',
                'nama' => 'SMKS INSAN MULIA KOTA BEKASI',
            ],
            '4812' => [
                'npsn' => '20280602',
                'nama' => 'SMKS KARYA MANDIRI KOTA BEKASI',
            ],
            '4813' => [
                'npsn' => '69774832',
                'nama' => 'SMKS PERSADA HUSADA INDONESIA KOTA BEKASI',
            ],
            '4814' => [
                'npsn' => '20253245',
                'nama' => 'SMAS GEMA ISLAMI KOTA BEKASI',
            ],
            '4815' => [
                'npsn' => '20223018',
                'nama' => 'SMKS BINA INSAN KAMIL KOTA BEKASI',
            ],
            '4816' => [
                'npsn' => '69815464',
                'nama' => 'SMKS NUSA BHAKTI KOTA BEKASI',
            ],
            '4817' => [
                'npsn' => '69944391',
                'nama' => 'SMKS MITRA BAKTI HUSADA KOTA BEKASI',
            ],
            '4818' => [
                'npsn' => '69873995',
                'nama' => 'SMKS BANGUN PERSADA KOTA BEKASI',
            ],
            '4819' => [
                'npsn' => '20223063',
                'nama' => 'SMAS IT YAPIDH KOTA BEKASI',
            ],
            '4820' => [
                'npsn' => '20223126',
                'nama' => 'SMKS KI HAJAR DEWANTARA BEKASI KOTA BEKASI',
            ],
            '4821' => [
                'npsn' => '20252595',
                'nama' => 'SMAS BANI SALEH KOTA BEKASI',
            ],
            '4822' => [
                'npsn' => '20254026',
                'nama' => 'SMKS KARYA BHAKTI 3 BEKASI KOTA BEKASI',
            ],
            '4823' => [
                'npsn' => '70029068',
                'nama' => 'SMKS GLOBAL PERSADA MANDIRI KOTA BEKASI',
            ],
            '4824' => [
                'npsn' => '20223115',
                'nama' => 'SMKS KARYA GUNA 1 BEKASI KOTA BEKASI',
            ],
            '4825' => [
                'npsn' => '20246731',
                'nama' => 'SMKS TEKNOLOGI NASIONAL KOTA BEKASI',
            ],
            '4826' => [
                'npsn' => '20280605',
                'nama' => 'SMKS TIRTA KENCANA KOTA BEKASI',
            ],
            '4827' => [
                'npsn' => '20269388',
                'nama' => 'SLBS BAG A TANMIYAT KOTA BEKASI',
            ],
            '4828' => [
                'npsn' => '20223031',
                'nama' => 'SMAS SANTA MARIA MONICA KOTA BEKASI',
            ],
            '4829' => [
                'npsn' => '69831103',
                'nama' => 'SMKS KORPRI KOTA BEKASI',
            ],
            '4830' => [
                'npsn' => '20231730',
                'nama' => 'SMKS AL MUHADJIRIN BEKASI KOTA BEKASI',
            ],
            '4831' => [
                'npsn' => '20223066',
                'nama' => 'SMAS PGRI 1 BEKASI KOTA BEKASI',
            ],
            '4832' => [
                'npsn' => '20223116',
                'nama' => 'SMKS KARYA BHAKTI 1 BEKASI KOTA BEKASI',
            ],
            '4833' => [
                'npsn' => '20252546',
                'nama' => 'SMKS TERATAI PUTIH GLOBAL 3 BEKASI KOTA BEKASI',
            ],
            '4834' => [
                'npsn' => '69900069',
                'nama' => 'SMKS KARYA BAHANA MANDIRI 2 KOTA BEKASI',
            ],
            '4835' => [
                'npsn' => '20231726',
                'nama' => 'SMAS PLUS TERATAI PUTIH KOTA BEKASI',
            ],
            '4836' => [
                'npsn' => '20252514',
                'nama' => 'SMAS DAYA UTAMA KOTA BEKASI',
            ],
            '4837' => [
                'npsn' => '20268893',
                'nama' => 'SMKS KARYA BAHANA MANDIRI KOTA BEKASI',
            ],
            '4838' => [
                'npsn' => '20223131',
                'nama' => 'SMKS SUMBER DAYA BEKASI KOTA BEKASI',
            ],
            '4839' => [
                'npsn' => '69796463',
                'nama' => 'SMKS TEKAT OTOMOTIF INTERNASIONAL KOTA BEKASI',
            ],
            '4840' => [
                'npsn' => '20268735',
                'nama' => 'SMKS DAYA UTAMA KOTA BEKASI',
            ],
            '4841' => [
                'npsn' => '70027929',
                'nama' => 'SMAS INTELLIGENTSIA NURUL ILMI SECONDARY SCHOOL KOTA BEKASI',
            ],
            '4842' => [
                'npsn' => '20223040',
                'nama' => 'SMAN 9 BEKASI KOTA BEKASI',
            ],
            '4843' => [
                'npsn' => '69972531',
                'nama' => 'SMAN 19 BEKASI KOTA BEKASI',
            ],
            '4844' => [
                'npsn' => '20253167',
                'nama' => 'SMAS ISLAM AL AZHAR 4 KOTA BEKASI',
            ],
            '4845' => [
                'npsn' => '20253379',
                'nama' => 'SMKS WIDYA NUSANTARA BEKASI KOTA BEKASI',
            ],
            '4846' => [
                'npsn' => '20257422',
                'nama' => 'SMKS BINA KARYA MANDIRI 2 KOTA BEKASI',
            ],
            '4847' => [
                'npsn' => '69950694',
                'nama' => 'SMAS SANTA LUSIA BEKASI KOTA BEKASI',
            ],
            '4848' => [
                'npsn' => '20223028',
                'nama' => 'SMAS TAMAN SISWA BEKASI KOTA BEKASI',
            ],
            '4849' => [
                'npsn' => '20253565',
                'nama' => 'SMKS BHAKTI KARTINI KOTA BEKASI',
            ],
            '4850' => [
                'npsn' => '20231714',
                'nama' => 'SMAS MAHANAIM KOTA BEKASI',
            ],
            '4851' => [
                'npsn' => '69760842',
                'nama' => 'SMKS PARIWISATA PARAMITHA KOTA BEKASI',
            ],
            '4852' => [
                'npsn' => '20252520',
                'nama' => 'SMAS WIDYA NUSANTARA KOTA BEKASI',
            ],
            '4853' => [
                'npsn' => '20254041',
                'nama' => 'SMKS MANDALAHAYU II KOTA BEKASI',
            ],
            '4854' => [
                'npsn' => '20223138',
                'nama' => 'SMKS MUTIARA BARU BEKASI KOTA BEKASI',
            ],
            '4855' => [
                'npsn' => '20269515',
                'nama' => 'SMKS BUNDA AUNI KOTA BEKASI',
            ],
            '4856' => [
                'npsn' => '70033727',
                'nama' => 'SMAS PAPAN RAUDHOTUL JANNAH KOTA BEKASI',
            ],
            '4857' => [
                'npsn' => '20223072',
                'nama' => 'SMAS MUDI AL AZIZIYYAH KOTA BEKASI',
            ],
            '4858' => [
                'npsn' => '69886285',
                'nama' => 'SMAS ISLAM AL FAJAR KOTA BEKASI',
            ],
            '4859' => [
                'npsn' => '70009964',
                'nama' => 'SMAS GENESIS MEDICARE KOTA DEPOK',
            ],
            '4860' => [
                'npsn' => '69757452',
                'nama' => 'SMKS ATLAS KOTA DEPOK',
            ],
            '4861' => [
                'npsn' => '20229225',
                'nama' => 'SMKS PEMUDA DEPOK KOTA DEPOK',
            ],
            '4862' => [
                'npsn' => '20229238',
                'nama' => 'SMKS YPPD DEPOK KOTA DEPOK',
            ],
            '4863' => [
                'npsn' => '20257146',
                'nama' => 'SMKS PELITA DEPOK KOTA DEPOK',
            ],
            '4864' => [
                'npsn' => '69900112',
                'nama' => 'SMKS ISLAM DAARUL SHAFA KOTA DEPOK',
            ],
            '4865' => [
                'npsn' => '69976876',
                'nama' => 'SMKS KESEHATAN ARAS KOTA DEPOK',
            ],
            '4866' => [
                'npsn' => '20229150',
                'nama' => 'SMAS CAKRA BUANA KOTA DEPOK',
            ],
            '4867' => [
                'npsn' => '20258448',
                'nama' => 'SMKS TI TUNAS HARAPAN BEKASI KOTA BEKASI',
            ],
            '4868' => [
                'npsn' => '69758956',
                'nama' => 'SMKS AL MUHADJIRIN 2 BEKASI KOTA BEKASI',
            ],
            '4869' => [
                'npsn' => '20280608',
                'nama' => 'SMKS BHAKTI BANGSA KOTA BEKASI',
            ],
            '4870' => [
                'npsn' => '69819419',
                'nama' => 'SMKS SANTA MARIA MONICA KOTA BEKASI',
            ],
            '4871' => [
                'npsn' => '20223113',
                'nama' => 'SMKS KARYA GUNA BHAKTI 1 KOTA BEKASI',
            ],
            '4872' => [
                'npsn' => '20223020',
                'nama' => 'SMAN 1 BEKASI KOTA BEKASI',
            ],
            '4873' => [
                'npsn' => '20223064',
                'nama' => 'SMAS KORPRI KOTA BEKASI',
            ],
            '4874' => [
                'npsn' => '20223114',
                'nama' => 'SMKS KARYA GUNA 2 BEKASI KOTA BEKASI',
            ],
            '4875' => [
                'npsn' => '20231733',
                'nama' => 'SMKS BINA KARYA TEKNIK KOTA BEKASI',
            ],
            '4876' => [
                'npsn' => '20223112',
                'nama' => 'SMKS KARYA GUNA BHAKTI 2 KOTA BEKASI',
            ],
            '4877' => [
                'npsn' => '20223132',
                'nama' => 'SMKS STRADA BUDI LUHUR KOTA BEKASI',
            ],
            '4878' => [
                'npsn' => '20231732',
                'nama' => 'SMKS BINA KARYA MANDIRI BEKASI KOTA BEKASI',
            ],
            '4879' => [
                'npsn' => '20223121',
                'nama' => 'SMKS BISNIS INFORMATIKA BEKASI KOTA BEKASI',
            ],
            '4880' => [
                'npsn' => '20268764',
                'nama' => 'SMKS BINA LESTARI KOTA BEKASI',
            ],
            '4881' => [
                'npsn' => '20252561',
                'nama' => 'SMKS BINA PROFESI MANDIRI KOTA BEKASI',
            ],
            '4882' => [
                'npsn' => '70026922',
                'nama' => 'SMAS HIGHFIELD KOTA BEKASI',
            ],
            '4883' => [
                'npsn' => '20257354',
                'nama' => 'SMKS TAMAN SISWA KOTA BEKASI',
            ],
            '4884' => [
                'npsn' => '60726520',
                'nama' => 'SMKS SUMBER PERMATA BANGSA KOTA BEKASI',
            ],
            '4885' => [
                'npsn' => '20231716',
                'nama' => 'SMAS MUTIARA BARU KOTA BEKASI',
            ],
            '4886' => [
                'npsn' => '69893852',
                'nama' => 'SMAS ALEXANDRIA ISLAMIC SCHOOL KOTA BEKASI',
            ],
            '4887' => [
                'npsn' => '20223075',
                'nama' => 'SMAS MARSUDIRINI KOTA BEKASI',
            ],
            '4888' => [
                'npsn' => '60726811',
                'nama' => 'SMKS PGRI RAWALUMBU KOTA BEKASI',
            ],
            '4889' => [
                'npsn' => '20279910',
                'nama' => 'SMKS IT IBNU RUSYD KOTA BEKASI',
            ],
            '4890' => [
                'npsn' => '20231745',
                'nama' => 'SMKS TERATAI PUTIH GLOBAL 4 BEKASI KOTA BEKASI',
            ],
            '4891' => [
                'npsn' => '20246487',
                'nama' => 'SMKS PIJAR ALAM KOTA BEKASI',
            ],
            '4892' => [
                'npsn' => '20253779',
                'nama' => 'SMKS TINTA EMAS INDONESIA KOTA BEKASI',
            ],
            '4893' => [
                'npsn' => '20269204',
                'nama' => 'SMKS WALISONGO 2 KOTA DEPOK',
            ],
            '4894' => [
                'npsn' => '69947518',
                'nama' => 'SMKS TUNAS BANGSA KOTA DEPOK',
            ],
            '4895' => [
                'npsn' => '20258060',
                'nama' => 'SMKS MADANI KOTA DEPOK',
            ],
            '4896' => [
                'npsn' => '70005347',
                'nama' => 'SMAS IT MISBAAHUSSUDUUR KOTA DEPOK',
            ],
            '4897' => [
                'npsn' => '70015823',
                'nama' => 'SMAS TQT MADINATUL QUR`AN KOTA DEPOK',
            ],
            '4898' => [
                'npsn' => '20276188',
                'nama' => 'SMKN 3 DEPOK KOTA DEPOK',
            ],
            '4899' => [
                'npsn' => '20258514',
                'nama' => 'SMAS YADIKA 12 KOTA DEPOK',
            ],
            '4900' => [
                'npsn' => '20229235',
                'nama' => 'SMKS WINAYA LOKA KOTA DEPOK',
            ],
            '4901' => [
                'npsn' => '69888519',
                'nama' => 'SMKS GHAMA CARAKA KOTA DEPOK',
            ],
            '4902' => [
                'npsn' => '20252317',
                'nama' => 'SMKS INFORMATIKA UTAMA KOTA DEPOK',
            ],
            '4903' => [
                'npsn' => '20229173',
                'nama' => 'SMAS PSKD VII KOTA DEPOK',
            ],
            '4904' => [
                'npsn' => '20229158',
                'nama' => 'SMAS KASIH PANCORAN MAS KOTA DEPOK',
            ],
            '4905' => [
                'npsn' => '20232545',
                'nama' => 'SMKS PRISMAS DEPOK KOTA DEPOK',
            ],
            '4906' => [
                'npsn' => '20223842',
                'nama' => 'SLBS BAG B DHARMA ASIH KOTA DEPOK',
            ],
            '4907' => [
                'npsn' => '20232535',
                'nama' => 'SMKS BINA UTAMA DEPOK KOTA DEPOK',
            ],
            '4908' => [
                'npsn' => '20229216',
                'nama' => 'SMKS MANDIRI DEPOK KOTA DEPOK',
            ],
            '4909' => [
                'npsn' => '20229223',
                'nama' => 'SMKS PANMAS 2 DEPOK KOTA DEPOK',
            ],
            '4910' => [
                'npsn' => '20223822',
                'nama' => 'SLBS BAG C DHARMA ASIH KOTA DEPOK',
            ],
            '4911' => [
                'npsn' => '69759294',
                'nama' => 'SMKS BROADCAST MAHARDHIKA KOTA DEPOK',
            ],
            '4912' => [
                'npsn' => '20229213',
                'nama' => 'SMKS KESUMA BANGSA 2 DEPOK KOTA DEPOK',
            ],
            '4913' => [
                'npsn' => '20229174',
                'nama' => 'SMAS PUTRA BANGSA KOTA DEPOK',
            ],
            '4914' => [
                'npsn' => '20232539',
                'nama' => 'SMKS FARMASI HARAPAN MASSA KOTA DEPOK',
            ],
            '4915' => [
                'npsn' => '20260502',
                'nama' => 'SLBS BAG BCD NUSANTARA KOTA DEPOK',
            ],
            '4916' => [
                'npsn' => '20229172',
                'nama' => 'SMAS PRIBADI BEJI KOTA DEPOK',
            ],
            '4917' => [
                'npsn' => '20229229',
                'nama' => 'SMKS PUTRA BANGSA DEPOK KOTA DEPOK',
            ],
            '4918' => [
                'npsn' => '20267207',
                'nama' => 'SLBS BAG B MAHARDIKA KOTA DEPOK',
            ],
            '4919' => [
                'npsn' => '69753313',
                'nama' => 'SMKS WISATA HARMAS KOTA DEPOK',
            ],
            '4920' => [
                'npsn' => '20229212',
                'nama' => 'SMKS KESUMA BANGSA 1 DEPOK KOTA DEPOK',
            ],
            '4921' => [
                'npsn' => '20267203',
                'nama' => 'SLBS BAG C MAHARDIKA KOTA DEPOK',
            ],
            '4922' => [
                'npsn' => '20258230',
                'nama' => 'SLBS BAG C SANTA LUSIA KOTA BEKASI',
            ],
            '4923' => [
                'npsn' => '20258257',
                'nama' => 'SMKS MAHANAIM KOTA BEKASI',
            ],
            '4924' => [
                'npsn' => '20229233',
                'nama' => 'SMKS TEKNINDO JAYA DEPOK KOTA DEPOK',
            ],
            '4925' => [
                'npsn' => '20244771',
                'nama' => 'SMKS ISLAM NURUL HAYAT KOTA DEPOK',
            ],
            '4926' => [
                'npsn' => '20229209',
                'nama' => 'SMKS ASSALAMAH KOTA DEPOK',
            ],
            '4927' => [
                'npsn' => '20229142',
                'nama' => 'SMAS ARRAHMAN KOTA DEPOK',
            ],
            '4928' => [
                'npsn' => '20229196',
                'nama' => 'SMKS ARRAHMAN DEPOK KOTA DEPOK',
            ],
            '4929' => [
                'npsn' => '20229198',
                'nama' => 'SMKS ARJUNA KOTA DEPOK',
            ],
            '4930' => [
                'npsn' => '20229210',
                'nama' => 'SMKS IZZATA KOTA DEPOK',
            ],
            '4931' => [
                'npsn' => '20231719',
                'nama' => 'SMAN 13 BEKASI KOTA BEKASI',
            ],
            '4932' => [
                'npsn' => '20231740',
                'nama' => 'SMKS MUHAMMADIYAH 01 BEKASI KOTA BEKASI',
            ],
            '4933' => [
                'npsn' => '20232538',
                'nama' => 'SMKS DWIGUNA KOTA DEPOK',
            ],
            '4934' => [
                'npsn' => '20268580',
                'nama' => 'SMKS WIRANIAGA KOTA DEPOK',
            ],
            '4935' => [
                'npsn' => '20232531',
                'nama' => 'SMKS WISATA PERINTIS 2 DEPOK KOTA DEPOK',
            ],
            '4936' => [
                'npsn' => '20232546',
                'nama' => 'SMKS SETIA NEGARA DEPOK KOTA DEPOK',
            ],
            '4937' => [
                'npsn' => '20229188',
                'nama' => 'SMAS ISLAM YPPD KOTA DEPOK',
            ],
            '4938' => [
                'npsn' => '20229171',
                'nama' => 'SMAS PGRI DEPOK KOTA DEPOK',
            ],
            '4939' => [
                'npsn' => '20254669',
                'nama' => 'SMKS CEMPAKA NUSANTARA KOTA DEPOK',
            ],
            '4940' => [
                'npsn' => '20232536',
                'nama' => 'SMKS BROADCAST CAKRA BUANA KOTA DEPOK',
            ],
            '4941' => [
                'npsn' => '20231616',
                'nama' => 'SLBN BEKASI JAYA KOTA BEKASI',
            ],
            '4942' => [
                'npsn' => '20223022',
                'nama' => 'SMAS YASFI KOTA BEKASI',
            ],
            '4943' => [
                'npsn' => '20223118',
                'nama' => 'SMKS HUTAMA BEKASI KOTA BEKASI',
            ],
            '4944' => [
                'npsn' => '20223052',
                'nama' => 'SMAS HUTAMA KOTA BEKASI',
            ],
            '4945' => [
                'npsn' => '20275048',
                'nama' => 'SMAN 16 BEKASI KOTA BEKASI',
            ],
            '4946' => [
                'npsn' => '20269175',
                'nama' => 'SMKS NURUL HIKMAH II KOTA BEKASI',
            ],
            '4947' => [
                'npsn' => '20231717',
                'nama' => 'SMAS NASIONAL 1 KOTA BEKASI',
            ],
            '4948' => [
                'npsn' => '20223053',
                'nama' => 'SMAS HANDAYANI KOTA BEKASI',
            ],
            '4949' => [
                'npsn' => '20223133',
                'nama' => 'SMKS SANDIKTA BEKASI KOTA BEKASI',
            ],
            '4950' => [
                'npsn' => '20276166',
                'nama' => 'SMKS MERAH PUTIH KOTA BEKASI',
            ],
            '4951' => [
                'npsn' => '20223047',
                'nama' => 'SMAS SANDIKTA KOTA BEKASI',
            ],
            '4952' => [
                'npsn' => '20271593',
                'nama' => 'SMKN 10 BEKASI KOTA BEKASI',
            ],
            '4953' => [
                'npsn' => '69964357',
                'nama' => 'SMKS FORWARD NUSANTARA KOTA DEPOK',
            ],
            '4954' => [
                'npsn' => '20229155',
                'nama' => 'SMAS ISLAM DARUSSALAM KOTA DEPOK',
            ],
            '4955' => [
                'npsn' => '69769431',
                'nama' => 'SMKS TIARA NUSA KOTA DEPOK',
            ],
            '4956' => [
                'npsn' => '69788547',
                'nama' => 'SMKS PUSPITA MEDIKA KOTA DEPOK',
            ],
            '4957' => [
                'npsn' => '20276189',
                'nama' => 'SMKS BAKTI JAYA KOTA DEPOK',
            ],
            '4958' => [
                'npsn' => '20232540',
                'nama' => 'SMKS INSAN TEKNOLOGI JATI KOTA DEPOK',
            ],
            '4959' => [
                'npsn' => '20229182',
                'nama' => 'SMAS TUBAGUS PANGELING KOTA DEPOK',
            ],
            '4960' => [
                'npsn' => '20269202',
                'nama' => 'SMKS MUTIARA KOTA DEPOK',
            ],
            '4961' => [
                'npsn' => '20270782',
                'nama' => 'SMKS KARYA PUTRA BANGSA KOTA DEPOK',
            ],
            '4962' => [
                'npsn' => '20268524',
                'nama' => 'SMAN 7 DEPOK KOTA DEPOK',
            ],
            '4963' => [
                'npsn' => '20223068',
                'nama' => 'SMAS PANGUDI LUHUR II KOTA BEKASI',
            ],
            '4964' => [
                'npsn' => '20268755',
                'nama' => 'SMKS AMEC KOTA DEPOK',
            ],
            '4965' => [
                'npsn' => '20279820',
                'nama' => 'SMKS MUARA ILMU KOTA DEPOK',
            ],
            '4966' => [
                'npsn' => '20252194',
                'nama' => 'SMKS KHARISMAWITA 4 DEPOK KOTA DEPOK',
            ],
            '4967' => [
                'npsn' => '20229159',
                'nama' => 'SMAS KHARISMAWITA DEPOK KOTA DEPOK',
            ],
            '4968' => [
                'npsn' => '69787190',
                'nama' => 'SMKS PELITA ILMU KOTA DEPOK',
            ],
            '4969' => [
                'npsn' => '20253253',
                'nama' => 'SMKS DARUL ULUM KOTA DEPOK',
            ],
            '4970' => [
                'npsn' => '20254088',
                'nama' => 'SMKS INDONESIA GLOBAL KOTA DEPOK',
            ],
            '4971' => [
                'npsn' => '20229193',
                'nama' => 'SMKS AL HASRA KOTA DEPOK',
            ],
            '4972' => [
                'npsn' => '20270209',
                'nama' => 'SMKS PERWIRA BANGSA KOTA DEPOK',
            ],
            '4973' => [
                'npsn' => '20254114',
                'nama' => 'SMKS YAJ KOTA DEPOK',
            ],
            '4974' => [
                'npsn' => '69765058',
                'nama' => 'SMAS IT AS SHOF KOTA DEPOK',
            ],
            '4975' => [
                'npsn' => '20229153',
                'nama' => 'SMAS ISLAM AN NIZHOMIYAH KOTA DEPOK',
            ],
            '4976' => [
                'npsn' => '20271023',
                'nama' => 'SMKS YAZVIEN 139 KOTA DEPOK',
            ],
            '4977' => [
                'npsn' => '20267760',
                'nama' => 'SMKS TUNAS MULTI RAYA KOTA DEPOK',
            ],
            '4978' => [
                'npsn' => '20267942',
                'nama' => 'SMKS POLIMEDIK KOTA DEPOK',
            ],
            '4979' => [
                'npsn' => '20229217',
                'nama' => 'SMKS MULTICOMP DEPOK KOTA DEPOK',
            ],
            '4980' => [
                'npsn' => '20269294',
                'nama' => 'SMKS PGRI 1 DEPOK KOTA DEPOK',
            ],
            '4981' => [
                'npsn' => '20223841',
                'nama' => 'SLBS BINA INSANI KOTA DEPOK',
            ],
            '4982' => [
                'npsn' => '69989336',
                'nama' => 'SMAS BUDI CENDEKIA ISLAMIC SCHOOL KOTA DEPOK',
            ],
            '4983' => [
                'npsn' => '69862451',
                'nama' => 'SMAS IT TUNAS BANGSA KOTA DEPOK',
            ],
            '4984' => [
                'npsn' => '20251864',
                'nama' => 'SMAS DARUT TAUBAH KOTA BEKASI',
            ],
            '4985' => [
                'npsn' => '20223035',
                'nama' => 'SMKS ANNUR KOTA BEKASI',
            ],
            '4986' => [
                'npsn' => '20231724',
                'nama' => 'SMAS PGRI 2 BEKASI KOTA BEKASI',
            ],
            '4987' => [
                'npsn' => '20223128',
                'nama' => 'SMKS TARUNA BANGSA KOTA BEKASI',
            ],
            '4988' => [
                'npsn' => '20231715',
                'nama' => 'SMAS MUTIARA 17 AGUSTUS KOTA BEKASI',
            ],
            '4989' => [
                'npsn' => '69725704',
                'nama' => 'SMKS MUTIARA 17 AGUSTUS KOTA BEKASI',
            ],
            '4990' => [
                'npsn' => '20257149',
                'nama' => 'SMKS TRITURA KOTA DEPOK',
            ],
            '4991' => [
                'npsn' => '20232543',
                'nama' => 'SMKS MADYA DEPOK KOTA DEPOK',
            ],
            '4992' => [
                'npsn' => '20268304',
                'nama' => 'SMKS AS SYIFA KOTA DEPOK',
            ],
            '4993' => [
                'npsn' => '20223824',
                'nama' => 'SLBS BAG BC BUDI LESTARI KOTA DEPOK',
            ],
            '4994' => [
                'npsn' => '20229214',
                'nama' => 'SMKS KHARISMAWITA 3 DEPOK KOTA DEPOK',
            ],
            '4995' => [
                'npsn' => '20229140',
                'nama' => 'SMAS AL HASRA KOTA DEPOK',
            ],
            '4996' => [
                'npsn' => '20258166',
                'nama' => 'SMAS IT DARUL RAHMAN KOTA DEPOK',
            ],
            '4997' => [
                'npsn' => '20253783',
                'nama' => 'SMAS TERPADU LISDA KOTA TASIKMALAYA',
            ],
            '4998' => [
                'npsn' => '69940436',
                'nama' => 'SMKS GLOBAL PASANGGRAHAN KOTA TASIKMALAYA',
            ],
            '4999' => [
                'npsn' => '20224544',
                'nama' => 'SMAS PLUS NASRUL HAQ KOTA TASIKMALAYA',
            ],
            '5000' => [
                'npsn' => '20271009',
                'nama' => 'SMKS MABDAUL ULUM KOTA TASIKMALAYA',
            ],
            '5001' => [
                'npsn' => '70034094',
                'nama' => 'SLBN BUNGURSARI KOTA TASIKMALAYA',
            ],
            '5002' => [
                'npsn' => '20229194',
                'nama' => 'SMKS AL MUHAJIRIN KOTA DEPOK',
            ],
            '5003' => [
                'npsn' => '20247276',
                'nama' => 'SMAS LAZUARDI GIS KOTA DEPOK',
            ],
            '5004' => [
                'npsn' => '20229163',
                'nama' => 'SMAS MUHAMMADIYAH PANCORAN MAS KOTA DEPOK',
            ],
            '5005' => [
                'npsn' => '20229221',
                'nama' => 'SMKS PANMAS 1 DEPOK KOTA DEPOK',
            ],
            '5006' => [
                'npsn' => '20229175',
                'nama' => 'SMAS SEJAHTERA 1 DEPOK KOTA DEPOK',
            ],
            '5007' => [
                'npsn' => '20229161',
                'nama' => 'SMAS MARDI YUANA PANCORAN MAS KOTA DEPOK',
            ],
            '5008' => [
                'npsn' => '20268419',
                'nama' => 'SMKS PERJUANGAN DAN PERADABAN FARMASI KOTA DEPOK',
            ],
            '5009' => [
                'npsn' => '69989077',
                'nama' => 'SMAS PERJUANGAN TERPADU KOTA DEPOK',
            ],
            '5010' => [
                'npsn' => '69759295',
                'nama' => 'SMKS CIPTA INSANI MANDIRI KOTA DEPOK',
            ],
            '5011' => [
                'npsn' => '20268528',
                'nama' => 'SMKS PGRI 2 DEPOK KOTA DEPOK',
            ],
            '5012' => [
                'npsn' => '20229165',
                'nama' => 'SMAS MUHAMMADIYAH SAWANGAN KOTA DEPOK',
            ],
            '5013' => [
                'npsn' => '20254134',
                'nama' => 'SMA TERBUKA (SMAN 5 DEPOK) KOTA DEPOK',
            ],
            '5014' => [
                'npsn' => '20252955',
                'nama' => 'SMKS BINA RAHAYU KOTA DEPOK',
            ],
            '5015' => [
                'npsn' => '69788557',
                'nama' => 'SMKS BHAKTI KARYA KOTA DEPOK',
            ],
            '5016' => [
                'npsn' => '20268871',
                'nama' => 'SMKS BINA MANDIRI KOTA DEPOK',
            ],
            '5017' => [
                'npsn' => '69824828',
                'nama' => 'SMKS PUSPITA KOTA DEPOK',
            ],
            '5018' => [
                'npsn' => '69786395',
                'nama' => 'SMKS INSAN AQILAH 3 KOTA DEPOK',
            ],
            '5019' => [
                'npsn' => '20229192',
                'nama' => 'SMKS AL IHSAN KOTA DEPOK',
            ],
            '5020' => [
                'npsn' => '20229156',
                'nama' => 'SMAS ISLAMIYAH SAWANGAN KOTA DEPOK',
            ],
            '5021' => [
                'npsn' => '20223813',
                'nama' => 'SMKS YAPAN INDONESIA DEPOK KOTA DEPOK',
            ],
            '5022' => [
                'npsn' => '69827638',
                'nama' => 'SMKS INSAN MEDIKA KOTA DEPOK',
            ],
            '5023' => [
                'npsn' => '20224595',
                'nama' => 'SMKS TI DADAHA INFORMATIKA KOTA TASIKMALAYA',
            ],
            '5024' => [
                'npsn' => '20224513',
                'nama' => 'SMAS PANCASILA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5025' => [
                'npsn' => '20251827',
                'nama' => 'SLBS BAG ABC ARGASARI LESTARI KOTA TASIKMALAYA',
            ],
            '5026' => [
                'npsn' => '20224508',
                'nama' => 'SMAN 4 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5027' => [
                'npsn' => '20253319',
                'nama' => 'SMKS NU TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5028' => [
                'npsn' => '69830087',
                'nama' => 'SMKS PLUS NURUL ARIF SALAM KOTA TASIKMALAYA',
            ],
            '5029' => [
                'npsn' => '20224522',
                'nama' => 'SMKS GALUNGGUNG TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5030' => [
                'npsn' => '20251804',
                'nama' => 'SLBS BAG ABC YAYASAN INSAN SEJAHTERA KOTA TASIKMALAYA',
            ],
            '5031' => [
                'npsn' => '20225284',
                'nama' => 'SMKS BINA PUTERA BANJAR KOTA BANJAR',
            ],
            '5032' => [
                'npsn' => '69786620',
                'nama' => 'SLBS DARUL ISHLAH KOTA BANJAR',
            ],
            '5033' => [
                'npsn' => '20225278',
                'nama' => 'SMAN 3 BANJAR KOTA BANJAR',
            ],
            '5034' => [
                'npsn' => '20224520',
                'nama' => 'SMKS MANANGGA PRATAMA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5035' => [
                'npsn' => '69947865',
                'nama' => 'SMKS KESEHATAN HIDAYAH MEDIKA KOTA TASIKMALAYA',
            ],
            '5036' => [
                'npsn' => '20224524',
                'nama' => 'SMKS DCI TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5037' => [
                'npsn' => '20224540',
                'nama' => 'SMAS AL MUTTAQIN KOTA TASIKMALAYA',
            ],
            '5038' => [
                'npsn' => '20224518',
                'nama' => 'SMKS MJPS 1 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5039' => [
                'npsn' => '20224503',
                'nama' => 'SMKS MJPS 2 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5040' => [
                'npsn' => '20253318',
                'nama' => 'SMKS BINA LESTARI PUI KOTA TASIKMALAYA',
            ],
            '5041' => [
                'npsn' => '20224509',
                'nama' => 'SMAN 3 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5042' => [
                'npsn' => '20276063',
                'nama' => 'SMKN 4 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5043' => [
                'npsn' => '69895361',
                'nama' => 'SMKS ARROHMAH DADAHA KOTA TASIKMALAYA',
            ],
            '5044' => [
                'npsn' => '20224516',
                'nama' => 'SMKS ANGKASA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5045' => [
                'npsn' => '20224553',
                'nama' => 'SMKS MUHAMMADIYAH TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5046' => [
                'npsn' => '20224551',
                'nama' => 'SMAS BPK PENABUR KOTA TASIKMALAYA',
            ],
            '5047' => [
                'npsn' => '20224549',
                'nama' => 'SMAS ISLAM IBNU SIENA KOTA TASIKMALAYA',
            ],
            '5048' => [
                'npsn' => '20224596',
                'nama' => 'SMKS PERWARI TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5049' => [
                'npsn' => '69958780',
                'nama' => 'SMAS IT AT TAUFIQ AL ISLAMY KOTA TASIKMALAYA',
            ],
            '5050' => [
                'npsn' => '20224548',
                'nama' => 'SMAS MUHAMMADIYAH TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5051' => [
                'npsn' => '20251092',
                'nama' => 'SLBS YAYASAN BAHAGIA KOTA TASIKMALAYA',
            ],
            '5052' => [
                'npsn' => '20224511',
                'nama' => 'SMAN 1 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5053' => [
                'npsn' => '20224515',
                'nama' => 'SMKS AL KHOERIYAH KOTA TASIKMALAYA',
            ],
            '5054' => [
                'npsn' => '20224512',
                'nama' => 'SMAS TERPADU RIYADLUL ULUM KOTA TASIKMALAYA',
            ],
            '5055' => [
                'npsn' => '20267946',
                'nama' => 'SMKS AL IKHWAN KOTA TASIKMALAYA',
            ],
            '5056' => [
                'npsn' => '69895563',
                'nama' => 'SMKS AL BASITH KOTA TASIKMALAYA',
            ],
            '5057' => [
                'npsn' => '20268808',
                'nama' => 'SMKS AL MUJAHID KOTA TASIKMALAYA',
            ],
            '5058' => [
                'npsn' => '69954421',
                'nama' => 'SMKS NU 2 BANJAR KOTA BANJAR',
            ],
            '5059' => [
                'npsn' => '70038408',
                'nama' => 'SMAS ISLAMIC LEADER SCHOOL KOTA TASIKMALAYA',
            ],
            '5060' => [
                'npsn' => '20229665',
                'nama' => 'SMKN 2 BANJAR KOTA BANJAR',
            ],
            '5061' => [
                'npsn' => '20276179',
                'nama' => 'SMKS KESEHATAN BHAKTI INSANI KOTA DEPOK',
            ],
            '5062' => [
                'npsn' => '20268809',
                'nama' => 'SMAS IT NURURRAHMAN KOTA DEPOK',
            ],
            '5063' => [
                'npsn' => '20229148',
                'nama' => 'SMAS BUDI BHAKTI DEPOK KOTA DEPOK',
            ],
            '5064' => [
                'npsn' => '20229215',
                'nama' => 'SMKS LINGGA KENCANA DEPOK KOTA DEPOK',
            ],
            '5065' => [
                'npsn' => '20229204',
                'nama' => 'SMKS FAJAR DEPOK KOTA DEPOK',
            ],
            '5066' => [
                'npsn' => '20229169',
                'nama' => 'SMAS PELITA DEPOK KOTA DEPOK',
            ],
            '5067' => [
                'npsn' => '20229195',
                'nama' => 'SMKS AL MUHTADIN DEPOK KOTA DEPOK',
            ],
            '5068' => [
                'npsn' => '20232530',
                'nama' => 'SMKS PERINTIS 1 DEPOK KOTA DEPOK',
            ],
            '5069' => [
                'npsn' => '20232548',
                'nama' => 'SMKS WISATA KHARISMA KOTA DEPOK',
            ],
            '5070' => [
                'npsn' => '20229147',
                'nama' => 'SMAS BINTARA DEPOK KOTA DEPOK',
            ],
            '5071' => [
                'npsn' => '20232547',
                'nama' => 'SMKS TAMAN ILMU KOTA DEPOK',
            ],
            '5072' => [
                'npsn' => '20232534',
                'nama' => 'SMKS BINA MULIA KOTA DEPOK',
            ],
            '5073' => [
                'npsn' => '69896630',
                'nama' => 'SMKS INSAN MADANI KOTA DEPOK',
            ],
            '5074' => [
                'npsn' => '70035428',
                'nama' => 'SMKS SCIENCE TECHNOLOGY AND BUSINESS KOTA DEPOK',
            ],
            '5075' => [
                'npsn' => '69830654',
                'nama' => 'SMKS NUFA CITRA MANDIRI KOTA DEPOK',
            ],
            '5076' => [
                'npsn' => '20229185',
                'nama' => 'SMAS YAPAN INDONESIA KOTA DEPOK',
            ],
            '5077' => [
                'npsn' => '69758951',
                'nama' => 'SLBN BINA INSANI KABUPATEN KUNINGAN',
            ],
            '5078' => [
                'npsn' => '20229167',
                'nama' => 'SMAN 5 DEPOK KOTA DEPOK',
            ],
            '5079' => [
                'npsn' => '20254663',
                'nama' => 'SMKN 3 BANJAR KOTA BANJAR',
            ],
            '5080' => [
                'npsn' => '69862452',
                'nama' => 'SMKS KEHUTANAN SOBAT BUMI KOTA TASIKMALAYA',
            ],
            '5081' => [
                'npsn' => '20253320',
                'nama' => 'SMKS MANAAROTUL UMMAH TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5082' => [
                'npsn' => '20270554',
                'nama' => 'SMKS ISLAM KAWALU KOTA TASIKMALAYA',
            ],
            '5083' => [
                'npsn' => '69955099',
                'nama' => 'SMAS IT IBADURROHMAN KOTA TASIKMALAYA',
            ],
            '5084' => [
                'npsn' => '20224505',
                'nama' => 'SMAN 7 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5085' => [
                'npsn' => '20224122',
                'nama' => 'SMAS PUTRA MANDIRI KOTA CIMAHI',
            ],
            '5086' => [
                'npsn' => '70024632',
                'nama' => 'SMAS TRIDAYA TUNAS BANGSA KOTA CIMAHI',
            ],
            '5087' => [
                'npsn' => '20224102',
                'nama' => 'SMKS TUT WURI HANDAYANI KOTA CIMAHI',
            ],
            '5088' => [
                'npsn' => '20224125',
                'nama' => 'SMKS SANGKURIANG 1 KOTA CIMAHI',
            ],
            '5089' => [
                'npsn' => '20224133',
                'nama' => 'SMKS PASUNDAN 1 KOTA CIMAHI',
            ],
            '5090' => [
                'npsn' => '20224130',
                'nama' => 'SMKS PGRI 1 CIMAHI KOTA CIMAHI',
            ],
            '5091' => [
                'npsn' => '20268261',
                'nama' => 'SMKS TI GARUDA NUSANTARA KOTA CIMAHI',
            ],
            '5092' => [
                'npsn' => '20228011',
                'nama' => 'SMKS KESEHATAN BHAKTI KENCANA KOTA CIMAHI',
            ],
            '5093' => [
                'npsn' => '20247214',
                'nama' => 'SLBS MUKTI ASIH KOTA CIMAHI',
            ],
            '5094' => [
                'npsn' => '20224121',
                'nama' => 'SMAS PASUNDAN 3 KOTA CIMAHI',
            ],
            '5095' => [
                'npsn' => '20224135',
                'nama' => 'SMKN 3 CIMAHI KOTA CIMAHI',
            ],
            '5096' => [
                'npsn' => '20271907',
                'nama' => 'SMKS SATYA BHAKTI KOTA TASIKMALAYA',
            ],
            '5097' => [
                'npsn' => '20276108',
                'nama' => 'SMKS AL ITTIHAD MABDAUL ULUM KOTA TASIKMALAYA',
            ],
            '5098' => [
                'npsn' => '20224131',
                'nama' => 'SMKS PGRI 3 CIMAHI KOTA CIMAHI',
            ],
            '5099' => [
                'npsn' => '20224128',
                'nama' => 'SMKS PUSDIKHUBAD KOTA CIMAHI',
            ],
            '5100' => [
                'npsn' => '20224110',
                'nama' => 'SMAS KARTIKA XIX 4 KOTA CIMAHI',
            ],
            '5101' => [
                'npsn' => '20224107',
                'nama' => 'SMAS MUHAMMADIYAH 1 KOTA CIMAHI',
            ],
            '5102' => [
                'npsn' => '20224124',
                'nama' => 'SMAS SANTA MARIA 3 KOTA CIMAHI',
            ],
            '5103' => [
                'npsn' => '20224116',
                'nama' => 'SLBS BAG BC YATIRA KOTA CIMAHI',
            ],
            '5104' => [
                'npsn' => '20224132',
                'nama' => 'SMKS PASUNDAN PUTRA KOTA CIMAHI',
            ],
            '5105' => [
                'npsn' => '20224127',
                'nama' => 'SMKS KARYA BHAKTI PUSDIKPAL KOTA CIMAHI',
            ],
            '5106' => [
                'npsn' => '20224106',
                'nama' => 'SMAS PASUNDAN 1 KOTA CIMAHI',
            ],
            '5107' => [
                'npsn' => '20224113',
                'nama' => 'SMAN 1 CIMAHI KOTA CIMAHI',
            ],
            '5108' => [
                'npsn' => '20224139',
                'nama' => 'SMAN 2 CIMAHI KOTA CIMAHI',
            ],
            '5109' => [
                'npsn' => '60726809',
                'nama' => 'SMKS PLUS DARUSSURUR KOTA CIMAHI',
            ],
            '5110' => [
                'npsn' => '20224119',
                'nama' => 'SLBS BAG BC NURANI KOTA CIMAHI',
            ],
            '5111' => [
                'npsn' => '20268626',
                'nama' => 'SMKS PASUNDAN 3 KOTA CIMAHI',
            ],
            '5112' => [
                'npsn' => '20224083',
                'nama' => 'SMKS WIRASWASTA KOTA CIMAHI',
            ],
            '5113' => [
                'npsn' => '20224137',
                'nama' => 'SMAS WARGA BAKTI KOTA CIMAHI',
            ],
            '5114' => [
                'npsn' => '20224140',
                'nama' => 'SLBS BAG BC ARAS KOTA CIMAHI',
            ],
            '5115' => [
                'npsn' => '20224134',
                'nama' => 'SMKS MOHAMAD TOHA KOTA CIMAHI',
            ],
            '5116' => [
                'npsn' => '20224103',
                'nama' => 'SMKS TI PEMBANGUNAN KOTA CIMAHI',
            ],
            '5117' => [
                'npsn' => '70032333',
                'nama' => 'SMAS IT MANBA`UL HUDA KABUPATEN KUNINGAN',
            ],
            '5118' => [
                'npsn' => '20224136',
                'nama' => 'SMKN 1 CIMAHI KOTA CIMAHI',
            ],
            '5119' => [
                'npsn' => '20224108',
                'nama' => 'SMAN 6 CIMAHI KOTA CIMAHI',
            ],
            '5120' => [
                'npsn' => '20224129',
                'nama' => 'SMKS PGRI 2 CIMAHI KOTA CIMAHI',
            ],
            '5121' => [
                'npsn' => '20224126',
                'nama' => 'SMKS SANGKURIANG 2 KOTA CIMAHI',
            ],
            '5122' => [
                'npsn' => '20238571',
                'nama' => 'SMKN 2 CIMAHI KOTA CIMAHI',
            ],
            '5123' => [
                'npsn' => '20229248',
                'nama' => 'SLBS BAG B PRIMA BHAKTI MULIA KOTA CIMAHI',
            ],
            '5124' => [
                'npsn' => '69930319',
                'nama' => 'SLBS AULIA AZZAHRA KABUPATEN KUNINGAN',
            ],
            '5125' => [
                'npsn' => '70031658',
                'nama' => 'SMKS SYNTAX BUSINESS SCHOOL KABUPATEN KUNINGAN',
            ],
            '5126' => [
                'npsn' => '69758208',
                'nama' => 'SLBN PERBATASAN KABUPATEN KUNINGAN',
            ],
            '5127' => [
                'npsn' => '20229191',
                'nama' => 'SMKS AL HIDAYAH DEPOK KOTA DEPOK',
            ],
            '5128' => [
                'npsn' => '20229176',
                'nama' => 'SMAS TADIKA PERTIWI KOTA DEPOK',
            ],
            '5129' => [
                'npsn' => '69758971',
                'nama' => 'SMKS SALAFIYAH SYAFIIYYAH KOTA DEPOK',
            ],
            '5130' => [
                'npsn' => '20276115',
                'nama' => 'SMKS DARUR ROJA KOTA DEPOK',
            ],
            '5131' => [
                'npsn' => '69826562',
                'nama' => 'SMKS ATLANTIS PLUS KOTA DEPOK',
            ],
            '5132' => [
                'npsn' => '69757450',
                'nama' => 'SMKS MEILIA MEDIKA KOTA DEPOK',
            ],
            '5133' => [
                'npsn' => '20246430',
                'nama' => 'SMAS ISLAM DIAN DIDAKTIKA KOTA DEPOK',
            ],
            '5134' => [
                'npsn' => '20276114',
                'nama' => 'SMKS MEDIA KREATIF KOTA DEPOK',
            ],
            '5135' => [
                'npsn' => '20229160',
                'nama' => 'SMAS AVICENA CINERE KOTA DEPOK',
            ],
            '5136' => [
                'npsn' => '20229231',
                'nama' => 'SMKS TADIKA PERTIWI KOTA DEPOK',
            ],
            '5137' => [
                'npsn' => '20223825',
                'nama' => 'SLBS BAG BC MANUNGGAL BHAKTI KOTA DEPOK',
            ],
            '5138' => [
                'npsn' => '20229201',
                'nama' => 'SMKS BUDI UTOMO 2 DEPOK KOTA DEPOK',
            ],
            '5139' => [
                'npsn' => '20229170',
                'nama' => 'SMAS PEMUKA KOTA DEPOK',
            ],
            '5140' => [
                'npsn' => '20267204',
                'nama' => 'SLBS INSAN MANDIRI DEPOK KOTA DEPOK',
            ],
            '5141' => [
                'npsn' => '20229183',
                'nama' => 'SMAS YAPEMRI DEPOK KOTA DEPOK',
            ],
            '5142' => [
                'npsn' => '20229227',
                'nama' => 'SMKS PURNAMA 1 DEPOK KOTA DEPOK',
            ],
            '5143' => [
                'npsn' => '20229237',
                'nama' => 'SMKS YAPPA DEPOK KOTA DEPOK',
            ],
            '5144' => [
                'npsn' => '20229149',
                'nama' => 'SMAS BUDI UTOMO SUKMAJAYA KOTA DEPOK',
            ],
            '5145' => [
                'npsn' => '20276178',
                'nama' => 'SMKS TIRTAJAYA KOTA DEPOK',
            ],
            '5146' => [
                'npsn' => '20271609',
                'nama' => 'SMKS BINA TAQWA KOTA DEPOK',
            ],
            '5147' => [
                'npsn' => '20258460',
                'nama' => 'SMAN 15 DEPOK KOTA DEPOK',
            ],
            '5148' => [
                'npsn' => '20224546',
                'nama' => 'SMAS PASUNDAN 2 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5149' => [
                'npsn' => '20269597',
                'nama' => 'SMKS PASUNDAN 2 KOTA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5150' => [
                'npsn' => '20224523',
                'nama' => 'SMKS BINA PUTERA NUSANTARA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5151' => [
                'npsn' => '20224510',
                'nama' => 'SMAN 2 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5152' => [
                'npsn' => '20251803',
                'nama' => 'SLBS YAYASAN PENDIDIKAN PATRIOT KOTA TASIKMALAYA',
            ],
            '5153' => [
                'npsn' => '20224521',
                'nama' => 'SMKS BHAKTI KENCANA TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5154' => [
                'npsn' => '20247288',
                'nama' => 'SMKS SUKAPURA KOTA TASIKMALAYA',
            ],
            '5155' => [
                'npsn' => '20224514',
                'nama' => 'SMAN 9 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5156' => [
                'npsn' => '20224506',
                'nama' => 'SMAN 6 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5157' => [
                'npsn' => '20229228',
                'nama' => 'SMKS PURNAMA 2 DEPOK KOTA DEPOK',
            ],
            '5158' => [
                'npsn' => '20229230',
                'nama' => 'SMKS SETIA KARYA DEPOK KOTA DEPOK',
            ],
            '5159' => [
                'npsn' => '20229202',
                'nama' => 'SMKS BUDI UTOMO 3 DEPOK KOTA DEPOK',
            ],
            '5160' => [
                'npsn' => '20229206',
                'nama' => 'SMKS GANESA SATRIA 1 DEPOK KOTA DEPOK',
            ],
            '5161' => [
                'npsn' => '70024044',
                'nama' => 'SMAS IT AL HARAKI KOTA DEPOK',
            ],
            '5162' => [
                'npsn' => '20229200',
                'nama' => 'SMKS BUDI UTOMO 1 KOTA DEPOK',
            ],
            '5163' => [
                'npsn' => '20229207',
                'nama' => 'SMKS GANESA SATRIA 2 DEPOK KOTA DEPOK',
            ],
            '5164' => [
                'npsn' => '20254087',
                'nama' => 'SMKS ISLAM ARIDHO KOTA DEPOK',
            ],
            '5165' => [
                'npsn' => '20229186',
                'nama' => 'SMAS YASPEN TUGU IBU KOTA DEPOK',
            ],
            '5166' => [
                'npsn' => '20229236',
                'nama' => 'SMKS YAPEMRI DEPOK KOTA DEPOK',
            ],
            '5167' => [
                'npsn' => '20224543',
                'nama' => 'SMAS PLUS PESANTREN AMANAH MUHAMMDIYAH KOTA TASIKMALAYA',
            ],
            '5168' => [
                'npsn' => '69947166',
                'nama' => 'SMKS SENI BUDAYA KOTA TASIKMALAYA',
            ],
            '5169' => [
                'npsn' => '69840939',
                'nama' => 'SMKS DUTA PRATAMA INDONESIA KOTA TASIKMALAYA',
            ],
            '5170' => [
                'npsn' => '20251819',
                'nama' => 'SMAN 10 TASIKMALAYA KOTA TASIKMALAYA',
            ],
            '5171' => [
                'npsn' => '20212950',
                'nama' => 'SMAN 1 CIWARU KABUPATEN KUNINGAN',
            ],
            '5172' => [
                'npsn' => '69974135',
                'nama' => 'SMKS BANJAR MANDIRI KOTA BANJAR',
            ],
            '5173' => [
                'npsn' => '20225283',
                'nama' => 'SMKS PASUNDAN 1 BANJAR KOTA BANJAR',
            ],
            '5174' => [
                'npsn' => '20267661',
                'nama' => 'SLBS BAG ABC PUTRA PASUNDAN 1 KOTA BANJAR',
            ],
            '5175' => [
                'npsn' => '60726572',
                'nama' => 'SMKS BHAKTI KENCANA BANJAR KOTA BANJAR',
            ],
            '5176' => [
                'npsn' => '69935069',
                'nama' => 'SMKS MIFTAHUL IHSAN KOTA BANJAR',
            ],
            '5177' => [
                'npsn' => '20225277',
                'nama' => 'SMAS BINA PUTERA KOTA BANJAR',
            ],
            '5178' => [
                'npsn' => '20225275',
                'nama' => 'SMKS PASUNDAN 2 BANJAR KOTA BANJAR',
            ],
            '5179' => [
                'npsn' => '60728389',
                'nama' => 'SMKS MAARIF NU BANJAR KOTA BANJAR',
            ],
            '5180' => [
                'npsn' => '20225279',
                'nama' => 'SMAN 1 BANJAR KOTA BANJAR',
            ],
            '5181' => [
                'npsn' => '20225285',
                'nama' => 'SMKS MUHAMMADIYAH BANJAR KOTA BANJAR',
            ],
            '5182' => [
                'npsn' => '60728393',
                'nama' => 'SMKN 4 BANJAR KOTA BANJAR',
            ],
            '5183' => [
                'npsn' => '20212916',
                'nama' => 'SMKS MODEL PATRIOT IV CIAWIGEBANG KABUPATEN KUNINGAN',
            ],
            '5184' => [
                'npsn' => '69948344',
                'nama' => 'SMKS AL IHYA CIAWIGEBANG KABUPATEN KUNINGAN',
            ],
            '5185' => [
                'npsn' => '20279826',
                'nama' => 'SMKS TAUFIQ MUBAROK KABUPATEN KUNINGAN',
            ],
            '5186' => [
                'npsn' => '69755710',
                'nama' => 'SMKS TI FATAHILAH KABUPATEN KUNINGAN',
            ],
        ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(self::SEKOLAH_DUMP as $key => $sekolah){
            $model = Sekolah::where('npsn', $sekolah['npsn'])->first();
            if(!$model) $model = new Sekolah();
            $model->npsn = $sekolah['npsn'];
            $model->nama = $sekolah['nama'];
            $model->save();
        }

        foreach(SimantapUserSeeder::SIMANTAP_USER as $key => $sekolah){
            $model = Sekolah::where('npsn', $sekolah['npsn'])->first();
            if(!$model) $model = new Sekolah();
            $model->npsn = $sekolah['npsn'];
            $model->nama = $sekolah['nama'];
            $model->save();
        }
    }
}
