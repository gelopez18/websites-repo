import { BaseElement } from "../UI/base-element.js";
import { Button } from "../UI/button.js";
import { textfield } from "../UI/Textfield.js";

export class ToDoPage extends BaseElement{
    constructor(){
        super();
    }
    createElement(){
      super.createElement();
      let searchbar = new textfield("Task");
        searchbar.appendToElement(this.element);

      let addTask = new Button("Add Button");
      let styleString = 'width: 300px; height: 80px; '
        addTask.setStyleString(styleString);
        addTask.appendToElement(this.element);

      let removeTask = new Button("Remove Task");
          removeTask.setStyleString(styleString);
          removeTask.appendToElement(this.element);
      

    }
    getElementString(){
      return '<div style="text-align: center;"></div>'
    }
}