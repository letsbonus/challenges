<?php
/**
 * Created by PhpStorm.
 * User: apuig
 * Date: 7/2/16
 * Time: 19:04
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{
    /**
     * @Assert\NotBlank()
     */
    public $attachment;

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }
}