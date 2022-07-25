import 'https://code.jquery.com/jquery-3.6.0.min.js'
import { NavBar } from './UI/Nav-Bar.js';
window.$ = $;
window.jQuery = jQuery;

let tb = new NavBar("To-Do App");
tb.addlink('Add User', '');
tb.addlink('Add Task','');
tb.addlink('Reports','');
tb.appendToElement($('body'));

