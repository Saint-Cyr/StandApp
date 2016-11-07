<?php

namespace StandAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Membership
 *
 * @ORM\Table(name="membership")
 * @ORM\Entity(repositoryClass="StandAppBundle\Repository\MembershipRepository")
 */
class Membership extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=255, nullable=true)
     */
    private $phoneNumber;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;
    
    /**
     * @ORM\ManyToOne(targetEntity="StandAppBundle\Entity\MembershipCategory", inversedBy="memberships")
     * @ORM\JoinColumn(nullable=true)
     */
    private $membershipCategory;
    
    /**
     * @ORM\OneToMany(targetEntity="StandAppBundle\Entity\Transaction", mappedBy="membership")
     */
    private $transactions;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;
    
    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Membership
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Membership
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->transactions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set membershipCategory
     *
     * @param \StandAppBundle\Entity\MembershipCategory $membershipCategory
     *
     * @return Membership
     */
    public function setMembershipCategory(\StandAppBundle\Entity\MembershipCategory $membershipCategory)
    {
        $this->membershipCategory = $membershipCategory;

        return $this;
    }

    /**
     * Get membershipCategory
     *
     * @return \StandAppBundle\Entity\MembershipCategory
     */
    public function getMembershipCategory()
    {
        return $this->membershipCategory;
    }

    /**
     * Add transaction
     *
     * @param \StandAppBundle\Entity\Transaction $transaction
     *
     * @return Membership
     */
    public function addTransaction(\StandAppBundle\Entity\Transaction $transaction)
    {
        $this->transactions[] = $transaction;

        return $this;
    }

    /**
     * Remove transaction
     *
     * @param \StandAppBundle\Entity\Transaction $transaction
     */
    public function removeTransaction(\StandAppBundle\Entity\Transaction $transaction)
    {
        $this->transactions->removeElement($transaction);
    }

    /**
     * Get transactions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Membership
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
