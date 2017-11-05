<?php

class Todo extends Eloquent {
  protected $primaryKey = 'id'; // Primary key for the table is 'id'

  protected $fillable = array('title', 'isCompleted'); // table columns
}