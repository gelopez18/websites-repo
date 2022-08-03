import 'https://code.jquery.com/jquery-3.6.0.min.js'

import ApplicationBase from './framework/application-base.js';
import { AddUser } from './pages/Add-User-Pg.js';
import { ToDoPage } from './pages/To-Do-Page.js';

window.$ = $;
window.jQuery = jQuery;

export class App extends ApplicationBase{
    constructor(){
        super('To-Do App');
        this.addRoute('Add Task',new ToDoPage(), true);
        this.addRoute('Add User', new AddUser());        
        this.addRoute('Report', null);
    }
   
}

export let application = new App();
application.show($('body'));

