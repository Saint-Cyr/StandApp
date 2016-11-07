<?php

namespace StandAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="StandAppBundle\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="StandAppBundle\Entity\Membership", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $membership;

    /**
     * @ORM\ManyToOne(targetEntity="StandAppBundle\Entity\PaymentMode", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $paymentMode;
    
    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;


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
     * Set amount
     *
     * @param float $amount
     *
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Transaction
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set membership
     *
     * @param \StandAppBundle\Entity\Membership $membership
     *
     * @return Transaction
     */
    public function setMembership(\StandAppBundle\Entity\Membership $membership = null)
    {
        $this->membership = $membership;

        return $this;
    }

    /**
     * Get membership
     *
     * @return \StandAppBundle\Entity\Membership
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Set paymentMode
     *
     * @param \StandAppBundle\Entity\PaymentMode $paymentMode
     *
     * @return Transaction
     */
    public function setPaymentMode(\StandAppBundle\Entity\PaymentMode $paymentMode = null)
    {
        $this->paymentMode = $paymentMode;

        return $this;
    }

    /**
     * Get paymentMode
     *
     * @return \StandAppBundle\Entity\PaymentMode
     */
    public function getPaymentMode()
    {
        return $this->paymentMode;
    }
}
