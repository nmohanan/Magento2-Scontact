<?php
/*!
 * http://suyati.com/
 * Suyati_Scontact 2.0.0
 * Copyright (C) 2016, Suyati Technologies
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
   You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
*/


namespace Suyati\Scontact\Block\Contacts;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $dateTime;

    /**
     * @var \Suyati\Scontact\Model\ContactsFactory
     */
    protected $contactsFactory;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Stdlib\DateTime $dateTime,
        \Suyati\Scontact\Model\ContactsFactory $contactsFactory,
        array $data = []
    )
    {
        $this->dateTime = $dateTime;
        $this->contactsFactory = $contactsFactory;
        parent::__construct($context, $data);
    }

    
    

    public function getSeverities()
    {
        return \Suyati\Scontact\Model\Contacts::getSeveritiesOptionArray();
    }
}
