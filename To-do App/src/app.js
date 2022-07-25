import 'https://code.jquery.com/jquery-3.6.0.min.js'
import ApplicationBase from './framework/application-base.js';

window.$ = $;
window.jQuery = jQuery;

export class App extends ApplicationBase{
    constructor(){
        super('To-Do App');
        this.addRoute('Add User', null);
        this.addRoute('Add Task',new toDoPage, true);
        this.addRoute('Report',null)

    }
   
}
export let application = new App();
application.show($('body'));
application.NavBar.appendToElement($('body'));