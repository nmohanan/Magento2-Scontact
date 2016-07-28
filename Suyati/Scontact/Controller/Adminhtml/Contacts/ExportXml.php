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

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Filesystem\DirectoryList;

class ExportXml extends \Suyati\Scontact\Controller\Adminhtml\Contacts
{
    /**
     * Export contacts grid to XML format
     *
     * @return ResponseInterface
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $fileName = 'contacts.xml';
        $content = $this->_view->getLayout()->getChildBlock('admin.block.scontact.contacts.grid', 'grid.export');
        return $this->_fileFactory->create(
            $fileName,
            $content->getExcelFile($fileName),
            DirectoryList::VAR_DIR
        );
    }
}
