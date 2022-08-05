const list=[];
export class Task{
	constructor(name, task, date){
		this.name =name;
		this.task = task;
        this.date =date;
       
	}
    
 addTaskList(){
  
  let name = document.getElementById("userCombo").value
  let task =  document.getElementById("TaskInput").value;
  let date =  Date.now();
  let newTask = new Task(name, task, date)
  list.push(newTask)
   return list;

}    


}
