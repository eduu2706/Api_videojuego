<?php

class Controller_Items extends Controller_Rest
{

//FUNCION MOSTRAR TODOS LOS ITEMS REGISTRADOS (PARAMETROS REQUERIDOS: TOKEN)-------------------------------------------------

    public function get_items()
    {
        if($this->verificar())
        {
            $item = Model_Items::find('all');
            return $item;
        }
    }

//FUNCION CREAR ITEM (PARAMETROS REQUERIDOS: NAME, DESCRIPTION, PRIZE AND IMAGE)---------------------------------------------

    public function post_create()
    	{
    		$item = new Model_Items();

    		$name = Input::post('name');
    		$description = Input::post('description');
    		$prize = Input::post('prize');
    		$image = Input::post('image');

            $item->name = $name;
            $item->description = $description;
            $item->prize = $prize;
            $item->image = $image;


            	if (empty($name) or empty($description)or empty($prize) or empty($image))
            	{
            		return $this->response(array('Faltan campos'));
            		 
            	}
            	else 
            	{
            		try
            		{
            			$item->save();
            			return $this->response(array('Item Creado'));
            		}
            		catch(exception $e)
            		{
            			print('Item ya existente');
            		}
            	}
        }

}


















