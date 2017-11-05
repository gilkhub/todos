Todos.Router.map(function() {
  this.resource('todos', { path: '/' });
});

// A route for a single Todo resoruce (REST)
Todos.TodosRoute = Ember.Route.extend({
    model: function () {
        return this.store.find('todo');
    }
});

// A route for index / show all Todo resources (REST)
Todos.TodosIndexRoute = Ember.Route.extend({
    setupController: function () {
        this.controllerFor('todos').set('model', this.modelFor('todos'));
    }
});