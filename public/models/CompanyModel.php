<?php
namespace Web\Model;

class CompanyModel extends \App\Model\System_Model
{
    public function checkIfExists($company)
    {
        $sql= $this->db->prepare("SELECT DISTINCT `name` FROM clients WHERE `name` LIKE '%".$company."%'");
        $sql->execute();

        $data = [];

        foreach($sql as $row)
        {
            $data[] = $row['name'];
        }

        return $data;
    }
}
