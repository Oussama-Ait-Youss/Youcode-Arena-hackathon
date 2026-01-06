<?php 
class Tournament
{
    private int $id;
    private int $organizer_id;
    private string $title;
    private string $game_name;
    private ?string $description;
    private string $start_date;
    private int $max_players;
    private ?int $current_round;
    private string $status;
    private string $created_at;
    
    public function __construct(
       
        int $organizer_id,
        string $title,
        string $game_name,
        ?string $description,
        string $start_date,
        int $max_players,
        ?int $current_round,
        string $status,
        string $created_at
    ) {
       
        $this->organizer_id = $organizer_id;
        $this->title = $title;
        $this->game_name = $game_name;
        $this->description = $description;
        $this->start_date = $start_date;
        $this->max_players = $max_players;
        $this->current_round = $current_round;
        $this->status = $status;
        $this->created_at = $created_at;
    }

    public function __get(string $property)
    {
        return $this->$property;
    }
    public function setID($id) {
        $this->id = $id;
    }
}
