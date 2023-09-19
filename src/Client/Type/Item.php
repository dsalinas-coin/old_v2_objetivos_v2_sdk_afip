<?php

namespace App\Client\Type;

class Item
{

    /**
     * @var string
     */
    private $Pro_codigo = null;

    /**
     * @var string
     */
    private $Pro_ds = null;

    /**
     * @var float
     */
    private $Pro_qty = null;

    /**
     * @var int
     */
    private $Pro_umed = null;

    /**
     * @var float
     */
    private $Pro_precio_uni = null;

    /**
     * @var float
     */
    private $Pro_bonificacion = null;

    /**
     * @var float
     */
    private $Pro_total_item = null;

    /**
     * @return string
     */
    public function getPro_codigo()
    {
        return $this->Pro_codigo;
    }

    /**
     * @param string $Pro_codigo
     * @return Item
     */
    public function withPro_codigo($Pro_codigo)
    {
        $new = clone $this;
        $new->Pro_codigo = $Pro_codigo;

        return $new;
    }

    /**
     * @return string
     */
    public function getPro_ds()
    {
        return $this->Pro_ds;
    }

    /**
     * @param string $Pro_ds
     * @return Item
     */
    public function withPro_ds($Pro_ds)
    {
        $new = clone $this;
        $new->Pro_ds = $Pro_ds;

        return $new;
    }

    /**
     * @return float
     */
    public function getPro_qty()
    {
        return $this->Pro_qty;
    }

    /**
     * @param float $Pro_qty
     * @return Item
     */
    public function withPro_qty($Pro_qty)
    {
        $new = clone $this;
        $new->Pro_qty = $Pro_qty;

        return $new;
    }

    /**
     * @return int
     */
    public function getPro_umed()
    {
        return $this->Pro_umed;
    }

    /**
     * @param int $Pro_umed
     * @return Item
     */
    public function withPro_umed($Pro_umed)
    {
        $new = clone $this;
        $new->Pro_umed = $Pro_umed;

        return $new;
    }

    /**
     * @return float
     */
    public function getPro_precio_uni()
    {
        return $this->Pro_precio_uni;
    }

    /**
     * @param float $Pro_precio_uni
     * @return Item
     */
    public function withPro_precio_uni($Pro_precio_uni)
    {
        $new = clone $this;
        $new->Pro_precio_uni = $Pro_precio_uni;

        return $new;
    }

    /**
     * @return float
     */
    public function getPro_bonificacion()
    {
        return $this->Pro_bonificacion;
    }

    /**
     * @param float $Pro_bonificacion
     * @return Item
     */
    public function withPro_bonificacion($Pro_bonificacion)
    {
        $new = clone $this;
        $new->Pro_bonificacion = $Pro_bonificacion;

        return $new;
    }

    /**
     * @return float
     */
    public function getPro_total_item()
    {
        return $this->Pro_total_item;
    }

    /**
     * @param float $Pro_total_item
     * @return Item
     */
    public function withPro_total_item($Pro_total_item)
    {
        $new = clone $this;
        $new->Pro_total_item = $Pro_total_item;

        return $new;
    }


}

