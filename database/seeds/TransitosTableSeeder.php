<?php

use Illuminate\Database\Seeder;
use \App\Transito;

class TransitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transito::truncate();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "(057+2) 8200810";
        $transito->telefono_2 = "(057+2) 8236279";
        $transito->email = "pqr@popayan.gov.co";
        $transito->direccion = "Carrera 2 con Calle 25 Norte, salida al Huila, vía Pomona.";
        $transito->ciudad = 'POPAYÁN';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "8250099";
        $transito->telefono_2 = "";
        $transito->email = "secretariatransitompal@piendamo-cauca.gov.co";
        $transito->direccion = "Carrera 5 No. 9-93";
        $transito->ciudad = 'PIENDAMO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "320 6606604";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "";
        $transito->ciudad = 'TIMBIO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "(2) 8276090";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "";
        $transito->ciudad = 'EL TAMBO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "4457746";
        $transito->telefono_2 = "4457700";
        $transito->email = "transitomedellin@medellin.gov.co";
        $transito->direccion = "Carrera 64C  No.72-58  Autopista NORTE B. Caribe";
        $transito->ciudad = 'MEDELLIN';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8416830";
        $transito->telefono_2 = "8414590";
        $transito->email = "transito@edatel.net.co";
        $transito->direccion = "Calle Arboleda No. 49 A -33";
        $transito->ciudad = 'ANDES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8531136 Ext. 111";
        $transito->telefono_2 = "8532314  Ext. 111";
        $transito->email = "alcasantafe@edatel.net.co";
        $transito->direccion = "Carrera 9 No. 9-22 Palacio Consistorial Parque Principal";
        $transito->ciudad = 'SANTAFE DE ANTIOQUIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8281037";
        $transito->telefono_2 = "8280358";
        $transito->email = "sectransito@edatel.net.co";
        $transito->direccion = "Calle 89 Carrera 102 Terminal de Transporte";
        $transito->ciudad = 'APARTADO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "4548300 Ext.1667";
        $transito->telefono_2 = "";
        $transito->email = "stransito@barbosa.gov.co";
        $transito->direccion = "Calle 15  No.14-48  Palacio Municipal";
        $transito->ciudad = 'BARBOSA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8411038 ";
        $transito->telefono_2 = "";
        $transito->email = "bolivar01@edatel.net.co";
        $transito->direccion = "Carrera  47 No. 53-22";
        $transito->ciudad = 'CIUDAD BOLIVAR';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "3037585";
        $transito->telefono_2 = "";
        $transito->email = "transito@caldasantioquia.gov.co";
        $transito->direccion = "Calle 132  No.  50-45";
        $transito->ciudad = 'CALDAS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8236706 EXT.15";
        $transito->telefono_2 = "8238445";
        $transito->email = "transito@alcaldiacarepa.gov.co";
        $transito->direccion = "Alcaldía Municipal";
        $transito->ciudad = 'CAREPA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8392473";
        $transito->telefono_2 = "8392874";
        $transito->email = "ottcaucasia@007mundo.com";
        $transito->direccion = "Calle 21  No. 9-25  Barrio Pajonal";
        $transito->ciudad = 'CAUCASIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "4015172 Ext. 141";
        $transito->telefono_2 = "2740049 Ext. 141";
        $transito->email = "secretransito@hotmail.com";
        $transito->direccion = "Calle 50 A  No. 50-11  Palacio Municipal";
        $transito->ciudad = 'COPACABANA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "3394080";
        $transito->telefono_2 = "";
        $transito->email = "transitoenvigado@envigado.gov.co";
        $transito->direccion = "Calle 49 Sur  No. 48-28 -  Avenida Las Vegas";
        $transito->ciudad = 'ENVIGADO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8595288 Ext.108";
        $transito->telefono_2 = "";
        $transito->email = "fronalo@edatel.net.co";
        $transito->direccion = "Carrera 30 Calle 30 No. 04-30 Parque principal";
        $transito->ciudad = 'FRONTINO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "4052640";
        $transito->telefono_2 = "4052670";
        $transito->email = "transito@girardota.gov.co";
        $transito->direccion = "Carrera 15  6-35";
        $transito->ciudad = 'GIRARDOTA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "3761933";
        $transito->telefono_2 = "3722397";
        $transito->email = "transito_itagui@epm.net.co";
        $transito->direccion = "Carrera. 51  No. 51-55 C.A.M.I.";
        $transito->ciudad = 'ITAGÜI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "5532313";
        $transito->telefono_2 = "5534428";
        $transito->email = "ttolaceja@epm.net.co";
        $transito->direccion = "Carrera 18  No. 20-18";
        $transito->ciudad = 'LA CEJA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "2620234";
        $transito->telefono_2 = "2620969";
        $transito->email = "transito@gobant.gov.co";
        $transito->direccion = "Calle 42 No. 52-106 Sótano externo de la gobernación";
        $transito->ciudad = 'MEDELLIN';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "3812041";
        $transito->telefono_2 = "2621894";
        $transito->email = "gescobarg@gobant.gov.co";
        $transito->direccion = "Calle 80 Sur No. 58-78";
        $transito->ciudad = 'LA ESTRELLA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "5560610";
        $transito->telefono_2 = "";
        $transito->email = "uniodl@edatel.net.co";
        $transito->direccion = "Carrera 11 No.12-83";
        $transito->ciudad = 'LA UNION';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "5484884 Exty. 118-105";
        $transito->telefono_2 = "";
        $transito->email = "ttomarinilla@yahoo.com";
        $transito->direccion = "Centro Administrativo No.2 Calle 28B  No. 34-18";
        $transito->ciudad = 'MARINILLA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8332901";
        $transito->telefono_2 = "8332120";
        $transito->email = "transito@ptoberrio.gov.co";
        $transito->direccion = "Calle 6  Carrera 5  Centro Administrativo Municipal Segundo Piso";
        $transito->ciudad = 'PUERTO BERRIO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "5621717";
        $transito->telefono_2 = "5313587";
        $transito->email = "cintrarionegro@epm.net.co";
        $transito->direccion = "Carrera 47  No.62-50";
        $transito->ciudad = 'RIONEGRO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "2881838";
        $transito->telefono_2 = "2886223";
        $transito->email = "sectransito@sabaneta.gov.co";
        $transito->direccion = "Carrera 45  No. 75  Sur 35";
        $transito->ciudad = 'SABANETA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8608020 Ext. 127";
        $transito->telefono_2 = "8608120 Ext.116";
        $transito->email = "stransito@edatel.net.co";
        $transito->direccion = "Calle 30  No. 30-10  Parque Principal";
        $transito->ciudad = 'SANTA ROSA DE OSOS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8691181 Ext.122";
        $transito->telefono_2 = "- 8691296 Ext.122";
        $transito->email = "sonsal01@edatel.net.co";
        $transito->direccion = "Carrera 6 No. 6-72 Plaza Principal";
        $transito->ciudad = 'SONSON';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8272856";
        $transito->telefono_2 = "8272170";
        $transito->email = "";
        $transito->direccion = "Carrera 13  No. 102-25";
        $transito->ciudad = 'TURBO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8504204";
        $transito->telefono_2 = "8502512";
        $transito->email = "ttourrao@edatel.net.co";
        $transito->direccion = "Calle 34 A No. 27-10 - C.A.M - Cacique Toné";
        $transito->ciudad = 'URRAO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ANTIOQUIA";
        $transito->telefono = "8871910";
        $transito->telefono_2 = "8875588";
        $transito->email = "styarumal@edatel.net";
        $transito->direccion = "Carrera 22  No. 20-16";
        $transito->ciudad = 'YARUMAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CHOCO";
        $transito->telefono = "6711239 ";
        $transito->telefono_2 = "";
        $transito->email = "transchoco2003@hotmail.com";
        $transito->direccion = "Avenida Aeropuerto Calle 30";
        $transito->ciudad = 'QUIBDO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CHOCO";
        $transito->telefono = "6708287";
        $transito->telefono_2 = "";
        $transito->email = "alquibdo@hotmail.com";
        $transito->direccion = "Calle 30 frente al Cementerio San José. ";
        $transito->ciudad = 'QUIBDO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CHOCO";
        $transito->telefono = "6711239";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 30 frente al Cementerio San José. ";
        $transito->ciudad = 'ISTMINA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ATLANTICO";
        $transito->telefono = "3707535";
        $transito->telefono_2 = "3515042";
        $transito->email = "idtta@gobatl.gov.co";
        $transito->direccion = "Calle 40 carrera 45 CENTRO EDIF. GOBERNACION  1er piso";
        $transito->ciudad = 'BARRANQUILLA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ATLANTICO";
        $transito->telefono = "3086530";
        $transito->telefono_2 = "3086754";
        $transito->email = "";
        $transito->direccion = "Calle 10  18-30";
        $transito->ciudad = 'GALAPA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ATLANTICO";
        $transito->telefono = "3096012";
        $transito->telefono_2 = "3096433";
        $transito->email = "";
        $transito->direccion = "Calle 2  No.4-45  Plaza Municipal";
        $transito->ciudad = 'PUERTO COLOMBIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ATLANTICO";
        $transito->telefono = "3437777";
        $transito->telefono_2 = "3008140730";
        $transito->email = "imttrasol@edt.com.co";
        $transito->direccion = "Plaza Principal";
        $transito->ciudad = 'SOLEDAD';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6625772";
        $transito->telefono_2 = "6629500";
        $transito->email = "ftt_bolivar@hotmail.com";
        $transito->direccion = "Av. Pedro de Heredia  Sector Armenia ";
        $transito->ciudad = 'CARTAGENA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6294839";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carretera Principal";
        $transito->ciudad = 'ARJONA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6625588";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carretera Principal";
        $transito->ciudad = 'CLEMENCIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6860598";
        $transito->telefono_2 = "";
        $transito->email = "transitocarmen@hotmail.com";
        $transito->direccion = "Avenida Antonio de la Torre y Miranda - Sector La Santa ";
        $transito->ciudad = 'CARMEN DE BOLIVAR';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6880568";
        $transito->telefono_2 = "";
        $transito->email = "transitomagangue@hotmail.co";
        $transito->direccion = "Calle 16  Barrio San Martín Antiguo IDEMA";
        $transito->ciudad = 'MAGANGUE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6855640 Ext.24";
        $transito->telefono_2 = "6855738";
        $transito->email = "";
        $transito->direccion = "Carrera 2 No.20-103 Palacio San Carlos";
        $transito->ciudad = 'MOMPOX';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6625769";
        $transito->telefono_2 = "6620956";
        $transito->email = "";
        $transito->direccion = "Carretera Troncal La Cordialidad ";
        $transito->ciudad = 'SAN JUAN NEPOMUCENO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOLIVAR";
        $transito->telefono = "6712903 ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Sector Plan Parejo";
        $transito->ciudad = 'TURBACO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SAN ANDRES Y PROVIDENCIA";
        $transito->telefono = "5126900";
        $transito->telefono_2 = "5126902";
        $transito->email = "gobernador@sanandres.gov.co";
        $transito->direccion = "Avenida Francisco Nexball - Via Texaco";
        $transito->ciudad = 'SAN ANDRES ISLAS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7604353";
        $transito->telefono_2 = "621121";
        $transito->email = "";
        $transito->direccion = "Calle 16 No. 14-68 Piso 4 Edificio Multicentro Duitama";
        $transito->ciudad = 'DUITAMA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7451917";
        $transito->telefono_2 = "7450905";
        $transito->email = "itboyaca@hotmail.com";
        $transito->direccion = "Carrera 2  No.72-43 km. 3 ";
        $transito->ciudad = 'TUNJA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7262813";
        $transito->telefono_2 = "";
        $transito->email = "transito@chiquinquira.gov.co";
        $transito->direccion = "Centro Administrativo Municipal";
        $transito->ciudad = 'CHIQUINQUIRA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7450727";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Autopista Central del Norte";
        $transito->ciudad = 'COMBITA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7630517";
        $transito->telefono_2 = "7629878";
        $transito->email = "transitoduitama@hotmail.com";
        $transito->direccion = "Carrera 20 No.14-100";
        $transito->ciudad = 'DUITAMA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7540369";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 10 Cra. 3 A Esquina";
        $transito->ciudad = 'GUATEQUE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7320318 ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera. 9 No. 8-29";
        $transito->ciudad = 'VILLA DE LEYVA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7331537 ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Terminal de Transporte";
        $transito->ciudad = 'MIRAFLORES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7282682";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 20 No.2-06";
        $transito->ciudad = 'MONIQUIRA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7773019";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 4 con Carrera 10 Esquina";
        $transito->ciudad = 'NOBSA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7853251 ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Plaza de Mercado ";
        $transito->ciudad = 'PAIPA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7383262";
        $transito->telefono_2 = "7384492";
        $transito->email = "ittmpboy@col2.telecom.com.co";
        $transito->direccion = "Carrera 5 No. 15-77";
        $transito->ciudad = 'PUERTO BOYACA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7327031";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 6 No. 7-35";
        $transito->ciudad = 'RAMIRIQUI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7255262";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 9  No.6-38";
        $transito->ciudad = 'SABOYA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7860168";
        $transito->telefono_2 = "7860137";
        $transito->email = "";
        $transito->direccion = "Plaza de Mercado - Centro";
        $transito->ciudad = 'SANTA ROSA DE VITERBO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7880082";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 11  Carrera 4 Esquina";
        $transito->ciudad = 'SOATA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "BOYACA";
        $transito->telefono = "7713932";
        $transito->telefono_2 = "7706761";
        $transito->email = "sist_intrasog@hotmail.com";
        $transito->direccion = "Carrera 5 No. 1-45";
        $transito->ciudad = 'SOGAMOSO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CASANARE";
        $transito->telefono = "6384900";
        $transito->telefono_2 = "6392282";
        $transito->email = "transito@casanare.gov.co";
        $transito->direccion = "Carrera 5   No. 1-45 ";
        $transito->ciudad = 'AGUAZUL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CASANARE";
        $transito->telefono = "6343762";
        $transito->telefono_2 = "6358013";
        $transito->email = "";
        $transito->direccion = "Avenida la Cultura Palacio Municipal ";
        $transito->ciudad = 'YOPAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8802810";
        $transito->telefono_2 = "8801020";
        $transito->email = "sectran@epm.net.co";
        $transito->direccion = "Edificio Infimanizales Piso 1";
        $transito->ciudad = 'MANIZALES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8514239";
        $transito->telefono_2 = "";
        $transito->email = "transitoaguadas@hotmail.com";
        $transito->direccion = "Calle 6  No. 5-23  Piso 1 Palacio Municipal";
        $transito->ciudad = 'AGUADAS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8536958";
        $transito->telefono_2 = "8536430";
        $transito->email = "stransito@epm.net.co";
        $transito->direccion = "Carrera 4 Calle 7 Palacio Municipal";
        $transito->ciudad = 'ANSERMA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8510366";
        $transito->telefono_2 = "8511425";
        $transito->email = "transitoaranzazu@hotmail.com";
        $transito->direccion = "Carrera 6  No. 6-24  Plaza Principal";
        $transito->ciudad = 'ARANZAZU';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8506451";
        $transito->telefono_2 = "8504465";
        $transito->email = "sectransito@chinchiná.gov.co";
        $transito->direccion = "Palacio Municipal 2 Piso.";
        $transito->ciudad = 'CHINCHINA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8576970";
        $transito->telefono_2 = "8572004";
        $transito->email = "ttodorada@hotmail.com";
        $transito->direccion = "Calle 15 No. 2-61 Primer Piso Alcaldía Municipal";
        $transito->ciudad = 'LA DORADA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8550202";
        $transito->telefono_2 = "8550022";
        $transito->email = "manzatransito@yahoo.com";
        $transito->direccion = "Calle 6 Carrera 4";
        $transito->ciudad = 'MANZANARES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8592307";
        $transito->telefono_2 = "";
        $transito->email = "tranrio@col2.telecom.com.co";
        $transito->direccion = "Carrera 7  Calle 10  Esquina Primer Piso";
        $transito->ciudad = 'RIOSUCIO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8595016";
        $transito->telefono_2 = "8595020";
        $transito->email = "salaminacaldas@telecom.com";
        $transito->direccion = "Edificio Alcaldia Municipla";
        $transito->ciudad = 'SALAMINA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CALDAS";
        $transito->telefono = "8770689";
        $transito->telefono_2 = "";
        $transito->email = "transitocaldas@col2.telecom.com.co";
        $transito->direccion = "Calle 13  4-32";
        $transito->ciudad = 'VILLAMARIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "092-8273040";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Palacio Municipal";
        $transito->ciudad = 'BOLIVAR';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "2676131";
        $transito->telefono_2 = "2676013";
        $transito->email = "sectrosmi@col2.telecom.co";
        $transito->direccion = "Calle 6  No.5-21 Alcaldía Municipal";
        $transito->ciudad = 'MIRANDA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "8262008 Ext.23";
        $transito->telefono_2 = "8261024";
        $transito->email = "secretariatransitopatia@yahoo.es";
        $transito->direccion = "Alcaldía Municipal segundo piso ";
        $transito->ciudad = 'PATIA (EL BORDO)';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "8282366";
        $transito->telefono_2 = "3155076702";
        $transito->email = "mptejada@col2.telecom.com.co";
        $transito->direccion = "Calle 17 carrera 19 Esquina";
        $transito->ciudad = 'PUERTO TEJADA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAUCA";
        $transito->telefono = "8294086";
        $transito->telefono_2 = "";
        $transito->email = "stmquilichao@hotmail.com";
        $transito->direccion = "Carrera 11  No.4-50";
        $transito->ciudad = 'SANTANDER DE QUILICHAO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CESAR";
        $transito->telefono = "5804451";
        $transito->telefono_2 = "5804595";
        $transito->email = "imttvpar@telecon.com.co";
        $transito->direccion = "Diagonal 16  No.14-74";
        $transito->ciudad = 'VALLEDUPAR';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CESAR";
        $transito->telefono = "5651445";
        $transito->telefono_2 = "";
        $transito->email = "transitoaguachica@yahoo.es";
        $transito->direccion = "Carrera 14  No.6-74";
        $transito->ciudad = 'AGUACHICA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CESAR";
        $transito->telefono = "5765001";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Terminal de Transportes Codazzi";
        $transito->ciudad = 'CODAZZI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CESAR";
        $transito->telefono = "5779731";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 18 No. 20-80 Policia Carreteras";
        $transito->ciudad = 'BOSCONIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CESAR";
        $transito->telefono = "771240";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 7 No. 8-09";
        $transito->ciudad = 'LA PAZ (ROBLES)';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CORDOBA";
        $transito->telefono = "7850330";
        $transito->telefono_2 = "7850633";
        $transito->email = "sttmonteria@telecom.com";
        $transito->direccion = "Calle 54 Carrera 6a - Antiguo Coliseo de Ferias ";
        $transito->ciudad = 'MONTERIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CORDOBA";
        $transito->telefono = "7747960";
        $transito->telefono_2 = "7643605";
        $transito->email = "";
        $transito->direccion = "Edificio Cereabastos Bloque A - Primer Piso - Bloque A";
        $transito->ciudad = 'CERETE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CORDOBA";
        $transito->telefono = "7751751";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 16  No. 6-39 Primer  Piso Local 5";
        $transito->ciudad = 'CHINU';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CORDOBA";
        $transito->telefono = "7735426";
        $transito->telefono_2 = "7735092";
        $transito->email = "";
        $transito->direccion = "Calle 4  18-19";
        $transito->ciudad = 'LORICA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CORDOBA";
        $transito->telefono = "7768790";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 6 Calle 16 ";
        $transito->ciudad = 'PLANETA RICA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CORDOBA";
        $transito->telefono = "778326 Ext. 25";
        $transito->telefono_2 = "7588350";
        $transito->email = "ttsahagun@yahoo.com";
        $transito->direccion = "Carrera 10  Calle 13";
        $transito->ciudad = 'SAHAGUN';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SUCRE";
        $transito->telefono = "2805388";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 25  No.28-71  Av. Argelia";
        $transito->ciudad = 'SINCELEJO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SUCRE";
        $transito->telefono = "2840039";
        $transito->telefono_2 = "";
        $transito->email = "transitodecorozal@hotmail.com";
        $transito->direccion = "Carrera 29  No.37-29  B. San Juan";
        $transito->ciudad = 'COROZAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SUCRE";
        $transito->telefono = "2838227";
        $transito->telefono_2 = "";
        $transito->email = "sectransito@redsucre.edu.co";
        $transito->direccion = "Carrera 21  No.19-27";
        $transito->ciudad = 'SAMPUES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "3649400";
        $transito->telefono_2 = "3649443";
        $transito->email = "jhernandez@transitobogota.gov.co";
        $transito->direccion = "Seccional Paloquemao - Carrera 28 A  No.17 A 20 Esquina";
        $transito->ciudad = 'BOGOTA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = " ";
        $transito->telefono_2 = "";
        $transito->email = "lmhernadez@gobercun.gov.co";
        $transito->direccion = "Sede Administrativa 400 metros antes del retén, Gobernación Cund. Calle 26  No. 47-73  Torre Beneficencia Piso 4";
        $transito->ciudad = 'ZIPAQUIRA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8480357/0221";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Avenida Quinta Frente al Hospital";
        $transito->ciudad = 'CAQUEZA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8633172";
        $transito->telefono_2 = "";
        $transito->email = "transitochia@yahoo.com";
        $transito->direccion = "Calle 17 No. 8-07";
        $transito->ciudad = 'CHIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8561268";
        $transito->telefono_2 = "8562321";
        $transito->email = "";
        $transito->direccion = "Calle 6  No.6-32";
        $transito->ciudad = 'CHOCONTA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8631471";
        $transito->telefono_2 = "8643302";
        $transito->email = "";
        $transito->direccion = "Calle 80 Vía Siberia - Parque Agroindustrial - Bodega Uniabastos 2o Piso";
        $transito->ciudad = 'COTA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = " ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 10 No. 9-02";
        $transito->ciudad = 'EL ROSAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8426124";
        $transito->telefono_2 = "";
        $transito->email = "despacho@facatativa.gov.co";
        $transito->direccion = "Carrera 3a  No. 1-86";
        $transito->ciudad = 'FACATATIVA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8672100 Ext. 41";
        $transito->telefono_2 = "8673094";
        $transito->email = "munifusa@hotmail.com";
        $transito->direccion = "Carrera 6 No. 6-24 Centro Administrativo";
        $transito->ciudad = 'FUSAGASUGA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8325712";
        $transito->telefono_2 = "8325711";
        $transito->email = "";
        $transito->direccion = "Barrio El Diamante";
        $transito->ciudad = 'GIRARDOT';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8600027";
        $transito->telefono_2 = "";
        $transito->email = "8601596";
        $transito->direccion = "Calle 2  No. 10 A 15";
        $transito->ciudad = 'LA CALERA';
        $transito->save();


        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8276018";
        $transito->telefono_2 = "8276157";
        $transito->email = "";
        $transito->direccion = "Carrera 2 con Calle 1";
        $transito->ciudad = 'MOSQUERA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8540065";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 16  No. 7-29  Primer Piso";
        $transito->ciudad = 'PACHO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8338699";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Diagonal 7 No. 6-109";
        $transito->ciudad = 'RICAURTE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "7222815";
        $transito->telefono_2 = "7261063";
        $transito->email = "";
        $transito->direccion = "Carrera 8 No. 12-31";
        $transito->ciudad = 'SOACHA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8553307";
        $transito->telefono_2 = "8552607";
        $transito->email = "";
        $transito->direccion = "Carrera 4  Calle 10 Esquina";
        $transito->ciudad = 'UBATE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8444411";
        $transito->telefono_2 = "8444721";
        $transito->email = "";
        $transito->direccion = "Calle Primera Cancha de Basquetbool";
        $transito->ciudad = 'VILLETA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CUNDINAMARCA";
        $transito->telefono = "8527043";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "400 metros antes del retén sector la fraguita";
        $transito->ciudad = 'ZIPAQUIRA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "AMAZONAS";
        $transito->telefono = "5928064";
        $transito->telefono_2 = "5924369";
        $transito->email = "transitoleticia@yahoo.com";
        $transito->direccion = "Alcaldia Municipal";
        $transito->ciudad = 'LETICIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "GUAJIRA";
        $transito->telefono = "7273582";
        $transito->telefono_2 = "7273852";
        $transito->email = "";
        $transito->direccion = "Calle 12 carrera 5 esquina";
        $transito->ciudad = 'RIOHACHA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "GUAJIRA";
        $transito->telefono = "7266182";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 12 No. 11-36 Alcaldia";
        $transito->ciudad = 'MAICAO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "8722835";
        $transito->telefono_2 = "";
        $transito->email = "dtransito@alcaldianeiva.gov.co";
        $transito->direccion = "Carrera 16 No. 7-42 primer piso ";
        $transito->ciudad = 'NEIVA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "380088";
        $transito->telefono_2 = "385523";
        $transito->email = "";
        $transito->direccion = "Calle 18  No. 7-32 Primer Piso";
        $transito->ciudad = 'CAMPOALEGRE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "333722";
        $transito->telefono_2 = "";
        $transito->email = "mgarzonhc@hotmail.com";
        $transito->direccion = "Carrera 8 No. 7-74";
        $transito->ciudad = 'GARZON';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "371772";
        $transito->telefono_2 = "";
        $transito->email = "municipioplata@col1.telecom.com.co";
        $transito->direccion = "Carrera 4  No. 5-09 Piso 2  Alcaldía Municipal";
        $transito->ciudad = 'LA PLATA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "755908";
        $transito->telefono_2 = "756825";
        $transito->email = "itthuila@col1telecom.com.co";
        $transito->direccion = "Calle 33  No. 5 P - 76";
        $transito->ciudad = 'AMBORCO-PALERMO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "364806 Ext. 106";
        $transito->telefono_2 = "8360038";
        $transito->email = "satelite@col1.telecom.com.co";
        $transito->direccion = "Calle 6 No. 3-48 Alcaldia Municipal";
        $transito->ciudad = 'PITALITO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "329573";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Alcaldía Municipal";
        $transito->ciudad = 'TARQUI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "HUILA";
        $transito->telefono = "4374701";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 4  No.10-48 Alcaldía Municipal";
        $transito->ciudad = 'TIMANA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAQUETA";
        $transito->telefono = "4352119";
        $transito->telefono_2 = "4347467";
        $transito->email = "idttflorencia@latinmail.com";
        $transito->direccion = "Carrera 18  Calle 14 Esquina Barrio La Vega";
        $transito->ciudad = 'FLORENCIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAQUETA";
        $transito->telefono = "4316079";
        $transito->telefono_2 = "";
        $transito->email = "transpaujilbelen@latinmail.com";
        $transito->direccion = "Calle 5  No. 4-60 Alcaldia Municipal";
        $transito->ciudad = 'BELEN DE LOS ANDAQUIES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAQUETA";
        $transito->telefono = "4314090";
        $transito->telefono_2 = "43144430";
        $transito->email = "transpaujilbelen@latinmail.com";
        $transito->direccion = "Alcaldía Municipal Frente al Parque";
        $transito->ciudad = 'PAUJIL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "CAQUETA";
        $transito->telefono = " ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "";
        $transito->ciudad = 'SAN VICENTE DEL CAGUAN';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "MAGDALENA";
        $transito->telefono = "4302020";
        $transito->telefono_2 = "4300065";
        $transito->email = "jczuluaga@siettsantamarta.com.co";
        $transito->direccion = "Calle 15 No. 1 C -54  Of.302   Edificio Pevesca - ";
        $transito->ciudad = 'SANTA MARTA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "MAGDALENA";
        $transito->telefono = "4306010";
        $transito->telefono_2 = "4308677";
        $transito->email = "";
        $transito->direccion = "CARRERA 5  7-30";
        $transito->ciudad = 'ARACATACA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "MAGDALENA";
        $transito->telefono = "4241852";
        $transito->telefono_2 = "";
        $transito->email = "intracienaga@hotmail.com";
        $transito->direccion = "Calle 9  14-08";
        $transito->ciudad = 'CIENAGA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "MAGDALENA";
        $transito->telefono = "4140498";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Palacio Municipal";
        $transito->ciudad = 'FUNDACION';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "MAGDALENA";
        $transito->telefono = "4291764";
        $transito->telefono_2 = "4292797";
        $transito->email = "transitoelbanco@hotmail.com";
        $transito->direccion = "Alcaldia Municipal 2 piso";
        $transito->ciudad = 'EL BANCO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "MAGDALENA";
        $transito->telefono = "4851070";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Vía 14 Salida El Difícil";
        $transito->ciudad = 'PLATO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "META";
        $transito->telefono = "6702440";
        $transito->telefono_2 = "6705368";
        $transito->email = "ittmeta1@col1.telecom.com.co";
        $transito->direccion = "Calle 33 B  No.40-12 Barzal Alto";
        $transito->ciudad = 'VILLAVICENCIO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "META";
        $transito->telefono = " ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "";
        $transito->ciudad = 'ACACIAS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "META";
        $transito->telefono = "6580634";
        $transito->telefono_2 = "6580088";
        $transito->email = "";
        $transito->direccion = "Calle 15 No. 10-98";
        $transito->ciudad = 'GRANADA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "META";
        $transito->telefono = "6755211";
        $transito->telefono_2 = "6755349";
        $transito->email = "";
        $transito->direccion = "Carrera 7 No. 11-51 ";
        $transito->ciudad = 'GUAMAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "META";
        $transito->telefono = "6550070";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 8 No.3-31 Barrio Gaitán";
        $transito->ciudad = 'RESTREPO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "GUAINIA";
        $transito->telefono = "5656127 ";
        $transito->telefono_2 = "";
        $transito->email = "gobernaciondelguainia@hotmail.com";
        $transito->direccion = "Palacio Municipal ";
        $transito->ciudad = 'PUERTO INIRIDA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "GUAVIARE";
        $transito->telefono = "5840147";
        $transito->telefono_2 = "";
        $transito->email = "ittguaviare@hotmail.com";
        $transito->direccion = "Carrera 19 con Calle 10 Barrio El Porvenir";
        $transito->ciudad = 'SAN JOSE DEL GUAVIARE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VICHADA";
        $transito->telefono = "5654391";
        $transito->telefono_2 = "5654138";
        $transito->email = "";
        $transito->direccion = "Palacio de la Gobernación";
        $transito->ciudad = 'PUERTO CARREÑO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7317622";
        $transito->telefono_2 = "7313145";
        $transito->email = "idatt01@col2.telecom.com.co";
        $transito->direccion = "Carrera 42 B  No.18 A 85  Barrio Pandiaco ";
        $transito->ciudad = 'PASTO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7420301 ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Barrio el Socorro - Municipio de Buesaco";
        $transito->ciudad = 'BUESACO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7778398";
        $transito->telefono_2 = "7778236";
        $transito->email = "";
        $transito->direccion = "Carrera 5  No.8-55  Edificio C.A.M.";
        $transito->ciudad = 'GUACHUCAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = " ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Alcaldia Municipal";
        $transito->ciudad = 'CHACHAGÜI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = " ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Avenida Panamericana - El Pedregal IMUES";
        $transito->ciudad = 'IMUES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "730400";
        $transito->telefono_2 = "734958";
        $transito->email = "";
        $transito->direccion = "Carrera 1 No. 3E-140 Av.Panamericana ISERVI";
        $transito->ciudad = 'IPIALES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7264170";
        $transito->telefono_2 = "7264007";
        $transito->email = "";
        $transito->direccion = "Centro Administrativo Municipal C.A.M";
        $transito->ciudad = 'LA UNION';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7231643";
        $transito->telefono_2 = "";
        $transito->email = "idatt01@col2.telecom.com.co";
        $transito->direccion = "Alcaldía Municipal ";
        $transito->ciudad = 'NARIÑO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7246123";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Centro Administrativo Municipal C.A.M";
        $transito->ciudad = 'PUPIALES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7480019";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Centro Administrativo Municipal";
        $transito->ciudad = 'SAMANIEGO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7287318";
        $transito->telefono_2 = "7288229";
        $transito->email = "";
        $transito->direccion = "Edificio artesanías de Colombia, barrio Hernando Gomez";
        $transito->ciudad = 'SANDONA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7271803";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Avenida Estudiantes  sector la Y";
        $transito->ciudad = 'TUMACO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NARIÑO";
        $transito->telefono = "7281301";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 13  Calle 20";
        $transito->ciudad = 'TUQUERRES';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "PUTUMAYO";
        $transito->telefono = "4295234";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Palacio Dptal carrera 8 No. 7-46 ";
        $transito->ciudad = 'MOCOA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "PUTUMAYO";
        $transito->telefono = "4295234";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 9  No.9 A 07";
        $transito->ciudad = 'MOCOA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "PUTUMAYO";
        $transito->telefono = "4292016";
        $transito->telefono_2 = "4292338";
        $transito->email = "secretariattorito@yahoo.es";
        $transito->direccion = "Calle Principal";
        $transito->ciudad = 'ORITO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "PUTUMAYO";
        $transito->telefono = "4227628 ";
        $transito->telefono_2 = "";
        $transito->email = "compunec@msn.com";
        $transito->direccion = "Calle 9 con  Carrera 18 Barrio San Francisco";
        $transito->ciudad = 'PUERTO ASIS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NORTE DE SANTANDER";
        $transito->telefono = "5790285";
        $transito->telefono_2 = "5780629";
        $transito->email = "transito@alcaldiadecucuta.gov.co ";
        $transito->direccion = "Av. 4 E  No. 6-61 Edif. Lawyors Center Urbanización Sagayo";
        $transito->ciudad = 'CUCUTA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NORTE DE SANTANDER";
        $transito->telefono = "5630119";
        $transito->telefono_2 = "5630356";
        $transito->email = "";
        $transito->direccion = "Alcaldia Municipal";
        $transito->ciudad = 'CONVENCION';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NOTE DE SANTANDER";
        $transito->telefono = "5789655 ";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Av. 2a. Calle 6 esquina";
        $transito->ciudad = 'EL ZULIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NORTE DE SANTANDER";
        $transito->telefono = "5806630";
        $transito->telefono_2 = "5806535";
        $transito->email = "dattmp@yahoo.com";
        $transito->direccion = "Avenida 10  No. 27-43";
        $transito->ciudad = 'LOS PATIOS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NORTE DE SANTANDER";
        $transito->telefono = "5622500";
        $transito->telefono_2 = "5624144";
        $transito->email = "alcaldiaocaña@hotmail.com";
        $transito->direccion = "Calle 10  No. 11-78  Palacio Municipal";
        $transito->ciudad = 'OCAÑA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NORTE DE SANTANDER";
        $transito->telefono = "5680501";
        $transito->telefono_2 = "";
        $transito->email = "sectranspamplona@latinmail.com";
        $transito->direccion = "Calle 6  Carrera 5 Alcaldía Muncipal";
        $transito->ciudad = 'PAMPLONA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "NORTE DE SANTANDER";
        $transito->telefono = "5700387";
        $transito->telefono_2 = "5701220";
        $transito->email = "";
        $transito->direccion = "Calle 5 Carrera 7 Alcaldia Municipal";
        $transito->ciudad = 'VILLA DEL ROSARIO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ARAUCA";
        $transito->telefono = "8853224";
        $transito->telefono_2 = "8853157";
        $transito->email = "ittdar@col1.telecom.co";
        $transito->direccion = "Carerra 19  No. 17-55 ";
        $transito->ciudad = 'ARAUCA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "ARAUCA";
        $transito->telefono = "8891915";
        $transito->telefono_2 = "";
        $transito->email = "saravena@hotmail.com";
        $transito->direccion = "Carrera 15  No. 27-45";
        $transito->ciudad = 'SARAVENA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "QUINDIO";
        $transito->telefono = "7444531";
        $transito->telefono_2 = "7411355";
        $transito->email = "setta@netxos.com.co";
        $transito->direccion = "Estación del Ferrocarril, costado derecho";
        $transito->ciudad = 'ARMENIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "QUINDIO";
        $transito->telefono = "7421117";
        $transito->telefono_2 = "7432790";
        $transito->email = "e-mail@telecalarca.net.co";
        $transito->direccion = "Avenida Colón No. 17-10 ";
        $transito->ciudad = 'CALARCA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "QUINDIO";
        $transito->telefono = "7498750";
        $transito->telefono_2 = "7498751";
        $transito->email = "idtg@netxos.com.co";
        $transito->direccion = "Km 3  Vía Armenia a Circasia";
        $transito->ciudad = 'CIRCASIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "QUINDIO";
        $transito->telefono = "7542054 Ext. 25";
        $transito->telefono_2 = "7541376";
        $transito->email = "mcordoba_62@latinmail.com";
        $transito->direccion = "Carrera 6 No. 12-27";
        $transito->ciudad = 'LA TEBAIDA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "QUINDIO";
        $transito->telefono = "7520605";
        $transito->telefono_2 = "7520533";
        $transito->email = "transitoquimbaya@hotmail.com";
        $transito->direccion = "Palacio Municipal";
        $transito->ciudad = 'QUIMBAYA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "RISARALDA";
        $transito->telefono = "3294920";
        $transito->telefono_2 = "";
        $transito->email = "transitopereira@epm.net.co";
        $transito->direccion = "Carrera 9a.  No. 37 -65";
        $transito->ciudad = 'PEREIRA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "RISARALDA";
        $transito->telefono = "3228063";
        $transito->telefono_2 = "3224769";
        $transito->email = "ad@telesat.com";
        $transito->direccion = "Alcaldia Municipal";
        $transito->ciudad = 'DOSQUEBRADAS';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "RISARALDA";
        $transito->telefono = "3682208";
        $transito->telefono_2 = "";
        $transito->email = "transit1@col2.telecomcom.co";
        $transito->direccion = "Transversal 9a Calle 10";
        $transito->ciudad = 'LA VIRGINIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "RISARALDA";
        $transito->telefono = "3642375";
        $transito->telefono_2 = "3641072";
        $transito->email = "misa1D@hotmail.com";
        $transito->direccion = "Carrera 14  Calle 12 Esquina";
        $transito->ciudad = 'SANTA ROSA DE CABAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "6440440";
        $transito->telefono_2 = "6445766";
        $transito->email = "transitobucaramanga@hotmail.com";
        $transito->direccion = "Km.4 Vía a Girón";
        $transito->ciudad = 'BUCARAMANGA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "7486057";
        $transito->telefono_2 = "7486109";
        $transito->email = "dtt68077@hotmail.com";
        $transito->direccion = "Calle 6 No. 9-31";
        $transito->ciudad = 'BARBOSA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "6214599";
        $transito->telefono_2 = "6228685";
        $transito->email = "ittb@latinmail.com";
        $transito->direccion = "Carrera 2a. No. 50-25  Sector Comercial";
        $transito->ciudad = 'BARRANCABERMEJA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "7258008";
        $transito->telefono_2 = "";
        $transito->email = "intra_charala@hotmail.com";
        $transito->direccion = "Alcaldía Municipal";
        $transito->ciudad = 'CHARALA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "6488598 Ext. 127";
        $transito->telefono_2 = "";
        $transito->email = "transito@aolpremium.com";
        $transito->direccion = "Calle 9a.  No. 8-14";
        $transito->ciudad = 'FLORIDABLANCA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "6531399";
        $transito->telefono_2 = "6530022";
        $transito->email = "ttgiron@telebucaramanga.net.co";
        $transito->direccion = "Alcaldia Municipal";
        $transito->ciudad = 'GIRON';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "6607809";
        $transito->telefono_2 = "";
        $transito->email = "transmal@col1.Telecom.com.co";
        $transito->direccion = "Zona Industrial Vía Concepción";
        $transito->ciudad = 'MALAGA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "6550581";
        $transito->telefono_2 = "6550058";
        $transito->email = "instrapiedecuesta@col1.telecom.com.co";
        $transito->direccion = "Carrera 6a. Calle 10 Piso 2o.";
        $transito->ciudad = 'PIEDECUESTA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "7243400";
        $transito->telefono_2 = "7243405";
        $transito->email = "";
        $transito->direccion = "Calle 12 No. 9-51";
        $transito->ciudad = 'SAN GIL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "624640";
        $transito->telefono_2 = "654200";
        $transito->email = "transitosanvich@latinmail.com";
        $transito->direccion = "Alcaldía Municipal";
        $transito->ciudad = 'SAN VICENTE DE CHUCURI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "7272589";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 15  No. 15-18";
        $transito->ciudad = 'SOCORRO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "SANTANDER";
        $transito->telefono = "7564990";
        $transito->telefono_2 = "7563374";
        $transito->email = "sttvelez@msn.com";
        $transito->direccion = "Calle 9 No. 1- 61";
        $transito->ciudad = 'VELEZ';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2742444";
        $transito->telefono_2 = "2748788";
        $transito->email = "sttba@bunde.tolinet.com.co";
        $transito->direccion = "Calle 60  No. 2-30 Barrio La Floresta";
        $transito->ciudad = 'IBAGUE';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2820189";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 2 Calle 3 Esquina";
        $transito->ciudad = 'ALVARADO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2820189";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Edifio Alcaldía 2o Piso";
        $transito->ciudad = 'ARMERO - GUAYABAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2460517";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 8  No. 7-25  Piso 2o";
        $transito->ciudad = 'CHAPARRAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2488996";
        $transito->telefono_2 = "";
        $transito->email = "alcaespi@bunde.tolinet.com.co";
        $transito->direccion = "Carrera 6 No. 8-07 Piso 1 Alcaldia Municipal";
        $transito->ciudad = 'ESPINAL';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2587178";
        $transito->telefono_2 = "";
        $transito->email = "transitofresno@hotmail.com";
        $transito->direccion = "Carrera 7  No. 3-28  1er Piso - Palacio Municipal";
        $transito->ciudad = 'FRESNO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2270074";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Calle 7 No.10-11";
        $transito->ciudad = 'GUAMO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2513340";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Avenida Soto Camero Local 3";
        $transito->ciudad = 'HONDA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2564300";
        $transito->telefono_2 = "";
        $transito->email = "libano-moka@hotmail.com";
        $transito->direccion = "Calle 5  No. 10-48";
        $transito->ciudad = 'LIBANO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2523682";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Centro Comercial Mariquita Real  Piso 2";
        $transito->ciudad = 'MARIQUITA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2452947 Ext. 19";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 5 Calle 6 Esquina Alcaldia Municipal";
        $transito->ciudad = 'MELGAR';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "TOLIMA";
        $transito->telefono = "2282810";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 4 No. 8-50";
        $transito->ciudad = 'PURIFICACION';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "4462376";
        $transito->telefono_2 = "4477183";
        $transito->email = "transitocali@telesat.com.co";
        $transito->direccion = "Carrera 3A. No.56-30 Barrio Salomia";
        $transito->ciudad = 'CALI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2235168";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 5 No. 11-57";
        $transito->ciudad = 'ANDALUCIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2433354";
        $transito->telefono_2 = "415212";
        $transito->email = "";
        $transito->direccion = "Carrera 14 No. 5-12";
        $transito->ciudad = 'BUENAVENTURA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2280323";
        $transito->telefono_2 = "2280322";
        $transito->email = "";
        $transito->direccion = "Calle 9  No. 16-69 ";
        $transito->ciudad = 'GUADALAJARA DE BUGA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2164445";
        $transito->telefono_2 = "";
        $transito->email = "sectrancai@hotmail.com";
        $transito->direccion = "Parque Agroindustrial";
        $transito->ciudad = 'CAICEDONIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2648316";
        $transito->telefono_2 = "2648317";
        $transito->email = "";
        $transito->direccion = "Plaza Principal";
        $transito->ciudad = 'CANDELARIA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2124847";
        $transito->telefono_2 = "2125742";
        $transito->email = "acrivilla@hotmail.com";
        $transito->direccion = "Calle 10 No. 14-131";
        $transito->ciudad = 'CARTAGO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2571922";
        $transito->telefono_2 = "2571765";
        $transito->email = "";
        $transito->direccion = "CALLE 7  No. 11-62";
        $transito->ciudad = 'EL CERRITO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2642059";
        $transito->telefono_2 = "";
        $transito->email = "transitounionv@hotmail.com";
        $transito->direccion = "Plaza Principal - Calle 8 Cra. 19";
        $transito->ciudad = 'FLORIDA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2538580";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 8 Calle 4 Esquina Alcaldía ";
        $transito->ciudad = 'GUACARI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "5905000 Ext. 122";
        $transito->telefono_2 = "5911386";
        $transito->email = "";
        $transito->direccion = "Carrera 11  No. 13-21";
        $transito->ciudad = 'JAMUNDI';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2292751";
        $transito->telefono_2 = "";
        $transito->email = "transitounion@hotmail.com";
        $transito->direccion = "Carrera 15  No. 14-34";
        $transito->ciudad = 'LA UNION';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2729939";
        $transito->telefono_2 = "2725806";
        $transito->email = "transito@palmira.gov.co";
        $transito->direccion = "Calle 31 Carrera 36 antiguia Oficina Idema o en la Calle 41 No. 28-66";
        $transito->ciudad = 'PALMIRA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2674991 ";
        $transito->telefono_2 = "";
        $transito->email = "sitpradera@yahoo.com";
        $transito->direccion = "Carrera 8 No. 7-57";
        $transito->ciudad = 'PRADERA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "298200";
        $transito->telefono_2 = "2298226";
        $transito->email = "ttoroldanillo@msn.com";
        $transito->direccion = "Carrera 7 No. 17-17";
        $transito->ciudad = 'ROLDANILLO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2197895";
        $transito->telefono_2 = "2196060";
        $transito->email = "transitosevilla@hotmail.com";
        $transito->direccion = "Calle 51 No. 50 - 12 Tercer Piso Palacio Municipal";
        $transito->ciudad = 'SEVILLA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2244750";
        $transito->telefono_2 = "";
        $transito->email = "";
        $transito->direccion = "Carrera 30 Morales Lado Izquierdo";
        $transito->ciudad = 'TULUA';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "6588167";
        $transito->telefono_2 = "6588751";
        $transito->email = "";
        $transito->direccion = "Carrera 6  No. 4-36  Barrio Belalcazar";
        $transito->ciudad = 'YUMBO';
        $transito->save();

        $transito = new Transito;
        $transito->departamento = "VALLE";
        $transito->telefono = "2206113 Ext. 118";
        $transito->telefono_2 = "2206090 Ext. 118";
        $transito->email = "sttzarzal@hotmail.com";
        $transito->direccion = "Carrera 9  No. 10-36 Palacio Municipal";
        $transito->ciudad = 'ZARZAL';
        $transito->save();

    }
}
