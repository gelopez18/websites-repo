
import { Page } from "../framework/page.js";
import { Button } from "../UI/button.js";

import { textfield } from "../UI/Textfield.js";

export class ToDoPage extends Page{
    constructor(){
        super('Add Task');
    }
    createElement(){
      super.createElement();

      let searchbar = new textfield("Task");
          searchbar.appendToElement(this.element);
   
      let addTask = new Button("Add Task");
      let styleStringAdd = 'btn btn-success btn-lg col-lg-4 col-md-4 col-sm-4';
        addTask.setStyleString(styleStringAdd);
        addTask.appendToElement(this.element);
       

      let emtybtn = new Button(" ");
      let styleStringEmpty = 'btn btn-link col-lg-4  col-md-4 col-sm-4';
        emtybtn.setStyleString(styleStringEmpty);
        emtybtn.appendToElement(this.element);

      let removeTask = new Button("Remove Task");
      let styleStringRemove = 'btn btn-danger btn-lg col-lg-4 col-md-4 col-sm-4';
          removeTask.setStyleString(styleStringRemove);
          removeTask.appendToElement(this.element);
          
    }
    getElementString(){
    
      return '<div class="container text-center"></div>'
    }
}