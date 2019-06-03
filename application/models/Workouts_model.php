<?php
class Workouts_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getWorkouts()
    {
        $query = $this->db->query("select *
  from   workouts");
        $result= $query->result_array();
        return $result;
    }

    public function getWorkout($workoutId)
    {
        $query = $this->db->query("select *
  from  workouts where workouts_id =". $workoutId . " order by weight desc;");
        $result= $query->result_array();
        return $result;
    }

    public function getWorkoutsLeaderboard($workoutId)
    {
        $query = $this->db->query("SELECT pr.weight as pr_weight, user_weight, user_age, date_created, first_name,last_name,username  FROM gym_bros.users_pr pr  left join gym_bros.users users on pr.users_id = users.id
  where workouts_id = ". $workoutId . "");
        $result= $query->result_array();
        return $result;
    }
}
