<?php

namespace App\Entity;

use App\Repository\BusinessRepository;
use App\Repository\VisitingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VisitingRepository::class)]
class Visiting
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "bigint")]
    private $id;

    #[ORM\ManyToOne(targetEntity:"Business")]
    private ?Business $business;

    #[ORM\Column(
        name:"created_time",
        type:"datetime",
        nullable:true,
        options:["comment"=>"建立資料時間"]
    )]
    private ?\DateTime $createdTime;

    #[ORM\Column(
        name:"updated_time",
        type:"datetime",
        nullable:true,
        options:["comment"=>"異動資料時間"]
    )]
    private ?\DateTime $updatedTime;

    #[ORM\Column(type:"string", length:20)]
    private ?string $phone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * @param mixed $business
     */
    public function setBusiness($business)
    {
        $this->business = $business;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param \DateTime|null $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

    /**
     * @param \DateTime|null $updatedTime
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;
    }
}
