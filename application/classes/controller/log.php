<?php
/**
 * Log Controller
 *
 * Implements GUI for log view
 */
class Controller_Log extends Controller
{

    /**
     * HTML presentation
     */
    public function action_index()
    {
        Session::instance()->set('log_quota_sended', 0);
        $this->response->body(View::factory('log/index'));
    }
    /**
     * Returns parts of log data in JSON format
     */
    public function action_get()
    {
        $log_quota_sended = Session::instance()->get('log_quota_sended', 0);
        
        $log_quota = Model::factory('log_quota');

        $data = $log_quota->loadPart('id', 'asc', null, $log_quota_sended);

        if (count($data))
        {
            $log_quota_sended = $log_quota_sended + count($data);
            Session::instance()->set('log_quota_sended', $log_quota_sended);
        }

        $this->response->body(json_encode(array(
            'data' => $data,
            'cnt' => $log_quota_sended,
            'all' => $log_quota->countAll()
        )));

    }

    public function action_export()
    {
        //$this->response->headers('Content-Type',  'text/csv');
        $log_quota = Model::factory('log_quota')->loadAll();

        $buffer = fopen('php://temp', 'r+');
        //$buffer = fopen('test.csv', 'a+');

        //header
        fputcsv($buffer, array('ID', 'Date', 'Name', 'Old value', 'New value'));

        foreach($log_quota as $item)
        {
            fputcsv($buffer, $item);
        }

        rewind($buffer);
        $csv = fgets($buffer);

        $this->response->body($csv);
        fclose($buffer);

        //$this->response->headers('Content-Disposition',  'attachment;filename="export.csv"');
    }

    /**
     * Generates fake data
     *
     * Run as: <code>php index.php --uri=log/generate_quota_log</code>
     */
    public function action_generate_quota_log()
    {
        //clear table
        DB::query(Database::DELETE, 'TRUNCATE quota')->execute();

        //generate 100 records
        $query = DB::query(Database::INSERT,
                  'INSERT INTO quota (`name`, `old_value`, `new_value`)
                  VALUES (:name, :old_value, :new_value)')
        ->bind(':name', $name)
        ->bind(':old_value', $old_value)
        ->bind(':new_value', $new_value);
        for($i = 1; $i <= 100; $i++)
        {
            $name = sprintf('name%03d', $i);
            $old_value = $i;
            $new_value = 1001 + $i;
            $query->execute();
        }
    }

}
