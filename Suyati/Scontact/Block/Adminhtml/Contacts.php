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

   
namespace Suyati\Scontact\Block\Adminhtml;

class Contacts extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml';
        $this->_blockGroup = 'Suyati_Scontact';
        $this->_headerText = __('Contacts');

        parent::_construct();

        $this->removeButton('add');
    }
}
