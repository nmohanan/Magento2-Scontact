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
namespace Suyati\Scontact\Controller\Adminhtml\Contacts;

class Index extends \Suyati\Scontact\Controller\Adminhtml\Contacts
{
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $resultForward = $this->resultForwardFactory->create();
            $resultForward->forward('grid');
            return $resultForward;
        }
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu('Suyati_Scontact::contact_manage');
        $resultPage->getConfig()->getTitle()->prepend(__('Contacts'));

        $resultPage->addBreadcrumb(__('Contacts'), __('Contacts'));
        $resultPage->addBreadcrumb(__('Manage Contacts'), __('Manage Contacts'));

        return $resultPage;
    }
}
