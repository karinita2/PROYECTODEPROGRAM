<?php

namespace App\Repositories;

use App\Rooms;
use DB;
use function Sodium\add;

class EloquentRest implements RoomRepository
{
    /**
     * @var $model
     */
    private $model;

    /**
     * EloquentTask constructor.
     *
     * @param App\Task $model
     */
    public function __construct(Rooms $model)
    {
        $this->model = $model;
    }

    /**
     * Get all tasks.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getRoomTypes()
    {


        try{
            $json = file_get_contents('https://checki.herokuapp.com/api/task/1');
            $obj = json_decode($json);
            $array=array();

            foreach (json_decode($json) as $key=>$value)
            {
                $array[]=
                [
                    'id_room'=>$value->id,
                    'name'=>$value->name,
                    'room_type'=>'Prueba',
                    'availability'=>$value->user_id
                ];
            }

            return response()->json($array);
        } catch(\Exception $e)
        {
            /*
            $search = \Request::get('search');
            $rooms = DB::table('rooms')
                ->leftjoin('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
                ->leftjoin('details','rooms.id_room','=','details.room_id')
                ->leftjoin('reservations','reservations.id_reservation','=','details.reservation_id')
                ->where('rooms.name','like','%'.$search.'%')
                ->orWhere('room_types.room_type','like','%'.$search.'%')
                ->orWhere('rooms.availability','like','%'.$search.'%')
                ->orderBy('id_room','asc')
                ->paginate(5);
            */
            $rooms="Detail";
            return $rooms;


        }




    }

    /**
     * Get task by id.
     *
     * @param integer $id
     *
     * @return App\Task
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a new task.
     *
     * @param array $attributes
     *
     * @return App\Task
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update a task.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return App\Task
     */
    public function update($id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * Delete a task.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}