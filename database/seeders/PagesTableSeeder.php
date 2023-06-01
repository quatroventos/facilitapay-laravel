<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 9,
                'title' => 'Home',
                'html' => '',
                'css' => '',
                'metatitle' => 'Home',
                'slug' => 'home',
                'metadescription' => 'Somos a Facilitapay
The payment platform designed for the growth and scale of your business. One simple integration, multiple countries.Meet FacilitaPay. The future of payment ecosystem. 
We developed the best solutions for international companies to access LatAm.
Let’s talkLearn more
Trusted by tech giants:
Why FacilitaPay
Designed to take your businessto the next level.Grow exponentually and increase revenue in Latin America through our +100 local payment methods including credit cards and alternative payment methods with high performance in approval and conversion rates, besides a great speed in processing. FacilitaPay platform is designed to provide the full local payment ecosystem with a single integration, enabling companies to expand their market reach fast.
Effortless
Start now with Plug &amp; Play integrations.Connect to our proprietary technology, constantly evolving to meet our customers demands, with one single API.
Start nowPay in &amp; Pay outsLocal acquiring in LatAm market, and over 190+ connections worldwide. Open banking crypto acceptance over 50+ APMs.
PerformanceBuilt to be scalable and help companies to process a high demand of payments instantly through global connections, consolidating data and payment information to enhancing authorizations.
Customized for your needsEnabling different businesses models and funds flow to integrate any customer need, adapting the infrastructure to fit different regulations and risk levels.
Scalable &amp; reliableTechnology created to keep performance during high-demand peak events and maintaining the same level of speed. Ensuring 99.999% uptime and 24x7 monitoring.
Actionable reportingGet data that adds value to your business from any transaction or customer behavior. We have all the information just an endpoint away.
We got your back, alwaysOur team help clients to operate locally, without the necessity of talking to chatbots or opening tickets. We are here for you.

welcome to latam
Accept all payment methods available in each countryClick to discover all payment methodsClick to discover all payment methodsClick to discover all payment methodsChile, we are coming.

The revolutionary instant payment method for global companies. The Brazilian payment method accepted worldwide.With PIX Global, you receive transactions immediately in your account, avoiding abusive fees and improving your customer experience.
Why you should open an account for receiving PIX transactions:Travelers will have less costs paying through PIXLess transactional costs for sellersNo monthly fees to setup an accountNo FX risks for sellers and buyersYou can access more than 60 million users connected to our payment network of local payment methods, alternative payment methods and local credit and debit cards.Learn more
ONBOARDING FLOW
Easy to setup and startOne simple integration, multiple countries
Sandbox
Step 1
Plataform and APIs Demo.
Step 2
Definition of payment flow and available currencies.
Step 3
Negotiating terms and signing a contract.
Step 4
Integration.
Step 5
Penny tests, final adjustment.
Step 6
Acess the local payment market with our solution.
Let’s Go
Ready to unlock new markets?Understand more about local payment methods available in each country, consumer behavior and local data. You will find everything you need for your expansion.
FIND OUT MORE',
                'created_at' => '2023-05-26 19:56:28',
                'updated_at' => '2023-06-01 17:09:22',
            ),
            1 => 
            array (
                'id' => 11,
                'title' => 'Payins',
                'html' => '',
                'css' => '',
                'metatitle' => 'Payins',
                'slug' => 'payins',
                'metadescription' => NULL,
                'created_at' => '2023-05-29 20:14:49',
                'updated_at' => '2023-06-01 17:37:21',
            ),
            2 => 
            array (
                'id' => 12,
                'title' => 'Payouts',
                'html' => '',
                'css' => '',
                'metatitle' => 'Payouts',
                'slug' => 'payouts',
                'metadescription' => 'PAYOUTSEnvia  pagos fácilmente y de forma masiva   a tus usuarios en los principales mercados de LatinoamericaPaga a tus usuarios, contractors o freelancers locales depositando fondos en sus cuentas bancarias locales y en sus respectivas divisas locales.Comienza ahora
Diferencia tus transacciones globales con una experiencia de pagos localesMejora la experiencia de tus usuarios en Latinoamérica al poder aceptar sus pagos de forma local, y acreditarlos de forma rápida, permitiendo que puedas operar de forma eficiente y simple en mercados emergentes.
CaracterísticasOtras solucionesFacilitaPayinstantáneo payout notificationautomático instantáneoCheck Payout  notificationautomático instantáneoQuick payout cancellationmanual pocas horasCheck currency exchangeautomático instantáneoFlexible funding currencyautomático instantáneoGranular and visual reportingautomático instantáneoWorkflows automationautomático instantáneo
Escala tus operaciones de pago sin preocupacionesUna única integración para disminuir las labores manuales y automatizar las tareas de tus equipos, reduciendo la posibilidad de errores operativos. Evita tener que recurrir a diferentes proveedores, centralizando tu operación con FacilitaPay.Elimina riesgos   y cargas operativas en mercados emergentesPagar a tus usuarios y partners en Latinoamérica puede ser extenuante debido a los diferentes requisitos de compliance, posibles cambios regulatorios y las fluctuaciones en las divisas locales. FacilitaPay gestiona esto para tu empresa a través de nuestro equipo de expertos locales.
Cómo funcionaetapa 1Creamos una cuenta bancaria local en FacilitaPay para tu empresaetapa 2El usuario realiza el pago directamente en tu página o aplicaciónetapa 3La API de FacilitaPay actúa en el back-end de tu página de pago o aplicaciónetapa 4FacilitaPay recibe e identifica el pago realizado en la cuenta bancaria localetapa 5FacilitaPay convierte los fondos a la divisa extranjera elegida por tu empresaetapa 6El comerciante elige cuándo transferir los fondos a su cuenta bancaria internacionalConoce cómo las soluciones de pago de FacilitaPay para Latinoamérica pueden ayudar a tu negocioSaaSIncrementa la oferta de pagos en la jornada de usuario y haz que los cobros recurrentes y por suscripciones sean más eficientesEconomías colaborativasRealiza pagos de bajo costo, en altos volúmenes o pagos de forma masiva, sin fricción, para operar sin problemas en mercados emergentes.E-commerceAdapta tu operación de pagos a la forma en que tus clientes realizan compras, ofreciendo todos los principales métodos de pago y divisas en una única plataforma. Dashboard intuitivoControla y administra todas tus transacciones en línea y en tiempo real.Ciberseguridad de alto nivelAccede a un software de última generación para el monitoreo de tus transacciones, integrado a nuestra API para mantener la seguridad en todas tus operaciones financieras.Compliance robustoOptimización de tus pagos con los más altos estándares de KYC y AML, validación en tiempo real de tus usuarios y sus transacciones.Hablemos',
                'created_at' => '2023-05-29 20:38:05',
                'updated_at' => '2023-05-30 20:38:40',
            ),
            3 => 
            array (
                'id' => 14,
                'title' => 'PIX Global',
                'html' => '',
                'css' => '',
                'metatitle' => 'PIX Global',
                'slug' => 'pix-global',
            'metadescription' => 'El revolucionario método de pago instantáneo, ahora disponible para empresas globales. El método de pago brasileño que podrá ser aceptado en todo el mundo.Con PIX Global, recibes las transacciones inmediatamente en tu cuenta, evitando tarifas abusivas y mejorando la experiencia de tus clientes.Ponte en contacto+El popular método PIX, ahora en cualquier lugar.Ahora puedes contar con PIX, el método de pago más utilizado en Brasil. Agilidad, seguridad y facilidad para realizar y recibir pagos, con tasas hasta un 80%* más bajas. Únete a FacilitaPay en la revolución de los pagos.*En comparación con las tarjetas de crédito/débito locales e internacionales.Discover more about our PIX Global.Nombre *Email *Nombre de la empresa *Sitio web de la empresaComienza ahoraFacilitaPay needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please review our Code of conduct.Why you should open an account for receiving PIX transactions:El costo para los turistas será menor pagando a través de PIXCostos transaccionales más bajos para los comerciosSin cargos mensuales para abrir una cuentaSin riesgos cambiarios para los comercios y sus clientesCapacidad de acceder los más de 136 millones de usuarios conectados a la red de PIX, 63% de la población en Brasil.Aprende másAgrega el metodo de pago brasileño PIX en centros comerciales, tiendas, y agencias de servicios, donde hay una gran afluencia de brasileños.¿Qué es PIX?PIX es una innovadora solución de pago diseñada específicamente para el mercado brasileño. El sistema de pago instantáneo creado por el Banco Central de Brasil (BCB), está dominando el mercado al permitir realizar transferencias y pagos, en cuestión de segundos, y en cualquier momento del día, incluidos fines de semana y festivos, de manera segura y práctica.Confirmación del pago y acreditación de los fondos en tiempo real.Transacciones las 24 horas del día, los 7 días de la semanaOpera de forma segura, las transacciones son realizadas directamente por el Banco Central de Brasil.Atrae a más brasileños - Muchos turistas viajan con un presupuesto limitado en moneda extranjera y necesitan poder utilizar fondos sus fondos en Brasil, sin tener que realizar una remesa. Con PIX puedes recibir pagos al instante. Reduce tus costos en hasta un 80%, en comparación con las tarifas cobradas al transaccionar con tarjetas de crédito.Start NowUna gran oportunidad para tu empresa. Una experiencia rápida y digital para tus clientes.Mayor beneficio para tus clientes Reduce el tiempo que le lleva a tus clientes realizar el pago y evita tarifas innecesarias.DisponibilidadLas operaciones se pueden llevar a cabo las 24 horas del día, los 7 días de la semana, incluidos los fines de semana y días festivos.Retiro de los fondosPuedes retirar los pagos recibidos desde el primer día hábil, solicitando la transferencia por valores desde 100 USD por retiro.ConvenienciaLa experiencia del usuario es intuitiva y familiar, pues todo el proceso de pago sucede dentro de la aplicación de banco que el usuario ya utiliza.KPI&#039;s en tiempo realAdministra todas las transacciones realizadas en nuestra plataforma, analiza estados de cuenta, la evolución de tus ventas, las transacciones por método de pago y solicita los saques cuando lo desees. Una forma de pagar fácil, intuitiva, rápida y muy familiar para los brasileños - siendo el método de pago más utilizado en el país.Con PIX, los consumidores brasileños pueden realizar transacciones cualquier momento y todos los días de la semana, pagan a través de un código QR, y reciben la confirmación de forma instantánea tras completar el pago. Así de fácil.Los pagos se realizan a través de un código QR dinámico, e información como el número de teléfono, correo electrónico o el número identificación se pueden utilizar como llaves de autorización para el pago.Comienza ahora',
                'created_at' => '2023-05-29 20:46:28',
                'updated_at' => '2023-05-31 13:59:15',
            ),
            4 => 
            array (
                'id' => 15,
                'title' => 'Payment Methods',
                'html' => '',
                'css' => '',
                'metatitle' => 'Payment Methods',
                'slug' => 'payment-methods',
                'metadescription' => 'MÉTODOS DE PAGOExplora los métodos de pago locales.Muchos países latinoamericanos han experimentado un crecimiento económico
significativo en la última década, lo que ha llevado a la expansión de la clase media y al aumento
del poder adquisitivo. En este mercado, los métodos de pago locales y la localización juegan un
papel esencial para aquellas empresas que desean prosperar en la región.Ponte en contacto
¿Por qué América Latina es un mercado importante?América Latina representa un mercado importante para la expansión de las
empresas globales debido a su grande población y su rápido crecimiento, el aumento de la
conectividad a Internet y el creciente poder adquisitivo de los consumidores Latinoamericanos. Con
una población de más de 650 millones de personas, un crecimiento significativo en la conectividad a
Internet (más del 70% de la población) y una clase media en rápido crecimiento, América Latina
presenta una oportunidad única para empresas globales que buscan llegar a nuevos mercados.
Con FacilitaPay como tu partner pagos local, tu empresa podrá navegar por los desafíos y
las oportunidades únicas que brinda esta región, permitiéndote integrar los métodos de pago y las
divisas más populares de la región, requeridas por los latinos para acceder a bienes y servicios
globales, todo a través de una única integración.Most popular payment methods by
countries.BrazilColombiaMexicoPIX (Pago
Instantáneo)El sistema de pago instantáneo creado
por el Banco Central de Brasil que está cambiando el mercado de pagos y
transferencias, permitiendo transaccionar en cuestión de segundos, en
cualquier momento del día, incluidos fines de semana y días festivos, de
manera segura y práctica.Tarjetas de crédito localesEl uso de tarjetas de crédito continua
en aumento. Sin embargo, estas son en su mayoría locales y aquellas
habilitadas para uso internacional representan tan solo el 24% de las
transacciones en línea. Empieza a aceptar tarjetas locales e
internacionales para aumentar tus ingresos.Tarjetas de débito localesLa tarjeta de débito es un método de
pago común en Brasil. Actualmente hay 116 millones de tarjetas de débito
activas en el país, con USD $168 m siendo transaccionados a través de
este método en el 2021. Aceptar tarjetas de débito te permitirá llegar a
una nueva base de consumidores y optimizar tus ingresos en Brasil.CuotasLos brasileños tienen la costumbre de
dividir el monto total de una compra realizada con tarjeta de crédito en
hasta 12 pagos mensuales. Ofrecer esta opción permite que tus clientes
puedan incrementar su presupuesto, y por ende el valor de su compra en
hasta un 30%.Boleto
BancárioAún existe una población no bancarizada
en Brasil y una cultura de dinero físico, el Boleto Bancario ha sido
utilizado históricamente por la población brasileña para pagar facturas
mensuales, servicios y también compras en línea. Ofrecerlo te permitirá
llegar a quienes no poseen cuentas bancarias, cómo también a aquellos
que prefieren pagar a través de este método.CriptoBrasil es el séptimo mercado de
criptomonedas más grande del mundo y está creciendo rápidamente. Con
FacilitaPay, puedes utilizar criptomonedas en tus flujos de on-ramp y
off-ramp y a la vez transaccionar con pagos locales.Brazil has the
seventh largest crypto market in the world and is growing rapidly. With
FacilitaPay, you can make settlement in crypto, on/off ramp solutions
and receive your local payments in stablecoins.Billeteras DigitalesLa popularidad de las billeteras
digitales está aumentando en Brasil, principalmente debido a los
beneficios que ofrecen, como la conveniencia, la seguridad y la
simplicidad de pago. Mantente a la vanguardia del mercado y comienza a
ofrecer billeteras digitales en tu operación de pagos en línea.Otros métodos de pagos alternativosBrasil tiene varias formas de pago en
línea además de las tarjetas de crédito. La transferencia bancaria y el
débito en línea son dos opciones de pago efectivas. Permite que tus
usuarios puedan utilizar su cuenta bancaria habitual para realizar un
pago instantáneo sin riesgo de fraudes para tu negocio.Tarjetas de créditoEste método de pago es una de las principales opciones para los colombianos a la hora de comprar en línea. Todas las tarjetas colombianas pueden realizar compras internacionales, pero los bancos y emisores locales imponen algunos obstáculos en este tipo de transacciones. La solución de procesamiento de tarjetas con FacilitaPay utiliza adquirencia local, lo que aumenta significativamente tus tasas de aprobación.Tarjetas de débito localesEl uso de tarjetas de débito en Colombia ha crecido rápidamente en los últimos años, con más de 20 millones de tarjetahabientes en el país en 2021. La aceptación de tarjetas en comercios de todos los tipos ha ido en aumento, lo que ha ayudado a impulsar el uso de las mismas entre los consumidores – sin necesitar cargar efectivo, y sin el riesgo de endeudarse. La solución de procesamiento de tarjetas con FacilitaPay utiliza adquirencia local, lo que aumenta significativamente tus tasas de aprobación.PSE (Pagos Seguros en Línea)La solución de pago alternativa preferida por los colombianos. Pagos Seguros en Línea permite a sus clientes realizar transferencias bancarias directamente desde las plataformas de sus bancos, de forma segura y sin recurrir a tarjetas de crédito.SuRedSiendo una de las redes de pago más grandes de Colombia, SuRed está asociada con más de 27.000 tiendas de conveniencia de diferentes marcas y presentes en 32 departamentos. Los clientes que elijan este método de pago reciben un vale con el que pueden pagar en efectivo en cualquiera de los puntos de SuRed.EfectyCon confirmación en tiempo real y una experiencia de usuario fácil e intuitiva, Efecty es uno de los vales de pago en efectivo más populares en Colombia, que puede ser pago en los 10.000 puntos de pago esparcidos por todo el país. Aumenta tus ventas al llegar a una gran parte de los clientes colombianos que prefieren pagar en efectivo, pudiendo llegar a la población no bancarizada.Pagos en CuotasLos pagos en cuotas son altamente populares en Colombia, más del 70% de las compras en línea hechas con tarjeta de crédito se pagan en cuotas. Los clientes pueden pagar sus compras en hasta 36 mes bancos que financian la operación para el usuario cobrándole una tasa de interés, cuyo valor depende de las condiciones del usuario y su banco.OXXOOXXO es la tienda más popular en México y uno de los métodos de pago más populares. Los mexicanos están acostumbrados a ir a las tiendas de conveniencia para pagar sus facturas y sus compras en línea. Empieza a aceptar OXXO como método de pago y llega a más consumidores.OXXO PayEl método de pago más conocido en México, ahora con confirmación del pago en tiempo real.Tarjetas de crédito y débito localesEl acceso a los servicios financieros sigue creciendo, al igual que el número de tarjetahabientes en México. Contar con adquirencia local hará que puedas incrementar significativamente las tasas de aprobación en transacciones, y aceptar todo tipo de tarjetas.Meses sin InteresesA través de los Meses sin Intereses, los consumidores pueden dividir las compras en 3, 6, 9 y hasta 12 pagos mensuales, pudiendo acomodar el pago a su presupuesto mensual. Ofrece cuotas a tus clientes mexicanos y permite que puedan realizar pagos de mayor valor.SPEISPEI está presente en cada transferencia interbancaria realizada por los Mexicanos. El sistema mexicano de banca en línea permite que clientes puedan pagar por sus compras a través de transferencias bancarias en línea utilizando SPEI.CriptoEl mercado de criptomonedas es cada vez más importante en México debido a la gran cantidad de personas no bancarizadas en el país, los altos niveles de entradas de remesas y el creciente interés en los activos digitales para protegerse contra la inflación y la inestabilidad económica. Con FacilitaPay como partner, puedes utilizar criptomonedas y pagos locales en tus flujos de on-ramp y off-ramp.Carteras digitalesLa popularidad de las billeteras digitales está aumentando en México, principalmente debido a los beneficios que ofrecen como conveniencia, seguridad y simplicidad de pago. Mantente a la vanguardia del mercado y comienza a ofrecer billeteras digitales en tu operación de pagos en línea.Otros métodos de pagos alternativosMéxico tiene varios métodos de pago además de las tarjetas de crédito. Los pagos con vales, Oxxo y billeteras digitales son métodos muy comunes utilizados por los consumidores en línea.Start offering all local payment methods in LatAm yo your customers-->Comienza ahoraTarjetasTarjetas de crédito y débito localesEn el mercado latinoamericano, las tarjetas de crédito y débito locales se han vuelto métodos de pago cada vez más relevantes. Son convenientes, seguros y ampliamente aceptados por los comercios que actúan en la región. Estas tarjetas son emitidas por bancos locales y se adaptan a las necesidades de los consumidores en cada país. Las tarjetas locales también ofrecen beneficios como tasas de interés más bajos, cuotas de manejo más económicas y programas de recompensas creados específicamente para el mercado local.El acceso al crédito y productos bancarios ha permitido que la población tenga un mayor poder adquisitivo, pudiendo comprar productos y servicios que antes estaban fuera de su alcance. Esto impulsa el crecimiento económico a medida que los consumidores gastan más dinero, las empresas amplían sus operaciones para satisfacer una mayor demanda. Además, las tarjetas de débito se han convertido en una herramienta esencial para aquellos que no tienen acceso a los servicios bancarios tradicionales, ofreciéndoles una forma segura y cómoda de administrar su dinero. En general, la popularidad de las tarjetas de crédito y débito locales en América Latina ha abierto nuevas oportunidades para individuos y empresas y ha ayudado a impulsar el crecimiento económico en la región.Con FacilitaPay como partner local, empresas globales pueden aceptar tarjetas locales e internacionales, lo que aumenta su alcance del mercado y las tasas de aprobación en sus transacciones.¿Cómo funciona la tarjeta de crédito?1El usuario selecciona la tarjeta de crédito como el método de pago.2El cliente rellena la información de su tarjeta de crédito.3La confirmación del pago se envía en tiempo real.Let&#039;s GoBeneficios de aceptar tarjetas de créditoAumento en las tasas de aprobaciónCon la adquirencia local, tu negocio obtiene las mejores tasas de aprobación.Menor riesgo de contracargosCuenta con el escudo de Facilitapay, una estrategia avanzada contra el fraude, sin costo adicional.Lógica de reintentoLa tecnología avanzada de machine-learning aumenta las tasas de aprobación al minimizar los pagos fallidos.Simplifica los pagosAdmite pagos recurrentes a través de tokenización de tarjetas y autorización previa.Facturación detalladaBilling DescriptorComienza a ofrecer todos los métodos de pago locales en América Latina a sus clientes.Increase your average ticket with installmentsOffering installment plans can be a game-changer for businesses looking to expand into Latin America. In many cases, consumers in the region prefer to use installment plans to help manage their budgets and make big-ticket purchases more affordable. This is especially true given that credit card limits in Latin America are typically very low, meaning that consumers may not be able to pay for large purchases all at once without exceeding their limits.By offering installment plans, businesses can make their products and services more accessible to consumers in Latin America, which can help drive sales and increase customer loyalty.SUPPORTED CREDIT CARDS
Alternative payment methods-->Alternative payment methods
In the era of digital transformation, payment methods have evolved beyond traditional credit and debit cards. Consumers are now seeking alternative payment options such as e-wallets, mobile payments, and online bank transfers. This trend is gaining momentum worldwide, especially among tech-savvy younger generations who prefer seamless, convenient, and secure payment methods.

By offering multiple payment options, merchants can provide a better shopping experience to their customers and increase their conversion rates. With just a single integration, merchants can accept payments through various channels, including credit cards, debit cards, digital wallets, and other alternative payment methods.

As more consumers move towards mobile-based payments, businesses must adapt to keep up with the changing landscape of payment options. Whether it is through the integration of mobile payment gateways or the acceptance of different payment methods, merchants must be willing to evolve and offer their customers the payment options they prefer.FacilitaPay with local acquiring x International acquiringLocal acquiringInternational and domestic card schemesBest performance in payments with a direct connection to local acquirers. This way issuer banks will have more local consumer data increasing the approval rates.Customers will have a local payment experience with all the services available, purchasing as it would in a local e-commerce.Installments and recurring billing available.International acquiringInternational schemes onlyWorse performance in payments, as the issuing banks, tend to refuse more transactions from international acquirers due to the lack of information.Limited for those who own internationally enabled cards. The shopping experience is not localized.No installments and no recurring billing.Start offering all local payment methods in LatAm yo your customersGet started',
                'created_at' => '2023-05-29 20:47:25',
                'updated_at' => '2023-06-01 18:09:30',
            ),
            5 => 
            array (
                'id' => 16,
                'title' => 'Industries',
                'html' => '',
                'css' => '',
                'metatitle' => 'Industries',
                'slug' => 'industries',
            'metadescription' => 'INDUSTRIASSoluciones de pago adaptadas la industria de tu empresa en economías emergentes.FacilitaPay entiende tu operación y las necesidades de pago de tu empresa. Descubre las soluciones que tenemos para ponerte al frente de la competencia, y aprovechar todas las oportunidades en los mercados donde operamos.Comienza ahoraPagosCriptoJuegos RemesasSaasStreamingEcommerceINVERSIONES Y CFD&#039;SLas economías latinoamericanas han crecido significativamente en los últimos años, lo que ha llevado a un aumento del ingreso disponible y a un crecimiento en la clase media. Esto ha incrementado la demanda de productos financieros como acciones, bonos y fondos mutuos. Además, la región tiene una población joven y digitalizada con un alto potencial de crecimiento a largo plazo.Los latinoamericanos están listos para invertir en activos globales; sin embargo, existen ciertas brechas en el ecosistema de pagos que hacen necesario el uso de medios de pago locales para adquirir estos activos, y nuestra misión en FacilitaPay es conectar a empresas de inversiones con sus usuarios en Latinoamérica.Start NowLocal KYC Features:A robust and fully localized compliance process to help you onboard new investors in the region.Instant Payments:Receive and send payments in seconds to investors on a 24/7 basis.Mitigate risk and chargebacks:By accepting alternative payment options such as PIX, bank transfers and cash.Solución de pago de marca blanca:Para que puedas personalizarlo a las necesidades de tu negocio.Flujos de pago flexibles:Que se adaptan fácilmente para satisfacer tus requerimientos técnicos y operativos.Varias oportunidades de alianzas:Alianzas directas, acuerdos PSP y programas de referidos.PAYMENTSSe espera que el mercado de pagos en América Latina alcance los $ 1.05 billones en el 2023, impulsado por un aumento en el comercio electrónico, las transacciones digitales y el incremento de las interacciones entre los latinoamericanos y empresas de diferentes industrias con presencia digital.Gana velocidad en el mercado y optimiza los costos de tu empresa utilizando la estructura de pagos locales diseñada por FacilitaPay para América Latina; permite que nos encargarnos de todas las regulaciones locales, las asociaciones y tecnologías necesarias para que puedas operar en Latinoamérica, y concentrar tus esfuerzos en tu actividad principal.-->Comienza ahoraCRIPTOEl mundo de las criptomonedas está en constante crecimiento, millones de nuevos usuarios ingresan al mercado anualmente. Latinoamericana ha experimentado un crecimiento exponencial en los últimos años, con un aumento significativo en el interés por las criptomonedas en diversos mercados de la región.Durante el 2022, la adopción de criptomonedas en América Latina ha alcanzado un crecimiento de 40 por ciento, convirtiendo a la región en uno de los mercados de más rápido desarrollo en el mundo. Según los analistas, los usuarios de criptomonedas latinoamericanos recibieron el equivalente a más de USD $ 562 mil millones a través de criptomonedas desde julio de 2021 hasta junio de 2022.Comienza ahoraRecursos locales de KYC:Un proceso de cumplimiento sólido y totalmente localizado para ayudarte a incorporar nuevos usuarios en la región.Pagos instantáneos:Recibe y envía pagos a tus usuarios en segundos, las 24 horas del día, los 7 días de la semana.Reduce el riesgo y los fraudes:Acepta opciones de pago alternativas como PIX, transferencias bancarias y efectivo.Evita los carritos abandonados:Tus usuarios no tendrán que abandonar tu página u aplicación durante el checkout.Convierte más jugadores de Freemium a Premium rápidamente:Métodos de pago fáciles de usar y de bajo costo.Deja a tus usuarios pagar de la forma que prefieran:Varios métodos de pago además de las tradicionales tarjetas de crédito y débito. Acepta pagos fácilmente de pagar con: PIX, SPEI, CODI, PSE, criptomonedas y muchos otros. JUEGOS ONLINECon más de 270 millones de jugadores y un ingreso total proyectado de $ 5.1 mil millones para 2024, América Latina es uno de los mercados de juegos de más rápido crecimiento. Las oportunidades son infinitas para empresas de juegos globales que buscan aumentar sus ingresos, y al no entrar a este mercado estas dejando dinero sobre la mesa, o al hacerlo sin el partner local adecuado.Con FacilitaPay, estarás listo para aprovechar las oportunidades en América Latina, brindándole a tus usuarios toda la experiencia local que necesitan, y permitiéndoles pagar de la manera que quieran. Nuestras soluciones de pago te ayudan a evitar carritos abandonados durante el proceso de pago, lo que aumenta significativamente sus tasas de conversión.-->-->-->-->Comienza ahoraREMESASLas remesas de América Latina han estado creciendo a una tasa de más del 20% anual en los últimos años. En 2022, por ejemplo, se transaccionaron más de $ 100 mil millones dentro y fuera de la región, tres veces la cantidad transaccionada en el 2005.Las remesas en la región son tanto una fuente de ingresos para los hogares como una forma de pagar a proveedores y recibir pagos de socios globales, lo que la convierte en una parte importante de las economías locales.Start NowEnvía dinero a cualquier lugar:Muchas personas en América Latina dependen de redes informales, como amigos y familiares, para enviar y recibir dinero, en lugar de utilizar instituciones financieras formales.Bajos costos y agilidad:La industria de las remesas en América Latina se caracteriza por las altas tasas y la falta de competencia, lo que dificulta que las personas envíen dinero a sus familias.Transacciona con criptomonedas de forma directa y sin la necesidad des instituciones bancarias:Las criptomonedas se utilizan cada vez más como una forma de enviar remesas de personas que viven en el extranjero hacia sus familias en América Latina. Esto se debe a las altas tarifas y los largos tiempos de espera asociados con los servicios de remesas tradicionales.Incrementa tu audiencia:Habilitando todos los métodos de pago y monedas locales que tus usuarios necesitan para pagar en línea.Un performance mejorado para tus pagos:A través de la cobranza localizada, te ofrecemos las mejores tasas de aprobación del mercado.Procesamiento de pagos de alto valor:De forma simple y económica, sin necesidad de entidades locales.Llega al mercado más rápido:Expándete para los mercados clave en América Latina a través de una sola integración.SAASEl mercado SaaS en América Latina ha estado creciendo a una tasa anual del 20% desde el 2022 al 2025, impulsado por factores como la creciente disponibilidad de conectividad a Internet y la digitalización.La región tiene aún mucho espacio por crecer cuando se trata de la adopción de SaaS, siendo un mercado poco saturado y con grandes oportunidades en comparación con mercados más desarrollados. Cuenta con un socio de pagos locales, como FacilitaPay, para desbloquear las oportunidades para tu empresa en esta región.-->-->-->Comienza ahoraSTREAMINGDespués de América del Norte, América Latina es el segundo mercado más atractivo para empresas de streaming que buscan expandirse globalmente. Con un potencial de mercado de $ 11.4 mil millones, es el segundo mercado de streaming de más rápido crecimiento a nivel mundial y también el que tiene la mayor demanda de servicios de streaming de música.Desbloquea millones de fieles suscriptores en América Latina adaptando tu estrategia de pagos al mercado local con FacilitaPay.-->-->-->-->Comienza ahoraAtrae suscriptores leales:Al habilitar todos los métodos de pago y divisas locales que necesitan para pagar en línea.Un performance mejorado para tus pagos:A través de la cobranza localizada, te ofrecemos las mejores tasas de aprobación del mercado. Llega al mercado más rápido:Expándete para los mercados clave en América Latina a través de una sola integración.Ventas en América Latina:Se espera que el mercado de comercio electrónico en América Latina alcance los $ 93 mil millones para 2025, impulsado por un aumento en la penetración de Internet y la adopción de smartphones.Cobros y pagos en cualquier lugar:El comercio electrónico internacional también está en aumento en América Latina, con muchos consumidores en la región comprando productos y servicios de otros países. Esta tendencia está impulsada por la disponibilidad de una amplia gama de productos y mejores precios ofrecidos por las plataformas internacionales de comercio electrónico.Compre ahora y pague después:Con FacilitaPay, nuestros partners pueden ofrecer la opción de pagos en cuotas a sus consumidores, aceptar todo tipo de tarjetas y con mejores tasas de aprobación.ECOMMERCEEl mercado de comercio electrónico en América Latina ha experimentado un fuerte crecimiento en las últimas décadas, con sus volúmenes creciendo a tasas del 25% entre el 2021 y 2025, generando ingresos por más de $ 700 mil millones, según Americas Market Intelligence (AMI).A medida que crece la demanda de productos locales e internacionales entre los latinoamericanos, la necesidad de adaptarse y brindar acceso se vuelve más relevante para empresas globales. Cuenta con FacilitaPay para proporcionar a tus clientes latinoamericanos todas las herramientas y medios de pago que requieren para comprar de tu tienda.- Brasil: El mercado de comercio electrónico se valoró en $ 153 mil millones en 2021- México: Mercado de comercio electrónico valorado en 48.600 millones de dólares en 2021- Colombia: Mercado de comercio electrónico valorado en $22.400 millones en 2021Argentina: Mercado de comercio electrónico valorado en $ 18 mil millones en 2021- Chile: Mercado de comercio electrónico valorado en $15.650 millones en 2021- Perú: Mercado de comercio electrónico valorado en $13.000 millones en 2021-->-->-->Comienza ahora',
                'created_at' => '2023-05-30 17:48:18',
                'updated_at' => '2023-05-31 17:44:29',
            ),
            6 => 
            array (
                'id' => 17,
                'title' => 'Markets Brazil',
                'html' => '',
                'css' => '',
                'metatitle' => 'Markets Brazil',
                'slug' => 'markets-brazil',
                'metadescription' => 'BrasilEl mercado de comercio electrónico más grande de América LatinaCon una población de más de 210 millones de personas, Brasil es el sexto país más poblado del mundo y la economía más grande de América Latina. Brasil es un mercado de rápido crecimiento para las empresas digitales, con alta penetración de Internet y smartphones.Libera el potencial de este mercado ofreciendo PIX, una transferencia bancaria instantánea 24/7 y el método de pago más popular en Brasil.Comienza ahora
CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍAMarket Overview BrazilPoblación - 211 millonesEl país más grande de América Latina y el sexto país más poblado del mundo.Crecimiento del comercio electrónicoSe espera que Brasil permanezca entre los 10 principales mercados de comercio electrónico del mundo, creciendo en promedio un 17% al año desde el 2021.Compradores de comercio electrónico - 81.2 millonesUn mercado de comercio electrónico con 81,2 millones de compradores y un ticket promedio de R$ 391.Easily enter the largest economy in Latin America.Offer PIX and many other payment methods.Start nowMIX DE PAGOS DE COMERCIO ELECTRÓNICO DE BRASILMejora tu aceptación de pagos ofreciendo métodos de pago locales en Brasil98% OF MARKET SHARE COVERED BYPIX - 27%CREDIT CARD - 19%DEBIT CARD - 18%BOLETO BANCÁRIO -11%TED - 9%CRYPTO (ACCELERATED GROWTH) - 3%CAPITALBrasiliaREGIONSouth AmericaCURRENCYBrazilian Real USD/BRL = 5,04POPULATION213.9MGDPUS$ 1.61 trillionGDP PER CAPITAUS$ 8.551DESCUBRIRExplora las oportunidades en Brasil.DisponibilidadPIX está disponible 24/7 para individuos y empresas, y las transferencias son instantáneas.AdopciónEl comercio electrónico brasileño ha ganado 8 millones de nuevos clientes durante la pandemia de COVID-19.AccesibilidadPIX es compatible con múltiples canales de pago, incluidos móviles, banca por Internet y cajeros automáticos.Productos en alzaEl deseo de nuevos productos o servicios de moda que normalmente no se encuentran en Brasil hace que los consumidores brasileños sean fanáticos de las marcas internacionales.CrecimientoSegún un informe de Statista, se estima que el mercado de comercio electrónico en Brasil creció un 10,3% en 2022, alcanzando un valor total de R$ 98,7 mil millones (aproximadamente US$ 18 mil millones).Oportunidades de crecimientoCrecimiento sin la necesidad de establecer una entidad local, con FacilitaPay puedes reducir en hasta un 95%* tus costos. (*Comparado con entidades locales).Payment MethodsPIX (Instant Payment)The instant payment system created by the Central Bank of Brazil is changing the market by performing transfers and payments, in a few seconds, at any time of the day - including weekends and holidays - in a safe and practical way.Local Credit CardsThe usage of credit cards has been growing. Although, internationally-enabled credit cards make up only 24% of e-commerce transactions. Start to accept both international and domestic cards and increase your conversions.Local Debit CardsA debit card is a common payment method in Brazil. Today, there are 116M active debit cards in the country, with 664B reais spent with this method in 2019. Accept debit cards to reach a new consumer base and optimize your revenue in Brazil.InstallmentsBrazilians have the habit of splitting the total amount of a purchase made with a credit card in up to 12 monthly payments. Allow your customers to make higher-value purchases and increase your average ticket size.Boleto BancárioBrazil has a cash-centric culture, and Boleto has been historically used by the Brazilian population to pay for monthly bills, taxes, and also e-commerce purchases. Reach the unbanked population and also those whose preference is Boleto out of habit.CryptoBrazil has the seventh largest crypto market in the world and is growing rapidly. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.Digital WalletsThe popularity of digital wallets is increasing in Brazil, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.Other Alternative PaymentsBrazil has several ways to pay online beyond credit cards. Bank Transfer and Online Debit are two effective payment options. Allow consumers to use their usual bank account to make an instant payment without the risk of chargeback for you.Download our Brazil Country GuideLearn everything you need to know about the eCommerce payments landscape in Brazil in our straight-to-the-point country guide.Download now  Prev - Mexico country pageNext - Colombia country page',
                'created_at' => '2023-05-30 17:55:32',
                'updated_at' => '2023-05-31 17:51:08',
            ),
            7 => 
            array (
                'id' => 18,
                'title' => 'Markets Colombia',
                'html' => '',
                'css' => '',
                'metatitle' => 'Markets Colombia',
                'slug' => 'markets-colombia',
                'metadescription' => 'COLOMBIAEl mercado online de más rápido crecimiento en América LatinaColombia tiene una población de 51 millones de personas, con una población grande y joven, lo que representa una importante oportunidad de mercado para las empresas digitales. El país tiene la mayor adopción de comercio electrónico en la región. Llega al 100% de los colombianos ofreciendo tarjetas locales, PSE y Efecty.Comienza ahora
CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍAPanorama del mercado en  ColombiaPoblación - 51,8 millonesEl mercado digital de más rápido crecimiento y el tercer país más poblado de América LatinaComercio electrónico - $ 3.8 mil millonesLa llegada de empresas globales a Colombia está impulsando soluciones de comercio electrónico en toda la cadena de valor del ecosistema digital. Los consumidores en linea colombianos se están familiarizando con las compras en sitios web extranjeros.Compradores de comercio electrónico - 11.6 millonesHay 11.6 millones* de compradores en línea en el país, y el mercado total direccionable se está expandiendo junto con una mayor conectividad.Easily enter the fastest growing online market in Latin America.Offer PSE and many other payment methods.Start nowMIX DE PAGOS DE COMERCIO ELECTRÓNICO DE colombiaMejora tu aceptación de pagos ofreciendo métodos de pago locales en Colombia98% OF MARKET SHARE COVERED BYPSE - 16%CREDIT CARD - 52%Cash Payments (EfectY, Baloto, SuRed) - 13%International Wires - 2%Crypto Currencies (Stablecoins) - 3%CAPITALBogotáREGIONSouth AmericaCURRENCYColombian Peso USD/COP = 4344,55POPULATION51.2MGDPUS$ 314.32BGDP PER CAPITAUS$ 6.131DISCOVERExplora las oportunidades en Colombia.Gran mercadoColombia tiene una población de más de 50 millones de personas, lo que proporciona un mercado potencial significativo para productos y servicios digitales.Mayor uso de InternetColombia ha experimentado un crecimiento significativo en el uso de Internet en los últimos años, con más del 70% de la población que actualmente utiliza Internet. Esto presenta una oportunidad para que las empresas digitales lleguen a una base de usuarios grande y creciente.Crecimiento de la clase mediaLa creciente clase media de Colombia tiene un mayor poder adquisitivo e ingreso disponible, lo que lo convierte en un mercado potencial para productos y servicios digitales.Mercado que prioriza los dispositivos móvilesColombia es un mercado móvil, con un alto porcentaje de la población que accede a Internet a través de sus dispositivos móviles. Esto lo convierte en un mercado atractivo para aplicaciones y soluciones móviles.Apoyo gubernamentalEl gobierno colombiano ha tomado medidas para apoyar el crecimiento de la economía digital, incluida la promoción de inversiones e innovaciones en el sector.Comienza ahoraPayment MethodsLocal Credit CardsThis payment method is one of the primary options of Colombians when shopping online. All Colombian cards are enabled to make international purchases, yet, local banks and issuers impose some obstacles to international shopping. FacilitaPay card solution offers local acquiring what increases approval rates.Local Debit CardsDebit card usage in Colombia has been growing rapidly in recent years, with over 20 million cardholders in the country as of 2021. The number of POS terminals in Colombia has been increasing, with over 200,000 in use as of 2021. This has helped to boost debit card usage, as consumers can now make card payments at a growing number of merchants. FacilitaPay card solution offers local acquiring what increases approval rates.PSE (Pagos Seguros en Línea)The preferred alternative payment solution in Colombia. Pagos Seguros en Línea allows your customers to make bank transfers directly from their bank accounts, without needing a credit card.BalotoBaloto is Colombia’s main lottery operator in the country and also has a payment network, with more than 13.500 payment stations, it’s able to reach 96% of the cities. Clients can pay purchases offline or online. When choosing the offline option, they receive a payment voucher with a barcode and a serial number, which can be paid at one of the payment stations.SuRedBeing one of the largest payments networks in Colombia, SuRed is partnered with more than 27.000 convenience stores from different brands and across 32 departments. Clients who choose this payment method receive a voucher that can be paid in cash at any of their points.-->-->-->Crypto-->Colombia has one of the highest rates of cryptocurrency adoption in Latin America, with around 5 million people estimated to own some form of digital currency. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.-->-->-->-->-->-->-->-->-->-->EfectyWith real-time confirmation and easy user experience, Efecty is one of the most popular cash payment vouchers in Colombia, payable in over 10,000 locations throughout the country. Increases your sales by reaching a vast part of Colombian customers that prefer to pay offline, with cash and allows you to reach the unbanked population.InstallmentsInstallment purchases are very popular in Colombia, over 70% of online credit card transactions are installment-based. The clients are allowed to pay their purchase in up to 36 months. The banks, who finance the operation charge interest rates, which are charged directly to the client depending on the agreement he has with his bank.Download our Colombia Country GuideLearn everything you need to know about the eCommerce payments landscape in Colombia in our straight-to-the-point country guide.Download now  Prev - Brazil country pageNext - Mexico country page',
                'created_at' => '2023-05-30 17:56:38',
                'updated_at' => '2023-05-31 17:55:43',
            ),
            8 => 
            array (
                'id' => 19,
                'title' => 'Markets Mexico',
                'html' => '',
                'css' => '',
                'metatitle' => 'Markets Mexico',
                'slug' => 'markets-mexico',
                'metadescription' => 'MexicoLa segunda economía más grande de América Latina.México ofrece un mercado grande y creciente para el comercio electrónico, con una población de más de 130 millones de personas y una creciente penetración de Internet, lo que lo convierte en una oportunidad de inversión atractiva para las empresas de comercio electrónico. Con tendencias demográficas favorables y políticas gubernamentales de apoyo, México presenta un entorno empresarial estable y predecible para las empresas que buscan expandir sus operaciones de comercio electrónico.Comienza ahora
Trusted by tech giants:Visión General del Mercado de  MexicoPoblación - 130 millonesLa segunda economía más grande de América Latina y el duodécimo país más poblado del mundo.Tamaño del mercadoSegún un informe de Statista, el mercado de comercio electrónico en México se valoró en $ 22.6 mil millones en 2020 y se espera que alcance los $ 36.3 mil millones para 2024.Comercio móvilEl comercio móvil está ganando popularidad en México y se espera que impulse el crecimiento del mercado de comercio electrónico en el futuro. En 2020, el 56% de las compras en línea en México se realizaron utilizando un dispositivo móvil.Easily enter the second largest economy in LatAm.Offer OXXO and many other payment methods.Start nowMexico’s eCommerce payment mixImprove your payment acceptance by offering local payment methods in Mexico98% OF MARKET SHARE COVERED BYCREDIT CARD - 35%DEBIT CARD - 19%DIGITAL WALLETS - 27%OXXO - 20%BANK TRANSFERS - 8%CASH - 8%CAPITALMexico CityREGIONNorth AmericaCURRENCYMexican Peso USD/MXN = 19,97POPULATION130.2MGDPUS$ 129 TrillionGDP PER CAPITAUS $9.926DESCUBRIRExplora las oportunidades en México.Población grande y crecientePoblación grande y creciente: México tiene una población de más de 130 millones de personas, lo que lo convierte en uno de los mercados de consumo más grandes del mundo. Esta gran base de consumidores ofrece una oportunidad significativa para las empresas de comercio electrónico.Mayor penetración de InternetEl número de usuarios de Internet en México ha crecido rápidamente en los últimos años, y se espera que esta tendencia continúe en el futuro. Este aumento en el uso de Internet está creando un mercado creciente para las empresas de comercio electrónico.Tendencias demográficas favorablesMéxico tiene una clase media joven y creciente, que está impulsando el gasto del consumidor y el crecimiento del comercio electrónico. Además, las tendencias demográficas de México, como la urbanización y el aumento de los niveles de educación, están creando un entorno más favorable para el comercio electrónico.
Apoyo gubernamentalEl gobierno mexicano apoya el comercio electrónico y ha implementado políticas para fomentar su crecimiento. Este entorno favorable proporciona un entorno empresarial más estable y predecible para las empresas de comercio electrónico que operan en México.Métodos de pagoLas tarjetas de crédito son el método de pago más utilizado para las transacciones de comercio electrónico en México, seguido de las transferencias bancarias y el pago contra entrega.Productos popularesLas categorías de productos más populares en el mercado mexicano de comercio electrónico son moda y accesorios, electrónica y artículos para el hogar y el jardín.Comienza ahoraPayment MethodsOXXOOXXO is one of the most famous voucher payments in Mexico. People are used to going to convenience stores to pay bills, and also their vouchers for e-commerce purchases. Start to accept OXXO as a payment method and reach more consumers.OXXO PayThe most known payment method in Mexico now with real-time confirmation.Local Credit and Debit CardsAccess to financial services is still growing, and credit card penetration is on the rise in Mexico. Local acquiring can offer better approval rates in Mexico, and you can accept local debit cards.Credit Card InstallmentsWith installments, consumers can split up purchases in 3, 6, 9, and 12 monthly payments depending on the price of the purchase. Offer installments to your Mexican customers and increase average ticket sizes.SPEIWhenever a Mexican wants to make an interbank transfer, they need to use SPEI. The Mexican system for online banking transactions. Allow your customers to pay for their purchases with online bank transfers through SPEI.CryptoThe crypto market is becoming increasingly important in Mexico due to the country&#039;s large population of unbanked individuals, high levels of remittance inflows, and growing interest in digital assets as a hedge against inflation and economic instability. With FacilitaPay, you can make settlement in crypto, on/off ramp solutions and receive your local payments in stablecoins.Digital WalletsThe popularity of digital wallets is increasing in México, mostly due to the benefits offered by them, such as convenience, security, and simplicity to pay. Be ahead of the market and start to offer digital wallets on your e-commerce store.Other Alternative PaymentsMexico has several payment methods besides credit cards. Voucher payments, Oxxo and digital wallets are very common methods used by online consumers.Download our Mexico Country GuideLearn everything you need to know about the eCommerce payments landscape in Mexico in our straight-to-the-point country guide.Download now  Prev - Colombia country pageNext - Brazil country page',
                'created_at' => '2023-05-30 17:58:04',
                'updated_at' => '2023-05-31 18:06:38',
            ),
            9 => 
            array (
                'id' => 20,
                'title' => 'Blockchain',
                'html' => '',
                'css' => '',
                'metatitle' => 'Blockchain',
                'slug' => 'blockchain',
                'metadescription' => 'CRIPTO BLOCKCHAINTenemos la forma más segura y rápida de realizar transacciones a través de blockchain.Desde 2017 supimos que el blockchain revolucionaría el mundo de las finanzas. Nuestro ideal en FacilitaPay es actuar como una herramienta que colaborará con el crecimiento de la infraestructura Web 3.¿Estás en el mundo de las criptomonedas y quieres hacer crecer tu base de clientes en América Latina?Comienza ahora
RECURSOSEn FacilitaPay ofrecemos soluciones prácticas e innovadoras para tu empresa.Liquidación de criptomonedasAcepta pagos en moneda local y recíbelos en USDC, USDT, BTC o ETH.Rieles de On-Ramp y Off-RampLas soluciones de pagos de FacilitaPay te ayudan en el intercambio de fiat a cripto o cripto a fiat. Así de simple.Recibe tus pagos locales en criptomonedasEstablecemos para tu empresa estos pagos en monedas fiduciarias.AlmacenamientoControle sus fondos a través de nuestra solución multidivisa, gestionando toda la custodia desde nuestro dashboard.Prevención del fraudeTecnología patentada que ayuda a prevenir el fraude localmente en América Latina.Altamente configurableAdaptables a cualquier modelo de negocio, nuestros partners pueden desarrollar su negocio basándose en nuestra tecnología.Transacciones transparentes y reguladasEn cumplimiento con los entes y reguladores globales, los partners pueden acceder a datos en todo el mundo.Amigable para desarrolladoresConstruido para ser parte de la tecnología de nuestros partners, tenemos todas las características que se pueden incorporar en otras plataformas.Recursos locales de KYCAyudamos a nuestros partners a integrar a sus usuarios locales a través de nuestra propia plataforma e integrarse en la experiencia del cliente.Comienza a usar pagos de criptomonedas ahora.Ponte en contactoCONFIADO POR LOS GIGANTES DE LA TECNOLOGÍA',
                'created_at' => '2023-05-30 17:58:40',
                'updated_at' => '2023-05-31 18:27:12',
            ),
            10 => 
            array (
                'id' => 21,
                'title' => 'About Us',
                'html' => '',
                'css' => '',
                'metatitle' => 'About Us',
                'slug' => 'about-us',
                'metadescription' => 'SOBRE NOSOTROSSomos un aliado de pagos diferente, porque ganar en mercados emergentes requiere un enfoque aún más eficiente.Let&#039;s talkCareersMás de +1000Métodos de pago disponibles.Más de 290 empresasOperando con nosotros.TPVMás de 6 mil millones de dólares.4 paísesSiendo operados por FacilitaPayNuestra historiaFacilitaPay se creó con un objetivo en mente: cerrar la brecha de innovación de pagos que existe entre los países desarrollados y las economías emergentes. Estamos conectando a empresas de todo el mundo con usuarios en Latinoamérica, a través de los pagos locales. Esto significa que estamos totalmente dedicados a proporcionar una solución de pagos flexible y completa que permita desbloquear nuevos ingresos y maximizar el alcance en los mercados emergentes. Nos sentimos increíblemente honrados de impulsar el crecimiento de algunas de las compañías más visionarias del mundo, que nos inspiran a lograr lo imposible todos los días.Aunque FacilitaPay nació en Brasil, sabíamos que los desafíos de pago locales iban mucho más allá de los países vecinos. Hoy en día, nuestra cobertura de pagos incluye economías emergentes y de alto crecimiento en América Latina, ayudando a empresas basadas en América del Norte, América Latina, Europa, África y Asia. Nuestro equipo multicultural está distribuido entre oficinas en Estados Unidos, Brasil, México, Colombia y Chile, y estamos presentes en todos los países donde procesamos pagos. Estamos creciendo rápidamente y entusiasmados con el futuro que tenemos por delante.
Nuestra historia comenzó en 2017Con un gran objetivo desde el principio, construimos desde cero una institución de pago que está liderando la revolución tecnológica del comercio internacional en América Latina.2017El comienzo3 socios decidieron crear una empresa para revolucionar la industria de pagos en Brasil. En una pequeña oficina y con un equipo de tan solo 4 personas, FacilitaPay se pone en marcha.2018Desarrollo de la integraciónFacilitaPay lanza su solución de pagos totalmente integrada, disponible para que las empresas internacionales accedan al mercado brasileño mediante la recolección y el envío de pagos. Alcanzando más de $ 1 mil millones en TPV.2019Tamaño de la operaciónLlegando a clientes en más de 10 países y alcanzando más de $ 2 mil millones de pagos procesados. FacilitaPay invierte en más tecnología y aumenta su oferta de metodos de pago a más de 50 opciones.2020Aumento de los recursos2020 fue el año en que comenzamos a ir más allá de una plataforma de pago, integrando más funciones relacionadas con la prevención del fraude y más posibilidades de pago, transformando la plataforma de FacilitaPay en una plataforma de código abierto y de payments-as-a-service.2021Operación en MéxicoDespués de 8 meses desarrollando nuestro modelo y nuestra operación en México, comenzamos a operar localmente con 10 clientes corporativos, utilizando las mismas APIs para expandirnos a otro país. Este es solo el comienzo de nuestro plan de expansión.2022Más expansiones en el futuroLa expansión a Colombia y la creación de nuestra red criptográfica como servicio, ayudaron a FacilitaPay a lograr un crecimiento del 350% en 2022, ayudando a más clientes a expandirse a nivel mundial.2023Más crecimiento por venirAl ejecutar más pasos en nuestra hoja de ruta, estamos agregando más corredores de pago a nuestra red soluciones y más capacidades bancarias a nuestra plataforma, ayudando a nuestros clientes en su expansión global a través de nuestra plataforma bancaria. Estamos entusiasmados por lo mucho que seguiremos agregando al mercado.BIENVENIDOS A AMÉRICA LATINAAcepta todos los métodos de pago disponibles en cada paísClick to discover all payment methodsClick to discover all payment methodsClick to discover all payment methodsChile, we are coming.Comienza ahora',
                'created_at' => '2023-05-30 17:59:26',
                'updated_at' => '2023-05-31 18:53:55',
            ),
            11 => 
            array (
                'id' => 22,
                'title' => 'Contact Us',
                'html' => '',
                'css' => '',
                'metatitle' => 'Contact Us',
                'slug' => 'contact',
                'metadescription' => 'ContáctanosNo dudes en contactarnos, ¡nuestro equipo te responderá lo antes posible!NameEmailMessageSend nowInfohello@facilitapay.com+1 855 343 5227+55 31 3195.6300201 S Biscayne Blvd, 12th Floor Miami, Fl 33131CONFIADO POR LOS GIGANTES DE LA TECNOLOGÍA',
                'created_at' => '2023-05-30 18:00:22',
                'updated_at' => '2023-05-31 18:55:02',
            ),
            12 => 
            array (
                'id' => 23,
                'title' => 'Careers',
                'html' => '',
                'css' => '',
                'metatitle' => 'Careers',
                'slug' => 'careers',
                'metadescription' => 'CarrerasEscribe el siguiente capítulo de tu historia con FacilitaPayDesde el comienzo de nuestra historia, hemos reunido a personas comprometidas y dedicadas que sueñan en grande con revolucionar el mercado de pagos. Personas que aceptan hacer historia de sus mejores años profesionales junto a Facilitapay.&quot;Es posible trabajar en el mismo lugar donde cada día me desarrollo, me conozco y me expreso con autenticidad&quot;.Julia BianchettiLÍDER DE BACKOFFICEVacantes disponiblesFacilitaPay es una Fintech global fundada en 2017 con la misión de proporcionar una plataforma de pago que conecta a empresas internacionales de diferentes industrias con sus clientes latinoamericanos, habilitando pagos locales y ayudándolas en la expansión por Latinoamérica.Nuestro equipo está en constante expansión y continuamos buscando talentos para nuestro equipo, ayudando a crear más oportunidades y desarrollando nuevos proyectos con nuestros potenciales clientes.
JOB POSITIONLOCATIONDEPARTMENTDATECorporate DevelopmentRemoteSalesJanuary 1, 2023Compliance OfficerArgentina (Hybrid)DevelopmentJanuary 1, 2023Submit your CV Connect with Linkedin-->',
                'created_at' => '2023-05-30 18:02:41',
                'updated_at' => '2023-05-31 18:56:07',
            ),
            13 => 
            array (
                'id' => 25,
                'title' => 'Submit CV',
                'html' => '',
                'css' => '',
                'metatitle' => 'Submit CV',
                'slug' => 'submit-cv',
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:04:51',
                'updated_at' => '2023-05-30 18:04:51',
            ),
            14 => 
            array (
                'id' => 26,
                'title' => 'Thank You',
                'html' => '',
                'css' => '',
                'metatitle' => 'Thank You',
                'slug' => 'thanks',
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:06:46',
                'updated_at' => '2023-05-30 18:06:46',
            ),
            15 => 
            array (
                'id' => 27,
                'title' => 'Opt in',
                'html' => '',
                'css' => '',
                'metatitle' => 'Opt in',
                'slug' => 'optin',
                'metadescription' => NULL,
                'created_at' => '2023-05-30 18:08:11',
                'updated_at' => '2023-05-30 18:08:11',
            ),
            16 => 
            array (
                'id' => 28,
                'title' => 'Compliance',
                'html' => '',
                'css' => '',
                'metatitle' => 'Compliance',
                'slug' => 'compliance',
                'metadescription' => NULL,
                'created_at' => '2023-06-01 18:41:52',
                'updated_at' => '2023-06-01 18:41:52',
            ),
        ));
        
        
    }
}