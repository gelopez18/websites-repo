import 'https://code.jquery.com/jquery-3.6.0.min.js'
import ApplicationBase from './framework/application-base.js';

window.$ = $;
window.jQuery = jQuery;

export class App extends ApplicationBase{
    constructor(){
        super('To-Do App');
    }
   
}
export let application = new App();
application.show($('body'));
application.NavBar.addlink('Add User', '');
application.NavBar.addlink('Add Task','');
application.NavBar.addlink('Reports','');
application.NavBar.appendToElement($('body'));