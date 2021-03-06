<?php

namespace SwedbankPaymentPortal\CC\HPSCommunicationEntity\HPSQueryResponse\RiskResponse;

use Jms\Serializer\Annotation;

/**
 * The container for the screening information.
 *
 * @Annotation\AccessType("public_method")
 */
class RiskResponse
{
    /**
     * The container for the screening response.
     *
     * @var ScreeningResponse
     *
     * @Annotation\SerializedName("screening_response")
     * @Annotation\Type(
     *     "SwedbankPaymentPortal\CC\HPSCommunicationEntity\HPSQueryResponse\RiskResponse\ScreeningResponse"
     * )
     */
    private $screeningResponse;

    /**
     * RiskResponse constructor.
     *
     * @param ScreeningResponse $screeningResponse
     */
    public function __construct(ScreeningResponse $screeningResponse)
    {
        $this->screeningResponse = $screeningResponse;
    }

    /**
     * ScreeningResponse getter.
     *
     * @return ScreeningResponse
     */
    public function getScreeningResponse()
    {
        return $this->screeningResponse;
    }

    /**
     * ScreeningResponse setter.
     *
     * @param ScreeningResponse $screeningResponse
     */
    public function setScreeningResponse($screeningResponse)
    {
        $this->screeningResponse = $screeningResponse;
    }
}
