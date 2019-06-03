<?php
class Workouts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Workouts_model');
        $this->load->helper('url_helper');
    }
    public function getWorkouts()
    {
        $workouts = $this->Workouts_model->getWorkouts();
        echo json_encode(array('results' => $workouts));
    }
    public function getWorkout($workoutId)
    {
        $workouts = $this->Workouts_model->getWorkout($workoutId);
        echo json_encode(array('results' => $workouts));
    }

    public function getWorkoutsLeaderboard($workoutId)
    {
        $workouts = $this->Workouts_model->getWorkoutsLeaderboard($workoutId);
        echo json_encode(array('results' => $workouts));
    }
}
