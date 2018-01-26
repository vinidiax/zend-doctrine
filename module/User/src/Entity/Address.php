<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 */
class Address
{
    /**
     * @var int
     *
     * @ORM\Column(name="address_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressId;

    /**
     * @var string
     *
     * @ORM\Column(name="address_street", type="string", length=128, nullable=false)
     */
    private $addressStreet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="address_number", type="integer", nullable=true)
     */
    private $addressNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_complement", type="string", length=256, nullable=true)
     */
    private $addressComplement;

    /**
     * @var string
     *
     * @ORM\Column(name="address_neighbothood", type="string", length=64, nullable=false)
     */
    private $addressNeighbothood;

    /**
     * @var int
     *
     * @ORM\Column(name="address_zipcode", type="integer", nullable=false)
     */
    private $addressZipcode;

    /**
     * @var int
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     */
    private $cityId;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;
	
	/**
	 * @return int
	 */
	public function getAddressId()
	{
		return $this->addressId;
	}
	
	/**
	 * @param int $addressId
	 */
	public function setAddressId($addressId)
	{
		$this->addressId = $addressId;
	}
	
	/**
	 * @return string
	 */
	public function getAddressStreet()
	{
		return $this->addressStreet;
	}
	
	/**
	 * @param string $addressStreet
	 */
	public function setAddressStreet($addressStreet)
	{
		$this->addressStreet = $addressStreet;
	}
	
	/**
	 * @return int|null
	 */
	public function getAddressNumber()
	{
		return $this->addressNumber;
	}
	
	/**
	 * @param int|null $addressNumber
	 */
	public function setAddressNumber($addressNumber)
	{
		$this->addressNumber = $addressNumber;
	}
	
	/**
	 * @return null|string
	 */
	public function getAddressComplement()
	{
		return $this->addressComplement;
	}
	
	/**
	 * @param null|string $addressComplement
	 */
	public function setAddressComplement($addressComplement)
	{
		$this->addressComplement = $addressComplement;
	}
	
	/**
	 * @return string
	 */
	public function getAddressNeighbothood()
	{
		return $this->addressNeighbothood;
	}
	
	/**
	 * @param string $addressNeighbothood
	 */
	public function setAddressNeighbothood($addressNeighbothood)
	{
		$this->addressNeighbothood = $addressNeighbothood;
	}
	
	/**
	 * @return int
	 */
	public function getAddressZipcode()
	{
		return $this->addressZipcode;
	}
	
	/**
	 * @param int $addressZipcode
	 */
	public function setAddressZipcode($addressZipcode)
	{
		$this->addressZipcode = $addressZipcode;
	}
	
	/**
	 * @return int
	 */
	public function getCityId()
	{
		return $this->cityId;
	}
	
	/**
	 * @param int $cityId
	 */
	public function setCityId($cityId)
	{
		$this->cityId = $cityId;
	}
	
	/**
	 * @return int
	 */
	public function getStateId()
	{
		return $this->stateId;
	}
	
	/**
	 * @param int $stateId
	 */
	public function setStateId($stateId)
	{
		$this->stateId = $stateId;
	}
	
	/**
	 * @return int
	 */
	public function getCountryId()
	{
		return $this->countryId;
	}
	
	/**
	 * @param int $countryId
	 */
	public function setCountryId($countryId)
	{
		$this->countryId = $countryId;
	}


}
