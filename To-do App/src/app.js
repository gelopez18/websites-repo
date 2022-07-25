import $ from '../node_modules/jquery/';

import { NavBar } from './UI/Nav-Bar';

let tb = new NavBar(To-Do);
tb.addlink('Add User', '');
tb.addlink('Add Task','');
tb.addlink('Reports','');
tb.appendToElement($('body'));

