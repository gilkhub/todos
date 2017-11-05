// A helper to get focus on the new todo input the user clicked on

Todos.TodosView = Ember.View.extend({
	focusInput: function() {
		this.$('#new-todo').focus();
	}.on('didInsertElement')
});