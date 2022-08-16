export const list=[];
export class Task{
	constructor(record, name, task, date){
		this.name =name;
		this.task = task;
        this.date =date; 
        this.record=record; 
	}
    
 addTaskList(){
    let name = document.getElementById("userCombo").value;
    let task =  document.getElementById("TaskInput").value;


    let date =  new Date();
    let finalDate = `${date.getMonth()}/${date.getDate()}/${date.getFullYear()} @ ${date.getHours()}:${date.getMinutes()}`;
    let recordNumb=1; 

    for (let i =0;i < list.length; i++){
        recordNumb++;
    }
 
    let newTask = new Task(recordNumb, name, task, finalDate);
    list.push(newTask);
    return list;
}    


}
