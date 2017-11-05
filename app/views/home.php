
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>משימות</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <script type="text/x-handlebars" data-template-name="todos">
      <section id="todoapp">
        <header id="header">
          <div>
            {{input
            type="text"
            id="new-todo"
            placeholder="משימות"
            value=newTitle
            action="createTodo"}}
          </div>
            <div>
              <button id="plus-sign">&oplus;</button>
            </div>
        </header>

        <section id="main">
          <ol id="todo-list">
            {{#each todo in model itemController="todo"}}
              <li {{bind-attr class="todo.isCompleted:completed"}}>
                {{#if todo.isEditing}}
                  {{edit-todo class="edit" value=todo.title focus-out="acceptChanges" insert-newline="acceptChanges"}}
                {{else}}
                  <div id="meta-container">
                    {{input
                      type="checkbox"
                      checked=todo.isCompleted
                      class="toggle"}}

                    <label {{action "editTodo" on="doubleClick"}}>{{todo.title}}</label>
                  </div>
                
                <div>
                  <button {{action "removeTodo"}} class="destroy">X</button>
                </div>
                {{/if}}
              </li>
            {{/each}}
          </ol>
        </section>

        <footer id="footer">
          <span id="todo-count">
            <div>
              לסיום: <strong>{{remaining}}</strong>
            </div>
            <div>
              הושלמו: <strong>{{completed}}</strong>
            </div>
            <div>
              סה"כ: <strong>{{total}}</strong>
            </div>
          </span>
        </footer>
      
      </section>
    
    </script>

    <!-- ... Ember.js and other javascript dependencies ... -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/handlebars/handlebars.js"></script>
    
    <!-- <script src="bower_components/ember/ember.js"></script> --> <!-- Ember's Producation mode -->
    <script src="bower_components/ember/ember.debug.js"></script> <!-- Ember's Debug / Development mode -->
    
    <script src="bower_components/ember/ember-template-compiler.js"></script>
    <script src="bower_components/ember-data/ember-data.js"></script>
    <script src="js/libs/localstorage_adapter.js"></script>

    <!-- ... Ember.js inner-app dependencies ... -->
    <script src="js/application.js"></script>
    
    <script src="js/router.js"></script>

    <script src="js/models/todo.js"></script>

    <script src="js/controllers/todos_controller.js"></script>
    <script src="js/controllers/todo_controller.js"></script>

    <script src="js/views/edit_todo_view.js"></script>
  </body>
</html>