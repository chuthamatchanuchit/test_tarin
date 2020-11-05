<?php
class train extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function tee_insert($data)
    {
        $this->db->insert('procession', $data);
    }

    function insert1($data)
    {
        $this->db->insert('theorigin', $data);
    }

    function insert2($data)
    {
        $this->db->insert('huayrach', $data);
    }

    function insert3($data)
    {
        $this->db->insert('destination', $data);
    }



    function show()
    {
        $result = $this->db->select('*')
           ->from('procession')
           ->join('theorigin', 'theorigin.id = procession.id')
            ->join('huayrach', 'huayrach.id = procession.id')
            ->join('destination', 'destination.id = procession.id')

         ->where('theorigin.outtime >=6')

            ->get();
        return $result;
    }
}
