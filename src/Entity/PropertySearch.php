<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;


class PropertySearch
{
    /**
     * @var int|null
     */
    Private $maxPrice;

    /**
     * @var int|null
     * @Assert\Range(min=10, max=500)
     */
    private $minSurface;

    /**
     * @var ArrayCollection
     */
    private $options;

    /**
     * @var integer|null
     */
    private $distance;

    /**
     * @var float|null
     */
    private $lat;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var float|null
     */
    private $lng;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @param int|null $minSurface
     * @return PropertySearch
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getOptions(): ArrayCollection
    {
        return $this->options;
    }

    /**
     * @param ArrayCollection $option
     */
    public function setOptions(ArrayCollection $options): void
    {
        $this->options = $options;
    }

    /**
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    /**
     * @param int|null $distance
     */
    public function setDistance(?int $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return float|null
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * @param float|null $lat
     */
    public function setLat(?float $lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return float|null
     */
    public function getLng(): ?float
    {
        return $this->lng;
    }

    /**
     * @param float|null $lng
     */
    public function setLng(?float $lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }


}