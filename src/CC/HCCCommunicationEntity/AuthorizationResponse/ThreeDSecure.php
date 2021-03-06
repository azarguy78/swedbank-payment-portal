<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\AuthorizationResponse;

use Jms\Serializer\Annotation;

/**
 * The container for 3D secure.
 *
 * @Annotation\AccessType("public_method")
 */
class ThreeDSecure
{
    /**
     * The 3-D Secure Access Control Server (ACS) URL to which the cardholder is to be redirected so that they can go
     * through the authentication process.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("acs_url")
     */
    private $acsUrl;

    /**
     * The encoded Payment Authentication Request (PaReq).
     *
     * In order for the Cardholder to authenticate themselves with their issuer, the merchant will need to pass
     * the “pareq” to the Cardholder browsers so that they can be redirected to the issuers ACS page.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("pareq_message")
     */
    private $pareqMessage;

    /**
     * ThreeDSecure constructor.
     *
     * @param string $acsUrl
     * @param string $pareqMessage
     */
    public function __construct($acsUrl, $pareqMessage)
    {
        $this->acsUrl = $acsUrl;
        $this->pareqMessage = $pareqMessage;
    }

    /**
     * AcsUrl getter.
     *
     * @return string
     */
    public function getAcsUrl()
    {
        return $this->acsUrl;
    }

    /**
     * AcsUrl setter.
     *
     * @param string $acsUrl
     */
    public function setAcsUrl($acsUrl)
    {
        $this->acsUrl = $acsUrl;
    }

    /**
     * PareqMessage getter.
     *
     * @return string
     */
    public function getPareqMessage()
    {
        return $this->pareqMessage;
    }

    /**
     * PareqMessage setter.
     *
     * @param string $pareqMessage
     */
    public function setPareqMessage($pareqMessage)
    {
        $this->pareqMessage = $pareqMessage;
    }
}
