<?php
/**
 * Prepare the test setup.
 */
namespace Horde\SessionHandler\Storage\Sql\Pdo;
use Horde_SessionHandler_Storage_Sql_Base as Base;
use \Horde_Test_Factory_Db;

require_once dirname(__FILE__) . '/../Base.php';

/**
 * Copyright 2012-2017 Horde LLC (http://www.horde.org/)
 *
 * @author     Jan Schneider <jan@horde.org>
 * @category   Horde
 * @package    SessionHandler
 * @subpackage UnitTests
 * @license    http://www.horde.org/licenses/lgpl21 LGPL 2.1
 */
class SqliteTest extends Base
{
    public static function setUpBeforeClass(): void
    {
        $factory_db = new Horde_Test_Factory_Db();

        try {
            self::$db = $factory_db->create();
            parent::setUpBeforeClass();
        } catch (Horde_Test_Exception $e) {
            self::$reason = 'Sqlite not available';
       }
    }
}
