<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_self_description", type="text", length=65535, nullable=true)
     */
    private $userSelfDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login", type="string", length=64, nullable=false)
     */
    private $userLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=45, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=128, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=32, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_last_name", type="string", length=64, nullable=false)
     */
    private $userLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_document_id", type="string", length=20, nullable=false)
     */
    private $userDocumentId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_gender", type="integer", nullable=false)
     */
    private $userGender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_birth_date", type="date", nullable=false)
     */
    private $userBirthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="user_photo", type="text", length=65535, nullable=false)
     */
    private $userPhoto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_registered_date", type="date", nullable=false)
     */
    private $userRegisteredDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_registered_time", type="time", nullable=false)
     */
    private $userRegisteredTime;

    /**
     * @var float
     *
     * @ORM\Column(name="user_total_score", type="float", precision=10, scale=0, nullable=false)
     */
    private $userTotalScore;

    /**
     * @var string
     *
     * @ORM\Column(name="user_contact_phone", type="string", length=15, nullable=false)
     */
    private $userContactPhone;
	
	/**
	 * @return int
	 */
	public function getUserId()
	{
		return $this->userId;
	}
	
	/**
	 * @param int $userId
	 */
	public function setUserId($userId)
	{
		$this->userId = $userId;
	}

	
	/**
	 * @return null|string
	 */
	public function getUserSelfDescription()
	{
		return $this->userSelfDescription;
	}
	
	/**
	 * @param null|string $userSelfDescription
	 */
	public function setUserSelfDescription($userSelfDescription)
	{
		$this->userSelfDescription = $userSelfDescription;
	}
	
	/**
	 * @return string
	 */
	public function getUserLogin()
	{
		return $this->userLogin;
	}
	
	/**
	 * @param string $userLogin
	 */
	public function setUserLogin($userLogin)
	{
		$this->userLogin = $userLogin;
	}
	
	/**
	 * @return string
	 */
	public function getUserPassword()
	{
		return $this->userPassword;
	}
	
	/**
	 * @param string $userPassword
	 */
	public function setUserPassword($userPassword)
	{
		$this->userPassword = $userPassword;
	}
	
	/**
	 * @return string
	 */
	public function getUserEmail()
	{
		return $this->userEmail;
	}
	
	/**
	 * @param string $userEmail
	 */
	public function setUserEmail($userEmail)
	{
		$this->userEmail = $userEmail;
	}
	
	/**
	 * @return string
	 */
	public function getUserName()
	{
		return $this->userName;
	}
	
	/**
	 * @param string $userName
	 */
	public function setUserName($userName)
	{
		$this->userName = $userName;
	}
	
	/**
	 * @return string
	 */
	public function getUserLastName()
	{
		return $this->userLastName;
	}
	
	/**
	 * @param string $userLastName
	 */
	public function setUserLastName($userLastName)
	{
		$this->userLastName = $userLastName;
	}
	
	/**
	 * @return string
	 */
	public function getUserDocumentId()
	{
		return $this->userDocumentId;
	}
	
	/**
	 * @param string $userDocumentId
	 */
	public function setUserDocumentId($userDocumentId)
	{
		$this->userDocumentId = $userDocumentId;
	}
	
	/**
	 * @return int
	 */
	public function getUserGender()
	{
		return $this->userGender;
	}
	
	/**
	 * @param int $userGender
	 */
	public function setUserGender($userGender)
	{
		$this->userGender = $userGender;
	}
	
	/**
	 * @return DateTime
	 */
	public function getUserBirthDate()
	{
		return $this->userBirthDate;
	}
	
	/**
	 * @param DateTime $userBirthDate
	 */
	public function setUserBirthDate($userBirthDate)
	{
		$this->userBirthDate = $userBirthDate;
	}
	
	/**
	 * @return string
	 */
	public function getUserPhoto()
	{
		return $this->userPhoto;
	}
	
	/**
	 * @param string $userPhoto
	 */
	public function setUserPhoto($userPhoto)
	{
		$this->userPhoto = $userPhoto;
	}
	
	/**
	 * @return DateTime
	 */
	public function getUserRegisteredDate()
	{
		return $this->userRegisteredDate;
	}
	
	/**
	 * @param DateTime $userRegisteredDate
	 */
	public function setUserRegisteredDate($userRegisteredDate)
	{
		$this->userRegisteredDate = $userRegisteredDate;
	}
	
	/**
	 * @return DateTime
	 */
	public function getUserRegisteredTime()
	{
		return $this->userRegisteredTime;
	}
	
	/**
	 * @param DateTime $userRegisteredTime
	 */
	public function setUserRegisteredTime($userRegisteredTime)
	{
		$this->userRegisteredTime = $userRegisteredTime;
	}
	
	/**
	 * @return float
	 */
	public function getUserTotalScore()
	{
		return $this->userTotalScore;
	}
	
	/**
	 * @param float $userTotalScore
	 */
	public function setUserTotalScore($userTotalScore)
	{
		$this->userTotalScore = $userTotalScore;
	}
	
	/**
	 * @return string
	 */
	public function getUserContactPhone()
	{
		return $this->userContactPhone;
	}
	
	/**
	 * @param string $userContactPhone
	 */
	public function setUserContactPhone($userContactPhone)
	{
		$this->userContactPhone = $userContactPhone;
	}


}
