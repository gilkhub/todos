window.Todos = Ember.Application.create();

Todos.ApplicationAdapter = DS.RESTAdapter.extend({ // REST adapter for our Todo resource
  namespace: 'api/v1', // Our web server has API versioning
  host: 'http://localhost:8000' // Proxy to our Laravel web server
});

Todos.Store = DS.Store.extend({  // Register the new adapter
    adapter: 'Todos.ApplicationAdapter'
 });