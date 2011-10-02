<?php
/*
 CREATE TABLE `quota` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` VARCHAR( 250 ) NOT NULL ,
    `ts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `old_value` VARCHAR( 250 ) NOT NULL ,
    `new_value` VARCHAR( 250 ) NOT NULL
    ) ENGINE = INNODB;
 */
/**
 * Model for Quota change log
 */
class Model_Log_Quota extends Model
{
    const PAGE_SIZE = 5;

    /**
     * Load all data from log
     *
     * @return array Records
     */
    public function loadAll()
    {
        return DB::select()
            ->from('quota')
            ->order_by('id', 'asc')
            ->execute()
            ->as_array();
    }

    /**
     * Load delta for log viewer
     *
     * @param string $order order sorting
     * @param string $dir direction sorting
     * @param array $filter
     * @param int $sended
     * @return array Records
     */
    public function loadPart($order = 'id', $dir = 'asc', $filter = null, $sended = 0)
    {
        return DB::select()
            ->from('quota')
            ->order_by($order, $dir)
            ->limit(self::PAGE_SIZE)
            ->offset($sended)
            ->execute()
            ->as_array();
    }

    /**
     * Gets count of log records
     * @return integer
     */
    public function countAll()
    {
        return DB::select(array(DB::expr('COUNT(*)'), 'total'))
            ->from('quota')
            ->execute()
            ->get('total');
    }
}