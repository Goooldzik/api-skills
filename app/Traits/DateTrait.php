<?php


namespace App\Traits;


trait DateTrait
{
    public function getCreatedAt()
    {
        return $this->created_at->format('d-m-Y H:i');
    }
}
