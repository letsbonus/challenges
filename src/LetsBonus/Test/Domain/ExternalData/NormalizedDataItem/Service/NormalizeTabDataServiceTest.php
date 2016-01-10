<?php

namespace LetsBonus\Test\Domain\ExternalData\NormalizedDataItem\Service;

use LetsBonus\Domain\ExternalData\NormalizedDataItem\Service\NormalizeDataServiceRequest;
use LetsBonus\Domain\ExternalData\NormalizedDataItem\NormalizedDataItem;
use LetsBonus\Domain\ExternalData\NormalizedDataItem\Service\NormalizeTabDataService;

/**
 * Class NormalizeTabDataServiceTest
 */
class NormalizeTabDataServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldReturnNormalizedDataItemsWhenDataIsReceived()
    {
        $service = new NormalizeTabDataService();
        $normalizedDataItems = $service->normalize(new NormalizeDataServiceRequest($this->getData()));

        $this->assertTrue(count($normalizedDataItems) > 0);
        $this->assertInstanceOf(NormalizedDataItem::class, $normalizedDataItems[0]);
    }

    /**
     * @test
     */
    public function itShouldThrowInvalidArgumentExceptionIfContentIsEmpty()
    {
        $this->setExpectedException(\InvalidArgumentException::class);

        $service = new NormalizeTabDataService();
        $service->normalize(new NormalizeDataServiceRequest(''));
    }

    /**
     * @return string
     */
    private function getData()
    {
        return <<<EOD
item title	item description	item price	item init date	item expiry date	merchant address	merchant name
Reloj Spinnaker Laguna	"<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>"	99.0	2014-10-01T23:59:59+01:00	2014-10-07T23:59:59+01:00	C/Falsa, 123	Joyeria Baguette
Pala de Pádel Dunlop con marco Graphite 100%	"<p>- ¿Tienes un nivel intermedio / avanzado jugando al Pádel? La pala Dunlop Tiger con forma de lágrima oversize es lo que necesitas.<br> - Núcleo fabricado en goma Eva Soft Mega Flex, que proporciona mayor potencia y evita la pérdida de control.&nbsp;<br> - La pala pesa 360-380gr y viene acompañada por una funda individual Dunlop.</p>"	49.0	2014-10-07T23:59:59+01:00	2014-10-14T23:59:59+01:00	Helm Street 123	Deportes Placídia
Reloj Spinnaker Laguna Pro tech	"<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>"	199.0	2014-10-01T23:59:59+01:00	2019-10-07T23:59:59+01:00	C/Falsa, 123	Joyeria Baguette
EOD;
    }
}
