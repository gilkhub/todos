<?php
 
class TodoTableSeeder extends Seeder {
 
  public function run()
  {
  	for ($letter = 'A'; $letter < 'I'; $letter++)
  	{
  		$todo = Todo::create(array(
  			'title' => 'משימה '.implode(array($letter)),
  			'isCompleted' => (bool)random_int(0, 1)
  		));
  	}
  }

}