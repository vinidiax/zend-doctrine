<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score", indexes={@ORM\Index(name="FK_score_user_id_idx", columns={"from_user_id"}), @ORM\Index(name="FC_score_to_user_id_idx", columns={"to_user_id"})})
 * @ORM\Entity
 */
class Score
{
    /**
     * @var int
     *
     * @ORM\Column(name="score_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scoreId;

    /**
     * @var int
     *
     * @ORM\Column(name="score_value", type="integer", nullable=false)
     */
    private $scoreValue;

    /**
     * @var string
     *
     * @ORM\Column(name="score_description", type="string", length=45, nullable=false)
     */
    private $scoreDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="score_date", type="date", nullable=false)
     */
    private $scoreDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="score_time", type="time", nullable=false)
     */
    private $scoreTime;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_user_id", referencedColumnName="user_id")
     * })
     */
    private $toUser;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_user_id", referencedColumnName="user_id")
     * })
     */
    private $fromUser;
	
	/**
	 * @return int
	 */
	public function getScoreId()
	{
		return $this->scoreId;
	}
	
	/**
	 * @param int $scoreId
	 */
	public function setScoreId($scoreId)
	{
		$this->scoreId = $scoreId;
	}
	
	/**
	 * @return int
	 */
	public function getScoreValue()
	{
		return $this->scoreValue;
	}
	
	/**
	 * @param int $scoreValue
	 */
	public function setScoreValue($scoreValue)
	{
		$this->scoreValue = $scoreValue;
	}
	
	/**
	 * @return string
	 */
	public function getScoreDescription()
	{
		return $this->scoreDescription;
	}
	
	/**
	 * @param string $scoreDescription
	 */
	public function setScoreDescription($scoreDescription)
	{
		$this->scoreDescription = $scoreDescription;
	}
	
	/**
	 * @return DateTime
	 */
	public function getScoreDate()
	{
		return $this->scoreDate;
	}
	
	/**
	 * @param DateTime $scoreDate
	 */
	public function setScoreDate($scoreDate)
	{
		$this->scoreDate = $scoreDate;
	}
	
	/**
	 * @return DateTime
	 */
	public function getScoreTime()
	{
		return $this->scoreTime;
	}
	
	/**
	 * @param DateTime $scoreTime
	 */
	public function setScoreTime($scoreTime)
	{
		$this->scoreTime = $scoreTime;
	}
	
	/**
	 * @return User
	 */
	public function getToUser()
	{
		return $this->toUser;
	}
	
	/**
	 * @param User $toUser
	 */
	public function setToUser($toUser)
	{
		$this->toUser = $toUser;
	}
	
	/**
	 * @return User
	 */
	public function getFromUser()
	{
		return $this->fromUser;
	}
	
	/**
	 * @param User $fromUser
	 */
	public function setFromUser($fromUser)
	{
		$this->fromUser = $fromUser;
	}


}
