<?php
namespace Web\Model;

class TicketsModel extends \App\Model\System_Model
{
    public function getTickets( $employee_id )
    {
        $tickets = [];
        $query = "SELECT * FROM tickets WHERE assigned_to = ? AND `status` != 'completed'";
        $sql = $this->db->prepare($query);
        $sql->execute([$employee_id]);
        $sql->fetchAll(\PDO::FETCH_ASSOC);
        if($sql->rowCount() <= 0)
        {
            return "No results found.";
        } else {
            foreach($sql as $row)
            {
                $tickets[] = $row;
            }
            return $tickets;
        }
    }


    public function getAllTickets()
    {
        $query = "SELECT * FROM tickets";
        $sql = $this->db->prepare($query);
        $sql->execute();
        $sql->fetchAll(\PDO::FETCH_ASSOC);
        if($sql->rowCount() <= 0)
        {
            return "No results found.";
        } else {
            foreach($sql as $row)
            {
                $tickets[] = $row;
            }
            return $tickets;
        }
    }

    public function countTickets($eid, String $status = '*')
    {
        // Count all tickets for given employee
        if($status != '*')
        {
            $query = "SELECT COUNT(*) AS total FROM tickets WHERE `assigned_to` = ? AND `status` = ?";
            $sql = $this->db->prepare($query);
            $sql->execute([$eid, "$status"]);
        } else {
            $query = "SELECT COUNT(*) AS total FROM tickets WHERE `assigned_to` = ?";
            $sql = $this->db->prepare($query);
            $sql->execute([$eid]);
        }

        foreach($sql as $rows)
        {
            return $rows['total'];
        }
        
    }

    public function countTicketsDueToday($eid)
    {

        $query = "SELECT COUNT(*) AS total FROM tickets WHERE `due_date` >= CURRENT_DATE AND `assigned_to` = ?";
        $sql = $this->db->prepare($query);
        $sql->execute([$eid]);
        
        foreach($sql as $rows)
        {
            return $rows['total'];
        }
        
    }

    public function countTicketsOverdue($eid)
    {
        $query = "SELECT COUNT(*) AS total FROM tickets WHERE `due_date` < CURRENT_DATE AND `assigned_to` = ?";
        $sql = $this->db->prepare($query);
        $sql->execute([$eid]);

        foreach($sql as $rows)
        {
            return $rows['total'];
        }
        
    }

    public function countAllTickets(String $status = '*')
    {
        // Count all tickets company-wide
        if($status != '*')
        {
            $query = "SELECT COUNT(`status`) AS total FROM tickets WHERE `status` = ?";
            $sql = $this->db->prepare($query);
            $sql->execute([$status]);
        } else {
            $query = "SELECT COUNT(`status`) AS total FROM tickets";
            $sql = $this->db->prepare($query);
            $sql->execute();
        }
        
        return $sql->rowCount();
    }

    public function getStatus( $ticket_id )
    {
        $query = "SELECT `status` FROM tickets WHERE tid = ?";
        $sql = $this->db->prepare($query);
        $sql->execute([$ticket_id]);
        $sql->fetchAll(\PDO::FETCH_ASSOC);
        if($sql->rowCount() <= 0)
        {
            return "No results found.";
        } 
            
        return $sql;
    }

    public function getFirstResponseDueBy( $ticket_id )
    {

    }

    public function getDueBy( $ticket_id )
    {

    }

    public function createTicket( String $created_by, String $priority )
    {
        $now = time();  // Current Unix timestamp
        $format = $this->plugin('formatter');

        $firstresponse = ((int)$this->config->setting('first_response_due') * 360) + $now;
        $firstresponsestamp = $format->mysql_datetime($firstresponse);
        $duedate = $this->config->setting( $priority.'_priority_limit');
        $duedatestamp = $format->mysql_datetime($duedate);
        $datesubmitted = $format->mysql_datetime($now);

        $query = "INSERT INTO `tickets`(`tid`, `date_submitted`, `submitted_by`, `status`, `assigned_to`, `first_response_due`, `due_date`, `date_completed`, `priority`)
         VALUES(?,?,?,?,?,?,?,?,?)";
        $sql = $this->db->prepare($query);
        $sql->execute([
            time(),
            "$datesubmitted",
            "$created_by",
            "unassigned",
            "",
            "$firstresponsestamp",
            "$duedatestamp",
            "",
            "$priority"
        ]);
    }

}
