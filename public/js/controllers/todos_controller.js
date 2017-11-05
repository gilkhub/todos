Todos.TodosController = Ember.ArrayController.extend({
  remaining: function() {
    return this.filterBy('isCompleted', false).get('length');
  }.property('@each.isCompleted'),

  completed: function() {
    return this.filterBy('isCompleted', true).get('length');
  }.property('@each.isCompleted'),

  total: function() {
    return this.get('remaining') + this.get('completed');
  }.property('remaining', 'completed'),

  actions: {
    createTodo: function() {
      // Get the todo title set by the "New Todo" text field
      var title = this.get('newTitle');
      if (!title.trim()) { return; }

      // Create the new Todo model
      var todo = this.store.createRecord('todo', {
        title: title,
        isCompleted: false
      });

      // Clear the "New Todo" text field
      this.set('newTitle', '');

      // Save the new model
      todo.save();
    }
  }
});