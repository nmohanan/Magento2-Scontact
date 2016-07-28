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

namespace Suyati\Scontact\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
		$installer = $setup;
		$installer->startSetup();

		/**
		 * Creating table suyati_contacts
		 */
		$table = $installer->getConnection()->newTable(
			$installer->getTable('suyati_contacts')
		)->addColumn(
			'contacts_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
			'Entity Id'
		)->addColumn(
			'name',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => false],
			'Name'
		)->addColumn(
			'email',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => false,'default' => null],
			'Email'
		)->addColumn(
			'mobile',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			15,
			['nullable' => true,'default' => null],
			'Mobile'
		)->addColumn(
			'location',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true,'default' => null],
			'Location'
		)->addColumn(
			'pincode',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			15,
			['nullable' => true,'default' => null],
			'Pincode'
		)->addColumn(
			'comment',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true,'default' => null],
			'Location'
		)->addColumn(
			'created_date',
			\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
			null,
			['nullable' => false],
			'Created Date'
		)->addColumn(
			'updated_date',
			\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
			null,
			['nullable' => true,'default' => null],
			'Updated Date'
		);
		$installer->getConnection()->createTable($table);
		$installer->endSetup();
	}
}