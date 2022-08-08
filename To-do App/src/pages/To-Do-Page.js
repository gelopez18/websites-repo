
import { Page } from "../framework/page.js";
import { Button } from "../UI/button.js";
import { textfield } from "../UI/Textfield.js";
import { Combox } from "../UI/combox.js";
import { list, Task } from "../classes/tasks.js";
import { Table } from "../UI/Table.js";
import { UserList } from "../classes/user-Info.js";
import { Hr } from "../UI/hr.js";


export class ToDoPage extends Page{
    constructor(){
        super('Add Task');
    }

    createElement(){
      super.createElement();
      let userData = (UserList);
      let headers = ['Date','name', 'task'];  

        

        let space = new Hr();
          space.appendToElement(this.element);

        let searchbar = new textfield("Task", "TaskInput");
          searchbar.appendToElement(this.element);

        let userCombo = new Combox(userData, 'userCombo');
          userCombo.appendToElement(this.element);
        
          space.appendToElement(this.element);
        let addTask = new Button("Add Task");
        let styleStringAdd = 'btn btn-success btn-lg col-lg-4 col-md-4 col-sm-4';
          addTask.setStyleString(styleStringAdd);
          addTask.setType('su')
          addTask.appendToElement(this.element);

            
            addTask.element.click(()=>{ 

              let newObj = new Task();

                newObj.addTaskList();

              document.getElementById("userCombo").value="";
              document.getElementById("TaskInput").value="";
                addTable();
            }) 
            
      let styleStringEmpty = 'btn btn-link col-lg-4  col-md-4 col-sm-4';
        let emtybtn = new Button("");
          emtybtn.setStyleString(styleStringEmpty);
          emtybtn.appendToElement(this.element);
      let styleStringRemove = 'btn btn-danger btn-lg col-lg-4 col-md-4 col-sm-4';
        let removeTask = new Button("Remove Task");
      
          removeTask.setStyleString(styleStringRemove);
          removeTask.appendToElement(this.element);

          space.appendToElement(this.element);
      let hr = new Hr('border border-primary border-3 opacity-75');
          hr.appendToElement(this.element);
          space.appendToElement(this.element);
          function addTable(){
            let TaskTable = new Table(headers, list);
             TaskTable.appendToElement(this.element);
                getElementString(){
                  return '<div class="container text-center"></div>'
                }
          } 
    }
    getElementString(){
      return '<div class="container text-center"></div>'
    }
    
}
 