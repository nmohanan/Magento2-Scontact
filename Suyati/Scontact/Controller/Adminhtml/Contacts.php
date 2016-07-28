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
namespace Suyati\Scontact\Controller\Adminhtml;

abstract class Contacts extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $resultForwardFactory;
    protected $resultRedirectFactory;
    /**
     * @var \Magento\Framework\App\Response\Http\FileFactory
     */
    protected $_fileFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory,
        \Magento\Framework\App\Response\Http\FileFactory $fileFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->_fileFactory = $fileFactory;
        $this->resultForwardFactory = $resultForwardFactory;
        $this->resultRedirectFactory = $context->getResultRedirectFactory();
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Suyati_Scontact::contact_manage');
    }

    protected function _initAction()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu(
            'Suyati_Scontact::contact_manage'
        )->_addBreadcrumb(
            __('Scontact'),
            __('Contacts')
        );
        return $this;
    }
}
